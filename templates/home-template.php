<?php /* Template Name: Home Template */ get_header(); 
$viajamos_titulo = get_field('titulo', 'option'); 
$viajamos = get_field('giros', 'option');
$clientes = get_field('clientes', 'option');
$services = get_field('servicios', 'option');
$poster = get_field('poster');
$slider = get_field('carrusel','option');
if($poster) {
    $poster = ' poster="'.$poster['url'].'"';
} else {$poster="";} ?>
<h1 class="hidden">VIP Access Vallarta</h1>

<!--Sheet Slider-->


   <div class="slider-padre">
        <?php 
        $slider_home = get_field('slider_del_home','option');
         $sub= ['uno','dos', 'tres','cuatro'];   
          
                              for($c = 0; $c < count($slider_home); $c++){ 
                              
    								echo "<div class='slider-item ".$sub[$c]." ' style='background-image:url(".$slider_home[$c]['imagen_del_slider']['url'].");'>";
    							
    							
        								echo "<h3>".$slider_home[$c]['titulo_del_slider']."</h3>";
        								echo "<p>".$slider_home[$c]['descripcion_del_slider']."</p>";
    							
    								
    								echo "</div>";
    							
                                } 
                           
                
         
            
        
        ?>
    
<div class="botones">

    
    <a href="">VIP ACCESS CANCUN</a>
   
 
    <a href="">VIP ACCESS VALLARTA</a>
    
</div>
   </div>
   

<!--
<div class="contain-header fadeIn wow">
    <div class="main-header">
        <video id="my-video" class="video" playsinline muted autoplay loop poster="<?= get_field('poster')['url']; ?>">
            <source type="video/mp4"  src="http://vipaccessvallarta.com/media/home-video.mp4">
        </video>
    </div>
</div>
-->
<a href="tel:523221718551" class="boton-llamar-ahora">Llamar ahora</a>


<section class="wow fadeIn" id="promociones-section"> 
     
    <div class="container">
        <div class="row">
        	<div class="col-md-6 col-sm-6 col-xs-12 sm-margin-seven-bottom xs-margin-40px-bottom wow fadeInRight last-paragraph-no-margin">
                <div class="position-relative">
                    <h2 class="border-left pagination-right alt-font font-weight-700 display-block md-width-90 sm-width-100 xs-width-100 xs-text-center text-white"><?= get_field('titulo_lo_mas_buscado'); ?></h2>
                </div>
            </div>  
            <div class="col-md-6"></div>
           
        </div>
        <div class="row">
             <div class="col-md-12 col-sm-12 col-xs-12">
             <ul id="rig">
                    <li>
                        <a class="rig-cell" href="/bacherollete-ladys-party-puerto-vallarta/e">
                       
                            <img class="rig-img" src="http://vipaccessvallarta.com/wp-content/uploads/2018/03/FB_IMG_1508219245848.jpg"/>
                            <span class="rig-overlay"></span>
                            <span class="rig-text">  <?= get_field('contenido_1') ?></span>
                        </a>
                    </li>
                  <li>
                        <a class="rig-cell" href="/yates">
                            <img class="rig-img" src="<?= get_field('imagen_2')['url']; ?>" alt="<?= get_field('imagen_2')['alt']; ?>" alt="<?= get_field('imagen_2')['url']; ?>" alt="<?= get_field('imagen_2')['alt']; ?>"/>
                            <span class="rig-overlay"></span>
                            <span class="rig-text">  <?= get_field('contenido_2') ?></span>
                        </a>
                    </li>
                  <li>
                        <a class="rig-cell" href="/strana-vip">
                            <img class="rig-img" src="http://vipaccessvallarta.com/wp-content/uploads/2018/03/FB_IMG_1510446137548.jpg"/>
                            <span class="rig-overlay"></span>
                            <span class="rig-text">  <?= get_field('contenido_3') ?></span>
                        </a>
                    </li>
                  <li>
                        <a class="rig-cell" href="/tours">
                            <img class="rig-img" src="http://vipaccessvallarta.com/wp-content/uploads/2018/03/12743602_10153845438766422_8874226290110805117_n.jpg"/>
                            <span class="rig-overlay"></span>
                            <span class="rig-text">  <?= get_field('contenido_4') ?></span>
                        </a>
                    </li>
                    
                 
                
                </ul>
                    
                        
                      
            </div>
        </div>
        <div class="row">
           <div class="col-md-8"></div>
           <div class="col-md-4 link-pagina text-right"><a href="/promociones" class="alt-font font-weight-600">Ver Detalles</a></div>
        </div>
    </div>
</section>
<section class="wow fadeIn  bg-violet" id="nosotros-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 fadeIn">
                <div class="text-center">
                    <h2 class="color-yellow alt-font font-weight-700 xs-text-center">Quienes Somos</h2>
                </div>
            </div>
            <div class="col-md-7 col-sm-4 col-xs-12 display-table xs-margin-30px-bottom wow fadeIn " data-wow-delay="0.2s">
                <div class="display-table-cell vertical-align-middle">
                    <img class="padding-ten-right xs-no-padding-right sm-no-padding-right width-100" src="<?= get_field('imagen_vip')['url']; ?>" alt="<?= get_field('imagen_vip')['alt']; ?>" title="<?= get_field('imagen_vip')['title']; ?>">
                </div>
            </div>
            <div class="col-md-5 col-sm-8 col-xs-12 display-table wow fadeIn color-transparente" data-wow-delay="0.4s">
                <div class="display-table-cell vertical-align-middle sm-padding-ten-left xs-no-padding-left xs-text-justify link-pagina">
                    <?= get_field('texto_acerca'); ?>
                    <a href="<?= get_field('link_acerca'); ?>" class="alt-font font-weight-600"><?= get_field('texto_link_acerca'); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="wow fadeIn bg-white" id="reserva-section">
    <div class="container">
        <div class="row">
                 <div class="col-md-3 position-relative bg-yellow">
                    <h2 class="alt-font  font-weight-700 width-25 no-margin-bottom md-width-90 sm-width-100 xs-width-100 xs-text-center">Reserva ya!</h2>
                  </div>
                <div class="col-md-6 position-relative">
            	      
            	       <?=  do_shortcode(''.get_field('contacto_code', 'option').''); ?>
				
                </div>
               
           

         </div>

    </div>
</section>

<div class="despedida-cintillo" style="background-image:url('http://vipaccessvallarta.com/wp-content/uploads/2018/04/finalpink.jpg'); background-size:cover;">
</div>
<section class="wow fadeIn bg-pink" id="despedida-section">
   
    
    <div class="container">
        <div class="row padding-two-tb margin-25px-bottom">
        	<div class="col-md-5 position-relative"></div>
        	<div class="col-md-7 position-relative rosita-chido">
                <h2 class="text-white alt-font font-weight-700 no-margin-bottom md-width-90 sm-width-100 xs-width-100 xs-text-center"><?= get_field('despedida_titulo')?></h2>
                
                <div class="text-justify text-violet">
                <p><?= get_field('despedida_descripcion')?></p>
                </div>
                <span class="px-2 btn-reservar link-pagina"><a href="/bacherollete-ladys-party-puerto-vallarta" class="alt-font font-weight-600">Leer más</a></span>
            </div>
        </div>
    </div>
 
</section>

<div class="section cotiza" style="background-image:url(https://www.hdwallpapers.in/walls/yellow_pink_gradient_4k-wide.jpg);text-align:center;">
<div class="col-sm-8 col-md-9">
<h4>COTIZA TU DESPEDIDA DE SOLTERA</h4>
</div> 
<div class="col-sm-4 col-md-3">
    <div class="boton-cotizar">
        <a href="/reservaciones" target="_self" data-hover-background-color="#ffffff" data-hover-border-color="#ffffff" data-hover-color="#000000" class="qbutton  icon_right">
            Cotizar
        </a>
    </div>
 </div>
 </div>





<?php get_footer(); ?>