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
<div title="Нежилые помещения" class="badge-commercial">
  <i></i>
  <div>
    <a href="/pozitsiya-4---kladovye-pomescheniya/">Позиция №4</a>
    <a href="/pozitsiya-5---nezhilye-pomescheniya/">Позиция №5</a>
    <a href="/pozitsiya-6a---kladovye-pomescheniya/">Позиция №6a</a>
    <a href="/pozitsiya-7---nezhilye-pomescheniya/">Позиция №7</a>
    <a href="/pozitsiya-7a---kladovye-pomescheniya/">Позиция №7a</a>
    <a href="/pozitsiya-25---kladovye-pomescheniya//">Позиция №25</a>
  </div>
</div>
<div title="Подземная парковка" class="badge-parking">
  <i></i>
  <div>
    <a href="javascript:void()" onclick="pb_front_widget.show({houseId: 106066, accountId: 5828});">Лукина 18/20</a>
  </div>
</div>
<div title="Коммерческие площади" class="badge-commercialreal">
  <i></i>
  <noindex><a class="badge-commercialreal-details" href="http://bz.sktus.ru/" target="_blank">Подробнее</a></noindex>
  <div>
    <a href="/doma/universitetskaya-d-38-korp-1---kommercheskie-plosc/">Университетская, 38/1</a>
    <a href="/doma/universitetskaya-d-38-korp-2---kommercheskie-plosc/pomeschenie-1">Университетская, 38/2</a>
    <a href="/doma/pozitsiya-1---kommercheskie-ploschadi/pomeschenie-23/">Позиция №1 | Лукина, д.5</a>
    <a href="/doma/lukina-3---kommercheskie-ploschadi/">Позиция №3 | Лукина, д.3</a>
    <a href="/doma/pozitsiya-4---kommercheskie-ploschadi/">Позиция №4 | Миначева, д.25</a>
    <a href="/doma/pozitsiya-5---kommercheskie-ploschadi/">Позиция №5 | Миначева, д.21</a>
    <a href="/doma/pozitsiya-6a---kommercheskie-ploschadi/">Позиция №6а | Лукина, д.20</a>
    <a href="/doma/pozitsiya-7a---kommercheskie-ploschadi/">Позиция №7а | Лукина, д.18</a>
    <a href="/doma/pozitsiya-26---kommercheskie-ploschadi/">Позиция №26 | Лукина, д.9</a>
  </div>
</div>
<div class="cheb-jubilee cheb-jubilee--desktop">
    <a>
        <picture>
            <source type="image/webp" srcset="
                /custom/sktus/img/badges/cheb-jubilee-logo-175@1x.webp 1x,
                /custom/sktus/img/badges/cheb-jubilee-logo-175@2x.webp 2x,
                /custom/sktus/img/badges/cheb-jubilee-logo-175@3x.webp 3x">
            <source type="image/jpeg" srcset="
                /custom/sktus/img/badges/cheb-jubilee-logo-175@1x.png 1x,
                /custom/sktus/img/badges/cheb-jubilee-logo-175@2x.png 2x,
                /custom/sktus/img/badges/cheb-jubilee-logo-175@3x.png 3x">
            <img src="/custom/sktus/img/badges/cheb-jubilee-logo.png" alt="Логотип Чебоксарам 555 лет">
        </picture>
    </a>
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
