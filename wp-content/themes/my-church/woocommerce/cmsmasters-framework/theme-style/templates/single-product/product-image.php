<?php
/**
 * @cmsmasters_package 	My Church
 * @cmsmasters_version 	1.0.5
 */


global $post, $product;
$post_thumbnail_id = get_post_thumbnail_id( $post->ID );
$full_size_image   = wp_get_attachment_image_src( $post_thumbnail_id, 'full' );
$image_title       = get_post_field( 'post_excerpt', $post_thumbnail_id );


echo '<div class="images cmsmasters_product_images">';
	if (method_exists($product, 'get_available_variations')) {
		$cmsmasters_product_variable_items = $product->get_available_variations();
		
		
		echo '<div class="dn">';
		foreach ($cmsmasters_product_variable_items as $cmsmasters_product_variable_item) {
			if ($cmsmasters_product_variable_item['image']['full_src'] != '' && $cmsmasters_product_variable_item['image']['full_src'] != $full_size_image[0]) {
				echo '<a href="' . esc_url($cmsmasters_product_variable_item['image']['full_src']) . '" itemprop="image" title="' . esc_attr($cmsmasters_product_variable_item['image']['title']) . '" rel="ilightbox[cmsmasters_product_gallery]"></a>';
			}
		}
		echo '</div>';
	}
	
	
	$attributes = array(
		'title'                   => $image_title,
		'data-src'                => $full_size_image[0],
		'data-large_image'        => $full_size_image[0],
		'data-large_image_width'  => $full_size_image[1],
		'data-large_image_height' => $full_size_image[2],
	);
	
	
	if (has_post_thumbnail()) {
		$html  = '<div data-thumb="' . get_the_post_thumbnail_url( $post->ID, 'shop_thumbnail' ) . '" class="woocommerce-product-gallery__image"><a href="' . esc_url( $full_size_image[0] ) . '" class="cmsmasters_product_image" rel="ilightbox[cmsmasters_product_gallery]">';
		$html .= get_the_post_thumbnail( $post->ID, 'shop_single', $attributes );
		$html .= '</a></div>';
	} else {
		$html  = '<div class="woocommerce-product-gallery__image--placeholder">';
		$html .= sprintf( '<img src="%s" alt="%s" class="wp-post-image" />', esc_url( wc_placeholder_img_src() ), esc_html__( 'Awaiting product image', 'woocommerce' ) );
		$html .= '</div>';
	}
	
	
	echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', $html, get_post_thumbnail_id( $post->ID ) );
	
	
	do_action('woocommerce_product_thumbnails');

echo '</div>';

