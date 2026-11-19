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
            <li class="c__page-header-box-breadcrumb-list-item">最新情報</li>
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

<!-- contents -->
<div id="l__container">
    <main class="l__main">
        <div class="l__container-page">
            <!-- article -->
            <div class="c__page-news">
                <ul class="c__page-news-list">
                    <?php
                    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type' => 'news',
                        'posts_per_page' => 12, // 表示する投稿数(+設定:WP／設定＞表示設定＞最大投稿数)
                        'paged' => $paged,
                    );
                    $query = new WP_Query( $args );
                    if ( $query->have_posts() ) :
                        while ( $query->have_posts() ) : $query->the_post();
                    ?>
                    <li class="c__page-news-list-item" data-aos="fade-in">
                        <div class="c__page-news-list-item--thumbnail">
                            <a href="<?php echo get_the_permalink(); ?>">
                                <?php 
                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail( 'small' );
                                } else {
                                echo '<img src="' . get_template_directory_uri() . '/img/index_mv01.jpg" alt="サムネイル画像">';
                                }
                                ?>
                            </a>
                        </div>
                        <div class="c__page-news-list-item-content">
                            <div class="c__page-news-list-item-content-details">
                                <p class="c__page-news-list-item-content-details--date"><?php echo get_the_date( 'Y.m.d' ); ?></p>
                                <p class="c__page-news-list-item-content-details--category"><?php the_terms( get_the_ID(), 'news-cat', '', '' ); ?></p>
                            </div>
                            <p class="c__page-news-list-item-content--ttl"><a href="<?php echo get_the_permalink(); ?>"><?php echo mb_substr( $post->post_title, 0, 20) . '...'; ?></a></p>
                        </div>
                    </li>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                    endif;
                    ?>
                </ul>
                <!-- prev / next -->
                <div class="c__page-news-pagination">
                    <?php
                        echo paginate_links(array(
                            'total' => $query->max_num_pages,
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