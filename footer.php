         <div class="container-fluid bg-darkblue">
         <br>     
        </div>
			<!-- start footer --> 
			<footer class="footer-modern-dark bg-extra-dark-gray">
            <div class="footer-widget-area bg-black padding-one-tb padding-40px-bottom xs-padding-30px-bottom padding-one-tb ">
                <div class="container">
                    <div class="row equalize xs-equalize-auto">
                     
                        <!-- start slogan -->
                        <div class="col-md-3 col-sm-6 col-xs-12 alt-font xs-text-center sm-text-center xs-margin-15px-bottom text-white display-table">
                            <div class="display-table-cell vertical-align-middle text-white">
                               <div class="link-pagina"> <?= get_field('texto_telefono', 'option'); ?> : <a  href="tel:<?= preg_replace('/\D/', '', get_field('telefono', 'option')); ?>"><?= get_field('telefono', 'option'); ?></a></div>
                              
                            </div>
                        </div>
                         <div class="col-md-6 col-sm-6 col-xs-12 alt-font xs-text-center sm-text-center xs-margin-15px-bottom text-white display-table">
                            <div class="display-table-cell vertical-align-middle text-white link-pagina">
                                
                                <?= get_field('texto_email', 'option'); ?> <a href="mailto:<?= get_field('email', 'option'); ?>"><?= get_field('email', 'option'); ?></a>
                            </div>
                        </div>
                           <div class="col-md-3 col-sm-6 col-xs-12 alt-font xs-text-center sm-text-center xs-margin-15px-bottom text-white display-table">
                            <div class="display-table-cell vertical-align-middle text-yellow">
                                <div><?= get_field('texto_direccion', 'option'); ?> </div>
                              
                            </div>
                        </div>
                
                    </div>
                </div>
            </div>
            <div class="footer-widget-area padding-five-top padding-30px-bottom xs-padding-30px-top">
                <div class="container">
                    <div class="row">
                        <!-- start about --> 
                        <!-- start newsletter -->
                        <div class="col-md-12 col-sm-6 col-xs-12 widget sm-margin-30px-bottom text-center">
                            <div class="text-white margin-15px-bottom font-weight-600 color-white"><?= get_field('titulo_newsletter', 'option'); ?></div>
                            <div class="text-small width-90 xs-width-100 color-white"><?= get_field('texto_newsletter', 'option'); ?></div>
                          
                        </div>
                        
                        <!-- end newsletter -->
                       
                    </div>
                    <div class="row">
                          <div class="col-md-12 col-sm-6 col-xs-12 widget sm-margin-30px-bottom xs-text-center">
                        
                            <?=  do_shortcode(''.get_field('newsletter_code', 'option').''); ?>
                        </div></div>
                </div>
            </div>
            <div class="container">
                <div class="footer-bottom text-white border-top-default border-color-medium-dark-gray padding-10px-bottom">
                    <div class="row">
                        <!-- start copyright -->
                       
                        <div class="col-sm-6 hidden-xs nav-footer text-small text-right xs-text-center"><?php oh_nav(); ?></div>
                         <div class="col-sm-6 col-xs-12 text-left text-small xs-text-center" style="margin-top:20px;">Todos los derechos Reservados para Wedi - Realizado por José Estrada</div>
                        <!-- end copyright -->
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->

		<!-- /wrapper -->
		<a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
        <!-- end scroll to top  -->
        <!-- javascript libraries -->
        
		<?php wp_footer(); ?>
           <script src="https://js.stripe.com/v3"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

 
  <script src="https://rawgit.com/kswedberg/jquery-smooth-scroll/master/jquery.smooth-scroll.js"></script>
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.appear/0.3.6/jquery.appear.min.js"></script>
  		  	  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  		  	   
  <!-- Start of HubSpot Embed Code -->
  <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/6915120.js"></script>
<!-- End of HubSpot Embed Code -->
 


       <script>
       $(document).ready(function() {
        
         
        $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
     center: true,
     autoplay:true,
    autoplayTimeout:1500,
     items:1,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
});
});
       
       </script>

	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/dist/sheetslider.min.js"></script>
        <script>
(function() {
  var stripe = Stripe('pk_live_gtRNTW8KDFttZx0FTd7nxL5Y00qVlqoNMm');


  var botonDePagoRitmos = document.getElementById('checkout-button-sku_GR5rB7uEaUbcMj') ? putButton( document.getElementById('checkout-button-sku_GR5rB7uEaUbcMj'),'sku_GR5rB7uEaUbcMj'): false;
  var botonDePagoBallenas = document.getElementById('checkout-button-sku_GReTs9rgclUDH3') ? putButton(document.getElementById('checkout-button-sku_GReTs9rgclUDH3'),'sku_GReTs9rgclUDH3'): false;
  
 

  function putButton(thebutton, product_sku){
     
     if(thebutton){
       thebutton.addEventListener('click', function () {
    // When the customer clicks on the button, redirect
    // them to Checkout.
    stripe.redirectToCheckout({
      items: [{sku: product_sku, quantity: 1}],

      // Do not rely on the redirect to the successUrl for fulfilling
      // purchases, customers may not always reach the success_url after
      // a successful payment.
      // Instead use one of the strategies described in
      // https://stripe.com/docs/payments/checkout/fulfillment
      successUrl: 'https://vipaccessvallarta.com/success',
      cancelUrl: 'https://vipaccessvallarta.com/canceled',
    })
    .then(function (result) {
      if (result.error) {
        // If `redirectToCheckout` fails due to a browser or network
        // error, display the localized error message to your customer.
        var displayError = document.getElementById('error-message');
        displayError.textContent = result.error.message;
      }
    });
  });
      
  }
  
  }
  


  
})();
</script>


        </body>
        
</html>
