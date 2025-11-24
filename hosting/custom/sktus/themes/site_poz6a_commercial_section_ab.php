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
    <insert name="show_commercialswitch" position="6a" section="1-2">
    <div class="section-wrap poz6a-commercial-section-ab">
      <img src="/custom/sktus/img/poz6a/commercial/section-map.png" class="areaimg" usemap="#areamap" />
      <div class="pantryplaceinfo commercialplaceinfo">
        <p><strong></strong><span><i></i>м<sup>2</sup></span></p>
      </div>
      <div class="area-hovers">
        <img data-src="/custom/sktus/img/poz6a/commercial/section-AB-1.png" />
        <img data-src="/custom/sktus/img/poz6a/commercial/section-AB-2.png" />
        <img data-src="/custom/sktus/img/poz6a/commercial/section-AB-3.png" />
        <img data-src="/custom/sktus/img/poz6a/commercial/section-AB-4.png" />
      </div>
      <map name="areamap">
        <area shape="poly" coords="98,62,222,63,221,193,273,193,274,299,220,301,220,327,158,327,158,300,100,300" class="area-pantryplace area-commercialplace" data-number="1" data-square="102,72" data-marginleft="163" data-margintop="196" href="#"/>
        <area shape="poly" coords="290,63,454,64,456,300,393,300,394,326,333,328,333,301,281,300,280,191,330,193,330,90,290,89" class="area-pantryplace area-commercialplace" data-number="2" data-square="103,34" data-marginleft="348" data-margintop="196" href="#"/>
        <area shape="poly" coords="463,63,584,64,584,193,637,192,638,299,582,301,583,327,523,326,523,300,462,301" class="area-pantryplace area-commercialplace" data-number="3" data-square="103,34" data-marginleft="527" data-margintop="196" href="#"/>
        <area shape="poly" coords="695,64,816,62,817,298,757,299,757,327,698,326,696,301,645,301,644,194,694,192" class="area-pantryplace area-commercialplace" data-number="4" data-square="103,08" data-marginleft="709" data-margintop="196" href="#"/>
      </map>
    </div>
    <div class="garage-caption garage-place-caption">
      <p class="dominfo-block-caption dominfo-block-placecaption"><strong>Позиция №6a</strong></p>
      <p class="dominfo-block-selectplace">СЕКЦИЯ А-Б <span>ВЫБЕРИТЕ ПОМЕЩЕНИЕ</span></p>
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
