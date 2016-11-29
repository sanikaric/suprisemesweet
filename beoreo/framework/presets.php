<?php
function beoreo_autoCompileLess($inputFile, $outputFile) {
    require_once( ABSPATH.'/wp-admin/includes/file.php' );	
	WP_Filesystem();
	require_once ( beoreo_ABS_PATH_FR . '/inc/lessc.inc.php' );
	global $wp_filesystem, $bearstheme_options;
    $less = new lessc();
    $less->setFormatter("classic");
    $less->setPreserveComments(true);
	/*Styling Options*/
	$preset_color = (isset($bearstheme_options['preset_color'])&&$bearstheme_options['preset_color'])?$bearstheme_options['preset_color']: 'default';
	$main_color = (isset($bearstheme_options['main_color'])&&$bearstheme_options['main_color'])?$bearstheme_options['main_color']: '#fb383b';
	
	switch ($preset_color) {
		case 'preset1':
			$main_color = (isset($bearstheme_options['main_color_preset1'])&&$bearstheme_options['main_color_preset1'])?$bearstheme_options['main_color_preset1']: '#e5ae49';
			break;
		case 'preset2':
			$main_color = (isset($bearstheme_options['main_color_preset2'])&&$bearstheme_options['main_color_preset2'])?$bearstheme_options['main_color_preset2']: '#e5ae49';
			break;
		case 'preset3':
			$main_color = (isset($bearstheme_options['main_color_preset3'])&&$bearstheme_options['main_color_preset3'])?$bearstheme_options['main_color_preset3']: '#e5ae49';
			break;
		case 'preset4':
			$main_color = (isset($bearstheme_options['main_color_preset4'])&&$bearstheme_options['main_color_preset4'])?$bearstheme_options['main_color_preset4']: '#e5ae49';
			break;
		case 'preset5':
			$main_color = (isset($bearstheme_options['main_color_preset5'])&&$bearstheme_options['main_color_preset5'])?$bearstheme_options['main_color_preset5']: '#e5ae49';
			break;
		default:
			$main_color = (isset($bearstheme_options['main_color'])&&$bearstheme_options['main_color'])?$bearstheme_options['main_color']: '#ec1c33';
		break;
	}
	
    $variables = array(
		"main_color" => $main_color,
		
    );
    $less->setVariables($variables);
    $cacheFile = $inputFile.".cache";
    if (file_exists($cacheFile)) {
            $cache = unserialize($wp_filesystem->get_contents($cacheFile));
    } else {
            $cache = $inputFile;
    }
    $newCache = $less->cachedCompile($inputFile);
    if (!is_array($cache) || $newCache["updated"] > $cache["updated"]) {
            $wp_filesystem->put_contents($cacheFile, serialize($newCache));
            $wp_filesystem->put_contents($outputFile, $newCache['compiled']);
    }
}
function beoreo_addLessStyle() {
	global $bearstheme_options;
	$preset_color = (isset($bearstheme_options['preset_color'])&&$bearstheme_options['preset_color'])?$bearstheme_options['preset_color']: 'default';
	
	try {
		$inputFile = beoreo_ABS_PATH.'/assets/css/less/style.less';
		if($preset_color == 'default') {
			$outputFile = beoreo_ABS_PATH.'/style.css';
		} else {
			$outputFile = beoreo_ABS_PATH.'/assets/css/presets/'.$preset_color.'.css';
		}
		beoreo_autoCompileLess($inputFile, $outputFile);
    } catch (Exception $e) {
        echo 'Caught exception: ', $e->getMessage(), "\n";
    }
}
add_action('wp_enqueue_scripts', 'beoreo_addLessStyle');
/* End less*/