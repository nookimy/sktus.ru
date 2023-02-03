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
    <insert name="show_commercialswitch" position="26" section="1">
    <div class="section-wrap poz26-commercial-section-a">
      <img src="/custom/sktus/img/poz26/commercial/section-map.png" class="areaimg" usemap="#areamap" />
      <div class="pantryplaceinfo commercialplaceinfo">
        <p><strong></strong><span><i></i>м<sup>2</sup></span></p>
      </div>
      <div class="area-hovers">
        <img data-src="/custom/sktus/img/poz26/commercial/section-A-plan-1.png" />
        <img data-src="/custom/sktus/img/poz26/commercial/section-A-plan-2.png" />
      </div>
      <map name="areamap">
        <area shape="poly" coords="311, 80, 518, 79, 517, 140, 310, 140" class="area-pantryplace area-commercialplace" data-number="1" data-square="45.7" data-marginleft="310" data-margintop="80" href="https://sktus.ru/doma/pozitsiya-26---kommercheskie-ploschadi/sektsiya-a/pomeschenie-1/"/>
        <area shape="poly" coords="311, 197, 418, 197, 420, 277, 486, 278, 486, 254, 539, 255, 541, 276, 654, 274, 654, 244, 736, 247, 735, 355, 703, 354, 705, 428, 535, 429, 535, 451, 386, 452, 385, 428, 312, 426" class="area-pantryplace area-commercialplace" data-number="2" data-square="299.1" data-marginleft="485" data-margintop="310" href="https://sktus.ru/doma/pozitsiya-26---kommercheskie-ploschadi/sektsiya-a/pomeschenie-2/"/>
      </map>
    </div>
    <div class="garage-caption garage-place-caption">
      <p class="dominfo-block-caption dominfo-block-placecaption"><strong>Позиция №26</strong></p>
      <p class="dominfo-block-selectplace">СЕКЦИЯ А <span>ВЫБЕРИТЕ ПОМЕЩЕНИЕ</span></p>
    </div>
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
