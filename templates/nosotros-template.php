<?php /* Template Name: Pagina Interna */ get_header();
$elementos = get_field('elementos');
?>
<!-- start page title section -->
<div class="wow fadeIn cover-background" style="background-image: url('<?= get_field('cover')['url']; ?>')">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 display-table extra-small-screen">
                <div class="display-table-cell vertical-align-middle text-center">
                    <!-- start page title -->
                    <h1 class="alt-font text-white font-weight-600 no-margin text-uppercase letter-spacing-1 text-shadow"><?= the_title(); ?></h1>
                    <!-- end page title -->
                       
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end page title section -->
<!-- start about section -->
<section class="wow fadeIn cintillo" id="section-intern">
    <div class="container">
        <div class="row equalize sm-equalize-auto">
            <div class="col-md-3 col-sm-12 col-xs-12 wow fadeIn">
                <div class="display-table-cell vertical-align-middle sm-text-center">
                    <h2 class="text-white alt-font font-weight-700 width-75 no-margin-bottom md-width-90 sm-width-100 xs-width-100"> <?= get_field('subtitulo'); ?></h2>
                </div>
                 <div class="reserva-aqui">
                         <a href="/reservaciones">¡Reserva Aqui!</a>
                 </div>
            </div>
            <div class="col-md-9 col-sm-12 col-xs-12 text-white fadeIn descripcion-interna" data-wow-delay="0.4s">   
                    <?= get_field('contenido'); ?>
            </div>
        </div>
      
       
       
    
    </div>
  <?php if( isset($elementos) ): ?>
    <div class="container-fluid bg-white" id="full-intern">
                <div class="container">
                     <div class="col-md-12">
                      <div class="grid">
            <?php
                        
                            foreach($elementos as $el){ ?>
                          
                            
                                <figure class="effect-duke">
                                <img src="<?= $el['imagen_el']['url']; ?>" alt="<?= $el['imagen_el']['alt']; ?>" title="<?= $cliente['imagen_el']['title']; ?>">
                                <figcaption>
                                    <h2><span><?= $el['titulo_el'] ?></span></h2>
<p><?= $el['descripcion_el'] ?> <a href="<?= $el['link_el'] ?>" class="text-yellow">Leer Más</a></p>
</figcaption>
                                 
                                 </figure>
                            <?php
                            } ?>
                      
            </div>
                     </div>
                </div>
    </div
    <?php
      endif;
                        ?>
    
        <div class="container-fluid bg-white" id="full-intern">
                <div class="container">
                     <div class="row">
                      <div class="col-md-1"></div>
                     <div class="col-md-10">
                     <?= get_field('contenido_full'); ?>
                     </div>
                      <div class="col-md-1"></div>
                     </div>
                </div>
        </div>
       
</section>



<?php get_footer(); ?>
