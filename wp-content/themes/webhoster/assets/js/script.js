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

// navbar breakpoint
window?.addEventListener("resize", () => {
  if (window.innerWidth > 859.98) {
    menu?.classList.remove("isActive");
    burger?.classList.remove("isActive");
    body?.classList.remove("locked");
    header?.classList.remove("isActive");
  }
});

// ========
// let search_content = document.querySelector("#subscription-input").value;
// const button = document.querySelector(".subscription-button");
//
// function search_generate_url(type) {
//   let url =
//     "https://webhoster.cloud/order.php?spage=domain&action=register&a=add&query=" +
//     type;
//   console.log("new address", url);
//   // location.assign(url);
// }
//
// button.addEventListener("click", search_generate_url(search_content));
