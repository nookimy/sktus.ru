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
    <div class="poz7-pantry-wrap">
      <img src="/custom/sktus/img/poz7/pantry/map.png" class="areaimg" usemap="#areamap" />
      <div class="pantryinfo">
        <p class="pantryinfo-amount">Помещений в продаже: <span></span></p>
      </div>
      <div class="area-hovers">
        <img data-src="/custom/sktus/img/poz7/pantry/section-a.png" />
        <img data-src="/custom/sktus/img/poz7/pantry/section-b.png" />
        <img data-src="/custom/sktus/img/poz7/pantry/section-v.png" />
        <img data-src="/custom/sktus/img/poz7/pantry/section-g.png" />
        <img data-src="/custom/sktus/img/poz7/pantry/section-d.png" />
        <img data-src="/custom/sktus/img/poz7/pantry/section-e.png" />
      </div>
      <map name="areamap">
        <area shape="poly" coords="229,491,75,491,75,310,229,310" class="area-pantryinfo" data-poz="7" data-section="А"  data-amount="25" data-marginleft="112" data-margintop="340" href="/pozitsiya-7---nezhilye-pomescheniya/sektsiya-a/"/>
        <area shape="poly" coords="229,310,75,310,84,208,234,67,342,62,342,224" class="area-pantryinfo" data-poz="7" data-section="Б"  data-amount="44" data-marginleft="167" data-margintop="138" href="/pozitsiya-7---nezhilye-pomescheniya/sektsiya-b/"/>
        <area shape="poly" coords="342,224,342,62,522,66,522,201" class="area-pantryinfo" data-poz="7" data-section="В" data-amount="28" data-marginleft="374" data-margintop="80" href="/pozitsiya-7---nezhilye-pomescheniya/sektsiya-v/"/>
        <area shape="poly" coords="522,201,522,66,730,67,730,201" class="area-pantryinfo" data-poz="7" data-section="Г"  data-amount="34" data-marginleft="576" data-margintop="80" href="/pozitsiya-7---nezhilye-pomescheniya/sektsiya-g/"/>
        <area shape="poly" coords="730,201,730,67,940,66,940,200" class="area-pantryinfo" data-poz="7" data-section="Д"  data-amount="34" data-marginleft="784" data-margintop="80" href="/pozitsiya-7---nezhilye-pomescheniya/sektsiya-d/"/>
        <area shape="poly" coords="940,200,940,66,1149,65,1149,201" class="area-pantryinfo" data-poz="7" data-section="Е"  data-amount="38" data-marginleft="990" data-margintop="80" href="/pozitsiya-7---nezhilye-pomescheniya/sektsiya-d/"/>
      </map>
    </div>
    <div class="garage-caption">
      <p class="dominfo-block-caption"><strong>Позиция №7</strong></p>
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
