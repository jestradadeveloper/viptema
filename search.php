<?php get_header(); ?>
<!-- start page title section -->
        <section class="wow fadeIn bg-light-gray padding-35px-tb page-title-small top-space">
            <div class="container">
                <div class="row equalize xs-equalize-auto">
                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12 display-table">
                        <div class="display-table-cell vertical-align-middle text-left xs-text-center">
                            <!-- start page title -->
                            <h1 class="alt-font text-extra-dark-gray font-weight-600 no-margin-bottom text-uppercase">Search results for "Blog"</h1>
                            <!-- end page title -->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 display-table text-right xs-text-left xs-margin-10px-top">
                        <div class="display-table-cell vertical-align-middle breadcrumb text-small alt-font">
                            <!-- start breadcrumb -->
                            <ul class="xs-text-center">
                                <li><a href="#" class="text-dark-gray">Home</a></li>
                                <li><a href="#" class="text-dark-gray">Pages</a></li>
                                <li class="text-dark-gray">Blog</li>
                            </ul>
                            <!-- end breadcrumb -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title section -->
        <!-- start section -->
        <section class="wow fadeIn">
            <div class="container">
                <div class="row">
                    <main class="col-md-9 col-sm-12 col-xs-12 right-sidebar sm-margin-60px-bottom xs-margin-40px-bottom sm-padding-15px-lr center-col">
                        <!-- start post item --> 
                        <div class="equalize sm-equalize-auto blog-post-content margin-60px-bottom padding-60px-bottom display-inline-block border-bottom border-color-extra-light-gray sm-margin-30px-bottom sm-padding-30px-bottom xs-text-center sm-no-border">
                            <div class="blog-image col-md-5 no-padding sm-margin-30px-bottom xs-margin-20px-bottom margin-45px-right sm-no-margin-right display-table">
                                <div class="display-table-cell vertical-align-middle">
                                    <a href="blog-standard-post.html"><img src="http://placehold.it/1200x840" alt=""></a>
                                </div>
                            </div>
                            <div class="blog-text col-md-6 display-table no-padding">
                                <div class="display-table-cell vertical-align-middle">
                                    <div class="content margin-20px-bottom sm-no-padding-left ">
                                        <a href="blog-standard-post.html" class="text-extra-dark-gray margin-5px-bottom alt-font text-extra-large font-weight-600 display-inline-block">Design is thinking made visual</a>
                                        <div class="text-medium-gray text-extra-small margin-15px-bottom text-uppercase alt-font"><span>By <a href="blog-grid.html" class="text-medium-gray">Emily Wright</a></span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span>17 july 2017</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#" class="text-medium-gray">Design</a></div>
                                        <p class="no-margin width-95">Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum has been the industry industry’s standard dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                    <a class="btn btn-very-small btn-dark-gray text-uppercase" href="blog-standard-post.html">Continue Reading</a>
                                </div>
                            </div>
                        </div>
                        <!-- end post item -->  
                        <!-- start post item -->
                        <div class="equalize sm-equalize-auto blog-post-content margin-60px-bottom padding-60px-bottom display-inline-block border-bottom border-color-extra-light-gray sm-margin-30px-bottom sm-padding-30px-bottom xs-text-center sm-no-border">
                            <div class="blog-image col-md-5 no-padding sm-margin-30px-bottom xs-margin-20px-bottom margin-45px-right sm-no-margin-right display-table">
                                <div class="display-table-cell vertical-align-middle">
                                    <a href="blog-gallery-post.html"><img src="http://placehold.it/1200x840" alt=""></a>
                                </div>
                            </div>
                            <div class="blog-text col-md-6 display-table no-padding">
                                <div class="display-table-cell vertical-align-middle">
                                    <div class="content margin-20px-bottom sm-no-padding-left ">
                                        <a href="blog-gallery-post.html" class="text-extra-dark-gray margin-5px-bottom alt-font text-extra-large font-weight-600 display-inline-block">The world’s business leaders</a>
                                        <div class="text-medium-gray text-extra-small margin-15px-bottom text-uppercase alt-font"><span>By <a href="blog-grid.html" class="text-medium-gray">Jennifer Smith</a></span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span>17 july 2017</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#" class="text-medium-gray">Branding</a></div>
                                        <p class="no-margin width-95">Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum has been the industry industry’s standard dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                    <a class="btn btn-very-small btn-dark-gray text-uppercase" href="blog-gallery-post.html">Continue Reading</a>
                                </div>
                            </div>
                        </div>
                        <!-- end post item -->  
                        <!-- start pagination -->
                        <div class="col-md-12 col-sm-12 col-xs-12 text-center margin-100px-top sm-margin-50px-top position-relative wow fadeInUp">
                            <div class="pagination text-small text-uppercase text-extra-dark-gray">
                                <ul>
                                    <li><a href="#"><i class="fa fa-long-arrow-left margin-5px-right xs-display-none"></i> Prev</a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">Next <i class="fa fa-long-arrow-right margin-5px-left xs-display-none"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- end pagination -->
                    </main>
                </div>
            </div>
        </section>
        <!-- start section -->
	<main role="main">
		<!-- section -->
		<section>

			<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
