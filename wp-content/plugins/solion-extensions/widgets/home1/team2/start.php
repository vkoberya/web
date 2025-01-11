<?php

/**
* Adds new shortcode "home1-team2-section-start-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'team2_section_start' ) ) {

    class team2_section_start {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home1-team2-section-start-shortcode', array( 'team2_section_start', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home1-team2-section-start-shortcode', array( 'team2_section_start', 'map' ) );
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
                'name'        => esc_html__( 'Team2 Section start', 'solion' ),
                'description' => esc_html__( 'Home1 - Team Section start', 'solion' ),
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
        $html = '<!-- Start Team Us 
    ============================================= -->
    <div class="team-area carousel-shadow default-padding relative">
        <div class="container-full">
            <div class="team-items text-center">
                <div class="team-carousel owl-carousel owl-theme">';

        return $html;

        }

    }

}
new team2_section_start;