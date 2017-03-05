<?php

function dsignsomething_scripts_styles() {
    // Add style.css
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    // Add semantic-ui style
    wp_enqueue_style( 'semantic', get_template_directory_uri() . '/custom-semantic/semantic.min.css' );

    // Load semantic-ui script
    wp_enqueue_script( 'semantic', get_template_directory_uri() . '/custom-semantic/semantic.min.js', array( 'jquery' ));
}

add_action( 'wp_enqueue_scripts', 'dsignsomething_scripts_styles' );


// Custom Logo Theme
$args = array(
	'height'        => 94,
    'uploads'       => true,
	'default-image' => get_template_directory_uri() . '/images/logo.jpg',
);
add_theme_support( 'custom-header', $args );

?>