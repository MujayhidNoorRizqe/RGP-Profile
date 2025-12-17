/* ==========================================================
   BODY FADE-IN FIX
========================================================== */
document.addEventListener("DOMContentLoaded", () => {
    const root = document.getElementById("body-root");
    if (root) root.style.opacity = "1";
});

/* ==========================================================
   PAGE OVERLAY REMOVE
========================================================== */
window.addEventListener("load", () => {
    const overlay = document.getElementById("overlay");
    if (overlay) {
        overlay.style.opacity = "0";
        setTimeout(() => overlay.remove(), 500);
    }

    if (window.AOS) {
        AOS.init({ duration: 850, once: true });
    }

    document
        .querySelectorAll(".fade-soft")
        .forEach((el) => el.classList.add("fade-show"));
});

/* ==========================================================
   NAVBAR SHRINK WORKING 100%
========================================================== */
window.addEventListener("scroll", () => {
    const navbar = document.getElementById("navbar");
    if (!navbar) return;

    if (window.scrollY > 20) navbar.classList.add("navbar-shrink");
    else navbar.classList.remove("navbar-shrink");
});

/* ==========================================================
   MOBILE MENU
========================================================== */
document.addEventListener("DOMContentLoaded", () => {
    const btn = document.getElementById("menu-btn");
    const menu = document.getElementById("mobile-menu");
    if (!btn || !menu) return;

    btn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
    });
});
