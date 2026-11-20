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
      <!--##### activity-single #####-->
      <div class="activity-single">
        <div class="activity__contents contents--small contents--type01">
          <div class="activity__details">
            <div class="activity__item-single scroll fadeIn">
              <h3 class="activity__ttl-single"><?php the_title(); ?></h3>
              <div class="activity__box-single">
                <p class="activity__date-single"><?php the_time(get_option('date_format')); ?></p>
                <?php the_category('') ?>
              </div>
              <div class="activity-single__txt"><?php the_content(); ?></div>
              <div class="activity__nav">
                <div class="activity__nav-prev">
                  <?php
                    previous_post_link(
                      '%link',
                      '<span class="activity__nav-txt">前の記事へ</span>',
                      true
                    );
                  ?>
                </div>
                <div class="activity__nav-list">
                  <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="activity__nav-back">
                    活動報告一覧
                  </a>
                </div>
                <div class="activity__nav-next">
                  <?php
                    next_post_link(
                      '%link',
                      '<span class="activity__nav-txt">次の記事へ</span>',
                      true
                    );
                  ?>
                </div>
              </div>

            </div>
            <!-- sidebar -->
            <?php get_sidebar(); ?>
          </div>
        </div>
      </div>

    </div>
  </main>

<?php get_footer(); ?>