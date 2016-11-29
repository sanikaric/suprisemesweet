<?php
if(class_exists('Woocommerce')){
    vc_map(array(
        "name" => __("Product Grid", 'beoreo'),
        "base" => "products_grid",
        "class" => "tb-products-grid",
        "category" => __('Extra Elements', 'beoreo'),
        'admin_enqueue_js' => array(beoreo_URI_PATH_ADMIN.'assets/js/customvc.js'),
        "icon" => "tb-icon-for-vc",
        "params" => array(
			array(
                "type" => "dropdown",
                "class" => "",
                "heading" => __("Template", 'beoreo'),
                "param_name" => "tpl",
                "value" => array(
					"Template 1" => "tpl1",
					"Template 2" => "tpl2"
                ),
                "description" => __('Select template in this elment.', 'beoreo')
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
				"description" => __('Select columns in this elment.', 'beoreo')
            ),
			array(
                "type" => "checkbox",
                "heading" => __('Show Pagination', 'beoreo'),
                "param_name" => "show_pagination",
                "value" => array(
                    __("Yes, please", 'beoreo') => 1
                ),
                "description" => __('Show or hide pagination in this element.', 'beoreo')
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
                "taxonomy" => "product_cat",
                "heading" => __ ( "Categories", 'beoreo' ),
                "param_name" => "product_cat",
                "class" => "",
				"group" => __("Build Query", 'beoreo'),
                "description" => __ ( "Note: By default, all your projects will be displayed. <br>If you want to narrow output, select category(s) above. Only selected categories will be displayed.", 'beoreo' )
            ),
			array (
					"type" => "dropdown",
					"class" => "",
					"heading" => __ ( "Show", 'beoreo' ),
					"param_name" => "show",
					"value" => array (
							"All Products" => "all_products",
							"Featured Products" => "featured",
							"On-sale Products" => "onsale",
					),
					"group" => __("Build Query", 'beoreo'),
					"description" => __ ( "Select show product type in this elment", 'beoreo' )
			),
            array(
                "type" => "textfield",
                "class" => "",
                "heading" => __("Product Count", 'beoreo'),
                "param_name" => "number",
                "value" => "",
				"group" => __("Build Query", 'beoreo'),
				"description" => __('Please, enter number of post per page. Show all: -1.', 'beoreo')
            ),
			array(
                "type" => "checkbox",
                "heading" => __('Hide Free', 'beoreo'),
                "param_name" => "hide_free",
                "value" => array(
                    __("Yes, please", 'beoreo') => 1
                ),
				"group" => __("Build Query", 'beoreo'),
                "description" => __('Hide free product in this element.', 'beoreo')
            ),
			array(
                "type" => "checkbox",
                "heading" => __('Show Hidden', 'beoreo'),
                "param_name" => "show_hidden",
                "value" => array(
                    __("Yes, please", 'beoreo') => 1
                ),
				"group" => __("Build Query", 'beoreo'),
                "description" => __('Show Hidden product in this element.', 'beoreo')
            ),
            array (
				"type" => "dropdown",
				"heading" => __ ( 'Order by', 'beoreo' ),
				"param_name" => "orderby",
				"value" => array (
						"None" => "none",
						"Date" => "date",
						"Price" => "price",
						"Random" => "rand",
						"Selling" => "selling",
						"Rated" => "rated",
				),
				"group" => __("Build Query", 'beoreo'),
				"description" => __ ( 'Order by ("none", "date", "price", "rand", "selling", "rated") in this element.', 'beoreo' )
			),
            array(
                "type" => "dropdown",
                "heading" => __('Order', 'beoreo'),
                "param_name" => "order",
                "value" => Array(
                    "None" => "none",
                    "ASC" => "ASC",
                    "DESC" => "DESC"
                ),
				"group" => __("Build Query", 'beoreo'),
                "description" => __('Order ("None", "Asc", "Desc") in this element.', 'beoreo')
            ),
            array(
                "type" => "checkbox",
                "heading" => __('Show Sale Flash', 'beoreo'),
                "param_name" => "show_sale_flash",
                "value" => array(
                    __("Yes, please", 'beoreo') => 1
                ),
				"group" => __("Template", 'beoreo'),
                "description" => __('Show or hide sale flash of product.', 'beoreo')
            ),
			array(
                "type" => "checkbox",
                "heading" => __('Show Price', 'beoreo'),
                "param_name" => "show_price",
                "value" => array(
                    __("Yes, please", 'beoreo') => 1
                ),
				"group" => __("Template", 'beoreo'),
                "description" => __('Show or hide price of product.', 'beoreo')
            ),
			array(
                "type" => "checkbox",
                "heading" => __('Show Title', 'beoreo'),
                "param_name" => "show_title",
                "value" => array(
                    __("Yes, please", 'beoreo') => 1
                ),
				"group" => __("Template", 'beoreo'),
                "description" => __('Show or hide title of product.', 'beoreo')
            ),
			array(
                "type" => "checkbox",
                "heading" => __('Show Rating', 'beoreo'),
                "param_name" => "show_rating",
                "value" => array(
                    __("Yes, please", 'beoreo') => 1
                ),
				"group" => __("Template", 'beoreo'),
                "description" => __('Show or hide rating of product.', 'beoreo')
            ),
			array(
				"type" => "checkbox",
				"class" => "",
				"heading" => __("Show Excerpt", 'beoreo'),
				"param_name" => "show_excerpt",
				"value" => array (
					__ ( "Yes, please", 'beoreo' ) => true
				),
				"group" => __("Template", 'beoreo'),
				"description" => __("Show or not excerpt of post in this element.", 'beoreo')
			),
			array(
				"type" => "textfield",
				"class" => "",
				"heading" => __("Excerpt Length", 'beoreo'),
				"param_name" => "excerpt_lenght",
				"value" => "",
				"group" => __("Template", 'beoreo'),
				"description" => __("Please, Enter number excerpt lenght of post in this element. Default: 11", 'beoreo')
			),
			array(
				"type" => "textfield",
				"class" => "",
				"heading" => __("Excerpt More", 'beoreo'),
				"param_name" => "excerpt_more",
				"value" => "",
				"group" => __("Template", 'beoreo'),
				"description" => __("Please, Enter text excerpt more of post in this element. Default: . ", 'beoreo')
			),
			array(
                "type" => "checkbox",
                "heading" => __('Show Add To Cart', 'beoreo'),
                "param_name" => "show_add_to_cart",
                "value" => array(
                    __("Yes, please", 'beoreo') => 1
                ),
				"group" => __("Template", 'beoreo'),
                "description" => __('Show or hide add to cart of product.', 'beoreo')
            ),
			
        )
    ));
}
