<?php
function beoreo_skill_box_func($atts, $content = null) {
    extract(shortcode_atts(array(
		'value' => '90',
		'unit' => '%',
		'title' => '',
		'el_class' => '',
    ), $atts));

	$content = wpb_js_remove_wpautop($content, true);
	
    $class = array();
	$class[] = 'bt-skill-wrap';
	$class[] = $el_class;
    ob_start();
    ?>
		<div class="<?php echo esc_attr(implode(' ', $class)); ?>">
			<div class="bt-skill">
				<div class="bt-header">
					<div class="bt-overlay"></div>
					<div class="bt-inner">
						<?php 
							echo '<span>'.$value.$unit.'</span>'; 
							if($title) echo '<h5 class="bt-title">'.$title.'</h5>';
						?>
					</div>
				</div>
				<?php if($content) echo '<div class="bt-content">'.$content.'</div>'; ?>
			</div>
		</div>
		
    <?php
    return ob_get_clean();
}
if(function_exists('bcore_shortcode')) { bcore_shortcode('skill_box', 'beoreo_skill_box_func');}
