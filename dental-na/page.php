<?php get_header(); ?>
<?php get_template_part('gnav'); ?>

<!-- header -->
<div class="l-container p-header">
    <div class="p-header clinic">
        <div class="p-header__item"></div>
        <div class="p-header__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/page/header_page.jpg" alt="ページヘッダー画像">
        </div>
        <div class="p-header__txt">
            <p>contact</p>
            <h2>お問い合わせ</h2>
        </div>
    </div>
</div>

<!-- breadcrumb -->
<nav class="l-container breadcrumb" aria-label="パンくずリスト">
    <div class="p-breadcrumb">
        <ol>
            <li><a href="<?php echo home_url(); ?>">ホーム</a></li>
            <li>お問い合わせ</li>
        </ol>
    </div>
</nav>

<!-- contents -->
<main class="l-main page" id="main">
    <div class="l-main__inner">
        <!-- contact -->
        <section class="l-container contact">
            <div class="p-contact">
                <?php the_content(); ?>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>