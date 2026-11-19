<?php get_header(); ?>
<?php get_template_part( 'template-parts/gnav' ); ?>

<!-- page-header -->
<div class="l-page-header">
	<div class="page-header__container">
		<div class="page-header__img">
			<div class="page-header__img--pc">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/img/header/header_contact.jpg' ); ?>" alt="header contact">
			</div>
		</div>
		<div class="page-header__ttl"><h2>contact</h2></div>
	</div>
</div>

<div class="l-page-body js-cover-up" data-trigger=".l-page-header">
	<!-- breadcrumb -->
	<div class="l-breadcrumb">
		<div class="breadcrumb__container">
			<ul>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">top</a></li>
				<li><p>contact</p></li>
			</ul>
		</div>
	</div>
	<!-- contents / contact -->
	<main class="l-main contact">
		<section class="contact__contents">
			<?php the_content(); ?>
		</section>
	</main>
</div>

<?php get_template_part( 'template-parts/footer' ); ?>