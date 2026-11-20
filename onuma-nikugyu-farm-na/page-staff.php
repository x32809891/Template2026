<?php get_header(); ?>

<div id="scroll__contents">
  <main>
    <div class="wrapper">

      <!--##### 下層ページヘッダー #####-->
      <?php
      get_template_part('template-parts/header-sub', null, [
          'title' => 'スタッフ紹介',
          'bg_pc' => get_template_directory_uri() . '/img/page/header_staff.jpg',
          'bg_sp' => get_template_directory_uri() . '/img/page/header_staff.jpg',
      ]);
      ?>

      <!--##### パンくずリスト #####-->
      <?php get_template_part('template-parts/breadcrumb'); ?>

      <!----------------------------------------------------------------------->
      <!--##### スタッフ紹介 #####-->
      <div class="page-staff">
        <!-- contents1 -->
        <div class="staff__contents1 contents--small">
          <div class="staff__bg">
            <div class="staff__gallery">
              <div class="scroll fadeInUp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/page/staff_gallery1.jpg" alt="大沼本場">
                <p>大沼本場</p>
              </div>
              <div class="scroll fadeInUp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/page/staff_gallery2.jpg" alt="芽室分場">
                <p>芽室分場</p>
              </div>
              <div class="scroll delay fadeInUp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/page/staff_gallery3.jpg" alt="長沼分場">
                <p>長沼分場</p>
              </div>
            </div>
            <div class="staff__list">
              <ul>
                <li class="scroll fadeIn">
                  <div class="staff__card">
                    <div class="staff__txt">
                      <div class="staff__thumb">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/page/staff_contents1-1.jpg" alt="藤田 文博さん">
                      </div>
                      <h4><span>大沼本場</span>藤田 文博さん</h4>
                      <p class="badge">入社歴：3年</p>
                    </div>
                    <div class="staff__faq">
                      <div class="faq__item is-open">
                        <button class="faq__question" type="button">
                          <span class="faq__q-mark">Q1</span>
                          <p>この仕事に興味を持ったきっかけは何ですか？</p>
                          <svg class="faq__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                        </button>
                        <div class="faq__answer">
                          <div class="faq__answer-inner">
                            <p>自然の多い場所で働きたいと思っていたのと、動物に触れあう仕事に興味を持っていたことです。</p>
                          </div>
                        </div>
                      </div>
                      <div class="faq__item">
                        <button class="faq__question" type="button">
                          <span class="faq__q-mark">Q2</span>
                          <p>今の職場での担当は何ですか？ 又、業務で気を付けていることや大変なことは何ですか？</p>
                          <svg class="faq__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                        </button>
                        <div class="faq__answer">
                          <div class="faq__answer-inner">
                            <p>牛への餌やりや牛舎周辺の除草や清掃等の衛生管理をしています。重機の運転する場合もありますので、気を付けています。又、体力を必要とする業務もありますが、重機の設備が充実しているので、軽減されています。</p>
                          </div>
                        </div>
                      </div>
                      <div class="faq__item">
                        <button class="faq__question" type="button">
                          <span class="faq__q-mark">Q3</span>
                          <p>これから挑戦したいこと・目標はなんですか？</p>
                          <svg class="faq__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                        </button>
                        <div class="faq__answer">
                          <div class="faq__answer-inner">
                            <p>まだ経験していない業務も早く覚えたいと思っています。日々の牛の飼養管理に気を付けて美味しいお肉を生産することが目標です。</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="scroll fadeIn">
                  <div class="staff__card">
                    <div class="staff__txt">
                      <div class="staff__thumb">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/page/staff_contents1-2.jpg" alt="清水 博斗さん">
                      </div>
                      <h4><span>大沼本場</span>清水 博斗さん</h4>
                      <p class="badge">入社歴：3年</p>
                    </div>
                    <div class="staff__faq">
                      <div class="faq__item is-open">
                        <button class="faq__question" type="button">
                          <span class="faq__q-mark">Q1</span>
                          <p>この仕事に興味を持ったきっかけは何ですか？</p>
                          <svg class="faq__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                        </button>
                        <div class="faq__answer">
                          <div class="faq__answer-inner">
                            <p>動物が好きで、どの様に牛を飼育して大きくし、出荷しているところに興味を持ったことです。</p>
                          </div>
                        </div>
                      </div>
                      <div class="faq__item">
                        <button class="faq__question" type="button">
                          <span class="faq__q-mark">Q2</span>
                          <p>今の職場での担当は何ですか？ 又、業務で気を付けていることや大変なことは何ですか？</p>
                          <svg class="faq__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                        </button>
                        <div class="faq__answer">
                          <div class="faq__answer-inner">
                            <p>主に給餌業務と出荷までの体調管理業務をしています。調子の悪い牛を早めに確認して対応することは難しいのですが、気を付けて見るようにしています。</p>
                          </div>
                        </div>
                      </div>
                      <div class="faq__item">
                        <button class="faq__question" type="button">
                          <span class="faq__q-mark">Q3</span>
                          <p>これから挑戦したいこと・目標はなんですか？</p>
                          <svg class="faq__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                        </button>
                        <div class="faq__answer">
                          <div class="faq__answer-inner">
                            <p>牛の知識を身につけ、他の業務でも先輩の様に素早く動いて対応できるようにし、安心して任せて貰える様になることが目標です。</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="scroll fadeIn">
                  <div class="staff__card">
                    <div class="staff__txt">
                      <div class="staff__thumb">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/page/staff_contents1-4.jpg" alt="岡田 祐也さん">
                      </div>
                      <h4><span>芽室分場</span>岡田 祐也さん</h4>
                      <p class="badge">入社歴：10年</p>
                    </div>
                    <div class="staff__faq">
                      <div class="faq__item is-open">
                        <button class="faq__question" type="button">
                          <span class="faq__q-mark">Q1</span>
                          <p>この仕事に興味を持ったきっかけは何ですか？</p>
                          <svg class="faq__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                        </button>
                        <div class="faq__answer">
                          <div class="faq__answer-inner">
                            <p>色々な牛を見ることができ、健康な牛にするために自分で治療等して育てることに興味をもったことです。</p>
                          </div>
                        </div>
                      </div>
                      <div class="faq__item">
                        <button class="faq__question" type="button">
                          <span class="faq__q-mark">Q2</span>
                          <p>今の職場での担当は何ですか？ 又、業務で気を付けていることや大変なことは何ですか？</p>
                          <svg class="faq__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                        </button>
                        <div class="faq__answer">
                          <div class="faq__answer-inner">
                            <p>主に子牛の餌やミルクやり、治療管理です。導入時の子牛は弱いので体調管理に気をつけるようにしています。</p>
                          </div>
                        </div>
                      </div>
                      <div class="faq__item">
                        <button class="faq__question" type="button">
                          <span class="faq__q-mark">Q3</span>
                          <p>これから挑戦したいこと・目標はなんですか？</p>
                          <svg class="faq__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                        </button>
                        <div class="faq__answer">
                          <div class="faq__answer-inner">
                            <p> 飼養頭数も多く毎日の業務内容が変わることもありますが、臨機応変に対応するようにしていきたいです。重機に乗って作業することが多くなってきたので、周囲の安全を確認し、気を付けるようにしたいです。又、担当外の業務を含め管理できるようになりたいと思っています。</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="scroll fadeIn">
                  <div class="staff__card">
                    <div class="staff__txt">
                      <div class="staff__thumb">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/page/staff_contents1-3.jpg" alt="堺 篤史さん">
                      </div>
                      <h4><span>芽室分場</span>堺 篤史さん</h4>
                      <p class="badge">入社歴：6年</p>
                    </div>
                    <div class="staff__faq">
                      <div class="faq__item is-open">
                        <button class="faq__question" type="button">
                          <span class="faq__q-mark">Q1</span>
                          <p>この仕事に興味を持ったきっかけは何ですか？</p>
                          <svg class="faq__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                        </button>
                        <div class="faq__answer">
                          <div class="faq__answer-inner">
                            <p>動物に関わる仕事がしたいと思ったことがきっかけです。実際に働いてみると、命を預かる責任の大きさを実感する一方で、自分が携わった牛が元気に成長していく姿に大きなやりがいを感じ、この仕事を選んで良かったと思っています。</p>
                          </div>
                        </div>
                      </div>
                      <div class="faq__item">
                        <button class="faq__question" type="button">
                          <span class="faq__q-mark">Q2</span>
                          <p>今の職場での担当は何ですか？ 又、業務で気を付けていることや大変なことは何ですか？</p>
                          <svg class="faq__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                        </button>
                        <div class="faq__answer">
                          <div class="faq__answer-inner">
                            <p>現在は牛の飼養管理全般を担当しながら、ホイールローダーでの堆肥出しや牛舎設備の修理を行い改善をしています。スタッフとの連携・報告を心掛けています。</p>
                          </div>
                        </div>
                      </div>
                      <div class="faq__item">
                        <button class="faq__question" type="button">
                          <span class="faq__q-mark">Q3</span>
                          <p>これから挑戦したいこと・目標はなんですか？</p>
                          <svg class="faq__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                        </button>
                        <div class="faq__answer">
                          <div class="faq__answer-inner">
                            <p>牛の知識や飼養技術をさらに身につけ、どんな業務でも安心して任せてもらえる存在になることが目標です。経験を積みながら後輩のサポートもできるようになり、職場に貢献できる人材を目指しています。</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="scroll fadeIn">
                  <div class="staff__card">
                    <div class="staff__txt">
                      <div class="staff__thumb">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/page/staff_contents1-5.jpg" alt="藤田 賢治さん">
                      </div>
                      <h4><span>長沼分場</span>藤田 賢治さん</h4>
                      <p class="badge">入社歴：12年</p>
                    </div>
                    <div class="staff__faq">
                      <div class="faq__item is-open">
                        <button class="faq__question" type="button">
                          <span class="faq__q-mark">Q1</span>
                          <p>この仕事に興味を持ったきっかけは何ですか？</p>
                          <svg class="faq__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                        </button>
                        <div class="faq__answer">
                          <div class="faq__answer-inner">
                            <p>"異業種出身でも出来るかも"と思えた瞬間です。元々全く違う職種で働いていましたが知人の勧めもありこの職業に就きました。はじめは新しい環境に慣れるのは難しいことではありましたが、一年、二年とこなす内にどんどん魅力に引き込まれていました。</p>
                          </div>
                        </div>
                      </div>
                      <div class="faq__item">
                        <button class="faq__question" type="button">
                          <span class="faq__q-mark">Q2</span>
                          <p>今の職場での担当は何ですか？ 又、業務で気を付けていることや大変なことは何ですか？</p>
                          <svg class="faq__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                        </button>
                        <div class="faq__answer">
                          <div class="faq__answer-inner">
                            <p>牧場長として現場全体を管理・指示を行っています。限られた人数でスタッフ同士がスムーズに作業できるように気を付けています。また、スタッフの皆さんが支えてくれるので特に大変なことはありません。</p>
                          </div>
                        </div>
                      </div>
                      <div class="faq__item">
                        <button class="faq__question" type="button">
                          <span class="faq__q-mark">Q3</span>
                          <p>これから挑戦したいこと・目標はなんですか？</p>
                          <svg class="faq__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                        </button>
                        <div class="faq__answer">
                          <div class="faq__answer-inner">
                            <p>私自身もまだまだ未熟ですが次世代のスタッフ育成に挑戦したいです。小澤牧場で生産したお肉を皆さんに食べていただき、美味しい！最高！といってもらえることが目標です。</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="scroll fadeIn">
                  <div class="staff__card">
                    <div class="staff__txt">
                      <div class="staff__thumb">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/page/staff_contents1-6.jpg" alt="皆川 涼さん">
                      </div>
                      <h4><span>長沼分場</span>皆川 涼さん</h4>
                      <p class="badge">入社歴：4年</p>
                    </div>
                    <div class="staff__faq">
                      <div class="faq__item is-open">
                        <button class="faq__question" type="button">
                          <span class="faq__q-mark">Q1</span>
                          <p>この仕事に興味を持ったきっかけは何ですか？</p>
                          <svg class="faq__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                        </button>
                        <div class="faq__answer">
                          <div class="faq__answer-inner">
                            <p>元々動物が好きで高校、大学と牛について学んだことで興味を持ちました。</p>
                          </div>
                        </div>
                      </div>
                      <div class="faq__item">
                        <button class="faq__question" type="button">
                          <span class="faq__q-mark">Q2</span>
                          <p>今の職場での担当は何ですか？ 又、業務で気を付けていることや大変なことは何ですか？</p>
                          <svg class="faq__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                        </button>
                        <div class="faq__answer">
                          <div class="faq__answer-inner">
                            <p>子牛のミルクや、修理・工作物制作などを担当しています。業務で気を付けていることは、牛の体調管理や機械作業中の安全確認などです。</p>
                          </div>
                        </div>
                      </div>
                      <div class="faq__item">
                        <button class="faq__question" type="button">
                          <span class="faq__q-mark">Q3</span>
                          <p>これから挑戦したいこと・目標はなんですか？</p>
                          <svg class="faq__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                        </button>
                        <div class="faq__answer">
                          <div class="faq__answer-inner">
                            <p>今は機械作業を任せられる場面が少ないため、安心して任せられる人になっていけるように頑張りたいです。</p>
                          </div>
                        </div>
                      </div>
                    </div>
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
