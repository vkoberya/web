<?php

/**
* Adds new shortcode "home1-services-section-title-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home1_services_section_title' ) ) {

    class home1_services_section_title {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home1-services-section-title-shortcode', array( 'home1_services_section_title', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home1-services-section-title-shortcode', array( 'home1_services_section_title', 'map' ) );
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
                'name'        => esc_html__( 'Services Section No Title', 'solion' ),
                'description' => esc_html__( 'Home1 - services Section', 'solion' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-1', 'solion'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Class', 'solion' ),
                        'param_name' => 'class',
                        'value' => esc_html__( 'services-area bg-gray default-padding' , 'solion' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Background Image', 'solion' ),
                        'param_name' => 'bgimg',
                        // 'value' => __( 'Default value', 'solion' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
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
                       
                        'class' => 'services-area bg-gray default-padding',
                        'bgimg' => 'bgimg',
                        
                    ),
                    $atts
                )
            );

            $img_url = wp_get_attachment_image_src( $bgimg, "full");


        // Fill $html var with data
        $html = '<!-- Star Services Area
    ============================================= -->
    <div class="'. $class .'">
        <!-- Fixed BG -->
        <div class="fixed-shape-bottom">
            <img src="'. $img_url[0] .'" alt="Shape">
        </div>
        <!-- End Fixed BG -->
        <div class="container">
            <div class="services-items">
                <div class="row">
                    <div class="item-grid col-lg-6 col-md-6">';

        return $html;

        }

    }

}
new home1_services_section_title;
