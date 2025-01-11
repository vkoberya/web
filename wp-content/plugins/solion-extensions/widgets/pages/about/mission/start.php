<?php

/**
* Adds new shortcode "pages-mission-section-start-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'pages_mission_section_start' ) ) {

    class pages_mission_section_start {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'pages-mission-section-start-shortcode', array( 'pages_mission_section_start', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'pages-mission-section-start-shortcode', array( 'pages_mission_section_start', 'map' ) );
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
                'name'        => esc_html__( 'Mission Section Start', 'solion' ),
                'description' => esc_html__( 'pages - Mission Section', 'solion' ),
                'base'        => 'vc_infobox',
                'category' => __('Pages', 'solion'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Class', 'solion' ),
                        'value' => esc_html__( 'about-area half-bg bg-gray default-padding overflow-hidden', 'solion' ),
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
                        'heading' => esc_html__( 'Icon Class', 'solion' ),
                        'description' => sprintf( esc_html__( 'To Choose Icons Class Visit %sFont Awesome Icons%s', 'solion' ), '<a href="https://fontawesome.com/icons?d=gallery" target="_blank">', '</a>' ),
                        'param_name' => 'icon1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Box1',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Client Section Title', 'solion' ),
                        'param_name' => 'title1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Box1',
                    ),

                    array(
                        'type' => 'textarea',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Description', 'solion' ),
                        'param_name' => 'des1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Box1',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Icon Class', 'solion' ),
                        'description' => sprintf( esc_html__( 'To Choose Icons Class Visit %sFont Awesome Icons%s', 'solion' ), '<a href="https://fontawesome.com/icons?d=gallery" target="_blank">', '</a>' ),
                        'param_name' => 'icon2',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Box2',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Title', 'solion' ),
                        'param_name' => 'title2',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Box2',
                    ),

                    array(
                        'type' => 'textarea',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Description', 'solion' ),
                        'param_name' => 'des2',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Box2',
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
                        'class' => 'about-area half-bg bg-gray default-padding overflow-hidden',
                        'title' => '',
                        'icon1' => '',
                        'title1' => '',
                        'des1' => '',
                        'icon2' => '',
                        'title2' => '',
                        'des2' => '',
                        
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
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="item">
                                        <div class="title">
                                            <i class="'. $icon1 .'"></i>
                                            <h4>'. $title1 .'</h4>
                                        </div>
                                        <p>
                                            '. $des1 .'
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="item">
                                        <div class="title">
                                            <i class="'. $icon2 .'"></i>
                                            <h4>'. $title2 .'</h4>
                                        </div>
                                        <p>
                                            '. $des2 .'
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bottom-info">
                            <h2>'. $title .'</h2>
                             <div class="clients-carousel-3-col owl-carousel owl-theme">';

        return $html;

        }

    }

}
new pages_mission_section_start;