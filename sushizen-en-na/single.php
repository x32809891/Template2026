<?php get_header(); ?>
<?php get_template_part( 'template-parts/gnav' ); ?>

<?php
while ( have_posts() ) :
	the_post();
	$categories       = get_the_category();
	$primary_category = ! empty( $categories ) ? $categories[0] : null;
?>

<?php get_template_part( 'template-parts/gallery-header' ); ?>

	<!-- contents / gallery(single) -->
	<main class="l-main single-gallery">
		<section class="gallery__box--single">
			<article class="gallery__article">
				<div class="gallery__ttl--single"><h3><?php the_title(); ?></h3></div>
				<div class="gallery__head">
					<div class="gallery__date--single">
						<p><?php echo esc_html( get_the_date( 'Y.m.d' ) ); ?></p>
					</div>
					<?php if ( $primary_category ) : ?>
						<div class="gallery__cat--single">
							<a href="<?php echo esc_url( get_category_link( $primary_category->term_id ) ); ?>"><?php echo esc_html( $primary_category->name ); ?></a>
						</div>
					<?php endif; ?>
				</div>
				<div class="gallery__thumb--single">
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'large' ); ?>
					<?php else : ?>
						<img
							src="<?php echo esc_url( get_template_directory_uri() . '/img/front-page/thumb-image.jpg' ); ?>"
							alt="<?php the_title_attribute(); ?>"
						>
					<?php endif; ?>
				</div>
				<div class="gallery__body">
					<?php the_content(); ?>
				</div>
			</article>
			<div class="gallery__nav">
				<div class="gallery__nav-prev">
					<?php
					$prev_post = get_previous_post();
					if ( ! empty( $prev_post ) ) :
						$prev_title = mb_strimwidth( get_the_title( $prev_post ), 0, 20, '...' );
						?>
						<a href="<?php echo esc_url( get_permalink( $prev_post ) ); ?>">
							<span>prev</span>
							<p><?php echo esc_html( $prev_title ); ?></p>
						</a>
					<?php endif; ?>
				</div>
				<div class="gallery__nav-next">
					<?php
					$next_post = get_next_post();
					if ( ! empty( $next_post ) ) :
						$next_title = mb_strimwidth( get_the_title( $next_post ), 0, 20, '...' );
						?>
						<a href="<?php echo esc_url( get_permalink( $next_post ) ); ?>">
							<span>next</span>
							<p><?php echo esc_html( $next_title ); ?></p>
						</a>
					<?php endif; ?>
				</div>
			</div>
		</section>
	</main>

</div>

<?php endwhile; ?>
<?php get_template_part( 'template-parts/footer' ); ?>