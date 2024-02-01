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
<div class="areawrap start-page-version-1">
    <img src="/custom/sktus/img/map.png" class="areaimg" usemap="#areamap" />
    <div class="hover-info">
        <div>
            <h4>Позиция №<span></span></h4>
            <p class="hover-info-address"></p>
            <p class="hover-info-status"></p>
            <p class="hover-info-apartments"></p>
        </div>
    </div>
    <div class="area-hovers">
        <img data-src="/custom/sktus/img/hover-poz4.png" />
        <img data-src="/custom/sktus/img/hover-poz5.png" />
        <img data-src="/custom/sktus/img/hover-poz6.png" />
        <img data-src="/custom/sktus/img/hover-poz7.png" />
        <img data-src="/custom/sktus/img/hover-poz8.png" />
        <img data-src="/custom/sktus/img/hover-poz10.png" />
        <img data-src="/custom/sktus/img/hover-poz11.png" />
        <img data-src="/custom/sktus/img/hover-poz1.png" />
        <img data-src="/custom/sktus/img/hover-poz2.png" />
        <img data-src="/custom/sktus/img/hover-poz3.png" />
        <img data-src="/custom/sktus/img/hover-poz21.png" />
        <img data-src="/custom/sktus/img/hover-poz22.png" />
        <img data-src="/custom/sktus/img/hover-poz23.png" />
        <img data-src="/custom/sktus/img/hover-poz24.png" />
        <img data-src="/custom/sktus/img/hover-poz25.png" />
        <img data-src="/custom/sktus/img/hover-poz26.png" />
        <img data-src="/custom/sktus/img/hover-poz6a.png" />
        <img data-src="/custom/sktus/img/hover-poz7a.png" />
        <img data-src="/custom/sktus/img/hover-poz8a.png" />
        <img data-src="/custom/sktus/img/hover-school.png" />
        <img data-src="/custom/sktus/img/hover-detsad1.png" />
        <img data-src="/custom/sktus/img/hover-detsad2.png" />
        <img data-src="/custom/sktus/img/hover-parking-lukina20.png" />
    </div>
    <div class="house-numbers">
        <i class="house-number house-number-gray house-number-10">10</i>
        <i class="house-number house-number-gray house-number-11">11</i>
        <i class="house-number house-number-comfort house-number-1">1</i>
        <i class="house-number house-number-comfort house-number-2">2</i>
        <i class="house-number house-number-comfort house-number-3">3</i>
        <i class="house-number house-number-comfort house-number-23">23</i>
        <i class="house-number house-number-comfort house-number-8a">8a</i>
    </div>
    <div class="object-numbers">
        <i class="object-number object-school object-number-1"></i>
        <i class="object-number object-bank object-number-2"></i>
        <i class="object-number object-playground object-number-3"></i>
        <i class="object-number object-playground object-number-4"></i>
        <i class="object-number object-parking object-number-5"></i>
    </div>
    <div class="comfort-class comfort-class--start">
        <i class="house-comfort">Продажи открыты!</i>
    </div>
  <!--<div class="comfort-class comfort-class--poz8">
    <i class="house-comfort">Квартиры с ремонтом!</i>
  </div>
  <div class="comfort-class comfort-class--poz23">
      <i class="house-comfort">Продажи открыты!</i>
  </div>-->
  <map name="areamap">
    <!-- <area shape="poly" coords="213, 137, 220, 125, 272, 115, 292, 124, 316, 119, 344, 130, 425, 112, 507, 126, 507, 135, 539, 143, 537, 215, 428, 213, 393, 200, 265, 237, 247, 248, 209, 245, 211, 234, 218, 227" class="area-buble area-bubble-nolink" data-position="1" data-address="(ул. Лукина д.5)" data-status="Дом сдан"  data-apartments="Квартиры проданы" href="#"/>
    <area shape="poly" coords="469, 91, 544, 75, 569, 85, 663, 83, 666, 95, 754, 109, 754, 170, 714, 174, 713, 121, 658, 107, 621, 104, 588, 109, 510, 126, 470, 116" class="area-buble area-bubble-nolink" data-position="2" data-address="(ул. Лукина д.1)" data-status="Дом сдан" data-apartments="Квартиры проданы" href="#" />
    <area shape="poly" coords="509, 122, 589, 112, 619, 109, 712, 124, 710, 183, 625, 213, 540, 194, 539, 141, 507, 135" class="area-buble area-bubble-nolink" data-position="3" data-address="(ул. Лукина д.3)" data-status="Дом сдан" data-apartments="Квартиры проданы" href="#"/> -->

    <area shape="poly" coords="760, 121, 789, 105, 872, 103, 878, 95, 933, 100, 945, 130, 906, 128, 905, 185, 853, 184, 853, 156, 792, 154, 792, 186, 755, 183"
          class="area-buble area-bubble-nolink"
          data-position="4"
          data-address="(ул. Академика Х.М. Миначева  д.25)"
          data-apartments="Квартиры проданы">

    <area shape="poly" coords="910, 131, 956, 131, 955, 118, 996, 120, 996, 110, 1066, 111, 1109, 120, 1113, 129, 1113, 138, 1124, 149, 1073, 150, 1071, 176, 1007, 173, 1008, 188, 911, 185"
          class="area-buble area-bubble-nolink"
          data-position="5"
          data-address="(ул. Миначева  д.21)"
          data-status="Дом сдан"
          data-apartments="Квартиры проданы"/>

    <area shape="poly" coords="896, 189, 1010, 192, 1013, 178, 1076, 178, 1077, 154, 1145, 156, 1194, 164, 1196, 179, 1210, 189, 1205, 292, 1195, 292, 1205, 211, 1196, 197, 1154, 196, 1125, 222, 918, 247, 909, 265, 889, 266, 886, 256, 894, 252" class="area-buble area-bubble-nolink" data-position="6" data-status="Дом сдан"data-address="ул. Миначева д.19" data-apartments="Квартиры проданы"/>
    <area shape="poly" coords="916, 258, 1018, 259, 1131, 234, 1156, 197, 1189, 198, 1200, 212, 1196, 329, 1131, 346, 1137, 287, 1118, 283, 1063, 285, 1045, 305, 1022, 305, 993, 314, 992, 347, 970, 345, 966, 311, 954, 297, 914, 294" class="area-buble" data-position="7" data-address="ул. Академика Х.М.Миначева д.17" data-apartments="Квартиры проданы"/>

    <area shape="poly"
          coords="998, 316, 1061, 313, 1069, 289, 1130, 290, 1127, 363, 1135, 374, 1108, 386, 1108, 400, 1053, 383, 993, 402"
          class="area-buble area-bubble-nolink"
          data-position="8"
          data-address="Миначева,15"
          data-status="Дом сдан"
          data-apartments="Квартиры проданы"/>

    <area shape="poly" coords="915, 473, 959, 457, 958, 440, 994, 430, 995, 409, 1040, 390, 1083, 399, 1082, 422, 1130, 438, 1124, 515, 1090, 530, 1046, 512, 951, 556, 914, 547" class="area-buble area-bubble-nolink" data-position="10" data-status="Проект"/>
    <area shape="poly" coords="1086, 410, 1098, 401, 1113, 406, 1115, 384, 1145, 379, 1144, 356, 1189, 342, 1224, 348, 1225, 371, 1268, 384, 1263, 459, 1240, 471, 1193, 455, 1130, 483, 1129, 430, 1086, 422" class="area-buble area-bubble-nolink" data-position="11" data-status="Проект"/>

    <area shape="poly"
        coords="252, 593, 267, 587, 269, 572, 327, 558, 389, 590, 396, 740, 314, 772, 260, 743" class="area-buble"
        data-position="1"
        data-address="Лукина, 16" 
        data-status="Дом строится" 
        data-apartments="Квартиры в продаже"
        href="javascript:void()" onclick="pb_front_widget.show({houseId: 94127, accountId: 5828});"/>

    <area shape="poly"
        coords="411, 540, 432, 533, 432, 521, 475, 510, 490, 510, 491, 519, 543, 542, 545, 680, 473, 704, 418, 677" class="area-buble"
        data-position="2" data-address="Лукина, 16" data-status="Дом строится" data-apartments="Квартиры в продаже" href="javascript:void()"
        onclick="pb_front_widget.show({houseId: 94198, accountId: 5828});""/>

    <area shape="poly"
        coords="300, 495, 317, 488, 319, 477, 361, 463, 375, 464, 376, 475, 428, 497, 425, 530, 410, 536, 411, 637, 393, 642, 391, 590, 335, 563, 336, 554, 302, 546" class="area-buble"
        data-position="3" data-address="Лукина, 16" data-status="Дом строится" data-apartments="Квартиры в продаже"
        href="javascript:void()" onclick="pb_front_widget.show({houseId: 94199, accountId: 5828});"/>

    <area shape="poly" coords="793, 163, 823, 158, 850, 160, 851, 196, 799, 198, 797, 277, 791, 271" class="area-buble"
          data-position="21"
          data-address="Миначева, 19 к.1"
          data-status="Дом сдан"
          data-apartments="Квартиры проданы"/>
    <area shape="poly" coords="799, 205, 834, 198, 862, 207, 856, 326, 800, 327" class="area-buble" data-position="22" data-address="Миначева, 17 к.1" data-status="Дом сдан" data-apartments="Квартиры проданы"/>

    <area shape="poly"
      coords="784, 376, 883, 346, 915, 301, 957, 300, 966, 325, 964, 437, 814, 491, 778, 477" class="area-buble"
      data-position="23" 
      data-status="Дом строится" 
      data-apartments="Квартиры в продаже"
      href="javascript:void()" onclick="pb_front_widget.show({houseId: 104698, accountId: 5828});"/>

    <area shape="poly" coords="329, 384, 367, 383, 468, 413, 664, 419, 726, 404, 747, 416, 745, 519, 653, 555, 642, 551, 547, 572, 544, 537, 497, 517, 497, 505, 467, 496, 462, 508, 432, 521, 428, 496, 378, 468, 379, 461, 358, 454, 330, 468" class="area-buble" data-position="24" data-address="Миначева, 11" data-status="Дом сдан" data-apartments="Квартиры проданы"/>
    <area shape="poly" coords="399, 365, 520, 320, 673, 372, 673, 407, 490, 399, 445, 405, 400, 388" class="area-buble area-bubble-nolink" data-position="25" data-address="Миначева, 11 к.1" data-status="Дом сдан" data-apartments="Квартиры проданы"/>

    <area shape="poly"
          coords="170, 213, 204, 216, 206, 298, 270, 311, 363, 301, 363, 277, 393, 273, 429, 287, 428, 344, 391, 358, 393, 384, 361, 373, 325, 384, 329, 424, 253, 443, 135, 387, 129, 275"
          class="area-buble area-bubble-nolink"
          data-position="26"
          data-address="Лукина, 9"
          data-status="Дом сдан"
          data-apartments="Квартиры проданы">


    <area shape="poly" coords="227, 795, 348, 778, 521, 700, 560, 725, 559, 824, 418, 896, 368, 927, 248, 943, 231, 894" class="area-buble area-bubble-nolink" data-position="6a" data-address="Лукина, 20" data-status="Дом сдан" data-apartments="Квартиры проданы"/>
    <area shape="poly" coords="610, 666, 801, 748, 796, 848, 749, 873, 573, 783, 572, 683" class="area-buble area-bubble-nolink" data-position="7a" data-address="Лукина, 18" data-status="Дом сдан" data-apartments="Квартиры проданы"/>
    <area 
        shape="poly" 
        coords="719, 540, 832, 580, 830, 670, 791, 688, 685, 639, 687, 553" 
        class="area-buble" 
        data-position="8a" 
        data-status="Дом строится" 
        data-apartments="Квартиры в продаже"
        href="javascript:void()" onclick="pb_front_widget.show({houseId: 113556, accountId: 5828});"/>

    <area shape="poly" coords="369, 213, 549, 213, 548, 256, 568, 256, 568, 303, 489, 303, 489, 286, 436, 286, 391, 269, 362, 277, 357, 297, 343, 297, 344, 274" class="area-buble area-bubble-nolink" data-position="33" data-status="Строится!" data-apartments="Школа на 1500 мест" href="#"/>
    <area shape="poly" coords="664, 361, 738, 337, 802, 353, 802, 366, 777, 374, 778, 420, 752, 429, 750, 409, 692, 398, 690, 410, 673, 411, 676, 370" class="area-buble area-bubble-nolink" data-position="34" data-address="Детский сад" data-status="Сдан"/>
    <area
            shape="poly"
            coords="721, 205, 731, 198, 740, 192, 761, 199, 784, 192, 795, 192, 790, 239, 777, 245, 763, 236, 764, 227, 736, 235, 721, 229"
            class="area-buble area-bubble-nolink" data-position="35" data-address="Детский сад" data-status="Сдан"/>

    <area shape="poly"
          coords="410, 923, 570, 853, 698, 919, 699, 932, 464, 969, 410, 937"
          class="area-buble" data-position="36" data-address="Паркинг" data-status="Парковочные места" data-apartments="в продаже"
          href="javascript:void()" onclick="pb_front_widget.show({houseId: 106066, accountId: 5828});"/>
  </map>
</div>
