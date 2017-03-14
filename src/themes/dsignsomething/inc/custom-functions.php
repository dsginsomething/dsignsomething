<?php
function dsignsomething_right_bar() {
?>
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
<?php
}

function default_thumbnail() {
    return get_template_directory_uri()."/images/default-thumbnail.jpg";
}

function dsignsomething_create_nav_menu() {
    $menu_name = 'Main Menu';
    $menu_exists = wp_get_nav_menu_object( $menu_name );

    if( !$menu_exists ){
        $menu_id = wp_create_nav_menu($menu_name, array( 'slug' => 'main-menu' ));

        wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' =>  __('HOME'),
            'menu-item-classes' => 'home',
            'menu-item-url' => home_url( '/' ),
            'menu-item-status' => 'publish'));

        wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' =>  __('DSIGNER DIRECTORY'),
            'menu-item-url' => home_url( '/dsigner/' ),
            'menu-item-status' => 'publish'));

        wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' =>  __('DTALK'),
            'menu-item-url' => home_url( '/dtalk/' ),
            'menu-item-status' => 'publish'));

        wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' =>  __('DWELL'),
            'menu-item-url' => home_url( '/dwell/' ),
            'menu-item-status' => 'publish'));

        wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' =>  __('DVIEW'),
            'menu-item-url' => home_url( '/dview/' ),
            'menu-item-status' => 'publish'));

        wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' =>  __('SOMETHINGS NEWS'),
            'menu-item-url' => home_url( '/somethings/' ),
            'menu-item-status' => 'publish'));

        wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' =>  __('LET\'S SAY'),
            'menu-item-url' => home_url( '/lets/' ),
            'menu-item-status' => 'publish'));

        wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' =>  __('Q&A'),
            'menu-item-url' => home_url( '/qa/' ),
            'menu-item-status' => 'publish'));

    }
}

function custom_comments( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;
    switch( $comment->comment_type ) :
        case 'pingback' :
        case 'trackback' : ?>
            <li <?php comment_class(); ?> id="comment<?php comment_ID(); ?>">
            <div class="back-link">< ?php comment_author_link(); ?></div>
        <?php break;
        default : ?>
        <div class="comment" <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
          <a class="avatar">
            <?php echo get_avatar( $comment, 100 ); ?>
          </a>
          <div class="content">
            <a class="author"><?php comment_author(); ?></a>
            <div class="text">
              <?php comment_text(); ?>
            </div>
            <div class="actions">
              <a class="reply">Reply</a>
              <span class="date"><?php comment_date(); ?> <?php comment_time(); ?></span>
            </div>
          </div>
        </div>
        <?php // End the default styling of comment
        break;
    endswitch;
}

?>
