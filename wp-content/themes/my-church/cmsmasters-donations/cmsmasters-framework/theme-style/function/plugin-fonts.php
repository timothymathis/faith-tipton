<?php
/**
 * @package 	WordPress
 * @subpackage 	My Church
 * @version 	1.0.2
 * 
 * CMSMasters Donations Fonts Rules
 * Created by CMSMasters
 * 
 */


function my_church_donations_fonts($custom_css) {
	$cmsmasters_option = my_church_get_global_options();
	
	
	$custom_css .= "
/***************** Start CMSMasters Donations Font Styles ******************/

	/* Start Content Font */
	/* Finish Content Font */
	
	
	/* Start Link Font */
	/* Finish Link Font */
	
	
	/* Start Navigation Title Font */
	/* Finish Navigation Title Font */
	
	
	/* Start H1 Font */
	.donations.opened-article > .donation .cmsmasters_donation_amount_currency {
		font-family:" . my_church_get_google_font($cmsmasters_option['my-church' . '_h1_font_google_font']) . $cmsmasters_option['my-church' . '_h1_font_system_font'] . ";
		font-size:" . $cmsmasters_option['my-church' . '_h1_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['my-church' . '_h1_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['my-church' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['my-church' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['my-church' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['my-church' . '_h1_font_text_decoration'] . ";
	}
	
	.donations.opened-article > .donation .cmsmasters_donation_amount_currency {
		font-size:" . ((int) $cmsmasters_option['my-church' . '_h1_font_font_size'] + 14) . "px;
		line-height:" . ((int) $cmsmasters_option['my-church' . '_h1_font_line_height'] + 14) . "px;
	}
	/* Finish H1 Font */
	
	
	/* Start H2 Font */
	.campaign_meta_wrap .cmsmasters_campaign_target_number,
	.campaign_meta_wrap .cmsmasters_campaign_donations_count_number {
		font-size:" . ((int) $cmsmasters_option['my-church' . '_h2_font_font_size'] - 4) . "px;
	}
	
	.opened-article > .campaign .cmsmasters_campaign_title {
		font-size:" . ((int) $cmsmasters_option['my-church' . '_h2_font_font_size'] + 2) . "px;
	}
	
	.donations.opened-article > .donation .cmsmasters_donation_title {
		font-size:" . ((int) $cmsmasters_option['my-church' . '_h2_font_font_size'] + 4) . "px;
	}
	/* Finish H2 Font */
	
	
	/* Start H3 Font */
	.donation_confirm_title,
	.cmsmasters_donation_form_title {
		font-family:" . my_church_get_google_font($cmsmasters_option['my-church' . '_h3_font_google_font']) . $cmsmasters_option['my-church' . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option['my-church' . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['my-church' . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['my-church' . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['my-church' . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['my-church' . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['my-church' . '_h3_font_text_decoration'] . ";
	}
	
	.cmsmasters_campaigns .campaign .cmsmasters_campaign_title a {
		font-size:" . ((int) $cmsmasters_option['my-church' . '_h3_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['my-church' . '_h3_font_line_height'] - 6) . "px;
	}
	/* Finish H3 Font */
	
	
	/* Start H4 Font */
	.donations.opened-article > .donation .cmsmasters_donation_campaign a,
	.cmsmasters_featured_campaign .campaign .cmsmasters_campaign_rest_amount,
	.cmsmasters_donations .donation .cmsmasters_donation_campaign,
	.cmsmasters_donations .donation .cmsmasters_donation_campaign a {
		font-family:" . my_church_get_google_font($cmsmasters_option['my-church' . '_h4_font_google_font']) . $cmsmasters_option['my-church' . '_h4_font_system_font'] . ";
		font-size:" . $cmsmasters_option['my-church' . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['my-church' . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['my-church' . '_h4_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['my-church' . '_h4_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['my-church' . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['my-church' . '_h4_font_text_decoration'] . ";
	}
	
	.cmsmasters_donations .donation .cmsmasters_donation_campaign,
	.cmsmasters_donations .donation .cmsmasters_donation_campaign a {
		font-size:" . ((int) $cmsmasters_option['my-church' . '_h4_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['my-church' . '_h4_font_line_height'] - 2) . "px;
	}
	
	.donations.opened-article > .donation .cmsmasters_donation_campaign a {
		font-size:" . ((int) $cmsmasters_option['my-church' . '_h4_font_font_size'] + 4) . "px;
		line-height:" . ((int) $cmsmasters_option['my-church' . '_h4_font_line_height'] + 4) . "px;
	}
	/* Finish H4 Font */
	
	
	/* Start H5 Font */
	.donation_confirm .donation_confirm_info_title,
	.cmsmasters_campaigns .campaign .cmsmasters_campaign_donated_percent .cmsmasters_stat_title,
	.cmsmasters_donations .donation .cmsmasters_donation_amount_currency {
		font-family:" . my_church_get_google_font($cmsmasters_option['my-church' . '_h5_font_google_font']) . $cmsmasters_option['my-church' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['my-church' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['my-church' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['my-church' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['my-church' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['my-church' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['my-church' . '_h5_font_text_decoration'] . ";
	}
		
	.cmsmasters_campaigns .campaign .cmsmasters_campaign_donated_percent .cmsmasters_stat_title {
		font-size:" . ((int) $cmsmasters_option['my-church' . '_h5_font_font_size'] - 3) . "px;
		text-transform:uppercase;
	}
	
	.donation_confirm .donation_confirm_info_title,
	.campaign_meta_wrap .cmsmasters_campaign_donated .cmsmasters_stat_title,
	.campaign_meta_wrap .cmsmasters_campaign_target_title, 
	.campaign_meta_wrap .cmsmasters_campaign_donations_count_title {
		font-size:" . ((int) $cmsmasters_option['my-church' . '_h5_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['my-church' . '_h5_font_line_height'] - 2) . "px;
	}
	/* Finish H5 Font */
	
	
	/* Start H6 Font */
	.cmsmasters_donation_field > label,
	.cmsmasters_donator_field label,
	.cmsmasters_donation_details_item,
	.cmsmasters_donation_details_item a,
	.cmsmasters_campaign_cont_info .cmsmasters_likes span,
	.cmsmasters_campaign_cont_info .cmsmasters_post_comments span,
	.cmsmasters_campaign_cont_info .cmsmasters_campaign_tags,
	.cmsmasters_campaign_cont_info .cmsmasters_campaign_tags a,
	.cmsmasters_campaign_cont_info .cmsmasters_campaign_category,
	.cmsmasters_campaign_cont_info .cmsmasters_campaign_category a,
	.cmsmasters_campaign_cont_info .cmsmasters_campaign_user_name,
	.cmsmasters_campaign_cont_info .cmsmasters_campaign_user_name a,
	.cmsmasters_campaigns .campaign .cmsmasters_stat_subtitle,
	.cmsmasters_donations .donation .cmsmasters_donation_amount_title {
		font-family:" . my_church_get_google_font($cmsmasters_option['my-church' . '_h6_font_google_font']) . $cmsmasters_option['my-church' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['my-church' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['my-church' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['my-church' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['my-church' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['my-church' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['my-church' . '_h6_font_text_decoration'] . ";
	}
	
	.cmsmasters_campaigns .campaign .cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap .cmsmasters_stat_subtitle, 
	.cmsmasters_campaign_cont_info .cmsmasters_likes span,
	.cmsmasters_campaign_cont_info .cmsmasters_post_comments span {
		font-size:" . ((int) $cmsmasters_option['my-church' . '_h6_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['my-church' . '_h6_font_line_height'] - 2) . "px;
	}
	/* Finish H6 Font */
	
	
	/* Start Button Font */
	/* Finish Button Font */
	
	
	/* Start Small Text Font */
	/* Finish Small Text Font */

/***************** Finish CMSMasters Donations Font Styles ******************/

";
	
	
	return $custom_css;
}

add_filter('my_church_theme_fonts_filter', 'my_church_donations_fonts');

