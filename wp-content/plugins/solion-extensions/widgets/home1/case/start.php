<?php

/**
* Adds new shortcode "home1-case-section-start-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'case_section_start' ) ) {

    class case_section_start {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home1-case-section-start-shortcode', array( 'case_section_start', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home1-case-section-start-shortcode', array( 'case_section_start', 'map' ) );
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
                'name'        => esc_html__( 'Case Studies Section Start', 'solion' ),
                'description' => esc_html__( 'Home1 - Work Section Start', 'solion' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-1', 'solion'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(


                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Class', 'solion' ),
                        'param_name' => 'class',
                        'value' => esc_html__( 'case-studies-area bg-gray default-padding-bottom', 'solion' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                     array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Image', 'solion' ),
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
                        'heading' => esc_html__( 'Sub Title', 'solion' ),
                        'param_name' => 'sub',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textarea',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Description', 'solion' ),
                        'param_name' => 'des',
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
                        'class' => 'case-studies-area bg-gray default-padding-bottom',
                        'heroimg' => '',
                        'title'   => '',
                        'sub' => '',
                        'des' => '',
                    ),
                    $atts
                )
            );
        
        $img_url = wp_get_attachment_image_src( $heroimg, "full");


        // Fill $html var with data
        $html = '<!-- Start Case Studies Area
    ============================================= -->
    <div class="'. $class .'">
        <!-- Fixed BG -->
        <div class="fixed-shape-top">
            <img src="'. $img_url[0] .'" alt="Shape">
        </div>
        <!-- End Fixed BG -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h5>'. $title .'</h5>
                        <h2 class="area-title">'. $sub .'</h2>
                        <div class="devider"></div>
                        <p>
                            '. $des .'
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fill">
            <div class="case-carousel text-center text-light owl-carousel owl-theme">';

        return $html;

        }

    }

}
new case_section_start;