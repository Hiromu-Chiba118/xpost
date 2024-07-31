<?php
$thisPageName = 'concept';
$path = realpath(dirname(__FILE__) . '') . "/../";
include_once($path . 'app_config.php');
include($path . 'libs/head.php');
?>
<link href="<?php echo APP_ASSETS; ?>css/page/concept.min.css" rel="stylesheet">
</head>

<body id="concept" class="concept">
    <?php include($path . 'libs/header.php'); ?>

    <main>
        <!-- concept btn ---------------------------------- -->
        <div class="concept__container">
            <div class="concept__head concept-head js-fadeIns01" style="opacity: 0;">
                <div class="concept-head__inner">
                    <h1 class="concept-head__title c-page-title c-page-title--concept font-en">concept</h1>
                    <div class="concept-head__catch-wrap">
                        <p class="concept-head__catch concept-head__catch--en font-en"> what’s <br class="sp"><span>aburiya</span><br class="sp"> arata </p>
                        <p class="concept-head__catch concept-head__catch--ja">私たちのこだわりについて</p>
                    </div>

                    <div class="concept-head__btn-wrap concept-btn">
                        <ul class="concept-btn__lists">
                            <li class="concept-btn__list">
                                <a href="#feature" class="opacity">
                                    <span class="concept-btn__ja">私たちの<br class="sp">こだわり</span>
                                    <span class="concept-btn__en font-en">feature</span>
                                </a>
                            </li>
                            <li class="concept-btn__list">
                                <a href="#kuroge-wagyu" class="opacity">
                                    <span class="concept-btn__ja">厳選された<br class="sp">黒毛和牛</span>
                                    <span class="concept-btn__en font-en pc">kuroge wagyu</span>
                                    <span class="concept-btn__en font-en sp">kuroge<br class="sp">wagyu</span>
                                </a>
                            </li>
                            <li class="concept-btn__list">
                                <a href="#space" class="opacity">
                                    <span class="concept-btn__ja">非日常が<br class="sp">味わえる空間</span>
                                    <span class="concept-btn__en font-en">space</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- ---------------------------------------- -->
            <div class="concept__foot">
                <!-- about us feature ---------------------------------- -->
                <section id="feature" class="concept-btn__contents concept-content concept-content--feature">
                    <div class="concept-content__head">
                        <div class="concept-content__movie">
                            <video id="featureVideo" class="feature-video" data-src="<?php echo APP_ASSETS; ?>img/concept/movie_feature" preload="auto" autoplay muted loop playsinline></video>
                        </div>
                        <div class="concept-content__inner inner">
                            <div class="concept-content__contents js-fadeIns02">
                                <h2 class="concept-content__title font-en">feature</h2>
                                <h3 class="concept-content__lead">肉一筋で創業60年、<br class="sp">真摯に肉と向き合い続けてきた<br>ノウハウをもって作り上げた<br class="sp">焼肉の新業態</h3>
                                <p class="concept-content__text">
                                    お客様にとっての価値を追い求め、<br class="pc">仕入れから商品開発、調理や接客に至るまで、あらゆるノウハウを注ぎ込みました。<br>その結果たどり着いたのは、<br class="pc">今までになかった「少量20皿で仕立てた焼肉コース」。<br>本当においしい肉だけを厳選し、最もおいしい状態で召し上がっていただける<br class="pc">コース構成や調理、提供方法にこだわりました。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="concept-content__foot">
                        <div class="concept-content__inner inner">
                            <div class="concept-content__image concept-content-image">
                                <ul class="concept-content-image__items">
                                    <li class="concept-content-image__item js-parallax01">
                                        <div class="js-expansion">
                                            <picture>
                                                <source srcset="<?php echo APP_ASSETS; ?>img/concept/img_feature01.jpg.webp" type="image/webp">
                                                <img src="<?php echo APP_ASSETS; ?>img/concept/img_feature01.jpg" alt="キムチ">
                                            </picture>
                                        </div>
                                    </li>
                                    <li class="concept-content-image__item js-parallax02">
                                        <div class="js-expansion">
                                            <picture>
                                                <source srcset="<?php echo APP_ASSETS; ?>img/concept/img_feature02.jpg.webp" type="image/webp">
                                                <img src="<?php echo APP_ASSETS; ?>img/concept/img_feature02.jpg" alt="数々のメニューが並べられているテーブル">
                                            </picture>
                                        </div>
                                    </li>
                                    <li class="concept-content-image__item js-parallax03">
                                        <div class="js-expansion">
                                            <picture>
                                                <source srcset="<?php echo APP_ASSETS; ?>img/concept/img_feature03.jpg.webp" type="image/webp">
                                                <img src="<?php echo APP_ASSETS; ?>img/concept/img_feature03.jpg" alt="牛タン三種盛り">
                                            </picture>
                                        </div>
                                    </li>
                                </ul>
                                <h2 class="concept-content-image__title section-title section-title--white font-en">about us</h2>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- ---------------------------------------- -->

                <!-- kuroge wagyu ---------------------------------- -->
                <section id="kuroge-wagyu" class="concept-btn__contents concept-content concept-content--kuroge">
                    <div class="concept-content__head">
                        <div class="concept-content__movie">
                            <video id="kurogeVideo" class="kuroge-video" data-src="<?php echo APP_ASSETS; ?>img/concept/movie_kuroge" preload="auto" autoplay muted loop playsinline></video>
                        </div>
                        <div class="concept-content__inner inner">
                            <div class="concept-content__contents js-fadeIns02">
                                <h2 class="concept-content__title font-en">kuroge wagyu</h2>
                                <h3 class="concept-content__lead">プロの目利きにより厳選された<br class="sp">九州産黒毛和牛の<br>特撰部位をご提供します</h3>
                                <p class="concept-content__text">
                                    ABURIYA arataでは、九州産黒毛和牛の特撰部位をご提供します。<br>
                                    太陽と自然に恵まれた九州は、澄んだ空気、清らかな水、肥沃な大地が育んだ牧草が<br class="pc">
                                    高品質な牛を育てる畜産王国。<br>
                                    長年ワン・ダイニングが信頼関係を築いてきたプロの目利きが、<br class="pc">
                                    九州の農場に赴いて直に厳選した黒毛和牛を使用しました。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="concept-content__foot">
                        <div class="concept-content__inner inner">
                            <div class="concept-content__image concept-content-image">
                                <ul class="concept-content-image__items">
                                    <li class="concept-content-image__item js-parallax01">
                                        <div class="js-expansion">
                                            <picture>
                                                <source srcset="<?php echo APP_ASSETS; ?>img/concept/img_kuroge-wagyu01.jpg.webp" type="image/webp">
                                                <img src="<?php echo APP_ASSETS; ?>img/concept/img_kuroge-wagyu01.jpg" alt="黒毛和牛をカットしているシーン">
                                            </picture>
                                        </div>
                                    </li>
                                    <li class="concept-content-image__item js-parallax02">
                                        <div class="js-expansion">
                                            <picture>
                                                <source srcset="<?php echo APP_ASSETS; ?>img/concept/img_kuroge-wagyu02.jpg.webp" type="image/webp">
                                                <img src="<?php echo APP_ASSETS; ?>img/concept/img_kuroge-wagyu02.jpg" alt="黒毛和牛のメニューを並べたもの">
                                            </picture>
                                        </div>
                                    </li>
                                    <li class="concept-content-image__item js-parallax03">
                                        <div class="js-expansion">
                                            <picture>
                                                <source srcset="<?php echo APP_ASSETS; ?>img/concept/img_kuroge-wagyu03.jpg.webp" type="image/webp">
                                                <img src="<?php echo APP_ASSETS; ?>img/concept/img_kuroge-wagyu03.jpg" alt="黒毛和牛の肉原体">
                                            </picture>
                                        </div>
                                    </li>
                                </ul>
                                <h2 class="concept-content-image__title section-title section-title--white font-en">kuroge wagyu</h2>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- ---------------------------------------- -->

                <!-- space ---------------------------------- -->
                <section id="space" class="concept-btn__contents concept-content concept-content--space">
                    <div class="concept-content__head">
                        <div class="concept-content__bg">
                            <video data-src="<?php echo APP_ASSETS; ?>img/concept/movie_space" preload="auto" autoplay muted loop playsinline></video>
                            <!-- <picture>
                                <source srcset="<?php echo APP_ASSETS; ?>img/concept/img_space-sp.jpg.webp" type="image/webp" media="(max-width:767px)">
                                <source srcset="<?php echo APP_ASSETS; ?>img/concept/img_space-sp.jpg" media="(max-width:767px)">
                                <source srcset="<?php echo APP_ASSETS; ?>img/concept/img_space.jpg.webp" type="image/webp">
                                <img src="<?php echo APP_ASSETS; ?>img/concept/img_space.jpg" alt="カウンタースペース">
                            </picture> -->
                        </div>
                        <div class="concept-content__inner inner">
                            <div class="concept-content__contents js-fadeIns02">
                                <h2 class="concept-content__title font-en">space</h2>
                                <h3 class="concept-content__lead">洗練された空間で、<br class="sp">"非日常"を味わいながら<br>大切な人たちと、<br class="sp">思い出に残る時間を</h3>
                                <p class="concept-content__text">
                                    和の空間に漂う、ハングル文字のアールデコ。<br>
                                    シンプルな素材で構成された空間に、モダンな装飾が目を引きます。<br>
                                    お客様の人数や目的、さまざまなシーンに合わせてご利用いただけるよう、<br class="pc">
                                    カウンターやテーブル、個室など全47席をご用意。<br>
                                    カウンターには、おひとり様に1台のロースターを設けました。<br>
                                    友人のおもてなしに、記念日のお祝いに。<br>
                                    大切な相手と、特別な時間をお過ごしください。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="concept-content__foot">
                        <div class="concept-content__inner inner">
                            <div class="concept-content__image concept-content-image">
                                <ul class="concept-content-image__items">
                                    <li class="concept-content-image__item js-parallax01">
                                        <div class="js-expansion">
                                            <picture>
                                                <source srcset="<?php echo APP_ASSETS; ?>img/concept/img_space02.jpg.webp" type="image/webp">
                                                <img src="<?php echo APP_ASSETS; ?>img/concept/img_space02.jpg" alt="店内個室">
                                            </picture>
                                        </div>
                                    </li>
                                    <li class="concept-content-image__item js-parallax02">
                                        <div class="js-expansion">
                                            <picture>
                                                <source srcset="<?php echo APP_ASSETS; ?>img/concept/img_space03.jpg.webp" type="image/webp">
                                                <img src="<?php echo APP_ASSETS; ?>img/concept/img_space03.jpg" alt="店内カウンタースペース">
                                            </picture>
                                        </div>
                                    </li>
                                    <li class="concept-content-image__item js-parallax03">
                                        <div class="js-expansion">
                                            <picture>
                                                <source srcset="<?php echo APP_ASSETS; ?>img/concept/img_space04.jpg.webp" type="image/webp">
                                                <img src="<?php echo APP_ASSETS; ?>img/concept/img_space04.jpg" alt="店内カウンタースペースに活けられた花">
                                            </picture>
                                        </div>
                                    </li>
                                </ul>
                                <h2 class="concept-content-image__title section-title section-title--white font-en">space</h2>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- ---------------------------------------- -->
            </div>
        </div>
    </main>

    <?php include($path . 'libs/footer.php'); ?>
    <script src="<?php echo APP_ASSETS; ?>js/concept.min.js"></script>

</body>

</html>