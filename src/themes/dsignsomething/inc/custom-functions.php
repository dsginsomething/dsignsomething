<?php
function dsignsomething_right_bar() {
?>
  <div class="five wide column">
    <div class="column">
      <div class="row">
        <div class="column">
          <!-- 
                <div class="ui vertical rectangle test ad" data-text="Advertisement" style="width: 100%; height: 700px; margin-bottom: 20px;"></div>
            -->
        <?php if(function_exists('the_ad_placement')) the_ad_placement('rightbar'); ?>
        </div>
      </div>
      <div class="row">
        <div class="column">
          <div class="ui embed" data-source="youtube" data-id="LvnyB2lE2sI" data-placeholder="<?php echo get_template_directory_uri() . '/images/placeholder_youtube.jpg' ?>"></div>
          <h2 class="ui header">เรือนหอรอรัก STYLE LOFT</h2>
          <div class="ui divider"></div>
        </div>
      </div>
      <div class="row">
        <div class="column">
          <div class="ui grid">
            <div class="row">
              <div class="nine wide column">
                <h1 class="ui header qa">Q<span class="disabled">&</span>A</h1>
              </div>
              <div class="seven wide column right aligned">
                <i class="big angle left icon"></i>
                <i class="big angle right icon"></i>
              </div>
            </div>
            <div class="row">
              <div class="column">
                <div class="ui image">
                  <img class="imgOneCloumn" src="https://source.unsplash.com/random/400x200" />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="column">
                <h3 class="ui header">Q&A : รีโนเวท หรือ สร้างใหม่ดี?</h3>
              </div>
            </div>
            <div class="ui divider"></div>
            <div class="row">
              <div class="column center aligned">
                <button class="ui basic button viewAllBtn">VIEW ALL</button>
              </div>
            </div>
          </div>
          <div class="ui grid">
            <div class="row">
              <div class="column interview-relative">
                <div class="hr-1"></div>
                <h1 class="ui header interview-header qa">INTERVIEW</h1>
                <div class="interview-owl owl-carousel owl-theme">
                  <?php dsignsomething_interview(); ?>
                </div>
                <div class="interview-control">
                  <div class="next">
                    <i class="grey huge angle right icon"></i>
                  </div>
                  <div class="prev">
                    <i class="grey huge angle left icon"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="ui grid aligned wantsomethingmore">
            <div class="row">
              <div class="sixteen wide column">
                <h1 class="ui header qa">WANT SOMETHING <span class="disabled">MORE?</span></h1>
                <div class="line"></div>
              </div>
            </div>
            <div class="row">
              <div class="column">
                <div class="ui large horizontal bulleted link list">
                  <?php
                    $tags = tag_groups_cloud( array( 'include' => '1', 'amount' => 10 ), true );
                    foreach ($tags[1]['tags'] as &$tag) {
                      echo '<a class="item" href="'.$tag['link'].'">'.$tag['slug'].'</a>';
                    }
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php
}

function dsignsomething_interview() {
  $wp_query = new WP_Query( array(
    'category_name' => 'interview',
    'posts_per_page' => 5
  ) );
  if($wp_query->have_posts()) :
    while($wp_query->have_posts()): $wp_query->the_post();
      include(locate_template('content-interview.php', false, false));
    endwhile;
  endif;
  wp_reset_postdata();
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

function dsignsomething_pagination ($pages = '', $range = 1) {
  global $wp_query;
  $total_pages = $wp_query->max_num_pages;
 
  if ($total_pages > 1){
    $current_page = max(1, get_query_var('paged'));

    $paginations = paginate_links(array(
      'base'              => get_pagenum_link(1) . '%_%',
      'format'            => 'page/%#%',
      'prev_text'         => __('PREV'),
	    'next_text'         => __('NEXT'),
      'type'              => 'array',
      'current'           => $current_page,
      'total'             => $total_pages,
    ));
    echo "<div class='ui large horizontal link divided list'>";
    foreach ($paginations as &$pagination) {
      if($pagination != strip_tags($pagination, '<span>')) {
        echo '<div class="item">';
        echo "<a href='".get_pagenum_link($pagination)."'>".$pagination."</a>";
        echo '</div>';
      } else {
        echo "<span class='active item'>".$pagination."</span>";
      }
    }
    echo "</div>";
  }
}

?>
