<?php
/**
 * @package 	WordPress
 * @subpackage 	My Church
 * @version		1.0.2
 * 
 * Timetable Functions
 * Created by CMSMasters
 * 
 */


/* Load Parts */
require_once(get_template_directory() . '/timetable/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/admin/plugin-settings.php');
require_once(get_template_directory() . '/timetable/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/admin/plugin-options.php');
require_once(get_template_directory() . '/timetable/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/function/plugin-colors.php');
require_once(get_template_directory() . '/timetable/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/function/plugin-fonts.php');


if (CMSMASTERS_CONTENT_COMPOSER && class_exists('Cmsmasters_Content_Composer')) {
	require_once(get_template_directory() . '/timetable/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-c-c/cmsmasters-c-c-plugin-functions.php');
	
	require_once(get_template_directory() . '/timetable/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-c-c/cmsmasters-c-c-plugin-shortcodes.php');
}


/* Register CSS Styles and Scripts */
function my_church_timetable_register_styles_scripts() {
	// Styles
	wp_dequeue_style('timetable_sf_style');
	
	wp_dequeue_style('timetable_style');
	
	wp_dequeue_style('timetable_event_template');
	
	wp_dequeue_style('timetable_responsive_style');
	
	
	wp_enqueue_style('my-church-timetable-style', get_template_directory_uri() . '/timetable/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/css/plugin-style.css', array(), '1.0.0', 'screen');
	
	wp_enqueue_style('my-church-timetable-adaptive', get_template_directory_uri() . '/timetable/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/css/plugin-adaptive.css', array(), '1.0.0', 'screen');
	
	
	if (is_rtl()) {
		wp_enqueue_style('my-church-timetable-rtl', get_template_directory_uri() . '/timetable/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/css/plugin-rtl.css', array(), '1.0.0', 'screen');
	}
}

add_action('wp_enqueue_scripts', 'my_church_timetable_register_styles_scripts');


/* Scripts for Admin */
function my_church_timetable_admin_scripts() {
	wp_enqueue_script('my-church-timetable-settings-toggle', get_template_directory_uri() . '/timetable/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/admin/js/plugin-settings-toggle.js', array('jquery'), '1.0.0', true);
	
	wp_localize_script('my-church-timetable-settings-toggle', 'cmsmasters_timetable_settings', array( 
		'shortname' => 	'my-church' 
	));
	
	
	wp_enqueue_script('my-church-timetable-options-toggle', get_template_directory_uri() . '/timetable/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/admin/js/plugin-options-toggle.js', array('jquery'), '1.0.0', true);
}

add_action('admin_enqueue_scripts', 'my_church_timetable_admin_scripts');


/* Remove Timetable Settings and Documentation */
if (is_admin()) {
	$plugin = 'timetable/timetable.php'; 
	
	remove_filter("plugin_action_links_$plugin", 'timetable_settings_link');
	
	remove_filter("plugin_action_links_$plugin", 'timetable_documentation_link');
	
	
	function my_church_timetable_settings_page_removing() {
		remove_submenu_page('options-general.php', 'timetable_admin');
	}
	
	add_action('admin_menu', 'my_church_timetable_settings_page_removing');
}


/* Unregister Sidebar */
function my_church_timetable_unregister_sidebar() {
	unregister_sidebar('sidebar-event');
}

add_action('widgets_init', 'my_church_timetable_unregister_sidebar');


/* Single Event Layout */
function my_church_timetable_single_event_layout($cmsmasters_layout) {
	if (is_singular('events')) {
		$cmsmasters_layout = 'fullwidth';
	}
	
	
	return $cmsmasters_layout;
}

add_filter('cmsmasters_theme_page_layout_filter', 'my_church_timetable_single_event_layout');

