<?php get_header(); ?>
<section class="wow fadeIn">
    <div class="container-fluid">
        <div class="row blog-post-style4">
            <div class="col-md-12 no-padding xs-padding-15px-lr">
				<h1 class="text-white">Blog</h1>
				<?php get_template_part('loop'); ?>
				<?php get_template_part('pagination'); ?>
			</div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
