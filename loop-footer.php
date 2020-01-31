<?php query_posts('post_type=post'); ?>
<ul class="latest-post position-relative top-3">
	<?php $i=1; if (have_posts()): while (have_posts() && $i <= 2) : the_post(); ?>
	    <li class="border-bottom-default border-color-medium-dark-gray">
	        <figure>
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail(array(120,120), array('title'=> the_title_attribute(['echo'=>false])));?>
				</a>
	        </figure>
	        <div class="text-small"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span class="clearfix"></span><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?> | por <span><?php the_author_posts_link(); ?></span></div>
	    </li>
    <?php $i++; endwhile; ?>
	<?php else: ?>
		<!-- article -->
		<article>
			<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
		</article>
		<!-- /article -->
	<?php endif; ?>
</ul>
