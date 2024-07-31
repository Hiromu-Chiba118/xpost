<!-- reserve-button ---------------------------------- -->
<a href="https://booking.resebook.jp/webrsv/search/s014098102/32121?isfixshop=true" class="reserve" target="_blank">reservation</a>
<!-- ---------------------------------------- -->

<footer class="footer">
    <div class="inner">
        <div class="footer__navi">
            <ul class="footer__navi__top">
                <li><a href="<?php echo APP_URL; ?>" class="opacity">HOME</a></li>
                <li><a href="<?php echo APP_URL; ?>concept/" class="opacity">CONCEPT</a></li>
                <li><a href="<?php echo APP_URL; ?>menu/special/" class="opacity">MENU</a></li>
                <li><a href="<?php echo APP_URL; ?>news/" class="opacity">NEWS</a></li>
                <li><a href="<?php echo APP_URL; ?>information/" class="opacity">SHOP INFORMATION</a></li>
                <li><a href="<?php echo APP_URL; ?>gallery/" class="opacity">GALLERY</a></li>
            </ul>
            <ul class="footer__navi__bottom">
                <li><a href="http://www.1dining.co.jp/contact.html" class="opacity" target="_blank">CONTACT</a></li>
                <li><a href="http://www.1dining.co.jp/company/csr.html" class="opacity" target="_blank">SDGs</a></li>
                <li><a href="http://www.1dining.co.jp/sitemap.html" class="opacity" target="_blank">SITEMAP</a></li>
                <li><a href="http://www.1dining.co.jp/site_policy.html" class="opacity" target="_blank">SITE POLICY</a></li>
                <li><a href="http://www.1dining.co.jp/privacy_policy.html" class="opacity" target="_blank">PRIVACY POLICY</a></li>
            </ul>
            <!-- <a href="https://www.instagram.com/aburiya_arata/" class="footer__insta" target="_blank">
                <img src="<?php echo APP_ASSETS; ?>img/common/ico-insta.svg" alt="Instagram">
            </a> -->
        </div>
        <p class="footer__ttl">・BRAND</p>
        <ul class="footer__list">
            <li><a class="opacity" href="https://one-karubi.1dining.co.jp/" target="_blank">ワンカルビ</a> / <a href="https://one-karubi-premium.1dining.co.jp/" target="_blank">ワンカルビPREMIUM</a></li>
            <li><a class="opacity" href="https://aburiya.1dining.co.jp/" target="_blank">あぶりや</a></li>
            <li><a class="opacity" href="https://kinnobuta.1dining.co.jp/" target="_blank">きんのぶた</a> / <a href="https://kinnobuta-premium.1dining.co.jp/" target="_blank">きんのぶたPREMIUM</a></li>
            <li><a class="opacity" href="https://kinnobuta-kr.1dining.co.jp/" target="_blank">kin no buta</a></li>
            <li><a class="opacity" href="https://yakiniku-time.1dining.co.jp/" target="_blank">焼肉タイム</a></li>
            <li><a class="opacity" href="https://hitori-karubi.1dining.co.jp/" target="_blank">ひとりカルビ1965</a></li>
        </ul>
        <a href="http://www.1dining.co.jp/" class="footer__logo" target="_blank">
            <img src="<?php echo APP_ASSETS; ?>img/common/logo-onedining.svg" alt="ONE DINING">
        </a>
        <a href="javascript:void(0)" class="footer__pagetop">
            <picture>
                <source srcset="<?php echo APP_ASSETS; ?>img/common/ico-pagetop-sp.svg" media="(max-width:767px)">
                <img src="<?php echo APP_ASSETS; ?>img/common/ico-pagetop.svg" alt="PAGE TOP">
            </picture>
        </a>
        <p class="footer__copy">©2023 ONE DINING co.,ltd. All Rights Reserved.</p>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="<?php echo APP_ASSETS; ?>js/modernizr.js"></script>
<script src="<?php echo APP_ASSETS; ?>js/common.min.js"></script>

<script>
    var ua = navigator.userAgent
    var sp = (ua.indexOf('iPhone') > 0 || ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0)
    if (sp) new ViewportExtra(375)
</script>