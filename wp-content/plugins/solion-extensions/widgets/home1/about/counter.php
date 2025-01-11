<?php

/**
* Adds new shortcode "home1-aboutcounter-section-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home1_aboutcounter_section' ) ) {

    class home1_aboutcounter_section {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home1-aboutcounter-section-shortcode', array( 'home1_aboutcounter_section', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home1-aboutcounter-section-shortcode', array( 'home1_aboutcounter_section', 'map' ) );
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
                'name'        => esc_html__( 'About Counter Section', 'solion' ),
                'description' => esc_html__( 'Home1 - aboutcounter Section', 'solion' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-1', 'solion'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    // Hero Attributes

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
                        'heading' => esc_html__( 'Number', 'solion' ),
                        'param_name' => 'number',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Operator', 'solion' ),
                        'param_name' => 'op',
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
                        'title'   => '',
                        'number' => '',
                        'op' => '',
                       
                    ),
                    $atts
                )
            );

        // Fill $html var with data
        $html = '<li>
                            <div class="fun-fact">
                                <div class="counter">
                                    <div class="timer" data-to="'. $number .'" data-speed="5000">'. $number .'</div>
                                    <div class="operator">'. $op .'</div>
                                </div>
                                <span class="medium">'. $title .'</span>
                            </div>
                        </li>';

        return $html;

        }

    }

}
new home1_aboutcounter_section;
