<?php /* Template Name: Ladys template */ echo "<div class='ladys-header'>";get_header();echo"</div>";

?>

<div class="ladys-party-cover" style="background-image:url(<?php the_post_thumbnail_url() ;?>);">

    <div class="imagen-central">
        <img src="<?= get_field('imagen_central')['url']; ?>" alt="party for ladys bacherlorette in mexico puerto vallarta">
    </div>
</div>

<div class="ladys-titulo">
 <h1><?php the_title(); ?></h1>
</div>
<div class="ladys-contenido">
  <?php the_content(); ?>  
<div class="cotizar"><a href="#ladys-cotizar">Cotizar <span> <i class="fa fa-check"></i></span></a></div>
</div>
<div class="pasosdiversion">
  <div class="cover-pasos">
    <h3> ¿COMO VIVIR LA MEJOR DESPEDIDA DE SOLTERA DE TUS SUEÑOS?</h3>
  </div>
 
  <div class="contenido-pasos">
   <h2>“Creamos experiencias inolvidables en Puerto Vallarta”</h2>
    <ul>
        <li><i class="fa fa-hand-pointer-o"></i>   Selecciona</li>
        <li><i class="fa fa-comments"></i>Cotiza</li>
        <li><i class="fa fa-envelope-o"></i>Reserva</li>
        <li><i class="glyphicon glyphicon-glass"></i>Diviertete</li>
    </ul>
    
  </div> 
   <div class="pasos-descripcion">
   <p>Te ofrecemos un servicio <b>UNICO</b> de concierge Personalizado desde la planeación de tu viaje hasta el último día de tu estancia en Puerto Vallarta. Disfruta la tranquilidad de contar con asesoría <b>EN TU IDIOMA</b> en todo momento.</p>
   <p>De igual forma te podemos Armar un Paquete a la Medida con las Actividades que te interesen, sólo déjanos saber y recibirás respuesta inmediata. Disponemos de todo tipo de servicios para que tu despedida de soltera sea todo un éxito.</p>
   </div>
</div>
<div class="contenido-paquetes">
    <h3>PACKAGES VIP</h3>
        <div class="paq"><span>bacherolle</span>Bash
            <div class="avatar" style="background-image:url(<?= get_field('imagen_bash')['url']; ?>)"></div>
        </div>
        <div class="paq"><span>bacherolle</span>Tour
        <div class="avatar" style="background-image:url(<?= get_field('imagen_tour')['url']; ?>)"></div>
        </div>
        <div class="paq"><span>bacherolle</span>Hippi
        <div class="avatar" style="background-image:url(<?= get_field('imagen_hippi')['url']; ?>)"></div>
        </div>
        <div class="paq"><span>bacherolle</span>Sweet
        <div class="avatar" style="background-image:url(<?= get_field('imagen_sweet')['url']; ?>)"></div>
        </div>
        <div class="paq"><span>bacherolle</span>Gold
        <div class="avatar" style="background-image:url(<?= get_field('imagen_gold')['url']; ?>)"></div>
        </div>
        <div class="paq"><span>bacherolle</span>Pinkky
        <div class="avatar" style="background-image:url(<?= get_field('imagen_pinky')['url']; ?>)"></div>
        </div>
</div>
<div class="contenido-diversion">
  <div class="titulo-diversion">
    <h3><?= get_field('imagen_titulo_diversion');?></h3>
  </div>
  <div class="editor-diversion">
    <?= get_field('contenido_diversion'); ?>
  </div>
    <div class="reservar-form-ladys" id="ladys-cotizar">
        <?= do_shortcode( get_field('formulario_contacto_ladys'));?>
    </div>
</div>
<div class="lady-footer">

<?php get_footer(); ?>
</div>