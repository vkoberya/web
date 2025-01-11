<?php

/*
 * Plugin Name:       Enquiry For Website
 * Plugin URI:        http://digitalsense.in/plugins/wp-enquiry/
 * Description:        Enquiry For Website & Products with Whatsapp & Facebook Messenger
 * Version:           1.0.3
 * Author:            BEE PIXL
 * Author URI:        https://www.beepixl.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ds-wp-enquiry
 */


if (!function_exists('add_action')) {
    die("Hi there! I'm just a plugin, not much I can do when called directly");
}



// Setup
add_action('admin_menu', 'digital_sense_enquiry_menu');
//Display Button only when all values are setup
$dsposition = get_option('ds_wp_position');
$ds_wp_countrycode = get_option('ds_wp_countrycode');
$ds_wp_number = get_option('ds_wp_number');
$ds_wp_message = get_option('ds_wp_message');
$ds_wp_showonarchive = get_option('ds_wp_showonarchive');
$ds_wp_showfloating = get_option('ds_wp_showfloating');
$ds_fb_showfloating = get_option('ds_fb_showfloating');
$ds_fb_position = get_option('ds_fb_position');
$ds_fb_showonarchive = get_option('ds_fb_showonarchive');
$ds_fb_facebook_page_url = get_option('ds_fb_facebook_page_url');



if ($ds_wp_showfloating != "" || $ds_fb_showfloating != "") {
    add_action($dsposition, 'digitalsense_enquiry_display', 6);
    add_action('wp_footer','digitalsense_enquiry_display_button');
}
if ($ds_wp_showfloating != "" || $ds_fb_showfloating != "") {
    add_action($ds_fb_position, 'digitalsense_enquiry_facebook_display', 6);
    add_action('wp_footer','digitalsense_enquiry_display_button');
}
if ($ds_wp_countrycode != "" && $ds_wp_number != "" && $ds_wp_message != "" && $ds_wp_showonarchive == "yes") {
   add_action('woocommerce_after_shop_loop_item', 'digitalsense_enquiry_display',50 );
 }

 if ($ds_fb_facebook_page_url  != "" && $ds_fb_showonarchive == "yes") {    
   add_action('woocommerce_after_shop_loop_item', 'digitalsense_enquiry_facebook_display',50 );
 }
// Includes
include('includes/activate.php');
include('includes/init.php');

// Hooks
register_activation_hook(__FILE__, 'ds_wpenquiry_activate_plugin');     
//add_action('init','dswpenquiry_init');
        
// Shortcodes