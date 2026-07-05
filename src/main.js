import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { SplitText } from "gsap/SplitText";
import { CustomEase } from "gsap/all";
import Lenis from 'lenis';

gsap.registerPlugin(CustomEase, SplitText, ScrollTrigger);

const lenis = new Lenis();
lenis.on("scroll", ScrollTrigger.update);
gsap.ticker.add((time) => lenis.raf(time * 1000));
gsap.ticker.lagSmoothing(0);
CustomEase.create("hop", "0.8, 0, 0.2, 1");
CustomEase.create("hop2", "0.9, 0, 0.1, 1");

const splitText = (selector, type, className, mask = true) => {
  return SplitText.create(selector, {
    type: type,
    [`${type}Class`]: className,
    ...(mask && { mask: type }),
  });
};
const preloaderHeaderSplit = splitText(".preloader-header h1", "chars", "char");
const navSplit = splitText("nav a", "words", "word");
const headerSplit = splitText(".header h1", "chars", "char", false);
const footerSplit = splitText(".hero-footer p", "words", "word");

const preloaderImgInitRotations = [7.5, -2.5, -10, 12.5, -5, 5];
gsap.set(".preloader-img", {
  rotate: (i) => preloaderImgInitRotations[i],
});

const tl = gsap.timeline({ delay: 0.5 });

tl.to(".preloader-img", {
  scale: 1,
  clipPath: "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)",
  duration: 1,
  ease: "hop",
  stagger: 0.2,
});

tl.to(
  ".preloader-header h1 .char",
  {
    y: "0%",
    duration: 1,
    ease: "hop2",
    stagger: { each: 0.125, from: "random" },
  },
  "0.35",
);

tl.to(
  ".preloader-counter p",
  {
    y: "0%",
    duration: 1,
    ease: "hop2",
    onStart: () => {
      const counterEl = document.querySelector(".preloader-counter p");
      const counter = { value: 0 };

      gsap.to(counter, {
        value: 100,
        duration: 2,
        delay: 0.5,
        ease: "power2.inOut",
        onUpdate: () => {
          counterEl.textContent = String(Math.round(counter.value)).padStart(
            3,
            "0",
          );
        },
      });
    },
  },
  "<",
);

tl.to(
  ".preloader-counter p",

  {
    y: "-100%",
    duration: 0.75,
    ease: "hop2",

  },
  3.25,
);

tl.to(
  ".preloader-header h1 .char",
  {
    y: "-100%",
    duration: 0.75,
    ease: "hop2",
    stagger: { each: 0.125, from: "random" },
  },
  3.25,
);

tl.to(
  ".preloader-images .preloader-img",
  {
    scale: 0,
    clipPath: "polygon(20% 20%, 80% 20%, 80% 80%, 20% 80%)",
    duration: 1,
    ease: "hop2",
    stagger: -0.075,
  },
  3.5,
);

tl.to(
  ".preloader",
  {
    clipPath: "polygon(0% 0%, 100% 0%, 100% 0%, 0% 0%)",
    duration: 1.5,
    ease: "hop2",
  },
  4.35,
);

tl.to(
  ".header h1 .char",
  {
    y: "0%",
    duration: 1.5,
    ease: "power4.out",
    stagger: { each: 0.15, from: "random" },
  },
  4.75,
);


tl.to(
  ".header-line",
  {
    width: "100%",
    duration: 1.8,
    ease: "expo.out",
  },
  5.4,
);
tl.to(
  ".header-subtitle",
  {
    opacity: "1",
    duration: 1.3,
    ease: "expo3",
    stagger: "0.2"
  },
  5.4,
);
tl.to(
  "nav a .word",
  {
    y: "0%",
    duration: 1,
    ease: "hop",
    stagger: 0.075,
  },

  4.75,
);

tl.to(
  ".hero-footer p .word",
  {

    y: "0%",
    duration: 1,
    ease: "hop",
    stagger: 0.075,
  },
  4.75,
);

  let screenWidth = window.innerWidth;

// can use .slice(0, 4) instead of if statement to limit the number of cards animated
gsap.utils.toArray(".product-card").forEach((card, index) => {
if (index >= 4) return;
  if (index < 4) {
    tl.to(card, {
      ease: "expo.out",
      translateY: 0,
      rotate: 0,
      delay: index / 8,
      duration: 2,
      stagger: 0.2
    }, 5.1);
  }
});

gsap.utils.toArray(".product-img").forEach((img, index) => {
  if (index < 4) {
    tl.to(img, {
      ease: "expo.out",
      translateX: 0,
      trigger: img,
      rotate: 0,
      scale:1,
      duration: 1.5,
      delay: index / 4,
    }, 5.4);
  }else{
     gsap.to(img, {
      scrollTrigger: {
        trigger: img,
        start: "top 90%",
      },
      duration: 1.5,
      ease: "expo.out",
      translateX: 0,
      rotate: 0,
      scale:1,
      delay: (index%4) /5,
    });
  }

});


