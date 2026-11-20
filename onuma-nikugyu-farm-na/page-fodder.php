<?php get_header(); ?>

<div id="scroll__contents">
  <main>
    <div class="wrapper">

      <!--##### 下層ページヘッダー #####-->
      <?php
      get_template_part('template-parts/header-sub', null, [
        'title' => 'エサのこだわり',
        'bg_pc' => get_template_directory_uri() . '/img/page/header_fodder.jpg',
        'bg_sp' => get_template_directory_uri() . '/img/page/header_fodder.jpg',
      ]);
      ?>

      <!--##### パンくずリスト #####-->
      <?php get_template_part('template-parts/breadcrumb'); ?>

      <!----------------------------------------------------------------------->
      <!--##### エサのこだわり #####-->
      <div class="page-fodder">
        <!-- contents1 -->
        <div class="fodder__contents1 contents--small">
          <div class="fodder__bg">
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
              <span>FEEDING PHILOSOPHY</span>
              <h3>エサのこだわり</h3>
            </div>
            <div class="fodder__list">
              <ul>
                <li class="scroll fadeInLeft">
                  <div class="fodder__box">
                    <h3 class="fodder__ttl">配合飼料</h3>
                    <p class="fodder__txt">
                      <span>オリジナル飼料を使用しております。</span>
                      大手配合飼料メーカーであるホクレンくみあい飼料・日清丸紅飼料(株)・フィード・ワン(株)に協力を依頼し、プライベートブランドで当牧場の飼養方法に合う設計をした飼料を専用車両で搬入しています。季節や牛の変化に応じ、定期的な見直しを実施しております。
                    </p>
                  </div>
                  <div class="fodder__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/page/fodder_img1.jpg" alt="配合飼料">
                  </div>
                </li>
                <li class="scroll fadeInLeft">
                  <div class="fodder__box">
                      <h3 class="fodder__ttl">牧草</h3>
                      <p class="fodder__txt">
                        およそ300haの牧草地に堆肥を十分に還元し、循環農業で牧草を作っており、自給率の向上に努めております。<br>草地拡大を進めておりますが、現在は道内契約農家より道産牧草(チモシー・オーチャード・麦わら等)の購入を中心にまかなっております。
                      </p>
                  </div>
                  <div class="fodder__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/page/fodder_img2.jpg" alt="牧草">
                  </div>
                </li>
                <li class="scroll fadeInLeft">
                  <div class="fodder__box">
                    <h3 class="fodder__ttl">デントコーン</h3>
                    <p class="fodder__txt">
                      飼料用に栽培されるとうもろこしのことで、実以外の茎や葉も一緒に裁断し、<a class="words__link" href="<?php echo home_url('/words/#words3'); ?>">サイレージ化(乳酸菌発酵)</a>させた後に、給与いたします。<br>牧草同様に自家堆肥を使用しておよそ110haで栽培しております。これを与えることで肉に深い味わいが生まれると考え、使用しております。
                    </p>
                  </div>
                  <div class="fodder__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/page/fodder_img3.jpg" alt="デントコーン">
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div>
  </main>

<?php get_footer(); ?>