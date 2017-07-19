<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="ui basic segment">
            <div class="ui container">
                <div class="ui grid">
                    <div class="row">
                        <div class="three wide column">
                            <a href="/" >
                                <img class="ui medium image" src="<?php header_image(); ?>" />
                            </a>
                        </div>
                        <div class="thirteen wide column middle aligned">
                            <div class="ui grid centered middle aligned internally">
                                <div class="row">
                                    <div class="five wide column right aligned">
                                        <div class="ui horizontal divided list">
                                            <div class="item">
                                                E-NEWS LETTER
                                            </div>
                                            <div class="ui vertical divider"></div>
                                            <div class="item">
                                                ABOUT US
                                            </div>
                                        </div>
                                    </div>
                                    <div class="three wide column">
                                        <button class="ui circular facebook icon button social">
                                            <i class="facebook f icon"></i>
                                        </button>
                                        <button class="ui circular icon button social">
                                            <i class="instagram icon"></i>
                                        </button>
                                    </div>
                                    <div class="four wide column">
                                        <?php get_search_form(); ?>
                                    </div>
                                    <div class="four wide column right aligned">
                                        <button class="ui basic button">
                                            SIGN IN
                                        </button>
                                    </div>
                                </div>
                                <div class="three wide column">
                                    <button class="ui circular facebook icon button social">
                                        <i class="facebook f icon"></i>
                                    </button>
                                    <button class="ui circular icon button social">
                                        <i class="instagram icon"></i>
                                    </button>
                                </div>
                                <div class="four wide column">
                                    <?php get_search_form(); ?>
                                </div>
                                <div class="four wide column right aligned">
                                    <a class="ui basic button" href="wp-login.php">
                                        SIGN IN
                                        <?php do_action('oa_social_login'); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php include(locate_template('most-famous.php', false, false)); ?>
                    </div>
                </div>
            </div>
        </div>