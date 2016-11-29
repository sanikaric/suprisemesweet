<?php
/**
 * Single Product Share
 *
 * Sharing plugins can hook into here or you can add your own code directly.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/share.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post, $product;

$post_title = $post->post_title;
$permalink = get_permalink($post->ID);
$title = get_the_title();
echo '<ul class="bt-socials">
			<li><a href="http://twitter.com/share?text='.$title.'&url='.$permalink.'"
				onclick="window.open(this.href, \'twitter-share\', \'width=550,height=235\');return false;">
				<i class="fa fa-twitter"></i>
			</a></li>             
			<li><a href="https://www.facebook.com/sharer/sharer.php?u='.$permalink.'"
				 onclick="window.open(this.href, \'facebook-share\',\'width=580,height=296\');return false;">
				<i class="fa fa-facebook"></i>
			</a></li>         
			<li><a href="https://plus.google.com/share?url='.$permalink.'"
			   onclick="window.open(this.href, \'google-plus-share\', \'width=490,height=530\');return false;">
				<i class="fa fa-google-plus"></i>
			</a></li>
			<li><a href="https://www.linkedin.com/shareArticle?mini=true&url='.$permalink.'&title='.$post_title.'&summary=&source=">
				<i class="fa fa-linkedin"></i>
			</a></li>
		</ul>';
?>
