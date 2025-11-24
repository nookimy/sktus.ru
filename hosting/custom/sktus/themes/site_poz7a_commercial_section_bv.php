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
    <insert name="show_commercialswitch" position="7a" section="2-3">
    <div class="section-wrap poz7a-commercial-section-bv">
      <img src="/custom/sktus/img/poz7a/commercial/section-map.png" class="areaimg" usemap="#areamap" />
      <div class="pantryplaceinfo commercialplaceinfo">
        <p><strong></strong><span><i></i>м<sup>2</sup></span></p>
      </div>
      <div class="area-hovers">
        <img data-src="/custom/sktus/img/poz7a/commercial/section-BV-1.png" />
        <img data-src="/custom/sktus/img/poz7a/commercial/section-BV-2.png" />
        <img data-src="/custom/sktus/img/poz7a/commercial/section-BV-3.png" />
        <img data-src="/custom/sktus/img/poz7a/commercial/section-BV-4.png" />
      </div>
      <map name="areamap">
        <area shape="poly" coords="46,68,174,67,174,206,229,206,228,317,172,316,172,346,110,346,110,318,46,318" class="area-pantryplace area-commercialplace" data-number="3" data-square="105.2" data-marginleft="81" data-margintop="182" href="#"/>
        <area shape="poly" coords="291,66,420,67,420,317,354,316,354,346,293,346,292,316,238,318,237,206,290,206" class="area-pantryplace area-commercialplace" data-number="4" data-square="105.3" data-marginleft="343" data-margintop="182" href="#"/>
        <area shape="poly" coords="430,67,558,67,558,206,613,204,613,317,555,316,557,346,491,348,492,316,429,316" class="area-pantryplace area-commercialplace" data-number="5" data-square="105.6" data-marginleft="463" data-margintop="182" href="#"/>
        <area shape="poly" coords="674,66,804,68,805,318,740,317,739,346,676,346,678,318,621,318,619,205,674,205" class="area-pantryplace area-commercialplace" data-number="6" data-square="104.3" data-marginleft="727" data-margintop="182" href="#"/>
      </map>
    </div>
    <div class="garage-caption garage-place-caption">
      <p class="dominfo-block-caption dominfo-block-placecaption"><strong>Позиция №7а</strong></p>
      <p class="dominfo-block-selectplace">СЕКЦИЯ Б-В <span>ВЫБЕРИТЕ ПОМЕЩЕНИЕ</span></p>
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
