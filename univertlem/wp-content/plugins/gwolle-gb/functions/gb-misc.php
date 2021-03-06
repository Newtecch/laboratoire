<?php


// No direct calls to this script
if ( strpos($_SERVER['PHP_SELF'], basename(__FILE__) )) {
	die('No direct calls allowed!');
}


/*
 * Taken from wp-admin/includes/template.php touch_time()
 * Adapted for simplicity.
 *
 * @param object $entry instance of the class gb_entry
 */
function gwolle_gb_touch_time( $entry ) {
	global $wp_locale;

	$date = $entry->get_datetime();
	if ( !$date ) {
		$date = current_time('timestamp');
	}

	$dd = date( 'd', $date );
	$mm = date( 'm', $date );
	$yy = date( 'Y', $date );
	$hh = date( 'H', $date );
	$mn = date( 'i', $date );

	// Day
	echo '<label><span class="screen-reader-text">' . esc_html__( 'Day', 'gwolle-gb' ) . '</span><input type="text" id="dd" name="dd" value="' . $dd . '" size="2" maxlength="2" autocomplete="off" /></label>';

	// Month
	echo '<label for="mm"><span class="screen-reader-text">' . esc_html__( 'Month', 'gwolle-gb' ) . '</span><select id="mm" name="mm">\n';
	for ( $i = 1; $i < 13; $i = $i +1 ) {
		$monthnum = zeroise($i, 2);
		echo "\t\t\t" . '<option value="' . $monthnum . '" ' . selected( $monthnum, $mm, false ) . '>';
		/* translators: 1: month number (01, 02, etc.), 2: month abbreviation */
		echo sprintf( esc_html__( '%1$s-%2$s', 'gwolle-gb' ), $monthnum, $wp_locale->get_month_abbrev( $wp_locale->get_month( $i ) ) ) . "</option>\n";
	}
	echo '</select></label>';

	// Year
	echo '<label for="yy"><span class="screen-reader-text">' . esc_html__( 'Year', 'gwolle-gb' ) . '</span><input type="text" id="yy" name="yy" value="' . $yy . '" size="4" maxlength="4" autocomplete="off" /></label>';
	echo '<br />';
	// Hour
	echo '<label for="hh"><span class="screen-reader-text">' . esc_html__( 'Hour', 'gwolle-gb' ) . '</span><input type="text" id="hh" name="hh" value="' . $hh . '" size="2" maxlength="2" autocomplete="off" /></label>:';
	// Minute
	echo '<label for="mn"><span class="screen-reader-text">' . esc_html__( 'Minute', 'gwolle-gb' ) . '</span><input type="text" id="mn" name="mn" value="' . $mn . '" size="2" maxlength="2" autocomplete="off" /></label>';
	?>

	<div class="gwolle_gb_timestamp">
		<!-- Clicking OK will place a timestamp here. -->
		<input type="hidden" id="gwolle_gb_timestamp" name="gwolle_gb_timestamp" value="" />
	</div>

	<p>
		<a href="#" class="gwolle_gb_save_timestamp hide-if-no-js button" title="<?php esc_attr_e('Save the date and time', 'gwolle-gb'); ?>">
			<?php esc_html_e('Save Date', 'gwolle-gb'); ?>
		</a>
		<a href="#" class="gwolle_gb_cancel_timestamp hide-if-no-js button-cancel" title="<?php esc_attr_e('Cancel saving date and time', 'gwolle-gb'); ?>">
			<?php esc_html_e('Cancel', 'gwolle-gb'); ?>
		</a>
	</p>
	<?php
}


/*
 * Use a custom field name for the form fields that are different for each website.
 *
 * @param string field name of the requested field.
 * @return string hashed fieldname or fieldname, prepended with gwolle_gb.
 *
 * @since 2.4.1
 */
function gwolle_gb_get_field_name( $field ) {

	if ( ! in_array( $field, array( 'name', 'city', 'email', 'website', 'honeypot', 'honeypot2', 'nonce', 'custom', 'timeout', 'timeout2' ) ) ) {
		return 'gwolle_gb_' . $field;
	}

	$blog_url = get_bloginfo('wpurl');
	$key = 'gwolle_gb_' . $field . '_field_name_' . $blog_url;
	$field_name = get_transient( $key );
	if ( false === $field_name ) {
		$field_name = wp_hash( $key, 'auth' );
		set_transient( $key, $field_name, DAY_IN_SECONDS );
	}
	$field_name = 'gwolle_gb_' . $field_name;

	return $field_name;
}
