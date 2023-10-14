<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>株式会社ハマーズ</title>
  

  <link rel="stylesheet" href= "<?php echo get_template_directory_uri(); ?>/css/common.css">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>

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
        <img class="l-header__navicon" src="./assets/images/arrow-header.svg" width="25" height="25" alt="矢印アイコン">
        <a href="#" class="l-header__btn">分析依頼はこちら</a>
      </div>
    </div>
    <div class="c-phone-btn">
      <a href="tel:045-253-2560">
        <img class="c-phone-icon" src="./assets/images/phone-icon.svg" alt="電話のアイコン">
      </a>
    </div>
    <button class="l-header__hamburger" id="js-hamburger">
      <span class="l-header__hamburger--border"></span>
      <span class="l-header__hamburger--border"></span>
      <span class="l-header__hamburger--border"></span>
    </button>
    <div class="c-contact">
      <a href="#">
        <img class="c-contact__img" src="./assets/images/arrow-header.svg" width="15" height="15" alt="問い合わせフォームリンク">
        <p class="c-contact__text">分析依頼はこちら</p>
      </a>
    </div>
  </header>

  <main>
    <div class="c-analysis">
      <div class="c-analysis__fv">
        <p class="c-analysis__fv-text">分析依頼</p>
      </div>
      <div class="c-analysis__contents">

        <div class="c-analysis__top-text">
          <p class="c-analysis__description">アスベストの分析依頼はこちらのフォームからお間違いないようご入力ください。<br>正常に受付が受理されますと、数日以内にメールを差し上げます。
          </p>
          <p class="c-analysis__caution">※11件以上の同時検体をご希望の場合は、事前にお電話または<a href=""
              class="c-analysis__top-link">お問い合わせフォーム</a>からご相談ください。</p>
        </div>
        <form class="c-analysis__form" action="" method="post">

          <div class="c-analysis__row">
            <div class="c-analysis__head">分析プラン<div class="c-analysis__plan-required"><span>必須</span><span
                  class="spls-none">必須</span></div>
            </div>
            <div class="c-analysis__data checkbox-wrap">
              <label for="normal-plan">
                <input type="radio" name="plan" id="normal-plan" checked required>
                <span><strong>【通常プラン】</strong>定性分析（JIS A 1481-1）<strong>3営業日 22,000円(税込) </strong></strong></span>
              </label>
              <label for="express-plan">
                <input type="radio" name="plan" id="express-plan">
                <span><strong>【特急プラン】</strong>定性分析（JIS A 1481-1）<strong>1営業日 33,000円(税込)</strong></span>
              </label>
            </div>
          </div>
          <div class="c-analysis__row">
            <div class="c-analysis__head">お支払方法<span>必須</span></div>
            <div class="c-analysis__data checkbox-wrap">
              <label for="card">
                <input type="radio" name="payment" id="card" required>
                <span>クレジットカード</span>
              </label>
              <label for="transfer">
                <input type="radio" name="payment" id="transfer">
                <span>銀行振込</span>
              </label>
            </div>
          </div>
          <div class="c-analysis__row">
            <div class="c-analysis__head">報告書納品</div>
            <div class="c-analysis__data checkbox-wrap">
              <label for="email">
                <input type="radio" name="delivery" id="email" checked>
                <span>メール</span>
              </label>
              <label for="mail">
                <input type="radio" name="delivery" id="mail">
                <span><strong>郵送（送料 2,000円税込）</strong></span>
              </label>
            </div>
          </div>
          <div class="c-analysis__row">
            <div class="c-analysis__head">検体の返却<span>必須</span></div>
            <div class="c-analysis__data checkbox-wrap">
              <label for="unnecessary">
                <input type="radio" name="return" id="unnecessary" checked required>
                <span>不要</span>
              </label>
              <label for="necessary">
                <input type="radio" name="return" id="necessary">
                <span><strong>返却（送料 1,000円）</strong></span>
              </label>
            </div>
          </div>

          <div class="c-analysis__row --company">
            <div class="c-analysis__head">
              会社名<span>必須</span>
            </div>
            <div class="c-analysis__data">
              <input placeholder="株式会社〇〇" type="text" name="company" value="" required>
            </div>
          </div>
          <div class="c-analysis__row">
            <div class="c-analysis__head">
              担当者名<span>必須</span>
            </div>
            <div class="c-analysis__data">
              <input placeholder="△△ △△" type="text" name="name" value="" required>
            </div>
          </div>
          <div class="c-analysis__row">
            <div class="c-analysis__head">
              電話番号<span>必須</span>
            </div>
            <div class="c-analysis__data">
              <input placeholder="090-1234-5678" type="tel" name="tel" value="" required>
            </div>
          </div>
          <div class="c-analysis__row">
            <div class="c-analysis__head">
              メール<span>必須</span>
            </div>
            <div class="c-analysis__data">
              <input placeholder="abcde@fghij.com" type="email" name="mail" value="" required>
            </div>
          </div>
          <div class="c-analysis__row">
            <div class="c-analysis__head">
              工事件名<span>必須</span>
            </div>
            <div class="c-analysis__data">
              <input placeholder="木造2階建て家屋解体工事" type="text" name="subject" value="" required>
            </div>
          </div>
          <div class="c-analysis__row">
            <div class="c-analysis__head">
              工事場所<span>必須</span>
            </div>
            <div class="c-analysis__data">
              <input placeholder="〒XXX-XXXX 〇〇県△△市✕✕町〇-〇-〇" type="text" name="place" value="" required>
            </div>
          </div>
          <div class="c-analysis__row">
            <div class="c-analysis__head">
              検体採取日<span>必須</span>
            </div>
            <div class="c-analysis__data">
              <input placeholder="2023/mm/dd" type="text" name="date" value="" required>
            </div>
          </div>
          <div class="c-analysis__row">
            <div class="c-analysis__head">
              検体採取者名<span>必須</span>
            </div>
            <div class="c-analysis__data">
              <input placeholder="株式会社〇〇 △△ △△" type="text" name="person" value="" required>
            </div>
          </div>
          <div class="c-analysis__row">
            <div class="c-analysis__head">
              報告書宛名
            </div>
            <div class="c-analysis__data">
              <input placeholder="株式会社〇〇　※未記入の場合は会社名になります" type="text" name="address" value="" required>
            </div>
          </div>
          <div class="c-analysis__row">
            <div class="c-analysis__head">
              報告書宛名
            </div>
            <div class="c-analysis__data">
              <input type="file" name="file">
              <p class="c-analysis__file-text">※zip等の圧縮ファイルにしてお送りください。容量の目安は10MBまでとなります。</p>
            </div>
          </div>
          <div class="c-analysis__sample">
            <div class="c-analysis__row">
              <div class="c-analysis__head">
                検体試料01<span>必須</span>
              </div>
              <div class="c-analysis__data checkbox-wrap">
                <div class="c-analysis__sample-category">
                  <input placeholder="外壁サイディング" type="text" name="sample1-category" value="">
                  <input class="sample-place" placeholder="1階外壁" type="text" name="sample1-place" value="">
                </div>
                <div class="c-analysis__analysis">
                  <p class="c-analysis__title">層別分析</p>
                  <label for="sample1-unnecessary">
                    <input type="radio" name="sample1" id="sample1-unnecessary" checked required>
                    <span>不要</span>
                  </label>
                  <label for="sample1-necessary">
                    <input type="radio" name="sample1" id="sample1-necessary">
                    <span>必要</span>
                  </label>
                </div>
              </div>
            </div>
            <div class="c-analysis__row">
              <div class="c-analysis__head">
                検体試料02
              </div>
              <div class="c-analysis__data checkbox-wrap">
                <div class="c-analysis__sample-category">
                  <input placeholder="天井材" type="text" name="sample2-category" value="" required>
                  <input placeholder="1階キッチン" type="text" name="sample2-place" value="" required>
                </div>
                <div class="c-analysis__analysis">
                  <p class="c-analysis__title">層別分析</p>
                  <label for="sample2-unnecessary">
                    <input type="radio" name="sample2" id="sample2-unnecessary" checked required>
                    <span>不要</span>
                  </label>
                  <label for="sample2-necessary">
                    <input type="radio" name="sample2" id="sample2-necessary">
                    <span>必要</span>
                  </label>
                </div>
              </div>
            </div>
            <div class="c-analysis__row">
              <div class="c-analysis__head">
                検体試料03
              </div>
              <div class="c-analysis__data checkbox-wrap">
                <div class="c-analysis__sample-category">
                  <input placeholder="" type="text" name="sample3-category" value="">
                  <input placeholder="" type="text" name="sample3-place" value="">
                </div>
                <div class="c-analysis__analysis">
                  <p class="c-analysis__title">層別分析</p>
                  <label for="sample3-unnecessary">
                    <input type="radio" name="sample3" id="sample3-unnecessary" checked>
                    <span>不要</span>
                  </label>
                  <label for="sample3-necessary">
                    <input type="radio" name="sample3" id="sample3-necessary">
                    <span>必要</span>
                  </label>
                </div>
              </div>
            </div>
            <div class="c-analysis__row">
              <div class="c-analysis__head">
                検体試料04
              </div>
              <div class="c-analysis__data checkbox-wrap">
                <div class="c-analysis__sample-category">
                  <input placeholder="" type="text" name="sample4-category" value="">
                  <input placeholder="" type="text" name="sample4-place" value="">
                </div>
                <div class="c-analysis__analysis">
                  <p class="c-analysis__title">層別分析</p>
                  <label for="sample4-unnecessary">
                    <input type="radio" name="sample4" id="sample4-unnecessary" checked>
                    <span>不要</span>
                  </label>
                  <label for="sample4-necessary">
                    <input type="radio" name="sample4" id="sample4-necessary">
                    <span>必要</span>
                  </label>
                </div>
              </div>
            </div>
            <div class="c-analysis__row">
              <div class="c-analysis__head">
                検体試料05
              </div>
              <div class="c-analysis__data checkbox-wrap">
                <div class="c-analysis__sample-category">
                  <input placeholder="" type="text" name="sample5-category" value="">
                  <input placeholder="" type="text" name="sample5-place" value="">
                </div>
                <div class="c-analysis__analysis">
                  <p class="c-analysis__title">層別分析</p>
                  <label for="sample5-unnecessary">
                    <input type="radio" name="sample5" id="sample5-unnecessary" checked>
                    <span>不要</span>
                  </label>
                  <label for="sample5-necessary">
                    <input type="radio" name="sample5" id="sample5-necessary">
                    <span>必要</span>
                  </label>
                </div>
              </div>
            </div>
            <div class="c-analysis__row">
              <div class="c-analysis__head">
                検体試料06
              </div>
              <div class="c-analysis__data checkbox-wrap">
                <div class="c-analysis__sample-category">
                  <input placeholder="" type="text" name="sample6-category" value="">
                  <input placeholder="" type="text" name="sample6-place" value="">
                </div>
                <div class="c-analysis__analysis">
                  <p class="c-analysis__title">層別分析</p>
                  <label for="sample6-unnecessary">
                    <input type="radio" name="sample6" id="sample6-unnecessary" checked>
                    <span>不要</span>
                  </label>
                  <label for="sample6-necessary">
                    <input type="radio" name="sample6" id="sample6-necessary">
                    <span>必要</span>
                  </label>
                </div>
              </div>
            </div>
            <div class="c-analysis__row">
              <div class="c-analysis__head">
                検体試料07
              </div>
              <div class="c-analysis__data checkbox-wrap">
                <div class="c-analysis__sample-category">
                  <input placeholder="" type="text" name="sample7-category" value="">
                  <input placeholder="" type="text" name="sample7-place" value="">
                </div>
                <div class="c-analysis__analysis">
                  <p class="c-analysis__title">層別分析</p>
                  <label for="sample7-unnecessary">
                    <input type="radio" name="sample7" id="sample7-unnecessary" checked>
                    <span>不要</span>
                  </label>
                  <label for="sample7-necessary">
                    <input type="radio" name="sample7" id="sample7-necessary">
                    <span>必要</span>
                  </label>
                </div>
              </div>
            </div>
            <div class="c-analysis__row">
              <div class="c-analysis__head">
                検体試料08
              </div>
              <div class="c-analysis__data checkbox-wrap">
                <div class="c-analysis__sample-category">
                  <input placeholder="" type="text" name="sample8-category" value="">
                  <input placeholder="" type="text" name="sample8-place" value="">
                </div>
                <div class="c-analysis__analysis">
                  <p class="c-analysis__title">層別分析</p>
                  <label for="sample8-unnecessary">
                    <input type="radio" name="sample8" id="sample8-unnecessary" checked>
                    <span>不要</span>
                  </label>
                  <label for="sample8-necessary">
                    <input type="radio" name="sample8" id="sample8-necessary">
                    <span>必要</span>
                  </label>
                </div>
              </div>
            </div>
            <div class="c-analysis__row">
              <div class="c-analysis__head">
                検体試料09
              </div>
              <div class="c-analysis__data checkbox-wrap">
                <div class="c-analysis__sample-category">
                  <input placeholder="" type="text" name="sample9-category" value="">
                  <input placeholder="" type="text" name="sample9-place" value="">
                </div>
                <div class="c-analysis__analysis">
                  <p class="c-analysis__title">層別分析</p>
                  <label for="sample9-unnecessary">
                    <input type="radio" name="sample9" id="sample9-unnecessary" checked>
                    <span>不要</span>
                  </label>
                  <label for="sample9-necessary">
                    <input type="radio" name="sample9" id="sample9-necessary">
                    <span>必要</span>
                  </label>
                </div>
              </div>
            </div>
            <div class="c-analysis__row">
              <div class="c-analysis__head">
                検体試料10
              </div>
              <div class="c-analysis__data checkbox-wrap">
                <div class="c-analysis__sample-category">
                  <input placeholder="" type="text" name="sample10-category" value="">
                  <input placeholder="" type="text" name="sample10-place" value="">
                </div>
                <div class="c-analysis__analysis">
                  <p class="c-analysis__title">層別分析</p>
                  <label for="sample10-unnecessary">
                    <input type="radio" name="sample10" id="sample10-unnecessary" checked>
                    <span>不要</span>
                  </label>
                  <label for="sample10-necessary">
                    <input type="radio" name="sample10" id="sample10-necessary">
                    <span>必要</span>
                  </label>
                </div>
              </div>
            </div>

          </div>

          <div class="c-analysis__submit-wrap">
            <input type="submit" value="送信内容を確認する" />
          </div>
        </form>
        <div class="c-analysis__form">

          <?php echo do_shortcode('[contact-form-7 id="e7bd033" title="Contact form 1"]') ?>
          
        </div>
      </div>
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
      <img src="./assets/images/arrow-topbtn.svg" alt="topに戻るボタン" class="c-top-btn-icon">
    </div> -->
  </footer>
</body>

</html>