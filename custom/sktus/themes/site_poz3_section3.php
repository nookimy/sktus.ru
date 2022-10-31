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
    <insert name="show_sectionswitch" position="3" section="3">
    <a href="#" class="backbutton"></a>
    <div class="section-wrap poz3-section3">
      <img src="/custom/sktus/img/poz3/poz3-sectionmap.png" class="areaimg" usemap="#areamap" />
      <div class="sectioninfo">
        <p style="margin-left:220px;margin-top:236px;"><strong>3</strong> 97,7м<sup>2</sup></p>
        <p style="margin-left:485px;margin-top:156px;"><strong>1</strong> 38,9м<sup>2</sup></p>
        <p style="margin-left:663px;margin-top:240px;"><strong>2</strong> 84,8м<sup>2</sup></p>
        <p style="margin-left:573px;margin-top:444px;"><strong>2</strong> 76,7м<sup>2</sup></p>
      </div>
      <div class="area-hovers">
        <img data-src="/custom/sktus/img/poz3/poz3-section3-room1.png" />
        <img data-src="/custom/sktus/img/poz3/poz3-section3-room2.png" />
        <img data-src="/custom/sktus/img/poz3/poz3-section3-room3.png" />
        <img data-src="/custom/sktus/img/poz3/poz3-section3-room4.png" />
      </div>
      <map name="areamap">
        <area shape="poly" coords="404,211,468,164,577,234,504,293" class="area-buble" href="#"/>
        <area shape="poly" coords="427,132,467,161,397,210,436,241,411,259,450,294,319,396,290,368,294,344,310,333,238,263" class="area-buble" href="#"/>
        <area shape="poly" coords="505,293,611,205,789,334,707,419,592,326,570,345" class="area-buble" href="#"/>
        <area shape="poly" coords="591,333,699,421,552,569,492,513,479,525,449,528,412,492" class="area-buble" href="#"/>
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
