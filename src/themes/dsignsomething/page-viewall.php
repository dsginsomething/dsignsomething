<?php 
    /*
    Template Name: PageViewAll
    */
    get_header(); 
?>
<div class="ui basic segment">
  <div class="ui container">
    <div class="ui grid">
      <div class="eleven wide column">
        <div class="ui grid">
          <div class="sixteen wide column">
            <h1 class="ui header dividing spotlight">VIEW<span class="disabled">ALL</span></h1>
          </div>
        </div>
        <div class="ui stackable grid">
          <?php
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $wp_query = new WP_Query(array(
              'posts_per_page' => 2,
              'paged' => $paged
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
          ?>
        </div>
        <div class="ui stackable grid">
          <div class="right aligned sixteen wide column">
            <?php dsignsomething_pagination(); ?>
          </div>
        </div>
      </div>
      <?php dsignsomething_right_bar(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>