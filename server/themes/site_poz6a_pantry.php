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
    <div class="poz6a-pantry-wrap">
      <img src="/custom/sktus/img/poz6a/pantry/map.png" class="areaimg" usemap="#areamap" />
      <div class="pantryinfo">
        <p class="pantryinfo-amount">Помещений в продаже: <span></span></p>
      </div>
      <div class="area-hovers">
        <img data-src="/custom/sktus/img/poz6a/pantry/sections-6a-A.png" />
        <img data-src="/custom/sktus/img/poz6a/pantry/sections-6a-B.png" />
        <img data-src="/custom/sktus/img/poz6a/pantry/sections-6a-V.png" />
        <img data-src="/custom/sktus/img/poz6a/pantry/sections-6a-G.png" />
      </div>
      <map name="areamap">
        <area
          shape="poly"
          coords="49, 151, 113, 151, 113, 199, 218, 199, 218, 183, 298, 184, 299, 364, 269, 363, 269, 381, 107, 380, 106, 364, 67, 364, 68, 247, 51, 248, 51, 203, 47, 203"
          class="area-pantryinfo"
          data-poz="6a"
          data-section="А"
          data-amount="17"
          data-marginleft="145"
          data-margintop="232"
          href="/pozitsiya-6a---kladovye-pomescheniya/sektsiya-a/"/>
        <area
          shape="poly"
          coords="301, 183, 495, 183, 494, 167, 556, 167, 557, 199, 534, 199, 534, 365, 500, 365, 500, 381, 338, 380, 337, 363, 301, 364"
          class="area-pantryinfo"
          data-poz="6a"
          data-section="Б"
          data-amount="23"
          data-marginleft="398"
          data-margintop="232"
          href="/pozitsiya-6a---kladovye-pomescheniya/sektsiya-b/"/>
        <area
          shape="poly"
          coords="559, 180, 624, 180, 624, 199, 686, 200, 685, 180, 731, 180, 730, 168, 796, 168, 796, 201, 774, 201, 774, 217, 806, 216, 815, 200, 837, 211, 768, 365, 736, 365, 736, 381, 574, 382, 577, 364, 537, 365, 537, 202, 559, 201"
          class="area-pantryinfo"
          data-poz="6a"
          data-section="В"
          data-amount="25"
          data-marginleft="611"
          data-margintop="232"
          href="/pozitsiya-6a---kladovye-pomescheniya/sektsiya-v/"/>
        <area
          shape="poly"
          coords="846, 195, 928, 235, 920, 252, 973, 278, 981, 261, 1100, 319, 1106, 304, 1160, 329, 1153, 349, 1136, 341, 1120, 375, 1134, 385, 1066, 527, 982, 485, 989, 468, 949, 449, 941, 464, 793, 395, 801, 380, 771, 367"
          class="area-pantryinfo"
          data-poz="6a"
          data-section="Г"
          data-amount="24"
          data-marginleft="875"
          data-margintop="294"
          href="/pozitsiya-6a---kladovye-pomescheniya/sektsiya-g/"/>
      </map>
    </div>
    <div class="garage-caption">
      <p class="dominfo-block-caption"><strong>Позиция №6a</strong></p>
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
