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





?>