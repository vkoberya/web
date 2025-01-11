<?php
/*
 * Template Name: Blog Grid
 */
get_header('pages'); ?>

<!-- Start Breadcrumb 
============================================= -->
<div class="breadcrumb-area text-center shadow dark bg-fixed text-light" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2><?php the_title(); ?></h2>
                <ul class="breadcrumb">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>"><i class="fas fa-home"></i> <?php esc_html_e( 'Home', 'solion' )?></a></li>
                    <li class="active"><?php esc_html_e( 'Blog', 'solion' )?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

 <!-- Start Blog
    ============================================= -->
    <div class="blog-area grid-colum default-padding">
        <div class="container">
            <div class="blog-items">
                <div class="blog-content">
                    <div class="blog-item-box">
                        <div class="row">
                           <?php $args = array(    
            'paged' => $paged,
            'post_type' => 'post',
            );
        $wp_query = new WP_Query($args);
        while (have_posts()): the_post(); ?>

    <!-- Single Item -->
        <div class="col-lg-6 col-md-6 single-item">
            <div class="item>
                <div class="thumb">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('solion-blog-standard'); ?>
                    </a>
                    <div class="date"><?php the_time('j'); ?> <span><?php the_time('F'); ?></span></div>
                </div>
                <div class="info">
                    <div class="meta">
                        <ul>
                            <li><a href="#"><i class="fas fa-user"></i> <?php echo get_the_author_link() ?></a></li>
                            <li><a href="#"><i class="fas fa-comments"></i>  <?php echo get_comments_number(); ?><?php comments_number( esc_html__('0 Comments', 'solion'), esc_html__('1 Comment', 'solion'), esc_html__('% Comments', 'solion') ); ?></a></li>
                        </ul>
                    </div>
                    <h4>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h4>
                    <p>
                        <?php the_excerpt(); ?>
                    </p>
                    <a class="btn circle btn-theme effect btn-md" href="<?php the_permalink(); ?>"><?php esc_html_e ('Read More','solion' ); ?></a>
                </div>
            </div>
        </div>
    <!-- End Single Item -->


<?php endwhile; ?>
                        
                    </div>
                    
                    <!-- Pagination -->
                    <div class="row">
                        <div class="col-md-12 pagi-area text-center">
                            <?php echo solion_pagination(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Blog -->


<?php get_footer('v1'); ?>