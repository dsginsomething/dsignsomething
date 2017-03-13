<div class="row">
  <form role="search" action="<?php echo site_url('/'); ?>" method="get" id="searchform" class="#searchform ui form">
    <div class="fields">
      <div class="two wide field">
        <button type="submit" name="submit" value="" class="huge ui icon button circular grey">
          <span style="">ALL<i style="overflow: hidden;" class="ui icon at"></i></span>
        </button>
      </div>
      <div class="fourteen wide field">
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
