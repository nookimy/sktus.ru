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
    <meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=0.7, user-scalable=yes" />
    <link href="<insert name="path">css/default.css" rel="stylesheet" type="text/css">
    <link href="<insert name="path">css/style.css" rel="stylesheet" type="text/css">
    <link href="<insert name="path">css/m/style.css" rel="stylesheet" type="text/css">
    <insert name="show_head">

        </head>
<body>
<!-- NT (noscript)-->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WN58XJ5"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End NT (noscript) --><!-- NT (noscript)-->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WN58XJ5"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End NT (noscript) -->

<div id="side-menu" class="slide_menu">
    <!-- шаблонный тег вывода первого меню (параметр id=1). Настраивается в файле modules/menu/views/menu.view.show_block_topmenu.php
                Документация тега http://www.diafan.ru/dokument/full-manual/templates-functions/#show_block_menu -->
    <insert name="show_block" module="menu" id="1" template="topmenu">
</div>

<div class="slide">
    <insert name="show_include" file="mheader">
        <div id="h"><h1><insert name="show_h1"></h1></div>
        <insert name="show_links" module="site">
            <div id="content">
                <insert name="show_text">
                    <insert name="show_module">
                        <insert name="show_block" module="news" count="2">
            </div>
            <insert name="show_block" module="menu"
                    id="2"
                    tag_level_start_1="[ul id=`menu`]"
                    tag_start_1="[li]"
                    tag_end_1="[/li]"
                    tag_level_end_1="[/ul]"
                    tag_level_start_2=""
                    tag_start_2="[li class='sub']"
                    tag_end_2="[/li]"
                    tag_level_end_2=""
            >
                <div id="footer" class="footer_inside">
                    <div id="to_full"><a href="<insert name="path_url" mobile="no">?mobile=no">Полная версия сайта</a></div>
                    &copy; <insert name="show_year"> <insert name="title">
                </div>
</div>
<!-- шаблонный тег show_js подключает JS-файлы. Описан в файле themes/functions/show_js.php. -->
<insert name="show_js">
    <script type="text/javascript" src="<insert name="custom" path="js/main.js" absolute="true">" charset="UTF-8"></script>

    <insert name="show_include" file="counters">

        </body>
        </html>
