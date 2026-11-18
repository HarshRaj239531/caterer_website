import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

window.gsap = gsap;
window.ScrollTrigger = ScrollTrigger;

document.addEventListener("DOMContentLoaded", () => {
    // 0. Respect Reduced Motion preferences
    const prefersReducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
    const isMobile = window.innerWidth < 768;

    // 1. Smooth Scroll Progress Indicator Bar at top
    const progressBar = document.createElement("div");
    progressBar.id = "scroll-progress-bar";
    progressBar.className = "fixed top-0 left-0 h-[2.5px] bg-gradient-to-r from-amber-500 via-orange-400 to-amber-600 z-[100] pointer-events-none origin-left";
    progressBar.style.width = "100%";
    progressBar.style.transform = "scaleX(0)";
    document.body.appendChild(progressBar);

    gsap.to(progressBar, {
        scaleX: 1,
        ease: "none",
        scrollTrigger: {
            start: "top top",
            end: "bottom bottom",
            scrub: 0.2,
        },
    });

    // 2. Navbar Entrance & Dynamic Scroll Physics
    const navbar = document.querySelector("#main-navbar");
    if (navbar) {
        gsap.fromTo(
            navbar,
            { y: -30, opacity: 0 },
            {
                y: 0,
                opacity: 1,
                duration: 0.9,
                ease: "power3.out",
                delay: 0.1,
            }
        );

        ScrollTrigger.create({
            start: "top -40",
            onUpdate: (self) => {
                if (self.progress > 0) {
                    navbar.classList.add("shadow-lg", "shadow-slate-900/5", "bg-white/95");
                    navbar.classList.remove("bg-white/85");
                } else {
                    navbar.classList.remove("shadow-lg", "shadow-slate-900/5", "bg-white/95");
                    navbar.classList.add("bg-white/85");
                }
            },
        });
    }

    // 3. Ambient Living Gradient Orbs (Organic GSAP Floating Physics)
    if (!prefersReducedMotion) {
        gsap.to(".animate-float-1", {
            x: 25,
            y: 35,
            rotation: 8,
            duration: 9,
            repeat: -1,
            yoyo: true,
            ease: "sine.inOut",
        });
        gsap.to(".animate-float-2", {
            x: -30,
            y: -25,
            rotation: -10,
            duration: 11,
            repeat: -1,
            yoyo: true,
            ease: "sine.inOut",
            delay: 1,
        });
        gsap.to(".animate-float-3", {
            x: 20,
            y: -30,
            rotation: 6,
            duration: 13,
            repeat: -1,
            yoyo: true,
            ease: "sine.inOut",
            delay: 2,
        });
    }

    // 4. Hero Section Entrance Cascades (Every Page)
    const heroSection = document.querySelector("section.pt-12, #hero-section, section:first-of-type");
    if (heroSection) {
        const heroBadge = heroSection.querySelector("span.rounded-full, .hero-badge");
        const heroTitle = heroSection.querySelector("h1");
        const heroDesc = heroSection.querySelector("p");
        const heroActions = heroSection.querySelectorAll("a.rounded-full, button.rounded-full, .hero-cta");
        const heroMedia = heroSection.querySelectorAll(".motion-card, img, .hero-media");

        const heroTl = gsap.timeline({ defaults: { ease: "power3.out" } });

        if (heroBadge) {
            heroTl.fromTo(heroBadge, { y: 20, opacity: 0, scale: 0.9 }, { y: 0, opacity: 1, scale: 1, duration: 0.6 }, "+=0.15");
        }
        if (heroTitle) {
            heroTl.fromTo(heroTitle, { y: 30, opacity: 0 }, { y: 0, opacity: 1, duration: 0.8 }, "-=0.35");
        }
        if (heroDesc) {
            heroTl.fromTo(heroDesc, { y: 20, opacity: 0 }, { y: 0, opacity: 1, duration: 0.7 }, "-=0.5");
        }
        if (heroActions.length > 0) {
            heroTl.fromTo(heroActions, { y: 15, opacity: 0, scale: 0.95 }, { y: 0, opacity: 1, scale: 1, duration: 0.5, stagger: 0.08 }, "-=0.4");
        }
        if (heroMedia.length > 0) {
            heroTl.fromTo(heroMedia, { y: 35, opacity: 0, scale: 0.97 }, { y: 0, opacity: 1, scale: 1, duration: 0.8, stagger: 0.1 }, "-=0.5");
        }
    }

    // 5. ScrollTrigger Batch Stagger for Cards & Grids (All Pages)
    // Select all cards: .glass-card, .motion-card, .gallery-item
    const allCards = gsap.utils.toArray(".glass-card, .motion-card, .gallery-item");
    if (allCards.length > 0 && !prefersReducedMotion) {
        ScrollTrigger.batch(allCards, {
            start: "top 92%",
            once: true,
            onEnter: (batch) => {
                gsap.fromTo(
                    batch,
                    {
                        opacity: 0,
                        y: 35,
                        scale: 0.97,
                    },
                    {
                        opacity: 1,
                        y: 0,
                        scale: 1,
                        duration: 0.75,
                        stagger: 0.1,
                        ease: "power3.out",
                        overwrite: "auto",
                        clearProps: "transform,opacity",
                    }
                );
            },
        });
    }

    // 6. Section Headers Reveal (h2, section badge, subtitle)
    const sectionHeaders = document.querySelectorAll("section:not(:first-of-type)");
    sectionHeaders.forEach((sec) => {
        const badge = sec.querySelector("span.uppercase, span.rounded-full");
        const title = sec.querySelector("h2");
        const desc = sec.querySelector("p");

        const elementsToAnimate = [badge, title, desc].filter(Boolean);
        if (elementsToAnimate.length > 0) {
            gsap.fromTo(
                elementsToAnimate,
                { y: 25, opacity: 0 },
                {
                    y: 0,
                    opacity: 1,
                    duration: 0.7,
                    stagger: 0.1,
                    ease: "power3.out",
                    scrollTrigger: {
                        trigger: sec,
                        start: "top 85%",
                        once: true,
                    },
                    clearProps: "transform,opacity",
                }
            );
        }
    });

    // 7. Interactive Counting Stats (Numbers with + or ★)
    const statCounters = document.querySelectorAll(".stat-counter, strong.text-2xl, span.font-mono");
    statCounters.forEach((stat) => {
        const text = stat.innerText.trim();
        const match = text.match(/^([\d,\.]+)(\+?|★?|%?)$/);
        if (match) {
            const rawNum = parseFloat(match[1].replace(/,/g, ""));
            const suffix = match[2] || "";
            if (!isNaN(rawNum) && rawNum > 0) {
                const isFloat = match[1].includes(".");
                const obj = { val: 0 };

                ScrollTrigger.create({
                    trigger: stat,
                    start: "top 90%",
                    once: true,
                    onEnter: () => {
                        gsap.to(obj, {
                            val: rawNum,
                            duration: 1.6,
                            ease: "power2.out",
                            onUpdate: () => {
                                const formatted = isFloat ? obj.val.toFixed(1) : Math.round(obj.val).toLocaleString("en-IN");
                                stat.innerText = formatted + suffix;
                            },
                        });
                    },
                });
            }
        }
    });

    // 8. 3D Tilt Micro-Physics on Glass Cards (Desktop only)
    if (!isMobile && !prefersReducedMotion) {
        const hoverCards = document.querySelectorAll(".glass-card, .motion-card");
        hoverCards.forEach((card) => {
            card.addEventListener("mouseenter", () => {
                gsap.to(card, {
                    y: -4,
                    scale: 1.01,
                    duration: 0.35,
                    ease: "power2.out",
                });
            });
            card.addEventListener("mouseleave", () => {
                gsap.to(card, {
                    y: 0,
                    scale: 1,
                    duration: 0.35,
                    ease: "power2.out",
                });
            });
        });

        // Magnetic Attraction on Key CTA Buttons
        const magneticButtons = document.querySelectorAll("a.bg-slate-950, a.bg-emerald-600, a.bg-amber-500, button[type='submit']");
        magneticButtons.forEach((btn) => {
            btn.addEventListener("mousemove", (e) => {
                const rect = btn.getBoundingClientRect();
                const x = (e.clientX - rect.left - rect.width / 2) * 0.25;
                const y = (e.clientY - rect.top - rect.height / 2) * 0.25;
                gsap.to(btn, {
                    x: x,
                    y: y,
                    duration: 0.25,
                    ease: "power2.out",
                });
            });
            btn.addEventListener("mouseleave", () => {
                gsap.to(btn, {
                    x: 0,
                    y: 0,
                    duration: 0.35,
                    ease: "power2.out",
                });
            });
        });
    }

    // 9. Mobile Menu Drawer Animation with GSAP
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

                gsap.fromTo(
                    mobileMenu,
                    { opacity: 0, y: -16, scale: 0.98 },
                    { opacity: 1, y: 0, scale: 1, duration: 0.35, ease: "power3.out" }
                );

                const mobileLinks = mobileMenu.querySelectorAll("a");
                gsap.fromTo(
                    mobileLinks,
                    { opacity: 0, x: -14 },
                    { opacity: 1, x: 0, duration: 0.3, stagger: 0.04, ease: "power2.out", delay: 0.05 }
                );
            } else {
                gsap.to(mobileMenu, {
                    opacity: 0,
                    y: -12,
                    duration: 0.2,
                    ease: "power2.in",
                    onComplete: () => {
                        mobileMenu.classList.add("hidden");
                        hamburgerIcon.classList.remove("hidden");
                        closeIcon.classList.add("hidden");
                    },
                });
            }
        });
    }

    // 10. Expose GSAP helper globally for Gallery filtering & Lightbox
    window.gsapFilterTransition = function (containerSelector, itemSelector, visibleConditionFn) {
        const items = document.querySelectorAll(itemSelector);
        const toShow = [];
        const toHide = [];

        items.forEach((item) => {
            if (visibleConditionFn(item)) {
                toShow.push(item);
            } else {
                toHide.push(item);
            }
        });

        if (toHide.length > 0) {
            gsap.to(toHide, {
                scale: 0.92,
                opacity: 0,
                duration: 0.2,
                ease: "power2.in",
                onComplete: () => {
                    toHide.forEach((el) => (el.style.display = "none"));
                    if (toShow.length > 0) {
                        toShow.forEach((el) => {
                            el.style.display = "block";
                            gsap.fromTo(
                                el,
                                { scale: 0.94, opacity: 0, y: 15 },
                                { scale: 1, opacity: 1, y: 0, duration: 0.35, ease: "power2.out" }
                            );
                        });
                    }
                    ScrollTrigger.refresh();
                },
            });
        } else {
            toShow.forEach((el) => {
                el.style.display = "block";
                gsap.fromTo(
                    el,
                    { scale: 0.94, opacity: 0, y: 15 },
                    { scale: 1, opacity: 1, y: 0, duration: 0.35, ease: "power2.out" }
                );
            });
            ScrollTrigger.refresh();
        }
    };
});
