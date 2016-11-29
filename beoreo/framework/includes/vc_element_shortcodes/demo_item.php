<?php
vc_map(array(
	"name" => __("Demo Item", 'beoreo'),
	"base" => "demo_item",
	"class" => "tb-demo-item",
	"category" => __('Extra Elements', 'beoreo'),
	"icon" => "tb-icon-for-vc",
	"params" => array(
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => __("Type", 'beoreo'),
			"param_name" => "type",
			"value" => array(
				"Image" => "image",
				"Gallery" => "gallery",
			),
			"description" => __('Select type in this elment.', 'beoreo')
		),
		array(
			"type" => "attach_image",
			"class" => "",
			"heading" => __("Image", 'beoreo'),
			"param_name" => "demo_image",
			"value" => "",
			"dependency" => array(
				"element"=>"type",
				"value"=> array('image')
			),
			"description" => __("Select image for demo item.", 'beoreo')
		),
		array(
			"type" => "attach_images",
			"class" => "",
			"heading" => __("Gallery", 'beoreo'),
			"param_name" => "demo_gallery",
			"value" => "",
			"dependency" => array(
				"element"=>"type",
				"value"=> array('gallery')
			),
			"description" => __("Select images for demo item.", 'beoreo')
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => __("Title", 'beoreo'),
			"param_name" => "title",
			"value" => "",
			"description" => __("Please, enter title for demo item.", 'beoreo')
		),
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => __("Demo Link", 'beoreo'),
			"param_name" => "demo_link",
			"value" => "",
			"description" => __("Please, enter demo link for demo item.", 'beoreo')
		),
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => __("Extra Class", 'beoreo'),
			"param_name" => "el_class",
			"value" => "",
			"description" => __ ( "If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'beoreo' )
		),
	)
));
