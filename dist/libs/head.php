<!DOCTYPE html>
<html lang="ja">

<head>
    <!-- noindex ---------------------------------- -->
    <!-- noindex ---------------------------------- -->
    <!-- noindex ---------------------------------- -->
    <!-- noindex ---------------------------------- -->
    <meta name="robots" content="noindex">
    <!-- ---------------------------------------- -->
    <!-- ---------------------------------------- -->
    <!-- ---------------------------------------- -->
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    $current_url = 'http' . (!empty($_SERVER['HTTPS']) ? 's' : '') . '://' . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
    include(APP_PATH . 'libs/argument.php');
    ?>
    <script src="https://cdn.jsdelivr.net/npm/viewport-extra@1.0.2/dist/viewport-extra.min.js"></script>

    <title><?php echo $titlepage ?></title>
    <meta name="description" content="<?php echo $desPage; ?>">
    <meta name="keywords" content="<?php echo $keyPage; ?>">

    <!-- Facebook
======================================================================-->
    <meta property="og:title" content="<?php echo $titlepage ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo htmlspecialchars($current_url); ?>">
    <meta property="og:image" content="<?php echo APP_ASSETS; ?>img/common/ogp.jpg">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="<?php echo $desPage; ?>">

    <meta name="twitter:card" content="summary_large_image">

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo APP_ASSETS; ?>favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo APP_ASSETS; ?>favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo APP_ASSETS; ?>favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo APP_ASSETS; ?>favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo APP_ASSETS; ?>favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!--css-->
    <link href="<?php echo APP_ASSETS; ?>css/layout/reset.min.css" rel="stylesheet">
    <link href="<?php echo APP_ASSETS; ?>css/layout/base.min.css" rel="stylesheet">
    <!--/css-->

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Serif+Display:ital,wght@0,100..900;1,100..900&family=Oranienbaum&family=Shippori+Mincho&display=swap"
        rel="stylesheet">
    <!-- /font -->



    <!-- WP
======================================================================-->
    <?php /* if ( defined('ABSPATH')  == true) wp_head(); */ ?>
    <?php /* require_once( dirname(dirname( __FILE__ )) . '/wp/wp-load.php' ); */ ?>