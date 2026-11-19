<?php get_header(); ?>
<?php get_template_part( 'template-parts/gnav' ); ?>

<!-- page-header -->
<div class="l-page-header">
	<div class="page-header__container">
		<div class="page-header__ttl"><h2><?php the_title(); ?></h2></div>
	</div>
</div>

<div class="l-page-body js-cover-up" data-trigger=".l-page-header">
	<!-- breadcrumb -->
	<div class="l-breadcrumb">
		<div class="breadcrumb__container">
			<ul>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">top</a></li>
				<li><p><?php the_title(); ?></p></li>
			</ul>
		</div>
	</div>
	<!-- contents / page(default) -->
	<main class="l-main page-default">
		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<article class="page__article">
				<div class="page__content">
					<?php the_content(); ?>
				</div>
			</article>
		<?php endwhile; ?>
	</main>
</div>

<?php get_template_part( 'template-parts/footer' ); ?>