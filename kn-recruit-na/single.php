<?php get_header(); ?>
<?php get_template_part('gnav'); ?>

<!-- header -->
<div class="c__page-header">
    <div class="c__page-header-img--works"></div>
    <div class="c__page-header-detail">
        <div class="c__page-header-detail--passing">
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
            <?php if (is_single()) : ?>
                <?php
                $categories = get_the_category();
                if (!empty($categories)) :
                    $category = $categories[0];
                ?>
                <li class="c__page-header-box-breadcrumb-list-item"><a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a></li>
                <?php endif; ?>
                <li class="c__page-header-box-breadcrumb-list-item">
                    <?php
                    $title = get_the_title();
                    if (strlen($title) > 10) {
                        $title = mb_substr($title, 0, 10) . '...';
                    }
                    echo $title;
                    ?>
                </li>
                <?php elseif (is_category()) : ?>
                <li class="c__page-header-box-breadcrumb-list-item"><?php single_cat_title(); ?></li>
            <?php endif; ?>
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
        <p class="c__page-header-box-category-list-txt">過去の記事</p>
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
            <!-- single article -->
            <div class="c__page-single-works">
                <div class="c__page-single-works-content">
                    <h3 class="c__page-single-works-content--ttl"><?php the_title(); ?></h3>
                    <div class="c__page-single-works-content--box">
                        <p class="c__page-single-works-content--date"><?php echo get_the_date(); ?></p>
                        <div class="c__page-single-works-content--category">
                            <?php 
                                $categories = get_the_category();
                                if (!empty($categories)) :
                                    foreach ($categories as $category) :
                            ?>
                            <a class="c__page-single-works-content--category-link" href="<?php echo get_category_link($category->term_id); ?>">
                                <?php echo $category->name; ?>
                            </a>
                            <?php
                                endforeach;
                                endif;
                            ?>
                        </div>
                    </div>
                    <?php if (has_post_thumbnail()) : ?>
                        <img class="c__page-single-works-content--thumb" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    <?php endif; ?>
                    <p class="c__page-single-works-content--txt"><?php the_content(); ?></p>
                </div>
                <!-- prev / next -->
                <div class="c__page-single-works-pagination">
                    <div class="c__page-single-works-pagination--prev">
                        <?php 
                        $prev_link = get_previous_post_link('%link', '<span class="custom-prev"></span>');
                        if ($prev_link) {
                            echo $prev_link . 'prev';
                        }
                        ?>
                    </div>
                    <div class="c__page-single-works-pagination--next">
                        <?php 
                        $next_link = get_next_post_link('%link', '<span class="custom-next"></span>');
                        if ($next_link) {
                            echo 'next' . $next_link;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<?php get_footer(); ?>