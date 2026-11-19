<?php
if ( ! isset( $args ) || ! is_array( $args ) ) {
	return;
}
$concept = wp_parse_args(
	$args['concept'] ?? [],
	[
		'img_left'  => '',
		'img_right' => '',
		'heading'   => '',
		'text'      => '',
		'slides'    => [],
	]
);
$menu = wp_parse_args(
	$args['menu'] ?? [],
	[
		'notes'       => '',
		'courses'     => [],
		'img'         => '',
		'reserve_url' => '#',
		'detail_url'  => '#',
	]
);
$details = wp_parse_args(
	$args['details'] ?? [],
	[
		'title'     => '',
		'info'      => [],
		'hours'     => [],
		'closed'    => '',
		'seating'   => '',
		'budget'    => '',
		'parking'   => '',
		'map_embed' => '',
	]
);
$branch = wp_parse_args(
	$args['branch'] ?? [],
	[
		'query_args' => [],
	]
);
?>

<main class="l-main restaurant-detail">
	<!-- contents1 / concept -->
	<section class="restaurants__concept">
		<div class="restaurants__details">
			<?php if ( $concept['img_left'] ) : ?>
			<div class="restaurants__img--left" data-anim="img-reveal">
				<img src="<?php echo esc_url( $concept['img_left'] ); ?>" alt="restaurant img">
			</div>
			<?php endif; ?>
			<div class="restaurants__txt">
				<?php if ( $concept['heading'] ) : ?>
					<h3 data-anim="text-reveal"><?php echo esc_html( $concept['heading'] ); ?></h3>
				<?php endif; ?>
				<?php if ( $concept['text'] ) : ?>
					<p data-anim="text-reveal"><?php echo wp_kses_post( $concept['text'] ); ?></p>
				<?php endif; ?>
			</div>
			<?php if ( $concept['img_right'] ) : ?>
			<div class="restaurants__img--right" data-anim="img-reveal">
				<img src="<?php echo esc_url( $concept['img_right'] ); ?>" alt="restaurant img">
			</div>
			<?php endif; ?>
		</div>
		<?php if ( ! empty( $concept['slides'] ) ) : ?>
		<?php $rs_total = count( $concept['slides'] ); ?>
		<div class="restaurants__slideshow" aria-label="slide show" data-anim="img-reveal">
			<div class="rs-track" id="rsTrack">
				<?php foreach ( $concept['slides'] as $i => $slide ) : ?>
					<div class="rs-slide<?php echo $i === 0 ? ' active' : ''; ?>"
						role="tabpanel" aria-label="slide show <?php echo $i + 1; ?>">
						<img
							class="rs-img"
							src="<?php echo esc_url( $slide ); ?>"
							alt="slide img"
							<?php echo $i === 0 ? 'loading="eager"' : 'loading="lazy"'; ?>
						>
						<div class="rs-overlay"></div>
					</div>
				<?php endforeach; ?>
			</div>
			<button class="rs-arrow rs-arrow--prev" id="rsPrev" aria-label="前のスライド">
				<svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
					<polyline points="10 3 5 8 10 13"/>
				</svg>
			</button>
			<button class="rs-arrow rs-arrow--next" id="rsNext" aria-label="次のスライド">
				<svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
					<polyline points="6 3 11 8 6 13"/>
				</svg>
			</button>
			<div class="rs-dots" id="rsDots" role="tablist" aria-label="スライド選択">
				<?php foreach ( $concept['slides'] as $i => $slide ) : ?>
					<button
						class="rs-dot<?php echo $i === 0 ? ' active' : ''; ?>"
						role="tab"
						aria-label="スライド <?php echo $i + 1; ?> へ移動"
						aria-selected="<?php echo $i === 0 ? 'true' : 'false'; ?>"
						data-index="<?php echo $i; ?>"
					></button>
				<?php endforeach; ?>
			</div>
			<div class="rs-counter" id="rsCounter" aria-live="polite">
				1 / <?php echo $rs_total; ?>
			</div>
			<div class="rs-progress">
				<div class="rs-progress__fill" id="rsProgressFill"></div>
			</div>
		</div>
		<?php endif; ?>
	</section>
	<!-- contents2 / menu -->
	<section class="restaurants__menu">
		<div class="p-ttl">
			<div class="p-ttl__img">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/img/logo/logo-img2.png' ); ?>" alt="logo">
			</div>
			<h2 class="p-ttl__h2">menu</h2>
		</div>
		<div class="restaurants__menu-list">
			<?php if ( $menu['notes'] ) : ?>
			<div class="restaurants__notes">
				<span data-anim="text-reveal"><?php echo wp_kses_post( $menu['notes'] ); ?></span>
			</div>
			<?php endif; ?>

			<?php if ( ! empty( $menu['menus'] ) ) : ?>
				<?php foreach ( $menu['menus'] as $group ) : ?>
					<?php if ( empty( $group['courses'] ) ) continue; ?>
					<div class="restaurants__table">
						<?php if ( ! empty( $group['label'] ) ) : ?>
						<p class="restaurants__table-label" data-anim="text-reveal"><?php echo esc_html( $group['label'] ); ?></p>
						<?php endif; ?>
						<table>
							<?php foreach ( $group['courses'] as $course ) : ?>
								<tr<?php echo ! empty( $course['spacer_top'] ) ? ' class="restaurants__row--spacer"' : ''; ?>>
									<th data-anim="text-reveal"><?php echo esc_html( $course['name'] ?? '' ); ?></th>
									<th data-anim="text-reveal"><?php echo esc_html( $course['desc'] ?? '' ); ?></th>
									<td data-anim="text-reveal"><?php echo esc_html( $course['price'] ?? '' ); ?></td>
								</tr>
							<?php endforeach; ?>
						</table>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>

			<?php if ( $menu['img'] ) : ?>
			<div class="restaurants__img" data-anim="img-reveal">
				<img src="<?php echo esc_url( $menu['img'] ); ?>" alt="edomae sushi">
			</div>
			<?php endif; ?>
		</div>
		<div class="restaurants__btn">
			<div><a href="<?php echo esc_url( $menu['reserve_url'] ); ?>" target="_blank" rel="noopener noreferrer">reserve</a></div>
			<div><a href="<?php echo esc_url( $menu['detail_url'] ); ?>">view details</a></div>
		</div>
	</section>
	<!-- contents3 / summary -->
	<section class="restaurants__summary" id="summary">
		<div class="p-ttl">
			<div class="p-ttl__img">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/img/logo/logo-img2.png' ); ?>" alt="logo">
			</div>
			<h2><?php echo esc_html( $details['title'] ); ?></h2>
		</div>
		<div class="restaurants__summary-list">
			<div class="restaurants__box">
				<?php if ( ! empty( $details['info'] ) ) : ?>
				<div class="restaurants__info">
					<ul>
						<?php foreach ( $details['info'] as $info ) : ?>
						<li >
							<span><?php echo esc_html( $info['label'] ?? '' ); ?></span>
							<p data-anim="text-reveal"><?php echo esc_html( $info['value'] ?? '' ); ?></p>
						</li>
						<?php endforeach; ?>
					</ul>
				</div>
				<?php endif; ?>
				<div class="restaurants__specific">
					<ul>
						<?php if ( ! empty( $details['hours'] ) ) : ?>
						<li>
							<p>Opening Hours</p>
							<table>
								<?php foreach ( $details['hours'] as $hour ) : ?>
								<tr>
									<th data-anim="text-reveal"><?php echo esc_html( $hour['label'] ?? '' ); ?></th>
									<td data-anim="text-reveal"><?php echo esc_html( $hour['value'] ?? '' ); ?></td>
								</tr>
								<?php endforeach; ?>
							</table>
						</li>
						<?php endif; ?>
						<?php if ( $details['closed'] ) : ?>
						<li>
							<p>Closed</p>
							<p data-anim="text-reveal"><?php echo esc_html( $details['closed'] ); ?></p>
						</li>
						<?php endif; ?>
						<?php if ( $details['seating'] ) : ?>
						<li>
							<p>Seating</p>
							<p data-anim="text-reveal"><?php echo esc_html( $details['seating'] ); ?></p>
						</li>
						<?php endif; ?>
						<?php if ( $details['budget'] ) : ?>
						<li>
							<p>Average budget</p>
							<p data-anim="text-reveal"><?php echo esc_html( $details['budget'] ); ?></p>
						</li>
						<?php endif; ?>
						<?php if ( $details['parking'] ) : ?>
						<li>
							<p>Parking lot</p>
							<p data-anim="text-reveal"><?php echo esc_html( $details['parking'] ); ?></p>
						</li>
						<?php endif; ?>
					</ul>
				</div>
			</div>
			<?php if ( $details['map_embed'] ) : ?>
			<div class="restaurants__map">
				<iframe
					src="<?php echo esc_url( $details['map_embed'] ); ?>"
					width="913" height="1200" style="border:0;"
					allowfullscreen="" loading="lazy"
					referrerpolicy="strict-origin-when-cross-origin"></iframe>
			</div>
			<?php endif; ?>
		</div>
	</section>
	<!-- contents4 / branch -->
	<section class="restaurants__branch">
		<div class="p-ttl">
			<div class="p-ttl__img">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/img/logo/logo-img2.png' ); ?>" alt="logo">
			</div>
			<h2 class="p-ttl__h2">branch</h2>
		</div>
		<div class="restaurants__branch-list">
			<?php
			$branch_query_args = wp_parse_args(
				$branch['query_args'],
				[
					'post_type'      => 'restaurants',
					'posts_per_page' => -1,
					'post__not_in'   => [ get_the_ID() ],
					'orderby'        => 'menu_order',
					'order'          => 'ASC',
				]
			);
			$branch_query = new WP_Query( $branch_query_args );
			if ( $branch_query->have_posts() ) :
				while ( $branch_query->have_posts() ) :
					$branch_query->the_post();
					?>
					<div class="restaurants__branch-item">
						<a href="<?php the_permalink(); ?>">
							<?php if ( has_post_thumbnail() ) : ?>
								<div class="thumb">
									<?php the_post_thumbnail( 'full' ); ?>
								</div>
							<?php endif; ?>
							<h3><?php the_title(); ?></h3>
							<?php if ( has_excerpt() ) : ?>
								<p class="restaurants__branch-location"><?php echo esc_html( get_the_excerpt() ); ?></p>
							<?php endif; ?>
						</a>
					</div>
					<?php
				endwhile;
				wp_reset_postdata();
			endif;
			?>
		</div>
	</section>
</main>