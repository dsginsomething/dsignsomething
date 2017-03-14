<?php 
    /*
    Template Name: PageDwell
    */
    get_header(); 
?>
    <div class="ui basic segment">
        <div class="ui container">
            <div class="ui grid">
                <div class="eleven wide column">
                    <div class="ui grid">
                        <div class="sixteen wide column">
                            <h1 class="ui header dividing spotlight">D<span class="disabled">WELL</span></h1>
                        </div>
                        <div class="sixteen wide column">
                            <?php get_template_part('custom-search/dwell', 'search'); ?>
                        </div>
                    </div>
                    <div class="ui stackable grid">
                        <?php
                            $tag = ($_GET["tag"] == "all") ? "" : $_GET["tag"] ;
                            $wp_query = new WP_Query(array(
                                'category_name' => 'dwell',
                                'tag' => $tag
                            ));
                            $is_show = false;
                            while ( $wp_query->have_posts() ) : $wp_query->the_post();
                                $i++;
                                if ($i == 3) {
                                    $is_show = true;
                                    echo "<div class=\"row\">";
                                    echo "<div class=\"ui three column grid\">";
                                }
                                switch($i) {
                                    case 1:
                                        $dsignsomething_is_single = true;
                                        $dsignsomething_is_single_right = false;
                                        $dsignsomething_image_height = "450px";
                                        include(locate_template('content-list.single.php', false, false));
                                        $dsignsomething_image_height = null;
                                    break;
                                    case 2:
                                        $dsignsomething_is_single = true;
                                        $dsignsomething_is_single_right = true;
                                        include(locate_template('content-list.single.php', false, false));
                                    break;
                                    default:
                                        $dsignsomething_is_single = false;
                                        $dsignsomething_is_single_right = false;
                                        include(locate_template('content-list.triple.php', false, false));
                                    break;
                                }
                            endwhile;
                            if ($is_show) :
                                echo "</div>";
                                echo "</div>";
                            endif;

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