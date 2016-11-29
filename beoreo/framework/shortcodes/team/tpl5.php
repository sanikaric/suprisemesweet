<div class="<?php echo esc_attr($class_columns); ?>">
	<article <?php post_class(); ?>>
		<div class="bt-thumb">
			<?php if ( has_post_thumbnail() ) the_post_thumbnail('full'); ?>
		</div>
		<div class="bt-overlay">
			<div class="bt-content">
				<h3 class="bt-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<?php
					$position = get_post_meta(get_the_ID(),'tb_team_position',true);
					if($position) echo '<div class="bt-position">'.$position.'</div>';
					$work_time = get_post_meta(get_the_ID(),'tb_team_work_time',true);
					if($work_time) echo '<div class="bt-work-time">'.$work_time.'</div>';
				?>
			</div>
		</div>
	</article>
</div>