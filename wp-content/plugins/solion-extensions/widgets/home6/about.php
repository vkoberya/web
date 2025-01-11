<?php

/**
* Adds new shortcode "home6-about-section-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home6_about_section' ) ) {

    class home6_about_section {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home6-about-section-shortcode', array( 'home6_about_section', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home6-about-section-shortcode', array( 'home6_about_section', 'map' ) );
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
                'name'        => esc_html__( 'Home6 About Section', 'tanda' ),
                'description' => esc_html__( 'home6 - about Section', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-6', 'tanda'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    // home4hero Attributes
                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Image', 'tanda' ),
                        'param_name' => 'bgimg',
                        // 'value' => __( 'Default value', 'tanda' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Image',
                    ),

                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Image', 'tanda' ),
                        'param_name' => 'bgimg1',
                        // 'value' => __( 'Default value', 'tanda' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Image',
                    ),

                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Image', 'tanda' ),
                        'param_name' => 'bgimg2',
                        // 'value' => __( 'Default value', 'tanda' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Image',
                    ),
                    
                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Class', 'tanda' ),
                        'value' => esc_html__('about-us-area default-padding bg-gray' , 'solion'),
                        'param_name' => 'class',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Title', 'tanda' ),
                        'param_name' => 'title',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Sub Title', 'tanda' ),
                        'param_name' => 'subtitle',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textarea',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Description', 'tanda' ),
                        'param_name' => 'des',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textarea',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Description 2', 'tanda' ),
                        'param_name' => 'des1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Button Text', 'tanda' ),
                        'param_name' => 'bttext1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Button',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Button Link', 'tanda' ),
                        'param_name' => 'btlink1',
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
                        'class' => 'about-us-area default-padding bg-gray',
                        'bgimg' => 'bgimg',
                        'bgimg1' => 'bgimg1',
                        'bgimg2' => 'bgimg2',
                        'title'   => '',
                        'subtitle' => '',
                        'des' => '',
                        'des1' => '',
                        'btlink1'   => '',
                        'bttext1'   => '',
                    ),
                    $atts
                )
            );

        $img_url = wp_get_attachment_image_src( $bgimg, "full");
        $img_url1 = wp_get_attachment_image_src( $bgimg1, "full");
        $img_url2 = wp_get_attachment_image_src( $bgimg2, "full");
        

        // Fill $html var with data
        $html = '<!-- Start About Area
============================================= -->
<div class="'. $class .'">
    <div class="container">
        <div class="about-content">
            <div class="row">
                <div class="col-lg-6">
                    <div class="thumb">
                        <img src="'. $img_url[0] .'" alt="Thumb">
                        <img src="'. $img_url1[0] .'" alt="Thumb">
                        <img src="'. $img_url2[0] .'" alt="Thumb">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="info">
                        <h5>'. $title .'</h5>
                        <h2 class="area-title">'. $subtitle .'y</h2>
                        <p>
                            <strong>'. $des .'</strong>
                        </p>
                        <p>
                            '. $des1 .'
                        </p>
                        <a class="btn btn-theme effect btn-md" href="'. $btlink1 .'">'. $bttext1 .'</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End About Area -->';

        return $html;

        }

    }

}
new home6_about_section;