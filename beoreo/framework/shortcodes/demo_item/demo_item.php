<?php
function beoreo_demo_item($params, $content = null) {
    extract(shortcode_atts(array(
        'type' => 'image',
        'demo_image' => '',
        'demo_gallery' => '',
        'title' => '',
        'demo_link' => '#',
        'el_class' => ''
    ), $params));
	$class = array();
    $class[] = 'bt-demo-item';
    $class[] = $el_class;
	
	$attachment_image = wp_get_attachment_image_src($demo_image, 'full', false); 
	
	$image_ids = array();
	$image_ids = explode(',', $demo_gallery);
	
	
    ob_start();
    ?>
	<div class="<?php echo esc_attr(implode(' ', $class)); ?>">
		<?php if($type == 'image') { ?>
			<a href="<?php echo esc_url($demo_link); ?>"  target="_blank">
				<div class="bt-thumb"><img src="<?php echo esc_url($attachment_image[0]); ?>" alt="Demo Item"></div>
				<h3 class="bt-title"><?php echo $title; ?></h3>
			</a>
		<?php } else { ?>
			<div class="bt-gallery">
				<div class="owl-carousel" data-col_lg="1" data-col_md="1" data-col_sm="1" data-col_xs="1" data-item_space="30" data-loop="true" data-autoplay="false" data-smartspeed="700" data-nav="false" data-dots="true">
					<?php
						foreach($image_ids as $key => $image_id) {
							$attachment = wp_get_attachment_image_src ( $image_id, 'full' );
							echo '<a href="'.esc_url($demo_link).'" target="_blank"><img src="'.$attachment[0].'" alt=""/></a>';
						}
					?>
				</div>
			</div>
			<a href="<?php echo esc_url($demo_link); ?>" target="_blank">
				<h3 class="bt-title"><?php echo $title; ?></h3>
			</a>
		<?php } ?>
	</div>
    <?php
    return ob_get_clean();
}

if(function_exists('bcore_shortcode')) { bcore_shortcode('demo_item', 'beoreo_demo_item'); }