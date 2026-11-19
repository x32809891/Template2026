<?php get_header(); ?>
<?php get_template_part( 'template-parts/gnav' ); ?>

<?php
while ( have_posts() ) :
	the_post();
	$news_terms   = get_the_terms( get_the_ID(), 'news-category' );
	$primary_term = ( ! is_wp_error( $news_terms ) && ! empty( $news_terms ) ) ? $news_terms[0] : null;
?>

<?php get_template_part( 'template-parts/news-header' ); ?>

	<!-- contents / news(single) -->
	<main class="l-main single-news">
		<section class="news__box--single">
			<article class="news__article">
				<div class="news__ttl--single"><h3><?php the_title(); ?></h3></div>
				<div class="news__head">
					<div class="news__date">
						<p><?php echo esc_html( get_the_date( 'Y.m.d' ) ); ?></p>
					</div>
					<?php if ( $primary_term ) : ?>
						<div class="news__cat">
							<a href="<?php echo esc_url( get_term_link( $primary_term ) ); ?>">
								<?php echo esc_html( $primary_term->name ); ?>
							</a>
						</div>
					<?php endif; ?>
				</div>
				<div class="news__content">
					<?php the_content(); ?>
				</div>
			</article>
			<!-- prev / next -->
			<div class="news__nav">
				<?php
				$prev_post = get_previous_post();
				$next_post = get_next_post();
				$news_nav_title_limit = 40;
				?>
				<div class="news__nav-prev">
					<?php if ( $prev_post ) : ?>
						<a href="<?php echo esc_url( get_permalink( $prev_post ) ); ?>">
							<span>prev</span>
							<p><?php echo esc_html( mb_strimwidth( get_the_title( $prev_post ), 0, $news_nav_title_limit, '…' ) ); ?></p>
						</a>
					<?php endif; ?>
				</div>
				<div class="news__nav-next">
					<?php if ( $next_post ) : ?>
						<a href="<?php echo esc_url( get_permalink( $next_post ) ); ?>">
							<span>next</span>
							<p><?php echo esc_html( mb_strimwidth( get_the_title( $next_post ), 0, $news_nav_title_limit, '…' ) ); ?></p>
						</a>
					<?php endif; ?>
				</div>
			</div>
		</section>
	</main>

</div>

<?php endwhile; ?>
<?php get_template_part( 'template-parts/footer' ); ?>