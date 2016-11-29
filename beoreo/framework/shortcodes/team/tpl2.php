<div class="<?php echo esc_attr($class_columns); ?>">
	<article <?php post_class(); ?>>
		<div class="bt-thumb">
			<?php if ( has_post_thumbnail() ) the_post_thumbnail('full'); ?>
		</div>
		<div class="bt-content">
			<?php
				$percent = get_post_meta(get_the_ID(),'tb_team_percent',true);
				if($percent) {
					echo '<div class="bt-percent">
							<div class="bt-progress" style="height:'.esc_attr($percent).';"></div>
							<div class="bt-count">'.$percent.'</div>
						</div>';
					
				}
			?>
			<h3 class="bt-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<?php
				$position = get_post_meta(get_the_ID(),'tb_team_position',true);
				if($position) echo '<div class="bt-position">'.$position.'</div>';
			?>
		</div>
	</article>
</div>