<article <?php post_class(); ?>>
	<div class="testimonial-item">
		<div class="bt-excerpt">
			<?php echo get_the_excerpt(); ?>
		</div>
		<div class="bt-bottom">
			<div class="bt-thumb">
				<?php if (has_post_thumbnail()) the_post_thumbnail('thumbnail'); ?>
			</div>
			<div class="bt-info">
				<h4 class="bt-title"><?php the_title(); ?></h4>
				<div class="bt-public"><?php echo get_the_date('M, d - Y'); ?></div>
			</div>
		</div>
	</div>
</article>