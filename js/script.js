

// GSAPアニメーション
const op = gsap.timeline();
op.to(".loader__ship", { xPercent: 200, duration: 1.2, ease: "power3.inOut" },"+=0.3")
  .to(".loader__logo", { opacity: 1, ease: "power3.inOut", duration: 0.5 }, "-=0.4")
  .to(".loader__ship", { opacity: 0, ease: "power3.inOut", duration: 0.5 }, "<")
  .to(".loader__logo", { x: 10, opacity: 0, ease: "power3.inOut", duration: 0.6 }, "+=0.4")
  .to(".loader", { opacity: 0, duration: 0.5 })
  .to(".loader", { display: "none" })
  .fromTo(".mv__texts", { opacity: 0, filter: "blur(10px)" }, { opacity: 1, filter: "blur(0px)" }, "<")
  .fromTo(".header, .mv__pickup , .fixed-button", { autoAlpha: 0 }, { autoAlpha: 1 }, "+=0.2");