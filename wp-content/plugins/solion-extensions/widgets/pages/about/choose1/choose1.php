<?php

/**
* Adds new shortcode "pages-choose1-section-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'pages_choose1_section' ) ) {

    class pages_choose1_section {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'pages-choose1-section-shortcode', array( 'pages_choose1_section', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'pages-choose1-section-shortcode', array( 'pages_choose1_section', 'map' ) );
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
                'name'        => esc_html__( 'Choose1 Section', 'solion' ),
                'description' => esc_html__( 'pages - Choose1 Section', 'solion' ),
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
                        'param_name' => 'operator',
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
                        'number' => '',
                        'operator' => '',
                        
                    ),
                    $atts
                )
            );

        // Fill $html var with data
        $html = ' <!-- Progress Bar Start -->
                        <div class="progress-box">
                            <h5>'. $title .'</h5>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-width="'. $number.'">
                                     <span>'. $number.''. $operator.'</span>
                                </div>
                            </div>
                        </div>';

        return $html;

        }

    }

}
new pages_choose1_section;
