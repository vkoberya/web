<?php

/**
* Adds new shortcode "teamsingle-services-section-end-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'teamsingle_services_section_end' ) ) {

    class teamsingle_services_section_end {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'teamsingle-services-section-end-shortcode', array( 'teamsingle_services_section_end', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'teamsingle-services-section-end-shortcode', array( 'teamsingle_services_section_end', 'map' ) );
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
                'name'        => esc_html__( 'Team Service Section End', 'solion' ),
                'description' => esc_html__( 'Team - services Section', 'solion' ),
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
                        'heading' => esc_html__( 'Button Text', 'solion' ),
                        'param_name' => 'bttext',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Button Link', 'solion' ),
                        'param_name' => 'btlink',
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
                        'btlink' => '',
                        'bttext' => '',
                        
                    ),
                    $atts
                )
            );

        // Fill $html var with data
        $html = '</div>
                <div class="bottom-content text-center">
                    <p>
                        '. $title .' <a href="'. $btlink .'">'. $bttext .'</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services Area -->';

        return $html;

        }

    }

}
new teamsingle_services_section_end;
