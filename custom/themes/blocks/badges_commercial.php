<?php
/**
 * Футер
 *
 * @package    Diafan.CMS
 * @author     diafan.ru
 * @version    6.0
 * @license    http://www.diafan.ru/license.html
 * @copyright  Copyright (c) 2003-2016 OOO «Диафан» (http://diafan.ru)
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
?>
<div class="header-contact">
  <a href="#requestcall">
    <span class="header-contact__text">Заказать обратный звонок</span>
    <p class="header-contact__number">+ 7 (8352) <strong>32-45-75</strong></p>
  </a>
</div>
<p class="work-weekend">
  Мы работаем для вас
  <span class="work-weekend__text work-weekend__text--large">в субботу.</span>
</p>
<div title="Квартиры на продажу" class="badge-rooms">
  <span></span>
  <div class="badge-rooms-list">
    <insert name="show_include" file="video-popup">
      <a class="badge-rooms-red" href="javascript:void()" onclick="pb_front_widget.show({houseId: 113556, accountId: 5828});"><i>Дом строится</i> Позиция №8</a>
      <a class="badge-rooms-red" href="javascript:void()" onclick="pb_front_widget.show({houseId: 104698, accountId: 5828});"><i>Дом строится</i> Позиция №23</a>
      <a class="badge-rooms-green" href="javascript:void()" onclick="pb_front_widget.show({houseId: 94127, accountId: 5828});"><i>Дом сдан</i> Позиция №1</a>
      <a class="badge-rooms-green" href="javascript:void()" onclick="pb_front_widget.show({houseId: 94198, accountId: 5828});"><i>Дом сдан</i> Позиция №2</a>
      <a class="badge-rooms-green" href="javascript:void()" onclick="pb_front_widget.show({houseId: 94199, accountId: 5828});"><i>Дом сдан</i> Позиция №3</a>
  </div>
</div>
<div title="Подземная парковка" class="badge-parking">
  <i></i>
  <div>
    <a href="javascript:void()" onclick="pb_front_widget.show({houseId: 138747, accountId: 5828});">Миначева 13А</a>
    <a href="javascript:void()" onclick="pb_front_widget.show({houseId: 138746, accountId: 5828});">Позиция 10</a>
    <a href="javascript:void()" onclick="pb_front_widget.show({houseId: 106308, accountId: 5828});">Миначева 15Б</a>    
    <a href="javascript:void()" onclick="pb_front_widget.show({houseId: 106066, accountId: 5828});">Лукина 18/20</a>
  </div>
</div>
<div title="Коммерческие площади" class="badge-commercialreal">
  <i></i>
  <noindex><a class="badge-commercialreal-details" href="http://bz.sktus.ru/" target="_blank">Подробнее</a></noindex>
  <div>
    <a href="/doma/pozitsiya-7a---kommercheskie-ploschadi/">Лукина, д.18</a>
    <a href="/doma/pozitsiya-6a---kommercheskie-ploschadi/">Лукина, д.20</a>    
  </div>
</div>
<a class="badge-heart" href="https://sktus.ru/o-zastroyschike/nashi-dobrye-dela/"></a>
<a class="badge-spec" href="/spetspredlozheniya/" title="Специальные предложения">
  <svg class="badge-spec-small-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
       viewBox="-262 363.9 70 115" enable-background="new -262 363.9 70 115" xml:space="preserve">
        <path id="path-1" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round"
              stroke-dasharray="1.000000e-003,10" d="
            M-251.3,364.9h57.1v113h-57.1l-10.6-58.2L-251.3,364.9z"/>
    </svg>
  <svg class="badge-spec-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" width="177" height="115" x="0px" y="0px"
  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
       viewBox="-209 363.9 177 115" enable-background="new -209 363.9 177 115" xml:space="preserve">
        <path id="path-1" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round"
              stroke-dasharray="1.000000e-003,10" d="
        M-175.9,364.9h140.9v113h-140.9l-34.1-58.2L-175.9,364.9z"/>
    </svg>
</a>
<a class="badge-ipoteka" href="/mikrorayon-universitet/ipoteka/"><strong>Ипотека, </strong>рассрочка</a>
