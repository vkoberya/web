<?php
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
   <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri() . '/img/favicon.png'); ?>" type="image/x-icon">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel='stylesheet' id='font-awesome-css' href='https://brandnamaste.com/law/wp-content/themes/solion/css/font-awesome.min.css?ver=6.7.1' media='all' />
    
<?php } wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default navbar-sticky bootsnav">

            <!-- Start Top Search -->
            <div class="container">
                <div class="row">
                    <div class="top-search">
                        <div class="input-group">
                            <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
            <input type='search' name="s" placeholder="<?php esc_attr_e( 'Search Here...', 'solion' )?>" class="form-control" id="search-box" value="<?php the_search_query(); ?>" >
            <button type="submit"><i class="fas fa-search"></i></button>
        </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav inc-border">
                    <ul>
                        <li class="search"><a href="#"><i class="fas fa-search"></i></a></li>
                    </ul>
                </div>        
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/logo.png'); ?>" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                 <?php 
                    wp_nav_menu( array(
                    'theme_location'  => 'main-menu',
                    'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                    'container'       => 'div',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id'    => 'navbar-menu',
                    'menu_class'      => 'nav navbar-nav navbar-right',
                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                    'items_wrap'      => '<ul data-in="#" data-out="#" class="%2$s" id="%1$s">%3$s</ul>',
                    'walker'          => new solion_Bootstrap_Navwalker(),
                    ) );
                ?>
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->