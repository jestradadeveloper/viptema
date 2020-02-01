<?php query_posts('post_type=portafolio'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 no-padding xs-padding-15px-lr">
            <div class="filter-content overflow-hidden">
                <ul class="portfolio-grid portfolio-metro-grid work-3col hover-option7 gutter-medium">
                    <li class="grid-sizer"></li>
					<?php 
                    if (have_posts()): while (have_posts()) : the_post();
                    $categories = get_the_category(); 
                        if( isset($categories) ):
                            $filter="";
                            foreach($categories as $category){ 
                                $filter = $filter.' '.toSlug($category->name);
                            }
                        endif;
                    ?>
					<li class="grid-item <?= $filter ?> wow fadeInUp post-<?php the_ID();?>">
						<a href="<?php if (get_field('activar')){ the_permalink(); } else { echo "#"; }?>">
                            <figure>
                                <div class="portfolio-img">
                                    <img src="<?= get_field('preview_portafolio')['url']; ?>" alt="<?= get_field('preview_portafolio')['url']; ?>" title="<?= get_field('preview_portafolio')['title']; ?>" >
                                </div>
                                <figcaption>
                                    <div class="portfolio-hover-main text-center">
                                        <div class="portfolio-hover-box vertical-align-middle">
                                            <div class="portfolio-hover-content position-relative">
                                                <span class="font-weight-600 alt-font text-uppercase margin-one-bottom display-block text-extra-dark-gray text-large"><?php the_title(); ?></span>
                                                <p class="text-medium-gray text-medium no-margin-bottom">
                                                    <?php
                                                    $categories = get_the_category();  
                                                    $first = true;
                                                    if( isset($categories) ):
                                                        foreach($categories as $category){ 
                                                            if($first){
                                                                echo esc_html( $category->name );  
                                                                $first = false; 
                                                            }else{
                                                                echo ', '.esc_html( $category->name );   
                                                            }
                                                            ?>
                                                            
                                                   <?php  }
                                                    endif;
                                                    ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
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
</div>
