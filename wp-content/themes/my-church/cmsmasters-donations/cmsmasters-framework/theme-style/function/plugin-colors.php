<?php
/**
 * @package 	WordPress
 * @subpackage 	My Church
 * @version 	1.0.2
 * 
 * CMSMasters Donations Colors Rules
 * Created by CMSMasters
 * 
 */


function my_church_donations_colors($custom_css) {
	$cmsmasters_option = my_church_get_global_options();
	
	
	$cmsmasters_color_schemes = cmsmasters_color_schemes_list();
	
	
	foreach ($cmsmasters_color_schemes as $scheme => $title) {
		$rule = (($scheme != 'default') ? "html .cmsmasters_color_scheme_{$scheme} " : '');
		
		
		$custom_css .= "
/***************** Start {$title} CMSMasters Donations Color Scheme Rules ******************/

	/* Start Main Content Font Color */
	{$rule}.donations.opened-article > .donation .cmsmasters_donation_campaign a,
	{$rule}.campaign_meta_wrap .cmsmasters_campaign_donations_count_number,
	{$rule}.cmsmasters_post_comments span,
	{$rule}.cmsmasters_donations .donation .cmsmasters_donation_campaign a {
		" . cmsmasters_color_css('color', $cmsmasters_option['my-church' . '_' . $scheme . '_color']) . "
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	{$rule}.cmsmasters_donation_details_item a:hover,
	{$rule}.donations.opened-article > .donation .cmsmasters_donation_amount_currency,
	{$rule}.donations.opened-article > .donation .cmsmasters_donation_campaign a:hover,
	{$rule}.campaign_meta_wrap .cmsmasters_campaign_target_number,
	{$rule}.cmsmasters_campaign_user_name a:hover,
	{$rule}.cmsmasters_campaign_category a:hover,
	{$rule}.cmsmasters_campaign_tags a:hover,
	{$rule}.cmsmasters_post_comments:hover:before,
	{$rule}.opened-article > .campaign .cmsmasters_campaign_title,
	{$rule}.cmsmasters_donations .donation .cmsmasters_donation_amount_currency,
	{$rule}.cmsmasters_donations .donation .cmsmasters_donation_campaign a:hover,
	{$rule}.cmsmasters_donations .donation .cmsmasters_donation_title a:hover, 
	{$rule}.cmsmasters_campaigns .campaign .cmsmasters_campaign_title a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['my-church' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.opened-article > .campaign .campaign_meta_wrap .cmsmasters_campaign_donate_button .button {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['my-church' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.opened-article > .campaign .campaign_meta_wrap .cmsmasters_campaign_donate_button .button {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['my-church' . '_' . $scheme . '_link']) . "
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	{$rule}.cmsmasters_post_comments:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['my-church' . '_' . $scheme . '_hover']) . "
	}
	/* Finish Highlight Color */
	
	
	/* Start Headings Color */
	{$rule}.donation_confirm .donation_confirm_info_title,
	{$rule}.cmsmasters_donation_details_item_title,
	{$rule}.cmsmasters_donation_details_item a,
	{$rule}.opened-article > .campaign .campaign_meta_wrap .cmsmasters_campaign_donate_button .button:hover,
	{$rule}.cmsmasters_campaign_user_name a,
	{$rule}.cmsmasters_campaign_category a,
	{$rule}.cmsmasters_campaign_tags a,
	{$rule}.cmsmasters_campaigns .campaign .cmsmasters_stat_title,
	{$rule}.cmsmasters_donations .donation .cmsmasters_donation_title a, 
	{$rule}.cmsmasters_campaigns .campaign .cmsmasters_campaign_title a	{
		" . cmsmasters_color_css('color', $cmsmasters_option['my-church' . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}.cmsmasters_featured_campaign .campaign .cmsmasters_img_rollover_wrap:hover .cmsmasters_img_rollover,
	{$rule}.cmsmasters_campaigns .campaign .cmsmasters_img_wrap .preloader:after,
	{$rule}.cmsmasters_donations .donation .cmsmasters_img_rollover_wrap:hover .cmsmasters_img_rollover {
		background-color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['my-church' . '_' . $scheme . '_heading']) . ", 0.6);
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	{$rule}.opened-article > .campaign .campaign_meta_wrap .cmsmasters_campaign_donate_button .button,
	{$rule}.cmsmasters_featured_campaign .campaign .cmsmasters_img_rollover_wrap .cmsmasters_open_post_link:before,
	{$rule}.cmsmasters_campaigns .campaign .cmsmasters_img_wrap .preloader:before,
	{$rule}.cmsmasters_donations .donation .cmsmasters_img_rollover_wrap .cmsmasters_open_post_link {
		" . cmsmasters_color_css('color', $cmsmasters_option['my-church' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.opened-article > .campaign .campaign_meta_wrap .cmsmasters_campaign_donate_button .button:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['my-church' . '_' . $scheme . '_bg']) . "
	}
	/* Finish Main Background Color */
	
	
	/* Start Alternate Background Color */
	{$rule}.donation_confirm .donation_confirm_info_title,
	{$rule}.campaign_meta_wrap .cmsmasters_campaign_donate_button {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['my-church' . '_' . $scheme . '_alternate']) . "
	}
	/* Finish Alternate Background Color */
	
	
	/* Start Borders Color */
	{$rule}.donation_confirm .donation_confirm_info_title,
	{$rule}.donation_confirm .donation_confirm_info,
	{$rule}.cmsmasters_donation_details_item,
	{$rule}.opened-article > .campaign .campaign_meta_wrap .cmsmasters_campaign_donate_button .button:hover,
	{$rule}.opened-article > .campaign .campaign_meta_wrap > div,
	{$rule}.opened-article > .campaign .cmsmasters_campaign_cont_info,
	{$rule}.cmsmasters_donations .donation .cmsmasters_donation_footer {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['my-church' . '_' . $scheme . '_border']) . "
	}
	/* Finish Borders Color */

/***************** Finish {$title} CMSMasters Donations Color Scheme Rules ******************/

";
	}
	
	
	return $custom_css;
}

add_filter('my_church_theme_colors_secondary_filter', 'my_church_donations_colors');

