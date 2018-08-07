<?php 
/**
 * @package 	WordPress
 * @subpackage 	My Church
 * @version		1.0.2
 * 
 * Theme Admin Options
 * Created by CMSMasters
 * 
 */


/* Filter for Options */
function my_church_theme_meta_fields($custom_all_meta_fields) {
	$cmsmasters_option = my_church_get_global_options();
	
	
	$custom_all_meta_fields_new = array();
	
	
	foreach ($custom_all_meta_fields as $custom_all_meta_field) {
		if ($custom_all_meta_field['id'] == 'cmsmasters_heading') {
			$custom_all_meta_field['std'] = 'disabled';
			
			
			$custom_all_meta_fields_new[] = $custom_all_meta_field;
		}
	}
	
	
	if (
		(isset($_GET['post_type']) && $_GET['post_type'] == 'project') || 
		(isset($_POST['post_type']) && $_POST['post_type'] == 'project') || 
		(isset($_GET['post']) && get_post_type($_GET['post']) == 'project') 
	) {
		foreach ($custom_all_meta_fields as $custom_all_meta_field) {
			if ($custom_all_meta_field['id'] == 'cmsmasters_project_columns') {
				$options_field = array();
				
				$options_field = array( 
					'four' => array(
						'label' => esc_html__('Four', 'my-church'), 
						'value'	=> 'four' 
					)
				);
				
				$custom_all_meta_field['options'] = array_merge($options_field, $custom_all_meta_field['options']);
				
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} elseif ($custom_all_meta_field['id'] == 'cmsmasters_project_more_posts') {
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
				
				
				$custom_all_meta_fields_new[] = array( 
					'label'	=> esc_html__("'Read More' Buttons Text", 'my-church'), 
					'desc'	=> esc_html__("Enter the 'Read More' button text that should be used in your portfolio shortcode", 'my-church'), 
					'id'	=> 'cmsmasters_project_read_more', 
					'type'	=> 'text', 
					'hide'	=> '', 
					'std'	=> esc_html__('Read More', 'my-church') 
				);
			} else {
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			}
		}
	} else {
		$custom_all_meta_fields_new = $custom_all_meta_fields;
	}
	
	
	return $custom_all_meta_fields_new;
}

add_filter('get_custom_all_meta_fields_filter', 'my_church_theme_meta_fields');

