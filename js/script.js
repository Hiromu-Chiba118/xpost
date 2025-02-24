// パララックス（大）
let parallaxes = document.querySelectorAll('.js-parallax-large');
parallaxes.forEach((parallax) => {
  gsap.fromTo(
    parallax,
    {
      yPercent: 100,
    },
    {
      yPercent: -100,
      scrollTrigger: {
        trigger: parallax,
        start: 'top bottom',
        end: 'bottom top',
        scrub: 1,
      },
    }
  );
});
let parallaxes2 = document.querySelectorAll('.js-parallax-large2');
parallaxes2.forEach((parallax) => {
  gsap.fromTo(
    parallax,
    {
      yPercent: 80,
    },
    {
      yPercent: -80,
      scrollTrigger: {
        trigger: parallax,
        start: 'top bottom',
        end: 'bottom top',
        scrub: 0.8,
        
      },
    }
  );
});
let parallaxes3 = document.querySelectorAll('.js-parallax-small');
parallaxes3.forEach((parallax) => {
  gsap.fromTo(
    parallax,
    {
      yPercent: 70,
    },
    {
      yPercent: -70,
      scrollTrigger: {
        trigger: parallax,
        start: 'top bottom',
        end: 'bottom top',
        scrub: 0.6,
        
      },
    }
  );
});
let parallaxes4 = document.querySelectorAll('.js-parallax-normal');
parallaxes4.forEach((parallax) => {
  gsap.fromTo(
    parallax,
    {
      yPercent: 40,
    },
    {
      yPercent: -40,
      scrollTrigger: {
        trigger: parallax,
        start: 'top bottom',
        end: 'bottom top',
        scrub: 0.8,
        
      },
    }
  );
});


// demo
 let animals = document.querySelectorAll('.js-animal');
 animals.forEach((animal) => {
   gsap.fromTo(
     animal.querySelector('img'),
     {
       y: -150,
     },
     {
       y: 0,
       scrollTrigger: {
         trigger: animal,
         start: 'top bottom',
         end:"bottom top",
         scrub:2,
       },
     }
   );
 });













// キリンを動かす
gsap.fromTo(
  // ターゲット
  '.test__img img',
  // 最初の状態
  {
    y: -50,
  },
  // 最後の状態
  {
    y: 0,
    scrollTrigger: {
      trigger: '.test__img img',
      //    　要素の　　画面の
      start: 'top bottom',
      end:"bottom top ",

      // スクロール動機
      scrub:1,
    },
  }
);