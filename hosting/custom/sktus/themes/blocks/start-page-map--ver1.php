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
        <img data-src="/custom/sktus/img/hover-poz6-2024.png" />
        <img data-src="/custom/sktus/img/hover-poz7-2024.png" />
        <img data-src="/custom/sktus/img/hover-poz8-2024.png" />
        <img data-src="/custom/sktus/img/hover-poz10-2024.png" />
        <img data-src="/custom/sktus/img/hover-poz11-2024.png" />
        <img data-src="/custom/sktus/img/hover-poz1.png" />
        <img data-src="/custom/sktus/img/hover-poz2.png" />
        <img data-src="/custom/sktus/img/hover-poz3.png" />
        <img data-src="/custom/sktus/img/hover-poz21.png" />
        <img data-src="/custom/sktus/img/hover-poz22.png" />
        <img data-src="/custom/sktus/img/hover-poz23-2024.png" />
        <img data-src="/custom/sktus/img/hover-poz24.png" />
        <img data-src="/custom/sktus/img/hover-poz25.png" />
        <img data-src="/custom/sktus/img/hover-poz26.png" />
        <img data-src="/custom/sktus/img/hover-poz6a.png" />
        <img data-src="/custom/sktus/img/hover-poz7a.png" />
        <img data-src="/custom/sktus/img/hover-poz8a-2024.png" />
        <img data-src="/custom/sktus/img/hover-school.png" />
        <img data-src="/custom/sktus/img/hover-detsad-2024.png" />
        <img data-src="/custom/sktus/img/hover-detsad2.png" />
        <img data-src="/custom/sktus/img/hover-parking-lukina20.png" />
        <img data-src="/custom/sktus/img/hover-parking-poz10a.png" />
    </div>
    <div class="house-numbers">
        <i class="house-number house-number-yellow house-number-10">10</i>
        <i class="house-number house-number-comfort house-number-11">11</i>
        <i class="house-number house-number-green house-number-1">1</i>
        <i class="house-number house-number-green house-number-2">2</i>
        <i class="house-number house-number-green house-number-3">3</i>
        <i class="house-number house-number-green house-number-23">23</i>
    </div>
    <div class="object-numbers">
        <i class="object-number object-school object-number-1"></i>
        <i class="object-number object-bank object-number-2"></i>
        <i class="object-number object-playground object-number-3"></i>
        <i class="object-number object-playground object-number-4"></i>
        <i class="object-number object-parking object-number-5"></i>
        <i class="object-number object-parking object-number-6"></i>
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
    <area shape="poly" 
        coords="915, 255, 915, 255, 940, 256, 940, 247, 956, 245, 959, 254, 978, 255, 978, 248, 994, 247, 998, 253, 1021, 254, 1021, 241, 1031, 243, 1031, 235, 1048, 234, 1050, 241, 1076, 242, 1078, 229, 1102, 229, 1102, 223, 1118, 221, 1123, 228, 1131, 231, 1135, 214, 1140, 213, 1141, 204, 1153, 202, 1155, 195, 1188, 195, 1202, 207, 1194, 291, 1159, 299, 1159, 321, 1125, 331, 1123, 347, 1112, 345, 1118, 260, 1099, 251, 1068, 252, 1068, 266, 1053, 268, 1032, 279, 996, 279, 993, 350, 980, 349, 984, 304, 976, 297, 976, 289, 970, 281, 961, 279, 937, 273, 926, 279, 922, 288, 923, 313, 913, 315, 914, 255" class="area-buble" 
        data-position="7" 
        data-address="ул. Академика Х.М.Миначева д.17" 
        data-apartments="Квартиры проданы"/>

    <area shape="poly"
          coords="1000, 282, 1035, 282, 1071, 268, 1071, 255, 1098, 255, 1113, 261, 1108, 350, 1090, 342, 1063, 336, 1045, 341, 1016, 348, 1016, 371, 1005, 367, 994, 370"
          class="area-buble area-bubble-nolink"
          data-position="8"
          data-address="Миначева,15"
          data-status="Дом сдан"
          data-apartments="Квартиры проданы"/>

    <area shape="poly" 
        coords="927, 421, 964, 408, 981, 407, 980, 380, 1003, 370, 1017, 370, 1018, 351, 1058, 340, 1100, 349, 1100, 370, 1145, 378, 1141, 508, 1118, 521, 1106, 517, 1098, 524, 1046, 508, 1046, 519, 1033, 528, 1024, 520, 980, 545, 925, 528" 
        class="area-buble" 
        data-position="10" 
        data-status="Дом строится"
        data-apartments="Квартиры в продаже"
        href="javascript:void()" onclick="pb_front_widget.show({houseId: 123499, accountId: 5828});"/>

    <area shape="poly" 
        coords="1106, 353, 1126, 351, 1128, 332, 1163, 321, 1163, 302, 1203, 291, 1242, 302, 1242, 316, 1279, 325, 1272, 448, 1255, 460, 1241, 457, 1234, 461, 1216, 457, 1216, 445, 1183, 465, 1168, 457, 1158, 463, 1158, 474, 1144, 477, 1147, 371, 1108, 364" 
        class="area-buble" 
        data-position="11"
        data-apartments="Квартиры в продаже"
        href="javascript:void()" onclick="pb_front_widget.show({houseId: 139181, accountId: 5828});"/>

    <area shape="poly"
        coords="252, 593, 267, 587, 269, 572, 327, 558, 389, 590, 396, 740, 314, 772, 260, 743" class="area-buble"
        data-position="1"
        data-address="Лукина, 16" 
        data-status="Дом сдан" 
        data-apartments="Осталось мало квартир"
        href="javascript:void()" onclick="pb_front_widget.show({houseId: 94127, accountId: 5828});"/>

    <area shape="poly"
        coords="411, 540, 432, 533, 432, 521, 475, 510, 490, 510, 491, 519, 543, 542, 545, 680, 473, 704, 418, 677" class="area-buble"
        data-position="2" 
        data-address="Лукина, 16" 
        data-status="Дом сдан" 
        data-apartments="Осталось мало квартир" href="javascript:void()"
        onclick="pb_front_widget.show({houseId: 94198, accountId: 5828});"/>

    <area shape="poly"
        coords="300, 495, 317, 488, 319, 477, 361, 463, 375, 464, 376, 475, 428, 497, 425, 530, 410, 536, 411, 637, 393, 642, 391, 590, 335, 563, 336, 554, 302, 546" class="area-buble"
        data-position="3" data-address="Лукина, 16" data-status="Дом сдан" data-apartments="Осталось мало квартир"
        href="javascript:void()" onclick="pb_front_widget.show({houseId: 94199, accountId: 5828});"/>

    <area shape="poly" coords="793, 163, 823, 158, 850, 160, 851, 196, 799, 198, 797, 277, 791, 271" class="area-buble"
          data-position="21"
          data-address="Миначева, 19 к.1"
          data-status="Дом сдан"
          data-apartments="Квартиры проданы"/>
    <area shape="poly" coords="799, 205, 834, 198, 862, 207, 856, 326, 800, 327" class="area-buble" data-position="22" data-address="Миначева, 17 к.1" data-status="Дом сдан" data-apartments="Квартиры проданы"/>

    <area shape="poly"
      coords="822, 353, 841, 345, 847, 347, 865, 341, 869, 334, 927, 315, 929, 281, 938, 278, 945, 283, 953, 280, 960, 285, 968, 282, 970, 287, 973, 291, 972, 297, 980, 308, 974, 401, 925, 416, 925, 460, 861, 487, 817, 473" class="area-buble"
      data-position="23" 
      data-address="Миначева, 13" 
      data-status="Дом сдан" 
      data-apartments="Осталось мало квартир"
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
        coords="723, 525, 778, 506, 842, 527, 843, 652, 789, 672, 722, 644" 
        class="area-buble" 
        data-position="8a" 
        data-status="Дом сдан" 
        data-apartments="Квартиры проданы"/>

    <area shape="poly" coords="369, 213, 549, 213, 548, 256, 568, 256, 568, 303, 489, 303, 489, 286, 436, 286, 391, 269, 362, 277, 357, 297, 343, 297, 344, 274" class="area-buble area-bubble-nolink" data-position="33" data-status="Сдана" data-apartments="Школа на 1500 мест" href="#"/>
    <area shape="poly" coords="664, 357, 688, 351, 700, 360, 700, 349, 729, 342, 757, 351, 771, 345, 800, 351, 799, 363, 806, 364, 807, 399, 788, 407, 780, 405, 780, 396, 762, 395, 762, 405, 750, 409, 732, 403, 714, 407, 704, 403, 690, 405, 690, 412, 672, 415, 671, 367, 664, 366" class="area-buble area-bubble-nolink" data-position="34" data-address="Детский сад" data-status="Сдан"/>
    <area
            shape="poly"
            coords="721, 205, 731, 198, 740, 192, 761, 199, 784, 192, 795, 192, 790, 239, 777, 245, 763, 236, 764, 227, 736, 235, 721, 229"
            class="area-buble area-bubble-nolink" data-position="35" data-address="Детский сад" data-status="Сдан"/>

    <area shape="poly"
          coords="410, 923, 570, 853, 698, 919, 699, 932, 464, 969, 410, 937"
          class="area-buble" data-position="36" data-address="Паркинг" data-status="Парковочные места" data-apartments="в продаже"
          href="javascript:void()" onclick="pb_front_widget.show({houseId: 106066, accountId: 5828});"/>
    <area shape="poly"
        coords="1441,641,1561,575,1655,599,1644,636,1627,651,1529,672"
        class="area-buble" data-position="10a" data-address="Паркинг" data-status="Парковочные места" data-apartments="в продаже"
           href="javascript:void()" onclick="pb_front_widget.show({houseId: 138746, accountId: 5828});"/>
  </map>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
  document.querySelectorAll("map[name='areamap'] area").forEach(function(area) {
    let coords = area.coords.split(",").map((c, i) => {
      c = parseInt(c.trim(), 10);
      return (i % 2 === 0) ? c - 100 : c;
    });
    area.coords = coords.join(",");
  });
});
</script>