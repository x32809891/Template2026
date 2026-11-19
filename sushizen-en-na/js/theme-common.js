// smooth scroll / global
(function () {
	'use strict';
	if ( typeof Lenis === 'undefined' || typeof gsap === 'undefined' ) return;
	const reduceMotion = window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches;
	if ( reduceMotion ) return;

	const lenis = new Lenis({
		autoResize: false
	});

	if ( typeof ScrollTrigger !== 'undefined' ) {
		lenis.on( 'scroll', ScrollTrigger.update );
	}

	gsap.ticker.add( function ( time ) {
		lenis.raf( time * 1000 );
	} );
	gsap.ticker.lagSmoothing( 0 );

	let resizeTimer;
	window.addEventListener('resize', () => {
		clearTimeout(resizeTimer);
		resizeTimer = setTimeout(() => {
			lenis.resize();
			if ( typeof ScrollTrigger !== 'undefined' ) {
				ScrollTrigger.refresh();
			}
		}, 200);
	});

	window.lenis = lenis;
})();

// gnav scroll / global
document.addEventListener('DOMContentLoaded', () => {
	const gnav = document.querySelector('.l-gnav');
	if (!gnav) return;
	let lastScrollY = window.scrollY;
	let ticking = false;
	const threshold = 10;
	const scrolledOffset = 50;
	function handleScroll() {
		const currentScrollY = window.scrollY;
		if (currentScrollY > scrolledOffset) {
			document.body.classList.add('is-scrolled');
		} else {
			document.body.classList.remove('is-scrolled');
		}
		if (Math.abs(currentScrollY - lastScrollY) >= threshold) {
			if (currentScrollY > lastScrollY && currentScrollY > 100) {
				document.body.classList.add('is-hidden');
			} else {
				document.body.classList.remove('is-hidden');
			}
			lastScrollY = currentScrollY;
		}
		ticking = false;
	}
	window.addEventListener('scroll', () => {
		if (!ticking) {
			window.requestAnimationFrame(handleScroll);
			ticking = true;
		}
	}, { passive: true });
});

// gnav humberger / global
const toggle = document.getElementById("js-gnav-toggle");
const menu = document.getElementById("js-gnav-modal");
const overlay = document.getElementById("js-gnav-overlay");
function closeMenu() {
    toggle.classList.remove("is-open");
    menu.classList.remove("is-open");
    overlay.classList.remove("is-open");
    document.body.classList.remove("is-menu-open");
}
toggle.addEventListener("click", () => {
    toggle.classList.toggle("is-open");
    menu.classList.toggle("is-open");
    overlay.classList.toggle("is-open");
    document.body.classList.toggle("is-menu-open");
});
overlay.addEventListener("click", closeMenu);

// refresh all ScrollTriggers
window.addEventListener('load', function () {
	if (typeof ScrollTrigger !== 'undefined') {
		ScrollTrigger.refresh();
	}
});