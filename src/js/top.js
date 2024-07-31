// JavaScript Document

setTimeout(function () {
  document.getElementById("fv__video").play();
}, 2500);
setTimeout(function () {
  document.getElementById("fv__video_sp").play();
}, 2500);
// 動画---------------------------------------------------
document.addEventListener('DOMContentLoaded', function () {
  // const videos = document.querySelectorAll('video');
  const videos = document.querySelectorAll('#fv__video');
  // const videos = document.getElementById('fv__video');

  function updateVideoSource(video, baseSrc) {
    const suffix = window.innerWidth <= 768 ? '-sp' : '-pc';
    const sourceMP4 = document.createElement('source');

    sourceMP4.setAttribute('src', baseSrc + suffix + '.mp4');
    sourceMP4.setAttribute('type', 'video/mp4');

    video.innerHTML = ''; // 動画要素をクリアして
    video.appendChild(sourceMP4); // 新しいソースを追加する

    video.load(); // 動画を再読み込みする
  }

  function handleVideoLoad(video) {
    const baseSrc = video.getAttribute('data-src');
    updateVideoSource(video, baseSrc);
    video.controls = false; // コントロールを無効化
    video.loop = true; // ループ再生を設定
    video.muted = true; // ミュート設定（オートプレイを有効化するため）
  }

  // 初回読み込み時にビデオを更新
  videos.forEach((video) => {
    handleVideoLoad(video);
  });

  // スクロール時に一度だけ動画を読み込む
  let loaded = false;
  function checkVideoLoad() {
    if (!loaded) {
      videos.forEach((video) => {
        const rect = video.getBoundingClientRect();
        if (rect.top >= 0 && rect.bottom <= window.innerHeight) {
          handleVideoLoad(video);
        }
      });
      loaded = true;
      window.removeEventListener('scroll', checkVideoLoad); // 初回の読み込み後にイベントを解除
    }
  }

  window.addEventListener('scroll', checkVideoLoad);
  checkVideoLoad(); // 初回チェックを行う
});

// JavaScript Document

$(function () {
  // アニメーション====================
  window.addEventListener("scroll", function () {
    // ScrollTrigger.refresh();
  });
  //共通の動き------------
  // フェードイン
  let fadeIns = document.querySelectorAll(".js-fadeIns");
  fadeIns.forEach((fadeIn) => {
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
          start: "top center",
        },
      }
    );
  });

  //loader------------
  const op = gsap.timeline();
  op.to(
    ".loader__logo",
    {
      opacity: 1,
      duration: 1.2,
    },
    "+=1"
  )
    .fromTo(
      ".loader",
      {
        opacity: 1,
      },
      {
        opacity: 0,
        duration: 0.8,
      },
      "+=1.2"
    )
    .to(".loader", {
      display: "none",
    });

  // concept----------
  // 初期設定
  gsap.set(".concept__texts", {
    autoAlpha: 0,
  });
  // -------

  // ピン留め
  ScrollTrigger.create({
    pin: ".concept__item",
    trigger: ".concept__item",
    start: "top top",
    end: "130%",
    pinSpacer: false,
    // pinSpacing:false,
  });
  ScrollTrigger.create({
    pin: ".concept__covers",
    trigger: ".concept__item",
    start: "top top",
    endTrigger: "concept__gallery",
    end: "bottom bottom",
    pinSpacer: false,
    // pinSpacing:false,
  });

  // 切り替えのタイミング設定
  const percent = "15%";

  // 縦書きテキストのフェードイン
  gsap.fromTo(
    ".concept__wrap",
    {
      y: 30,
      opacity: 0,
    },
    {
      y: 0,
      opacity: 1,
      duration: 1.4,
      scrollTrigger: {
        trigger: ".concept__wrap",
        start: "top center+=150",
        marker: true,
      },
    }
  );

  // テキストの切り替え
  gsap.fromTo(
    ".concept__subtitle",
    {
      y: 0,
      autoAlpha: 1,
    },
    {
      y: -20,
      autoAlpha: 0,
      duration: 0.7,
      scrollTrigger: {
        trigger: ".concept",
        start: percent,
        toggleActions: "play reverse play reverse",
        once: false,
      },
    }
  );
  gsap.fromTo(
    ".concept__texts",
    {
      y: 20,
      autoAlpha: 0,
    },
    {
      y: 0,
      autoAlpha: 1,
      duration: 0.7,
      scrollTrigger: {
        trigger: ".concept",
        start: percent,
        toggleActions: "play reverse play reverse",
        once: false,
      },
    }
  );
  // 画像の表示
  gsap.fromTo(
    ".concept__cover",
    {
      y: 0,
      autoAlpha: 1,
    },
    {
      autoAlpha: 0,
      duration: 0.7,
      scrollTrigger: {
        trigger: ".concept",
        start: percent,
        toggleActions: "play reverse play reverse",
        once: false,
      },
    }
  );

  // 背景変化
  gsap.to(".back-gray", {
    opacity: 1,
    scrollTrigger: {
      trigger: ".concept__gallery",
      start: "top bottom",
      end: "top center",
      scrub: 0.4,
    },
  });
  // gsap.fromTo(
  //   ".back-gray .back__part",
  //   {
  //     opacity:1,
  //     clipPath:"inset(0% 0% 0% 0%)",
  //   },
  //   {
  //     opacity:0,
  //     clipPath:"inset(0% 0% 100% 0%)",
  //     scrollTrigger:{
  //       trigger:".about",
  //       start:"-100px",
  //       end:"0px",
  //       scrub:0.4,
  //     }
  //   }
  // );

  // パララックス

  const targets = document.querySelectorAll(".js-parallax");
  targets.forEach((target) => {
    gsap.fromTo(
      target.querySelector("img"),
      {
        yPercent: 0,
      },
      {
        yPercent: -20,
        ease: "none",
        scrollTrigger: {
          trigger: target,
          start: "top bottom",
          end: "bottom top",
          scrub: 0.5,
        },
      }
    );
    gsap.fromTo(
      target,
      {
        y: 40,
      },
      {
        y: -40,
        ease: "none",
        scrollTrigger: {
          trigger: target,
          start: "top bottom",
          end: "bottom top",
          scrub: 0.5,
        },
      }
    );
  });

  const targets2 = document.querySelectorAll(".js-parallax2");
  targets2.forEach((target) => {
    gsap.fromTo(
      target.querySelector("img"),
      {
        yPercent: 0,
      },
      {
        yPercent: -10,
        ease: "none",
        scrollTrigger: {
          trigger: target,
          start: "top bottom",
          end: "bottom top",
          scrub: 0.2,
        },
      }
    );
    gsap.fromTo(
      target,
      {
        y: 20,
      },
      {
        y: -20,
        ease: "none",
        scrollTrigger: {
          trigger: target,
          start: "top bottom",
          end: "bottom top",
          scrub: 0.2,
        },
      }
    );
  });

  const targets3 = document.querySelectorAll(".js-parallax3");
  targets3.forEach((target) => {
    gsap.fromTo(
      target.querySelector("img"),
      {
        yPercent: 0,
      },
      {
        yPercent: -15,
        ease: "none",
        scrollTrigger: {
          trigger: target,
          start: "top bottom",
          end: "bottom top",
          scrub: 0.3,
        },
      }
    );
    gsap.fromTo(
      target,
      {
        y: 10,
      },
      {
        y: -10,
        ease: "none",
        scrollTrigger: {
          trigger: target,
          start: "top bottom",
          end: "bottom top",
          scrub: 0.2,
        },
      }
    );
  });

  // about------------------
  // 横スクロール
  const listWrapperEl = document.querySelector(".about");
  const listEl = document.querySelector(".about__wrap");
  let mm = gsap.matchMedia();

  mm.add("(min-width: 768px)", () => {
    let horizontal = gsap.to(".about__wrap", {
      x: () => -(listEl.clientWidth - listWrapperEl.clientWidth),
      ease: "none",
      scrollTrigger: {
        trigger: ".about__wrap",
        start: "top top",
        end: () => `+=${listEl.clientWidth - listWrapperEl.clientWidth}`,
        scrub: true,
        pin: true,
        anticipatePin: 1,
        invalidateOnRefresh: true,
      },
    });
    let images = document.querySelectorAll(".js-image");
    images.forEach((image) => {
      gsap.fromTo(
        image,
        {
          clipPath: "inset(100% 0% 0% 0%)",
        },
        {
          clipPath: "inset(0% 0% 0% 0%)",
          duration: 0.6,
          ease: Power3.easeOut,
          scrollTrigger: {
            trigger: image,
            containerAnimation: horizontal,
            start: "left right-=100",
            once: true,
            toggleClass: {
              targets: image,
              className: "is-visible",
            },
          },
        }
      );
    });

    let fades = document.querySelectorAll(".js-fade");
    fades.forEach((fade) => {
      gsap.fromTo(
        fade,
        {
          opacity: 0,
          marginTop: 20,
        },
        {
          marginTop: 0,
          opacity: 1,
          duration: 0.8,
          delay: 0.3,
          ease: Power3.easeOut,
          scrollTrigger: {
            trigger: fade,
            containerAnimation: horizontal,
            start: "left right-=100",
            once: true,
          },
        }
      );
    });
  });
  mm.add("(max-width: 767px)", () => {
    let images = document.querySelectorAll(".js-image");
    images.forEach((image) => {
      gsap.fromTo(
        image,
        {
          clipPath: "inset(100% 0% 0% 0%)",
        },
        {
          clipPath: "inset(0% 0% 0% 0%)",
          duration: 0.6,
          ease: Power3.easeOut,
          scrollTrigger: {
            trigger: image,
            start: "top bottom",
            once: true,
            toggleClass: {
              targets: image,
              className: "is-visible",
            },
          },
        }
      );
    });

    let fades = document.querySelectorAll(".js-fade");
    fades.forEach((fade) => {
      gsap.fromTo(
        fade,
        {
          y: 10,
          opacity: 0,
        },
        {
          y: 0,
          opacity: 1,
          duration: 0.8,
          delay: 0.3,
          ease: Power3.easeOut,
          scrollTrigger: {
            trigger: fade,
            start: "top bottom",
            once: true,
          },
        }
      );
    });

    // タイトルピン留め
    ScrollTrigger.create({
      pin: '.about__title',
      trigger: '.about__wrap',
      start: 'top top',
      endTrigger:".about-point__inner",
      end: 'top top',
      pinSpacer: false,
    });

    gsap.fromTo(
      ".about__title",
      {
      },
      {
        scrollTrigger:{
          trigger:".about-point__inner",
          start:"top top+=50",
          toggleClass:{
            targets:".about__title",
            className:"is-change"

          }
        }
      }
    )

  });

  // 背景
  gsap.to(".back-gray2", {
    opacity: 1,
    ease: "none",
    scrollTrigger: {
      trigger: ".about",
      start: "top center",
      end: "top top",
      scrub: 0.4,
    },
  });
  // menu-------------
  const menuTl = gsap.timeline({
    scrollTrigger: {
      trigger: ".course__inner",
      start: "top top+=100",
    },
  });

  menuTl
    .fromTo(
      ".course__info",
      {
        y: 20,
        opacity: 0,
      },
      {
        y: 0,
        opacity: 1,
        duration: 0.8,
      }
    )
    .fromTo(
      ".course__img",
      {
        y: 20,
        opacity: 0,
      },
      {
        y: 0,
        opacity: 1,
        duration: 0.8,
      },
      "-=0.2"
    );

  // news-------------

  gsap.to(".back-gray2--news", {
    opacity: 1,
    ease: "none",
    scrollTrigger: {
      trigger: ".news",
      start: "top center",
      end: "top top",
      scrub: 0.4,
    },
  });

  // shop-----------------
  // コンテンツ表示
  gsap.fromTo(
    ".shop__right",
    {
      opacity: 0,
      y: 20,
    },
    {
      y: 0,
      opacity: 1,
      duration: 0.7,
      scrollTrigger: {
        trigger: ".shop",
        start: "top center",
      },
    }
  );

  // 背景画像表示
  // gsap.to(
  //   ".shop__imgs",
  //   {
  //     opacity:1,
  //     scrollTrigger:{
  //       trigger:".shop",
  //       start:"top top+=100",
  //       end:"300%",
  //       toggleActions: "play play play reverse",

  //     }
  //   },
  // );

  ScrollTrigger.create({
    pin: ".shop",
    trigger: ".shop",
    start: "top top",
    end: "300%",
    // pinSpacer:false,
    // pinSpacing:false,
  });

  // テキスト＆背景画像切り替え
  const shopTl = gsap.timeline({
    scrollTrigger: {
      trigger: ".shop",
      start: "top top",
      end: "300%",
      scrub: true,
    },
  });

  shopTl
    .to(".shop__texts01", {
      autoAlpha: 1,
      duration: 0.5,
    })
    .to(".shop__texts01", {
      autoAlpha: 0,
    })
    .to(
      ".shop__img01",
      {
        autoAlpha: 0,
        duration: 1,
      },
      "<"
    )
    .to(
      ".shop__texts02",
      {
        autoAlpha: 1,
      },
      "<"
    )
    .to(".shop__img02", {
      autoAlpha: 1,
      duration: 1,
    })
    .to(".shop__img02", {
      autoAlpha: 0,
      duration: 1,
    })
    .to(".shop__img03", {
      autoAlpha: 1,
      duration: 1,
    })
    .to(".shop__img03", {
      autoAlpha: 0,
      duration: 1,
    })
    .to(".shop__img04", {
      autoAlpha: 1,
      duration: 1,
    });

  // gallery-----------------

  gsap.to(".back-black", {
    opacity: 1,
    clipPath: "inset(0% 0% 0% 0%)",
    scrollTrigger: {
      trigger: ".gallery",
      start: "top top+=200",
      end: "top top+=50",
      scrub: 0.4,
    },
  });
});
