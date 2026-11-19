<?php get_header(); ?>
<?php get_template_part('gnav'); ?>

<!-- header -->
<div class="c__page-header">
  <div class="c__page-header-img--service"></div>
  <div class="c__page-header-detail">
    <div class="c__page-header-detail--passing">
      <h2 class="c__page-header-detail-ttl">
        <span class="c__page-header-detail-ttl--en">SERVICE</span>
        <span class="c__page-header-detail-ttl--jp">私たちの仕事</span>
      </h2>
    </div>
  </div>
  <div class="c__page-header-scroll-btn" id="scroll-btn"><span>SCROLL</span></div>
</div>

<!-- breadcrumb&page-menu -->
<div class="c__page-header-box">
    <!-- breadcrumb -->
    <div class="c__page-header-box-breadcrumb">
        <ol class="c__page-header-box-breadcrumb-list">
          <li class="c__page-header-box-breadcrumb-list-item"><a href="<?php echo home_url(); ?>">HOME</a></li>
          <li class="c__page-header-box-breadcrumb-list-item">私たちの仕事</li>
        </ol>
    </div>
    <!-- page-menu -->
    <div class="c__page-header-box-page-menu">
      <ul class="c__page-header-box-page-menu-list">
        <li class="c__page-header-box-page-menu-list-item"><a href="#mission">私たちの使命</a></li>
        <li class="c__page-header-box-page-menu-list-item"><a href="#service">私たちの仕事</a></li>
      </ul>
    </div>
</div>

<!-- contents -->
<div id="l__container">
  <main class="l__main">
    <div class="l__container-area-page">

      <!-- mission -->
      <div id="mission" class="l__container-area-page--mission">
        <div class="p__page-mission">
          <div class="p__page-mission--inner">
            <h3 class="c__content-heading--h3">
              <span class="c__content-heading--h3-en">MISSION</span>
              <span class="c__content-heading--h3-jp">私たちの使命</span>
            </h3>
            <div class="p__page-mission-line">
              <h4 class="p__page-mission-line--catch js-text-reveal">まちの暮らしが豊かになる<br>提案ができる集団でありたい</h4>
              <p class="p__page-mission-line--txt js-text-reveal">
                私たち建設業の仕事は、建物を作ったり、道路などのインフラ整備、<br>
                そして災害からまちを守るための施設を作ったり、<br>
                長きに渡り人々の暮らしを支えている、<br>
                いわば、まちの未来を作る仕事だと考えております。<br>
                佐藤建設で働く社員の一人一人が、<br>
                日頃の仕事やまちでの遊びを通し、<br>
                まちの課題にいち早く気づく感性を育み、<br>
                まちの暮らしが豊かになる提案ができる集団でありたいと考えます。
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- service -->
      <div id="service" class="l__container-area-page--service">
        <div class="p__page-service">
          <div class="p__page-service--inner">
            <h3 class="c__content-heading--h3">
              <span class="c__content-heading--h3-en-w">SERVICE</span>
              <span class="c__content-heading--h3-jp-w">私たちの仕事</span>
            </h3>
            <div class="p__page-service-group">
              <ul class="p__page-service-group-list">
                <li class="p__page-service-group-list-item">
                  <div class="p__page-service-group-list-item--bg"></div>
                  <div class="p__page-service-group-list-item-pic" data-aos="fade-left">
                    <img class="p__page-service-group-list-item-pic-img" src="<?php echo get_template_directory_uri(); ?>/img/index_service-item01.jpg" alt="建築事業">
                  </div>
                  <div class="p__page-service-group-list-item-box">
                      <h4 class="p__page-service-group-list-item-box-ttl">建築事業<span class="p__page-service-group-list-item-box-ttl--en">ARCHITECTURE</span></h4>
                      <p class="p__page-service-group-list-item-box-txt js-text-reveal">
                        佐藤建設は新規案件から様々な要望に対するご提案、設計業務、施工、御引渡しまでの業務を、お客様に対し、「迅速」「誠実」「正確」に「技術力」「提案力」「対応力」でご提供いたします。<br>
                        ありがたいことにご依頼いただく仕事は、公共施設、教育施設、病院・福祉施設、工業・事務所・店舗など、多岐に渡り承っております。
                      </p>
                  </div>
                </li>
                <li class="p__page-service-group-list-item">
                  <div class="p__page-service-group-list-item--bg"></div>
                  <div class="p__page-service-group-list-item-pic" data-aos="fade-right">
                    <img class="p__page-service-group-list-item-pic-img" src="<?php echo get_template_directory_uri(); ?>/img/index_service-item02.jpg" alt="土木事業">
                  </div>
                  <div class="p__page-service-group-list-item-box">
                      <h4 class="p__page-service-group-list-item-box-ttl">土木事業<span class="p__page-service-group-list-item-box-ttl--en">CIVIL ENGINEERING</span></h4>
                      <p class="p__page-service-group-list-item-box-txt js-text-reveal">
                        地域にとって大切な社会資本整備の担い手として、佐藤建設はその力を発揮しています。<br>
                        また、災害時には関係官庁と協力して、復興工事に当たります。<br>
                        佐藤建設では、河川工事、道路工事、下水道工事、造成工事などの実績があります。冬期期間は、除雪業務も承ります。<br>
                        皆様の生活に欠かせないインフラを地域の安全のために、責任感と使命感を持って細部にまで抜かりなく施工します。
                      </p>
                  </div>
                </li>
                <li class="p__page-service-group-list-item">
                  <div class="p__page-service-group-list-item--bg"></div>
                  <div class="p__page-service-group-list-item-pic" data-aos="fade-left">
                    <img class="p__page-service-group-list-item-pic-img" src="<?php echo get_template_directory_uri(); ?>/img/index_service-item03.jpg" alt="住宅事業">
                  </div>
                  <div class="p__page-service-group-list-item-box">
                      <h4 class="p__page-service-group-list-item-box-ttl">住宅事業<span class="p__page-service-group-list-item-box-ttl--en">HOUSING</span></h4>
                      <p class="p__page-service-group-list-item-box-txt js-text-reveal">
                        佐藤建設は、地域の皆様のホームドクターとして、新築・リフォーム・リノベーション・不動産取引など、住まいに関わる全てのご相談に、ワンストップで対応しております。<br>
                        「家を建てたい」「リフォームしたい」「家を売りたい、買いたい」といった具体的なご相談はもちろん、「家をリフォームするか、建て替えた方が良いか迷っている」「中古住宅を買ってリノベーションしたい」など、お客様の様々なご要望にも専門のスタッフがお応えいたします。
                      </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div>
  </main>
</div>

<?php get_footer(); ?>