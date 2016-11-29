<?php
function beoreo_info_box_func($atts, $content = null) {
    extract(shortcode_atts(array(
		'title' => '',
		'desc' => '',
        'el_class' => ''
    ), $atts));
	
	$content = wpb_js_remove_wpautop($content, true);
	
    $class = array();
	$class[] = 'bt-info-wrap';
	$class[] = $el_class;
    ob_start();
    ?>
		<div class="<?php echo esc_attr(implode(' ', $class)); ?>">
			<div class="bt-info">
				<?php
					if($title) echo '<h4 class="bt-title">'.esc_html($title).'</h4>';
					if($content) echo '<div class="bt-content">'.$content.'</div>';
				?>
			</div>
		</div>
		
    <?php
    return ob_get_clean();
}
if(function_exists('bcore_shortcode')) { bcore_shortcode('info_box', 'beoreo_info_box_func');}
