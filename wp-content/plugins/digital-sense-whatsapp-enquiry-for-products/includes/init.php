<?php
function digital_sense_enquiry_menu(){

  //  add_menu_page('My Page Title', 'Enquiry', 'manage_options', 'my-menu', 'ds_wpenquiry_settings_page' );
   add_menu_page('Enquriy Setting', 'Enquriy Setting', 'manage_options', 'master','ds_master_settings_page','dashicons-editor-help');
  // add_submenu_page('master', 'Enquiry', 'Enquiry', 'manage_options','enquiry', 'ds_wpenquiry_settings_page');
    add_submenu_page('master', 'Whatsapp Enquiry Setting', 'Whatsapp', 'manage_options',  'enquiry', 'ds_wpenquiry_settings_page');
    add_submenu_page('master', 'Fb Messenger Setting', 'Fb Messenger', 'manage_options',  'messenger', 'ds_fbenquiry_settings_page');
      wp_enqueue_style('wp-color-picker');
    wp_enqueue_script('my-script-handle', plugins_url('../assets/js/dswpscript.js', __FILE__), array('wp-color-picker'), false, true);
    //call register settings function
    add_action('admin_init', 'ds_wpenquiry_plugin_settings');
}


function wporg_options_page() {
    $hookname = add_submenu_page(
        'wp-product-enquiry',
        'WPOrg Options',
        'WPOrg Options',
        'manage_options',
        'wporg',
        'wporg_options_page_html'
    );
 
    add_action( 'load-' . $hookname, 'wporg_options_page_html_submit' );
}



function ds_wpenquiry_plugin_settings()
{
    //register our settings
    register_setting('ds_wpenquiry_settings', 'ds_wp_countrycode');
    register_setting('ds_wpenquiry_settings', 'ds_wp_number');
    register_setting('ds_wpenquiry_settings', 'ds_wp_message');
    register_setting('ds_wpenquiry_settings', 'ds_wp_position');
    register_setting('ds_wpenquiry_settings', 'ds_wp_iconcolor');
    register_setting('ds_wpenquiry_settings', 'ds_wp_textcolor');
    register_setting('ds_wpenquiry_settings', 'ds_wp_showonarchive');
    register_setting('ds_wpenquiry_settings', 'ds_wp_showfloating');
    register_setting('ds_wpenquiry_settings', 'ds_wp_getwidgetposition');
    //register_setting('ds_wpenquiry_settings', 'ds_fb_name');
     //register our settings
    register_setting('ds_fbenquiry_settings', 'ds_fb_enable');
    // register_setting('ds_fbenquiry_settings', 'ds_fb_disable_mobile');
    register_setting('ds_fbenquiry_settings', 'ds_fb_facebook_page_url');
    register_setting('ds_fbenquiry_settings', 'ds_fb_iconcolor');
    register_setting('ds_fbenquiry_settings', 'ds_fb_title');
    register_setting('ds_fbenquiry_settings', 'ds_fb_open_chat');
    register_setting('ds_fbenquiry_settings', 'ds_fb_showonarchive');
    register_setting('ds_fbenquiry_settings', 'ds_fb_showfloating');
    register_setting('ds_fbenquiry_settings', 'ds_fb_getwidgetposition');
    // register_setting('ds_fbenquiry_settings', 'ds_fb_message');
    register_setting('ds_fbenquiry_settings', 'ds_fb_position');

    register_setting('ds_master_settings', 'ds_master_enable');
    register_setting('ds_master_settings', 'ds_master_iconclass');
    register_setting('ds_master_settings', 'ds_master_backcolor');
    register_setting('ds_master_settings', 'ds_master_iconcolor');
    register_setting('ds_master_settings', 'ds_master_showfloating');
    register_setting('ds_master_settings', 'ds_master_getwidgetposition');



}


//Settings Page Created
function ds_wpenquiry_settings_page()
{
    ?>
<div class="wrap">
    <h1>Whatsapp Enquiry Settings</h1>

    <form method="post" action="options.php">
        <?php settings_fields('ds_wpenquiry_settings'); ?>
        <?php do_settings_sections('ds_wpenquiry_settings'); ?>
        <table class="form-table">
            <tr valign="top">
                <th scope="row">Country Code<i>(without + symbol)</i></th>
                <td><input type="text" name="ds_wp_countrycode"
                        value="<?php echo esc_attr(get_option('ds_wp_countrycode')); ?>" /></td>
            </tr>

            <tr valign="top">
                <th scope="row">Whatsapp Number</th>
                <td><input type="text" name="ds_wp_number"
                        value="<?php echo esc_attr(get_option('ds_wp_number')); ?>" /></td>
            </tr>
            <tr>
                <th scope="row">Icon Color</th>
                <td><input type="text" name="ds_wp_iconcolor" id="iconcolor"
                        value="<?php echo esc_attr(get_option('ds_wp_iconcolor')); ?>" /></td>
            </tr>
            <tr>
                <th scope="row">Text Color</th>
                <td><input type="test" name="ds_wp_textcolor" id="textcolor"
                        value="<?php echo esc_attr(get_option('ds_wp_textcolor')); ?>" /></td>
            </tr>
            <tr>
                <th scope="row">Show On Product Archive</th>
                <td><select name="ds_wp_showonarchive" />
                    <option value="yes" <?php
                                                                                if (get_option('ds_wp_showonarchive') == "yes") {
                                                                                    echo "selected=selected";
                                                                                }
                                                                                ?>>Yes</option>
                    <option value="no" <?php
                                                                                if (get_option('ds_wp_showonarchive') == "no") {
                                                                                    echo "selected=selected";
                                                                                }
                                                                                ?>>No</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th scope="row">Show Floating Button</th>
                <td><select name="ds_wp_showfloating" />
                    <option value="yes" <?php
                                                                                if (get_option('ds_wp_showfloating') == "yes") {
                                                                                    echo "selected=selected";
                                                                                }
                                                                                ?>>Yes</option>
                    <option value="no" <?php
                                                                                if (get_option('ds_wp_showfloating') == "no") {
                                                                                    echo "selected=selected";
                                                                                }
                                                                                ?>>No</option>
                    </select>
                </td>
            </tr>

            <tr>
                <th scope="row">Button Position</th>
                <td><select name="ds_wp_getwidgetposition" />
                    <option value="right" <?php
                                                            if (get_option('ds_wp_getwidgetposition') == "right") {
                                                                echo "selected=selected";
                                                            }
                                                            ?>>Right</option>
                    <option value="left" <?php
                                                                    if (get_option('ds_wp_getwidgetposition') == "left") {
                                                                        echo "selected=selected";
                                                                    }
                                                                    ?>>Left</option>
                    </select>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row">Default Text/Message(Button Text)</th>
                <td><input type="text" name="ds_wp_message"
                        value="<?php echo esc_attr(get_option('ds_wp_message')); ?>" /></td>
            </tr>
            <tr valign="top">
                <th scope="row">Display Position</th>
                <td><select name="ds_wp_position" />

                    <option value="woocommerce_before_single_product" <?php
                                                                                if (get_option('ds_wp_position') == "woocommerce_before_single_product") {
                                                                                    echo "selected=selected";
                                                                                }
                                                                                ?>>Before Product</option>
                    <option value="woocommerce_before_single_product_summary" <?php
                                                                                        if (get_option('ds_wp_position') == "woocommerce_before_single_product_summary") {
                                                                                            echo "selected=selected";
                                                                                        }
                                                                                        ?>>Before Product Summary
                    </option>
                    <option value="woocommerce_single_product_summary" <?php
                                                                                if (get_option('ds_wp_position') == "woocommerce_single_product_summary") {
                                                                                    echo "selected=selected";
                                                                                }
                                                                                ?>>Product Summary</option>
                    <option value="woocommerce_before_add_to_cart_form" <?php
                                                                                if (get_option('ds_wp_position') == "woocommerce_before_add_to_cart_form") {
                                                                                    echo "selected=selected";
                                                                                }
                                                                                ?>>Before Add to Cart Form</option>
                    <option value="woocommerce_after_single_product_summary" <?php
                                                                                        if (get_option('ds_wp_position') == "woocommerce_after_single_product_summary") {
                                                                                            echo "selected=selected";
                                                                                        }
                                                                                        ?>>After Summary</option>
                    <option value="woocommerce_after_single_product" <?php
                                                                                if (get_option('ds_wp_position') == "woocommerce_after_single_product") {
                                                                                    echo "selected=selected";
                                                                                }
                                                                                ?>>After Product Summary</option>

                </td>
            </tr>
        </table>

        <?php submit_button(); ?>

    </form>
</div>
<?php
}

//Settings Page Created
function ds_fbenquiry_settings_page()
{
    ?>
<div class="wrap">
    <h1>Facebook Enquiry Settings</h1>

    <form method="post" action="options.php">
        <?php settings_fields('ds_fbenquiry_settings'); ?>
        <?php do_settings_sections('ds_fbenquiry_settings'); ?>
        <table class="form-table">
            <tr valign="top">
                <th scope="row">Enable</th>
                <?php $isChecked = esc_attr(get_option('ds_fb_enable')) == "on" ? 'checked="checked"' : null; ?>
                <td><input type="checkbox" name="ds_fb_enable" <?php echo $isChecked ?>>

                </td>
            </tr>

            <tr>
                <th scope="row">Icon Color</th>
                <td><input type="text" name="ds_fb_iconcolor" id="iconcolor"
                        value="<?php echo esc_attr(get_option('ds_fb_iconcolor')); ?>" /></td>
            </tr>
            <!-- 
                <tr valign="top">
                    <th scope="row">Disable Mobile</th>
              <?php $isChecked1 = esc_attr(get_option('ds_fb_disable_mobile')) == "on" ? 'checked="checked"' : null; ?>
                    <td><input type="checkbox" name="ds_fb_disable_mobile" <?php echo $isChecked1 ?>/></td>
                </tr> -->
            <tr>
                <th scope="row">Enter Your Facebook Name</th>
                <td><input type="text" name="ds_fb_facebook_page_url" id="facebook_page_url"
                        placeholder="digitalsense.in"
                        value="<?php echo esc_attr(get_option('ds_fb_facebook_page_url')); ?>" /></td>
            </tr>

            <tr>
                <th scope="row">Show On Product Archive</th>
                <td><select name="ds_fb_showonarchive" />
                    <option value="yes" <?php
                                                                                if (get_option('ds_fb_showonarchive') == "yes") {
                                                                                    echo "selected=selected";
                                                                                }
                                                                                ?>>Yes</option>
                    <option value="no" <?php
                                                                                if (get_option('ds_fb_showonarchive') == "no") {
                                                                                    echo "selected=selected";
                                                                                }
                                                                                ?>>No</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th scope="row">Show Floating Button</th>
                <td><select name="ds_fb_showfloating" />
                    <option value="yes" <?php
                                                                                if (get_option('ds_fb_showfloating') == "yes") {
                                                                                    echo "selected=selected";
                                                                                }
                                                                                ?>>Yes</option>
                    <option value="no" <?php
                                                                                if (get_option('ds_fb_showfloating') == "no") {
                                                                                    echo "selected=selected";
                                                                                }
                                                                                ?>>No</option>
                    </select>
                </td>
            </tr>

            <tr>
                <th scope="row">Button Position</th>
                <td><select name="ds_fb_getwidgetposition" />
                    <option value="right" <?php
                                                            if (get_option('ds_fb_getwidgetposition') == "right") {
                                                                echo "selected=selected";
                                                            }
                                                            ?>>Right</option>
                    <option value="left" <?php
                                                                    if (get_option('ds_fb_getwidgetposition') == "left") {
                                                                        echo "selected=selected";
                                                                    }
                                                                    ?>>Left</option>
                    </select>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row">Display Position</th>
                <td><select name="ds_fb_position" />

                    <option value="woocommerce_before_single_product" <?php
                                                                                if (get_option('ds_fb_position') == "woocommerce_before_single_product") {
                                                                                    echo "selected=selected";
                                                                                }
                                                                                ?>>Before Product</option>
                    <option value="woocommerce_before_single_product_summary" <?php
                                                                                        if (get_option('ds_fb_position') == "woocommerce_before_single_product_summary") {
                                                                                            echo "selected=selected";
                                                                                        }
                                                                                        ?>>Before Product Summary
                    </option>
                    <option value="woocommerce_single_product_summary" <?php
                                                                                if (get_option('ds_fb_position') == "woocommerce_single_product_summary") {
                                                                                    echo "selected=selected";
                                                                                }
                                                                                ?>>Product Summary</option>
                    <option value="woocommerce_before_add_to_cart_form" <?php
                                                                                if (get_option('ds_fb_position') == "woocommerce_before_add_to_cart_form") {
                                                                                    echo "selected=selected";
                                                                                }
                                                                                ?>>Before Add to Cart Form</option>
                    <option value="woocommerce_after_single_product_summary" <?php
                                                                                        if (get_option('ds_fb_position') == "woocommerce_after_single_product_summary") {
                                                                                            echo "selected=selected";
                                                                                        }
                                                                                        ?>>After Summary</option>
                    <option value="woocommerce_after_single_product" <?php
                                                                                if (get_option('ds_fb_position') == "woocommerce_after_single_product") {
                                                                                    echo "selected=selected";
                                                                                }
                                                                                ?>>After Product Summary</option>

                </td>
            </tr>
        </table>

        <?php submit_button(); ?>

    </form>
</div>
<?php }

//Settings Page Created
function ds_master_settings_page()
{
    ?>
<div class="wrap">
    <h1>Master Settings</h1>

    <form method="post" action="options.php">
        <?php settings_fields('ds_master_settings'); ?>
        <?php do_settings_sections('ds_master_settings'); ?>
        <table class="form-table">

            <tr valign="top">
                <th scope="row">Enable</th>
                <?php $isChecked = esc_attr(get_option('ds_master_enable')) == "on" ? 'checked="checked"' : null; ?>
                <td><input type="checkbox" name="ds_master_enable" <?php echo $isChecked ?>>
                </td>
            </tr>

            <tr>
                <th scope="row">Floating Background Color</th>
                <td><input type="text" name="ds_master_backcolor" id="backcolor"
                        value="<?php echo esc_attr(get_option('ds_master_backcolor')); ?>" /></td>
            </tr>

            <tr>
                <th scope="row">Icon Color</th>
                <td><input type="text" name="ds_master_iconcolor" id="iconcolor"
                        value="<?php echo esc_attr(get_option('ds_master_iconcolor')); ?>" /></td>
            </tr>

            <tr>
                <th scope="row">Show Floating Button</th>
                <td><select name="ds_master_showfloating" />
                    <option value="yes" <?php
                                                                                if (get_option('ds_master_showfloating') == "yes") {
                                                                                    echo "selected=selected";
                                                                                }
                                                                                ?>>Yes</option>
                    <option value="no" <?php
                                                                                if (get_option('ds_master_showfloating') == "no") {
                                                                                    echo "selected=selected";
                                                                                }
                                                                                ?>>No</option>
                    </select>
                </td>
            </tr>

            <tr>
                <th scope="row">Button Position</th>
                <td><select name="ds_master_getwidgetposition" />
                    <option value="right" <?php
                                                            if (get_option('ds_master_getwidgetposition') == "right") {
                                                                echo "selected=selected";
                                                            }
                                                            ?>>Right</option>
                    <option value="left" <?php
                                                                    if (get_option('ds_master_getwidgetposition') == "left") {
                                                                        echo "selected=selected";
                                                                    }
                                                                    ?>>Left</option>
                    </select>
                </td>
            </tr>


        </table>

        <?php submit_button(); ?>

    </form>
</div>
<?php }

//Function to display Whatsapp Button on frontend
function digitalsense_enquiry_display()
{
 global $product;
    $title = get_permalink($product->id);

    $ds_wp_countrycode = get_option('ds_wp_countrycode');
    $ds_wp_number = get_option('ds_wp_number');
    $ds_wp_message = get_option('ds_wp_message');
    $ds_wp_iconcolor = get_option('ds_wp_iconcolor');
    $ds_wp_textcolor = get_option('ds_wp_textcolor');
     wp_enqueue_style('digitalsense_fa', 'https://cdn.jsdelivr.net/npm/fork-awesome@1.1.7/css/fork-awesome.min.css');
    ?>
<?php if (!empty($ds_wp_iconcolor) || !empty($ds_wp_textcolor)) { ?>
<style type="text/css">
<?php if ( !empty($ds_wp_iconcolor)) {
    ?>.iconcolor {
        color: <?php echo $ds_wp_iconcolor;
        ?>;
    }

    <?php
}

?><?php if ( !empty($ds_wp_textcolor)) {
    ?>.textcolor {
        color: <?php echo $ds_wp_textcolor;
        ?>;
    }

    <?php
}

?>
</style>
<?php } ?>

<div class="">
    <a href="http://wa.me/<?php echo $ds_wp_countrycode . $ds_wp_number; ?>?text=<?php echo $ds_wp_message; ?> <?php echo $title; ?>"
        class="desktop textcolor"><i class="fa fa-whatsapp iconcolor"></i><?php echo " " . $ds_wp_message; ?></a>
</div>

<?php }    

//Function to display Whatsapp Button on frontend
function digitalsense_enquiry_facebook_display()
{
 global $product;
    $title = get_permalink($product->id);

      $ds_fb_facebook_name = get_option('ds_fb_facebook_page_url');
      $ds_fb_showfloating = get_option('ds_fb_showfloating');
      $ds_fb_iconcolor = get_option('ds_fb_iconcolor');
    wp_enqueue_style('digitalsense_fa', 'https://cdn.jsdelivr.net/npm/fork-awesome@1.1.7/css/fork-awesome.min.css');
    ?>
<?php if (!empty($ds_wp_iconcolor) || !empty($ds_wp_textcolor)) { ?>
<style type="text/css">
<?php if ( !empty($ds_wp_iconcolor)) {
    ?>.iconcolor {
        color: <?php echo $ds_fb_iconcolor;
        ?>;
    }

    <?php
}

?><?php if ( !empty($ds_wp_textcolor)) {
    ?>.textcolor {
        color: <?php echo $ds_wp_textcolor;
        ?>;
    }

    <?php
}

?>
</style>
<?php } ?>

<div class="">
    <a href="http://m.me/<?php echo $ds_fb_facebook_name; ?>" class=" desktop textcolor"><i
            class="fa fa-facebook-messenger iconcolor"></i><?php echo " " . $ds_wp_message; ?></a>
</div>

<?php }   


/**
 * Proper way to enqueue scripts and styles
 */
function digitalsense_enquiry_style() {
   
}
add_action( 'wp_enqueue_scripts', 'digitalsense_enquiry_style' );



//Function to display Whatsapp Button on frontend
function digitalsense_enquiry_display_button()
{
    $ds_wp_countrycode = get_option('ds_wp_countrycode');
    $ds_wp_number = get_option('ds_wp_number');
    $ds_wp_message = get_option('ds_wp_message');
    $ds_wp_iconcolor = get_option('ds_wp_iconcolor');
    $ds_wp_textcolor = get_option('ds_wp_textcolor');
    $ds_wp_showfloating = get_option('ds_wp_showfloating');
    $ds_wp_getwidgetposition = get_option('ds_wp_getwidgetposition');

      $ds_fb_facebook_name = get_option('ds_fb_facebook_page_url');
      $ds_fb_showfloating = get_option('ds_fb_showfloating');
      $ds_fb_iconcolor = get_option('ds_fb_iconcolor');

      $ds_master_showfloating = get_option('ds_master_showfloating');
      $ds_master_iconclass = get_option('ds_master_iconclass');
      $ds_master_backcolor = get_option('ds_master_backcolor');
      $ds_master_iconcolor = get_option('ds_master_iconcolor');
      $ds_master_getwidgetposition = get_option('ds_master_getwidgetposition');

    //    print_r($ds_master_getwidgetposition);
    //    exit;

   ?>
<?php if($ds_master_showfloating == 'yes') {  ?>
<?php if($ds_fb_showfloating == 'yes' || $ds_wp_showfloating == 'yes') {  ?>

<style type="text/css">
<?php if ( !empty($ds_wp_iconcolor)) {
    ?>.iconcolor {
        color: <?php echo $ds_wp_iconcolor;
        ?>;
    }

    <?php
}

?><?php if ( !empty($ds_wp_textcolor)) {
    ?>.textcolor {
        color: <?php echo $ds_wp_textcolor;
        ?>;
    }

    <?php
}

?>.return-to-top {
    color: #fff;
    margin: 0;
    position: fixed;
    <?php echo $ds_master_getwidgetposition;
    ?>: 16px;
    bottom: 16px;
    font-size: 40px;
    width: 50px;
    text-align: center;
    height: 50px;
    background-color: #2db742;
    border-top-left-radius: 50px;
    border-top-right-radius: 50px;
    border-bottom-right-radius: 50px;
    border-bottom-left-radius: 50px;
    color: white;
}


.dsfab-container {
    position: fixed;
    bottom: 50px;
    <?php echo $ds_master_getwidgetposition;
    ?>: 50px;
    z-index: 999;
    cursor: pointer;
}

.dsfab-icon-holder {
    width: 55px;
    height: 55px;
    border-radius: 100%;
    background: #016fb9;

    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
}

.dsfab-icon-holder:hover {
    opacity: 0.8;
}

.dsfab-icon-holder i {
    display: flex;
    align-items: center;
    justify-content: center;

    height: 100%;

    color: #ffffff;
}


.dsfab {
    width: 60px;
    height: 60px;

}

.dsfab-options {
    list-style-type: none;
    margin: 0;

    position: absolute;
    bottom: 70px;
    right: 0;

    opacity: 0;

    transition: all 0.3s ease;
    transform: scale(0);
    transform-origin: 85% bottom;
}



.dsfab:hover+.dsfab-options,
.dsfab-options:hover {
    opacity: 1;
    transform: scale(1);
}

.dsfab-options li {
    display: flex;
    justify-content: flex-end;
    padding: 5px;
}

.dsfab-label {
    padding: 2px 5px;
    align-self: center;
    user-select: none;
    white-space: nowrap;
    border-radius: 3px;
    font-size: 16px;
    background: #666666;
    color: #ffffff;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
    margin-right: 10px;
}

.whatsapp svg {
    width: 40px !important;
    fill: <?php echo $ds_wp_iconcolor;
    ?> !important;
}

.facebook svg {
    width: 40px !important;
    fill: <?php echo $ds_fb_iconcolor;
    ?> !important;
}

.master svg {
    width: 40px !important;
    fill: <?php echo $ds_master_iconcolor;
    ?> !important;
}

/* 
.dsfab {
    background: <?php echo $ds_master_backcolor;
    ?> !important;
} */

.fa-question:before {
    margin-top: 8px;
    color: <?php echo $ds_master_iconcolor;
    ?> !important;
}
</style>

<div class="dsfab-container">
    <div class="dsfab dsfab-icon-holder">
        <div class="master">
            <i class="fa fa-question fa-2x" aria-hidden="true"></i>
        </div>
    </div>

    <ul class="dsfab-options">

        <?php if($ds_wp_showfloating == 'yes') {  ?>
        <li>

            <a class="whatsapp"
                href="http://wa.me/<?php echo $ds_wp_countrycode . $ds_wp_number; ?>?text=<?php echo $ds_wp_message; ?>">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                    y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">

                    <g>
                        <g transform="translate(0.000000,462.000000) scale(0.100000,-0.100000)">
                            <path
                                d="M4472.9,4492.4C2377.1,4206.7,746.1,2682.3,347.4,637.7c-198.3-1025.5-51.2-2070.2,428.5-3036l172.7-343.2L520.1-4005.9c-236.7-692.9-424.3-1266.4-420-1270.7c4.3-4.3,601.2,179.1,1324,409.4l1317.6,420l251.6-119.4c1029.8-481.8,2172.6-599.1,3259.9-330.5c1669.4,413.6,3012.6,1709.9,3475.3,3355.8c194,695,226,1522.3,83.2,2228c-328.3,1618.2-1483.9,2963.6-3048.8,3545.6c-236.7,89.6-622.6,189.8-914.7,240.9C5568.8,4520.1,4760.7,4532.9,4472.9,4492.4z M5666.9,3722.8c1571.3-213.2,2906-1383.7,3326-2918.8c179.1-654.6,187.6-1385.8,23.4-2034c-336.9-1326.1-1341-2402.8-2645.9-2835.6c-1115.1-371-2351.7-243-3343.1,347.5c-91.7,53.3-174.8,98.1-183.4,98.1c-6.4,0-356.1-108.8-776.1-243.1c-417.9-132.2-761.1-234.5-761.1-223.9c0,8.5,110.9,343.3,247.3,742l247.3,724.9l-110.9,166.3c-138.6,208.9-362.5,663.1-445.6,904C594.7,334.9,1453.9,2420.1,3257.6,3332.6C4001.7,3707.8,4809.8,3837.9,5666.9,3722.8z" />
                            <path
                                d="M3272.6,1878.5c-168.4-83.1-400.8-407.2-486.1-678c-17.1-53.3-38.4-194-44.8-311.3c-14.9-272.9,38.4-509.6,185.5-816.6c108.7-226,360.3-605.5,609.8-916.8c437.1-547.9,976.5-995.7,1488.2-1240.9c398.7-189.8,1012.7-392.3,1272.8-420c356.1-36.3,897.6,200.4,1087.4,477.6c123.7,179.1,191.9,618.3,108.7,695c-42.6,38.4-850.7,432.8-1010.6,494.6c-55.4,21.3-123.7,32-151.4,23.4c-32-6.4-115.1-91.7-209-208.9C5892.9-1313.1,5779.9-1424,5718-1424c-83.1,0-496.8,200.4-729.1,353.9c-296.4,196.2-678,579.9-884.8,889.1c-85.3,125.8-153.5,253.7-153.5,281.4c0,29.9,55.4,113,149.2,221.7c136.4,159.9,255.8,349.6,255.8,409.4c0,12.8-98.1,260.1-217.5,550.1c-140.7,336.9-238.8,545.8-275,584.2c-55.4,55.4-66.1,57.6-279.3,57.6C3402.6,1923.3,3347.2,1914.8,3272.6,1878.5z" />
                        </g>
                    </g>
                </svg></a>

        </li>
        <?php } if($ds_fb_showfloating == 'yes') {  ?>
        <li>
            <div class="facebook">
                <a class="facebook" href="http://m.me/<?php echo $ds_fb_facebook_name; ?>"><svg version="1.1" id="Icons"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
                        <path d="M16,1C7.2,1,0,7.5,0,15.5c0,4.3,2.1,8.3,5.7,11.1L5.9,30c0,0.6,0.4,1.1,0.9,1.4c0.3,0.1,0.5,0.2,0.8,0.2s0.6-0.1,0.8-0.2
                                l3.4-1.9c1.4,0.3,2.8,0.5,4.2,0.5c8.8,0,16-6.5,16-14.5S24.8,1,16,1z M25.7,13.7l-3.8,5c-1.3,1.8-3.7,2.3-5.7,1.3l-3.6-1.8l-4.5,2.3
                                c-0.2,0.1-0.4,0.2-0.7,0.2c-0.4,0-0.8-0.2-1.1-0.5c-0.4-0.5-0.5-1.3,0-1.8l3.8-5c1.3-1.8,3.7-2.3,5.7-1.3l3.6,1.8l4.5-2.3
                                c0.6-0.3,1.3-0.1,1.8,0.4C26.1,12.4,26.1,13.1,25.7,13.7z" />
                    </svg></a>
            </div>
        </li>
        <?php } ?>

    </ul>
</div>
<?php } ?>


<?php } ?>
<?php } ?>