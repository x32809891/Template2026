<?php get_header(); ?>
<?php get_template_part('gnav'); ?>

<!-- header -->
<div class="l-container p-header">
    <div class="p-header recruit">
        <div class="p-header__item"></div>
        <div class="p-header__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/page/header_recruit.jpg" alt="採用情報ヘッダー画像">
        </div>
        <div class="p-header__txt">
            <p>recruit</p>
            <h2>採用情報</h2>
        </div>
    </div>
</div>

<!-- breadcrumb -->
<nav class="l-container breadcrumb" aria-label="パンくずリスト">
    <div class="p-breadcrumb">
        <ol>
            <li><a href="<?php echo home_url(); ?>">ホーム</a></li>
            <li>採用情報</li>
        </ol>
    </div>
</nav>

<!-- contents -->
<main class="l-main page" id="main">
    <div class="l-main__inner">
    <!-- recruit-message -->
    <section class="l-container recruit-message">
        <div class="p-recruit-message fade-up">
            <div class="p-recruit-message__txt">
                <h3>安心して長く働ける、成長できる歯科医院です</h3>
                <p>
                    当院では、患者さま一人ひとりに寄り添った丁寧な診療を大切にしながら、<br>
                    スタッフが安心して働ける環境づくりにも力を入れています。<br>
                    未経験の方やブランクのある方でも安心してスタートできるよう、しっかりサポートいたします。<br>
                    チームワークを大切にし、働きやすさとやりがいの両立を目指しています。<br>
                    地域の皆さまに信頼される歯科医院を一緒につくっていきませんか。
                </p>
            </div>
            <span class="p-recruit-message__arrow">
                <svg viewBox="0 0 64 34" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0,0 H64 L60,6 L37,30 Q32,36 27,30 L4,6 Z" fill="currentColor"></path>
                </svg>
            </span>
        </div>
    </section>
    <!-- recruit-feature -->
    <section class="l-container recruit-feature">
        <div class="p-recruit-feature">
            <span class="c-dot-circle c-dot-circle--color2 c-dot-circle--lg" style="top: 0; left: 70%;"></span>
            <span class="c-dot-circle c-dot-circle--color1 c-dot-circle--md" style="top: 0; left: 60%;"></span>
            <div class="p-recruit-feature__contents">
                <div class="p-section__ttl fade-left">
                    <p>feature</p>
                    <h2>働きやすい4つの特徴</h2>
                    <span></span>
                </div>
                <div class="p-recruit-feature__list">
                    <ul>
                        <li class="fade-up">
                            <div class="p-recruit-feature__box">
                                <div class="p-recruit-feature__num">
                                    <p><span>01</span></p>
                                </div>
                                <div class="p-recruit-feature__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/page/recruit_img01.jpg" alt="女性が安心して働ける環境">
                                </div>
                            </div>
                            <div class="p-recruit-feature__txt">
                                <h3>女性が安心して働ける環境</h3>
                                <p>
                                    女性スタッフが多く活躍し、急なお休みやシフト調整にも柔軟に対応。結婚や出産後も安心して働き続けられる、長く働きやすい環境を整えています。
                                </p>
                            </div>
                        </li>
                        <li class="fade-up">
                            <div class="p-recruit-feature__box">
                                <div class="p-recruit-feature__num">
                                    <p><span>02</span></p>
                                </div>
                                <div class="p-recruit-feature__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/page/recruit_img02.jpg" alt="未経験でも安心の教育体制">
                                </div>
                            </div>
                            <div class="p-recruit-feature__txt">
                                <h3>未経験でも安心の教育体制</h3>
                                <p>
                                    未経験から始めた女性スタッフも多数在籍。丁寧な研修と先輩のサポートで、基礎からしっかり学べるため安心してスキルアップできます。
                                </p>
                            </div>
                        </li>
                        <li class="fade-up">
                            <div class="p-recruit-feature__box">
                                <div class="p-recruit-feature__num">
                                    <p><span>03</span></p>
                                </div>
                                <div class="p-recruit-feature__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/page/recruit_img03.jpg" alt="家庭と両立しやすい職場">
                                </div>
                            </div>
                            <div class="p-recruit-feature__txt">
                                <h3>家庭と両立しやすい職場</h3>
                                <p>
                                    残業が少なく、有給休暇も取得しやすい環境です。育児や家事と両立しながら、無理なく働き続けられる体制を整えています。
                                </p>
                            </div>
                        </li>
                        <li class="fade-up">
                            <div class="p-recruit-feature__box">
                                <div class="p-recruit-feature__num">
                                    <p><span>04</span></p>
                                </div>
                                <div class="p-recruit-feature__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/page/recruit_img04.jpg" alt="やりがいと成長を実感">
                                </div>
                            </div>
                            <div class="p-recruit-feature__txt">
                                <h3>やりがいと成長を実感</h3>
                                <p>
                                    患者さまとの関わりの中で感謝をいただけるやりがいある仕事です。女性ならではの気配りを活かしながら、自分自身の成長も実感できます。
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- recruit-job-desc -->
    <section class="l-container recruit-job-desc">
        <div class="p-recruit-job-desc">
            <span class="c-dot-circle c-dot-circle--color1 c-dot-circle--lg" style="top: 0; left: 45%;"></span>
            <span class="c-dot-circle c-dot-circle--color3 c-dot-circle--md" style="top: 0; left: 50%;"></span>
            <div class="p-recruit-job-desc__contents">
                <div class="p-section__ttl fade-left">
                    <p>job description</p>
                    <h2>募集要項</h2>
                    <span></span>
                </div>
                <div class="p-recruit-job-desc__wrap">
                    <div class="p-recruit-job-desc__img">
                        <div><img src="<?php echo get_template_directory_uri(); ?>/img/page/recruit_img05.jpg" alt="歯科衛生士イメージ画像"></div>
                        <div><img src="<?php echo get_template_directory_uri(); ?>/img/page/recruit_img06.jpg" alt=""></div>
                    </div>
                    <div class="p-recruit-job-desc__table fade-up">
                        <table>
                            <tr>
                                <th>募集職種</th>
                                <td>歯科衛生士</td>
                            </tr>
                            <tr>
                                <th>応募資格</th>
                                <td>歯科衛生士資格</td>
                            </tr>
                            <tr>
                                <th>雇用形態</th>
                                <td>正社員</td>
                            </tr>
                            <tr>
                                <th>勤務先</th>
                                <td>札幌市中央区北5条西6丁目1-23</td>
                            </tr>
                            <tr>
                                <th>勤務時間</th>
                                <td>月～金 9:00～18:00 / 土 9:00～13:00</td>
                            </tr>
                            <tr>
                                <th>仕事内容</th>
                                <td>診療補助、歯周治療の処置及び指導、業務準備、片付け、受付業務 他</td>
                            </tr>
                            <tr>
                                <th>給与</th>
                                <td>月給 250,000円～</td>
                            </tr>
                            <tr>
                                <th>待遇</th>
                                <td>雇用保険・労災保険・健康保険・厚生年金</td>
                            </tr>
                            <tr>
                                <th>休日</th>
                                <td>週休2日 ※前年度は年間休日120日</td>
                            </tr>
                            <tr>
                                <th>応募方法</th>
                                <td>直接医院までご連絡ください。</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
</main>

<?php get_footer(); ?>