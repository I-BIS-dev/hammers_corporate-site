$(document).ready(function () {
  const ham = $('#js-hamburger')
  const nav = $('#js-nav');
  ham.on('click', function () {
    ham.toggleClass('--active');
    nav.fadeToggle();
  });

  // #27で開発予定
  // const ham = $('#js-hamburger');
  // const nav = $('#js-nav');
  // ham.on('click', function () {
  //   ham.toggleClass('--active');
  //   nav.toggleClass('--open');
  //   if (nav.hasClass('--open')) {
  //     $('#js-hide').hide();
  //     $('.l-feature__ctabtn').hide();
  //     $('.l-surbey__ctabtn').hide();
  //     $('.p-inner').hide();
  //     $('.l-contact').hide();
  //     $('.l-access__ctabtn').hide();
  //   } else {
  //     $('#js-hide').show();
  //     $('.l-feature__ctabtn').show();
  //     $('.l-surbey__ctabtn').show();
  //     $('.p-inner').show();
  //     $('.l-contact').show();
  //     $('.l-access__ctabtn').show();
  //   }
  // });

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
