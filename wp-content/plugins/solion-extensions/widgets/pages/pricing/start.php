<?php

/**
* Adds new shortcode "pages-price-section-start-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'price_section_start' ) ) {

    class price_section_start {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'pages-price-section-start-shortcode', array( 'price_section_start', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'pages-price-section-start-shortcode', array( 'price_section_start', 'map' ) );
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
                'name'        => esc_html__( 'Pricing Section Start', 'solion' ),
                'description' => esc_html__( 'Price Section', 'solion' ),
                'base'        => 'vc_infobox',
                'category' => __('Pages', 'solion'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Class', 'solion' ),
                        'param_name' => 'class',
                        'value' => esc_html__( 'pricing-area half-bg default-padding', 'solion' ),
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
                        'class' => 'pricing-area half-bg default-padding',
                        'title'   => '',
                        'des' => '',
                    ),
                    $atts
                )
            );
        

        // Fill $html var with data
        $html = ' <!-- Start Pricing Area
    ============================================= -->
    <div id="pricing" class="'. $class .'">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-light light text-center">
                        <h2 class="area-title">'. $title .'</h2>
                        <div class="devider"></div>
                        <p>
                            '. $des .'
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="pricing text-center">
                <div class="row">';

        return $html;

        }

    }

}
new price_section_start;