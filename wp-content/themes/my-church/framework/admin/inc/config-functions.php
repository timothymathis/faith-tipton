<?php
/**
 * @package 	WordPress
 * @subpackage 	My Church
 * @version		1.0.5
 * 
 * Theme and Plugin functions
 * Created by CMSMasters
 * 
 */


// Theme Settings Google Fonts List
if (!function_exists('cmsmasters_google_fonts_list')) {
	function cmsmasters_google_fonts_list() {
		$fonts = my_church_get_google_fonts_list();
		
		
		return $fonts;
	}
}



// Theme Settings Font Weights List
if (!function_exists('cmsmasters_font_weight_list')) {
	function cmsmasters_font_weight_list() {
		$list = array( 
			'default' => 	'default', 
			'normal' => 	'normal', 
			'100' => 		'100', 
			'200' => 		'200', 
			'300' => 		'300', 
			'400' => 		'400', 
			'500' => 		'500', 
			'600' => 		'600', 
			'700' => 		'700', 
			'800' => 		'800', 
			'900' => 		'900', 
			'bold' => 		'bold', 
			'bolder' => 	'bolder', 
			'lighter' => 	'lighter', 
		);
		
		
		return $list;
	}
}



// Theme Settings Font Styles List
if (!function_exists('cmsmasters_font_style_list')) {
	function cmsmasters_font_style_list() {
		$list = array( 
			'default' => 	'default', 
			'normal' => 	'normal', 
			'italic' => 	'italic', 
			'oblique' => 	'oblique', 
			'inherit' => 	'inherit', 
		);
		
		
		return $list;
	}
}



// Theme Settings Text Transforms List
if (!function_exists('cmsmasters_text_transform_list')) {
	function cmsmasters_text_transform_list() {
		$list = array( 
			'default' => esc_html__('default', 'my-church'), 
			'none' => esc_html__('none', 'my-church'), 
			'uppercase' => esc_html__('uppercase', 'my-church'), 
			'lowercase' => esc_html__('lowercase', 'my-church'), 
			'capitalize' => esc_html__('capitalize', 'my-church'), 
		);
		
		
		return $list;
	}
}


// Theme Image Thumbnails Size
if (!function_exists('cmsmasters_image_thumbnail_list')) {
	function cmsmasters_image_thumbnail_list() {
		$list = my_church_get_image_thumbnail_list();
		
		
		return $list;
	}
}



// Theme Settings Color Schemes List
if (!function_exists('cmsmasters_color_schemes_list')) {
	function cmsmasters_color_schemes_list() {
		$list = my_church_all_color_schemes_list();
		
		
		unset($list['header']);
		
		unset($list['navigation']);
		
		unset($list['header_top']);
		
		
		$out = array_merge($list, my_church_custom_color_schemes_list());
		
		
		return $out;
	}
}

