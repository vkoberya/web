<?php

/**
* Adds new shortcode "home1-services-section-grid-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home1_services_section_grid' ) ) {

    class home1_services_section_grid {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home1-services-section-grid-shortcode', array( 'home1_services_section_grid', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home1-services-section-grid-shortcode', array( 'home1_services_section_grid', 'map' ) );
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
                'name'        => esc_html__( 'Services Section Grid', 'solion' ),
                'description' => esc_html__( 'Home1 - services Section', 'solion' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-1', 'solion'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(
                   

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
                       
                        
                    ),
                    $atts
                )
            );

        // Fill $html var with data
        $html = '</div>
                    <div class="item-grid col-lg-6 col-md-6">';

        return $html;

        }

    }

}
new home1_services_section_grid;
