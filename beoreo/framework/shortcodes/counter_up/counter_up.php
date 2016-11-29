<?php
function beoreo_counter_up_func($atts) {
    extract(shortcode_atts(array(
		'style' => 'style1',
        'icon' => 'fa fa-cogs',
        'number' => '1750',
        'title' => 'PROJECT COMPLETE',
        'el_class' => ''
    ), $atts));

    $class = array();
    $class[] = 'bt-counter-up-wrap';
    $class[] = $style;
    $class[] = $el_class;
	
	wp_enqueue_script('jquery.counterup.min', beoreo_URI_PATH . '/assets/js/jquery.counterup.min.js',array('jquery'),'1.0');
	wp_enqueue_script('waypoints.min', beoreo_URI_PATH . '/assets/js/waypoints.min.js',array('jquery'),'1.6.2');
	
    ob_start();
    ?>
		<div class="<?php echo esc_attr(implode(' ', $class)); ?>">
			<div class="bt-counter">
				<?php if($icon) echo '<i class="'.esc_attr($icon).'"></i>'; ?>
				<div class="bt-inner">
					<?php
						if($title) echo '<h4 class="bt-title">'.$title.'</h4>';
						if($number) echo '<span class="bt-number">'.number_format($number).'</span>';
					?>
				</div>
			</div>
		</div>
    <?php
    return ob_get_clean();
}

if(function_exists('bcore_shortcode')) { bcore_shortcode('counter_up', 'beoreo_counter_up_func'); }
