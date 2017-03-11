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


// Custom Logo Theme
$args = array(
	'height'        => 94,
    'uploads'       => true,
	'default-image' => get_template_directory_uri() . '/images/logo.jpg',
);
add_theme_support( 'custom-header', $args );


if ( ! function_exists( 'twentyfifteen_post_thumbnail' ) ) :
function twentyfifteen_post_thumbnail() {
	if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
		return;
	}

	if ( is_singular() ) :
	?>

	<div class="post-thumbnail">
		<?php the_post_thumbnail(); ?>
	</div><!-- .post-thumbnail -->

	<?php else : ?>

	<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
		<?php
			the_post_thumbnail( 'post-thumbnail', array( 'alt' => get_the_title() ) );
		?>
	</a>

	<?php endif; // End is_singular()
}
endif;
?>