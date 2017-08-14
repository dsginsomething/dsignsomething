<?php get_header(); ?>

<div class="ui basic segment">
  <div class="ui container homepage-relative">
    <div class="homepage-owl owl-carousel owl-theme">
    <?php
      while ( have_posts() ) : the_post();
        if( has_post_thumbnail() ) :
          include(locate_template('content-hilight.php', false, false));
        endif;
      endwhile;
    ?>
    </div>
    <div class="homepage-control">
      <div class="next">
        <i class="grey huge angle right icon"></i>
      </div>
      <div class="prev">
        <i class="grey huge angle left icon"></i>
      </div>
    </div>
  </div>
</div>
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
                      $new_post = new WP_Query(array(
                        'posts_per_page' => 10,
                      ));
                      while ( $new_post->have_posts() ) : $new_post->the_post();
                        $i++;
                        if ( $i == 3 || $i == 7 ) :
                          $is_show_equal = true;
                          echo "<div class=\"equal width row\">";
                        endif;
                        //adsvert
                        if($i == 6) :
                          if(function_exists('the_ad_placement')) :
                          echo "<div class=\"ui top banner test ad\" data-text=\"Banner\">";
                            the_ad_placement('homepage');
                          echo "</div>";
                          endif;
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
                      wp_reset_postdata();
                  ?>
              </div>
              <div class="ui grid center aligned">
                <div class="row">
                  <div class="column">
                    <a href="/all" class="ui basic button viewAllBtn">VIEW ALL</a>
                  </div>
                </div>
              </div>
          </div>
          <?php dsignsomething_right_bar(); ?>
      </div>
  </div>
</div>
<?php get_footer(); ?>