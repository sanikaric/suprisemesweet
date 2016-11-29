<?php
function beoreo_service_box_func($atts, $content = null) {
    extract(shortcode_atts(array(
		'style' => 'style1',
		'icon' => '',
		'image_icon' => '',
		'number_step' => '',
		'title' => '',
		'el_class' => '',
    ), $atts));

	$content = wpb_js_remove_wpautop($content, true);
	
    $class = array();
	$class[] = 'bt-service-wrap';
	$class[] = $style;
	$class[] = $el_class;
    ob_start();
    ?>
		<div class="<?php echo esc_attr(implode(' ', $class)); ?>">
			<div class="bt-service">
				<?php 
					if($icon && ($style == 'style1' || $style == 'style1_1' || $style == 'style1_2' || $style == 'style1_3' || $style == 'style1_4' || $style == 'style2' || $style == 'style2_1')) {
						echo '<div class="bt-icon"><i class="'.esc_attr($icon).'"></i></div>';
					}
					
					if($style == 'style3' || $style == 'style4' || $style == 'style4_1' || $style == 'style5') {
						$attachment_image = wp_get_attachment_image_src($image_icon, 'full', false); 
						if($attachment_image[0]) {
							if($style == 'style3') echo '<div class="bt-thumb"><img src="'.esc_url($attachment_image[0]).'" alt=""/></div>';
							if($style == 'style4' || $style == 'style4_1') echo '<div class="bt-thumb"><div class="bt-bg-img" style="background: url('.esc_url($attachment_image[0]).') no-repeat scroll center center / cover;"></div><div class="bt-overlay"></div><span class="bt-step-number">'.$number_step.'</span></div>';
							if($style == 'style5') echo '<div class="bt-thumb"><img src="'.esc_url($attachment_image[0]).'" alt=""/></div>';
						}else {
							if($style == 'style4' || $style == 'style4_1') echo '<div class="bt-thumb"><span class="bt-step-number">'.$number_step.'</span></div>';
						}
					}
					
					if($title) echo '<h5 class="bt-title">'.esc_html($title).'</h5>';
					if($content) echo '<div class="bt-content">'.$content.'</div>';
				?>
			</div>
		</div>
		
    <?php
    return ob_get_clean();
}
if(function_exists('bcore_shortcode')) { bcore_shortcode('service_box', 'beoreo_service_box_func');}
