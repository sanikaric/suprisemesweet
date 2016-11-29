<?php
function beoreo_portfolio_carousel_func($atts, $content = null) {
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
        'category' => '',
		'posts_per_page' => -1,
		'orderby' => 'none',
        'order' => 'none',
    ), $atts));
	
    $class = array();
    $class[] = 'bt-portfolio-carousel clearfix';
    $class[] = $tpl;
    $class[] = $el_class;
	
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    
    $args = array(
        'posts_per_page' => $posts_per_page,
        'paged' => $paged,
        'orderby' => $orderby,
        'order' => $order,
        'post_type' => 'portfolio',
        'post_status' => 'publish');
    if (isset($category) && $category != '') {
        $cats = explode(',', $category);
        $category = array();
        foreach ((array) $cats as $cat) :
        $category[] = trim($cat);
        endforeach;
        $args['tax_query'] = array(
                                array(
                                    'taxonomy' => 'portfolio_category',
                                    'field' => 'id',
                                    'terms' => $category
                                )
                        );
    }
    $wp_query = new WP_Query($args);
	
    ob_start();
	
	if ( $wp_query->have_posts() ) {
    ?>
		<div class="<?php echo esc_attr(implode(' ', $class)); ?>">
			<div class="owl-carousel" data-col_lg="<?php echo esc_attr($col_lg); ?>" data-col_md="<?php echo esc_attr($col_md); ?>" data-col_sm="<?php echo esc_attr($col_sm); ?>" data-col_xs="<?php echo esc_attr($col_xs); ?>" data-item_space="<?php echo esc_attr($item_space); ?>" data-loop="<?php echo esc_attr($loop); ?>" data-autoplay="<?php echo esc_attr($autoplay); ?>" data-smartspeed="<?php echo esc_attr($smartspeed); ?>" data-nav="<?php echo esc_attr($nav); ?>" data-dots="<?php echo esc_attr($dots); ?>">
				<?php while ( $wp_query->have_posts() ) { $wp_query->the_post(); ?>
					<article <?php post_class(); ?>>
							<?php if ( has_post_thumbnail() ) the_post_thumbnail('full'); ?>
							<div class="bt-overlay">
								<div class="bt-content">
									<?php
										$video_url = get_post_meta(get_the_ID(),'tb_portfolio_video_url',true);
										if($video_url == '') $video_url = '#';
									?>
									<a class="html5lightbox" title="<?php echo get_the_title(); ?>" href="<?php echo esc_url($video_url); ?>"><i class="fa fa-play"></i></a>
									<div class="bt-category"><?php the_terms(get_the_ID(), 'portfolio_category', '' , ', ' ); ?></div>
									<h3 class="bt-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								</div>
							</div>
					</article>
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

if(function_exists('bcore_shortcode')) { bcore_shortcode('portfolio_carousel', 'beoreo_portfolio_carousel_func'); }
