<div class="row">
  <form role="search" action="<?php echo get_permalink(); ?>" method="get" id="searchform" class="#searchform ui form">
    <div class="fields">
      <div class="field">
        <button type="submit" name="tags" value="all" class="huge ui icon button circular custom grey">
          <span class="all">ALL</span><i class="ui icon empty"></i>
        </button>
      </div>
      <div class="field" style="width: 100%;padding-right: 4rem;">
        <div class="owl-carousel dview-carousel owl-theme">
          <?php
            $x = 1;
            $color = array("red", "blue", "yellow", "green", "pink", "orange", "brown", "black", "grey", "teal", "violet", "olive", "red", "blue", "yellow", "green", "pink", "orange", "brown", "black", "grey", "teal", "violet", "olive");
            while($x <= sizeof($color)) {
                echo "<div class=\"item\"><button type=\"submit\" name=\"tag\" value=\"".$color[$x]."\" class=\"ui circular icon button huge ".$color[$x]."\"><i class=\"ui icon emtry\"></i></button></div>";
                $x++;
            }
          ?>
        </div>
      </div>
    </div>
  </form>
</div>
