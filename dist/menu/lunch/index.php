<?php
$thisPageName = 'lunch';
$path = realpath(dirname(__FILE__) . '') . "/../../";
include_once($path . 'app_config.php');
include($path . 'libs/head.php');
?>
<link href="<?php echo APP_ASSETS; ?>css/page/menu.min.css" rel="stylesheet">
<link href="<?php echo APP_ASSETS; ?>css/page/lunch.min.css" rel="stylesheet">
</head>

<body id="lunch" class="lunch">
    <?php include($path . 'libs/header.php'); ?>

    <main>
        <!-- menu btn ---------------------------------- -->
        <div class="lunch__container">
            <div class="lunch__head menu js-fadeIns01" style="opacity: 0;">
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
                                <a href="#lunch-course">
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

            <div id="lunch-course" class="menu__foot">
                <!-- lunch-summary  ---------------------------------- -->
                <section class="lunch__contents lunch-summary menu-summary">
                    <div class="menu-summary__inner">
                        <div class="menu-summary__head">
                            <div class="menu-summary__contents js-fadeIns02" style="opacity: 0;">
                                <h2 class="menu-summary__title font-en">lunch course</h2>
                                <div class="menu-summary__img js-parallax01">
                                    <picture>
                                        <source srcset="<?php echo APP_ASSETS; ?>img/lunch/img_mv.jpg.webp" type="image/webp">
                                        <img src="<?php echo APP_ASSETS; ?>img/lunch/img_mv.jpg" alt="ランチコース">
                                    </picture>
                                </div>
                                <div class="menu-summary__meta course-meta">
                                    <div class="course-meta__inner course-meta__inner--black">
                                        <h3 class="course-meta__title"><span>arata</span><span><br class="sp">ランチコース</span></h3>
                                        <p class="course-meta__price">全10皿 / おひとり様<span><strong>3,500</strong>yen</span><span>［tax in］</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-summary__foot">
                            <h4 class="menu-summary__lead">スペシャルコースよりも<br class="sp">リーズナブルに、<br class="860">厳選した10皿をご提供</h4>
                            <p class="menu-summary__message">
                                ランチタイム限定で、スペシャルコースよりもリーズナブルに、<br class="pc">
                                ABURIYA arataをお愉しみいただける厳選した10皿のコースをご用意。<br>
                                さらにランチコースでしか出会えない「特製黒毛和牛カレー」も。<br>
                                和牛をふんだんに入れじっくり煮込んだ、和牛のうまみあふれる逸品です。
                            </p>
                        </div>
                    </div>
                </section>
                <!-- ---------------------------------------- -->

                <!-- lunch-menu ---------------------------------------- -->
                <div class="menu__wrapper menu__wrapper--lunch u-bg-white">
                    <section class="lunch__contents lunch-menu">
                        <div class="lunch-menu__inner">
                            <h2 class="lunch-menu__title">7-9月のお品書き</h2>
                            <div class="lunch-menu__flex">
                                <div class="lunch-menu__lists">
                                    <dl class="lunch-menu__list">
                                        <dt>前菜</dt>
                                        <dd>白いんげん豆の冷製スープ</dd>
                                    </dl>
                                    <dl class="lunch-menu__list">
                                        <dt>刺身</dt>
                                        <dd>黒毛和牛ユッケ <br class="sp"><span>京都産たまご「濃紅」添え</span></dd>
                                    </dl>
                                    <dl class="lunch-menu__list">
                                        <dt>牛タン</dt>
                                        <dd>上塩タン/タンカルビ</dd>
                                    </dl>
                                    <dl class="lunch-menu__list">
                                        <dt>サラダ</dt>
                                        <dd>おくらとみょうがのサラダ</dd>
                                    </dl>
                                    <dl class="lunch-menu__list">
                                        <dt>タレ焼き</dt>
                                        <dd>本日の黒毛和牛/ハラミ/黒毛和牛焼きすき</dd>
                                    </dl>
                                    <dl class="lunch-menu__list">
                                        <dt>飯</dt>
                                        <dd>特製黒毛和牛カレー</dd>
                                    </dl>
                                    <dl class="lunch-menu__list">
                                        <dt>甘味</dt>
                                        <dd>柚子シャーベット</dd>
                                    </dl>
                                    <p class="lunch-menu__note">※コース内容は一部変更になる場合がございます。ご了承ください</p>
                                </div>
                                <div class="lunch-menu__img">
                                    <picture>
                                        <source srcset="<?php echo APP_ASSETS; ?>img/lunch/img_lunch.jpg.webp" type="image/webp">
                                        <img src="<?php echo APP_ASSETS; ?>img/lunch/img_lunch.jpg" alt="ランチコース">
                                    </picture>
                                </div>
                            </div>
                            <div class="lunch-menu__link lunch-link">
                                <p class="lunch-link__link-text">ランチタイムでも<br class="sp">arata スペシャルコースを<br class="sp">ご注文いただけます</p>
                                <a href="<?php echo APP_URL; ?>menu/special#special-course" class="lunch-link__btn"><span>詳細はこちら</span></a>
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