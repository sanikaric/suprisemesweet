<?php
vc_map(array(
	"name" => __("Ad Banner", 'beoreo'),
	"base" => "ad_banner",
	"category" => __('Extra Elements', 'beoreo'),
	"icon" => "tb-icon-for-vc",
	"params" => array(
		array(
			"type" => "attach_image",
			"class" => "",
			"heading" => __("Image", 'beoreo'),
			"param_name" => "image",
			"value" => "",
			"description" => __("Select box image in this element.", 'beoreo')
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
