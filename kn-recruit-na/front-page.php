<?php get_header(); ?>
<?php get_template_part('gnav'); ?>

<div id="l__container">
  <main class="l__main">
    <div class="l__container-area">

      <!-- mv -->
      <div class="l__container-area--mv">
        <div class="p__index-mv">
          <div id="slider"></div>
          <div class="p__index-mv-detail">
            <div class="p__index-mv-detail--passing">
              <p class="p__index-mv-detail-ttl-en">Let's innovate technology from the regions.</p>
            </div><br>
            <div class="p__index-mv-detail--passing">
              <p class="p__index-mv-detail-ttl-jp">そうだ、<br>地方から技術革新。</p>
            </div><br>
            <div class="p__index-mv-detail--passing">
              <p class="p__index-mv-detail-subttl">
                佐藤建設は地域に根付いた企業を目指し、邁進して参りました。<br>
                目まぐるしく変化する社会の中で、確かな技術と実績で信頼を築き上げました。<br>
                そして、共に地方から世界へ技術を発信しませんか。
              </p>
            </div>
          </div>
          <div class="p__index-mv-scroll-btn" id="scroll-btn"><span>SCROLL</span></div>
        </div>
      </div>

      <!-- concept -->
      <div class="l__container-area--concept">
        <div class="p__index-concept">
          <div class="p__index-concept--item">
            <h2 class="c__content-heading--h2">
                <span class="c__content-heading--h2-en">CONCEPT</span>
                <span class="c__content-heading--h2-jp">佐藤建設の想い</span>
            </h2>
            <div class="p__index-concept-detail">
              <h3 class="p__index-concept-detail-ttl js-text-reveal">このまちと生活する<br>人の暮らしを支えるために</h3>
              <p class="p__index-concept-detail-txt">
                <span class="p__index-concept-detail-txt--item js-text-reveal">佐藤建設は大正13年の創業以来100年間、総合建設業者として北海道札幌市とその周辺地域のまちづくりに携わり、地域の発展とともに信頼と実績を積み重ねてまいりました。</span><br>
                <span class="p__index-concept-detail-txt--item js-text-reveal">これからも建設事業を通じて、皆さまの豊かな暮らしの基盤を築き、地域に根ざした企業であり続けることを目指してまいります。</span>
              </p>
            </div>
          </div>
          <div class="p__index-concept--item">
            <div class="p__index-concept-gallery">
              <img class="p__index-concept-gallery-img" src="<?php echo get_template_directory_uri(); ?>/img/index_concept01.jpg" alt="コンセプト1" width="100%" height="100%" data-aos="fade-up">
              <img class="p__index-concept-gallery-img" src="<?php echo get_template_directory_uri(); ?>/img/index_concept02.jpg" alt="コンセプト2" width="100%" height="100%" data-aos="fade-down">
            </div>
          </div>
        </div>
      </div>

      <!-- layer01 -->
      <div class="l__container-area--layer01">

        <!-- layer02 -->
        <div class="l__container-area--layer02">

          <!-- service -->
          <div class="l__container-area--service">
            <div class="p__index-service">
              <div class="p__index-service--inner">
                <div class="p__index-service-image">
                  <img class="p__index-service-image-img" src="<?php echo get_template_directory_uri(); ?>/img/index_service-img.jpg" alt="私たちの仕事" data-aos="fade-left">
                </div>
                <div class="p__index-service-content">
                  <div class="p__index-service-group">
                    <ul class="p__index-service-group-list">
                      <li class="p__index-service-group-list-item">
                        <div class="p__index-service-group-list-item-detail">
                          <h2 class="c__content-heading--h2">
                            <span class="c__content-heading--h2-en">SERVICE</span>
                            <span class="c__content-heading--h2-jp">私たちの仕事</span>
                          </h2>
                          <h3 class="p__index-service-group-list-item-detail-ttl js-text-reveal">流動的な建設業界を、<br>スペシャリストが支える</h3>
                          <p class="p__index-service-group-list-item-detail-txt js-text-reveal">
                            私たちが目指すのは、ただハコをつくる「もの」づくりではなく、楽しみや喜びを伝える「コト」づくり。柔軟に価値観をアップデートさせ、個人と企業が共に成長する喜びをわかちあおう。
                          </p>
                          <div class="c__content-btn">
                            <a class="c__content-btn--a" href="<?php echo home_url('/service/'); ?>"><span>私たちの仕事</span></a>
                          </div>
                        </div>
                      </li>
                      <li class="p__index-service-group-list-item" data-aos="fade-up">
                        <div class="p__index-service-group-list-item-pic">
                          <img class="p__index-service-group-list-item-pic-img" src="<?php echo get_template_directory_uri(); ?>/img/index_service-item01.jpg" alt="建築事業">
                        </div>
                        <div class="p__index-service-group-list-item-box">
                          <h4 class="p__index-service-group-list-item-box-ttl">建築事業</h4>
                          <p class="p__index-service-group-list-item-box-txt">
                            佐藤建設は新規案件から様々な要望に対するご提案、設計業務、施工、御引渡しまでの業務を、お客様に対し、「迅速」「誠実」「正確」に「技術力」「提案力」「対応力」でご提供いたします。
                          </p>
                        </div>
                      </li>
                      <li class="p__index-service-group-list-item" data-aos="fade-up">
                        <div class="p__index-service-group-list-item-pic">
                          <img class="p__index-service-group-list-item-pic-img" src="<?php echo get_template_directory_uri(); ?>/img/index_service-item02.jpg" alt="土木事業">
                        </div>
                        <div class="p__index-service-group-list-item-box">
                          <h4 class="p__index-service-group-list-item-box-ttl">土木事業</h4>
                          <p class="p__index-service-group-list-item-box-txt">
                            地域にとって大切な社会資本整備の担い手として、佐藤建設はその力を発揮しています。また、災害時には関係官庁と協力して、復興工事に当たります。
                          </p>
                        </div>
                      </li>
                      <li class="p__index-service-group-list-item" data-aos="fade-up">
                        <div class="p__index-service-group-list-item-pic">
                          <img class="p__index-service-group-list-item-pic-img" src="<?php echo get_template_directory_uri(); ?>/img/index_service-item03.jpg" alt="住宅事業">
                        </div>
                        <div class="p__index-service-group-list-item-box">
                          <h4 class="p__index-service-group-list-item-box-ttl">住宅事業</h4>
                          <p class="p__index-service-group-list-item-box-txt">
                            佐藤建設は、地域の皆様のホームドクターとして、新築・リフォーム・リノベーション・不動産取引など、住まいに関わる全てのご相談に、ワンストップで対応しております。
                          </p>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div><!-- layer02 -->

        <!-- works(CMS／default) -->
        <div class="l__container-area--works">
          <div class="p__index-works">
            <div class="p__index-works-detail">
              <div class="p__index-works-detail-content">
                <h2 class="c__content-heading--h2">
                  <span class="c__content-heading--h2-en">WORKS</span>
                  <span class="c__content-heading--h2-jp">施工事例</span>
                </h2>
                <p class="p__index-works-detail-content-txt js-text-reveal">
                  佐藤建設は、北海道札幌市を中心に建設事業と土木事業と住宅事業の施工を承っています。<br>
                  公共から民間まで幅広く対応しておりますので、まずはご相談ください。
                </p>
              </div>
              <div class="c__content-btn c__content-btn--nm">
                <a class="c__content-btn--a" href="<?php echo get_post_type_archive_link( 'post' ); ?>"><span>施工事例一覧</span></a>
              </div>
            </div>
            <!-- ※記事が3つ以下:左寄せの横並び／記事が4つ以上:スライドショーの表示 -->
            <div class="p__index-works-slider">
              <ul class="slider">
                <?php
                $args = array(
                  'post_type' => 'post',
                  'posts_per_page' => 6, // 表示する投稿数
                );
                $query = new WP_Query( $args );
                if ( $query->have_posts() ) :
                  while ( $query->have_posts() ) : $query->the_post();
                    ?>
                    <li class="slider-item">
                      <?php if ( has_post_thumbnail() ) : ?>
                          <div class="slider-item-img">
                              <a href="<?php the_permalink(); ?>" aria-label="記事詳細へ"><?php the_post_thumbnail(); ?></a>
                              <div class="slider-item-img-overlay"></div>
                          </div>
                          <h3>
                            <a href="<?php the_permalink(); ?>" aria-label="記事詳細へ">
                              <?php 
                              echo mb_strimwidth(get_the_title(), 0, 40, '…'); 
                              ?>
                            </a>
                          </h3>
                      <?php endif; ?>
                    </li>
                  <?php
                  endwhile;
                  wp_reset_postdata();
                endif;
                ?>
              </ul>
              <div class="arrow_box"></div>
            </div>
          </div>
        </div>

        <!-- recruit -->
        <div class="l__container-area--recruit">
          <div class="p__index-recruit">
            <div class="p__index-recruit--inner">
              <div class="p__index-recruit-content">
                <h2 class="c__content-heading--h2">
                  <span class="c__content-heading--h2-en">RECRUIT</span>
                  <span class="c__content-heading--h2-jp">採用情報</span>
                </h2>
                <p class="p__index-recruit-content-txt js-text-reveal">
                  佐藤建設では一緒に働く仲間を募集しています。<br>
                  未経験の方でもご安心ください。先輩社員が一から丁寧にお教えいたします。<br>
                  建設業界でスペシャリストを目指しませんか。<br>
                  ご興味のある方は、募集要項をご確認の上、ご応募をお願いいたします。
                </p>
                <div class="c__content-btn">
                  <a class="c__content-btn--a" href="<?php echo home_url('/recruit/'); ?>"><span>採用情報</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        </div><!-- layer01 -->

        <!-- news(CMS／custom) -->
        <div class="l__container-area--news">
          <div class="p__index-news">
            <div class="p__index-news--inner">
              <div class="p__index-news-detail">
                <h2 class="c__content-heading--h2">
                  <span class="c__content-heading--h2-en">NEWS</span>
                  <span class="c__content-heading--h2-jp">最新情報</span>
                </h2>
                <div class="c__content-btn c__content-btn--nm">
                  <a class="c__content-btn--a" href="<?php echo get_post_type_archive_link( 'news' ); ?>"><span>最新情報一覧</span></a>
                </div>
              </div>
              <div class="p__index-news-box">
                <ul class="p__index-news-box-list">
                  <?php
                  $args = array(
                    'post_type' => 'news',
                    'posts_per_page' => 6, // 表示する投稿数
                  );
                  $query = new WP_Query( $args );
                  if ( $query->have_posts() ) :
                    while ( $query->have_posts() ) : $query->the_post();
                  ?>
                  <li class="p__index-news-box-list-item" data-aos="fade-in">
                    <div class="p__index-news-box-list-item-thumbnail">
                      <a href="<?php echo get_the_permalink(); ?>" aria-label="記事詳細へ">
                        <?php 
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail( 'small' );
                        } else {
                            echo '<img src="' . get_template_directory_uri() . '/img/index_mv01.jpg" alt="サムネイル画像">';
                        }
                        ?>
                      </a>
                    </div>
                    <div class="p__index-news-box-list-item-content">
                      <div class="p__index-news-box-list-item-content-details">
                        <p class="p__index-news-box-list-item-content-details-date"><?php echo get_the_date( 'Y.m.d' ); ?></p>
                        <p class="p__index-news-box-list-item-content-details-category"><?php the_terms( get_the_ID(), 'news-cat', '', '' ); ?></p>
                      </div>
                      <p class="p__index-news-box-list-item-content-ttl"><a href="<?php echo get_the_permalink(); ?>" aria-label="記事詳細へ"><?php echo mb_substr( $post->post_title, 0, 30) . '...'; ?></a></p>
                    </div>
                  </li>
                  <?php
                  endwhile;
                  wp_reset_postdata();
                  endif;
                  ?>
                </ul>
              </div>
            </div>
          </div>
        </div>

    </div>
  </main>
</div>

<?php get_footer(); ?>