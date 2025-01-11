<?php

/**
* Adds new shortcode "pages-choose1-section-start-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'pages_choose1_section_start' ) ) {

    class pages_choose1_section_start {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'pages-choose1-section-start-shortcode', array( 'pages_choose1_section_start', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'pages-choose1-section-start-shortcode', array( 'pages_choose1_section_start', 'map' ) );
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
                'name'        => esc_html__( 'Choose1 Section Start', 'solion' ),
                'description' => esc_html__( 'pages - Choose1 Section', 'solion' ),
                'base'        => 'vc_infobox',
                'category' => __('Pages', 'solion'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Class', 'solion' ),
                        'param_name' => 'class',
                        'value' => esc_html__( 'choose-us-area inc-skill default-padding' , 'solion' ),
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
                        'heading' => esc_html__( 'Number', 'solion' ),
                        'param_name' => 'number',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Experience',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Title', 'solion' ),
                        'param_name' => 'notitle',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Experience',
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
                        'class' => '',
                        'number' => '',
                        'notitle' => '',
                        'title' => '',
                        'des' => '',
                        'class' => 'choose-us-area inc-skill default-padding',
                        'bgimg' => 'bgimg',
                        
                        
                    ),
                    $atts
                )
            );

            $img_url = wp_get_attachment_image_src( $bgimg, "full");


        // Fill $html var with data
        $html = '<!-- Start Why Choose Us 
    ============================================= -->
    <div class="choose-us-area inc-skill default-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-5">
                    <div class="thumb wow fadeInRight" data-wow-delay="0.6s">
                        <img src="'. $img_url[0] .'" alt="Thumb">
                        <div class="content wow fadeInLeft" data-wow-delay="0.8s">
                            <h2>'. $number.'<span>+</span></h2>
                            <h5>'. $notitle .'</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 info wow fadeInUp">
                    <h2 class="area-title">'. $title.'</h2>
                    <p>
                        '. $des .'
                    </p>
                    <div class="skill-items">';

        return $html;

        }

    }

}
new pages_choose1_section_start;
