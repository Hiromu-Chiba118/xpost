<?php
$thisPageName = 'drink';
$path = realpath(dirname(__FILE__) . '') . "/../../";
include_once($path . 'app_config.php');
include($path . 'libs/head.php');
?>
<link href="<?php echo APP_ASSETS; ?>css/page/menu.min.css" rel="stylesheet">
<link href="<?php echo APP_ASSETS; ?>css/page/drink.min.css" rel="stylesheet">
</head>

<body id="drink" class="drink">
    <?php include($path . 'libs/header.php'); ?>

    <main>
        <!-- menu btn ---------------------------------- -->
        <div class="drink__container">
            <div class="drink__head menu js-fadeIns01" style="opacity: 0;">
                <div class="menu__inner">
                    <h1 class="menu__title c-page-title c-page-title--menu font-en">menu</h1>
                    <div class="menu__btn-wrap menu-btn">
                        <ul class="menu-btn__lists">
                            <li class="menu-btn__list">
                                <a href="<?php echo APP_URL; ?>menu/special#special-course">
                                    <div class="menu-btn__img">
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
                                <a href="#drink-menu">
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
            <div id="drink-menu" class="menu__foot">
                <!-- drink-summary  ---------------------------------- -->
                <section class="drink__contents drink-summary menu-summary">
                    <div class="menu-summary__inner js-fadeIns02" style="opacity: 0;">
                        <div class="menu-summary__head">
                            <div class="menu-summary__contents">
                                <h2 class="menu-summary__title font-en">drink menu</h2>
                                <div class="menu-summary__img js-parallax01">
                                    <picture>
                                        <source srcset="<?php echo APP_ASSETS; ?>img/drink/img_mv.jpg.webp" type="image/webp">
                                        <img src="<?php echo APP_ASSETS; ?>img/drink/img_mv.jpg" alt="ドリンク">
                                    </picture>
                                </div>
                            </div>
                        </div>
                        <div class="menu-summary__foot">
                            <h4 class="menu-summary__lead">世界でも人気が高い<br class="sp">ジャパニーズウイスキーを始め、<br>焼肉と相性の良いドリンクを<br class="sp">取り揃えました</h4>
                            <p class="menu-summary__message">
                                世界でも人気が高い日本のお酒を知っていただきたいという想いを込めて、<br class="pc">ジャパニーズウイスキーは「響」「山崎」「白州」「知多」など8種をラインナップ。<br>お肉も、お酒も、最高の状態で味わっていただけるよう、<br class="u-860">注ぎ方の細部に至るまでこだわっています。<br>ぜひ焼肉とジャパニーズウイスキーのマリアージュをお楽しみください。<br>その他、ワインやマッコリ、ノンアルコールからソフトドリンクまで、<br class="pc">焼肉と相性の良いドリンクを幅広く取り揃えております。
                            </p>
                        </div>
                    </div>
                </section>
                <!-- ---------------------------------------- -->

                <!-- drink-menu alcohol ---------------------------------- -->
                <div class="menu__wrapper menu__wrapper--drink u-bg-gray">
                    <section class="drink__contents drink-menu drink-menu--alcohol">
                        <div class="drink-menu__inner">
                            <!-- whisky -->
                            <div class="drink-menu__contents">
                                <p class="drink-menu__note">※表示価格は全て税込価格です</p>
                                <h2 class="drink-menu__title"><span class="font-en">whisky</span><span>［ ハイボール・ロック・ストレート・水割り ］</span></h2>
                                <div class="drink-menu__flex drink-menu__flex--whisky">
                                    <div class="drink-menu__category-wrap">
                                        <div class="drink-menu__category drink-category">
                                            <h3 class="drink-category__title font-en"><span>japanese whisky</span></h3>
                                            <div class="drink-category__lists">
                                                <dl class="drink-category__list">
                                                    <dt>arata特製ハイボール</dt>
                                                    <dd><span>600</span>yen</dd>
                                                </dl>
                                                <dl class="drink-category__list">
                                                    <dt>角瓶</dt>
                                                    <dd><span>550</span>yen</dd>
                                                </dl>
                                                <dl class="drink-category__list">
                                                    <dt>オールド</dt>
                                                    <dd><span>600</span>yen</dd>
                                                </dl>
                                                <dl class="drink-category__list">
                                                    <dt>リザーブ</dt>
                                                    <dd><span>650</span>yen</dd>
                                                </dl>
                                                <dl class="drink-category__list">
                                                    <dt>ローヤル</dt>
                                                    <dd><span>700</span>yen</dd>
                                                </dl>
                                                <dl class="drink-category__list">
                                                    <dt>知多</dt>
                                                    <dd><span>1,100</span>yen</dd>
                                                </dl>
                                                <dl class="drink-category__list">
                                                    <dt>山崎</dt>
                                                    <dd><span>1,400</span>yen</dd>
                                                </dl>
                                                <dl class="drink-category__list">
                                                    <dt>白州</dt>
                                                    <dd><span>1,400</span>yen</dd>
                                                </dl>
                                                <dl class="drink-category__list">
                                                    <dt>響</dt>
                                                    <dd><span>1,700</span>yen</dd>
                                                </dl>
                                            </div>
                                        </div>
                                        <div class="drink-menu__category drink-category drink-category--world">
                                            <h3 class="drink-category__title"><span>world whisky</span></h3>
                                            <div class="drink-category__lists">
                                                <dl class="drink-category__list">
                                                    <dt>ジムビーム</dt>
                                                    <dd><span>500</span>yen</dd>
                                                </dl>
                                                <dl class="drink-category__list">
                                                    <dt>バランタイン12年</dt>
                                                    <dd><span>700</span>yen</dd>
                                                </dl>
                                                <dl class="drink-category__list">
                                                    <dt>メーカーズマーク</dt>
                                                    <dd><span>800</span>yen</dd>
                                                </dl>
                                                <dl class="drink-category__list">
                                                    <dt>碧</dt>
                                                    <dd><span>1,100</span>yen</dd>
                                                </dl>
                                                <dl class="drink-category__list">
                                                    <dt>グレンフィデック12年</dt>
                                                    <dd><span>1,100</span>yen</dd>
                                                </dl>
                                                <dl class="drink-category__list">
                                                    <dt>ボウモア12年</dt>
                                                    <dd><span>1,400</span>yen</dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="drink-menu__img-wrap">
                                        <div class="drink-menu__img">
                                            <picture>
                                                <source srcset="<?php echo APP_ASSETS; ?>img/drink/img_drink01.jpg.webp" type="image/webp">
                                                <img src="<?php echo APP_ASSETS; ?>img/drink/img_drink01.jpg" alt="ハイボール">
                                            </picture>
                                        </div>
                                        <div class="drink-menu__img">
                                            <picture>
                                                <source srcset="<?php echo APP_ASSETS; ?>img/drink/img_drink02.jpg.webp" type="image/webp">
                                                <img src="<?php echo APP_ASSETS; ?>img/drink/img_drink02.jpg" alt="国産ウィスキー">
                                            </picture>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- wine -->
                            <div class="drink-menu__contents">
                                <h2 class="drink-menu__title"><span class="font-en">wine</span></h2>
                                <div class="drink-menu__flex drink-menu__flex--wine">
                                    <div class="drink-menu__category-wrap">
                                        <div class="drink-menu__category drink-category">
                                            <h3 class="drink-category__title font-en"><span>sparkling wine</span></h3>
                                            <div class="drink-category__lists">
                                                <dl class="drink-category__list">
                                                    <dt>デュック ド パリ ドミセック</dt>
                                                    <dd><span>3,800</span>yen</dd>
                                                </dl>
                                                <dl class="drink-category__list">
                                                    <dt>ミオネット VB エクストラ <br class="sp">ドライ 白</dt>
                                                    <dd><span>5,800</span>yen</dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="drink-menu__category-wrap">
                                        <div class="drink-menu__category drink-category">
                                            <h3 class="drink-category__title"><span>champagne</span></h3>
                                            <div class="drink-category__lists">
                                                <dl class="drink-category__list">
                                                    <dt>ローラン ペリエ ラ キュベ</dt>
                                                    <dd><span>14,000</span>yen</dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="drink-menu__flex">
                                    <div class="drink-menu__category-wrap">
                                        <div class="drink-menu__category drink-category">
                                            <h3 class="drink-category__title font-en"><span>white wine</span></h3>
                                            <div class="drink-category__lists">
                                                <dl class="drink-category__list">
                                                    <dt>甲州</dt>
                                                    <dd><span>4,800</span>yen</dd>
                                                </dl>
                                                <dl class="drink-category__list">
                                                    <dt>ブルゴーニュ レ コトー <br class="sp">デ モワンヌ ブラン</dt>
                                                    <dd><span>8,500</span>yen</dd>
                                                </dl>
                                                <dl class="drink-category__list">
                                                    <dt>シャブリ</dt>
                                                    <dd><span>12,000</span>yen</dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="drink-menu__category-wrap">
                                        <div class="drink-menu__category drink-category">
                                            <h3 class="drink-category__title"><span>red wine</span></h3>
                                            <div class="drink-category__lists">
                                                <dl class="drink-category__list">
                                                    <dt>マスカット・ベーリーA</dt>
                                                    <dd><span>4,900</span>yen</dd>
                                                </dl>
                                                <dl class="drink-category__list">
                                                    <dt>カーニヴォ ジンファンデル</dt>
                                                    <dd><span>5,300</span>yen</dd>
                                                </dl>
                                                <dl class="drink-category__list">
                                                    <dt>コロンビアヴァレー カベルネ <br class="sp">ソーヴィニヨン</dt>
                                                    <dd><span>7,900</span>yen</dd>
                                                </dl>
                                                <dl class="drink-category__list">
                                                    <dt>ドメーヌ ド レーグル ピノ <br class="sp">ノワール</dt>
                                                    <dd><span>12,000</span>yen</dd>
                                                </dl>
                                                <dl class="drink-category__list">
                                                    <dt>カロ</dt>
                                                    <dd><span>16,000</span>yen</dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="drink-menu__flex u-mt0">
                                    <div class="drink-menu__category-wrap">
                                        <div class="drink-menu__category drink-category">
                                            <h3 class="drink-category__title font-en"><span>glass wine</span></h3>
                                            <div class="drink-category__lists">
                                                <dl class="drink-category__list">
                                                    <dt>［白］ レッド ブリッジ <br class="sp">シャルドネ/ヴィオニエ
                                                    </dt>
                                                    <dd><span>700</span>yen</dd>
                                                </dl>
                                                <dl class="drink-category__list">
                                                    <dt>［赤］ レッド ブリッジ <br class="sp">シラーズ/ヴィオニエ</dt>
                                                    <dd><span>700</span>yen</dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- beer他 -->
                            <div class="drink-menu__contents">
                                <div class="drink-menu__flex">
                                    <div class="drink-menu__category-wrap">
                                        <h2 class="drink-menu__title"><span class="font-en">beer</span></h2>
                                        <div class="drink-category__lists">
                                            <dl class="drink-category__list">
                                                <dt>ザ・プレミアム・モルツ</dt>
                                                <dd><span>650</span>yen</dd>
                                            </dl>
                                            <dl class="drink-category__list">
                                                <dt>オールフリー<br class="sp"><span>(ノンアルコールビール)</span></dt>
                                                <dd><span>500</span>yen</dd>
                                            </dl>
                                        </div>
                                    </div>
                                    <div class="drink-menu__category-wrap u-1049">
                                        <h2 class="drink-menu__title"><span class="font-en">cocktail</span></h2>
                                        <div class="drink-category__lists">
                                            <dl class="drink-category__list">
                                                <dt>カシスオレンジ
                                                </dt>
                                                <dd><span>550</span>yen</dd>
                                            </dl>
                                            <dl class="drink-category__list">
                                                <dt>ライチオレンジ</dt>
                                                <dd><span>550</span>yen</dd>
                                            </dl>
                                            <dl class="drink-category__list">
                                                <dt>ピーチウーロン</dt>
                                                <dd><span>550</span>yen</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="drink-menu__contents">
                                <div class="drink-menu__flex">
                                    <div class="drink-menu__category-wrap">
                                        <h2 class="drink-menu__title"><span class="font-en">sour</span></h2>
                                        <div class="drink-category__lists">
                                            <dl class="drink-category__list">
                                                <dt>arata特製レモンサワー</dt>
                                                <dd><span>480</span>yen</dd>
                                            </dl>
                                            <dl class="drink-category__list">
                                                <dt>arata特製塩レモンサワー</dt>
                                                <dd><span>500</span>yen</dd>
                                            </dl>
                                            <dl class="drink-category__list">
                                                <dt>ウーロンハイ</dt>
                                                <dd><span>480</span>yen</dd>
                                            </dl>
                                        </div>
                                    </div>
                                    <div class="drink-menu__category-wrap u-1049">
                                        <h2 class="drink-menu__title"><span class="font-en">other</span></h2>
                                        <div class="drink-category__lists">
                                            <dl class="drink-category__list">
                                                <dt>ボクスンドガ(福順都家)<br class="sp">ソンマッコリ ［<span>グラス</span>］</dt>
                                                <dd><span>650</span>yen</dd>
                                            </dl>
                                            <dl class="drink-category__list">
                                                <dt>ボクスンドガ(福順都家)<br class="sp">ソンマッコリ ［<span>ボトル</span>］</dt>
                                                <dd><span>6,000</span>yen</dd>
                                            </dl>
                                            <dl class="drink-category__list">
                                                <dt>山崎蒸溜所貯蔵 梅酒</dt>
                                                <dd><span>500</span>yen</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- ---------------------------------------- -->
                <!-- drink-menu non-alcohol ---------------------------------- -->
                <div class="menu__wrapper u-bg-white">
                    <section class="drink__contents drink-menu drink-menu--non-alcohol">
                        <div class="drink-menu__inner">
                            <!-- non-alcoholic -->
                            <div class="drink-menu__contents">
                                <h2 class="drink-menu__title"><span class="font-en u-ws">non-alcoholic</span></h2>
                                <div class="drink-menu__flex drink-menu__flex--non-alcoholic">
                                    <div class="drink-menu__category-wrap">
                                        <div class="drink-menu__category drink-category">
                                            <div class="drink-category__lists">
                                                <dl class="drink-category__list">
                                                    <dt>オールフリー<br class="sp"><span>(ノンアルコールビール)</span></dt>
                                                    <dd><span>500</span>yen</dd>
                                                </dl>
                                                <dl class="drink-category__list">
                                                    <dt>ノンアル ハイボール</dt>
                                                    <dd><span>500</span>yen</dd>
                                                </dl>
                                                <dl class="drink-category__list">
                                                    <dt>ノンアル バージン<br class="sp">モヒートソーダ</dt>
                                                    <dd><span>600</span>yen</dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="drink-menu__category-wrap u-mt0">
                                        <div class="drink-menu__category drink-category">
                                            <div class="drink-category__lists">
                                                <dl class="drink-category__list">
                                                    <dt>ノンアル 徳島県産柚子ソーダ</dt>
                                                    <dd><span>600</span>yen</dd>
                                                </dl>
                                                <dl class="drink-category__list">
                                                    <dt>ノンアル ソイ抹茶ラテ</dt>
                                                    <dd><span>600</span>yen</dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- soft-drink -->
                            <div class="drink-menu__contents">
                                <h2 class="drink-menu__title"><span class="font-en">softdrink</span></h2>
                                <div class="drink-menu__flex">
                                    <div class="drink-menu__category-wrap">
                                        <div class="drink-menu__category drink-category">
                                            <div class="drink-category__lists">
                                                <dl class="drink-category__list">
                                                    <dt>ジンジャーエール</dt>
                                                    <dd><span>500</span>yen</dd>
                                                </dl>
                                                <dl class="drink-category__list">
                                                    <dt>チルソンサイダー</dt>
                                                    <dd><span>500</span>yen</dd>
                                                </dl>
                                                <dl class="drink-category__list">
                                                    <dt>コーラ</dt>
                                                    <dd><span>500</span>yen</dd>
                                                </dl>
                                                <dl class="drink-category__list">
                                                    <dt>オレンジジュース</dt>
                                                    <dd><span>500</span>yen</dd>
                                                </dl>
                                                <dl class="drink-category__list">
                                                    <dt>トニックウォーター</dt>
                                                    <dd><span>500</span>yen</dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="drink-menu__category-wrap u-mt0">
                                        <div class="drink-menu__category drink-category">
                                            <div class="drink-category__lists">
                                                <dl class="drink-category__list">
                                                    <dt>ウーロン茶</dt>
                                                    <dd><span>500</span>yen</dd>
                                                </dl>
                                                <dl class="drink-category__list">
                                                    <dt>黒ウーロン茶</dt>
                                                    <dd><span>550</span>yen</dd>
                                                </dl>
                                                <dl class="drink-category__list">
                                                    <dt>コーン茶</dt>
                                                    <dd><span>500</span>yen</dd>
                                                </dl>
                                                <dl class="drink-category__list">
                                                    <dt>ザ・プレミアムソーダ from YAMAZAKI<span>(炭酸水)</span></dt>
                                                    <dd><span>500</span>yen</dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
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

</body>

</html>