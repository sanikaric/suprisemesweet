<?php
vc_map(array(
	"name" => __("Info Box", 'beoreo'),
	"base" => "info_box",
	"category" => __('Extra Elements', 'beoreo'),
	"icon" => "tb-icon-for-vc",
	"params" => array(
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
			"heading" => __("Content", 'beoreo'),
			"param_name" => "content",
			"value" => "",
			"description" => __("Please, enter content in this element.", 'beoreo')
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
