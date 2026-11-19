<!-- header(gnav) -->
<header class="l-header" id="header">
    <div class="l-header__inner">
        <!-- gnav -->
        <div class="l-container gnav">
            <div class="l-gnav">
                <!-- グローバルメニュー -->
                <div class="l-gnav__logo">
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo/logo-b.png" alt="ひかり歯科・矯正歯科">
                        <h1>ひかり歯科・矯正歯科</h1>
                    </a>
                </div>
                <nav class="l-gnav__menu">
                    <div class="l-gnav__menu--wrap">
                        <div class="l-gnav__menu--tel">
                            <a href="tel:011-206-8441">011-206-8441<span>[受付時間] 10:00~18:30</span></a>
                        </div>
                        <div class="l-gnav__menu--btn">
                            <ul>
                                <li>
                                    <a href="<?php echo home_url('/#access'); ?>">
                                        <i class="fa-solid fa-location-dot"></i>
                                        <p>アクセス</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo home_url('/#schedule'); ?>">
                                        <i class="fa-solid fa-desktop"></i>
                                        <p>ご予約</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <ul class="l-gnav__menu-list">
                        <li class="l-gnav__menu-item"><a href="<?php echo home_url('/news'); ?>">お知らせ</a></li>
                        <li class="l-gnav__menu-item"><a href="<?php echo home_url('/clinic'); ?>">当院について</a></li>
                        <li class="l-gnav__menu-item"><a href="<?php echo home_url('/standard'); ?>">施設基準</a></li>
                        <li class="l-gnav__menu-item --has-child">
                            <a href="<?php echo home_url('/#treatments'); ?>">診療内容</a>
                            <div class="l-gnav__menu-child">
                                <a href="<?php echo home_url('/#treatments'); ?>">保険診療</a>
                                <a href="<?php echo home_url('/#treatments'); ?>">自由診療</a>
                            </div>
                        </li>
                        <li class="l-gnav__menu-item"><a href="<?php echo home_url('/recruit'); ?>">採用情報</a></li>
                        <li class="l-gnav__menu-item"><a href="<?php echo home_url('/blog'); ?>">ブログ</a></li>
                    </ul>
                </nav>
                <div class="l-gnav__btn">
                    <ul class="l-gnav__btn-list">
                        <li>
                            <a href="<?php echo home_url('/#access'); ?>">
                                <i class="fa-solid fa-location-dot"></i>
                                <p>アクセス</p>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo home_url('/#schedule'); ?>">
                                <i class="fa-solid fa-desktop"></i>
                                <p>ご予約</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- ハンバーガーメニュー -->
                <div class="l-gnav__hum-overlay"></div>
                <div class="l-gnav__hum">
                    <div class="l-gnav__hum--line" role="button" aria-expanded="true" aria-label="メニューを開く">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="l-gnav__hum--menu">
                        <ul>
                            <li><a href="<?php echo home_url(); ?>">ホーム</a></li>
                            <li><a href="<?php echo home_url('/news'); ?>">お知らせ</a></li>
                            <li><a href="<?php echo home_url('/clinic'); ?>">当院について</a></li>
                            <li><a href="<?php echo home_url('/standard'); ?>">施設基準</a></li>
                            <li><a href="<?php echo home_url('/#treatments'); ?>">診療内容</a></li>
                            <li><a href="<?php echo home_url('/recruit'); ?>">採用情報</a></li>
                            <li><a href="<?php echo home_url('/blog'); ?>">ブログ</a></li>
                            <li>
                                <div><a href="tel:011-206-8441">011-206-8441<span>[受付時間] 10:00~18:30</span></a></div>
                                <div>
                                    <a href="<?php echo home_url('/#access'); ?>">
                                        <i class="fa-solid fa-location-dot"></i>
                                        <p>アクセス</p>
                                    </a>
                                    <a href="<?php echo home_url('/#schedule'); ?>">
                                        <i class="fa-solid fa-desktop"></i>
                                        <p>ご予約</p>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- loading -->
<div class="l-loading" id="loading">
    <!-- <div class="dots">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div> -->
</div>