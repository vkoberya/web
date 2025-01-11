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
   <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri() . '/img/favicon.png'); ?>" type="image/x-icon">
    
<?php } wp_head(); ?>

<link href="#" data-style="styles" rel="stylesheet">

</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <!-- Start Header Top 
    ============================================= -->
    <div class="top-bar-area inc-pad bg-gradient text-light">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6 info">
                    <ul>
                        <li>
                            <i class="<?php echo esc_attr($solion_options['t_icon1']); ?>"></i> <?php echo esc_html($solion_options['t_text1']); ?>
                        </li>
                        <li>
                            <i class="<?php echo esc_attr($solion_options['t_icon2']); ?>"></i> <?php echo esc_html($solion_options['t_text2']); ?>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 text-right item-flex">
                    <div class="info">
                        <ul>
                            <li>
                                <i class="<?php echo esc_attr($solion_options['t_icon3']); ?>"></i> <?php echo esc_html($solion_options['t_text3']); ?>
                            </li>
                        </ul>
                    </div>
                    <div class="social">
                        <ul>
                            <li>
                                <a href="<?php echo esc_url($solion_options['sl1']); ?>">
                                    <i class="<?php echo esc_attr($solion_options['sicon1']); ?>"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo esc_url($solion_options['sl2']); ?>">
                                    <i class="<?php echo esc_attr($solion_options['sicon2']); ?>"></i>
                                </a>
                            </li>
                            <li>
                                 <a href="<?php echo esc_url($solion_options['sl3']); ?>">
                                    <i class="<?php echo esc_attr($solion_options['sicon3']); ?>"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

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
                        
<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                                <i class="ti-bag"></i>
                                <span class="badge"><?php echo WC()->cart->get_cart_contents_count();?></span>
                            </a>
                            <ul class="dropdown-menu cart-list">
                        <?php 
                        $cart = WC()->cart->get_cart();
                        foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) 
                        { 
                            $product = $cart_item['data'];
                        ?>
                            <li>
                                    <a href="<?php echo get_permalink( $product->get_id() ); ?>" class="photo"><?php echo $product->get_image(); ?></a>
                                    <h6><a href="<?php echo get_permalink( $product->get_id() ); ?>"><?php echo $product->get_name(); ?> </a></h6>
                                    <p><?php echo $cart_item['quantity']; ?> - <span class="price"><?php echo $product->get_price(); ?></span></p>
                                </li>
                        <?php } ?>
                                <li class="total">
                                    <span class="pull-right"><strong>Total</strong>: <?php echo WC()->cart->get_total(); ?></span>
                                    <a href="<?php echo esc_url( wc_get_checkout_url() ); ?>" class="btn btn-default btn-cart"><?php esc_html_e( 'Checkout', 'solion' ); ?></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>        
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php echo esc_url($solion_options['sticky-logo']['url']); ?>" class="logo" alt="<?php echo esc_attr__( 'Logo', 'solion' )?>">
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

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->