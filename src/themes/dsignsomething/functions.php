<?php

function dsignsomething_scripts_styles() {
    // Add style.css
    wp_enqueue_style( 'style', get_stylesheet_uri() );

	// Load init function
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ));

    // Add semantic-ui style
    wp_enqueue_style( 'semantic', get_template_directory_uri() . '/custom-semantic/semantic.min.css' );

    // Load semantic-ui script
    wp_enqueue_script( 'semantic', get_template_directory_uri() . '/custom-semantic/semantic.min.js', array( 'jquery' ));

	wp_enqueue_style( 'owlcss', get_template_directory_uri().'/styles/owlcarousel/owl.carousel.min.css');
	
	wp_enqueue_style( 'owltheme', get_template_directory_uri().'/styles/owlcarousel/owl.theme.default.min.css');

	wp_enqueue_script( 'owljs', get_template_directory_uri().'/js/owlcarousel/owl.carousel.min.js', array( 'jquery' ));
	
}

add_action( 'wp_enqueue_scripts', 'dsignsomething_scripts_styles' );

// Custom Image Component
function dsignsomething_image($url, $height) {
	echo sprintf("<div class='custom-image' style='height: %s px;background-image: url(%s);'></div>", $height, $url);
}

// Custom Content for Home Page
add_filter("the_content", "plugin_content_filter");

function plugin_content_filter($content)
{
	if ( is_single() ) :
		return $content;
	else :
		return substr($content, 0, 50);
	endif;
}

// Custom Logo Theme
$args = array(
	'height'        => 94,
    'uploads'       => true,
	'default-image' => get_template_directory_uri() . '/images/logo.jpg',
);
add_theme_support( 'custom-header', $args );

// Enable Thumbnail
add_theme_support( 'post-thumbnails' );

// Custom Function
include(locate_template('/inc/custom-functions.php'));

?>