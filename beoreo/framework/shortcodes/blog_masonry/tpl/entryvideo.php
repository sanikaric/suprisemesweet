<div class="bt-blog-item">
	<div class="bt-thumb">
		<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
	</div>
	<div class="bt-content">
		<h4 class="bt-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
		<div class="bt-excerpt"><?php the_excerpt(); ?></div>
		<div class="bt-meta">
			<div class="bt-author"><div class="bt-meta-btn"><i class="fa fa-pencil"></i><span><?php echo get_the_author(); ?></span></div></div>
			<div class="bt-comment"><div class="bt-meta-btn"><i class="fa fa-comments-o"></i><span><?php comments_number( '0 Comment', '1 Comment', '% Comments' ); ?></span></div></div>
			<div class="bt-publish"><div class="bt-meta-btn"><i class="fa fa-calendar"></i><span><?php echo get_the_date('M d, Y'); ?></span></div></div>
			<a href="<?php the_permalink(); ?>" class="bt-readmore"><span><?php _e('Read more', 'slova'); ?></span></a>
		</div>
	</div>
	
</div>