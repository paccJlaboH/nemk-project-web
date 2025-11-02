<?php



function mexa_scripts() {

    wp_enqueue_style( 'mexa-style', get_stylesheet_uri(), array(), '1.0' );

  
    wp_enqueue_style( 'mexa-main-css', get_template_directory_uri() . '/assets/css/main.css', array(), '1.1' );

    wp_enqueue_script( 'mexa-main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true );

}

add_action( 'wp_enqueue_scripts', 'mexa_scripts' );



function mexa_theme_support() {
    
  
    add_theme_support( 'title-tag' );

    
    add_theme_support( 'post-thumbnails' );

   
    add_theme_support( 'custom-logo', array(
        'height'      => 40, 
        'width'       => 160, 
        'flex-height' => true,
        'flex-width'  => true,
    ) );
    
   
    add_theme_support( 'post-formats', array( 
        'aside', 
        'gallery', 
        'link', 
        'image', 
        'quote', 
        'status', 
        'video', 
        'audio', 
        'chat' 
    ) );

   
    add_theme_support( 'html5', array( 
        'search-form', 
        'comment-form', 
        'comment-list', 
        'gallery', 
        'caption', 
    ) );
}

add_action( 'after_setup_theme', 'mexa_theme_support' );

function mexa_register_nav_menus() {
    register_nav_menus( array(
        'primary' => esc_html__( 'Головне меню', 'mexa' ),
        'footer'  => esc_html__( 'Меню у футері', 'mexa' ),
    ) );
}
add_action( 'init', 'mexa_register_nav_menus' );
?>