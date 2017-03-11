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
                    <div class="ui stackable grid">
                        <?php
                            $i = 0;
                            $is_show_equal = false;
                            $dsignsomething_is_single = false;
                            while ( have_posts() ) : the_post();
                                $i++;
                                if ( $i == 3 || $i == 7 ) :
                                    $is_show_equal = true;
                                    echo "<div class=\"equal width row\">";
                                endif;
                                switch($i) {
                                    case 1:
                                    case 2:
                                        include(locate_template('content-list.double.php', false, false));
                                    break;
                                    case 3:
                                    case 4:
                                    case 7:
                                    case 8:
                                        $dsignsomething_is_single = false;
                                        include(locate_template('content-list.triple.php', false, false));
                                    break;
                                    case 9:
                                    case 5:
                                        include(locate_template('content-list.triple.php', false, false));
                                        if ( $is_show_equal ) :
                                            $is_show_equal = false;
                                            echo "</div>";
                                        endif;
                                    break;
                                    default:
                                        $dsignsomething_is_single = true;
                                        include(locate_template('content-list.single.php', false, false));
                                    break;
                                }
                            endwhile;
                            if ( $is_show_equal ) :
                                $is_show_equal = false;
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