<?php
vc_map ( array (
	"name" => 'Team Carousel',
	"base" => "team_carousel",
	"icon" => "tb-icon-for-vc",
	"category" => __ ( 'Extra Elements', 'beoreo' ), 
	'admin_enqueue_js' => array(beoreo_URI_PATH_FR.'/admin/assets/js/customvc.js'),
	"params" => array (
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => __("Template", 'beoreo'),
			"param_name" => "tpl",
			"value" => array(
				"Template 1" => "tpl1",
				"Template 2" => "tpl2",
				"Template 3" => "tpl3",
				"Template 4" => "tpl4",
				"Template 5" => "tpl5",
			),
			"description" => __('Select template of posts display in this element.', 'beoreo')
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
			"heading" => __("Nav Position", 'beoreo'),
			"param_name" => "nav_position",
			"value" => array(
				"Top" => "nav-top",
				"Middle" => "nav-middle",
				"Bottom" => "nav-bottom",
			),
			"dependency" => array(
				"element"=>"nav",
				"value"=> "true"
			),
			"description" => __('Select position next/prev buttons.', 'beoreo')
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
			"type" => "dropdown",
			"class" => "",
			"heading" => __("Dots Position", 'beoreo'),
			"param_name" => "dots_position",
			"value" => array(
				"Top" => "dots-top",
				"Right" => "dots-right",
				"Bottom" => "dots-bottom",
				"Left" => "dots-left",
			),
			"dependency" => array(
				"element"=>"dots",
				"value"=> "true"
			),
			"description" => __('Select position dots navigation.', 'beoreo')
		),
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => __("Extra Class", 'beoreo'),
			"param_name" => "el_class",
			"value" => "",
			"description" => __ ( "If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'beoreo' )
		),
		array (
			"type" => "bt_taxonomy",
			"taxonomy" => "team_category",
			"heading" => __ ( "Categories", 'beoreo' ),
			"param_name" => "category",
			"group" => __("Build Query", 'beoreo'),
			"description" => __ ( "Note: By default, all your projects will be displayed. <br>If you want to narrow output, select category(s) above. Only selected categories will be displayed.", 'beoreo' )
		),
		array (
			"type" => "textfield",
			"heading" => __ ( 'Count', 'beoreo' ),
			"param_name" => "posts_per_page",
			'value' => '',
			"group" => __("Build Query", 'beoreo'),
			"description" => __ ( 'The number of posts to display on each page. Set to "-1" for display all posts on the page.', 'beoreo' )
		),
		array (
			"type" => "dropdown",
			"heading" => __ ( 'Order by', 'beoreo' ),
			"param_name" => "orderby",
			"value" => array (
					"None" => "none",
					"Title" => "title",
					"Date" => "date",
					"ID" => "ID"
			),
			"group" => __("Build Query", 'beoreo'),
			"description" => __ ( 'Order by ("none", "title", "date", "ID").', 'beoreo' )
		),
		array (
			"type" => "dropdown",
			"heading" => __ ( 'Order', 'beoreo' ),
			"param_name" => "order",
			"value" => Array (
					"None" => "none",
					"ASC" => "ASC",
					"DESC" => "DESC"
			),
			"group" => __("Build Query", 'beoreo'),
			"description" => __ ( 'Order ("None", "Asc", "Desc").', 'beoreo' )
		),
	)
));