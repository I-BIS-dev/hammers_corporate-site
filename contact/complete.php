<?php
$to = $_POST["mail"];
$subject = "送信ありがとうございました";
$message  = $_POST['name'] . " 様 \r\n"
  . "\r\n"
  . "BESTARへお問い合わせありがとうございました。\r\n"
  . "早急にご返信致しますので今しばらくお待ちください。\r\n"
  . "\r\n"
  . "送信内容は以下になります。\r\n"
  . "\r\n"
  . "＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝\r\n"
  . "\r\n"
  . "【 会社名 】：" .  $_POST['company'] . "\r\n"
  . "【 担当者名 】：" .  $_POST['name'] . "\r\n"
  . "【 電話番号 】：" .  $_POST['tel'] . "\r\n"
  . "【 メールアドレス 】：" . $_POST['mail'] . "\r\n"
  . "【 連絡方法 】：" . $_POST['contact'] . "\r\n"
  . "【問い合わせ項目】：" . $_POST['item'] . "\r\n"
  . "【問い合わせ内容】：\r\n"
  . str_replace("<br />", "\r\n", $_POST['inquiry'])
  . "\r\n"
  . "＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝\r\n"
  . "──────────────────────\r\n"
  . "株式会社ハマーズ 分析事業部 (BESTAR)\r\n"
  . "http://bestar7.jp/\r\n"
  . "Mail:info-b@bestar7.jp\r\n"
  . "──────────────────────";
$headers = "From: info-b@bestar7.jp";

mail($to, $subject, $message, $headers);
?>

<?php
$to = "info-b@bestar7.jp";
$subject = "お問い合わせがありました";
$message  = "\r\n"
  . $_POST['name'] . "様\r\n"
  . $_POST['mail'] . "から問い合わせがありました。\r\n"
  . "\r\n"
  . "送信内容は以下になります。\r\n"
  . "\r\n"
  . "＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝\r\n"
  . "\r\n"
  . "【 会社名 】：" .  $_POST['company'] . "\r\n"
  . "【 担当者名 】：" .  $_POST['name'] . "\r\n"
  . "【 電話番号 】：" .  $_POST['tel'] . "\r\n"
  . "【 メールアドレス 】：" . $_POST['mail'] . "\r\n"
  . "【 連絡方法 】：" . $_POST['contact'] . "\r\n"
  . "【問い合わせ項目】： " . $_POST['item'] . "\r\n"
  . "【問い合わせ内容】：\r\n"
  . str_replace("<br />", "\r\n", $_POST['inquiry'])
  . "\r\n"
  . "＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝\r\n";
$headers = "From: info-b@bestar7.jp";

mail($to, $subject, $message, $headers);
?>


<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせ | ベスター アスベスト分析・調査の専門家</title>
  <meta name="description" content="お問い合わせのページです。早い・簡単・便利なアスベスト分析ならベスターにお任せください！">
  <meta property="og:title" content="お問い合わせ | ベスター アスベスト分析・調査の専門家">
  <meta property="og:description" content="お問い合わせのページです。早い・簡単・便利なアスベスト分析ならベスターにお任せください！">
  <meta property="og:url" content="https://bestar7.jp/contact/">
  <meta property="og:image" content="https://bestar7.jp/assets/images/ogp-img.png">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="ベスター アスベスト分析・調査の専門家">

  <link rel="icon" href="/assets/images/favicon.svg" type="image/svg+xml">
  <link rel="icon" href="/assets/images/favicon.png">
  <link rel="stylesheet" href="/css/common.css">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="/assets/js/main.js"></script>

</head>

<body>
  <header class="l-header">
    <h1 class="l-header__logo-area">
      <a href="../" class="l-header__link">
        <img src="/assets/images/logo.svg" alt="ハマーズのロゴ" class="l-header-logo">
      </a>
    </h1>
    <div class="l-header__navarea">
      <p class="l-header__phone">受付時間9:00~18:00（土日祝除く）TEL<a class="u-header__nav--fontsize" href="">
          045-253-2560</a></p>
      <nav class="l-header__nav" id="js-nav">
        <ul class="l-header__nav-list">
          <li class="l-header__nav-item"><a class="l-header__nav-link" href="../">TOP</a></li>
          <li class="l-header__nav-item"><a class="l-header__nav-link" href="../merit/">ベスターの強み</a></li>
          <li class="l-header__nav-item"><a class="l-header__nav-link" href="../risk/">アスベストの危険性</a></li>
          <li class="l-header__nav-item"><a class="l-header__nav-link" href="../flow/">ご依頼の流れ</a></li>
          <li class="l-header__nav-item"><a class="l-header__nav-link" href="../faq/">よくある質問</a></li>
          <li class="l-header__nav-item"><a class="l-header__nav-link" href="../company/">会社概要</a></li>
          <li class="l-header__nav-item --none"><a class="l-header__nav-link" href="../request/">分析依頼</a></li>
          <li class="l-header__nav-item"><a class="c-ctabtn --white" href="../contact/">お問い合わせ</a></li>
          <li class="l-header__nav-item"><a class="c-ctabtn" href="../request/">分析依頼</a></li>
        </ul>
      </nav>
      <a href="../contact/" class="l-header__nav-contact">
        <img class="l-header__navicon" src="/assets/images/arrow-header.svg" width="25" height="25" alt="矢印アイコン">
        <span class="l-header__btn">お問い合わせ</span>
      </a>
    </div>
  </header>

  <!-- ボタン各種 -->
  <button class="l-header__hamburger" id="js-hamburger">
    <span class="l-header__hamburger--border"></span>
    <span class="l-header__hamburger--border"></span>
    <span class="l-header__hamburger--border"></span>
  </button>

  <div class="c-contact-btn">
    <a class="c-contact-link" href="../contact/">
      <img class="c-contact-icon" src="/assets/images/arrow-header.svg" alt="矢印のアイコン">
    </a>
  </div>
  <div class="c-phone-btn">
    <a class="c-phone-link" href="tel:045-253-2560">
      <img class="c-phone-icon" src="/assets/images/phone-icon.svg" alt="電話のアイコン">
    </a>
  </div>

  <main class="main">
    <section class="l-sub-mv">
      <div class="l-sub-mv__area">
        <div class="l-sub-mv-area-sp"></div>
        <h1 class="l-sub-mv__hero --privacy">お問い合わせ</h1>
      </div>
      <div class="l-sub-mv__label-area">
        <p class="l-sub-mv__label">
          <a href="../" class="l-sub-mv__label--top">TOP</a>
          <span class="l-sub-mv__label--arrow"></span>
          <a href="" class="l-sub-mv__label--current">お問い合わせ</a>
        </p>
      </div>
    </section>
    <div class="l-complete-area a--fadein-first">
      <ol class="c-stepbar">
        <li class="c-stepbar__list --visited"><span class="c-stepbar__number">1</span><br>内容入力</li>
        <li class="c-stepbar__list --visited"><span class="c-stepbar__number">2</span><br>内容確認</li>
        <li class="c-stepbar__list --visited"><span class="c-stepbar__number">3</span><br>送信完了</li>
      </ol>
      <div class="l-complete__msg-area a--fadein-first">
        <p class="l-complete__msg --ttl">送信が完了しました</p>
        <p class="l-complete__msg">お問い合わせありがとうございました。<br>後ほど担当者よりご連絡させていただきます。</p>
        <p class="l-complete__msg --desctiption">※ご入力内容を記載した確認メールを送信しました。確認メールが24時間経過しても届かない場合は、恐れ入りますが再度お問い合わせください。</p>
      </div>
    </div>
    <section class="l-contact">
      <div class="p-inner">
        <div class="l-contact-ttl">
          <p class="l-contact-text">アスベストのことならお気軽にお問い合わせください</p>
        </div>
        <div class="l-contact__infoarea">
          <div class="l-contact__telarea">
            <p class="l-contact__tel">TEL<a class="l-contact__tel --link" href="tel:045-253-2560">045-253-2560</a></p>
            <p class="l-contact__time">受付時間 9:00〜18:00（土日祝除く）</p>
          </div>
          <div class="l-contact__btnarea">
            <a href="/contact/" class="c-ctabtn --sub">お問い合わせ</a>
          </div>
        </div>
      </div>
      <div class="c-top-btn --topbtn">
        <img src="/assets/images/arrow-topbtn.svg" alt="topに戻るボタン" class="c-top-btn-icon">
      </div>
    </section>
  </main>

  <footer class="l-footer">
    <div class="l-footer__top">
      <div class="l-footer__logo-area">
        <div class="l-footer__logo">
          <img src="../assets/images/logo-white.svg" alt="ハマーズロゴ" class="l-footer__logo-img">
        </div>
        <p class="l-footer__logo-company">株式会社ハマーズ アスベスト分析事業部</p>
        <p class="l-footer__logo-address">〒231-0048 神奈川県横浜市中区蓬莱町2-6-14 戸賀崎ビル2F</p>
      </div>
      <ul class="l-footer__nav-list">
        <li class="l-footer__nav-item"><a class="l-footer__nav-link" href="../">TOP</a></li>
        <li class="l-footer__nav-item"><a class="l-footer__nav-link" href="../merit/">ベスターの強み</a></li>
        <li class="l-footer__nav-item"><a class="l-footer__nav-link" href="../risk/">アスベストの危険性</a></li>
        <li class="l-footer__nav-item"><a class="l-footer__nav-link" href="../flow/">ご依頼の流れ</a></li>
        <li class="l-footer__nav-item"><a class="l-footer__nav-link" href="../faq/">よくある質問</a></li>
        <li class="l-footer__nav-item"><a class="l-footer__nav-link" href="../company/">会社概要</a></li>
        <li class="l-footer__nav-item --noborder"><a class="l-footer__nav-link" href="../contact/">お問い合わせ</a></li>
        <li class="l-footer__nav-item --noborder"><a class="l-footer__nav-link" href="../request/">分析依頼</a></li>
        <!-- <li class="l-footer__nav-item --noborder"><a class="l-footer__nav-link" href="../sctl/">特定商取引法に基づく表記</a>
        </li> -->
        <li class="l-footer__nav-item --noborder"><a class="l-footer__nav-link" href="../privacy/">プライバシーポリシー</a></li>
      </ul>
    </div>
    <div class="l-footer__bottom">
      <p class="l-footer__copyright">Copyright &copy;HAMMER'S All Rights Reserved.</p>
    </div>
  </footer>
</body>

</html>