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
    <div class="section-wrap poz26-commercial-section-v">
      <img src="/custom/sktus/img/poz26/commercial/section-map.png" class="areaimg" usemap="#areamap" />
      <div class="pantryplaceinfo commercialplaceinfo">
        <p><strong></strong><span><i></i>м<sup>2</sup></span></p>
      </div>
      <div class="area-hovers">
        <img data-src="/custom/sktus/img/poz26/commercial/section-V-plan-5.png" />
        <img data-src="/custom/sktus/img/poz26/commercial/section-V-plan-6.png" />
      </div>
      <map name="areamap">
        <area shape="poly" coords="454, 273, 510, 273, 511, 300, 562, 303, 561, 461, 352, 461, 356, 342, 421, 342, 422, 309, 455, 310" class="area-pantryplace area-commercialplace" data-number="5" data-square="97.7" data-marginleft="453" data-margintop="303" href="https://sktus.ru/doma/pozitsiya-26---kommercheskie-ploschadi/sektsiya-v/pomeschenie-5/"/>
        <area shape="poly" coords="353, 25, 563, 24, 562, 241, 511, 240, 511, 268, 453, 268, 453, 229, 419, 230, 420, 180, 354, 179" class="area-pantryplace area-commercialplace" data-number="6" data-square="127.0" data-marginleft="453" data-margintop="107" href="https://sktus.ru/doma/pozitsiya-26---kommercheskie-ploschadi/sektsiya-v/pomeschenie-6/"/>
      </map>
    </div>
    <div class="garage-caption garage-place-caption">
      <p class="dominfo-block-caption dominfo-block-placecaption"><strong>Позиция №26</strong></p>
      <p class="dominfo-block-selectplace">СЕКЦИЯ В <span>ВЫБЕРИТЕ ПОМЕЩЕНИЕ</span></p>
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
