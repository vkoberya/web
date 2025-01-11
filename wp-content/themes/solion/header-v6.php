<?php
global $solion_options;
/**
 * Header file for the solion WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package solion
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php if ( ! ( function_exists( 'has_site_icon' ) && has_site_icon() ) ) { ?>
    <!-- ========== Favicon Icon ========== -->
   <link rel="shortcut icon" href="<?php echo esc_url($solion_options['favicon']['url']); ?>" type="image/x-icon">
    
<?php } wp_head(); ?>
<link href="#" data-style="styles" rel="stylesheet">

</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
                    
    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default navbar-fixed navbar-transparent white no-background bootsnav">
            <div class="container-full">
                <div class="nav-box">

                    <!-- Start Atribute Navigation -->
                    <div class="attr-nav inc-border">
                        <ul>
                            <li class="button"><a href="#">Get a Quote</a></li>
                        </ul>
                    </div>        
                    <!-- End Atribute Navigation -->

                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                            <img src="<?php echo esc_url($solion_options['logo']['url']); ?>" class="logo logo-display" alt="<?php echo esc_attr__( 'Logo', 'solion' )?>">
                            <img src="<?php echo esc_url($solion_options['sticky-logo']['url']); ?>" class="logo logo-scrolled" alt="<?php echo esc_attr__( 'Logo', 'solion' )?>">
                        </a>
                    </div>
                    <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                 <?php 
                    wp_nav_menu( array(
                    'theme_location'  => 'main-menu',
                    'depth'           => 8, // 1 = no dropdowns, 2 = with dropdowns.
                    'container'       => 'div',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id'    => 'navbar-menu',
                    'menu_class'      => 'nav navbar-nav navbar-center',
                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                    'items_wrap'      => '<ul data-in="#" data-out="#" class="%2$s" id="%1$s">%3$s</ul>',
                    'walker'          => new solion_Bootstrap_Navwalker(),
                    ) );
                ?>
           </div>
            </div>
        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->