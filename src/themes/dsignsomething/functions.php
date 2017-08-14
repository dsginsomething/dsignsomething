<?php

function dsignsomething_scripts_styles() {
	// Add style.css
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	// Add semantic-ui style
	wp_enqueue_style( 'semantic', get_template_directory_uri() . '/custom-semantic/semantic.min.css' );

	// Load semantic-ui script
	wp_enqueue_script( 'semantic', get_template_directory_uri() . '/custom-semantic/semantic.min.js', array( 'jquery' ));

	wp_enqueue_style( 'owlcss', get_template_directory_uri().'/styles/owlcarousel/owl.carousel.min.css');
	
	wp_enqueue_style( 'owltheme', get_template_directory_uri().'/styles/owlcarousel/owl.theme.default.min.css');

	wp_enqueue_script( 'owljs', get_template_directory_uri().'/js/owlcarousel/owl.carousel.min.js', array( 'jquery' ));

	// Load init function
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ));

}

add_action( 'wp_enqueue_scripts', 'dsignsomething_scripts_styles' );

// Add Menu
function register_my_menu() {
  	register_nav_menus(array(
		'header-menu' => __( 'Main Menu' )
		// 'extra-menu' => __( 'Extra Menu' )
	));
}
add_action( 'init', 'register_my_menu' );

// Custom Image Component
function dsignsomething_image($url, $height) {
	echo sprintf("<div class='custom-image' style='min-height: %s;background-image: url(%s);'></div>", $height, $url);
}

// Get Image from media library
function get_images_from_media_library() {
	$img = array(
		'post_type' => 'attachment',
		// 'meta_key' => 'post_views_count',
    'orderby' => 'meta_value_num',
		'numberposts' => -1,
		'order'=> 'ASC',
    'date_query' => array(
			array(
				'after'  => '30 days ago'
			),
    )
	);
	$query_images = get_posts( $img );
	return $query_images;
}

// Get DMATERIAL Image from media library
function get_dmaterial_images() {
	$img = array(
		'post_type' => 'attachment',
		'tax_query' => array(
			array(
				'taxonomy' => 'category',
				'field'    => 'slug',
				'terms'    => 'dmaterial',
			),
		),
	);
	$query_images = get_posts( $img );
	return $query_images;
}


// Custom Content for Home Page
add_filter("the_content", "plugin_content_filter");

function plugin_content_filter($content)
{
	if ( is_single() ) :
		return $content;
	else :
		$text = mb_substr($content, 0, 200);
		$i = mb_strrpos($text, ' ');
		if ($i !== false)
				$text = mb_substr($text, 0, $i);
		return strip_tags($text);
	endif;
}

// Custom Logo Theme
$args = array(
	'height'        => 94,
	'uploads'       => true,
	'default-image' => get_template_directory_uri() . '/images/logo.jpg',
);
add_theme_support( 'custom-header', $args );

// Enable Gallery
add_theme_support( 'post-formats', array( 'gallery' ) );

// Enable Thumbnail
add_theme_support( 'post-thumbnails' );

// Custom Function
include(locate_template('/inc/custom-functions.php'));

include(locate_template('/inc/Dsignsomething_Walker_Main_Menu.php'));

// Create Nav Menu

dsignsomething_create_nav_menu();

// Clean UP html
add_filter('tiny_mce_before_init','configure_tinymce');

function configure_tinymce($in) {
  $in['paste_preprocess'] = "function(plugin, args){
    // Strip all HTML tags except those we have whitelisted
    var whitelist = 'p,span,b,strong,i,em,h3,h4,h5,h6,ul,li,ol';
    var stripped = jQuery('<div>' + args.content + '</div>');
    var els = stripped.find('*').not(whitelist);
    for (var i = els.length - 1; i >= 0; i--) {
      var e = els[i];
      jQuery(e).replaceWith(e.innerHTML);
    }
    // Strip all class and id attributes
    stripped.find('*').removeAttr('id').removeAttr('class');
    // Return the clean HTML
    args.content = stripped.html();
  }";
  return $in;
}

function wptp_add_categories_to_attachments() {
    register_taxonomy_for_object_type( 'category', 'attachment' );
}
add_action( 'init' , 'wptp_add_categories_to_attachments' );

// apply tags to attachments
function wptp_add_tags_to_attachments() {
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );
}
add_action( 'init' , 'wptp_add_tags_to_attachments' );

?>