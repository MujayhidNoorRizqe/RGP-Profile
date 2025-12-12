/* ==========================================================
   PAGE FADE-IN + REMOVE OVERLAY
========================================================== */
window.addEventListener("load", () => {
    const root = document.getElementById("body-root");
    if (root) root.classList.add("fade-show");

    const overlay = document.getElementById("overlay");
    if (overlay) {
        overlay.style.opacity = "0";
        setTimeout(() => overlay.remove(), 550);
    }

    /* INIT AOS */
    if (window.AOS) {
        AOS.init({
            duration: 850,
            once: true,
            offset: 80,
            easing: "ease-out-cubic",
        });
    }

    /* AUTO SHOW fade-soft */
    document.querySelectorAll(".fade-soft").forEach((el) => {
        el.classList.add("fade-show");
    });
});

/* ==========================================================
   NAVBAR SHRINK
========================================================== */
window.addEventListener("scroll", () => {
    const navbar = document.getElementById("navbar");
    if (!navbar) return;

    if (window.scrollY > 70) navbar.classList.add("navbar-shrink");
    else navbar.classList.remove("navbar-shrink");
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
   PAGE FADE-OUT (HANYA INTERNAL LINK)
========================================================== */
document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll("a[href]").forEach((link) => {
        const url = link.getAttribute("href");

        if (!url || url.startsWith("#") || url.startsWith("mailto:")) return;

        /* SKIP external link */
        if (
            link.target === "_blank" ||
            url.startsWith("https://maps") ||
            url.includes("instagram.com") ||
            url.includes("facebook.com") ||
            url.includes("youtube.com") ||
            url.includes("wa.me") ||
            url.startsWith("http")
        ) {
            return;
        }

        /* INTERNAL link fade-out */
        link.addEventListener("click", (e) => {
            const root = document.getElementById("body-root");
            if (!root) return;

            if (e.ctrlKey || e.metaKey) return;

            e.preventDefault();
            root.style.opacity = "0";

            setTimeout(() => {
                window.location = url;
            }, 250);
        });
    });
});

/* ==========================================================
   MICRO PARALLAX
========================================================== */
window.addEventListener("scroll", () => {
    document.querySelectorAll("[data-micro-parallax]").forEach((el) => {
        const offset = window.scrollY * 0.025;
        el.style.transform = `translateY(${offset}px)`;
    });
});
