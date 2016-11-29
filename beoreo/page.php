<?php get_header(); ?>
<?php
global $bearstheme_options;
$tb_show_page_title = isset($bearstheme_options['tb_page_show_page_title']) ? $bearstheme_options['tb_page_show_page_title'] : 1;
$tb_show_page_breadcrumb = isset($bearstheme_options['tb_page_show_page_breadcrumb']) ? $bearstheme_options['tb_page_show_page_breadcrumb'] : 1;
beoreo_title_bar($tb_show_page_title, $tb_show_page_breadcrumb);

$tb_show_page_comment = (int) isset($bearstheme_options['page_comment']) ?  $bearstheme_options['page_comment']: 1;
?>
	<?php if(class_exists('Vc_Manager')) { ?>
		<div class="main-content">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>
				<div style="clear: both;"></div>
				<?php if($tb_show_page_comment){ ?>
					
						<?php if ( comments_open() || get_comments_number() ) comments_template(); ?>
					
				<?php } ?>

			<?php endwhile; // end of the loop. ?>
		</div>
	<?php } else { ?>
		<div class="row">
			<div class="main-content container">
				<div class="col-md-12">
					<?php while ( have_posts() ) : the_post(); ?>

						<?php the_content(); ?>
						<div style="clear: both;"></div>
						<?php if($tb_show_page_comment){ ?>
							
								<?php if ( comments_open() || get_comments_number() ) comments_template(); ?>
							
						<?php } ?>

					<?php endwhile; // end of the loop. ?>
				</div>
			</div>
		</div>
	<?php } ?>
<?php get_footer(); ?>