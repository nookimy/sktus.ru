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
<body class="bluebg commercial inside">
<!-- NT (noscript)-->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WN58XJ5"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End NT (noscript) -->
  <insert name="show_block" module="tagmanager" position="body_start">
  <insert name="show_form" module="feedback" id="6" template="requestcall">
  <a class="header-logo" href="<insert name="path">" title="Микрорайон Университет"></a>
  <insert name="show_include" file="badges_commercial">
      <menu>
          <insert name="show_block" module="menu" id="1" tag_start_1="[div class=`menutop`]" tag_start_2="" tag_level_start_2="[div class=`submenu`]" tag_level_end_2="[/div]" tag_end_after_children_1="[/div]" tag_end_after_children_2="">
      </menu>
  <main>
    <a href="#" class="backbutton"></a>
    <div class="poz4-commercial-wrap">
      <div class="compass-big compass-poz4-commercial">
        <img src="/custom/sktus/img/compass-big.png">
      </div>
      <img src="/custom/sktus/img/poz4/commercial/map.png" class="areaimg" usemap="#areamap" />
      <div class="pantryinfo">
        <p class="pantryinfo-amount">Помещений в продаже: <span></span></p>
        <p class="pantryinfo-amount">Помещения проданы</p>
      </div>
      <div class="area-hovers">
        <img data-src="/custom/sktus/img/poz4/commercial/section-a.png" />
        <img data-src="/custom/sktus/img/poz4/commercial/section-b.png" />
        <img data-src="/custom/sktus/img/poz4/commercial/section-v.png" />
        <img data-src="/custom/sktus/img/poz4/commercial/section-g.png" />
      </div>
      <map name="areamap">
        <area shape="poly" coords="2,268,195,458,237,497,335,320,338,298,288,196,228,127,157,118,130,123,87,132,49,155,11,193" class="area-pantryinfo" data-poz="3" data-section="А"  data-amount="0" data-marginleft="133" data-margintop="220" href="/doma/pozitsiya-4---kommercheskie-ploschadi/sektsiya-a/"/>
        <area shape="poly" coords="228,510,348,298,455,283,541,311,601,364,607,387,611,590,548,600,508,603,424,585,319,559" class="area-pantryinfo" data-poz="4" data-section="Б"  data-amount="0" data-marginleft="400" data-margintop="400" href="/doma/pozitsiya-4---kommercheskie-ploschadi/sektsiya-b/"/>
        <area shape="poly" coords="603,363,602,614,678,613,992,505,877,310,859,291,743,287,654,304" class="area-pantryinfo" data-poz="4" data-section="В"  data-amount="0" data-marginleft="720" data-margintop="400" href="/doma/pozitsiya-4---kommercheskie-ploschadi/sektsiya-v/"/>
        <area shape="poly" coords="865,290,980,481,993,475,1200,240,1194,168,1071,102,1041,95,970,125,902,186" class="area-pantryinfo" data-poz="4" data-section="Г"  data-amount="0" data-marginleft="980" data-margintop="220" href="/doma/pozitsiya-4---kommercheskie-ploschadi/sektsiya-g/"/>
      </map>
    </div>
    <div class="garage-caption">
      <p class="dominfo-block-caption"><strong>Позиция №4 | Миначева, д.25</strong></p>
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
