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
    <insert name="show_sectionswitch" position="6a" section="4">
    <a href="#" class="backbutton"></a>
    <div class="section-wrap poz6a-section4">
      <img src="/custom/sktus/img/poz6a/section-map.png" class="areaimg" usemap="#areamap" />
      <div class="sectioninfo">
        <p style="margin-left:32px;margin-top:80px;"><strong>2</strong> 64,39м<sup>2</sup></p>
        <p style="margin-left:122px;margin-top:342px;"><strong>1</strong> 42,27м<sup>2</sup></p>
        <p style="margin-left:388px;margin-top:342px;"><strong>1</strong> 42,27м<sup>2</sup></p>
        <p style="margin-left:718px;margin-top:342px;"><strong>2</strong> 69,31м<sup>2</sup></p>
        <p style="margin-left:508px;margin-top:46px;"><strong>4</strong> 111,64м<sup>2</sup></p>
      </div>
      <div class="area-hovers">
        <img data-src="/custom/sktus/img/poz6a/section4-room1.png" />
        <img data-src="/custom/sktus/img/poz6a/section4-room2.png" />
        <img data-src="/custom/sktus/img/poz6a/section4-room3.png" />
        <img data-src="/custom/sktus/img/poz6a/section4-room4.png" />
        <img data-src="/custom/sktus/img/poz6a/section4-room5.png" />
      </div>
      <map name="areamap">
        <area shape="poly" coords="0,42,0,438,110,441,110,259,216,258,215,0,99,0,99,42" class="area-buble" href="#"/>
        <area shape="poly" coords="97,246,98,437,91,437,90,480,289,481,292,438,292,248" class="area-buble" href="#"/>
        <area shape="poly" coords="282,247,285,480,477,480,475,248" class="area-buble" href="#"/>
        <area shape="poly" coords="468,248,467,481,817,481,815,288,609,289,606,247" class="area-buble" href="#"/>
        <area shape="poly" coords="297,43,298,112,360,112,361,194,596,193,596,298,816,298,816,0,362,1,362,41" class="area-buble" href="#"/>
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
