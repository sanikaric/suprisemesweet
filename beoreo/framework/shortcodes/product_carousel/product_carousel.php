<?php
function beoreo_product_carousel_func($atts, $content = null) {
    extract(shortcode_atts(array(
		'tpl' =>  'tpl1',
		'col_lg' =>  4,
		'col_md' =>  3,
		'col_sm' =>  2,
		'col_xs' =>  1,
		'item_space' =>  30,
		'loop' =>  'true',
		'autoplay' =>  'false',
		'smartspeed' =>  500,
		'nav' =>  'false',
		'dots' =>  'false',
        'el_class' => '',
        'product_cat' => '',
        'show' => 'all_products',
        'number' => -1,
        'hide_free' => 0,
        'show_hidden' => 0,
		'orderby' => 'none',
        'order' => 'none',
    ), $atts));
	
    $class = array();
    $class[] = 'woocommerce bt-product-carousel clearfix';
    $class[] = $tpl;
    $class[] = $el_class;
	
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $query_args = array(
			'post_type' 	 => 'product',
			'post_status' 	 => 'publish',
			'ignore_sticky_posts' => 1,
            'posts_per_page' => $number,
			'paged' 		 => $paged,
            //'no_found_rows'  => 1,
            'order'          => $order
    );

    $query_args['meta_query'] = array();

    if ( empty( $show_hidden ) ) {
                    $query_args['meta_query'][] = WC()->query->visibility_meta_query();
                    $query_args['post_parent']  = 0;
            }

            if ( ! empty( $hide_free ) ) {
            $query_args['meta_query'][] = array(
                        'key'     => '_price',
                        'value'   => 0,
                        'compare' => '>',
                        'type'    => 'DECIMAL',
                    );
    }

    $query_args['meta_query'][] = WC()->query->stock_status_meta_query();
    $query_args['meta_query']   = array_filter( $query_args['meta_query'] );

    if (isset($product_cat) && $product_cat != '') {
        $cats = explode(',', $product_cat);
        $product_cat = array();
        foreach ((array) $cats as $cat) :
        $category[] = trim($cat);
        endforeach;

        $query_args['tax_query'] = array(
                    array(
                            'taxonomy' 		=> 'product_cat',
                            'terms' 		=> $category,
                            'field' 		=> 'id',
                            'operator' 		=> 'IN'
                    )
        );
    }
    switch ( $show ) {
            case 'featured' :
                    $query_args['meta_query'][] = array(
                                    'key'   => '_featured',
                                    'value' => 'yes'
                            );
                    break;
            case 'onsale' :
                    $product_ids_on_sale = wc_get_product_ids_on_sale();
                            $product_ids_on_sale[] = 0;
                            $query_args['post__in'] = $product_ids_on_sale;
                    break;
    }
    switch ( $orderby ) {
			case 'price' :
				$query_args['meta_key'] = '_price';
				$query_args['orderby']  = 'meta_value_num';
				break;
			case 'rand' :
				$query_args['orderby']  = 'rand';
				break;
			case 'selling' :
				$query_args['meta_key'] = 'total_sales';
				$query_args['orderby']  = 'meta_value_num';
				break;
			case 'rated' :
				$query_args['orderby'] = 'title';
				break;
			default :
				$query_args['orderby']  = 'date';
    }

    $wp_query = new WP_Query( $query_args );
	
    ob_start();
	
	if ( $wp_query->have_posts() ) {
    ?>
		<div class="<?php echo esc_attr(implode(' ', $class)); ?>">
			<div class="owl-carousel" data-col_lg="<?php echo esc_attr($col_lg); ?>" data-col_md="<?php echo esc_attr($col_md); ?>" data-col_sm="<?php echo esc_attr($col_sm); ?>" data-col_xs="<?php echo esc_attr($col_xs); ?>" data-item_space="<?php echo esc_attr($item_space); ?>" data-loop="<?php echo esc_attr($loop); ?>" data-autoplay="<?php echo esc_attr($autoplay); ?>" data-smartspeed="<?php echo esc_attr($smartspeed); ?>" data-nav="<?php echo esc_attr($nav); ?>" data-dots="<?php echo esc_attr($dots); ?>">
				<?php while ( $wp_query->have_posts() ) { $wp_query->the_post(); ?>
					<?php include $tpl.'.php'; ?>
				<?php } ?>
			</div>
		</div>
    <?php
	} else {
		echo 'Post not found!';
    }
	wp_reset_query();
    return ob_get_clean();
}

if(function_exists('bcore_shortcode')) { bcore_shortcode('product_carousel', 'beoreo_product_carousel_func'); }
