$(document).ready(function () {
  // ハンバーガーボタン
  const ham = $('#js-hamburger');
  const nav = $('#js-nav');
  ham.on('click', function () {
    ham.toggleClass('--active');
    nav.toggleClass('--open');
  });

  // カレント表示
  const headerNavLink = document.querySelectorAll('.l-header__nav-link');

  headerNavLink.forEach((targetLink) => {
    if (targetLink.href === location.href) {
      targetLink.classList.add('current');
    }
  });

  // スクロール時ヘッダーアニメーション
  var $win = $(window),
    $header = $('header'),
    $contact = $('header .l-header__nav-contact'),
    $phone = $('header .l-header__phone'),
    $logo = $('header .l-header__logo-area'),
    $nav = $('header .l-header__nav-list'),
    animationClass = 'header-animation';

  $win.on('load scroll', function () {
    const value = $(this).scrollTop();
    if (value > 100) {
      $header.addClass('header-animation');
      $contact.addClass('header-animation');
      $phone.addClass('header-animation');
      $logo.addClass('header-animation');
      $nav.addClass('header-animation');
    } else {
      $header.removeClass('header-animation');
      $contact.removeClass('header-animation');
      $phone.removeClass('header-animation');
      $logo.removeClass('header-animation');
      $nav.removeClass('header-animation');
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

      if (scrollPos > boxOffset - wh + 100) {
        $(this).addClass(`a--animated`);
      }
    });
  });

  // モーダル修正時使用予定
  // $(".l-step1__dl-area .l-step1__example").click(function () {
  //   $("#graydisplay").html($(this).prop('outerHTML'));
  //   $("#graydisplay").fadeIn(200);
  // });
  // $("#graydisplay, #graydisplay img").click(function () {
  //   $("#graydisplay").fadeOut(200);
  // });

  // $(".l-step1__dl-area .l-step1__example").click(function () {
  //   var imgSrc = $(this).closest(".l-step1__img-area").find(".l-step1__img").attr("src");
  //   $("#graydisplay img").attr("src", imgSrc);
  // });

  // $(".l-step1__dl-area .l-step1__example").click(function () {
  //   var imgSrc = $(this).data("img-src");
  //   console.log(imgSrc);
  //   $("#graydisplay img").attr("src", imgSrc);
  // });



});
