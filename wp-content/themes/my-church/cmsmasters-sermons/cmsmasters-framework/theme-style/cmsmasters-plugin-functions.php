<?php
/**
 * @package 	WordPress
 * @subpackage 	My Church
 * @version 	1.0.2
 * 
 * CMSMasters Sermons Functions
 * Created by CMSMasters
 * 
 */


/* Load Parts */
require_once(get_template_directory() . '/cmsmasters-sermons/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/function/plugin-colors.php');
require_once(get_template_directory() . '/cmsmasters-sermons/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/function/plugin-fonts.php');


/* Register CSS Styles and Scripts */
function my_church_sermons_register_styles_scripts() {
	// Styles
	wp_enqueue_style('my-church-sermons-style', get_template_directory_uri() . '/cmsmasters-sermons/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/css/plugin-style.css', array(), '1.0.0', 'screen');
	
	wp_enqueue_style('my-church-sermons-adaptive', get_template_directory_uri() . '/cmsmasters-sermons/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/css/plugin-adaptive.css', array(), '1.0.0', 'screen');
	
	
	if (is_rtl()) {
		wp_enqueue_style('my-church-sermons-rtl', get_template_directory_uri() . '/cmsmasters-sermons/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/css/plugin-rtl.css', array(), '1.0.0', 'screen');
	}
	
	
	// Scripts
	wp_enqueue_script('my-church-sermons-script', get_template_directory_uri() . '/cmsmasters-sermons/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/js/jquery.plugin-script.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'my_church_sermons_register_styles_scripts');

