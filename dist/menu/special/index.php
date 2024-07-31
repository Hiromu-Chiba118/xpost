<?php
$thisPageName = 'special';
$path = realpath(dirname(__FILE__) . '') . "/../../";
include_once($path . 'app_config.php');
include($path . 'libs/head.php');
?>
<link href="<?php echo APP_ASSETS; ?>css/page/menu.min.css" rel="stylesheet">
<link href="<?php echo APP_ASSETS; ?>css/page/special.min.css" rel="stylesheet">
</head>

<body id="special" class="special">
  <?php include($path . 'libs/header.php'); ?>

  <main>
    <!-- menu btn ---------------------------------- -->
    <div class="special__container">
      <div class="special__head menu js-fadeIns01" style="opacity: 0;">
        <div class="menu__inner">
          <h1 class="menu__title c-page-title c-page-title--menu font-en">menu</h1>
          <div class="menu__btn-wrap menu-btn">
            <ul class="menu-btn__lists">
              <li class="menu-btn__list">
                <a href="#special-course">
                  <div class="menu-btn__img js-parallax06">
                    <picture>
                      <source srcset="<?php echo APP_ASSETS; ?>img/menu/img-menu01.jpg.webp" type="image/webp">
                      <img src="<?php echo APP_ASSETS; ?>img/menu/img-menu01.jpg" alt="スペシャルコース">
                    </picture>
                  </div>
                  <div class="menu-btn__text">
                    <span class="menu-btn__title menu-btn__title--upper font-en">special</span>
                    <span class="menu-btn__title menu-btn__title--lower font-en">course</span>
                  </div>
                </a>
              </li>
              <li class="menu-btn__list">
                <a href="<?php echo APP_URL; ?>menu/lunch#lunch-course">
                  <div class="menu-btn__img">
                    <picture>
                      <source srcset="<?php echo APP_ASSETS; ?>img/menu/img-menu02.jpg.webp" type="image/webp">
                      <img src="<?php echo APP_ASSETS; ?>img/menu/img-menu02.jpg" alt="ランチコース">
                    </picture>
                  </div>
                  <div class="menu-btn__text">
                    <span class="menu-btn__title menu-btn__title--upper font-en">lunch</span>
                    <span class="menu-btn__title menu-btn__title--lower font-en">course</span>
                  </div>
                </a>
              </li>
              <li class="menu-btn__list">
                <a href="<?php echo APP_URL; ?>menu/drink#drink-menu">
                  <div class="menu-btn__img">
                    <picture>
                      <source srcset="<?php echo APP_ASSETS; ?>img/menu/img-menu03.jpg.webp" type="image/webp">
                      <img src="<?php echo APP_ASSETS; ?>img/menu/img-menu03.jpg" alt="ドリンク">
                    </picture>
                  </div>
                  <div class="menu-btn__text">
                    <span class="menu-btn__title menu-btn__title--upper font-en">drink</span>
                    <span class="menu-btn__title menu-btn__title--lower font-en">menu</span>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- ---------------------------------------- -->
      <div id="special-course" class="menu__foot">
        <!-- special-summary  ---------------------------------- -->
        <section class="special__contents special-summary menu-summary">
          <div class="menu-summary__inner inner">
            <div class="menu-summary__head">
              <div class="menu-summary__contents js-fadeIns02" style="opacity: 0;">
                <h2 class="menu-summary__title font-en">special course</h2>
                <div class="menu-summary__img js-parallax01">
                  <picture>
                    <source srcset="<?php echo APP_ASSETS; ?>img/special/img_mv.jpg.webp" type="image/webp">
                    <img src="<?php echo APP_ASSETS; ?>img/special/img_mv.jpg" alt="スペシャルコース料理">
                  </picture>
                </div>
                <div class="menu-summary__meta course-meta">
                  <div class="course-meta__inner">
                    <h3 class="course-meta__title"><span>arata</span><br class="sp"><span>スペシャルコース</span></h3>
                    <p class="course-meta__price">全20皿 / おひとり様<span><strong>7,500</strong>yen</span><span>［tax in］</span></p>
                    <p class="course-meta__note">ランチタイム・ディナータイム共に<br class="sp">ご注文いただけます。</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="menu-summary__foot">
              <h4 class="menu-summary__lead">「高品質な黒毛和牛の<br class="sp">真のおいしさを<br class="u-860sp">味わっていただきたい」<br>そんな想いから<br class="sp">"少量20皿のコース"という形式で<br class="u-860sp">焼肉をご提供します</h4>
              <p class="menu-summary__message">
                厳選して仕入れた黒毛和牛をはじめ、<br class="u-860 ">こだわりの食材たちを一番おいしい状態でお客様の元へお届けします。<br>数々の料理の中でひときわ存在感を放つのは、<br class="u-860">魅力を最大に引き出された黒毛和牛。<br>創業60年に裏打ちされた確かな知識と技術で、<br class="u-860">最後の一口まで楽しんでいただけるコースに仕上げました。<br>さらに韓国テイストを一部取り入れることで、<br class="u-860">「焼肉」を彩り華やかに、美容・健康にも良い料理へと昇華させました。<br>ヘルシーでバランスの取れたコース料理だからこそ、<br class="u-860">心置きなくお楽しみいただくことができます。
              </p>
              <p class="menu-summary__note">※コース料理にすることで、フードロスをなくし、SDGsにも貢献しています。</p>
            </div>
          </div>
        </section>
        <!-- ---------------------------------------- -->

        <!-- special-specialty スペシャリテ3品 ---------------------------------------- -->
        <div class="menu__wrapper menu__wrapper--special u-bg-gray">
          <section class="special__contents special-specialty">
            <div class="fixed-box pc"></div>
            <h2 class="special-specialty__title section-title font-en">specialty<br><span>スペシャリテ3品</span></h2>
            <ul class="special-specialty__items">
              <!-- 1品目 -->
              <li class="special-specialty__item specialty specialty--01">
                <div class="specialty__wrap">
                  <div class="specialty__content">
                    <h3 class="specialty__title">牛タン3種</h3>
                    <p class="specialty__text">アメリカ産のチルド牛タンを使用。タン芯の部分は1cmの厚切りでお召し上がり頂きます。またタン中、タンカルビはお好みで特製の胡麻の葉醤油漬け、<br class="pc">ネギ塩を包んでお召し上がり下さい。</p>
                  </div>
                  <div class="specialty__img-box">
                    <div class="specialty__img js-expansion01">
                      <picture>
                        <source srcset="<?php echo APP_ASSETS; ?>img/special/img_specialty01.jpg.webp" type="image/webp">
                        <img src="<?php echo APP_ASSETS; ?>img/special/img_specialty01.jpg" alt="牛タン3種">
                      </picture>
                    </div>
                    <span class="deco-number">01</span>
                  </div>
                </div>
              </li>
              <!-- 2品目 -->
              <li class="special-specialty__item specialty specialty--02">
                <div class="specialty__wrap">
                  <div class="specialty__content">
                    <h3 class="specialty__title">黒毛和牛厚切りリブロースステーキ</h3>
                    <p class="specialty__text">黒毛和牛のリブロースを使用。その中でも最上級のリブ芯のみを使用した、arata自慢のステーキ。焼き上がり後はスタッフが目の前で仕上げます。レアでご提供致しますので、お好みの焼き加減でお召し上がり下さい。</p>
                  </div>
                  <div class="specialty__img-box">
                    <div class="specialty__img js-expansion02">
                      <picture>
                        <source srcset="<?php echo APP_ASSETS; ?>img/special/img_specialty02.jpg.webp" type="image/webp">
                        <img src="<?php echo APP_ASSETS; ?>img/special/img_specialty02.jpg" alt="黒毛和牛厚切りステーキ">
                      </picture>
                    </div>
                    <span class="deco-number">02</span>
                  </div>
                </div>
              </li>
              <!-- 3品目 -->
              <li class="special-specialty__item specialty specialty--03">
                <div class="specialty__wrap">
                  <div class="specialty__content">
                    <h3 class="specialty__title">黒毛和牛と蕪の土鍋ごはん<br>新潟米“新之助”使用</h3>
                    <p class="specialty__text">黒毛和牛から取った出汁を使用し、具材にも黒毛和牛や蕪を使用した逸品。<br class="pc">米にもこだわり、新潟県産“新之助”というプレミアム米を使用。お申し付け頂きましたら残りをお持ち帰り用にお支度いたします。</p>
                  </div>
                  <div class="specialty__img-box">
                    <div class="specialty__img js-expansion03">
                      <picture>
                        <source srcset="<?php echo APP_ASSETS; ?>img/special/img_specialty03.jpg.webp" type="image/webp">
                        <img src="<?php echo APP_ASSETS; ?>img/special/img_specialty03.jpg" alt="牛タン盛り合わせ">
                      </picture>
                    </div>
                    <span class="deco-number">03</span>
                  </div>
                </div>
              </li>
            </ul>
          </section>
        </div>
        <!-- ---------------------------------------- -->

        
        <!-- modal ---------------------------------------- -->
        <div id="js-overlay" class="overlay"></div>
        <!-- 1品目 -->
        <div class="modal" data-id="modal1">
          <div class="modal__img">
            <picture>
              <source srcset="<?php echo APP_ASSETS; ?>img/special/img_special-menu01.jpg.webp" type="image/webp">
              <img src="<?php echo APP_ASSETS; ?>img/special/img_special-menu01.jpg" alt="前菜">
            </picture>
          </div>
          <div class="modal__content">
            <div class="modal__category-wrap">
              <span class="modal__number">01</span>
              <span class="modal__category">前菜</span>
            </div>
            <h3 class="modal__name">白いんげん豆の冷製スープ</h3>
          </div>
          <button class="js-close modal-close">
            <span></span>
            <span></span>
          </button>
        </div>
        <!-- 2品目 -->
        <div class="modal" data-id="modal2">
          <div class="modal__img">
            <picture>
              <source srcset="<?php echo APP_ASSETS; ?>img/special/img_special-menu02.jpg.webp" type="image/webp">
              <img src="<?php echo APP_ASSETS; ?>img/special/img_special-menu02.jpg" alt="黒毛和牛リブロースユッケ">
            </picture>
          </div>
          <div class="modal__content">
            <div class="modal__category-wrap">
              <span class="modal__number">02</span>
              <span class="modal__category">刺身</span>
            </div>
            <h3 class="modal__name">黒毛和牛リブロースユッケ<br><span>京都産たまご「濃紅」添え</span></h3>
          </div>
          <button class="js-close modal-close">
            <span></span>
            <span></span>
          </button>
        </div>
        <!-- 3品目 -->
        <div class="modal" data-id="modal3">
          <div class="modal__img">
            <picture>
              <source srcset="<?php echo APP_ASSETS; ?>img/special/img_special-menu03.jpg.webp" type="image/webp">
              <img src="<?php echo APP_ASSETS; ?>img/special/img_special-menu03.jpg" alt="おくらとみょうがのサラダ">
            </picture>
          </div>
          <div class="modal__content">
            <div class="modal__category-wrap">
              <span class="modal__number">03</span>
              <span class="modal__category">サラダ</span>
            </div>
            <h3 class="modal__name">おくらとみょうがのサラダ</h3>
          </div>
          <button class="js-close modal-close">
            <span></span>
            <span></span>
          </button>
        </div>
        <!-- 4品目 -->
        <div class="modal" data-id="modal4">
          <div class="modal__img">
            <picture>
              <source srcset="<?php echo APP_ASSETS; ?>img/special/img_special-menu04.jpg.webp" type="image/webp">
              <img src="<?php echo APP_ASSETS; ?>img/special/img_special-menu04.jpg" alt="厚切り牛タン">
            </picture>
          </div>
          <div class="modal__content">
            <div class="modal__category-wrap">
              <span class="modal__number">04</span>
              <span class="modal__category">牛タン</span>
            </div>
            <h3 class="modal__name">厚切り牛タン</h3>
          </div>
          <button class="js-close modal-close">
            <span></span>
            <span></span>
          </button>
        </div>
        <!-- 5品目 -->
        <div class="modal" data-id="modal5">
          <div class="modal__img">
            <picture>
              <source srcset="<?php echo APP_ASSETS; ?>img/special/img_special-menu05.jpg.webp" type="image/webp">
              <img src="<?php echo APP_ASSETS; ?>img/special/img_special-menu05.jpg" alt="上塩タン">
            </picture>
          </div>
          <div class="modal__content">
            <div class="modal__category-wrap">
              <span class="modal__number">05</span>
              <span class="modal__category">牛タン</span>
            </div>
            <h3 class="modal__name">上塩タン</h3>
          </div>
          <button class="js-close modal-close">
            <span></span>
            <span></span>
          </button>
        </div>
        <!-- 6品目 -->
        <div class="modal" data-id="modal6">
          <div class="modal__img">
            <picture>
              <source srcset="<?php echo APP_ASSETS; ?>img/special/img_special-menu06.jpg.webp" type="image/webp">
              <img src="<?php echo APP_ASSETS; ?>img/special/img_special-menu06.jpg" alt="タンカルビ">
            </picture>
          </div>
          <div class="modal__content">
            <div class="modal__category-wrap">
              <span class="modal__number">06</span>
              <span class="modal__category">牛タン</span>
            </div>
            <h3 class="modal__name">タンカルビ</h3>
          </div>
          <button class="js-close modal-close">
            <span></span>
            <span></span>
          </button>
        </div>
        <!-- 7品目 -->
        <div class="modal" data-id="modal7">
          <div class="modal__img">
            <picture>
              <source srcset="<?php echo APP_ASSETS; ?>img/special/img_special-menu07.jpg.webp" type="image/webp">
              <img src="<?php echo APP_ASSETS; ?>img/special/img_special-menu07.jpg" alt="牛タンシチュー">
            </picture>
          </div>
          <div class="modal__content">
            <div class="modal__category-wrap">
              <span class="modal__number">07</span>
              <span class="modal__category">逸品</span>
            </div>
            <h3 class="modal__name">牛タンシチュー</h3>
          </div>
          <button class="js-close modal-close">
            <span></span>
            <span></span>
          </button>
        </div>
        <!-- 8品目 -->
        <div class="modal" data-id="modal8">
          <div class="modal__img">
            <picture>
              <source srcset="<?php echo APP_ASSETS; ?>img/special/img_special-menu08.jpg.webp" type="image/webp">
              <img src="<?php echo APP_ASSETS; ?>img/special/img_special-menu08.jpg" alt="ナムル３種盛り合わせ">
            </picture>
          </div>
          <div class="modal__content">
            <div class="modal__category-wrap">
              <span class="modal__number">08</span>
              <span class="modal__category">逸品</span>
            </div>
            <h3 class="modal__name">ナムル３種盛り合わせ</h3>
          </div>
          <button class="js-close modal-close">
            <span></span>
            <span></span>
          </button>
        </div>
        <!-- 9品目 -->
        <div class="modal" data-id="modal9">
          <div class="modal__img">
            <picture>
              <source srcset="<?php echo APP_ASSETS; ?>img/special/img_special-menu09.jpg.webp" type="image/webp">
              <img src="<?php echo APP_ASSETS; ?>img/special/img_special-menu09.jpg" alt="黒毛和牛厚切りステーキ">
            </picture>
          </div>
          <div class="modal__content">
            <div class="modal__category-wrap">
              <span class="modal__number">09</span>
              <span class="modal__category">塩焼き</span>
            </div>
            <h3 class="modal__name">黒毛和牛厚切り<br class="sp">リブロースステーキ</h3>
          </div>
          <button class="js-close modal-close">
            <span></span>
            <span></span>
          </button>
        </div>
        <!-- 10品目 -->
        <div class="modal" data-id="modal10">
          <div class="modal__img">
            <picture>
              <source srcset="<?php echo APP_ASSETS; ?>img/special/img_special-menu10.jpg.webp" type="image/webp">
              <img src="<?php echo APP_ASSETS; ?>img/special/img_special-menu10.jpg" alt="柚子シャーベット">
            </picture>
          </div>
          <div class="modal__content">
            <div class="modal__category-wrap">
              <span class="modal__number">10</span>
              <span class="modal__category">箸休め</span>
            </div>
            <h3 class="modal__name">柚子シャーベット</h3>
          </div>
          <button class="js-close modal-close">
            <span></span>
            <span></span>
          </button>
        </div>
        <!-- 11品目 -->
        <div class="modal" data-id="modal11">
          <div class="modal__img">
            <picture>
              <source srcset="<?php echo APP_ASSETS; ?>img/special/img_special-menu11.jpg.webp" type="image/webp">
              <img src="<?php echo APP_ASSETS; ?>img/special/img_special-menu11.jpg" alt="焼き野菜盛合わせ">
            </picture>
          </div>
          <div class="modal__content">
            <div class="modal__category-wrap">
              <span class="modal__number">11</span>
              <span class="modal__category">焼き野菜</span>
            </div>
            <h3 class="modal__name">焼き野菜盛合わせ<br><span>上高地「山椒味噌」添え</span></h3>
          </div>
          <button class="js-close modal-close">
            <span></span>
            <span></span>
          </button>
        </div>
        <!-- 12品目 -->
        <div class="modal" data-id="modal12">
          <div class="modal__img">
            <picture>
              <source srcset="<?php echo APP_ASSETS; ?>img/special/img_special-menu12.jpg.webp" type="image/webp">
              <img src="<?php echo APP_ASSETS; ?>img/special/img_special-menu12.jpg" alt="ポッサムキムチのルーレ">
            </picture>
          </div>
          <div class="modal__content">
            <div class="modal__category-wrap">
              <span class="modal__number">12</span>
              <span class="modal__category">逸品</span>
            </div>
            <h3 class="modal__name">ポッサムキムチのルーレ</h3>
          </div>
          <button class="js-close modal-close">
            <span></span>
            <span></span>
          </button>
        </div>
        <!-- 13品目 -->
        <div class="modal" data-id="modal13">
          <div class="modal__img">
            <picture>
              <source srcset="<?php echo APP_ASSETS; ?>img/special/img_special-menu13.jpg.webp" type="image/webp">
              <img src="<?php echo APP_ASSETS; ?>img/special/img_special-menu13.jpg" alt="本日の黒毛和牛">
            </picture>
          </div>
          <div class="modal__content">
            <div class="modal__category-wrap">
              <span class="modal__number">13</span>
              <span class="modal__category">タレ焼き</span>
            </div>
            <h3 class="modal__name">本日の黒毛和牛</h3>
          </div>
          <button class="js-close modal-close">
            <span></span>
            <span></span>
          </button>
        </div>
        <!-- 14品目 -->
        <div class="modal" data-id="modal14">
          <div class="modal__img">
            <picture>
              <source srcset="<?php echo APP_ASSETS; ?>img/special/img_special-menu14.jpg.webp" type="image/webp">
              <img src="<?php echo APP_ASSETS; ?>img/special/img_special-menu14.jpg" alt="上ハラミ">
            </picture>
          </div>
          <div class="modal__content">
            <div class="modal__category-wrap">
              <span class="modal__number">14</span>
              <span class="modal__category">タレ焼き</span>
            </div>
            <h3 class="modal__name">上ハラミ</h3>
          </div>
          <button class="js-close modal-close">
            <span></span>
            <span></span>
          </button>
        </div>
        <!-- 15品目 -->
        <div class="modal" data-id="modal15">
          <div class="modal__img">
            <picture>
              <source srcset="<?php echo APP_ASSETS; ?>img/special/img_special-menu15.jpg.webp" type="image/webp">
              <img src="<?php echo APP_ASSETS; ?>img/special/img_special-menu15.jpg" alt="黒毛和牛焼きすき">
            </picture>
          </div>
          <div class="modal__content">
            <div class="modal__category-wrap">
              <span class="modal__number">15</span>
              <span class="modal__category">タレ焼き</span>
            </div>
            <h3 class="modal__name">黒毛和牛焼きすき</h3>
          </div>
          <button class="js-close modal-close">
            <span></span>
            <span></span>
          </button>
        </div>
        <!-- 16品目 -->
        <div class="modal" data-id="modal16">
          <div class="modal__img">
            <picture>
              <source srcset="<?php echo APP_ASSETS; ?>img/special/img_special-menu16.jpg.webp" type="image/webp">
              <img src="<?php echo APP_ASSETS; ?>img/special/img_special-menu16.jpg" alt="特製冷麺">
            </picture>
          </div>
          <div class="modal__content">
            <div class="modal__category-wrap">
              <span class="modal__number">16</span>
              <span class="modal__category">麺</span>
            </div>
            <h3 class="modal__name"><span>節の旨味を効かせた</span><br>盛岡冷麺</h3>
          </div>
          <button class="js-close modal-close">
            <span></span>
            <span></span>
          </button>
        </div>
        <!-- 17品目 -->
        <div class="modal" data-id="modal17">
          <div class="modal__img">
            <picture>
              <source srcset="<?php echo APP_ASSETS; ?>img/special/img_special-menu17.jpg.webp" type="image/webp">
              <img src="<?php echo APP_ASSETS; ?>img/special/img_special-menu17.jpg" alt="黒毛和牛と蕪の土鍋ごはん新潟米“新之助”使用">
            </picture>
          </div>
          <div class="modal__content">
            <div class="modal__category-wrap">
              <span class="modal__number">17</span>
              <span class="modal__category">飯</span>
            </div>
            <h3 class="modal__name">黒毛和牛と蕪の土鍋ごはん<br><span>新潟米“新之助”使用</span></h3>
          </div>
          <button class="js-close modal-close">
            <span></span>
            <span></span>
          </button>
        </div>
        <!-- 18品目 -->
        <div class="modal" data-id="modal18">
          <div class="modal__img">
            <picture>
              <source srcset="<?php echo APP_ASSETS; ?>img/special/img_special-menu18.jpg.webp" type="image/webp">
              <img src="<?php echo APP_ASSETS; ?>img/special/img_special-menu18.jpg" alt="香の物">
            </picture>
          </div>
          <div class="modal__content">
            <div class="modal__category-wrap">
              <span class="modal__number">18</span>
              <span class="modal__category">香の物</span>
            </div>
            <h3 class="modal__name">香の物</h3>
          </div>
          <button class="js-close modal-close">
            <span></span>
            <span></span>
          </button>
        </div>
        <!-- 19品目 -->
        <div class="modal" data-id="modal19">
          <div class="modal__img">
            <picture>
              <source srcset="<?php echo APP_ASSETS; ?>img/special/img_special-menu19.jpg.webp" type="image/webp">
              <img src="<?php echo APP_ASSETS; ?>img/special/img_special-menu19.jpg" alt="牛出汁スープ">
            </picture>
          </div>
          <div class="modal__content">
            <div class="modal__category-wrap">
              <span class="modal__number">19</span>
              <span class="modal__category">汁物</span>
            </div>
            <h3 class="modal__name">牛出汁スープ</h3>
          </div>
          <button class="js-close modal-close">
            <span></span>
            <span></span>
          </button>
        </div>
        <!-- 20品目 -->
        <div class="modal" data-id="modal20">
          <div class="modal__img">
            <picture>
              <source srcset="<?php echo APP_ASSETS; ?>img/special/img_special-menu20.jpg.webp" type="image/webp">
              <img src="<?php echo APP_ASSETS; ?>img/special/img_special-menu20.jpg" alt="自家製プリン/よもぎアイス/バニラアイス季節フルーツ">
            </picture>
          </div>
          <div class="modal__content">
            <div class="modal__category-wrap">
              <span class="modal__number">20</span>
              <span class="modal__category">甘味<span>［1品選択］</span></span>
            </div>
            <h3 class="modal__name">自家製プリン/<br class="sp">よもぎアイス/<br>バニラアイス<span>季節フルーツ添え</span></h3>
          </div>
          <button class="js-close modal-close">
            <span></span>
            <span></span>
          </button>
        </div>
        <!-- ---------------------------------------- -->


        <!-- special-course コース品目---------------------------------------- -->
        <section class="special__contents special-course">
          <!-- 全面のタイトル -->
          <div class="special-course__head">
            <div class="special-course__title-wrap01">
              <h2 class="special-course__title font-en">special course</h2>
              <p class="special-course__sub-title">7-9月のお品書き</p>
            </div>
          </div>

          <div class="special-course__contents">
            <div class="special-course__wrapper">
              <div class="special-course__title-wrap02">
                <div class="special-course__title-box">
                  <h2 class="special-course__title font-en">special course</h2>
                  <p class="special-course__sub-title">7-9月のお品書き</p>
                </div>
              </div>
            </div>
            <ol class="special-course__items">
              <!-- 1品目 -->
              <li class="special-course__item course-item js-open" data-id="1">
                <div class="course-item__img">
                  <picture>
                    <source srcset="<?php echo APP_ASSETS; ?>img/special/img_special-menu01.jpg.webp" type="image/webp">
                    <img src="<?php echo APP_ASSETS; ?>img/special/img_special-menu01.jpg" alt="白いんげん豆の冷製スープ">
                  </picture>
                </div>
                <div class="course-item__content">
                  <div class="course-item__category-wrap">
                    <span class="course-item__number">01</span>
                    <span class="course-item__category">前菜</span>
                  </div>
                  <h3 class="course-item__name">白いんげん豆の冷製スープ</h3>
                </div>
              </li>
              <!-- 2品目 -->
              <li class="special-course__item course-item js-open" data-id="2">
                <div class="course-item__img">
                  <picture>
                    <source srcset="<?php echo APP_ASSETS; ?>img/special/img_special-menu02.jpg.webp" type="image/webp">
                    <img src="<?php echo APP_ASSETS; ?>img/special/img_special-menu02.jpg" alt="黒毛和牛リブロースユッケ">
                  </picture>
                </div>
                <div class="course-item__content">
                  <div class="course-item__category-wrap">
                    <span class="course-item__number">02</span>
                    <span class="course-item__category">刺身</span>
                  </div>
                  <h3 class="course-item__name">黒毛和牛リブロースユッケ<br><span>京都産たまご「濃紅」添え</span></h3>
                </div>
              </li>
              <!-- 3品目 -->
              <li class="special-course__item course-item js-open" data-id="3">
                <div class="course-item__img">
                  <picture>
                    <source srcset="<?php echo APP_ASSETS; ?>img/special/img_special-menu03.jpg.webp" type="image/webp">
                    <img src="<?php echo APP_ASSETS; ?>img/special/img_special-menu03.jpg" alt="おくらとみょうがのサラダ">
                  </picture>
                </div>
                <div class="course-item__content">
                  <div class="course-item__category-wrap">
                    <span class="course-item__number">03</span>
                    <span class="course-item__category">サラダ</span>
                  </div>
                  <h3 class="course-item__name">おくらとみょうがのサラダ</h3>
                </div>
              </li>
              <!-- 4品目 -->
              <li class="special-course__item course-item js-open" data-id="4">
                <div class="course-item__img">
                  <picture>
                    <source srcset="<?php echo APP_ASSETS; ?>img/special/img_special-menu04.jpg.webp" type="image/webp">
                    <img src="<?php echo APP_ASSETS; ?>img/special/img_special-menu04.jpg" alt="厚切り牛タン">
                  </picture>
                </div>
                <div class="course-item__content">
                  <div class="course-item__category-wrap">
                    <span class="course-item__number">04</span>
                    <span class="course-item__category">牛タン</span>
                  </div>
                  <h3 class="course-item__name">厚切り牛タン</h3>
                </div>
              </li>
              <!-- 5品目 -->
              <li class="special-course__item course-item js-open" data-id="5">
                <div class="course-item__img">
                  <picture>
                    <source srcset="<?php echo APP_ASSETS; ?>img/special/img_special-menu05.jpg.webp" type="image/webp">
                    <img src="<?php echo APP_ASSETS; ?>img/special/img_special-menu05.jpg" alt="上塩タン">
                  </picture>
                </div>
                <div class="course-item__content">
                  <div class="course-item__category-wrap">
                    <span class="course-item__number">05</span>
                    <span class="course-item__category">牛タン</span>
                  </div>
                  <h3 class="course-item__name">上塩タン</h3>
                </div>
              </li>
              <!-- 6品目 -->
              <li class="special-course__item course-item js-open" data-id="6">
                <div class="course-item__img">
                  <picture>
                    <source srcset="<?php echo APP_ASSETS; ?>img/special/img_special-menu06.jpg.webp" type="image/webp">
                    <img src="<?php echo APP_ASSETS; ?>img/special/img_special-menu06.jpg" alt="タンカルビ">
                  </picture>
                </div>
                <div class="course-item__content">
                  <div class="course-item__category-wrap">
                    <span class="course-item__number">06</span>
                    <span class="course-item__category">牛タン</span>
                  </div>
                  <h3 class="course-item__name">タンカルビ</h3>
                </div>
              </li>
              <!-- 7品目 -->
              <li class="special-course__item course-item js-open" data-id="7">
                <div class="course-item__img">
                  <picture>
                    <source srcset="<?php echo APP_ASSETS; ?>img/special/img_special-menu07.jpg.webp" type="image/webp">
                    <img src="<?php echo APP_ASSETS; ?>img/special/img_special-menu07.jpg" alt="牛タンシチュー">
                  </picture>
                </div>
                <div class="course-item__content">
                  <div class="course-item__category-wrap">
                    <span class="course-item__number">07</span>
                    <span class="course-item__category">逸品</span>
                  </div>
                  <h3 class="course-item__name">牛タンシチュー</h3>
                </div>
              </li>
              <!-- 8品目 -->
              <li class="special-course__item course-item js-open" data-id="8">
                <div class="course-item__img">
                  <picture>
                    <source srcset="<?php echo APP_ASSETS; ?>img/special/img_special-menu08.jpg.webp" type="image/webp">
                    <img src="<?php echo APP_ASSETS; ?>img/special/img_special-menu08.jpg" alt="ナムル３種盛り合わせ">
                  </picture>
                </div>
                <div class="course-item__content">
                  <div class="course-item__category-wrap">
                    <span class="course-item__number">08</span>
                    <span class="course-item__category">逸品</span>
                  </div>
                  <h3 class="course-item__name">ナムル３種盛り合わせ</h3>
                </div>
              </li>
              <!-- 9品目 -->
              <li class="special-course__item course-item js-open" data-id="9">
                <div class="course-item__img">
                  <picture>
                    <source srcset="<?php echo APP_ASSETS; ?>img/special/img_special-menu09.jpg.webp" type="image/webp">
                    <img src="<?php echo APP_ASSETS; ?>img/special/img_special-menu09.jpg" alt="黒毛和牛厚切りステーキ">
                  </picture>
                </div>
                <div class="course-item__content">
                  <div class="course-item__category-wrap">
                    <span class="course-item__number">09</span>
                    <span class="course-item__category">塩焼き</span>
                  </div>
                  <h3 class="course-item__name">黒毛和牛厚切り<br class="sp">リブロースステーキ</h3>
                </div>
              </li>
              <!-- 10品目 -->
              <li class="special-course__item course-item js-open" data-id="10">
                <div class="course-item__img">
                  <picture>
                    <source srcset="<?php echo APP_ASSETS; ?>img/special/img_special-menu10.jpg.webp" type="image/webp">
                    <img src="<?php echo APP_ASSETS; ?>img/special/img_special-menu10.jpg" alt="柚子シャーベット">
                  </picture>
                </div>
                <div class="course-item__content">
                  <div class="course-item__category-wrap">
                    <span class="course-item__number">10</span>
                    <span class="course-item__category">箸休め</span>
                  </div>
                  <h3 class="course-item__name">柚子シャーベット</h3>
                </div>
              </li>
              <!-- 11品目 -->
              <li class="special-course__item course-item js-open" data-id="11">
                <div class="course-item__img">
                  <picture>
                    <source srcset="<?php echo APP_ASSETS; ?>img/special/img_special-menu11.jpg.webp" type="image/webp">
                    <img src="<?php echo APP_ASSETS; ?>img/special/img_special-menu11.jpg" alt="焼き野菜盛合わせ">
                  </picture>
                </div>
                <div class="course-item__content">
                  <div class="course-item__category-wrap">
                    <span class="course-item__number">11</span>
                    <span class="course-item__category">焼き野菜</span>
                  </div>
                  <h3 class="course-item__name">焼き野菜盛合わせ<br><span>上高地「山椒味噌」添え</span></h3>
                </div>
              </li>
              <!-- 12品目 -->
              <li class="special-course__item course-item js-open" data-id="12">
                <div class="course-item__img">
                  <picture>
                    <source srcset="<?php echo APP_ASSETS; ?>img/special/img_special-menu12.jpg.webp" type="image/webp">
                    <img src="<?php echo APP_ASSETS; ?>img/special/img_special-menu12.jpg" alt="ポッサムキムチのルーレ">
                  </picture>
                </div>
                <div class="course-item__content">
                  <div class="course-item__category-wrap">
                    <span class="course-item__number">12</span>
                    <span class="course-item__category">逸品</span>
                  </div>
                  <h3 class="course-item__name">ポッサムキムチのルーレ</h3>
                </div>
              </li>
              <!-- 13品目 -->
              <li class="special-course__item course-item js-open" data-id="13">
                <div class="course-item__img">
                  <picture>
                    <source srcset="<?php echo APP_ASSETS; ?>img/special/img_special-menu13.jpg.webp" type="image/webp">
                    <img src="<?php echo APP_ASSETS; ?>img/special/img_special-menu13.jpg" alt="本日の黒毛和牛">
                  </picture>
                </div>
                <div class="course-item__content">
                  <div class="course-item__category-wrap">
                    <span class="course-item__number">13</span>
                    <span class="course-item__category">タレ焼き</span>
                  </div>
                  <h3 class="course-item__name">本日の黒毛和牛</h3>
                </div>
              </li>
              <!-- 14品目 -->
              <li class="special-course__item course-item js-open" data-id="14">
                <div class="course-item__img">
                  <picture>
                    <source srcset="<?php echo APP_ASSETS; ?>img/special/img_special-menu14.jpg.webp" type="image/webp">
                    <img src="<?php echo APP_ASSETS; ?>img/special/img_special-menu14.jpg" alt="上ハラミ">
                  </picture>
                </div>
                <div class="course-item__content">
                  <div class="course-item__category-wrap">
                    <span class="course-item__number">14</span>
                    <span class="course-item__category">タレ焼き</span>
                  </div>
                  <h3 class="course-item__name">上ハラミ</h3>
                </div>
              </li>
              <!-- 15品目 -->
              <li class="special-course__item course-item js-open" data-id="15">
                <div class="course-item__img">
                  <picture>
                    <source srcset="<?php echo APP_ASSETS; ?>img/special/img_special-menu15.jpg.webp" type="image/webp">
                    <img src="<?php echo APP_ASSETS; ?>img/special/img_special-menu15.jpg" alt="黒毛和牛焼きすき">
                  </picture>
                </div>
                <div class="course-item__content">
                  <div class="course-item__category-wrap">
                    <span class="course-item__number">15</span>
                    <span class="course-item__category">タレ焼き</span>
                  </div>
                  <h3 class="course-item__name">黒毛和牛焼きすき</h3>
                </div>
              </li>
              <!-- 16品目 -->
              <li class="special-course__item course-item js-open" data-id="16">
                <div class="course-item__img">
                  <picture>
                    <source srcset="<?php echo APP_ASSETS; ?>img/special/img_special-menu16.jpg.webp" type="image/webp">
                    <img src="<?php echo APP_ASSETS; ?>img/special/img_special-menu16.jpg" alt="特製冷麺">
                  </picture>
                </div>
                <div class="course-item__content">
                  <div class="course-item__category-wrap">
                    <span class="course-item__number">16</span>
                    <span class="course-item__category">麺</span>
                  </div>
                  <h3 class="course-item__name"><span>節の旨味を効かせた</span><br>盛岡冷麺</h3>
                </div>
              </li>
              <!-- 17品目 -->
              <li class="special-course__item course-item js-open" data-id="17">
                <div class="course-item__img">
                  <picture>
                    <source srcset="<?php echo APP_ASSETS; ?>img/special/img_special-menu17.jpg.webp" type="image/webp">
                    <img src="<?php echo APP_ASSETS; ?>img/special/img_special-menu17.jpg" alt="黒毛和牛と蕪の土鍋ごはん新潟米“新之助”使用">
                  </picture>
                </div>
                <div class="course-item__content">
                  <div class="course-item__category-wrap">
                    <span class="course-item__number">17</span>
                    <span class="course-item__category">飯</span>
                  </div>
                  <h3 class="course-item__name">黒毛和牛と蕪の土鍋ごはん<br><span>新潟米“新之助”使用</span></h3>
                </div>
              </li>
              <!-- 18品目 -->
              <li class="special-course__item course-item js-open" data-id="18">
                <div class="course-item__img">
                  <picture>
                    <source srcset="<?php echo APP_ASSETS; ?>img/special/img_special-menu18.jpg.webp" type="image/webp">
                    <img src="<?php echo APP_ASSETS; ?>img/special/img_special-menu18.jpg" alt="香の物">
                  </picture>
                </div>
                <div class="course-item__content">
                  <div class="course-item__category-wrap">
                    <span class="course-item__number">18</span>
                    <span class="course-item__category">香の物</span>
                  </div>
                  <h3 class="course-item__name">香の物</h3>
                </div>
              </li>
              <!-- 19品目 -->
              <li class="special-course__item course-item js-open" data-id="19">
                <div class="course-item__img">
                  <picture>
                    <source srcset="<?php echo APP_ASSETS; ?>img/special/img_special-menu19.jpg.webp" type="image/webp">
                    <img src="<?php echo APP_ASSETS; ?>img/special/img_special-menu19.jpg" alt="牛出汁スープ">
                  </picture>
                </div>
                <div class="course-item__content">
                  <div class="course-item__category-wrap">
                    <span class="course-item__number">19</span>
                    <span class="course-item__category">汁物</span>
                  </div>
                  <h3 class="course-item__name">牛出汁スープ</h3>
                </div>
              </li>
              <!-- 20品目 -->
              <li class="special-course__item course-item js-open" data-id="20">
                <div class="course-item__img">
                  <picture>
                    <source srcset="<?php echo APP_ASSETS; ?>img/special/img_special-menu20.jpg.webp" type="image/webp">
                    <img src="<?php echo APP_ASSETS; ?>img/special/img_special-menu20.jpg" alt="自家製プリン/よもぎアイス/バニラアイス季節フルーツ添え">
                  </picture>
                </div>
                <div class="course-item__content">
                  <div class="course-item__category-wrap">
                    <span class="course-item__number">20</span>
                    <span class="course-item__category u-les">甘味<span>［1品選択］</span>
                    </span>
                  </div>
                  <h3 class="course-item__name u-le200">自家製プリン/<br class="sp">よもぎアイス/<br>バニラアイス<span>季節フルーツ添え</span></h3>
                </div>
              </li>
            </ol>
          </div>
        </section>

        <!-- ---------------------------------------- -->

        <section class="allergy">
          <div class="base">
            <p class="allergy__txt">
              アレルギー情報は<a class="allergy__link" target="_blank" href="<?php echo APP_ASSETS; ?>pdf/menu/allergy.pdf">こちら</a>をご覧ください。
            </p>
          </div>
        </section>


      </div>
    </div>
  </main>

  <?php include($path . 'libs/footer.php'); ?>
  <script src="<?php echo APP_ASSETS; ?>js/menu.min.js"></script>
  <script src="<?php echo APP_ASSETS; ?>js/special.min.js"></script>

</body>

</html>