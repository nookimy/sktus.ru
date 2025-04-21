<?php
/**
 * Шаблонный тег: выводит схему подъездов
 *
 * @param array $attributes атрибуты шаблонного тега
 * position - номер позиции
 * section - номер подъезда
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

$attributes = $this->get_attributes($attributes, 'position', 'section');
$position = $attributes["position"];
$section = $attributes["section"];

if ($position == "5") {
  echo '<div class="section-switch pantry-switch poz5-pantry-switch">
    <img src="/custom/sktus/img/poz5/pantry/nav-map.png" class="switch-image switch-active' . $section . '" usemap="#switchmap" />
    <div class="switch-hovers">
      <img data-src="/custom/sktus/img/poz5/pantry/nav-b.png" />
      <img data-src="/custom/sktus/img/poz5/pantry/nav-g.png" />
      <img data-src="/custom/sktus/img/poz5/pantry/nav-d.png" />
    </div>
  <div>
  <map name="switchmap">
    <area shape="poly" coords="1,76,59,50,95,104,64,146" class="switch-area" href="/pozitsiya-5---nezhilye-pomescheniya/sektsiya-b/"/>
    <area shape="poly" coords="151,178,157,127,222,118,244,164" class="switch-area" href="/pozitsiya-5---nezhilye-pomescheniya/sektsiya-g/"/>
    <area shape="poly" coords="222,118,244,164,299,118,299,83,264,83" class="switch-area" href="/pozitsiya-5---nezhilye-pomescheniya/sektsiya-d/"/>
  </map>
  </div>
    
  </div>
  <div>
</div>
';
}