<?php get_header(); ?>
<?php get_template_part( 'template-parts/gnav' ); ?>

<!-- page-header -->
<div class="l-page-header">
	<div class="page-header__container">
		<div class="page-header__img">
			<div class="page-header__img--pc">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/img/header/header_susukino.jpg' ); ?>" alt="header susukino">
			</div>
		</div>
		<div class="page-header__ttl"><h2>susukino</h2></div>
	</div>
</div>

<div class="l-page-body js-cover-up" data-trigger=".l-page-header">

	<!-- breadcrumb -->
	<div class="l-breadcrumb">
		<div class="breadcrumb__container">
			<ul>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">top</a></li>
				<li><p>restaurant list</p></li>
				<li><p>susukino</p></li>
			</ul>
		</div>
	</div>

	<!-- ** from template-parts / restaurant-detail.php ** -->
	<!-- contents / susukino -->
	<?php
	$restaurant_data = [
		// contents1 / concept
		'concept' => [
			'img_left'  => get_template_directory_uri() . '/img/sub-page/susukino/susukino-img2.jpg',
			'img_right' => get_template_directory_uri() . '/img/sub-page/susukino/susukino-img1.jpg',
			'heading'   => 'Where It All Began',
			'text' => "At Sushizen Susukino, we are dedicated to serving first-class sushi crafted with genuine care and refined technique. <br>Situated in the southern part of Susukino, Sapporo's celebrated nightlife district, our flagship restaurant occupies a spacious and elegantly appointed Japanese dining room.<br>We humbly invite you to choose your preferred seat and allow yourself to be immersed in a dining experience that lingers long in the memory.",
			'slides'    => [
				get_template_directory_uri() . '/img/sub-page/susukino/susukino-slide1.jpg',
				get_template_directory_uri() . '/img/sub-page/susukino/susukino-slide2.jpg',
				get_template_directory_uri() . '/img/sub-page/susukino/susukino-slide3.jpg',
			],
		],
		// contents2 / menu
		'menu' => [
			'notes'   => '*Tax Inclusive<br>*Another 10% service charge will be added to your bill.<br>*Opening hours : 5:00pm-11:00pm<br>*Please order at least one menu per person. We don’t allow sharing of food.',
			'menus' => [
				[
					'label' => 'Course',
					'courses' => [
						[
							'name'  => 'Course "Itamae"',
							'desc'  => 'Appetizer / Small dish / Chawanmushi / Sashimi (3 kinds) / Sushi (8 pieces) / Soup / Dessert',
							'price' => '¥22,000',
						],
						[
							'name'  => 'Course "Sushi"',
							'desc'  => 'Appetizer / Sushi (12 pieces) / Soup / Dessert',
							'price' => '¥16,500',
						],
						[
							'name'  => 'Okonomi Nigiri',
							'desc'  => 'Each piece is carefully prepared to suit your individual preferences.',
							'price' => '',
							'spacer_top' => true,
						],
						[
							'name'  => 'Omakase',
							'desc'  => 'Seasonal delicacies, handpicked by our chef, for a memorable dining experience.',
							'price' => '¥33,000~',
						],
					],
				],
			],
			'img'         => get_template_directory_uri() . '/img/sub-page/susukino/susukino-menu.jpg',
			'reserve_url' => 'https://sushizen.co.jp/en/restaurants/susukino/',
			'detail_url'  => 'https://web-creator04.com/sushizen/en/restaurants/susukino/#summary',
		],
		// contents3 / details
		'details' => [
			'title' => 'susukino',
			'info'  => [
				[ 'label' => 'Location', 'value' => '1F TSUMUGI Bldg. 10-1, Minami 4-jo Nishi 5-chome, Chuo-ku, Sapporo, Hokkaido' ],
				[ 'label' => 'Access',   'value' => '3-minute walk from Susukino Station on the Sapporo Municipal Subway Namboku Line.' ],
				[ 'label' => 'Tel',      'value' => '011-805-0069' ],
				[ 'label' => 'Fax',      'value' => '011-805-4502' ],
			],
			'hours' => [
				[ 'label' => 'Dinner',          'value' => '5:00pm - 11:00pm' ],
				[ 'label' => 'Last orders at:', 'value' => '10:30pm' ],
			],
			'closed'    => 'Sunday and Monday',
			'seating'   => '9 seats at the counter, 4 seats at the table',
			'budget'    => '￥25,000 (normal average) / per person',
			'map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2915.4024664682656!2d141.3495597258093!3d43.05400224097927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0b298639caa387%3A0xb4ace1da17fc6d65!2z44GZ44GX5ZaE44GZ44GZ44GN44Gu5bqX!5e0!3m2!1sen!2sjp!4v1783301198722!5m2!1sen!2sjp',
		],
		// contents4 / branch
		'branch' => [
			'query_args' => [],
		],
	];
	get_template_part( 'template-parts/restaurant-detail', null, $restaurant_data );
	?>
</div>

<?php get_template_part( 'template-parts/footer' ); ?>