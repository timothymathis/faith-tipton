<?php
/**
 * @package 	WordPress
 * @subpackage 	My Church
 * @version 	1.0.2
 * 
 * CMSMasters Sermons Colors Rules
 * Created by CMSMasters
 * 
 */


function my_church_sermons_colors($custom_css) {
	$cmsmasters_option = my_church_get_global_options();
	
	
	$cmsmasters_color_schemes = cmsmasters_color_schemes_list();
	
	
	foreach ($cmsmasters_color_schemes as $scheme => $title) {
		$rule = (($scheme != 'default') ? "html .cmsmasters_color_scheme_{$scheme} " : '');
		
		
		$custom_css .= "
/***************** Start {$title} CMSMasters Sermons Color Scheme Rules ******************/
	
	/* Start Primary Font Color */
	{$rule}.cmsmasters_sermon .cmsmasters_sermon_title a:hover, 
	{$rule}.cmsmasters_open_sermon .cmsmasters_sermon_media .cmsmasters_sermon_media_item:hover:before,
	{$rule}.cmsmasters_sermon_cat a:hover,
	{$rule}.cmsmasters_open_sermon .cmsmasters_sermon_title,
	{$rule}.cmsmasters_sermon .cmsmasters_sermon_media_item:hover,
	{$rule}.cmsmasters_sermon .current_audio .cmsmasters_sermon_audio,
	{$rule}.current_audio .cmsmasters_sermon_audio:before,
	{$rule}.cmsmasters_sermon_author a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['my-church' . '_' . $scheme . '_link']) . "
	}
	/* Finish Primary Font Color */
	
	
	/* Start Heading Font Color */
	{$rule}.cmsmasters_sermon .cmsmasters_sermon_title a, 
	{$rule}.cmsmasters_sermon_cat a,
	{$rule}.cmsmasters_open_sermon .cmsmasters_sermon_media .cmsmasters_sermon_media_item,
	{$rule}.cmsmasters_sermon .cmsmasters_sermon_media_item,
	{$rule}.cmsmasters_sermon_author a {
		" . cmsmasters_color_css('color', $cmsmasters_option['my-church' . '_' . $scheme . '_heading']) . "
	}
	/* Finish Heading Font Color */
	
	
	/* Start Border Color */
	{$rule}.cmsmasters_open_sermon .cmsmasters_sermon_cont_info,
	{$rule}.cmsmasters_open_sermon .cmsmasters_sermon_media .cmsmasters_sermon_media_item,
	{$rule}.cmsmasters_sermon .cmsmasters_sermon_media,
	{$rule}.cmsmasters_sermon .cmsmasters_sermon_content, 
	{$rule}.cmsmasters_sermon > *:last-child:not(.cmsmasters_img_rollover_wrap) {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['my-church' . '_' . $scheme . '_border']) . "
	}
	/* Finish Border Color */

/***************** Finish {$title} CMSMasters Sermons Color Scheme Rules ******************/

";
	}
	
	
	return $custom_css;
}

add_filter('my_church_theme_colors_secondary_filter', 'my_church_sermons_colors');

