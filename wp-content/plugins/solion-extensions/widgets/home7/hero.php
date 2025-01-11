<?php

/**
* Adds new shortcode "home7-hero-section-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home7_hero_section' ) ) {

    class home7_hero_section {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home7-hero-section-shortcode', array( 'home7_hero_section', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home7-hero-section-shortcode', array( 'home7_hero_section', 'map' ) );
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
                'name'        => esc_html__( 'Hero Section', 'solion' ),
                'description' => esc_html__( 'home7 - Hero Section', 'solion' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-7', 'solion'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    // Hero Attributes
                   array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'BG Image', 'solion' ),
                        'param_name' => 'bgimg',
                        // 'value' => __( 'Default value', 'solion' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),
                    
                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Hero Image', 'solion' ),
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
                        'bgimg' => 'bgimg',
                        'heroimg' => 'heroimg',
                        'title'   => '',
                        'subtitle'   => '',
                        'des' => '',
                        'bttext' => '',
                        'btlink' => '',
                        
                    ),
                    $atts
                )
            );
            
        $img_url = wp_get_attachment_image_src( $heroimg, "full");
        $img_url1 = wp_get_attachment_image_src( $bgimg, "full");


        // Fill $html var with data
        $html = '<!-- Start Banner 
============================================= -->
<div class="banner-area double-thumb auto-height bg-gradient bg-cover text-light" style="background-image: url('. $img_url1[0] .');">
    <div class="item-box">
        <div class="item">
            <div class="container">
                <div class="row align-center">
                                    
                    <div class="col-lg-6">
                        <div class="content">
                            <h2 class="wow fadeInDown">'. $title .' <strong>'. $subtitle .'</strong></h2>
                            <p class="wow fadeInLeft">
                                '. $des .' 
                            </p>';
                            if(empty($bttext)) {} else {
                            $html.='<a data-animation="animated fadeInUp" class="btn btn-light effect btn-md" href="'. $btlink .'">'. $bttext .'</a>'; }
                        $html.='</div>
                    </div>
                    <!-- Start Appoinment Form -->
                    <div class="col-lg-6">
                        <div class="single-thumb">
                            <img src="'. $img_url[0].'" alt="Thumb">
                        </div>
                    </div>
                    <!-- End Appoinment Form -->

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Banner -->';

        return $html;

        }

    }

}
new home7_hero_section;