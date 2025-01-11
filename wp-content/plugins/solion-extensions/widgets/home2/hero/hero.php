<?php

/**
* Adds new shortcode "home2-hero-section-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home2hero_section' ) ) {

    class home2hero_section {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home2-hero-section-shortcode', array( 'home2hero_section', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home2-hero-section-shortcode', array( 'home2hero_section', 'map' ) );
            }

        }


        /**
        * Map shortcode to VC
    *
    * This is an array of all your settings which become the shortcode attributes ($atts)
        * for the output.
        *
        */
        public static function map() {
            return array(
                'name'        => esc_html__( 'Home2 hero Section', 'solion' ),
                'description' => esc_html__( 'Home2 - hero Section', 'solion' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-2', 'solion'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    // home3hero Attributes
                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Bg Image', 'solion' ),
                        'param_name' => 'heroimg',
                        // 'value' => __( 'Default value', 'solion' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Title', 'solion' ),
                        'param_name' => 'title',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Heading Bold Text', 'solion' ),
                        'param_name' => 'bold',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textarea',
                        'holder' => 'p',
                        'heading' => esc_html__( 'Description', 'solion' ),
                        'param_name' => 'des',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Icon Class', 'solion' ),
                        'description' => sprintf( esc_html__( 'To Choose Icons Class Visit %sFont Awesome Icons%s', 'solion' ), '<a href="https://fontawesome.com/icons?d=gallery" target="_blank">', '</a>' ),
                        'param_name' => 'bticon',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Button',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Link', 'solion' ),
                        'param_name' => 'btlink',
                        'value' => esc_html__( '#', 'solion' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Button',
                    ),

                   
                ),
            );
        }


        /**
        * Shortcode output
        *
        */
        public static function output( $atts = null ) {

            extract(
                shortcode_atts(
                    array(
                        'heroimg' => 'heroimg',
                        'title'   => '',
                        'heading' => '',
                        'bold' => '',
                        'des'   => '',
                        'bticon'   => '',
                        'btlink'   => '',
                    ),
                    $atts
                )
            );

        $img_url = wp_get_attachment_image_src( $heroimg, "full");
        

        // Fill $html var with data
        $html = '<!-- Start Banner 
    ============================================= -->
    <div class="banner-area responsive-top-pad-120 bg-gradient text-light">
        <!-- Shape -->
        <div class="bottom-shape">
            <img src="'. $img_url[0] .'" alt="Shape">
        </div>
        <!-- End Shape -->
        <div class="item-box">
            <div class="item">
                <div class="container">
                    <div class="row align-center">
                                        
                        <div class="col-lg-6">
                            <div class="content">
                                <h2 class="wow fadeInDown">'. $title .' <strong>'. $bold .'</strong></h2>
                                <p class="wow fadeInLeft">
                                    '. $des .' 
                                </p>';
        if (empty($bticon)) {}
            else {
        $html.= '<a class="popup-youtube relative video-play-button" href="'. $btlink .'">
                                    <i class="'. $bticon .'"></i>
                                </a>'; }
        $html.= '</div>
                        </div>';

        return $html;

        }

    }

}
new home2hero_section;