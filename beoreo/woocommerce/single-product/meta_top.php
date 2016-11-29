<?php
/**
 * Single Product Meta Top
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/meta.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post, $product;

?>
<div class="product_meta_top">
	<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>

		<div class="sku_wrapper"><span><i class="fa fa-firefox "></i> <?php _e( 'Product SKU: ', 'woocommerce' ); ?></span><?php echo ( $sku = $product->get_sku() ) ? $sku : __( 'N/A', 'woocommerce' ); ?></div>

	<?php endif; ?>
	<?php
		// Availability
		$availability      = $product->get_availability();
		$availability_html = empty( $availability['availability'] ) ? '' : '<div class="stock ' . esc_attr( $availability['class'] ) . '"><span><i class="fa fa-firefox "></i> '.__('In Store: ', 'woocommerce').'</span>' . esc_html( $availability['availability'] ) . '</div>';

		echo apply_filters( 'woocommerce_stock_html', $availability_html, $availability['availability'], $product );
	?>
</div>
