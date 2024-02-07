<?php
if (!defined("DIAFAN")) {
    include dirname(dirname(__FILE__)) . '/includes/404.php';
}
?><!DOCTYPE HTML>
<html>
<head>
<!-- NT -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WN58XJ5');</script>
<!-- End NT -->
  <insert name="show_block" module="tagmanager" position="head_start">
  <insert name="show_head">
  <meta name="viewport" content="width=1201">
  <link rel="icon" type="image/png" href="<insert name="custom" path="img/favicon.png" absolute="true">"/>
  <insert name="show_css" files="reset.css, style.css, print.css">
  <insert name="show_block" module="tagmanager" position="head_end">

</head>
<body class="bluebg pantry inside">
<!-- NT (noscript)-->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WN58XJ5"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End NT (noscript) -->
  <insert name="show_block" module="tagmanager" position="body_start">
  <insert name="show_form" module="feedback" id="6" template="requestcall">
  <a class="header-logo" href="<insert name="path">" title="Микрорайон Университет"></a>
  <insert name="show_include" file="badges">
      <menu>
          <insert name="show_block" module="menu" id="1" tag_start_1="[div class=`menutop`]" tag_start_2="" tag_level_start_2="[div class=`submenu`]" tag_level_end_2="[/div]" tag_end_after_children_1="[/div]" tag_end_after_children_2="">
      </menu>
  <main>
    <a href="#" class="backbutton"></a>
    <div class="poz25-pantry-wrap">
      <img src="/custom/sktus/img/poz25/pantry/map.png" class="areaimg" usemap="#areamap" />
      <div class="pantryinfo">
        <p class="pantryinfo-amount">Помещений в продаже: <span></span></p>
      </div>
      <div class="area-hovers">
        <img data-src="/custom/sktus/img/poz25/pantry/sections-a.png" />
        <img data-src="/custom/sktus/img/poz25/pantry/sections-b.png" />
        <img data-src="/custom/sktus/img/poz25/pantry/sections-v.png" />
        <img data-src="/custom/sktus/img/poz25/pantry/sections-g.png" />
        <img data-src="/custom/sktus/img/poz25/pantry/sections-d.png" />
      </div>
      <map name="areamap">
        <area
          shape="poly"
          coords="110,209,164,154,158,145,168,135,173,140,190,126,213,145,223,140,334,250,326,261,358,292,276,372,262,359,254,371,146,258,152,248"
          class="area-pantryinfo"
          data-poz="25"
          data-section="А"
          data-amount="29"
          data-marginleft="195"
          data-margintop="218"
          href="/pozitsiya-25---kladovye-pomescheniya/sektsiya-a/"/>
        <area
          shape="poly"
          coords="357,293,375,306,383,298,497,410,488,421,518,454,437,537,422,522,415,531,305,420,314,414,275,374"
          class="area-pantryinfo"
          data-poz="25"
          data-section="Б"
          data-amount="16"
          data-marginleft="357"
          data-margintop="369"
          href="/pozitsiya-25---kladovye-pomescheniya/sektsiya-b/"/>
        <area
          shape="poly"
          coords="437,534,519,454,669,455,691,432,773,514,736,551,744,561,734,567,746,579,716,605,488,605,461,577,466,565"
          class="area-pantryinfo"
          data-poz="25"
          data-section="В"
          data-amount="34"
          data-marginleft="557"
          data-margintop="498"
          href="/pozitsiya-25---kladovye-pomescheniya/sektsiya-v/"/>
        <area
          shape="poly"
          coords="682,423,754,347,747,335,758,326,769,337,781,324,790,337,824,304,902,384,881,410,886,419,828,478,822,465,775,512"
          class="area-pantryinfo"
          data-poz="25"
          data-section="Г"
          data-amount="7"
          data-marginleft="761"
          data-margintop="375"
          href="/pozitsiya-25---kladovye-pomescheniya/sektsiya-g/"/>
        <area
          shape="poly"
          coords="808,295,880,218,868,205,879,191,897,209,921,187,928,196,951,172,970,187,977,183,986,192,978,196,1035,252,1010,278,1015,287,958,350,951,339,903,387"
          class="area-pantryinfo"
          data-poz="25"
          data-section="Д"
          data-amount="12"
          data-marginleft="896"
          data-margintop="252"
          href="/pozitsiya-25---kladovye-pomescheniya/sektsiya-d/"/>
      </map>
    </div>
    <div class="garage-caption">
      <p class="dominfo-block-caption"><strong>Позиция №25</strong></p>
      <p class="dominfo-block-selectfloor">Выберите секцию</p>
    </div>
    <div class="garage-details">
      <p class="garage-details-section">СЕКЦИЯ <span></span></p>
      <p class="pantry-details-amount">Помещений в продаже: <span></span></p>
    </div>
  </main>
  <footer>
    <insert name="show_include" file="footer">
  </footer>
  <insert name="show_js">
  <insert name="show_custom_compressed_js" files="main.js, pantry.js">
  <insert name="show_include" file="counters">
  <insert name="show_block" module="tagmanager" position="body_end">
</body>
</html>
