<article <?php post_class(); ?>>
	<div class="bt-post-item">
		<div class="bt-media <?php echo get_post_format(); ?>">
			<?php
				$media_output = '';
				$audio_source_from = get_post_meta(get_the_ID(), 'tb_audio_type', true);
				if($audio_source_from == 'soundcloud') {
					$media_output = get_post_meta(get_the_ID(), 'tb_post_audio_iframe', true);
				} else {
					$audio_type = get_post_meta(get_the_ID(), 'tb_post_audio_type', true);
					$audio_url = get_post_meta(get_the_ID(), 'tb_post_audio_url', true);
					if($audio_url) echo do_shortcode('[audio '.$audio_type.'="'.$audio_url.'"][/audio]');
				} 
				echo $media_output;
			?>
			<div class="bt-public <?php if($audio_source_from == 'soundcloud') echo 'bt-hidden' ?>">
				<?php 
					echo '<span class="day">'.get_the_date('d').'</span>'; 
					echo '<span class="month">'.get_the_date('M').'</span>';
				?>
			</div>
		</div>
		<div class="bt-content">
			<h3 class="bt-title"><?php the_title(); ?></h3>
			<ul class="bt-meta">
				<li><a href="<?php comments_link(); ?>"><?php comments_number( '<i class="fa fa-comments-o"></i> 0', '<i class="fa fa-comments-o"></i> 1', '<i class="fa fa-comments-o"></i> %' ); ?></a></li>
				<li><?php beoreo_post_favorite(); ?></li>
				<li><?php the_terms( get_the_ID(), 'category', '<i class="fa fa-folder-open-o"></i> ', ', ' ); ?></li>
			</ul>
			<div class="bt-content">
				<?php
					the_content();
					wp_link_pages(array(
						'before' => '<div class="page-links">' . __('Pages:', 'beoreo'),
						'after' => '</div>',
					));
				?>
			</div>
		</div>
		<div class="bt-tags"><?php the_tags( __('<h4>TAGS: </h4> ', 'beoreo'), ', ', '' ); ?> </div>
	</div>
</article>
