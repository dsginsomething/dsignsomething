<div class="highlight">
	<div class="content">
		<div class="title">
			<?php the_title( sprintf( '<a class="eng" href="%s">', esc_url( get_permalink() ) ), '</a>' ); ?>
			<div class="thai">
				<a class="eng" href="<?php echo get_permalink(); ?>">
					<?php the_secondary_title(); ?>
				</a>
			</div>
		</div>
		<div class="detail">
			<div class="date">
				<?php echo strtoupper(get_post_time('M Y, d', true)); ?>
			</div>
			<div class="category">
				<?php echo get_the_category()[0]->name; ?>
			</div>
			<div class="preword">
				<?php echo strip_shortcodes(wp_trim_words( get_the_content(), 80, null )); ?>
			</div>
		</div>
	</div>
	<?php 
	$url = get_the_post_thumbnail_url(null);
	echo sprintf("<div class='bg' style='background-image: url(%s);'></div>", $url);
	?>
</div>