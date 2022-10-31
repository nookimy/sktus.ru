<?php
/**
 * Шаблон сайта для мобильной версии
 * 
 * @package    DIAFAN.CMS
 * @author     diafan.ru
 * @version    6.0
 * @license    http://www.diafan.ru/license.html
 * @copyright  Copyright (c) 2003-2017 OOO «Диафан» (http://www.diafan.ru/)
 */
 
if(! defined("DIAFAN"))
{
	$path = __FILE__; $i = 0;
	while(! file_exists($path.'/includes/404.php'))
	{
		if($i == 10) exit; $i++;
		$path = dirname($path);
	}
	include $path.'/includes/404.php';
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- NT -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WN58XJ5');</script>
<!-- End NT -->
<title><insert name="show_title"></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta content="Russian" name="language">
<meta content="DiAfan http://www.diafan.ru/" name="author">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="<insert name="custom" path="css/animate.min.css" absolute="true">" rel="stylesheet" type="text/css">
<link href="<insert name="custom" path="css/owl.carousel.min.css" absolute="true">" rel="stylesheet" type="text/css">
<link href="<insert name="custom" path="css/owl.theme.default.min.css" absolute="true">" rel="stylesheet" type="text/css">
<link href="<insert name="custom" path="css/jquery.modal.min.css" absolute="true">" rel="stylesheet" type="text/css">
<link href="<insert name="custom" path="css/mstyle.css" absolute="true">" rel="stylesheet" type="text/css">
<link href="<insert name="custom" path="css/mstyle1.css" absolute="true">" rel="stylesheet" type="text/css">
<insert name="show_head">



</head>
<body class="page page--inner" id="start">

<!-- NT (noscript)-->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WN58XJ5"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End NT (noscript) --><!-- NT (noscript)-->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WN58XJ5"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End NT (noscript) -->

<insert name="show_include" file="mheader1">
<main>
	<insert name="show_module">
</main>
<footer class="main-footer">
    <div class="page__wrap" id="up">
        <p class="main-footer__copyright">© 2015 - 2020<br>Микрорайон «Университет»</p>
        <a class="btn btn--light main-footer__btn" href="#start"><span>Наверх</span></a>
        <a class="main-footer__developer" href="https://onmaster.ru/" target="_blank">onmaster.ru</a>
    </div>
</footer>
<!-- шаблонный тег show_js подключает JS-файлы. Описан в файле themes/functions/show_js.php. -->
<insert name="show_js">
<script type="text/javascript" src="<insert name="custom" path="js/wow.min.js" absolute="true">"></script>
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
<script type="text/javascript" src="<insert name="custom" path="js/jquery.modal.min.js" absolute="true">"></script>
<script type="text/javascript" src="<insert name="custom" path="js/script.js" absolute="true">"></script>
<insert name="show_include" file="counters">
  <insert name="show_block" module="tagmanager" position="body_end">
</body>
</html>
