$(document).ready(function () {
  const ham = $('#js-hamburger');
  const nav = $('#js-nav');
  ham.on('click', function () {
    ham.toggleClass('--active');
    nav.toggleClass('--open');
  });
  //カレント表示に関して
  // const headerNavLink = document.querySelectorAll('.l-header__nav .l-header__nav-list .l-header__nav-item .l-header__nav-link');

  // headerNavLink.forEach((targetLink) => {
  //   if (targetLink.href === location.href) {
  //     targetLink.classList.add('current');
  //   }
  // });

  var currentPath = window.location.pathname;

  // .l-header__nav-link の中からURLパスが一致する要素を検索し、.current クラスを追加
  $('.l-header__nav-link').each(function () {
    if ($(this).attr('href') === currentPath) {
      $(this).addClass('current');
    }
  });

  var $win = $(window),
    $header = $('header'),
    $contact = $('header .l-header__nav-contact'),
    animationClass = 'header-animation';

  $win.on('load scroll', function () {
    var value = $(this).scrollTop();
    if (value > 100) {
      $header.addClass('header-animation');
      $contact.addClass('header-animation');
    } else {
      $header.removeClass('header-animation');
      $contact.removeClass('header-animation');
    }
  });



  $(".l-faq__list dd").hide();
  $(".l-faq__list dl").on("click", function (e) {
    $('dd', this).slideToggle('fast');
    if ($(this).hasClass('--arrow')) {
      $(this).removeClass('--arrow');
    } else {
      $(this).addClass('--arrow');
    }
  });

  $(".--topbtn img").click(function () {
    $("html,body").animate({ scrollTop: 0 }, 700);
  });
});
