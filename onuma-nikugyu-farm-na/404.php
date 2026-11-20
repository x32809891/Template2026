<?php get_header(); ?>

<div id="scroll__contents">

  <main>
    <div class="wrapper">

      <!--##### 下層ページヘッダー #####-->
      <?php
      get_template_part('template-parts/header-sub', null, [
          'title' => '404 Not Fonud',
          'bg_pc' => get_template_directory_uri() . '/img/page/header_activity.jpg',
          'bg_sp' => get_template_directory_uri() . '/img/page/header_activity.jpg',
      ]);
      ?>

      <!--##### パンくずリスト #####-->
      <?php get_template_part('template-parts/breadcrumb'); ?>

      <!----------------------------------------------------------------------->
      <!--##### 404 #####-->
      <div class="page-404">
        <div class="contents contents--type01">
          <p style="text-align: center; margin: 7rem auto 2rem;">
            申し訳ありませんが、お探しのページは見つかりませんでした。
          </p>
          <p style="text-align: center;">
            お手数ですが、もう一度探して頂くか、　<a href="<?php echo home_url(); ?>">HOME</a>　にお戻りください。
          </p>
        </div>
      </div>
    </div>
  </main>

<?php get_footer(); ?>