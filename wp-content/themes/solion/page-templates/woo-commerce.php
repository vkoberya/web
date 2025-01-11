<?php
/*
 * Template Name: Woo-Commerce Pages
 */
get_header('v7'); ?>

<!-- Start Breadcrumb 
============================================= -->
<div class="breadcrumb-area text-center shadow dark bg-fixed text-light less-background">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2><?php the_title(); ?></h2>
                <ul class="breadcrumb">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>"><i class="fas fa-home"></i> <?php esc_html_e( 'Home', 'solion' )?></a></li>
                    <li class="active"><?php the_title(); ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<div class="wp-river-woocommerce-other-pages">
<div class="container">
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>    
  <?php the_content(); ?>
  <?php endwhile; endif; //ends the loop
 ?>
    </div>
</div>
<?php get_footer('v1'); ?>