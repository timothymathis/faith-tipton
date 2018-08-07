<?php 
/**
 * @package 	WordPress
 * @subpackage 	My Church
 * @version		1.0.2
 * 
 * Footer Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = my_church_get_global_options();
?>
<div class="footer_inner">
	<?php 
	if (
		$cmsmasters_option['my-church' . '_footer_type'] == 'default' && 
		(
			isset($cmsmasters_option['my-church' . '_social_icons']) ||
			has_nav_menu('footer')
		)
	) {
		echo '<div class="footer_inner_right">'; 
	}
	
	
	if (
		isset($cmsmasters_option['my-church' . '_social_icons']) && 
		(
			(
				$cmsmasters_option['my-church' . '_footer_type'] == 'default' && 
				$cmsmasters_option['my-church' . '_footer_social']
			) || (
				$cmsmasters_option['my-church' . '_footer_type'] == 'small' && 
				$cmsmasters_option['my-church' . '_footer_additional_content'] == 'social'
			)
		)
	) {
		my_church_social_icons();
	}
	
	
	if (
		has_nav_menu('footer') && 
		(
			(
				$cmsmasters_option['my-church' . '_footer_type'] == 'default' && 
				$cmsmasters_option['my-church' . '_footer_nav']
			) || (
				$cmsmasters_option['my-church' . '_footer_type'] == 'small' && 
				$cmsmasters_option['my-church' . '_footer_additional_content'] == 'nav'
			)
		)
	) {
		echo '<div class="footer_nav_wrap">' . 
			'<nav>';
			
			
			wp_nav_menu(array( 
				'theme_location' => 'footer', 
				'menu_id' => 'footer_nav', 
				'menu_class' => 'footer_nav' 
			));
			
			
			echo '</nav>' . 
		'</div>';
	}
	
	
	if (
		$cmsmasters_option['my-church' . '_footer_type'] == 'default' && 
		(
			isset($cmsmasters_option['my-church' . '_social_icons']) ||
			has_nav_menu('footer')
		)
	) {
		echo '</div>';
	}
	
	
	if (
		$cmsmasters_option['my-church' . '_footer_type'] == 'default'
	) {
		echo '<div class="footer_inner_left">'; 
	}
	
	
	if (
		$cmsmasters_option['my-church' . '_footer_type'] == 'default' && 
		$cmsmasters_option['my-church' . '_footer_logo']
	) {
		my_church_footer_logo($cmsmasters_option);
	}
	
	
	if (
		(
			$cmsmasters_option['my-church' . '_footer_type'] == 'default' && 
			$cmsmasters_option['my-church' . '_footer_html'] !== ''
		) || (
			$cmsmasters_option['my-church' . '_footer_type'] == 'small' && 
			$cmsmasters_option['my-church' . '_footer_additional_content'] == 'text' && 
			$cmsmasters_option['my-church' . '_footer_html'] !== ''
		)
	) {
		echo '<div class="footer_custom_html_wrap">' . 
			'<div class="footer_custom_html">' . 
				do_shortcode(wp_kses(stripslashes($cmsmasters_option['my-church' . '_footer_html']), 'post')) . 
			'</div>' . 
		'</div>';
	}
	
	
	echo '<span class="footer_copyright copyright">' . esc_html(stripslashes($cmsmasters_option['my-church' . '_footer_copyright'])) . '</span>';
		
	
	if (
		$cmsmasters_option['my-church' . '_footer_type'] == 'default'
	) {
		echo '</div>'; 
	}
	?>
</div>