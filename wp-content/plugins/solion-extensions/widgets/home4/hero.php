<?php

/**
* Adds new shortcode "home4-hero-section-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home4_hero_section' ) ) {

    class home4_hero_section {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home4-hero-section-shortcode', array( 'home4_hero_section', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home4-hero-section-shortcode', array( 'home4_hero_section', 'map' ) );
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
                'description' => esc_html__( 'home4 - Hero Section', 'solion' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-4', 'solion'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    // Hero Attributes
                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'BG Image', 'solion' ),
                        'param_name' => 'heroimg',
                        // 'value' => __( 'Default value', 'solion' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Hero Image', 'solion' ),
                        'param_name' => 'heroimg1',
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
                        'param_name' => 'bttext1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Button',
                    ),

                     array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Button Link', 'solion' ),
                        'param_name' => 'btlink1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Button',
                    ),

                     array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Icon Class', 'solion' ),
                        'description' => sprintf( esc_html__( 'To Choose Icons Class Visit %sFont Awesome Icons%s', 'solion' ), '<a href="https://fontawesome.com/icons?d=gallery" target="_blank">', '</a>' ),
                        'param_name' => 'bticon2',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Button2',
                    ),

                     array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Button Link', 'solion' ),
                        'param_name' => 'btlink2',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Button2',
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
                        'heroimg' => 'heroimg',
                        'heroimg1' => 'heroimg1',
                        'title'   => '',
                        'subtitle'   => '',
                        'des' => '',
                        'bttext1' => '',
                        'btlink1' => '',
                        'bticon2' => '',
                        'btlink2' => '',
                        
                    ),
                    $atts
                )
            );

        $img_url = wp_get_attachment_image_src( $heroimg, "full");
        $img_url1 = wp_get_attachment_image_src( $heroimg1, "full");

        // Fill $html var with data
        $html = '<!-- Start Banner 
============================================= -->
<div class="banner-area responsive-top-pad-120 bg-gradient shadow dark-small text-light background-move bg-gray" style="background-image: url('. $img_url[0] .');">
    <div class="item-box">
        <div class="item">
            <div class="container">
                <div class="row align-center">
                                    
                    <div class="col-lg-6">
                        <div class="content">
                            <h2 class="wow fadeInLeft" data-wow-delay="500ms">'. $title .' <strong>'. $subtitle .'</strong></h2>
                            <p class="wow fadeInRight" data-wow-delay="600ms">
                                '. $des .' 
                            </p>
                            <div class="button wow fadeInUp" data-wow-delay="700ms">';
                             if(empty($bttext1)) {}
                                else {
                                $html.='<a class="btn btn-light effect btn-md" href="'. $btlink1 .'">'. $bttext1 .'</a>'; }
                                 if(empty($bticon2)) {}
                                else {
                                $html.='<a class="popup-youtube relative video-play-button" href="'. $btlink2 .'">
                                    <i class="'. $bticon2 .'"></i>'; }
                                $html.='</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 thumb wow fadeInUp" data-wow-delay="900ms">
                        <img src="'. $img_url1[0] .'" alt="Thumb">
                    </div>

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
new home4_hero_section;