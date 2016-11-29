<article <?php post_class(); ?>>
	<div class="bt-package-item">
		<div class="bt-header">
			<h3 class="bt-title"><?php the_title(); ?></h3>
			<?php 
				$price = get_post_meta(get_the_ID(),'tb_package_price',true);
				$per_time = get_post_meta(get_the_ID(),'tb_package_per_time',true);
			?>
			<div class="bt-price-per-time">
				<?php 
					if($price) echo '<span>'.$price.'</span>';  
					if($per_time) echo '<span> /'.$per_time.'</span>';  
				?>
			</div>
		</div>
		<div class="bt-content"><?php the_content(); ?></div>
	</div>
</article>