<?php

/**
* Adds new shortcode "home7-services-section-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home7_services_section' ) ) {

    class home7_services_section {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home7-services-section-shortcode', array( 'home7_services_section', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home7-services-section-shortcode', array( 'home7_services_section', 'map' ) );
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
                'name'        => esc_html__( 'services Section', 'solion' ),
                'description' => esc_html__( 'home7 - services Section', 'solion' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-7', 'solion'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    // Hero Attributes

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Icon Class', 'solion' ),
                        'description' => sprintf( esc_html__( 'To Choose Icons Class Visit %sFont Awesome Icons%s', 'solion' ), '<a href="https://fontawesome.com/icons?d=gallery" target="_blank">', '</a>' ),
                        'param_name' => 'icon',
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
                        'heading' => esc_html__( 'Link', 'solion' ),
                        'param_name' => 'link',
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
                        'icon' => '',
                        'title'   => '',
                        'link' => '',
                        'des' => '',
                    ),
                    $atts
                )
            );

        // Fill $html var with data
        $html = '<!-- Single Item -->
                <div class="single-item col-lg-4 col-md-6">
                    <div class="item">
                        <i class="'. $icon .'"></i>
                        <h4><a href="'. $link .'">'. $title .'</a></h4>
                        <p>
                            '. $des .'
                        </p>
                    </div>
                </div>
                <!-- End Single Item -->';

        return $html;

        }

    }

}
new home7_services_section;