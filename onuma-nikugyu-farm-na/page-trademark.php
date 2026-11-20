<?php get_header(); ?>

<div id="scroll__contents">
  <main>
    <div class="wrapper">

      <!--##### 下層ページヘッダー #####-->
      <?php
      get_template_part('template-parts/header-sub', null, [
          'title' => 'ブランド・商標について',
          'bg_pc' => get_template_directory_uri() . '/img/page/header_trademark.jpg',
          'bg_sp' => get_template_directory_uri() . '/img/page/header_trademark.jpg',
      ]);
      ?>

      <!--##### パンくずリスト #####-->
      <?php get_template_part('template-parts/breadcrumb'); ?>

      <!----------------------------------------------------------------------->
      <!--##### ブランド・商標について #####-->
      <div class="page-trademark">
        <!-- contents1 -->
        <div class="trademark__contents1 contents--small">
          <div class="trademark__bg">
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
              <span>OUR BRANDS</span>
              <h3>取扱品種</h3>
            </div>
            <div class="trademark__box">
              <h4 class="scroll fadeInUp">​はこだて大沼牛・はこだて大沼黒牛・​はこだて大沼姫黒牛・函館牛・函館和牛</h4>
              <p class="scroll delay fadeInUp">
                北海道の豊かな自然環境の中で育った牛達は、赤身は味わい深く、脂に甘みのある牛肉になります。<br>
                部位ごとにステーキ・しゃぶしゃぶ・シチューなど、どんな料理でもお楽しみいただけます。<br>
                なお、牧場直売はしておりませんので、スーパーなどでお見かけの際には是非一度ご賞味ください。
              </p>
              <div class="contents__btn scroll fadeInUp">
								<a href="<?php echo home_url('/intro/#shipment'); ?>">
									<span class="circle">
										<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
											<line x1="4" y1="12" x2="20" y2="12"></line>
											<polyline points="14 6 20 12 14 18"></polyline>
										</svg>
									</span>
									出荷先・販売店
								</a>
							</div>
              <ul class="trademark__list">
                <li class="scroll fadeIn">
                  <p>​はこだて大沼牛<span>ホルスタイン種</span></p>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/trademark_contents1-1.png" alt="​はこだて大沼牛">
                  <span>はこだて大沼牛 第3110243号</span>
                </li>
                <li class="scroll delay fadeIn">
                  <p>​はこだて大沼黒牛<span>交雑種(去勢)</span></p>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/trademark_contents1-2.png" alt="​はこだて大沼黒牛">
                  <span>はこだて大沼黒牛 第4967990号</span>
                </li>
                <li class="scroll delay2 fadeIn">
                  <p>はこだて​大沼姫黒牛<span>交雑種(雌)</span></p>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/trademark_contents1-3.png" alt="​大沼姫黒牛">
                  <span>はこだて大沼姫黒牛 第6696159号</span>
                </li>
                <li class="scroll delay3 fadeIn">
                  <p>​函館牛<span>ホルスタイン種</span></p>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/trademark_contents1-4.png" alt="​函館牛">
                  <span>函館牛 第4887780号</span>
                </li>
                <li class="scroll delay4 fadeIn">
                  <p>​函館和牛<span>黒毛和種</span></p>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/trademark_contents1-5.png" alt="​函館和牛">
                  <span>函館和牛 第5529999号</span>
                </li>
              </ul>
              <div class="trademark__gallery">
                <div class="scroll fadeIn">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/trademark__gallery1-1.jpg" alt="はこだて大沼牛">
                </div>
                <div class="scroll delay fadeIn">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/trademark__gallery1-2.jpg" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- contents2 -->
        <div class="trademark__contents2 contents--small contents--type01">
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
            <span>FEATURE</span>
            <h3>特徴</h3>
          </div>
          <div class="trademark__feature">
            <ul>
              <li>
                <div class="trademark__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/trademark_contents2-1.png" alt="ホルスタイン">
                </div>
                <div class="trademark__txt">
                  <h5 class="scroll fadeInLeft">ホルスタイン</h5>
                  <p class="scroll delay fadeInLeft">
                    皆さんが牛を想像すると「これ」を思い浮かべるのではないでしょうか?<br>
                    外見は白黒斑の模様がついたものがほとんどで、約2000年以上前にドイツからオランダへの移住民が伴った牛が基になっている最も歴史の古い品種とされ、メスは主に搾乳用として飼育されております。生後7～8ヶ月のオスは素牛(もとうし)と呼ばれ、去勢されたものを契約農家から導入し当牧場でおよそ12ヶ月～13ヶ月肥育し、生後18ヶ月齢～20ヶ月齢で出荷します。<br>
                    その肉は和牛などに比べるとサシが少なく淡白な味わいで、赤身のうまみ風味を堪能できます。価格もお求めやすくなっております。
                  </p>
                </div>
              </li>
              <li>
                <div class="trademark__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/trademark_contents2-2.png" alt="F1（交雑種）">
                </div>
                <div class="trademark__txt">
                  <h5 class="scroll fadeInRight">F1（交雑種）</h5>
                  <p class="scroll delay fadeInRight">
                    外見は黒毛和種によく似た黒色で、当牧場ではホルスタインのメスと黒毛和種のオスとの交雑種のみを素牛として導入し、およそ18ヶ月～19ヶ月肥育し、生後23ヶ月齢～26ヶ月齢で出荷します。またホルスタイン・F1ともに、牛肉の品質の安定化に努めております。<br>
                    肉質は脂ののった黒毛和種に近く、価格は和牛に比べてお求めやすくなっております。
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </main>
</div>

<?php get_footer(); ?>