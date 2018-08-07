<?php
/**
 * @package 	WordPress
 * @subpackage 	My Church
 * @version 	1.0.2
 * 
 * CMSMasters Sermons Fonts Rules
 * Created by CMSMasters
 * 
 */


function my_church_sermons_fonts($custom_css) {
	$cmsmasters_option = my_church_get_global_options();
	
	
	$custom_css .= "
/***************** Start CMSMasters Sermons Font Styles ******************/
	
	/* Start H6 Font */
	.cmsmasters_sermon_media_title,
	.cmsmasters_open_sermon .cmsmasters_sermon_cont_info .cmsmasters_sermon_info a span,
	.cmsmasters_sermon_cat,
	.cmsmasters_sermon_cat a,
	.cmsmasters_sermon_author,
	.cmsmasters_sermon_author a,
	.cmsmasters_sermon_date {
		font-family:" . my_church_get_google_font($cmsmasters_option['my-church' . '_h6_font_google_font']) . $cmsmasters_option['my-church' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['my-church' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['my-church' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['my-church' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['my-church' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['my-church' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['my-church' . '_h6_font_text_decoration'] . ";
	}
	
	.cmsmasters_open_sermon .cmsmasters_sermon_cont_info .cmsmasters_sermon_info a span {
		font-size:" . ((int) $cmsmasters_option['my-church' . '_h6_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['my-church' . '_h6_font_line_height'] - 2) . "px;
	}
	/* Finish H6 Font */
	
/***************** Finish CMSMasters Sermons Font Styles ******************/

";
	
	
	return $custom_css;
}

add_filter('my_church_theme_fonts_filter', 'my_church_sermons_fonts');

