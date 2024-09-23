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

  // アニメーション
  // gsap.fromTo('.gallery__items .gallery__item',
  //   { opacity: 0,y:10,  },
  //   { opacity: 1,y:0, duration: 1 ,ease: "power3.out", stagger:0.2});

  // ローディング
  let tl=gsap.timeline();
  tl.fromTo(".loader__title span",{  opacity: 0,  x:-10,},{  opacity: 1,  x:0,  stagger:0.08,});
  tl.to(".loader__title span",{  opacity: 0,  y:-10,  stagger:{from:"random",each:0.04,},},"+=0.3");
  tl.fromTo(".loader__item",{  clipPath:"inset(0% 0% 0% 0% )",},{  clipPath:"inset(0% 0% 100% 0% )",  duration:1,  stagger:0.2,  ease: "power3.inOut"  },"-=0.2");
  tl.to(".loader",{  display:"none",});
  tl.fromTo(".fv__title span",{ opacity: 0,yPercent:100,},{  opacity: 1, yPercent:0, ease:Power3.out,},"-=0.9");
  tl.fromTo(".fv__text span",{  opacity: 0,},{  opacity: 1,stagger:0.1,},"-=0.4");


  const swiper = new Swiper('.swiper', {
    slidesPerView: 4,
    loop:true,
    speed:3000,
    autoplay:{
      delay:0,
    }
  });

  gsap.fromTo(
  ".gallery__items .gallery__item",
  {
    opacity: 0,
  },
  {
    opacity: 1,
    duration:0.7,
    stagger:0.1,
    ease:"none",
    scrollTrigger:{
      trigger:".gallery__items",
      start:"top 90%"
    }
  }) ;
  

  gsap.fromTo(
    ".news__items .news__item",
    {
      opacity:0,
      x:15,
    },
    {
      x:0,
      opacity:1,
      duration:0.6,
      stagger:0.15,
      scrollTrigger:{
        trigger:".news__items",
        start:"top 90%"
      }
    }
  )

  gsap.fromTo(
    ".about__imgs .about__img",
    {
      opacity:0,
      y:-40,
      rotate:-15,
      x:25,
    },
    {
      x:0,
      rotate:0,
      opacity:1,
      y:0,
      duration:1.0,
      stagger:0.2,
      scrollTrigger:{
        trigger:".about__imgs",
        start:"top 90%"
      }
    }
  )


  gsap.fromTo(
    ".test__box",
    {
x:1000,
    } ,
    {
      x:0,
      scrollTrigger:{
        trigger:".test__box",
        start:"top bottom",
        scrub:0.2,
      }
    }
  )


  gsap.fromTo(
    ".div-img img",
    {
y:-120,
    },
    {
y:0,
scrollTrigger:{
  trigger:".div-img",
  start:"top bottom",
  scrub:1,
}

    }
  )


  gsap.fromTo(
    ".gallery__title span",
    {
      opacity:0,
      yPercent:100,
    },
    {
      opacity:1,
      yPercent:0,
      duration:0.8,
      stagger:0.1,
      scrollTrigger:{
        trigger:".gallery__title",
        start:"top 90%",
      }

    }
  );

  gsap.fromTo(
    ".news__title span",
    {
      opacity:0,
      yPercent:100,
    },
    {
      opacity:1,
      yPercent:0,
      duration:0.8,
      stagger:0.1,
      scrollTrigger:{
        trigger:".news__title",
        start:"top 90%",
      }

    }
  )


  gsap.fromTo(
    ".about__title span",
    {
      opacity:0,
      yPercent:100,
    },
    {
      opacity:1,
      yPercent:0,
      duration:0.8,
      stagger:0.1,
      scrollTrigger:{
        trigger:".about__title",
        start:"top 90%",
      }

    }
  )



  

});
