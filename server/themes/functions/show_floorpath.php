<?php
/**
 * Шаблонный тег: выводит навигацию по сайту «Хлебные крошки».
 *
 * @param array $attributes атрибуты шаблонного тега
 * separator - разделитель ссылок в навигации
 * current - выводить текущий пункт: **true** – выводить ссылку на текущую страницу, по умолчанию ссылка на текущую страницу не выводится
 *
 * @package    DIAFAN.CMS
 * @author     diafan.ru
 * @version    6.0
 * @license    http://www.diafan.ru/license.html
 * @copyright  Copyright (c) 2003-2017 OOO «Диафан» (http://www.diafan.ru/)
 */

if (!defined('DIAFAN')) {
    $path = __FILE__;
    $i = 0;
    while (!file_exists($path . '/includes/404.php')) {
        if ($i == 10) {
            exit;
        }

        $i++;
        $path = dirname($path);
    }
    include $path . '/includes/404.php';
}

if ($this->diafan->_site->id == 1 && !$this->diafan->_site->breadcrumb) {
    return;
}
$attributes = $this->get_attributes($attributes, 'separator', 'current');

if ($this->diafan->_site->id == 1 && !$this->diafan->_route->cat && !$this->diafan->_route->show && !$this->diafan->_route->brand) {
    return;
}

$separator = $attributes["separator"] ? str_replace(array('src="/', '[', ']'), array('src="' . BASE_PATH, '<', '>'), $attributes["separator"]) : '/';
$current = !$attributes["current"] || $attributes["current"] == 'false' ? false : true;

if ($this->diafan->_site->parent_id) {
    $cache_meta = array(
        "name" => "page",
        "id" => $this->diafan->_site->id,
        "lang_id" => _LANG,
    );
    $page = $this->diafan->_cache->get($cache_meta, 'site');
    if (!isset($page["breadcrumb"])) {
        $page["breadcrumb"] = array();
        if ($this->diafan->_site->parents) {
            $rparents = DB::query_fetch_key("SELECT id, [name], parent_id FROM {site} WHERE id IN (%h)", implode(',', $this->diafan->_site->parents), "parent_id");
            $i = 0;
            while (!empty($rparents[$i])) {
                $row = $rparents[$i];
                unset($rparents[$i]);
                $i = $row["id"];
                $row["link"] = $this->diafan->_route->link($row["id"]);
                $page["breadcrumb"][] = $row;
            }
        }
        //сохранение кеша
        $this->diafan->_cache->save($page, $cache_meta, 'site');
    }
}
echo '<div class="floorpath">';
$caption = "";
$section = "";
if (strpos($this->diafan->_site->titlemodule, "этаж") !== false) {
    $caption = '<strong>' . $this->diafan->_site->titlemodule . '</strong>';
}

if ($this->diafan->_site->breadcrumb) {
    foreach ($this->diafan->_site->breadcrumb as $breadcrumb) {
        if ($this->diafan->_site->breadcrumb[0] == $breadcrumb) {
            $breadcrumb["name"] = $this->diafan->_useradmin->get($breadcrumb["name"], 'name', $this->diafan->_site->id, 'site', _LANG);
        }
        if (strpos($breadcrumb["name"], "этаж") !== false) {
            $caption = '<strong>' . $breadcrumb["name"] . '</strong>';
        }
        if (strpos($breadcrumb["name"], "подъезд") !== false) {
            $section = ' / ' . $breadcrumb["name"];
        }
        if (strpos($breadcrumb["name"], "Позиция") !== false) {
            $position = $breadcrumb["name"];
        }
    }
}
echo $caption . $section;
echo '<div class="floorpath-position">'.$position.'</div>';
echo '</div>';
