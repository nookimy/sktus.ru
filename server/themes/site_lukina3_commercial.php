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
  <insert name="show_form" module="feedback" id="6" template="requestcall">
  <a class="header-logo" href="<insert name="path">" title="Микрорайон Университет"></a>
  <insert name="show_include" file="badges_commercial">
      <menu>
          <insert name="show_block" module="menu" id="1" tag_start_1="[div class=`menutop`]" tag_start_2="" tag_level_start_2="[div class=`submenu`]" tag_level_end_2="[/div]" tag_end_after_children_1="[/div]" tag_end_after_children_2="">
      </menu>
  <main>
    <a href="#" class="backbutton"></a>
    <div class="lukina3-commercial-wrap">
      <div class="compass-7a">
        <img src="/custom/sktus/img/compasses/compass-7a.png" />
     </div>
      <img src="/custom/sktus/img/lukina3/commercial/map.png" class="areaimg" usemap="#areamap" />
      <div class="pantryinfo">
        <p class="pantryinfo-amount">Помещений в продаже: <span></span></p>
        <p class="pantryinfo-amount">Помещения проданы</p>
      </div>
      <div class="area-hovers">
        <img data-src="/custom/sktus/img/lukina3/commercial/lukina3-section1.png" />
        <img data-src="/custom/sktus/img/lukina3/commercial/lukina3-section2345.png" />
      </div>
      <map name="areamap">
        <area shape="poly" coords="212,399,205,448,206,550,212,553,213,603,332,603,332,584,350,581,353,420,332,421,332,398" class="area-pantryinfo" data-poz="5" data-section="1"  data-amount="1" data-marginleft="100" data-margintop="450" href="/doma/lukina-3---kommercheskie-ploschadi/1-podezd/"/>
        <area shape="poly" coords="211,69,212,250,207,251,205,271,211,276,211,375,221,377,221,400,332,402,331,382,352,381,354,221,334,219,331,200,310,195,309,180,407,180,407,201,545,202,546,180,581,180,583,201,744,202,745,181,769,180,768,60,336,58,247,59" class="area-pantryinfo area-bubble-nolink" data-poz="5" data-section="2, 3, 4, 5"  data-amount="0" data-marginleft="100" data-margintop="200" href="#"/>
      </map>
    </div>
    <div class="garage-caption">
      <p class="dominfo-block-caption"><strong>Позиция №3 | Лукина, д.3</strong></p>
      <p class="dominfo-block-selectfloor">Выберите подъезд</p>
    </div>
    <div class="garage-details">
      <p class="garage-details-section"><span></span> ПОДЪЕЗД</p>
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
