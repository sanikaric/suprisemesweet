<?php
global $bearstheme_options;
$readmore_text = (int) isset($bearstheme_options['tb_blog_post_readmore_text']) ? $bearstheme_options['tb_blog_post_readmore_text'] : 'VIEW DETAIL';
?>
<article <?php post_class(); ?>>
	<div class="bt-post-item">
		<div class="bt-media">
			<?php
				$media_output = '';
				if (has_post_thumbnail()) {
					$media_output = '<a href="'.get_the_permalink().'">'.get_the_post_thumbnail(get_the_ID(), "full").'</a>';
				}
				echo $media_output;
			?>
			<div class="bt-public">
				<?php 
					echo '<span class="day">'.get_the_date('d').'</span>'; 
					echo '<span class="month">'.get_the_date('M').'</span>';
				?>
			</div>
		</div>
		<div class="bt-content">
			<h3 class="bt-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<div class="bt-excerpt">
				<?php
					the_content();
					wp_link_pages(array(
						'before' => '<div class="page-links">' . __('Pages:', 'beoreo'),
						'after' => '</div>',
					));
				?>
			</div>
		</div>
		<div class="bt-bottom">
			<ul>
				<?php if ( is_sticky() ) { ?>
					<li class="sticky"><?php _e('<i class="fa fa-thumb-tack"></i> Sticky', 'beoreo'); ?></li>
				<?php } ?>
				<li><a href="<?php comments_link(); ?>"><?php comments_number( '<i class="fa fa-comments-o"></i> 0', '<i class="fa fa-comments-o"></i> 1', '<i class="fa fa-comments-o"></i> %' ); ?></a></li>
				<li><?php beoreo_post_favorite(); ?></li>
				<li><?php the_terms( get_the_ID(), 'category', '<i class="fa fa-folder-open-o"></i> ', ', ' ); ?></li>
				<li><?php the_tags( '<i class="fa fa-tags"></i> ', ', ', '' ); ?></li>
			</ul>
		</div>
	</div>
</article>
