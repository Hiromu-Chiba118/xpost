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
        y: 50,
        opacity: 0,
      },
      {
        y: 0,
        duration: 1,
        opacity: 1,
        scrollTrigger: {
          trigger: fadeIn,
          start: 'top center',
        },
      }
    );
  });

  const fadeIns03 = document.querySelectorAll('.js-fadeIns03');
  fadeIns03.forEach((fadeIn) => {
    gsap.fromTo(
      fadeIn,
      {
        y: 20,
        opacity: 0,
      },
      {
        y: 0,
        duration: 1,
        delay: 0.5,
        opacity: 1,
        scrollTrigger: {
          trigger: fadeIn,
          start: 'top center',
        },
      }
    );
  });

  // 画像パララックス---------------------------------------------------
  $(document).ready(function () {
    const winWidth = $(window).width();

    const targets1 = document.querySelectorAll('.js-parallax01');
    targets1.forEach((target) => {
      gsap.fromTo(
        target.querySelector('img'),
        {
          yPercent: 0,
        },
        {
          yPercent: -25,
          ease: 'none',
          scrollTrigger: {
            trigger: target,
            start: 'top bottom',
            end: 'bottom top',
            scrub: 0.5,
          },
        }
      );

      if (winWidth < 768) {
        gsap.fromTo(
          target,
          {
            y: 0,
          },
          {
            y: -20,
            ease: 'none',
            scrollTrigger: {
              trigger: target,
              start: 'top bottom',
              end: 'bottom top',
              scrub: 0.5,
            },
          }
        );
      }
    });

    const targets2 = document.querySelectorAll('.js-parallax02');
    targets2.forEach((target) => {
      gsap.fromTo(
        target.querySelector('img'),
        {
          yPercent: 0,
        },
        {
          yPercent: -20,
          ease: 'none',
          scrollTrigger: {
            trigger: target,
            start: 'top bottom',
            end: 'bottom top',
            scrub: 0.2,
          },
        }
      );

      if (winWidth < 768) {
        gsap.fromTo(
          target,
          {
            y: 0,
          },
          {
            y: -40,
            ease: 'none',
            scrollTrigger: {
              trigger: target,
              start: 'top bottom',
              end: 'bottom top',
              scrub: 0.2,
            },
          }
        );
      }
    });

    const targets3 = document.querySelectorAll('.js-parallax03');
    targets3.forEach((target) => {
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

      if (winWidth < 768) {
        gsap.fromTo(
          target,
          {
            y: 0,
          },
          {
            y: -30,
            ease: 'none',
            scrollTrigger: {
              trigger: target,
              start: 'top bottom',
              end: 'bottom top',
              scrub: 0.2,
            },
          }
        );
      }
    });
  });

  // 画像をデフォルトでは1.2倍で表示させビューポートに入ると1倍に縮させる（一度だけ）
  gsap.set('.js-expansion', { scale: 1.2 });

  // ビューポートに入ったら1倍に縮小するアニメーションを設定
  let images = document.querySelectorAll('.js-expansion');
  images.forEach((image) => {
    gsap.fromTo(
      image,
      {
        scale: 1.2,
      },
      {
        scale: 1,
        duration: 1.6, // アニメーションの持続時間
        ease: Power3.easeOut, // イージングを設定
        scrollTrigger: {
          trigger: image,
          start: 'top 80%',
          once: true, // 一度だけ実行する
        },
      }
    );
  });

  // ScrollTriggerのリフレッシュ頻度を減らす
  ScrollTrigger.config({
    autoRefreshEvents: 'visibilitychange,DOMContentLoaded,load',
  });
});

// 動画---------------------------------------------------
document.addEventListener('DOMContentLoaded', function () {
  const videos = document.querySelectorAll('video');

  function updateVideoSource(video, baseSrc) {
    const suffix = window.innerWidth <= 768 ? '_sp' : '_pc';
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
    video.play(); // オートプレイで再生開始
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


// document.addEventListener("DOMContentLoaded", function() {
//   const videos = document.querySelectorAll('video');
//   const config = {
//       rootMargin: '0px 0px',
//       threshold: 0.5
//   };

//   let observer = new IntersectionObserver(function(entries, self) {
//       entries.forEach(entry => {
//           if (entry.isIntersecting) {
//               // 動画をロードする
//               entry.target.load();
//               // 一度ロードしたらオブザーバーから除外する
//               self.unobserve(entry.target);
//           }
//       });
//   }, config);

//   videos.forEach(video => {
//       observer.observe(video);
//   });
// });

// document.addEventListener('DOMContentLoaded', (event) => {
//   const video = document.getElementById('myVideo');
//   const sourceURL = "path/to/video.mp4";
//   let isSourceSet = false; // ソースが設定されたかどうかを追跡するフラグ

//   const observer = new IntersectionObserver((entries) => {
//     entries.forEach(entry => {
//       if (entry.isIntersecting && !isSourceSet) {
//         // 動画が表示領域に入ったときに一度だけソースを設定して再生を開始
//         video.src = sourceURL;
//         video.load();
//         video.play();
//         isSourceSet = true; // ソースが設定されたことを記録
//       }
//     });
//   }, { threshold: 0.1 }); // 閾値を0.1に設定して、10%が表示されれば再生開始

//   observer.observe(video);
// });
