<?php get_header(); ?>

<div id="scroll__contents">
  <main>
    <div class="wrapper">

      <!--##### 下層ページヘッダー #####-->
      <?php
      get_template_part('template-parts/header-sub', null, [
          'title' => '牧場概要',
          'bg_pc' => get_template_directory_uri() . '/img/page/header_outline.jpg',
          'bg_sp' => get_template_directory_uri() . '/img/page/header_outline.jpg',
      ]);
      ?>

      <!--##### パンくずリスト #####-->
      <?php get_template_part('template-parts/breadcrumb'); ?>

      <!----------------------------------------------------------------------->
      <!--##### 牧場概要 #####-->
      <div class="page-outline">
        <!-- contents1 -->
        <div class="outline__contents1 contents--small contents--type01">
          <div class="outline__farm-map">
            <img src="<?php echo get_template_directory_uri(); ?>/img/page/outline_content1-map.png" alt="牧場マップ">
          </div>
          <div class="outline__farm-list">
            <ul>
              <li class="scroll fadeInUp">
                <div class="outline__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/outline_contents1-1.jpg" alt="小澤牧場(株)大沼本場">
                </div>
                <div class="outline__txt">
                  <h4>小澤牧場(株)大沼本場</h4>
                  <table>
                    <tr>
                      <th>所在地</th>
                      <td>〒041-1352 北海道亀田郡七飯町字軍川407</td>
                    </tr>
                    <tr>
                      <th>電話番号</th>
                      <td>0138-67-3600</td>
                    </tr>
                  </table>
                </div>
              </li>
              <li class="scroll fadeInUp">
                <div class="outline__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/outline_contents1-2.jpg" alt="(株)大沼肉牛ファーム">
                </div>
                <div class="outline__txt">
                  <h4>(株)大沼肉牛ファーム</h4>
                  <table>
                    <tr>
                      <th>所在地</th>
                      <td>〒041-1353 北海道亀田郡七飯町字上軍川619-4</td>
                    </tr>
                    <tr>
                      <th>電話番号</th>
                      <td>0138-67-2127</td>
                    </tr>
                  </table>
                </div>
              </li>
              <li class="scroll delay fadeInUp">
                <div class="outline__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/outline_contents1-3.jpg" alt="小澤牧場(株)芽室分場">
                </div>
                <div class="outline__txt">
                  <h4>小澤牧場(株)芽室分場</h4>
                  <table>
                    <tr>
                      <th>所在地</th>
                      <td>〒082-0006 北海道河西郡芽室町東芽室南3線8番地4</td>
                    </tr>
                    <tr>
                      <th>電話番号</th>
                      <td>0155-62-8460</td>
                    </tr>
                  </table>
                </div>
              </li>
              <li class="scroll delay2 fadeInUp">
                <div class="outline__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page/outline_contents1-4.jpg" alt="小澤牧場(株)長沼分場">
                </div>
                <div class="outline__txt">
                  <h4>小澤牧場(株)長沼分場</h4>
                  <table>
                    <tr>
                      <th>所在地</th>
                      <td>〒069-1464 北海道夕張郡長沼町字幌内1720番56</td>
                    </tr>
                    <tr>
                      <th>電話番号</th>
                      <td>0123-76-7106</td>
                    </tr>
                  </table>
                </div>
              </li>
            </ul>
          </div>
          <div class="outline__map scroll fadeIn">
            <iframe src="https://www.google.com/maps/d/embed?mid=1AB4OtMXRPJLTowkC7gCy2fiIRlSR1TQ&ehbc=2E312F&noprof=1" width="100%" height="525"></iframe>
          </div>
        </div>
        <!-- contents2 -->
        <div class="outline__contents2 contents--small">
          <div class="outline__bg">
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
              <span>FACILITY</span>
              <h3>設備・施設</h3>
            </div>
            <div class="outline__facility-list">
              <div class="outline__wrap">
                <div class="outline__table scroll fadeInUp">
                  <span class="activity__dot1 --outline-dot1"></span>
                  <span class="activity__dot2 --outline-dot2"></span>
                  <h4>小澤牧場株式会社</h4>
                  <table>
                    <tr>
                      <th>肥育牛舎</th>
                      <td>11棟</td>
                    </tr>
                    <tr>
                      <th>堆肥舎</th>
                      <td>6棟</td>
                    </tr>
                    <tr>
                      <th>堆肥盤</th>
                      <td>5箇所</td>
                    </tr>
                    <tr>
                      <th>給餌車</th>
                      <td>3台</td>
                    </tr>
                    <tr>
                      <th>ディスクモア</th>
                      <td>1台</td>
                    </tr>
                    <tr>
                      <th>ジャイロテッダー</th>
                      <td>1台</td>
                    </tr>
                    <tr>
                      <th>ロールベーラー</th>
                      <td>2台</td>
                    </tr>
                    <tr>
                      <th>リモコン式ラップマシーン</th>
                      <td>1台</td>
                    </tr>
                    <tr>
                      <th>牧草ロールカッター</th>
                      <td>3台</td>
                    </tr>
                    <tr>
                      <th>ホイールローダー</th>
                      <td>7台</td>
                    </tr>
                    <tr>
                      <th>トラクター</th>
                      <td>10台</td>
                    </tr>
                    <tr>
                      <th>マニアスプレッダー</th>
                      <td>3台</td>
                    </tr>
                    <tr>
                      <th>自走式モアコン</th>
                      <td>1台</td>
                    </tr>
                    <tr>
                      <th>リバーシブルプラウ</th>
                      <td>1台</td>
                    </tr>
                    <tr>
                      <th>車両</th>
                      <td>牛搬送用トラック 1台<br>堆肥運搬用ダンプ 1台<br>作業ダンプ 4台<br>軽トラック 2台</td>
                    </tr>
                  </table>
                </div>
                <div class="outline__table scroll delay fadeInUp">
                  <span class="activity__dot1 --outline-dot1"></span>
                  <span class="activity__dot2 --outline-dot2"></span>
                  <h4>株式会社大沼肉牛ファーム</h4>
                  <table>
                    <tr>
                      <th>肥育牛舎</th>
                      <td>16棟</td>
                    </tr>
                    <tr>
                      <th>堆肥舎</th>
                      <td>7棟</td>
                    </tr>
                    <tr>
                      <th>堆肥盤</th>
                      <td>7箇所</td>
                    </tr>
                    <tr>
                      <th>給餌車</th>
                      <td>5台</td>
                    </tr>
                    <tr>
                      <th>ディスクモア</th>
                      <td>2台</td>
                    </tr>
                    <tr>
                      <th>ジャイロテッダー</th>
                      <td>1台</td>
                    </tr>
                    <tr>
                      <th>リモコン式ラップマシーン</th>
                      <td>1台</td>
                    </tr>
                    <tr>
                      <th>牧草ロールカッター</th>
                      <td>4台</td>
                    </tr>
                    <tr>
                      <th>ホイールローダー</th>
                      <td>10台</td>
                    </tr>
                    <tr>
                      <th>トラクター</th>
                      <td>14台</td>
                    </tr>
                    <tr>
                      <th>マニアスプレッダー</th>
                      <td>3台</td>
                    </tr>
                    <tr>
                      <th>車両</th>
                      <td>牛搬送用トラック 1台<br>堆肥運搬用ダンプ 2台<br>作業ダンプ 2台<br>作業平トラック 3台<br>車載セルトラック 1台<br>軽トラック 2台</td>
                    </tr>
                  </table>
                </div>
                <div class="outline__table scroll fadeInUp">
                  <span class="activity__dot1 --outline-dot1"></span>
                  <span class="activity__dot2 --outline-dot2"></span>
                  <h4>小澤牧場(株)芽室分場</h4>
                  <table>
                    <tr>
                      <th>哺育ハッチ</th>
                      <td>725基</td>
                    </tr>
                    <tr>
                      <th>哺育舎</th>
                      <td>2棟</td>
                    </tr>
                    <tr>
                      <th>育成舎</th>
                      <td>15棟</td>
                    </tr>
                    <tr>
                      <th>堆肥舎</th>
                      <td>2棟</td>
                    </tr>
                    <tr>
                      <th>堆肥盤</th>
                      <td>3箇所</td>
                    </tr>
                    <tr>
                      <th>自走式給餌車</th>
                      <td>3台</td>
                    </tr>
                    <tr>
                      <th>牧草ロールカッター</th>
                      <td>1台</td>
                    </tr>
                    <tr>
                      <th>ホイールローダー</th>
                      <td>5台</td>
                    </tr>
                    <tr>
                      <th>トラクター</th>
                      <td>1台</td>
                    </tr>
                    <tr>
                      <th>マニアスプレッダー</th>
                      <td>1台</td>
                    </tr>
                    <tr>
                      <th>車両</th>
                      <td>牛搬送用カーゴ 1台<br>作業ダンプ 1台<br>軽トラック 1台</td>
                    </tr>
                  </table>
                </div>
                <div class="outline__table scroll delay fadeInUp">
                  <span class="activity__dot1 --outline-dot1"></span>
                  <span class="activity__dot2 --outline-dot2"></span>
                  <h4>小澤牧場(株)長沼分場</h4>
                  <table>
                    <tr>
                      <th>哺育ハッチ</th>
                      <td>520基</td>
                    </tr>
                    <tr>
                      <th>哺育舎</th>
                      <td>3棟</td>
                    </tr>
                    <tr>
                      <th>育成舎</th>
                      <td>2棟</td>
                    </tr>
                    <tr>
                      <th>堆肥舎</th>
                      <td>2棟</td>
                    </tr>
                    <tr>
                      <th>堆肥盤</th>
                      <td>2箇所</td>
                    </tr>
                    <tr>
                      <th>給餌車</th>
                      <td>2台</td>
                    </tr>
                    <tr>
                      <th>ディスクモア</th>
                      <td>2台</td>
                    </tr>
                    <tr>
                      <th>ジャイロテッダー</th>
                      <td>1台</td>
                    </tr>
                    <tr>
                      <th>ロールベーラー</th>
                      <td>1台</td>
                    </tr>
                    <tr>
                      <th>リモコン式ラップマシーン</th>
                      <td>1台</td>
                    </tr>
                    <tr>
                      <th>牧草ロールカッター</th>
                      <td>2台</td>
                    </tr>
                    <tr>
                      <th>ホイールローダー</th>
                      <td>4台</td>
                    </tr>
                    <tr>
                      <th>トラクター</th>
                      <td>4台</td>
                    </tr>
                    <tr>
                      <th>マニアスプレッダー</th>
                      <td>1台</td>
                    </tr>
                    <tr>
                      <th>車両</th>
                      <td>牛搬送用トラック 1台<br>牛搬送用カーゴ 1台<br>作業ダンプ 2台<br>軽トラック 1台</td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class="outline__gallery">
                <img src="<?php echo get_template_directory_uri(); ?>/img/page/outline_contents2-1.jpg" alt="ギャラリー" class="is-active">
                <img src="<?php echo get_template_directory_uri(); ?>/img/page/outline_contents2-2.jpg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/page/outline_contents2-3.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
        <!-- contents3 -->
        <div class="outline__contents3 contents--small">
          <div class="outline__bg">
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
              <span>LIVESTOCK</span>
              <h3>飼養頭数</h3>
            </div>
            <div class="outline__box scroll fadeInUp">
              <div class="outline__table">
                <span class="activity__dot1 --outline-dot3"></span>
                <span class="activity__dot2 --outline-dot4"></span>
                <table>
                  <tr>
                    <th>(株)大沼肉牛ファーム</th>
                    <td>
                      <p>ホルスタイン種肥育牛 4,600頭</p>
                      <p>交雑種肥育牛 2,300頭</p>
                    </td>
                  </tr>
                  <tr>
                    <th>小澤牧場(株)大沼本場</th>
                    <td>
                      <p>交雑種肥育牛 4,100頭</p>
                    </td>
                  </tr>
                  <tr>
                    <th>小澤牧場(株)芽室分場</th>
                    <td>
                      <p>ホルスタイン種素牛 1,800頭</p>
                    </td>
                  </tr>
                  <tr>
                    <th>小澤牧場(株)長沼分場</th>
                    <td>
                      <p>ホルスタイン種素牛 800頭</p>
                      <p>交雑種素牛 400頭</p>
                    </td>
                  </tr>
                  <tr>
                    <th>小澤牧場グループ合計</th>
                    <td>
                      <p>14,000頭</p>
                    </td>
                </table>
              </div>
            </div>
            <div class="outline__gallery">
              <img src="<?php echo get_template_directory_uri(); ?>/img/page/outline_contents3-1.jpg" alt="ギャラリー" class="is-active">
              <img src="<?php echo get_template_directory_uri(); ?>/img/page/outline_contents3-2.jpg" alt="">
              <img src="<?php echo get_template_directory_uri(); ?>/img/page/outline_contents3-3.jpg" alt="">
            </div>
          </div>
        </div>
        <!-- content4 -->
        <div class="outline__contents4 contents--small contents--type01">
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
            <span>MEDIA</span>
            <h3>メディア掲載</h3>
          </div>
          <div class="outline__media">
            <ul>
              <li class="scroll fadeIn">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/I4A4ZEzRokQ?si=qVG7RzSuVU7gbWQD" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </li>
              <li class="scroll delay fadeIn">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/5QSg5bq9Mh0?si=sV_HYEiQaqm5B_R9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </li>
            </ul>
            <div class="contents__btn">
								<a href="https://www.youtube.com/channel/UCZT0oskIxlb2MmdK2i5OorQ" target="_blank">
									<span class="circle">
										<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
											<line x1="4" y1="12" x2="20" y2="12"></line>
											<polyline points="14 6 20 12 14 18"></polyline>
										</svg>
									</span>
									チャンネル登録はこちら
								</a>
							</div>
          </div>
        </div>
      </div>

    </div>
  </main>
</div>

<?php get_footer(); ?>