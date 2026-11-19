// gsap image reveal (clip-path) / global
(function () {
	'use strict';
	function initImageRevealAnimation() {
		var wraps = document.querySelectorAll('[data-anim="img-reveal"]');
		if (!wraps.length) return;
		if (typeof gsap === 'undefined') {
		console.warn('gsap が読み込まれていません。functions.php の enqueue順を確認してください。');
		return;
		}
		if (typeof ScrollTrigger !== 'undefined') {
		gsap.registerPlugin(ScrollTrigger);
		}
		var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
		wraps.forEach(function (wrap) {
		var isSlideshow = wrap.classList.contains('js-img-slideshow');
		var imgs = isSlideshow ? wrap.querySelectorAll('img') : [wrap.querySelector('img')];
		if (!imgs.length || !imgs[0]) return;

		if (reduceMotion) {
			imgs.forEach(function (img) {
				gsap.set(img, { clipPath: 'inset(0 0% 0 0)', scale: 1, yPercent: 0, x: 0 });
			});
			return;
		}

		imgs.forEach(function (img) {
			gsap.set(img, { scale: 1.15 });
			gsap.fromTo(img,
				{ clipPath: 'inset(0 100% 0 0)' },
				{
				clipPath: 'inset(0 0% 0 0)',
				duration: 1.1,
				ease: 'power3.inOut',
				scrollTrigger: {
					trigger: wrap,
					start: 'top 85%',
					toggleActions: 'play none none none'
				}
				}
			);
		});

		if (typeof ScrollTrigger !== 'undefined') {
			var depthY = wrap.dataset.depthY ? parseFloat(wrap.dataset.depthY) : 8;
			var depthX = wrap.dataset.depthX ? parseFloat(wrap.dataset.depthX) : 0;
			imgs.forEach(function (img) {
				gsap.to(img, {
				yPercent: depthY,
				x: depthX,
				ease: 'none',
				scrollTrigger: {
					trigger: wrap,
					start: 'top bottom',
					end: 'bottom top',
					scrub: true
				}
				});
			});
		}
		});
	}
	document.addEventListener('DOMContentLoaded', initImageRevealAnimation);
})();

// gsap text reveal (SplitText) / global
(function () {
	'use strict';
	function initTextRevealAnimation() {
		var targets = document.querySelectorAll('[data-anim="text-reveal"]');
		if (!targets.length) return;
		if (typeof gsap === 'undefined') {
		console.warn('gsap が読み込まれていません。functions.php の enqueue順を確認してください。');
		return;
		}
		if (typeof ScrollTrigger !== 'undefined') {
		gsap.registerPlugin(ScrollTrigger);
		}
		if (typeof SplitText === 'undefined') {
		console.warn('SplitText が読み込まれていません。functions.php の enqueue順を確認してください。');
		return;
		}
		gsap.registerPlugin(SplitText);
		var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
		if (reduceMotion) {
		SplitText.create(targets, { type: 'lines', mask: 'lines' });
		return;
		}
		targets.forEach(function (el) {
		SplitText.create(el, {
			type: 'lines',
			mask: 'lines',
			autoSplit: true,
			onSplit: function (self) {
			return gsap.from(self.lines, {
				yPercent: 110,
				duration: 1,
				ease: 'power4.out',
				stagger: 0.08,
				scrollTrigger: {
				trigger: el,
				start: 'top 85%',
				toggleActions: 'play none none none'
				}
			});
			}
		});
		});
	}
	document.addEventListener('DOMContentLoaded', initTextRevealAnimation);
})();

// sink-down / global
(function () {
	'use strict';
	function initSinkDownAnimation() {
		var targets = document.querySelectorAll('.js-sink-down');
		if (!targets.length) return;
		if (typeof gsap === 'undefined') {
			console.warn('gsap が読み込まれていません。functions.php の enqueue順を確認してください。');
			return;
		}
		if (typeof ScrollTrigger !== 'undefined') {
			gsap.registerPlugin(ScrollTrigger);
		}
		var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
		targets.forEach(function (el) {
			var offset = el.dataset.sink ? parseFloat(el.dataset.sink) : 120;
			if (reduceMotion) {
				gsap.set(el, { y: 0 });
				return;
			}
			gsap.fromTo(el,
				{ y: 0 },
				{
					y: -offset,
					ease: 'none',
					scrollTrigger: {
						trigger: el,
						start: 'bottom bottom',
						end: 'bottom top',
						scrub: 1,
						invalidateOnRefresh: true
					}
				}
			);
		});
	}
	document.addEventListener('DOMContentLoaded', initSinkDownAnimation);
})();

// cover-up / global
(function () {
	'use strict';
	function initCoverUpAnimation() {
		var targets = document.querySelectorAll('.js-cover-up');
		if (!targets.length) return;
		if (typeof gsap === 'undefined') {
			console.warn('gsap が読み込まれていません。functions.php の enqueue順を確認してください。');
			return;
		}
		if (typeof ScrollTrigger !== 'undefined') {
			gsap.registerPlugin(ScrollTrigger);
		}
		var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
		targets.forEach(function (el) {
			if (reduceMotion) {
				gsap.set(el, { y: 0 });
				return;
			}
			var triggerSelector = el.dataset.trigger;
			var triggerEl = triggerSelector ? document.querySelector(triggerSelector) : el.previousElementSibling;
			if (!triggerEl) return;
			gsap.to(el, {
				y: 0,
				ease: 'none',
				scrollTrigger: {
					trigger: triggerEl,
					start: 'bottom bottom',
					end: 'bottom top',
					scrub: 1,
					invalidateOnRefresh: true
				}
			});
		});
	}
	document.addEventListener('DOMContentLoaded', initCoverUpAnimation);
})();