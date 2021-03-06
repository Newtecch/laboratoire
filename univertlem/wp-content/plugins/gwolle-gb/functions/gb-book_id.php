<?php


// No direct calls to this script
if ( strpos($_SERVER['PHP_SELF'], basename(__FILE__) )) {
	die('No direct calls allowed!');
}


/*
 * Uses intermittent meta_key to determine the post ID. See functions/gb-post-meta.php and gwolle_gb_set_meta_keys().
 *
 * @param int book_id integer of the guestbook ID. Not required for backwards compatibility, but suggested to use the parameter.
 * @return int postid if found, else 0.
 */
function gwolle_gb_get_postid( $book_id = 1 ) {

	$the_query = new WP_Query( array(
		'post_type'           => 'any',
		'ignore_sticky_posts' => true, // do not use sticky posts.
		'meta_query'          => array(
			array(
				'key'   => 'gwolle_gb_read',
				'value' => 'true',
			),
			array(
				'key'   => 'gwolle_gb_book_id',
				'value' => $book_id,
			),
		),
		'update_post_term_cache' => false,
		'update_post_meta_cache' => false
	));

	if ( $the_query->have_posts() ) {
		while ( $the_query->have_posts() ) : $the_query->the_post();
			$postid = get_the_ID();
			return $postid;
			break; // only one postid is needed.
		endwhile;
		wp_reset_postdata();
	}

	return 0;
}


/*
 * Uses intermittent meta_key to determine the post ID. See functions/gb-post-meta.php and gwolle_gb_set_meta_keys().
 *
 * @return int postid if found, else 0.
 *
 * @since 2.4.0
 */
function gwolle_gb_get_postid_biggest_book() {

	$postids = gwolle_gb_get_books();
	if ( is_array($postids) && ! empty($postids) ) {

		if ( count( $postids ) == 1 ) {
			return $postids[0]; // just one guestbook, return it.
		}

		$books = array();
		$totals = array();
		foreach ( $postids as $postid ) {
			$bookid = (int) get_post_meta( $postid, 'gwolle_gb_book_id', true );
			if ( empty( $bookid ) ) {
				continue;
			}
			$key = 'gwolle_gb_frontend_pagination_book_' . $bookid;
			$entries_total = (int) get_transient( $key );
			if ( false === $entries_total ) {
				$entries_total = gwolle_gb_get_entry_count(
					array(
						'checked' => 'checked',
						'trash'   => 'notrash',
						'spam'    => 'nospam',
						'book_id' => $bookid
					)
				);
				set_transient( $key, $entries_total, DAY_IN_SECONDS );
			}
			$book = array();
			$book['postid'] = $postid;
			$book['bookid'] = $bookid;
			$book['entries_total'] = $entries_total;
			$books[] = $book;
			$totals[] = $entries_total;
		}

		// First check what the biggest total is, then find the post_id that belongs to it.
		rsort( $totals );

		foreach ( $books as $book ) {
			if ( $book['entries_total'] == $totals[0] ) {
				return $book['postid'];
			}
		}
	}

	return 0;
}


/*
 * Uses intermittent meta_key to determine the post IDs. See functions/gb-post-meta.php and gwolle_gb_set_meta_keys().
 *
 * @return array with post IDs that contain a guestbook.
 *
 * @since 2.4.0
 */
function gwolle_gb_get_books() {

	$the_query = new WP_Query( array(
		'post_type'           => 'any',
		'ignore_sticky_posts' => true, // do not use sticky posts.
		'meta_query'          => array(
			array(
				'key'   => 'gwolle_gb_read',
				'value' => 'true',
			),
		),
		'update_post_term_cache' => false,
		'update_post_meta_cache' => false
	));

	$postids = array();
	if ( $the_query->have_posts() ) {
		while ( $the_query->have_posts() ) : $the_query->the_post();
			$postids[] = get_the_ID();
		endwhile;
		wp_reset_postdata();
	}

	return $postids;
}


/*
 * Get all books and corresponding permalinks.
 *
 * @return array with post IDs, book IDS and permalinks that contain a guestbook.
 *
 * @since 2.6.0
 */
function gwolle_gb_get_permalinks() {
	$postids = gwolle_gb_get_books();
	$books = array();

	/* Build up all the permalinks for the books. */
	foreach ( $postids as $postid ) {
		$permalink = get_permalink( $postid );

		if ( empty( $permalink ) ) {
			continue;
		}

		$book_id = get_post_meta( $postid, 'gwolle_gb_book_id', true );
		if ( empty( $book_id ) ) {
			continue;
		}

		$books["$book_id"] = array(
			'post_id'   => $postid,
			'book_id'   => $book_id,
			'permalink' => $permalink
		);
	}
	return $books;
}
