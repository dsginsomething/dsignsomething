<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="card">
		<div class="image">
			<?php
			if( has_post_thumbnail() ) :
				dsignsomething_image(get_the_post_thumbnail_url(null), 300);
			else :
				dsignsomething_image(get_template_directory_uri()."/images/thumbnail-white.png", 300);
			endif;
			?>
		</div>
		<div class="content">
			<div class="meta">
				<div class="ui horizontal divided list">
					<div class="item">
						<?php echo strtoupper(get_post_time('M Y, d', true)); ?>
					</div>
					<div class="item">
						<?php echo get_the_category()[0]->name; ?>
					</div>
				</div>
			</div>
			<header class="entry-header">
				<?php
				the_title( sprintf( '<h2 class="entry-title"><a class="header" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
				?>
			</header>
			<?php the_content("", true); ?>
		</div>
		<div class="ui divider"></div>
	</div>
</article><!-- #post-## -->
