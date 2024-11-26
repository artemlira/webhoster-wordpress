// ============================================= animations gsap =============================================
// gsap?.registerPlugin(ScrollTrigger);
// const tl = gsap?.timeline();
// gsap?.fromTo(
//   ".main-hero-title",
//   {
//     y: 120,
//     opacity: 0,
//   },
//   {
//     y: 0,
//     opacity: 1,
//     duration: 1,
//   },
// );
// gsap?.fromTo(
//   ".main-hero-text",
//   {
//     y: 120,
//     opacity: 0,
//   },
//   {
//     y: 0,
//     opacity: 1,
//     duration: 1,
//   },
// );
// gsap?.fromTo(
//   ".main-hero-form",
//   {
//     y: 120,
//     opacity: 0,
//   },
//   {
//     y: 0,
//     opacity: 1,
//     duration: 1,
//   },
// );
// gsap?.fromTo(
//   ".main-hero-img-decor",
//   {
//     x: -120,
//     opacity: 0,
//   },
//   {
//     x: 0,
//     opacity: 1,
//     duration: 1,
//     delay: 0.6,
//   },
// );
// gsap?.fromTo(
//   ".main-hero-img-man",
//   {
//     x: 120,
//     opacity: 0,
//   },
//   {
//     x: 0,
//     opacity: 1,
//     duration: 1,
//     delay: 0.6,
//   },
// );
// gsap?.fromTo(
//   ".main-hero-img-decor-red",
//   {
//     x: 120,
//     opacity: 0,
//   },
//   {
//     x: 0,
//     opacity: 1,
//     duration: 1,
//     delay: 0.6,
//   },
// );
//
// gsap?.to(".main-hero-img-decor", {
//   scrollTrigger: {
//     trigger: ".site-header",
//     start: "top top",
//     scrub: true,
//   },
//   filter: "blur(0px)",
//   duration: 1,
// });
// gsap?.to(".main-hero-img-decor-red", {
//   scrollTrigger: {
//     trigger: ".main-hero",
//     start: "top top",
//     scrub: true,
//   },
//   filter: "blur(0px)",
//   duration: 1,
// });
// gsap?.to(".main-philosophy-image", {
//   scrollTrigger: {
//     trigger: ".main-about-us__container",
//     start: "center top",
//     scrub: true,
//   },
//   rotate: "360deg",
//   scale: 1,
//   duration: 3,
// });

// ============================================= splide slider =============================================
new Splide(".splide", {
  type: "loop",
  perPage: 1,
  autoplay: true,
  gap: 20,
  mediaQuery: "min",
  pagination: true,
  arrows: false,
  padding: 10,
  breakpoints: {
    768: {
      destroy: true,
    },
  },
})?.mount();

// ======================================= tabs =============================================
function tabs(
  headerSelector,
  tabSelector,
  contentSelector,
  activeClass,
  display = "flex",
) {
  const header = document.querySelector(headerSelector);
  const tab = document.querySelectorAll(tabSelector);
  const content = document.querySelectorAll(contentSelector);

  function hideTabContent() {
    content?.forEach((item) => {
      item.style.display = "none";
    });
    tab?.forEach((item) => {
      item?.classList.remove(activeClass);
    });
  }

  function showTabContent(i = 0) {
    content[i].style.display = display;
    tab[i].classList.add(activeClass);
  }

  hideTabContent();
  showTabContent();
  header?.addEventListener("click", (e) => {
    const { target } = e;
    if (
      target?.classList.contains(tabSelector.replace(/\./, "")) ||
      target?.parentNode.classList.contains(tabSelector.replace(/\./, ""))
    ) {
      tab?.forEach((item, i) => {
        if (target === item || target.parentNode === item) {
          hideTabContent();
          showTabContent(i);
        }
      });
    }
  });
}

tabs(".tabs-header", ".tabs-header-item", ".tabs-content-item", "isActive");

// ============================================= remove class isHovered =============================================
const cards = document.querySelectorAll(".tariffs-item");

function removeAllClasses(className, elements) {
  elements?.forEach((element) => {
    element?.classList.remove(`${className}`);
  });
}

cards?.forEach((card) => {
  card?.addEventListener("mouseover", () => {
    removeAllClasses("isHovered", cards);
  });
  card?.addEventListener("mouseout", (event) => {
    target = event.target;
    removeAllClasses("isHovered", cards);
    if (!target.classList.contains("isHovered")) {
      card?.classList.add("isHovered");
    }
  });
});
