<?php

/**
 * solion functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package solion
 */

/**
 * Required Files
 */

require_once get_template_directory() . '/inc/solion-class-wp-bootstrap-navwalker.php';

require_once get_template_directory() . '/inc/redux/config.php';

require_once get_template_directory() . '/inc/redux/color.php';

if( class_exists( 'WooCommerce' ) ) { 

require_once get_template_directory() . '/inc/solion-action-hooks.php';

}


/*TGM PLUGIN*/
require_once get_template_directory() . '/tgm-plugin/recommend_plugins.php';

/**
 * Enqueue Google Fonts
 */

function solion_fonts_url() {
    $font_url = '';
    
    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'tanda' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Inter:200,300,400,600,700,800&subset=latin,latin-ext' ), "//fonts.googleapis.com/css" );
    }

    return $font_url;
}

/**
 * Register and Enqueue Styles.
 */

function solion_register_styles() {
    
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );

    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css' );

    wp_enqueue_style( 'solion-flaticons', get_template_directory_uri() . '/css/flaticon-set.css' );

    wp_enqueue_style( 'solion-elegant-icons', get_template_directory_uri() . '/css/elegant-icons.css' );
    
    wp_enqueue_style( 'solion-themify-icons', get_template_directory_uri() . '/css/themify-icons.css' );

    wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css' );

    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/css/owl.carousel.min.css' );

    wp_enqueue_style( 'owl-carousal-default', get_template_directory_uri() . '/css/owl.theme.default.min.css' );

    wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css' );

    wp_enqueue_style( 'bootsnav', get_template_directory_uri() . '/css/bootsnav.css' );

    wp_enqueue_style( 'solion-style', get_template_directory_uri() . '/css/style.css' );

    wp_enqueue_style( 'solion-responsive', get_template_directory_uri() . '/css/responsive.css' );

    wp_enqueue_style( 'solion-woo-commerce', get_template_directory_uri() . '/css/woo-commerce.css' );

    wp_enqueue_style( 'solion-fonts', solion_fonts_url(), array(), '1.0.0' );

    if( class_exists( 'ReduxFrameworkPlugin' ) ) { 

    global $solion_options; 

    if ($solion_options['main_color_solion'] == 1) {
    wp_enqueue_style( 'solion-color', get_template_directory_uri() . '/css/theme-color/color-1.css' );
    }

    elseif ($solion_options['main_color_solion'] == 2) {
    wp_enqueue_style( 'solion-color', get_template_directory_uri() . '/css/theme-color/color-2.css' );
    } 

    elseif ($solion_options['main_color_solion'] == 3) {
    wp_enqueue_style( 'solion-color', get_template_directory_uri() . '/css/theme-color/color-3.css' );
    } 

    elseif ($solion_options['main_color_solion'] == 4) {
    wp_enqueue_style( 'solion-color', get_template_directory_uri() . '/css/theme-color/color-4.css' );
    } 

    elseif ($solion_options['main_color_solion'] == 5) {
    wp_enqueue_style( 'solion-color', get_template_directory_uri() . '/css/theme-color/color-5.css' );
    } 

    elseif ($solion_options['main_color_solion'] == 6) {
    wp_enqueue_style( 'solion-color', get_template_directory_uri() . '/css/theme-color/color-6.css' );
    } 

    } 

}
add_action( 'wp_enqueue_scripts', 'solion_register_styles' );


/**
 * Register and Enqueue Scripts.
 */

function solion_register_scripts() {

    wp_enqueue_script(
        'popper',
        get_template_directory_uri() . '/js/popper.min.js',
        array( 'jquery' ),
        '',
        true
    );

    wp_enqueue_script(
        'bootstrap',
        get_template_directory_uri() . '/js/bootstrap.min.js',
        array( 'jquery' ),
        '',
        true
    );

    wp_enqueue_script(
        'jquery-appear',
        get_template_directory_uri() . '/js/jquery.appear.js',
        array( 'jquery' ),
        '',
        true
    );

    wp_enqueue_script(
        'jquery-easing',
        get_template_directory_uri() . '/js/jquery.easing.min.js',
        array( 'jquery' ),
        '',
        true
    );

    wp_enqueue_script(
        'magnific-popup',
        get_template_directory_uri() . '/js/jquery.magnific-popup.min.js',
        array( 'jquery' ),
        '',
        true
    );

    wp_enqueue_script(
        'modernizr',
        get_template_directory_uri() . '/js/modernizr.custom.13711.js',
        array( 'jquery' ),
        '',
        true
    );


   wp_enqueue_script(
        'owl-carousel',
        get_template_directory_uri() . '/js/owl.carousel.min.js',
        array( 'jquery' ),
        '',
        true
    );

   wp_enqueue_script(
        'wow',
        get_template_directory_uri() . '/js/wow.min.js',
        array( 'jquery' ),
        '',
        true
    );

   wp_enqueue_script(
        'progress-bar',
        get_template_directory_uri() . '/js/progress-bar.min.js',
        array( 'jquery' ),
        '',
        true
    );

   wp_enqueue_script(
        'isotope',
        get_template_directory_uri() . '/js/isotope.pkgd.min.js',
        array( 'jquery' ),
        '',
        true
    );
    
    wp_enqueue_script(
        'imagesloaded'
    );

   wp_enqueue_script(
        'count-to',
        get_template_directory_uri() . '/js/count-to.js',
        array( 'jquery' ),
        '',
        true
    );

   wp_enqueue_script(
        'ytplayer',
        get_template_directory_uri() . '/js/YTPlayer.min.js',
        array( 'jquery' ),
        '',
        true
    );

   wp_enqueue_script(
        'jquery-nice-select',
        get_template_directory_uri() . '/js/jquery.nice-select.min.js',
        array( 'jquery' ),
        '',
        true
    );

   wp_enqueue_script(
        'bootsnav',
        get_template_directory_uri() . '/js/bootsnav.js',
        array( 'jquery' ),
        '',
        true
    );

    wp_enqueue_script(
        'solion-main',
        get_template_directory_uri() . '/js/main.js',
        array( 'jquery' ),
        '',
        true
    );

}

add_action( 'wp_enqueue_scripts', 'solion_register_scripts' );

/**
 * Solion Theme Configuration
 */

function solion_theme_config(){

    // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );

        add_image_size( 'solion-blog', 350, 262, false);
        add_image_size( 'solion-blog-standard', 920, 500, false);
        add_image_size( 'solion-blog-sidebar', 730, 400, false);

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'script',
            'style',

        ) );

    if ( ! isset( $content_width ) ) $content_width = 900;

    $solion_lang = get_template_directory_uri() . '/languages';
    load_theme_textdomain('solion', $solion_lang);

    // Register Nav Menu

        if( class_exists( 'ReduxFrameworkPlugin' ) ) { 
            register_nav_menus(
                array(
                'main-menu' => esc_html__( 'Main Menu', 'solion' ),
                'additional-menu' => esc_html__( 'Additional Links', 'solion' ),
                'footer-menu1' => esc_html__( 'Company Links', 'solion' ),
                'footer-menu2' => esc_html__( 'Solution Links', 'solion' ),
                )
            ); 
        } else
        {
            register_nav_menus(
                array(
                'main-menu' => esc_html__( 'Main Menu', 'solion' ),
                )
            ); 
        }

        // Woo-Commerce Support

        add_theme_support( 'woocommerce' );
        add_theme_support( 'wc-product-gallery-zoom');
        add_theme_support( 'wc-product-gallery-lightbox');
        add_theme_support( 'wc-product-gallery-slider');
}

add_action( 'after_setup_theme', 'solion_theme_config' , 0 );

// Disable Front-End Edior

function solion_vc_remove_frontend_links() {
    vc_disable_frontend(); // this will disable frontend editor
}
add_action( 'vc_after_init', 'solion_vc_remove_frontend_links' );

function solion_pagination() {

global $wp_query;

if ( $wp_query->max_num_pages <= 1 ) return; 

$big = 999999999; // need an unlikely integer

$pages = paginate_links( array(
        'prev_text' => wp_specialchars_decode('<i class="fas fa-angle-double-left"></i>',ENT_QUOTES),
        'next_text' => wp_specialchars_decode('<i class="fas fa-angle-double-right"></i>',ENT_QUOTES),
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'type'  => 'array',
    ) );
    if( is_array( $pages ) ) {
        $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
        echo '<nav aria-label="navigation"><ul class="pagination">';
        foreach ( $pages as $page ) {
                echo "<li class='page-item'>$page</li>";
        }
       echo '</ul></nav>';
        }
}

add_filter( 'widget_tag_cloud_args', 'solion_change_tag_cloud_font_sizes');
function solion_change_tag_cloud_font_sizes( array $args ) {
    $args['default'] = '13';
    $args['smallest'] = '13';
    $args['largest'] = '13';
    $args['unit'] = 'px';

    return $args;
}

/**
 * solion Register Widgets
 */

add_action( 'widgets_init', 'solion_widgets_init' );
function solion_widgets_init() {

        register_sidebar( array(
        'name' => esc_html__( 'Main Sidebar', 'solion' ),
        'id' => 'main-sidebar',
        'description' => esc_html__( 'Widgets in this area will be shown on all posts and pages.', 'solion' ),
        'before_widget' => '<div id="%1$s" class="sidebar-item %2$s">',
    'after_widget'  => '</div>',
        'before_title'  => '<div class="title"><h4>',
        'after_title'   => '</h4></div>',
    ) );
}

// solion Comments Display

function solion_theme_comment($comment, $args, $depth) {
    //echo 's';
   $GLOBALS['comment'] = $comment;
   $gravatar = get_avatar($comment,$size='80' ); ?>
    <div class="commen-item">
    <div class="avatar">
        <?php echo get_avatar($comment,$size='80' ); ?>
    </div>
    <div class="content">
        <div class="title">
            <h5 class="comments_title_class"><?php printf( get_comment_author_link()) ?></h5>
            <span><?php the_time(get_option('date_format')) ?></span>
        </div>
            <?php comment_text() ?> 
        <div class="comments-info">
            <?php comment_reply_link(array_merge( $args, array('reply_text' => '<i class="fa fa-reply"></i>Reply' , 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
        </div>
    </div>
</div>
<?php
}

/**
 * Solion PreDefined Imports
 */

function solion_import_files() {
    return array(
        array(
            'import_file_name'           => 'Home Version One',
            'categories'                 => array( 'MultiPage' ),
            'import_file_url'            => 'https://wordpressriverthemes.com/solion/themeforest/Demo/data.xml',
            'import_widget_file_url'     => 'https://wordpressriverthemes.com/solion/themeforest/Demo/widget.wie',
            'import_customizer_file_url' => 'https://wordpressriverthemes.com/solion/themeforest/Demo/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://wordpressriverthemes.com/solion/themeforest/Demo/redux.json',
                    'option_name' => 'solion_options',
                ),
            ),
            'import_preview_image_url'   => 'https://wordpressriverthemes.com/solion/themeforest/index-1.jpeg',
            'import_notice'                => esc_html__( 'Import process may take 2-5 minutes. If you facing any issues please contact our support.', 'solion' ),
            'preview_url'                => 'https://wordpressriverthemes.com/solion/',
        ),

        array(
            'import_file_name'           => 'Home Version Two',
            'categories'                 => array( 'MultiPage' ),
            'import_file_url'            => 'https://wordpressriverthemes.com/solion/themeforest/Demo/data.xml',
            'import_widget_file_url'     => 'https://wordpressriverthemes.com/solion/themeforest/Demo/widget.wie',
            'import_customizer_file_url' => 'https://wordpressriverthemes.com/solion/themeforest/Demo/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://wordpressriverthemes.com/solion/themeforest/Demo/redux.json',
                    'option_name' => 'solion_options',
                ),
            ),
            'import_preview_image_url'   => 'https://wordpressriverthemes.com/solion/themeforest/index-2.jpeg',
            'import_notice'                => esc_html__( 'Import process may take 2-5 minutes. If you facing any issues please contact our support.', 'solion' ),
            'preview_url'                => 'https://wordpressriverthemes.com/solion/home-version-two/',
        ),

        array(
            'import_file_name'           => 'Home Version Three',
            'categories'                 => array( 'MultiPage' ),
            'import_file_url'            => 'https://wordpressriverthemes.com/solion/themeforest/Demo/data.xml',
            'import_widget_file_url'     => 'https://wordpressriverthemes.com/solion/themeforest/Demo/widget.wie',
            'import_customizer_file_url' => 'https://wordpressriverthemes.com/solion/themeforest/Demo/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://wordpressriverthemes.com/solion/themeforest/Demo/redux.json',
                    'option_name' => 'solion_options',
                ),
            ),
            'import_preview_image_url'   => 'https://wordpressriverthemes.com/solion/themeforest/index-3.jpeg',
            'import_notice'                => esc_html__( 'Import process may take 2-5 minutes. If you facing any issues please contact our support.', 'solion' ),
            'preview_url'                => 'https://wordpressriverthemes.com/solion/home-version-three/',
        ),

        array(
            'import_file_name'           => 'Home Version Four',
            'categories'                 => array( 'MultiPage' ),
            'import_file_url'            => 'https://wordpressriverthemes.com/solion/themeforest/Demo/data.xml',
            'import_widget_file_url'     => 'https://wordpressriverthemes.com/solion/themeforest/Demo/widget.wie',
            'import_customizer_file_url' => 'https://wordpressriverthemes.com/solion/themeforest/Demo/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://wordpressriverthemes.com/solion/themeforest/Demo/redux.json',
                    'option_name' => 'solion_options',
                ),
            ),
            'import_preview_image_url'   => 'https://wordpressriverthemes.com/solion/themeforest/index-4.jpeg',
            'import_notice'                => esc_html__( 'Import process may take 2-5 minutes. If you facing any issues please contact our support.', 'solion' ),
            'preview_url'                => 'https://wordpressriverthemes.com/solion/home-version-four/',
        ),

        array(
            'import_file_name'           => 'Home Version Five',
            'categories'                 => array( 'MultiPage' ),
            'import_file_url'            => 'https://wordpressriverthemes.com/solion/themeforest/Demo/data.xml',
            'import_widget_file_url'     => 'https://wordpressriverthemes.com/solion/themeforest/Demo/widget.wie',
            'import_customizer_file_url' => 'https://wordpressriverthemes.com/solion/themeforest/Demo/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://wordpressriverthemes.com/solion/themeforest/Demo/redux.json',
                    'option_name' => 'solion_options',
                ),
            ),
            'import_preview_image_url'   => 'https://wordpressriverthemes.com/solion/themeforest/index-5.jpeg',
            'import_notice'                => esc_html__( 'Import process may take 2-5 minutes. If you facing any issues please contact our support.', 'solion' ),
            'preview_url'                => 'https://wordpressriverthemes.com/solion/home-version-five/',
        ),

        array(
            'import_file_name'           => 'Home Version Six',
            'categories'                 => array( 'MultiPage' ),
            'import_file_url'            => 'https://wordpressriverthemes.com/solion/themeforest/Demo/data.xml',
            'import_widget_file_url'     => 'https://wordpressriverthemes.com/solion/themeforest/Demo/widget.wie',
            'import_customizer_file_url' => 'https://wordpressriverthemes.com/solion/themeforest/Demo/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://wordpressriverthemes.com/solion/themeforest/Demo/redux.json',
                    'option_name' => 'solion_options',
                ),
            ),
            'import_preview_image_url'   => 'https://wordpressriverthemes.com/solion/themeforest/index-6.png',
            'import_notice'                => esc_html__( 'Import process may take 2-5 minutes. If you facing any issues please contact our support.', 'solion' ),
            'preview_url'                => 'https://wordpressriverthemes.com/solion/home-version-six/',
        ),

        array(
            'import_file_name'           => 'Home Version Seven',
            'categories'                 => array( 'MultiPage' ),
            'import_file_url'            => 'https://wordpressriverthemes.com/solion/themeforest/Demo/data.xml',
            'import_widget_file_url'     => 'https://wordpressriverthemes.com/solion/themeforest/Demo/widget.wie',
            'import_customizer_file_url' => 'https://wordpressriverthemes.com/solion/themeforest/Demo/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://wordpressriverthemes.com/solion/themeforest/Demo/redux.json',
                    'option_name' => 'solion_options',
                ),
            ),
            'import_preview_image_url'   => 'https://wordpressriverthemes.com/solion/themeforest/index-7.png',
            'import_notice'                => esc_html__( 'Import process may take 2-5 minutes. If you facing any issues please contact our support.', 'solion' ),
            'preview_url'                => 'https://wordpressriverthemes.com/solion/home-version-seven/',
        ),

        array(
            'import_file_name'           => 'OnePage Version One',
            'categories'                 => array( 'OnePage' ),
            'import_file_url'            => 'https://wordpressriverthemes.com/solion/themeforest/Demo/data.xml',
            'import_widget_file_url'     => 'https://wordpressriverthemes.com/solion/themeforest/Demo/widget.wie',
            'import_customizer_file_url' => 'https://wordpressriverthemes.com/solion/themeforest/Demo/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://wordpressriverthemes.com/solion/themeforest/Demo/redux.json',
                    'option_name' => 'solion_options',
                ),
            ),
            'import_preview_image_url'   => 'https://wordpressriverthemes.com/solion/themeforest/index-1.jpeg',
            'import_notice'                => esc_html__( 'Import process may take 2-5 minutes. If you facing any issues please contact our support.', 'solion' ),
            'preview_url'                => 'https://wordpressriverthemes.com/solion/onepage-one/',
        ),

        array(
            'import_file_name'           => 'OnePage Version Two',
            'categories'                 => array( 'OnePage' ),
            'import_file_url'            => 'https://wordpressriverthemes.com/solion/themeforest/Demo/data.xml',
            'import_widget_file_url'     => 'https://wordpressriverthemes.com/solion/themeforest/Demo/widget.wie',
            'import_customizer_file_url' => 'https://wordpressriverthemes.com/solion/themeforest/Demo/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://wordpressriverthemes.com/solion/themeforest/Demo/redux.json',
                    'option_name' => 'solion_options',
                ),
            ),
            'import_preview_image_url'   => 'https://wordpressriverthemes.com/solion/themeforest/index-2.jpeg',
            'import_notice'                => esc_html__( 'Import process may take 2-5 minutes. If you facing any issues please contact our support.', 'solion' ),
            'preview_url'                => 'https://wordpressriverthemes.com/solion/onepage-two/',
        ),

        array(
            'import_file_name'           => 'OnePage Version Three',
            'categories'                 => array( 'OnePage' ),
            'import_file_url'            => 'https://wordpressriverthemes.com/solion/themeforest/Demo/data.xml',
            'import_widget_file_url'     => 'https://wordpressriverthemes.com/solion/themeforest/Demo/widget.wie',
            'import_customizer_file_url' => 'https://wordpressriverthemes.com/solion/themeforest/Demo/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://wordpressriverthemes.com/solion/themeforest/Demo/redux.json',
                    'option_name' => 'solion_options',
                ),
            ),
            'import_preview_image_url'   => 'https://wordpressriverthemes.com/solion/themeforest/index-3.jpeg',
            'import_notice'                => esc_html__( 'Import process may take 2-5 minutes. If you facing any issues please contact our support.', 'solion' ),
            'preview_url'                => 'https://wordpressriverthemes.com/solion/onepage-three/',
        ),

        array(
            'import_file_name'           => 'OnePage Version Four',
            'categories'                 => array( 'OnePage' ),
            'import_file_url'            => 'https://wordpressriverthemes.com/solion/themeforest/Demo/data.xml',
            'import_widget_file_url'     => 'https://wordpressriverthemes.com/solion/themeforest/Demo/widget.wie',
            'import_customizer_file_url' => 'https://wordpressriverthemes.com/solion/themeforest/Demo/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://wordpressriverthemes.com/solion/themeforest/Demo/redux.json',
                    'option_name' => 'solion_options',
                ),
            ),
            'import_preview_image_url'   => 'https://wordpressriverthemes.com/solion/themeforest/index-4.jpeg',
            'import_notice'                => esc_html__( 'Import process may take 2-5 minutes. If you facing any issues please contact our support.', 'solion' ),
            'preview_url'                => 'https://wordpressriverthemes.com/solion/onepage-four/',
        ),

        array(
            'import_file_name'           => 'OnePage Version Five',
            'categories'                 => array( 'OnePage' ),
            'import_file_url'            => 'https://wordpressriverthemes.com/solion/themeforest/Demo/data.xml',
            'import_widget_file_url'     => 'https://wordpressriverthemes.com/solion/themeforest/Demo/widget.wie',
            'import_customizer_file_url' => 'https://wordpressriverthemes.com/solion/themeforest/Demo/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://wordpressriverthemes.com/solion/themeforest/Demo/redux.json',
                    'option_name' => 'solion_options',
                ),
            ),
            'import_preview_image_url'   => 'https://wordpressriverthemes.com/solion/themeforest/index-5.jpeg',
            'import_notice'                => esc_html__( 'Import process may take 2-5 minutes. If you facing any issues please contact our support.', 'solion' ),
            'preview_url'                => 'https://wordpressriverthemes.com/solion/onepage-five/',
        ),

        array(
            'import_file_name'           => 'OnePage Version Six',
            'categories'                 => array( 'OnePage' ),
            'import_file_url'            => 'https://wordpressriverthemes.com/solion/themeforest/Demo/data.xml',
            'import_widget_file_url'     => 'https://wordpressriverthemes.com/solion/themeforest/Demo/widget.wie',
            'import_customizer_file_url' => 'https://wordpressriverthemes.com/solion/themeforest/Demo/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://wordpressriverthemes.com/solion/themeforest/Demo/redux.json',
                    'option_name' => 'solion_options',
                ),
            ),
            'import_preview_image_url'   => 'https://wordpressriverthemes.com/solion/themeforest/index-6.png',
            'import_notice'                => esc_html__( 'Import process may take 2-5 minutes. If you facing any issues please contact our support.', 'solion' ),
            'preview_url'                => 'https://wordpressriverthemes.com/solion/onepage-six/',
        ),

        array(
            'import_file_name'           => 'OnePage Version Seven',
            'categories'                 => array( 'OnePage' ),
            'import_file_url'            => 'https://wordpressriverthemes.com/solion/themeforest/Demo/data.xml',
            'import_widget_file_url'     => 'https://wordpressriverthemes.com/solion/themeforest/Demo/widget.wie',
            'import_customizer_file_url' => 'https://wordpressriverthemes.com/solion/themeforest/Demo/custom.dat',
            'import_redux'               => array(
                array(
                    'file_url'    => 'https://wordpressriverthemes.com/solion/themeforest/Demo/redux.json',
                    'option_name' => 'solion_options',
                ),
            ),
            'import_preview_image_url'   => 'https://wordpressriverthemes.com/solion/themeforest/index-7.png',
            'import_notice'                => esc_html__( 'Import process may take 2-5 minutes. If you facing any issues please contact our support.', 'solion' ),
            'preview_url'                => 'https://wordpressriverthemes.com/solion/onepage-seven/',
        ),



    );
}
add_filter( 'pt-ocdi/import_files', 'solion_import_files' );

function solion_ocdi_after_import( $selected_import ) {

    if ( 'Home Version One' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'Main Menu 1', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'Home Version One' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );
        
    }

    elseif ( 'Home Version Two' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'Main Menu 2', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'Home Version Two' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );
        
    }

    elseif ( 'Home Version Three' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'Main Menu 3', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'Home Version Three' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );
        
    }

    elseif ( 'Home Version Four' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'Main Menu 4', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'Home Version Four' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );
        
    }

    elseif ( 'Home Version Five' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'Main Menu 5', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'Home Version Five' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );
        
    }

    elseif ( 'Home Version Six' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'Main Menu 6', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'Home Version Six' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );
        
    }

    elseif ( 'Home Version Seven' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'Main Menu 7', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'Home Version Seven' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );
        
    }

    elseif ( 'OnePage Version One' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'OnePage One', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'OnePage One' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );
        
    }

    elseif ( 'OnePage Version Two' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'OnePage Two', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'OnePage Two' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );
        
    }

    elseif ( 'OnePage Version Three' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'OnePage Three', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'OnePage Three' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );
        
    }

    elseif ( 'OnePage Version Four' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'OnePage Four', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'OnePage Four' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );
        
    }

    elseif ( 'OnePage Version Five' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'OnePage Five', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'OnePage Five' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );
        
    }

    elseif ( 'OnePage Version Six' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'OnePage Six', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'OnePage Six' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );
        
    }

    elseif ( 'OnePage Version Seven' === $selected_import['import_file_name'] ) {

        // Assign menus to their locations.
        $main_menu = get_term_by( 'name', 'OnePage Seven', 'nav_menu' );
        
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title( 'OnePage Seven' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );
        
    }

// Assign menus to their locations.
    $footer_menu = get_term_by( 'name', 'Additional Links', 'nav_menu' );
    $add_menu = get_term_by( 'name', 'Company Links', 'nav_menu' );
    $service_menu = get_term_by( 'name', 'Solution Links', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'main-menu' => $main_menu->term_id,
            'additional-menu' => $footer_menu->term_id,
            'footer-menu1' => $add_menu->term_id,
            'footer-menu2' => $service_menu->term_id,
        )
    );
}
add_action( 'pt-ocdi/after_import', 'solion_ocdi_after_import' );



// custom function

// Add "Buy Now" Button to Product Listing Pages
add_action('woocommerce_after_shop_loop_item', 'add_buy_now_button', 15);

function add_buy_now_button() {
    global $product;

    // Generate the "Buy Now" button
    echo '<a href="' . esc_url($product->add_to_cart_url() . '&buy_now=true') . '" class="button buy_now_button" style="background-color: #ff5722; color: #fff; margin-top: 10px;">' . __('Buy Now') . '</a>';
}

// Redirect "Buy Now" Button to Checkout Page
add_action('template_redirect', 'redirect_buy_now_to_checkout');

function redirect_buy_now_to_checkout() {
    if (isset($_GET['buy_now']) && 'true' === $_GET['buy_now']) {
        wp_safe_redirect(wc_get_checkout_url()); // Redirect to checkout
        exit;
    }
}

















