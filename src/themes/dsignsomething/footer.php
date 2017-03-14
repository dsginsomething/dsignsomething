<?php wp_footer(); ?>
        <div class="footer">
            <div class="ui tertiary inverted vertical footer segment">
                <div class="ui container">
                    <div class="ui grid text">
                        <div class="two wide column">
                        </div>
                        <div class="twelve wide column">
                            <?php 
                                wp_nav_menu( array(
                                    'menu' => 'main-menu',
                                    'container_class' => 'ui text menu top-menu',
                                    'menu_class' => 'item',
                                    'items_wrap' => '%3$s',
                                    'walker' => new Dsignsomething_Walker_Main_Menu()
                                )); 
                            ?>
                        </div>
                        <div class="two wide column">
                        </div>
                    </div>
                </div>
            </div>
            <div class="ui inverted vertical footer segment">
                <div class="ui container">
                    <div class="ui grid text">
                        <div class="eight wide column">
                        © 2016 DSIGNSOMETHING
                        </div>
                        <div class="eight wide column right aligned">
                            <div class="ui horizontal divided list">
                                <div class="item">
                                E-NEWS LETTER
                                </div>
                                <div class="item">
                                ABOUT US
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>