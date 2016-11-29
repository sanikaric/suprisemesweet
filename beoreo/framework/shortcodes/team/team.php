<?php
function beoreo_team_func($atts, $content = null) {
    extract(shortcode_atts(array(
		'tpl' =>  'tpl1',
		'show_pagination' => 0,
		'columns' =>  4,
        'el_class' => '',
        'category' => '',
		'posts_per_page' => -1,
		'orderby' => 'none',
        'order' => 'none',
        'show_title' => 0,
        'show_meta' => 0,
    ), $atts));
	
    $class = array();
    $class[] = 'bt-team-wrapper clearfix';
    $class[] = $tpl;
    $class[] = $el_class;
	
	$class_columns = '';
	switch ($columns) {
		case 1:
			$class_columns = 'col-xs-12 col-sm-12 col-md-12 col-lg-12';
			break;
		case 2:
			$class_columns = 'col-xs-12 col-sm-6 col-md-6 col-lg-6';
			break;
		case 3:
			$class_columns = 'col-xs-12 col-sm-6 col-md-4 col-lg-4';
			break;
		case 4:
			$class_columns = 'col-xs-12 col-sm-6 col-md-3 col-lg-3';
			break;
		default:
			$class_columns = 'col-xs-12 col-sm-6 col-md-3 col-lg-3';
			break;
	}
	
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    
    $args = array(
        'posts_per_page' => $posts_per_page,
        'paged' => $paged,
        'orderby' => $orderby,
        'order' => $order,
        'post_type' => 'team',
        'post_status' => 'publish');
    if (isset($category) && $category != '') {
        $cats = explode(',', $category);
        $category = array();
        foreach ((array) $cats as $cat) :
        $category[] = trim($cat);
        endforeach;
        $args['tax_query'] = array(
                                array(
                                    'taxonomy' => 'team_category',
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
			<div class="bt-team">
				<div class="row">
					<?php while ( $wp_query->have_posts() ) { $wp_query->the_post(); ?>
						<?php include $tpl.'.php'; ?>
					<?php } ?>
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
		</div>
    <?php
	} else {
		echo 'Post not found!';
    }
	wp_reset_query();
    return ob_get_clean();
}

if(function_exists('bcore_shortcode')) { bcore_shortcode('team', 'beoreo_team_func'); }
