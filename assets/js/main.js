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
