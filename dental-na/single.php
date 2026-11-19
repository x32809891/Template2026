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
            <p>blog</p>
            <h2>ブログ</h2>
        </div>
    </div>
</div>

<!-- breadcrumb -->
<nav class="l-container breadcrumb" aria-label="パンくずリスト">
    <div class="p-breadcrumb">
        <ol>
            <li><a href="<?php echo home_url(); ?>">ホーム</a></li>
            <li><a href="<?php echo home_url('/blog'); ?>">ブログ</a></li>
            <?php
            $categories = get_the_category();
            if (!empty($categories)) : ?>
                <li><a href="<?php echo esc_url(get_category_link($categories[0]->term_id)); ?>">
                    <?php echo esc_html($categories[0]->name); ?>
                </a></li>
            <?php endif; ?>
            <li aria-current="page"><?php echo get_the_title(); ?></li>
        </ol>
    </div>
</nav>

<!-- contents -->
<main class="l-main page" id="main">
    <div class="l-main__inner">
        <!-- blog-list -->
        <section class="l-container single-blog">
            <div class="p-single-blog">
                <div class="p-single-blog--left">
                    <div class="p-single-blog__ttl">
                        <p><?php the_title(); ?></p>
                    </div>
                    <div class="p-single-blog__date">
                        <p><?php echo get_the_date('Y.m.d'); ?></p>
                    </div>
                    <div class="p-single-blog__category">
                        <?php
                        $categories = get_the_category();
                        if (!empty($categories)) {
                            $cat_links = array_map(function($cat) {
                                return '<a href="' . esc_url(get_category_link($cat->term_id)) . '">' . esc_html($cat->name) . '</a>';
                            }, $categories);
                            echo implode(' ', $cat_links);
                        }
                        ?>
                    </div>
                    <div class="p-single-blog__thumb">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('full', ['alt' => get_the_title()]); ?>
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.jpg" alt="">
                        <?php endif; ?>
                    </div>
                    <div class="p-single-blog__txt">
                        <?php the_content(); ?>
                    </div>
                    <div class="p-section__btn fade-up">
                        <a href="<?php echo home_url('/blog'); ?>">ブログ一覧へ戻る<span></span></a>
                    </div>
                </div>
                <div class="p-single-blog--right">
                    <ul>
                        <?php if (is_active_sidebar('sidebar')) : ?>
                            <?php dynamic_sidebar('sidebar'); ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>