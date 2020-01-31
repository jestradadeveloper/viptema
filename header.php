<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="format-detection" content="email=no" />
		<title><?php wp_title(''); ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     	
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
        	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/sheetslider.min.css">
     	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/estilostile.css">
        <link href="//www.google-analytics.com" rel="dns-prefetch">
        <?php if(isset($favicon)){?>
            <link href="<?= $favicon['url'] ?>" rel="shortcut icon">
            <link href="<?= $favicon['url'] ?>" rel="apple-touch-icon-precomposed">
        <?php } ?>
	
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta property="article:publisher" content="https://www.facebook.com"/>
    <meta name="google-site-verification" content="jttkaEo2dKWfRCVo6zyvpSkDA4vA-tr4_ZrL6pCJmOA" />
            <script type="text/javascript">
            document.addEventListener( 'wpcf7mailsent', function( event ) {
                location = 'http://vipaccessvallarta.com/gracias';
            }, false );
            </script>
            <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-117503140-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-117503140-1');
</script>

 <script type="text/javascript"
        src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<?php wp_head(); ?>
		
		

	</head>
	<body <?php body_class(); ?>>
    	<header>
    		<!-- nav -->
    		<nav class="navbar navbar-default bootsnav navbar-top header-light bg-transparent nav-box-width <?php color_menu(); ?>">
                <div class="container nav-header-container">
                    <div class="row padding-one-tb">
                        <!-- start logo -->
                        <div class="col-md-2 col-xs-5">
                            <a href="<?php echo home_url(); ?>" title="VIP Access Promotion" class="logo">
                             VIP  
                             
                            </a>
                        </div>
                        <!-- end logo -->
                        <div class="col-md-7 col-xs-2 width-auto pull-right accordion-menu xs-no-padding-right">
                            <button type="button" class="navbar-toggle collapsed pull-right" data-toggle="collapse" data-target="#navbar-collapse-toggle-1">
                                <span class="sr-only">toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="navbar-collapse collapse" id="navbar-collapse-toggle-1">
                                <?php oh_nav(); ?>
                            </div>
                        </div>
                        
                    </div>
  
                </div>
            </nav>
        </header>
        <!-- /header -->


