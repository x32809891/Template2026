<?php get_header(); ?>
<?php get_template_part('gnav'); ?>

<!-- header -->
<div class="l-container p-header">
    <div class="p-header news">
        <div class="p-header__item"></div>
        <div class="p-header__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/page/header_news.jpg" alt="お知らせヘッダー画像">
        </div>
        <div class="p-header__txt">
            <p>news</p>
            <h2>お知らせ</h2>
        </div>
    </div>
</div>

<!-- breadcrumb -->
<nav class="l-container breadcrumb" aria-label="パンくずリスト">
    <div class="p-breadcrumb">
        <ol>
            <li><a href="<?php echo home_url(); ?>">ホーム</a></li>
            <?php if (!is_front_page()) : ?>
                <li aria-current="page">
                    <?php
                    if (is_singular()) {
                        echo get_the_title();
                    } elseif (is_post_type_archive()) {
                        echo post_type_archive_title('', false);
                    } elseif (is_tax() || is_category() || is_tag()) {
                        echo single_term_title('', false);
                    } elseif (is_search()) {
                        echo '「' . get_search_query() . '」の検索結果';
                    } elseif (is_404()) {
                        echo 'ページが見つかりません';
                    } else {
                        echo get_the_title();
                    }
                    ?>
                </li>
            <?php endif; ?>
        </ol>
    </div>
</nav>

<!-- contents -->
<main class="l-main page" id="main">
    <div class="l-main__inner">
        <!-- news-list -->
        <section class="l-container archive-news">
            <?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            $news_query = new WP_Query([
                'post_type'      => 'news',
                'posts_per_page' => 10,
                'post_status'    => 'publish',
                'orderby'        => 'date',
                'order'          => 'DESC',
                'paged'          => $paged,
            ]);
            ?>
            <?php if ($news_query->have_posts()) : ?>
                <ul class="p-news__list">
                    <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
                        <li class="p-news__item fade-up">
                            <a class="p-news__link" href="<?php the_permalink(); ?>">
                                <div class="p-news__thumb">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('medium', ['alt' => get_the_title()]); ?>
                                    <?php else : ?>
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/thumbnail.jpg" alt="サムネイル画像">
                                    <?php endif; ?>
                                </div>
                                <div class="p-news__txt">
                                    <div class="p-news__date">
                                        <p><?php echo get_the_date('Y.m.d'); ?></p>
                                    </div>
                                    <div class="p-news__ttl">
                                        <p>
                                            <?php
                                            $title = get_the_title();
                                            echo mb_strlen($title) > 40
                                                ? esc_html(mb_substr($title, 0, 40)) . '…'
                                                : esc_html($title);
                                            ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="p-news__btn">
                                    <span><i class="fa-solid fa-arrow-right"></i></span>
                                </div>
                            </a>
                        </li>
                    <?php endwhile; ?>
                </ul>
                <!-- pagination -->
                <?php if ($news_query->max_num_pages > 1) : ?>
                    <nav class="p-pagination" aria-label="ページナビゲーション">
                        <?php
                        echo paginate_links([
                            'base'      => get_pagenum_link(1) . '%_%',
                            'format'    => 'page/%#%/',
                            'current'   => $paged,
                            'total'     => $news_query->max_num_pages,
                            'prev_text' => '<i class="fa-solid fa-arrow-left"></i>',
                            'next_text' => '<i class="fa-solid fa-arrow-right"></i>',
                            'mid_size'  => 2,
                            'end_size'  => 1,
                        ]);
                        ?>
                    </nav>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p class="p-news__empty">お知らせはありません。</p>
            <?php endif; ?>
        </section>
    </div>
</main>

<?php get_footer(); ?>