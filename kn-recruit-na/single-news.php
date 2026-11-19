<?php get_header(); ?>
<?php get_template_part('gnav'); ?>

<!-- header -->
<div class="c__page-header">
    <div class="c__page-header-img--news"></div>
    <div class="c__page-header-detail">
        <div class="c__page-header-detail--passing">
            <h2 class="c__page-header-detail-ttl">
                <span class="c__page-header-detail-ttl--en">NEWS</span>
                <span class="c__page-header-detail-ttl--jp">最新情報</span>
            </h2>
        </div>
    </div>
    <div class="c__page-header-scroll-btn" id="scroll-btn"><span>SCROLL</span></div>
</div>

<!-- breadcrumb&category -->
<div class="c__page-header-box">
    <!-- breadcrumb -->
    <div class="c__page-header-box-breadcrumb">
        <ol class="c__page-header-box-breadcrumb-list">
            <li class="c__page-header-box-breadcrumb-list-item"><a href="<?php echo home_url(); ?>">HOME</a></li>
            <li class="c__page-header-box-breadcrumb-list-item"><a href="<?php echo get_post_type_archive_link('news'); ?>">最新情報</a></li>
            <?php if (is_singular('news')): ?>
                <?php
                $terms = get_the_terms(get_the_ID(), 'news-cat');
                if ($terms && !is_wp_error($terms)) :
                    $term = array_shift($terms);
                ?>
                <li class="c__page-header-box-breadcrumb-list-item"><a href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?></a></li>
                <?php endif; ?>
                <li class="c__page-header-box-breadcrumb-list-item">
                <?php
                $title = get_the_title();
                if (mb_strlen($title) > 25) {
                    $title = mb_substr($title, 0, 25) . '...';
                }
                echo $title;
                ?>
                </li>
                <?php elseif (is_tax('news-cat')): ?>
                <li class="c__page-header-box-breadcrumb-list-item"><?php single_term_title(); ?></li>
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
                $args = array(
                    'taxonomy' => 'news-cat',
                    'hide_empty' => true,
                );
                $categories = get_categories($args);
                foreach ($categories as $category) {
                    echo '<option class="level-0" value="' . get_category_link($category->term_id) . '">' . $category->name . '</option>';
                }
                ?>
            </select>
        </form>
    </div>
</div>

<div id="l__container">
    <main class="l__main">
        <div class="l__container-page">
            <!-- single-news article -->
            <div class="c__page-single-news">
                <div class="c__page-single-news-content">
                    <h3 class="c__page-single-news-content--ttl"><?php the_title(); ?></h3>
                    <div class="c__page-single-news-content--box">
                        <p class="c__page-single-news-content--date"><?php echo get_the_date(); ?></p>
                        <div class="c__page-single-news-content--category">
                            <?php 
                                $categories = get_the_terms(get_the_ID(), 'news-cat');
                                if (!empty($categories) && !is_wp_error($categories)) :
                                    foreach ($categories as $category) :
                            ?>
                            <a class="c__page-single-news-content--category-link" href="<?php echo get_term_link($category->term_id, 'news-cat'); ?>">
                                <?php echo $category->name; ?>
                            </a>
                            <?php
                                    endforeach;
                                endif;
                            ?>
                        </div>
                    </div>
                    <?php if (has_post_thumbnail()) : ?>
                        <img class="c__page-single-news-content--thumb" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    <?php endif; ?>
                    <p class="c__page-single-news-content--txt"><?php the_content(); ?></p>
                </div>
                <!-- prev / next -->
                <div class="c__page-single-news-pagination">
                    <div class="c__page-single-news-pagination--prev">
                        <?php 
                        $prev_link = get_previous_post_link('%link', '<span class="custom-prev"></span>');
                        if ($prev_link) {
                            echo $prev_link . 'prev';
                        }
                        ?>
                    </div>
                    <div class="c__page-single-news-pagination--next">
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