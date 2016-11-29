<?php
function beoreo_ad_banner_func($atts, $content = null) {
    extract(shortcode_atts(array(
		'image' => '',
		'el_class' => '',
    ), $atts));

	$content = wpb_js_remove_wpautop($content, true);
	
    $class = array();
	$class[] = 'bt-ad-banner-wrap';
	$class[] = $el_class;
    ob_start();
    ?>
		<div class="<?php echo esc_attr(implode(' ', $class)); ?>">
			<div class="bt-ad-banner">
				<?php
					if($image) {
						echo wp_get_attachment_image($image, 'full');
						echo '<div class="bt-overlay"></div>';
						if($content) echo '<div class="bt-content">'.$content.'</div>';
					}
				?>
			</div>
		</div>
		
    <?php
    return ob_get_clean();
}
if(function_exists('bcore_shortcode')) { bcore_shortcode('ad_banner', 'beoreo_ad_banner_func');}
