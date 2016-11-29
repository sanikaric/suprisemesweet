<?php
function beoreo_image_carousel_func($atts, $content = null) {
    extract(shortcode_atts(array(
		'images' => '',
		'image_size' => 'full',
		'click_action' => '',
		'custom_links' => '',
		'col_lg' =>  4,
		'col_md' =>  3,
		'col_sm' =>  2,
		'col_xs' =>  1,
		'item_space' =>  30,
		'loop' =>  'true',
		'autoplay' =>  'false',
		'smartspeed' =>  500,
		'nav' =>  'false',
		'dots' =>  'false',
		'el_class' => '',
    ), $atts));

	//$content = wpb_js_remove_wpautop($content, true);
	$image_ids = $image_links = array();
	$image_ids = explode(',', $images);
	$image_links = explode(',', $custom_links);
    
	$class = array();
	$class[] = 'bt-image-carousel-wrap';
	$class[] = $el_class;
    ob_start();
    ?>
		<div class="<?php echo esc_attr(implode(' ', $class)); ?>">
			<div class="owl-carousel" data-col_lg="<?php echo esc_attr($col_lg); ?>" data-col_md="<?php echo esc_attr($col_md); ?>" data-col_sm="<?php echo esc_attr($col_sm); ?>" data-col_xs="<?php echo esc_attr($col_xs); ?>" data-item_space="<?php echo esc_attr($item_space); ?>" data-loop="<?php echo esc_attr($loop); ?>" data-autoplay="<?php echo esc_attr($autoplay); ?>" data-smartspeed="<?php echo esc_attr($smartspeed); ?>" data-nav="<?php echo esc_attr($nav); ?>" data-dots="<?php echo esc_attr($dots); ?>">
				<?php
					foreach($image_ids as $key => $image_id) {
						$full_img = wp_get_attachment_image_src ( $image_id, 'full' );
						$attachment = wp_get_attachment_image_src ( $image_id, $image_size );
						$image_link = (isset($image_links[$key]) && $image_links[$key] != '') ? $image_links[$key] : '#';
						switch ($click_action) {
							case 'custom_links':
								echo '<a href="'.$image_link.'"><img src="'.$attachment[0].'" alt=""/></a>';
								break;
							case 'light_box':
								echo '<a class="lightbox" data-imagelightbox-thumbnail="" href="'.esc_url($full_img[0]).'"><img src="'.$attachment[0].'" alt=""/></a>';
								break;
							default:
								echo '<img src="'.$attachment[0].'" alt=""/>';
								break;
						}
					}
				?>
			</div>
		</div>
    <?php
    return ob_get_clean();
}
if(function_exists('bcore_shortcode')) { bcore_shortcode('image_carousel', 'beoreo_image_carousel_func');}
