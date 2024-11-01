jQuery(document).ready(function(){
	jQuery('ul.tabList li a.shopTab').addClass('active');
	jQuery(document).on("click", "ul.tabList li a ", function(){
		var anchorClass =  jQuery(this).attr('class');
		jQuery('.displayDiv').hide();
		jQuery('.msg span').remove();
		jQuery('#'+anchorClass).show();
		jQuery('ul.tabList li a').removeClass('active'); 
		jQuery('.'+anchorClass).addClass('active'); 
	});
	jQuery(document).on("click", "#saveShopBtn", function(){
		var wsfcshowHideBreadcrumb = jQuery('#wsfcshowHideBreadcrumb').val();
		var wsfcshowHideTitle = jQuery('#wsfcshowHideTitle').val();
		var wsfcshopTitle = jQuery('#wsfcshopTitle').val();
		var wsfcshowHideSorting = jQuery('#wsfcshowHideSorting').val();
		var wsfcshowHideProductImage = jQuery('#wsfcshowHideProductImage').val();
		var wsfcshowHideSaleBadges = jQuery('#wsfcshowHideSaleBadges').val();
		var wsfcshowProductPrice = jQuery('#wsfcshowProductPrice').val();
		var wsfcshowProductTitle = jQuery('#wsfcshowProductTitle').val();
		var wsfcshowProductRating = jQuery('#wsfcshowProductRating').val();
		var wsfcshowProductCartButton = jQuery('#wsfcshowProductCartButton').val();
		var wsfcshopProductNo = jQuery('#wsfcshopProductNo').val();
		jQuery.ajax({
				type: "POST",
				url: AJAX_URL.ajaxurl,
				data: 
				{
					action: 'wsfs_save_shop_settings',
					wsfcshowHideBreadcrumb : wsfcshowHideBreadcrumb,
					wsfcshowHideTitle : wsfcshowHideTitle,
					wsfcshopTitle : wsfcshopTitle,
					wsfcshowHideSorting : wsfcshowHideSorting,
					wsfcshowHideProductImage : wsfcshowHideProductImage,
					wsfcshowHideSaleBadges : wsfcshowHideSaleBadges,
					wsfcshowProductPrice : wsfcshowProductPrice,
					wsfcshowProductTitle : wsfcshowProductTitle,
					wsfcshowProductRating : wsfcshowProductRating,
					wsfcshowProductCartButton : wsfcshowProductCartButton,
					wsfcshopProductNo : wsfcshopProductNo
				},
				success: function(data){
					jQuery('.msg').html('<span class="confirm">Shop page settings saved successfully.</span>');
				}
			});
	});
	jQuery(document).on("click", "#productSaveBtn", function(){
		var wsfcProductSaleBadge = jQuery('#wsfcProductSaleBadge').val();
		var wsfcProductGallery = jQuery('#wsfcProductGallery').val();
		var wsfcProductTitle = jQuery('#wsfcProductTitle').val();
		var wsfcProductRating = jQuery('#wsfcProductRating').val();
		var wsfcProductPrice = jQuery('#wsfcProductPrice').val();
		var wsfcProductExcerpt = jQuery('#wsfcProductExcerpt').val();
		var wsfcProductCart = jQuery('#wsfcProductCart').val();
		var wsfcProductMeta = jQuery('#wsfcProductMeta').val();
		var wsfcProductsharing = jQuery('#wsfcProductsharing').val();
		var wsfcProductTab = jQuery('#wsfcProductTab').val();
		var wsfcProductUpsell = jQuery('#wsfcProductUpsell').val();
		var wsfcProductRelated = jQuery('#wsfcProductRelated').val();
		jQuery.ajax({
				type: "POST",
				url: AJAX_URL.ajaxurl,
				data: 
				{
					action: 'wsfs_save_product_settings',
					wsfcProductSaleBadge : wsfcProductSaleBadge,
					wsfcProductGallery : wsfcProductGallery,
					wsfcProductTitle : wsfcProductTitle,
					wsfcProductRating : wsfcProductRating,
					wsfcProductPrice : wsfcProductPrice,
					wsfcProductExcerpt : wsfcProductExcerpt,
					wsfcProductCart : wsfcProductCart,
					wsfcProductMeta : wsfcProductMeta,
					wsfcProductsharing : wsfcProductsharing,
					wsfcProductTab : wsfcProductTab,
					wsfcProductUpsell : wsfcProductUpsell,
					wsfcProductRelated : wsfcProductRelated
				},
				success: function(data){
					jQuery('.msg').html('<span class="confirm">Product page settings saved successfully.</span>');
				}
			});
	});
	jQuery(document).on("click", "#fetchBtn", function(){
		jQuery.ajax({
				type: "POST",
				url: AJAX_URL.ajaxurl,
				data: 
				{
					action: 'fetch_vacancy_from_XML'
				},
			    beforeSend: function() {
					jQuery('.msg').html('<span class="confirm">Processing....!</span>');
				},
				success: function(data){
					jQuery('.msg').html(data);
				}
		});
	});
	jQuery(document).on("click", "#applyBtn", function(){
		var applyformFlag = jQuery('#applyformFlag').val();
		var applyformContact = jQuery('#applyformContact').val();
			jQuery.ajax({
					type: "POST",
					url: AJAX_URL.ajaxurl,
					data: 
					{
						action: 'apply_vacancy_from',
						applyformFlag : applyformFlag,
						applyformContact : applyformContact
					},
					success: function(data){
						jQuery('.msg').html(data);
					}
			});
	});	
}); 