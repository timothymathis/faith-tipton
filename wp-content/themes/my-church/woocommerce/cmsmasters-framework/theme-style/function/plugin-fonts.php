<?php
/**
 * @package 	WordPress
 * @subpackage 	My Church
 * @version 	1.0.2
 * 
 * WooCommerce Fonts Rules
 * Created by CMSMasters
 * 
 */


function my_church_woocommerce_fonts($custom_css) {
	$cmsmasters_option = my_church_get_global_options();
	
	
	$custom_css .= "
/***************** Start WooCommerce Font Styles ******************/

	/* Start Navigation Title Font */
	/* Finish Navigation Title Font */
	
	/* Start Content Font */
	.shop_table.woocommerce-checkout-review-order-table .product-name dl, 
	.shop_table.order_details .product-name dl {
		font-family:" . my_church_get_google_font($cmsmasters_option['my-church' . '_content_font_google_font']) . $cmsmasters_option['my-church' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['my-church' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['my-church' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['my-church' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['my-church' . '_content_font_font_style'] . ";
	}
	
	.shop_table.woocommerce-checkout-review-order-table .product-name dl, 
	.shop_table.order_details .product-name dl {
		text-transform:none;
	}
	/* Finish Content Font */
	
	
	/* Start Link Font */
	/* Finish Link Font */
	
	
	/* Start H1 Font */
	/* Finish H1 Font */
	
	
	/* Start H2 Font */
	/* Finish H2 Font */
	
		
	/* Start H3 Font */
	.cart_totals > h2,
	div.products > h2,
	.cmsmasters_single_product .product_title,
	ul.order_details {
		font-family:" . my_church_get_google_font($cmsmasters_option['my-church' . '_h3_font_google_font']) . $cmsmasters_option['my-church' . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option['my-church' . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['my-church' . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['my-church' . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['my-church' . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['my-church' . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['my-church' . '_h3_font_text_decoration'] . ";
	}
	
	.cmsmasters_single_product .product_title {
		font-size:" . ((int) $cmsmasters_option['my-church' . '_h3_font_font_size'] + 2) . "px;
	}
	/* Finish H3 Font */
	
	
	/* Start H4 Font */
	.cmsmasters_single_product .price,
	.cmsmasters_product .button_to_cart,
	.cmsmasters_product .price {
		font-family:" . my_church_get_google_font($cmsmasters_option['my-church' . '_h4_font_google_font']) . $cmsmasters_option['my-church' . '_h4_font_system_font'] . ";
		font-size:" . $cmsmasters_option['my-church' . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['my-church' . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['my-church' . '_h4_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['my-church' . '_h4_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['my-church' . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['my-church' . '_h4_font_text_decoration'] . ";
	}
	
	.cmsmasters_single_product .price {
		font-size:" . ((int) $cmsmasters_option['my-church' . '_h4_font_font_size'] + 8) . "px;
	}
	/* Finish H4 Font */
	
	
	/* Start H5 Font */
	.shop_table.woocommerce-checkout-review-order-table .cart-subtotal td .amount,
	.shop_table.woocommerce-checkout-review-order-table .order-total td, 
	.shop_table.woocommerce-checkout-review-order-table .order-total th, 
	.shop_table.woocommerce-checkout-review-order-table .cart-subtotal th, 
	.shop_table.woocommerce-checkout-review-order-table th.product-name, 
	.cart_totals table .cart-subtotal th, 
	.cart_totals table .cart-subtotal .amount, 
	.cart_totals table .order-total th, 
	.cart_totals td strong > .amount,
	.cart_totals table .order-total .amount,
	.shop_table .product-name a, 
	.shop_table.order_details td a, 
	.shop_table.order_details th a, 
	.shop_table thead th, 
	.cmsmasters_woo_wrap_result .woocommerce-result-count, 
	ul.order_details strong, 
	.widget_layered_nav ul li, 
	.widget_layered_nav ul li a, 
	.widget_layered_nav_filters ul li, 
	.widget_layered_nav_filters ul li a, 
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list a, 
	.widget_shopping_cart .cart_list a, 
	.widget > .product_list_widget a {
		font-family:" . my_church_get_google_font($cmsmasters_option['my-church' . '_h5_font_google_font']) . $cmsmasters_option['my-church' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['my-church' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['my-church' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['my-church' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['my-church' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['my-church' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['my-church' . '_h5_font_text_decoration'] . ";
	}
	
	.cart_totals table .cart-subtotal th, 
	.cart_totals table .cart-subtotal .amount, 
	.cart_totals table .order-total th, 
	.cart_totals td strong > .amount,
	.cart_totals table .order-total .amount,
	.shop_table .product-name a, 
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list a, 
	.widget_shopping_cart .cart_list a, 
	.widget > .product_list_widget a {
		font-size:" . ((int) $cmsmasters_option['my-church' . '_h5_font_font_size'] - 3) . "px;
		line-height:" . ((int) $cmsmasters_option['my-church' . '_h5_font_line_height'] - 6) . "px;
	}
	
	.shop_table.woocommerce-checkout-review-order-table .cart-subtotal td .amount,
	.shop_table.woocommerce-checkout-review-order-table .order-total td, 
	.shop_table.woocommerce-checkout-review-order-table .order-total th, 
	.shop_table.woocommerce-checkout-review-order-table .cart-subtotal th, 
	.shop_table.woocommerce-checkout-review-order-table th.product-name {
		font-size:" . ((int) $cmsmasters_option['my-church' . '_h5_font_font_size'] - 1) . "px;
	}
	
	@media only screen and (max-width: 1440px) {	
		ul.order_details {
			font-size:" . $cmsmasters_option['my-church' . '_h5_font_font_size'] . "px;
			line-height:" . $cmsmasters_option['my-church' . '_h5_font_line_height'] . "px;
		}
	}
	/* Finish H5 Font */
	
	
	/* Start H6 Font */
	.widget > .product_list_widget .reviewer,
	.widget > .product_list_widget .amount, 
	.widget_product_categories ul li, 
	.widget_product_categories ul li a, 
	.widget_price_filter .price_slider_amount .price_label, 
	.widget_shopping_cart .total, 
	.widget_shopping_cart .total strong, 
	.widget_shopping_cart .cart_list .quantity, 
	.form-row label,
	.form-row label a,
	.shop_table td > .amount, 
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .total, 
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .total strong, 
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list .quantity, 
	.shop_attributes td,
	.cmsmasters_product .price del,
	.onsale, 
	.out-of-stock, 
	.stock, 
	.cmsmasters_product .cmsmasters_product_cat, 
	.cmsmasters_product .cmsmasters_product_cat a, 
	.cmsmasters_single_product .product_meta, 
	.cmsmasters_single_product .product_meta a {
		font-family:" . my_church_get_google_font($cmsmasters_option['my-church' . '_h6_font_google_font']) . $cmsmasters_option['my-church' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['my-church' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['my-church' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['my-church' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['my-church' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['my-church' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['my-church' . '_h6_font_text_decoration'] . ";
	}
	
	.widget > .product_list_widget .amount, 
	.widget_shopping_cart .cart_list .quantity,
	.form-row label a,
	.form-row label {
		font-size:" . ((int) $cmsmasters_option['my-church' . '_h6_font_font_size'] - 1) . "px;
	}
	
	.cmsmasters_product .price del {
		font-size:" . ((int) $cmsmasters_option['my-church' . '_h6_font_font_size'] - 2) . "px;
		text-decoration:line-through;
	}
	
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list .quantity {
		font-size:" . ((int) $cmsmasters_option['my-church' . '_h6_font_font_size'] - 3) . "px;
	}
	/* Finish H6 Font */
	
	
	/* Start Button Font */
	.widget_price_filter .price_slider_amount .button,
	.widget_shopping_cart .buttons .button,
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .buttons .button {
		font-family:" . my_church_get_google_font($cmsmasters_option['my-church' . '_button_font_google_font']) . $cmsmasters_option['my-church' . '_button_font_system_font'] . ";
		font-size:" . $cmsmasters_option['my-church' . '_button_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['my-church' . '_button_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['my-church' . '_button_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['my-church' . '_button_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['my-church' . '_button_font_text_transform'] . ";
	}
	
	.widget_price_filter .price_slider_amount .button,
	.widget_shopping_cart .buttons .button,
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .buttons .button {
		font-size:" . ((int) $cmsmasters_option['my-church' . '_button_font_font_size'] - 1) . "px;
		line-height:" . ((int) $cmsmasters_option['my-church' . '_button_font_line_height'] - 6) . "px;
	}
	
	.shop_table .actions .button, 
	.cmsmasters_single_product .cart .single_add_to_cart_button {
		line-height:" . ((int) $cmsmasters_option['my-church' . '_button_font_line_height'] - 4) . "px;
	}
	/* Finish Button Font */
	
	
	/* Start Text Fields Font */
	.select2-dropdown {
		font-family:" . my_church_get_google_font($cmsmasters_option['my-church' . '_input_font_google_font']) . $cmsmasters_option['my-church' . '_input_font_system_font'] . ";
		font-size:" . $cmsmasters_option['my-church' . '_input_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['my-church' . '_input_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['my-church' . '_input_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['my-church' . '_input_font_font_style'] . ";
	}
	/* Finish Text Fields Font */
	
	
	/* Start Small Text Font */
	/* Finish Small Text Font */

/***************** Finish WooCommerce Font Styles ******************/

";
	
	
	return $custom_css;
}

add_filter('my_church_theme_fonts_filter', 'my_church_woocommerce_fonts');

