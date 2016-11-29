<?php
//Add extra params vc_row
vc_add_param ( "vc_row", array (
		"type" 			=> "colorpicker",
		"class" 		=> "",
		"heading" 		=> __( "Background Overlay", 'beoreo' ),
		"param_name" 	=> "bt_bg_overlay",
		"value" 		=> "",
		"group" => __("Custom Options", 'beoreo'),
		"description" 	=> __( "Select color background overlay in this row.", 'beoreo' )
) );
vc_add_param ( "vc_row", array (
		"type" 			=> "checkbox",
		"class" 		=> "",
		"heading" 		=> __( "Background Fixed", 'beoreo' ),
		"param_name" 	=> "bt_bg_fixed",
		"value" 		=> "",
		"group" => __("Custom Options", 'beoreo'),
		"description" 	=> __( "Enable background fixed in this row.", 'beoreo' )
) );

//Add extra params vc_custom_heading
vc_add_param ( "vc_custom_heading", array (
		"type" 			=> "textfield",
		"class" 		=> "",
		"heading" 		=> __( "Icon", 'beoreo' ),
		"param_name" 	=> "icon",
		"value" 		=> "",
		"group" => __("Icon", 'beoreo'),
		"description" 	=> __( "Enter class icon in this custom heading. EX: fa fa-heart", 'beoreo' )
) );
vc_add_param ( "vc_custom_heading", array (
		"type" 			=> "textarea",
		"class" 		=> "",
		"heading" 		=> __( "Custom CSS", 'beoreo' ),
		"param_name" 	=> "custom_css",
		"value" 		=> "",
		"description" 	=> __( "Enter style in this custom heading. EX: line-height: 24px; letter-spacing: 0.04em; ...", 'beoreo' )
) );
