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
    <insert name="show_sectionswitch" position="7" section="1">
    <a href="#" class="backbutton"></a>
    <div class="section-wrap poz7-section1">
      <img src="/custom/sktus/img/poz7/map.png" class="areaimg" usemap="#areamap" />
      <div class="sectioninfo">
        <p style="margin-left:724px;margin-top:233px;"><strong>2</strong> 59,00м<sup>2</sup></p>
        <p style="margin-left:648px;margin-top:436px;"><strong>1</strong> 35,95м<sup>2</sup></p>
        <p style="margin-left:273px;margin-top:446px;"><strong>3</strong> 82,55м<sup>2</sup></p>
      </div>
      <div class="area-hovers">
        <img data-src="/custom/sktus/img/poz7/section1-room2.png" />
        <img data-src="/custom/sktus/img/poz7/section1-room1.png" />
        <img data-src="/custom/sktus/img/poz7/section1-room3.png" />
      </div>
      <map name="areamap">
        <area shape="poly" coords="723,562,723,368,633,368,559,314,559,144,686,144,686,186,843,186,843,562" class="area-buble" href="#"/>
        <area shape="poly" coords="546,361,730,361,730,564,652,564,652,606,546,606" class="area-buble" href="#"/>
        <area shape="poly" coords="441,605,441,562,227,562,227,143,361,143,361,359,547,359,547,605" class="area-buble" href="#"/>
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
