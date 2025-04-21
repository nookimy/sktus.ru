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
          <div class="section-switch poz25-section-switch">
            <div class="compass-25">
              <img src="/custom/sktus/img/poz25/compass.png">
            </div>
            <img src="/custom/sktus/img/poz25/section-switch/map.png" class="switch-image switch-active1" usemap="#switchmap" style="">
            <div class="switch-hovers">
              <img data-src="/custom/sktus/img/poz25/section-switch/1.png">
              <img data-src="/custom/sktus/img/poz25/section-switch/3.png">
            </div>
            <map name="switchmap">
              <area shape="poly" coords="0,25,46,77,84,41,53,10,28,1" class="switch-area" href="../sektsiya-a/">
              <area shape="poly" coords="131,93,94,127,118,144,183,144,203,118,174,89" class="switch-area" href="../sektsiya-v/">
            </map>
          </div>
          <a href="#" class="backbutton"></a>
          <insert name="show_pantryswitch" position="25" section="1">
            <div class="poz25-pantry-section-a garage-plan">
              <img src="/custom/sktus/img/poz25/pantry/map.png" class="areaimg" usemap="#areamap" />
              <div class="pantryplaceinfo">
                <p><strong></strong><span><i></i>м<sup>2</sup></span></p>
              </div>
              <div class="area-hovers">
                <img data-src="/custom/sktus/img/poz25/pantry/01.png">
                <img data-src="/custom/sktus/img/poz25/pantry/03.png">
              </div>
              <map name="areamap">
                <area shape="poly" coords="123, 185, 223, 183, 222, 226, 122, 227" class="area-pantryplace" data-number="01" data-square="5.3" data-marginleft="144" data-margintop="118" href="#"/>
                <area shape="poly" coords="173, 229, 222, 229, 222, 297, 171, 299" class="area-pantryplace" data-number="03" data-square="3.9" data-marginleft="163" data-margintop="160" href="#"/>
                
              </map>
            </div>
            <div class="garage-caption garage-place-caption">
              <p class="dominfo-block-caption dominfo-block-placecaption"><strong>Позиция №25</strong></p>
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
