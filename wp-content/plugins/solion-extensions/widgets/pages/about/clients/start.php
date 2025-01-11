<?php

/**
* Adds new shortcode "pages-clients-section-start-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'clients_section_start' ) ) {

    class clients_section_start {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'pages-clients-section-start-shortcode', array( 'clients_section_start', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'pages-clients-section-start-shortcode', array( 'clients_section_start', 'map' ) );
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
                'name'        => esc_html__( 'Clients Section Start', 'solion' ),
                'description' => esc_html__( 'clients Section', 'solion' ),
                'base'        => 'vc_infobox',
                'category' => __('Pages', 'solion'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Class', 'solion' ),
                        'param_name' => 'class',
                        'value' => esc_html__( 'clients-area default-padding-bottom', 'solion' ),
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
                        'class' => 'clients-area default-padding-bottom',
                       
                    ),
                    $atts
                )
            );
        

        // Fill $html var with data
        $html = ' <!-- Start Clients 
    ============================================= -->
    <div class="'. $class .'">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="clients-carousel owl-carousel owl-theme">';

        return $html;

        }

    }

}
new clients_section_start;