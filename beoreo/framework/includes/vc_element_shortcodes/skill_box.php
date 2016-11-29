<?php
vc_map(array(
	"name" => __("Skill Box", 'beoreo'),
	"base" => "skill_box",
	"category" => __('Extra Elements', 'beoreo'),
	"icon" => "tb-icon-for-vc",
	"params" => array(
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => __("Value", 'beoreo'),
			"param_name" => "value",
			"value" => "",
			"description" => __("Please, enter value in this element. Default: 90", 'beoreo')
		),
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => __("Unit", 'beoreo'),
			"param_name" => "unit",
			"value" => "",
			"description" => __("Please, enter unit in this element. Default: %", 'beoreo')
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
