<?php
	$show_ft_top = get_post_meta(get_the_ID(),'tb_show_ft_top',true);
	$show_ft_bottom = get_post_meta(get_the_ID(),'tb_show_ft_bottom',true);
?>
<footer id="bt_footer_v2" class="bt-footer-v2">
	<!-- Start Footer Top -->
	<?php if($show_ft_top == 'on' || $show_ft_top == '') { ?>
		<div class="bt-footer-top">
			<div class="row">
				<div class="container">
					<!-- Start Footer Sidebar Top 1 -->
					<?php if (is_active_sidebar("bearstheme-footer2-top-widget")) { ?>
						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 bt-col text-center">
							<?php dynamic_sidebar("bearstheme-footer2-top-widget"); ?>
						</div>
					<?php } ?>
					<!-- End Footer Sidebar Top 1 -->
					<!-- Start Footer Sidebar Top 2 -->
					<?php if (is_active_sidebar("bearstheme-footer2-top-widget-2")) { ?>
						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 bt-col">
							<?php dynamic_sidebar("bearstheme-footer2-top-widget-2"); ?>
						</div>
					<?php } ?>
					<!-- End Footer Sidebar Top 2 -->
					<!-- Start Footer Sidebar Top 3 -->
					<?php if (is_active_sidebar("bearstheme-footer2-top-widget-3")) { ?>
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 bt-col">
						<?php dynamic_sidebar("bearstheme-footer2-top-widget-3"); ?>
					</div>
					<?php } ?>
					<!-- End Footer Sidebar Top 3 -->
				</div>
			</div>
		</div>
	<?php } ?>
	<!-- End Footer Top -->
	<!-- Start Footer Bottom -->
	<?php if($show_ft_bottom == 'on' || $show_ft_bottom == '') { ?>
		<div class="bt-footer-bottom text-center">
			<div class="container">
				<div class="row">
					<?php if (is_active_sidebar("bearstheme-footer2-bottom-widget")) { ?>
					<div class="col-md-12">
						<?php dynamic_sidebar("bearstheme-footer2-bottom-widget"); ?>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	<?php } ?>
	<!-- End Footer Bottom -->
</footer>
