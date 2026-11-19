<?php get_header(); ?>
<?php get_template_part('gnav'); ?>

<!-- header -->
<div class="c__page-header">
  <div class="c__page-header-img--company"></div>
  <div class="c__page-header-detail">
    <div class="c__page-header-detail--passing">
      <h2 class="c__page-header-detail-ttl">
        <span class="c__page-header-detail-ttl--en">COMPANY</span>
        <span class="c__page-header-detail-ttl--jp">会社概要</span>
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
            <li class="c__page-header-box-breadcrumb-list-item">会社概要</li>
        </ol>
    </div>
    <!-- page-menu -->
    <div class="c__page-header-box-page-menu">
      <ul class="c__page-header-box-page-menu-list">
        <li class="c__page-header-box-page-menu-list-item"><a href="#message">代表挨拶</a></li>
        <li class="c__page-header-box-page-menu-list-item"><a href="#company">会社概要</a></li>
        <li class="c__page-header-box-page-menu-list-item"><a href="#history">沿革</a></li>
        <li class="c__page-header-box-page-menu-list-item"><a href="#access">アクセスマップ</a></li>
      </ul>
    </div>
</div>

<!-- contents -->
<div id="l__container">
  <main class="l__main">
    <div class="l__container-area-page">

      <!-- message -->
      <div id="message" class="l__container-area-page--message">
        <div class="p__page-message">
          <div class="p__page-message--inner">
            <h3 class="c__content-heading--h3">
              <span class="c__content-heading--h3-en">MESSAGE</span>
              <span class="c__content-heading--h3-jp">代表挨拶</span>
            </h3>
            <div class="p__page-message-box">
              <div class="p__page-message-box-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/page_company-img.jpg" alt="">
              </div>
              <div class="p__page-message-box-line">
                <h4 class="p__page-message-box-line--ttl js-text-reveal">夢と想像力に溢れた企業、<br>佐藤建設でございます。</h4>
                <p class="p__page-message-box-line--txt js-text-reveal">
                  <span class="p__page-message-box-line--txt--para">
                    当社は昭和47年に創業し、一世紀の時を経て、現在もお客様満足度100%を目指して成長しております。<br>
                    住み良い街づくりのため、環境にやさしい仕事にチャレンジし、お客様の喜びや感動を一番に考えたサービスを提供いたします。
                  </span>
                  <span class="p__page-message-box-line--txt--para">
                    お客様の喜びと感動を最優先に考え、信頼され愛される企業を目指して社員一同努力しています。
                  </span>
                  <span class="p__page-message-box-line--txt--para">
                    今後ともご支援、ご愛顧を賜りますよう心よりお願い申し上げます。
                  </span>
                </p>
                <p class="p__page-message-box-line--signature js-text-reveal">
                  佐藤建設株式会社<br>
                  <span class="p__page-message-box-line--signature--name">佐藤 康之</span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- company -->
      <div id="company" class="l__container-area-page--company">
        <div class="p__page-company">
            <div class="p__page-company--inner">
              <h3 class="c__content-heading--h3">
                <span class="c__content-heading--h3-en">COMPANY</span>
                <span class="c__content-heading--h3-jp">会社概要</span>
              </h3>
              <div class="p__page-company-list" data-aos="fade-up">
                <table>
                  <tbody>
                    <tr>
                      <th>商号</th>
                      <td>株式会社佐藤建設</td>
                    </tr>
                    <tr>
                      <th>代表取締役</th>
                      <td>佐藤 康之</td>
                    </tr>
                    <tr>
                      <th>創業年月日</th>
                      <td>昭和47年5月10日</td>
                    </tr>
                    <tr>
                      <th>資本金</th>
                      <td>3,000万円</td>
                    </tr>
                    <tr>
                      <th>本社所在地</th>
                      <td>〒000-0000 北海道札幌市中央区</td>
                    </tr>
                    <tr>
                      <th>従業員数</th>
                      <td>49名（R6年4月現在）</td>
                    </tr>
                    <tr>
                      <th>主要取引先</th>
                      <td>地元の企業・個人のお客様、その他官公庁</td>
                    </tr>
                    <tr>
                      <th>電話番号</th>
                      <td>000-000-0000</td>
                    </tr>
                    <tr>
                      <th>FAX番号</th>
                      <td>000-000-0000</td>
                    </tr>
                    <tr>
                      <th>事業内容</th>
                      <td>建築事業、土木事業、住宅事業</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
        </div>
      </div>

      <!-- history -->
      <div id="history" class="l__container-area-page--history">
        <div class="p__page-history">
          <div class="p__page-history--inner">
            <h3 class="c__content-heading--h3">
              <span class="c__content-heading--h3-en">HISTORY</span>
              <span class="c__content-heading--h3-jp">沿革</span>
            </h3>
            <div class="p__page-history-list" data-aos="fade-up">
              <table>
                <tbody>
                  <tr>
                    <th>1972年5月</th>
                    <td>佐藤組 創業</td>
                  </tr>
                  <tr>
                    <th>1982年</th>
                    <td>建設業 北海道知事登録</td>
                  </tr>
                  <tr>
                    <th>1990年2月</th>
                    <td>株式会社佐藤建設 設立</td>
                  </tr>
                  <tr>
                    <th>2000年</th>
                    <td>建設業 北海道知事許可</td>
                  </tr>
                  <tr>
                    <th>2010年</th>
                    <td>有限会社リアルエステート佐藤 設立</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <!-- access map -->
      <div id="access" class="l__container-area-page--access">
        <div class="p__page-access">
          <div class="p__page-access--inner">
            <h3 class="c__content-heading--h3">
              <span class="c__content-heading--h3-en">ACCESS MAP</span>
              <span class="c__content-heading--h3-jp">アクセスマップ</span>
            </h3>
            <div class="p__page-access-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2914.7865661349892!2d141.344121276531!3d43.06695629014927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0b299ff9d4f501%3A0x277c848ba9b1f9db!2z44CSMDYwLTAwMDUg5YyX5rW36YGT5pyt5bmM5biC5Lit5aSu5Yy65YyX77yV5p2h6KW_77yW5LiB55uu77yR4oiS77yS77yT!5e0!3m2!1sja!2sjp!4v1731566415413!5m2!1sja!2sjp" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="google map"></iframe>
            </div>
          </div>
        </div>
      </div>

    </div>
  </main>
</div>

<?php get_footer(); ?>