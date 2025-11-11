/**
 * custom.js – WordPress no-conflict mode
 * -------------------------------------------------
 * WordPress loads jQuery in noConflict() mode.
 * $ is NOT available globally → wrap everything in jQuery( function( $ ) { … } )
 */

jQuery( function( $ ) {

    // -------------------------------------------------
    // 1. Tilt js animation
    // -------------------------------------------------
    $(".tilt-effect").tilt({
        maxTilt: 4,
        easing: "cubic-bezier(.03,.98,.52,.99)",
        speed: 500,
        transition: true,
    });

    // -------------------------------------------------
    // 2. Client Slider (Owl Carousel)
    // -------------------------------------------------
    $(".owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        items: 1,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        autoHeight: false,
        autoHeightClass: "owl-height",
    });

    
    // -------------------------------------------------
    // 4. Navbar sticky + active section highlight
    // -------------------------------------------------
    const navbar = document.querySelector("nav");
    const sections = document.querySelectorAll("section");
    const navLi = document.querySelectorAll(".mobile-nav ul li");

    window.addEventListener("scroll", function () {
        // Sticky
        if (window.pageYOffset > 80) {
            navbar.classList.add("stickyadd");
        } else {
            navbar.classList.remove("stickyadd");
        }

        // Active menu
        let current = "";
        sections.forEach((section) => {
            const sectionTop = section.offsetTop;
            if (window.pageYOffset >= sectionTop - 60) {
                current = section.getAttribute("id");
            }
        });

        navLi.forEach((li) => {
            li.classList.remove("active");
            if (li.classList.contains(current)) {
                li.classList.add("active");
            }
        });
    });

    // -------------------------------------------------
    // 5. Mobile menu toggle
    // -------------------------------------------------
    const btn = document.querySelector("button.mobile-menu-button");
    const menu = document.querySelector(".mobile-menu");

    if (btn && menu) {
        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    }

    // -------------------------------------------------
    // 6. Portfolio isotope filter
    // -------------------------------------------------
    // $(window).on("load", function () {
    //     const $container = $(".work-filter");
    //     const $filter    = $("#menu-filter");

    //     if ($container.length && $.fn.isotope) {
    //         $container.isotope({
    //             filter: "*",
    //             layoutMode: "masonry",
    //             animationOptions: {
    //                 duration: 750,
    //                 easing: "linear",
    //             },
    //         });

    //         $filter.find("a").on("click", function (e) {
    //             e.preventDefault();
    //             const selector = $(this).attr("data-filter");
    //             $filter.find("a").removeClass("active");
    //             $(this).addClass("active");

    //             $container.isotope({
    //                 filter: selector,
    //                 animationOptions: {
    //                     duration: 750,
    //                     easing: "linear",
    //                     queue: false,
    //                 },
    //             });
    //         });
    //     }
    // });

    // -------------------------------------------------
    // 7. Custom mouse cursor
    // -------------------------------------------------
    const myCursor = $(".mouse-cursor");

    if (myCursor.length) {
        const e = document.querySelector(".cursor-inner"),
              t = document.querySelector(".cursor-outer");
        let n, i = 0, o = false;

        window.onmousemove = function (s) {
            if (!o) {
                t.style.transform = `translate(${s.clientX}px, ${s.clientY}px)`;
            }
            e.style.transform = `translate(${s.clientX}px, ${s.clientY}px)`;
            n = s.clientY;
            i = s.clientX;
        };

        $("body").on("mouseenter", "a, .cursor-pointer", function () {
            e.classList.add("cursor-hover");
            t.classList.add("cursor-hover");
        }).on("mouseleave", "a, .cursor-pointer", function () {
            if (!$(this).is("a") || !$(this).closest(".cursor-pointer").length) {
                e.classList.remove("cursor-hover");
                t.classList.remove("cursor-hover");
            }
        });

        e.style.visibility = "visible";
        t.style.visibility = "visible";
    }

    jQuery(document).ready(function($) {

        // -------------------------------------------------
        // 3. Portfolio Hover Title (শুধু টাইটেল, ক্যাটাগরি রিমুভ)
        // -------------------------------------------------
        $(".main-img-box").each(function () {
            $(this)
                .on("mouseenter", function () {
                    if ($(this).data("title")) {
                        $(".dizme_tm_portfolio_titles").html(
                            $(this).data("title")
                        );
                        $(".dizme_tm_portfolio_titles").addClass("visible");
                    }

                    $(document).on("mousemove", function (e) {
                        $(".dizme_tm_portfolio_titles").css({
                            left: e.clientX - 10,
                            top: e.clientY + 25,
                        });
                    });
                })
                .on("mouseleave", function () {
                    $(".dizme_tm_portfolio_titles").removeClass("visible");
                    $(document).off("mousemove");
                });
        });

        // -------------------------------------------------
        // 8. Magnific Popup (শুধু যেখানে full_image আছে)
        // -------------------------------------------------
        $('.img-zoom[href$=".jpg"], .img-zoom[href$=".png"], .img-zoom[href$=".gif"], .img-zoom[href$=".webp"]').magnificPopup({
            type: 'image',
            closeOnContentClick: false,
            closeBtnInside: false,
            mainClass: 'mfp-with-zoom mfp-img-mobile',
            image: {
                verticalFit: true,
                titleSrc: function(item) {
                    return item.el.attr('title') || '';
                }
            },
            gallery: {
                enabled: false
            },
            zoom: {
                enabled: true,
                duration: 300,
                opener: function(element) {
                    return element.find('img');
                }
            }
        });

    });

    // -------------------------------------------------
    // 9. Preloader
    // -------------------------------------------------
    const isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent);
    const preloader = $("#preloader");

    if (!isMobile) {
        setTimeout(() => preloader.addClass("preloaded"), 800);
        setTimeout(() => preloader.remove(), 2000);
    } else {
        preloader.remove();
    }

    // -------------------------------------------------
    // 10. WOW.js init
    // -------------------------------------------------
    if (typeof WOW !== "undefined") {
        new WOW().init();
    }
});