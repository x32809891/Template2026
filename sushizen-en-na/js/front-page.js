// layer scroll / front-page > main-visual to contents0
window.addEventListener('load', function () {
	gsap.registerPlugin(ScrollTrigger);

	gsap.to(".l-contents0", {
		y: 0,
		ease: "none",
		scrollTrigger: {
			trigger: ".l-main-visual",
			start: "bottom bottom",
			end: "bottom top",
			scrub: 1,
			invalidateOnRefresh: true
		}
	});

	gsap.fromTo(".p-main-visual__video video",
		{ scale: 1 },
		{
			scale: 1.08,
			scrollTrigger: {
				trigger: ".l-main-visual",
				start: "top top",
				end: "bottom top",
				scrub: true,
				invalidateOnRefresh: true
			}
		}
	);

	gsap.fromTo(".p-main-visual__overlay",
		{ opacity: 1 },
		{
			opacity: 0.4,
			scrollTrigger: {
				trigger: ".l-main-visual",
				start: "top top",
				end: "bottom top",
				scrub: true,
				invalidateOnRefresh: true
			}
		}
	);

	ScrollTrigger.refresh();
});

// breathing scale / front-page > contents0
(function () {
	'use strict';
	function initBreathingScale() {
		var section = document.querySelector('.p-contents0');
		if (!section || typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;
		var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
		if (reduceMotion) return;
		gsap.set(section, { transformOrigin: '50% 0%' });
		ScrollTrigger.create({
			trigger: section,
			start: 'top bottom',
			end: 'bottom top',
			scrub: true,
			onUpdate: function (self) {
				var scale = 1 + Math.sin(self.progress * Math.PI) * 0.05;
				gsap.set(section, { scale: scale });
			}
		});
	}
	document.addEventListener('DOMContentLoaded', initBreathingScale);
})();

// scroll scale / front-page > contents0
(function () {
	'use strict';

	function initImageScrollScale() {
		if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;
		const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
		if (reduceMotion) return;

		const imgs = document.querySelectorAll(
			'.p-contents0 [data-anim="img-reveal"] img, .p-contents0 .p-contents0__decor-img'
		);
		if (!imgs.length) return;

		imgs.forEach(img => {
			gsap.set(img, { transformOrigin: '50% 50%', scale: 1 });

			gsap.to(img, {
				scale: 1.06,
				ease: "none",
				scrollTrigger: {
					trigger: img,
					start: "top bottom",
					end: "bottom top",
					scrub: 1.2
				}
			});
		});
	}

	document.addEventListener("DOMContentLoaded", initImageScrollScale);
})();

// sticky-slide / front-page > contents1-4
(function () {
	'use strict';
	if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;
	gsap.registerPlugin(ScrollTrigger);

	const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
	if (reduceMotion) return;

	const sections = gsap.utils.toArray('.p-contents1-4__box');

	sections.forEach((section, index) => {
		if (index === sections.length - 1) return;

		gsap.to(section, {
			scale: 0.94,
			ease: 'none',
			scrollTrigger: {
				trigger: section,
				start: 'top top',
				end: 'bottom top',
				scrub: true
			}
		});
	});
})();

// slide-show / front-page > contents5
document.querySelectorAll('.js-img-slideshow').forEach((container) => {
    const images = container.querySelectorAll('img');
    if (images.length <= 1) return;

    const panel = container.closest('.js-contents5-panel');
    let current = 0;
    let timerId = null;

    function next() {
        images[current].classList.remove('is-active');
        current = (current + 1) % images.length;
        images[current].classList.add('is-active');
    }

    function start() {
        if (timerId) return;
        timerId = setInterval(next, 5000);
    }

    function stop() {
        clearInterval(timerId);
        timerId = null;
    }

    if (panel && panel.classList.contains('is-active')) {
        start();
    }

    if (panel) {
        const observer = new MutationObserver(() => {
            if (panel.classList.contains('is-active')) {
                start();
            } else {
                stop();
            }
        });
        observer.observe(panel, { attributes: true, attributeFilter: ['class'] });
    }
});