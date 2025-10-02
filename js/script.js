jQuery(function ($) {
  // 決まり文句
  gsap.fromTo(
    // 動かす対象
    '.news__title',
    {
      x: -300,
    },
    {
      x: 300,
      duration: 2,
      scrollTrigger: {
        trigger: '.news__title',
        start: 'top 80%',
        scrub: true,
      },
    }
  );
});

gsap.fromTo(
  '.gallery__item',
  {
    opacity: 0,
  },
  {
    opacity: 1,
    stagger: 0.1,
    scrollTrigger: {
      trigger: '.gallery__item',
      start: 'top 80%',
    },
  }
);

gsap.fromTo(
  '.text span',
  {
    yPercent: 100,
  },
  {
    yPercent: 0,
    duration: 2,
    stagger: 0.1,
    ease: 'power4.inOut',
    scrollTrigger: {
      trigger: '.text',
      start: 'top 80%',
    },
  }
);

gsap.fromTo(
  '.test-img',
  {
    clipPath: 'inset(20% 20% 20% 20%)',
  },
  {
    clipPath: 'inset(0% 0% 0% 0%)',
    scrollTrigger: {
      trigger: '.test-img',
      start: 'top 80%',
      end: 'bottom center',
      scrub: 2,
    },
  }
);
