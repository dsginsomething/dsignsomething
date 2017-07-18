<?php
if( $dsignsomething_is_single_right ) :
?>
<div class="card right">
	<div class="image">
		<?php
		if( has_post_thumbnail() ) :
			dsignsomething_image(get_the_post_thumbnail_url(null), "200px");
		else :
			dsignsomething_image(get_template_directory_uri()."/images/thumbnail-white.png", "200px");
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
			<?php
				$categoryName = get_the_category()[0]->name;
				$tags = get_the_tags();
				if(is_array($tags)){
					if($categoryName == "dwell"){
						foreach ( $tags as $tag ) {
							$tagname = $tag->name;
							if( $tagname == "international" || $tagname == "Thai"){
								echo "<div class=\"item\">".$tagname.'</div>';
							}
						}
					}
					if($categoryName == "dview"){
						$colors = array("red", "green", "blue", "yellow", "pink", "orange", "black", "white", "grey");
						echo "<div class=\"item\">";
						foreach ( $tags as $tag ) {
							$tagname = $tag->name;
							if(in_array($tagname, $colors)){
								echo "<a class=\"ui empty circular label ".$tagname." \"></a>";
							}
						}
						echo "</div>";
					}
				}
			?>
		</div>
		
		<?php 
			the_title( sprintf( '<a class="header" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' );
			if( $dsignsomething_is_single ) : the_content("<div></div>"); endif;
		?>
	</div>
</div>
<div class="ui divider"></div>
<?php
else :
?>
<div class="card">
	<div class="image">
		<?php
		if( has_post_thumbnail() ) :
			dsignsomething_image(get_the_post_thumbnail_url(null), $dsignsomething_image_height ?: "300px");
		else :
			dsignsomething_image(get_template_directory_uri()."/images/thumbnail-white.png", $dsignsomething_image_height ?: "300px");
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
			<?php
				$categoryName = get_the_category()[0]->name;
				$tags = get_the_tags();
				if(is_array($tags)){
					if($categoryName == "dwell"){
						foreach ( $tags as $tag ) {
							$tagname = $tag->name;
							if( $tagname == "international" || $tagname == "Thai"){
								echo "<div class=\"item\">".$tagname.'</div>';
							}
						}
					}
					if($categoryName == "dview"){
						$colors = array("red", "green", "blue", "yellow", "pink", "orange", "black", "white", "grey");
						echo "<div class=\"item\">";
						foreach ( $tags as $tag ) {
							$tagname = $tag->name;
							if(in_array($tagname, $colors)){
								echo "<a class=\"ui empty circular label ".$tagname." \"></a>";
							}
						}
						echo "</div>";
					}
				}
			?>
		</div>
		<?php 
			the_title( sprintf( '<a class="header" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' );
			if( $dsignsomething_is_single ) : the_content("<div></div>"); endif;
		?>
	</div>
</div>
<div class="ui divider"></div>
<?php 
endif;
?>