<?php get_header(); ?>
<!-- start page not found section -->
        <section id="home" class="no-padding parallax mobile-height wow fadeIn" data-stellar-background-ratio="0.5" data-style="background-image:url('http://placehold.it/1920x1200');">
            <div class="opacity-full bg-extra-dark-gray"></div>
            <div class="container position-relative full-screen">
                <div class="slider-typography text-center">
                    <div class="slider-text-middle-main">
                        <div class="slider-text-middle">
                            <div class="bg-black-opacity-light width-50 center-col sm-width-80">
                                <div class="padding-fifteen-all xs-padding-20px-all">
                                    <span class="title-extra-large text-white font-weight-600 display-block margin-30px-bottom xs-margin-10px-bottom">404!</span>
                                    <h6 class="text-uppercase text-deep-pink font-weight-600 alt-font display-block margin-5px-bottom">Página no encontrada</h6>
                                    <span class="text-medium-gray width-60 display-block center-col text-large sm-width-100">The page you were looking for could not be found.</span>
                                    <form action="<?php echo home_url(); ?>" method="get" class="position-relative" role="search">
                                        <div class="input-group-404 input-group margin-50px-tb xs-margin-20px-tb">
                                            <input name="s" id="text" data-email="required" type="text" placeholder="Enter your keywords..." class="extra-big-input border-none" />
                                            <div class="input-group-btn">
                                                <button type="submit" class="btn btn-large bg-white text-medium-gray" role="button"><i class="ti-search icon-small  no-margin position-raltive top-2"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                    <a href="<?php echo home_url(); ?>" class="btn btn-transparent-white btn-medium text-extra-small border-radius-4"><i class="ti-arrow-left margin-5px-right no-margin-left" aria-hidden="true"></i> Regresar </a>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- end page not found section -->

<?php get_footer(); ?>
