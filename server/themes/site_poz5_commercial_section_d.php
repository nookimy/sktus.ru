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
    <insert name="show_commercialswitch" position="5" section="5">
    <div class="section-wrap poz5-commercial-section-d">
      <img src="/custom/sktus/img/poz5/commercial/section-d-map.png" class="areaimg" usemap="#areamap" />
      <div class="pantryplaceinfo commercialplaceinfo">
        <p><strong></strong><span><i></i>м<sup>2</sup></span></p>
      </div>
      <div class="area-hovers">
        <img data-src="/custom/sktus/img/poz5/commercial/section-d-17.png" />
        <img data-src="/custom/sktus/img/poz5/commercial/section-d-18.png" />
        <img data-src="/custom/sktus/img/poz5/commercial/section-d-19.png" />
        <img data-src="/custom/sktus/img/poz5/commercial/section-d-20.png" />
        <img data-src="/custom/sktus/img/poz5/commercial/section-d-22.png" />
      </div>
      <map name="areamap">
        <area shape="poly" coords="343,286,347,267,367,263,368,211,429,210,429,311,366,311,366,291" class="area-pantryplace area-commercialplace" data-number="17" data-square="25,6" data-marginleft="360" data-margintop="240" href="#"/>
        <area shape="poly" coords="279,514,296,454,311,455,311,411,368,410,368,378,412,376,411,542,365,542,363,518,304,524" class="area-pantryplace area-commercialplace" data-number="18" data-square="54,5" data-marginleft="325" data-margintop="440" href="#"/>
        <area shape="poly" coords="415,541,414,375,514,376,516,542" class="area-pantryplace area-commercialplace" data-number="19" data-square="60,9" data-marginleft="430" data-margintop="440" href="#"/>
        <area shape="poly" coords="517,542,519,377,612,377,612,525,615,527,616,544" class="area-pantryplace area-commercialplace" data-number="20" data-square="56,4" data-marginleft="530" data-margintop="440" href="#"/>
        <area shape="poly" coords="551,310,551,209,612,209,612,264,632,267,638,288,617,292,616,310" class="area-pantryplace area-commercialplace" data-number="22" data-square="25,5" data-marginleft="552" data-margintop="240" href="#"/>
      </map>
    </div>
    <div class="garage-caption garage-place-caption">
      <p class="dominfo-block-caption dominfo-block-placecaption"><strong>Позиция №5 | Миначева, д.21</strong></p>
      <p class="dominfo-block-selectplace">СЕКЦИЯ Д <span>ВЫБЕРИТЕ ПОМЕЩЕНИЕ</span></p>
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
