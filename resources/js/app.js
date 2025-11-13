// resources/js/app.js
import "./bootstrap";
import "../css/app.css"; // pastikan CSS juga dimuat lewat JS agar Vite refresh konsisten
import AOS from "aos";
import "aos/dist/aos.css";

// Inisialisasi AOS (animasi scroll)
document.addEventListener("DOMContentLoaded", () => {
    AOS.init({
        duration: 900, // durasi animasi (ms)
        once: true, // animasi hanya dijalankan sekali
        easing: "ease-out-cubic",
        offset: 80, // jarak sebelum elemen mulai animasi
    });

    console.log(
        "%cAOS Initialized & JS Active",
        "color: #00a2e9; font-weight: bold;"
    );
});
