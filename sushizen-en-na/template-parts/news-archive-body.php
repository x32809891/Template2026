<?php
$main_class    = $args['main_class'] ?? 'archive-news';
$current_term  = $args['current_term'] ?? null;

$news_terms       = get_terms( [
	'taxonomy'   => 'news-category',
	'hide_empty' => false,
] );
$news_archive_url = get_post_type_archive_link( 'news' );

global $wp_query;
$current_page = get_query_var( 'paged' ) ? (int) get_query_var( 'paged' ) : 1;
?>

<main class="l-main <?php echo esc_attr( $main_class ); ?>">

	<section class="news__box">
		<div class="news__wrap">
			<!-- category -->
			<div class="news__category">
				<p>category</p>
				<ul>
					<li>
						<a href="<?php echo esc_url( $news_archive_url ); ?>"
							class="<?php echo ! ( $current_term instanceof WP_Term ) ? 'is-active' : ''; ?>">
							All
						</a>
					</li>
					<?php if ( ! is_wp_error( $news_terms ) && ! empty( $news_terms ) ) : ?>
						<?php foreach ( $news_terms as $term ) :
							$is_active = ( $current_term instanceof WP_Term && $current_term->term_id === $term->term_id ) ? 'is-active' : '';
							?>
							<li>
								<a href="<?php echo esc_url( get_term_link( $term ) ); ?>"
									class="<?php echo esc_attr( $is_active ); ?>">
									<?php echo esc_html( $term->name ); ?>
								</a>
							</li>
						<?php endforeach; ?>
					<?php endif; ?>
				</ul>
			</div>
			<!-- list -->
			<ul class="news__list">
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<li class="news__item">
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
				<?php else : ?>
					<li class="news__item news__item--none">
						<p>投稿がありません。</p>
					</li>
				<?php endif; ?>
			</ul>
		</div>
		<!-- pagination -->
		<?php if ( $wp_query->max_num_pages > 1 ) : ?>
			<div class="news__pagination">
				<?php
				echo paginate_links( [
					'base'      => str_replace( PHP_INT_MAX, '%#%', esc_url( get_pagenum_link( PHP_INT_MAX ) ) ),
					'format'    => '',
					'current'   => max( 1, $current_page ),
					'total'     => $wp_query->max_num_pages,
					'prev_text' => '&laquo;',
					'next_text' => '&raquo;',
					'mid_size'  => 2,
					'end_size'  => 1,
				] );
				?>
			</div>
		<?php endif; ?>
	</section>

</main>