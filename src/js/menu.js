$(function () {
  // アニメーション====================
  window.addEventListener('scroll', function () {
    // ScrollTrigger.refresh(); // コメントアウトされたコードはそのまま
  });

  //共通の動き------------
  // フェードイン
  const fadeIns01 = document.querySelectorAll('.js-fadeIns01');
  fadeIns01.forEach((fadeIn) => {
    gsap.fromTo(
      fadeIn,
      {
        y: 20,
        opacity: 0,
      },
      {
        y: 0,
        duration: 0.8,
        opacity: 1,
        scrollTrigger: {
          trigger: fadeIn,
          start: 'top center',
        },
      }
    );
  });

  const fadeIns02 = document.querySelectorAll('.js-fadeIns02');
  fadeIns02.forEach((fadeIn) => {
    gsap.fromTo(
      fadeIn,
      {
        opacity: 0,
      },
      {
        duration: 0.8,
        opacity: 1,
        scrollTrigger: {
          trigger: fadeIn,
          start: 'top bottom',
        },
      }
    );
  });

 
  // 画像パララックス---------------------------------------------------
  const targets1 = document.querySelectorAll('.js-parallax01');
targets1.forEach((target) => {
  // メディアクエリの定義
  const mediaQuery = window.matchMedia('(max-width: 767px)');

  // メディアクエリの状態に応じて動作を分岐
  if (mediaQuery.matches) {
    // 767px以下の場合の処理
    gsap.fromTo(
      target.querySelector('img'),
      {
        yPercent: 0,
      },
      {
        yPercent: -15,
        ease: 'none',
        scrollTrigger: {
          trigger: target,
          start: 'top bottom',
          end: 'bottom top',
          scrub: 0.3,
        },
      }
    );

    // gsap.fromTo(
    //   target,
    //   {
    //     // targetの初期値
    //     y: 0,
    //   },
    //   {
    //     // targetの目標値
    //     y: 10,
    //     ease: 'none',
    //     scrollTrigger: {
    //       trigger: target,
    //       start: 'top bottom',
    //       end: 'bottom top',
    //       scrub: 0.2,
    //     },
    //   }
    // );
  } else {
    // 767pxより大きい場合の処理
    gsap.fromTo(
      target.querySelector('img'),
      {
        yPercent: 0,
      },
      {
        yPercent: -15,
        ease: 'none',
        scrollTrigger: {
          trigger: target,
          start: 'top bottom',
          end: 'bottom top',
          scrub: 0.3,
        },
      }
    );

    // gsap.fromTo(
    //   target,
    //   {
    //     y: 20,
    //   },
    //   {
    //     y: 0,
    //     ease: 'none',
    //     scrollTrigger: {
    //       trigger: target,
    //       start: 'top bottom',
    //       end: 'bottom top',
    //       scrub: 0.2,
    //     },
    //   }
    // );
  }
});


 

  // ScrollTriggerのリフレッシュ頻度を減らす
  ScrollTrigger.config({
    autoRefreshEvents: 'visibilitychange,DOMContentLoaded,load',
  });
});