<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
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
	
	
	
?>
<div class="wrap">
<h2 class="settingtitle"><?php _e('Woo Shop Front Customizer','woocommerce'); ?></h2> 
<div class="leftTab">
		<ul class="tabList">
				<li><a href="javascript:void(0);" class="shopTab"><?php _e('Shop / Category Page','woocommerce'); ?></a></li>
				<li><a href="javascript:void(0);" class="productTab"><?php _e('Product Page','woocommerce'); ?></a></li>
		</ul>
		<div id="shopTab" class="displayDiv">
				<div class="row">
						<div class="msg"></div>
						<div class="labelClass"><?php _e('Breadcrumb : ','woocommerce'); ?></div>
						<div class="inputClass"><select id="wsfcshowHideBreadcrumb">	
								<option value="1" <?php echo ($wsfcshowHideBreadcrumb == 1)?"selected='selected'":""; ?>><?php _e('Show','woocommerce'); ?></option>
								<option value="2" <?php echo ($wsfcshowHideBreadcrumb == 2)?"selected='selected'":""; ?>><?php _e('Hide','woocommerce'); ?></option>
							</select></div>
				</div>	
				<div class="row">
						<div class="labelClass"><?php _e('Title : ','woocommerce'); ?></div>
						<div class="inputClass"><select id="wsfcshowHideTitle">	
								<option value="1" <?php echo ($wsfcshowHideTitle == 1)?"selected='selected'":""; ?>><?php _e('Show','woocommerce'); ?></option>
								<option value="2" <?php echo ($wsfcshowHideTitle == 2)?"selected='selected'":""; ?>><?php _e('Hide','woocommerce'); ?></option>
							</select></div>
				</div>	
				<div class="row" style="margin-top:10px;">
						<div class="labelClass"><?php _e('Shop Page Title : ','woocommerce'); ?></div>
						<div class="inputClass"><input type="text" id="wsfcshopTitle" value="<?php echo $wsfcshopTitle; ?>" style="width:40%;"></div>
				</div>
				<div class="row" style="margin-top:10px;">
						<div class="labelClass"><?php _e('Products Sorting : ','woocommerce'); ?></div>
						<div class="inputClass"><select id="wsfcshowHideSorting">	
								<option value="1" <?php echo ($wsfcshowHideSorting == 1)?"selected='selected'":""; ?>><?php _e('Show','woocommerce'); ?></option>
								<option value="2" <?php echo ($wsfcshowHideSorting == 2)?"selected='selected'":""; ?>><?php _e('Hide','woocommerce'); ?></option>
							</select></div>
				</div>
				<div class="row" style="margin-top:10px;">
						<div class="labelClass"><?php _e('Products Image : ','woocommerce'); ?></div>
						<div class="inputClass"><select id="wsfcshowHideProductImage">	
								<option value="1" <?php echo ($wsfcshowHideProductImage == 1)?"selected='selected'":""; ?>><?php _e('Show','woocommerce'); ?></option>
								<option value="2" <?php echo ($wsfcshowHideProductImage == 2)?"selected='selected'":""; ?>><?php _e('Hide','woocommerce'); ?></option>
							</select></div>
				</div>
				<div class="row" style="margin-top:10px;">
						<div class="labelClass"><?php _e('Sale badges : ','woocommerce'); ?></div>
						<div class="inputClass"><select id="wsfcshowHideSaleBadges">	
								<option value="1" <?php echo ($wsfcshowHideSaleBadges == 1)?"selected='selected'":""; ?>><?php _e('Show','woocommerce'); ?></option>
								<option value="2" <?php echo ($wsfcshowHideSaleBadges == 2)?"selected='selected'":""; ?>><?php _e('Hide','woocommerce'); ?></option>
							</select></div>
				</div>
				<div class="row" style="margin-top:10px;">
						<div class="labelClass"><?php _e('Products Title : ','woocommerce'); ?></div>
						<div class="inputClass"><select id="wsfcshowProductTitle">	
								<option value="1" <?php echo ($wsfcshowProductTitle == 1)?"selected='selected'":""; ?>><?php _e('Show','woocommerce'); ?></option>
								<option value="2" <?php echo ($wsfcshowProductTitle == 2)?"selected='selected'":""; ?>><?php _e('Hide','woocommerce'); ?></option>
							</select></div>
				</div>
				<div class="row" style="margin-top:10px;">
						<div class="labelClass"><?php _e('Products Price : ','woocommerce'); ?></div>
						<div class="inputClass"><select id="wsfcshowProductPrice">	
								<option value="1" <?php echo ($wsfcwsfcshowProductPrice == 1)?"selected='selected'":""; ?>><?php _e('Show','woocommerce'); ?></option>
								<option value="2" <?php echo ($wsfcwsfcshowProductPrice == 2)?"selected='selected'":""; ?>><?php _e('Hide','woocommerce'); ?></option>
							</select></div>
				</div>
				<div class="row" style="margin-top:10px;">
						<div class="labelClass"><?php _e('Products Rating : ','woocommerce'); ?></div>
						<div class="inputClass"><select id="wsfcshowProductRating">	
								<option value="1" <?php echo ($wsfcshowProductRating == 1)?"selected='selected'":""; ?>><?php _e('Show','woocommerce'); ?></option>
								<option value="2" <?php echo ($wsfcshowProductRating == 2)?"selected='selected'":""; ?>><?php _e('Hide','woocommerce'); ?></option>
							</select></div>
				</div>
				<div class="row" style="margin-top:10px;">
						<div class="labelClass"><?php _e('Products Cart Button : ','woocommerce'); ?></div>
						<div class="inputClass"><select id="wsfcshowProductCartButton">	
								<option value="1" <?php echo ($wsfcshowProductCartButton == 1)?"selected='selected'":""; ?>><?php _e('Show','woocommerce'); ?></option>
								<option value="2" <?php echo ($wsfcshowProductCartButton == 2)?"selected='selected'":""; ?>><?php _e('Hide','woocommerce'); ?></option>
							</select></div>
				</div>
				<div class="row" style="margin-top:10px;">
						<div class="labelClass"><?php _e('No of products on shop page : ','woocommerce'); ?></div>
						<div class="inputClass"><input type="text" id="wsfcshopProductNo" value="<?php echo $wsfcshopProductNo; ?>" style="width:10%;"></div>
				</div>
				<div class="row"><input name="save" class="savebutton" id="saveShopBtn" value="<?php _e('Save Setting','woocommerce'); ?>" type="submit"></div>
		</div>
		<div id="productTab" class="displayDiv">
				<div class="row" style="margin-top:10px;">
						<div class="msg"></div>
						<div class="labelClass"><?php _e('Sale badge : ','woocommerce'); ?></div>
						<div class="inputClass"><select id="wsfcProductSaleBadge">	
								<option value="1" <?php echo ($wsfcProductSaleBadge == 1)?"selected='selected'":""; ?>><?php _e('Show','woocommerce'); ?></option>
								<option value="2" <?php echo ($wsfcProductSaleBadge == 2)?"selected='selected'":""; ?>><?php _e('Hide','woocommerce'); ?></option>
							</select></div>
				</div>
				<div class="row" style="margin-top:10px;">
						<div class="labelClass"><?php _e('Product Title : ','woocommerce'); ?></div>
						<div class="inputClass"><select id="wsfcProductTitle">	
								<option value="1" <?php echo ($wsfcProductTitle == 1)?"selected='selected'":""; ?>><?php _e('Show','woocommerce'); ?></option>
								<option value="2" <?php echo ($wsfcProductTitle == 2)?"selected='selected'":""; ?>><?php _e('Hide','woocommerce'); ?></option>
							</select></div>
				</div>
				<div class="row" style="margin-top:10px;">
						<div class="labelClass"><?php _e('Product Gallery : ','woocommerce'); ?></div>
						<div class="inputClass"><select id="wsfcProductGallery">	
								<option value="1" <?php echo ($wsfcProductGallery == 1)?"selected='selected'":""; ?>><?php _e('Show','woocommerce'); ?></option>
								<option value="2" <?php echo ($wsfcProductGallery == 2)?"selected='selected'":""; ?>><?php _e('Hide','woocommerce'); ?></option>
							</select></div>
				</div>
				<div class="row" style="margin-top:10px;">
						<div class="labelClass"><?php _e('Product Rating : ','woocommerce'); ?></div>
						<div class="inputClass"><select id="wsfcProductRating">	
								<option value="1" <?php echo ($wsfcProductRating == 1)?"selected='selected'":""; ?>><?php _e('Show','woocommerce'); ?></option>
								<option value="2" <?php echo ($wsfcProductRating == 2)?"selected='selected'":""; ?>><?php _e('Hide','woocommerce'); ?></option>
							</select></div>
				</div>
				<div class="row" style="margin-top:10px;">
						<div class="labelClass"><?php _e('Product Price : ','woocommerce'); ?></div>
						<div class="inputClass"><select id="wsfcProductPrice">	
								<option value="1" <?php echo ($wsfcProductPrice == 1)?"selected='selected'":""; ?>><?php _e('Show','woocommerce'); ?></option>
								<option value="2" <?php echo ($wsfcProductPrice == 2)?"selected='selected'":""; ?>><?php _e('Hide','woocommerce'); ?></option>
							</select></div>
				</div>
				<div class="row" style="margin-top:10px;">
						<div class="labelClass"><?php _e('Product Short Description : ','woocommerce'); ?></div>
						<div class="inputClass"><select id="wsfcProductExcerpt">	
								<option value="1" <?php echo ($wsfcProductExcerpt == 1)?"selected='selected'":""; ?>><?php _e('Show','woocommerce'); ?></option>
								<option value="2" <?php echo ($wsfcProductExcerpt == 2)?"selected='selected'":""; ?>><?php _e('Hide','woocommerce'); ?></option>
							</select></div>
				</div>
				<div class="row" style="margin-top:10px;">
						<div class="labelClass"><?php _e('Product Cart Button : ','woocommerce'); ?></div>
						<div class="inputClass"><select id="wsfcProductCart">	
								<option value="1" <?php echo ($wsfcProductCart == 1)?"selected='selected'":""; ?>><?php _e('Show','woocommerce'); ?></option>
								<option value="2" <?php echo ($wsfcProductCart == 2)?"selected='selected'":""; ?>><?php _e('Hide','woocommerce'); ?></option>
							</select></div>
				</div>
				<div class="row" style="margin-top:10px;">
						<div class="labelClass"><?php _e('Product Meta : ','woocommerce'); ?></div>
						<div class="inputClass"><select id="wsfcProductMeta">	
								<option value="1" <?php echo ($wsfcProductMeta == 1)?"selected='selected'":""; ?>><?php _e('Show','woocommerce'); ?></option>
								<option value="2" <?php echo ($wsfcProductMeta == 2)?"selected='selected'":""; ?>><?php _e('Hide','woocommerce'); ?></option>
							</select></div>
				</div>
				<div class="row" style="margin-top:10px;">
						<div class="labelClass"><?php _e('Product Sharing Links : ','woocommerce'); ?></div>
						<div class="inputClass"><select id="wsfcProductsharing">	
								<option value="1" <?php echo ($wsfcProductsharing == 1)?"selected='selected'":""; ?>><?php _e('Show','woocommerce'); ?></option>
								<option value="2" <?php echo ($wsfcProductsharing == 2)?"selected='selected'":""; ?>><?php _e('Hide','woocommerce'); ?></option>
							</select></div>
				</div>
				<div class="row" style="margin-top:10px;">
						<div class="labelClass"><?php _e('Product Summary Tab : ','woocommerce'); ?></div>
						<div class="inputClass"><select id="wsfcProductTab">	
								<option value="1" <?php echo ($wsfcProductTab == 1)?"selected='selected'":""; ?>><?php _e('Show','woocommerce'); ?></option>
								<option value="2" <?php echo ($wsfcProductTab == 2)?"selected='selected'":""; ?>><?php _e('Hide','woocommerce'); ?></option>
							</select></div>
				</div>
				<div class="row" style="margin-top:10px;">
						<div class="labelClass"><?php _e('Product Upsell : ','woocommerce'); ?></div>
						<div class="inputClass"><select id="wsfcProductUpsell">	
								<option value="1" <?php echo ($wsfcProductUpsell == 1)?"selected='selected'":""; ?>><?php _e('Show','woocommerce'); ?></option>
								<option value="2" <?php echo ($wsfcProductUpsell == 2)?"selected='selected'":""; ?>><?php _e('Hide','woocommerce'); ?></option>
							</select></div>
				</div>
				<div class="row" style="margin-top:10px;">
						<div class="labelClass"><?php _e('Related Products : ','woocommerce'); ?></div>
						<div class="inputClass"><select id="wsfcProductRelated">	
								<option value="1" <?php echo ($wsfcProductRelated == 1)?"selected='selected'":""; ?>><?php _e('Show','woocommerce'); ?></option>
								<option value="2" <?php echo ($wsfcProductRelated == 2)?"selected='selected'":""; ?>><?php _e('Hide','woocommerce'); ?></option>
							</select></div>
				</div>
				<div class="row"><input name="save" class="savebutton" id="productSaveBtn" value="<?php _e('Save Settings','woocommerce'); ?>" type="submit"></div>
		</div>
</div>
