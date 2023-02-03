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
<div id="opendoors" class="popup">
  <div class="popBox"><a href="#close" class="close opendoors-close"></a>
    <div class="popScroll">
      <div class="popheader">
        <div class="open-doors">
          <div class="open-doors__title-wrapper">
            <p class="open-doors__date page__text">17 августа</p>
            <p class="open-doors__time page__text">10:00-13:00</p>
            <p class="open-doors__title page__title">День открытых дверей</p>
            <p class="open-doors__subtitle">в микрорайоне Университет</p>
          </div>
          <div class="open-doors__description-wrapper">
            <p class="open-doors__description">Всем пришедшим дарим подарочный сертификат</p>
            <p class="open-doors__amount">50 000 ₽</p>
          </div>
          <a class="open-doors__btn btn js-open-doors-btn" href="#">Записаться</a>
          <insert name="show_form" module="feedback" site_id="79" template="open-doors">
        </div>
      </div>
    </div>
  </div>
  <a href="#close" class="lightbox opendoors-lightbox">Свернуть</a>
</div>
