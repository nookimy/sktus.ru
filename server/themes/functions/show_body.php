<?php
/**
 * Шаблонный тег: выводит основной контент страницы: заголовка (если не запрещен его вывод в настройке странице «Не показывать заголовок»), текста страницы и прикрепленного модуля. Заменяет три тега: show_h1, show_text, show_module.
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

ob_start();
$this->functions('show_h1');
$name = ob_get_contents();
ob_end_clean();
if ($name) {
    echo '<span><a style="color: #004d94; font-size: 20px;">'.mb_strimwidth("$name", 0, 60, "...").'</a></span>';
    echo "<div class='clear clearfix'></div>";
}

$this->functions('show_text');
$this->functions('show_module');
