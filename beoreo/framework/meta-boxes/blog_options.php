<div id="tb-blog-metabox" class='tb_metabox' style="display: none;">
	<div id="tb-tab-blog" class='categorydiv'>
		<ul class='category-tabs'>
		   <li class='tb-tab'><a href="#tabs-general"><i class="dashicons dashicons-admin-settings"></i> <?php echo _e('GENERAL','beoreo');?></a></li>
		   <li class='tb-tab'><a href="#tabs-header"><i class="dashicons dashicons-menu"></i> <?php echo _e('HEADER','beoreo');?></a></li>
		   <li class='tb-tab'><a href="#tabs-titlebar"><i class="dashicons dashicons-menu"></i> <?php echo _e('TITLEBAR','beoreo');?></a></li>
		   <li class='tb-tab'><a href="#tabs-footer"><i class="dashicons dashicons-menu"></i> <?php echo _e('FOOTER','beoreo');?></a></li>
		</ul>
		<div class='tb-tabs-panel'>
			<div id="tabs-general">
				<?php
					$body_layout = array('global' => 'Global', 'boxed' => 'Boxed','wide' => 'Wide');
					$this->select('body_layout',
							'Body Layout',
							$body_layout,
							'',
							''
					);
				?>
			</div>
			
			<div id="tabs-header">
				<p class="tb_info  tb-title-mb"><i class="dashicons dashicons-plus-alt"></i><?php echo _e('Manage Header','beoreo'); ?></p>
				<?php
					$headers = array('global' => 'Global', 'header-v1' => 'Header V1','header-v2' => 'Header V2', 'header-v3' => 'Header V3', 'header-v4' => 'Header V4', 'header-v5' => 'Header V5', 'header-v6' => 'Header V6','header-onepage' => 'Header One Page');
					$this->select('header',
							'Select Header',
							$headers,
							'',
							''
					);
				?>
				<p class="tb_info  tb-title-mb"><i class="dashicons dashicons-plus-alt"></i><?php echo _e('Manage Logo','beoreo'); ?></p>
				<?php
					$this->upload('logo',
							'Logo',
							''
					);
					$this->upload('logo_stick',
							'Stick Logo',
							''
					);
				?>
				<p class="tb_info  tb-title-mb"><i class="dashicons dashicons-plus-alt"></i><?php echo _e('Manage Menu','beoreo'); ?></p>
				<?php
					$menus = array();
					$menus_obj = get_terms( 'nav_menu', array( 'hide_empty' => true ) );
					$menus['global'] = 'Global';
					foreach ( $menus_obj as $menu_obj ) {
						$menus[$menu_obj->slug] = $menu_obj->name;
					}
					$this->select('menu',
							'Select Menu',
							$menus,
							'',
							''
					);
					$menu_positon = array('global' => 'Global', 'text-left' => 'Align Left','text-center' => 'Align Center','text-right' => 'Align Right');
					$this->select('menu_positon',
							'Select Position',
							$menu_positon,
							'',
							''
					);
					$this->checkbox('disable_stick_menu',
							'Disable Stick Menu',
							'off',
							'',
							''
					);
				?>
				<!--p class="tb_info  tb-title-mb"><i class="dashicons dashicons-admin-settings"></i><?php echo _e('Background Title Bar','beoreo'); ?></p-->
				<?php
					//$this->upload('bg_title_bar', 'Choose image');
				?>
				<!--p class="tb_info  tb-title-mb"><i class="dashicons dashicons-megaphone"></i><?php echo _e('Manage Locations','beoreo'); ?></p-->
				<?php
					/*$manage_location = array(''=>'Auto','main_navigation'=>'Main Navigation','secondary_navigation'=>'Secondary Navigation');
					$this->select('manage_location',
							'Manage Locations',
							$manage_location,
							'',
							''
					);*/
				?>
			</div>
			
			<div id="tabs-titlebar">
				<?php
					$this->upload('bg_title_bar', 'Background');
				?>
			</div>
			
			<div id="tabs-footer">
				<?php
					$footers = array('global' => 'Global', 'footer-v1' => 'Footer V1','footer-v2' => 'Footer V2');
					$this->select('footer',
							'Select Footer',
							$footers,
							'',
							''
					);
					$this->checkbox('show_ft_top',
							'Show Footer Top',
							'on',
							'',
							''
					);
					$this->checkbox('show_ft_bottom',
							'Show Footer Bottom',
							'on',
							'',
							''
					);
				?>
			
				<!--p class="tb_info  tb-title-mb"><i class="dashicons dashicons-admin-settings"></i><?php echo _e('Background Title Bar','beoreo'); ?></p-->
				<?php
					//$this->upload('bg_title_bar', 'Choose image');
				?>
				<!--p class="tb_info  tb-title-mb"><i class="dashicons dashicons-megaphone"></i><?php echo _e('Manage Locations','beoreo'); ?></p-->
				<?php
					/*$manage_location = array(''=>'Auto','main_navigation'=>'Main Navigation','secondary_navigation'=>'Secondary Navigation');
					$this->select('manage_location',
							'Manage Locations',
							$manage_location,
							'',
							''
					);*/
				?>
			</div>
		</div>
	</div>
</div>
