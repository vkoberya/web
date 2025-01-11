<?php

/**
* Adds new shortcode "pages-mission-section-end-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'pages_mission_section_end' ) ) {

    class pages_mission_section_end {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'pages-mission-section-end-shortcode', array( 'pages_mission_section_end', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'pages-mission-section-end-shortcode', array( 'pages_mission_section_end', 'map' ) );
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
                'name'        => esc_html__( 'Mission Section End', 'solion' ),
                'description' => esc_html__( 'pages - Mission Section', 'solion' ),
                'base'        => 'vc_infobox',
                'category' => __('Pages', 'solion'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

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
                        'heading' => esc_html__( 'Link', 'solion' ),
                        'param_name' => 'link',
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
                        'heroimg' => 'heroimg',
                        'title' => '',
                        'link' => '',
                        
                    ),
                    $atts
                )
            );

            $img_url = wp_get_attachment_image_src( $heroimg, "full");

        // Fill $html var with data
        $html = '</div>
                        </div>
                    </div>
                    <div class="col-lg-5 thumbs">
                        <div class="thumb-items">
                            <img src="'. $img_url[0] .'" alt="Thumb">
                            <div class="video">
                                <a href="'. $link .'" class="popup-youtube">
                                    <div class="relative theme video-play-button item-center">
                                        <i class="fa fa-play"></i>
                                    </div>
                                     <span>'. $title .'</span>
                                </a>
                            </div>
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
new pages_mission_section_end;
