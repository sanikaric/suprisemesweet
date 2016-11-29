<article <?php post_class(); ?>>
	<div class="bt-post-item">
		<div class="bt-media <?php echo get_post_format(); ?>">
			<?php
				$media_output = '';
				$attachment_ids = array();
				$gallery = get_post_meta(get_the_ID(), 'tb_post_gallery', true);
				if(!empty($gallery)) {
					$attachment_ids = explode(',', $gallery);
					$date = time() . '_' . uniqid(true);
					$media_output .= '<div id="carousel-generic'.esc_attr( $date ).'" class="carousel slide" data-ride="carousel">
										<div class="carousel-inner">';
					foreach($attachment_ids as $key => $attachment_id) {
						$cl_active = ($key == 0) ? 'active' : '';
						$attachment_image = wp_get_attachment_image_src($attachment_id, 'full', false);
						if($attachment_image[0]){
							$media_output .= '<div class="item bt-gallery '.esc_attr($cl_active).'">
												<img src="'.esc_url($attachment_image[0]).'" alt="" />
											</div>';
						}
					}
					$media_output .= '</div>
										<a class="left carousel-control" href="#carousel-generic'.esc_attr( $date ).'" role="button" data-slide="prev">
											<i class="fa fa-long-arrow-left"></i>
										</a>
										<a class="right carousel-control" href="#carousel-generic'.esc_attr( $date ).'" role="button" data-slide="next">
											<i class="fa fa-long-arrow-right"></i>
										</a>
									</div>';
				}
				echo $media_output;
			?>
			<div class="bt-public">
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
