<?php /* Template Name: Tienda */ get_header(); 

$slider = get_field('carrusel','option');
?>

	<main role="main">

		<!-- section -->
		<section class="container" id="page-generic">
		   
            <div class="row">
                
           
                <div class="col-md-12">
                    <div class="col-12">
        		        <?php custom_breadcrumbs(); ?>
        		    </div>
                    
                    <div class="col-md-12">
                    	<?php woocommerce_content(); ?>
                    	<?php do_shortcode('[woocommerce_cart]') ?>
                    	
                    </div>
                </div>
            </div>
		


		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
