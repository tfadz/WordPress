<?php  
// Example showing enqueuing

 //Enqueue scripts
add_action('wp_enqueue_scripts', 'wp_enqueue_all_scripts', 999);

function wp_enqueue_all_scripts(){

//add slick slider
    wp_register_style('slickcss', get_template_directory_uri()."/slick/slick.css" );
    wp_register_style('slickcsstheme', get_template_directory_uri()."/slick/slick-theme.css" );

//load slick js
    wp_register_script('slickslider', get_template_directory_uri()."/slick/slick.min.js", array(jquery), '', true );

////load slick initiate script
    wp_register_script( 'slickinit', get_template_directory_uri() . '/assets/js/slick-init.js');

// load slick on homepage
    if ( is_front_page() ) {
        wp_enqueue_style( 'slickcss' );
        wp_enqueue_style( 'slickcsstheme' );
        wp_enqueue_script ('slickslider');
        wp_enqueue_script ('slickinit');
    }
}

// Custom Menu

function register_my_menus() {
  register_nav_menus(
    array(
      'footer-menu' => __( 'Footer Menu' ),
      'mobile-menu' => __( 'Mobile Menu' ),
      'top-left-nav' => __( 'Top Left Nav' ),
      'top-right-nav' => __( 'Top Right Nav' )
    )
  );
}


// Add Theme Options
if( function_exists('acf_add_options_page') ) {
  
  acf_add_options_page();
  acf_set_options_page_menu('Theme Settings');
  acf_add_options_sub_page('Header');
  acf_add_options_sub_page('Footer');

  acf_add_options_sub_page(array(
    'page_title'  => 'Header',
    'menu_title'  => 'Header',
    'menu_slug'   => 'theme-options-header',
    'capability'  => 'edit_posts',
    'parent_slug' => 'theme-options',
    'position'    => false,
    'icon_url'    => false,
  ));


  acf_add_options_sub_page(array(
    'page_title'  => 'Footer',
    'menu_title'  => 'Footer',
    'menu_slug'   => 'theme-options-footer',
    'capability'  => 'edit_posts',
    'parent_slug' => 'theme-options',
    'position'    => false,
    'icon_url'    => false,
  ));

  
  
}





?>