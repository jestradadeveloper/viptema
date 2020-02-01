<?php query_posts('post_type=portafolio'); ?>
<?php 
if (have_posts()): while (have_posts()) : the_post();
    if(get_field('destacar')){?>
        <div class="swiper-slide team-block text-left team-style-2 md-margin-40px-bottom wow fadeInUp">
            <figure>
                <div class="team-image xs-width-100">
                    <img src="<?= get_field('imagen_destacada')['url']; ?>" alt="<?= get_field('imagen_destacada')['alt']; ?>" title="<?= get_field('imagen_destacada')['title']; ?>">
                    <div class="team-overlay text-center bg-black opacity8">
                        <div class="team-member-position">
                            <a class="btn btn-medium btn-transparent-white md-margin-15px-bottom sm-display-table sm-margin-lr-auto" href="<?php the_permalink(); ?>">Ver proyecto</a>
                        </div>
                    </div>
                </div>
                <figcaption>
                     <div class="margin-20px-top text-center hidden-xs">
                        <img src="<?= get_field('cliente_logo')['url']; ?>" alt="<?= get_field('cliente_logo')['alt']; ?>" title="<?= get_field('cliente_logo')['title']; ?>">
                     </div>
                     <div class="margin-20px-top text-center visible-xs ">
                        <img class="logo-carrusel" src="<?= get_field('cliente_logo')['url']; ?>" alt="<?= get_field('cliente_logo')['alt']; ?>" title="<?= get_field('cliente_logo')['title']; ?>" height="40">
                     </div>
                </figcaption>
            </figure>
        </div>
<?php }
endwhile; ?>
<?php else: ?>
<!-- article -->
<article>
	<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
</article>
<!-- /article -->
<?php
endif; 
wp_reset_query();?>