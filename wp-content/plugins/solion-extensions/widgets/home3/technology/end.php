<?php

/**
* Adds new shortcode "pages-technology-section-end-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'pages_technology_section_end' ) ) {

    class pages_technology_section_end {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'pages-technology-section-end-shortcode', array( 'pages_technology_section_end', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'pages-technology-section-end-shortcode', array( 'pages_technology_section_end', 'map' ) );
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
                'name'        => esc_html__( 'Technology Section End', 'solion' ),
                'description' => esc_html__( 'Pages - Technology Section', 'solion' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-3', 'solion'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    // Hero Attributes

                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'BG Image', 'solion' ),
                        'param_name' => 'heroimg',
                        // 'value' => __( 'Default value', 'solion' ),
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
                        'heroimg'   => 'heroimg',
                    ),
                    $atts
                )
            );

        $img_url = wp_get_attachment_image_src( $heroimg, "full");

        // Fill $html var with data
        $html = '</div>
            </div>
        </div>
        <!-- Bottom Shape -->
        <div class="fixed-shape-bottom">
            <img src="'. $img_url[0] .'" alt="Shape">
        </div>
        <!-- End Bottom Shape -->
    </div>
    <!-- End Technology Area -->';

        return $html;

        }

    }

}
new pages_technology_section_end;