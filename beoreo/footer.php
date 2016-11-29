		<?php beoreo_Footer() ?>
	</div><!-- #wrap -->
	<?php if (class_exists('Woocommerce')) echo do_shortcode('[bears_woofavorite layout="default"]'); ?>
	<?php if (is_active_sidebar('bearstheme-newsletter-sidebar')) { ?>
		<div id ="bt_newsletter_global"class="bt-newsletter-global">
			<div class="bt-newsletter">
				<a class="bt-close" href="#">X</a>
				<?php dynamic_sidebar('bearstheme-newsletter-sidebar'); ?>
			</div>
		</div>
	<?php } ?>
	<div id="bt-backtop"><i class="fa fa-arrow-up"></i></div>
	<?php
		global $bearstheme_options;
		if(isset($bearstheme_options["style_selector"])&&$bearstheme_options["style_selector"]) {
			require_once beoreo_ABS_PATH.'/box-style.php';
		}
	?>
	<?php wp_footer(); ?>
</body>