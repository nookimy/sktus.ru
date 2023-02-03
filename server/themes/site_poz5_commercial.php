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
  <insert name="show_form" module="feedback" id="6" template="requestcall">
  <a class="header-logo" href="<insert name="path">" title="Микрорайон Университет"></a>
  <insert name="show_include" file="badges_commercial">
      <menu>
          <insert name="show_block" module="menu" id="1" tag_start_1="[div class=`menutop`]" tag_start_2="" tag_level_start_2="[div class=`submenu`]" tag_level_end_2="[/div]" tag_end_after_children_1="[/div]" tag_end_after_children_2="">
      </menu>
  <main>
    <a href="#" class="backbutton"></a>
    <div class="poz5-commercial-wrap">
      <div class="compass-big compass-poz5-commercial">
        <img src="/custom/sktus/img/compass-big.png">
      </div>
      <img src="/custom/sktus/img/poz5/commercial/map.png" class="areaimg" usemap="#areamap" />
      <div class="pantryinfo">
        <p class="pantryinfo-amount">Помещений в продаже: <span></span></p>
        <p class="pantryinfo-amount">Помещения проданы</p>
      </div>
      <div class="area-hovers">
        <img data-src="/custom/sktus/img/poz5/commercial/section-a.png" />
        <img data-src="/custom/sktus/img/poz5/commercial/section-b.png" />
        <img data-src="/custom/sktus/img/poz5/commercial/section-v.png" />
        <img data-src="/custom/sktus/img/poz5/commercial/section-g.png" />
        <img data-src="/custom/sktus/img/poz5/commercial/section-d.png" />
      </div>
      <map name="areamap">
        <area shape="poly" coords="74,116,305,45,348,209,163,330,114,256" class="area-pantryinfo" data-poz="5" data-section="А"  data-amount="0" data-marginleft="139" data-margintop="145" href="/doma/pozitsiya-5---kommercheskie-ploschadi/sektsiya-a/"/>
        <area shape="poly" coords="164,329,356,210,431,280,475,356,392,528,323,497,239,421,190,371" class="area-pantryinfo" data-poz="5" data-section="Б"  data-amount="1" data-marginleft="270" data-margintop="320" href="/doma/pozitsiya-5---kommercheskie-ploschadi/sektsiya-b/"/>
        <area shape="poly" coords="391,527,482,352,558,343,627,357,677,407,685,599,659,599,507,578" class="area-pantryinfo" data-poz="5" data-section="В"  data-amount="0" data-marginleft="494" data-margintop="450" href="/doma/pozitsiya-5---kommercheskie-ploschadi/sektsiya-v/"/>
        <area shape="poly" coords="682,599,672,393,736,347,804,327,869,338,979,508,944,531,706,599" class="area-pantryinfo" data-poz="5" data-section="Г"  data-amount="0" data-marginleft="770" data-margintop="440" href="/doma/pozitsiya-5---kommercheskie-ploschadi/sektsiya-g/"/>
        <area shape="poly" coords="976,510,868,336,874,284,945,215,1001,215,1097,263,1131,343,1041,468" class="area-pantryinfo" data-poz="5" data-section="Д"  data-amount="0" data-marginleft="962" data-margintop="320" href="/doma/pozitsiya-5---kommercheskie-ploschadi/sektsiya-d/"/>
      </map>
    </div>
    <div class="garage-caption">
      <p class="dominfo-block-caption"><strong>Позиция №5 | Миначева, д.21</strong></p>
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
