const swiper = new Swiper('.swiper', {
  pagination: {
    el: '.swiper-pagination',
    type: 'bullets',
  },
  loop: true,
  speed: 300,
  autoplay: {
    delay: 3000,
  },
});
