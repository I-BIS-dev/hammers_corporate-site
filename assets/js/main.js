$(document).ready(function () {
  const ham = $('#js-hamburger');
  const nav = $('#js-nav');
  ham.on('click', function () {
    ham.toggleClass('--active');
    nav.toggleClass('--open');
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
