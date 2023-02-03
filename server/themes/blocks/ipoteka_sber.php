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
<style>
#domclick__calculator {
  margin-top: 29px;
}
#domclick__result {
  transition: margin 150ms;
}</style>
<div id="ipoteka-sberbank" class="popup">
<div class="popBox"><a href="#close" class="close"></a>
<div class="popScroll">
<div class="popheader">
<h2>Ипотечный калькулятор от Сбербанка</h2>
<div id="calculator"></div>
</div></div></div>
<a href="#close" class="lightbox">Свернуть</a></div>
<script type="text/javascript" src="https://cdn.domclick.ru/widget/mortgage/inject.js"></script>
<script>
var calculatorOptions = {
 apiKey: '728a2644-fefc-43c1-9054-5806c8fda7ef',
 excludedProduct: [],
 schema: {
   product: 4,
   realtyDiscount: false
 },
 excludedDiscounts: ['realtyDiscount'],
};
domclick.mortgage.ready(function (mortgage) {
  mortgage('calculator',
    { calculator: calculatorOptions },
    { cssSuffix: 'universal' }
  );
});
</script>