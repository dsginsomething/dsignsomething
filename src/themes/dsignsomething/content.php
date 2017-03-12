<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="ui basic segment">
		<div class="ui container">
			<div class="ui stackable grid single content">
				<div class="row">
					<div class="sixteen wide column">
						<div class="ui inverted vertical masthead center aligned segment" style="background: url(<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url(null) : default_thumbnail() ; ?>) #dadada no-repeat center; background-size: cover; height: 30rem;">
							<div class="ui text container" style="padding-top: 8rem; font-size: 150%;">
								<h1 class="ui inverted header"><?php the_title(); ?></h1>
								<div class="ui divider inverted"></div>
								<h1 class="ui header inverted lightHeaderThai"><?php the_title(); ?></h1>
								<button class="ui inverted button large">
									<i class="ui icon camera retro"></i>VIEW ALL 23 PHOTOS
								</button>
							</div>
						</div>
						<div class="box">
							<div class="title english"><?php the_title(); ?>dddddddddddddddddddddddddd</div>
							<div class="title thai"><?php the_title(); ?></div>
							<div class="ui horizontal divided list meta">
								<div class="item">
									<?php echo strtoupper(get_post_time('M Y, d', true)); ?>
								</div>
								<div class="item">
									<?php echo strtoupper(get_the_category()[0]->name); ?>
								</div>
							</div>
							<div class="ui divider"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="ui grid content">
				<div class="eleven wide column subcontent">
					<?php the_content(); ?>
				</div>
				<?php dsignsomething_right_bar(); ?>
			</div>
		</div>
	</div>
</article><!-- #post-## -->