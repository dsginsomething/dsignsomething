<div class="row">
  <form role="search" action="<?php echo site_url('/'); ?>" method="get" id="searchform" class="#searchform ui form">
    <div class="fields">
      <div class="two wide field">
        <div class="buttons">
          <button type="submit" name="tag" value="" class="ui circular button massive grey"></button>
        </div>
      </div>
      <div class="fourteen wide field">
        <div class="owl-carousel owl-theme">
          <?php
            $x = 1;
            $color = array("red", "blue", "yellow", "green", "pink", "orange", "brown", "black", "grey", "teal", "violet", "olive", "red", "blue", "yellow", "green", "pink", "orange", "brown", "black", "grey", "teal", "violet", "olive"); 
            while($x <= sizeof($color)) {
                echo "<div class=\"item\"><button type=\"submit\" name=\"tag\" value=\"".$color[$x]."\" class=\"ui circular icon button massive ".$color[$x]."\"></button></div>";
                $x++;
            } 
          ?>
        </div>
      </div>
    </div>
  </form> 
</div>
