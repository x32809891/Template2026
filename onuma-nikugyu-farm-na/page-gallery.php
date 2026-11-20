<?php get_header(); ?>

<div id="scroll__contents">
  <main>
    <div class="wrapper">

      <!--##### 下層ページヘッダー #####-->
      <?php
      get_template_part('template-parts/header-sub', null, [
          'title' => 'ギャラリー',
          'bg_pc' => get_template_directory_uri() . '/img/page/header_gallery.jpg',
          'bg_sp' => get_template_directory_uri() . '/img/page/header_gallery.jpg',
      ]);
      ?>

      <!--##### パンくずリスト #####-->
      <?php get_template_part('template-parts/breadcrumb'); ?>

      <!----------------------------------------------------------------------->
      <!--##### ギャラリー #####-->
      <div class="page-gallery">
        <!-- contents1 -->
        <div class="gallery__contents1 contents--small" id="gallery__contents1">
          <div class="gallery__bg">
            <div class="contents__sub-ttl contents__sub-ttl--cow-brand">
              <svg class="cow-spot-bg" width="240" height="160" viewBox="0 0 211 124" aria-hidden="true">
                <defs>
                  <linearGradient id="blobGrad" x1="0" y1="0" x2="0" y2="1">
                    <stop offset="0%" style="stop-color:rgba(var(--color-main-rgb),1)"/>
                    <stop offset="100%" style="stop-color:rgba(var(--color-sub-rgb),1)"/>
                  </linearGradient>
                </defs>
                <path d="M70,10 C25,20 5,60 35,95 C65,128 120,135 155,108 C188,82 195,38 162,15 C135,-4 100,1 70,10 Z" fill="url(#blobGrad)"/>
              </svg>
              <span>ONUMA</span>
              <h3>大沼本場</h3>
            </div>
            <div class="gallery__tabs">
              <button type="button" class="gallery__tab is-active" data-cat="all">すべて</button>
              <button type="button" class="gallery__tab" data-cat="barn">牛・牛舎</button>
              <button type="button" class="gallery__tab" data-cat="facility">施設・設備</button>
              <button type="button" class="gallery__tab" data-cat="work">大沼本場のスタッフ</button>
            </div>
            <div class="gallery__list">
              <ul class="scroll fadeIn">
                <!-- <?php $youtube_id = 'yIs4uOmWFxQ'; ?>
                <li class="gallery__item gallery__item--video" data-cat="barn" data-youtube="<?php echo esc_attr($youtube_id); ?>">
                  <img src="https://img.youtube.com/vi/<?php echo esc_attr($youtube_id); ?>/maxresdefault.jpg" alt="大沼本場ムービー">
                  <span class="gallery__play-icon" aria-hidden="true">▶</span>
                </li> -->
                <li class="gallery__item" data-cat="facility">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/gallery_contents1-1.jpg" alt="大沼本場ギャラリー">
                </li>
                <li class="gallery__item" data-cat="barn">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/gallery_contents1-2.jpg" alt="">
                </li>
                <li class="gallery__item" data-cat="facility">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/gallery_contents1-3.jpg" alt="">
                </li>
                <li class="gallery__item" data-cat="facility">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/gallery_contents1-4.jpg" alt="">
                </li>
                <li class="gallery__item" data-cat="facility">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/gallery_contents1-5.jpg" alt="">
                </li>
                <li class="gallery__item" data-cat="work">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/gallery_contents1-9.jpg" alt="">
                </li>
                <li class="gallery__item" data-cat="work">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/gallery_contents1-6.jpg" alt="">
                </li>
                <li class="gallery__item" data-cat="facility">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/gallery_contents1-7.jpg" alt="">
                </li>
                <li class="gallery__item" data-cat="facility">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/gallery_contents1-8.jpg" alt="">
                </li>
                <li class="gallery__item" data-cat="barn">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/gallery_contents1-10.jpg" alt="">
                </li>
                <li class="gallery__item" data-cat="work">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/gallery_contents1-11.jpg" alt="">
                </li>
                <li class="gallery__item" data-cat="facility">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/gallery_contents1-12.jpg" alt="">
                </li>
                <li class="gallery__item" data-cat="barn">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/gallery_contents1-13.jpg" alt="">
                </li>
                <li class="gallery__item" data-cat="work">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/gallery_contents1-14.jpg" alt="">
                </li>
                <li class="gallery__item" data-cat="facility">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/gallery_contents1-15.jpg" alt="">
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- contents2 -->
        <div class="gallery__contents2 contents--small" id="gallery__contents2">
          <div class="gallery__bg">
            <div class="contents__sub-ttl contents__sub-ttl--cow-brand">
              <svg class="cow-spot-bg" width="240" height="160" viewBox="0 0 211 124" aria-hidden="true">
                <defs>
                  <linearGradient id="blobGrad" x1="0" y1="0" x2="0" y2="1">
                    <stop offset="0%" style="stop-color:rgba(var(--color-main-rgb),1)"/>
                    <stop offset="100%" style="stop-color:rgba(var(--color-sub-rgb),1)"/>
                  </linearGradient>
                </defs>
                <path d="M70,10 C25,20 5,60 35,95 C65,128 120,135 155,108 C188,82 195,38 162,15 C135,-4 100,1 70,10 Z" fill="url(#blobGrad)"/>
              </svg>
              <span>MEMURO</span>
              <h3>芽室分場</h3>
            </div>
            <div class="gallery__tabs">
              <button type="button" class="gallery__tab is-active" data-cat="all">すべて</button>
              <button type="button" class="gallery__tab" data-cat="barn">牛・牛舎</button>
              <button type="button" class="gallery__tab" data-cat="facility">施設・設備</button>
              <button type="button" class="gallery__tab" data-cat="work">芽室分場のスタッフ</button>
            </div>
            <div class="gallery__list">
              <ul class="scroll fadeIn">
                <li class="gallery__item" data-cat="facility">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/gallery_contents2-1.jpg" alt="芽室分場ギャラリー">
                </li>
                <li class="gallery__item" data-cat="barn">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/gallery_contents2-2.jpg" alt="">
                </li>
                <li class="gallery__item" data-cat="work">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/gallery_contents2-3.jpg" alt="">
                </li>
                <li class="gallery__item" data-cat="barn">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/gallery_contents2-4.jpg" alt="">
                </li>
                <li class="gallery__item" data-cat="work">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/gallery_contents2-5.jpg" alt="">
                </li>
                <li class="gallery__item" data-cat="barn">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/gallery_contents2-6.jpg" alt="">
                </li>
                <li class="gallery__item" data-cat="work">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/gallery_contents2-7.jpg" alt="">
                </li>
                <li class="gallery__item" data-cat="work">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/gallery_contents2-8.jpg" alt="">
                </li>
                <li class="gallery__item" data-cat="work">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/gallery_contents2-9.jpg" alt="">
                </li>
                <li class="gallery__item" data-cat="barn">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/gallery_contents2-10.jpg" alt="">
                </li>
                <li class="gallery__item" data-cat="facility">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/gallery_contents2-11.jpg" alt="">
                </li>
                <li class="gallery__item" data-cat="facility">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/gallery_contents2-12.jpg" alt="">
                </li>
                <li class="gallery__item" data-cat="facility">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/gallery_contents2-13.jpg" alt="">
                </li>
                <li class="gallery__item" data-cat="facility">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/gallery_contents2-14.jpg" alt="">
                </li>
                <li class="gallery__item" data-cat="work">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/gallery_contents2-15.jpg" alt="">
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- contents3 -->
        <div class="gallery__contents3 contents--small" id="gallery__contents3">
          <div class="gallery__bg">
            <div class="contents__sub-ttl contents__sub-ttl--cow-brand">
              <svg class="cow-spot-bg" width="240" height="160" viewBox="0 0 211 124" aria-hidden="true">
                <defs>
                  <linearGradient id="blobGrad" x1="0" y1="0" x2="0" y2="1">
                    <stop offset="0%" style="stop-color:rgba(var(--color-main-rgb),1)"/>
                    <stop offset="100%" style="stop-color:rgba(var(--color-sub-rgb),1)"/>
                  </linearGradient>
                </defs>
                <path d="M70,10 C25,20 5,60 35,95 C65,128 120,135 155,108 C188,82 195,38 162,15 C135,-4 100,1 70,10 Z" fill="url(#blobGrad)"/>
              </svg>
              <span>NAGANUMA</span>
              <h3>長沼分場</h3>
            </div>
            <div class="gallery__tabs">
              <button type="button" class="gallery__tab is-active" data-cat="all">すべて</button>
              <button type="button" class="gallery__tab" data-cat="barn">牛・牛舎</button>
              <button type="button" class="gallery__tab" data-cat="facility">施設・設備</button>
              <button type="button" class="gallery__tab" data-cat="work">長沼分場のスタッフ</button>
            </div>
            <div class="gallery__list">
              <ul class="scroll fadeIn">
                <!-- <?php $youtube_id = 'G13gt0dzmt4'; ?>
                <li class="gallery__item gallery__item--video" data-cat="barn" data-youtube="<?php echo esc_attr($youtube_id); ?>">
                  <img src="https://img.youtube.com/vi/<?php echo esc_attr($youtube_id); ?>/maxresdefault.jpg" alt="長沼分場ムービー">
                  <span class="gallery__play-icon" aria-hidden="true">▶</span>
                </li> -->
                <li class="gallery__item" data-cat="barn">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/gallery_contents3-1.jpg" alt="長沼分場ギャラリー">
                </li>
                <li class="gallery__item" data-cat="facility">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/gallery_contents3-2.jpg" alt="">
                </li>
                <li class="gallery__item" data-cat="facility">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/gallery_contents3-3.jpg" alt="">
                </li>
                <li class="gallery__item" data-cat="work">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/gallery_contents3-4.jpg" alt="">
                </li>
                <li class="gallery__item" data-cat="facility">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/gallery_contents3-5.jpg" alt="">
                </li>
                <li class="gallery__item" data-cat="work">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/gallery_contents3-6.jpg" alt="">
                </li>
                <li class="gallery__item" data-cat="barn">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/gallery_contents3-7.jpg" alt="">
                </li>
                <li class="gallery__item" data-cat="work">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/gallery_contents3-8.jpg" alt="">
                </li>
                <li class="gallery__item" data-cat="barn">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/gallery_contents3-9.jpg" alt="">
                </li>
                <li class="gallery__item" data-cat="barn">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/gallery_contents3-10.jpg" alt="">
                </li>
                <li class="gallery__item" data-cat="work">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/gallery_contents3-11.jpg" alt="">
                </li>
                <li class="gallery__item" data-cat="work">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/gallery_contents3-12.jpg" alt="">
                </li>
                <li class="gallery__item" data-cat="barn">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/gallery_contents3-13.jpg" alt="">
                </li>
                <li class="gallery__item" data-cat="facility">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/gallery_contents3-14.jpg" alt="">
                </li>
                <li class="gallery__item" data-cat="work">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/gallery_contents3-15.jpg" alt="">
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- /.page-gallery -->

      <!--##### gallery modal #####-->
      <div class="gallery__modal" id="galleryModal">
        <div class="gallery__modal-overlay"></div>
        <div class="gallery__modal-inner">
          <button type="button" class="gallery__modal-close" aria-label="閉じる">&times;</button>
          <div class="gallery__modal-content"></div>
        </div>
      </div>

    </div>
  </main>
</div>

<?php get_footer(); ?>