<?php
/*
Template Name: Coming Soon Template
*/
?>
<?php get_header('ComingSoon'); ?>
	<div class="main-content">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php the_content(); ?>
			
		<?php endwhile; // end of the loop. ?>
	</div>
<?php get_footer('ComingSoon'); ?>