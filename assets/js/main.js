$(document).ready(function () {
  const ham = $('#js-hamburger');
  const nav = $('#js-nav');
  ham.on('click', function () {
    ham.toggleClass('--active');
    nav.toggleClass('--open');
  });

  // const links = jQuery(".l-header__nav-link");

  // links.each(function () {
  //   if (this.href === location.href) {
  //     jQuery(this).closest(".l-header__nav-link").addClass("current");
  //   }
  // });

  $(".l-header__nav-list .l-header__nav-item .l-header__nav-link").on("click", function (event) {
    // カレント表示をリセット
    $(".l-header__nav-list .l-header__nav-item .l-header__nav-link").removeClass('current');

    // クリックされたリンクにカレントクラスを追加
    $(this).addClass('current');
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
