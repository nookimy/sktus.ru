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
<script type="text/javascript" src="<insert name="custom" path="js/readmore.js" absolute="true">"></script>
<!-- End NT -->
  <insert name="show_block" module="tagmanager" position="head_start">
  <insert name="show_head">
  <meta name="viewport" content="width=1201">
  <link rel="icon" type="image/png" href="<insert name="custom" path="img/favicon.png" absolute="true">">
  <link rel="canonical" href="https://sktus.ru"/>
  <insert name="show_css" files="reset.css, style.css">
  <insert name="show_block" module="tagmanager" position="head_end">

</head>
<body class="unblurred <?php echo isset($_COOKIE['start-page-version']) && $_COOKIE['start-page-version'] == '2' ? 'unblurred--ver2' : '';?> <?php echo "sitepage-".$this->diafan->_site->id;?>">
<!-- NT (noscript)-->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WN58XJ5"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End NT (noscript) -->
  <insert name="show_block" module="tagmanager" position="body_start">
  <insert name="show_form" module="feedback" id="6" template="requestcall">
  <a class="header-logo" href="<insert name="path">" title="Микрорайон Университет"></a>
  <insert name="show_include" file="badges">
      <menu>
          <insert name="show_block" module="menu" id="1" tag_start_1="[div class=`menutop`]" tag_start_2="" tag_level_start_2="[div class=`submenu`]" tag_level_end_2="[/div]" tag_end_after_children_1="[/div]" tag_end_after_children_2="">
      </menu>
  <main>
  	<!--Начало блока верхних баннеров-->
<insert name="show_block" module="photo" site_id="152" count="100" template="slider">
    <!--Конец блока верхних баннеров-->
    <insert name="show_include" file="start-page-map--ver<?php echo isset($_COOKIE['start-page-version']) ? $_COOKIE['start-page-version'] : '1';?>">
  </main>
    <insert name="show_block" module="site" id="7">
    <insert name="show_block" module="site" id="6">
  <footer>
    <insert name="show_include" file="footer">
  </footer>
  <insert name="show_block" module="site" id="5">
  <insert name="show_js">
  <insert name="show_custom_compressed_js" files="main.js">
  <insert name="show_include" file="counters">
  <insert name="show_block" module="tagmanager" position="body_end">
</body>
</html>
