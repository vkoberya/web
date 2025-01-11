<?php

/**
* Adds new shortcode "pages-mission-section-start1-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'pages_mission_section_start1' ) ) {

    class pages_mission_section_start1 {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'pages-mission-section-start1-shortcode', array( 'pages_mission_section_start1', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'pages-mission-section-start1-shortcode', array( 'pages_mission_section_start1', 'map' ) );
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
                'name'        => esc_html__( 'Mission Section Start1', 'solion' ),
                'description' => esc_html__( 'pages - Mission Section', 'solion' ),
                'base'        => 'vc_infobox',
                'category' => __('Pages', 'solion'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Class', 'solion' ),
                        'value' => esc_html__( 'about-area half-bg default-padding-top overflow-hidden', 'solion' ),
                        'param_name' => 'class',
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
                        'heading' => esc_html__( 'Client Section Title', 'solion' ),
                        'param_name' => 'title1',
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
                        'group' => 'Button',
                    ),
                    
                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Button Link', 'solion' ),
                        'param_name' => 'btlink',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Button',
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
                        'class' => 'about-area half-bg default-padding-top overflow-hidden',
                        'title' => '',
                        'sub' => '',
                        'des' => '',
                        'btlink' => '',
                        'bttext' => '',
                        'title1' => '',
                        
                    ),
                    $atts
                )
            );

        // Fill $html var with data
        $html = '<!-- Start About Area
    ============================================= -->
    <div class="'. $class .'">
        <div class="container">
            <div class="about-content">
                <div class="row">
                    <div class="col-lg-7 info">
                        <div class="top-info">
                            <h5>'. $title .'</h5>
                            <h2 class="area-title">'. $sub .'</h2>
                            <p>
                                '. $des .'
                            </p>
                            <a class="btn circle btn-gradient effect btn-md" href="'. $btlink .'">'. $bttext .'</a>
                        </div>
                        <div class="bottom-info inc-bg">
                            <h2>'. $title1 .'</h2>
                            <div class="clients-carousel-3-col owl-carousel owl-theme">';

        return $html;

        }

    }

}
new pages_mission_section_start1;