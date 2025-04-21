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
  <insert name="show_form" module="feedback" site_id="133" template="howmuch">
  <a class="header-logo" href="<insert name="path">" title="Микрорайон Университет"></a>
  <insert name="show_include" file="badges">
      <menu>
          <insert name="show_block" module="menu" id="1" tag_start_1="[div class=`menutop`]" tag_start_2="" tag_level_start_2="[div class=`submenu`]" tag_level_end_2="[/div]" tag_end_after_children_1="[/div]" tag_end_after_children_2="">
      </menu>
  <main>
    <div class="section-switch section7-switch">
      <div class="compass compass-pos7"></div>
      <img src="/custom/sktus/img/poz7/section-switch/map.png" class="switch-image switch-active1" usemap="#switchmap" style="">
      <div class="switch-hovers">
        <img data-src="/custom/sktus/img/poz7/section-switch/1.png">
      </div>
      <div>
        <map name="switchmap">
          <area shape="poly" coords="4,112,4,68,44,68,44,112" class="switch-area" href="/pozitsiya-7---nezhilye-pomescheniya/sektsiya-a/">
        </map>
        <div class="switch-signs">
          <div class="switch-sign1-poz7">14 эт.</div>
        </div>
      </div>
    </div>
    <a href="#" class="backbutton"></a>
    <insert name="show_pantryswitch" position="7" section="1">
    <div class="poz7-pantry-section-a garage-plan">
      <img src="/custom/sktus/img/poz7/pantry/a/map.png" class="areaimg" usemap="#areamap" />
      <div class="pantryplaceinfo">
        <p><strong></strong><span><i></i>м<sup>2</sup></span></p>
      </div>
      <div class="area-hovers">
        <img data-src="/custom/sktus/img/poz7/pantry/a/19.png" />
      </div>
      <map name="areamap">
        <area shape="poly" coords="306,334,306,273,338,273,338,334" class="area-pantryplace" data-number="1" data-square="3.2" data-marginleft="340" data-margintop="280" href="#"/>
      </map>
    </div>
    <div class="garage-caption garage-place-caption">
      <p class="dominfo-block-caption dominfo-block-placecaption"><strong>Позиция №7</strong></p>
      <p class="dominfo-block-selectplace">СЕКЦИЯ А <span>ВЫБЕРИТЕ КЛАДОВУЮ</span></p>
    </div>
    <div class="garage-details">
      <p class="garage-details-placenumber">ПОМЕЩЕНИЕ №<span></span><a href="#" class="print-button">На печать</a></p>
      <p class="garage-details-placesquare">Площадь: <span></span><i> м<sup>2</sup></i> | Стоимость: <a href="#howmuch" class="price-on-request">ЗАПРОСИТЬ</a></p>
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
