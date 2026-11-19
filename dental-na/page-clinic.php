<?php get_header(); ?>
<?php get_template_part('gnav'); ?>

<!-- header -->
<div class="l-container p-header">
    <div class="p-header clinic">
        <div class="p-header__item"></div>
        <div class="p-header__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/page/header_clinic.jpg" alt="当院についてヘッダー画像">
        </div>
        <div class="p-header__txt">
            <p>clinic</p>
            <h2>当院について</h2>
        </div>
    </div>
</div>

<!-- breadcrumb -->
<nav class="l-container breadcrumb" aria-label="パンくずリスト">
    <div class="p-breadcrumb">
        <ol>
            <li><a href="<?php echo home_url(); ?>">ホーム</a></li>
            <li>当院について</li>
        </ol>
    </div>
</nav>

<!-- contents -->
<main class="l-main page" id="main">
    <div class="l-main__inner">
        <!-- clinic-message -->
        <section class="l-container clinic-message">
            <div class="p-clinic-message">
                <span class="c-dot-circle c-dot-circle--color3 c-dot-circle--lg" style="top: 10%; right: 30%;"></span>
                <span class="c-dot-circle c-dot-circle--color2 c-dot-circle--md" style="top: 10%; right: 30%;"></span>
                <div class="p-clinic-message__contents">
                    <div class="p-clinic-message__box">
                        <div class="p-section__ttl fade-left">
                            <p>message</p>
                            <h2>院長あいさつ</h2>
                            <span></span>
                        </div>
                        <div class="p-clinic-message__txt">
                            <h3 class="fade-up">一人ひとりに寄り添う安心の医療</h3>
                            <p class="fade-up">
                                当院では、患者さま一人ひとりのお悩みやご希望に真摯に向き合い、安心して通っていただける環境づくりを何より大切にしております。お口の健康は、日々の生活の質だけでなく全身の健康にも大きく関わる重要なものです。<br>
                                そのため当院では、丁寧なカウンセリングと分かりやすい説明を心がけ、患者さまにしっかりご理解・ご納得いただいたうえで最適な治療をご提案いたします。また、治療だけでなく予防にも力を入れ、長く健康なお口を維持できるようサポートしてまいります。地域の皆さまにとって身近で信頼できるかかりつけ医として、これからも誠実な医療を提供してまいります。どんな小さなお悩みでも、どうぞお気軽にご相談ください。
                            </p>
                            <p class="fade-up">
                                ひかり歯科・矯正歯科<br>
                                院長<span>北川 由佳</span>
                            </p>
                        </div>
                    </div>
                    <div class="p-clinic-message__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/page/clinic_img01.jpg" alt="ひかり歯科・矯正歯科 院長 北川 由佳">
                    </div>
                </div>
                <div class="p-clinic-message__detail fade-up">
                    <div class="p-clinic-message__item1">
                        <p>所属学会</p>
                        <ul>
                            <li>口腔インプラント専門医</li>
                            <li>日本歯科医学会 会員</li>
                            <li>日本総合歯科学会 会員</li>
                            <li>日本臨床歯科学会 会員</li>
                        </ul>
                    </div>
                    <div class="p-clinic-message__item2">
                        <p>資格</p>
                        <ul>
                            <li>歯科医師免許</li>
                            <li>日本歯科医療管理学会 認定医</li>
                            <li>日本歯科専門医機構 研修修了</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- clinic-profile -->
        <section class="l-container clinic-aboutus">
            <div class="p-clinic-aboutus">
                <div class="p-section__ttl fade-left">
                    <p>about us</p>
                    <h2>医院紹介</h2>
                    <span></span>
                </div>
                <div class="p-clinic-aboutus__box">
                    <div class="p-clinic-aboutus__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/page/clinic_img02.jpg" alt="ひかり歯科・矯正歯科の外観">
                    </div>
                    <div class="p-clinic-aboutus__table fade-up">
                        <table>
                            <tr>
                                <th>医院名</th>
                                <td>ひかり歯科・矯正歯科</td>
                            </tr>
                            <tr>
                                <th>院長</th>
                                <td>北川 由佳</td>
                            </tr>
                            <tr>
                                <th>所在地</th>
                                <td>札幌市中央区北5条西6丁目1-23</td>
                            </tr>
                            <tr>
                                <th>電話番号</th>
                                <td>011-206-8441</td>
                            </tr>
                            <tr>
                                <th>診療時間</th>
                                <td>月～金 9:00～19:00<br>土 9:00～13:00</td>
                            </tr>
                            <tr>
                                <th>休診日</th>
                                <td>土曜午後、日曜・祝日</td>
                            </tr>
                            <tr>
                                <th>診療科目</th>
                                <td>一般歯科、インプラント、義歯・入れ歯、ホワイトニング、矯正歯科</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!-- clinic-facility -->
        <section class="l-container clinic-facility">
            <div class="p-clinic-facility">
                <div class="p-clinic-facility__gallery">
                    <ul>
                        <li class="fade-up">
                            <a href="<?php echo get_template_directory_uri(); ?>/img/page/clinic_facilily01.jpg" data-lightbox="clinic" data-title="医院外観">
                                <div class="p-clinic-facility__ttl">
                                    <h3>医院外観</h3>
                                </div>
                                <div class="clinic-facility__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/page/clinic_facilily01.jpg" alt="医院外観">
                                </div>
                                <div class="clinic-facility__txt">
                                    <p>地域の皆さまに親しまれる、<br>やさしく温かみのある外観の歯科医院です</p>
                                </div>
                            </a>
                        </li>
                        <li class="fade-up">
                            <a href="<?php echo get_template_directory_uri(); ?>/img/page/clinic_facilily01.jpg" data-lightbox="clinic" data-title="駐車場">
                                <div class="p-clinic-facility__ttl">
                                    <h3>駐車場</h3>
                                </div>
                                <div class="clinic-facility__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/page/clinic_facilily01.jpg" alt="駐車場">
                                </div>
                                <div class="clinic-facility__txt">
                                    <p>お車でも安心してお越しいただける、<br>ゆとりのある駐車スペースをご用意しています</p>
                                </div>
                            </a>
                        </li>
                        <li class="fade-up">
                            <a href="<?php echo get_template_directory_uri(); ?>/img/page/clinic_facilily01.jpg" data-lightbox="clinic" data-title="玄関">
                                <div class="p-clinic-facility__ttl">
                                    <h3>玄関</h3>
                                </div>
                                <div class="clinic-facility__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/page/clinic_facilily01.jpg" alt="玄関">
                                </div>
                                <div class="clinic-facility__txt">
                                    <p>段差を抑えたやさしい設計で、<br>どなたでも安心してご来院いただける玄関です</p>
                                </div>
                            </a>
                        </li>
                        <li class="fade-up">
                            <a href="<?php echo get_template_directory_uri(); ?>/img/page/clinic_facilily01.jpg" data-lightbox="clinic" data-title="受付">
                                <div class="p-clinic-facility__ttl">
                                    <h3>受付</h3>
                                </div>
                                <div class="clinic-facility__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/page/clinic_facilily01.jpg" alt="受付">
                                </div>
                                <div class="clinic-facility__txt">
                                    <p>笑顔を大切に、<br>丁寧でやさしい対応を心がけている受付カウンターです</p>
                                </div>
                            </a>
                        </li>
                        <li class="fade-up">
                            <a href="<?php echo get_template_directory_uri(); ?>/img/page/clinic_facilily01.jpg" data-lightbox="clinic" data-title="待合室">
                                <div class="p-clinic-facility__ttl">
                                    <h3>待合室</h3>
                                </div>
                                <div class="clinic-facility__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/page/clinic_facilily01.jpg" alt="待合室">
                                </div>
                                <div class="clinic-facility__txt">
                                    <p>落ち着いた雰囲気の中で、<br>ゆったりとお過ごしいただける快適な空間です</p>
                                </div>
                            </a>
                        </li>
                        <li class="fade-up">
                            <a href="<?php echo get_template_directory_uri(); ?>/img/page/clinic_facilily01.jpg" data-lightbox="clinic" data-title="診療室">
                                <div class="p-clinic-facility__ttl">
                                    <h3>診療室</h3>
                                </div>
                                <div class="clinic-facility__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/page/clinic_facilily01.jpg" alt="診療室">
                                </div>
                                <div class="clinic-facility__txt">
                                    <p>清潔感を大切にし、<br>安心して治療を受けていただける診療環境を整えています</p>
                                </div>
                            </a>
                        </li>
                        <li class="fade-up">
                            <a href="<?php echo get_template_directory_uri(); ?>/img/page/clinic_facilily01.jpg" data-lightbox="clinic" data-title="診療台">
                                <div class="p-clinic-facility__ttl">
                                    <h3>診療台</h3>
                                </div>
                                <div class="clinic-facility__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/page/clinic_facilily01.jpg" alt="診療台">
                                </div>
                                <div class="clinic-facility__txt">
                                    <p>体への負担に配慮し、<br>リラックスして治療を受けられる診療チェアです</p>
                                </div>
                            </a>
                        </li>
                        <li class="fade-up">
                            <a href="<?php echo get_template_directory_uri(); ?>/img/page/clinic_facilily01.jpg" data-lightbox="clinic" data-title="個室">
                                <div class="p-clinic-facility__ttl">
                                    <h3>個室</h3>
                                </div>
                                <div class="clinic-facility__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/page/clinic_facilily01.jpg" alt="個室">
                                </div>
                                <div class="clinic-facility__txt">
                                    <p>プライバシーに配慮し、<br>周囲を気にせず相談できる個室診療室をご用意しています</p>
                                </div>
                            </a>
                        </li>
                        <li class="fade-up">
                            <a href="<?php echo get_template_directory_uri(); ?>/img/page/clinic_facilily01.jpg" data-lightbox="clinic" data-title="歯科用CT">
                                <div class="p-clinic-facility__ttl">
                                    <h3>歯科用CT</h3>
                                </div>
                                <div class="clinic-facility__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/page/clinic_facilily01.jpg" alt="歯科用CT">
                                </div>
                                <div class="clinic-facility__txt">
                                    <p>精密な検査と丁寧な診断を行うための、<br>先進的な歯科用CT設備を導入しています</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- clinic-faq -->
        <section class="l-container clinic-faq">
            <div class="p-clinic-faq">
                <span class="c-dot-circle c-dot-circle--color2 c-dot-circle--md" style="top: 10%; right: 70%;"></span>
                <span class="c-dot-circle c-dot-circle--color1 c-dot-circle--lg" style="top: 10%; right: 70%;"></span>
                <div class="p-section__ttl fade-left">
                    <p>faq</p>
                    <h2>よくあるご質問</h2>
                    <span></span>
                </div>
                <ul class="p-clinic-faq__list">
                    <li class="p-clinic-faq__item fade-up">
                        <button class="p-clinic-faq__question" type="button" aria-expanded="false">
                            <span class="p-clinic-faq__q-mark">Q</span>
                            <span class="p-clinic-faq__q-text">予約なしでも受診できますか？</span>
                            <span class="p-clinic-faq__icon" aria-hidden="true"></span>
                        </button>
                        <div class="p-clinic-faq__answer">
                            <div class="p-clinic-faq__answer-inner">
                                <span class="p-clinic-faq__a-mark">A</span>
                                <p class="p-clinic-faq__a-text">ご予約優先で診療を行っておりますが、急な痛みや腫れなどの場合は、予約なしでもご相談いただけます。お待ちいただく場合がありますので、まずはお電話でお問い合わせください。診療受付は、午前は12:30まで、午後は18:30までです。</p>
                            </div>
                        </div>
                    </li>
                    <li class="p-clinic-faq__item fade-up">
                        <button class="p-clinic-faq__question" type="button" aria-expanded="false">
                            <span class="p-clinic-faq__q-mark">Q</span>
                            <span class="p-clinic-faq__q-text">初めて受診するときは、何を持っていけばよいですか？</span>
                            <span class="p-clinic-faq__icon" aria-hidden="true"></span>
                        </button>
                        <div class="p-clinic-faq__answer">
                            <div class="p-clinic-faq__answer-inner">
                                <span class="p-clinic-faq__a-mark">A</span>
                                <p class="p-clinic-faq__a-text">マイナ保険証（または資格確認書）をお持ちください。お薬を服用中の方は、お薬手帳もご持参いただくと安心です。ほかの歯科医院でレントゲンを撮影している場合や、紹介状をお持ちの場合は、あわせてお持ちください。</p>
                            </div>
                        </div>
                    </li>
                    <li class="p-clinic-faq__item fade-up">
                        <button class="p-clinic-faq__question" type="button" aria-expanded="false">
                            <span class="p-clinic-faq__q-mark">Q</span>
                            <span class="p-clinic-faq__q-text">歯科治療が苦手で、痛みが心配です。</span>
                            <span class="p-clinic-faq__icon" aria-hidden="true"></span>
                        </button>
                        <div class="p-clinic-faq__answer">
                            <div class="p-clinic-faq__answer-inner">
                                <span class="p-clinic-faq__a-mark">A</span>
                                <p class="p-clinic-faq__a-text">できるだけ痛みの少ない治療を心がけております。治療の前に、内容や進め方を丁寧にご説明し、必要に応じて麻酔を使用します。治療中に痛みや不安を感じたときは、手を挙げるなどでお知らせください。いつでも休憩できますので、お気軽にご相談ください。</p>
                            </div>
                        </div>
                    </li>
                    <li class="p-clinic-faq__item fade-up">
                        <button class="p-clinic-faq__question" type="button" aria-expanded="false">
                            <span class="p-clinic-faq__q-mark">Q</span>
                            <span class="p-clinic-faq__q-text">小さな子どもも診てもらえますか？</span>
                            <span class="p-clinic-faq__icon" aria-hidden="true"></span>
                        </button>
                        <div class="p-clinic-faq__answer">
                            <div class="p-clinic-faq__answer-inner">
                                <span class="p-clinic-faq__a-mark">A</span>
                                <p class="p-clinic-faq__a-text">はい、小児歯科を行っております。むし歯の治療はもちろん、歯並びや仕上げ磨きのご相談、定期的なチェックにも対応しております。お子さまが歯科医院に慣れるよう、無理のない範囲で、少しずつ進めてまいります。</p>
                            </div>
                        </div>
                    </li>
                    <li class="p-clinic-faq__item fade-up">
                        <button class="p-clinic-faq__question" type="button" aria-expanded="false">
                            <span class="p-clinic-faq__q-mark">Q</span>
                            <span class="p-clinic-faq__q-text">矯正やインプラントは、相談だけでもできますか？</span>
                            <span class="p-clinic-faq__icon" aria-hidden="true"></span>
                        </button>
                        <div class="p-clinic-faq__answer">
                            <div class="p-clinic-faq__answer-inner">
                                <span class="p-clinic-faq__a-mark">A</span>
                                <p class="p-clinic-faq__a-text">はい、相談のみでもお受けしております。お口の状態を拝見したうえで、治療の方法、期間、費用の目安などをご説明いたします。矯正やインプラントなど、保険が適用されない治療もありますので、納得されてから治療をお決めください。ご予約は、お電話、WEB、LINEから承っております。</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>