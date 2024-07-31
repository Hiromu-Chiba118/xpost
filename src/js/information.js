$(function () {
  // アニメーション====================
  window.addEventListener("scroll", function () {
    // ScrollTrigger.refresh(); // コメントアウトされたコードはそのまま
  });

  //共通の動き------------
  // フェードイン
  const fadeIns01 = document.querySelectorAll(".js-fadeIns01");
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
          start: "top center",
        },
      }
    );
  });
});
