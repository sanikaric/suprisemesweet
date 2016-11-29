<article <?php post_class(); ?>>
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
</article>