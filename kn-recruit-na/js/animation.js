// ローディング画面
document.addEventListener("DOMContentLoaded", function() {
    setTimeout(function() {
        var loaderContainer = document.querySelector('.loader');
        loaderContainer.classList.add('fade-out');
        setTimeout(function() {
            loaderContainer.style.display = 'none';
        }, 1000);
    }, 1000);
});

// 左から右に背景色が流れるテキストアニメーション（ローディング後）
window.addEventListener("load", function () {
    setTimeout(function () {
        document.querySelectorAll(".p__index-mv-detail, .c__page-header-detail").forEach(function (el) {
            el.classList.add("animated");
        });
    }, 1000);
});

// ナビゲーション
$(".c__openbtn").click(function () {
    $(this).toggleClass('active');
    $("#g-nav").toggleClass('panelactive');
    if ($(".c__openbtn-overlay").hasClass('active')) {
        $(".c__openbtn-overlay").removeClass('active');
        setTimeout(function() {
            $(".c__openbtn-overlay").css("display", "none");
        }, 800);
    } else {
        $(".c__openbtn-overlay").css("display", "block");
        setTimeout(function() {
            $(".c__openbtn-overlay").addClass('active');
        }, 10); 
    }
});

$(".c__openbtn-overlay").click(function () {
    $(".c__openbtn").removeClass('active');
    $("#g-nav").removeClass('panelactive');
    $(".c__openbtn-overlay").removeClass('active');
    setTimeout(function() {
        $(".c__openbtn-overlay").css("display", "none");
    }, 800);
});

$("#g-nav a").click(function () {
    $(".c__openbtn").removeClass('active');
    $("#g-nav").removeClass('panelactive');
    $(".c__openbtn-overlay").removeClass('active');
    setTimeout(function() {
        $(".c__openbtn-overlay").css("display", "none");
    }, 400);
});

// ヘッダーロゴ
document.addEventListener("DOMContentLoaded", function() {
    var headerLogo = document.querySelector(".c__header-logo");
    var scrollThreshold = 890;

    document.addEventListener("scroll", function() {
        if (window.scrollY > scrollThreshold) {
            headerLogo.classList.add("mix-blend-mode");
        } else {
            headerLogo.classList.remove("mix-blend-mode");
        }
    });
});

// メインビジュアル
var windowwidth = window.innerWidth || document.documentElement.clientWidth || 0;
if (windowwidth > 768){
    var responsiveImage = [//PC用のスライダー画像
        { src: './wp-content/themes/kn-recruit-na/img/index_mv01.jpg'},
        { src: './wp-content/themes/kn-recruit-na/img/index_mv02.jpg'},
        { src: './wp-content/themes/kn-recruit-na/img/index_mv03.jpg'}
    ];
} else {
    var responsiveImage = [//タブレット（768px）以下用のスライダー画像
        { src: './wp-content/themes/kn-recruit-na/img/index_mv01.jpg'},
        { src: './wp-content/themes/kn-recruit-na/img/index_mv02.jpg'},
        { src: './wp-content/themes/kn-recruit-na/img/index_mv03.jpg'},
    ];
}

$('#slider').vegas({
    overlay: false,
    transition: 'fade',
    transitionDuration: 2000,
    delay: 5000,
    animationDuration: 20000,
    animation: 'random',
    slides: responsiveImage,
    timer:false,
});

// ページ内リンクのなめらかな動き
$('a[href*="#"]').click(function () {
    var elmHash = $(this).attr('href');
    var pos = $(elmHash).offset().top;
    $('body,html').animate({scrollTop: pos}, 800);
    return false;
});

// ページトップに戻るボタン / snsボタン
(function () {
    'use strict';

    const pageTop = document.getElementById('pageTop');
    const pageTopBtn = document.getElementById('pageTopBtn');
    const headerSnsBtn = document.getElementById('headerSnsBtn');

    if (!pageTop || !pageTopBtn) return;

    const SHOW_THRESHOLD_VH = 0.5;

    let ticking = false;

    function updateProgress() {
        const scrollTop = window.scrollY;
        const docHeight = document.documentElement.scrollHeight - window.innerHeight;
        const progress = docHeight > 0 ? (scrollTop / docHeight) * 100 : 0;

        pageTopBtn.style.setProperty('--progress', progress.toFixed(1));

        const shouldShow = scrollTop > window.innerHeight * SHOW_THRESHOLD_VH;

        if (shouldShow) {
            pageTop.classList.add('is-visible');
        } else {
            pageTop.classList.remove('is-visible');
        }

        if (headerSnsBtn) {
            headerSnsBtn.classList.toggle('is-visible', shouldShow);
        }

        ticking = false;
    }

    function onScroll() {
        if (!ticking) {
        window.requestAnimationFrame(updateProgress);
        ticking = true;
        }
    }

    window.addEventListener('scroll', onScroll, { passive: true });
    window.addEventListener('resize', onScroll, { passive: true });

    updateProgress();

    pageTopBtn.addEventListener('click', function () {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
})();

// フッターバー(spのみ)
document.addEventListener('DOMContentLoaded', function() {
    const footerBar = document.querySelector('.c__content-footer-bar');
    
    window.addEventListener('scroll', function() {
        if (window.innerWidth <= 559) {
            if (window.scrollY > 100) {
                footerBar.classList.add('visible');
                footerBar.classList.remove('hidden');
            } else {
                footerBar.classList.remove('visible');
                footerBar.classList.add('hidden');
            }
        } else {
            footerBar.classList.remove('visible');
            footerBar.classList.add('hidden');
        }
    });
});

// 慣性スクロール / luxy.js
if (navigator.userAgent.indexOf('iPhone') > 0 || navigator.userAgent.indexOf('Android') > 0 && navigator.userAgent.indexOf('Mobile') > 0) {
    } else if (navigator.userAgent.indexOf('iPad') > 0 || navigator.userAgent.indexOf('Android') > 0) {
    } else {
        luxy.init();
}

// 全ページ共通アニメーション / data-aos
document.addEventListener('DOMContentLoaded', function() {
    AOS.init({
        offset: 300,
        delay: 100,
        duration: 500,
        easing: 'linear',
        once: true,
    });
});

// 全ページ共通テキストアニメーション / gsap
gsap.registerPlugin(SplitText, ScrollTrigger);

document.fonts.ready.then(() => {
    document.querySelectorAll(".js-text-reveal").forEach((el) => {
        SplitText.create(el, {
        type: "lines",
        mask: "lines",
        onSplit(self) {
            return gsap.from(self.lines, {
            y: 60,
            opacity: 0,
            duration: 0.8,
            ease: "power3.out",
            stagger: 0.15,
            scrollTrigger: {
                trigger: el,
            start: "top 85%",
            }
            });
        }
        });
    });
});