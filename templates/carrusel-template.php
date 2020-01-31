<?php /* Template Name: Carrusel */ get_header();
$slider = get_field('carrusel','option');

?>

 <div class="container carrusel-wrapper">
 <?php 
echo do_shortcode('[smartslider3 slider=2]');
?>
<div class="master-creador">
<?php the_content(); ?>
  <?=  do_shortcode(''.get_field('slider_code', 'option').''); ?>
</div>
    <div class="owl-carousel owl-theme">
        	            <?php  for($i = 0; $i < count($slider); $i++){ 
                          
								echo "<div class='item'><img src='".$slider[$i]['imagen_carrusel']['url']."' /></div>";
							
                            } 
                        ?>
    </div>

             


</div>
<?php get_footer(); ?>