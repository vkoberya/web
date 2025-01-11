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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel='stylesheet' id='font-awesome-css' href='https://brandnamaste.com/law/wp-content/themes/solion/css/font-awesome.min.css?ver=6.7.1' media='all' />
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
                <div class="col-lg-4 info">
                    <ul>
                        <li>
                            CALL/TEXT: 954.304.2243 (USA)
                        </li>
                        <li class="cl">
                            CALL: +353(0)1.963.0777 (IRELAND)
                        </li>
                    </ul>
                </div>
				
				<div class="col-lg-4">
					<div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php echo esc_url($solion_options['sticky-logo']['url']); ?>" class="logo" alt="<?php echo esc_attr__( 'Logo', 'solion' )?>">
                    </a>
                </div>
				</div>
				
                <div class="col-lg-4">
<!--                     <div class="info">
                        <ul>
                            <li>
                                <i class="<?php //echo esc_attr($solion_options['t_icon3']); ?>"></i> <?php //echo esc_html($solion_options['t_text3']); ?>
                            </li>
                        </ul>
                    </div> -->
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
							
							<li>
                                 <a href="https://www.linkedin.com/company/law-offices-of-caro-kinsella">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
				
				<div class="col-lg-12 info">
                    <ul>
                        <li style="position: absolute;  top: -17px;">QUICK RESPONSE EMAIL : INFO@CKINSELLALAW.COM</li>
                    </ul>
                </div>
				
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-sticky navbar-fixed dark bootsnav">

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
<!--                 <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="<?php //echo esc_url(home_url('/')); ?>">
                        <img src="<?php //echo esc_url($solion_options['sticky-logo']['url']); ?>" class="logo" alt="<?php //echo esc_attr__( 'Logo', 'solion' )?>">
                    </a>
                </div> -->
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
				<div class="row">
					<div class="col-lg-8">
						 <?php 
							wp_nav_menu( array(
							'theme_location'  => 'main-menu',
							'depth'           => 8, // 1 = no dropdowns, 2 = with dropdowns.
							'container'       => 'div',
							'container_class' => 'collapse navbar-collapse',
							'container_id'    => 'navbar-menu',
							'menu_class'      => 'nav navbar-nav',
							'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
							'items_wrap'      => '<ul data-in="#" data-out="#" class="%2$s" id="%1$s">%3$s</ul>',
							'walker'          => new solion_Bootstrap_Navwalker(),
							) );
						?>
					</div>
					
					<div class="col-lg-4">
<!-- 						<button class="vc_general button-top vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-classic vc_btn3-icon-right vc_btn3-color-grey">SCHEDULE YOUR CONSULTATION <i class="vc_btn3-icon fas fa-arrow-right"></i></button> -->
						
						<a href="https://app.docketwise.com/firm_leads/public_new?uuid=3f4f6d40-ea9e-4b23-bea8-210114021da5" class="vc_general button-top vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-classic vc_btn3-icon-right vc_btn3-color-grey">
    SCHEDULE YOUR CONSULTATION <i class="vc_btn3-icon fas fa-arrow-right"></i>
</a>

						
					</div>
				</div>
				
				
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->