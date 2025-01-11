<?php
global $solion_options;
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package solion
 */
?>
<!-- Start Footer 
    ============================================= -->
    <footer>
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">
                    <div class="col-lg-5 col-md-6 item">
                        <div class="f-item about">
                            <img src="<?php echo esc_url($solion_options['footerlogo-sticky']['url']); ?>" alt="<?php echo esc_attr__( 'Logo', 'solion' )?>">
                            <p>
                                <?php echo esc_html($solion_options['footerdes']); ?>
                            </p>
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
                    <div class="col-lg-2 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title"><?php echo esc_html($solion_options['companylinks']); ?></h4>
                            <?php 
                                wp_nav_menu( array(
                                'theme_location'  => 'footer-menu1',
                                ) );
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title"><?php echo esc_html($solion_options['solutionlinks']); ?></h4>
                            <?php 
                                wp_nav_menu( array(
                                'theme_location'  => 'footer-menu2',
                                ) );
                            ?>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 item">
                        <div class="f-item">
                            <h4 class="widget-title"><?php echo esc_html($solion_options['contactinfo1']); ?></h4>
                            <div class="address">
                                <ul>
                                <li>
                                    <i class="<?php echo esc_attr($solion_options['footertitle1']); ?>"></i><?php echo esc_html($solion_options['footertext1']); ?><br><?php echo esc_html($solion_options['footertext11']); ?>
                                </li>
                                <li>
                                    <i class="<?php echo esc_attr($solion_options['footertitle2']); ?>"></i>
                                    <a href="mailto:<?php echo esc_url($solion_options['footertext2']); ?>"><?php echo esc_html($solion_options['footertext2']); ?></a>
                                </li>
                                <li>
                                    <i class="<?php echo esc_attr($solion_options['footertitle3']); ?>"></i>
                                    <?php echo esc_html($solion_options['footertext3']); ?><br><?php echo esc_html($solion_options['footertext33']); ?>
                                </li>
                            </ul>
                            
                            
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-center"><?php echo esc_html($solion_options['copyright']); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
   <!-- End Footer -->
<?php wp_footer(); ?>

</body>
</html>