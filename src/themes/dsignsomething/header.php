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
                                    <div class="ui small transparent icon input">
                                        <input type="text" placeholder="SEARCH" />
                                        <i class="search icon"></i>
                                    </div>
                                </div>
                                <div class="four wide column right aligned">
                                    <button class="ui basic button">
                                        SIGN IN
                                    </button>
                                </div>
                            </div>
                            <div class="ui divider r-margin"></div>
                            <div class="row">
                                <div class="ui text menu top-menu">
                                    <Link to={`/`} class="item">
                                        HOME
                                    </Link>
                                    <Link to={`/dsigner`} class="item">
                                        DSIGNER DIRECTORY
                                    </Link>
                                    <Link to={`/dtalk`} class="item">
                                        DTALK
                                    </Link>
                                    <Link to={`/dwell`} class="item">
                                        DWELL
                                    </Link>
                                    <Link to={`/dview`} class="item">
                                        DVIEW
                                    </Link>
                                    <Link to={`/somethings`} class="item">
                                        SOMETHINGS NEWS
                                    </Link>
                                    <Link to={`/lets`} class="item">
                                        LET'S SAY
                                    </Link>
                                    <Link to={`/qa`} class="item">
                                        Q&A
                                    </Link>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>