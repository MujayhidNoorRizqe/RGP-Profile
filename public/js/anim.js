/* ==========================================================
   PAGE FADE-IN + REMOVE OVERLAY
========================================================== */
window.addEventListener("load", () => {
    const bodyRoot = document.getElementById("body-root");
    if (bodyRoot) bodyRoot.classList.remove("opacity-0");

    const overlay = document.getElementById("overlay");
    if (overlay) {
        overlay.style.opacity = "0";
        setTimeout(() => overlay.remove(), 500);
    }

    /* INIT AOS (CDN) - Soft Motion */
    if (window.AOS) {
        AOS.init({
            duration: 850,
            once: true,
            offset: 80,
            easing: "ease-out-cubic",
        });
    }
});

/* ==========================================================
   NAVBAR SHRINK
========================================================== */
window.addEventListener("scroll", () => {
    const navbar = document.getElementById("navbar");
    if (!navbar) return;

    if (window.scrollY > 70) {
        navbar.classList.add("navbar-shrink");
    } else {
        navbar.classList.remove("navbar-shrink");
    }
});

/* ==========================================================
   MOBILE MENU
========================================================== */
document.addEventListener("DOMContentLoaded", () => {
    const btn = document.getElementById("menu-btn");
    const menu = document.getElementById("mobile-menu");

    if (btn && menu) {
        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    }
});

/* ==========================================================
   PAGE FADE-OUT → Smooth Navigation
========================================================== */
document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll("a[href]").forEach((link) => {
        const url = link.getAttribute("href");

        if (!url || url.startsWith("#") || url.startsWith("mailto:")) return;

        link.addEventListener("click", (e) => {
            e.preventDefault();
            const root = document.getElementById("body-root");
            if (root) root.style.opacity = "0";
            setTimeout(() => (window.location = url), 280);
        });
    });
});

/* ==========================================================
   MICRO PARALLAX (Super Soft)
========================================================== */
window.addEventListener("scroll", () => {
    document.querySelectorAll("[data-micro-parallax]").forEach((el) => {
        const offset = window.scrollY * 0.025;
        el.style.transform = `translateY(${offset}px)`;
    });
});
