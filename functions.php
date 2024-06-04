<?php
/**
 * @package Spot Opole
 */

if ( ! defined( '_S_VERSION' ) ) {
  define( 'S_VERSION', '1.0.0' );
}


function spot_scripts() {
  /**
   *  Main styles 
  */
  wp_register_style( 'main-css', get_template_directory_uri() . '/assets/css/main.css', [], false, 'all' );
	wp_register_script( 'main-js', get_template_directory_uri() . '/assets/js/script-min.js', [], filemtime( get_template_directory() . '/assets/js/script-min.js' ), true );
  
  wp_enqueue_style( 'main-css' );
	wp_enqueue_script( 'main-js' );
}
add_action( 'wp_enqueue_scripts', 'spot_scripts');

/**
 * Add admin styles and scripts
 */
function spot_admin_style() {
	wp_enqueue_style( 'main-admin-style', get_template_directory_uri() . '/assets/css/admin.css', [], false, 'all' );
}
add_action( 'admin_enqueue_scripts', 'spot_admin_style' );


function spot_config(){
  register_nav_menus(
    array(
  'spot_main_menu' => 'spot Main Menu',
    )
  );
}

add_action('after_setup_theme', 'spot_config', 0);
add_theme_support( 'title-tag' );
add_theme_support('woocommerce', array(
  'thumbnails_image_width' => 300,
  'single_image_width' => 800,
  'product_grid' => array(
    'default_rows' => 10,
    'min_rows' => 1,
    'max_rows' => 10,
    'default_columns' => 1,
    'min_columns' => 1,
    'max_columns' => 5
  )
));
add_theme_support('wc-product-gallery-zoom');
add_theme_support('wc-product-gallery-lightbox');
add_theme_support('wc-product-gallery-slider');

add_theme_support( 'post-thumbnails' );



add_theme_support('post-thumbnails', array(
  'post',
  'page',
  'custom-post-type-name',
  ));

  function change_excerpt($excerpt) {
    return substr($excerpt, 0, 150) . '...';
  }
  
  add_filter('the_excerpt', 'change_excerpt');

  function trim_text($input, $length) {

    // If the text is already shorter than the max length, then just return unedited text.
    if (strlen($input) <= $length) {
      return $input;
    }
    
    // Find the last space (between words we're assuming) after the max length.
    $last_space = strrpos(substr($input, 0, $length), ' ');
    // Trim
    $trimmed_text = substr($input, 0, $last_space);
    // Add ellipsis.
    $trimmed_text .= '...';
    
    return $trimmed_text;
    }
  

    function add_additional_class($classes, $item, $args){
      if(isset($args->add_li_class)){
          $classes[] = $args->add_li_class;
      }
      return $classes;
  }
  
  add_filter('nav_menu_css_class', 'add_additional_class', 1, 3);

  add_filter('wpcf7_autop_or_not', '__return_false');


  add_action( 'woocommerce_before_single_product_summary', 'my_unique_named_function', 5 );
 
function my_unique_named_function() {
    echo '<div class="product__content">';
}

add_action( 'woocommerce_after_single_product_summary', 'my_unique_named_functionn', 9 );
 
function my_unique_named_functionn() {
    echo '</div>';
}