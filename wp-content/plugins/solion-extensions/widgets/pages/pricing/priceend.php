<?php

/**
* Adds new shortcode "pages-priceend-section-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'priceend1_section' ) ) {

    class priceend1_section {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'pages-priceend-section-shortcode', array( 'priceend1_section', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'pages-priceend-section-shortcode', array( 'priceend1_section', 'map' ) );
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
                'name'        => esc_html__( 'Price Table End Section', 'solion' ),
                'description' => esc_html__( 'pages - priceend Section', 'solion' ),
                'base'        => 'vc_infobox',
                'category' => __('Pages', 'solion'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Button Class', 'solion' ),
                        'value' => esc_html__( 'btn circle btn-theme border btn-sm', 'solion' ),
                        'param_name' => 'class',
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
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Button Link', 'solion' ),
                        'param_name' => 'btlink',
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
                        'btlink' => '',
                        'bttext'   => '',
                        'class' => 'btn circle btn-theme border btn-sm',

                    ),
                    $atts
                )
            );
        

        // Fill $html var with data
        $html = ' <li class="footer">
                                    <a class="'. $class .'" href="'. $btlink .'">'. $bttext .'</a>
                                </li>
                            </ul>
                        </div>
                    </div>';

        return $html;

        }

    }

}
new priceend1_section;