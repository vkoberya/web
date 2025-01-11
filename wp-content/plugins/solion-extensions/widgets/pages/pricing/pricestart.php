<?php

/**
* Adds new shortcode "pages-pricestart-section-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'pricestart_section' ) ) {

    class pricestart_section {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'pages-pricestart-section-shortcode', array( 'pricestart_section', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'pages-pricestart-section-shortcode', array( 'pricestart_section', 'map' ) );
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
                'name'        => esc_html__( 'Price Table Start Section', 'solion' ),
                'description' => esc_html__( 'Pages - pricestart Section', 'solion' ),
                'base'        => 'vc_infobox',
                'category' => __('Pages', 'solion'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

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
                        'heading' => esc_html__( 'Currency', 'solion' ),
                        'value' => esc_html__( '$', 'solion' ),
                        'param_name' => 'currency',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Price', 'solion' ),
                        'param_name' => 'price',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textarea',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Time', 'solion' ),
                        'param_name' => 'time',
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
                        'title' => '',
                        'currency' => '$',
                        'price'   => '',
                        'time' => '',
                    ),
                    $atts
                )
            );
        

        // Fill $html var with data
        $html = ' <div class="col-lg-4 col-md-6 single-item">
                        <div class="pricing-item">
                            <ul>
                                <li class="pricing-header">
                                    <h5>'. $title .'</h5>
                                    <h2><sup>'. $currency.'</sup>'. $price .' <sub>/ '. $time .'</sub></h2>
                                </li>';

        return $html;

        }

    }

}
new pricestart_section;