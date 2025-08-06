// GSAPアニメーション
const op = gsap.timeline();
op.to('.loader__ship', { xPercent: 200, duration: 1.2, ease: 'power3.inOut' }, '+=0.3').to('.loader__logo', { opacity: 1, ease: 'power3.inOut', duration: 0.5 }, '-=0.4').to('.loader__ship', { opacity: 0, ease: 'power3.inOut', duration: 0.5 }, '<').to('.loader__logo', { x: 10, opacity: 0, ease: 'power3.inOut', duration: 0.6 }, '+=0.4').to('.loader', { opacity: 0, duration: 0.5 }).to('.loader', { display: 'none' }).fromTo('.mv__texts', { opacity: 0, filter: 'blur(10px)' }, { opacity: 1, filter: 'blur(0px)' }, '<').fromTo('.header, .mv__pickup , .fixed-button', { autoAlpha: 0 }, { autoAlpha: 1 }, '+=0.2');

// なんとなく要素を変数に入れる
const newsButton2 = document.querySelector('.news__button2');

// スマホ時に処理しないようにレスポンシブ対応
let mm = gsap.matchMedia();
mm.add('(min-width: 768px)', () => {
  // ホバーした時
  newsButton2.addEventListener('mouseenter', function () {
    // 初期値に戻す
    gsap.set(this, { '--x': '-100%' });
    // 動かす
    gsap.to(this, {
      '--x': '0%',
      duration: 0.3,
      ease: 'power3.inOut',
    });
  });

  // ホバー外した時
  newsButton2.addEventListener('mouseleave', function () {
    // 動かす
    gsap.to(this, {
      '--x': '100%',
      duration: 0.3,
      ease: 'power3.inOut',
    });
  });
});
