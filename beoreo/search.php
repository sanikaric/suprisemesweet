<?php get_header(); ?>
<?php
global $bearstheme_options;
$tb_show_page_title = isset($bearstheme_options['tb_page_show_page_title']) ? $bearstheme_options['tb_page_show_page_title'] : 1;
$tb_show_page_breadcrumb = isset($bearstheme_options['tb_page_show_page_breadcrumb']) ? $bearstheme_options['tb_page_show_page_breadcrumb'] : 1;
beoreo_title_bar($tb_show_page_title, $tb_show_page_breadcrumb);
?>
	<div class="main-content bt-blog-list">
		<div class="container">
			<div class="row">
				<?php
				$tb_blog_layout = isset($bearstheme_options['tb_blog_layout']) ? $bearstheme_options['tb_blog_layout'] : '2cr';
				$cl_sb_left = isset($bearstheme_options['tb_blog_left_sidebar_col']) ? $bearstheme_options['tb_blog_left_sidebar_col'] : 'col-xs-12 col-sm-4 col-md-4 col-lg-4';
				$cl_content = isset($bearstheme_options['tb_blog_content_col']) ? $bearstheme_options['tb_blog_content_col'] : ( is_active_sidebar('bearstheme-main-sidebar') ? 'col-xs-12 col-sm-12 col-md-8 col-lg-8' : 'col-xs-12 col-sm-12 col-md-12 col-lg-12' );
				if ( !is_active_sidebar('bearstheme-main-sidebar') && !is_active_sidebar('bearstheme-left-sidebar') && !is_active_sidebar('bearstheme-left-sidebar') ) {
					$cl_content = 'col-xs-12 col-sm-12 col-md-12 col-lg-12';
				}
				$cl_sb_right = isset($bearstheme_options['tb_blog_right_siedebar_col']) ? $bearstheme_options['tb_blog_right_siedebar_col'] : 'col-xs-12 col-sm-12 col-md-4 col-lg-4';
				?>
				<!-- Start Left Sidebar -->
				<?php if ( $tb_blog_layout == '2cl' ) { ?>
					<div class="<?php echo esc_attr($cl_sb_left) ?> sidebar-left">
						<?php if (is_active_sidebar('bearstheme-left-sidebar')) { dynamic_sidebar('bearstheme-left-sidebar'); } else { dynamic_sidebar('bearstheme-main-sidebar'); } ?>
					</div>
				<?php } ?>
				<!-- End Left Sidebar -->
				<!-- Start Content -->
				<div class="<?php echo esc_attr($cl_content) ?> content">
					<?php
					$readmore_text = (int) isset($bearstheme_options['tb_blog_post_readmore_text']) ? $bearstheme_options['tb_blog_post_readmore_text'] : 'VIEW DETAIL';
					if( have_posts() ) {
						while ( have_posts() ) : the_post();
							if(get_post_type(get_the_ID()) != 'page') {
								get_template_part( 'framework/templates/blog/entry', get_post_format());
							} else {
								?>
								<article <?php post_class(); ?>>
									<div class="bt-post-item">
										<div class="bt-content">
											<h3 class="bt-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
										</div>
										<div class="bt-bottom">
											<ul>
												<li><a href="<?php comments_link(); ?>"><?php comments_number( '<i class="fa fa-comments-o"></i> 0', '<i class="fa fa-comments-o"></i> 1', '<i class="fa fa-comments-o"></i> %' ); ?></a></li>
												<li><?php beoreo_post_favorite(); ?></li>
												<li><?php the_terms( get_the_ID(), 'category', '<i class="fa fa-folder-open-o"></i> ', ', ' ); ?></li>
											</ul>
											<a class="bt-readmore" href="<?php the_permalink(); ?>"><?php echo $readmore_text; ?></a>
										</div>
									</div>
									</article>
								<?php
							}
							
						endwhile;
						
						beoreo_paging_nav();
					}else{
						get_template_part( 'framework/templates/entry', 'none');
					}
					?>
				</div>
				<!-- End Content -->
				<!-- Start Right Sidebar -->
				<?php if ( $tb_blog_layout == '2cr' ) { ?>
					<div class="<?php echo esc_attr($cl_sb_right) ?> sidebar-right">
						<?php if (is_active_sidebar('bearstheme-right-sidebar')) { dynamic_sidebar('bearstheme-right-sidebar'); } else { dynamic_sidebar('bearstheme-main-sidebar'); } ?>
					</div>
				<?php } ?>
				<!-- End Right Sidebar -->
			</div>
		</div>
	</div>
<?php get_footer(); ?>