<?php 
global $product; 
/* set on sale html */
$sale = '';
if ( $product->is_on_sale() ) {
	$sale = '<span class="onsale">' . __( 'Sale!', 'woocommerce' ) . '</span>';
}

/* set price html */
$price_html = $product->get_price_html();

/* set btn add to cart */
$class = implode( ' ', array_filter( array(
				'button',
				'product_type_' . $product->product_type,
				$product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
				$product->supports( 'ajax_add_to_cart' ) ? 'ajax_add_to_cart' : ''
		) ) );
$add_to_cart = sprintf( '<a rel="nofollow" href="%s" data-quantity="%s" data-product_id="%s" data-product_sku="%s" class="%s">%s</a>',
					esc_url( $product->add_to_cart_url() ),
					esc_attr( isset( $quantity ) ? $quantity : 1 ),
					esc_attr( $product->id ),
					esc_attr( $product->get_sku() ),
					esc_attr( isset( $class ) ? $class : 'button' ),
					'<i class="fa fa-shopping-cart"></i>'
				);

/* set quickview html */
$quickview = do_shortcode('[bears_quickview layout="woocommerce" pid="'.get_the_ID().'" icon="fa fa-search-plus" extra_class="bt-quickview"]');

/* set categories html */
$cats = get_the_term_list( get_the_ID(), 'product_cat', '', ' / ' );

?>
<article <?php post_class(); ?>>
	<div class="bt-thumb">
		<?php 
			echo $sale; 
			if ( has_post_thumbnail() ) the_post_thumbnail('full');
		?>
	</div>
	<div class="bt-content">
		<ul class="bt-action">
			<li><?php echo $quickview; ?></li>
			<li><?php echo $add_to_cart; ?></li>
		</ul>
		<h3 class="bt-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<div class="bt-categories"><?php echo $cats; ?></div>
		<?php if ( $price_html) echo '<div class="bt-price"><span>'.$price_html.'</span></div>'; ?>
	</div>
</article>