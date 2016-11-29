<?php
$elements = array(
	'video',
	'video_fancybox_button',
	'countdown',
	'counter_up',
	'service_box',
	'info_box',
	'image_carousel',
	'ad_banner',
	'skill_box',
	'map_v3',
	'blog',
	'blog_masonry',
	'portfolio_carousel',
	'team',
	'team_carousel',
	'testimonial_carousel',
	'package',
	'demo_item',
	
);

foreach ($elements as $element) {
	include($element .'/'. $element.'.php');
}

if(class_exists('Woocommerce')){
	$wooshops = array(
		'product_grid',
		'product_carousel',
	);
	
	foreach ($wooshops as $wooshop) {
		include($wooshop .'/'. $wooshop.'.php'); 
	}
}
