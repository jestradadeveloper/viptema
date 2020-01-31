<?php get_header(); 
$slider = get_field('carrusel','option');
?>

	<main role="main">

		<!-- section -->
		<section class="container" id="page-generic">
		   
            <div class="row">
                
                <div class="col-md-12">
                   <div class="cover-lateral" style="background-image:url(<?php the_post_thumbnail_url() ;?>);">
                      
                   </div>
                 
                 
                
                   
                </div>
                <div class="col-md-12">
                    <div class="col-12">
        		        <?php custom_breadcrumbs(); ?>
        		    </div>
                    <div class="col-md-12">
                    	<h1><?php the_title(); ?></h1>
                    </div>
                    <div class="col-md-12">
                    	<?php woocommerce_content(); ?>
                    	
                    </div>
                </div>
            </div>
		


		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
