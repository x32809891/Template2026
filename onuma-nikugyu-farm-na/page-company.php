<?php get_header(); ?>

<div id="scroll__contents">
  <main>
    <div class="wrapper">

      <!--##### 下層ページヘッダー #####-->
      <?php
      get_template_part('template-parts/header-sub', null, [
          'title' => '小澤牧場グループ',
          'bg_pc' => get_template_directory_uri() . '/img/page/header_company.jpg',
          'bg_sp' => get_template_directory_uri() . '/img/page/header_company.jpg',
      ]);
      ?>

      <!--##### パンくずリスト #####-->
      <?php get_template_part('template-parts/breadcrumb'); ?>

      <!----------------------------------------------------------------------->
      <!--##### 小澤牧場グループ #####-->
      <div class="page-company">
        <!-- contents1 -->
        <div class="company__contents1 contents--small contents--type01">
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
            <span>POLICY</span>
            <h3>経営理念</h3>
          </div>
          <div class="company__list">
            <ul>
              <li>
                <div class="company__txt">
                    <h4>消費者の健康</h4>
                    <ol class="scroll fadeInLeft">
                      <li>「安全・安心・安定」をテーマにした徹底した品質管理。</li>
                      <li>導入から出荷までの「牛の個体識別情報」をトレーサビリティー管理。</li>
                      <li>配合飼料には成長ホルモン剤の使用をしておりません。</li>
                      <li>単一農場のメリットを生かし安定品質のブランド牛を生産。</li>
                    </ol>
                </div>
                <div class="company__img"><img src="<?php echo get_template_directory_uri(); ?>/img/page/company_contents1-1.jpg" alt="消費者の健康"></div>
              </li>
              <li>
                <div class="company__txt">
                  <h4>牛の健康</h4>
                  <ol class="scroll fadeInLeft">
                    <li>乳酸菌、ハーブ、飼料米を使用。（腸内環境の改善・臭気低減・肉質安定）</li>
                    <li>自社分場及び道内各地より健康な素牛を安定導入。</li>
                    <li>自社農地で生産された牧草・デントコーンを十分に給与。</li>
                    <li>牛の飲料水は良質な地下水を給与。(水の分析)</li>
                    <li>開放的で換気性を重視した牛舎構造。日射や風雪の防御も万全。</li>
                  </ol>
                </div>
                <div class="company__img"><img src="<?php echo get_template_directory_uri(); ?>/img/page/company_contents1-2.jpg" alt="牛の健康"></div>
              </li>
              <li>
                <div class="company__txt">
                  <h4>大地の健康</h4>
                  <ol class="scroll fadeInLeft">
                    <li>自然にやさしい循環型農業の実践。</li>
                    <li>農場から排出される堆肥を完熟堆肥化して広大な土地に還元。(自社所有410ha)</li>
                    <li>自家産飼料畑に最適な健康な土づくり。(土壌検査)</li>
                  </ol>
                </div>
                <div class="company__img"><img src="<?php echo get_template_directory_uri(); ?>/img/page/company_contents1-3.jpg" alt="大地の健康"></div>
              </li>
            </ul>
          </div>
          <div class="company__box scroll fadeInUp">
            <p>安心・安全への取り組み<p>
            <ul>
              <li>良い素牛を各分場及び信頼できる契約農場から安定して導入しています。</li>
              <li>床は敷料を充分に敷いた後早めに交換し、新鮮な空気が入るよう、大型ファンの設置と開放式の牛舎にしています。自由に歩き、食べ、天然地下水を飲める状態に設定し、牛舎周辺の環境も清潔にしています。</li>
              <li>粗飼料は自家堆肥を還元した所有農地で作った牧草、自家生産した飼料作物を主体に給与しています。</li>
              <li>配合飼料は飼料メーカーと厳しい打合せ・検討を行い、当牧場オリジナル飼料を使用しています。また、配送については飼料工場から当牧場のみ配送の専用バルク車にて直送されています。</li>
            </ul>
          </div>
        </div>
        <!-- contents2 -->
        <div class="company__contents2 contents--small">
          <div class="company__bg">
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
              <span>CIRCULAR</span>
              <h3>地域循環型農業</h3>
            </div>
            <div class="company__env">
              <ul>
                <li class="scroll fadeIn">
                  <p>
                    建築業界の産業廃棄物である「おがくず・バーク・チップ」を、<br>
                    飼育頭数14,000頭、敷料（牛床）として積極的に活用しています。<br>
                    <span>※年間使用実績：33,000立方メートル（大型トラック 3,300台分）</span>
                  </p>
                </li>
                <li class="scroll fadeIn">
                  <p>これらの資材は、家屋の取り壊しや製材の際に発生する木材由来の産業廃棄物です。</p>
                  <ol>
                    <li>
                      <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/page/company_contents2-1.jpg" alt="おがくず">
                      </div>
                      <h5>おがくず</h5>
                      <p>木材の切断時に出る粉末状の物</p>
                    </li>
                    <li>
                      <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/page/company_contents2-2.jpg" alt="バーク">
                      </div>
                      <h5>バーク</h5>
                      <p>原木の表皮を削り砕いた物</p>
                    </li>
                    <li>
                      <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/page/company_contents2-3.jpg" alt="チップ">
                      </div>
                      <h5>チップ</h5>
                      <p>木材を粉砕した物</p>
                    </li>
                  </ol>
                </li>
                <li class="scroll fadeIn">
                  <p>
                    牛から排出されたふん尿は、<a class="words__link" href="<?php echo home_url('/words/#words4'); ?>">「家畜排せつ物の管理の適正化及び利用の促進に関する法律」</a>に対応した堆肥舎（堆肥リサイクル施設13棟）にて攪拌、発酵、乾燥を行い完熟堆肥化しています。<br>
                    肉用牛のふん尿排出量は1頭1日当たり、<span>ふん：15～20kg、尿：5～10kg</span>となっており、大沼本場では<span>1日当たり生換算で約266.5t、年間で約97,300tの排出量</span>となっており、これに副資材としておがくず・バーク等を使用し、<span>堆肥化処理されます。</span>（肉用牛のふんは乳牛より水分が少なく堆肥化しやすい）<br>
                    堆肥は<span>乾燥完熟し年間約99,150t</span>の生産量となり、自家農地(牧草地300ha、デントコーン畑110ha東京ドーム約88個分)へ。<br>
                    35,000tを肥料として還元。残り64,150tは<span>牛床へ使用する敷料のリサイクル使用</span>と<span>近隣の農家へ良質な堆肥</span>として提供しています。<br>
                    各分場でも同様に完熟堆肥化し敷料のリサイクルとして使用しています。
                  </p>
                  <div class="--logo"><img src="<?php echo get_template_directory_uri(); ?>/img/page/company_contents2-4.jpg" alt="SDGs"></div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- contents3 -->
        <div class="company__contents3 contents--small">
          <div class="company__bg">
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
              <span>MESSAGE</span>
              <h3>代表からひとこと</h3>
            </div>
            <div class="company__message">
              <ul>
                <li>
                  <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/page/company_contents3-1.jpg" alt="小澤牧場株式会社 代表取締役 小澤 孔仁">
                  </div>
                  <p class="scroll fadeInUp">
                    私たちは、豊かな自然の中で肉用牛の生産という「命を育み、つなぐ」重要な食の産業を担っています。<br>牛たちがストレスなく健康に育つ環境づくり(アニマルウェルフェア)に注力してまいりました。<br>近年、地球環境への配慮や農業の持続可能性が強く求められています。<br>家畜の排せつ物を堆肥化しリサイクルする循環型農業を主に、環境負荷をさらに低減する畜産経営を推進し、これからも挑戦してまいります。<br>健やかな牛でなければ「本当の美味しさと安全・安心」は生まれません。<br>「消費者の健康」・「牛の健康」・「大地の健康」の3つの社訓を受け継ぎ、消費者の皆様へ「産地直結」の志で牛を生産し、地域とともに次世代へ誇れるサステナブルな畜産業のモデルを築くよう、スタッフ一丸となって邁進してまいります。

                  </p>
                  <p class="scroll fadeInUp">小澤牧場株式会社<br>代表取締役<span>小澤 孔仁</span></p>
                </li>
                <li>
                  <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/page/company_contents3-2.jpg" alt="株式会社大沼肉牛ファーム 代表取締役 小澤 智三">
                  </div>
                  <p class="scroll fadeInUp">
                    弊社は「本当に美味しい牛肉をお届けしたい」という一途な想いとともに、肉用牛の育成・肥育に励んでまいりました。<br>牛の健康を第一に考えた独自の飼料、一頭一頭に目を配る管理、そして施設の徹底した衛生管理。<br>これらすべてが、私たちの育てる牛の「牛肉本来のうま味・風味・美味しさ」を生み出しています。<br>時代とともに食のニーズは多様化していますが、「安全で安心できる美味しい牛肉」を届けるという使命に変わりはありません。<br>私たちの生産した牛肉に対する信頼と評判に応え続けるため、これからも「消費者と生産者」の理解と交流を深め、挑戦してまいります。
                  </p>
                  <p class="scroll fadeInUp">株式会社大沼肉牛ファーム<br>代表取締役<span>小澤 智三</span></p>
                </li>
              </ul>
            </div>
            <div class="company__overview">
              <div class="scroll fadeIn">
                <p>小澤牧場株式会社</p>
                <table>
                  <tr>
                    <th>商号</th>
                    <td>小澤牧場株式会社</td>
                  </tr>
                  <tr>
                    <th>創業</th>
                    <td>明治26年</td>
                  </tr>
                  <tr>
                    <th>法人設立</th>
                    <td>平成20年</td>
                  </tr>
                  <tr>
                    <th>代表者</th>
                    <td>小澤 孔仁</td>
                  </tr>
                  <tr>
                    <th>所在地</th>
                    <td>〒041-1352<br>北海道亀田郡七飯町字軍川407</td>
                  </tr>
                  <tr>
                    <th>TEL</th>
                    <td>0138-67-3600</td>
                  </tr>
                  <tr>
                    <th>FAX</th>
                    <td>0138-67-3848</td>
                  </tr>
                  <tr>
                    <th>従業員数</th>
                    <td>25名</td>
                  </tr>
                </table>
              </div>
              <div class="scroll fadeIn">
                <p>株式会社大沼肉牛ファーム</p>
                <table>
                  <tr>
                    <th>商号</th>
                    <td>株式会社大沼肉牛ファーム</td>
                  </tr>
                  <tr>
                    <th>創業</th>
                    <td>明治26年</td>
                  </tr>
                  <tr>
                    <th>法人設立</th>
                    <td>昭和60年</td>
                  </tr>
                  <tr>
                    <th>代表者</th>
                    <td>小澤 智三</td>
                  </tr>
                  <tr>
                    <th>所在地</th>
                    <td>〒041-1353<br>北海道亀田郡七飯町字上軍川619-4</td>
                  </tr>
                  <tr>
                    <th>TEL</th>
                    <td>0138-67-2127</td>
                  </tr>
                  <tr>
                    <th>FAX</th>
                    <td>0138-67-3848</td>
                  </tr>
                  <tr>
                    <th>従業員数</th>
                    <td>12名</td>
                  </tr>
                </table>
              </div>
            </div>
            <div class="company__sdgs">
              <p>小澤牧場グループは国連が提唱する<a href="<?php echo home_url('/sdgs/'); ?>" target="_blank">『持続可能な開発目標（SDGs）』</a>に賛同し、<br>事業活動を通じて持続可能な社会の実現に貢献してまいります。</p>
            </div>
          </div>
        </div>
        <!-- contents4 -->
        <div class="company__contents4 contents--small contents--type01">
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
            <span>HISTORY</span>
            <h3>沿革</h3>
          </div>
          <div class="company__history">
            <p>小澤牧場グループ</p>
            <div class="timeline">
              <div class="spine"></div>
              <!-- 初代 -->
              <div class="seal-row">
                <div class="seal"><span>初</span></div>
                <div class="seal-body">
                  <div class="gen-label">GENERATION 01</div>
                  <h2>初代・久太郎</h2>
                  <div class="year">1859 – 1893年</div>
                  <p>
                    1859年、本家・小澤嘉右ヱ門が福井県福井市より現在地へ入植移住（同年、函館開港）。明治初期より畜産業も始める。<br>
                    1890年、初代・久太郎が石川県能登より来道し、嘉右ヱ門の長女チカと結婚、縁組婿養子となる。<br>
                    1893年、嘉右ヱ門より分家独立し、"マル嘉"小澤牧場として創業。</p>
                </div>
              </div>
              <div class="entry">
                <div class="dot-col"><div class="dot"></div></div>
                <div>
                  <div class="year">1904年</div>
                  <div class="desc">酪農のほか肉牛・馬の生産を開始(馬38頭、牛8頭)。</div>
                </div>
              </div>
              <!-- 2代目 -->
              <div class="seal-row era">
                <div class="seal"><span>二</span></div>
                <div class="seal-body">
                  <div class="gen-label">GENERATION 02</div>
                  <h2>2代目・嘉久</h2>
                  <div class="year">1893年 誕生</div>
                  <p>分家独立の年に誕生。</p>
                </div>
              </div>
              <!-- 3代目 -->
              <div class="seal-row era">
                <div class="seal"><span>三</span></div>
                <div class="seal-body">
                  <div class="gen-label">GENERATION 03</div>
                  <h2>3代目・勇</h2>
                  <div class="year">1917年 誕生</div>
                  <p>昭和に入り、肉牛・軍馬・農耕馬を多頭数扱う。</p>
                </div>
              </div>
              <div class="entry">
                <div class="dot-col"><div class="dot"></div></div>
                <div>
                  <div class="year">1947年</div>
                  <div class="desc">勇、渡島家畜商業協同組合 副理事長に就任。以後、北海道家畜商業協同組合連合会理事を歴任。</div>
                </div>
              </div>
              <div class="entry">
                <div class="dot-col"><div class="dot"></div></div>
                <div>
                  <div class="year">1965年</div>
                  <div class="desc">勇、北海道家畜商業協同組合連合会会長より優良家畜商を受賞。</div>
                </div>
              </div>
              <div class="entry">
                <div class="dot-col"><div class="dot"></div></div>
                <div>
                  <div class="year">1967年</div>
                  <div class="desc">勇、七飯町議会議員に当選。</div>
                </div>
              </div>
              <div class="entry">
                <div class="dot-col"><div class="dot"></div></div>
                <div>
                  <div class="year">1969 – 1970年</div>
                  <div class="desc">七飯町酪農組合より最高乳量出荷賞を2年連続受賞。</div>
                </div>
              </div>
              <div class="entry">
                <div class="dot-col"><div class="dot"></div></div>
                <div>
                  <div class="year">1976年</div>
                  <div class="desc">勇、全日本家畜商協会会長より優良家畜商を受賞。</div>
                </div>
              </div>
              <!-- 4代目 -->
              <div class="seal-row era">
                <div class="seal"><span>四</span></div>
                <div class="seal-body">
                  <div class="gen-label">GENERATION 04</div>
                  <h2>4代目・嘉徳</h2>
                  <div class="year">1943年 誕生 / 1962年 事業継承</div>
                  <p>
                    1943年誕生。<br>
                    1962年、高校卒業とともに、父・勇より事業を継承（乳牛20頭、畑2.5ha、水田2.5ha）。
                  </p>
                </div>
              </div>
              <div class="entry">
                <div class="dot-col"><div class="dot"></div></div>
                <div>
                  <div class="year">1970年</div>
                  <div class="desc">5代目・孔仁 誕生。</div>
                </div>
              </div>
              <div class="entry">
                <div class="dot-col"><div class="dot"></div></div>
                <div>
                  <div class="year">1974年</div>
                  <div class="desc">ホルスタイン種去勢の素牛生産を開始。5代目・智三 誕生。</div>
                </div>
              </div>
              <div class="entry">
                <div class="dot-col"><div class="dot"></div></div>
                <div>
                  <div class="year">1975年</div>
                  <div class="desc">酪農事業を撤退。</div>
                </div>
              </div>
              <div class="entry">
                <div class="dot-col"><div class="dot"></div></div>
                <div>
                  <div class="year">1982 – 1984年</div>
                  <div class="desc">北海道ホルスタイン農協肥育牛馬共励会において最高位を3年連続受賞。</div>
                </div>
              </div>
              <div class="entry">
                <div class="dot-col"><div class="dot"></div></div>
                <div>
                  <div class="year">1984年</div>
                  <div class="desc">ホルスタイン種去勢の素牛生産を撤退。</div>
                </div>
              </div>
              <div class="entry">
                <div class="dot-col"><div class="dot"></div></div>
                <div>
                  <div class="year">1985年</div>
                  <div class="desc">
                    肉牛肥育事業を開始。農業生産法人 有限会社大沼肉牛ファームを設立（資本金1,000万円）。<br>
                    代表取締役社長に4代目・嘉徳が就任。
                  </div>
                </div>
              </div>
              <div class="entry">
                <div class="dot-col"><div class="dot"></div></div>
                <div>
                  <div class="year">1987年</div>
                  <div class="desc">北海道ホルスタイン農協肥育牛馬共励会において最高位を受賞。</div>
                </div>
              </div>
              <div class="entry">
                <div class="dot-col"><div class="dot"></div></div>
                <div>
                  <div class="year">1995年</div>
                  <div class="desc">"はこだて大沼牛"(ホルスタイン種)の商標登録が認可される。</div>
                </div>
              </div>
              <div class="entry">
                <div class="dot-col"><div class="dot"></div></div>
                <div>
                  <div class="year">1996年</div>
                  <div class="desc">嘉徳、七飯町農業協同組合 代表理事組合長に就任。</div>
                </div>
              </div>
              <div class="entry">
                <div class="dot-col"><div class="dot"></div></div>
                <div>
                  <div class="year">1997年</div>
                  <div class="desc">みやぎ生活協同組合（宮城）「産直指定農場」に認定される。</div>
                </div>
              </div>
              <div class="entry">
                <div class="dot-col"><div class="dot"></div></div>
                <div>
                  <div class="year">1999年</div>
                  <div class="desc">嘉徳、七飯町農業協同組合 代表理事組合長を任期満了により退任。</div>
                </div>
              </div>
              <div class="entry">
                <div class="dot-col"><div class="dot"></div></div>
                <div>
                  <div class="year">2000年</div>
                  <div class="desc">株式会社ベルク（埼玉・東京・千葉・神奈川・群馬・栃木・茨城）「産直指定農場」に認定される。</div>
                </div>
              </div>
              <div class="entry">
                <div class="dot-col"><div class="dot"></div></div>
                <div>
                  <div class="year">2004年</div>
                  <div class="desc">生活協同組合コープさっぽろ（函館地区）「産直指定農場」に認定される。</div>
                </div>
              </div>
              <div class="entry">
                <div class="dot-col"><div class="dot"></div></div>
                <div>
                  <div class="year">2005年</div>
                  <div class="desc">
                    函館牛"（ホルスタイン種）の商標登録が認可される。<br>
                    生活協同組合ユーコープ（神奈川・静岡・山梨）「産直指定農場」に認定される。<br>
                    コープデリ生活協同組合連合会（千葉・埼玉・東京・茨城・栃木・群馬・長野）「産直指定農場」に認定される。
                  </div>
                </div>
              </div>
              <div class="entry">
                <div class="dot-col"><div class="dot"></div></div>
                <div>
                  <div class="year">2006年</div>
                  <div class="desc">"はこだて大沼黒牛"(交雑種)の商標登録が認可される。</div>
                </div>
              </div>
              <div class="entry">
                <div class="dot-col"><div class="dot"></div></div>
                <div>
                  <div class="year">2007年</div>
                  <div class="desc">生活協同組合コープさっぽろ「第四回コープさっぽろ農業賞」農業部門 農業奨励賞を受賞。</div>
                </div>
              </div>
              <div class="entry">
                <div class="dot-col"><div class="dot"></div></div>
                <div>
                  <div class="year">2008年</div>
                  <div class="desc">
                    肉牛素牛生産事業を開始。小澤牧場株式会社を設立（資本金300万円）。<br>
                    代表取締役に4代目・嘉徳が就任。十勝芽室町にて素牛生産を開始。
                  </div>
                </div>
              </div>
              <div class="entry">
                <div class="dot-col"><div class="dot"></div></div>
                <div>
                  <div class="year">2009年</div>
                  <div class="desc">財団法人北海道農業企業化研究所「第五回HAL農業賞」優秀賞を受賞。</div>
                </div>
              </div>
              <div class="entry">
                <div class="dot-col"><div class="dot"></div></div>
                <div>
                  <div class="year">2011年</div>
                  <div class="desc">嘉徳、渡島家畜商業協同組合 理事長に就任（現在に至る）。</div>
                </div>
              </div>
              <div class="entry">
                <div class="dot-col"><div class="dot"></div></div>
                <div>
                  <div class="year">2012年</div>
                  <div class="desc">
                    嘉徳、北海道家畜商業協同組合連合会 副会長に就任(現在に至る)。<br>
                    "函館和牛"(黒毛和種)の商標登録が認可される。
                  </div>
                </div>
              </div>
              <div class="entry">
                <div class="dot-col"><div class="dot"></div></div>
                <div>
                  <div class="year">2014年</div>
                  <div class="desc">嘉徳、社団法人日本家畜商協会会長より優良家畜商を受賞。</div>
                </div>
              </div>
              <div class="entry">
                <div class="dot-col"><div class="dot"></div></div>
                <div>
                  <div class="year">2015 – 2016年</div>
                  <div class="desc">嘉徳・智三、ベトナムの飼料原料・敷料原料事情を視察。</div>
                </div>
              </div>
              <div class="entry">
                <div class="dot-col"><div class="dot"></div></div>
                <div>
                  <div class="year">2016年</div>
                  <div class="desc">嘉徳、アメリカの肉牛生産・穀物事情を視察。</div>
                </div>
              </div>
              <!-- 5代目 -->
              <div class="seal-row era">
                <div class="seal"><span>五</span></div>
                <div class="seal-body">
                  <div class="gen-label">GENERATION 05</div>
                  <h2>5代目・孔仁</h2>
                  <div class="year">2019年 事業継承</div>
                  <p>
                    長沼町にて素牛生産を開始。<br>
                    5代目・孔仁、2005年入社。営業管理部長・常務取締役を歴任し事業を継承。<br>
                    小澤牧場グループ代表取締役に就任。4代目・嘉徳、取締役会長に就任。
                  </p>
                </div>
              </div>
              <div class="entry">
                <div class="dot-col"><div class="dot"></div></div>
                <div>
                  <div class="year">2019年</div>
                  <div class="desc">みやぎ生活協同組合「福島地区（コープふくしま）」の「産直指定農場」に継続認定される。</div>
                </div>
              </div>
              <div class="entry">
                <div class="dot-col"><div class="dot"></div></div>
                <div>
                  <div class="year">2020年</div>
                  <div class="desc">孔仁、北海道家畜商業協同組合連合会より優良家畜商を受賞。</div>
                </div>
              </div>
              <div class="entry">
                <div class="dot-col"><div class="dot"></div></div>
                <div>
                  <div class="year">2021年</div>
                  <div class="desc">嘉徳、アイルランドの畜産事情を視察。</div>
                </div>
              </div>
              <div class="entry">
                <div class="dot-col"><div class="dot"></div></div>
                <div>
                  <div class="year">2023年</div>
                  <div class="desc">
                    "はこだて大沼姫黒牛"(交雑種)の商標登録が認可される。<br>
                    創業130周年記念式典を行う。SDGs宣言企業に認定される。
                  </div>
                </div>
              </div>
              <!-- 5代目 -->
              <div class="seal-row era">
                <div class="seal"><span>五</span></div>
                <div class="seal-body">
                  <div class="gen-label">GENERATION 05</div>
                  <h2>5代目・智三</h2>
                  <div class="year">2024年 事業継承</div>
                  <p>
                    5代目・智三、1993年入社。生産管理部長・専務取締役を歴任。<br>
                    経営組織変更に伴い事業を継承。有限会社 大沼肉牛ファーム代表取締役に就任。
                  </p>
                </div>
              </div>
              <div class="entry">
                <div class="dot-col"><div class="dot"></div></div>
                <div>
                  <div class="year">2025年</div>
                  <div class="desc">経営組織変更に伴い「有限会社 大沼肉牛ファーム」から「株式会社 大沼肉牛ファーム」へ社名変更。</div>
                </div>
              </div>
              <div class="entry">
                <div class="dot-col"><div class="dot"></div></div>
                <div>
                  <div class="year">2026年</div>
                  <div class="desc">株式会社とりせん（群馬・栃木・茨城・埼玉）「産直指定農場」に認定される。<br>経済産業省 中小企業庁 「パートナーシップ構築宣言」登録企業認定される。</div>
                  <div class="image"><img src="<?php echo get_template_directory_uri(); ?>/img/page/company_contents4-1.png" alt="パートナーシップ構築宣言"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </main>
</div>

<?php get_footer(); ?>
