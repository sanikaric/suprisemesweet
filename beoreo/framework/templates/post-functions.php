<?php
/* Count post view. */
function beoreo_set_count_view(){
    $post_id = get_the_ID();
	if(is_single() && !empty($post_id) && !isset($_COOKIE['bt_post_view_'. $post_id])){

        $views = get_post_meta($post_id , '_bt_post_views', true);

        $views = $views ? $views : 0 ;

        $views++;

        update_post_meta($post_id, '_bt_post_views' , $views);

        /* set cookie. */
        setcookie('bt_post_view_'. $post_id, $post_id, time() * 20, '/');
    }
}

add_action( 'wp', 'beoreo_set_count_view' );

/* Get Post view */
function beoreo_get_count_view() {
	$post_id = get_the_ID();
    $views = get_post_meta($post_id , '_bt_post_views', true);

    $views = $views ? $views : 0 ;
    return $views;
}

/* Post gallery */
if (!function_exists('beoreo_grab_ids_from_gallery')) {

    function beoreo_grab_ids_from_gallery() {
        global $post;
        $gallery = beoreo_get_shortcode_from_content('gallery');
        $object = new stdClass();
        $object->columns = '3';
        $object->link = 'post';
        $object->ids = array();
        if ($gallery) {
            $object = beoreo_extra_shortcode('gallery', $gallery, $object);
        }
        return $object;
    }

}
/* Extra shortcode */
if (!function_exists('beoreo_extra_shortcode')) {
    function beoreo_extra_shortcode($name, $shortcode, $object) {
        if ($shortcode && is_object($object)) {
            $attrs = str_replace(array('[', ']', '"', $name), null, $shortcode);
            $attrs = explode(' ', $attrs);
            if (is_array($attrs)) {
                foreach ($attrs as $attr) {
                    $_attr = explode('=', $attr);
                    if (count($_attr) == 2) {
                        if ($_attr[0] == 'ids') {
                            $object->$_attr[0] = explode(',', $_attr[1]);
                        } else {
                            $object->$_attr[0] = $_attr[1];
                        }
                    }
                }
            }
        }
        return $object;
    }
}
/* Get Shortcode Content */
if (!function_exists('beoreo_get_shortcode_from_content')) {

    function beoreo_get_shortcode_from_content($param) {
        global $post;
        $pattern = get_shortcode_regex();
        $content = $post->post_content;
        if (preg_match_all('/' . $pattern . '/s', $content, $matches) && array_key_exists(2, $matches) && in_array($param, $matches[2])) {
            $key = array_search($param, $matches[2]);
            return $matches[0][$key];
        }
    }

}
/* Remove Shortcode */
if (!function_exists('beoreo_remove_shortcode_gallery')) {
	function beoreo_remove_shortcode_gallery() {
		return null;
	}
}

/*Author*/
if ( ! function_exists( 'beoreo_author_render' ) ) {
	function beoreo_author_render() {
		ob_start();
		?>
		<?php if ( is_sticky() && is_home() && ! is_paged() ) { ?>
			<span class="featured-post"> <?php _e( 'Sticky', 'beoreo' ); ?></span>
		<?php } ?>
		<div class="bt-about-author clearfix">
			<div class="bt-author-avatar"><?php echo get_avatar( get_the_author_meta( 'ID' ), 170 ); ?></div>
			<div class="bt-author-info">
				<h4 class="bt-title"><?php _e('ABOUT THE AUTHOR', 'beoreo'); ?></h4>
				<h6 class="bt-name"><?php the_author(); ?></h6>
				<?php the_author_meta('description'); ?>
			</div>
		</div>
		<?php
		return  ob_get_clean();
	} 
}
/*Custom comment list*/
function beoreo_custom_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);

	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	}
?>
	<<?php echo esc_html( $tag ); ?> <?php comment_class( empty( $args['has_children'] ) ? 'bt-comment-item clearfix' : 'bt-comment-item parent clearfix' ) ?> id="comment-<?php comment_ID() ?>">
	<div class="bt-avatar">
		<?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
	</div>
	<div class="bt-comment">
		<h5 class="bt-name">
			<?php echo '<span class="name">'.get_comment_author( get_comment_ID() ).'</span><span class="bt-time"> / '.get_comment_date().'</span>'; ?>
		</h5>
		<?php if ( $comment->comment_approved == '0' ) : ?>
			<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'beoreo' ); ?></em>
		<?php endif; ?>
		<?php comment_text(); ?>
		<?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
	</div>
<?php
}
