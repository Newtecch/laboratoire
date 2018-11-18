<?php
// @codingStandardsIgnoreStart
/*
 * Plugin Name:	MetaSlider Lightbox
 * Plugin URI:	https://www.metaslider.com
 * Description: Adds lightbox plugin integration to MetaSlider. Requires MetaSlider and one compatible lightbox plugin to be installed and activated.
 * Version:		1.10.2
 * Author:	  	Team Updraft
 * Author URI:	https://updraftplus.com
 * License:	 	GPL-2.0+
 * Copyright:	2017+ Simba Hosting Ltd
 *
 * Text Domain: ml-slider-lightbox
 * Domain Path: /languages
 */
// @codingStandardsIgnoreEnd
if (!defined('ABSPATH')) die('No direct access.');

if (!class_exists('MetaSliderLightboxPlugin')) {
	require_once plugin_dir_path(__FILE__) . 'class-ml-slider-lightbox.php';	
	add_action('after_setup_theme', array(MetaSliderLightboxPlugin::get_instance(), 'setup'), 10);
}
