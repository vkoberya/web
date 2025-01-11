<?php

/**
* Adds new shortcode "pages-team2-section-start-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'team2_section_title' ) ) {

    class team2_section_title {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'pages-team2-section-start-shortcode', array( 'team2_section_title', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'pages-team2-section-start-shortcode', array( 'team2_section_title', 'map' ) );
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
                'name'        => esc_html__( 'Team2 Section Title', 'solion' ),
                'description' => esc_html__( 'Home2 - Team2 Section Start', 'solion' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-1', 'solion'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(


                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Class', 'solion' ),
                        'param_name' => 'class',
                        'value' => esc_html__( 'team-area carousel-shadow relative', 'solion' ),
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
                        'class' => 'team-area carousel-shadow relative',
                        'title'   => '',
                        'sub' => '',
                        'des' => '',
                    ),
                    $atts
                )
            );

        // Fill $html var with data
        $html = '<!-- Start Team Us 
    ============================================= -->
    <div class="'. $class .'">
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
        <div class="container-full">
            <div class="team-items text-center">
                <div class="team-carousel owl-carousel owl-theme">';

        return $html;

        }

    }

}
new team2_section_title;