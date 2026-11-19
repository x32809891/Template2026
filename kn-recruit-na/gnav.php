<body <?php body_class(); ?>>

    <?php
        $current_url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $top_page_url = top_page_url();
    ?>

    <!-- loading -->
    <div class="loader">
        <div class="loader--inner"><div class="loader--spinner"></div></div>
    </div>

    <header id="header" class="c__header">

        <!-- logo -->
        <div class="c__header-logo">
            <h1 class="c__header-logo-txt">
                <a href="<?php echo home_url(); ?>">佐藤建設株式会社</a>
            </h1>
            <!-- <div class="c__header-logo-img">
                <a href="https://template-lab.site/knrec-na/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo/logo-w.png" alt="佐藤建設株式会社"></a>
            </div> -->
        </div>

        <!-- fixed-btn -->
        <div class="c__header-fixed-btn">
            <a class="c__header-fixed-btn--link" href="<?php echo home_url('/contact/'); ?>"><span>ENTRY</span></a>
        </div>

        <!-- sns-btn -->
        <div class="c__header-sns-btn" id="headerSnsBtn">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icon/instagram.png" alt="instagram"></a>
            <!-- <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icon/twitter.png" alt="twitter"></a> -->
            <!-- <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icon/facebook.png" alt="facebook"></a> -->
        </div>

        <!-- g-nav -->
        <div class="c__openbtn"><span></span><span></span></div>
        <div class="c__openbtn-overlay"></div>
        <nav id="g-nav" class="c__header-nav">
            <div id="g-nav-list" class="c__header-nav--inner">
                <div class="c__header-nav--top">
                    <div class="c__header-nav-menu">
                        <ul class="c__header-nav-menu-list">
                            <li class="c__header-nav-menu-list-item">
                                <a href="<?php echo home_url(); ?>">HOME<span class="c__header-nav-menu-list-item--jp">ホーム</span></a>
                            </li>
                            <li class="c__header-nav-menu-list-item">
                                <a href="<?php echo home_url('/service/'); ?>">SERVICE<span class="c__header-nav-menu-list-item--jp">私たちの仕事</span></a>
                            </li>
                            <li class="c__header-nav-menu-list-item">
                                <a href="<?php echo home_url('/works/'); ?>">WORKS<span class="c__header-nav-menu-list-item--jp">施工事例</span></a>
                            </li>
                            <li class="c__header-nav-menu-list-item">
                                <a href="<?php echo home_url('/news/'); ?>">NEWS<span class="c__header-nav-menu-list-item--jp">最新情報</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="c__header-nav--bottom">
                    <div class="c__header-nav-menu">
                        <ul class="c__header-nav-menu-list">
                            <li class="c__header-nav-menu-list-item">
                                <a href="<?php echo home_url('/recruit/'); ?>">RECRUIT<span class="c__header-nav-menu-list-item--jp">採用情報</span></a>
                            </li>
                            <li class="c__header-nav-menu-list-item">
                                <a href="<?php echo home_url('/company/'); ?>">COMPANY<span class="c__header-nav-menu-list-item--jp">会社概要</span></a>
                            </li>
                            <li class="c__header-nav-menu-list-item">
                                <a href="<?php echo home_url('/contact/'); ?>">CONTACT<span class="c__header-nav-menu-list-item--jp">お問い合わせ</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div id="luxy"><!-- #luxy -->