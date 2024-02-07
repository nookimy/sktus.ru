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

if ($position == "4") {
    echo '<div class="section-switch pantry-switch poz4-switch">
    <img src="/custom/sktus/img/poz4/nav-map.png" class="switch-image switch-active' . $section . '" usemap="#switchmap" />
    <div class="switch-hovers">
      <img data-src="/custom/sktus/img/poz4/nav-a.png" />
      <img data-src="/custom/sktus/img/poz4/nav-b.png" />
      <img data-src="/custom/sktus/img/poz4/nav-v.png" />
      <img data-src="/custom/sktus/img/poz4/nav-g.png" />
    </div>
  <div>
  <map name="switchmap">
    <area shape="poly" coords="0,15,6,38,42,75,60,80,79,48,75,41,37,2,30,0" class="switch-area" href="/doma/pozitsiya-4---kommercheskie-ploschadi/sektsiya-a/"/>
    <area shape="poly" coords="78,52,54,94,68,104,128,121,145,118,144,66,136,63,89,49,86,52" class="switch-area" href="/doma/pozitsiya-4---kommercheskie-ploschadi/sektsiya-b/"/>
    <area shape="poly" coords="146,69,146,118,164,121,223,104,238,95,212,49,202,49,154,62" class="switch-area" href="/doma/pozitsiya-4---kommercheskie-ploschadi/sektsiya-v/"/>
    <area shape="poly" coords="214,48,231,81,249,75,286,38,292,17,263,1,253,5,217,40" class="switch-area" href="/doma/pozitsiya-4---kommercheskie-ploschadi/sektsiya-g/"/>
  </map>
  </div>
    
  </div>
  <div>
</div>
';
} else if ($position == "5") {
    echo '<div class="section-switch pantry-switch poz5-pantry-switch">
    <img src="/custom/sktus/img/poz5/pantry/nav-map.png" class="switch-image switch-active' . $section . '" usemap="#switchmap" />
    <div class="switch-hovers">
      <img data-src="/custom/sktus/img/poz5/pantry/nav-a.png" />
      <img data-src="/custom/sktus/img/poz5/pantry/nav-b.png" />
      <img data-src="/custom/sktus/img/poz5/pantry/nav-v.png" />
      <img data-src="/custom/sktus/img/poz5/pantry/nav-g.png" />
      <img data-src="/custom/sktus/img/poz5/pantry/nav-d.png" />
    </div>
  <div>
  <map name="switchmap">
    <area shape="poly" coords="1,76,59,50,42,0,0,0" class="switch-area" href="/doma/pozitsiya-5---kommercheskie-ploschadi/sektsiya-a/"/>
    <area shape="poly" coords="1,76,59,50,95,104,64,146" class="switch-area" href="/doma/pozitsiya-5---kommercheskie-ploschadi/sektsiya-b/"/>
    <area shape="poly" coords="95,104,64,146,151,178,157,127" class="switch-area" href="/doma/pozitsiya-5---kommercheskie-ploschadi/sektsiya-v/"/>
    <area shape="poly" coords="151,178,157,127,222,118,244,164" class="switch-area" href="/doma/pozitsiya-5---kommercheskie-ploschadi/sektsiya-g/"/>
    <area shape="poly" coords="222,118,244,164,299,118,299,83,264,83" class="switch-area" href="/doma/pozitsiya-5---kommercheskie-ploschadi/sektsiya-d/"/>
  </map>
  </div>
    
  </div>
  <div>
</div>
';
} else if ($position == "6a") {
    echo '<div class="section-switch pantry-switch section6a-switch">
    <div class="compass-6a">
      <img src="/custom/sktus/img/compasses/compass-6a.png" />
   </div>
  <img src="/custom/sktus/img/poz6a/section-switch/map.png" class="switch-image switch-active' . $section . '" usemap="#switchmap" />
  <div class="switch-hovers">
    <img data-src="/custom/sktus/img/poz6a/section-switch/blocks-AB.png" />
    <img data-src="/custom/sktus/img/poz6a/section-switch/3.png" />
    <img data-src="/custom/sktus/img/poz6a/section-switch/4.png" />
  </div>
  <div>
      <map name="switchmap">
        <area shape="poly" coords="0,0,127,0,127,54,0,54" class="switch-area" href="/doma/pozitsiya-6a---kommercheskie-ploschadi/sektsiya-ab/"/>
        <area shape="poly" coords="125,0,125,53,182,51,205,1" class="switch-area" href="/doma/pozitsiya-6a---kommercheskie-ploschadi/sektsiya-v/"/>
        <area shape="poly" coords="205,8,182,48,197,59,268,89,290,44,221,11" class="switch-area" href="/doma/pozitsiya-6a---kommercheskie-ploschadi/sektsiya-g/"/>
      </map>
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
    <img data-src="/custom/sktus/img/poz7a/section-switch/blocks-bv.png" />
  </div>
  <div>
      <map name="switchmap">
        <area shape="poly" coords="0,0,0,59,104,59,103,0" class="switch-area" href="/doma/pozitsiya-7a---kommercheskie-ploschadi/sektsiya-a/"/>
        <area shape="poly" coords="106,0,246,0,247,58,107,58" class="switch-area" href="/doma/pozitsiya-7a---kommercheskie-ploschadi/sektsiya-b-v/"/>
      </map>
  </div>
    
  </div>
  <div>
</div>
';
} else if ($position == "26") {
  echo '<div class="section-switch section26-switch">
  <img src="/custom/sktus/img/poz26/section-switch/map.png" class="switch-image switch-active' . $section . '" usemap="#switchmap" />
  <div class="switch-hovers">
    <img data-src="/custom/sktus/img/poz26/section-switch/Blocks-A.png" />
    <img data-src="/custom/sktus/img/poz26/section-switch/Blocks-B.png" />
    <img data-src="/custom/sktus/img/poz26/section-switch/Blocks-V.png" />
    <img data-src="/custom/sktus/img/poz26/section-switch/Blocks-G.png" />
    <img data-src="/custom/sktus/img/poz26/section-switch/Blocks-D-K.png" />
    <img data-src="/custom/sktus/img/poz26/section-switch/Blocks-L.png" />
  </div>
  <div>
      <map name="switchmap">
        <area shape="poly" coords="2, 139, 36, 139, 36, 160, 58, 161, 58, 182, 2, 181" class="switch-area" href="/doma/pozitsiya-26---kommercheskie-ploschadi/sektsiya-a/"/>
        <area shape="poly" coords="1, 91, 32, 91, 32, 135, 1, 135" class="switch-area" href="/doma/pozitsiya-26---kommercheskie-ploschadi/sektsiya-b/"/>
        <area shape="poly" coords="8, 40, 32, 40, 33, 86, 1, 86, 1, 39" class="switch-area" href="/doma/pozitsiya-26---kommercheskie-ploschadi/sektsiya-v/"/>
        <area shape="poly" coords="9, 36, 9, 0, 56, 1, 56, 33, 32, 31, 32, 37" class="switch-area" href="/doma/pozitsiya-26---kommercheskie-ploschadi/sektsiya-g/"/>
        <area shape="poly" coords="60, 31, 61, 1, 161, 1, 243, 85, 222, 106, 142, 32" class="switch-area"/>
        <area shape="poly" coords="224, 109, 245, 87, 269, 110, 270, 128, 255, 142" class="switch-area" href="/doma/pozitsiya-26---kommercheskie-ploschadi/sektsiya-l/"/>
      </map>
  </div>
    
  </div>
  <div>
</div>
';
} else if ($position == "lukina3") {
    echo '<div class="section-switch lukina3-switch">
        <div class="compass-7a">
          <img src="/custom/sktus/img/compasses/compass-7a.png" />
       </div>
      <img src="/custom/sktus/img/poz3/commercial/section-switch-map.png" class="switch-image switch-active' . $section . '" usemap="#switchmap" />
      <div class="switch-hovers">
        <img data-src="/custom/sktus/img/poz3/commercial/section-switch-map.png" />
      </div>
      <div>
          <map name="switchmap">
            <area shape="poly" coords="0,0,139,0,139,135,135,0" class="switch-area" href="/doma/pozitsiya-7a/1-podezd/1-etazh"/>
          </map>
      </div>
        
      </div>
      <div>
    </div>';
} else if ($position == "u38-3") {
  echo '<div class="section-switch u38-3-switch">
    <div class="compass-7a">
        <img src="/custom/sktus/img/compasses/compass-7a.png" />
    </div>
    <img src="/custom/sktus/img/u38-3/section-switch/map.png" class="switch-image switch-active' . $section . '" usemap="#switchmap" />
    <div class="switch-hovers">
      <img data-src="/custom/sktus/img/u38-3/section-switch/1.png" />
      <img data-src="/custom/sktus/img/u38-3/section-switch/2.png" />
      <img data-src="/custom/sktus/img/u38-3/section-switch/6.png" />
    </div>
    <div>
        <map name="switchmap">
          <area shape="poly" coords="0,95,0,141,69,141,69,114,36,112,30,106,29,94" class="switch-area" href="/doma/universitetskaya-383---kommercheskie-ploschadi/1-podezd"/>
          <area shape="poly" coords="74,112,73,141,140,140,140,91,115,89,114,105,108,112" class="switch-area" href="/doma/universitetskaya-383---kommercheskie-ploschadi/2-podezd"/>
          <area shape="poly" coords="0,47,0,93,30,92,28,46" class="switch-area" href="/doma/universitetskaya-383---kommercheskie-ploschadi/6-podezd"/>
        </map>
    </div>
      
    </div>
    <div>
  </div>';
}
