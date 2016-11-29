<article <?php post_class(); ?>>
	<div class="bt-thumb">
		<?php if ( has_post_thumbnail() ) the_post_thumbnail('full'); ?>
	</div>
	<div class="bt-content">
		<div class="bt-percent">
			<div class="bt-progress" style="height:48%;"></div>
			<div class="bt-count">48%</div>
		</div>
		<h3 class="bt-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<div class="bt-position"><?php echo get_post_meta(get_the_ID(),'tb_team_position',true); ?></div>
	</div>
</article>