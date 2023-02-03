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
    <insert name="show_sectionswitch" position="7a" section="2">
    <a href="#" class="backbutton"></a>
    <div class="section-wrap poz7a-section2">
      <img src="/custom/sktus/img/poz7a/section-map.png" class="areaimg" usemap="#areamap" />
      <div class="sectioninfo">
        <p style="margin-left:122px;margin-top:81px;"><strong>2</strong> 64,39м<sup>2</sup></p>
        <p style="margin-left:213px;margin-top:365px;"><strong>1</strong> 42,22м<sup>2</sup></p>
        <p style="margin-left:484px;margin-top:365px;"><strong>1</strong> 42,22м<sup>2</sup></p>
        <p style="margin-left:570px;margin-top:89px;"><strong>2</strong> 67,11м<sup>2</sup></p>
      </div>
      <div class="area-hovers">
        <img data-src="/custom/sktus/img/poz7a/section23-room1.png" />
        <img data-src="/custom/sktus/img/poz7a/section23-room2.png" />
        <img data-src="/custom/sktus/img/poz7a/section23-room3.png" />
        <img data-src="/custom/sktus/img/poz7a/section23-room4.png" />
      </div>
      <map name="areamap">
        <area shape="poly" coords="97,43,96,441,199,442,201,261,306,261,306,0,189,0,189,43" class="area-buble" href="#"/>
        <area shape="poly" coords="189,248,189,423,182,423,184,482,383,481,383,248" class="area-buble" href="#"/>
        <area shape="poly" coords="373,247,374,481,574,482,568,249" class="area-buble" href="#"/>
        <area shape="poly" coords="389,43,389,115,451,115,451,260,556,261,556,441,659,442,660,44,569,42,568,0,452,0,451,43" class="area-buble" href="#"/>
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
