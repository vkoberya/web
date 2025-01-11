<?php

/**
* Adds new shortcode "pagesabout-choose-section-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'pagesabout_choose_section' ) ) {

    class pagesabout_choose_section {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'pagesabout-choose-section-shortcode', array( 'pagesabout_choose_section', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'pagesabout-choose-section-shortcode', array( 'pagesabout_choose_section', 'map' ) );
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
                'name'        => esc_html__( 'About Choose Section', 'solion' ),
                'description' => esc_html__( 'pagesabout - choose Section', 'solion' ),
                'base'        => 'vc_infobox',
                'category' => __('Pages', 'solion'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Class', 'solion' ),
                        'param_name' => 'class',
                        'value' => esc_html__( 'choose-us-area overflow-hidden reverse default-padding bg-gray' , 'solion' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Background Image', 'solion' ),
                        'param_name' => 'bgimg',
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
                        'type' => 'textarea',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'List One', 'solion' ),
                        'value' => esc_html__( 'Experts around the world', 'solion' ),
                        'param_name' => 'list1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),
                    
                    array(
                        'type' => 'textarea',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'List Two', 'solion' ),
                        'value' => esc_html__( 'Best Practice for industry', 'solion' ),
                        'param_name' => 'list2',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Title', 'solion' ),
                        'param_name' => 'des1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'End',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Icon Class', 'solion' ),
                        'description' => sprintf( esc_html__( 'To Choose Icons Class Visit %sFont Awesome Icons%s', 'solion' ), '<a href="https://fontawesome.com/icons?d=gallery" target="_blank">', '</a>' ),
                        'param_name' => 'icon',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'End',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Text', 'solion' ),
                        'param_name' => 'text',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'End',
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
                        'class' => '',
                        'subtitle' => '',
                        'title' => '',
                        'des' => '',
                        'des1' => '',
                        'class' => 'choose-us-area overflow-hidden reverse default-padding bg-gray',
                        'bgimg' => 'bgimg',
                        'list1' => 'Experts around the world',
                        'list2' => 'Best Practice for industry',
                        'icon' => '',
                        'text' => '',
                        
                    ),
                    $atts
                )
            );

            $img_url = wp_get_attachment_image_src( $bgimg, "full");


        // Fill $html var with data
        $html = '<!-- Start Why Choose Us 
    ============================================= -->
    <div class="'. $class .'">
        <div class="container">
            <div class="row align-center">
                
                <div class="col-lg-6 info wow fadeInUp">
                    <h5>'. $subtitle .'</h5>
                    <h2 class="area-title">'. $title.'</h2>
                    <p>
                        '. $des .'
                    </p>
                    <ul>
                        <li>'. $list1 .'</li>
                        <li>'. $list2 .'</li>
                    </ul>
                    <div class="contact">
                        <p>
                             '. $des1 .'
                        </p>
                        <h4><i class="'. $icon .'"></i> '. $text .'</h4>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="thumb wow fadeInRight" data-wow-delay="0.6s">
                        <img src="'. $img_url[0] .'" alt="Thumb">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Why Choose Us Area -->';

        return $html;

        }

    }

}
new pagesabout_choose_section;
