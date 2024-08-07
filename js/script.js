jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる

  var topBtn = $('.pagetop');
  topBtn.hide();

  // ボタンの表示設定
  $(window).scroll(function () {
    if ($(this).scrollTop() > 70) {
      // 指定px以上のスクロールでボタンを表示
      topBtn.fadeIn();
    } else {
      // 画面が指定pxより上ならボタンを非表示
      topBtn.fadeOut();
    }
  });

  // ボタンをクリックしたらスクロールして上に戻る
  topBtn.click(function () {
    $('body,html').animate(
      {
        scrollTop: 0,
      },
      300,
      'swing'
    );
    return false;
  });

  // スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)

  $(document).on('click', 'a[href*="#"]', function () {
    let time = 400;
    let header = $('header').innerHeight();
    let target = $(this.hash);
    if (!target.length) return;
    let targetY = target.offset().top - header;
    $('html,body').animate({ scrollTop: targetY }, time, 'swing');
    return false;
  });

  //ドロワーメニュー
  $('#MenuButton').click(function () {
    // $(".l-drawer-menu").toggleClass("is-show");
    // $(".p-drawer-menu").toggleClass("is-show");
    $('.js-drawer-open').toggleClass('open');
    $('.drawer-menu').toggleClass('open');
    $('html').toggleClass('is-fixed');
  });

  // 天気
  let tenki = gsap.timeline({delay:1,});
  tenki.fromTo('#sun', { opacity: 0 }, { opacity: 1 ,duraion:0.7,});
  tenki.fromTo('#cloud1', { opacity: 0 }, { opacity: 1 ,duraion:0.7,},"-=0.4");
  tenki.fromTo('#cloud2', { opacity: 0 }, { opacity: 1 ,duraion:0.7,},"-=0.4");
  let kusa = gsap.timeline({delay:2,});
  kusa.fromTo('#kusa1', { opacity: 0 }, { opacity: 1 ,duraion:0.7,},"-=0.4");
  kusa.fromTo('#kusa2', { opacity: 0 }, { opacity: 1 ,duraion:0.7,},"-=0.4");
  kusa.fromTo('#kusa3', { opacity: 0 }, { opacity: 1 ,duraion:0.7,},"-=0.4");
  kusa.fromTo('#ki1', { opacity: 0 }, { opacity: 1 ,duraion:0.7,},"+=0.5");
  kusa.fromTo('#ki2', { opacity: 0 }, { opacity: 1 ,duraion:0.7,},"-=0.4");
  kusa.fromTo('#ki3', { opacity: 0 }, { opacity: 1 ,duraion:0.7,},"-=0.4");
  let kesiki = gsap.timeline({delay:4,});
  kesiki.fromTo('#yama', { opacity: 0 }, { opacity: 1 ,duraion:1.5,});
});
