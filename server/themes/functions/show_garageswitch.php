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

if ($position == "6") {
  echo '<div class="section-switch garage-switch poz6-garage-switch">
    <img src="/custom/sktus/img/poz6/garage/nav-map.png" class="switch-image switch-active' . $section . '" usemap="#switchmap" />
    <div class="switch-hovers">
      <img data-src="/custom/sktus/img/poz6/garage/nav-a.png" />
      <img data-src="/custom/sktus/img/poz6/garage/nav-b.png" />
      <img data-src="/custom/sktus/img/poz6/garage/nav-v.png" />
      <img data-src="/custom/sktus/img/poz6/garage/nav-g.png" />
      <img data-src="/custom/sktus/img/poz6/garage/nav-d.png" />
      <img data-src="/custom/sktus/img/poz6/garage/nav-e.png" />
    </div>
  <div>
  <map name="switchmap">
    <area shape="poly" coords="0,48,33,38,55,61,59,84,34,109,25,103,0,62" class="switch-area" href="/pozitsiya-6---nezhilye-pomescheniya/pozitsiya-6---nezhilye-pomescheniya---sektsiya-a/"/>
    <area shape="poly" coords="35,110,60,85,89,93,102,110,93,145,56,135" class="switch-area" href="/pozitsiya-6---nezhilye-pomescheniya/sektsiya-b/"/>
    <area shape="poly" coords="95,145,104,110,125,103,147,111,147,148,135,152,112,152" class="switch-area" href="/pozitsiya-6---nezhilye-pomescheniya/sektsiya-v/"/>
    <area shape="poly" coords="148,149,148,110,171,101,193,111,193,149,171,156" class="switch-area" href="/pozitsiya-6---nezhilye-pomescheniya/sektsiya-g/"/>
    <area shape="poly" coords="194,149,194,110,218,101,239,110,239,149,217,155" class="switch-area" href="/pozitsiya-6---nezhilye-pomescheniya/sektsiya-d/"/>
    <area shape="poly" coords="241,149,241,110,262,102,288,110,288,149,263,155" class="switch-area" href="/pozitsiya-6---nezhilye-pomescheniya/sektsiya-e/"/>
  </map>
  </div>
    
  </div>
  <div>
</div>
';
}
if ($position == "2") {
  echo '<div class="section-switch garage-switch poz2-garage-switch">
    <img src="/custom/sktus/img/poz2/garage/nav-map.png" class="switch-image switch-active' . $section . '" usemap="#switchmap" />
    <div class="switch-hovers">
      <img data-src="/custom/sktus/img/poz2/garage/nav-a.png" />
      <img data-src="/custom/sktus/img/poz2/garage/nav-b.png" />
      <img data-src="/custom/sktus/img/poz2/garage/nav-v.png" />
      <img data-src="/custom/sktus/img/poz2/garage/nav-g.png" />
    </div>
  <div>
  <map name="switchmap">
    <area shape="poly" coords="34,39,82,86,62,106,14,59" class="switch-area" href="https://sktus.ru/pozitsiya-2---parking/sektsiya-a/"/>
    <area shape="poly" coords="86,88,104,104,130,105,130,136,92,132,67,109" class="switch-area" href="https://sktus.ru/pozitsiya-2---parking/sektsiya-b/"/>
    <area shape="poly" coords="134,105,184,104,195,132,133,135" class="switch-area" href="https://sktus.ru/pozitsiya-2---parking/sektsiya-v/"/>
    <area shape="poly" coords="188,103,248,46,269,64,198,131" class="switch-area" href="https://sktus.ru/pozitsiya-2---parking/sektsiya-g/"/>
  </map>
  </div>
    
  </div>
  <div>
</div>
';
}