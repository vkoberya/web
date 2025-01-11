<?php
/**
 * The template for displaying the 404 template in the Twenty Twenty theme.
 *
 * @package solion
 */

if( class_exists( 'ReduxFrameworkPlugin' ) ) { 
    get_header('pages');
}
else {
    get_header();
}
?>

<!-- Start Breadcrumb 
============================================= -->
<?php if ( has_post_thumbnail() ) { ?> <div class="breadcrumb-area text-center shadow dark bg-fixed text-light" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);"> <?php } else { ?>
    <div class="breadcrumb-area text-center shadow dark bg-fixed text-light less-background">
<?php }?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2><?php esc_html_e( '404 ERROR', 'solion' )?></h2>
                <ul class="breadcrumb">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>"><i class="fas fa-home"></i> <?php esc_html_e( 'Home', 'solion' )?></a></li>
                    <li class="active"><?php esc_html_e( 'PAGE NOT FOUND', 'solion' )?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start 404 
============================================= -->
<div class="error-page-area default-padding">
    <div class="container">
        <div class="row align-center">
            <div class="col-lg-6 thumb">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/img/illustration/5.png'); ?>" alt="Thumb">
            </div>
            <div class="col-lg-6">
                <div class="error-box">
                     <h1><?php esc_html_e( '404', 'solion' )?></h1>
                    <h2><?php esc_html_e( 'SORRY PAGE WAS NOT FOUND!', 'solion' )?></h2>
                   <a class="btn btn-theme effect btn-md" href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e( 'Back To Home', 'solion' )?></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End 404 -->

<?php if( class_exists( 'ReduxFrameworkPlugin' ) ) { 
    get_footer('v1');
}
else {
    get_footer();
}