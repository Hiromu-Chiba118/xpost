<?php
$thisPageName = 'top';
$path = realpath(dirname(__FILE__) . '') . "/";
include_once($path . 'app_config.php');
include($path . 'libs/head.php');
?>
<link href="<?php echo APP_ASSETS; ?>css/page/top.min.css" rel="stylesheet">
</head>

<body id="top" class="top">
    <?php include($path . 'libs/header.php'); ?>

    <main>
        <!-- loading ---------------------------------- -->
        <div class="loader">
            <div class="loader__content">
                <div class="loader__logo">
                    <img src="<?php echo APP_ASSETS; ?>img/common/logo-black.svg" alt="黒毛和牛焼肉 ABURIYA arata">
                </div>
            </div>
        </div>
        <!-- ---------------------------------------- -->


        <!-- fv ---------------------------------- -->
        <article class="fv">
            <div class="fv__movie">
                <video id="fv__video" preload="auto" muted loop playsinline
                    data-src="<?php echo APP_ASSETS; ?>img/top/fv"></video>
            </div>
            <section class="fv__content">
                <h1 class="fv__title">
                    <img src="<?php echo APP_ASSETS; ?>img/common/logo.svg" alt="黒毛和牛焼肉 ABURIYA arata">
                </h1>
            </section>
        </article>
        <!-- ---------------------------------------- -->

        <!-- concept ---------------------------------- -->
        <div class="concept">
            <!-- グレー -->
            <div class="back back-gray">
                <span class="back__part"></span>
                <span class="back__part"></span>
                <span class="back__part"></span>
                <span class="back__part"></span>
                <span class="back__part"></span>
                <span class="back__part"></span>
                <span class="back__part"></span>
            </div>
            <div class="concept__covers">
                <div class="concept__cover"></div>
                <div class="concept__bg">
                    <picture>
                        <source srcset="<?php echo APP_ASSETS; ?>img/top/concept-bg-sp.jpg.webp" type="image/webp"
                            media="(max-width:767px)">
                        <source srcset="<?php echo APP_ASSETS; ?>img/top/concept-bg-sp.jpg" media="(max-width:767px)">
                        <source srcset="<?php echo APP_ASSETS; ?>img/top/concept-bg.jpg.webp" type="image/webp">
                        <img src="<?php echo APP_ASSETS; ?>img/top/concept-bg.jpg" alt="様々な料理を上から見たイメージ">
                    </picture>
                </div>
            </div>

            <div class="concept__items">



                <!-- concept-item ---------------------------------- -->
                <article class="concept__item">

                    <section class="concept__inner inner">
                        <div class="concept__container">
                            <h2 class="concept__title section-title">concept</h2>
                            <div class="concept__wrap">
                                <!-- <h3 class="concept__subtitle">「少量多品目」のお料理を愉しむ<br>黒毛和牛焼肉コース</h3> -->
                                <h3 class="concept__subtitle">
                                    「少量<span>2</span><span>0</span>皿の黒毛和牛焼肉コース」<br>大切な人と過ごす、特別な時間。</h3>
                            </div>

                            <div class="concept__texts">
                                <p class="concept__text">
                                    厳選した黒毛和牛や旬の食材を、<br class="pc">
                                    一番おいしい食べ方で 、納得の価格で味わっていただきたい。<br>
                                    <br class="pc">
                                    そんな想いを胸に<br class="pc">
                                    ABURIYA arataが作り上げたのは、<br class="pc">
                                    肉一筋・創業60年のノウハウを注ぎ込んだ<br class="pc">
                                    焼肉をメインとする少量20皿のコース。<br>
                                    <br class="pc">
                                    こだわりぬいた季節の食材をふんだんに用い、<br class="pc">
                                    厳選された黒毛和牛の魅力を最大限に引き出して<br class="pc">
                                    納得感の高いコースに仕上げました。<br>
                                    <br class="pc">
                                    店内に足を踏み入れると、テーブル席に個室、<br class="pc">
                                    おひとり様に1台のロースターを備えたカウンター。<br>
                                    シーンに合わせてご利用いただくことができます。<br>
                                    <br class="pc">
                                    洗練された空間で、非日常を味わいながら<br>
                                    大切な人たちと、思い出に残る時間をお過ごしください。
                                </p>
                            </div>

                        </div>
                    </section>
                </article>
                <!-- ---------------------------------------- -->

                <!-- concept-imgs ---------------------------------- -->
                <div class="concept__gallery concept-gallery">
                    <div class="concept-gallery__inner">
                        <div class="concept-gallery__imgs concept-gallery__imgs1">
                            <div class="concept-gallery__img concept-gallery__img1-1 js-parallax">
                                <picture>
                                    <source srcset="<?php echo APP_ASSETS; ?>img/top/concept1.jpg.webp"
                                        type="image/webp">
                                    <img src="<?php echo APP_ASSETS; ?>img/top/concept1.jpg" alt="ローストビーフ">
                                </picture>
                            </div>
                            <div class="concept-gallery__img concept-gallery__img1-2 js-parallax2">
                                <video autoplay muted loop playsinline
                                    src="<?php echo APP_ASSETS; ?>img/top/concept2.mp4?240718"></video>
                                <!-- <picture>
                                    <source srcset="<?php echo APP_ASSETS; ?>img/top/concept2.jpg.webp" type="image/webp">
                                    <img src="<?php echo APP_ASSETS; ?>img/top/concept2.jpg" alt="釜飯">
                                </picture> -->
                            </div>
                        </div>
                        <div class="concept-gallery__imgs concept-gallery__imgs2">
                            <div class="concept-gallery__img concept-gallery__img2-1 js-parallax3">
                                <picture>
                                    <source srcset="<?php echo APP_ASSETS; ?>img/top/concept3.jpg.webp"
                                        type="image/webp">
                                    <img src="<?php echo APP_ASSETS; ?>img/top/concept3.jpg" alt="盛り付けのイメージ">
                                </picture>
                            </div>
                            <div class="concept-gallery__img concept-gallery__img2-2 js-parallax">
                                <picture>
                                    <source srcset="<?php echo APP_ASSETS; ?>img/top/concept4.jpg.webp"
                                        type="image/webp">
                                    <img src="<?php echo APP_ASSETS; ?>img/top/concept4.jpg" alt="黒毛和牛の写真">
                                </picture>
                            </div>
                        </div>
                        <div class="concept-gallery__imgs concept-gallery__imgs3">
                            <div class="concept-gallery__img concept-gallery__img3-1 js-parallax2">
                                <video playsinline autoplay muted loop
                                    src="<?php echo APP_ASSETS; ?>img/top/concept5.mp4?240718"></video>
                                <!-- <picture>
                                    <source srcset="<?php echo APP_ASSETS; ?>img/top/concept5.jpg.webp" type="image/webp">
                                    <img src="<?php echo APP_ASSETS; ?>img/top/concept5.jpg" alt="お店のイメージ">
                                </picture> -->
                            </div>
                            <div class="concept-gallery__img concept-gallery__img3-2 js-parallax3">
                                <picture>
                                    <source srcset="<?php echo APP_ASSETS; ?>img/top/concept6-sp.jpg.webp"
                                        type="image/webp" media="(max-width:767px)">
                                    <source srcset="<?php echo APP_ASSETS; ?>img/top/concept6-sp.jpg"
                                        media="(max-width:767px)">
                                    <source srcset="<?php echo APP_ASSETS; ?>img/top/concept6.jpg.webp"
                                        type="image/webp">
                                    <img src="<?php echo APP_ASSETS; ?>img/top/concept6.jpg" alt="様々なウイスキー">
                                </picture>
                            </div>
                        </div>
                        <p class="concept-gallery__text">
                            WE OFFER A COURSE MEAL<br>CONSIST OF “KUROGE<br>
                            WAGYU” YAKINIKU.<br>
                            PLEASE ENJOY A WIDE VARIETY<br>
                            OF SMALL DISHES<br>IN A SOPHISTICATED SPACE.
                        </p>
                    </div>

                </div>
                <!-- ---------------------------------------- -->
            </div>
        </div>
        <!-- ---------------------------------------- -->

        <!-- about ---------------------------------- -->
        <article class="about">
            <!-- グレー2 -->
            <div class="back back-gray2">
                <span class="back__part"></span>
                <span class="back__part"></span>
                <span class="back__part"></span>
                <span class="back__part"></span>
                <span class="back__part"></span>
                <span class="back__part"></span>
                <span class="back__part"></span>
            </div>

            <div class="about__wrap">
                <!-- about-item ---------------------------------- -->
                <div class="about__item">
                    <div class="about__inner inner">
                        <div class="about__container">
                            <div class="about__content">
                                <h2 class="about__title section-title">ABOUT US</h2>
                                <h3 class="about__subtitle">
                                    <span class="top en">what’s</span>
                                    <span class="middle en">ABURIYA <br class="sp">arata</span>
                                    <span class="jp">私たちのこだわりについて</span>
                                </h3>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- ---------------------------------------- -->

                <!-- about-point ---------------------------------- -->
                <div class="about__point about-point">
                    <div class="about-point__inner">
                        <div class="about-point__container">
                            <div class="about-point__head section-title sp">ABOUT US</div>
                            <div class="about-point__items">
                                <a href="<?php echo APP_URL; ?>concept/#feature" class="about-point__item ">
                                    <div class="about-point__imgs">
                                        <div class="about-point__img js-image">
                                            <picture>
                                                <source srcset="<?php echo APP_ASSETS; ?>img/top/about1-sp.jpg.webp"
                                                    type="image/webp" media="(max-width:767px)">
                                                <source srcset="<?php echo APP_ASSETS; ?>img/top/about1-sp.jpg"
                                                    media="(max-width:767px)">
                                                <source srcset="<?php echo APP_ASSETS; ?>img/top/about1.jpg.webp"
                                                    type="image/webp">
                                                <img src="<?php echo APP_ASSETS; ?>img/top/about1.jpg"
                                                    alt="料理を上から見たイメージ">
                                            </picture>
                                        </div>
                                        <h3 class="about-point__title js-fade">私たちの<br class="sp">こだわり</h3>
                                    </div>
                                    <h4 class="about-point__subtitle js-fade">FEATURE</h4>
                                </a>
                                <a href="<?php echo APP_URL; ?>concept/#kuroge-wagyu" class="about-point__item">
                                    <div class="about-point__imgs">
                                        <div class="about-point__img js-image">
                                            <picture>
                                                <source srcset="<?php echo APP_ASSETS; ?>img/top/about2-sp.jpg.webp"
                                                    type="image/webp" media="(max-width:767px)">
                                                <source srcset="<?php echo APP_ASSETS; ?>img/top/about2-sp.jpg"
                                                    media="(max-width:767px)">
                                                <source srcset="<?php echo APP_ASSETS; ?>img/top/about2.jpg.webp"
                                                    type="image/webp">
                                                <img src="<?php echo APP_ASSETS; ?>img/top/about2.jpg"
                                                    alt="黒毛和牛ブロックの写真">
                                            </picture>
                                        </div>
                                        <h3 class="about-point__title js-fade">厳選された<br class="sp">黒毛和牛</h3>
                                    </div>
                                    <h4 class="about-point__subtitle js-fade">KUROGE WAGYU</h4>
                                </a>
                                <a href="<?php echo APP_URL; ?>concept/#space" class="about-point__item ">
                                    <div class="about-point__imgs">
                                        <div class="about-point__img js-image">
                                            <picture>
                                                <source srcset="<?php echo APP_ASSETS; ?>img/top/about3-sp.jpg.webp"
                                                    type="image/webp" media="(max-width:767px)">
                                                <source srcset="<?php echo APP_ASSETS; ?>img/top/about3-sp.jpg"
                                                    media="(max-width:767px)">
                                                <source srcset="<?php echo APP_ASSETS; ?>img/top/about3.jpg.webp"
                                                    type="image/webp">
                                                <img src="<?php echo APP_ASSETS; ?>img/top/about3.jpg"
                                                    alt="カウンター席のイメージ">
                                            </picture>
                                        </div>
                                        <h3 class="about-point__title js-fade">非日常が<br class="sp">味わえる空間</h3>
                                    </div>
                                    <h4 class="about-point__subtitle js-fade">SPACE</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ---------------------------------------- -->
            </div>
        </article>
        <!-- ---------------------------------------- -->

        <!-- course ---------------------------------- -->
        <article class="course">
            <section class="course__inner inner">
                <div class="course__container">
                    <div class="course__left">
                        <h2 class="course__title section-title">MENU</h2>
                        <div class="course__info">
                            <h3 class="course__menu">
                                arata <br class="sp">スペシャルコース
                            </h3>
                            <p class="course__price">
                                <span class="number">7,500</span>
                                <span class="yen">yen</span>
                                <span class="tax">［tax in］</span>
                            </p>
                            <a href="<?php echo APP_URL; ?>menu/special/" class="course__more more">View more</a>
                        </div>
                    </div>
                    <div class="course__right">
                        <div class="course__img">
                            <picture>
                                <source srcset="<?php echo APP_ASSETS; ?>img/top/course1-sp.jpg.webp" type="image/webp"
                                    media="(max-width:767px)">
                                <source srcset="<?php echo APP_ASSETS; ?>img/top/course1-sp.jpg"
                                    media="(max-width:767px)">
                                <source srcset="<?php echo APP_ASSETS; ?>img/top/course1.jpg.webp" type="image/webp">
                                <img src="<?php echo APP_ASSETS; ?>img/top/course1.jpg" alt="コースの写真">
                            </picture>
                        </div>
                    </div>
                </div>
            </section>
        </article>
        <!-- ---------------------------------------- -->

        <!-- news ---------------------------------- -->
        <article class="news">
            <!-- グレー2 -->
            <div class="back back-gray2--news">
                <span class="back__part"></span>
                <span class="back__part"></span>
                <span class="back__part"></span>
                <span class="back__part"></span>
                <span class="back__part"></span>
                <span class="back__part"></span>
                <span class="back__part"></span>
            </div>
            <section class="news__inner inner">
                <div class="news__container">
                    <h2 class="news__title section-title">news</h2>
                    <div class="news__items">
                        <a href="<?php echo APP_URL; ?>news/detail.php" class="news__item">
                            <div class="news__top">
                                <div class="news__category">お知らせ</div>
                                <div class="news__date">2024.07.31</div>
                            </div>
                            <h3 class="news__item-title">ランチコースメニューのご紹介</h3>
                        </a>
                        <a href="<?php echo APP_URL; ?>news/detail.php" class="news__item">
                            <div class="news__top">
                                <div class="news__category">新メニュー導入</div>
                                <div class="news__date">2024.07.31</div>
                            </div>
                            <h3 class="news__item-title">2024年夏のグランドメニュー導入のお知らせ</h3>
                        </a>
                        <a href="<?php echo APP_URL; ?>news/detail.php" class="news__item">
                            <div class="news__top">
                                <div class="news__category">お知らせ</div>
                                <div class="news__date">2024.07.31</div>
                            </div>
                            <h3 class="news__item-title">オフィシャルブランドサイトを公開いたしました</h3>
                        </a>
                    </div>
                    <a href="<?php echo APP_URL; ?>news/" class="news__more more">View more</a>
                </div>
            </section>
        </article>
        <!-- ---------------------------------------- -->

        <!-- shop ---------------------------------- -->
        <article class="shop">
            <div class="shop__imgs">
                <div class="shop__img shop__img01">
                    <picture>
                        <source srcset="<?php echo APP_ASSETS; ?>img/top/shop1-sp.jpg.webp" type="image/webp"
                            media="(max-width:767px)">
                        <source srcset="<?php echo APP_ASSETS; ?>img/top/shop1-sp.jpg" media="(max-width:767px)">
                        <source srcset="<?php echo APP_ASSETS; ?>img/top/shop1.jpg.webp" type="image/webp">
                        <img src="<?php echo APP_ASSETS; ?>img/top/shop1.jpg" alt="カウンター席のイメージ">
                    </picture>
                </div>
                <div class="shop__img shop__img02">
                    <picture>
                        <source srcset="<?php echo APP_ASSETS; ?>img/top/shop2-sp.jpg.webp" type="image/webp"
                            media="(max-width:767px)">
                        <source srcset="<?php echo APP_ASSETS; ?>img/top/shop2-sp.jpg" media="(max-width:767px)">
                        <source srcset="<?php echo APP_ASSETS; ?>img/top/shop2.jpg.webp" type="image/webp">
                        <img src="<?php echo APP_ASSETS; ?>img/top/shop2.jpg" alt="テーブル席のイメージ">
                    </picture>
                </div>
                <div class="shop__img shop__img03">
                    <picture>
                        <source srcset="<?php echo APP_ASSETS; ?>img/top/shop3-sp.jpg.webp" type="image/webp"
                            media="(max-width:767px)">
                        <source srcset="<?php echo APP_ASSETS; ?>img/top/shop3-sp.jpg" media="(max-width:767px)">
                        <source srcset="<?php echo APP_ASSETS; ?>img/top/shop3.jpg.webp" type="image/webp">
                        <img src="<?php echo APP_ASSETS; ?>img/top/shop3.jpg" alt="個室のイメージ">
                    </picture>
                </div>
                <div class="shop__img shop__img04">
                    <picture>
                        <source srcset="<?php echo APP_ASSETS; ?>img/top/shop4-sp.jpg.webp" type="image/webp"
                            media="(max-width:767px)">
                        <source srcset="<?php echo APP_ASSETS; ?>img/top/shop4-sp.jpg" media="(max-width:767px)">
                        <source srcset="<?php echo APP_ASSETS; ?>img/top/shop4.jpg.webp" type="image/webp">
                        <img src="<?php echo APP_ASSETS; ?>img/top/shop4.jpg" alt="個室のイメージ">
                    </picture>
                </div>
            </div>

            <section class="shop__inner inner">
                <div class="shop__container">
                    <div class="shop__left">
                        <h2 class="shop__title section-title"><a class="opacity"
                                href="<?php echo APP_URL; ?>information/">SHOP INFORMATION</a></h2>
                    </div>
                    <div class="shop__right">
                        <div class="shop__wrap">
                            <div class="shop__texts01">
                                <div class="shop__logo">
                                    <img src="<?php echo APP_ASSETS; ?>img/common/logo-beside.svg"
                                        alt="黒毛和牛焼肉 ABURIYA arata">
                                </div>
                                <p class="shop__address">
                                    〒５３０-０００１<br>大阪市北区梅田３丁目２番２号 <br class="sp">ＫＩＴＴＥ大阪 ４Ｆ
                                </p>
                                <p class="shop__tel"><span class="en">TEL.</span><a
                                        href="tel:06-6676-8799">06-6676-8799</a></p>
                                <p class="shop__time">
                                    <span class="en">LUNCH TIME</span>
                                    <span class="time">11:00-16:00</span>
                                    <span class="jp">最終入店</span>
                                    <span class="time">14:00</span>
                                </p>
                                <p class="shop__time">
                                    <span class="en">DINNER TIME</span>
                                    <span class="time">17:00-23:00</span>
                                    <span class="jp">最終入店</span>
                                    <span class="time">21:00</span>
                                </p>
                                <a href="<?php echo APP_URL; ?>information/" class="shop__more more">View more</a>
                            </div>
                            <div class="shop__texts02">
                                <div class="shop__read">全47席</div>
                                <p class="shop__chair">カウンター 9席／テーブル 32席／<br class="sp">個室6席</p>
                                <p class="shop__text">
                                    おひとり様1台のロースターが設置されたカウンター席のほか<br>
                                    テーブル席や個室もご用意しておりますので<br>
                                    シーンに合わせてご利用いただけます
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </article>

        <!-- ---------------------------------------- -->

        <!-- gallery ---------------------------------- -->
        <article class="gallery">
            <div class="back back-black">
                <span class="back__part"></span>
                <span class="back__part"></span>
                <span class="back__part"></span>
                <span class="back__part"></span>
                <span class="back__part"></span>
                <span class="back__part"></span>
                <span class="back__part"></span>
            </div>
            <section class="gallery__inner inner">
                <div class="gallery__container">
                    <h2 class="gallery__title">gallery</h2>
                    <a class="gallery__imgs" href="<?php echo APP_URL; ?>gallery/">
                        <div class="gallery__imgs-left">
                            <div class="gallery__img">
                                <picture>
                                    <source srcset="<?php echo APP_ASSETS; ?>img/top/gallery1.jpg.webp"
                                        type="image/webp">
                                    <img src="<?php echo APP_ASSETS; ?>img/top/gallery1.jpg" alt="コース料理の写真">
                                </picture>
                            </div>
                            <div class="gallery__img">
                                <picture>
                                    <source srcset="<?php echo APP_ASSETS; ?>img/top/gallery2.jpg.webp"
                                        type="image/webp">
                                    <img src="<?php echo APP_ASSETS; ?>img/top/gallery2.jpg" alt="オクラと茗荷のサラダ">
                                </picture>
                            </div>
                            <div class="gallery__img">
                                <video playsinline autoplay muted loop
                                    src="<?php echo APP_ASSETS; ?>img/top/gallery5.mp4?240718"></video>
                                <!-- <picture>
                  <source srcset="<?php echo APP_ASSETS; ?>img/top/gallery5.jpg.webp" type="image/webp">
                  <img src="<?php echo APP_ASSETS; ?>img/top/gallery5.jpg" alt="お店のイメージ">
                </picture> -->
                            </div>
                            <div class="gallery__img">
                                <picture>
                                    <source srcset="<?php echo APP_ASSETS; ?>img/top/gallery6.jpg.webp"
                                        type="image/webp">
                                    <img src="<?php echo APP_ASSETS; ?>img/top/gallery6.jpg" alt="お肉を焼いている写真">
                                </picture>
                            </div>
                        </div>
                        <div class="gallery__imgs-right">
                            <div class="gallery__img">
                                <video playsinline autoplay muted loop
                                    src="<?php echo APP_ASSETS; ?>img/top/gallery3.mp4?240718"></video>
                                <!-- <picture>
                  <source srcset="<?php echo APP_ASSETS; ?>img/top/gallery3.jpg.webp" type="image/webp">
                  <img src="<?php echo APP_ASSETS; ?>img/top/gallery3.jpg" alt="料理を提供するイメージ">
                </picture> -->
                            </div>
                            <div class="gallery__img">
                                <picture>
                                    <source srcset="<?php echo APP_ASSETS; ?>img/top/gallery4.jpg.webp"
                                        type="image/webp">
                                    <img src="<?php echo APP_ASSETS; ?>img/top/gallery4.jpg" alt="ユッケの写真">
                                </picture>
                            </div>
                            <div class="gallery__img">
                                <picture>
                                    <source srcset="<?php echo APP_ASSETS; ?>img/top/gallery7.jpg.webp"
                                        type="image/webp">
                                    <img src="<?php echo APP_ASSETS; ?>img/top/gallery7.jpg" alt="花飾りの写真">
                                </picture>
                            </div>
                        </div>
                    </a>

                </div>
            </section>
        </article>
        <!-- ---------------------------------------- -->
    </main>

    <?php include($path . 'libs/footer.php'); ?>
    <script src="<?php echo APP_ASSETS; ?>js/top.min.js"></script>

</body>

</html>