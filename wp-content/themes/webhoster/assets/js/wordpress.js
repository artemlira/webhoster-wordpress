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

// ============================================= animation =============================================
gsap?.registerPlugin(ScrollTrigger);
gsap?.to(".philosophy-image", {
  scrollTrigger: {
    trigger: ".wordpress-admin-walking",
    start: "top top",
    scrub: true,
  },
  rotate: "360deg",
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

tabs(
  ".tabs-table-header",
  ".tabs-table-header-item",
  ".tabs-table-content-wrapper",
  "isActive",
);

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
