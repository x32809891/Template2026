<?php
?>

<!----------------------------------------------------------------------->
<!--##### パンくずリスト #####-->
<div class="breadcrumb">
    <div class="contents--small contents--type01">
        <ul>
            <li><a href="<?php echo home_url('/'); ?>">HOME</a></li>
            <?php if (is_page() && $post->post_parent) : ?>
            <?php
            $ancestors = get_post_ancestors($post->ID);
            $ancestors = array_reverse($ancestors);
            foreach ($ancestors as $ancestor) :
            ?>
            <li><a href="<?php echo get_permalink($ancestor); ?>"><?php echo get_the_title($ancestor); ?></a></li>
            <?php endforeach; ?>
            <li><?php the_title(); ?></li>
            <?php elseif (is_page()) : ?>
            <li><?php the_title(); ?></li>
            <?php elseif (is_single()) : ?>
            <?php if (get_option('page_for_posts')) : ?>
            <li><a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>"><?php echo esc_html(get_the_title(get_option('page_for_posts'))); ?></a></li>
            <?php endif; ?>
            <?php
            $categories = get_the_category();
            if (!empty($categories)) :
            ?>
            <li><a href="<?php echo get_category_link($categories[0]->term_id); ?>"><?php echo $categories[0]->name; ?></a></li>
            <?php endif; ?>
            <li><?php the_title(); ?></li>
            <?php elseif (is_home()) : ?>
            <?php if (get_option('page_for_posts')) : ?>
            <li><?php echo esc_html(get_the_title(get_option('page_for_posts'))); ?></li>
            <?php else : ?>
            <li>投稿一覧</li>
            <?php endif; ?>
            <?php elseif (is_category()) : ?>
            <?php if (get_option('page_for_posts')) : ?>
            <li><a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>"><?php echo esc_html(get_the_title(get_option('page_for_posts'))); ?></a></li>
            <?php endif; ?>
            <li><?php single_cat_title(); ?></li>
            <?php elseif (is_archive()) : ?>
            <li><?php the_archive_title(); ?></li>
            <?php elseif (is_search()) : ?>
            <li>検索結果：<?php echo get_search_query(); ?></li>
            <?php elseif (is_404()) : ?>
            <li>ページが見つかりません</li>
            <?php endif; ?>
        </ul>
    </div>
</div><!-- /.breadcrumb -->