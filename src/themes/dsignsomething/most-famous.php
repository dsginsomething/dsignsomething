<div class="two wide column most famous">
  <h2 class="ui header">MOST FAMOUS</h2>
  <div class="line"></div>
</div>
<div class="fourteen wide column homepage-relative">
  <div class="images most-famous owl-carousel owl-theme">
    <?php
      $most_famous_posts = get_images_from_media_library();
      foreach($most_famous_posts as $post) {
        echo '<a class="item" href="'.get_permalink($post).'" alt=""><div style="background-image: url(' . $post->guid . ');"></div></a>';
      }
    ?>
  </div>
  <div class="most-famous-control">
    <div class="next">
      <i class="grey huge angle right icon"></i>
    </div>
    <div class="prev">
      <i class="grey huge angle left icon"></i>
    </div>
  </div>
</div>