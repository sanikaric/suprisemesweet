<?php
vc_map ( array (
		"name" => 'Blog',
		"base" => "blog",
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
								"Grid" => "grid",
								"Grid Image Middle" => "grid2",
								"Grid Image Left" => "grid3",
								"Grid Image Left 2" => "grid4",
								"List" => "list",
								"List Zig Zag" => "zigzag",
							),
							"description" => __('Select template of posts display in this element.', 'beoreo')
					),
					array(
							"type" => "dropdown",
							"class" => "",
							"heading" => __("Columns", 'beoreo'),
							"param_name" => "columns",
							"value" => array(
								"4 Columns" => "4",
								"3 Columns" => "3",
								"2 Columns" => "2",
								"1 Column" => "1",
							),
							"dependency" => array(
								"element"=>"tpl",
								"value"=> array('grid', 'grid2', 'grid3', 'grid4')
							),
							"description" => __('Select columns display in this element.', 'beoreo')
					),
					array(
						"type" => "checkbox",
						"class" => "",
						"heading" => __("Show Pagination", 'beoreo'),
						"param_name" => "show_pagination",
						"value" => array (
							__ ( "Yes, please", 'beoreo' ) => true
						),
						"description" => __("Show or not pagination in this element.", 'beoreo')
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
							"taxonomy" => "category",
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
					array(
						"type" => "textfield",
						"class" => "",
						"heading" => __("Excerpt Length", 'beoreo'),
						"param_name" => "excerpt_lenght",
						"value" => "",
						"group" => __("Template", 'beoreo'),
						"description" => __("Please, Enter number excerpt lenght of post in this element. Default: 38", 'beoreo')
					),
					array(
						"type" => "textfield",
						"class" => "",
						"heading" => __("Excerpt More", 'beoreo'),
						"param_name" => "excerpt_more",
						"value" => "",
						"group" => __("Template", 'beoreo'),
						"description" => __("Please, Enter text excerpt more of post in this element. Default: .", 'beoreo')
					),
					array(
						"type" => "textfield",
						"class" => "",
						"heading" => __("Readmore Text", 'beoreo'),
						"param_name" => "readmore_text",
						"value" => "",
						"group" => __("Template", 'beoreo'),
						"dependency" => array(
							"element"=>"tpl",
							"value"=> array('grid', 'grid3', 'grid4', 'list', 'zigzag')
						),
						"description" => __("Please, Enter text of label button readmore in this element. Default: MORE", 'beoreo')
					),
		)
));