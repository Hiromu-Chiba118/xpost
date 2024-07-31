// JavaScript Document

$(function () {
  // ヘッダーロゴ
  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      $('.header__logo').fadeOut();
    } else {
      $('.header__logo').fadeIn();
    }
  });

  // go top
  $('.footer__pagetop').click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 350);
    return false;
  });

  // Gナビ
  $('.header__toggle').click(function () {
    $(this).toggleClass('opened');
    $('.header__gnav').toggleClass("active");
  });
  $('.header__gnav ul li a').click(function () {
    $('.header__toggle').toggleClass("opened");
    $('.header__gnav').toggleClass("active");
  });

  //スムーススクロール
  $(document).on('click', 'a[href*="#"]', function () {
    let time = 400;
    let header = $('header').innerHeight();
    let target = $(this.hash);
    if (!target.length) return;
    let targetY = target.offset().top - header;
    $('html,body').animate({ scrollTop: targetY }, time, 'swing');
    return false;
  });
});