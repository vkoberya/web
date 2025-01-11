<?php

/**
* Adds new shortcode "pages-case-section-title-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'pages_case_section_title' ) ) {

    class pages_case_section_title {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'pages-case-section-title-shortcode', array( 'pages_case_section_title', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'pages-case-section-title-shortcode', array( 'pages_case_section_title', 'map' ) );
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
                'name'        => esc_html__( 'Case Studies Section Title', 'solion' ),
                'description' => esc_html__( 'Pages - services Section', 'solion' ),
                'base'        => 'vc_infobox',
                'category' => __('Pages', 'solion'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Class', 'solion' ),
                        'param_name' => 'class',
                        'value' => esc_html__( 'case-studies-area overflow-hidden grid-items default-padding' , 'solion' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'dropdown',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Columns', 'solion' ),
                        'param_name' => 'col',
                        'value'       => array(
                                                'Two Columns'   => 'two',
                                                'Three Columns'   => 'three',
                                                'Four Columns' => 'four',
                                              ),
                        'admin_label' => false,
                        'weight' => 0,
                        'std'         => 'two',
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
                        'heading' => esc_html__( 'Heading', 'solion' ),
                        'param_name' => 'heading',
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
                       
                        'class' => 'case-studies-area overflow-hidden grid-items default-padding',
                        'col' => 'two',
                        'title' => '',
                        'heading' => '',
                        'description' => '',
                       
                        
                    ),
                    $atts
                )
            );

        // Fill $html var with data
        $html = '<!-- title Case Studies Area
    ============================================= -->
    <div class="'. $class .'">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h5>'. $title .'</h5>
                        <h2 class="area-title">'. $heading .'</h2>
                        <div class="devider"></div>
                        <p>
                            '. $des .' 
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="case-items-area">
                <div class="masonary">';
        if ( $col == 'two') {
        $html.= '<div id="portfolio-grid" class="case-items colums-2">'; }
        elseif ( $col == 'three') {
        $html.= '<div id="portfolio-grid" class="case-items colums-3">';
        } elseif ( $col == 'four') {
        $html.= '<div id="portfolio-grid" class="case-items colums-4">'; }

        return $html;

        }

    }

}
new pages_case_section_title;