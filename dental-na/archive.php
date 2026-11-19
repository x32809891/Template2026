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
            <li aria-current="page"><?php single_cat_title(); ?></li>
        </ol>
    </div>
</nav>

<!-- contents -->
<main class="l-main page" id="main">
    <div class="l-main__inner">
        <!-- blog-list -->
        <section class="l-container category-archive-blog">
            <ul class="p-archive-blog__list">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = [
                    'post_type'      => 'post',
                    'posts_per_page' => 12,
                    'post_status'    => 'publish',
                    'cat'            => get_queried_object_id(),
                    'paged'          => $paged,
                ];
                $blog_query = new WP_Query($args);
                if ($blog_query->have_posts()) :
                    while ($blog_query->have_posts()) : $blog_query->the_post();
                ?>
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
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                ?>
                    <li>投稿がありません。</li>
                <?php endif; ?>
            </ul>
            <!-- ページネーション -->
            <?php if ($blog_query->max_num_pages > 1) : ?>
                <nav class="p-pagination" aria-label="ページナビゲーション">
                    <?php
                    echo paginate_links([
                        'base'      => get_pagenum_link(1) . '%_%',
                        'format'    => 'page/%#%/',
                        'current'   => $paged,
                        'total'     => $blog_query->max_num_pages,
                        'prev_text' => '<i class="fa-solid fa-arrow-left"></i>',
                        'next_text' => '<i class="fa-solid fa-arrow-right"></i>',
                    ]);
                    ?>
                </nav>
            <?php endif; ?>
        </section>
    </div>
</main>

<?php get_footer(); ?>