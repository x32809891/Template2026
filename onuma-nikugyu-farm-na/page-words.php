<?php get_header(); ?>

<div id="scroll__contents">
  <main>
    <div class="wrapper">

      <!--##### 下層ページヘッダー #####-->
      <?php
      get_template_part('template-parts/header-sub', null, [
          'title' => '用語辞典',
          'bg_pc' => get_template_directory_uri() . '/img/page/header_words.jpg',
          'bg_sp' => get_template_directory_uri() . '/img/page/header_words.jpg',
      ]);
      ?>

      <!--##### パンくずリスト #####-->
      <?php get_template_part('template-parts/breadcrumb'); ?>

      <!----------------------------------------------------------------------->
      <!--##### 用語辞典 #####-->
      <div class="page-words">
        <!-- contents1 -->
        <div class="words__contents1 contents--small contents--type01">
          <div class="words__list">
            <ul>
              <li id="words1">
                <div class="words__txt">
                  <h4><span>ホ</span>ルスタイン</h4>
                  <p class="scroll fadeInLeft">
                    外見は白黒斑の模様がついたものがほとんどで、約2000年以上前にドイツからオランダへの移住民が伴った牛が基になっている最も歴史の古い品種とされ、メスは主に搾乳用として飼育されております。生後7～8ヶ月のオスは素牛(もとうし)と呼ばれ、去勢されたものを契約農家から導入し当牧場でおよそ12ヶ月～13ヶ月肥育し、生後18ヶ月齢～20ヶ月齢で出荷します。<br>
                    その肉は和牛などに比べるとサシが少なく淡白な味わいで、赤身のうまみ風味を堪能できます。価格もお求めやすくなっております。
                  </p>
                </div>
              </li>
              <li id="words2">
                <div class="words__txt">
                  <h4><span>F</span>1（交雑種）</h4>
                  <p class="scroll fadeInLeft">
                    外見は黒毛和種によく似た黒色で、当牧場ではホルスタインのメスと黒毛和種のオスとの交雑種のみを素牛として導入し、およそ18ヶ月～19ヶ月肥育し、生後23ヶ月齢～26ヶ月齢で出荷します。またホルスタイン・F1ともに、牛肉の品質の安定化に努めております。<br>
                    肉質は脂ののった黒毛和種に近く、価格は和牛に比べてお求めやすくなっております。
                  </p>
                </div>
              </li>
              <li id="words3">
                <div class="words__txt">
                  <h4><span>サ</span>イレージ</h4>
                  <p class="scroll fadeInLeft">
                    青刈りした飼料作物をサイロと呼ばれる保管庫に詰めるなどして乳酸発酵させた飼料。酸素が触れない嫌気状態にし、乳酸菌によりphを低下させ、腐らないようにしたもの。<br>
                    当牧場で使われている「デントコーンサイレージ」は繊維の多い茎葉部分と栄養価の高い子実部分を同時に利用する為バランスが良い飼料とされ、また嗜好性も良い。
                  </p>
                </div>
              </li>
              <li id="words4">
                <div class="words__txt">
                  <h4><span>家</span>畜排せつ物の管理の適正化及び利用の促進に関する法律</h4>
                  <p class="scroll fadeInLeft">
                    その名の通り、家畜排せつ物を施設内で管理を行い、（簡易的な施設でも可）その堆肥の利用を促進することを目的とした法律です。平成11年11月1日に施行され、一部の規定の適用が猶予されていましたが、平成16年11月1日に完全施行（全ての規定が適用）され、堆肥舍等を整備するなど適正な管理が義務づけられました。<br>
                    当牧場においては、排せつ物を牛舎内で敷料に吸着させ、この施設内で発酵させてから飼料用作物畑に還元しております。（一部販売、また敷料として使用）
                  </p>
                </div>
              </li>
              <li id="words5">
                <div class="words__txt">
                  <h4><span>牛</span>の個体識別のための情報の管理及び伝達に関する特別措置法<br>（牛肉トレーサビリティー法）</h4>
                  <p class="scroll fadeInLeft">
                    BSEのまん延防止措置の的確な実施や牛肉の安全性に対する信頼確保を図るため、牛を個体識別番号により一元管理するとともに、生産から流通・消費の各段階において当該個体識別番号を正確に伝達するための制度を構築した法律。平成15年12月1日から施行、ただし、牛肉への表示等は平成16年12月1日から施行。<br>
                    国産牛肉については、牛の出生から、と蓄場（食肉処理場）で処理されて、牛肉に加工され、小売店に並ぶ一連の履歴を10桁の個体識別番号で管理し、取引データを記録する事が義務づけられました。当牧場では、これらの牛一頭一頭の生産流通履歴情報・肥育管理情報などのデータをPCにより一括管理しています。
                  </p>
                </div>
              </li>
            </ul>
            <div class="words__img">
              <div class="scroll fadeIn"><img src="<?php echo get_template_directory_uri(); ?>/img/page/words_contents1-1.jpg" alt="ホルスタイン"></div>
              <div class="scroll delay fadeIn"><img src="<?php echo get_template_directory_uri(); ?>/img/page/words_contents1-2.jpg" alt="F1"></div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </main>
</div>

<?php get_footer(); ?>