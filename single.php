<?php get_header(); ?>
    <!-- start page title section -->
    <section class="wow fadeIn parallax" data-stellar-background-ratio="0.5" data-style="background-image:url('<?php the_post_thumbnail_url() ;?>');">
        <div class="opacity-medium bg-extra-dark-gray"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 one-second-screen display-table page-title-large">
                    <div class="display-table-cell vertical-align-middle text-center">
                        <!-- start page title -->
                        <h1 class="text-white alt-font font-weight-600 margin-10px-bottom"><?php the_title(); ?></h1>
                        <!-- end page title -->
                        <!-- start sub title -->
                        <span class="text-white opacity6 alt-font no-margin-bottom text-small"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;por <span class="text-white"><?php the_author_posts_link(); ?></span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; <?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?></span>
                        <!-- end sub title -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title section -->
    <section class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-sm-12 col-xs-12 center-col xs-text-center">
                    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <?php the_content(); // Dynamic Content ?>
                        </article>
                    <?php endwhile; else: ?>
                        <article>
                            <h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
                        </article>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php edit_post_link(); // Always handy to have Edit Post Links available ?>
    </section>

<?php get_footer(); ?>
