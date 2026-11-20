jQuery(function($){
var mvh = $('.mv').height();

//ローディングアニメーション
var loader = $('.loader-wrap');

//ページの読み込みが完了したらアニメーションを非表示
$(window).on('load', function () {
	loader.fadeOut();
});

//ページの読み込みが完了してなくても5秒後にアニメーションを非表示にする
setTimeout(function () {
  loader.fadeOut();
}, 5000);

//ハンバーガーメニュー開閉
$('.menu').on('click', function (e) {
  e.preventDefault();
  var isOpen = $(this).toggleClass('is-active').hasClass('is-active');
  $('.gnav').toggleClass('is-open', isOpen);
  $('body').toggleClass('is-noscroll', isOpen);
  $(this).attr('aria-expanded', isOpen);
});

//ハンバーガーメニュースクロール調整
$(window).scroll(function(){
  if($(this).scrollTop() > 850){
    $(".header-logo__image img").attr("src", $(".header-logo__image img").data("logo-scroll"));
  }else{
    $(".header-logo__image img").attr("src", $(".header-logo__image img").data("logo-top"));
  }
  //スクロールアニメーション
  $('.scroll').each(function () {
    var elemPos = $(this).offset().top;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll > elemPos - windowHeight + 200) {
      $(this).addClass('scrollin');
    }
  });
});

//子メニューの開閉(取扱品種・活動報告)
$('.gnav__toggle').on('click', function () {
  var $item = $(this).closest('.gnav__item--has-child');
  var $submenu = $(this).next('.gnav__submenu');
  var isOpen = $item.toggleClass('is-open').hasClass('is-open');

  if (isOpen) {
    $submenu.css('max-height', $submenu.prop('scrollHeight') + 'px');
  } else {
    $submenu.css('max-height', 0);
  }
});

//メニューをホバーで右側のビジュアルを切り替え(クロスフェード)
(function () {
  var $visualImg = $('#gnavVisualImg');
  var $layers = $visualImg.find('.layer');
  var activeIndex = 0; // 現在表示中のレイヤーindex
  var currentBg = $layers.eq(0).css('background-image');

  $('.gnav__link, .gnav__sublink, .gnav__toggle').on('mouseenter', function () {
    var bg = $(this).data('bg');
    if (!bg) return;

    var bgUrl = 'url(' + bg + ')';
    if (bgUrl === currentBg) return;

    var nextIndex = activeIndex === 0 ? 1 : 0;
    var $nextLayer = $layers.eq(nextIndex);
    var $currentLayer = $layers.eq(activeIndex);

    $nextLayer.css('background-image', bgUrl);

    requestAnimationFrame(function () {
      $nextLayer.addClass('is-visible');
      $currentLayer.removeClass('is-visible');
    });

    activeIndex = nextIndex;
    currentBg = bgUrl;
  });
})();

//リンククリックでメニューを閉じる
$('.gnav__link:not(.gnav__toggle), .gnav__sublink').on('click', function () {
  $('.menu').removeClass('is-active').attr('aria-expanded', false);
  $('.gnav').removeClass('is-open');
  $('body').removeClass('is-noscroll');
});

//するするスクロール
$('a[href^="#"]').click(function() {
  var speed = 1000;
  var href = $(this).attr("href");
  var target = $(href == "#" || href == "" ? 'html' : href);
  var position = target.offset().top;
  $("html, body").animate({
    scrollTop: position
  }, speed, "swing");
  return false;
});

// ページトップボタン
var pagetop = $('#page_top');
var height = $(window).height();
pagetop.hide();
$(window).scroll(function () {
  if ($(this).scrollTop() > height) {
      pagetop.fadeIn();
  } else {
      pagetop.fadeOut();
  }
});
pagetop.click(function () {
  $('body,html').animate({
      scrollTop: 0
  }, 1000);
  return false;
});

// ブラウザサイズを自動で取得してiOS対策
$(document).ready(function () {
  var hSize = $(window).height();
  $(".topslider").height(hSize); // ブラウザの縦のサイズを取得
  });
$(window).resize(function () { // ページをリサイズした時の処理
  var hSize = $(window).height();
  $(".topslider").height(hSize); // ブラウザの縦のサイズを取得
  });
});

// 牧場概要ページのスライド切替
document.querySelectorAll('.outline__gallery').forEach((gallery) => {
  const images = gallery.querySelectorAll('img');
  let current = 0;

  if (images.length <= 1) return;

  setInterval(() => {
    images[current].classList.remove('is-active');
    current = (current + 1) % images.length;
    images[current].classList.add('is-active');
  }, 3000);
});

// ギャラリーページのギャラリーカテゴリ切替
document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('.gallery__list').forEach((gallery) => {
    const items = gallery.querySelectorAll('.gallery__item');

    gsap.from(items, {
      opacity: 0,
      y: 30,
      duration: 0.7,
      stagger: 0.08,
      ease: 'power2.out',
    });

    items.forEach((item) => {
      const img = item.querySelector('img');
      item.addEventListener('mouseenter', () => {
        gsap.to(img, { scale: 1.05, duration: 0.3, ease: 'power2.out' });
      });
      item.addEventListener('mouseleave', () => {
        gsap.to(img, { scale: 1, duration: 0.3, ease: 'power2.out' });
      });
    });
  });

  document.querySelectorAll('.gallery__tabs').forEach((tabs) => {
    const gallery = tabs.closest('[class*="gallery__contents"]').querySelector('.gallery__list');
    const buttons = tabs.querySelectorAll('.gallery__tab');
    const items = gallery.querySelectorAll('.gallery__item');

    buttons.forEach((btn) => {
      btn.addEventListener('click', () => {
        buttons.forEach((b) => b.classList.remove('is-active'));
        btn.classList.add('is-active');

        const cat = btn.dataset.cat;
        items.forEach((item) => {
          const show = cat === 'all' || item.dataset.cat === cat;
          if (show) {
            item.style.display = 'block';
            gsap.fromTo(
              item,
              { opacity: 0, scale: 0.85 },
              { opacity: 1, scale: 1, duration: 0.4, ease: 'power2.out' }
            );
          } else {
            gsap.to(item, {
              opacity: 0,
              scale: 0.85,
              duration: 0.25,
              onComplete: () => {
                item.style.display = 'none';
              },
            });
          }
        });
      });
    });
  });
});

// ギャラリーページのモーダル(画像拡大 / YouTube動画再生)
document.addEventListener('DOMContentLoaded', () => {
  const modal = document.getElementById('galleryModal');
  if (!modal) return;

  const modalContent = modal.querySelector('.gallery__modal-content');
  const closeBtn = modal.querySelector('.gallery__modal-close');
  const overlay = modal.querySelector('.gallery__modal-overlay');

  document.querySelectorAll('.gallery__item').forEach(item => {
    item.addEventListener('click', () => {
      modalContent.innerHTML = '';

      if (item.classList.contains('gallery__item--video')) {
        // YouTube動画再生
        const youtubeId = item.dataset.youtube;
        if (!youtubeId) return;

        modalContent.classList.add('is-video');

        const iframe = document.createElement('iframe');
        iframe.width = '100%';
        iframe.height = '100%';
        iframe.src = `https://www.youtube.com/embed/${youtubeId}?autoplay=1&rel=0`;
        iframe.title = 'YouTube video';
        iframe.frameBorder = '0';
        iframe.allow = 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture';
        iframe.allowFullscreen = true;
        modalContent.appendChild(iframe);
      } else {
        // 画像拡大
        modalContent.classList.remove('is-video');

        const imgSrc = item.querySelector('img').src;
        const imgAlt = item.querySelector('img').alt || '';
        const img = document.createElement('img');
        img.src = imgSrc;
        img.alt = imgAlt;
        modalContent.appendChild(img);
      }

      modal.classList.add('is-active');
    });
  });

  function closeModal() {
    modal.classList.remove('is-active');
    modalContent.innerHTML = '';
    modalContent.classList.remove('is-video');
  }

  closeBtn.addEventListener('click', closeModal);
  overlay.addEventListener('click', closeModal);

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && modal.classList.contains('is-active')) {
      closeModal();
    }
  });
});

// スタッフ紹介ページのアコーディオンメニュー
document.addEventListener('DOMContentLoaded', function () {
  var questions = document.querySelectorAll('.staff__faq .faq__question');

  questions.forEach(function (button) {
    button.addEventListener('click', function () {
      var item = button.closest('.faq__item');
      if (item) {
        item.classList.toggle('is-open');
      }
    });
  });
});

// 小澤牧場グループの沿革
const targets = document.querySelectorAll('.company__history .seal-row, .company__history .entry');
const io = new IntersectionObserver((entries)=>{
  entries.forEach(e=>{
    if(e.isIntersecting){ e.target.classList.add('in'); io.unobserve(e.target); }
  });
}, { threshold:0.15, rootMargin:'0px 0px -60px 0px' });
targets.forEach(t=>io.observe(t));