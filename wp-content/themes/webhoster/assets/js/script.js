// ============================================= clearing the input field =============================================
const headerSearchInput = document.querySelector(".header-search-input");

headerSearchInput?.addEventListener("change", () => {
  headerSearchInput.value = "";
});

// ============================================= Mobile burger menu =============================================
const body = document.querySelector("body");
const burger = body.querySelector(".burger");
const menu = body.querySelector(".header-navigation");
const items = body.querySelectorAll(".header-navigation .menu-item");
const header = body.querySelector(".site-header");
const headerSearch = body.querySelector(".header-search-input");

burger?.addEventListener("click", () => {
  burger?.classList.toggle("isActive");
  body?.classList.toggle("locked");
  menu?.classList.toggle("isActive");
  header?.classList.toggle("isActive");
});

items?.forEach((item) => {
  item?.addEventListener("click", () => {
    menu?.classList.remove("isActive");
    burger?.classList.remove("isActive");
    body?.classList.remove("locked");
    header?.classList.remove("isActive");
  });
});

headerSearch?.addEventListener("focus", () => {
  menu?.classList.remove("isActive");
  burger?.classList.remove("isActive");
  body?.classList.remove("locked");
  header?.classList.remove("isActive");
});

// navbar breakpoint
window?.addEventListener("resize", () => {
  if (window.innerWidth > 859.98) {
    menu?.classList.remove("isActive");
    burger?.classList.remove("isActive");
    body?.classList.remove("locked");
    header?.classList.remove("isActive");
  }
});

// ============================================= Animation =============================================
//main page
gsap?.registerPlugin(ScrollTrigger);
const tl = gsap?.timeline();
gsap?.fromTo(
  ".main-hero-title",
  {
    y: 120,
    opacity: 0,
  },
  {
    y: 0,
    opacity: 1,
    duration: 1,
  },
);
gsap?.fromTo(
  ".main-hero-text",
  {
    y: 120,
    opacity: 0,
  },
  {
    y: 0,
    opacity: 1,
    duration: 1,
  },
);
gsap?.fromTo(
  ".main-hero-form",
  {
    y: 120,
    opacity: 0,
  },
  {
    y: 0,
    opacity: 1,
    duration: 1,
  },
);
gsap?.fromTo(
  ".main-hero-img-decor",
  {
    x: -120,
    opacity: 0,
  },
  {
    x: 0,
    opacity: 1,
    duration: 1,
    delay: 0.6,
  },
);
gsap?.fromTo(
  ".main-hero-img-man",
  {
    x: 120,
    opacity: 0,
  },
  {
    x: 0,
    opacity: 1,
    duration: 1,
    delay: 0.6,
  },
);
gsap?.fromTo(
  ".main-hero-img-decor-red",
  {
    x: 120,
    opacity: 0,
  },
  {
    x: 0,
    opacity: 1,
    duration: 1,
    delay: 0.6,
  },
);
gsap?.to(".main-hero-img-decor", {
  scrollTrigger: {
    trigger: ".site-header",
    start: "top top",
    scrub: true,
  },
  filter: "blur(0px)",
  duration: 1,
});
// gsap?.to(".main-hero-img-decor-red", {
//   scrollTrigger: {
//     trigger: ".main-hero",
//     start: "top top",
//     scrub: true,
//   },
//   filter: "blur(0px)",
//   duration: 1,
// });
gsap?.to(".main-philosophy-image", {
  scrollTrigger: {
    trigger: ".main-about-us__container",
    start: "center top",
    scrub: true,
  },
  rotate: "360deg",
  scale: 1,
  duration: 3,
});

gsap?.registerPlugin(ScrollTrigger);
gsap?.fromTo(
  ".domains .domains-hero-title",
  {
    x: -150,
    opacity: 0,
  },
  {
    x: 0,
    opacity: 1,
    duration: 1,
  },
);
gsap?.fromTo(
  ".domains .domains-hero-title span",
  {
    x: -150,
    opacity: 0,
  },
  {
    x: 0,
    opacity: 1,
    duration: 1,
    delay: 0.8,
  },
);
gsap?.fromTo(
  ".domains .domains-hero-text",
  {
    x: 150,
    opacity: 0,
  },
  {
    x: 0,
    opacity: 1,
    duration: 1,
    delay: 1,
  },
);
gsap?.fromTo(
  ".bestellung .domains-hero-title",
  {
    scale: 0,
    opacity: 0,
  },
  {
    scale: 1,
    opacity: 1,
    duration: 1,
  },
);

//webhosting, wordpress pages
gsap?.registerPlugin(ScrollTrigger);
gsap?.to(".webhosting .philosophy-image", {
  scrollTrigger: {
    trigger: ".wordpress-admin-walking",
    start: "top top",
    scrub: true,
  },
  rotate: "360deg",
  scale: 1,
  duration: 3,
});

//webhosting single page
gsap?.registerPlugin(ScrollTrigger);
gsap?.to(".section .philosophy-image", {
  scrollTrigger: {
    trigger: ".wordpress-admin-walking",
    start: "top top",
    scrub: true,
  },
  rotate: "360deg",
  scale: 1,
  duration: 3,
});

//v-server page
gsap?.registerPlugin(ScrollTrigger);
gsap?.to(".v-server .philosophy-image", {
  scrollTrigger: {
    trigger: ".section-with-video__container",
    start: "top top",
    scrub: true,
  },
  scale: 1,
  duration: 3,
});

//seo page
gsap?.registerPlugin(ScrollTrigger);
gsap?.to(".seo.first-section-philosophy .philosophy-image", {
  scrollTrigger: {
    trigger: ".wordpress-advantages",
    start: "top top",
    scrub: true,
  },
  scale: 1,
  duration: 3,
});
gsap?.to(".seo.second-section-philosophy .philosophy-image", {
  scrollTrigger: {
    trigger: ".first-section-philosophy",
    start: "top top",
    scrub: true,
  },
  scale: 1,
  duration: 3,
});

//vmware page
gsap?.registerPlugin(ScrollTrigger);
gsap?.to(".vmware.first-section-philosophy .philosophy-image", {
  scrollTrigger: {
    trigger: ".wordpress-advantages",
    start: "top top",
    scrub: true,
  },
  scale: 1,
  duration: 3,
});
gsap?.to(".vmware.second-section-philosophy .philosophy-image", {
  scrollTrigger: {
    trigger: ".first-section-philosophy",
    start: "top top",
    scrub: true,
  },
  scale: 1,
  duration: 3,
});

// Cloudserver page
gsap?.registerPlugin(ScrollTrigger);
gsap?.to(".cloudserver .philosophy-image", {
  scrollTrigger: {
    trigger: ".subscription",
    start: "top top",
    scrub: true,
  },
  scale: 1,
  duration: 3,
});

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
      item.classList.remove(activeClass);
    });
  }

  function showTabContent(i = 0) {
    if (content[i]) {
      content[i].style.display = display;
    }
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
tabs(
  ".tabs-table-header",
  ".tabs-table-header-item",
  ".tabs-table-content-wrapper",
  "isActive",
);

// ============================================= Accordion =============================================
function toggleAccordion(
  classNameAccorion,
  classNameAccordionControl,
  classNameAccordionContent,
) {
  const accordions = document.querySelectorAll(`${classNameAccorion}`);

  if (accordions.length > 0) {
    const firstAccordion = accordions[0];
    const firstContent = firstAccordion.querySelector(
      `${classNameAccordionContent}`,
    );
    const firstControl = firstAccordion.querySelector(
      `${classNameAccordionControl}`,
    );

    firstAccordion.classList.add("isActive");
    firstContent.style.maxHeight = `${firstContent.scrollHeight}px`;
    firstContent.setAttribute("aria-hidden", false);
    firstControl.setAttribute("aria-expanded", true);
  }

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
  ".accordion-white",
  ".accordion-white-control",
  ".accordion-white-content",
);
toggleAccordion(
  ".accordion-table",
  ".accordion-table-control",
  ".accordion-table-content",
);

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

// ============ removing the bottom line in tabs ===========================
function colorLastRowYellow() {
  // Getting all grid containers on the page
  const gridContainers = document.querySelectorAll(".tabs-table-content-list");

  gridContainers.forEach((container) => {
    // Getting all the elements inside the grid container
    const gridItems = container.querySelectorAll(".tabs-table-content-item");

    // Determining the width of the screen
    const screenWidth = window.innerWidth;

    // Set the number of columns depending on the screen width
    let itemsPerRow = screenWidth > 998 ? 3 : screenWidth > 600 ? 2 : 1;

    // Resetting previous grid styles
    container.style.gridTemplateColumns = `repeat(${itemsPerRow}, 1fr)`;

    // Getting the number of elements
    const totalItems = gridItems.length;

    // Set the default bottom border
    gridItems.forEach((item) => {
      item.style.borderBottom = "1px solid var(--light-grey-color)";
    });

    // If the elements are less than or equal to the number of columns, remove the bottom border from all elements
    if (totalItems <= itemsPerRow) {
      gridItems.forEach((item) => {
        item.style.borderBottom = "none";
      });
    } else {
      // Calculate the index of the beginning of the last row
      const lastRowStartIndex =
        Math.floor((totalItems - 1) / itemsPerRow) * itemsPerRow;

      // Remove the bottom border from the last row
      for (let i = lastRowStartIndex; i < totalItems; i++) {
        gridItems[i].style.borderBottom = "none";
      }
    }
  });
}

// Call the function when the page loads
document.addEventListener("DOMContentLoaded", colorLastRowYellow);

// Called when the window size is changed
window.addEventListener("resize", colorLastRowYellow);

// ============================================= splide slider =============================================
const splideFirst = document.querySelector(".splide");
const splideSecond = document.querySelector(".second-section-tariffs .splide");
if (splideFirst) {
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
}

if (splideSecond) {
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
}

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

  playButton?.addEventListener("click", (event) => {
    const target = event?.target;

    if (!target.classList.contains("video-is-playing")) {
      video?.play();
      videoContainer?.classList.add("video-is-playing");
    }
  });

  video?.addEventListener("click", (event) => {
    const target = event.target;
    video?.pause();
    videoContainer?.classList.remove("video-is-playing");
  });
}

playVideo(
  ".section-with-video-content-wrapper",
  ".video-control",
  ".section-with-video-content",
);

// ================================== custom select =====================================
document.addEventListener("DOMContentLoaded", () => {
  const categories = document.querySelector(".categories");
  const categoriesList = categories?.querySelector(".section-blog-header ul");

  if (!categories || !categoriesList) return;

  const categoriesText = Array.from(categories.childNodes).find(
    (node) => node.nodeType === Node.TEXT_NODE,
  );

  const toggleButton = document.createElement("div");
  toggleButton.textContent = categoriesText
    ? categoriesText.textContent
    : "Kategorien";

  if (categoriesText) {
    categories.replaceChild(toggleButton, categoriesText);
  } else {
    categories.insertBefore(toggleButton, categoriesList);
  }

  toggleButton.addEventListener("click", (event) => {
    event.stopPropagation();
    categoriesList.style.display =
      categoriesList.style.display === "block" ? "none" : "block";
  });

  const listItems = categoriesList.querySelectorAll("li");
  listItems.forEach((item) => {
    item.addEventListener("click", (event) => {
      event.stopPropagation();

      const link = item.querySelector("a");
      if (link) {
        toggleButton.textContent = link.textContent;
        window.location.href = link.href;
      }

      categoriesList.style.display = "none";
    });
  });

  document.addEventListener("click", (event) => {
    if (!categories.contains(event.target)) {
      categoriesList.style.display = "none";
    }
  });

  categoriesList.addEventListener("click", (event) => {
    event.stopPropagation();
  });
});

// ================ scroll =================
function checkHorizontalOverflows() {
  const blocks = document.querySelectorAll(".tabs-header");

  blocks?.forEach((block) => {
    const scrollNotification = document.querySelector(".tabs-scroll");

    if (block.scrollWidth + 50 > window.innerWidth) {
      scrollNotification.style.display = "flex";
    } else {
      scrollNotification.style.display = "none";
    }
  });
}

window.addEventListener("load", checkHorizontalOverflows);
window.addEventListener("resize", checkHorizontalOverflows);
