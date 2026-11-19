<?php get_header(); ?>
<?php get_template_part( 'template-parts/gnav' ); ?>

<!-- page-header -->
<div class="l-page-header">
	<div class="page-header__container">
		<div class="page-header__img">
			<div class="page-header__img--pc">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/img/header/header_404.jpg' ); ?>" alt="header 404">
			</div>
		</div>
		<div class="page-header__ttl"><h2>404 not found</h2></div>
	</div>
</div>

<div class="l-page-body js-cover-up" data-trigger=".l-page-header">
	<!-- breadcrumb -->
	<div class="l-breadcrumb">
		<div class="breadcrumb__container">
			<ul>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">top</a></li>
				<li><p>404 not found</p></li>
			</ul>
		</div>
	</div>
    <!-- contents / 404 -->
    <main class="l-main page-404">
        <div class="page__content">
            <h1 class="page-404__ttl">404 Page Not Found</h1>
            <p class="page-404__txt">
                Sorry, the page you are looking for may have been removed,
                had its name changed, or is temporarily unavailable.<br>
                Please return to the homepage to continue browsing.
            </p>
            <div class="all-btn">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="p-btn">
                    Return to Home
                    <div class="p-btn__circle"><span></span></div>
                </a>
            </div>
        </div>
    </main>
</div>

<?php get_template_part( 'template-parts/footer' ); ?>