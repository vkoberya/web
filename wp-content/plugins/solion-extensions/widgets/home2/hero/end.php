<?php

/**
* Adds new shortcode "home3heroend-section-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home2_heroend_section' ) ) {

    class home2_heroend_section {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home3heroend-section-shortcode', array( 'home2_heroend_section', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home3heroend-section-shortcode', array( 'home2_heroend_section', 'map' ) );
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
                'name'        => esc_html__( 'Home2 hero Section End', 'solion' ),
                'description' => esc_html__( 'Home2 - hero Section end', 'solion' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-2', 'solion'),
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
                        <!-- End Appoinment Form -->

                    </div>
                </div>
            </div>
        </div>
    </div>';

        return $html;

        }

    }

}
new home2_heroend_section;