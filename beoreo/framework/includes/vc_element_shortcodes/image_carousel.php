<?php
vc_map(array(
	"name" => __("Images Carousel", 'beoreo'),
	"base" => "image_carousel",
	"category" => __('Extra Elements', 'beoreo'),
	"icon" => "tb-icon-for-vc",
	"params" => array(
		array(
			"type" => "attach_images",
			"class" => "",
			"heading" => __("Images", 'beoreo'),
			"param_name" => "images",
			"value" => "",
			"description" => __("Select box images in this element.", 'beoreo')
		),
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => __("Image size", 'beoreo'),
			"param_name" => "image_size",
			"value" => "",
			"description" => __("Enter image size (Example: thumbnail, medium, large, full or other sizes defined by theme. Default: full", 'beoreo')
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => __("On click action", 'beoreo'),
			"param_name" => "click_action",
			"value" => array(
				"None" => "none",
				"Custom Links" => "custom_links",
				"Light Box" => "light_box",
			),
			"description" => __('Select action for click action.', 'beoreo')
		),
		array(
			"type" => "textarea",
			"class" => "",
			"heading" => __("Custom links", 'beoreo'),
			"param_name" => "custom_links",
			"value" => "",
			"dependency" => array(
				"element"=>"click_action",
				"value"=> array('custom_links')
			),
			"description" => __("Enter links for each slide. Ex: link1,link2...", 'beoreo')
		),
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => __("Columns Large devices", 'beoreo'),
			"param_name" => "col_lg",
			"value" => "",
			"description" => __("Please, enter number Columns Large devices Desktops (>=1200px) in this element. Default: 4", 'beoreo')
		),
			array(
				"type" => "textfield",
				"class" => "",
				"heading" => __("Columns Medium devices", 'beoreo'),
				"param_name" => "col_md",
				"value" => "",
				"description" => __("Please, enter number Columns Medium devices Desktops (>=992px) in this element. Default: 3", 'beoreo')
			),
			array(
				"type" => "textfield",
				"class" => "",
				"heading" => __("Columns Small devices", 'beoreo'),
				"param_name" => "col_sm",
				"value" => "",
				"description" => __("Please, enter number Columns Small devices Tablets (>=768px) in this element. Default: 2", 'beoreo')
			),
			array(
				"type" => "textfield",
				"class" => "",
				"heading" => __("Columns Extra small devices", 'beoreo'),
				"param_name" => "col_xs",
				"value" => "",
				"description" => __("Please, enter number Columns Extra small devices Phones (<768px) in this element. Default: 1", 'beoreo')
			),
			array(
				"type" => "textfield",
				"class" => "",
				"heading" => __("Item Space", 'beoreo'),
				"param_name" => "item_space",
				"value" => "",
				"description" => __("Please, enter number space between items in this element. Default: 30", 'beoreo')
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => __("Loop", 'beoreo'),
				"param_name" => "loop",
				"value" => array(
					"Enable" => "true",
					"Disable" => "false",
				),
				"description" => __('Inifnity loop. Duplicate last and first items to get loop illusion.', 'beoreo')
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => __("autoplay", 'beoreo'),
				"param_name" => "autoplay",
				"value" => array(
					"Disable" => "false",
					"Enable" => "true",
				),
				"description" => __('Autoplay.', 'beoreo')
			),
			array(
				"type" => "textfield",
				"class" => "",
				"heading" => __("SmartSpeed", 'beoreo'),
				"param_name" => "smartspeed",
				"value" => "",
				"description" => __("Please, enter number smartSpeed(Speed Calculate. More info to come..) in this element. Default: 500", 'beoreo')
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => __("Nav", 'beoreo'),
				"param_name" => "nav",
				"value" => array(
					"Disable" => "false",
					"Enable" => "true",
				),
				"description" => __('Show next/prev buttons.', 'beoreo')
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => __("Dots", 'beoreo'),
				"param_name" => "dots",
				"value" => array(
					"Disable" => "false",
					"Enable" => "true",
				),
				"description" => __('Show dots navigation.', 'beoreo')
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
