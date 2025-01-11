<?php

/**
* Adds new shortcode "pages-choose1-section-end-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'pages_choose1_section_end' ) ) {

    class pages_choose1_section_end {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'pages-choose1-section-end-shortcode', array( 'pages_choose1_section_end', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'pages-choose1-section-end-shortcode', array( 'pages_choose1_section_end', 'map' ) );
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
                'name'        => esc_html__( 'Choose1 Section End', 'solion' ),
                'description' => esc_html__( 'pages - Choose1 Section', 'solion' ),
                'base'        => 'vc_infobox',
                'category' => __('Pages', 'solion'),
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
                </div>
            </div>
        </div>
    </div>
    <!-- End Why Choose Us Area -->';

        return $html;

        }

    }

}
new pages_choose1_section_end;
