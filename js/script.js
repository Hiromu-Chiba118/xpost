  gsap.fromTo(
    ".section__title span",
    {
        filter:"blur(15px)",
        opacity:0,
    },
    {
        filter:"blur(0px)",
        stagger:{
            each:0.08,
            from:"random",
        },
        opacity:1,
        duration:0.9,
        delay:2,
    }
  )