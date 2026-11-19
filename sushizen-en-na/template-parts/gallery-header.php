<?php

$header_image = get_template_directory_uri() . '/img/header/header_gallery.jpg';

$posts_page_id  = get_option( 'page_for_posts' );
$gallery_url    = $posts_page_id ? get_permalink( $posts_page_id ) : home_url( '/' );

$breadcrumb_items = [
	[ 'label' => 'top', 'url' => home_url( '/' ) ],
	[
		'label' => 'gallery',
		'url'   => is_home() ? null : $gallery_url,
	],
];

if ( is_category() ) {
	$current_category = get_queried_object();
	if ( $current_category instanceof WP_Term ) {
		$breadcrumb_items[] = [ 'label' => $current_category->name ];
	}
} elseif ( is_singular( 'post' ) ) {
	$categories        = get_the_category();
	$primary_category  = ! empty( $categories ) ? $categories[0] : null;
	if ( $primary_category ) {
		$breadcrumb_items[] = [ 'label' => $primary_category->name, 'url' => get_category_link( $primary_category->term_id ) ];
	}
	$breadcrumb_items[] = [ 'label' => get_the_title() ];
}
?>
<!-- page-header -->
<div class="l-page-header">
	<div class="page-header__container">
		<div class="page-header__img">
			<div class="page-header__img--pc">
				<img src="<?php echo esc_url( $header_image ); ?>" alt="">
			</div>
		</div>
		<div class="page-header__ttl"><h2>gallery</h2></div>
	</div>
</div>

<div class="l-page-body js-cover-up" data-trigger=".l-page-header">

	<!-- breadcrumb -->
	<div class="l-breadcrumb">
		<div class="breadcrumb__container">
			<ul>
				<?php
				$breadcrumb_title_limit = 40;
				foreach ( $breadcrumb_items as $item ) :
					$label = mb_strimwidth( $item['label'], 0, $breadcrumb_title_limit, '…' );
					?>
					<li>
						<?php if ( ! empty( $item['url'] ) ) : ?>
							<a href="<?php echo esc_url( $item['url'] ); ?>"><?php echo esc_html( $label ); ?></a>
						<?php else : ?>
							<p><?php echo esc_html( $label ); ?></p>
						<?php endif; ?>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>