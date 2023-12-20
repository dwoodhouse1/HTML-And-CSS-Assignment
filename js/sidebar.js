// ==========================================================================
// JavaScript Sidebar
// ==========================================================================

const btnHamburger = document.querySelector(".btn-hamburger");
const btnHamburgerSticky = document.querySelector(".btn-sticky");
const stickyHeader = document.querySelector("#sticky");
const sideBar = document.querySelector(".sidebar");
const main = document.querySelector(".main");
const body = document.querySelector("body");
const sideBarActive = document.querySelector(".sidebar-active");
const darkOverlay = document.querySelector(".dark-overlay");

btnHamburger.addEventListener("click", () => { // Default hamburger button on the main header
    darkOverlay.classList.add("dark-overlay-active");
    main.classList.add("sidebar-active");
    btnHamburger.classList.add("hamburger-spin");
    btnHamburger.classList.remove("hamburger-spin-backwards");
    body.style.overflow = "hidden";
})

btnHamburgerSticky.addEventListener("click", () => { // Hamburger button on the sticky header
    darkOverlay.classList.add("dark-overlay-active");
    main.classList.add("sidebar-active");
    stickyHeader.classList.add("sidebar-active");
    btnHamburger.classList.add("hamburger-spin");
    btnHamburger.classList.remove("hamburger-spin-backwards"); // Hello
    body.style.overflow = "hidden";
})

darkOverlay.addEventListener("click", () => { // Click anywhere on the dark overlay next to the sidebar
    darkOverlay.classList.remove("dark-overlay-active");
    main.classList.remove("sidebar-active");
    stickyHeader.classList.remove("sidebar-active");
    btnHamburger.classList.add("hamburger-spin-backwards");
    btnHamburger.classList.remove("hamburger-spin");
    body.style.overflow = "auto";
})