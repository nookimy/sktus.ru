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
    <insert name="show_sectionswitch" position="6" section="1">
    <a href="#" class="backbutton"></a>
    <div class="section-wrap poz6-section1-after3">
      <img src="/custom/sktus/img/poz6/sectionmap.png" class="areaimg" usemap="#areamap" />
      <div class="sectioninfo">
        <p style="margin-left:326px;margin-top:249px;"><strong>3</strong> 102,1м<sup>2</sup></p>
        <p style="margin-left:649px;margin-top:249px;"><strong>2</strong> 77,65м<sup>2</sup></p>
        <p style="margin-left:346px;margin-top:428px;"><strong>2</strong> 65,3м<sup>2</sup></p>
        <p style="margin-left:562px;margin-top:428px;"><strong>1</strong> 45,4м<sup>2</sup></p>
        <p style="margin-left:635px;margin-top:428px;"><strong>1</strong> 42,2м<sup>2</sup></p>
      </div>
      <div class="area-hovers">
        <img data-src="/custom/sktus/img/poz6/section1-after3-room1.png" />
        <img data-src="/custom/sktus/img/poz6/section1-after3-room2.png" />
        <img data-src="/custom/sktus/img/poz6/section1-room3.png" />
        <img data-src="/custom/sktus/img/poz6/section1-room4.png" />
        <img data-src="/custom/sktus/img/poz6/section1-room5.png" />
      </div>
      <map name="areamap">
        <area shape="poly" coords="148,487,229,182,482,176,482,340,436,386,266,386,267,489,247,489,247,502,200,502" class="area-buble" href="#"/>
        <area shape="poly" coords="634,340,634,176,825,170,907,485,843,502,795,502,795,487,775,487,775,386,685,386" class="area-buble" href="#"/>
        <area shape="poly" coords="626,379,780,379,780,536,794,536,794,574,707,574,626,570" class="area-buble" href="#"/>
        <area shape="poly" coords="469,603,469,570,482,570,482,379,579,379,579,375,633,375,633,570,572,570,572,603,519,606" class="area-buble" href="#"/>
        <area shape="poly" coords="247,574,247,538,262,538,262,379,490,379,490,570,334,574" class="area-buble" href="#"/>
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
