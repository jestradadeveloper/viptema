<?php get_header(); ?>
<!-- start page title section -->

<div class="wow fadeIn cover-background" data-style="background-image: url('http://oh.marketing/wp-content/uploads/2018/01/banner-portafolio.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 display-table extra-small-screen">
                <div class="display-table-cell vertical-align-middle text-center">
                    <!-- start page title -->
                    <h1 class="alt-font text-white font-weight-600 no-margin text-uppercase letter-spacing-1">Portafolio</h1>
                    <!-- end page title -->
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- end page title section -->
<!-- start portfolio section -->
<section class="wow fadeIn padding-90px-top sm-padding-50px-top xs-padding-30px-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- start filter navigation -->
                <ul class="portfolio-filter nav nav-tabs border-none portfolio-filter-tab-1 font-weight-600 alt-font text-uppercase text-center margin-80px-bottom text-small sm-margin-40px-bottom xs-margin-20px-bottom">
                    <li class="nav active"><a href="javascript:void(0);" data-filter="*" class="xs-display-inline light-gray-text-link text-very-small">Todos</a></li>
                    <?php
                    $args = array( 'echo' => 0 );
                    $categories = get_categories('portafolio');
                    if( isset($categories) ):
                        foreach($categories as $category){  
                            if(!strcasecmp($category->name, "Sin categoría") == 0){?>
                                <li class="nav"><a href="javascript:void(0);" data-filter=".<?= toSlug($category->name); ?>" class="xs-display-inline light-gray-text-link text-very-small"><?= $category->name ?></a></li>
                            <?php }
                        }
                    endif;
                    ?>
                </ul>                                                                           
                <!-- end filter navigation -->
            </div>
        </div>
    </div>
    <?php get_template_part('loop-portfolio'); ?>
    <?php get_template_part('pagination'); ?>
</section>
<!-- end portfolio section -->
<?php get_footer(); ?>
