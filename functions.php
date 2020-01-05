<?php

function load_styles(){
  wp_register_style('css-style', get_template_directory_uri() . '/style.css', array(), false, 
  'all');
  wp_enqueue_style('css-style');
  wp_register_style( 'nav-bar', get_template_directory_uri() . '/css/nav-bar.scss', array(), false, 'all');
  wp_enqueue_style( 'nav-bar' );
}
add_action( 'wp_enqueue_scripts', 'load_styles' );


function load_scripts(){
  wp_register_script('js-script', get_template_directory_uri() . '/js/script.js', array('jquery', 'jquery-ui-core', 'jquery-ui-tabs', 'jquery-ui-menu'), null, false);
  wp_enqueue_script('js-script');
}
add_action( 'wp_enqueue_scripts', 'load_scripts');

function add_google_fonts() {
 
  wp_enqueue_style( 'playfair-google-fonts', 'https://fonts.googleapis.com/css?family=Playfair+Display:700i', false );
  wp_enqueue_style( 'roboto-google-fonts', 'https://fonts.googleapis.com/css?family=Roboto:300,400,700', false ); 
} 
add_action( 'wp_enqueue_scripts', 'add_google_fonts' );

add_theme_support( 'menus' );

register_nav_menus(
  array(
    'top-menu' => __( 'Top Menu', 'theme' )
  )
);

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}

  

?>