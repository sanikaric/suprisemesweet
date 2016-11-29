<?php
function beoreo_video_fancybox_button_func($atts) {
    extract(shortcode_atts(array(
        'title' => '',
        'video_link' => '',
        'el_class' => ''
    ), $atts));

    $class = array();
	$class[] = 'bt-video-fancybox-wrap';
	$class[] = $el_class;
    ob_start();
    ?>
		<div class="<?php echo esc_attr(implode(' ', $class)); ?>">
			<?php 
				if($title) echo '<h4 class="bt-title">'.esc_html($title).'</h4>'; 
				if($video_link) echo '<a href="'.esc_url($video_link).'" class="html5lightbox hvr-grow" title="Beoreo Video"><i class="fa fa-play"></i></a>';
			?>
		</div>
    <?php
    return ob_get_clean();
}
if(function_exists('bcore_shortcode')) { bcore_shortcode('video_fancybox_button', 'beoreo_video_fancybox_button_func');}
