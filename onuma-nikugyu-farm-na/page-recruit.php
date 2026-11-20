<?php get_header(); ?>

<div id="scroll__contents">
  <main>
    <div class="wrapper">

      <!--##### 下層ページヘッダー #####-->
      <?php
      get_template_part('template-parts/header-sub', null, [
          'title' => '採用情報',
          'bg_pc' => get_template_directory_uri() . '/img/page/header_recruit.jpg',
          'bg_sp' => get_template_directory_uri() . '/img/page/header_recruit.jpg',
      ]);
      ?>

      <!--##### パンくずリスト #####-->
      <?php get_template_part('template-parts/breadcrumb'); ?>

      <!----------------------------------------------------------------------->
      <!--##### 採用情報 #####-->
      <div class="page-recruit">
        <!-- contents1 -->
        <div id="recruit__contents1" class="recruit__contents1 contents--small contents--type01">
          <div class="recruit__message">
            <p class="scroll fadeIn">
              ​動物好き・北海道好き・自然好きな方大歓迎です！<br>
              4週6休+年始・お盆休み+賞与年2回など生活が安定しています。<br>
              20～40代中心に男女ともに活躍中です。<br>
              入社したての先輩もいるので一緒に頑張れますよ！
            </p>
            <div class="recruit__merit">
              <ul>
                <li class="scroll fadeInUp">
                  <h4>安定基盤</h4>
                  <p>創業<span><?php echo date('Y') - 1893; ?></span>年<br>国内有数の規模を誇るメガファーム</p>
                </li>
                <li class="scroll delay fadeInUp">
                  <h4>信頼</h4>
                  <p>安心安全な牛肉を供給<br>複数の生協と産直契約</p>
                </li>
                <li class="scroll delay2 fadeInUp">
                  <h4>元気をもらう</h4>
                  <p>牛たちとの関りが<br>癒しと元気をくれる</p>
                </li>
                <li class="scroll fadeInUp">
                  <h4>意外かも</h4>
                  <p>負担軽減！<br>機械化・データ化が進んでます</p>
                </li>
                <li class="scroll delay fadeInUp">
                  <h4>充実</h4>
                  <p>4週6休<br>年始やお盆も休みあり</p>
                </li>
                <li class="scroll delay2 fadeInUp">
                  <h4>未経験も安心</h4>
                  <p>異業種から転職や<br>U・Iターンの先輩も</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- contents2 -->
        <div id="recruit__contents2" class="recruit__contents2 contents--small">
          <div class="recruit__bg">
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
              <span>REQUIREMENTS</span>
              <h3>募集要項</h3>
            </div>
            <div class="recruit__box">
              <p class="scroll fadeInUp">
                事前に見学いただくことも可能です。<br>
                衛生管理を徹底した牛舎やスタッフの雰囲気、自然に囲まれた町の景色など、是非感じに来てください。
              </p>
            </div>
            <div class="recruit__table scroll fadeIn">
              <table>
                <tr>
                  <th>雇用形態</th>
                  <td>正社員</td>
                </tr>
                <tr>
                  <th>仕事内容</th>
                  <td>
                    <p>
                      《みんなで協力して牛と牧場を守っています》<br>
                      エサやり・牛床づくりなどからスタートし、<br>
                      慣れてきたら施設の補修や飼料畑の管理もお願いしていきます！
                    </p>
                    <ul>
                      <li>給餌車で餌やりや子牛のミルクやり(1日2回)</li>
                      <li>牛床づくり</li>
                      <li>牛の治療管理</li>
                      <li>粗飼料生産（牧草・デントコーン）</li>
                      <li>施設補修</li>
                      <li>牛の導入、出荷、場内移動 など</li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <th>求める人材</th>
                  <td>
                    <dl>
                      <dt>動物が好き、牧場に興味がある</dt>
                      <dd>
                        世話をする人を覚えて寄ってくる牛もいます。ミルクを求めて鳴いたり、人なつっこい目をした牛がとってもかわいいです!動物を扱う仕事ならではの喜びがあります。
                      </dd>
                      <dt>第一次産業に興味がある</dt>
                      <dd>
                        駒ヶ岳と大沼の湖畔に広がる豊かな自然の中に、自家所有の牧草畑やデントコーン畑があります。オリジナル飼料で牛を育てる循環型農業が当社のスタイルです。
                      </dd>
                      <dt>将来自分の牧場を持ちたい</dt>
                      <dd>
                        段取りや仕事の進め方は現場主導で任せています。先輩たちのもと、日々の業務で飼養以外のことも学び、将来に役立ててください。
                      </dd>
                    </dl>
                      <p>
                        小澤牧場を選んでくれたスタッフを大切にします。最初の給与額はあくまでその時点のもの。未経験の知識がない状態で入社しても、「牛の管理のプロになるんだ！」などの目標を持ち、人生の貴重な時間と思いをうちの牧場に使って頑張ってくださる方にしっかり給与で還元します。牛が好き！仕事も楽しい！そんな環境を一緒に作っていきましょう。
                      </p>
                  </td>
                </tr>
                <tr>
                  <th>勤務時間</th>
                  <td>
                    7:00～17:00（実働8時間） <br>
                    ※季節・牧場・業務の都合により変動があります。<br>
                    ※残業はほとんどありません。
                  </td>
                </tr>
                <tr>
                  <th>勤務地</th>
                  <td>
                    【転勤なし・UIターン歓迎】いずれかに配属――大沼・長沼・芽室 ※マイカー通勤OK
                    <div class="recurit__farm">
                      <p>
                        【肥育牧場】<br>
                        <span>大沼本場</span><br>
                        北海道亀田郡七飯町字軍川407<br>
                        ＜アクセス＞ 函館市内まで車で30～40分
                      </p>
                      <p>
                        【子牛の育成】<br>
                        <span>芽室分場</span><br>
                        北海道河西郡芽室町東芽室南3線8番地4<br>
                        ＜アクセス＞ 帯広市内まで車で10～20分<br>
                        <span>長沼分場</span><br>
                        北海道夕張郡長沼町字幌内1720番56<br>
                        ＜アクセス＞ 札幌市内まで車で1時間弱 / 千歳市まで車で20～30分
                      </p>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th>給与</th>
                  <td>
                    月給：248,200円～300,000円(一律手当含む) + 諸手当<br>
                    ※経験・スキルを考慮の上、当社規定により優遇します。<br>
                    ※試用期間中(3ヵ月)は、日給9,048円+規定交通費となります。<br><br>
                    【月収例】<br>
                    月収：270,000円 ※各種手当込み (30代 / 扶養家族あり)<br>
                    初年度の年収：300万円～450万円
                  </td>
                </tr>
                <tr>
                  <th>昇給・賞与</th>
                  <td>昇給：年1回 / 賞与：年2回</td>
                </tr>
                <tr>
                  <th>諸手当</th>
                  <td>
                    <ul>
                      <li>交通費支給：上限31,600円</li>
                      <li>家族手当（扶養有りの場合）：20,000円</li>
                      <li>精勤手当：10,000円</li>
                      <li>職能手当（大特などの有資格者）：上限15,000円</li>
                      <li>住宅手当：20,000円</li>
                      <li>車輛手当（マイカー通勤の場合：3,000円）</li>
                      <li>時間外手当</li>
                      <li>その他：社内規定による</li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <th>休日・休暇</th>
                  <td>
                    <ul>
                      <li>4週6休（シフト制）※土日休みも可能です</li>
                      <li>お盆（3日）</li>
                      <li>年始休暇（4日）</li>
                      <li>慶弔休暇（社内規定による）</li>
                      <li>有給休暇（入社後半年で10日付与）</li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <th>福利厚生</th>
                  <td>
                    <ul>
                      <li>社会保険完備</li>
                      <li>退職金制度（勤続3年以上）</li>
                      <li>マイカー通勤可能</li>
                    </ul>
                  </td>
                </tr>
              </table>
            </div>
            <div class="recruit__gallery">
              <div class="recruit__gallery--track">
                <div class="recruit__gallery--card">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/recruit_contents2-1.jpg" alt="採用情報スライドショー">
                </div>
                <div class="recruit__gallery--card">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/recruit_contents2-2.jpg" alt="">
                </div>
                <div class="recruit__gallery--card">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/recruit_contents2-3.jpg" alt="">
                </div>
                <div class="recruit__gallery--card">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/recruit_contents2-4.jpg" alt="">
                </div>
                <div class="recruit__gallery--card">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/recruit_contents2-5.jpg" alt="">
                </div>
                <div class="recruit__gallery--card">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/recruit_contents2-6.jpg" alt="">
                </div>
                <!-- ループ用 -->
                <div class="recruit__gallery--card" aria-hidden="true">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/recruit_contents2-1.jpg" alt="採用情報スライドショー">
                </div>
                <div class="recruit__gallery--card" aria-hidden="true">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/recruit_contents2-2.jpg" alt="">
                </div>
                <div class="recruit__gallery--card" aria-hidden="true">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/recruit_contents2-3.jpg" alt="">
                </div>
                <div class="recruit__gallery--card" aria-hidden="true">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/recruit_contents2-4.jpg" alt="">
                </div>
                <div class="recruit__gallery--card" aria-hidden="true">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/recruit_contents2-5.jpg" alt="">
                </div>
                <div class="recruit__gallery--card" aria-hidden="true">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/recruit_contents2-6.jpg" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- contents3 -->
        <div id="recruit__contents3" class="recruit__contents3 contents--small contents--type01">
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
            <span>PROCESS</span>
            <h3>採用プロセス</h3>
          </div>
          <div class="recruit__flow">
            <ul>
              <li>
                <h4><span>01</span>お問い合わせ</h4>
                <p class="scroll fadeInLeft">当サイトのお問い合わせフォームもしくは転職サイトよりご連絡ください。</p>
              </li>
              <li>
                <h4><span>02</span>​書類選考</h4>
                <p class="scroll fadeInLeft">
                  お送りいただいた応募データをもとに書類選考いたします。<br>
                  ※選考後、今後の面接日程等については追ってご連絡いたします。<br>
                  面接の希望日時等がある方は、事前にご相談ください。
                </p>
              </li>
              <li>
                <h4><span>03</span>​面接</h4>
                <p class="scroll fadeInLeft">
                  履歴書をご持参のうえ、お越しください。当社での展望や意欲などを、ぜひアピールしてください！<br>
                  ※面接にかかった費用などは入社が決定した場合、当社規定により検討いたします。
                </p>
              </li>
              <li>
                <h4><span>04</span>内定</h4>
                <p class="scroll fadeInLeft">入社日はご相談に応じます。<br>在職中の方も気兼ねなくエントリーしてください！</p>
              </li>
            </ul>
          </div>
          <div class="recruit__btn">
            <div class="contents__btn">
              <a href="<?php echo home_url('/contact/'); ?>">
                <span class="circle">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="4" y1="12" x2="20" y2="12"></line>
                    <polyline points="14 6 20 12 14 18"></polyline>
                  </svg>
                </span>
                フォームから応募する
              </a>
            </div>
            <div class="contents__btn">
              <a href="https://tenshoku.mynavi.jp/company/251537/joblist/" target="_blank">
                <span class="circle">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="4" y1="12" x2="20" y2="12"></line>
                    <polyline points="14 6 20 12 14 18"></polyline>
                  </svg>
                </span>
                マイナビ転職サイトを見る
              </a>
            </div>
            <div class="contents__btn">
              <a href="https://hp-kita.com/ozawa-bokujo" target="_blank">
                <span class="circle">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="4" y1="12" x2="20" y2="12"></line>
                    <polyline points="14 6 20 12 14 18"></polyline>
                  </svg>
                </span>
                ハピキタ転職サイトを見る
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </main>
</div>

<?php get_footer(); ?>
