// header / sub-page
(function () {
	'use strict';

	var START_DELAY = 0.8;

	function runHeaderAnimation() {
		var header = document.querySelector('.l-page-header');
		if (!header) return;

		if (typeof gsap === 'undefined') {
		console.warn('gsap が読み込まれていません。functions.php の enqueue順を確認してください。');
		return;
		}

		var line = header.querySelector('.page-header__ttl .ttl-line');
		var img = header.querySelector('.page-header__img--pc img');
		var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

		if (reduceMotion) {
		if (line) gsap.set(line, { clearProps: 'transform' });
		if (img) gsap.set(img, { clearProps: 'scale' });
		return;
		}

		var tl = gsap.timeline({ delay: START_DELAY });

		if (img) {
		tl.fromTo(img,
			{ scale: 1.05 },
			{ scale: 1, duration: 1.1, ease: 'power3.out' }
		);
		}

		if (line) {
		tl.fromTo(line,
			{ yPercent: 110 },
			{ yPercent: 0, duration: 1, ease: 'power4.out' },
			img ? '-=0.7' : 0
		);
		}
	}

	function waitForLoader() {
		var loading = document.getElementById('loading');

		if (!loading) {
		window.addEventListener('load', runHeaderAnimation);
		return;
		}

		if (loading.classList.contains('loaded')) {
		runHeaderAnimation();
		return;
		}

		var observer = new MutationObserver(function (mutations) {
		for (var i = 0; i < mutations.length; i++) {
			if (mutations[i].attributeName === 'class' && loading.classList.contains('loaded')) {
			observer.disconnect();
			runHeaderAnimation();
			break;
			}
		}
		});

		observer.observe(loading, { attributes: true });
	}

	document.addEventListener('DOMContentLoaded', waitForLoader);
})();