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
            <?php
            $post_type = get_post_type();
            $post_type_obj = get_post_type_object($post_type);
            $archive_link = get_post_type_archive_link($post_type);
            if ($archive_link && $post_type_obj) : ?>
            <li><a href="<?php echo esc_url($archive_link); ?>">
                <?php echo esc_html($post_type_obj->labels->name); ?>
            </a></li>
            <?php endif; ?>
            <li aria-current="page"><?php echo get_the_title(); ?></li>
        </ol>
    </div>
</nav>

<!-- contents -->
<main class="l-main page" id="main">
    <div class="l-main__inner">
        <!-- news-details -->
        <section class="l-container single-news">
            <div class="p-single-news">
                <div class="p-single-news__ttl">
                    <p><?php echo get_the_title(); ?></p>
                </div>
                <div class="p-single-news__date">
                    <p><?php echo get_the_date('Y.m.d'); ?></p>
                </div>
                <!-- <div class="p-single-news__thumb">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('full', ['alt' => get_the_title()]); ?>
                    <?php else : ?>
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/thumbnail.jpg" alt="サムネイル画像">
                    <?php endif; ?>
                </div> -->
                <div class="p-single-news__txt">
                    <?php the_content(); ?>
                </div>
                <div class="p-section__btn fade-up">
                    <a href="<?php echo get_post_type_archive_link('news'); ?>">お知らせ一覧へ戻る<span></span></a>
                </div>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>