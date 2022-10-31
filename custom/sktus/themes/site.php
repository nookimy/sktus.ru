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
  <meta name="viewport" content="width=1460">
  <link rel="icon" type="image/png" href="<insert name="custom" path="favicon.png" absolute="true">"/>
  <link href="<insert name="custom" path="css/reset.css" absolute="true">" rel="stylesheet" type="text/css">
  <link href="<insert name="custom" path="css/style.css" absolute="true">" rel="stylesheet" type="text/css">
  <link href="<insert name="custom" path="css/owl.carousel.min.css" absolute="true">" rel="stylesheet" type="text/css">
  <link href="<insert name="custom" path="css/owl.theme.default.min.css" absolute="true">" rel="stylesheet" type="text/css">
  <link href="<insert name="custom" path="css/jquery.mCustomScrollbar.min.css" absolute="true">" rel="stylesheet" type="text/css">
  <insert name="show_block" module="tagmanager" position="head_end">

</head>
<body class="blurred inside <?php echo "sitepage-".$this->diafan->_site->id;?>">
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
    <insert name="show_path">
    <insert name="show_body">
  </main>
  <footer>
    <insert name="show_include" file="footer">
  </footer>
  <insert name="show_js">
  <script type="text/javascript" src="<insert name="custom" path="js/owl.carousel.min.js" absolute="true">"></script>
      <script>
      $(document).ready(function(){
          $(".newsphotos.owl-carousel").owlCarousel({
              dots: true,
              center: false,
              loop:false,
              nav: false,
              margin: 20,
              responsive:{
                  0:{
                      items:1,
                  },
                  1000:{
                      items:3,
                  }
              }
          });
          $(".newsphotos2item.owl-carousel").owlCarousel({
              dots: true,
              center: false,
              loop:false,
              nav: false,
              margin: 20,
              responsive:{
                  0:{
                      items:1,
                  },
                  1000:{
                      items:2,
                  }
              }
          });
      });
    </script>
  <insert name="show_custom_compressed_js" files="main.js">
  <insert name="show_include" file="counters">
  <insert name="show_block" module="tagmanager" position="body_end">
</body>
</html>
