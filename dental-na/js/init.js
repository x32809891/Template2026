// loading
const loading = document.getElementById('loading');
window.onload = function() {
    if (loading) {
        setTimeout(() => {
        loading.classList.add('loaded');
        }, 100);
    }
};

// header fixed
const header = document.querySelector('.l-header');
const logoImg = document.querySelector('.l-gnav__logo img');
if (header && logoImg) {
    const logoWhite = logoImg.src;
    const logoBlack = logoImg.src.replace('logo-w.png', 'logo-b.png');
    const isSubPage = location.pathname !== '/';
    const updateHeader = () => {
        const isScrolled = window.scrollY > 0;
        header.classList.toggle('is-scrolled', isScrolled);
        logoImg.src = isScrolled ? logoBlack : logoWhite;
        if (isSubPage && !isScrolled) {
            header.classList.add('is-white-text');
        } else {
            header.classList.remove('is-white-text');
        }
    };
    updateHeader();
    window.addEventListener('scroll', updateHeader);
}

// mv slide
if (document.querySelector('.p-mv__img-swiper')) {
    const swiper = new Swiper('.p-mv__img-swiper', {
        loop: true,
        effect: 'fade',
        speed: 2000,
        fadeEffect: {
            crossFade: true,
        },
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
    });
}

// blog slide
document.addEventListener('DOMContentLoaded', function () {
    if (document.querySelector('.p-blog__swiper')) {
        new Swiper('.p-blog__swiper', {
            loop: true,
            speed: 1000,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            slidesPerView: 1,
            spaceBetween: 16,
            centeredSlides: false,
            navigation: {
                nextEl: '.p-blog__next',
                prevEl: '.p-blog__prev',
            },
            pagination: {
                el: '.p-blog__pagination',
                clickable: true,
            },
            breakpoints: {
                425: { slidesPerView: 1, spaceBetween: 18 },
                559: { slidesPerView: 2, spaceBetween: 24 },
                1024: { slidesPerView: 3, spaceBetween: 30 },
            },
        });
    }
});

// page top btn
const pagetop = document.querySelector('.l-pagetop');
if (pagetop) {
    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            pagetop.classList.add('is-show');
        } else {
            pagetop.classList.remove('is-show');
        }
    });
}