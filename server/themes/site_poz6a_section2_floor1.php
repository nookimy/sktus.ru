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
    <insert name="show_sectionswitch" position="6a" section="2">
    <a href="#" class="backbutton"></a>
    <div class="section-wrap poz6a-section2">
      <img src="/custom/sktus/img/poz6a/section-map.png" class="areaimg" usemap="#areamap" />
      <div class="sectioninfo">
        <p style="margin-left:218px;margin-top:100px;"><strong>2</strong> 63,98м<sup>2</sup></p>
        <p style="margin-left:518px;margin-top:346px;"><strong>2</strong> 85,36м<sup>2</sup></p>
        <p style="margin-left:580px;margin-top:104px;"><strong>2</strong> 63,98м<sup>2</sup></p>
      </div>
      <div class="area-hovers">
        <img data-src="/custom/sktus/img/poz6a/section2-room1.png" />
        <img data-src="/custom/sktus/img/poz6a/section2-room2.png" />
        <img data-src="/custom/sktus/img/poz6a/section2-room3.png" />
      </div>
      <map name="areamap">
        <area shape="poly" coords="128,35,129,439,240,438,240,255,347,255,347,0,237,0,236,34" class="area-buble" href="#"/>
        <area shape="poly" coords="230,244,222,439,224,481,622,481,621,437,614,244" class="area-buble" href="#"/>
        <area shape="poly" coords="432,36,431,105,494,107,494,254,602,256,603,439,713,439,714,421,708,421,707,53,714,52,713,37,606,35,606,0,496,0,495,35" class="area-buble" href="#"/>
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
