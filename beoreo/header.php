<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<?php wp_head(); ?>
</head>
<?php
	global $bearstheme_options;
	$body_layout = (isset($bearstheme_options["body_layout"])&&$bearstheme_options["body_layout"])?$bearstheme_options["body_layout"]:'wide';
	$tb_body_layout = get_post_meta(get_the_ID(), 'tb_body_layout', true)?get_post_meta(get_the_ID(), 'tb_body_layout', true):'global';
	$body_layout = $tb_body_layout=='global'?$body_layout:$tb_body_layout;
?>
<body <?php body_class($body_layout) ?>>
	<?php
		$page_loader = (isset($bearstheme_options["page_loader"])&&$bearstheme_options["page_loader"])?$bearstheme_options["page_loader"]: false;
		if($page_loader) echo '<div id="bt_page_loading"><div class="bt-loader"></div></div>';
	?>
	<div id="bt-main">
		<?php beoreo_Header(); ?>
