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
    <h1 class="l-header__logo-area">
      <a href="../" class="l-header__link">
        <img src="/assets/images/logo.svg" alt="ハマーズのロゴ" class="l-header-logo">
      </a>
    </h1>
    <div class="l-header__navarea">
      <div class="p-flexdirection">
        <p class="l-header__phone">受付時間9:00~20:00（土日祝除く）TEL<a class="u-header__nav--fontsize" href="tel:045-253-2560">
            045-253-2560</a></p>
        <nav class="l-header__nav" id="js-nav">
          <ul class="l-header__nav-list">
            <li class="l-header__nav-item"><a class="l-header__nav-link" href="../merit/">ベスターの強み</a></li>
            <li class="l-header__nav-item"><a class="l-header__nav-link" href="../risk/">アスベストの危険性</a></li>
            <li class="l-header__nav-item"><a class="l-header__nav-link" href="../flow/">ご依頼の流れ</a></li>
            <li class="l-header__nav-item"><a class="l-header__nav-link" href="../faq/">よくある質問</a></li>
            <li class="l-header__nav-item"><a class="l-header__nav-link" href="../company/">会社概要</a></li>
            <li class="l-header__nav-item"><a class="l-header__nav-link" href="../request/">分析依頼</a></li>
          </ul>
        </nav>
      </div>
      <div class="l-header__nav-contact">
        <img class="l-header__navicon" src="/assets/images/arrow-header.svg" width="25" height="25" alt="矢印アイコン">
        <a href="../contact/" class="l-header__btn">お問い合わせ</a>
      </div>
    </div>
    <div class="c-contact-btn">
      <a class="c-phone-link" href="../contact/">
        <img class="c-phone-icon" src="/assets/images/arrow-header.svg" alt="矢印のアイコン">
      </a>
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

  <main class="main">
    <section class="l-sub-mv">
      <div class="l-sub-mv__area">
        <h1 class="l-sub-mv__hero --privacy">お問い合わせ</h1>
      </div>
      <div class="l-sub-mv__label-area">
        <p class="l-sub-mv__label">
          <a href="#" class="l-sub-mv__label--top">TOP</a>
          <span class="l-sub-mv__label--arrow"></span>
          <a href="" class="l-sub-mv__label--current">お問い合わせ</a>
        </p>
      </div>
    </section>

    <div class="c-analysis__contents a--fadein-first">
      <div class="c-analysis__top-text">
        <p class="c-analysis__description">弊社ならびにサービスに関するご質問や相談は、お電話またはこちらのフォームからお送りください。<br>数日以内にご希望の連絡方法にて返信いたします。<br>なお、添付ファイルがある場合は、<span class="c-font-bold">info-b@bestar7.jp</span>宛にメールで送信ください。
        </p>
      </div>
      <div class="main-test c-analysis__form ">
        <form action="/contact/confirm.php" method="post">
          <div class="c-analysis__head">
            <p>会社名</p>

            <span>必須</span>
          </div>
          <div class="c-analysis__data">
            <input placeholder="株式会社〇〇" type="text" name="company" size="50" value="" required><br>
          </div>

          担当者名<span>必須</span><br>
          <input placeholder="△△ △△" type="text" name="name" size="50" value="" required><br>

          電話番号<span>必須</span><br>
          <input placeholder="090-1234-5678" type="text" name="tel" size="50" value="" required><br>

          メールアドレス<span>必須</span><br>
          <input placeholder="abcde@fghij.com" type="text" name="mail" size="50" value="" required><br>

          連絡方法<br>
          <div>
            <input type="radio" name="contact" value="メール" checked>メール
            <input type="radio" name="contact" value="電話">電話
          </div>

          問い合わせ項目<br>
          <div>
            <input type="radio" name="item" value="分析依頼の相談" checked>分析依頼の相談
            <input type="radio" name="item" value="弊社へのご意見・質問">弊社へのご意見・質問
          </div>

          問い合わせ内容<br>
          <textarea placeholder="内容を入力してください" name="inquiry" cols="50" rows="5" required></textarea><br>

          <br>

          <input type="submit" value="送信" />
        </form>
      </div>
    </div>
  </main>

  <footer class="l-footer">
    <div class="l-footer__top">
      <div class="l-footer__logo">
        <p class="l-footer__logo-name">BESTAR</p>
        <p class="l-footer__logo-description">アスベスト分析・調査の専門家</p>
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
        <li class="l-footer__nav-item"><a class="l-footer__nav-link" href="/">お問い合わせ</a></li>
        <li class="l-footer__nav-item"><a class="l-footer__nav-link" href="../request/">分析依頼</a></li>
        <li class="l-footer__nav-item --noborder"><a class="l-footer__nav-link" href="../sctl/">特定商取引法に基づく表記</a>
        </li>
        <li class="l-footer__nav-item --noborder"><a class="l-footer__nav-link" href="../privacy/">プライバシーポリシー</a></li>
      </ul>
    </div>
    <div class="l-footer__bottom">
      <p class="l-footer__copyright">Copyright &copy2023 HAMMER'S All Rights Reserved.</p>
    </div>
  </footer>
</body>

</html>