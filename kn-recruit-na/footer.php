<footer class="c__footer" id="footer">

    <!-- company / contact -->
    <?php
    if ( !is_page( array( 'company', 'contact' ) ) ) : ?>
    
    <div class="c__footer-2col">
        <div class="c__footer-2col--inner">
            <a class="c__footer-2col-btn" href="<?php echo home_url('/company/'); ?>">
                <div class="c__footer-2col-btn-item">
                    <h2 class="c__content-heading--h2-ver">
                    <span class="c__content-heading--h2-ver-en">COMPANY</span>
                    <span class="c__content-heading--h2-ver-jp">会社概要</span>
                    </h2>
                    <p class="c__footer-2col-btn-item-txt">
                        環境に優しい技術力を探求し、誠実に仕事を取り組んで、お客様から得た信頼を大切にします。<br>
                        そして、培った高い技術力を駆使し、地球の環境改善に努めます。
                    </p>
                </div>
            </a>
            <a class="c__footer-2col-btn" href="<?php echo home_url('/contact/'); ?>">
                <div class="c__footer-2col-btn-item">
                    <h2 class="c__content-heading--h2-ver">
                    <span class="c__content-heading--h2-ver-en">CONTACT</span>
                    <span class="c__content-heading--h2-ver-jp">お問い合わせ</span>
                    </h2>
                    <p class="c__footer-2col-btn-item-txt">
                        ご質問・ご要望等ございましたら、フォームより必須事項をご記入の上、送信してください。<br>
                        内容を確認の上、担当者より折り返しご連絡いたします。
                    </p>
                </div>
            </a>
        </div>
    </div>
    <?php endif; ?>

    <!-- menu -->
	<div class="c__footer-content">
        <div class="c__footer-content--inner">
            <div class="c__footer-content-item">
                <div class="c__footer-content-item--inner">
                    <h1 class="c__footer-content-item-logo">
                        <a href="<?php echo home_url(); ?>">
                            <span>そうだ、地方から技術革新。</span>佐藤建設株式会社
                        </a>
                        <!-- <a href="https://template-lab.site/knrec-na/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo/logo-w.png" alt="佐藤建設株式会社"></a>
                        <p>〒000-0000 北海道札幌市中央区</p> -->
                    </h1>
                    <ul class="c__footer-content-item-list">
                        <li class="c__footer-content-item-list-details"><a href="tel:011-596-9501">011-596-9501<span>受付時間／平日10:00～17:00</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="c__footer-content-menu">
                <ul class="c__footer-content-menu-list">
                    <li class="c__footer-content-menu-list-item">
                        <div class="c__footer-content-menu-list-item-ttl">
                            <a href="<?php echo home_url('/service/'); ?>">私たちの仕事</a>
                        </div>
                        <ol class="c__footer-content-menu-list-item-submenu">
                            <li class="c__footer-content-menu-list-item-submenu-box">
                                <a href="<?php echo home_url('/service/#mission'); ?>">私たちの使命</a>
                            </li>
                            <li class="c__footer-content-menu-list-item-submenu-box">
                                <a href="<?php echo home_url('/service/#service'); ?>">私たちの仕事</a>
                            </li>
                        </ol>
                    </li>
                    <li class="c__footer-content-menu-list-item">
                        <div class="c__footer-content-menu-list-item-ttl">
                            <a href="<?php echo home_url('/works/'); ?>">施工事例</a>
                        </div>
                        <ol class="c__footer-content-menu-list-item-submenu">
                            <li class="c__footer-content-menu-list-item-submenu-box">
                                <a href="<?php echo home_url('/category/architecture/'); ?>">建築工事</a>
                            </li>
                            <li class="c__footer-content-menu-list-item-submenu-box">
                                <a href="<?php echo home_url('/category/civil-engineering/'); ?>">土木工事</a>
                            </li>
                            <li class="c__footer-content-menu-list-item-submenu-box">
                                <a href="<?php echo home_url('/category/housing/'); ?>">住宅工事</a>
                            </li>
                        </ol>
                    </li>
                    <li class="c__footer-content-menu-list-item">
                        <div class="c__footer-content-menu-list-item-ttl">
                            <a href="<?php echo home_url('/recruit/'); ?>">採用情報</a>
                        </div>
                        <ol class="c__footer-content-menu-list-item-submenu">
                            <li class="c__footer-content-menu-list-item-submenu-box">
                                <a href="<?php echo home_url('/recruit/#character'); ?>">求める人物像</a>
                            </li>
                            <li class="c__footer-content-menu-list-item-submenu-box">
                                <a href="<?php echo home_url('/recruit/#requirements'); ?>">募集要項</a>
                            </li>
                        </ol>
                    </li>
                    <li class="c__footer-content-menu-list-item">
                        <div class="c__footer-content-menu-list-item-ttl">
                            <a href="<?php echo home_url('/company/'); ?>">会社概要</a>
                        </div>
                        <ol class="c__footer-content-menu-list-item-submenu">
                            <li class="c__footer-content-menu-list-item-submenu-box">
                                <a href="<?php echo home_url('/company/#message'); ?>">代表挨拶</a>
                            </li>
                            <li class="c__footer-content-menu-list-item-submenu-box">
                                <a href="<?php echo home_url('/company/#company'); ?>">会社概要</a>
                            </li>
                            <li class="c__footer-content-menu-list-item-submenu-box">
                                <a href="<?php echo home_url('/company/#history'); ?>">沿革</a>
                            </li>
                            <li class="c__footer-content-menu-list-item-submenu-box">
                                <a href="<?php echo home_url('/company/#map'); ?>">アクセスマップ</a>
                            </li>
                        </ol>
                    </li>
                    <li class="c__footer-content-menu-list-item">
                        <div class="c__footer-content-menu-list-item-ttl">
                            <a href="<?php echo home_url('/news/'); ?>">最新情報</a>
                        </div>
                        <ol class="c__footer-content-menu-list-item-submenu">
                            <li class="c__footer-content-menu-list-item-submenu-box">
                                <a href="<?php echo home_url('/news-cat/info/'); ?>">お知らせ</a>
                            </li>
                            <li class="c__footer-content-menu-list-item-submenu-box">
                                <a href="<?php echo home_url('/news-cat/blog/'); ?>">ブログ</a>  
                            </li>
                            <li class="c__footer-content-menu-list-item-submenu-box">
                                <a href="<?php echo home_url('/news-cat/other/'); ?>">その他</a>  
                            </li>
                        </ol>
                    </li>
                    <li class="c__footer-content-menu-list-item">
                        <div class="c__footer-content-menu-list-item-ttl">
                            <a href="<?php echo home_url('/contact/'); ?>">お問い合わせ</a>
                        </div>
                        <ol class="c__footer-content-menu-list-item-submenu">
                            <li class="c__footer-content-menu-list-item-submenu-box">
                                <a href="<?php echo home_url('/contact/#policy'); ?>">プライバシーポリシー</a>
                            </li>
                        </ol>
                    </li>
                </ul>
            </div>
        </div>
	</div>

    <!-- copyright -->
    <div class="c__footer-copyright">
        <small>&copy; 佐藤建設株式会社</small>
    </div>

</footer>
</div><!-- #luxy -->

<!-- page-top btn(luxy内だと正常に動作しないためfooter外に設置) -->
<div class="c__footer-page-top" id="pageTop">
    <button
        type="button"
        class="c__footer-page-top--btn"
        id="pageTopBtn"
        aria-label="<?php echo htmlspecialchars($page_top_label, ENT_QUOTES, 'UTF-8'); ?>">
        <span class="c__footer-page-top--btn__arrow" aria-hidden="true"></span>
    </button>
</div>

<!-- footer-bar(only show on sp) -->
<div class="c__content-footer-bar hidden">
    <ul class="c__content-footer-bar-list">
        <li class="c__content-footer-bar-list-item"><a href="tel:011-596-9501"><i class="fa-solid fa-phone"></i> TEL</a></li>
        <li class="c__content-footer-bar-list-item"><a href="<?php echo home_url('/contact/'); ?>"><i class="fa-solid fa-envelope"></i> ENTRY</a></li>
    </ul>
</div>

<?php wp_footer(); ?>

<!-- ▶ js -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.4/vegas.min.js"></script>
<!-- slick -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slider.js"></script>
<!-- swiper -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- data-aos -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- gsap -->
<script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/SplitText.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js"></script>
<!-- luxy -->
<script src="<?php echo get_template_directory_uri(); ?>/js/luxy.min.js" charset="utf-8"></script>
<!-- original js -->
<script src="<?php echo get_template_directory_uri(); ?>/js/animation.js"></script>

</body>
</html>