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
<body class="bluebg garage inside">
<!-- NT (noscript)-->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WN58XJ5"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End NT (noscript) -->
  <insert name="show_block" module="tagmanager" position="body_start">
  <insert name="show_form" module="feedback" id="6" template="requestcall">
  <insert name="show_form" module="feedback" site_id="134" template="howmuch">
  <a class="header-logo" href="<insert name="path">" title="Микрорайон Университет"></a>
  <insert name="show_include" file="badges">
      <menu>
          <insert name="show_block" module="menu" id="1" tag_start_1="[div class=`menutop`]" tag_start_2="" tag_level_start_2="[div class=`submenu`]" tag_level_end_2="[/div]" tag_end_after_children_1="[/div]" tag_end_after_children_2="">
      </menu>
  <main>
    <a href="#" class="backbutton"></a>
    <insert name="show_garageswitch" position="14" section="2">
    <div class="poz14-garage-places-2 garage-plan">
      <img src="/custom/sktus/img/poz14/garage/map.png" class="areaimg" usemap="#areamap" />
      <div class="garageplaceinfo">
        <p><strong></strong><span></span></p>
      </div>
      <div class="area-hovers">
        <img data-src="/custom/sktus/img/poz14/garage/42.png" />
        <img data-src="/custom/sktus/img/poz14/garage/45.png" />
        <img data-src="/custom/sktus/img/poz14/garage/48.png" />
      </div>
      <map name="areamap">
        <area shape="poly" coords="902,189,948,187,952,287,901,290" class="area-garageplace" data-number="42" data-square="14,3" data-marginleft="903" data-margintop="120" href="#"/>
        <area shape="poly" coords="706,383,771,385,770,478,705,480" class="area-garageplace" data-number="45" data-square="16,55" data-marginleft="714" data-margintop="490" href="#"/>
        <area shape="poly" coords="513,383,579,383,579,478,515,478" class="area-garageplace" data-number="48" data-square="16,65" data-marginleft="526" data-margintop="490" href="#"/>
      </map>
    </div>
    <div class="floor-switch"><a title="1 уровень" class="floor-down" href="https://sktus.ru/pozitsiya-14---parking-1-uroven/"></a><p class="floor-name"><strong>2<small> / 2</small></strong>уровень</p></div>
    <div class="garage-caption garage-place-caption">
      <p class="dominfo-block-caption dominfo-block-placecaption"><strong>Герцена, 12 корп.1</strong></p>
      <p class="dominfo-block-selectplace">УРОВНЬ 2 <span>ВЫБЕРИТЕ МАШИНОМЕСТО</span></p>
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
  <insert name="show_custom_compressed_js" files="main.js, garage.js">
  <insert name="show_include" file="counters">
  <insert name="show_block" module="tagmanager" position="body_end">
</body>
</html>
