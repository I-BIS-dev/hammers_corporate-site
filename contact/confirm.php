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
      <p class="l-header__phone">受付時間9:00~20:00（土日祝除く）TEL<a class="u-header__nav--fontsize" href="tel:045-253-2560">
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
          <li class="l-header__nav-item"><a class="c-ctabtn --white" href="">お問い合わせ</a></li>
          <li class="l-header__nav-item"><a class="c-ctabtn" href="../request/">分析依頼</a></li>
        </ul>
      </nav>
      <div class="l-header__nav-contact">
        <img class="l-header__navicon" src="/assets/images/arrow-header.svg" width="25" height="25" alt="矢印アイコン">
        <a href="../contact/" class="l-header__btn">お問い合わせ</a>
      </div>
    </div>
  </header>

  <!-- ボタン各種 -->
  <button class="l-header__hamburger" id="js-hamburger">
    <span class="l-header__hamburger--border"></span>
    <span class="l-header__hamburger--border"></span>
    <span class="l-header__hamburger--border"></span>
  </button>

  <div class="c-contact-btn">
    <a class="c-contact-link" href="">
      <img class="c-contact-icon" src="/assets/images/arrow-header.svg" alt="矢印のアイコン">
    </a>
  </div>
  <div class="c-phone-btn">
    <a class="c-phone-link" href="tel:045-253-2560">
      <img class="c-phone-icon" src="/assets/images/phone-icon.svg" alt="電話のアイコン">
    </a>
  </div>
  <!-- <div class="c-contact">
    <a href="../request/">
      <img class="c-contact__img" src="/assets/images/arrow-header.svg" width="15" height="15" alt="問い合わせフォームリンク">
      <p class="c-contact__text">分析依頼はこちら</p>
    </a>
  </div> -->

  <main class="main">
    <section class="l-sub-mv">
      <div class="l-sub-mv__area">
        <h1 class="l-sub-mv__hero --privacy">お問い合わせ/確認画面</h1>
      </div>
      <div class="l-sub-mv__label-area">
        <p class="l-sub-mv__label">
          <a href="#" class="l-sub-mv__label--top">TOP</a>
          <span class="l-sub-mv__label--arrow"></span>
          <a href="" class="l-sub-mv__label--current">お問い合わせ/確認画面</a>
        </p>
      </div>
    </section>
    <div class="l-confirm-area">
      <ol class="l-stepbar">
        <li class="l-stepbar__list --visited"><span class="l-stepbar__number">1</span><br>入力</li>
        <li class="l-stepbar__list --visited"><span class="l-stepbar__number">2</span><br>確認</li>
        <li class="l-stepbar__list"><span class="l-stepbar__number">3</span><br>完了</li>
      </ol>
      <!-- <div class="main-test"> -->
      <form action="/contact/complete.php" method="post">
        <table>
          <tr class="l-confirm-rows">
            <!-- <div class="l-confirm-leftbox"> -->
            <td class="l-confirm-left">会社名</td>
            <!-- </div> -->
            <td class="l-confirm-right"><?php echo $_POST["company"]; ?></td>
            <input hidden type="text" name="company" size="50" value="<?php echo $_POST["company"]; ?>">
          </tr>
          <tr class="l-confirm-rows">
            <td class="l-confirm-left">担当者名</td>
            <td class="l-confirm-right"><?php echo $_POST["name"]; ?></td>
            <input hidden type="text" name="name" size="50" value="<?php echo $_POST["name"]; ?>">
          </tr>
          <tr class="l-confirm-rows">
            <td class="l-confirm-left">電話番号</td>
            <td class="l-confirm-right"><?php echo $_POST["tel"]; ?></td>
            <input hidden type="text" name="tel" size="50" value="<?php echo $_POST["tel"]; ?>">
          </tr>
          <tr class="l-confirm-rows">
            <td class="l-confirm-left">メールアドレス</td>
            <td class="l-confirm-right"><?php echo $_POST["mail"]; ?></td>
            <input hidden type="text" name="mail" size="50" value="<?php echo $_POST["mail"]; ?>">
          </tr>
          <tr class="l-confirm-rows">
            <td class="l-confirm-left">連絡方法</td>
            <td class="l-confirm-right"><?php echo $_POST["contact"]; ?></td>
            <input hidden type="text" name="contact" size="50" value="<?php echo $_POST["contact"]; ?>">
          </tr>
          <tr class="l-confirm-rows">
            <td class="l-confirm-left"> 問い合わせ項目</td>
            <td class="l-confirm-right"><?php echo $_POST["item"]; ?></td>
            <input hidden type="text" name="item" size="50" value="<?php echo $_POST["item"]; ?>">
          </tr>
          <tr class="l-confirm-rows">
            <td class="l-confirm-left">問い合わせ内容</td>
            <td class="l-confirm-right"><?php echo nl2br($_POST["inquiry"]); ?></td>
            <textarea hidden name="inquiry"><?php echo nl2br($_POST["inquiry"]);; ?></textarea>
          </tr>
        </table>
        <div class="c-confirm-btn-area">
          <input class="c-confirm-btn" type="submit" value="送信" />
          <button class="c-back-btn" type="button" onclick="history.back(-1)">戻る</button>
        </div>
      </form>
      <!-- </div> -->
    </div>
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
        <li class="l-footer__nav-item"><a class="l-footer__nav-link" href="">お問い合わせ</a></li>
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