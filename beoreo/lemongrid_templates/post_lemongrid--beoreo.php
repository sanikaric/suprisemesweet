<?php 
/* variable */	
list( $template_name ) = explode( '.', $atts['template'] );
$lemongrid_options = json_encode( array(
	'cell_height'		=> (int) $atts['cell_height'],
	'vertical_margin'	=> (int) $atts['space'],
	'animate'			=> true,
	) );

/**
 * lgItemPostTempBeoreo
 *
 * @param array $atts
 * @return HTML
 */
if( ! function_exists( 'lgItemPostTempBeoreo' ) ) :
	function lgItemPostTempBeoreo( $atts )
	{
		$output = '';
		// $grid = lgGetLayoutLemonGridPerPage( get_the_ID(), $atts['element_id'], count( $atts['posts']->posts ) );
		$grid = lbGetLemonGridLayouts( $atts['element_id'], count( $atts['posts']->posts ) ); /* v1.1 */
		$posts = $atts['posts'];
		$k = 0;

		while( $posts->have_posts() ) : 
			$posts->the_post();

			if( has_post_thumbnail() ):
                $thumbnail_data = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );
            	$thumbnail = $thumbnail_data[0];
            else:
                $thumbnail = '';
            endif;
			$style = implode( ';', array( 
				"background: url({$thumbnail}) no-repeat center center / cover, #333", 
				) );

			/**
			 * Title
			 */
			$_title = '<h2 class=\'title\' title=\''. get_the_title() .'\'>'. get_the_title() .'</h2>';
			/**
			 * Category
			 */
			$posttype = get_post_type(get_the_ID());
			if($posttype == 'post') {
				$_cat = '<div class=\'category\'>'.get_the_term_list( get_the_ID(), 'category', '', ' / ' ).'</div>';
			} else {
				$_cat = '<div class=\'category\'>'.get_the_term_list( get_the_ID(), $posttype.'_category', '', ' / ' ).'</div>';
			}
			
			/**
			 * Data
			 */
			$_date = '<p class=\'date\'>'. get_the_date( 'M d Y' ) .'</p>';

			/**
			 * Icon Comment & Author
			 */
			$comments_count = wp_count_comments( get_the_ID() );
			$_comment_author = '
				<div class=\'comment-author\'>
					<span class=\'comment\'><i class=\'ion-android-chat\'></i> '. $comments_count->total_comments .'</span>
					<span class=\'author\'><i class=\'ion-person\'></i> '. get_the_author() .'</span>
				</div>';

			$info = '
			<div class=\'lemongrid-overlay\'></div>
			<div class=\'lemongrid-info\'>
				<div class=\'info-text\'>
					'. $_title .'
					'. $_cat .'
				</div>
				<div class=\'lemongrid-icon\'>
					<a class=\'readmore\' title=\''. get_the_title() .'\' href=\''. get_permalink() .'\'><i class=\'fa fa-link\'></i></a>
					<a class=\'lightbox\' data-imagelightbox-thumbnail=\'\' href=\''.esc_url($thumbnail).'\'><i class="fa fa-search-plus"></i></a>
				</div>
			</div>';

			$output .= '
				<div class=\'lemongrid-item lg-animate-fadein grid-stack-item\' data-gs-x=\''. esc_attr( $grid[$k]['x'] ) .'\' data-gs-y=\''. esc_attr( $grid[$k]['y'] ) .'\' data-gs-width=\''. esc_attr( $grid[$k]['w'] ) .'\' data-gs-height=\''. esc_attr( $grid[$k]['h'] ) .'\'>
					<div class=\'grid-stack-item-content\' style=\''. esc_attr( $style ) .'\'>
						'. $info .'
					</div>
				</div>';

			$k += 1;
		endwhile;

		wp_reset_postdata();

		return $output;
	}
endif;
?>
<div class="lemongrid-wrap <?php echo esc_attr( $atts['class_id'] ); ?> lemongrid--element <?php echo esc_attr( $template_name ) ?> <?php echo esc_attr( $atts['class'] ); ?>">
	<?php echo apply_filters( 'lemongrid_toolbar_frontend', lgToolbarFrontend( array( 'atts' => $atts ) ), array() ); ?>
	<?php echo apply_filters( 'lemongrid_before_content', '', array() ); ?>
	<div class="lemongrid-inner grid-stack" data-lemongrid-options="<?php echo esc_attr( $lemongrid_options ); ?>">
		<?php 
		if( isset( $atts['posts']->posts ) && ( count( $atts['posts']->posts ) > 0 ) ) :
			echo ( call_user_func( 'lgItemPostTempBeoreo', $atts ) );
		else :
			_e( '...', 'beoreo' );
		endif;
		?>
	</div>
	<?php echo apply_filters( 'lemongrid_after_content', '', array() ); ?>
</div>