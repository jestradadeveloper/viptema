<section class="no-padding wow fadeIn">
    <div class="container-fluid">
        <div class="row blog-post-style4">
            <div class="col-md-12 no-padding xs-padding-15px-lr">
				<ul class="blog-grid blog-4col gutter-small">
				    <li class="grid-sizer"></li>
					<?php $i=1; if (have_posts()): while (have_posts() && $i <= 2) : the_post(); ?>
					<li class="grid-item wow fadeInUp post-<?php the_ID(); ?>">
						<figure>
							<a href="<?php the_permalink(); ?>">
					            <div class="blog-img bg-extra-dark-gray" data-style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
					        </a>
				            <figcaption>
				                <div class="portfolio-hover-main text-left">
				                    <div class="blog-hover-box vertical-align-bottom">
				                        <span class="post-author text-extra-small text-medium-gray display-block margin-5px-bottom xs-margin-5px-bottom"><?php the_time('F j, Y'); ?> | by <span class="text-medium-gray"><?php the_author_posts_link(); ?></span></span>
				                        <h6 class="alt-font display-block text-white font-weight-600 no-margin-bottom"><a href="<?php the_permalink(); ?>" class="text-white"><?php the_title(); ?></a></h6>
				                        <p class="text-medium-gray margin-10px-top width-80 md-width-100 blog-hover-text"><?php html5wp_excerpt('html5wp_index'); ?></p>
				                    </div>
				                </div>
				            </figcaption>
				        </figure>
						<?php edit_post_link(); ?>
					</li>
					<?php endwhile; ?>
					<?php else: ?>
					<!-- article -->
					<article>
						<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
					</article>
					<!-- /article -->
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</div>
</section>
