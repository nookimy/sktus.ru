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
  <meta name="viewport" content="width=1200">
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
    <div class="poz24-commercial-switch">
        <img src="/custom/sktus/img/poz24/commercial/navigation.png" />
    </div>
    <div class="section-wrap poz24-commercial-wrap">
      <img src="/custom/sktus/img/poz24/commercial/map.png" class="areaimg" usemap="#areamap" />
      <div class="pantryplaceinfo commercialplaceinfo">
        <p><strong></strong><span><i></i>м<sup>2</sup></span></p>
      </div>
      <div class="area-hovers">
        <img data-src="/custom/sktus/img/poz24/commercial/01.png"/>
        <img data-src="/custom/sktus/img/poz24/commercial/02.png"/>
      </div>
      <map name="areamap">
        <area shape="poly"
              coords="294, 230, 474, 230, 475, 326, 536, 328, 536, 421, 464, 418, 466, 474, 404, 473, 368, 506, 210, 348, 251, 310, 233, 290"
              class="area-pantryplace area-commercialplace"
              data-number="1"
              data-square="149"
              data-marginleft="337"
              data-margintop="324"
              href="pomeschenie-1"/>
        <area shape="poly"
              coords="541, 327, 679, 327, 680, 229, 680, 188, 749, 189, 750, 234, 864, 349, 706, 507, 674, 471, 469, 471, 470, 422, 542, 422"
              class="area-pantryplace area-commercialplace"
              data-number="2"
              data-square="142.4"
              data-marginleft="631"
              data-margintop="358"
              href="pomeschenie-2"/>
      </map>
    </div>
    <div class="garage-caption garage-place-caption">
      <p class="dominfo-block-caption dominfo-block-caption"><strong>Позиция №24</strong></p>
      <p class="dominfo-block-selectplace"><span>ВЫБЕРИТЕ ПОМЕЩЕНИЕ</span></p>
    </div>
    <insert name="show_floorpath_commercial" level="2">
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
