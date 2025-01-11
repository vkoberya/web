<?php

/**
* Adds new shortcode "home1-contact-section-start-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'contact_section_start' ) ) {

    class contact_section_start {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home1-contact-section-start-shortcode', array( 'contact_section_start', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home1-contact-section-start-shortcode', array( 'contact_section_start', 'map' ) );
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
                'name'        => esc_html__( 'Contact Section Start', 'solion' ),
                'description' => esc_html__( 'home1 - Contact Section Start', 'solion' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-1', 'solion'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Class', 'solion' ),
                        'param_name' => 'class',
                        'value' => esc_html__( 'contact-area bg-gray default-padding' , 'solion' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Align', 'solion' ),
                        'param_name' => 'align',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),
                    
                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Heading', 'solion' ),
                        'value' => esc_html__( 'Contact us', 'solion' ),
                        'param_name' => 'heading',
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
                        'class' => 'contact-area bg-gray default-padding',
                        'align' => '',
                        'heading' => 'Contact us',
                        'title' => '',
                        
                    ),
                    $atts
                )
            );


        // Fill $html var with data
        $html = '<!-- Start Contact Area 
============================================= -->
<div class="'. $class .'">
    <div class="container">
        <div class="contact-box">
            <div class="row '. $align .'">
                <div class="col-lg-5 left-info">
                    <div class="content-box">
                        <h5>'. $heading .'</h5>
                        <h2>'. $title .'</h2>';

        return $html;

        }

    }

}
new contact_section_start;