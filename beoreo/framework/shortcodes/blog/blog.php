<?php
function beoreo_blog_func($atts, $content = null) {
    extract(shortcode_atts(array(
		'tpl' =>  'grid',
		'columns' =>  4,
		'show_pagination' => 0,
        'el_class' => '',
        'category' => '',
		'posts_per_page' => -1,
		'orderby' => 'none',
        'order' => 'none',
        'excerpt_lenght' => 38,
        'excerpt_more' => '.',
        'readmore_text' => 'MORE',
    ), $atts));
			
    $class = array();
    $class[] = 'bt-blog-wrapper clearfix';
    $class[] = $tpl;
    $class[] = $el_class;
	
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    
    $args = array(
        'posts_per_page' => $posts_per_page,
        'paged' => $paged,
        'orderby' => $orderby,
        'order' => $order,
        'post_type' => 'post',
        'post_status' => 'publish');
    if (isset($category) && $category != '') {
        $cats = explode(',', $category);
        $category = array();
        foreach ((array) $cats as $cat) :
        $category[] = trim($cat);
        endforeach;
        $args['tax_query'] = array(
                                array(
                                    'taxonomy' => 'category',
                                    'field' => 'id',
                                    'terms' => $category
                                )
                        );
    }
    $wp_query = new WP_Query($args);
	
    ob_start();
	
	if ( $wp_query->have_posts() ) {
		if($tpl == 'list' || $tpl == 'zigzag') $columns = 1;
		$class_columns = '';
		switch ($columns) {
			case 1:
				$class_columns = 'col-xs-12 col-sm-12 col-md-12 col-lg-12';
				break;
			case 2:
				$class_columns = 'col-xs-12 col-sm-12 col-md-6 col-lg-6';
				break;
			case 3:
				$class_columns = 'col-xs-12 col-sm-12 col-md-4 col-lg-4';
				break;
			case 4:
				$class_columns = 'col-xs-12 col-sm-6 col-md-3 col-lg-3';
				break;
			default:
				$class_columns = 'col-xs-12 col-sm-6 col-md-3 col-lg-3';
				break;
		}
		?>
		<div class="<?php echo esc_attr(implode(' ', $class)); ?>">
			<div class="row">
				<?php $count = 0; while ( $wp_query->have_posts() ) { $wp_query->the_post(); ?>
					<div class="<?php echo esc_attr($class_columns); ?>">
						<?php include $tpl.'.php'; ?>
					</div>
				<?php $count++;} ?>
				<div style="clear: both;"></div>
				<?php if ($show_pagination) { ?>
					<nav class="bt-pagination" role="navigation">
						<?php
							$big = 999999999; // need an unlikely integer

							echo paginate_links( array(
								'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
								'format' => '?paged=%#%',
								'current' => max( 1, get_query_var('paged') ),
								'total' => $wp_query->max_num_pages,
								'prev_text' => __( '<i class="fa fa-angle-left"></i>', 'beoreo' ),
								'next_text' => __( '<i class="fa fa-angle-right"></i>', 'beoreo' ),
							) );
						?>
					</nav>
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

if(function_exists('bcore_shortcode')) { bcore_shortcode('blog', 'beoreo_blog_func'); }
