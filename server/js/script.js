let toggle = document.querySelector(".main-nav__toggle");
let menu = document.querySelector(".main-nav__menu");
let menuButtons = document.querySelectorAll(".site-nav__item > a");

toggle.onclick = function () {
  toggle.classList.toggle("main-nav__toggle--close");
  menu.classList.toggle("main-nav__menu--vertical");
};

for (const button of menuButtons) {
  button.addEventListener('click', function(event) {
    toggle.classList.toggle("main-nav__toggle--close");
    menu.classList.toggle("main-nav__menu--vertical");
  })
}


$(document).ready(function(){
  $("#menu").on("click","a", function (event) {
    var id  = $(this).attr('href').split('#')[1];
    var top = $('#'+id).offset().top;
    if (top) {
      event.preventDefault();
      $('body,html').animate({scrollTop: top}, 1000);
    }
  });

  $(".main-footer__btn").on("click", function (event) {
    event.preventDefault();
    var id  = $(this).attr('href'),
      top = $(id).offset().top;
    $('body,html').animate({scrollTop: top}, 1000);
  });

  $("#building-list").on("click","a", function (event) {
    event.preventDefault();
    var id  = $(this).attr('href'),
      top = $(id).offset().top;
    $('body,html').animate({scrollTop: top}, 1000);
  });
});

/*
$(document).ready(function(){
  $("#up").on("click","a", function (event) {
    event.preventDefault();
    var id  = $(this).attr('href'),
      top = $(id).offset().top;
    $('body,html').animate({scrollTop: top}, 1500);
  });
});
*/

$(document).ready(function () {
  $(".slider .owl-carousel").owlCarousel({
    dots: true,
    nav: false,
    margin: 20,
    responsive: { //Адаптивность. Кол-во выводимых элементов при определенной ширине.
      0: {
        items: 1
      }
    }
  });

  $(".action__list.owl-carousel").owlCarousel({
    dots: false,
    nav: false,
    loop: true,
    margin: 20,
    loop:true,
    responsive: { //Адаптивность. Кол-во выводимых элементов при определенной ширине.
      0: {
        items: 3
      }
    }
  });

  $(".building__layout-list.owl-carousel").owlCarousel({
    dots: false,
    nav: false,
    loop: true,
    margin: 20,
    responsive: { //Адаптивность. Кол-во выводимых элементов при определенной ширине.
      0: {
        items: 3
      }
    }
  });

  $(".video__list.owl-carousel").owlCarousel({
    dots: true,
    nav: false,
    loop: false,
    margin: 20,
    responsive: { //Адаптивность. Кол-во выводимых элементов при определенной ширине.
      0: {
        items: 1
      }
    }
  });
});

//about video
$(".video__play-button").on("click", function(event){
  event.preventDefault();
  $(".video__item").addClass("video__item--active")
  $(".video__item-player").find("iframe").each(function() {
    $(this)[0].contentWindow.postMessage('{"event":"command","func":"playVideo","args":""}', '*')
  });
});

// Подробнее
function diplay_hide (details)
{
  if ($(details).css('display') == 'none')
  {
    $(details).animate({height: 'show'}, 500);
  }
  else
  {
    $(details).animate({height: 'hide'}, 500);
  }
}

// Все документы
function diplay_hide (alldocs)
{
  if ($(alldocs).css('display') == 'none')
  {
    $(alldocs).animate({height: 'show'}, 500);
  }
  else
  {
    $(alldocs).animate({height: 'hide'}, 500);
  }
}

// documents
$(document).ready(function () {
  $('.documents__folder-heading').click(function () {
    $(this).toggleClass('documents__folder-heading--in').next().slideToggle();
    $('.documents__folder-heading').not(this).removeClass('documents__folder-heading--in').next().slideUp();
  });

  $('.contacts__item-btn--main').click(function () {
    $('.contacts__map--main').toggleClass('contacts__map--open')
  });

  $('.contacts__item-btn--second').click(function () {
    $('.contacts__map--second').toggleClass('contacts__map--open')
  });
});



new WOW({ offset: 100 }).init();

