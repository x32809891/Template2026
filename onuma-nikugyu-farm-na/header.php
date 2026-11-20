<!DOCTYPE html>
<html lang="ja">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<!-- ▼CSS▼ -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/animation.css">
	<?php $style_ver = filemtime(get_template_directory() . '/css/style.css'); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css?ver=<?php echo $style_ver; ?>">
	<!-- ▼Googlefonts▼ -->
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho&display=swap" rel="stylesheet">
	<!-- ▼JS▼ -->
	<link href="<?php echo get_template_directory_uri(); ?>/js/slick-theme.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_template_directory_uri(); ?>/js/slick.css" rel="stylesheet" type="text/css">
	
	<?php wp_head(); ?>
</head>

<body>
	<div id="page">
		<!-- ローディング -->
		<div class="loader-wrap">
			<div class="loading">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
		
		<header>
			<div class="container">
				<!-- ヘッダーロゴ -->
				<div class="header-logo">
					<a href="<?php echo home_url(); ?>" class="header-logo__image">
						<img src="<?php echo get_template_directory_uri(); ?>/img/common/header_logo2.png"
							data-logo-top="<?php echo get_template_directory_uri(); ?>/img/common/header_logo2.png"
							data-logo-scroll="<?php echo get_template_directory_uri(); ?>/img/common/header_logo.png"
							alt="北海道小澤牧場グループ">
					</a>
				</div>
				<!-- ハンバーガーメニュー -->
				<div class="global-menu">
					<p class="menu" tabindex="0" role="button" aria-label="メニューを開く" aria-expanded="false">
						<span class="menu__line menu__line--top"></span>
						<span class="menu__line menu__line--center"></span>
						<span class="menu__line menu__line--bottom"></span>
					</p>
					<nav class="gnav">
						<div class="gnav__inner">
							<div class="gnav-logo">
								<a href="<?php echo home_url(); ?>" class="gnav-logo__image">
									<img src="<?php echo get_template_directory_uri(); ?>/img/common/header_logo.png"
										data-logo-top="<?php echo get_template_directory_uri(); ?>/img/common/header_logo.png"
										alt="北海道小澤牧場グループ">
								</a>
							</div>
							<ul class="gnav__list">
								<li class="gnav__item">
									<a href="<?php echo home_url('/'); ?>" class="gnav__link" data-bg="<?php echo get_template_directory_uri(); ?>/img/gnav/gnav_menu1.jpg">HOME</a>
								</li>
								<li class="gnav__item">
									<a href="<?php echo home_url('/fodder/'); ?>" class="gnav__link" data-bg="<?php echo get_template_directory_uri(); ?>/img/gnav/gnav_menu2.jpg">エサのこだわり</a>
								</li>
								<li class="gnav__item">
									<a href="<?php echo home_url('/intro/'); ?>" class="gnav__link" data-bg="<?php echo get_template_directory_uri(); ?>/img/gnav/gnav_menu3.jpg">導入から出荷まで</a>
								</li>
								<li class="gnav__item gnav__item--has-child">
									<button class="gnav__link gnav__toggle" data-bg="<?php echo get_template_directory_uri(); ?>/img/gnav/gnav_menu4.jpg">
									取扱品種
									<span class="gnav__arrow"></span>
									</button>
									<ul class="gnav__submenu">
									<li><a href="<?php echo home_url('/trademark/'); ?>" class="gnav__sublink" data-bg="<?php echo get_template_directory_uri(); ?>/img/gnav/gnav_menu5.jpg">ブランド・商標について</a></li>
									<li><a href="<?php echo home_url('/words/'); ?>" class="gnav__sublink" data-bg="<?php echo get_template_directory_uri(); ?>/img/gnav/gnav_menu6.jpg">用語辞典</a></li>
									</ul>
								</li>
								<li class="gnav__item">
									<a href="<?php echo home_url('/outline/'); ?>" class="gnav__link" data-bg="<?php echo get_template_directory_uri(); ?>/img/gnav/gnav_menu7.jpg">牧場概要</a>
								</li>
								<li class="gnav__item">
									<a href="<?php echo home_url('/gallery/'); ?>" class="gnav__link" data-bg="<?php echo get_template_directory_uri(); ?>/img/gnav/gnav_menu8.jpg">ギャラリー</a>
								</li>
								<li class="gnav__item">
									<a href="<?php echo home_url('/recruit/'); ?>" class="gnav__link" data-bg="<?php echo get_template_directory_uri(); ?>/img/gnav/gnav_menu9.jpg">採用情報</a>
								</li>
								<li class="gnav__item">
									<a href="<?php echo home_url('/staff/'); ?>" class="gnav__link" data-bg="<?php echo get_template_directory_uri(); ?>/img/gnav/gnav_menu10.jpg">スタッフ紹介</a>
								</li>
								<li class="gnav__item gnav__item--has-child">
									<button class="gnav__link gnav__toggle" data-bg="<?php echo get_template_directory_uri(); ?>/img/gnav/gnav_menu11.jpg">
									活動報告
									<span class="gnav__arrow"></span>
									</button>
									<ul class="gnav__submenu">
										<li><a href="<?php echo home_url('/category/local/'); ?>" class="gnav__sublink" data-bg="<?php echo get_template_directory_uri(); ?>/img/gnav/gnav_menu12.jpg">地域貢献</a></li>
										<li><a href="<?php echo home_url('/category/group/'); ?>" class="gnav__sublink" data-bg="<?php echo get_template_directory_uri(); ?>/img/gnav/gnav_menu13.jpg">団体との取り組み</a></li>
										<li><a href="<?php echo home_url('/category/sdgs/'); ?>" class="gnav__sublink" data-bg="<?php echo get_template_directory_uri(); ?>/img/gnav/gnav_menu14.jpg">SDGs</a></li>
										<li><a href="<?php echo home_url('/category/news/'); ?>" class="gnav__sublink" data-bg="<?php echo get_template_directory_uri(); ?>/img/gnav/gnav_menu15.jpg">お知らせ</a></li>
									</ul>
								</li>
								<li class="gnav__item">
									<a href="<?php echo home_url('/company/'); ?>" class="gnav__link" data-bg="<?php echo get_template_directory_uri(); ?>/img/gnav/gnav_menu16.jpg">小澤牧場グループ</a>
								</li>
								<li class="gnav__item">
									<a href="<?php echo home_url('/contact/'); ?>" class="gnav__link" data-bg="<?php echo get_template_directory_uri(); ?>/img/gnav/gnav_menu17.jpg">お問い合わせ</a>
								</li>
							</ul>
						</div>
						<div class="gnav__visual">
							<div class="gnav__visual-img" id="gnavVisualImg">
								<div class="layer is-visible" data-layer="a" style="background-image:url('https://www.onuma-nikugyu-farm.com/wp-content/themes/nousan-sh/img/gnav/gnav_top.jpg');"></div>
								<div class="layer" data-layer="b"></div>
							</div>
						</div>
					</nav>
				</div><!-- END / .global-menu -->
			</div><!-- END / .container-->
		</header><!-- END / header -->