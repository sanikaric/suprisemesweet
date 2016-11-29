<article <?php post_class(); ?>>
	<div class="testimonial-item">
		<div class="bt-content">
			<div class="bt-thumb">
				<?php if (has_post_thumbnail()) the_post_thumbnail('thumbnail'); ?>
			</div>
			<div class="bt-excerpt">
				<?php echo get_the_excerpt(); ?>
			</div>
		</div>
		<h4 class="bt-title">
			<?php the_title(); ?>
			<?php echo '<span>'.get_post_meta(get_the_ID(),'tb_testimonial_position',true).'</span>'; ?>
		</h4>
	</div>
</article>