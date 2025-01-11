<?php

/**
* Adds new shortcode "home1-faq-section-start-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'faq_section_start' ) ) {

    class faq_section_start {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home1-faq-section-start-shortcode', array( 'faq_section_start', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home1-faq-section-start-shortcode', array( 'faq_section_start', 'map' ) );
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
                'name'        => esc_html__( 'Faq Section Start', 'solion' ),
                'description' => esc_html__( 'Pages Faq Section Start', 'solion' ),
                'base'        => 'vc_infobox',
                'category' => __('Pages', 'solion'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(


                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Class', 'solion' ),
                        'param_name' => 'class',
                        'value' => esc_html__( 'faq-area overflow-hidden rectangular-shape default-padding', 'solion' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                     array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Image', 'solion' ),
                        'param_name' => 'heroimg',
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
                        'param_name' => 'sub',
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
                        'class' => 'faq-area overflow-hidden rectangular-shape default-padding',
                        'heroimg' => '',
                        'title'   => '',
                        'sub' => '',
                        
                    ),
                    $atts
                )
            );
        
        $img_url = wp_get_attachment_image_src( $heroimg, "full");


        // Fill $html var with data
        $html = '<!-- Star Faq
    ============================================= -->
    <div class="'. $class .'">
        <div class="container">
            <div class="faq-items">
                <div class="row align-center">

                    <div class="col-lg-6">
                        <div class="thumb wow fadeInLeft" data-wow-delay="0.5s">
                            <img src="'. $img_url[0] .'" alt="Thumb">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="faq-content">
                            <h5>'. $title .'</h5>
                            <h2 class="area-title">'. $sub .'</h2>
                            <div class="accordion" id="accordionExample">';

        return $html;

        }

    }

}
new faq_section_start;