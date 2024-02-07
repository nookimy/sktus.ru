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
        <div class="opendoors-step1">
          <p class="opendoors-date"><strong>6</strong> апреля <span>2019</span></p>
          <i class="opendoors-logo"></i>
          <div class="clear"></div>
          <p class="opendoors-text1">День открытых дверей</p>
          <p class="opendoors-text2">в микрорайоне университет</p>
          <p class="opendoors-text3">Всем пришедшим дарим <span>cертификат на скидку 50 000 рублей</span></p>
          <a class="opendoors-button" href="#">Записаться на мероприятие <i></i></a>
          <insert name="show_form" module="feedback" site_id="79" template="opendoors">
        </div>
        <div class="opendoors-step2">
          <p class="opendoors-step2-caption">Уважаемый участник!</p>
          <p class="opendoors-step2-text1">День открытых дверей состоится 23 апреля 2019 с 10 до 13 ч.</p>
          <p class="opendoors-step2-text2">Место встречи – дополнительный офис продаж ТУС, ул.Х.М.Миначева д.21</p>
          <p class="opendoors-step2-text3">В программе: презентация строящихся и готовых объектов, консультация по ипотеке и трейд-ин, вручение подарочных сертификатов, кофе-брейк</p>
          <p class="opendoors-step2-text4">До встречи!</p>
        </div>
      </div>
    </div>
  </div>
  <a href="#close" class="lightbox opendoors-lightbox">Свернуть</a>
</div>
