<?php
$title          = $args['title'] ?? 'news';
$posts_per_page = $args['postsPerPage'] ?? 3;
$show_view_all  = $args['showViewAll'] ?? true;
$view_all_label = $args['viewAllLabel'] ?? 'view all';
$view_all_url   = get_post_type_archive_link( 'news' );
$news_terms = get_terms( [
    'taxonomy'   => 'news-category',
    'hide_empty' => true,
] );
$news_query = new WP_Query( [
    'post_type'      => 'news',
    'posts_per_page' => $posts_per_page,
    'orderby'        => 'date',
    'order'          => 'DESC',
] );
?>

<!-- contents-news -->
<div class="p-contents-news js-news">
    <div class="p-ttl">
        <div class="p-ttl__img">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/img/logo/logo-img2.png' ); ?>" alt="logo">
        </div>
        <h2 class="p-ttl__h2"><?php echo esc_html( $title ); ?></h2>
    </div>
    <div class="news__wrap">
        <div class="news__category --front-page">
            <p>category</p>
            <ul>
                <li>
                    <a href="<?php echo esc_url( $view_all_url ); ?>"
                        class="js-news-filter is-active"
                        data-filter="all">
                        All
                    </a>
                </li>
                <?php if ( ! is_wp_error( $news_terms ) && ! empty( $news_terms ) ) : ?>
                    <?php foreach ( $news_terms as $term ) : ?>
                    <li>
                        <a href="<?php echo esc_url( get_term_link( $term ) ); ?>"
                            class="js-news-filter"
                            data-filter="<?php echo esc_attr( $term->slug ); ?>">
                            <?php echo esc_html( $term->name ); ?>
                        </a>
                    </li>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
        </div>
        <ul class="news__list js-news-list">
            <?php if ( $news_query->have_posts() ) : ?>
                <?php while ( $news_query->have_posts() ) : $news_query->the_post(); ?>
                <?php
                $item_terms = get_the_terms( get_the_ID(), 'news-category' );
                $item_slugs = ( ! is_wp_error( $item_terms ) && ! empty( $item_terms ) )
                    ? wp_list_pluck( $item_terms, 'slug' )
                    : [];
                ?>
                <li class="news__item js-news-item" data-categories="<?php echo esc_attr( implode( ' ', $item_slugs ) ); ?>">
                    <a href="<?php the_permalink(); ?>">
                        <div class="news__date">
                            <p data-anim="text-reveal"><?php echo esc_html( get_the_date( 'Y.m.d' ) ); ?></p>
                        </div>
                        <div class="news__ttl">
                            <h3 data-anim="text-reveal"><?php the_title(); ?></h3>
                        </div>
                        <div class="p-btn__circle"><span></span></div>
                    </a>
                </li>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <li class="news__item news__item--none">
                    <p>投稿がありません。</p>
                </li>
            <?php endif; ?>
            <li class="news__item news__item--none js-news-empty" hidden>
                <p>該当する投稿がありません。</p>
            </li>
        </ul>
    </div>
    <?php if ( $show_view_all && $view_all_url ) : ?>
        <div class="all-btn">
            <a href="<?php echo esc_url( $view_all_url ); ?>" class="p-btn">
                <?php echo esc_html( $view_all_label ); ?>
                <div class="p-btn__circle"><span></span></div>
            </a>
        </div>
    <?php endif; ?>
</div>