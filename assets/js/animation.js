let tl = gsap.timeline({
    scrollTrigger: {
        trigger: '.animateDiv'
    }
});

tl.from(".animateDiv .sec2_text h1", { y: 200, opacity: 0, duration: 1.5})
  .from(".animateDiv .sec2_text h3", { x: -200, opacity: 0, duration: 1.5}, "-=1")
  .from(".animateDiv .sec2_text a", { z: 200, opacity: 0, duration: 1.5}, "-=1")

let t2 = gsap.timeline({
    scrollTrigger: {
        trigger: '#land'
    }
});

// from("#land",    { y: 0, opacity: 0, duration: 1})
t2.from("#land h1", { y: 200, opacity: 0, duration: 0.8})
  .from("#land h3", { x: 200, opacity: 0, duration: 1.5}, "-=1")
  .from("#land p",  { x: 200, opacity: 0, duration: 1.5}, "-=2")
  .from("#land a",  { y: 200, opacity: 0, duration: 1.5}, "-=2")
  .from("#land img",{ y: 50, opacity: 0, duration: 1.5}, "-=2")
