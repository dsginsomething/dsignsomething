<div class="row">
  <form role="search" action="./" method="get" id="searchform" class="#searchform ui form">
    <div class="fields">
      <div class="one wide field">
        <button type="submit" name="tag" value="" class="ui button basic" style="padding-left: 0.4rem !important; padding-right: 0.4rem !important;">ALL</button>
      </div>
      <div class="thirteen wide field">
        <div class="owl-carousel dsigner-carousel owl-theme">
          <?php
            $lang = $_GET["lang"];
            $tag = $_GET["keyword"];
            $x = 0;
            $filterEN = array( "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
            $filterTH = array( "ก" ,"ข","ฃ","ค","ฅ","ฆ","ง","จ","ฉ","ช","ซ","ฌ","ญ","ฎ","ฏ","ฐ","ฑ","ฒ","ณ","ด","ต","ถ","ท","ธ","น","บ","ป","ผ","ฝ","พ","ฟ","ภ","ม","ย","ร","ฤ","ล","ฦ","ว","ศ","ษ","ส","ห","ฬ","อ","ฮ");
            if($lang == "TH" || in_array($tag, $filterTH )){
              $filterEN = $filterTH;
            }
            while($x <= sizeof($filterEN) - 1) {
              echo "<div class=\"item\" style='' ><button type=\"submit\" name=\"keyword\" value=\"".$filterEN[$x]."\" class='ui button inverted'><span style='color: grey !important;'>".$filterEN[$x]."</span></button></div>";
              $x++;
            }
          ?>
        </div>
      </div>
      <div class="two wide field">
        <div class="ui basic fluid buttons">
          <button type="submit" name="lang" value="EN" class="ui left attached button" style="padding-left: 0.4rem !important; padding-right: 0.4rem !important;">EN</button>
          <button type="submit" name="lang" value="TH" class="ui right attached button" style="padding-left: 0.4rem !important; padding-right: 0.4rem !important;">TH</button>
          <?php
            $lang = $_GET["lang"];
            if($lang == "TH" || $lang == "EN")
              //echo "<input type=\"hidden\" name=\"lang\" value=\"".$lang."\"  >"
          ?>
        </div>
      </div>
    </div>
  </form>
  <form role="search" action="./" method="get" id="searchform" class="#searchform ui form">
    <div class="fields">
      <div class="sixteen wide field">
        <div class="ui fluid action input">
          <input name="keyword" type="text" placeholder="Search..." />
          <button type="submit" alt="Search" value="Search" class="ui icon basic button">
            <i class="search icon"></i>
          </button>
        </div>
      </div>
    </div>
  </form>
</div>
