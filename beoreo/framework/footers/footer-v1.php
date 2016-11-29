<?php
	$show_ft_top = get_post_meta(get_the_ID(),'tb_show_ft_top',true);
	$show_ft_bottom = get_post_meta(get_the_ID(),'tb_show_ft_bottom',true);
?>
<footer id="bt_footer" class="bt-footer">
	<!-- Start Footer Top -->
	<?php if($show_ft_top == 'on' || $show_ft_top == '') { ?>
		<div class="bt-footer-top">
			<div class="row">
				<div class="container">
					<!-- Start Footer Sidebar Top 1 -->
					<?php if (is_active_sidebar("bearstheme-footer-top-widget")) { ?>
						<div class="col-sm-6 col-md-6 col-lg-3">
							<?php dynamic_sidebar("bearstheme-footer-top-widget"); ?>
						</div>
					<?php } ?>
					<!-- End Footer Sidebar Top 1 -->
					<!-- Start Footer Sidebar Top 2 -->
					<?php if (is_active_sidebar("bearstheme-footer-top-widget-2")) { ?>
						<div class="col-sm-6 col-md-6 col-lg-3">
							<?php dynamic_sidebar("bearstheme-footer-top-widget-2"); ?>
						</div>
					<?php } ?>
					<!-- End Footer Sidebar Top 2 -->
					<!-- Start Footer Sidebar Top 3 -->
					<?php if (is_active_sidebar("bearstheme-footer-top-widget-3")) { ?>
					<div class="col-sm-6 col-md-6 col-lg-3">
						<?php dynamic_sidebar("bearstheme-footer-top-widget-3"); ?>
					</div>
					<?php } ?>
					<!-- End Footer Sidebar Top 3 -->
					<!-- Start Footer Sidebar Top 4 -->
					<?php if (is_active_sidebar("bearstheme-footer-top-widget-4")) { ?>
					<div class="col-sm-6 col-md-6 col-lg-3">
						<?php dynamic_sidebar("bearstheme-footer-top-widget-4"); ?>
					</div>
					<?php } ?>
					<!-- End Footer Sidebar Top 4 -->
				</div>
			</div>
		</div>
	<?php } ?>
	<!-- End Footer Top -->
	<!-- Start Footer Bottom -->
	<?php if($show_ft_bottom == 'on' || $show_ft_bottom == '') { ?>
		<div class="bt-footer-bottom">
			<div class="container">
				<div class="row">
					<!-- Start Footer Sidebar Bottom 1 -->
					<?php if (is_active_sidebar("bearstheme-footer-bottom-widget")) { ?>
					<div class="col-sm-4 col-md-4 col-lg-6">
						<?php dynamic_sidebar("bearstheme-footer-bottom-widget"); ?>
					</div>
					<?php } ?>
					<!-- End Footer Sidebar Bottom 1 -->
					<!-- Start Footer Sidebar Bottom 2 -->
					<?php if (is_active_sidebar("bearstheme-footer-bottom-widget-2")) { ?>
					<div class="col-sm-8 col-md-8 col-lg-6">
						<?php dynamic_sidebar("bearstheme-footer-bottom-widget-2"); ?>
					</div>
					<?php } ?>
					<!-- End Footer Sidebar Bottom 2 -->
				</div>
			</div>
		</div>
	<?php } ?>
	<!-- End Footer Bottom -->
</footer>
