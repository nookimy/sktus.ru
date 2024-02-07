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
    <div class="poz6-garage-wrap">
      <img src="/custom/sktus/img/poz6/garage/map.png" class="areaimg" usemap="#areamap" />
      <div class="garageinfo">
        <p class="garageinfo-cars">Мест для машин: <span></span></p>
        <p class="garageinfo-moto">Мотоциклов: <span></span></p>
      </div>
      <div class="area-hovers">
        <img data-src="/custom/sktus/img/poz6/garage/section-a.png" />
        <img data-src="/custom/sktus/img/poz6/garage/section-b.png" />
        <img data-src="/custom/sktus/img/poz6/garage/section-v.png" />
        <img data-src="/custom/sktus/img/poz6/garage/section-g.png" />
        <img data-src="/custom/sktus/img/poz6/garage/section-d.png" />
        <img data-src="/custom/sktus/img/poz6/garage/section-e.png" />
      </div>
      <map name="areamap">
        <area shape="poly" coords="13,71,44,62,42,53,81,42,84,50,128,38,267,239,244,281,168,324,111,297,5,119" class="area-garageinfo" data-poz="6" data-section="А" data-cars="10" data-moto="3" data-marginleft="83" data-margintop="130" href="/pozitsiya-6---nezhilye-pomescheniya/pozitsiya-6---nezhilye-pomescheniya---sektsiya-a/"/>
        <area shape="poly" coords="171,354,168,322,184,300,267,238,323,258,431,319,398,448,352,457" class="area-garageinfo" data-poz="6" data-section="Б" data-cars="10" data-moto="3" data-marginleft="267" data-margintop="296" href="/pozitsiya-6---nezhilye-pomescheniya/sektsiya-b/"/>
        <area shape="poly" coords="397,446,430,319,616,318,615,476,436,476" class="area-garageinfo" data-poz="6" data-section="В" data-cars="10" data-moto="3" data-marginleft="465" data-margintop="352" href="/pozitsiya-6---nezhilye-pomescheniya/sektsiya-v/"/>
        <area shape="poly" coords="615,476,615,330,680,303,807,329,807,476" class="area-garageinfo" data-poz="6" data-section="Г" data-cars="10" data-moto="3" data-marginleft="652" data-margintop="352" href="/pozitsiya-6---nezhilye-pomescheniya/sektsiya-g/"/>
        <area shape="poly" coords="807,476,807,330,841,319,936,319,998,330,998,476" class="area-garageinfo" data-poz="6" data-section="Д" data-cars="10" data-moto="3" data-marginleft="840" data-margintop="352" href="/pozitsiya-6---nezhilye-pomescheniya/sektsiya-d/"/>
        <area shape="poly" coords="998,476,999,329,1034,318,1129,318,1129,329,1195,329,1195,476" class="area-garageinfo" data-poz="6" data-section="Е" data-cars="10" data-moto="3" data-marginleft="1024" data-margintop="352" href="/pozitsiya-6---nezhilye-pomescheniya/sektsiya-e/"/>
      </map>
    </div>
    <div class="garage-caption">
      <p class="dominfo-block-caption"><strong>Миначева, 19</strong></p>
      <p class="dominfo-block-selectfloor">Выберите секцию</p>
    </div>
    <div class="garage-details">
      <p class="garage-details-section">СЕКЦИЯ <span></span></p>
      <p class="garage-details-places">Мест для машин: <span></span> | Мест для мотоциклов: <strong></strong></p>
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
