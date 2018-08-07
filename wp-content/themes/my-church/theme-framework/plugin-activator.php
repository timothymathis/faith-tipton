<?php
/**
 * @package 	WordPress
 * @subpackage 	My Church
 * @version 	1.0.6
 * 
 * TGM-Plugin-Activation 2.6.1
 * Created by CMSMasters
 * 
 */


require_once(get_template_directory() . '/framework/class/class-tgm-plugin-activation.php');


if (!function_exists('my_church_register_theme_plugins')) {

function my_church_register_theme_plugins() { 
	$plugins = array( 
		array( 
			'name'					=> esc_html__('CMSMasters Contact Form Builder', 'my-church'), 
			'slug'					=> 'cmsmasters-contact-form-builder', 
			'source'				=> get_template_directory() . '/theme-framework/plugins/cmsmasters-contact-form-builder.zip', 
			'required'				=> false, 
			'version'				=> '1.4.0', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name'					=> esc_html__('CMSMasters Content Composer', 'my-church'), 
			'slug'					=> 'cmsmasters-content-composer', 
			'source'				=> get_template_directory() . '/theme-framework/plugins/cmsmasters-content-composer.zip', 
			'required'				=> true, 
			'version'				=> '2.1.5', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name'					=> esc_html__('CMSMasters Mega Menu', 'my-church'), 
			'slug'					=> 'cmsmasters-mega-menu', 
			'source'				=> get_template_directory() . '/theme-framework/plugins/cmsmasters-mega-menu.zip', 
			'required'				=> true, 
			'version'				=> '1.2.7', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name'					=> esc_html__('CMSMasters Donations', 'my-church'), 
			'slug'					=> 'cmsmasters-donations', 
			'source'				=> get_template_directory() . '/theme-framework/plugins/cmsmasters-donations.zip', 
			'required'				=> true, 
			'version'				=> '1.2.8', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name'					=> esc_html__('CMSMasters Sermons', 'my-church'), 
			'slug'					=> 'cmsmasters-sermons', 
			'source'				=> get_template_directory() . '/theme-framework/plugins/cmsmasters-sermons.zip', 
			'required'				=> true, 
			'version'				=> '1.0.5', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name' 					=> esc_html__('LayerSlider WP', 'my-church'), 
			'slug' 					=> 'LayerSlider', 
			'source'				=> get_template_directory() . '/theme-framework/plugins/LayerSlider.zip', 
			'required'				=> false, 
			'version'				=> '6.6.2', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name' 					=> esc_html__('Revolution Slider', 'my-church'), 
			'slug' 					=> 'revslider', 
			'source'				=> get_template_directory() . '/theme-framework/plugins/revslider.zip', 
			'required'				=> false, 
			'version'				=> '5.4.6.3', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name'					=> esc_html__('Timetable', 'my-church'), 
			'slug'					=> 'timetable', 
			'source'				=> get_template_directory() . '/theme-framework/plugins/timetable.zip', 
			'required'				=> false, 
			'version'				=> '4.0', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
 		array( 
			'name'					=> esc_html__('Envato Market', 'my-church'), 
			'slug'					=> 'envato-market', 
			'source'				=> get_template_directory() . '/theme-framework/plugins/envato-market.zip', 
			'required'				=> false, 
			'version'				=> '1.0.0-RC2', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name' 					=> esc_html__('WooCommerce', 'my-church'), 
			'slug' 					=> 'woocommerce', 
			'required'				=> false 
		), 
		array( 
			'name' 					=> esc_html__('The Events Calendar', 'my-church'), 
			'slug' 					=> 'the-events-calendar', 
			'required'				=> false 
		), 
		array( 
			'name' 					=> esc_html__('Contact Form 7', 'my-church'), 
			'slug' 					=> 'contact-form-7', 
			'required' 				=> false 
		), 
		array( 
			'name' 					=> esc_html__('WordPress SEO by Yoast', 'my-church'), 
			'slug' 					=> 'wordpress-seo', 
			'required' 				=> false 
		), 
		array( 
			'name'					=> esc_html__('Instagram Feed', 'my-church'), 
			'slug'					=> 'instagram-feed', 
			'required'				=> false 
 		), 
		array( 
			'name'					=> esc_html__('MailPoet Newsletters', 'my-church'), 
			'slug'					=> 'wysija-newsletters', 
			'required'				=> false 
		) 
	);
	
	
	$config = array( 
		'id' => 			'my-church', 
		'menu' => 			'theme-required-plugins', 
		'strings' => array( 
			'page_title' => 	esc_html__('Theme Required & Recommended Plugins', 'my-church'), 
			'menu_title' => 	esc_html__('Theme Plugins', 'my-church'), 
			'return' => 		esc_html__('Return to Theme Required & Recommended Plugins', 'my-church') 
		) 
	);
	
	
	tgmpa($plugins, $config);
}

}

add_action('tgmpa_register', 'my_church_register_theme_plugins');

