<?php get_header(); ?>
    <div class="ui basic segment">
        <div class="ui container">
            <div class="ui grid">
                <div class="eleven wide column">
                    <div class="ui grid right aligned">
                        <div class="fourteen wide column">
                            <div class="ui grid">
                                <div class="four wide column">
                                    <h1 class="ui header spotlight">SPOT</h1>
                                </div>
                                <div class="six wide column left aligned">
                                    <h1 class="ui header disabled spotlight">LIGHT</h1>
                                </div>
                                <div class="six wide column bottom aligned">
                                    <h1 class="ui header disabled"><?php echo strtoupper(date("M Y")) ?></h1>
                                </div>
                            </div>
                            <div class="ui divider"></div>
                        </div>
                        <div class="two wide column">
                            <h1 class="ui header disabled spotlight"><?php echo strtoupper(date("d")) ?></h1>
                            <div class="ui divider underline"></div>
                        </div>
                    </div>
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main" role="main">
                        <?php
                            while ( have_posts() ) : the_post();
                                get_template_part( 'content', get_post_format() );
                            endwhile;

                            the_posts_pagination( array(
                                'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
                                'next_text'          => __( 'Next page', 'twentyfifteen' ),
                                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
                            ) );
                        ?>
                        </main>
                    </div>
                </div>
                <div class="five wide column">
                    <div class="ui grid centered aligned">
                        <div class="row">
                            <div class="column">
                                <div class="ui vertical rectangle test ad" data-text="Advertisement" style="width: 100%; height: 700px; margin-bottom: 20px;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <div class="ui embed" data-source="youtube" data-id="LvnyB2lE2sI" data-placeholder="<?php echo get_template_directory_uri() . '/images/placeholder_youtube.jpg' ?>"></div>
                            <h2 class="ui header lightHeader">เรือนหอรอรัก STYLE LOFT</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>