<?php 
/*
Template Name: Search Page
*/
get_header(); 
?>
    <div class="ui basic segment">
        <div class="ui container">
            <div class="ui grid">
                <div class="eleven wide column">
                    <div class="ui grid">
                        <div class="sixteen wide column">
                            <h1 class="ui header dividing spotlight">RE<span class="disabled">SULT</span></h1>
                        </div>
                    </div>
                    <div class="ui stackable grid">
                        <?php
                            while ( have_posts() ) : the_post();
                                include(locate_template('content-list.single.php', false, false));
                            endwhile;

                            the_posts_pagination( array(
                                'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
                                'next_text'          => __( 'Next page', 'twentyfifteen' ),
                                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
                            ) );
                        ?>
                    </div>
                </div>
                <?php dsignsomething_right_bar(); ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>