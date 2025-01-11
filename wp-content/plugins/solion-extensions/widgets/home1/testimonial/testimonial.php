<?php

/**
* Adds new shortcode "home1-testimonial-section-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'testimonial_section' ) ) {

    class testimonial_section {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home1-testimonial-section-shortcode', array( 'testimonial_section', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home1-testimonial-section-shortcode', array( 'testimonial_section', 'map' ) );
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
                'name'        => esc_html__( 'Testimonial Section', 'solion' ),
                'description' => esc_html__( 'home1 - Testimonial Section', 'solion' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-1', 'solion'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

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
                        'heading' => esc_html__( 'Job', 'solion' ),
                        'param_name' => 'job',
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
                        'heading' => esc_html__( 'Star Icon Class One', 'solion' ),
                        'param_name' => 'rating1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Rating Stars',
                    ),  

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Star Icon Class Two', 'solion' ),
                        'param_name' => 'rating2',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Rating Stars',
                    ),  

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Star Icon Class Three', 'solion' ),
                        'param_name' => 'rating3',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Rating Stars',
                    ),  

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Star Icon Class Four', 'solion' ),
                        'param_name' => 'rating4',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Rating Stars',
                    ),  

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Star Icon Class Five', 'solion' ),
                        'param_name' => 'rating5',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Rating Stars',
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
                        'title'   => '',
                        'job' => '',
                        'des' => '',
                        'rating1' => '',
                        'rating2' => '',
                        'rating3' => '',
                        'rating4' => '',
                        'rating5' => '',
                    ),
                    $atts
                )
            );

        $img_url = wp_get_attachment_image_src( $heroimg, "full");

        // Fill $html var with data
        $html = '<!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="'. $img_url[0] .'" alt="Thumb">
                                <i class="fas fa-quote-right"></i>
                            </div>
                            <div class="info">
                                <p>
                                    '. $des .'
                                </p>
                                <div class="bottom">
                                    <div class="provider">
                                        <h5>'. $title .'</h5>
                                        <span>'. $job .'</span>
                                    </div>
                                    <div class="raging">
                                <i class="'. $rating1 .'"></i>
                                <i class="'. $rating2 .'"></i>
                                <i class="'. $rating3 .'"></i>
                                <i class="'. $rating4 .'"></i>
                                <i class="'. $rating5 .'"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->';

        return $html;

        }

    }

}
new testimonial_section;