<?php get_header(); ?>
<?php get_template_part('gnav'); ?>

<!-- header -->
<div class="c__page-header">
    <div class="c__page-header-img--works"></div>
    <div class="c__page-header-detail">
        <div class="c__page-zheader-detail--passing">
            <h2 class="c__page-header-detail-ttl">
                <span class="c__page-header-detail-ttl--en">WORKS</span>
                <span class="c__page-header-detail-ttl--jp">施工事例</span>
            </h2>
        </div>
    </div>
    <div class="c__page-header-scroll-btn" id="scroll-btn"><span>SCROLL</span></div>
</div>

<!-- breadcrumb&category&archive -->
<div class="c__page-header-box">
    <!-- breadcrumb -->
    <div class="c__page-header-box-breadcrumb">
        <ol class="c__page-header-box-breadcrumb-list">
            <li class="c__page-header-box-breadcrumb-list-item"><a href="<?php echo home_url(); ?>">HOME</a></li>
            <li class="c__page-header-box-breadcrumb-list-item"><a href="<?php echo get_post_type_archive_link('post'); ?>">施工事例</a></li>
            <li class="c__page-header-box-breadcrumb-list-item"><?php single_cat_title(); ?></li>
        </ol>
    </div>
    <!-- category -->
    <div class="c__page-header-box-category-list">
        <p class="c__page-header-box-category-list-txt">カテゴリー</p>
        <form action="#">
            <select name="related_site" id="related_site" class="postform" onchange="blur(); location.href = options[this.selectedIndex].value;">
                <option value="-1">選択してください</option>
                <?php
                $categories = get_categories();
                foreach ($categories as $category) {
                    echo '<option class="level-0" value="' . get_category_link($category->term_id) . '">' . $category->name . '</option>';
                }
                ?>
            </select>
        </form>
    </div>
    <!-- monthly-archive -->
    <div class="c__page-header-box-archive-list">
        <p class="c__page-header-box-archive-list-txt">過去の記事</p>
        <form action="#">
            <select name="related_site" id="related_site" class="postform" onchange="blur(); location.href = options[this.selectedIndex].value;">
                <option value="-1">選択してください</option>
                <?php
                global $wpdb;
                $months = $wpdb->get_results("
                    SELECT DISTINCT YEAR(post_date) AS year, MONTH(post_date) AS month
                    FROM $wpdb->posts
                    WHERE post_type = 'post' AND post_status = 'publish'
                    ORDER BY post_date DESC
                ");
                foreach ($months as $month) {
                    $month_link = get_month_link($month->year, $month->month);
                    $month_name = date_i18n("Y年n月", mktime(0, 0, 0, $month->month, 1, $month->year));
                    echo '<option class="level-0" value="' . $month_link . '">' . $month_name . '</option>';
                }
                ?>
            </select>
        </form>
    </div>
</div>

<!-- contents -->
<div id="l__container">
    <main class="l__main">
        <div class="l__container-page">
            <!-- article -->
            <div class="c__page-works">
                <ul class="c__page-works-list">
                    <?php
                    $category = get_queried_object();
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 12, // 表示する投稿数(WP／設定＞表示設定＞最大投稿数)
                        'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
                        'cat' => $category->term_id
                    );
                    $the_query = new WP_Query($args);
                    if ($the_query->have_posts()) :
                        while ($the_query->have_posts()) : $the_query->the_post();
                    ?>
                        <li class="c__page-works-list-item" data-aos="fade-in">
                            <a href="<?php the_permalink(); ?>" class="c__page-works-list-item--link">
                                <div class="c__page-works-list-item--thumb-container">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <img class="c__page-works-list-item--thumb" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                        <div class="c__page-works-list-item--overlay"></div>
                                    <?php endif; ?>
                                </div>
                                <h3 class="c__page-works-list-item--ttl">
                                    <?php 
                                    echo mb_strimwidth(get_the_title(), 0, 40, '…'); 
                                    ?>
                                </h3>
                            </a>
                            <div class="c__page-works-list-item--categories">
                                <?php 
                                $categories = get_the_category();
                                if (!empty($categories)) :
                                    foreach ($categories as $category) :
                                ?>
                                    <a class="c__page-works-list-item--category" href="<?php echo get_category_link($category->term_id); ?>">
                                        <?php echo $category->name; ?>
                                    </a>
                                <?php
                                    endforeach;
                                endif;
                                ?>
                            </div>
                        </li>
                    <?php
                        endwhile;
                    else :
                    ?>
                        <p>投稿が見つかりませんでした。</p>
                    <?php
                    endif;
                    wp_reset_postdata();
                    ?>
                </ul>
                <!-- prev / next -->
                <div class="c__page-works-pagination">
                    <?php
                        echo paginate_links(array(
                            'total' => $the_query->max_num_pages,
                            'prev_text' => '<span class="custom-prev"></span>',
                            'next_text' => '<span class="custom-next"></span>',
                        ));
                    ?>
                </div>
            </div>
        </div>
    </main>
</div>

<?php get_footer(); ?>