<?php


function ds_wpenquiry_activate_plugin(){
    // 4.7 < 4.5 = false
    
    if(version_compare(get_bloginfo('version'), '4.5','<')){
        wp_die(__('You must update Wordpress to use this plugin','digital-sense-wp-enquiry-for-products'));
        
    }
}