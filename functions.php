<?php

function load_styles(){
  wp_register_style('css-style', get_template_directory_uri() . '/style.css', array(), false, 
  'all');
  wp_enqueue_style('css-style');
}
add_action( 'wp_enqueue_scripts', 'load_styles' );


function load_scripts(){
  wp_register_script('js-script', get_template_directory_uri() . '/js/script.js', array('jquery', 'jquery-ui-core', 'jquery-ui-tabs'), null, false);
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

if( function_exists('acf_add_local_field_group') ):

  acf_add_local_field_group(array(
    'key' => 'group_5e104708654c2',
    'title' => 'Home',
    'fields' => array(
      array(
        'key' => 'field_5e104711f594a',
        'label' => 'Tab display',
        'name' => '',
        'type' => 'tab',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'placement' => 'top',
        'endpoint' => 0,
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'page',
          'operator' => '==',
          'value' => '37',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
  ));
  
  endif;
add_action('acf/init', 'acf_add_local_field_group');
  

?>