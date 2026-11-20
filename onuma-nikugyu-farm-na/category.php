<?php get_header(); ?>

<div id="scroll__contents">
  <main>
    <div class="wrapper">

      <!--##### 下層ページヘッダー #####-->
      <?php
        get_template_part('template-parts/header-sub', null, [
            'title' => single_cat_title('', false),
            'bg_pc' => get_template_directory_uri() . '/img/page/header_activity.jpg',
            'bg_sp' => get_template_directory_uri() . '/img/page/header_activity.jpg',
        ]);
      ?>

      <!--##### パンくずリスト #####-->
      <?php get_template_part('template-parts/breadcrumb'); ?>

      <!----------------------------------------------------------------------->
      <!--##### activity-category #####-->
      <div class="activity-category">
        <div class="activity__contents contents--small contents--type01">
          <!-- contents -->
          <div class="activity__article">
            <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>
              <div class="activity__item scroll fadeIn">
                <a class="activity__link" href="<?php the_permalink(); ?>">
                  <div class="activity__box">
                    <p class="activity__date"><?php the_time(get_option('date_format')); ?></p>
                    <p class="activity__cat">
                      <?php
                        $categories = get_the_category();
                        if (!empty($categories)) {
                        foreach ($categories as $category) {
                          echo '<span class="activity__cat-item">' . esc_html($category->name) . '</span>';
                        }
                        }
                      ?>
                    </p>
                  </div>
                  <h3 class="activity__ttl">
                    <?php the_title(); ?>
                    <span class="--arrow">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="4" y1="12" x2="20" y2="12"></line>
                        <polyline points="14 6 20 12 14 18"></polyline>
                      </svg>
                    </span>
                  </h3>
                </a>
              </div>
              <?php endwhile; ?>
            <?php else : ?>
              <p><span class="not-found__txt">投稿が見つかりません</span></p>
            <?php endif; ?>
          </div>
          <!-- pagination -->
          <div class="archive_pagination">
            <?php if (function_exists("the_pagination")) the_pagination(); ?>
          </div>
        </div>
      </div>
      
    </div>
  </main>

<?php get_footer(); ?>