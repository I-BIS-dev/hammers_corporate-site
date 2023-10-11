<?php
$to = $_POST["mail"];
$subject = "お問い合わせありがとうございました";
$message  = "お問い合わせを受け付けました \r\n"
  . "会社名: " .  $_POST['company'] . "\r\n"
  . "担当者名: " .  $_POST['name'] . "\r\n"
  . "電話番号: " .  $_POST['tel'] . "\r\n"
  . "メールアドレス: " . $_POST['mail'] . "\r\n"
  . "連絡方法: " . $_POST['contact'] . "\r\n"
  . "問い合わせ項目: " . $_POST['item'] . "\r\n"
  . "お問い合わせ内容:\r\n"
  . nl2br($_POST["inquiry"]);
$headers = "From: test@example.com";

mail($to, $subject, $message, $headers);
?>

<?php
$to = "//ハマーズメールアドレスを挿入";
$subject = "お問い合わせがありました";
$message = "ここに本文を挿入";
$headers = "From: test@example.com";

mail($to, $subject, $message, $headers);
?>


<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>株式会社ハマーズ</title>

  <link rel="stylesheet" href="/css/common.css">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="/assets/js/main.js"></script>

</head>

<body>
  <header class="l-header">
    <div class="l-header__logo">
      <h1 class="l-header__logo-name"><a class="u-header__logo" href="#">BESTER</a></h1>
      <p class="l-header__logo-description">アスベスト分析・調査の専門家</p>
    </div>
    <div class="l-header__navarea">
      <div class="p-flexdirection">
        <p class="l-header__phone">受付時間9:00~20:00（土日祝除く）TEL<a class="u-header__nav--fontsize" href="tel:045-253-2560">
            045-253-2560</a></p>
        <nav class="l-header__nav" id="js-nav">
          <ul class="l-header__nav-list">
            <li class="l-header__nav-item"><a class="l-header__nav-link" href="#">ベスターの強み</a></li>
            <li class="l-header__nav-item"><a class="l-header__nav-link" href="#">アスベストの危険性</a></li>
            <li class="l-header__nav-item"><a class="l-header__nav-link" href="#">ご依頼の流れ</a></li>
            <li class="l-header__nav-item"><a class="l-header__nav-link" href="#">よくある質問</a></li>
            <li class="l-header__nav-item"><a class="l-header__nav-link" href="#">会社概要</a></li>
            <li class="l-header__nav-item"><a class="l-header__nav-link" href="#">お問い合わせ</a></li>
          </ul>
        </nav>
      </div>
      <div class="l-header__nav-contact">
        <img class="l-header__navicon" src="/assets/images/arrow-header.svg" width="25" height="25" alt="矢印アイコン">
        <a href="#" class="l-header__btn">分析依頼はこちら</a>
      </div>
    </div>
    <div class="c-phone-btn">
      <a href="tel:045-253-2560">
        <img class="c-phone-icon" src="/assets/images/phone-icon.svg" alt="電話のアイコン">
      </a>
    </div>
    <button class="l-header__hamburger" id="js-hamburger">
      <span class="l-header__hamburger--border"></span>
      <span class="l-header__hamburger--border"></span>
      <span class="l-header__hamburger--border"></span>
    </button>
    <div class="c-contact">
      <a href="#">
        <img class="c-contact__img" src="/assets/images/arrow-header.svg" width="15" height="15" alt="問い合わせフォームリンク">
        <p class="c-contact__text">分析依頼はこちら</p>
      </a>
    </div>
  </header>

  <main>
    <div class="main-test">
      送信しました
    </div>
  </main>

  <footer class="l-footer">
    <div class="l-footer__top">
      <div class="l-footer__logo">
        <p class="l-footer__logo-name">BESTER</p>
        <p class="l-footer__logo-description">アスベスト分析・調査の専門家</p>
        <p class="l-footer__logo-company">株式会社ハマーズ アスベスト分析事業部</p>
        <p class="l-footer__logo-address">〒231-0048 神奈川県横浜市中区蓬莱町2-6-14 戸賀崎ビル2F</p>
      </div>
      <ul class="l-footer__nav-list">
        <li class="l-footer__nav-item"><a class="l-footer__nav-link" href="#">TOP</a></li>
        <li class="l-footer__nav-item"><a class="l-footer__nav-link" href="#">ベスターの強み</a></li>
        <li class="l-footer__nav-item"><a class="l-footer__nav-link" href="#">アスベストの危険性</a></li>
        <li class="l-footer__nav-item"><a class="l-footer__nav-link" href="#">ご依頼の流れ</a></li>
        <li class="l-footer__nav-item"><a class="l-footer__nav-link" href="#">よくある質問</a></li>
        <li class="l-footer__nav-item"><a class="l-footer__nav-link" href="#">会社概要</a></li>
        <li class="l-footer__nav-item"><a class="l-footer__nav-link" href="#">お問い合わせ</a></li>
        <li class="l-footer__nav-item"><a class="l-footer__nav-link" href="#">分析依頼</a></li>
        <li class="l-footer__nav-item --noborder"><a class="l-footer__nav-link" href="#">特定商取引法に基づく表記</a></li>
        <li class="l-footer__nav-item --noborder"><a class="l-footer__nav-link" href="#">プライバシーポリシー</a></li>
      </ul>
    </div>
    <div class="l-footer__bottom">
      <p class="l-footer__copyright">Copyright &copy2023 HAMMER'S All Rights Reserved.</p>
    </div>
    <!-- <div class="c-top-btn">
      <img src="/assets/images/arrow-topbtn.svg" alt="topに戻るボタン" class="c-top-btn-icon">
    </div> -->
  </footer>
</body>

</html>
