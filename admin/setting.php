<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
if ( ! function_exists('woo_shop_front_customizer_admin_page') ) :
	add_action( 'admin_menu' , 'woo_shop_front_customizer_admin_page' );
	function woo_shop_front_customizer_admin_page()
	{
		add_submenu_page( 'woocommerce', __('Front Customizer'),__('Front Customizer'), 'manage_options', 'woo-shop-front-customizer', 'woo_shop_front_customizer_options_display' ); 
	}
endif; 
add_action('admin_init','woo_shop_front_customizer_admin_scripts_styles');
function woo_shop_front_customizer_admin_scripts_styles(){
	wp_register_style('admin-stylesheet' , WSFC_PLUGIN_URL.'/admin/css/admin-style.css');
   	wp_enqueue_style('admin-stylesheet');
	wp_register_script('admin-script-js', WSFC_PLUGIN_URL.'/admin/js/admin-script.js', array('jquery'));
	wp_localize_script('admin-script-js', 'AJAX_URL', array( 'ajaxurl' => admin_url('admin-ajax.php')));        
    wp_enqueue_script('admin-script-js'); 
}
if ( ! function_exists('woo_shop_front_customizer_options_display') ) :
function woo_shop_front_customizer_options_display(){
	include (WSFC_PLUGIN_DIR . '/admin/view.php');
}
endif; 
add_action("wp_ajax_wsfs_save_shop_settings", "wsfs_save_shop_settings");
add_action("wp_ajax_nopriv_wsfs_save_shop_settings", "wsfs_save_shop_settings");
function wsfs_save_shop_settings() { 

	$wsfcshowHideBreadcrumb = sanitize_text_field($_REQUEST['wsfcshowHideBreadcrumb']);
	$wsfcshowHideTitle = sanitize_text_field($_REQUEST['wsfcshowHideTitle']);
	$wsfcshopTitle = sanitize_text_field($_REQUEST['wsfcshopTitle']);
	$wsfcshowHideSorting = sanitize_text_field($_REQUEST['wsfcshowHideSorting']);
	$wsfcshowHideProductImage = sanitize_text_field($_REQUEST['wsfcshowHideProductImage']);
	$wsfcshowHideSaleBadges = sanitize_text_field($_REQUEST['wsfcshowHideSaleBadges']);
	$wsfcshowProductPrice = sanitize_text_field($_REQUEST['wsfcshowProductPrice']);
	$wsfcshowProductTitle = sanitize_text_field($_REQUEST['wsfcshowProductTitle']);
	$wsfcshowProductRating = sanitize_text_field($_REQUEST['wsfcshowProductRating']);
	$wsfcshowProductCartButton = sanitize_text_field($_REQUEST['wsfcshowProductCartButton']);
	$wsfcshopProductNo = sanitize_text_field($_REQUEST['wsfcshopProductNo']);

	update_option( 'wsfcshowHideBreadcrumb', $wsfcshowHideBreadcrumb );
	update_option( 'wsfcshowHideTitle', $wsfcshowHideTitle );
	update_option( 'wsfcshopTitle', $wsfcshopTitle );
	update_option( 'wsfcshowHideSorting', $wsfcshowHideSorting );
	update_option( 'wsfcshowHideProductImage', $wsfcshowHideProductImage );
	update_option( 'wsfcshowHideSaleBadges', $wsfcshowHideSaleBadges );
	update_option( 'wsfcshowProductPrice', $wsfcshowProductPrice );
	update_option( 'wsfcshowProductTitle', $wsfcshowProductTitle );
	update_option( 'wsfcshowProductRating', $wsfcshowProductRating );
	update_option( 'wsfcshowProductCartButton', $wsfcshowProductCartButton );
	update_option( 'wsfcshopProductNo', $wsfcshopProductNo );

	die();
}
add_action("wp_ajax_wsfs_save_product_settings", "wsfs_save_product_settings");
add_action("wp_ajax_nopriv_wsfs_save_product_settings", "wsfs_save_product_settings");
function wsfs_save_product_settings() { 

	$wsfcProductSaleBadge = sanitize_text_field($_REQUEST['wsfcProductSaleBadge']);
	$wsfcProductGallery = sanitize_text_field($_REQUEST['wsfcProductGallery']);
	$wsfcProductTitle = sanitize_text_field($_REQUEST['wsfcProductTitle']);
	$wsfcProductRating = sanitize_text_field($_REQUEST['wsfcProductRating']);
	$wsfcProductPrice = sanitize_text_field($_REQUEST['wsfcProductPrice']);
	$wsfcProductExcerpt = sanitize_text_field($_REQUEST['wsfcProductExcerpt']);
	$wsfcProductCart = sanitize_text_field($_REQUEST['wsfcProductCart']);
	$wsfcProductMeta = sanitize_text_field($_REQUEST['wsfcProductMeta']);
	$wsfcProductsharing = sanitize_text_field($_REQUEST['wsfcProductsharing']);
	$wsfcProductTab = sanitize_text_field($_REQUEST['wsfcProductTab']);
	$wsfcProductUpsell = sanitize_text_field($_REQUEST['wsfcProductUpsell']);
	$wsfcProductRelated = sanitize_text_field($_REQUEST['wsfcProductRelated']);
	
	update_option( 'wsfcProductSaleBadge', $wsfcProductSaleBadge );
	update_option( 'wsfcProductGallery', $wsfcProductGallery );
	update_option( 'wsfcProductTitle', $wsfcProductTitle );
	update_option( 'wsfcProductRating', $wsfcProductRating );
	update_option( 'wsfcProductPrice', $wsfcProductPrice );
	update_option( 'wsfcProductExcerpt', $wsfcProductExcerpt );
	update_option( 'wsfcProductCart', $wsfcProductCart );
	update_option( 'wsfcProductMeta', $wsfcProductMeta );
	update_option( 'wsfcProductsharing', $wsfcProductsharing );
	update_option( 'wsfcProductTab', $wsfcProductTab );
	update_option( 'wsfcProductUpsell', $wsfcProductUpsell );
	update_option( 'wsfcProductRelated', $wsfcProductRelated );

	die();
}
