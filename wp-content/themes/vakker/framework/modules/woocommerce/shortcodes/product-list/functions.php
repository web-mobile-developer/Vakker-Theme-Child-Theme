<?php

if ( ! function_exists( 'vakker_eltd_add_product_list_shortcode' ) ) {
	function vakker_eltd_add_product_list_shortcode( $shortcodes_class_name ) {
		$shortcodes = array(
			'ElatedCore\CPT\Shortcodes\ProductList\ProductList',
		);
		
		$shortcodes_class_name = array_merge( $shortcodes_class_name, $shortcodes );
		
		return $shortcodes_class_name;
	}
	
	if ( vakker_eltd_core_plugin_installed() ) {
		add_filter( 'eltd_core_filter_add_vc_shortcode', 'vakker_eltd_add_product_list_shortcode' );
	}
}

if ( ! function_exists( 'vakker_eltd_add_product_list_into_shortcodes_list' ) ) {
	function vakker_eltd_add_product_list_into_shortcodes_list( $woocommerce_shortcodes ) {
		$woocommerce_shortcodes[] = 'eltd_product_list';
		
		return $woocommerce_shortcodes;
	}
	
	add_filter( 'vakker_eltd_woocommerce_shortcodes_list', 'vakker_eltd_add_product_list_into_shortcodes_list' );
}