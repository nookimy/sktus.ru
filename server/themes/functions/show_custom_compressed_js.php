<?php
/**
 * Шаблонный тег: подключает JS-файлы. При включенном режиме разработки файлы будут объеденены и сжаты, что приведет к более быстрой загрузке файлов.
 *
 * @param array $attributes атрибуты шаблонного тега
 * files - перечень JS-файлов, которые нужно подключить. Файлы должны размещаться в папке *js*. Если файлов несколько, то названия должны быть разделены запятыми
 *
 * @package    DIAFAN.CMS
 * @author     alex@onmaster.ru
 * @version    6.0
 * @copyright  Copyright (c) 2018 OOO «Онлайн-Софт» (http://onmaster.ru/)
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

$attributes = $this->get_attributes($attributes, 'files');

$files = array();

$att_files = explode(',', $attributes["files"]);
foreach ($att_files as $file) {
    if (trim($file)) {
        $files[] = Custom::path('js/'.trim($file));
    }
}

$compress_files = File::compress($files, 'js');

if (is_array($compress_files)) {
    foreach ($compress_files as $file) {
        echo '<script type="text/javascript" src="'.BASE_PATH.$file.'"></script>';
    }
} else {
    echo '<script type="text/javascript" src="'.BASE_PATH.$compress_files.'"></script>';
}
