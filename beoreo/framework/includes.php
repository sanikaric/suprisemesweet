<?php
/* Metaboxes */
require_once beoreo_ABS_PATH_FR.'/meta-boxes/meta-boxes.php';
/* Load Shortcodes Function */
require_once beoreo_ABS_PATH_FR . '/shortcodes/shortcode-functions.php';
/* Load Shortcodes */
require_once beoreo_ABS_PATH_FR . '/shortcodes/shortcodes.php';
/* Load Mega menu admin */
require_once beoreo_ABS_PATH_FR . '/megamenu/mega-menu.php';
/* Vc extra params */
if (function_exists("vc_add_param")){
	require_once beoreo_ABS_PATH_FR.'/includes/vc_extra_params.php';
}
/* Vc extra Fields */
if (class_exists('Vc_Manager')) {
    function vc_add_extra_field( $name, $form_field_callback, $script_url = null ) {
            return WpbakeryShortcodeParams::addField( $name, $form_field_callback, $script_url );
    }
}
/* Vc extra shorcodes */
if (function_exists("vc_map")){
	foreach (glob(beoreo_ABS_PATH_FR."/includes/vc_element_shortcodes/*.php") as $filepath)
	{
		include $filepath;
	}
}
/* Vc extra field */
if (function_exists("vc_add_extra_field")){
	require_once beoreo_ABS_PATH_FR.'/includes/vc_extra_fields.php';
}