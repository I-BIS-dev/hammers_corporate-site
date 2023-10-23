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
  $('.l-faq__list dt').click(function () {
    $(this).next('.l-faq__list dd').slideToggle('fast');
    $(this).toggleClass("--arrow");
    $('.l-faq__list dt').not($(this)).next('.l-faq__list dd').slideUp();
    $('.l-faq__list dt').not($(this)).removeClass("--arrow");
  });

  $(".--topbtn img").click(function () {
    $("html,body").animate({ scrollTop: 0 }, 700);
  });

  $(window).on('load scroll', function () {

    const box = $('.a--fadeIn');
    const animated = 'a--animated';

    box.each(function () {

      const boxOffset = $(this).offset().top;
      const scrollPos = $(window).scrollTop();
      const wh = $(window).height();

      if (scrollPos > boxOffset - wh + 200) {
        $(this).addClass(`a--animated`);
      }
    });
  });
});
