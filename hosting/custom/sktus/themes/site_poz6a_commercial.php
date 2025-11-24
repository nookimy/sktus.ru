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
    <div class="poz6a-commercial-wrap">
      <!--<div class="compass-big compass-poz5-commercial">
        <img src="/custom/sktus/img/compass-big.png">
      </div>-->
      <img src="/custom/sktus/img/poz6a/commercial/map.png" class="areaimg" usemap="#areamap" />
      <div class="pantryinfo">
        <p class="pantryinfo-amount">Помещений в продаже: <span></span></p>
      </div>
      <div class="area-hovers">
        <img data-src="/custom/sktus/img/poz6a/commercial/section-AB.png" />
        <img data-src="/custom/sktus/img/poz6a/commercial/section-V.png" />
        <img data-src="/custom/sktus/img/poz6a/commercial/section-G.png" />
      </div>
      <map name="areamap">
        <area shape="poly" coords="125,175,520,176,520,205,508,204,508,367,158,370,157,235,149,235,149,200,124,203" class="area-pantryinfo" data-poz="6a" data-section="А-Б"  data-amount="4" data-marginleft="297" data-margintop="227" href="/doma/pozitsiya-6a---kommercheskie-ploschadi/sektsiya-ab/"/>
        <area shape="poly" coords="505,366,505,177,696,177,696,200,707,198,732,212,673,350,559,350,558,367" class="area-pantryinfo" data-poz="6a" data-section="В"  data-amount="2" data-marginleft="563" data-margintop="227" href="/doma/pozitsiya-6a---kommercheskie-ploschadi/sektsiya-v/"/>
        <area shape="poly" coords="736,197,922,286,925,275,964,296,898,441,839,412,830,430,668,348" class="area-pantryinfo" data-poz="6a" data-section="Г"  data-amount="2" data-marginleft="751" data-margintop="264" href="/doma/pozitsiya-6a---kommercheskie-ploschadi/sektsiya-g/"/>
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
