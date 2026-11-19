<?php get_header(); ?>
<?php get_template_part('gnav'); ?>

<!-- header -->
<div class="l-container p-header">
    <div class="p-header news">
        <div class="p-header__item"></div>
        <div class="p-header__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/page/header_blog.jpg" alt="ブログヘッダー画像">
        </div>
        <div class="p-header__txt">
            <p>search</p>
            <h2>「<?php echo esc_html( get_search_query() ); ?>」の検索結果</h2>
        </div>
    </div>
</div>

<!-- breadcrumb -->
<nav class="l-container breadcrumb" aria-label="パンくずリスト">
    <div class="p-breadcrumb">
        <ol>
            <li><a href="<?php echo home_url(); ?>">ホーム</a></li>
            <li><a href="<?php echo home_url('/blog'); ?>">ブログ</a></li>
            <li>検索結果</li>
        </ol>
    </div>
</nav>

<!-- contents -->
<main class="l-main page" id="main">
    <div class="l-main__inner">
        <section class="l-container archive-blog">
            <?php if ( have_posts() ) : ?>
                <p class="p-archive-blog__count" style="font-size:20px; margin-bottom:2rem;">
                    <?php echo esc_html( $wp_query->found_posts ); ?>件見つかりました
                </p>
                <ul class="p-archive-blog__list fade-up">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <li class="p-archive-blog__item fade-up">
                            <a class="p-archive-blog__link" href="<?php the_permalink(); ?>">
                                <div class="p-archive-blog__thumb">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('large', ['alt' => get_the_title()]); ?>
                                    <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.jpg" alt="">
                                    <?php endif; ?>
                                </div>
                                <div class="p-archive-blog__txt">
                                    <div class="p-archive-blog__detail">
                                        <div class="p-archive-blog__date">
                                            <p><?php echo get_the_date('Y.m.d'); ?></p>
                                        </div>
                                        <div class="p-archive-blog__category">
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
                                    <div class="p-archive-blog__ttl">
                                        <p><?php the_title(); ?></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    <?php endwhile; ?>
                </ul>
                <!-- ページネーション -->
                <nav class="p-pagination" aria-label="ページナビゲーション">
                    <?php
                    echo paginate_links([
                        'prev_text' => '<i class="fa-solid fa-arrow-left"></i>',
                        'next_text' => '<i class="fa-solid fa-arrow-right"></i>',
                    ]);
                    ?>
                </nav>
            <?php else : ?>
                <p>該当する記事が見つかりませんでした。</p>
            <?php endif; ?>
        </section>
    </div>
</main>

<?php get_footer(); ?>