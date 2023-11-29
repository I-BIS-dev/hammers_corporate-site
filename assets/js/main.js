jQuery(document).ready(function () {
  // ハンバーガーボタン
  const ham = jQuery("#js-hamburger");
  const nav = jQuery("#js-nav");
  ham.on("click", function () {
    ham.toggleClass("--active");
    nav.toggleClass("--open");
  });


  // カレント表示
  // const headerNavLink = document.querySelectorAll(".l-header__nav-link");

  // headerNavLink.forEach((targetLink) => {
  //   if (targetLink.href === location.href) {
  //     targetLink.classList.add("current");
  //   }
  // });

  // スクロール時ヘッダーアニメーション
  var jQuerywin = jQuery(window),
    jQueryheader = jQuery("header"),
    jQuerycontact = jQuery("header .l-header__nav-contact"),
    jQueryphone = jQuery("header .l-header__phone"),
    jQuerylogo = jQuery("header .l-header__logo-area"),
    jQuerynav = jQuery("header .l-header__nav-list"),
    jQuerynavtext = jQuery("header .l-header__nav-link"),
    jQuerycontacttext = jQuery(".l-header__btn"),
    animationClass = "header-animation";

  jQuerywin.on("load scroll", function () {
    const value = jQuery(this).scrollTop();
    if (value > 1) {
      jQueryheader.addClass("header-animation");
      jQuerycontact.addClass("header-animation");
      jQueryphone.addClass("header-animation");
      jQuerylogo.addClass("header-animation");
      jQuerynav.addClass("header-animation");
      jQuerynavtext.addClass("header-animation");
      jQuerycontacttext.addClass("header-animation");
    } else {
      jQueryheader.removeClass("header-animation");
      jQuerycontact.removeClass("header-animation");
      jQueryphone.removeClass("header-animation");
      jQuerylogo.removeClass("header-animation");
      jQuerynav.removeClass("header-animation");
      jQuerynavtext.removeClass("header-animation");
      jQuerycontacttext.removeClass("header-animation");
    }
  });

  jQuery(".l-faq__list dd").hide();
  jQuery(".l-faq__list dt").click(function () {
    jQuery(this).next(".l-faq__list dd").slideToggle("fast");
    jQuery(this).toggleClass("--arrow");
    jQuery(".l-faq__list dt").not(jQuery(this)).next(".l-faq__list dd").slideUp();
    jQuery(".l-faq__list dt").not(jQuery(this)).removeClass("--arrow");
  });

  jQuery(".--topbtn").click(function () {
    jQuery("html,body").animate({ scrollTop: 0 }, 700);
  });

  jQuery(window).on("load scroll", function () {
    const box = jQuery(".a--fadeIn");
    const animated = "a--animated";

    box.each(function () {
      const boxOffset = jQuery(this).offset().top;
      const scrollPos = jQuery(window).scrollTop();
      const wh = jQuery(window).height();

      if (scrollPos > boxOffset - wh + 100) {
        jQuery(this).addClass(`a--animated`);
      }
    });
  });

  // バリデーション非表示
  // jQuery('input[required]').on('invalid', function () {
  //   this.setCustomValidity('');  // デフォルトのバリデーションメッセージをクリア
  // });

  // jQuery(".js-err").css("display", "none");

  // jQuery(".js-form-click").click(function () {
  //   jQuery(".js-form-input").each(function () {
  //     if (jQuery(this).val() === "") {
  //       console.log("true");
  //       // e.preventDefault();
  //       jQuery(this).next("p").css({
  //         color: "#dc3232",
  //         "font-size": "12px",
  //         "font-weight": "normal",
  //         display: "block",
  //         position: "absolute",
  //         left: "0",
  //         bottom: "-20px",
  //       });
  //     } else {
  //       jQuery(this).next("p").css({
  //         display: "none",
  //       });
  //     }
  //   });
  // });

  // // モーダル
  // const modalBtn = document.getElementById("modal-btn");
  // const modal = document.getElementById("modal");
  // const closeBtn = document.getElementsByClassName("close")[0];

  // modalBtn.onclick = function () {
  //   modal.classList.add("show"); // クラスを付与
  // };

  // closeBtn.onclick = function () {
  //   modal.classList.remove("show"); // クラスを削除
  // };
});
