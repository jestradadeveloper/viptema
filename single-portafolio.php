<?php get_header(); ?>
<section id="portfolio" class="no-padding parallax mobile-height wow fadeIn" data-stellar-background-ratio="0.5" data-style="background-image:url('<?= get_field('cover')['url']; ?>');">
    <div class="container position-relative full-screen">
        <div class="slider-typography text-center">
            <div class="row slider-text-middle-main">
                <div class="slider-text-portfolio slider-text-portfolio-movil">
                    <h1 class="text-white alt-font font-weight-700"><?= the_title(); ?></h1>
                     <p class="text-white text-extra-large display-block text-left">
                       <?php
                        $categories = get_the_category();  
                        $first = true;
                        if( isset($categories) ):
                            foreach($categories as $category){ 
                                if($first){
                                    echo esc_html( $category->name );  
                                    $first = false; 
                                }else{
                                    echo ' | '.esc_html( $category->name );   
                                }
                                ?>
                       <?php  }
                        endif;
                        ?>
                        </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end product hero section -->
<!-- start product information section -->
<section class="wow fadeIn" id="down-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 no-padding fadeInUp">
                <div class="col-md-6 text-center padding-30px-lr">
                    <ul class="list-style-6">
                        <li class="text-black font-weight-800 line-height-22">Cliente</li>
                        <li><?= the_title(); ?></li>
                    </ul>
                </div>
                <div class="col-md-6 text-center padding-30px-lr">
                    <ul class="list-style-6">
                        <li class="text-black font-weight-800 line-height-22">Servicios</li>
                        <li>
                        <?php
                        $categories = get_the_category();  
                        $first = true;
                        if( isset($categories) ):
                            foreach($categories as $category){ 
                                if($first){
                                    echo esc_html( $category->name );  
                                    $first = false; 
                                }else{
                                    echo ' | '.esc_html( $category->name );   
                                }
                            }
                        endif;
                        ?>  
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end product information section -->
<!-- start product image section -->
<section class="wow fadeIn no-padding">
    <div class="container-fluid no-padding">
        <div class="row no-margin">
            <div class="no-padding wow fadeInUp">
                <img src="<?= get_field('imagen')['url']; ?>" alt="<?= get_field('imagen')['alt']; ?>" title="<?= get_field('imagen')['title']; ?>" class="width-100" />
            </div>
        </div>
    </div>
</section>
<!-- end product image section -->
<!-- start product information section -->
<section class="wow fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-md-offset-1 line-height-28 last-paragraph-no-margin wow fadeInUp">
                <ul class="list-style-6">
                    <li class="text-black font-weight-800 line-height-22">Sobre la marca</li>
                    <li><?= get_field('sobre_la_marca'); ?></li>
                </ul>
            </div>
            <div class="col-md-5 col-md-offset-1 line-height-28 last-paragraph-no-margin wow fadeInUp"  data-wow-delay="0.2s">
                <ul class="list-style-6">
                    <li class="text-black font-weight-800 line-height-22">Necesidad</li>
                    <li><?= get_field('necesidad'); ?></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end product information section -->
<!-- start product slider section -->
<section class="wow fadeIn no-padding">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="swiper-blog white-move">
                    <div class="swiper-wrapper">
                        <?php
                        $proyect_images = get_field('slider');  
                        if( isset($proyect_images) && is_array($proyect_images) ):
                            foreach($proyect_images as $image){ ?>
                                <div class="swiper-slide width-50 sm-width-80 xs-width-100">
                                    <img src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>" title="<?= $image['title']; ?>" class="width-100" />
                                </div>
                       <?php  }
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end product slider section -->
<!-- start progress bar section -->
<section class="wow fadeIn">
    <div class="container">
        <div class="row equalize sm-equalize-auto">
            <?php 
            $metricas = get_field('logros');
            $size_col = 12; 
            
            if(!empty($metricas)):
                $size_col = 6; 
            endif; ?>
            <div class="col-lg-<?= $size_col; ?> col-md-<?= $size_col; ?> col-sm-12 col-xs-12 display-table wow fadeIn last-paragraph-no-margin">
                <div class="display-table-cell vertical-align-middle sm-no-padding-lr sm-padding-30px-bottom">
                    <p class="text-black font-weight-800 line-height-22"> Descriptivo / Resultado</p>
                    <p class="width-90 margin-30px-bottom sm-width-100"><?= get_field('descriptivo-resultado'); ?></p>
                </div>
            </div>
            <?php if(!empty($metricas)): ?>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 display-table sm-no-margin-bottom wow fadeIn">
                <div class="display-table-cell vertical-align-middle">
                    <div class="skillbar-bar-main skillbar-bar-style2">
                        <?php
                            foreach($metricas as $metrica){ ?>
                                <!-- start progress bar item -->
                                <div class="skillbar margin-45px-bottom" data-percent="<?= $metrica['porcentaje']; ?>%">
                                    <span class="skill-bar-text text-extra-small text-dark-gray">
                                        <?= $metrica['metrica']; ?>
                                    </span>
                                    <p class="skillbar-bar"></p>
                                    <span class="skill-bar-percent text-small"></span>
                                </div>
                                <!-- end progress bar item -->
                            <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- end progress bar section -->  
<!-- start parallax section -->
<section id="home-bottom" class="parallax one-fourth-screen wow fadeIn" data-stellar-background-ratio="0.2" 
    data-style="background-image:url('<?= get_field('parallax_imagen')['url']; ?>');background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>
    </div>
</section>
<!-- end parallax section -->
<!-- start blog navigation bar section -->
<section class="wow fadeIn border-top border-width-1 border-color-medium-gray no-padding">
    <div class="container-fluid">
        <div class="row">
            <div class="display-table width-100 padding-30px-lr sm-padding-15px-lr">
                <div class="width-45 text-left display-table-cell vertical-align-middle">
                    <div class="blog-nav-link blog-nav-link-prev text-extra-dark-gray">
                    <?php
                    $prev_post = get_previous_post();
                    if (!empty( $prev_post )): ?>
                        <span class="text-medium-gray text-extra-small display-block text-uppercase xs-display-none">Anterior Proyecto</span>
                        <a href="<?php echo $prev_post->guid ?>">
                            <i class="ti-arrow-left blog-nav-icon"></i>
                            <?php echo $prev_post->post_title ?>
                        </a>
                    <?php endif ?> 
                    </div>
                </div>
                <div class="width-10 text-center display-table-cell vertical-align-middle">
                    <a href="<?= get_field('link_portafolio'); ?>" class="blog-nav-link blog-nav-home"><i class="ti-layout-grid2-alt"></i></a>
                </div>
                <div class="width-45 text-right display-table-cell vertical-align-middle">
                    <div class="blog-nav-link blog-nav-link-next text-extra-dark-gray">
                    <?php
                    $next_post = get_next_post();
                    if (!empty( $next_post )): ?>
                        <span class="text-medium-gray text-extra-small display-block text-uppercase xs-display-none">Proyecto Siguiente</span>
                        <a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>">
                            <i class="ti-arrow-right blog-nav-icon"></i>
                            <?php echo esc_attr( $next_post->post_title ); ?>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
