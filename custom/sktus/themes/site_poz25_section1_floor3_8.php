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
  <insert name="show_form" module="feedback" id="6" template="requestcall">
  <insert name="show_form" module="feedback" site_id="40" template="howmuch">
  <a class="header-logo" href="<insert name="path">" title="Микрорайон Университет"></a>
  <insert name="show_include" file="badges">
      <menu>
          <insert name="show_block" module="menu" id="1" tag_start_1="[div class=`menutop`]" tag_start_2="" tag_level_start_2="[div class=`submenu`]" tag_level_end_2="[/div]" tag_end_after_children_1="[/div]" tag_end_after_children_2="">
      </menu>
  <main>
    <insert name="show_sectionswitch" position="25" section="1">
    <a href="#" class="backbutton"></a>
    <div class="section-wrap poz25-section1">
      <img src="/custom/sktus/img/poz25/section-map.png" class="areaimg" usemap="#areamap" />
      <div class="sectioninfo">
        <p style="margin-left:198px;margin-top:268px;"><strong>2</strong> 61,05м<sup>2</sup></p>
        <p style="margin-left:265px;margin-top:474px;"><strong>1</strong> 35,25м<sup>2</sup></p>
        <p style="margin-left:430px;margin-top:474px;"><strong>1</strong> 37,55м<sup>2</sup></p>
        <p style="margin-left:670px;margin-top:474px;"><strong>1</strong> 35,85м<sup>2</sup></p>
        <p style="margin-left:726px;margin-top:268px;"><strong>2</strong> 59,05м<sup>2</sup></p>
      </div>
      <div class="area-hovers">
        <img data-src="/custom/sktus/img/poz25/section1-room1.png" />
        <img data-src="/custom/sktus/img/poz25/section12-room2.png" />
        <img data-src="/custom/sktus/img/poz25/section12-room3.png" />
        <img data-src="/custom/sktus/img/poz25/section12-room4.png" />
        <img data-src="/custom/sktus/img/poz25/section12-room5.png" />
      </div>
      <map name="areamap">
        <area shape="poly" coords="147,222,147,565,255,564,256,387,333,385,334,339,411,338,411,183,293,182,290,221" class="area-buble" href="#"/>
        <area shape="poly" coords="250,380,250,564,321,567,321,603,419,603,419,379" class="area-buble" href="#"/>
        <area shape="poly" coords="409,380,411,602,582,603,580,380" class="area-buble" href="#"/>
        <area shape="poly" coords="574,379,575,603,675,603,676,565,747,567,747,378" class="area-buble" href="#"/>
        <area shape="poly" coords="587,185,589,339,661,340,658,387,739,388,738,566,838,566,837,221,702,222,703,185" class="area-buble" href="#"/>
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
