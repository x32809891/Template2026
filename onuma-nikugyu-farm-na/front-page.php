<?php get_header(); ?>

<div id="scroll__contents">
	<main>
		<div class="wrapper">

			<div class="topslider">
				<video class="topslider__video topslider__video--pc" autoplay muted loop playsinline poster="<?php echo get_template_directory_uri(); ?>/movie/movie_thumb.jpg">
					<source src="<?php echo get_template_directory_uri(); ?>/movie/movie_pc.mp4" type="video/mp4">
					<img class="topslider__fallback" src="<?php echo get_template_directory_uri(); ?>/movie/movie_thumb.jpg" alt="MV動画サムネイル">
				</video>
				<video class="topslider__video topslider__video--sp" autoplay muted loop playsinline poster="<?php echo get_template_directory_uri(); ?>/movie/movie_thumb-sp.jpg">
					<source src="<?php echo get_template_directory_uri(); ?>/movie/movie_sp.mp4" type="video/mp4">
					<img class="topslider__fallback" src="<?php echo get_template_directory_uri(); ?>/movie/movie_thumb-sp.jpg" alt="MV動画サムネイル">
				</video>
				<div class="overlay">
					<h1>
						<div class="overlay_cowspots">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</div>
						<span class="overlay_ttl">
							地域とともに<br>
							次の世代に残せる<br>
							本当の豊かさを<br>
							ここから。
						</span>
					</h1>
					<div class="vertical"><a href="#contents1" aria-label="scroll down"></a></div>
					<div class="activity">
						<span class="activity__dot1"></span>
						<span class="activity__dot2"></span>
						<p>活動報告</p>
						<?php
						$latest_post = new WP_Query([
							'post_type'      => 'post',
							'posts_per_page' => 1,
							'orderby'        => 'date',
							'order'          => 'DESC',
						]);

						if ( $latest_post->have_posts() ) :
							while ( $latest_post->have_posts() ) : $latest_post->the_post();
						?>
							<a class="activity__link" href="<?php the_permalink(); ?>">
								<div class="activity__body">
									<div class="activity__wrap">
										<time class="activity__date" datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
											<?php echo get_the_date( 'Y.n.j' ); ?>
										</time>
										<p class="activity__cat">
										<?php
											$categories = get_the_category();
											if (!empty($categories)) {
											foreach ($categories as $category) {
												echo '<span class="activity__cat-item">' . esc_html($category->name) . '</span>';
											}
											}
										?>
										</p>
									</div>
									<p class="activity__ttl"><?php echo mb_strimwidth( get_the_title(), 0, 40, '...' ); ?></p>
								</div>
							</a>
						<?php
							endwhile;
							wp_reset_postdata();
						else :
						?>
							<p class="activity__none">投稿がありません</p>
						<?php endif; ?>
					</div>
				</div>
			</div><!-- / .topslider -->

			<div class="index-contents1">
				<div id="contents1" class="contents contents--type01">
					<div class="contents1__ttl__icon scroll fadeIn">
						<svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M14 12C10 10 8 6 9 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
							<path d="M34 12C38 10 40 6 39 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
							<path d="M12 16C8 15 5 17 5 20C5 23 8 24 11 22" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
							<path d="M36 16C40 15 43 17 43 20C43 23 40 24 37 22" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
							<path d="M24 12C15 12 10 19 10 27C10 35 16 41 24 41C32 41 38 35 38 27C38 19 33 12 24 12Z" stroke="currentColor" stroke-width="2.4" stroke-linejoin="round"/>
							<circle cx="18" cy="24" r="1.6" fill="currentColor"/>
							<circle cx="30" cy="24" r="1.6" fill="currentColor"/>
							<path d="M17 31C17 34 20 36 24 36C28 36 31 34 31 31" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
							<circle cx="21" cy="33" r="0.9" fill="currentColor"/>
							<circle cx="27" cy="33" r="0.9" fill="currentColor"/>
						</svg>
					</div>
					<h2 class="contents1__ttl scroll fadeIn">安心を、まっすぐに。<br>おいしい牛肉をあなたへ。</h2>
					<p class="contents1__txt scroll fadeIn delay">
						牛のストレスを減らす環境づくり、エサへのこだわり、日々の健康管理。<br>
						当たり前のことを当たり前に積み重ねることが、安全でおいしい牛肉を生む一番の近道だと考えています。<br>
						これからも変わらぬ品質で、食卓の安心を支え続けます。
					</p>
				</div><!-- /#contents1 .contents .contents--type01 --->
			</div><!-- /.index-contents1 -->

			<div class="index-contents2">
				<div id="contents2" class="contents--small contents--type02">
					<ul class="contents2__list">
						<li class="contents2__item">
							<a href="<?php echo home_url('/fodder/'); ?>">
								<div class="contents2__item--img">
									<img src="<?php echo get_template_directory_uri(); ?>/img/index/index_contents2-1.jpg" alt="">
								</div>
								<div class="contents2__item--txt">
									<h3>エサのこだわり
										<span class="--arrow">
											<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
												<line x1="4" y1="12" x2="20" y2="12"></line>
												<polyline points="14 6 20 12 14 18"></polyline>
											</svg>
										</span>
									</h3>
									<p class="scroll fadeInLeft">
										大手配合飼料メーカーであるホクレンくみあい飼料・日清丸紅飼料(株)、フィード・ワン(株)に協力を依頼し、プライベートブランドで当牧場の飼養方法に合う設計をした飼料を専用車両で搬入しています。季節や牛の変化に応じ、定期的な見直しを実施しております。
									</p>
								</div>
							</a>
						</li>
						<li class="contents2__item">
							<a href="<?php echo home_url('/intro/'); ?>">
								<div class="contents2__item--img">
									<img src="<?php echo get_template_directory_uri(); ?>/img/index/index_contents2-2.jpg" alt="">
								</div>
								<div class="contents2__item--txt">
									<h3>導入から出荷まで
										<span class="--arrow">
											<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
												<line x1="4" y1="12" x2="20" y2="12"></line>
												<polyline points="14 6 20 12 14 18"></polyline>
											</svg>
										</span>
									</h3>
									<p class="scroll fadeInRight">
										当牧場は駒ケ岳・大沼国定公園の近隣に位置し、自然も豊かな中で、地域環境を考え、最新設備で飼育しております。牛舎ごとにデジタル計量器を設置、出荷体重を記録しそのデータを生産にフィードバックする体制をとっております。
									</p>
								</div>
							</a>
						</li>
					</ul>
				</div><!-- /#contents2 -->
			</div><!-- /.index-contents2 -->

			<div class="index-contents3">
				<div id="contents3" class="contents--small contents--type02">
					<div class="contents__ttl">
						<p class="--en">brand</p>
						<h2 class="--ttl">取扱品種</h2>
						<div class="--circle">
							<span></span>
							<span></span>
							<span></span>
						</div>
					</div>
					<p class="contents__txt scroll fadeInUp">
						北海道の豊かな自然環境の中で育った牛達は、赤身は味わい深く、脂に甘みのある牛肉になります。<br>
						部位ごとにステーキ・しゃぶしゃぶ・シチューなど、どんな料理でもお楽しみいただけます。<br>
						なお、牧場直売はしておりませんので、スーパーなどでお見かけの際には是非一度ご賞味ください。
					</p>
					<ol class="contents3__list">
						<li class="contents3__item scroll fadeInLeft">
							<div class="contents3__txt">
								<h3>ブランド・商標について</h3>
								<p>
									「はこだて大沼牛」「はこだて大沼黒牛」「はこだて大沼姫黒牛」「函館牛」「函館和牛」など、当牧場が育てるホルスタイン種・F1（交雑種）の特徴やブランドについてご紹介いたします。
								</p>
							</div>
							<div class="contents__btn">
								<a href="<?php echo home_url('/trademark/'); ?>">
									<span class="circle">
										<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
											<line x1="4" y1="12" x2="20" y2="12"></line>
											<polyline points="14 6 20 12 14 18"></polyline>
										</svg>
									</span>
									詳しく見る
								</a>
							</div>
						</li>
						<li class="contents3__item scroll fadeInLeft">
							<div class="contents3__txt">
								<h3>用語辞典</h3>
								<p>
									「サイレージ」や「牛肉トレーサビリティー法」など、畜産に関わる専門用語をわかりやすく解説しています。牧場の取り組みをより深く知りたい方はぜひご覧ください。
								</p>
							</div>
							<div class="contents__btn">
								<a href="<?php echo home_url('/words/'); ?>">
									<span class="circle">
										<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
											<line x1="4" y1="12" x2="20" y2="12"></line>
											<polyline points="14 6 20 12 14 18"></polyline>
										</svg>
									</span>
									詳しく見る
								</a>
							</div>
						</li>
					</ol>
					<div class="contents3__img">
						<div><img src="<?php echo get_template_directory_uri(); ?>/img/index/index_contents3.jpg" alt=""></div>
					</div>
				</div><!-- /#contents3 --->
			</div><!-- /.index-contents3 -->

			<div class="index-contents4">
				<div id="contents4" class="contents--small contents--type02">
					<div class="contents__ttl">
						<p class="--en">farm</p>
						<h2 class="--ttl">牧場概要</h2>
						<div class="--circle">
							<span></span>
							<span></span>
							<span></span>
						</div>
					</div>
					<p class="contents__txt scroll fadeInUp">北海道内の3拠点に、私たちの牧場があります。<br>3つの牧場、それぞれの魅力をぜひご覧ください。</p>
					<div class="contents__wrap">
						<div class="contents__btn">
							<a href="<?php echo home_url('/outline/'); ?>">
								<span class="circle">
									<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
										<line x1="4" y1="12" x2="20" y2="12"></line>
										<polyline points="14 6 20 12 14 18"></polyline>
									</svg>
								</span>
								牧場概要
							</a>
						</div>
						<div class="contents__btn">
							<a href="<?php echo home_url('/gallery/'); ?>">
								<span class="circle">
									<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
										<line x1="4" y1="12" x2="20" y2="12"></line>
										<polyline points="14 6 20 12 14 18"></polyline>
									</svg>
								</span>
								ギャラリー
							</a>
						</div>
					</div>
					<ul class="contents4__list">
						<li class="contents4__item scroll fadeInUp">
							<a href="<?php echo home_url('/gallery/#gallery__contents1'); ?>">
								<div class="--img"><img src="<?php echo get_template_directory_uri(); ?>/img/index/index_contents4-1.jpg" alt="大沼本場"></div>
								<p class="--ttl">大沼本場</p>
								<p class="--txt">
									小澤牧場グループの本拠地。北海道七飯町、駒ケ岳と大沼国定公園にほど近い自然豊かな環境に位置し、グループ最大規模の牛舎を構えています。
								</p>
							</a>
						</li>
						<li class="contents4__item scroll delay fadeInUp">
							<a href="<?php echo home_url('/gallery/#gallery__contents2'); ?>">
								<div class="--img"><img src="<?php echo get_template_directory_uri(); ?>/img/index/index_contents4-2.jpg" alt="芽室分場"></div>
								<p class="--ttl">芽室分場</p>
								<p class="--txt">
									十勝地方・河西郡芽室町に位置する分場です。広大な畑作地帯に囲まれた環境で、飼料生産と連携しながら牛の飼育にあたっています。
								</p>
							</a>
						</li>
						<li class="contents4__item scroll delay2 fadeInUp">
							<a href="<?php echo home_url('/gallery/#gallery__contents3'); ?>">
								<div class="--img"><img src="<?php echo get_template_directory_uri(); ?>/img/index/index_contents4-3.jpg" alt="長沼分場"></div>
								<p class="--ttl">長沼分場</p>
								<p class="--txt">
									夕張郡長沼町にある分場です。石狩平野の豊かな大地の中、地域の環境に配慮しながら丁寧な飼育管理を行っています。
								</p>
							</a>
						</li>
					</ul>
				</div><!-- /#contents4 --->
			</div><!-- /.index-contents4 -->

			<div class="index-contents5">
				<div id="contents5" class="contents--small contents--type02">
					<div class="contents__ttl">
						<p class="--en">recruit</p>
						<h2 class="--ttl">採用情報</h2>
						<div class="--circle">
							<span></span>
							<span></span>
							<span></span>
						</div>
					</div>
					<p class="contents__txt scroll fadeInUp">
						動物好き・北海道好き・自然好きな方、大歓迎です。<br>
						4週6休や年始・お盆休みなど働きやすい環境が整っており、20～40代の男女が幅広く活躍しています。<br>
						未経験からのスタートも、先輩スタッフと一緒に安心して始められます。
					</p>
					<div class="contents__wrap">
						<div class="contents__btn">
							<a href="<?php echo home_url('/recruit/'); ?>">
								<span class="circle">
									<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
										<line x1="4" y1="12" x2="20" y2="12"></line>
										<polyline points="14 6 20 12 14 18"></polyline>
									</svg>
								</span>
								採用情報
							</a>
						</div>
						<div class="contents__btn">
							<a href="<?php echo home_url('/staff/'); ?>">
								<span class="circle">
									<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
										<line x1="4" y1="12" x2="20" y2="12"></line>
										<polyline points="14 6 20 12 14 18"></polyline>
									</svg>
								</span>
								スタッフ紹介
							</a>
						</div>
					</div>
					<section class="contents5__box">
						<div class="contents5__item scroll fadeIn">
							<a href="<?php echo home_url('/recruit/#recruit__contents2'); ?>"><h3>募集要項</h3></a>
						</div>
						<div class="contents5__item scroll delay fadeIn">
							<a href="<?php echo home_url('/recruit/#recruit__contents3'); ?>"><h3>採用プロセス</h3></a>
						</div>
						<div class="contents5__item scroll delay2 fadeIn">
							<a href="<?php echo home_url('/staff/'); ?>"><h3>スタッフ紹介</h3></a>
						</div>
						<div class="contents5__item scroll delay3 fadeIn">
							<a href="<?php echo home_url('/contact/'); ?>"><h3>求人に応募する</h3></a>
						</div>
					</section>
				</div><!-- /#contents5 --->
			</div><!-- /.index-contents5 -->

			<div class="index-activity">
				<div id="activity" class="contents--small contents--type01">
					<div class="contents__ttl">
						<p class="--en">activity</p>
						<h2 class="--ttl">活動報告</h2>
						<div class="--circle">
							<span></span>
							<span></span>
							<span></span>
						</div>
					</div>
					<div class="activity__article">
						<?php
							$posts = new WP_Query('posts_per_page=3');
							if ($posts->have_posts()) :
								$count = 1;
								while ($posts->have_posts()) :
									$posts->the_post();
						?>
						<div class="activity__item scroll fadeIn">
							<a class="activity__link" href="<?php the_permalink(); ?>">
								<div class="activity__box">
									<p class="activity__date"><?php the_time(get_option('date_format')); ?></p>
									<p class="activity__cat">
										<?php
											$categories = get_the_category();
											if (!empty($categories)) {
											foreach ($categories as $category) {
												echo '<span class="activity__cat-item">' . esc_html($category->name) . '</span>';
											}
											}
										?>
									</p>
								</div>
								<h3 class="activity__ttl">
									<?php the_title(); ?>
									<span class="--arrow">
										<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
											<line x1="4" y1="12" x2="20" y2="12"></line>
											<polyline points="14 6 20 12 14 18"></polyline>
										</svg>
									</span>
								</h3>
							</a>
						</div>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
						<?php else: ?>
							<p><span class="not-found__txt"><?php echo "投稿が見つかりません" ; ?></span></p>
						<!-- 投稿が無い場合の処理 -->
						<?php endif; ?>
					</div>
					<div class="contents__btn">
						<a href="<?php echo home_url('/activity/'); ?>">
							<span class="circle">
								<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
									<line x1="4" y1="12" x2="20" y2="12"></line>
									<polyline points="14 6 20 12 14 18"></polyline>
								</svg>
							</span>
							活動報告一覧
						</a>
					</div>
				</div><!-- /#activity --->
			</div><!-- /.index-activity -->

			<div class="index-contents6">
				<div id="contents6" class="contents--small contents--type02">
					<div class="contents6__box scroll fadeInUp">
						<a class="contents6__link" href="<?php echo home_url('/company/'); ?>">
							<div class="contents6__wrap">
								<div class="contents__ttl">
									<p class="--en">group</p>
									<h2 class="--ttl">小澤牧場グループ</h2>
									<div class="--circle">
										<span></span>
										<span></span>
										<span></span>
									</div>
								</div>
								<p class="contents__txt">
									明治26年創業、130年以上の歴史を持つ小澤牧場グループ。<br>
									大沼本場をはじめ北海道内に複数の牧場を持ち、<br>
									飼料づくりから肥育・出荷までを一貫して手がける、<br>
									国内でも数少ない大規模な肉牛牧場グループです。
								</p>
								<span class="--arrow">
									<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
										<line x1="4" y1="12" x2="20" y2="12"></line>
										<polyline points="14 6 20 12 14 18"></polyline>
									</svg>
								</span>
							</div>
						</a>
						<div class="contents6__bg"></div>
					</div>
				</div><!-- /#activity --->
			</div><!-- /.index-contents6 -->

		</div><!-- /.wrapper -->
	</main>

<?php get_footer(); ?>