<?php 
	global $bearstheme_options;
	$preset_color = (isset($bearstheme_options['preset_color'])&&$bearstheme_options['preset_color'])?$bearstheme_options['preset_color']: 'default';
	
?>
<div id="panel-style-selector">
	<div class="panel-wrapper">
		<div class="panel-selector-open"><i class="fa fa-cog fa-2x fa-spin"></i></div>
		<div class="panel-selector-body clearfix">
			<div class="panel-selector-body-inner">
				<section class="panel-selector-section clearfix">
					<h3 class="panel-selector-title">Main Color</h3>
					<div class="panel-selector-row clearfix">
						<ul class="panel-primary-color">
							<li class="<?php if($preset_color == 'default') echo 'default active'; ?>" style="background: #FB383B;" data-link="#"></li>
							<li class="<?php if($preset_color == 'preset1') echo 'preset1 active'; ?>" style="background: #0DBF9B;" data-link="<?php echo esc_url(beoreo_URI_PATH.'/assets/css/presets/preset1.css'); ?>"></li>
							<li class="<?php if($preset_color == 'preset2') echo 'preset2 active'; ?>" style="background: #2C8DFF;" data-link="<?php echo esc_url(beoreo_URI_PATH.'/assets/css/presets/preset2.css'); ?>"></li>
							<li class="<?php if($preset_color == 'preset3') echo 'preset3 active'; ?>" style="background: #C7AF8D;" data-link="<?php echo esc_url(beoreo_URI_PATH.'/assets/css/presets/preset3.css'); ?>"></li>
							<li class="<?php if($preset_color == 'preset4') echo 'preset4 active'; ?>" style="background: #F8BA01;" data-link="<?php echo esc_url(beoreo_URI_PATH.'/assets/css/presets/preset4.css'); ?>"></li>
							<li class="<?php if($preset_color == 'preset5') echo 'preset5 active'; ?>" style="background: #A5B800;" data-link="<?php echo esc_url(beoreo_URI_PATH.'/assets/css/presets/preset5.css'); ?>"></li>
						</ul>
					</div>
				</section>
				<section class="panel-selector-section clearfix">
					<h3 class="panel-selector-title">Body Layout</h3>

					<div class="panel-selector-row clearfix">
						<a data-type="layout" data-value="wide" href="#" class="panel-selector-btn active">Wide</a>
						<a data-type="layout" data-value="boxed" href="#" class="panel-selector-btn">Boxed</a>
					</div>
				</section>
				<section class="panel-selector-section clearfix">
					<h3 class="panel-selector-title">Body Background</h3>

					<div class="panel-selector-row clearfix">
						<ul class="panel-primary-background">
							<li class="pattern-0" data-link="<?php echo esc_url(beoreo_URI_PATH.'/assets/images/patterns/tree_bark.png'); ?>" data-type="pattern" style="<?php echo 'background: url('.esc_url(beoreo_URI_PATH.'/assets/images/patterns/tree_bark.png').')'; ?>"></li>
							<li class="pattern-2" data-link="<?php echo esc_url(beoreo_URI_PATH.'/assets/images/patterns/triangular.png'); ?>" data-type="pattern" style="<?php echo 'background: url('.esc_url(beoreo_URI_PATH.'/assets/images/patterns/triangular.png').')'; ?>"></li>
							<li class="pattern-1" data-link="<?php echo esc_url(beoreo_URI_PATH.'/assets/images/patterns/pattern-1.png'); ?>" data-type="pattern" style="<?php echo 'background: url('.esc_url(beoreo_URI_PATH.'/assets/images/patterns/pattern-1.png').')'; ?>"></li>
							<li class="pattern-3" data-link="<?php echo esc_url(beoreo_URI_PATH.'/assets/images/patterns/pattern-2.png'); ?>" data-type="pattern" style="<?php echo 'background: url('.esc_url(beoreo_URI_PATH.'/assets/images/patterns/triangular_@2X.png').')'; ?>"></li>
							<li class="pattern-4" data-link="<?php echo esc_url(beoreo_URI_PATH.'/assets/images/patterns/wild_flowers.png'); ?>" data-type="pattern" style="<?php echo 'background: url('.esc_url(beoreo_URI_PATH.'/assets/images/patterns/pattern-2.png').')'; ?>"></li>
							<li class="pattern-5" data-link="<?php echo esc_url(beoreo_URI_PATH.'/assets/images/patterns/triangular_@2X.png'); ?>" data-type="pattern" style="<?php echo 'background: url('.esc_url(beoreo_URI_PATH.'/assets/images/patterns/triangular_@2X.png').')'; ?>"></li>
						</ul>
					</div>
				</section>
				<section class="panel-selector-section clearfix">
					<h3 class="panel-selector-title">Select Demo</h3>
					<div class="panel-selector-row clearfix panel-select-homepage">
						<?php
						$homepages = array(
							array(
								'link' => 'http://theme.bearsthemes.com/wordpress/beoreo/home/home-version-01/',
								'img' => 'http://theme.bearsthemes.com/wordpress/beoreo/wp-content/uploads/2016/02/home_demo1.jpg',
								'title' => 'Home Version 01'
							),
							array(
								'link' => 'http://theme.bearsthemes.com/wordpress/beoreo/home/home-version-02/',
								'img' => 'http://theme.bearsthemes.com/wordpress/beoreo/wp-content/uploads/2016/02/home_demo2.jpg',
								'title' => 'Home Version 02'
							),
							array(
								'link' => 'http://theme.bearsthemes.com/wordpress/beoreo/home/home-version-03/',
								'img' => 'http://theme.bearsthemes.com/wordpress/beoreo/wp-content/uploads/2016/02/home_demo3.jpg',
								'title' => 'Home Version 03'
							),
							array(
								'link' => 'http://theme.bearsthemes.com/wordpress/beoreo/home/home-version-04/',
								'img' => 'http://theme.bearsthemes.com/wordpress/beoreo/wp-content/uploads/2016/02/home_demo4.jpg',
								'title' => 'Home Version 04'
							),
							array(
								'link' => 'http://theme.bearsthemes.com/wordpress/beoreo/home/home-version-05/',
								'img' => 'http://theme.bearsthemes.com/wordpress/beoreo/wp-content/uploads/2016/02/home_demo5.jpg',
								'title' => 'Home Version 05'
							),
							array(
								'link' => 'http://theme.bearsthemes.com/wordpress/beoreo/home/home-version-06/',
								'img' => 'http://theme.bearsthemes.com/wordpress/beoreo/wp-content/uploads/2016/02/home_demo6.jpg',
								'title' => 'Home Version 06'
							),
							array(
								'link' => 'http://theme.bearsthemes.com/wordpress/beoreo/home/home-version-07/',
								'img' => 'http://theme.bearsthemes.com/wordpress/beoreo/wp-content/uploads/2016/02/home_demo7.jpg',
								'title' => 'Home Version 07'
							),
							array(
								'link' => 'http://theme.bearsthemes.com/wordpress/beoreo/home/home-version-08/',
								'img' => 'http://theme.bearsthemes.com/wordpress/beoreo/wp-content/uploads/2016/02/home_demo8.jpg',
								'title' => 'Home Version 08'
							),
							array(
								'link' => 'http://theme.bearsthemes.com/wordpress/beoreo/home/home-version-09/',
								'img' => 'http://theme.bearsthemes.com/wordpress/beoreo/wp-content/uploads/2016/02/home_demo9.jpg',
								'title' => 'Home Version 09'
							),
							array(
								'link' => 'http://theme.bearsthemes.com/wordpress/beoreo/home/home-version-10/',
								'img' => 'http://theme.bearsthemes.com/wordpress/beoreo/wp-content/uploads/2016/02/home_demo10.jpg',
								'title' => 'Home Version 10'
							),
							array(
								'link' => 'http://theme.bearsthemes.com/wordpress/beoreo/home/home-version-11/',
								'img' => 'http://theme.bearsthemes.com/wordpress/beoreo/wp-content/uploads/2016/02/home_demo11.jpg',
								'title' => 'Home Version 11'
							),
							array(
								'link' => 'http://theme.bearsthemes.com/wordpress/beoreo/home/home-version-12/',
								'img' => 'http://theme.bearsthemes.com/wordpress/beoreo/wp-content/uploads/2016/02/home_demo12.jpg',
								'title' => 'Home Version 12'
							),
							array(
								'link' => 'http://theme.bearsthemes.com/wordpress/beoreo/home/home-version-13/',
								'img' => 'http://theme.bearsthemes.com/wordpress/beoreo/wp-content/uploads/2016/02/home_demo13.jpg',
								'title' => 'Home Version 13'
							),
							array(
								'link' => 'http://theme.bearsthemes.com/wordpress/beoreo/home/home-version-14/',
								'img' => 'http://theme.bearsthemes.com/wordpress/beoreo/wp-content/uploads/2016/02/home_demo14.jpg',
								'title' => 'Home Version 14'
							),
							array(
								'link' => 'http://theme.bearsthemes.com/wordpress/beoreo/home/home-version-15/',
								'img' => 'http://theme.bearsthemes.com/wordpress/beoreo/wp-content/uploads/2016/02/home_demo15.jpg',
								'title' => 'Home Version 15'
							),
							array(
								'link' => 'http://theme.bearsthemes.com/wordpress/beoreo/home/home-version-16/',
								'img' => 'http://theme.bearsthemes.com/wordpress/beoreo/wp-content/uploads/2016/02/home_demo16.jpg',
								'title' => 'Home Version 16'
							),
							array(
								'link' => 'http://theme.bearsthemes.com/wordpress/beoreo/home/home-version-17/',
								'img' => 'http://theme.bearsthemes.com/wordpress/beoreo/wp-content/uploads/2016/02/home_demo17.jpg',
								'title' => 'Home Version 17'
							),
							array(
								'link' => 'http://theme.bearsthemes.com/wordpress/beoreo/home/home-version-18/',
								'img' => 'http://theme.bearsthemes.com/wordpress/beoreo/wp-content/uploads/2016/02/home_demo18.jpg',
								'title' => 'Home Version 18'
							),
						);
						foreach($homepages as $homepage) {
							echo '<a href="'.esc_url($homepage['link']).'" data-img="'.esc_url($homepage['img']).'">
									<div class="thumb" style="background: url('.esc_url($homepage['img']).') no-repeat scroll center top / cover;"></div>
									<h6>'.$homepage['title'].'</h6>
								</a>';
						}
						?>
						
					</div>
				</section>
			</div>
		</div>
		<div class="demo-popup"></div>
	</div>
</div>