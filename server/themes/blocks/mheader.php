<?php
/**
 * Файл-блок шаблона
 *
 * @package    DIAFAN.CMS
 * @author     diafan.ru
 * @version    6.0
 * @license    http://www.diafan.ru/license.html
 * @copyright  Copyright (c) 2003-2017 OOO «Диафан» (http://www.diafan.ru/)
 */

if (! defined('DIAFAN')) {
    $path = __FILE__;
    $i = 0;
    while (! file_exists($path.'/includes/404.php')) {
        if ($i == 10) {
            exit;
        } $i++;
        $path = dirname($path);
    }
    include $path.'/includes/404.php';
}
?>
<div id="top-line">
    <div class="wrapper">       
      <div class="top-phone">      
        <insert name="show_block" module="site" id="1">
      </div> 
      <div class="top-line-right">
      </div>

    </div>
  </div>
<div id="top-menuline">  
    <div class="wrapper">
      <div style="font-size: 20px; padding: 10px 27px; background-color: #eee;">
        <insert name="show_href" alt="title">
      </div>                 
    </div>
</div>  