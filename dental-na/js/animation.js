// smooth scroll lenis
gsap.registerPlugin(ScrollTrigger);

const lenis = new Lenis({
    duration: 1.0,
    easing: (t) => 1 - Math.pow(1 - t, 3),
    smoothWheel: true,
    wheelMultiplier: 1,
    touchMultiplier: 2,
});
lenis.on('scroll', ScrollTrigger.update);
gsap.ticker.add((time) => {
    lenis.raf(time * 1000);
});
gsap.ticker.lagSmoothing(0);

// animation gsap
document.addEventListener("DOMContentLoaded", function () {
    const scrollConfig = {
        start: "top 80%",
        toggleActions: "play none none none"
    };
    const animConfig = {
        opacity: 0,
        duration: 0.8,
        ease: "power2.out",
    };

    document.querySelectorAll(".js-stagger-group").forEach(function (group) {
        const upItems    = group.querySelectorAll(".fade-up");
        const leftItems  = group.querySelectorAll(".fade-left");
        const rightItems = group.querySelectorAll(".fade-right");

        [...upItems, ...leftItems, ...rightItems].forEach(function (el) {
            el.classList.add("js-fade-grouped");
        });

        if (upItems.length) {
            gsap.from(upItems, {
                opacity: 0,
                y: 40,
                duration: 0.8,
                ease: "power2.out",
                stagger: 0.15,
                scrollTrigger: { trigger: group, ...scrollConfig }
            });
        }
        if (leftItems.length) {
            gsap.from(leftItems, {
                opacity: 0,
                x: -40,
                duration: 0.8,
                ease: "power2.out",
                stagger: 0.15,
                scrollTrigger: { trigger: group, ...scrollConfig }
            });
        }
        if (rightItems.length) {
            gsap.from(rightItems, {
                opacity: 0,
                x: 40,
                duration: 0.8,
                ease: "power2.out",
                stagger: 0.15,
                scrollTrigger: { trigger: group, ...scrollConfig }
            });
        }
    });

    gsap.utils.toArray(".fade-up").forEach(function (el) {
        if (el.classList.contains("js-fade-grouped")) return;
        gsap.from(el, {
            ...animConfig,
            y: 40,
            scrollTrigger: { trigger: el, ...scrollConfig }
        });
    });

    gsap.utils.toArray(".fade-left").forEach(function (el) {
        if (el.classList.contains("js-fade-grouped")) return;
        gsap.from(el, {
            ...animConfig,
            x: -40,
            scrollTrigger: { trigger: el, ...scrollConfig }
        });
    });

    gsap.utils.toArray(".fade-right").forEach(function (el) {
        if (el.classList.contains("js-fade-grouped")) return;
        gsap.from(el, {
            ...animConfig,
            x: 40,
            scrollTrigger: { trigger: el, ...scrollConfig }
        });
    });
});

// hamburger menu
(function () {
    const BREAKPOINT = 850;
    const btn     = document.querySelector('.l-gnav__hum--line');
    const drawer  = document.querySelector('.l-gnav__hum ul');
    const items   = document.querySelectorAll('.l-gnav__hum ul li');
    const overlay = document.querySelector('.l-gnav__hum-overlay');
    if (!btn || !drawer) return;
    let isOpen = false;
    function open() {
        isOpen = true;
        btn.classList.add('is-open');
        drawer.classList.add('is-open');
        overlay.classList.add('is-open');
        document.body.classList.add('is-menu-open');
        btn.setAttribute('aria-expanded', 'true');
        items.forEach(function(li) { li.classList.add('is-visible'); });
    }
    window.closeHumMenu = function () {
        isOpen = false;
        btn.classList.remove('is-open');
        drawer.classList.remove('is-open');
        overlay.classList.remove('is-open');
        document.body.classList.remove('is-menu-open');
        btn.setAttribute('aria-expanded', 'false');
        items.forEach(function(li) { li.classList.remove('is-visible'); });
    };
    btn.addEventListener('click', function() { isOpen ? window.closeHumMenu() : open(); });
    overlay.addEventListener('click', window.closeHumMenu);
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && isOpen) window.closeHumMenu();
    });
    window.addEventListener('resize', function() {
        if (window.innerWidth > BREAKPOINT && isOpen) window.closeHumMenu();
    });
})();

// anker link
document.addEventListener("DOMContentLoaded", function () {
    if (window.location.hash) {
        const target = document.querySelector(window.location.hash);
        if (target) {
            setTimeout(() => {
                lenis.scrollTo(target, {
                    offset: -100,
                    duration: 1.2,
                });
            }, 300);
        }
    }
});

document.querySelectorAll('a[href*="#"]').forEach((anchor) => {
    anchor.addEventListener('click', function (e) {
        const href = this.getAttribute('href');
        const hashIndex = href.indexOf('#');
        const hash = href.slice(hashIndex);
        const path = href.slice(0, hashIndex);
        const isSamePage = path === '' || path === window.location.pathname || path === window.location.href.replace(window.location.hash, '');
        if (isSamePage && hash.length > 1) {
            let target = null;
            try {
                target = document.querySelector(hash);
            } catch (err) {
                return;
            }
            if (target) {
                e.preventDefault();
                if (typeof window.closeHumMenu === 'function') {
                    window.closeHumMenu();
                }
                setTimeout(() => {
                    lenis.scrollTo(target, {
                        offset: -100,
                        duration: 1.2,
                    });
                }, 400);
            }
        }
    });
});

// page top circle click
const pagetopCircle = document.querySelector('.l-pagetop__circle');
if (pagetopCircle) {
    pagetopCircle.addEventListener('click', function (e) {
        e.preventDefault();
        lenis.scrollTo(0, {
            duration: 1.2,
        });
    });
}

// accrdion menu
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.p-clinic-faq__question').forEach(function (button) {
        button.addEventListener('click', function () {
        var item = button.closest('.p-clinic-faq__item');
        var isOpen = item.classList.contains('is-open');

        item.classList.toggle('is-open', !isOpen);
        button.setAttribute('aria-expanded', String(!isOpen));
        });
    });
});