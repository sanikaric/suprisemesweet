<article <?php post_class(); ?>>
	<div class="bt-thumb">
		<?php if ( has_post_thumbnail() ) the_post_thumbnail('full'); ?>
	</div>
	<div class="bt-overlay">
		<div class="bt-content">
			<h3 class="bt-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<a class="bt-buy-product hvr-bounce-to-right" href="<?php the_permalink(); ?>"><?php _e('BUY OUR PRODUCT', 'beoreo'); ?></a>
		</div>
	</div>
</article>