<?php

/**
* Adds new shortcode "home2-about-section-start-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home2_about_section_start' ) ) {

    class home2_about_section_start {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home2-about-section-start-shortcode', array( 'home2_about_section_start', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home2-about-section-start-shortcode', array( 'home2_about_section_start', 'map' ) );
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
                'name'        => esc_html__( 'Home2 About Section Start', 'solion' ),
                'description' => esc_html__( 'home2 - about Section', 'solion' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-2', 'solion'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Class', 'solion' ),
                        'param_name' => 'class',
                        'value' => esc_html__( 'about-area default-padding-top', 'solion' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Image', 'solion' ),
                        'param_name' => 'bgimg',
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
                        'class' => 'about-area default-padding-top',
                        'bgimg' => 'bgimg',
                        
                    ),
                    $atts
                )
            );

            $img_url = wp_get_attachment_image_src( $bgimg, "full");


        // Fill $html var with data
        $html = '<!-- Star About Area
    ============================================= -->
    <div class="'. $class .'">
        <!-- Fixed Shape -->
        <div class="fixed-shape">
            <img src="'. $img_url[0] .'" alt="Thumb">
        </div>
        <!-- End Fixed Shape -->
        <div class="container">
            <div class="row">
                
                <div class="col-lg-7 info left">
                    <ul class="achivement">';

        return $html;

        }

    }

}
new home2_about_section_start;
