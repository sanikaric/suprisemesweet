<!-- Start Header -->
<?php 
	global $bearstheme_options;
	$class_header = 'bt-header-v3';
	if(isset($bearstheme_options['fixed_main_menu_v3']) && $bearstheme_options['fixed_main_menu_v3']) {
		$class_header .= ' bt-header-fixed';
	}
	$disable_stick_menu = get_post_meta(get_the_ID(),'tb_disable_stick_menu',true);
	if($disable_stick_menu != 'on') {
		if(isset($bearstheme_options['stick_main_menu_v3']) && $bearstheme_options['stick_main_menu_v3']) {
			$class_header .= ' bt-header-stick';
		}
	}
?>
<header>
	<div id="bt_header" class="<?php echo esc_attr($class_header); ?>"><!-- bt-header-stick/bt-header-fixed -->
		<!-- Start Header Menu -->
		<div class="bt-header-menu">
			<div class="row">
				<div class="no-container">
					<div class="col-md-2 col-md-offset-0 col-lg-2 col-lg-offset-1 bt-col-logo">
						<div class="bt-logo">
							<a href="<?php echo esc_url(home_url()); ?>">
								<?php beoreo_logo(); ?>
							</a>
						</div>
						<div id="bt-hamburger" class="bt-hamburger visible-xs visible-sm"><span></span></div>
					</div>
					<div class="col-md-10 col-lg-8 bt-col-menu <?php if (is_active_sidebar("bearstheme-menu-right-sidebar-3")) echo esc_attr('has-menu-right-sidebar'); ?>">
						<?php
							$attr = array(
								'container_class' => 'bt-menu-list hidden-xs hidden-sm ',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							);
							/* Select menu dynamic */
							$menu_slug = get_post_meta(get_the_ID(),'tb_menu',true);
							if($menu_slug != '' && $menu_slug != 'global') {
								$attr['menu'] = $menu_slug;
							}
							/* Select menu position */
							$menu_class = get_post_meta(get_the_ID(),'tb_menu_positon',true);
							$attr['menu_class'] = 'text-right';
							if($menu_class != '' && $menu_class != 'global') {
								$attr['menu_class'] = $menu_class;
							}
							/* Select theme location */
							$menu_locations = get_nav_menu_locations();
							if (!empty($menu_locations['main_navigation'])) {
								$attr['theme_location'] = 'main_navigation';
							}
							wp_nav_menu( $attr );
						?>
						<a class="bt-toggle-menu hidden-xs hidden-sm" href="javascript:void(0)"></a>
						<?php if (is_active_sidebar("bearstheme-menu-right-sidebar-3")){ ?>
							<?php dynamic_sidebar("bearstheme-menu-right-sidebar-3"); ?>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<!-- End Header Menu -->
	</div>
</header>
<div class="bt-menu-canvas-overlay"></div>
<div class="bt-menu-canvas">
	<?php dynamic_sidebar("bearstheme-menu-canvas-sidebar"); ?>
</div>
<!-- End Header -->
