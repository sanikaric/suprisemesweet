<?php get_header(); ?>
<?php
global $bearstheme_options;
$tb_show_page_title = isset($bearstheme_options['tb_post_show_page_title']) ? $bearstheme_options['tb_post_show_page_title'] : 1;
$tb_show_page_breadcrumb = isset($bearstheme_options['tb_post_show_page_breadcrumb']) ? $bearstheme_options['tb_post_show_page_breadcrumb'] : 1;
beoreo_title_bar($tb_show_page_title, $tb_show_page_breadcrumb);
$tb_post_show_post_nav = (int) isset($bearstheme_options['tb_post_show_post_nav']) ?  $bearstheme_options['tb_post_show_post_nav']: 1;
$tb_post_show_post_author = (int) isset($bearstheme_options['tb_post_show_post_author']) ? $bearstheme_options['tb_post_show_post_author'] : 1;
$tb_post_show_post_comment = (int) isset($bearstheme_options['tb_post_show_post_comment']) ?  $bearstheme_options['tb_post_show_post_comment']: 1;
?>
	<div class="main-content bt-team-article">
		<article <?php post_class(); ?>>
			<div class="row">
				<div class="container">
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="col-md-6">
							<div class="bt-thumb"><?php the_post_thumbnail('full'); ?></div>
						</div>
						<div class="col-md-6">
							<div class="bt-header">
								<h2 class="bt-title"><?php the_title(); ?></h2>
								<div class="bt-position"><?php echo get_post_meta(get_the_ID(),'tb_team_position',true); ?></div>
								<?php if($tb_post_show_post_nav ) beoreo_post_nav(); ?>
							</div>
							<div class="bt-content"><?php the_content(); ?></div>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
		</article>
		<div class="bt-related">
			<div class="row">
				<div class="container">
					<div class="col-md-12">
						<?php
							$taxterms = wp_get_object_terms( get_the_ID(), 'team_category', array('fields' => 'ids') );
							
							$args = array(
							'post_type' => 'team',
							'post_status' => 'publish',
							'posts_per_page' => 5, // you may edit this number
							'orderby' => 'rand',
							'tax_query' => array(
								array(
									'taxonomy' => 'team_category',
									'field' => 'id',
									'terms' => $taxterms
								)
							),
							'post__not_in' => array (get_the_ID()),
							);
							$related_items = new WP_Query( $args );
							// loop over query
							if ($related_items->have_posts()) :
							?>
								<div class="bt-team-related-carousel">
									<div class="owl-carousel" data-col_lg="4" data-col_md="4" data-col_sm="3" data-col_xs="1" data-item_space="30" data-loop="true" data-autoplay="false" data-smartspeed="700" data-nav="true" data-dots="false">
										<?php while ( $related_items->have_posts() ) : $related_items->the_post(); ?>
											<article <?php post_class(); ?>>
												<div class="bt-thumb">
													<?php if ( has_post_thumbnail() ) the_post_thumbnail('full'); ?>
													<div class="bt-overlay">
														<a href="<?php the_permalink(); ?>"></a>
													</div>
												</div>
												<div class="bt-content">
													<h3 class="bt-title"><?php the_title(); ?></h3>
													<div class="bt-position"><?php echo get_post_meta(get_the_ID(),'tb_team_position',true); ?></div>
												</div>
											</article>
										<?php endwhile; ?>
									</div>
								</div>
							<?php
							endif;
							// Reset Post Data
							wp_reset_postdata();
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>