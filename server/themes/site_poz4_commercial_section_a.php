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
    <insert name="show_commercialswitch" position="4" section="1">
    <div class="section-wrap poz4-commercial-section-a">
      <img src="/custom/sktus/img/poz4/commercial/map.png" class="areaimg" usemap="#areamap" />
      <div class="pantryplaceinfo commercialplaceinfo">
        <p><strong></strong><span><i></i>м<sup>2</sup></span></p>
      </div>
      <div class="area-hovers">
        <img data-src="/custom/sktus/img/poz4/commercial/section-a-1.png" />
        <img data-src="/custom/sktus/img/poz4/commercial/section-a-2.png" />
        <img data-src="/custom/sktus/img/poz4/commercial/section-a-3.png" />
        <img data-src="/custom/sktus/img/poz4/commercial/section-a-4.png" />
        <img data-src="/custom/sktus/img/poz4/commercial/section-a-5.png" />
        <img data-src="/custom/sktus/img/poz4/commercial/section-a-6.png" />
        <img data-src="/custom/sktus/img/poz4/commercial/section-a-7.png" />
      </div>
      <map name="areamap">
        <area shape="poly" coords="259,297,250,322,278,332,280,351,354,354,354,232,280,230,281,296" class="area-pantryplace area-commercialplace" data-number="1" data-square="25,1" data-marginleft="280" data-margintop="250" href="#"/>
        <area shape="poly" coords="150,474,212,492,210,467,225,405,174,391" class="area-pantryplace area-commercialplace" data-number="2" data-square="12,8" data-marginleft="155" data-margintop="414" href="#"/>
        <area shape="poly" coords="281,396,280,545,394,543,395,396" class="area-pantryplace area-commercialplace" data-number="3" data-square="41,4" data-marginleft="300" data-margintop="430" href="#"/>
        <area shape="poly" coords="398,396,398,544,525,544,524,396" class="area-pantryplace area-commercialplace" data-number="4" data-square="46,6" data-marginleft="430" data-margintop="430" href="#"/>
        <area shape="poly" coords="529,396,529,543,643,546,641,398" class="area-pantryplace area-commercialplace" data-number="5" data-square="42,8" data-marginleft="550" data-margintop="430" href="#"/>
        <area shape="poly" coords="697,403,715,465,715,490,774,475,751,391" class="area-pantryplace area-commercialplace" data-number="6" data-square="12,7" data-marginleft="695" data-margintop="405" href="#"/>
        <area shape="poly" coords="500,232,500,353,643,353,642,330,672,323,666,297,644,296,642,232" class="area-pantryplace area-commercialplace" data-number="7" data-square="45,9" data-marginleft="530" data-margintop="250" href="#"/>
      </map>
    </div>
    <div class="garage-caption garage-place-caption">
      <p class="dominfo-block-caption dominfo-block-placecaption"><strong>Позиция №4 | Миначева, д.25</strong></p>
      <p class="dominfo-block-selectplace">СЕКЦИЯ А <span>ВЫБЕРИТЕ ПОМЕЩЕНИЕ</span></p>
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
