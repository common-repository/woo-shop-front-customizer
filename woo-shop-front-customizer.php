<?php	/**
		Plugin Name: Woo Shop Front Customizer
		Description: Woo Shop Front Customizer
		Version: 1.0.0
		Author: TheWPexperts 
		Author URI: http://www.thewpexperts.com/
		Version: 1.0
		License: GPL 2.0
		Text Domain: woocommerce
	 */
	define('WSFC_PLUGIN_URL',plugin_dir_url( __FILE__ ));
	define('WSFC_PLUGIN_DIR',dirname(__FILE__));
	include( WSFC_PLUGIN_DIR. '/admin/setting.php' );
	add_action('woocommerce_init','wspc_shop_page_function');
	add_action('woocommerce_init','wspc_product_page_function');
	function wspc_shop_page_function(){
		$wsfcshowHideBreadcrumb = get_option('wsfcshowHideBreadcrumb'); 
		$wsfcshowHideTitle = get_option('wsfcshowHideTitle'); 
		$wsfcshopTitle = get_option('wsfcshopTitle'); 
		$wsfcshowHideSorting = get_option('wsfcshowHideSorting'); 
		$wsfcshowHideProductImage = get_option('wsfcshowHideProductImage'); 
		$wsfcshowHideSaleBadges = get_option('wsfcshowHideSaleBadges'); 
		$wsfcshowProductPrice = get_option('wsfcshowProductPrice'); 
		$wsfcshowProductTitle = get_option('wsfcshowProductTitle'); 
		$wsfcshowProductRating = get_option('wsfcshowProductRating'); 
		$wsfcshowProductCartButton = get_option('wsfcshowProductCartButton'); 
		$wsfcshopProductNo = get_option('wsfcshopProductNo'); 
		if($wsfcshowHideBreadcrumb == 2){
			remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);
		}
		if($wsfcshowHideTitle == 2){
			add_filter( 'woocommerce_show_page_title' , 'wspc_shop_page_title' );
		}
		if($wsfcshowHideSorting == 2){
			remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 10 );
			remove_action( 'woocommerce_after_shop_loop', 'woocommerce_catalog_ordering', 10 );
		}
		if($wsfcshowHideProductImage == 2){
			remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
		}
		if($wsfcshowHideSaleBadges == 2){
			remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );
		}
		if($wsfcshowProductPrice == 2){
			remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
		}
		if($wsfcshowProductTitle == 2){
			remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
		}
		if($wsfcshowProductRating == 2){
			remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
		}
		if($wsfcshowProductCartButton == 2){
			remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
		}
		if(!empty($wsfcshopTitle) && $wsfcshowHideTitle == 1){
			add_filter( 'woocommerce_page_title', 'wspc_shop_change_title');
		}
		if(!empty($wsfcshopProductNo)){
			add_filter( 'loop_shop_per_page', 'wspc_shop_product_per_page', 20 );
		}
	}
	function wspc_shop_page_title( $page_title ) {
		return false;
	}
	function wspc_shop_change_title( $page_title ) {
	  $wsfcshopTitle = get_option('wsfcshopTitle'); 	
	  if( $page_title == 'Shop' && !empty($wsfcshopTitle)) {
		$returnTitle = $wsfcshopTitle;
	  }else{
		$returnTitle = $page_title; 
	  }
	  return $returnTitle;
	}
	function wspc_shop_product_per_page( $cols ) {
		$wsfcshopProductNo = get_option('wsfcshopProductNo'); 
	    $cols = $wsfcshopProductNo;
	    return $cols;
	}
	function wspc_product_page_function(){
		$wsfcProductSaleBadge = get_option('wsfcProductSaleBadge'); 
		$wsfcProductGallery = get_option('wsfcProductGallery'); 
		$wsfcProductTitle = get_option('wsfcProductTitle'); 
		$wsfcProductRating = get_option('wsfcProductRating'); 
		$wsfcProductPrice = get_option('wsfcProductPrice'); 
		$wsfcProductExcerpt = get_option('wsfcProductExcerpt'); 
		$wsfcProductCart = get_option('wsfcProductCart'); 
		$wsfcProductMeta = get_option('wsfcProductMeta'); 
		$wsfcProductsharing = get_option('wsfcProductsharing'); 
		$wsfcProductTab = get_option('wsfcProductTab'); 
		$wsfcProductUpsell = get_option('wsfcProductUpsell'); 
		$wsfcProductRelated = get_option('wsfcProductRelated'); 
		if($wsfcProductSaleBadge == 2){
			remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );
		}
		if($wsfcProductGallery == 2){
			remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );
		}
		if($wsfcProductTitle == 2){
			remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
		}
		if($wsfcProductRating == 2){
			remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
		}
		if($wsfcProductPrice == 2){
			remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
		}
		if($wsfcProductExcerpt == 2){
			remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
		}
		if($wsfcProductCart == 2){
			remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
		}
		if($wsfcProductMeta == 2){
			remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
		}
		if($wsfcProductsharing == 2){
			remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50 );
		}
		if($wsfcProductTab == 2){		
			remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
		}
		if($wsfcProductUpsell == 2){		
			remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
		}
		if($wsfcProductRelated == 2){		
			remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
		}
	}
