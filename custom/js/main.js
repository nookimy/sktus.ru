$(document).ready(function(e) {
    var isPopupActive = false;

    $(".backbutton").click(function() {
        if (document.referrer.indexOf("sktus.ru") >= 0) {
            history.back();
        } else {
            window.location = "http://sktus.ru/";
        }
        return false;
    });

    $(".poz-photo").click(function() {
        $(".poz-photos a:first").click();
        return false;
    });

    $(".area-bubble-nolink, .area-pantryinfo-nolink").click(function() {
        return false;
    });

    if ($('#modal_promo_april_2019').length > 0) {
        if (!localStorage.getItem("#modal_promo_april_2019")) {
            $('#modal_promo_april_2019').click(function() {
                localStorage.setItem("#modal_promo_april_2019", "yes");
                $(this).hide();
            }).show();
        }
    }

    $(".modal-container-1june2019").on('click', function(e) {
        if (e.target == this) $(".modal-1june2019").fadeOut('fast');
    })


    /*Начало блока с баннером ДОД*/

    if ($(".js-modal--opendoors").length) {
        if (!localStorage.getItem("modal-opendoors20april2019")) {
            $('.js-modal--opendoors').addClass('modal--opened');
        }
        $(".js-open-doors-btn--close").click(function() {
            localStorage.setItem("modal-opendoors20april2019", "yes");
            $('.js-modal--opendoors').removeClass('modal--opened');
        });
    }

    /*Конец блока с баннером ДОД*/

    $(".career-list .career > a").click(function(event) {
        $(this)
            .parents(".career-list")
            .find(".career")
            .not($(this).parent())
            .find(".vacancies")
            .slideUp();
        $(this)
            .parent()
            .find(".vacancies")
            .slideToggle();
        event.stopPropagation();
    });

    $(window).on("load", function() {
        if ($(".document-wrap, .scroll").length) {
            $(".document-wrap, .scroll").mCustomScrollbar();
        }

        if ($(".owl-carousel-gallery").length) {
            var sync1 = $(".owl-carousel-gallery-view");
            var sync2 = $(".owl-carousel-gallery");
            var slidesPerPage = 6;
            var syncedSecondary = true;
            sync1
                .owlCarousel({
                    items: 1,
                    slideSpeed: 2000,
                    nav: true,
                    autoplay: false,
                    lazyLoad: true,
                    dots: false,
                    loop: false,
                    rewind: false,
                    responsiveRefreshRate: 200
                })
                .on("changed.owl.carousel", syncPosition);
            sync2
                .on("initialized.owl.carousel", function() {
                    sync2
                        .find(".owl-item")
                        .eq(0)
                        .addClass("current");
                })
                .owlCarousel({
                    items: slidesPerPage,
                    dots: true,
                    nav: false,
                    margin: 10,
                    smartSpeed: 200,
                    slideSpeed: 500,
                    slideBy: slidesPerPage,
                    responsiveRefreshRate: 100
                })
                .on("changed.owl.carousel", syncPosition2);

            function syncPosition(el) {
                var count = el.item.count - 1;
                //var current = Math.round(el.item.index - el.item.count / 2 - 0.5);
                var current = el.item.index;

                if (current < 0) {
                    current = count;
                }

                if (current > count) {
                    current = count;
                }

                sync2
                    .find(".owl-item")
                    .removeClass("current")
                    .eq(current)
                    .addClass("current");
                var onscreen = sync2.find(".owl-item.active").length - 1;
                var start = sync2
                    .find(".owl-item.active")
                    .first()
                    .index();
                var end = sync2
                    .find(".owl-item.active")
                    .last()
                    .index();
                if (current >= end) {
                    sync2.data("owl.carousel").to(current, 100, true);
                }
                if (current < start) {
                    sync2.data("owl.carousel").to(current, 100, true);
                }
            }

            function syncPosition2(el) {
                if (syncedSecondary) {
                    var number = el.item.index;
                    sync1.data("owl.carousel").to(number, 100, true);
                }
            }
            sync2.on("click", ".owl-item", function(e) {
                e.preventDefault();
                var number = $(this).index();
                sync1.data("owl.carousel").to(number, 300, true);
            });
        }
    });

    $(".area-buble, .floor-buble, .area-floorinfo")
        .mouseenter(function() {
            var idx = $(this).index();
            var src = $(".area-hovers img:eq(" + idx + ")").attr("data-src");
            if (!isPopupActive) {
                $(".areaimg").css("background-image", "url(" + src + ")");
                $(".floor-bubles > div")
                    .eq(idx)
                    .show();
            }
            return false;
        })
        .mouseleave(function() {
            if (!isPopupActive) {
                $(".areaimg").css("background-image", "");
                $(".floor-bubles > div").hide();
            }
            return false;
        });
    $(".switch-area")
        .mouseenter(function() {
            var idx = $(this).index();
            var src = $(".switch-hovers img:eq(" + idx + ")").attr("data-src");
            $(".switch-image").css("background-image", "url(" + src + ")");
            return false;
        })
        .mouseleave(function() {
            $(".switch-image").css("background-image", "");
            return false;
        });

    if ($(".area-buble").length) {
        var housePosition = 0;
        $(".area-buble")
            .mouseenter(function() {
                var address = $(this).attr("data-address");
                var apartments = $(this).attr("data-apartments");
                var status = $(this).attr("data-status");
                housePosition = $(this).attr("data-position");
                $(".hover-info").addClass("hover-info" + housePosition);
                $(".hover-info h4 span").html($(this).attr("data-position"));
                if (housePosition == 34 || housePosition == 35) {
                    $(".hover-info h4").hide();
                }
                if (status) {
                    $(".hover-info-status")
                        .html(status)
                        .show();
                } else {
                    $(".hover-info-status").hide();
                }
                if (address) {
                    $(".hover-info-address")
                        .html(address)
                        .show();
                } else {
                    $(".hover-info-address").hide();
                }
                if (apartments) {
                    $(".hover-info-apartments")
                        .html(apartments)
                        .show();
                } else {
                    $(".hover-info-apartments").hide();
                }
                $(".house-number-" + housePosition).hide();
            })
            .mouseleave(function() {
                $(".house-number-" + housePosition).show();
                $(".hover-info").attr("class", "hover-info");
            });
    }

    if ($(".area-floorinfo").length) {
        $(".area-floorinfo")
            .mouseenter(function() {
                var poz = parseInt($(this).attr("data-poz"), 10);
                var floor = parseInt($(this).attr("data-floor"), 10);
                var section = parseInt($(this).attr("data-section"), 10);
                var poz6sections = ["а", "б", "в", "г", "д", "е"];
                var poz6sectionsEnglish = ["a", "b", "v", "g", "d", "e"];
                if (poz === 6 || poz === 7) {
                    $(this).attr(
                        "href",
                        window.location.href +
                        "/blok-" +
                        poz6sectionsEnglish[section - 1] +
                        "/" +
                        floor +
                        "-etazh"
                    );
                } else if (poz === 22) {
                    $(this).attr("href", window.location.href + "/" + floor + "-etazh");
                } else {
                    $(this).attr(
                        "href",
                        window.location.href + "/" + section + "-podezd/" + floor + "-etazh"
                    );
                }
                $(".floorinfo").addClass(
                    "floorinfo" + poz + "-" + section + "-" + floor
                );
                if ($(this).hasClass("area-floorinfo-right")) {
                    $(".floorinfo").addClass("floorinfo-right");
                }
                $(".floorinfo-section span, .selectedfloorinfo-section").html(section);
                if (floor < 10) {
                    floor = "0" + floor;
                }
                $(".floorinfo-floor strong, .selectedfloorinfo-floor").html(floor);
                $(".dominfo-block-selectfloor").hide();
                $(".selectedfloorinfo").show();
            })
            .mouseleave(function() {
                $(".floorinfo").attr("class", "floorinfo");
                $(".dominfo-block-selectfloor").show();
                $(".selectedfloorinfo").hide();
            });
    }

    $(".lightbox").click(function() {
        $(".areaimg").css("background-image", "");
        isPopupActive = false;
    });
    $(".print-button").click(function() {
        window.print();
        return false;
    });

    if ($(".floor-rooms").length) {
        $(".floor-rooms .shop-item-title").each(function(index) {
            $(".section-wrap map area")
                .eq(index)
                .attr("href", $(this).attr("href"));
        });
    }

    $(".popBox textarea").focus(function() {
        $(".textarea-advice").fadeIn("slow");
    });

    if ($(".slides").length) {
        var slidesLength = $(".slides a").length;

        function changeSlide() {
            var activeSlideIndex = $(".slides a.active").index();
            $(".slides a.active").removeClass("active");
            if (activeSlideIndex < slidesLength - 1) {
                $(".slides a")
                    .eq(activeSlideIndex + 1)
                    .addClass("active");
            } else {
                $(".slides a")
                    .eq(0)
                    .addClass("active");
            }
            setTimeout(changeSlide, 8000);
        }
        setTimeout(changeSlide, 8000);
    }

    if ($(".table-spec").length) {
        $(".open-specprice").click(function() {
            var $tds = $(this)
                .parent()
                .parent()
                .find("td");
            var pozition = $.trim($tds.eq(1).text());
            var roomNumber = $.trim($tds.eq(2).text());
            var rooms = $.trim($tds.eq(3).text());
            var space = $.trim($tds.eq(4).text());
            $("#specprice textarea").val(
                pozition +
                ", комната №" +
                roomNumber +
                ", комнат: " +
                rooms +
                ", площадь: " +
                space
            );
        });

        function filterSpecTable() {
            var position = $(".table-spec__select__position").val();
            var rooms = $(".table-spec__select__rooms").val();
            $(".table-spec tbody tr").show();
            if (position !== "all") {
                $(".table-spec tbody tr").each(function() {
                    var trPosition = $.trim(
                        $(this)
                            .find("td:eq(2)")
                            .text()
                    );
                    if (position !== trPosition) {
                        $(this).hide();
                    }
                });
            }
            if (rooms !== "all") {
                $(".table-spec tbody tr").each(function() {
                    var trRooms = $.trim(
                        $(this)
                            .find("td:eq(3)")
                            .text()
                    );
                    if (rooms !== trRooms) {
                        $(this).hide();
                    }
                });
            }
        }

        $(".table-spec__select__position").on("change", filterSpecTable);
        $(".table-spec__select__rooms").on("change", filterSpecTable);

        $(".table-spec__checkbox").click(function() {
            var roomNumbers = [];
            var roomNumbersText = "";
            $(this).toggleClass("table-spec__checkbox__active");
            $(".table-spec__checkbox__active").each(function() {
                roomNumbers.push(
                    $.trim(
                        $(this)
                            .parent()
                            .parent()
                            .find("td:eq(5)")
                            .text()
                    )
                );
            });
            if (roomNumbers.length) {
                roomNumbersText =
                    "Интересует стоимость квартир/помещений: №" + roomNumbers.join(", ");
            }
            $(".form-spec__textarea").val(roomNumbersText);
            return false;
        });
    }

    if ($(".contacts-map").length) {
        ymaps.ready(init);
        function init(){
            var contactsMap = new ymaps.Map("contacts-map", {
                center: [56.1353416,47.1631893],
                zoom: 15,
                controls: ['zoomControl']
            });

            contactsIconLayout1 = ymaps.templateLayoutFactory.createClass(
                '<div class="contacts-map__icon">' +
                '   <div class="contacts-map__label contacts-map__label--office-1">' +
                '       $[properties.iconContent]' +
                '   </div>' +
                '</div>' +
                '<div class="contacts-map__label contacts-map__label--office-3">' +
                '   <strong>Как добраться?</strong><br/>' +
                '   Автобус: 32, 35, 52<br/>' +
                '   Троллейбус: 1, 4, 14, 18, 22<br/>' +
                '   Маршрутное такси: 101-с' +
                '</div>'
            ),

            contactsIconLayout2 = ymaps.templateLayoutFactory.createClass(
                '<div class="contacts-map__icon"><div class="contacts-map__label contacts-map__label--office-2">$[properties.iconContent]</div></div>'
            ),

            contactsPlacemark1 = new ymaps.Placemark([56.135372, 47.162237], {
                hintContent: 'ТУС',
                balloonContent: '<strong>ТУС</strong><br/>428034, Чувашская Республика,<br/>г. Чебоксары, ул. М.Павлова, 39<br/>(ост. Дом Ветеранов)',
                iconContent: 'ТУС'
            }, {
                // Опции.
                // Необходимо указать данный тип макета.
                iconLayout: 'default#imageWithContent',
                iconImageHref: 'images/ball.png',
                iconImageSize: [48, 48],
                iconImageOffset: [-46, -70],
                iconContentOffset: [15, 15],
                iconContentLayout: contactsIconLayout1
            });

            contactsPlacemark2 = new ymaps.Placemark([56.133008, 47.148432], {
                hintContent: '<strong>Доп офис</strong><br/>(Временно не работает)',
                balloonContent: '<strong>Дополнительный офис продаж</strong><br/>(Временно не работает)<br/>428034, Чувашская Республика,<br/>г. Чебоксары, ул. Х.М. Миначева д.21',
                iconContent: '<strong>Доп офис</strong><br/>(Временно не работает)'
            }, {
                iconLayout: 'default#imageWithContent',
                iconImageHref: 'images/ball.png',
                iconImageSize: [48, 48],
                iconImageOffset: [-46, -70],
                iconContentOffset: [15, 15],
                iconContentLayout: contactsIconLayout2
            });

            var multiRoute = new ymaps.multiRouter.MultiRoute({
                referencePoints: [
                    [56.135372, 47.162237],
                    [56.133008, 47.148432]
                ],
                params: {
                    results: 1,
                }
            }, {
                routeActiveStrokeStyle: 'dot',
                wayPointVisible: false,
            });

            contactsMap.geoObjects.add(contactsPlacemark1).add(contactsPlacemark2).add(multiRoute);
        }
    }
});