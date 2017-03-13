<div class="row">
  <form role="search" action="<?php echo site_url('/'); ?>" method="get" id="searchform" class="#searchform ui form">
    <div class="field">
      <div class="owl-carousel dsigner-carousel owl-theme">
        <?php
          $x = 0;
          $color = array( "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
          while($x <= sizeof($color) - 1) {
              echo "<div class=\"item ui buttons \"><button type=\"submit\" name=\"tag\" value=\"".$color[$x]."\" class=\"ui button basic \">".$color[$x]."</button></div>";
              $x++;
          }
        ?>
      </div>
    </div>
    <div class="field">
      <div class="ui fluid action input">
        <input name="tags" type="text" placeholder="Search..." />
        <button type="submit" alt="Search" value="Search" class="ui icon basic button">
          <i class="search icon"></i>
        </button>
      </div>
    </div>
  </form>
</div>
