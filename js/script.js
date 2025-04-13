gsap.fromTo(
  '.test__title span',
  {
    opacity: 0,
    x: -10,
    rotate: -10,
  },
  {
    rotate: 0,
    ease: 'back.out(5)',
    x: 0,
    opacity: 1,
    duration: 1,
    stagger: 0.1,
  }
);

gsap.fromTo(
  '.test__img',
  {
    opacity: 0,
    x: -10,
    rotate: -10,
  },
  {
    rotate: 0,
    ease: 'back.out(5)',
    x: 0,
    opacity: 1,
    duration: 1,
    stagger: 0.1,
    delay: 1,
    ease: 'back.out(5)',
  }
);
