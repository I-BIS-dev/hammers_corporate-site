$(document).ready(function () {
  const ham = $('#js-hamburger');
  const nav = $('#js-nav');
  ham.on('click', function () {
    ham.toggleClass('--active');
    nav.toggleClass('--open');
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
