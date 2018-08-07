<?php
/**
 * @package 	WordPress
 * @subpackage 	My Church
 * @version		1.0.2
 * 
 * WooCommerce Content Composer Functions
 * Created by CMSMasters
 * 
 */


/* Register JS Scripts */
function my_church_woocommerce_register_c_c_scripts() {
	global $pagenow;
	
	
	if ( 
		$pagenow == 'post-new.php' || 
		($pagenow == 'post.php' && isset($_GET['post']) && get_post_type($_GET['post']) != 'attachment') 
	) {
		wp_enqueue_script('my-church-woocommerce-extend', get_template_directory_uri() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-c-c/js/cmsmasters-c-c-plugin-extend.js', array('cmsmasters_composer_shortcodes_js'), '1.0.0', true);
		
		wp_localize_script('my-church-woocommerce-extend', 'cmsmasters_woocommerce_shortcodes', array( 
			'product_ids' => 								my_church_woocommerce_product_ids(), 
			'products_title' =>								esc_html__('Products', 'my-church'), 
			'products_shortcode_title' =>					esc_html__('WooCommerce Shortcode', 'my-church'), 
			'products_shortcode_descr' =>					esc_html__('Choose a WooCommerce shortcode to use', 'my-church'), 
			'choice_recent_products' =>						esc_html__('Recent Products', 'my-church'), 
			'choice_featured_products' =>					esc_html__('Featured Products', 'my-church'), 
			'choice_product_categories' =>					esc_html__('Product Categories', 'my-church'), 
			'choice_sale_products' =>						esc_html__('Sale Products', 'my-church'), 
			'choice_best_selling_products' =>				esc_html__('Best Selling Products', 'my-church'), 
			'choice_top_rated_products' =>					esc_html__('Top Rated Products', 'my-church'), 
			'products_field_orderby_descr' =>				esc_html__("Choose your products 'order by' parameter", 'my-church'), 
			'products_field_orderby_descr_note' =>			esc_html__("Sorting will not be applied for", 'my-church'), 
			'products_field_prod_number_title' =>			esc_html__('Number of Products', 'my-church'), 
			'products_field_prod_number_descr' =>			esc_html__('Enter the number of products for showing per page', 'my-church'), 
			'products_field_col_count_descr' =>				esc_html__('Choose number of products per row', 'my-church'), 
			'selected_products_title' =>					esc_html__('Selected Products', 'my-church'), 
			'selected_products_field_ids' => 				esc_html__('Products', 'my-church'), 
			'selected_products_field_ids_descr' => 			esc_html__('Choose products to be shown', 'my-church'), 
			'selected_products_field_ids_descr_note' => 	esc_html__('All products will be shown if empty', 'my-church') 
		));
	}
}

add_action('admin_enqueue_scripts', 'my_church_woocommerce_register_c_c_scripts');


/* Product IDs */
function my_church_woocommerce_product_ids() {
	$product_ids = get_posts(array(
		'numberposts' => -1, 
		'post_type' => 'product'
	));
	
	
	$out = array();
	
	
	if (!empty($product_ids)) {
		foreach ($product_ids as $product_id) {
			$out[$product_id->ID] = esc_html($product_id->post_title);
		}
	}
	
	
	return $out;
}

