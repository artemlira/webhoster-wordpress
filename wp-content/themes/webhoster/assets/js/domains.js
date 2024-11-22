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

// ============================================= Animation =============================================
gsap?.registerPlugin(ScrollTrigger);
// const tl = gsap.timeline();
gsap?.fromTo(
  ".domains-hero-title",
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
  ".domains-hero-title span",
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
  ".domains-hero-text",
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

// ============================================= Accordion =============================================
function toggleAccordion(
  classNameAccorion,
  classNameAccordionControl,
  classNameAccordionContent,
) {
  const accordions = document.querySelectorAll(`.${classNameAccorion}`);

  accordions?.forEach((item) => {
    item?.addEventListener("click", (e) => {
      document.querySelectorAll(`.${classNameAccorion}`).forEach((el) => {
        el?.classList.remove("isActive");
      });
      const self = e?.currentTarget;
      const control = item?.querySelector(`.${classNameAccordionControl}`);
      const content = item?.querySelector(`.${classNameAccordionContent}`);
      if (content.style.maxHeight) {
        document
          ?.querySelectorAll(`.${classNameAccordionContent}`)
          ?.forEach((e) => {
            e.style.maxHeight = null;
            e?.setAttribute("aria-hidden", true);
          });
        document
          ?.querySelectorAll(`.${classNameAccordionControl}`)
          ?.forEach((el) => {
            el?.setAttribute("aria-expanded", false);
          });
      } else {
        document
          ?.querySelectorAll(`.${classNameAccordionContent}`)
          ?.forEach((e) => {
            e.style.maxHeight = null;
            e?.setAttribute("aria-hidden", true);
            content?.setAttribute("aria-hidden", false);
            content.style.maxHeight = `${content.scrollHeight}px`;
          });
        self?.classList.toggle("isActive");
        document
          ?.querySelectorAll(`.${classNameAccordionControl}`)
          ?.forEach((el) => {
            el?.setAttribute("aria-expanded", false);
            control?.setAttribute("aria-expanded", true);
          });
      }
    });
  });
}

toggleAccordion("accordion", "accordion-control", "accordion-content");
