<?php /* Template Name: Contacto Template */ get_header(); 
$contact = get_field('contenido_contacto');
$imagenes = get_field('imagenes');
?>
<!-- start page title section -->
<div class="wow fadeIn cover-background" data-style="background-image: url('<?= get_field('cover_contacto')['url']; ?>')">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 display-table extra-small-screen">
                <div class="display-table-cell vertical-align-middle text-center">
                    <!-- start page title -->
                    <h1 class="alt-font text-white font-weight-600 no-margin text-uppercase letter-spacing-1"><?= the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end page title section -->

        <!-- start contact form section -->
        <section class="wow fadeIn big-section" id="section-down">
            <div class="container">
                <div class="row equalize sm-equalize-auto">
                    <div class="col-xs-12 sm-margin-30px-bottom wow fadeInLeft">
                        <?= get_field('contenido'); ?>
                        <?php echo do_shortcode(get_field("shortcode_contact_form"));?> 
                    </div>
                </div>
            </div>
        </section>
        <!-- end contact form section -->
        <!-- start information section -->
        <section class="no-padding-tb bg-light-gray wow fadeIn">
            <div class="container-fluid no-padding">
                <div class="row no-margin">
                    <!-- start info box item -->
                    <div class="col-md-4 no-padding image-hover-style-3 height-100 last-paragraph-no-margin">
                        <div class="feature-box-wrap">
                            <div class="width-100 display-table position-relative cover-background small-screen xs-height-300px" data-style="background: url(<?= $imagenes[0]['url']?>)"></div>
                            <div class="width-100 small-screen xs-height-300px display-table arrow-top">
                                <div class="display-table-cell vertical-align-middle padding-eighteen-lr md-padding-twelve-lr text-center sm-padding-ten-lr xs-padding-seven-all">
                                    <img src="<?= $contact[0]['icono']['url']; ?>" alt="<?= $contact[0]['icono']['alt']; ?>" title="<?= $contact[0]['icono']['title']; ?>">
                                    <div class="text-extra-dark-gray text-uppercase alt-font font-weight-600 margin-5px-all"><?= $contact[0]['titulo']; ?></div>
                                    <p class="width-55 center-col text-medium md-width-100"><?= $contact[0]['contenido']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end info box item -->
                    <!-- start info box item -->
                    <div class="col-md-4 no-padding image-hover-style-3 height-100 last-paragraph-no-margin">
                        <div class="feature-box-wrap sm-swap-block">
                            <div class="width-100 small-screen xs-height-300px display-table arrow-bottom">
                                <div class="display-table-cell vertical-align-middle padding-eighteen-lr md-padding-twelve-lr text-center sm-padding-ten-lr xs-padding-seven-all">
                                    <img src="<?= $contact[1]['icono']['url']; ?>" alt="<?= $contact[1]['icono']['alt']; ?>" title="<?= $contact[1]['icono']['title']; ?>">
                                    <div class="text-extra-dark-gray text-uppercase alt-font font-weight-600 margin-5px-all"><?= $contact[1]['titulo']; ?></div>
                                    <p class="width-55 center-col text-medium md-width-100"><?= $contact[1]['contenido']; ?></p>
                                </div>
                            </div>
                            <div class="width-100 display-table position-relative cover-background small-screen xs-height-300px" data-style="background: url(<?= $imagenes[1]['url']?>)"></div>
                        </div>
                    </div>
                    <!-- end info box item -->
                    <!-- start info box item -->
                    <div class="col-md-4 no-padding image-hover-style-3 height-100 last-paragraph-no-margin">
                        <div class="feature-box-wrap">
                            <div class="width-100 display-table position-relative cover-background small-screen xs-height-300px" data-style="background: url(<?= $imagenes[2]['url']?>)"></div>
                            <div class="width-100 small-screen xs-height-300px display-table arrow-top">
                                <div class="display-table-cell vertical-align-middle padding-eighteen-lr md-padding-twelve-lr text-center sm-padding-ten-lr xs-padding-seven-all">
                                    <img src="<?= $contact[2]['icono']['url']; ?>" alt="<?= $contact[2]['icono']['alt']; ?>" title="<?= $contact[2]['icono']['title']; ?>">
                                   <div class="text-extra-dark-gray text-uppercase alt-font font-weight-600 margin-5px-all"><?= $contact[2]['titulo']; ?></div>
                                    <p class="width-55 center-col text-medium md-width-100"><?= $contact[2]['contenido']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end info box item -->
                </div>    
            </div>
        </section>
        <!-- start information section -->    
<?php get_footer(); ?>
