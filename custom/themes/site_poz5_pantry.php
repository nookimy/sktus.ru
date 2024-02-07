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
  <a class="header-logo" href="<insert name="path">" title="Микрорайон Университет"></a>
  <insert name="show_include" file="badges">
      <menu>
          <insert name="show_block" module="menu" id="1" tag_start_1="[div class=`menutop`]" tag_start_2="" tag_level_start_2="[div class=`submenu`]" tag_level_end_2="[/div]" tag_end_after_children_1="[/div]" tag_end_after_children_2="">
      </menu>
  <main>
    <a href="#" class="backbutton"></a>
    <div class="poz5-pantry-wrap">
      <img src="/custom/sktus/img/poz5/pantry/map.png" class="areaimg" usemap="#areamap" />
      <div class="pantryinfo">
        <p class="pantryinfo-amount">Помещений в продаже: <span></span></p>
      </div>
      <div class="area-hovers">
        <img data-src="/custom/sktus/img/poz5/pantry/section-a.png" />
        <img data-src="/custom/sktus/img/poz5/pantry/section-b.png" />
        <img data-src="/custom/sktus/img/poz5/pantry/section-v.png" />
        <img data-src="/custom/sktus/img/poz5/pantry/section-g.png" />
        <img data-src="/custom/sktus/img/poz5/pantry/section-d.png" />
      </div>
      <map name="areamap">
        <area shape="poly" coords="56,117,140,341,328,218,261,48" class="area-pantryinfo" data-poz="5" data-section="А"  data-amount="38" data-marginleft="140" data-margintop="140" href="/pozitsiya-5---nezhilye-pomescheniya/sektsiya-a/"/>
        <area shape="poly" coords="140,341,328,218,479,355,375,562" class="area-pantryinfo" data-poz="5" data-section="Б"  data-amount="49" data-marginleft="267" data-margintop="296" href="/pozitsiya-5---nezhilye-pomescheniya/sektsiya-b/"/>
        <area shape="poly" coords="479,355,375,562,616,602,700,598,682,396" class="area-pantryinfo" data-poz="5" data-section="В" data-amount="42" data-marginleft="522" data-margintop="420" href="/pozitsiya-5---nezhilye-pomescheniya/sektsiya-v/"/>
        <area shape="poly" coords="700,598,682,396,888,340,1005,521" class="area-pantryinfo" data-poz="5" data-section="Г"  data-amount="48" data-marginleft="770" data-margintop="420" href="/pozitsiya-5---nezhilye-pomescheniya/sektsiya-g/"/>
        <area shape="poly" coords="888,340,1005,521,1150,373,1150,260,1002,190" class="area-pantryinfo" data-poz="5" data-section="Д"  data-amount="40" data-marginleft="966" data-margintop="284" href="/pozitsiya-5---nezhilye-pomescheniya/sektsiya-d/"/>
      </map>
    </div>
    <div class="garage-caption">
      <p class="dominfo-block-caption"><strong>Позиция №5</strong></p>
      <p class="dominfo-block-selectfloor">Выберите секцию</p>
    </div>
    <div class="garage-details">
      <p class="garage-details-section">СЕКЦИЯ <span></span></p>
      <p class="pantry-details-amount">Помещений в продаже: <span></span></p>
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
