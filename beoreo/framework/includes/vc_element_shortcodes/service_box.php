<?php
vc_map(array(
	"name" => __("Service Box", 'beoreo'),
	"base" => "service_box",
	"category" => __('Extra Elements', 'beoreo'),
	"icon" => "tb-icon-for-vc",
	"params" => array(
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => __("Style", 'beoreo'),
			"param_name" => "style",
			"value" => array(
				"Style Icon Top 1" => "style1",
				"Style Icon Top 2" => "style1_1",
				"Style Icon Top 3" => "style1_2",
				"Style Icon Top 4" => "style1_3",
				"Style Icon Top 5" => "style1_4",
				"Style Icon Left" => "style2",
				"Style Icon Right" => "style2_1",
				"Style Image Icon" => "style3",
				"Style Step Box BG Dark" => "style4",
				"Style Step Box BG Light" => "style4_1",
				"Style History Box" => "style5",
			),
			"description" => __('Select style in this elment.', 'beoreo')
		),
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => __("Icon", 'beoreo'),
			"param_name" => "icon",
			"value" => "",
			"dependency" => array(
				"element"=>"style",
				"value"=> array('style1', 'style1_1', 'style1_2', 'style1_3', 'style1_4', 'style2', 'style2_1')
			),
			"description" => __("Please, enter class icon in this element.", 'beoreo')
		),
		array(
			"type" => "attach_image",
			"class" => "",
			"heading" => __("Image", 'beoreo'),
			"param_name" => "image_icon",
			"value" => "",
			"dependency" => array(
				"element"=>"style",
				"value"=> array('style3', 'style4', 'style4_1', 'style5')
			),
			"description" => __("Select box image in this element.", 'beoreo')
		),
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => __("Number Step", 'beoreo'),
			"param_name" => "number_step",
			"value" => "",
			"dependency" => array(
				"element"=>"style",
				"value"=> array('style4', 'style4_1')
			),
			"description" => __("Please, enter number step in this element.", 'beoreo')
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => __("Title", 'beoreo'),
			"param_name" => "title",
			"value" => "",
			"description" => __("Please, enter title in this element.", 'beoreo')
		),
		array(
			"type" => "textarea_html",
			"class" => "",
			"heading" => __("Description", 'beoreo'),
			"param_name" => "content",
			"value" => "",
			"description" => __("Please, enter description in this element.", 'beoreo')
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
