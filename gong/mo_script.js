
window.onbeforeunload = function() {
  window.scrollTo(0, 0);
}


gsap.registerPlugin(ScrollTrigger);
  let speed = 100;

  /*  SCENE 1 */
  let scene1 = gsap.timeline();
  ScrollTrigger.create({
      animation: scene1,
      trigger: ".scrollElement",
      start: "top top",
      end: "900 top",
      scrub: 1,
  });

  // hills animation 
  
  
  scene1.to("#background", { y: -4 * speed}, 0)

  //animate text
  scene1.to("#banner-text", {y: -2 * speed}, 0)

  // apart scene

  let apart = gsap.timeline();
  ScrollTrigger.create({
      animation: apart,
      trigger: ".scrollElement",
      start: "top top",
      end: "1200 top",
      scrub: 1,
  });

  apart.to("#apart", { y: -2.8 * speed}, 0)


  /*  SCENE2 - COLUD */
  let scene2 = gsap.timeline();
  ScrollTrigger.create({
      animation: scene2,
      trigger: ".scrollElement",
      start: "top top",
      end: "6000 top",
      scrub: 1,
  });

  scene2.to("#cloud", {x: -20 * speed, y: -2 * speed}, 0)

  /*  SCENE 3 */

  let scene3 = gsap.timeline();
  ScrollTrigger.create({
      animation: scene3,
      trigger: ".scrollElement",
      start: "4500 top",
      end: "6000 top",
      scrub: 1,
      onLeave: ONLEAVE,
      onEnterBack: ONENTERBACK
  });
  
  scene3.to("#cloud", {scale: 2 , opacity : 0}, 0)




  
