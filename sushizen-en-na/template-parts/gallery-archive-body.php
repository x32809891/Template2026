<?php
$main_class = $args['main_class'] ?? 'archive-gallery';

global $wp_query;
$current_page = get_query_var( 'paged' ) ? (int) get_query_var( 'paged' ) : 1;
?>

<main class="l-main <?php echo esc_attr( $main_class ); ?>">
	<section class="gallery__box">
		<ul class="gallery__list">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<li class="gallery__item">
						<a class="gallery__link" href="<?php the_permalink(); ?>">
							<div class="gallery__thumb">
								<?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail( 'full' ); ?>
								<?php else : ?>
									<img src="<?php echo esc_url( get_template_directory_uri() . '/img/front-page/thumb-image.jpg' ); ?>" alt="thumbnail">
								<?php endif; ?>
							</div>
							<div class="gallery__ttl"><h3><?php the_title(); ?></h3></div>
							<div class="gallery__wrap">
								<div class="gallery__date">
									<p><?php echo esc_html( get_the_date( 'Y.m.d' ) ); ?></p>
								</div>
								<div class="gallery__cat">
									<?php
									$categories = get_the_category();
									if ( ! empty( $categories ) ) :
										?>
										<p>
											<?php
											$cat_names = array();
											foreach ( $categories as $category ) {
												$cat_names[] = esc_html( $category->name );
											}
											echo implode( ' / ', $cat_names );
											?>
										</p>
									<?php endif; ?>
								</div>
							</div>
						</a>
					</li>
				<?php endwhile; ?>
			<?php else : ?>
				<li class="gallery__item gallery__item--none">
					<p>投稿がありません。</p>
				</li>
			<?php endif; ?>
		</ul>

		<!-- pagination -->
		<?php if ( $wp_query->max_num_pages > 1 ) : ?>
			<div class="gallery__pagination">
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