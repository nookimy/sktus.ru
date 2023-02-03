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
    <insert name="show_sectionswitch" position="25" section="5">
    <a href="#" class="backbutton"></a>
    <div class="section-wrap poz25-section5">
      <img src="/custom/sktus/img/poz25/section-map.png" class="areaimg" usemap="#areamap" />
      <div class="sectioninfo">
        <p style="margin-left:261px;margin-top:477px;"><strong>3</strong> 82,10м<sup>2</sup></p>
        <p style="margin-left:600px;margin-top:474px;"><strong>1</strong> 35,95м<sup>2</sup></p>
        <p style="margin-left:663px;margin-top:268px;"><strong>2</strong> 61,20м<sup>2</sup></p>
      </div>
      <div class="area-hovers">
        <img data-src="/custom/sktus/img/poz25/section45-room1.png" />
        <img data-src="/custom/sktus/img/poz25/section45-room2.png" />
        <img data-src="/custom/sktus/img/poz25/section5-room3.png" />
      </div>
      <map name="areamap">
        <area shape="poly" coords="229,227,230,567,419,568,420,603,518,603,519,382,347,380,351,337,352,185,237,184,236,224" class="area-buble" href="#"/>
        <area shape="poly" coords="513,382,513,603,610,603,611,566,682,567,681,381" class="area-buble" href="#"/>
        <area shape="poly" coords="525,184,527,340,596,340,597,387,675,388,675,566,775,565,775,222,642,222,642,182" class="area-buble" href="#"/>
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
