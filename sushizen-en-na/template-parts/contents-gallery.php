<?php
$title          = $args['title'] ?? 'gallery';
$posts_per_page = $args['postsPerPage'] ?? 8;
$show_view_all  = $args['showViewAll'] ?? true;
$view_all_label = $args['viewAllLabel'] ?? 'view all';
$view_all_url   = $args['viewAllUrl'] ?? get_permalink( get_option( 'page_for_posts' ) );
$gallery_query = new WP_Query( [
    'post_type'      => 'post',
    'posts_per_page' => $posts_per_page,
    'orderby'        => 'date',
    'order'          => 'DESC',
] );
?>

<!-- contents-gallery -->
<div class="p-contents-gallery">
    <div class="p-ttl">
        <div class="p-ttl__img">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/img/logo/logo-img2.png' ); ?>" alt="logo">
        </div>
        <h2 class="p-ttl__h2"><?php echo esc_html( $title ); ?></h2>
    </div>
    <ul class="gallery__list">
        <?php if ( $gallery_query->have_posts() ) : ?>
            <?php while ( $gallery_query->have_posts() ) : $gallery_query->the_post(); ?>
            <li class="gallery__item">
                <a class="gallery__link" href="<?php the_permalink(); ?>">
                    <div class="gallery__thumb">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail( 'full' ); ?>
                        <?php else : ?>
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/img/front-page/thumb-image.jpg' ); ?>" alt="">
                        <?php endif; ?>
                    </div>
                    <div class="gallery__ttl"><h3><?php the_title(); ?></h3></div>
                    <div class="gallery__wrap">
                        <div class="gallery__date"><p><?php echo esc_html( get_the_date( 'Y.m.d' ) ); ?></p></div>
                        <div class="gallery__cat">
                            <?php
                            $categories = get_the_category();
                            if ( ! empty( $categories ) ) :
                                $cat_names = array();
                                foreach ( $categories as $category ) {
                                    $cat_names[] = esc_html( $category->name );
                                }
                                ?>
                                <p><?php echo implode( ' / ', $cat_names ); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </a>
            </li>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <li class="gallery__item gallery__item--none">
                <p>投稿がありません。</p>
            </li>
        <?php endif; ?>
    </ul>
    <?php if ( $show_view_all && $view_all_url ) : ?>
        <div class="all-btn">
            <a href="<?php echo esc_url( $view_all_url ); ?>" class="p-btn">
                <?php echo esc_html( $view_all_label ); ?>
                <div class="p-btn__circle"><span></span></div>
            </a>
        </div>
    <?php endif; ?>
</div>