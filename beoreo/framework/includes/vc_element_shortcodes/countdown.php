<?php
vc_map(array(
	"name" => __("Countdown", 'beoreo'),
	"base" => "countdown",
	"class" => "bt_countdown",
	"category" => __('Extra Elements', 'beoreo'),
	"icon" => "tb-icon-for-vc",
	"params" => array(
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => __("Style", 'beoreo'),
			"param_name" => "style",
			"value" => array(
				"Style 1" => "style1",
				"Style 2" => "style2",
				"Style 3" => "style3",
			),
			"description" => __('Select style in this elment.', 'beoreo')
		),
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => __("Date End", 'beoreo'),
			"param_name" => "date_end",
			"value" => "",
			"description" => __("Please, Enter date end in this element. Ex: 2016/12/1 15:40:06", 'beoreo')
		),
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => __("Format", 'beoreo'),
			"param_name" => "format",
			"value" => "",
			"description" => __("Please, Enter format in this element. Ex: ODHMS or DHMS", 'beoreo')
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
