<?php
if (!defined("DIAFAN")) {
    include dirname(dirname(__FILE__)) . '/includes/404.php';
}
?><!DOCTYPE HTML>
<html>
<head>
<title>Ошибка 404 страница не найдена</title>
<!-- NT -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WN58XJ5');</script>
<!-- End NT -->
  <insert name="show_head">
  <meta name="viewport" content="width=1201">
  <link rel="icon" type="image/png" href="<insert name="custom" path="favicon.png" absolute="true">"/>
  <insert name="show_css" files="reset.css, style.css, owl.carousel.min.css, jquery.mCustomScrollbar.min.css">
</head>
<body class="blurred inside <?php echo "sitepage-".$this->diafan->_site->id;?>">
<!-- NT (noscript)-->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WN58XJ5"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End NT (noscript) -->
  <insert name="show_form" module="feedback" id="6" template="requestcall">
  <a class="header-logo" href="<insert name="path">" title="Микрорайон Университет"></a>
  <insert name="show_include" file="badges">
  <menu>
    <insert name="show_block" module="menu" id="1" tag_start_1="[div class=`menutop`]" tag_start_2="" tag_level_start_2="[div class=`submenu`]" tag_level_end_2="[/div]" tag_end_after_children_1="[/div]" tag_end_after_children_2="">
  </menu>
  <main>
    
      <div class="error">
        <div class="error-loupe">
          <img src="http://www.diafan.ru/img/error404/loupe.png" />
        </div>
        <h1 class="spec-header">
          СТРАНИЦА НЕ НАЙДЕНА
        </h1>
        <div class="news-block-text">
          Страницы по запрашиваемому вами адресу, к сожалению, не существует.</br> 
		  Это, бывает, случается из-за битых или устаревших ссылок.<br>
		  Приносим извинения за предоставленные неудобства!
        </div>
        
    </div>
  </main>
  <footer>
    <insert name="show_include" file="footer">
  </footer>
  <insert name="show_js">
  <insert name="show_custom_compressed_js" files="main.js,owl.carousel.min.js">
  <insert name="show_include" file="counters">
</body>
</html>
