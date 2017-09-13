<?php 
/**
 * @package WordPress
 * @subpackage WP-Skeleton
 */

// drag and drop menu support
register_nav_menu( 'primary', 'Primary Menu' );
//widget support for a right sidebar
register_sidebar(array(
  'name' => 'Right SideBar',
  'id' => 'right-sidebar',
  'description' => 'Widgets in this area will be shown on the right-hand side.',
  'before_widget' => '<div id="%1$s">',
  'after_widget'  => '</div>',  
  'before_title' => '<h3>',
  'after_title' => '</h3>'
));

//widget support for the footer
register_sidebar(array(
  'name' => 'Footer SideBar',
  'id' => 'footer-sidebar',
  'description' => 'Widgets in this area will be shown in the footer.',
  'before_widget' => '<div id="%1$s">',
  'after_widget'  => '</div>',
  'before_title' => '<h3>',
  'after_title' => '</h3>'
));

//This theme uses post thumbnails
add_theme_support( 'post-thumbnails' );


//Apply do_shortcode() to widgets so that shortcodes will be executed in widgets
add_filter('widget_text', 'do_shortcode');


/**
 * MANAGE REMOVING OR ADDING STUFF (aka Function Snippets)
 * comment in or out what you want
 */
 

// remove stuff,  uncomment to enable
//require_once( get_template_directory() . '/snippets/remove-stuff.php' );

// add stuff
require_once( get_template_directory() . '/snippets/add-stuff.php' );
//
//
add_filter('the_title', Ucwords);

// Hook in
add_filter( 'woocommerce_default_address_fields' , 'custom_override_default_address_fields' );

// Our hooked in function - $address_fields is passed via the filter!
function custom_override_default_address_fields( $address_fields ) {
     $address_fields['postcode']['required'] = false;
     $address_fields['city']['required'] = false;
     $address_fields['state']['required'] = false;
     $address_fields['address_1']['required'] = false;
     return $address_fields;
}

// Hook in
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

// Our hooked in function - $fields is passed via the filter!
function custom_override_checkout_fields( $fields ) {
     unset($fields['billing']['billing_company']);
     unset($fields['billing']['billing_address_1']);
     unset($fields['billing']['billing_address_2']);
     unset($fields['billing']['billing_state']);
     unset($fields['billing']['billing_postcode']);
     unset($fields['billing']['billing_country']);
     unset($fields['billing']['billing_city']);
     // unset($fields['billing']['billing_first_name']);
     unset($fields['billing']['billing_last_name']);
     // unset($fields['billing']['billing_email']);
     unset($fields['billing']['billing_phone']);
	 // $fields['billing']['billing_phone']['label'] = 'Your Landline Number';
     return $fields;
}

//REMOVE AJAX
function so_27023433_disable_checkout_script(){
    wp_dequeue_script( 'wc-checkout' );
}
add_action( 'wp_enqueue_scripts', 'so_27023433_disable_checkout_script' );


// function remove_thumbnail_in_product() {
	// remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
// }
// add_action('init','remove_thumbnail_in_product');
// add_filter( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_images');
add_filter( 'woocommerce_product_add_to_cart_text', 'woo_archive_custom_cart_button_text' );    // 2.1 + 
function woo_archive_custom_cart_button_text() { 
        return __( 'Load Now', 'woocommerce' );
}

add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_cart_button_text' );    // 2.1 + 
function woo_custom_cart_button_text() { 
        return __( 'Load Now', 'woocommerce' ); 
}