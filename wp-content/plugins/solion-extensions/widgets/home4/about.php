<?php

/**
* Adds new shortcode "home4-about-section-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home4_about_section' ) ) {

    class home4_about_section {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home4-about-section-shortcode', array( 'home4_about_section', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home4-about-section-shortcode', array( 'home4_about_section', 'map' ) );
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
                'name'        => esc_html__( 'About Section', 'solion' ),
                'description' => esc_html__( 'home4 - about Section', 'solion' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-4', 'solion'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    // about Attributes
                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'BG Image', 'solion' ),
                        'param_name' => 'aboutimg',
                        // 'value' => __( 'Default value', 'solion' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'about Image', 'solion' ),
                        'param_name' => 'aboutimg1',
                        // 'value' => __( 'Default value', 'solion' ),
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
                        'param_name' => 'subtitle',
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

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'List Title', 'solion' ),
                        'param_name' => 'list1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'List1',
                    ),

                     array(
                        'type' => 'textarea',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'List Description', 'solion' ),
                        'param_name' => 'des1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'List1',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'List Title', 'solion' ),
                        'param_name' => 'list2',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'List2',
                    ),

                     array(
                        'type' => 'textarea',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'List Description', 'solion' ),
                        'param_name' => 'des2',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'List2',
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
                        'class' => 'about-area overflow-hidden version-three default-padding-top',
                        'aboutimg' => 'aboutimg',
                        'aboutimg1' => 'aboutimg1',
                        'title'   => '',
                        'subtitle'   => '',
                        'des' => '',
                        'list1' => '',
                        'des1' => '',
                        'list2' => '',
                        'des2' => '',
                        
                    ),
                    $atts
                )
            );

        $img_url = wp_get_attachment_image_src( $aboutimg, "full");
        $img_url1 = wp_get_attachment_image_src( $aboutimg1, "full");

        // Fill $html var with data
        $html = '<!-- Star About Area
    ============================================= -->
    <div class="'. $class .'">
        <!-- Fixed Shape -->
        <div class="fixed-shape-bottom">
            <img src="'. $img_url[0] .'" alt="Thumb">
        </div>
        <!-- End Fixed Shape -->
        <div class="container">
            <div class="row align-center">

                <div class="col-lg-6 thumbs wow fadeInRight" data-wow-delay="500ms">
                    <img src="'. $img_url1[0] .'" alt="Thumb">
                </div>
                
                <div class="col-lg-6 info left wow fadeInUp" data-wow-delay="700ms">
                    <h2 class="area-title">'. $title .' <br>'. $subtitle .'</h2>
                    <p>
                        '. $des .'
                    </p>
                    <ul>
                        <li>
                            <h4>'. $list1 .'</h4>
                            <p>
                                '. $des1 .'
                            </p>
                        </li>
                        <li>
                            <h4>'. $list2 .'</h4>
                            <p>
                                '. $des2 .'
                            </p>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <!-- End About Area -->';

        return $html;

        }

    }

}
new home4_about_section;