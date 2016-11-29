<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see     http://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.6.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product, $woocommerce_loop;

// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) ) {
	$woocommerce_loop['loop'] = 0;
}

// Store column count for displaying the grid
if ( empty( $woocommerce_loop['columns'] ) ) {
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 3 );
}

// Layout grid/list;
$item_layout = 'grid';
if  (isset($_GET['bt_layout'])) {
	$item_layout = $_GET['bt_layout'];
}

// Ensure visibility
if ( ! $product || ! $product->is_visible() ) {
	return;
}

// Increase loop count
$woocommerce_loop['loop']++;

// Extra post classes
$classes = array();
$classes[] = $item_layout;

if($item_layout == 'list') $woocommerce_loop['columns'] = 1;

switch ($woocommerce_loop['columns']) {
	case 1:
		$classes[] = 'col-xs-12 col-sm-12 col-md-12 col-lg-12';
		break;
	case 2:
		$classes[] = 'col-xs-12 col-sm-6 col-md-6 col-lg-6';
		break;
	case 3:
		$classes[] = 'col-xs-12 col-sm-6 col-md-6 col-lg-4';
		break;
	case 4:
		$classes[] = 'col-xs-12 col-sm-6 col-md-3 col-lg-3';
		break;
	default:
		$classes[] = 'col-xs-12 col-sm-6 col-md-3 col-lg-3';
		break;
}

?>
<div class="<?php echo esc_attr(implode(' ', $classes)); ?>">
	
	<article <?php post_class(); ?>>
		<?php if($item_layout == 'grid') { ?>
			<div class="bt-thumb">
				<?php
					//do_action('woocommerce_template_loop_product_link_open');
					do_action('woocommerce_show_product_loop_sale_flash');
					do_action('woocommerce_template_loop_product_thumbnail');
					//do_action('woocommerce_template_loop_product_link_close');
				?>
				<div class="bt-actions">
					<?php 
						do_action('woocommerce_template_loop_add_to_cart'); 
						echo do_shortcode('[bears_quickview layout="woocommerce" pid="'.get_the_ID().'" icon="fa fa-search-plus" extra_class="bt-quickview"]');
						echo do_shortcode('[bears_woofavorite_icon pid="'.get_the_ID().'" class="bt-wishlist"]');
					?>
				</div>
			</div>
			<div class="bt-content">
				<?php
					do_action('woocommerce_template_loop_product_link_open');
					do_action('woocommerce_template_loop_product_title');
					do_action('woocommerce_template_loop_product_link_close');
					do_action('woocommerce_template_loop_price');
					do_action('woocommerce_template_loop_rating');
					
				?>
			</div>
		<?php } else { ?>
			<div class="bt-col-full-height">
				<div class="bt-col bt-col-left">
					<div class="bt-thumb">
						<?php
							do_action('woocommerce_template_loop_product_link_open');
							do_action('woocommerce_show_product_loop_sale_flash');
							do_action('woocommerce_template_loop_product_thumbnail');
							do_action('woocommerce_template_loop_product_link_close');
						?>
					</div>
				</div>
				<div class="bt-col bt-col-right">
					<div class="bt-content">
						<?php
							do_action('woocommerce_template_loop_product_link_open');
							do_action('woocommerce_template_loop_product_title');
							do_action('woocommerce_template_loop_product_link_close');
						?>
						<div class="price-rating">
							<?php 
								do_action('woocommerce_template_loop_price');
								do_action('woocommerce_template_loop_rating');
							?>
						</div>
						<?php do_action('woocommerce_template_single_excerpt'); ?>
						<div class="bt-actions">
							<?php 
								do_action('woocommerce_template_loop_add_to_cart'); 
								echo do_shortcode('[bears_quickview layout="woocommerce" pid="'.get_the_ID().'" icon="fa fa-search-plus" extra_class="bt-quickview"]');
								echo do_shortcode('[bears_woofavorite_icon pid="'.get_the_ID().'" class="bt-wishlist"]');
							?>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
	</article>
</div>
