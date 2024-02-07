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

if ($position == "3") {
    echo '<div class="section-switch section3-switch">
	<img src="/custom/sktus/img/poz3/section-switch/map.png" class="switch-image switch-active' . $section . '" usemap="#switchmap" />
  <div class="switch-hovers">
    <img data-src="/custom/sktus/img/poz3/section-switch/1.png" />
    <img data-src="/custom/sktus/img/poz3/section-switch/2.png" />
    <img data-src="/custom/sktus/img/poz3/section-switch/3.png" />
    <img data-src="/custom/sktus/img/poz3/section-switch/4.png" />
    <img data-src="/custom/sktus/img/poz3/section-switch/5.png" />
  </div>
  <map name="switchmap">
    <area shape="poly" coords="0,101,44,101,44,162,0,162" class="switch-area" href="/doma/pozitsiya-3/1-podezd/1-etazh"/>
    <area shape="poly" coords="0,101,44,101,44,42,0,42" class="switch-area" href="/doma/pozitsiya-3/2-podezd/1-etazh"/>
    <area shape="poly" coords="0,42,0,0,55,0,55,42" class="switch-area" href="/doma/pozitsiya-3/3-podezd/1-etazh"/>
    <area shape="poly" coords="55,0,55,42,106,42,106,0" class="switch-area" href="/doma/pozitsiya-3/4-podezd/1-etazh"/>
    <area shape="poly" coords="106,42,106,0,167,0,167,42" class="switch-area" href="/doma/pozitsiya-3/5-podezd/1-etazh"/>
  </map>
</div>';
} else if ($position == "6") {
    echo '<div class="section-switch section6-switch">
  <div class="compass compass-pos6"></div>
  <img src="/custom/sktus/img/poz6/section-switch/map.png" class="switch-image switch-active' . $section . '" usemap="#switchmap" />
  <div class="switch-hovers">
    <img data-src="/custom/sktus/img/poz6/section-switch/1.png" />
    <img data-src="/custom/sktus/img/poz6/section-switch/2.png" />
    <img data-src="/custom/sktus/img/poz6/section-switch/3.png" />
    <img data-src="/custom/sktus/img/poz6/section-switch/4.png" />
    <img data-src="/custom/sktus/img/poz6/section-switch/5.png" />
    <img data-src="/custom/sktus/img/poz6/section-switch/6.png" />
  </div>
  <div>
      <map name="switchmap">
        <area shape="poly" coords="1,9,33,0,48,17,56,32,58,46,34,70,9,40,1,22" class="switch-area" href="/doma/pozitsiya-6/blok-a/1-etazh"/>
        <area shape="poly" coords="35,71,60,46,80,52,94,61,102,71,93,105,83,104,61,95" class="switch-area" href="/doma/pozitsiya-6/blok-b/1-etazh"/>
        <area shape="poly" coords="95,105,103,72,116,67,134,67,147,72,147,109,135,112,124,113,112,112,95,105" class="switch-area" href="/doma/pozitsiya-6/blok-v/1-etazh"/>
        <area shape="poly" coords="148,110,148,72,162,67,180,67,193,72,193,110,182,112,160,113" class="switch-area" href="/doma/pozitsiya-6/blok-g/1-etazh"/>
        <area shape="poly" coords="194,109,194,72,208,67,226,67,240,72,240,109,222,113,206,113" class="switch-area" href="/doma/pozitsiya-6/blok-d/1-etazh"/>
        <area shape="poly" coords="240,109,240,72,254,67,272,67,288,71,288,110,270,113,253,113" class="switch-area" href="/doma/pozitsiya-6/blok-e/1-etazh"/>
      </map>
      <div class="switch-signs">
        <div class="switch-sign1">14 эт.</div>
        <div class="switch-sign2">16 эт.</div>
        <div class="switch-sign3">14 эт.</div>
        <div class="switch-sign4">12 эт.</div>
        <div class="switch-sign5">12 эт.</div>
        <div class="switch-sign6">10 эт.</div>
      </div>
  </div>
    
  </div>
  <div>
</div>
';
} else if ($position == "6a") {
    echo '<div class="section-switch section6a-switch">
    <div class="compass-6a">
      <img src="/custom/sktus/img/compasses/compass-6a.png" />
   </div>
  <img src="/custom/sktus/img/poz6a/section-switch/map.png" class="switch-image switch-active' . $section . '" usemap="#switchmap" />
  <div class="switch-hovers">
    <img data-src="/custom/sktus/img/poz6a/section-switch/1.png" />
    <img data-src="/custom/sktus/img/poz6a/section-switch/2.png" />
    <img data-src="/custom/sktus/img/poz6a/section-switch/3.png" />
    <img data-src="/custom/sktus/img/poz6a/section-switch/4.png" />
  </div>
  <div>
      <map name="switchmap">
        <area shape="poly" coords="0,0,0,51,61,52,61,0" class="switch-area" href="/doma/pozitsiya-6a/1-podezd/1-etazh"/>
        <area shape="poly" coords="63,0,63,53,125,52,125,0" class="switch-area" href="/doma/pozitsiya-6a/2-podezd/1-etazh"/>
        <area shape="poly" coords="125,0,125,53,182,51,205,1" class="switch-area" href="/doma/pozitsiya-6a/3-podezd/1-etazh"/>
        <area shape="poly" coords="205,8,182,48,197,59,268,89,290,44,221,11" class="switch-area" href="/doma/pozitsiya-6a/4-podezd/1-etazh"/>
      </map>
  </div>
    
  </div>
  <div>
</div>
';
} else if ($position == "7") {
    echo '<div class="section-switch section7-switch">
  <div class="compass compass-pos7"></div>
  <img src="/custom/sktus/img/poz7/section-switch/map.png" class="switch-image switch-active' . $section . '" usemap="#switchmap" />
  <div class="switch-hovers">
    <img data-src="/custom/sktus/img/poz7/section-switch/1.png" />
    <img data-src="/custom/sktus/img/poz7/section-switch/2.png" />
    <img data-src="/custom/sktus/img/poz7/section-switch/3.png" />
    <img data-src="/custom/sktus/img/poz7/section-switch/4.png" />
    <img data-src="/custom/sktus/img/poz7/section-switch/5.png" />
    <img data-src="/custom/sktus/img/poz7/section-switch/6.png" />
  </div>
  <div>
    <map name="switchmap">
      <area shape="poly" coords="4,112,4,68,44,68,44,112" class="switch-area" href="/doma/pozitsiya-7/blok-a/1-etazh/"/>
      <area shape="poly" coords="10,68,10,41,37,8,68,8,68,37,41,68" class="switch-area" href="/doma/pozitsiya-7/blok-b/1-etazh"/>
      <area shape="poly" coords="68,37,68,9,93,0,118,9,118,41,78,41" class="switch-area" href="/doma/pozitsiya-7/blok-v/1-etazh"/>
      <area shape="poly" coords="120,38,120,10,146,0,173,9,173,41,132,41" class="switch-area" href="/doma/pozitsiya-7/blok-g/1-etazh"/>
      <area shape="poly" coords="173,38,173,9,193,1,210,1,228,9,229,37,216,41,187,41" class="switch-area" href="/doma/pozitsiya-7/blok-d/1-etazh"/>
      <area shape="poly" coords="229,37,229,9,248,1,265,1,283,9,283,37,271,41,241,41" class="switch-area" href="/doma/pozitsiya-7/blok-e/1-etazh"/>
    </map>
    <div class="switch-signs">
      <div class="switch-sign1-poz7">14 эт.</div>
      <div class="switch-sign2-poz7">16 эт.</div>
      <div class="switch-sign3-poz7">14 эт.</div>
      <div class="switch-sign4-poz7">12 эт.</div>
      <div class="switch-sign5-poz7">12 эт.</div>
      <div class="switch-sign6-poz7">10 эт.</div>
    </div>
  </div>
    
  </div>
  <div>
</div>
';
} else if ($position == "7a") {
    echo '<div class="section-switch section7a-switch">
    <div class="compass-7a">
      <img src="/custom/sktus/img/compasses/compass-7a.png" />
   </div>
  <img src="/custom/sktus/img/poz7a/section-switch/map.png" class="switch-image switch-active' . $section . '" usemap="#switchmap" />
  <div class="switch-hovers">
    <img data-src="/custom/sktus/img/poz7a/section-switch/1.png" />
    <img data-src="/custom/sktus/img/poz7a/section-switch/2.png" />
    <img data-src="/custom/sktus/img/poz7a/section-switch/3.png" />
  </div>
  <div>
      <map name="switchmap">
        <area shape="poly" coords="0,0,0,59,104,59,103,0" class="switch-area" href="/doma/pozitsiya-7a/1-podezd/1-etazh"/>
        <area shape="poly" coords="103,0,102,59,177,59,177,0" class="switch-area" href="/doma/pozitsiya-7a/2-podezd/1-etazh"/>
        <area shape="poly" coords="175,0,174,59,248,58,248,0" class="switch-area" href="/doma/pozitsiya-7a/3-podezd/1-etazh"/>
      </map>
  </div>
    
  </div>
  <div>
</div>
';
} else if ($position == "24") {
  echo '<div class="section-switch poz24-section-switch">
  <div class="poz24-compass">
    <img src="/custom/sktus/img/poz24/compass.png" />
 </div>
<img src="/custom/sktus/img/poz24/section-switch/map.png" class="switch-image switch-active' . $section . '" usemap="#switchmap" />
<div class="switch-hovers">
  <img data-src="/custom/sktus/img/poz24/section-switch/1.png" />
  <img data-src="/custom/sktus/img/poz24/section-switch/2.png" />
  <img data-src="/custom/sktus/img/poz24/section-switch/3.png" />
  <img data-src="/custom/sktus/img/poz24/section-switch/4.png" />
  <img data-src="/custom/sktus/img/poz24/section-switch/5.png" />
  <img data-src="/custom/sktus/img/poz24/section-switch/6.png" />
  <img data-src="/custom/sktus/img/poz24/section-switch/7.png" />
  <img data-src="/custom/sktus/img/poz24/section-switch/8.png" />
</div>
<map name="switchmap">
  <area shape="poly" coords="0,115,19,125,38,96,13,84" class="switch-area" href="/doma/pozitsiya-24/1-podezd/1-etazh"/>
  <area shape="poly" coords="15,80,42,97,60,65,30,51" class="switch-area" href="/doma/pozitsiya-24/2-podezd/1-etazh"/>
  <area shape="poly" coords="35,51,60,68,77,40,52,22" class="switch-area" href="/doma/pozitsiya-24/3-podezd/1-etazh"/>
  <area shape="poly" coords="52,24,77,40,82,31,108,28,121,9,99,1,66,9" class="switch-area" href="/doma/pozitsiya-24/4-podezd/1-etazh"/>
  <area shape="poly" coords="120,8,107,29,143,52,158,31" class="switch-area" href="/doma/pozitsiya-24/5-podezd/1-etazh"/>
  <area shape="poly" coords="157,32,144,53,181,77,194,56" class="switch-area" href="/doma/pozitsiya-24/6-podezd/1-etazh"/>
  <area shape="poly" coords="195,56,181,78,218,100,232,79" class="switch-area" href="/doma/pozitsiya-24/7-podezd/1-etazh"/>
  <area shape="poly" coords="233,79,218,101,254,124,267,104" class="switch-area" href="/doma/pozitsiya-24/8-podezd/1-etazh"/>
</map>
</div>';
} else if ($position == "25") {
    echo '<div class="section-switch poz25-section-switch">
    <div class="compass-25">
      <img src="/custom/sktus/img/poz25/compass.png" />
   </div>
	<img src="/custom/sktus/img/poz25/section-switch/map.png" class="switch-image switch-active' . $section . '" usemap="#switchmap" />
  <div class="switch-hovers">
    <img data-src="/custom/sktus/img/poz25/section-switch/1.png" />
    <img data-src="/custom/sktus/img/poz25/section-switch/2.png" />
    <img data-src="/custom/sktus/img/poz25/section-switch/3.png" />
    <img data-src="/custom/sktus/img/poz25/section-switch/4.png" />
    <img data-src="/custom/sktus/img/poz25/section-switch/5.png" />
  </div>
  <map name="switchmap">
    <area shape="poly" coords="0,25,46,77,84,41,53,10,28,1" class="switch-area" href="/doma/pozitsiya-25/1-podezd/1-etazh"/>
    <area shape="poly" coords="46,75,94,126,128,94,100,59,82,44" class="switch-area" href="/doma/pozitsiya-25/2-podezd/1-etazh"/>
    <area shape="poly" coords="131,93,94,127,118,144,183,144,203,118,174,89" class="switch-area" href="/doma/pozitsiya-25/3-podezd/1-etazh"/>
    <area shape="poly" coords="169,85,208,122,243,79,204,47" class="switch-area" href="/doma/pozitsiya-25/4-podezd/1-etazh"/>
    <area shape="poly" coords="205,46,245,80,278,44,249,9" class="switch-area" href="/doma/pozitsiya-25/5-podezd/1-etazh"/>
  </map>
</div>';
}
