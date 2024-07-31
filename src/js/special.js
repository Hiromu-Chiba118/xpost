gsap.registerPlugin(ScrollTrigger);

// リサイズイベント;
window.addEventListener('resize', function () {
  if (windowWidth > 767) {
    location.reload();
  }
});

const windowWidth = window.innerWidth;

//スペシャリテ3品 ==================================================================================

//横スクロール---------------------------------------------------
if (window.matchMedia('(min-width: 768px)').matches) {
  let pages = document.querySelectorAll('.special-specialty__item').length;
  let moveX = -100 + 100 / pages;

  gsap.to('.special-specialty__items', {
    xPercent: moveX,
    ease: 'none',
    scrollTrigger: {
      trigger: '.special-specialty__items',
      start: 'top top',
      end: () => `+=${document.querySelector('.special-specialty__items').offsetWidth}`,
      pin: true,
      scrub: 1,
      // markers: true,
      onUpdate: (self) => {
        if (self.progress > 0 && self.progress < 1) {
          gsap.to('.special-specialty__title', { opacity: 1 });
        } else {
          gsap.to('.special-specialty__title', { opacity: 0 });
        }
      },
    },
  });

  gsap.to('.fixed-box', {
    ease: 'none',
    duration: 0.1,
    scrollTrigger: {
      trigger: '.special-specialty__items',
      start: 'top top',
      // end: () => `+=${document.querySelector('.special-specialty__items').offsetWidth + document.querySelector('.special-specialty__items').offsetHeight * 2}`,
      end: () => `+=${document.querySelector('.special-specialty__items').offsetWidth}`,
      scrub: true,
      toggleClass: {
        targets: '.fixed-box',
        className: 'is-visible',
      },
    },
  });
}

// 画像の拡大・縮小アニメーション・数字アニメーション ---------------------------------------------------
gsap.set('.js-expansion01 img', { scale: 1.2 });

// 1倍に縮小する・数字01-----------
let images01 = document.querySelector('.js-expansion01 img');
let number01 = images01.closest('.specialty__img-box').querySelector('.deco-number');

if (windowWidth > 767) {
  gsap.fromTo(
    images01,
    {
      scale: 1.2,
    },
    {
      scale: 1,
      duration: 1.6,
      ease: Power3.easeIn,
      scrollTrigger: {
        trigger: images01,
        start: 'top 50%',
        once: true,
      },
    }
  );
  gsap.fromTo(
    number01,
    {
      autoAlpha: 0,
    },
    {
      autoAlpha: 0.2,
      delay: 0.4,
      duration: 1,
      ease: Power3.easeOut,
      scrollTrigger: {
        trigger: images01,
        start: 'top 50%',
        once: true,
      },
    }
  );
}

// 1倍に縮小する・数字02-----------
gsap.set('.js-expansion02 img', { scale: 1.2 });
let images02 = document.querySelector('.js-expansion02 img');
let number02 = images02.closest('.specialty__img-box').querySelector('.deco-number');

if (windowWidth > 767) {
  gsap.fromTo(
    images02,
    { scale: 1.2 },
    {
      scale: 1,
      duration: 1.6,
      ease: Power3.easeIn,
      scrollTrigger: {
        trigger: images02,
        start: `right+=${windowWidth * 0.6} left`,
      },
    }
  );

  gsap.fromTo(
    number02,
    {
      autoAlpha: 0,
    },
    {
      autoAlpha: 0.2,
      delay: 0.4,
      duration: 1,
      ease: Power3.easeOut,
      scrollTrigger: {
        trigger: images02,
        start: `right+=${windowWidth * 0.6} left`,
        // once: true,
      },
    }
  );
}

// 1倍に縮小する・数字03-----------
gsap.set('.js-expansion03 img', { scale: 1.2 });
let images03 = document.querySelector('.js-expansion03 img');
let number03 = images03.closest('.specialty__img-box').querySelector('.deco-number');

if (windowWidth > 767) {
  gsap.fromTo(
    images03,
    { scale: 1.2 },
    {
      scale: 1,
      duration: 1.6,
      ease: Power3.easeIn,
      scrollTrigger: {
        trigger: images03,
        start: `right+=${windowWidth + windowWidth * 1} left`,
      },
    }
  );

  gsap.fromTo(
    number03,
    {
      autoAlpha: 0,
    },
    {
      autoAlpha: 0.2,
      delay: 0.4,
      duration: 1,
      ease: Power3.easeOut,
      scrollTrigger: {
        trigger: images03,
        start: `right+=${windowWidth + windowWidth * 1} left`,
        once: true,
        // markers: true,
      },
    }
  );
}

// テキスト＆背景画像切り替え---------------------------------------------------
if (window.innerWidth < 768) {
  ScrollTrigger.create({
    pin: '.menu__wrapper--special',
    trigger: '.menu__wrapper--special',
    start: 'top top',
    end: '300%',
  });

  const specialtyTl = gsap.timeline({
    scrollTrigger: {
      trigger: '.menu__wrapper--special',
      start: 'top top',
      end: '300%',
      scrub: true,
    },
  });

  specialtyTl
    .fromTo(
      '.specialty--01',
      {
        autoAlpha: 1,
      },
      {
        autoAlpha: 0,
        delay: 1,
        duration: 0.3,
      }
    )
    .fromTo(
      '.specialty--02',
      {
        autoAlpha: 0,
      },
      {
        autoAlpha: 1,
        duration: 0.3,
      }
    )
    .to('.specialty--02', {
      autoAlpha: 0,
      delay: 1,
      duration: 0.3,
    })
    .fromTo(
      '.specialty--03',
      {
        autoAlpha: 0,
      },
      {
        autoAlpha: 1,
        duration: 0.3,
      }
    );
}

//special-course===================================================
// ピン留め

if (window.innerWidth > 767) {
  const pinTrigger = ScrollTrigger.create({
    pin: '.special-course',
    trigger: '.special-course__head',
    start: 'top top',
    end: 'bottom top',
    pinSpacer: false,
    // onLeave: () => {
    //   // スクロールが終わったらピン留めを解除する
    //   pinTrigger.kill();

    // },
  });

  // opacity の変更
  gsap.to('.special-course__head', {
    opacity: 0,
    duration: 1,
    ease: 'power1.easeInOut', // 最初はゆっくり、最後は速く
    scrollTrigger: {
      trigger: '.special-course__head',
      start: 'top -30%',
      end: 'bottom top',
      scrub: true,
      anticipatePin: 1,
      toggleActions: 'restart none none none',
      // markers: true,
      onEnter: function () {
        // is-visible クラスを追加
        document.querySelector('.special-course__title-box').classList.add('is-visible');
      },
      onLeave: function () {
        // ピン留めを解除
        pinTrigger.kill();
      },
      onLeaveBack: function () {
        // is-visible クラスを維持するため、何もしない
      },
    },
    onUpdate: function () {
      if (gsap.getProperty('.special-course__head', 'opacity') < 0.3) {
        gsap.to('.special-course__head', {
          zIndex: -1,
          overwrite: true,
        });
      }
    },
  });
  // special-course__head__textの消去アニメーション設定
  gsap.fromTo(
    '.special-course__title-wrap01',
    {
      y: 0,
      autoAlpha: 1,
    },
    {
      y: -50,
      autoAlpha: 0,
      delay: 0.5,
      ease: 'power1.easeInOut',
      scrollTrigger: {
        trigger: '.special-course__head',
        start: 'top -20%',
        endTrigger: '.special-course__head',
        end: 'bottom 60%',
        scrub: true,
        // markers: true,
      },
    }
  );
} else {
  console.log('');
  gsap.fromTo(
    '.special-course__title-box',
    {
      y: 30,
      autoAlpha: 0,
    },
    {
      y: 0,
      autoAlpha: 1,
      delay: 0.5,
      duration: 0.2,
      ease: 'power1.easeInOut',
      scrollTrigger: {
        trigger: '.special-course__title-box',
        start: 'top bottom',
        end: () => `+=${document.querySelector('.special-course__contents').offsetHeight + 200}`,
        toggleActions: 'play reverse play reverse',
        once: false,
        // markers: true,
      },
    }
  );
}




$(function () {
  //モーダル
  $('.js-open').click(function () {
    $('body').addClass('no_scroll'); // 背景固定させるクラス付与
    var id = $(this).data('id'); // 何番目のキャプション（モーダルウィンドウ）か認識
    $('#js-overlay, .js-close, .modal[data-id="modal' + id + '"]').fadeIn();
  });
  // オーバーレイクリックでもモーダルを閉じるように
  $('.js-close, #js-overlay').click(function () {
    $('body').removeClass('no_scroll'); // 背景固定させるクラス削除
    $('#js-overlay, .modal, .js-close').fadeOut();
  });
});
