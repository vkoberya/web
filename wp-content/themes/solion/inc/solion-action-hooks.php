<?php

remove_action( 'woocommerce_before_main_content' , 'woocommerce_breadcrumb' , 20);

add_action( 'woocommerce_before_shop_loop' , 'wpriver_woocommerce_shop_before' , 15);

function wpriver_woocommerce_shop_before() {
    echo'<div class="top-shorting">';
}

add_action( 'woocommerce_before_shop_loop' , 'wpriver_woocommerce_shop_before1' , 35);

function wpriver_woocommerce_shop_before1() {
    echo'</div>';
}

add_action( 'woocommerce_after_shop_loop_item' , 'wpriver_woocommerce_cart_before' , 6);

function wpriver_woocommerce_cart_before() {
    echo '<div class="product-cart-btn">';
}

add_action( 'woocommerce_after_shop_loop_item' , 'wpriver_woocommerce_cart_after' , 15);

function wpriver_woocommerce_cart_after() {
    echo '</div>';
}

add_action( 'woocommerce_before_single_product_summary' , 'solion_woocommerce_before_single_product_summary' , 15);

function solion_woocommerce_before_single_product_summary() {
    echo '<div class="single-product-info">';
}

add_action( 'woocommerce_after_single_product_summary' , 'solion_woocommerce_before_single_product_summary1' , 5);

function solion_woocommerce_before_single_product_summary1() {
    echo '</div>';
}

remove_action( 'woocommerce_before_single_product_summary' , 'woocommerce_show_product_sale_flash' , 10);

// Checkout Page 

// WooCommerce Checkout Fields Hook
add_filter('woocommerce_checkout_fields','solion_wc_checkout_fields_no_label');

// Our hooked in function - $fields is passed via the filter!
// Action: remove label from $fields
function solion_wc_checkout_fields_no_label($fields) {
    // loop by category
    foreach ($fields as $category => $value) {
        // loop by fields
        foreach ($fields[$category] as $field => $property) {
            // remove label property
            unset($fields[$category][$field]['label']);
        }
    }
     return $fields;
}

add_filter( 'woocommerce_checkout_fields' , 'solion_checkout_fields' );

function solion_checkout_fields( $fields ) {
    $fields['billing']['billing_first_name']['placeholder'] = 'First Name';
    $fields['billing']['billing_last_name']['placeholder'] = 'Last Name';
    $fields['billing']['billing_company']['placeholder'] = 'Company Name';
    $fields['billing']['billing_address_1']['placeholder'] = 'House Number and Street Name';
    $fields['billing']['billing_address_2']['placeholder'] = 'Appartment, Suite ,unit, etc.';
    $fields['billing']['billing_city']['placeholder'] = 'Town / City';
    $fields['billing']['billing_postcode']['placeholder'] = 'Post Code / Zip';
    $fields['billing']['billing_phone']['placeholder'] = 'Phone';
    $fields['billing']['billing_email']['placeholder'] = 'Email';
    
    
    $fields['billing']['billing_country']['label'] = 'Select Your Country';
     return $fields;  
}

// 1. Show plus minus buttons
  
add_action( 'woocommerce_after_quantity_input_field', 'solion_display_quantity_plus' );
  
function solion_display_quantity_plus() {
   echo '<button type="button" class="solion-cartbt-plus" >+</button>';
}
  
add_action( 'woocommerce_before_quantity_input_field', 'solion_display_quantity_minus' );
  
function solion_display_quantity_minus() {
   echo '<button type="button" class="solion-cartbt-minus" >-</button>';
}
  
// -------------
// 2. Trigger update quantity script
  
add_action( 'wp_footer', 'solion_add_cart_quantity_plus_minus' );
  
function solion_add_cart_quantity_plus_minus() {
 
   if ( ! is_product() && ! is_cart() ) return;
    
   wc_enqueue_js( "   
           
      $('form.cart,form.woocommerce-cart-form').on( 'click', 'button.solion-cartbt-plus, button.solion-cartbt-minus', function() {
  
         var qty = $( this ).parent( '.quantity' ).find( '.qty' );
         var val = parseFloat(qty.val());
         var max = parseFloat(qty.attr( 'max' ));
         var min = parseFloat(qty.attr( 'min' ));
         var step = parseFloat(qty.attr( 'step' ));
 
         if ( $( this ).is( 'button.solion-cartbt-plus' ) ) {
            if ( max && ( max <= val ) ) {
               qty.val( max );
            } else {
               qty.val( val + step );
            }
         } else {
            if ( min && ( min >= val ) ) {
               qty.val( min );
            } else if ( val > 1 ) {
               qty.val( val - step );
            }
         }
 
      });
        
   " );
   
}

add_filter( 'woocommerce_add_to_cart_fragments', 'wc_refresh_mini_cart_count');
function wc_refresh_mini_cart_count($fragments){
    ob_start();
    ?>
    <span class="badge">
        <?php echo WC()->cart->get_cart_contents_count(); ?>
    </span>
    <?php
        $fragments['span.badge'] = ob_get_clean();
    return $fragments;
}

add_filter( 'woocommerce_add_to_cart_fragments', 'wc_refresh_mini_cart_count1');
function wc_refresh_mini_cart_count1($fragments1){
    ob_start();
    ?>
    <span class="pull-right"><strong>Total</strong>: <?php echo WC()->cart->get_total(); ?>
    </span>
    <?php
        $fragments1['span.pull-right'] = ob_get_clean();
    return $fragments1;
}

/**
 * Change number of products that are displayed per page (shop page)
 */
add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );

function new_loop_shop_per_page( $cols ) {
  // $cols contains the current number of products per page based on the value stored on Options –> Reading
  // Return the number of products you wanna show per page.
  $cols = 9;
  return $cols;
}