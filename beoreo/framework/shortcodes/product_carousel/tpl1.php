<article <?php post_class(); ?>>
	<div class="bt-thumb">
		<?php if ( has_post_thumbnail() ) the_post_thumbnail('full'); ?>
		<div class="bt-overlay">
			<div class="bt-inner">
				<ul class="bt-action">
					<li><?php echo do_shortcode('[bears_quickview layout="woocommerce" pid="'.get_the_ID().'" icon="fa fa-search-plus" extra_class="bt-quickview"]'); ?></li>
					<li><?php echo do_shortcode('[bears_woofavorite_icon pid="'.get_the_ID().'" class="bt-wishlist"]'); ?></li>
					<li><a class="readmore" href="<?php the_permalink(); ?>"><i class="fa fa-link"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="bt-content">
		<h3 class="bt-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<div class="bt-categories"><?php the_terms(get_the_ID(), 'product_cat', '', ', ' ); ?></div>
	</div>
</article>