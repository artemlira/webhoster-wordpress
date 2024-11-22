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

new Splide(".second-section-tariffs .splide", {
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

// ============================================= remove class isHovered =============================================
function toggleHoverClasses(className) {
  const cards = document.querySelectorAll(`${className}`);

  cards?.forEach((card) => {
    card?.addEventListener("mouseover", () => {
      cards?.forEach((element) => {
        element?.classList.remove("isHovered");
      });
    });
    card?.addEventListener("mouseout", (event) => {
      target = event?.target;
      cards?.forEach((element) => {
        element?.classList.remove("isHovered");
      });
      if (!target.classList.contains("isHovered")) {
        card?.classList.add("isHovered");
      }
    });
  });
}

toggleHoverClasses(".first-section-tariffs .tariffs-item");
toggleHoverClasses(".second-section-tariffs .tariffs-item");

// ============================================= Accordion =============================================
function toggleAccordion(
  classNameAccorion,
  classNameAccordionControl,
  classNameAccordionContent,
) {
  const accordions = document.querySelectorAll(`${classNameAccorion}`);

  accordions?.forEach((item) => {
    item?.addEventListener("click", (e) => {
      document?.querySelectorAll(`${classNameAccorion}`).forEach((el) => {
        el?.classList.remove("isActive");
      });
      const self = e?.currentTarget;
      const control = item?.querySelector(`${classNameAccordionControl}`);
      const content = item?.querySelector(`${classNameAccordionContent}`);
      if (content.style.maxHeight) {
        document
          .querySelectorAll(`${classNameAccordionContent}`)
          .forEach((e) => {
            e.style.maxHeight = null;
            e.setAttribute("aria-hidden", true);
          });
        document
          .querySelectorAll(`${classNameAccordionControl}`)
          .forEach((el) => {
            el.setAttribute("aria-expanded", false);
          });
      } else {
        document
          .querySelectorAll(`${classNameAccordionContent}`)
          .forEach((e) => {
            e.style.maxHeight = null;
            e.setAttribute("aria-hidden", true);
            content.setAttribute("aria-hidden", false);
            content.style.maxHeight = `${content.scrollHeight}px`;
          });
        self?.classList.toggle("isActive");
        document
          .querySelectorAll(`${classNameAccordionControl}`)
          ?.forEach((el) => {
            el.setAttribute("aria-expanded", false);
            control.setAttribute("aria-expanded", true);
          });
      }
    });
  });
}

toggleAccordion(".accordion", ".accordion-control", ".accordion-content");
toggleAccordion(
  ".accordion-table",
  ".accordion-table-control",
  ".accordion-table-content",
);

// ============================================= animation =============================================
gsap?.registerPlugin(ScrollTrigger);
gsap?.to(".philosophy-image", {
  scrollTrigger: {
    trigger: ".section-with-video__container",
    start: "top top",
    scrub: true,
  },
  scale: 1,
  duration: 3,
});

// ============================================= tabs =============================================
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
    tab[i]?.classList.add(activeClass);
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

// ============================================= play video =============================================

function playVideo(
  classNameVideoWrapper,
  classNameVideoControls,
  classNameVideo,
) {
  const videoContainer = document.querySelector(`${classNameVideoWrapper}`);
  const videoControls = document.querySelector(`${classNameVideoControls}`);
  const video = document.querySelector(`${classNameVideo}`);
  const playButton = document.querySelector("#video-play");

  playButton.addEventListener("click", (event) => {
    const target = event.target;
    console.dir(target);

    if (!target.classList.contains("video-is-playing")) {
      console.log("video is playing");
      video.play();
      videoContainer.classList.add("video-is-playing");
    }
  });

  video.addEventListener("click", (event) => {
    const target = event.target;
    video.pause();
    videoContainer.classList.remove("video-is-playing");
  });
}

playVideo(
  ".section-with-video-content-wrapper",
  ".video-control",
  ".section-with-video-content",
);
