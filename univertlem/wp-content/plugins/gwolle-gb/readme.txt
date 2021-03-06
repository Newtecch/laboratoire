=== Gwolle Guestbook ===
Contributors: Gwolle, mpol
Tags: guestbook, guest book, livre d'or, Gästebuch, review
Requires at least: 3.7
Tested up to: 4.9
Stable tag: 2.6.5
License: GPLv2 or later

Gwolle Guestbook is the WordPress guestbook you've just been looking for. Beautiful and easy.


== Description ==

Gwolle Guestbook is the WordPress guestbook you've just been looking for. Beautiful and easy.
Gwolle Guestbook is not just another guestbook for WordPress. The goal is to provide an easy and slim way to integrate a guestbook into your WordPress powered site. Don't use your 'comment' section the wrong way - install Gwolle Guestbook and have a real guestbook.


Current features include:

* Easy to use guestbook frontend with a simple form for visitors of your website.
* List of guestbook entries at the frontend with pagination or infinite scroll.
* Widget to display an excerpt of your last or your best entries.
* Simple and clean admin interface that integrates seamlessly into WordPress admin.
* Dashboard Widget to easily manage the latest entries from your Admin Dashboard.
* Easy Import from other guestbooks into Gwolle Guestbook.
* Notification by mail when a new entry has been posted.
* Moderation, so that you can check an entry before it is visible in your guestbook (optional).
* 7 anti-spam features, like Honeypot, Nonce, Form Timeout, Akismet, Stop Forum Spam, Custom Quiz Question and CAPTCHA.
* Simple Form Builder to select which form-fields you want to use.
* Simple Entry Builder with the parts of each entry that you want to show.
* Multiple guestbooks are possible.
* MultiSite is supported.
* Localization. Own languages can be added very easily through [GlotPress](https://translate.wordpress.org/projects/wp-plugins/gwolle-gb).
* Admins can add a reply to each entry.
* A log for each entry, so that you know which member of the staff released and edited a guestbook-entry to the public and when.
* IP-address and host-logging with link to WHOIS query site.
* RSS Feed.
* BBcode, Emoji and Smiley integration (optional).
* Easy uninstall routine for complete removal of all database changes.

... and all that integrated in the stylish WordPress look.

= Import / Export =

You may have another guestbook installed. That's great, because Gwolle Guestbook enables you to import entries easily.
The importer does not delete any of your data, so you can go back to your previous setup without loss of data, if you want to.
Trying Gwolle Guestbook is as easy as 1-2-3.

Import is supported from:

* DMSGuestbook.
* WordPress comments from a specific post, page or just all comments.
* Gwolle Guestbook itself, with Export supported as well (CSV-file).

= Support =

If you have a problem or a feature request, please post it on the plugin's support forum on [wordpress.org](https://wordpress.org/support/plugin/gwolle-gb). I will do my best to respond as soon as possible.

If you send me an email, I will not reply. Please use the support forum.

= Translations =

Translations can be added very easily through [GlotPress](https://translate.wordpress.org/projects/wp-plugins/gwolle-gb).
You can start translating strings there for your locale. They need to be validated though, so if there's no validator yet, and you want to apply for being validator (PTE), please post it on the support forum.
I will make a request on make/polyglots to have you added as validator for this plugin/locale.

= Demo =

Check out the demo at [http://demo.zenoweb.nl](http://demo.zenoweb.nl/wordpress-plugins/gwolle-gb/).

= Add-On =

Gwolle Guestbook: The Add-On is the add-on for Gwolle Guestbook that gives extra functionality for your guestbook.

Current features include:

* Meta Fields. Add any field you want; company, phone number, you name it.
* Social Media Sharing (optional).
* Star Ratings, with voting and display and Rich Snippets for SEO (optional).
* Average star rating per guestbook.
* Preview for the frontend form.
* Preview for the admin editor form.
* Admin reply on the frontend with AJAX.
* Report Abuse.
* Easy String Replacement in the default text so you can make this guestbook into a review section or anything you want.
* Delete button in each entry for the moderator and author (optional).
* Permalink button in each entry for easy access (optional).
* Email button to contact each author (optional).
* Sitemap support for popular SEO/Sitemap plugins.
* Auto Anonymize timer (optional).
* Auto Delete timer (optional).

You can buy the Add-On at [Mojo Marketplace](http://www.mojomarketplace.com/item/gwolle-gb-add-on) for only $ 9.

= Demo with Add-On =

Check out the demo with the Add-On enabled at [http://demo.zenoweb.nl](http://demo.zenoweb.nl/wordpress-plugins/gwolle-guestbook-the-add-on/).


== Installation ==

= Installation =

* Install the plugin through the admin page "Plugins".
* Alternatively, unpack and upload the contents of the zipfile to your '/wp-content/plugins/' directory.
* Activate the plugin through the 'Plugins' menu in WordPress.
* Place '[gwolle_gb]' in a page. That's it.

As an alternative for the shortcode, you can use the function `show_gwolle_gb();` to show the guestbook in your templates.
It couldn't be easier.

= Updating from an old version =

With version 1.0 there have been some changes:

* Gwolle Guestbook uses the Shortcode API now. Make sure your Guestbook page uses '[gwolle_gb]' instead of the old one.
* The entries that are visible to visitors have changed. Make sure to check if you have everything visible that you want and nothing more.
* CSS has changed somewhat. If you have custom CSS, you want to check if it still applies.

= License =

The plugin itself is released under the GNU General Public License. A copy of this license can be found at the license homepage or
in the gwolle-gb.php file at the top.

= Hooks: Actions and Filters =

There are many hooks available in this plugin. Documentation is included in the zip file in /docs/actions and /docs/filters. Examples are included. If you have a need for a hook, please request this in the support forum.

= Add an entry with PHP code =

It is not that hard to add an entry in PHP code.

	<?php
		$entry = new gwolle_gb_entry();

		// Set the data in the instance, returns true
		$set_data = $entry->set_data( $args );

		// Save entry, returns the id of the entry
		$save = $entry->save();
	?>

The Array $args can have the following key/values:

* id, int with the id, leave empty for a new entry.
* author_name, string with the name of the autor.
* author_id, id with the WordPress user ID of the author.
* author_email, string with the email address of the author.
* author_origin, string with the city of origin of the author.
* author_website, string with the website of the author.
* author_ip, string with the ipaddress of the author.
* author_host, string with the hostname of that ip.
* content, string with content of the message.
* datetime, timestamp of the entry.
* ischecked, bool if it is checked by a moderator.
* checkedby, int with the WordPress ID of that moderator.
* istrash, bool if it is in trash or not.
* isspam, bool if it is spam or not.
* admin_reply, string with content of the admin reply message.
* admin_reply_uid, id with the WordPress user ID of the author of the admin_reply.
* book_id, int with the Book ID of that entry, default is 1.


= Format for importing through CSV-file =

The importer expects a certain format of the CSV-file. If you need to import from a custom solution, your CSV needs to conform.
The header needs to look like this:

	<?php
	array(
		'id',
		'author_name',
		'author_email',
		'author_origin',
		'author_website',
		'author_ip',
		'author_host',
		'content',
		'datetime',
		'isspam',
		'ischecked',
		'istrash',
		'admin_reply',
		'book_id',
		'meta_fields'
	)
	?>

The next lines are made up of the content.

There are some gotchas:

* Date needs to be a UNIX timestamp. For manually creating a timestamp, look at the [timestamp generator](http://www.timestampgenerator.com/). When using a formatted date, the plugin will try to read it correctly. If it fails it will use today's date.
* Use commas for field separators. If you use Office software like Excel (which is hell) or LibreOffice Calc, set this correctly.
* Use double quotes around each field. When no quotes are used the import process can break when having quotes or commas inside the content of the entry.
* The file should be encoded as UTF-8 without BOM to correctly enter special characters.
* Make sure you use UNIX line-endings. Any decent text-editor can transform a textdocument (CSV file) to UNIX line-endings.

With version 1.4.1 and older, the field datetime was called date.

You could make a test-entry, export that, and look to see what the importer expects from the CSV.
There is also an example CSV file included in the zipfile of the plugin under '/docs/import_example/'.


== Frequently Asked Questions ==

= How do I get people to post messages in my guestbook? =

You could start by writing the first entry yourself, and invite people to leave a message.

= Which entries are visible on the Frontend? =

Starting with version 1.0, the following entries are listed on the Frontend:

* Checked
* Not marked as Spam
* Not in the Trash

Before that, in 0.9.7, all the 'checked' entries were visible.

= I have a lot of unchecked entries. What do I do? =

* For the entries that you consider spam, but were not automatically marked as spam, you can manually mark them as spam, and they will not be visible anymore.
* For entries that are not spam, but you still don't want them visible, you can move them to trash.
* The entries that you want visible, set them to checked.

= I want to translate this plugin =

Translations can be added very easily through [GlotPress](https://translate.wordpress.org/projects/wp-plugins/gwolle-gb).
You can start translating strings there for your locale.
They need to be validated though, so if there's no validator yet, and you want to apply for being validator (PTE), please post it on the support forum.
I will make a request on make/polyglots to have you added as validator for this plugin/locale.

= What about Spam? =

By default this plugin uses a Honeypot feature and a Nonce. If spambots try to post guestbook entries this should work sufficiently.

If you still have problems there are more options:

* Honeypot feature: Hidden input field that only spambots would fill in.
* Nonce: Will verify if you really loaded the page with the form first, before posting an entry. Spambots will just submit the form without having a Nonce.
* Form Timeout: If the form was sent in too fast after loading the page, the entry will be marked as spam.
* Akismet: Third party spamfilter by Automattic. Works really well, but not everybody likes to use a third party service.
* Stop Forum Spam: Third party spamfilter. Again, works really well, but not everybody likes to use a third party service.
* Custom Anti-Spam question: Use a simple quiz question to test if you are human.
* CAPTCHA: Fill in numbers and letters from an image. This should be your last resort, since it has bad usability and will scare off some visitors.

= I already use WP-SpamShield =

WP-SpamShield is a general plugin for anti-spam that supports the general WordPress forms and many plugins.
Activating WP-SpamShield will disable the anti-spam features in Gwolle Guestbook and all anti-spam will be handled by WP-SpamShield.
If you don’t want to use WP-SpamShield’s protection for Gwolle Guestbook, then all you need to do is disable Anti-Spam for Miscellaneous Forms in WP-SpamShield settings.

= I enabled the CAPTCHA, but I don't see it in the form. =

The CAPTCHA uses the one provided by the [Really Simple Captcha plugin](https://wordpress.org/plugins/really-simple-captcha/).
Please install and activate that plugin.

If it still doesn't show, it could be that the plugin has no write permission in the '/tmp' folder of the Really Simple Captcha plugin.
Please fix this in your install.

= How can I use Multiple Guestbooks? =

You can add a parameter to the shortcode, like:

	[gwolle_gb book_id="2"]

This will make that page show all the entries in Book ID 2.

If you use the template function, you can use it like this:

	show_gwolle_gb( array('book_id'=>2) );

= With multiple guestbooks, how do I keep track? =

There is no need to use id's that are incrementing.
If you have a lot of guestbooks on lots of pages, you can just use the id of the post as the id of the guestbook. That way you won't have double id's.
You can set the book_id automatically to the post_id with this shortcode:

	[gwolle_gb book_id="post_id"]

= I only want to show one entry. =

You can use a shortcode parameter for showing just one entry:

	[gwolle_gb_read entry_id="213"]

= I don't see the labels in the form. =

This plugin doesn't apply any CSS to the label elements. It is possible that your label elements have a white color on a white background.
You can check this with the Inspector in your browser. If that is the case, you have a theme or plugin that is applying that CSS to your
label elements. Please contact them.

= I don't get a notification email. =

First check your spambox in your mailaccount.

Second, on the settingspage you can change the From address for the email that is sent.
Sometimes there are problems sending it from the default address, so this is a good thing to change to a real address.

There are also several SMTP plugins, where you can configure a lot of settings for email.

If it still doesn't work, request the maillog at your hosting provider, or ask if they can take a look.

= I want to show the form and the list on different pages =

There are different shortcodes that you can use.
Instead of the '[gwolle_gb]' shortcode, you can use '[gwolle_gb_write]' for just the form, and '[gwolle_gb_read]' for the list of entries.

There is also a widget that can display the latest entries in a widget area, that has many options.
Alternatively you can use the shortcode '[gwolle_gb_widget]' to display the latest entries in widget layout. Parameters are:

* book_id, int with an ID.
* num_entries, int with the shown number of messages.
* num_words, int with the shown number of words per entry.

= I want to show the form immediately, without the button =

The shortcodes '[gwolle_gb]' and '[gwolle_gb_write]' have a parameter for the button.
You can use them as '[gwolle_gb button="false"]' or '[gwolle_gb_write button="true"]', to deviate from the default.

= Moderation is enabled, but my entry is marked as checked =

If a user with capability of 'moderate_comments' posts an entry, it will be marked as checked by default, because he can mark it as checked anyway.

= Moderation is disabled, but some entries are still unchecked =

There is validation of the length of words in the content and author name.
If the words are too long and it looks abusive, it will be marked as unchecked. A moderator will still be needed to manually edit and check these entries.

= On the form I see text meant for screen-readers. =

Your theme is missing some necessary CSS for '.screen-reader-text'. Please contact the maker of your theme.
More information can be found in the [Handbook](https://make.wordpress.org/accessibility/handbook/markup/the-css-class-screen-reader-text/) about Accessibility.

= When opening the RSS Feed, I get a Error 404 =

You can refresh your rewrite rules, by going to Settings / Permalinks, and save your permalinks again.
This will most likely add the rewrite rule for the RSS Feed.

= I use a caching plugin, and my entries are not visible after posting =

When you have moderation disabled, Gwolle Guestbook will try to refresh the cache.
If it doesn't on your setup, please let me know which caching plugin you use, and support for it might be added.

You can also refresh or delete your cache manually. Most caching plugins offer support for that.

= I use a Multi-Lingual plugin =

There are 2 settings that you need to pay attention to. If you saved the settings for the form tab, you should save an
empty header and notice text. It will fill in the default there after saving, but that is okay.
As long as you saved an empty option, or it is still not-saved, then it will show the translated text from your MO file.

Also, you will want to use the book_id parameter of the shortcode for multiple guestbook.

= I use a theme with AJAX =

Using a theme with AJAX navigation can give issues. Only on the guestbook page is the JavaScript and CSS loaded.
So you would need to load it on every page to have it available for the guestbook. You can add the following code to functions.php of your theme:

	<?php
	function my_gwolle_gb_register() {
		wp_enqueue_script('gwolle_gb_frontend_js');
		wp_enqueue_style('gwolle_gb_frontend_css');
	}
	add_action('wp_enqueue_scripts', 'my_gwolle_gb_register', 20);
	?>

= I use the Autoptimize plugin =

The frontend scripts will only be loaded on the Guestbook page, so they won't be added to autoptimize.
You can add 'gwolle_gb_frontend' to both the comma-separated JS and CSS autoptimization exclusion list. That way it will still be loaded right.
On the autoptimize settings page, you might have to click on "show advanced settings"-button top-right first. More info on troubleshooting in AO's FAQ.

= What capabilities are needed? =

For moderating comments you need the capability 'moderate_comments'.

For managing options you need the capability 'manage_options'.

= Can I override a template? =

You can look at 'frontend/gwolle_gb-entry.php', and copy it to your theme folder. Then it will be loaded by the plugin.
Make sure you keep track of changes in the default templatefile though.

= What hooks are available for customization? =

There are many hooks available in this plugin. Documentation is included in the zip file in /docs/actions and /docs/filters. Examples are included.
If you have a need for an additional hook, please request this in the support forum.

= I want to change the word Guestbook into something else. =

First, this plugin is a guestbook. If you want to use it for a different usecase, you will need to do that in code.
Take a look at the previous question about hooks.
You are probably wanting to use the hooks for 'gwolle_gb_write' and 'gwolle_gb_button'.

This question gets asked a lot. You can also take a look at the [support forum](https://wordpress.org/support/topic/change-button-text-20/). Also, the add-on has options for text changes.

= Should I really not use WordPress comments for a guestbook? =

Sure you can if you want to. In my personal opinion however it can be a good thing to keep comments and guestbook entries separated.
So if you already have a blog with comments, the guestbook entries might get lost in there, and keeping a separate guestbook can be good.
But if you don't use standard comments, you can just as easily use the comment section for a guestbook.


== Screenshots ==

1. Frontend View of the list of guestbook entries. On top the button that will show the form when clicked. Then pagination. Then the list of entries.
2. Widget with different options.
3. Main Admin Page with the overview panel, so that you easily can see what's the overall status.
4. List of guestbook entries. The icons display the status of an entry.
5. The Editor for a single entry. The Actions are using AJAX. There is a log of each entry what happened to this entry.
6. Settings Page. This is the first tab where you can select which parts of the form to show and use.
7. Dashboard Widget with new and unchecked entries.


== Changelog ==

= 2.6.5 =
* 2018-09-23
* Better CSS for Microsoft browsers.

= 2.6.4 =
* 2018-09-23
* Add CSS for screen-readers for broken themes.

= 2.6.3 =
* 2018-09-07
* Better test if akismet is active.
* Set timeout check from 7s to 4s.
* Break email address in entries list as well.
* Better CSS colors in admin overview.
* Add support for Dark Mode beta plugin.

= 2.6.2 =
* 2018-07-19
* Fix form for "button = false" forms.
* Don't replace author URL and email with anything (follow WP core 4.9.8).

= 2.6.1 =
* 2018-07-09
* Add screen-reader-text to frontend metabox.
* Hide 'hide this form' button when form was visible on page load.
* Add a filter for button class 'gwolle_gb_button_class'.
* Add 'no_email' parameter to 'gwolle_gb_get_entries' function.
* Add second parameter $entry to filter for mail body notifications.
* Admin entries page, change label to ID column.
* Fix compatibility with Add-On version 1.0.0 till 1.1.2.
* Updates for Add-On 1.2.1.

= 2.6.0 =
* 2018-06-11
* Add option to permanently remove IP address and hostname from entries.
* Add cancel button for the form.
* Close metabox again after click event.
* Remove %ip% from default notice text.
* Add example text to the privacy policy.
* Refactor link to privacy policy.
* Included real fix for not handling form data on some installs.
* Show on editor if author was logged in or not.
* Add log message to mail notification with writing time like on editor.
* Add guestbook entries to WordPress personal data exporter.
* Add guestbook entries to WordPress personal data eraser.
* Add anonymize option to mass edit.
* Add 'gwolle_gb_privacy_anonymize_entry' function.
* Add 'gwolle_gb_get_permalinks' function.
* Add 'gwolle_gb_get_total_entries' function.
* Deprecate 'gwolle_gb_addon_get_total_entries' function.
* Use 'admin_url' everywhere.
* Updates for Add-On 1.2.0.

= 2.5.4 =
* 2018-06-06
* Fix XSS security issue on admin dashboard widget (thanks DefenseCode).

= 2.5.3 =
* 2018-06-04
* Better testing if anti-spam functions are enabled when checking the form input.
* Included possible fix for not handling form data on some installs.

= 2.5.2 =
* 2018-05-12
* Support link to privacy policy (requires WordPress 4.9.6).

= 2.5.1 =
* 2018-05-01
* Fix link checker.
* Add default parameter 'book_id' to function 'gwolle_gb_addon_get_total_entries'.

= 2.5.0 =
* 2018-04-13
* Improve custom quiz question.
* Improve and extend Honeypot anti-spam.
* Add Link Checker for anti-spam.
* Add timeout for submitting the form for anti-spam.
* Do not send IP Address to Akismet if disabled.
* Add 'date_query' parameter to 'gwolle_gb_get_entries' function.
* Set default settings upon install/upgrade, so we can cache them.
* Add action 'gwolle_gb_uninstall'.
* Switch multisite uninstall to 'admin_init' hook.
* Flush transients from cache if no book_id is set.
* Switch export to 3000 entries per part instead of 5000.
* New file '/functions/gb-book_id.php'.
* Improve comment blocks for functions.

= 2.4.2 =
* 2018-03-30
* Close div element correctly.

= 2.4.1 =
* 2018-03-28
* Improve features for anti-spam.
* Add readmore link to admin reply excerpt.
* More improvements to mobile CSS for the form.
* Fix warning when sending mail to moderator.

= 2.4.0 =
* 2018-03-25
* Add checkbox for privacy policy for GDPR compliance.
* Add option to store or not store IP Address and hostname.
* Add export for user based on ID or email.
* Add search on entries page for user based on ID or email.
* Support meta fields from the add-on in export/import (needs add-on > 1.1.0 ).
* Fix CSS for mobile form and form in widget.
* Remove book_id meta key when only one entry is shown.
* Fix warning on entries page when no entries.
* Add function 'gwolle_gb_get_postid_biggest_book'.
* Add function 'gwolle_gb_get_books'.
* Add hook 'gwolle_gb_delete_entry' when permanently deleting an entry.
* Delete log entries in that hook.
* Use correct URL in RSS feed.
* Add filters for email body.
* Fix docs for filters for email subject.
* Drop support for Shortcake feature plugin.
* Rephrase Cheating messages like WP Core.

= 2.3.10 =
* 2018-02-10
* Small CSS update for login form.
* Small CSS update for .gb-entry.
* Small CSS update for Twenty Fifteen.
* Update strings for add-on 1.0.7.

= 2.3.9 =
* 2018-01-26
* Support book_id for export and import (thanks therab).

= 2.3.8 =
* 2018-01-18
* Editor.php: Heading for City should really be City.
* Improve and add translator comments.

= 2.3.7 =
* 2017-11-29
* Rename header field in settingsform for compatibility.
* Improve some text strings (thanks dedotombo).
* Update strings for add-on 1.0.5.

= 2.3.6 =
* 2017-11-06
* Update strings for add-on 1.0.4.

= 2.3.5 =
* 2017-11-04
* Add classes with dashes.
* Small text updates.

= 2.3.4 =
* 2017-10-19
* When editing date, show new date after saving the date.
* Add translations for Add-On to GlotPress of gwolle-gb.

= 2.3.3 =
* 2017-10-06
* Use more of esc_html function in translatable strings.
* Add advertisement page for Add-On.

= 2.3.2 =
* 2017-09-06
* Editor: also save when no change was made.
* Add total counter to frontend list.

= 2.3.1 =
* 2017-08-29
* Use correct class for menu-counters.

= 2.3.0 =
* 2017-08-28
* Add Stop Forum Spam service for anti-spam.
* GET parameter entry_id with single view is back (back from the dead).
* Set admin styling to off by default.
* Remove "display:inline" for span elements, it is default.
* Don't use 'strip_tags' anymore.
* Add Metabox on frontend for more action links.
* Move Edit link and add Ajax icon to metabox in new file gb-metabox.php.
* Attach event listener to frontend metabox after posting with AJAX.
* Add option for Admin Avatar (thanks roots84).
* Add more filters to frontend form.
* Add filter 'gwolle_gb_entry_read_add_content_before'.
* Add filter 'gwolle_gb_entries_list_before'.
* Add action 'gwolle_gb_notsaved_entry_frontend'.
* Add filter 'gwolle_gb_get_emoji'.
* Add function 'gwolle_gb_get_entry_ids'.
* Add callbacks for infinite scroll and AJAX post.
* Set border between entries to solid instead of dotted.
* Fix counters on entries.php page.
* Admin Editor.php uses less globals now.
* Use esc_html functions for translatable strings.
* Store entry total for frontend pagination in a transient.
* Store counter for admin menu in a transient.
* Add gwolle_gb_is_author function.
* Small refactor of AJAX JS code.
* Move functions for settings, user/author, cache and shortcake to their own files.

= 2.2.1 =
* 2017-05-24
* Fix jQuery incompatibility in Super Simple Slider (for widget).

= 2.2.0 =
* 2017-05-03
* Add setting to refuse spam entries.
* Update counter in admin menu and toolbar after check of entry.
* Add translator comments for Trash (in Trash / to Trash).
* Add CSS text-color to pagination.
* Add filter 'gwolle_gb_entries_list_class'.
* Add filter 'gwolle_gb_entry_class'.
* Add filter 'gwolle_gb_widget_list_class'.
* Add filter 'gwolle_gb_widget_item_class'.
* Add filter 'gwolle_gb_author_link_rel'.
* Add filter 'gwolle_gb_bbcode_link_rel'.
* Use wp_kses_post function for sanitizing content and admin_reply.
* Use sanitize_text_field function for sanitizing other fields.
* Better testing for 'post_id' in shortcodes.
* Some better explanations at the Settingspage for anti-spam.
* Do not concatenate strings, but use sprintf on about page.
* Move functions for post-meta to own file.

= 2.1.5 =
* 2017-02-13
* Add CSS for responsive design for the form.
* Add CSS for the form inside a .widget and .widget-area.
* Add class .button to buttons on frontend form.
* Query for widgets checks on meta field.
* Make our custom fields protected.
* Only save custom fields on page edit.
* Improve error handling on import with missing finfo_open.
* On entries list, icon column gets header 'Status'.
* Don't update caches on wp_query.
* Remove Polish from zipfile, it is maintained in GlotPress.

= 2.1.4 =
* 2017-01-19
* Borrow pagination CSS from bbPress.
* Add shortcode for widget layout: [gwolle_gb_widget].
* Improve HTML formatting of widget.
* Remove Italian and Swedish from zipfile, they are at 100% in GlotPress.

= 2.1.3 =
* 2016-12-24
* Add rel="nofollow" to website link.
* Improve HTML formatting of entry.
* Add filter gwolle_gb_author_link_to_buddypress.
* Add filters for prefill of the form.

= 2.1.2 =
* 2016-11-06
* Wrap text '(no entries yet)' inside the standard div#gwolle_gb_entries so we always list the submitted entry.
* Add filter for gwolle_gb_admin_reply_header.
* Long words check shouldn't match http, https or ftp strings.
* Explain scan for long text better.
* Again fix for Twenty Sixteen and Twenty Seventeen.
* On import, run the clear_cache function only once.
* Slightly improve error handling for admin AJAX.

= 2.1.1 =
* 2016-09-07
* Security fix: fix XSS on editor view (Thanks Radjnies of securify.nl).
* Security fix: fix CSRF on admin pages (Thanks Radjnies of securify.nl).
* Use str_replace on quotes the right way (no need to escape).
* Add Nonces to admin pages and check on them.
* Check the max number of checked entries on bulk edit on admin list.
* Flush cache on mass delete.
* Update text of metaboxes on main admin page.

= 2.1.0 =
* 2016-08-23
* Fix html validation in form buttons.
* Add setting for the scan for long text.
* Set that scan from 80 chars to 100 chars.
* Support persistent object cache.
* Flush cache on saving an entry on admin too.
* Add save-hook to mass edit.
* Add save-hook to AJAX admin actions.
* Add save-hook to importer.
* Load admin CSS on all pages (not JS).
* Offer MultiSite uninstall through a filter.
* Set wpdb prefix correctly on uninstall.
* Rename most files with prefix.

= 2.0.2 =
* 2016-08-19
* Fix loading images in CSS.
* Better AJAX icon.
* Improve a11y of toolbar menu-item.

= 2.0.1 =
* 2016-08-16
* Fix upgrade in MultiSite.
* More subtle styling of AJAX icon.
* More consistent naming in error fields.
* Append Infinite Scroll load message to div#gwolle_gb_entries.
* Don't use 'focus()' in form ajax, no point to it.
* Rename CSS and JS files.
* Rename infinite_scroll.php to ajax-infinite_scroll.php.
* Rename captcha-ajax.php to ajax-captcha.php.
* Rename admin/upgrade.php to admin/gwolle-gb-upgrade.php.

= 2.0.0 =
* 2016-08-08
* Add AJAX Form Submit (default).
* Add container div around gwolle_gb_messages div.
* Small adaptations to form-posthandling.php.
* Function 'gwolle_gb_clear_cache()' is now hooked to 'gwolle_gb_save_entry_frontend' action.
* Moderator and author mail are now hooked to 'gwolle_gb_save_entry_frontend' action.
* Rename frontend/write.php to frontend/form.php.
* Rename frontend/posthandling.php to frontend/form-posthandling.php.
* Rename admin/ajax.php to admin/ajax-management.php.
* Remove more br elements from BBcode lists.
* Add a 'read more' link to each entry in the widget in the form of a '&raquo;'.
* Set CSS width of '.input input[type="email"]' and '.input input[type="url"]' to 100%.
* Set z-index for infinite scroll load message.
* Make CSS reset for MarkItUp more specific.
* Add some bootstrap classes to the form.
* Add comments for translators.
* Cleanup changelog. Add changelog.txt for v0 and v1.
