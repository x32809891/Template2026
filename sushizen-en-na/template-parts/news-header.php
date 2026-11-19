<?php
$title = get_template_directory_uri() . '/img/header/header_news.jpg';

$breadcrumb_items = [
	[ 'label' => 'top', 'url' => home_url( '/' ) ],
	[
		'label' => 'news',
		'url'   => is_post_type_archive( 'news' ) ? null : get_post_type_archive_link( 'news' ),
	],
];

if ( is_tax( 'news-category' ) ) {
	$current_term = get_queried_object();
	if ( $current_term instanceof WP_Term ) {
		$breadcrumb_items[] = [ 'label' => $current_term->name ];
	}
} elseif ( is_singular( 'news' ) ) {
	$news_terms   = get_the_terms( get_the_ID(), 'news-category' );
	$primary_term = ( ! is_wp_error( $news_terms ) && ! empty( $news_terms ) ) ? $news_terms[0] : null;
	if ( $primary_term ) {
		$breadcrumb_items[] = [ 'label' => $primary_term->name, 'url' => get_term_link( $primary_term ) ];
	}
	$breadcrumb_items[] = [ 'label' => get_the_title() ];
}
?>

<!-- page-header -->
<div class="l-page-header">
	<div class="page-header__container">
		<div class="page-header__img">
			<div class="page-header__img--pc">
				<img src="<?php echo esc_url( $title ); ?>" alt="">
			</div>
			<!-- <div class="page-header__img--sp">
				<img src="<?php echo esc_url( $title ); ?>" alt="">
			</div> -->
		</div>
		<div class="page-header__ttl"><h2>news</h2></div>
	</div>
</div>

<?php
?>
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