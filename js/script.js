const op = gsap.timeline();
op.fromTo(
  '.loader__text span',
  {
    yPercent: 0,
  },
  {
    yPercent: -100,
    duration: 1,
  },
  '+=0.4'
)
  .fromTo(
    '.loader',
    {
      clipPath: 'inset(0% 0% 0% 0% )',
    },
    {
      clipPath: 'inset(1% 1% 1% 1% round 15px)',
      duration: 1.2,
    },
    '+=0.2'
  )
  .fromTo(
    '.loader',
    {
      yPercent: 0,
    },
    {
      yPercent: -100,
      duration: 0.8,
    },
    '+=0.5'
  );
