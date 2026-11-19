<?php get_header(); ?>
<?php get_template_part('gnav'); ?>

<!-- main -->
<main class="l-main" id="main">
    <div class="l-main__inner">

        <!-- main-visual -->
        <section class="l-container mv">
            <div class="p-mv">
                <span class="c-dot-circle c-dot-circle--color3 c-dot-circle--lg" aria-hidden="true" style="bottom: 0; left: 20%;"></span>
                <span class="c-dot-circle c-dot-circle--color2 c-dot-circle--md c-dot-circle--reverse" aria-hidden="true" style="bottom: 0; left: 10%; --dot-delay: -4s;"></span>
                <div class="p-mv__img">
                    <div class="p-mv__img-swiper swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/top/mv_img01.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/top/mv_img02.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/top/mv_img03.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-mv__txt">
                    <p>明るい笑顔と健康な歯を、<br>ずっと先まで。</p>
                </div>
            </div>
        </section>

        <!-- news -->
        <section class="l-container news" id="news">
            <div class="p-news">
                <article class="p-news__box">
                    <div class="p-section__ttl fade-left">
                        <p>news</p>
                        <h2>お知らせ</h2>
                        <span></span>
                    </div>
                    <ul class="p-news__list">
                        <?php
                        $news_query = new WP_Query([
                            'post_type'      => 'news',
                            'posts_per_page' => 3,
                            'post_status'    => 'publish',
                            'orderby'        => 'date',
                            'order'          => 'DESC',
                        ]);
                        if ($news_query->have_posts()) :
                            while ($news_query->have_posts()) : $news_query->the_post();
                        ?>
                            <li class="p-news__item fade-up">
                                <a class="p-news__link" href="<?php the_permalink(); ?>">
                                    <div class="p-news__thumb">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('medium', ['alt' => get_the_title()]); ?>
                                        <?php else : ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/thumbnail.jpg" alt="お知らせのサムネイル画像">
                                        <?php endif; ?>
                                    </div>
                                    <div class="p-news__txt">
                                        <div class="p-news__date">
                                            <p><?php echo get_the_date('Y.m.d'); ?></p>
                                        </div>
                                        <div class="p-news__ttl">
                                            <p>
                                                <?php $title = get_the_title();
                                                echo mb_strlen($title) > 40 ? mb_substr($title, 0, 40) . '…' : $title;?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="p-news__btn"><span><i class="fa-solid fa-arrow-right"></i></span></div>
                                </a>
                            </li>
                        <?php
                            endwhile;
                            wp_reset_postdata();
                        else :
                        ?>
                            <li class="p-news__item--empty">
                                <p>お知らせはありません。</p>
                            </li>
                        <?php endif; ?>
                    </ul>
                    <div class="p-section__btn fade-up">
                        <a href="<?php echo get_post_type_archive_link('news'); ?>">お知らせ一覧<span></span></a>
                    </div>
                </article>
            </div>
        </section>

        <!-- concept -->
        <section class="l-container concept" id="concept">
            <div class="p-concept">
                <span class="c-dot-circle c-dot-circle--color2 c-dot-circle--lg" aria-hidden="true" style="top: 0; right: -10%; --dot-delay: -7s;"></span>
                <span class="c-dot-circle c-dot-circle--color1 c-dot-circle--md c-dot-circle--reverse" aria-hidden="true" style="top: 0; right: -5%; --dot-delay: -2s;"></span>
                <div class="p-concept__txt">
                    <h3 class="fade-up">安心の保険診療と矯正で叶える笑顔</h3>
                    <p class="fade-up">ひかり歯科・矯正歯科では、保険診療を中心に患者様一人ひとりに寄り添った丁寧な治療を行っています。<br>むし歯や歯周病の治療はもちろん、噛み合わせや見た目の美しさにも配慮した矯正治療まで一貫して対応。<br>無理のない治療計画で、安心して通い続けられる歯科医院を目指し、地域の皆さまの健康な歯と明るい笑顔を長く支えていきます。</p>
                </div>
                <div class="p-section__btn fade-up">
                    <a href="<?php echo home_url('/clinic'); ?>">初めての方へ<span></span></a>
                </div>
            </div>
        </section>

        <!-- feature -->
        <section class="l-container feature" id="feature">
            <div class="p-feature">
                <div class="p-section__ttl fade-left">
                    <p>feature</p>
                    <h2>当院の3つの特徴</h2>
                    <span></span>
                </div>
                <ul class="p-feature__list js-stagger-group">
                    <li class="p-feature__item fade-up">
                        <div class="p-feature__box">
                            <div class="p-feature__num">
                                <p><span>01</span></p>
                            </div>
                            <div class="p-feature__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/top/feature_img01.jpg" alt="">
                            </div>
                        </div>
                        <div class="p-feature__txt">
                            <h3>保険診療から矯正まで一貫対応</h3>
                            <p>ひかり歯科・矯正歯科では、むし歯や歯周病などの一般的な保険診療から、専門的な矯正治療まで幅広く対応しています。複数の医院を受診する必要がなく、同じ環境で一貫した治療が受けられるため、患者様の負担を軽減できるのが大きな特長です。それぞれの症状やお悩みに合わせて、機能面と見た目の両方を考慮した最適な治療プランをご提案し、長期的に健康な口腔環境を維持できるようサポートいたします。</p>
                        </div>
                    </li>
                    <li class="p-feature__item fade-up">
                        <div class="p-feature__box">
                            <div class="p-feature__num">
                                <p><span>02</span></p>
                            </div>
                            <div class="p-feature__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/top/feature_img02.jpg" alt="">
                            </div>
                        </div>
                        <div class="p-feature__txt">
                            <h3>将来を見据えた予防と継続ケア</h3>
                            <p>目の前の症状を改善するだけでなく、その先の健康を見据えた予防とメンテナンスを重視しています。定期検診やクリーニングを通じて、むし歯や歯周病の再発を防ぎ、トラブルを未然に防ぐことを大切にしています。また、患者様ご自身が日常生活の中で正しいケアを行えるよう、ブラッシング指導や生活習慣のアドバイスも丁寧に行っています。将来にわたって自分の歯で過ごせるよう、長く寄り添う歯科医療を提供します。</p>
                        </div>
                    </li>
                    <li class="p-feature__item fade-up">
                        <div class="p-feature__box">
                            <div class="p-feature__num">
                                <p><span>03</span></p>
                            </div>
                            <div class="p-feature__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/top/feature_img03.jpg" alt="">
                            </div>
                        </div>
                        <div class="p-feature__txt">
                            <h3>安心して通える丁寧な診療体制</h3>
                            <p>患者様に安心して通っていただけるよう、丁寧なカウンセリングとわかりやすい説明を心がけています。治療内容や期間、費用についてもしっかりとご理解いただいたうえで進めるため、不安なく治療に臨んでいただけます。また、院内は清潔で明るい空間づくりを徹底し、リラックスして過ごせる環境を整えています。お子様からご高齢の方まで、どなたでも気軽に通える地域に根ざした歯科医院を目指しています。</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <!-- treatments -->
        <section class="l-container treatments" id="treatments">
            <div class="p-treatments">
                <span class="c-dot-circle c-dot-circle--color1 c-dot-circle--lg" aria-hidden="true" style="top: 0; left: 10%; --dot-delay: -3s;"></span>
                <span class="c-dot-circle c-dot-circle--color3 c-dot-circle--md c-dot-circle--reverse" aria-hidden="true" style="top: 0; left: 5%; --dot-delay: -8s;"></span>
                <div class="p-treatments__bg"><span></span></div>
                <div class="p-treatments__menu">
                    <div class="p-section__ttl fede-up">
                        <p>treatments</p>
                        <h2>診療内容</h2>
                        <span></span>
                    </div>
                    <ul class="p-treatments__list js-stagger-group">
                        <li class="p-treatments__item fade-left">
                            <a href="#">
                                <div class="p-treatments__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon/treatments__icon01.png" alt="">
                                </div>
                                <div class="p-treatments__txt">
                                    <h3>むし歯治療</h3>
                                    <p>むし歯の進行に応じた治療で、痛みを抑えつつ歯をできるだけ残します。再発防止にも丁寧に対応します。</p>
                                </div>
                                <div class="p-treatments__btn"><span><i class="fa-solid fa-arrow-right"></i></span></div>
                            </a>
                        </li>
                        <li class="p-treatments__item fade-left">
                            <a href="#">
                                <div class="p-treatments__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon/treatments__icon02.png" alt="">
                                </div>
                                <div class="p-treatments__txt">
                                    <h3>歯周病治療</h3>
                                    <p>歯周病の進行に応じた治療とケアを行い、歯ぐきの健康を守ります。再発防止のための定期的なメンテナンスも大切にしています。</p>
                                </div>
                                <div class="p-treatments__btn"><span><i class="fa-solid fa-arrow-right"></i></span></div>
                            </a>
                        </li>
                        <li class="p-treatments__item fade-left">
                            <a href="#">
                                <div class="p-treatments__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon/treatments__icon03.png" alt="">
                                </div>
                                <div class="p-treatments__txt">
                                    <h3>口腔外科</h3>
                                    <p>親知らずの抜歯など、外科的な処置が必要なお口のトラブルに対応します。丁寧な治療を心がけています。</p>
                                </div>
                                <div class="p-treatments__btn"><span><i class="fa-solid fa-arrow-right"></i></span></div>
                            </a>
                        </li>
                        <li class="p-treatments__item fade-left">
                            <a href="#">
                                <div class="p-treatments__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon/treatments__icon04.png" alt="">
                                </div>
                                <div class="p-treatments__txt">
                                    <h3>小児歯科</h3>
                                    <p>お子様の成長に合わせた治療と予防ケアを行い、健やかな歯の発育をサポートします。</p>
                                </div>
                                <div class="p-treatments__btn"><span><i class="fa-solid fa-arrow-right"></i></span></div>
                            </a>
                        </li>
                        <li class="p-treatments__item fade-left">
                            <a href="#">
                                <div class="p-treatments__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon/treatments__icon05.png" alt="">
                                </div>
                                <div class="p-treatments__txt">
                                    <h3>インプラント</h3>
                                    <p>失った歯を補い、自然な見た目と噛み心地を回復する治療です。周囲の歯への負担を抑え、快適な口腔環境を保ちます。</p>
                                </div>
                                <div class="p-treatments__btn"><span><i class="fa-solid fa-arrow-right"></i></span></div>
                            </a>
                        </li>
                        <li class="p-treatments__item fade-left">
                            <a href="#">
                                <div class="p-treatments__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon/treatments__icon06.png" alt="">
                                </div>
                                <div class="p-treatments__txt">
                                    <h3>義歯・入れ歯</h3>
                                    <p>義歯・入れ歯は失った歯を補い、食事や会話を快適にする治療です。お口に合った調整で違和感を抑え、安心して使えます。</p>
                                </div>
                                <div class="p-treatments__btn"><span><i class="fa-solid fa-arrow-right"></i></span></div>
                            </a>
                        </li>
                        <li class="p-treatments__item fade-left">
                            <a href="#">
                                <div class="p-treatments__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon/treatments__icon07.png" alt="">
                                </div>
                                <div class="p-treatments__txt">
                                    <h3>ホワイトニング</h3>
                                    <p>歯の着色や黄ばみを改善し、自然で明るい白さへ導く施術です。口元の印象を高め、清潔感のある笑顔づくりをサポートします。</p>
                                </div>
                                <div class="p-treatments__btn"><span><i class="fa-solid fa-arrow-right"></i></span></div>
                            </a>
                        </li>
                        <li class="p-treatments__item fade-left">
                            <a href="#">
                                <div class="p-treatments__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon/treatments__icon08.png" alt="">
                                </div>
                                <div class="p-treatments__txt">
                                    <h3>矯正歯科</h3>
                                    <p>歯並びや噛み合わせを整え、見た目と機能の両方を改善します。将来のトラブル予防にもつながり、健康な口腔環境を保ちます。</p>
                                </div>
                                <div class="p-treatments__btn"><span><i class="fa-solid fa-arrow-right"></i></span></div>
                            </a>
                        </li>
                        <li class="p-treatments__item fade-left">
                            <a href="<?php echo home_url('/standard'); ?>">
                                <div class="p-treatments__detail">
                                    <p>施設基準</p>
                                </div>
                                <div class="p-treatments__btn"><span><i class="fa-solid fa-arrow-right"></i></span></div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- blog -->
        <section class="l-container blog" id="blog">
            <div class="p-blog">
                <article class="p-blog__box">
                    <div class="p-section__ttl fede-up">
                        <p>blog</p>
                        <h2>ブログ</h2>
                        <span></span>
                    </div>
                    <div class="p-blog__swiper swiper">
                        <ul class="swiper-wrapper p-blog__list">
                            <?php
                            $args = [
                                'post_type'      => 'post',
                                'posts_per_page' => 9,
                                'post_status'    => 'publish',
                            ];
                            $blog_query = new WP_Query($args);
                            if ($blog_query->have_posts()) :
                                while ($blog_query->have_posts()) : $blog_query->the_post();
                            ?>
                                <li class="p-blog__item swiper-slide">
                                    <a class="p-blog__link" href="<?php the_permalink(); ?>">
                                        <div class="p-blog__thumb">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <?php the_post_thumbnail('large', ['alt' => get_the_title()]); ?>
                                            <?php else : ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.jpg" alt="">
                                            <?php endif; ?>
                                        </div>
                                        <div class="p-blog__txt">
                                            <div class="p-blog__detail">
                                                <div class="p-blog__date">
                                                    <p><?php echo get_the_date('Y.m.d'); ?></p>
                                                </div>
                                                <div class="p-blog__category">
                                                    <p>
                                                        <?php
                                                        $categories = get_the_category();
                                                        if (!empty($categories)) {
                                                            $cat_names = array_map(function($cat) {
                                                                return esc_html($cat->name);
                                                            }, $categories);
                                                            echo implode('・', $cat_names);
                                                        }
                                                        ?>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="p-blog__ttl">
                                                <p><?php the_title(); ?></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            <?php
                                endwhile;
                                wp_reset_postdata();
                            else :
                            ?>
                                <li class="swiper-slide">投稿がありません。</li>
                            <?php endif; ?>
                        </ul>
                        <!-- navigation -->
                        <div class="swiper-button-prev p-blog__prev"><i class="fa-solid fa-arrow-left"></i></div>
                        <div class="swiper-button-next p-blog__next"><i class="fa-solid fa-arrow-right"></i></div>
                    </div>
                    <div class="p-section__btn fade-up">
                        <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>">ブログ一覧<span></span></a>
                    </div>
                </article>
            </div>
        </section>

        <!-- recruit -->
        <section class="l-container recruit" id="recruit">
            <div class="p-recruit">
                <span class="c-dot-circle c-dot-circle--color2 c-dot-circle--lg" aria-hidden="true" style="top: 0; right: 5%; --dot-delay: -10s;"></span>
                <span class="c-dot-circle c-dot-circle--color3 c-dot-circle--md c-dot-circle--reverse" aria-hidden="true" style="top: 0; right: 0; --dot-delay: -5s;"></span>
                <div class="p-section__ttl fade-left">
                    <p>recruit</p>
                    <h2>採用情報</h2>
                    <span></span>
                </div>
                <div class="p-recruit__box">
                    <div class="p-recruit__detail">
                        <div class="p-recruit__txt">
                            <h3 class="fade-up">笑顔を支える仲間を募集</h3>
                            <p class="fade-up">ひかり歯科・矯正歯科では、患者様一人ひとりに寄り添った丁寧な診療を大切にしています。その想いに共感し、ともに成長していける仲間を募集しています。経験の有無に関わらず、前向きに学ぶ姿勢を大切にし、安心して働ける環境づくりにも力を入れています。スタッフ同士のコミュニケーションも良好で、チームワークを重視した温かい職場です。患者様の笑顔を支えるやりがいのある仕事に、あなたも挑戦してみませんか。</p>
                        </div>
                        <div class="p-section__btn fade-up">
                            <a href="<?php echo home_url('/recruit'); ?>">採用情報<span></span></a>
                        </div>
                    </div>
                    <div class="p-recruit__slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/top/recruit_img01.jpg" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/top/recruit_img02.jpg" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/top/recruit_img03.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>

        <!-- clinic -->
        <section class="l-container clinic" id="clinic">
            <div class="p-clinic">
                <span class="c-dot-circle c-dot-circle--color3 c-dot-circle--lg" aria-hidden="true" style="top: 0; left: 5%; --dot-delay: -1s;"></span>
                <span class="c-dot-circle c-dot-circle--color1 c-dot-circle--md c-dot-circle--reverse" aria-hidden="true" style="top: 0; left: 0; --dot-delay: -6s;"></span>
                <div class="p-section__ttl fade-left">
                    <p>clinic</p>
                    <h2>当院について</h2>
                    <span></span>
                </div>
                <div class="p-clinic__box">
                    <div class="p-clinic__detail">
                        <div class="p-clinic__txt">
                            <h3 class="fade-up">一人ひとりに寄り添う安心の医療</h3>
                            <p class="fade-up">当院では、患者さま一人ひとりのお悩みに真摯に向き合い、安心して通っていただける環境を大切にしております。丁寧なカウンセリングと分かりやすい説明のもと、ご納得いただいた最適な治療をご提案します。治療だけでなく予防にも力を入れ、長く健康なお口を維持できるようサポートいたします。地域の皆さまの信頼できるかかりつけ医として、どんな小さなお悩みもお気軽にご相談ください。</p>
                        </div>
                        <div class="p-section__btn fade-up">
                            <a href="<?php echo home_url('/clinic'); ?>">当院について<span></span></a>
                        </div>
                    </div>
                    <div class="p-clinic__slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/top/clinic_img01.jpg" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/top/clinic_img02.jpg" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/top/clinic_img03.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>