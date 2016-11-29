<article <?php post_class(); ?>>
	<div class="bt-post-item">
		<div class="bt-media">
			<?php
				$media_output = '';
				$format = get_post_format() ? : 'standard';
				switch ($format) {
					case 'gallery':
						$media_output = '';
						$attachment_ids = array();
						$gallery = get_post_meta(get_the_ID(), 'tb_post_gallery', true);
						$attachment_ids = explode(',', $gallery);
						if(!empty($attachment_ids)) {
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
						break;
					case 'video':
						$media_output = '';
						if (has_post_thumbnail()) {
							$media_output .= get_the_post_thumbnail(get_the_ID(), "full");
						}
						$video_url = $gallery = get_post_meta(get_the_ID(), 'tb_post_video_url', true);
						if($video_url) {
							$media_output .= '<div class="bt-overlay">
												<a href="'.esc_url($video_url).'" class="html5lightbox" data-group=""  data-thumbnail="" data-width="480" data-height="320" title=""><i class="fa fa-play"></i></a>
											</div>
											';
						}
						break;
					default:
						if (has_post_thumbnail()) {
							$media_output = '<a href="'.get_the_permalink().'">'.get_the_post_thumbnail(get_the_ID(), "full").'</a>';
						}
				}
				echo $media_output;
			?>
			<ul class="bt-action">
				<li><?php beoreo_post_favorite(); ?></li>
				<li><a href="<?php comments_link(); ?>"><?php comments_number( '<i class="fa fa-comment"></i> 0', '<i class="fa fa-comment"></i> 1', '<i class="fa fa-comment"></i> %' ); ?></a></li>
			</ul>
		</div>
		<div class="bt-content">
			<h3 class="bt-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<ul class="bt-meta">
				<li class="bt-author"><?php echo __('By ', 'beoreo').get_the_author(); ?></li>
				<li class="bt-public"><?php echo get_the_date('d M, Y'); ?></li>
			</ul>
			<div class="bt-excerpt"><?php echo beoreo_custom_excerpt($excerpt_lenght, $excerpt_more); ?></div>
			<a href="<?php the_permalink(); ?>"><?php echo $readmore_text; ?></a>
		</div>
	</div>
</article>
