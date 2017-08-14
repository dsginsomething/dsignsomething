<div class="qa-section">
	<?php 
	$url = get_the_post_thumbnail_url(null);
	echo sprintf("<div class='bg' style='background-image: url(%s);'></div>", $url);
	?>
	<div class="content">
		<?php the_title( sprintf( '<a class="title" href="%s">', esc_url( get_permalink() ) ), '</a>' ); ?>
	</div>
</div>