<?php
require_once 'socials.php';
require_once 'icon_text.php';
require_once 'post_list.php';
require_once 'news_tabs.php';
require_once 'news_slider.php';
require_once 'recent_work.php';
if(class_exists('TBDonations')){
	require_once 'recent-donation.php';
}
if (class_exists('Woocommerce')) {
	require_once 'mini_cart.php';
	require_once 'woo_filter_attribute.php';
}