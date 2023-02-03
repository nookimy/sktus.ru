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
  <insert name="show_form" module="feedback" site_id="6" template="requestcall">
  <insert name="show_form" module="feedback" site_id="88" template="howmuch">
  <a class="header-logo" href="<insert name="path">" title="Микрорайон Университет"></a>
  <insert name="show_include" file="badges_commercial">
      <menu>
          <insert name="show_block" module="menu" id="1" tag_start_1="[div class=`menutop`]" tag_start_2="" tag_level_start_2="[div class=`submenu`]" tag_level_end_2="[/div]" tag_end_after_children_1="[/div]" tag_end_after_children_2="">
      </menu>
  <main>
    <a href="#" class="backbutton"></a>
    <div class="compass-big compass-poz4">
      <img src="/custom/sktus/img/compass-big.png" />
    </div>
    <insert name="show_commercialswitch" position="4" section="4">
    <div class="section-wrap poz4-commercial-section-g">
      <img src="/custom/sktus/img/poz4/commercial/map.png" class="areaimg" usemap="#areamap" />
      <div class="pantryplaceinfo commercialplaceinfo">
        <p><strong></strong><span><i></i>м<sup>2</sup></span></p>
      </div>
      <div class="area-hovers">
        <img data-src="/custom/sktus/img/poz4/commercial/section-g-1.png" />
        <img data-src="/custom/sktus/img/poz4/commercial/section-g-2.png" />
        <img data-src="/custom/sktus/img/poz4/commercial/section-g-3.png" />
        <img data-src="/custom/sktus/img/poz4/commercial/section-g-4.png" />
        <img data-src="/custom/sktus/img/poz4/commercial/section-g-5.png" />
        <img data-src="/custom/sktus/img/poz4/commercial/section-g-6.png" />
        <img data-src="/custom/sktus/img/poz4/commercial/section-g-7.png" />
      </div>
      <map name="areamap">
        <area shape="poly" coords="277,297,270,322,300,330,300,352,448,352,449,232,302,230,303,2963" class="area-pantryplace area-commercialplace" data-number="22" data-square="47,8" data-marginleft="340" data-margintop="260" href="#"/>
        <area shape="poly" coords="193,392,171,475,232,493,230,462,244,403" class="area-pantryplace area-commercialplace" data-number="23" data-square="12,5" data-marginleft="176" data-margintop="410" href="#"/>
        <area shape="poly" coords="301,395,300,543,414,543,415,396" class="area-pantryplace area-commercialplace" data-number="24" data-square="42,5" data-marginleft="330" data-margintop="430" href="#"/>
        <area shape="poly" coords="418,395,419,543,547,543,546,397" class="area-pantryplace area-commercialplace" data-number="25" data-square="46,7" data-marginleft="450" data-margintop="430" href="#"/>
        <area shape="poly" coords="549,396,549,543,665,543,664,396" class="area-pantryplace area-commercialplace" data-number="26" data-square="42,1" data-marginleft="580" data-margintop="430" href="#"/>
        <area shape="poly" coords="721,406,736,468,734,493,795,475,772,392" class="area-pantryplace area-commercialplace" data-number="27" data-square="12,9" data-marginleft="715" data-margintop="410" href="#"/>
        <area shape="poly" coords="594,230,594,353,665,353,665,328,696,321,687,295,664,296,663,230" class="area-pantryplace area-commercialplace" data-number="28" data-square="23,7" data-marginleft="594" data-margintop="260" href="#"/>
      </map>
    </div>
    <div class="garage-caption garage-place-caption">
      <p class="dominfo-block-caption dominfo-block-placecaption"><strong>Позиция №4 | Миначева, д.25</strong></p>
      <p class="dominfo-block-selectplace">СЕКЦИЯ Г <span>ВЫБЕРИТЕ ПОМЕЩЕНИЕ</span></p>
    </div>
    <!-- <div class="garage-details">
      <p class="garage-details-placenumber">ПОМЕЩЕНИЕ №<span></span><a href="#" class="print-button">На печать</a></p>
      <p class="garage-details-placesquare">Площадь: <span></span><i> м<sup>2</sup></i> | Стоимость: <a href="#howmuch" class="price-on-request">ЗАПРОСИТЬ</a></p>
    </div> -->
    <insert name="show_floorpath_commercial">
    <insert name="show_body">
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
