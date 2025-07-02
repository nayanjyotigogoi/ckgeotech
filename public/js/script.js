document.addEventListener("DOMContentLoaded", function () {
    "use strict";

    // Back to top button
    const backToTop = document.getElementById("back-to-top");
    if (backToTop) {
        window.addEventListener("scroll", function () {
            if (window.scrollY > 200) {
                backToTop.style.display = "block";
            } else {
                backToTop.style.display = "none";
            }
        });

        backToTop.addEventListener("click", function (event) {
            event.preventDefault();
            window.scrollTo({ top: 0, behavior: "smooth" });
        });
    }

    // Sticky Navbar
    const navBar = document.getElementById("nav-bar");
    if (navBar) {
        window.addEventListener("scroll", function () {
            if (window.scrollY > 90) {
                navBar.classList.add("nav-sticky");
                document.querySelectorAll(".carousel, .page-header").forEach(el => el.style.marginTop = "73px");
            } else {
                navBar.classList.remove("nav-sticky");
                document.querySelectorAll(".carousel, .page-header").forEach(el => el.style.marginTop = "0");
            }
        });
    }

    // Dropdown on mouse hover
    const navbar = document.getElementById("navbar");
    if (navbar) {
        function toggleNavbarMethod() {
            if (window.innerWidth > 992) {
                navbar.querySelectorAll(".dropdown").forEach(dropdown => {
                    dropdown.addEventListener("mouseover", function () {
                        this.querySelector(".dropdown-toggle").click();
                    });

                    dropdown.addEventListener("mouseout", function () {
                        this.querySelector(".dropdown-toggle").click();
                        this.querySelector(".dropdown-toggle").blur();
                    });
                });
            }
        }
        toggleNavbarMethod();
        window.addEventListener("resize", toggleNavbarMethod);
    }

    // Counter Up
    const counterUpElements = document.querySelectorAll('[data-toggle="counter-up"]');
    if (counterUpElements.length > 0) {
        counterUpElements.forEach(el => {
            let count = 0;
            let target = parseInt(el.innerText, 10);
            let duration = 2000;
            let step = Math.ceil(target / (duration / 10));

            function updateCounter() {
                count += step;
                if (count >= target) {
                    el.innerText = target;
                } else {
                    el.innerText = count;
                    requestAnimationFrame(updateCounter);
                }
            }
            updateCounter();
        });
    }

    // Modal Video
    const videoModal = document.getElementById("videoModal");
    if (videoModal) {
        let videoSrc = "";

        document.querySelectorAll(".btn-play").forEach(button => {
            button.addEventListener("click", function () {
                videoSrc = this.getAttribute("data-src");
            });
        });

        videoModal.addEventListener("shown.bs.modal", function () {
            document.getElementById("video").setAttribute("src", videoSrc + "?autoplay=1&modestbranding=1&showinfo=0");
        });

        videoModal.addEventListener("hide.bs.modal", function () {
            document.getElementById("video").setAttribute("src", "");
        });
    }

    // Testimonial Slider (Requires Slick)
    const testimonialSlider = document.getElementById("testimonial-slider");
    const testimonialSliderNav = document.getElementById("testimonial-slider-nav");

    if (testimonialSlider && testimonialSliderNav) {
        $(testimonialSlider).slick({
            infinite: true,
            autoplay: true,
            arrows: false,
            dots: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            asNavFor: "#testimonial-slider-nav"
        });

        $(testimonialSliderNav).slick({
            arrows: false,
            dots: false,
            focusOnSelect: true,
            centerMode: true,
            centerPadding: "22px",
            slidesToShow: 3,
            asNavFor: "#testimonial-slider"
        });

        document.querySelector(".testimonial .slider-nav").style.cssText = "position: relative; height: 160px;";
    }

    // Blogs Carousel (Requires OwlCarousel)
    const relatedSlider = document.getElementById("related-slider");
    if (relatedSlider) {
        $(relatedSlider).owlCarousel({
            autoplay: true,
            dots: false,
            loop: true,
            nav: true,
            navText: [
                '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                '<i class="fa fa-angle-right" aria-hidden="true"></i>'
            ],
            responsive: {
                0: { items: 1 },
                576: { items: 1 },
                768: { items: 2 }
            }
        });
    }

    // Portfolio isotope and filter (Requires Isotope.js)
    const portfolioContainer = document.getElementById("portfolio-container");
    if (portfolioContainer) {
        const portfolioIsotope = new Isotope(portfolioContainer, {
            itemSelector: ".portfolio-item",
            layoutMode: "fitRows"
        });

        document.querySelectorAll("#portfolio-flters li").forEach(filter => {
            filter.addEventListener("click", function () {
                document.querySelectorAll("#portfolio-flters li").forEach(el => el.classList.remove("filter-active"));
                this.classList.add("filter-active");

                portfolioIsotope.arrange({ filter: this.getAttribute("data-filter") });
            });
        });
    }

});
