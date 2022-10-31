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
    <insert name="show_sectionswitch" position="6" section="4">
    <a href="#" class="backbutton"></a>
    <div class="section-wrap poz6-section45">
      <img src="/custom/sktus/img/poz6/sectionmap.png" class="areaimg" usemap="#areamap" />
      <div class="sectioninfo">
        <p style="margin-left:357px;margin-top:251px;"><strong>2</strong> 74,8м<sup>2</sup></p>
        <p style="margin-left:607px;margin-top:251px;"><strong>2</strong> 80,7м<sup>2</sup></p>
        <p style="margin-left:344px;margin-top:430px;"><strong>1</strong> 46,36м<sup>2</sup></p>
        <p style="margin-left:553px;margin-top:430px;"><strong>2</strong> 68м<sup>2</sup></p>
      </div>
      <div class="area-hovers">
        <img data-src="/custom/sktus/img/poz6/section45-room1.png" />
        <img data-src="/custom/sktus/img/poz6/section45-room2.png" />
        <img data-src="/custom/sktus/img/poz6/section45-room3.png" />
        <img data-src="/custom/sktus/img/poz6/section45-room4.png" />
      </div>
      <map name="areamap">
        <area shape="poly" coords="332,566,332,377,479,377,479,604,398,598,398,566" class="area-buble" href="#"/>
        <area shape="poly" coords="246,566,246,180,358,175,435,174,435,337,407,383,338,383,338,566" class="area-buble" href="#"/>
        <area shape="poly" coords="584,383,585,175,778,180,778,566,682,566,682,427,659,427,659,383" class="area-buble" href="#"/>
        <area shape="poly" coords="475,601,475,377,665,377,665,421,688,421,688,566,629,566,629,598,579,602" class="area-buble" href="#"/>
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
