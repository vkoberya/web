<?php
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
    <footer class="bg-dark text-light">
        <!-- Fixed Shape -->
        <div class="fixed-shape">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/shape/bg-3.png'); ?>" alt="Shape">
        </div>
        <!-- Fixed Shape -->
        <!-- Start Footer Bottom -->
        <div class="footer-bottom text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-center"><?php esc_html_e('Copyright &copy;  2021. Designed by' , 'solion'); ?> <a href="<?php echo esc_url('https://themeforest.net/user/wordpressriver/portfolio' , 'solion'); ?>"><?php esc_html_e('WordPressRiver' , 'solion'); ?></a></p>
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