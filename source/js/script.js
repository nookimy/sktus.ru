$(document).ready(function () {
  $('.vacancies__item-head').click(function () {
    $(this).toggleClass('vacancies__item-head--in').next().slideToggle();
    $('.vacancies__item-head').not(this).removeClass('vacancies__item-head--in').next().slideUp();
  });
});
