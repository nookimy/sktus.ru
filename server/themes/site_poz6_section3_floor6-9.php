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
    <insert name="show_sectionswitch" position="6" section="3">
    <a href="#" class="backbutton"></a>
    <div class="section-wrap poz6-section3-after3">
      <img src="/custom/sktus/img/poz6/sectionmap.png" class="areaimg" usemap="#areamap" />
      <div class="sectioninfo">
        <p style="margin-left:357px;margin-top:251px;"><strong>2</strong> 79,15м<sup>2</sup></p>
        <p style="margin-left:603px;margin-top:251px;"><strong>2</strong> 77,05м<sup>2</sup></p>
        <p style="margin-left:306px;margin-top:428px;"><strong>1</strong> 49,2м<sup>2</sup></p>
        <p style="margin-left:605px;margin-top:428px;"><strong>2</strong> 72,2м<sup>2</sup></p>
      </div>
      <div class="area-hovers">
        <img data-src="/custom/sktus/img/poz6/section3-room1.png" />
        <img data-src="/custom/sktus/img/poz6/section3-after3-room2.png" />
        <img data-src="/custom/sktus/img/poz6/section3-room3.png" />
        <img data-src="/custom/sktus/img/poz6/section3-room4.png" />
      </div>
      <map name="areamap">
        <area shape="poly" coords="283,566,283,482,298,482,298,377,456,377,456,604,375,599,375,566" class="area-buble" href="#"/>
        <area shape="poly" coords="166,482,247,110,435,174,435,338,383,338,383,383,304,383,304,484,283,484,284,498,225,498" class="area-buble" href="#"/>
        <area shape="poly" coords="586,382,586,174,771,174,711,565,675,565,675,427,651,427,651,382" class="area-buble" href="#"/>
        <area shape="poly" coords="452,604,452,377,658,377,658,420,682,421,682,566,606,566,606,598,523,604" class="area-buble" href="#"/>
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
