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
    <div class="poz2-garage-wrap">
      <img src="/custom/sktus/img/poz2/garage/map.png" class="areaimg" usemap="#areamap" />
      <div class="garageinfo">
        <p class="garageinfo-cars">Мест для машин: <span></span></p>
        <p class="garageinfo-moto">Мотоциклов: <span></span></p>
      </div>
      <div class="area-hovers">
        <img data-src="/custom/sktus/img/poz2/garage/section-a.png" />
        <img data-src="/custom/sktus/img/poz2/garage/section-b.png" />
        <img data-src="/custom/sktus/img/poz2/garage/section-v.png" />
        <img data-src="/custom/sktus/img/poz2/garage/section-g.png" />
      </div>
      <map name="areamap">
        <area shape="poly" coords="79,27,99,49,115,37,175,97,161,114,208,162,226,146,260,183,247,200,270,226,190,306,0,105" class="area-garageinfo" data-poz="2" data-section="А" data-cars="18" data-moto="0" data-marginleft="111" data-margintop="135" href="/pozitsiya-2---parking/sektsiya-a/"/>
        <area shape="poly" coords="260,215,283,238,300,223,334,254,325,266,374,290,375,271,422,273,423,296,453,296,455,408,364,406,362,422,333,421,315,409,317,398,285,386,277,403,255,391,261,374,188,298" class="area-garageinfo" data-poz="2" data-section="Б" data-cars="15" data-moto="0" data-marginleft="286" data-margintop="295" href="/pozitsiya-2---parking/sektsiya-b/"/>
        <area shape="poly" coords="432,297,478,297,478,271,529,273,529,297,580,298,580,272,630,274,631,287,665,281,714,394,700,406,692,394,664,408,431,410" class="area-garageinfo" data-poz="2" data-section="В" data-cars="16" data-moto="0" data-marginleft="515" data-margintop="314" href="/pozitsiya-2---parking/sektsiya-v/"/>
        <area shape="poly" coords="653,283,678,273,667,262,708,222,724,236,758,200,744,183,776,150,796,163,844,115,829,97,863,62,879,78,907,52,991,138,972,158,964,147,752,381,706,399" class="area-garageinfo" data-poz="2" data-section="Г" data-cars="22" data-moto="0" data-marginleft="787" data-margintop="171" href="/pozitsiya-2---parking/sektsiya-g/"/>
      </map>
    </div>
    <div class="garage-caption">
      <p class="dominfo-block-caption"><strong>Лукина, 1</strong></p>
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
