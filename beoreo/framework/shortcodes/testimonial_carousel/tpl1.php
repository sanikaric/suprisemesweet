<article <?php post_class(); ?>>
	<div class="testimonial-item">
		<div class="bt-thumb">
			<?php if (has_post_thumbnail()) the_post_thumbnail('thumbnail'); ?>
		</div>
		<div class="bt-excerpt">
			<?php echo '<i class="fa fa-quote-left"></i>'.get_the_excerpt().'<i class="fa fa-quote-right"></i>'; ?>
		</div>
		<h4 class="bt-title">
			<?php the_title(); ?>
			<?php echo '<span>'.get_post_meta(get_the_ID(),'tb_testimonial_position',true).'</span>'; ?>
		</h4>
	</div>
</article>