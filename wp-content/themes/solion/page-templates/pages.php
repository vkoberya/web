<?php
/*
 * Template Name: Other Pages
 */
get_header('v7'); ?>

<!-- Start Breadcrumb 
============================================= -->
<?php if ( has_post_thumbnail() ) { ?> <div class="breadcrumb-area text-center shadow dark bg-fixed text-light" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);"> <?php } else { ?>
    <div class="breadcrumb-area text-center shadow dark bg-fixed text-light less-background">
<?php }?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2><?php the_title(); ?></h2>
                <ul class="breadcrumb">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>"><i class="fas fa-home"></i> <?php esc_html_e( 'Home', 'solion' )?></a></li>
                    <li class="active"><?php esc_html_e( 'Pages', 'solion' )?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

 <?php if ( have_posts() ) : while ( have_posts() ) : the_post();       
  the_content(); // displays whatever you wrote in the wordpress editor
  endwhile; endif; //ends the loop
 ?>

<?php get_footer('v1'); ?>