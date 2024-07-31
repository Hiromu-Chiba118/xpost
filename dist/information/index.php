<?php
$thisPageName = 'information';
$path = realpath(dirname(__FILE__) . '') . "/../";
include_once($path . 'app_config.php');
include($path . 'libs/head.php');
?>
<link rel="stylesheet" href="https://recovery-ub.jp/resource/common/style.css">
<link rel="stylesheet" href="https://recovery-ub.jp/resource/common/slider.css">
<link href="<?php echo APP_ASSETS; ?>css/page/information.min.css" rel="stylesheet">
</head>

<body id="information" class="information">
  <?php include($path . 'libs/header.php'); ?>

  <main>
    <div class="information__container">
      <div class="information__head information-head js-fadeIns01" style="opacity: 0;">
        <div class="information-head__inner">
          <h1 class="information-head__title c-page-title c-page-title--information font-en">INFORMATION</h1>
        </div>
      </div>
      <script src="https://recovery-ub.jp/resource/load.js" charset="uft-8"></script>
      <div id="store-setting" data-baseurl="https://recovery-ub.jp" data-brandkey="e0db11aef5a1430590132c7143de4944">
      </div>
      <div id="content_section">
        <div id="zestoresearch_body">
          <div id="zestoresearch"></div>
          <div id="zestoresearch_menu"></div>
          <div id="zestoresearch_list"></div>
        </div>
      </div>
    </div>
  </main>

  <?php include($path . 'libs/footer.php'); ?>
  <script src="<?php echo APP_ASSETS; ?>js/information.min.js"></script>

</body>

</html>