<!-- Start Header -->
<?php 
	global $bearstheme_options;
	$class_header = 'bt-header-v1';
	if(isset($bearstheme_options['first_level_style_main_menu_v1']) && $bearstheme_options['first_level_style_main_menu_v1']) {
		$class_header .= ' '.$bearstheme_options['first_level_style_main_menu_v1'];
	}
	if(isset($bearstheme_options['fixed_main_menu_v1']) && $bearstheme_options['fixed_main_menu_v1']) {
		$class_header .= ' bt-header-fixed';
	}
	$disable_stick_menu = get_post_meta(get_the_ID(),'tb_disable_stick_menu',true);
	if($disable_stick_menu != 'on') {
		if(isset($bearstheme_options['stick_main_menu_v1']) && $bearstheme_options['stick_main_menu_v1']) {
			$class_header .= ' bt-header-stick';
		}
	}
?>
<header>
	<div id="bt_header" class="<?php echo esc_attr($class_header); ?>"><!-- bt-header-stick/bt-header-fixed -->
		<!-- Start Header Top -->
		<div class="bt-header-top">
			<div class="row">
				<div class="container">
					<!-- Start Header Sidebar Top Left -->
					<?php if (is_active_sidebar("bearstheme-header-top-widget")) { ?>
						<div class="col-sm-5 col-md-5">
							<?php dynamic_sidebar("bearstheme-header-top-widget"); ?>
						</div>
					<?php } ?>
					<!-- End Header Sidebar Top Left -->
					<!-- Start Header Sidebar Top Right -->
					<?php if (is_active_sidebar("bearstheme-header-top-widget-2")) { ?>
						<div class="col-sm-7 col-md-7">
							<?php 
								dynamic_sidebar("bearstheme-header-top-widget-2");
							?>
						</div>
					<?php } ?>
					<!-- End Header Sidebar Top Right -->
				</div>
			</div>
		</div>
		<!-- End Header Top -->
		<!-- Start Header Menu -->
		<div class="bt-header-menu">
			<div class="row">
				<div class="container">
					<div class="col-md-2 bt-col-logo">
						<div class="bt-logo">
							<a href="<?php echo esc_url(home_url()); ?>">
								<?php beoreo_logo(); ?>
							</a>
						</div>
						<div id="bt-hamburger" class="bt-hamburger visible-xs visible-sm"><span></span></div>
					</div>
					<div class="col-md-10 bt-col-menu <?php if (is_active_sidebar("bearstheme-menu-right-sidebar")) echo esc_attr('has-menu-right-sidebar'); ?>">
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
								wp_nav_menu( $attr );
							} else {
								$attr = array(
									'menu_class'  => 'menu bt-menu-list text-right',
								);
								wp_page_menu($attr);
							}
						?>
						<?php if (is_active_sidebar("bearstheme-menu-right-sidebar")){ ?>
							<?php dynamic_sidebar("bearstheme-menu-right-sidebar"); ?>
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
