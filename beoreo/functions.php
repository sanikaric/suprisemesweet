<?php
/* Define THEME */
if (!defined('beoreo_URI_PATH')) define('beoreo_URI_PATH', get_template_directory_uri());
if (!defined('beoreo_ABS_PATH')) define('beoreo_ABS_PATH', get_template_directory());
if (!defined('beoreo_URI_PATH_FR')) define('beoreo_URI_PATH_FR', beoreo_URI_PATH.'/framework');
if (!defined('beoreo_ABS_PATH_FR')) define('beoreo_ABS_PATH_FR', beoreo_ABS_PATH.'/framework');
if (!defined('beoreo_URI_PATH_ADMIN')) define('beoreo_URI_PATH_ADMIN', beoreo_URI_PATH_FR.'/admin');
if (!defined('beoreo_ABS_PATH_ADMIN')) define('beoreo_ABS_PATH_ADMIN', beoreo_ABS_PATH_FR.'/admin');
/* Theme Options */
if( function_exists( 'bcore_redux_setup' ) ) {
	bcore_redux_setup( beoreo_ABS_PATH_ADMIN.'/options.php' );
}

function beoreo_removeDemoModeLink() { // Be sure to rename this function to something more unique
    if ( class_exists('ReduxFrameworkPlugin') ) {
        remove_filter( 'plugin_row_meta', array( ReduxFrameworkPlugin::get_instance(), 'plugin_metalinks'), null, 2 );
    }
    if ( class_exists('ReduxFrameworkPlugin') ) {
        remove_action('admin_notices', array( ReduxFrameworkPlugin::get_instance(), 'admin_notices' ) );    
    }
}
add_action('init', 'beoreo_removeDemoModeLink');

require_once (beoreo_ABS_PATH_ADMIN.'/index.php');

/* Template Functions */
require_once beoreo_ABS_PATH_FR . '/template-functions.php';

/* Template Functions */
require_once beoreo_ABS_PATH_FR . '/templates/post-favorite.php';
require_once beoreo_ABS_PATH_FR . '/templates/post-functions.php';

/* Function for Framework */
require_once beoreo_ABS_PATH_FR . '/includes.php';

/* Register Sidebar */
if (!function_exists('beoreo_RegisterSidebar')) {
	function beoreo_RegisterSidebar(){
		register_sidebar(array(
			'name' => __('Main Sidebar', 'beoreo'),
			'id' => 'bearstheme-main-sidebar',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="wg-title">',
			'after_title' => '</h4>',
		));
		register_sidebar(array(
			'name' => __('Blog Left Sidebar', 'beoreo'),
			'id' => 'bearstheme-left-sidebar',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="wg-title">',
			'after_title' => '</h4>',
		));
		register_sidebar(array(
			'name' => __('Blog Right Sidebar', 'beoreo'),
			'id' => 'bearstheme-right-sidebar',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="wg-title">',
			'after_title' => '</h4>',
		));
		register_sidebars(2, array(
			'name' => __('Header Top Widget %d', 'beoreo'),
			'id' => 'bearstheme-header-top-widget',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '<div style="clear:both;"></div></div>',
			'before_title' => '<h4 class="wg-title">',
			'after_title' => '</h4>',
		));
		register_sidebars(5, array(
			'name' => __('Menu Sidebar Header V%d', 'beoreo'),
			'id' => 'bearstheme-menu-right-sidebar',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '<div style="clear:both;"></div></div>',
			'before_title' => '<h4 class="wg-title">',
			'after_title' => '</h4>',
		));
		register_sidebar(array(
			'name' => __('Menu Sidebar Header V6 Left', 'beoreo'),
			'id' => 'bearstheme-menu-v6-left',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="wg-title">',
			'after_title' => '</h4>',
		));
		register_sidebar(array(
			'name' => __('Menu Sidebar Header V6 Right', 'beoreo'),
			'id' => 'bearstheme-menu-v6-right',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="wg-title">',
			'after_title' => '</h4>',
		));
		register_sidebar(array(
			'name' => __('Menu Sidebar Header V6 Social', 'beoreo'),
			'id' => 'bearstheme-menu-v6-social',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="wg-title">',
			'after_title' => '</h4>',
		));
		register_sidebar(array(
			'name' => __('Menu Button Request', 'beoreo'),
			'id' => 'bearstheme-menu-button-request',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="wg-title">',
			'after_title' => '</h4>',
		));
		register_sidebar(array(
			'name' => __('Menu Sidebar Header Canvas', 'beoreo'),
			'id' => 'bearstheme-menu-canvas-right-sidebar',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="wg-title">',
			'after_title' => '</h4>',
		));
		register_sidebar(array(
			'name' => __('Newsletter Sidebar', 'beoreo'),
			'id' => 'bearstheme-newsletter-sidebar',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="wg-title">',
			'after_title' => '</h4>',
		));
		register_sidebars(6, array(
			'name' => __('Custom Sidebar %d', 'beoreo'),
			'id' => 'bearstheme-custom-sidebar',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '<div style="clear:both;"></div></div>',
			'before_title' => '<h4 class="wg-title">',
			'after_title' => '</h4>',
		));
		register_sidebars(4, array(
			'name' => __('Footer Top Widget %d', 'beoreo'),
			'id' => 'bearstheme-footer-top-widget',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '<div style="clear:both;"></div></div>',
			'before_title' => '<h4 class="wg-title">',
			'after_title' => '</h4>',
		));
		register_sidebars(2, array(
			'name' => __('Footer Bottom Widget %d', 'beoreo'),
			'id' => 'bearstheme-footer-bottom-widget',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '<div style="clear:both;"></div></div>',
			'before_title' => '<h4 class="wg-title">',
			'after_title' => '</h4>',
		));
		register_sidebars(3, array(
			'name' => __('Footer 2 Top Widget %d', 'beoreo'),
			'id' => 'bearstheme-footer2-top-widget',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '<div style="clear:both;"></div></div>',
			'before_title' => '<h4 class="wg-title">',
			'after_title' => '</h4>',
		));
		register_sidebar(array(
			'name' => __('Footer 2 Bottom Widget', 'beoreo'),
			'id' => 'bearstheme-footer2-bottom-widget',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="wg-title">',
			'after_title' => '</h4>',
		));
		if (class_exists ( 'Woocommerce' )) {
			register_sidebar(array(
				'name' => __('Shop Right Sidebar', 'beoreo'),
				'id' => 'bearstheme-shop-right-sidebar',
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget' => '</div>',
				'before_title' => '<h4 class="wg-title">',
				'after_title' => '</h4>',
			));
			register_sidebar(array(
				'name' => __('Shop Single Right Sidebar', 'beoreo'),
				'id' => 'bearstheme-shop-single-right-sidebar',
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget' => '</div>',
				'before_title' => '<h4 class="wg-title">',
				'after_title' => '</h4>',
			));
		}
	}
}
add_action( 'widgets_init', 'beoreo_RegisterSidebar' );

/* Register Default Fonts */
function beoreo_fonts_url() {
    $font_url = '';
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'beoreo' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Montserrat|Poppins|Hind|Crimson+Text|Open+Sans|Lato:400,400Italic,600,700,700Italic,800,900&subset=latin,latin-ext' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}

/* Enqueue Script */
function beoreo_enqueue_scripts() {
	global $bearstheme_options;
	
	wp_enqueue_style( 'bearstheme-fonts', beoreo_fonts_url(), array(), '1.0.0' );
	wp_enqueue_style( 'bootstrap.min', beoreo_URI_PATH.'/assets/css/bootstrap.min.css', false );
	wp_enqueue_style('owl-carousel', beoreo_URI_PATH . "/assets/vendors/owl-carousel/owl.carousel.css",array(),"");
	wp_enqueue_style('slick', beoreo_URI_PATH . "/assets/vendors/slick/slick.css",array(),"");
	wp_enqueue_style('font-awesome', beoreo_URI_PATH.'/assets/css/font-awesome.min.css', array(), '4.1.0');
	wp_enqueue_style('pe-icon-7-stroke', beoreo_URI_PATH.'/assets/css/pe-icon-7-stroke.css', array(), '1.0');
	wp_enqueue_style('pe-icon-7-helper', beoreo_URI_PATH.'/assets/css/pe-icon-7-helper.css', array(), '1.0');
	wp_enqueue_style( 'hover-min', beoreo_URI_PATH.'/assets/css/hover-min.css', array(), '2.0.1' );
	wp_enqueue_style( 'tb.core.min', beoreo_URI_PATH.'/assets/css/core.min.css', false );
	wp_enqueue_style( 'style', beoreo_URI_PATH.'/style.css', false );
	
	wp_enqueue_script( 'bootstrap.min', beoreo_URI_PATH.'/assets/js/bootstrap.min.js', array('jquery'), '', true  );
	wp_enqueue_script( 'dynamics.min', beoreo_URI_PATH.'/assets/js/dynamics.min.js', array('jquery'), '', true  );
	wp_enqueue_script( 'datepicker.min', beoreo_URI_PATH.'/assets/js/datepicker.min.js', array('jquery'), '', true  );
	wp_enqueue_script( 'owl-carousel-min', beoreo_URI_PATH.'/assets/vendors/owl-carousel/owl.carousel.min.js', array('jquery'), '', true  );
	wp_enqueue_script( 'slick-min', beoreo_URI_PATH.'/assets/vendors/slick/slick.min.js', array('jquery'), '', true  );
	wp_enqueue_script( 'html5lightbox', beoreo_URI_PATH.'/assets/vendors/html5lightbox/html5lightbox.js', array('jquery'), '', true  );
	wp_enqueue_script( 'main', beoreo_URI_PATH.'/assets/js/main.js', array('jquery'), '', true  );
	
	if(isset($bearstheme_options["smooth_scroll"])&&$bearstheme_options["smooth_scroll"]) {
		wp_enqueue_script( 'SmoothScroll', beoreo_URI_PATH.'/assets/js/SmoothScroll.js', array('jquery'), '', true  );
	}
	
	$preset_color = (isset($bearstheme_options['preset_color'])&&$bearstheme_options['preset_color'])?$bearstheme_options['preset_color']: 'default';
	wp_enqueue_style( 'beoreo_preset', beoreo_URI_PATH.'/assets/css/presets/'.$preset_color.'.css', false );
	if(isset($bearstheme_options["style_selector"])&&$bearstheme_options["style_selector"]) {
		wp_enqueue_style( 'box-style', beoreo_URI_PATH.'/assets/css/box-style.css', false );
		wp_enqueue_script( 'box-style', beoreo_URI_PATH.'/assets/js/box-style.js', array('jquery'), '', true  );
	}
}
add_action( 'wp_enqueue_scripts', 'beoreo_enqueue_scripts' );

/* Init Functions */
function beoreo_init() {
	global $bearstheme_options;
	/* Less */
	if(isset($bearstheme_options['less_design']) && $bearstheme_options['less_design']){
		require_once beoreo_ABS_PATH_FR.'/presets.php';
	}
}
add_action( 'init', 'beoreo_init' );

/* Widgets */
require_once beoreo_ABS_PATH_FR.'/widgets/abstract-widget.php';
require_once beoreo_ABS_PATH_FR.'/widgets/widgets.php';

/* Woo commerce function */
if (class_exists('Woocommerce')) {
    require_once beoreo_ABS_PATH . '/woocommerce/wc-template-function.php';
    require_once beoreo_ABS_PATH . '/woocommerce/wc-template-hooks.php';
}

/* Bears Masonry */
function beoreo_ShortcodeMasonryLayoutFilter($data) {
	array_push( $data, array(
		'value' => 'beoreo_style1',
		'text' => __( 'Beoreo Style 1', 'beoreo' ),
		), array(
		'value' => 'beoreo_style2',
		'text' => __( 'Beoreo Style 2', 'beoreo' ),
		), array(
		'value' => 'beoreo_woo_style1',
		'text' => __( 'Beoreo Woocommerce Style 1', 'beoreo' ),
		), array(
		'value' => 'beoreo_woo_style2',
		'text' => __( 'Beoreo Woocommerce Style 2', 'beoreo' ),
		) );
	return $data;
}
add_filter( 'tbbs_ShortcodeMasonryLayoutFilter', 'beoreo_ShortcodeMasonryLayoutFilter', 10, 1 );

function beoreo_style1_ShortcodeMasonryFilterHeaderLayout_default( $output, $atts, $filterDatas )
{
	$output .= sprintf( '<li class="tbbs-filter-item tbbs-filter-current">
		<a href="#" data-titlefilter=".all">
			<span>%s</span>
		</a>
	</li>', __( 'All', 'beoreo' ) );
	if( count( $filterDatas ) > 0 ) :
		foreach( $filterDatas as $filterKey => $filterItem ) :
			$output .= sprintf( '<li class="tbbs-filter-item">
					<a href="#" data-titlefilter=\'.%s\'>
						<span>%s</span>
						<sup>%s</sup>
					</a>
				</li>', $filterKey, $filterItem['name'], $filterItem['count'] );
		endforeach;
	endif;
	return "
		<ul class='tbbs-filter-wrap beoreo-style1' style='margin: 0 {$atts['padding']}px 20px;'>
			{$output}
		</ul>";
}
add_filter( 'tbbs_ShortcodeMasonryFilter_creative_beoreo_style1', 'beoreo_style1_ShortcodeMasonryFilterHeaderLayout_default', 10, 3 );

function beoreo_style2_ShortcodeMasonryFilterHeaderLayout_default( $output, $atts, $filterDatas )
{
	$output .= sprintf( '<li class="tbbs-filter-item tbbs-filter-current">
		<a href="#" data-titlefilter=".all">
			<span>%s</span>
		</a>
	</li>', __( 'All', 'beoreo' ) );
	if( count( $filterDatas ) > 0 ) :
		foreach( $filterDatas as $filterKey => $filterItem ) :
			$output .= sprintf( '<li class="tbbs-filter-item">
					<a href="#" data-titlefilter=\'.%s\'>
						<span>%s</span>
						<sup>%s</sup>
					</a>
				</li>', $filterKey, $filterItem['name'], $filterItem['count'] );
		endforeach;
	endif;
	return "
		<ul class='tbbs-filter-wrap beoreo-style2' style='margin: 0 {$atts['padding']}px 20px;'>
			{$output}
		</ul>";
}
add_filter( 'tbbs_ShortcodeMasonryFilter_creative_beoreo_style2', 'beoreo_style2_ShortcodeMasonryFilterHeaderLayout_default', 10, 3 );

function beoreo_woo_style1_ShortcodeMasonryFilterHeaderLayout_default( $output, $atts, $filterDatas )
{
	$output .= sprintf( '<li class="tbbs-filter-item tbbs-filter-current">
		<a href="#" data-titlefilter=".all">
			<span>%s</span>
		</a>
	</li>', __( 'All', 'beoreo' ) );
	if( count( $filterDatas ) > 0 ) :
		foreach( $filterDatas as $filterKey => $filterItem ) :
			$output .= sprintf( '<li class="tbbs-filter-item">
					<a href="#" data-titlefilter=\'.%s\'>
						<span>%s</span>
						<sup>%s</sup>
					</a>
				</li>', $filterKey, $filterItem['name'], $filterItem['count'] );
		endforeach;
	endif;
	return "
		<ul class='tbbs-filter-wrap beoreo-woo-style1' style='margin: 0 {$atts['padding']}px 20px;'>
			{$output}
		</ul>";
}
add_filter( 'tbbs_ShortcodeMasonryFilter_creative_beoreo_woo_style1', 'beoreo_woo_style1_ShortcodeMasonryFilterHeaderLayout_default', 10, 3 );

function beoreo_woo_style2_ShortcodeMasonryFilterHeaderLayout_default( $output, $atts, $filterDatas )
{
	$output .= sprintf( '<li class="tbbs-filter-item tbbs-filter-current">
		<a href="#" data-titlefilter=".all">
			<span>%s</span>
		</a>
	</li>', __( 'All', 'beoreo' ) );
	if( count( $filterDatas ) > 0 ) :
		foreach( $filterDatas as $filterKey => $filterItem ) :
			$output .= sprintf( '<li class="tbbs-filter-item">
					<a href="#" data-titlefilter=\'.%s\'>
						<span>%s</span>
						<sup>%s</sup>
					</a>
				</li>', $filterKey, $filterItem['name'], $filterItem['count'] );
		endforeach;
	endif;
	return "
		<ul class='tbbs-filter-wrap beoreo-woo-style2' style='margin: 0 {$atts['padding']}px 20px;'>
			{$output}
		</ul>";
}
add_filter( 'tbbs_ShortcodeMasonryFilter_creative_beoreo_woo_style2', 'beoreo_woo_style2_ShortcodeMasonryFilterHeaderLayout_default', 10, 3 );

function beoreo_ShortcodeMasonryLayoutItem($data) {
	array_push( $data, array(
		'value' => 'beoreo_style1',
		'text' => __( 'Beoreo Style 1', 'beoreo' ),
		), array(
		'value' => 'beoreo_style2',
		'text' => __( 'Beoreo Style 2', 'beoreo' ),
		), array(
		'value' => 'beoreo_woo_style1',
		'text' => __( 'Beoreo Woocommerce Style 1', 'beoreo' ),
		), array(
		'value' => 'beoreo_woo_style2',
		'text' => __( 'Beoreo Woocommerce Style 2', 'beoreo' ),
		) );
	return $data;
}
add_filter( 'tbbs_ShortcodeMasonryLayoutItem', 'beoreo_ShortcodeMasonryLayoutItem', 10, 1 );

function beoreo_style1_ShortcodeMasonryItemLayout( $output, $atts, $data ){
	extract( $data );

	$taxonomy_name = empty( $atts['template_params']['filter_by_taxonomy'] ) ? 'category' : $atts['template_params']['filter_by_taxonomy'];
	$cats = get_the_term_list( get_the_ID(), $taxonomy_name, '', ' / ' );

	$output .= "
	<div class='tbbs-grid-item grid-item beoreo_style1 ". implode( ' ', $cat_filter ) ."' data-offset-height='1' data-size='' data-filter='". implode( ',',$cat_filter ) ."'>

		<div class='item-thumbnail'
		style='background: url({$thumbnail}) no-repeat center center / cover, #333;'>
		</div>

		<div class='item-info'>
			<div class='info-inner'>
				<!--div class='taxonomy'>{$cats}</div-->
				<div class='handle'>
					<a class='lightbox' href='{$thumbnail}' data-imagelightbox-thumbnail title='". __( 'view thumbnail', 'beoreo' ) ."'><i class='fa fa-search'></i></a>
					<a class='readmore' href='{$link}' title='". __( 'detail', 'beoreo' ) ."'><i class='fa fa-link'></i></a>
				</div>
				<a href='{$link}'><h2 class='title'>{$title}</h2></a>
			</div>
		</div>

	</div>";

	return $output;
}
add_filter( 'tbbs_ShortcodeMasonryItem_creative_beoreo_style1', 'beoreo_style1_ShortcodeMasonryItemLayout', 10, 3 );

function beoreo_style2_ShortcodeMasonryItemLayout( $output, $atts, $data ){
	extract( $data );
	
	$taxonomy_name = empty( $atts['template_params']['filter_by_taxonomy'] ) ? 'category' : $atts['template_params']['filter_by_taxonomy'];
	$cats = get_the_term_list( get_the_ID(), $taxonomy_name, '', ' / ' );
	$video_url = get_post_meta(get_the_ID(),'tb_portfolio_video_url',true);
	if($video_url == '') $video_url = '#';
	
	$output .= "
	<div class='tbbs-grid-item grid-item beoreo_style2 ". implode( ' ', $cat_filter ) ."' data-offset-height='1' data-size='' data-filter='". implode( ',',$cat_filter ) ."'>

		<div class='item-thumbnail'
		style='background: url({$thumbnail}) no-repeat center center / cover, #333;'>
		</div>

		<div class='item-info'>
			<div class='info-inner'>
				<a href='{$link}'><h2 class='title'>{$title}</h2></a>
				<div class='taxonomy'>{$cats}</div>
				<div class='handle'>
					<a class='lightbox' href='{$thumbnail}' data-imagelightbox-thumbnail title='". __( 'view thumbnail', 'beoreo' ) ."'><i class='fa fa-search'></i></a>
					<a class='video html5lightbox' href='{$video_url}' title='{$title}'><i class='fa fa-play'></i></a>
					<a class='readmore' href='{$link}' title='". __( 'detail', 'beoreo' ) ."'><i class='fa fa-link'></i></a>
				</div>
			</div>
		</div>

	</div>";

	return $output;
}
add_filter( 'tbbs_ShortcodeMasonryItem_creative_beoreo_style2', 'beoreo_style2_ShortcodeMasonryItemLayout', 10, 3 );

function beoreo_woo_style1_ShortcodeMasonryItemLayout( $output, $atts, $data ){
	extract( $data );
	
	global $product;
	
	/* set on sale html */
	$sale = '';
	if ( $product->is_on_sale() ) {
		$sale = '<span class="onsale">' . __( 'Sale!', 'woocommerce' ) . '</span>';
	}
	
	/* set add to cart html */
	$class = implode( ' ', array_filter( array(
					'button',
					'product_type_' . $product->product_type,
					$product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
					$product->supports( 'ajax_add_to_cart' ) ? 'ajax_add_to_cart' : ''
			) ) );
	$add_to_cart = sprintf( '<a rel="nofollow" href="%s" data-quantity="%s" data-product_id="%s" data-product_sku="%s" class="%s">%s</a>',
						esc_url( $product->add_to_cart_url() ),
						esc_attr( isset( $quantity ) ? $quantity : 1 ),
						esc_attr( $product->id ),
						esc_attr( $product->get_sku() ),
						esc_attr( isset( $class ) ? $class : 'button' ),
						esc_html( $product->add_to_cart_text() )
					);
	
	/* set quickview html */
	$quickview = do_shortcode('[bears_quickview layout="woocommerce" pid="'.get_the_ID().'" icon="fa fa-search-plus" extra_class="bt-quickview"]');
	
	/* set wishlist html */
	$wishlist = do_shortcode('[bears_woofavorite_icon pid="'.get_the_ID().'" class="bt-wishlist"]');
	
	/* set price html */
	$price_html = $product->get_price_html();
	
	/* set rating html */
	$rating_html = '';
	if ( $product->get_rating_html() ) $rating_html = $product->get_rating_html();

	/* set categories html */
	$taxonomy_name = empty( $atts['template_params']['filter_by_taxonomy'] ) ? 'category' : $atts['template_params']['filter_by_taxonomy'];
	$cats = get_the_term_list( get_the_ID(), $taxonomy_name, '', ' / ' );

	$output .= "
	<div class='tbbs-grid-item grid-item beoreo-woo-style1 woocommerce ". implode( ' ', $cat_filter ) ."' data-offset-height='1' data-size='' data-filter='". implode( ',',$cat_filter ) ."'>

		<div class='item-thumbnail'
		style='background: url({$thumbnail}) no-repeat center center / cover, #333;'>
			{$sale}
			<div class='item-actions'>
				{$add_to_cart}
				{$quickview}
				{$wishlist}
			</div>
		</div>

		<div class='item-content'>
			<h4 class='title'><a href='{$link}'>{$title}</a></h4>
			<div class='price'>{$price_html}</div>
			{$rating_html}
		</div>

	</div>";

	return $output;
}
add_filter( 'tbbs_ShortcodeMasonryItem_creative_beoreo_woo_style1', 'beoreo_woo_style1_ShortcodeMasonryItemLayout', 10, 3 );

function beoreo_woo_style2_ShortcodeMasonryItemLayout( $output, $atts, $data ){
	extract( $data );
	
	global $product; 
	
	/* set on sale html */
	$sale = '';
	if ( $product->is_on_sale() ) {
		$sale = '<span class="onsale">' . __( 'Sale!', 'woocommerce' ) . '</span>';
	}
	
	/* set price html */
	$price_html = $product->get_price_html();
	
	/* set btn add to cart */
	$class = implode( ' ', array_filter( array(
					'button',
					'product_type_' . $product->product_type,
					$product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
					$product->supports( 'ajax_add_to_cart' ) ? 'ajax_add_to_cart' : ''
			) ) );
	$add_to_cart = sprintf( '<a rel="nofollow" href="%s" data-quantity="%s" data-product_id="%s" data-product_sku="%s" class="%s">%s</a>',
						esc_url( $product->add_to_cart_url() ),
						esc_attr( isset( $quantity ) ? $quantity : 1 ),
						esc_attr( $product->id ),
						esc_attr( $product->get_sku() ),
						esc_attr( isset( $class ) ? $class : 'button' ),
						'<i class="fa fa-shopping-cart"></i>'
					);
	
	/* set quickview html */
	$quickview = do_shortcode('[bears_quickview layout="woocommerce" pid="'.get_the_ID().'" icon="fa fa-search-plus" extra_class="bt-quickview"]');
	
	/* set categories html */
	$taxonomy_name = empty( $atts['template_params']['filter_by_taxonomy'] ) ? 'category' : $atts['template_params']['filter_by_taxonomy'];
	$cats = get_the_term_list( get_the_ID(), $taxonomy_name, '', ' / ' );
	
	$output .= "
	<div class='tbbs-grid-item grid-item beoreo-woo-style2 ". implode( ' ', $cat_filter ) ."' data-offset-height='1' data-size='' data-filter='". implode( ',',$cat_filter ) ."'>
		{$sale}
		<div class='item-thumbnail'
		style='background: url({$thumbnail}) no-repeat center center / cover, #333;'> </div>
		
		<div class='bt-content'>
			<ul class='bt-action'>
				<li>{$quickview}</li>
				<li>{$add_to_cart}</li>
			</ul>
			<h4 class='bt-title'><a href='{$link}'>{$title}</a></h4>
			<div class='bt-categories'>{$cats}</div>
			<div class='bt-price'><span>{$price_html}</span></div>
		</div>

	</div>";

	return $output;
}
add_filter( 'tbbs_ShortcodeMasonryItem_creative_beoreo_woo_style2', 'beoreo_woo_style2_ShortcodeMasonryItemLayout', 10, 3 );
