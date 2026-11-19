<?php get_header(); ?>
<?php get_template_part('gnav'); ?>

<!-- header -->
<div class="l-container p-header">
    <div class="p-header clinic">
        <div class="p-header__item"></div>
        <div class="p-header__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/page/header_404.jpg" alt="404ヘッダー画像">
        </div>
        <div class="p-header__txt">
            <p>404</p>
            <h2>Not Found</h2>
        </div>
    </div>
</div>

<!-- breadcrumb -->
<nav class="l-container breadcrumb" aria-label="パンくずリスト">
    <div class="p-breadcrumb">
        <ol>
            <li><a href="<?php echo home_url(); ?>">ホーム</a></li>
            <li>404 Not Found</li>
        </ol>
    </div>
</nav>

<!-- contents -->
<main class="l-main page" id="main">
    <div class="l-main__inner">
        <!-- not found -->
        <section class="l-container not-found">
            <div class="p-not-found">
                <p style="font-size: 24px; text-align: center; margin: 0; padding: 0;">
                    お探しのページは見つかりませんでした。<br>
                    URLが変更、または削除された可能性がございます。<br>
                    恐れ入りますが、下記よりホームへお戻りください。
                </p>
                <div class="p-section__btn fade-up">
                    <a href="<?php echo home_url(); ?>">ホームへ戻る<span></span></a>
                </div>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>