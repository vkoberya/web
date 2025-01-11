<?php

/**
* Adds new shortcode "pages-counter-section-start-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'counter_section_start' ) ) {

    class counter_section_start {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'pages-counter-section-start-shortcode', array( 'counter_section_start', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'pages-counter-section-start-shortcode', array( 'counter_section_start', 'map' ) );
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
                'name'        => esc_html__( 'Counter Section Start', 'solion' ),
                'description' => esc_html__( 'Pages - counter Section Start', 'solion' ),
                'base'        => 'vc_infobox',
                'category' => __('Pages', 'solion'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Class', 'solion' ),
                        'value' => esc_html__( 'fun-fact-area text-light text-center default-padding bg-gradient', 'solion' ),
                        'param_name' => 'class',
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
                        'class' => 'fun-fact-area text-light text-center default-padding bg-gradient',
                    ),
                    $atts
                )
            );


        // Fill $html var with data
        $html = '<!-- Start Fun Factor Area
    ============================================= -->
    <div class="'. $class .'">
        <div class="container">
            <div class="fun-fact-items">
                <div class="row">';

        return $html;

        }

    }

}
new counter_section_start;