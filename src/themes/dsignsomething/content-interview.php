<div class="item interview">
	<div class="content">
		<?php the_title( sprintf( '<a class="thai title" href="%s">', esc_url( get_permalink() ) ), '</a>' ); ?>
	</div>
	<?php 
	$url = get_the_post_thumbnail_url(null);
	echo sprintf("<div class='bg' style='background-image: url(%s);'></div>", $url);
	?>
	<a class="title eng" href="<?php echo get_permalink(); ?>">
		<?php the_secondary_title(); ?>
	</a>
</div>