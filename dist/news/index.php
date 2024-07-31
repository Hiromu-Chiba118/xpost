<?php
$thisPageName = 'news';
$path = realpath(dirname(__FILE__) . '') . "/../";
include_once($path . 'app_config.php');
include($path . 'libs/head.php');
?>
<link rel="stylesheet" href="https://recovery-ub.jp/resource/common/style.css">
<link href="<?php echo APP_ASSETS; ?>css/page/news.min.css" rel="stylesheet">
</head>

<body id="news" class="news">
    <?php include($path . 'libs/header.php'); ?>

    <main>
        <div class="news__container">
            <div class="news__head news-head js-fadeIns01" style="opacity: 0;">
                <div class="news-head__inner">
                    <h1 class="news-head__title c-page-title c-page-title--news font-en">news</h1>
                </div>
            </div>
            <div class="inner">
                <div class="news__wrap">
                    <div class="news__sidebar">
                        <div class="news__sidebar__in">
                            <!-- <h2 class="news__sidebar__ttl">category</h2> -->
                            <h2 class="news__sidebar__ttl">CATEGORY</h2>
                            <ul class="news__sidebar__list">
                                <li class="news__sidebar__item">
                                    <a href="" class="opacity">お知らせ</a>
                                </li>
                                <li class="news__sidebar__item">
                                    <a href="" class="opacity">コラム</a>
                                </li>
                                <li class="news__sidebar__item">
                                    <a href="" class="opacity">商品情報</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="news__block">
                        <ul class="news__items">
                            <li class="news__item">
                                <article class="news__item__in">
                                    <div class="news__top">
                                        <a class="news__category opacity" href="">お知らせ</a>
                                        <time class="news__date" datetime="">2024.07.31</time>
                                    </div>
                                    <h2 class="news__item__ttl"><a href="<?php echo APP_URL; ?>news/detail.php" class="opacity">ランチコースメニューのご紹介</a></h2>
                                </article>
                            </li>
                            <li class="news__item">
                                <article class="news__item__in">
                                    <div class="news__top">
                                        <div class="news__category opacity" href="">新メニュー導入</div>
                                        <time class="news__date" datetime="">2024.07.31</time>
                                    </div>
                                    <h2 class="news__item__ttl"><a href="<?php echo APP_URL; ?>news/detail.php" class="opacity">2024年夏のグランドメニュー導入のお知らせ</a></h2>
                                </article>
                            </li>
                            <li class="news__item">
                                <article class="news__item__in">
                                    <div class="news__top">
                                        <div class="news__category opacity" href="">お知らせ</div>
                                        <time class="news__date" datetime="">2024.07.31</time>
                                    </div>
                                    <h2 class="news__item__ttl"><a href="<?php echo APP_URL; ?>news/detail.php" class="opacity">オフィシャルブランドサイトを公開いたしました</a></h2>
                                </article>
                            </li>
                            <li class="news__item">
                                <article class="news__item__in">
                                    <div class="news__top">
                                        <div class="news__category opacity" href="">お知らせ</div>
                                        <time class="news__date" datetime="">2024.07.31</time>
                                    </div>
                                    <h2 class="news__item__ttl"><a href="<?php echo APP_URL; ?>news/detail.php" class="opacity">オフィシャルブランドサイトを公開いたしました</a></h2>
                                </article>
                            </li>
                            <li class="news__item">
                                <article class="news__item__in">
                                    <div class="news__top">
                                        <div class="news__category opacity" href="">お知らせ</div>
                                        <time class="news__date" datetime="">2024.07.31</time>
                                    </div>
                                    <h2 class="news__item__ttl"><a href="<?php echo APP_URL; ?>news/detail.php" class="opacity">オフィシャルブランドサイトを公開いたしました</a></h2>
                                </article>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include($path . 'libs/footer.php'); ?>
    <script src="<?php echo APP_ASSETS; ?>js/news.min.js"></script>

</body>

</html>