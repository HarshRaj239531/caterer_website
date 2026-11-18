import { animate, inView, scroll, stagger } from "motion";

document.addEventListener("DOMContentLoaded", () => {
    // 1. Initial Hero Stagger Entrance Animation (Framer Motion)
    const heroElements = document.querySelectorAll(".motion-hero-item");
    if (heroElements.length > 0) {
        animate(
            heroElements,
            {
                opacity: [0, 1],
                y: [24, 0],
            },
            {
                delay: stagger(0.08, { start: 0.1 }),
                duration: 0.7,
                easing: [0.16, 1, 0.3, 1], // Custom cubic bezier (smooth spring-like deceleration)
            }
        );
    }

    // 2. Navbar Entrance Animation
    const navbar = document.querySelector("#main-navbar");
    if (navbar) {
        animate(
            navbar,
            {
                opacity: [0, 1],
                y: [-20, 0],
            },
            {
                duration: 0.6,
                easing: [0.16, 1, 0.3, 1],
            }
        );

        // Navbar Scroll Reactive Elevation
        scroll(({ y }) => {
            if (y.current > 30) {
                navbar.classList.add("shadow-lg", "shadow-slate-900/5", "bg-white/95");
                navbar.classList.remove("bg-white/80");
            } else {
                navbar.classList.remove("shadow-lg", "shadow-slate-900/5", "bg-white/95");
                navbar.classList.add("bg-white/80");
            }
        });
    }

    // 3. Scroll-triggered Card Stagger Animation (inView)
    inView(".motion-section", ({ target }) => {
        const cards = target.querySelectorAll(".motion-card");
        if (cards.length > 0) {
            animate(
                cards,
                {
                    opacity: [0, 1],
                    y: [30, 0],
                    scale: [0.98, 1],
                },
                {
                    delay: stagger(0.09),
                    duration: 0.65,
                    easing: [0.16, 1, 0.3, 1],
                }
            );
        } else {
            animate(
                target,
                {
                    opacity: [0, 1],
                    y: [20, 0],
                },
                {
                    duration: 0.6,
                    easing: [0.16, 1, 0.3, 1],
                }
            );
        }
    });

    // 4. Mobile Menu Drawer Animation with Spring Physics
    const mobileMenu = document.getElementById("mobile-menu");
    const hamburgerBtn = document.getElementById("mobile-nav-toggle");
    const hamburgerIcon = document.getElementById("hamburger-icon");
    const closeIcon = document.getElementById("close-icon");

    if (mobileMenu && hamburgerBtn) {
        let isOpen = false;

        hamburgerBtn.addEventListener("click", () => {
            isOpen = !isOpen;

            if (isOpen) {
                mobileMenu.classList.remove("hidden");
                hamburgerIcon.classList.add("hidden");
                closeIcon.classList.remove("hidden");

                animate(
                    mobileMenu,
                    {
                        opacity: [0, 1],
                        y: [-16, 0],
                        scale: [0.98, 1],
                    },
                    {
                        duration: 0.35,
                        easing: [0.16, 1, 0.3, 1],
                    }
                );

                const mobileLinks = mobileMenu.querySelectorAll("a");
                animate(
                    mobileLinks,
                    {
                        opacity: [0, 1],
                        x: [-12, 0],
                    },
                    {
                        delay: stagger(0.04, { start: 0.05 }),
                        duration: 0.3,
                        easing: [0.16, 1, 0.3, 1],
                    }
                );
            } else {
                animate(
                    mobileMenu,
                    {
                        opacity: [1, 0],
                        y: [0, -12],
                    },
                    {
                        duration: 0.2,
                        easing: "ease-in",
                    }
                ).finished.then(() => {
                    mobileMenu.classList.add("hidden");
                    hamburgerIcon.classList.remove("hidden");
                    closeIcon.classList.add("hidden");
                });
            }
        });
    }

    // 5. Interactive Floating Nav Pill Tracking (Active indicator glow)
    const activeNavPill = document.querySelector(".nav-item-active");
    if (activeNavPill) {
        animate(
            activeNavPill,
            {
                scale: [0.95, 1],
            },
            {
                duration: 0.4,
                easing: [0.16, 1, 0.3, 1],
            }
        );
    }
});
