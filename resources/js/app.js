// import './bootstrap';
import $ from "jquery";
// import Alpine from "alpinejs";
// window.Alpine = Alpine;
// Alpine.start();
import "@splidejs/splide/css";
import Splide from "@splidejs/splide";

document.addEventListener("DOMContentLoaded", function () {
    document
        .querySelectorAll(".mi-carousel-interval-autoplay")
        .forEach(function (el) {
            new Splide(el, {
                type: "loop",
                autoplay: true,
                interval: 3000, // 3 segundos entre cada slide
                pauseOnHover: false,
                pauseOnFocus: false,
                arrows: false,
                pagination: false,
                drag: true,
                gap: "1rem",
                padding: "3rem",
                perPage: 3, // cantidad por defecto

                breakpoints: {
                    1280: {
                        perPage: 2,
                        padding: "2rem",
                    },
                    768: {
                        perPage: 1,
                        padding: "1rem",
                    },
                },
            }).mount();
        });
});

window.$ = window.jQuery = $;
