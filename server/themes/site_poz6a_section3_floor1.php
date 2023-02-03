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
  <link rel="icon" type="image/png" href="<insert name="custom" path="favicon.png" absolute="true">"/>
  <insert name="show_css" files="reset.css, style.css, print.css">
  <insert name="show_block" module="tagmanager" position="head_end">

</head>
<body class="bluebg inside">
<!-- NT (noscript)-->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WN58XJ5"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End NT (noscript) -->
  <insert name="show_block" module="tagmanager" position="body_start">
  <insert name="show_form" module="feedback" site_id="6" template="requestcall">
  <insert name="show_form" module="feedback" site_id="40" template="howmuch">
  <a class="header-logo" href="<insert name="path">" title="Микрорайон Университет"></a>
  <insert name="show_include" file="badges">
      <menu>
          <insert name="show_block" module="menu" id="1" tag_start_1="[div class=`menutop`]" tag_start_2="" tag_level_start_2="[div class=`submenu`]" tag_level_end_2="[/div]" tag_end_after_children_1="[/div]" tag_end_after_children_2="">
      </menu>
  <main>
    <insert name="show_sectionswitch" position="6a" section="3">
    <a href="#" class="backbutton"></a>
    <div class="section-wrap poz6a-section3">
      <img src="/custom/sktus/img/poz6a/section-map.png" class="areaimg" usemap="#areamap" />
      <div class="sectioninfo">
        <p style="margin-left:188px;margin-top:100px;"><strong>2</strong> 64,39м<sup>2</sup></p>
        <p style="margin-left:222px;margin-top:354px;"><strong>1</strong> 42,27м<sup>2</sup></p>
        <p style="margin-left:480px;margin-top:354px;"><strong>1</strong> 42,27м<sup>2</sup></p>
        <p style="margin-left:565px;margin-top:86px;"><strong>3</strong> 96,72м<sup>2</sup></p>
      </div>
      <div class="area-hovers">
        <img data-src="/custom/sktus/img/poz6a/section3-room1.png" />
        <img data-src="/custom/sktus/img/poz6a/section3-room2.png" />
        <img data-src="/custom/sktus/img/poz6a/section3-room3.png" />
        <img data-src="/custom/sktus/img/poz6a/section3-room4.png" />
      </div>
      <map name="areamap">
        <area shape="poly" coords="99,44,97,440,207,441,208,260,313,259,313,0,199,0,197,41" class="area-buble" href="#"/>
        <area shape="poly" coords="195,250,188,480,387,481,389,250" class="area-buble" href="#"/>
        <area shape="poly" coords="379,248,380,480,581,481,579,439,574,249,469,248,469,229,456,230,455,247" class="area-buble" href="#"/>
        <area shape="poly" coords="394,44,394,113,455,114,457,258,562,260,562,441,663,440,684,450,690,433,674,424,832,103,851,111,858,96,823,78,804,112,745,82,675,84,670,44,574,42,573,0,457,0,457,43" class="area-buble" href="#"/>
      </map>
    </div>
    <insert name="show_floorpath">
    <insert name="show_body">
  </main>
  <footer>
    <insert name="show_include" file="footer">
  </footer>
  <insert name="show_js">
  <insert name="show_custom_compressed_js" files="main.js">
  <insert name="show_include" file="counters">
  <insert name="show_block" module="tagmanager" position="body_end">
</body>
</html>
