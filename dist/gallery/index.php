<?php
$thisPageName = 'gallery';
$path = realpath(dirname(__FILE__) . '') . "/../";
include_once($path . 'app_config.php');
include($path . 'libs/head.php');
?>
<link href="<?php echo APP_ASSETS; ?>css/page/gallery.min.css" rel="stylesheet">
</head>

<body id="gallery" class="gallery">
    <?php include($path . 'libs/header.php'); ?>

    <main>
        <!-- gallery  ---------------------------------- -->
        <div class="gallery__container">
            <!-- page title -->
            <div class="gallery__head js-fadeIns01" style="opacity: 0;">
                <div class="gallery__inner gallery-inner">
                    <h1 class="gallery__title c-page-title c-page-title--gallery font-en">gallery</h1>
                    <p class="gallery__text font-en">we offer a course meal<br>consist of “kuroge wagyu” yakiniku.<br>please enjoy a wide variety of small dishes<br>in a sophisticated space.</p>
                </div>
            </div>
            <!-- gallery gallery-block 01 ---------------------------------- -->
            <div class="gallery__block gallery-block gallery-block--01">
                <div class="gallery-block__inner gallery-inner js-fadeIns04" style="opacity: 0;">

                    <div class="gallery-block__mv-box">
                        <div class="gallery-block__mv js-parallax06">
                            <div class="js-expansion">
                                <picture>
                                    <source srcset="<?php echo APP_ASSETS; ?>img/gallery/img_gallery01.jpg.webp" type="image/webp">
                                    <img src="<?php echo APP_ASSETS; ?>img/gallery/img_gallery01.jpg" alt="">
                                </picture>
                            </div>
                        </div>
                    </div>

                    <div class="gallery-block__movie">
                        <video src="<?php echo APP_ASSETS; ?>img/gallery/movie-gallery01.mp4" preload="auto" autoplay muted loop playsinline></video>
                    </div>
                    <div class="gallery-block__gallery">
                        <!-- 画像4枚並び -->
                        <ul class="gallery-block__items gallery-col-4">
                            <li class="gallery-col-4__item col-4-item js-parallax02">
                                <div class="js-expansion">
                                    <picture>
                                        <source srcset="<?php echo APP_ASSETS; ?>img/gallery/img_gallery02.jpg.webp" type="image/webp">
                                        <img src="<?php echo APP_ASSETS; ?>img/gallery/img_gallery02.jpg" alt="ハイボール">
                                    </picture>
                                </div>
                            </li>
                            <li class="gallery-col-4__item col-4-item js-parallax04">
                                <div class="js-expansion">
                                    <picture>
                                        <source srcset="<?php echo APP_ASSETS; ?>img/gallery/img_gallery03.jpg.webp" type="image/webp">
                                        <img src="<?php echo APP_ASSETS; ?>img/gallery/img_gallery03.jpg" alt="カウンターに飾られている">
                                    </picture>
                                </div>
                            </li>
                            <li class="gallery-col-4__item col-4-item js-parallax03">
                                <div class="js-expansion">
                                    <picture>
                                        <source srcset="<?php echo APP_ASSETS; ?>img/gallery/img_gallery04.jpg.webp" type="image/webp">
                                        <img src="<?php echo APP_ASSETS; ?>img/gallery/img_gallery04.jpg" alt="肉料理">
                                    </picture>
                                </div>
                            </li>
                            <li class="gallery-col-4__item col-4-item js-parallax01">
                                <div class="js-expansion">
                                    <picture>
                                        <source srcset="<?php echo APP_ASSETS; ?>img/gallery/img_gallery05.jpg.webp" type="image/webp">
                                        <img src="<?php echo APP_ASSETS; ?>img/gallery/img_gallery05.jpg" alt="肉料理">
                                    </picture>
                                </div>
                            </li>
                        </ul>
                        <!-- 画像 動画 横並び -->
                        <ul class="gallery-block__items gallery-col-2">
                            <li class="gallery-col-2__item col-2-item js-parallax02">
                                <div class="js-expansion">
                                    <picture>
                                        <source srcset="<?php echo APP_ASSETS; ?>img/gallery/img_gallery06.jpg.webp" type="image/webp">
                                        <img src="<?php echo APP_ASSETS; ?>img/gallery/img_gallery06.jpg" alt="シチューシーン">
                                    </picture>
                                </div>
                            </li>
                            <li class="gallery-col-2__item col-2-item js-parallax02">
                                <video src="<?php echo APP_ASSETS; ?>img/gallery/movie-gallery02.mp4" preload="auto" autoplay muted loop playsinline></video>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <!-- ---------------------------------------- -->


            <!-- 白 -->
            <div class="back back-gray">
                <span class="back__part"></span>
                <span class="back__part"></span>
                <span class="back__part"></span>
                <span class="back__part"></span>
                <span class="back__part"></span>
                <span class="back__part"></span>
                <span class="back__part"></span>
            </div>

            <!-- gallery gallery-block 02 ---------------------------------- -->
            <div class="gallery__block gallery-block gallery-block--02">
                <div class="gallery-block__inner gallery-inner">
                    <div class="gallery-block__gallery">
                        <!-- 画像 動画 横並び 斜め-->
                        <ul class="gallery-block__items gallery-col-2">
                            <li class="gallery-col-2__item col-2-item col-2-item--image js-parallax06">
                                <div class="js-expansion">
                                    <picture>
                                        <source srcset="<?php echo APP_ASSETS; ?>img/gallery/img_gallery07.jpg.webp" type="image/webp">
                                        <img src="<?php echo APP_ASSETS; ?>img/gallery/img_gallery07.jpg" alt="オクラと茗荷のサラダ">
                                    </picture>
                                </div>
                            </li>
                            <li class="gallery-col-2__item col-2-item col-2-item--movie">
                                <video src="<?php echo APP_ASSETS; ?>img/gallery/movie-gallery03.mp4" preload="auto" autoplay muted loop playsinline></video>
                            </li>
                        </ul>
                    </div>
                    <div class="gallery-block__mv-box">
                        <div class="gallery-block__mv js-parallax06">
                            <div class="js-expansion">
                                <picture>
                                    <source srcset="<?php echo APP_ASSETS; ?>img/gallery/img_gallery08.jpg.webp" type="image/webp">
                                    <img src="<?php echo APP_ASSETS; ?>img/gallery/img_gallery08.jpg" alt="数々の料理を並べているテーブルを俯瞰したイメージ">
                                </picture>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-block__gallery">
                        <!-- 画像4枚並び -->
                        <ul class="gallery-block__items gallery-col-4">
                            <li class="gallery-col-4__item col-4-item js-parallax03">
                                <div class="js-expansion">
                                    <picture>
                                        <source srcset="<?php echo APP_ASSETS; ?>img/gallery/img_gallery09.jpg.webp" type="image/webp">
                                        <img src="<?php echo APP_ASSETS; ?>img/gallery/img_gallery09.jpg" alt="黒毛和牛の肉原体">
                                    </picture>
                                </div>
                            </li>
                            <li class="gallery-col-4__item col-4-item js-parallax02">
                                <div class="js-expansion">
                                    <picture>
                                        <source srcset="<?php echo APP_ASSETS; ?>img/gallery/img_gallery10.jpg.webp" type="image/webp">
                                        <img src="<?php echo APP_ASSETS; ?>img/gallery/img_gallery10.jpg" alt="ランチメニュー">
                                    </picture>
                                </div>
                            </li>
                            <li class="gallery-col-4__item col-4-item js-parallax03">
                                <video src="<?php echo APP_ASSETS; ?>img/gallery/movie-gallery04.mp4" preload="auto" autoplay muted loop playsinline></video>
                                <!-- <picture>
                  <source srcset="<?php echo APP_ASSETS; ?>img/gallery/img_gallery11.jpg.webp" type="image/webp">
                  <img src="<?php echo APP_ASSETS; ?>img/gallery/img_gallery11.jpg" alt="店舗外観">
                </picture> -->
                            </li>
                            <li class="gallery-col-4__item col-4-item js-parallax01">
                                <div class="js-expansion">
                                    <picture>
                                        <source srcset="<?php echo APP_ASSETS; ?>img/gallery/img_gallery12.jpg.webp" type="image/webp">
                                        <img src="<?php echo APP_ASSETS; ?>img/gallery/img_gallery12.jpg" alt="ユッケ">
                                    </picture>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- ---------------------------------------- -->

            <!-- gallery gallery-block 03  ---------------------------------- -->
            <div class="gallery__block gallery-block gallery-block--03">
                <div class="gallery-block__inner gallery-inner">
                    <div class="gallery-block__movie">
                        <video src="<?php echo APP_ASSETS; ?>img/gallery/movie-gallery05.mp4" preload="auto" autoplay muted loop playsinline></video>
                    </div>
                    <div class="gallery-block__mv-box">
                        <div class="gallery-block__mv js-parallax06">
                            <div class="js-expansion">
                                <picture>
                                    <source srcset="<?php echo APP_ASSETS; ?>img/gallery/img_gallery13.jpg.webp" type="image/webp">
                                    <img src="<?php echo APP_ASSETS; ?>img/gallery/img_gallery13.jpg" alt="5本並べられたサントリーウィスキーのボトル">
                                </picture>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-block__gallery gallery-col-3">
                        <ul class="gallery-col-3__items">
                            <li class="gallery-col-3__item col-3-item js-parallax05">
                                <div class="js-expansion">
                                    <picture>
                                        <source srcset="<?php echo APP_ASSETS; ?>img/gallery/img_gallery14.jpg.webp" type="image/webp">
                                        <img src="<?php echo APP_ASSETS; ?>img/gallery/img_gallery14.jpg" alt="黒毛和牛のメニュー">
                                    </picture>
                                </div>
                            </li>
                            <li class="gallery-col-3__item col-3-item js-parallax06">
                                <div class="js-expansion">
                                    <picture>
                                        <source srcset="<?php echo APP_ASSETS; ?>img/gallery/img_gallery15.jpg.webp" type="image/webp">
                                        <img src="<?php echo APP_ASSETS; ?>img/gallery/img_gallery15.jpg" alt="逸品を並べたテーブルを俯瞰したイメージ">
                                    </picture>
                                </div>
                            </li>
                            <li class="gallery-col-3__item col-3-item col-3-item--movie">
                                <video src="<?php echo APP_ASSETS; ?>img/gallery/movie-gallery06.mp4" preload="auto" autoplay muted loop playsinline></video>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- ---------------------------------------- -->






        </div>
        <!-- ---------------------------------------- -->
    </main>

    <?php include($path . 'libs/footer.php'); ?>
    <script src="<?php echo APP_ASSETS; ?>js/gallery.min.js"></script>

</body>

</html>