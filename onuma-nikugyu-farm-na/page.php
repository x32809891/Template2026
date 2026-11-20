<?php get_header(); ?>

<div id="scroll__contents">
  <main>
    <div class="wrapper">

      <!--##### 下層ページヘッダー #####-->
      <?php
      get_template_part('template-parts/header-sub', null, [
          'title' => '',
          'bg_pc' => get_template_directory_uri() . '/img/page/header_contact.jpg',
          'bg_sp' => get_template_directory_uri() . '/img/page/header_contact.jpg',
      ]);
      ?>

      <!--##### パンくずリスト #####-->
      <?php get_template_part('template-parts/breadcrumb'); ?>

      <!--##### page #####-->
      <div class="page">
        <!-- contents1 -->
        <div class="contact__contents contents--small contents--type01">
          <div class="contact__form">
              <?php the_content(); ?>
          </div>
        </div>
      </div>
    </div>
  </main>

<?php get_footer(); ?>