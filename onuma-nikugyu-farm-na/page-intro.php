<?php get_header(); ?>

<div id="scroll__contents">
  <main>
    <div class="wrapper">

      <!--##### 下層ページヘッダー #####-->
      <?php
      get_template_part('template-parts/header-sub', null, [
        'title' => '導入から出荷まで',
        'bg_pc' => get_template_directory_uri() . '/img/page/header_intro.jpg',
        'bg_sp' => get_template_directory_uri() . '/img/page/header_intro.jpg',
      ]);
      ?>

      <!--##### パンくずリスト #####-->
      <?php get_template_part('template-parts/breadcrumb'); ?>

      <!----------------------------------------------------------------------->
      <!--##### 導入から出荷まで #####-->
      <div class="page-intro">
        <!-- contents1 -->
        <div class="intro__contents1 contents--small contents--type01">
          <div class="contents__sub-ttl contents__sub-ttl--cow-brand">
            <svg class="cow-spot-bg" width="240" height="160" viewBox="0 0 211 124" aria-hidden="true">
              <defs>
                <linearGradient id="blobGrad" x1="0" y1="0" x2="0" y2="1">
                  <stop offset="0%" style="stop-color:rgba(var(--color-main-rgb),1)"/>
                  <stop offset="100%" style="stop-color:rgba(var(--color-sub-rgb),1)"/>
                </linearGradient>
              </defs>
              <path d="M70,10 C25,20 5,60 35,95 C65,128 120,135 155,108 C188,82 195,38 162,15 C135,-4 100,1 70,10 Z" fill="url(#blobGrad)">
            </svg>
            <span>FROM BIRTH TO TABLE</span>
            <h3>​出生から食卓に並ぶまで</h3>
          </div>
          <div class="intro__list">
            <ul class="intro__list--ul">
              <li class="scroll fadeIn">
                <h4>酪農家</h4>
                <p>酪農家は雌牛を飼って子牛を産ませ、ミルクをしぼります。</p>
              </li>
              <li>
                <div>
                  <ol class="intro__list--ol">
                    <li>
                      <div class="--ttl">
                        <div class="--img">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/page/intro_contents1-1.png" alt="ホルスタイン">
                        </div>
                        <h4><a class="words__link" href="<?php echo home_url('/words/#words1'); ?>">ホルスタイン</a></h4>
                      </div>
                      <div class="--details scroll fadeInUp">
                        <h5>育成農家（小澤牧場分場）</h5>
                        <p>育成農家は、生まれて間もない雄子牛を買ってきて、<br>ある程度の大きさになるまで育てます。</p>
                        <p>
                          <span>入荷時</span>7日～1ヶ月<br>
                          <span>出荷時</span>7～8ヶ月齢
                        </p>
                      </div>
                    </li>
                    <li>
                      <div class="--ttl">
                        <div class="--img">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/page/intro_contents1-2.png" alt="F1">
                        </div>
                        <h4><a class="words__link" href="<?php echo home_url('/words/#words2'); ?>">F1（交雑種）</a></h4>
                      </div>
                      <div class="--details scroll fadeInUp">
                        <h5>育成農家（小澤牧場分場）</h5>
                        <p>育成農家は、生まれて間もない雄子牛を買ってきて、<br>ある程度の大きさになるまで育てます。</p>
                        <p>
                          <span>入荷時</span>7日～1ヶ月<br>
                          <span>出荷時</span>7～8ヶ月齢
                        </p>
                      </div>
                    </li>
                  </ol>
                </div>
              </li>
              <li>
                <div>
                  <ol class="intro__list--ol">
                    <li>
                      <div class="--details scroll fadeInUp">
                        <h5>肥育農家（大沼肉牛ファーム）</h5>
                        <p>肥育農家は、子牛を買ってきて、<br>肉用に大きく育てて出荷します。</p>
                        <p>
                          <span>入荷時</span>7～8ヶ月齢<br>
                          <span>出荷時</span>18～20ヶ月齢
                        </p>
                      </div>
                    </li>
                    <li>
                      <div class="--details scroll fadeInUp">
                        <h5>肥育農家（小澤牧場本場・大沼肉牛ファーム）</h5>
                        <p>肥育農家は、子牛を買ってきて、<br>肉用に大きく育てて出荷します。</p>
                        <p>
                          <span>入荷時</span>7～9ヶ月齢<br>
                          <span>出荷時</span>23～26ヶ月齢
                        </p>
                      </div>
                    </li>
                  </ol>
                </div>
              </li>
              <li class="scroll fadeIn">
                <h4>販売店～消費者</h4>
                <p>
                  ホルスタイン種など乳用種の雄子牛は、ほとんど肉用に飼われます。<br>
                  スーパーなどの量販店を通して、消費者の元に届けられます。
                </p>
              </li>
            </ul>
          </div>
        </div>
        <!-- contents2 -->
        <div class="intro__contents2 contents--small">
          <div class="intro__bg">
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
              <span>ORIGIN</span>
              <h3>導入元</h3>
            </div>
            <div class="intro__box">
              <div class="intro__box--top">
                <p>ホルスタイン</p>
                <ul>
                  <li class="scroll fadeInUp">
                    <h4>小澤牧場（株）芽室分場</h4>
                    <p><span>代表者</span>小澤 孔仁</p>
                    <p><span>​所在地</span>北海道河西郡芽室町</p>
                  </li>
                  <li class="scroll delay fadeInUp">
                    <h4>小澤牧場（株）長沼分場</h4>
                    <p><span>代表者</span>小澤 孔仁</p>
                    <p><span>​所在地</span>北海道夕張郡長沼町</p>
                  </li>
                  <li class="scroll delay2 fadeInUp">
                    <h4>(株)敬和牧場</h4>
                    <p><span>代表者</span>代表取締役 羽田野 敬仁</p>
                    <p><span>​所在地</span>北海道中川郡美深町</p>
                  </li>
                  <li class="scroll fadeInUp">
                    <h4>高橋牧場</h4>
                    <p><span>代表者</span>高橋 光也</p>
                    <p><span>所在地</span>北海道久遠郡せたな町</p>
                  </li>
                  <li class="scroll delay fadeInUp">
                    <h4>道内各素牛市場</h4>
                  </li>
                </ul>
              </div>
              <div class="intro__box--bottom">
                <p>F1（交雑種）</p>
                <ul>
                  <li class="scroll fadeInUp">
                    <a href="https://top-farm.jp/" target="_blank">
                      <h4>（株）トップファーム</h4>
                      <p><span>代表者</span>代表取締役 井上 茂幸</p>
                      <p><span>​所在地</span>北海道常呂郡佐呂間町</p>
                    </a>
                  </li>
                  <li class="scroll delay fadeInUp">
                    <h4>大原牧場（有）</h4>
                    <p><span>代表者</span>代表取締役 大原 慧</p>
                    <p><span>​所在地</span>北海道北斗市</p>
                  </li>
                  <li class="scroll fadeInUp">
                    <h4>小澤牧場（株）長沼分場</h4>
                    <p><span>代表者</span>小澤 孔仁</p>
                    <p><span>所在地</span>北海道夕張郡長沼町</p>
                  </li>
                  <li class="scroll delay2 fadeInUp">
                    <h4>道内各素牛市場</h4>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- contents3 -->
        <div class="intro__contents3 contents--small contents--type01">
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
            <span>RAISING ENVIRONMENT</span>
            <h3>肥育環境</h3>
          </div>
          <div class="intro__env">
            <dl>
              <div class="intro__env__item scroll fadeInLeft">
                <div class="intro__env__icon">
                  <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 3C12 3 6 10 6 14.5C6 17.5 8.7 20 12 20C15.3 20 18 17.5 18 14.5C18 10 12 3 12 3Z"/>
                  </svg>
                </div>
                <dt>雨の日でも長靴なしで見学できる</dt>
                <dd>当牧場は駒ケ岳・大沼国定公園の近隣に位置し、自然も豊かな中で、地域環境を考え、最新設備で飼育しております。</dd>
              </div>
              <div class="intro__env__item scroll delay fadeInLeft">
                <div class="intro__env__icon">
                  <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 19V9C4 9 8 5 12 5C16 5 20 9 20 9V19"/>
                    <path d="M4 19H20"/>
                    <path d="M8 19V13"/>
                    <path d="M12 19V11"/>
                    <path d="M16 19V13"/>
                  </svg>
                </div>
                <dt>配合飼料は特注</dt>
                <dd>地下水を自由に飲むことができ、厳選した飼料を十分に食べた牛はすくすくと育っております。</dd>
              </div>
              <div class="intro__env__item scroll delay2 fadeInLeft">
                <div class="intro__env__icon">
                  <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 9C6 9 6 6 9 6C11.5 6 11.5 9 14 9"/>
                    <path d="M4 14C7 14 7 10 10.5 10C13.5 10 13.5 14 17 14"/>
                    <path d="M4 19C8 19 8 15 12.5 15C16 15 16 19 20 19"/>
                  </svg>
                </div>
                <dt>空気がおいしい</dt>
                <dd>衛生環境に力を入れた牛舎で飼育した牛は病気にかかるリスクが少なくなり、<br>また、万一病気にかかった牛には治療によるストレスも与えないようにすることがモットーです。</dd>
              </div>
              <div class="intro__env__item scroll delay3 fadeInLeft">
                <div class="intro__env__icon">
                  <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 12C4 7.5 7.5 4 12 4C15 4 17.5 5.5 19 8"/>
                    <path d="M19 4V8H15"/>
                    <path d="M20 12C20 16.5 16.5 20 12 20C9 20 6.5 18.5 5 16"/>
                    <path d="M5 20V16H9"/>
                  </svg>
                </div>
                <dt>地球に優しい</dt>
                <dd>敷き料は定期的に交換し、その堆肥は堆肥舎でブロアーをかけ十分に発酵させ大地に還元しております。</dd>
              </div>
            </dl>
          </div>
        </div>
        <!-- contents4 -->
        <div class="intro__contents4 contents--small">
          <div class="intro__bg">
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
              <span>TRACEABILITY</span>
              <h3>個体情報管理</h3>
            </div>
            <div class="intro__details">
              <p class="scroll fadeInLeft">
                <a class="words__link" href="<?php echo home_url('/words/#words5'); ?>">「牛の個体識別のための情報の管理及び伝達に関する特別措置法」</a>に基づき、導入から出荷までの牛の個体情報をトレーサビリティー管理しています。<br>
                また、生産流通履歴情報・肥育管理情報などの把握が可能となっており、この情報を生産にフィードバックし安全で安心できる牛肉を消費者にお届けできるよう取り組んでいます。
              </p>
              <div>
                <a href="<?php echo get_template_directory_uri(); ?>/pdf/personal-information-management.pdf" target="_blank">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/personal-information-management.jpg" alt="個人情報管理">
                  <p>クリックするとPDFが開きます</p>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- contents5 -->
        <div class="intro__contents5 contents--small contents--type01" id="intro__contents5">
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
            <span>SHIPMENT</span>
            <h3>出荷</h3>
          </div>
          <div class="intro__wrap">
            <p class="scroll fadeIn">
              牛舎ごとにデジタル計量器を設置し出荷体重を記録し、そのデータを生産にフィードバックする体制をとっております。<br>
              ホルスタイン・F1ともに安定した生産を心がけております。
            </p>
            <div class="intro__gallery">
              <ul>
                <li class="scroll fadeIn">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/intro_contents5-1.jpg" alt="分場素牛出荷（本場へ移動）">
                  <p>分場素牛出荷（本場へ移動）</p>
                </li>
                <li class="scroll fadeIn">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/intro_contents5-2.jpg" alt="本場 肥育牛出荷">
                  <p>本場 肥育牛出荷</p>
                </li>
                <li class="scroll fadeIn">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/intro_contents5-3.jpg" alt="牛搬送専用トラック">
                  <p>牛搬送専用トラック</p>
                </li>
              </ul>
            </div>
            <ul id="shipment">
              <li class="scroll fadeInUp">
                <h4>出荷先・販売店</h4>
                <div>
                  <p>主な出荷先</p>
                  <p>全農ミートフーズ／ホクレン／スターゼンミートプロセッサー／名北ミート／フタガワフーズ</p>
                  <p>主な販売店</p>
                  <p>みやぎ生協／ベルク／コープデリ／ユーコープ／とりせん ほか全国の量販店</p>
                </div>
              </li>
              <li class="scroll delay fadeInUp">
                <h4>主なと畜場</h4>
                <div>
                  <p>(株)北海道畜産公社</p>
                  <p>函館工場</p>
                  <p>スターゼンミートプロセッサー(株)</p>
                  <p>青森工場</p>
                  <p>名北ミート(株)</p>
                </div>
              </li>
              <li class="scroll delay2 fadeInUp">
                <h4>格付け</h4>
                <div>
                  <p>
                    出荷後には極力格付けに立合います。<br>
                    肉のプロと話し合い、今後の飼育方法に活用しております。
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </main>

<?php get_footer(); ?>