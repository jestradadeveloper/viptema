<?php get_header(); 
$slider = get_field('carrusel','option');
?>

	<main role="main">

		<!-- section -->
		<section class="container" id="page-generic">
		   
            <div class="row">
                
                <div class="col-md-4">
                   <div class="cover-lateral" style="background-image:url(<?php the_post_thumbnail_url() ;?>);">
                        
                   </div>
                 
                   
                   <br>
                   <div class="reserva-aqui">
                         <a href="/reservaciones">¡Reserva Aqui!</a>
                   </div>
                   <?php $duracion = get_post_meta($post->ID,'duracion_tour_valor',true);
                    $costo = get_post_meta($post->ID,'costo_tour_valor',true);
                      $desc_alimento = get_post_meta($post->ID,'desc_alimento_valor',true);
                    $barra = get_post_meta($post->ID,'barrasi',true);
                    $comida = get_post_meta($post->ID,'sl-meta-box-sidebar',true);
                   ?>
                   <div class="iconos-importantes">
                             <?php if($costo){
                              echo " <div class='icono-box'>";
                              echo " <span>costo:</span>";
                              echo " <i class='fa fa-dollar'></i>";
                              echo "".$costo."";
                              echo " </div>";
                             }?>
                             <?php if($duracion){
                              echo " <div class='icono-box'>";
                              echo " <span>Dura:</span>";
                              echo " <i class='fa fa-clock-o'></i>";
                              echo "".$duracion."";
                              echo " </div>";
                             }?>
                            
                             <?php if($barra){
                              echo " <div class='icono-box'>";
                              echo " <span>Incluye:</span>";
                              echo " <i class='fa fa-glass'></i>";
                              echo "  Barra Libre";
                              echo " </div>";
                             }?>
                              <?php if($comida){
                              echo " <div class='icono-box'>";
                              echo " <span>Incluye:</span>";
                              echo " <i class='fa fa-cutlery'></i>";
                                    if($desc_alimento){
                                    echo " ".$desc_alimento."";
                                    }
                                    else{
                                    echo "Alimentos";
                                    }
                              echo " </div>";
                             }?>
                        
                           
                            
                   </div>
                   <br>
               
                </div>
                <div class="col-md-8">
                    <div class="col-12">
        		        <?php custom_breadcrumbs(); ?>
        		    </div>
                    <div class="col-md-12">
                    	<h1><?php the_title(); ?></h1>
                    </div>
                    <div class="col-md-12">
                    	
                    		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
                    
                    			<!-- article -->
                    			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    
                    				<?php the_content(); ?>
                    
                    				<?php comments_template( '', true ); // Remove if you don't want comments ?>
                    
                    				<br class="clear">
                    
                    				<?php edit_post_link(); ?>
                    
                    			</article>
                    			<!-- /article -->
                    
                    		<?php endwhile; ?>
                    
                    		<?php else: ?>
                    
                    			<!-- article -->
                    			<article>
                    
                    				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
                    
                    			</article>
                    			<!-- /article -->
                    
                    		<?php endif; ?>
                    </div>
                </div>
            </div>
		


		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
