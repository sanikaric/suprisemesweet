<?php
/*
Template Name: 404 Template
*/
?>
<?php get_header(); ?>
<?php
global $bearstheme_options;
$tb_show_page_title = isset($bearstheme_options['tb_page_show_page_title']) ? $bearstheme_options['tb_page_show_page_title'] : 1;
$tb_show_page_breadcrumb = isset($bearstheme_options['tb_page_show_page_breadcrumb']) ? $bearstheme_options['tb_page_show_page_breadcrumb'] : 1;
beoreo_title_bar($tb_show_page_title, $tb_show_page_breadcrumb);
?>
	<div class="main-content">
		<div class="container">
			<div class="bt-error404-wrap">
				<h3>PAGE NOT FOUND!</h3>
				<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat <br class="hidden-xs hidden-sm">dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim.</p>
				<h1>404</h1>
				<h2>ERROR</h2>
			</div>
		</div>
	</div>
<?php get_footer(); ?>