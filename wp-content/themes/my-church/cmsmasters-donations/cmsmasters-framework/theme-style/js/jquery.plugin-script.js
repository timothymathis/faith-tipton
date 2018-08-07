/**
 * @package 	WordPress
 * @subpackage 	My Church
 * @version		1.0.5
 * 
 * CMSMasters Donations Scripts
 * Created by CMSMasters
 * 
 */


"use strict";

jQuery(document).ready(function () { 
	jQuery('.cmsmasters_single_slider_campaign').find('.cmsmasters_stat').each(function () {
		jQuery(this).css( {
			width : jQuery(this).data('percent') + '%'
		} );
	} );
} );

