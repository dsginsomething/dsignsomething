<!--<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="card">-->
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
		<?php 
			the_title( sprintf( '<a class="header" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' );
			if( $dsignsomething_is_single ) : the_content("<div></div>"); endif;
		?>
	</div>
	<div class="ui divider"></div>
</div>
<!--</article>-->