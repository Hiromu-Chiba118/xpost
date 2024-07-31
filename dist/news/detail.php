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
        <div class="detail__container">
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
                        <div class="detail__top">
                            <div class="detail__box">
                                <div class="detail__category">お知らせ</div>
                            </div>
                            <time class="detail__date" datetime="">2024.07.31</time>
                            <h1 class="detail__ttl">オフィシャルブランドサイトを公開いたしました</h1>
                        </div>
                        <figure class="detail__img">
                            <img src="<?php echo APP_ASSETS; ?>img/top/fv.jpg" alt="">
                        </figure>
                        <div class="post">
                            <h2>h2が入ります。h2が入ります。h2が入ります。h2が入ります。h2が入ります。</h2>
                            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                            <figure>
                                <img src="<?php echo APP_ASSETS; ?>img/top/fv.jpg" alt="">
                            </figure>
                            <h3>h3が入ります。h3が入ります。h3が入ります。h3が入ります。h3が入ります。</h3>
                            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                            <ul>
                                <li>箇条書きが入ります。</li>
                                <li>箇条書きが入ります。</li>
                                <li>箇条書きが入ります。</li>
                                <li>箇条書きが入ります。</li>
                            </ul>
                            <p><a href="">リンクが入ります。</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include($path . 'libs/footer.php'); ?>
    <script src="<?php echo APP_ASSETS; ?>js/news.min.js"></script>

</body>

</html>