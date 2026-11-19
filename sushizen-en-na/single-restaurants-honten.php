<?php get_header(); ?>
<?php get_template_part( 'template-parts/gnav' ); ?>

<!-- page-header -->
<div class="l-page-header">
	<div class="page-header__container">
		<div class="page-header__img">
			<div class="page-header__img--pc">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/img/header/header_honten.jpg' ); ?>" alt="header honten">
			</div>
		</div>
		<div class="page-header__ttl"><h2>honten</h2></div>
	</div>
</div>

<div class="l-page-body js-cover-up" data-trigger=".l-page-header">

	<!-- breadcrumb -->
	<div class="l-breadcrumb">
		<div class="breadcrumb__container">
			<ul>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">top</a></li>
				<li><p>restaurant list</p></li>
				<li><p>honten</p></li>
			</ul>
		</div>
	</div>

	<!-- ** from template-parts / restaurant-detail.php ** -->
	<!-- contents / honten -->
	<?php
	$restaurant_data = [
		// contents1 / concept
		'concept' => [
			'img_left'  => get_template_directory_uri() . '/img/sub-page/honten/honten-img1.jpg',
			'img_right' => get_template_directory_uri() . '/img/sub-page/honten/honten-img2.jpg',
			'heading'   => 'Where Tradition
			Meets Tranquility',
			'text'      => 'Sushizen Honten is nestled in Maruyama, a setting that gracefully reflects the four distinct seasons of northern Japan.<br>The restaurant features three counter seats, two private rooms, and a hall, each thoughtfully appointed in a serene and tranquil atmosphere.<br>We warmly welcome you to select your preferred seat and experience the refined flavors and heartfelt hospitality that define Sushizen.',
			'slides'    => [
				get_template_directory_uri() . '/img/sub-page/honten/honten-slide1.jpg',
				get_template_directory_uri() . '/img/sub-page/honten/honten-slide2.jpg',
				get_template_directory_uri() . '/img/sub-page/honten/honten-slide3.jpg',
				get_template_directory_uri() . '/img/sub-page/honten/honten-slide4.jpg',
				get_template_directory_uri() . '/img/sub-page/honten/honten-slide5.jpg',
			],
		],
		// contents2 / menu
		'menu' => [
			'notes'   => '*Tax Inclusive<br>*Another 10% service charge will be added to your bill.<br>*Opening hours : 11:30am-2:30pm, 5:30pm-9:30pm<br>*Please order at least one menu per person. We don’t allow sharing of food.',
			'menus' => [
				[
					'label' => 'Course',
					'courses' => [
						[
							'name'  => 'Course "Zen"',
							'desc'  => 'Appetizer / Sashimi / Abalone dish / Small dish / Sushi (7 pieces) / Torotaku roll / Soup / Dessert',
							'price' => '¥36,000',
						],
						[
							'name'  => 'Course "Kotobuki"',
							'desc'  => 'Appetizer / Sashimi / Grilled dish / Small dish / Sushi (7 pieces) / Soup / Dessert',
							'price' => '¥26,000',
						],
						[
							'name'  => 'Seasonal Nigiri',
							'desc'  => 'Sushi (13 pieces) / Soup / Dessert',
							'price' => '¥16,500',
						],
						[
							'name'  => 'Nigiri Sushi "En"',
							'desc'  => 'Sushi (13 pieces of Edomae and seasonal nigiri) / Soup / Dessert',
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
							'price' => '¥36,000~',
						],
					],
				],
				[
					'label' => 'Lunch',
					'courses' => [
						[
							'name'  => 'Nigiri Sushi "Shun"',
							'desc'  => 'Sushi (11 pieces) / Soup / Salad / Dessert',
							'price' => '¥8,800',
						],
						[
							'name'  => 'Lunch Set',
							'desc'  => 'Appetizer / Sashimi / Fried dish / Sushi (6 pieces) / Soup / Dessert',
							'price' => '¥8,800',
						],
						[
							'name'  => 'Edomae Barachirashi',
							'desc'  => 'Soup / Salad / Dessert',
							'price' => '¥6,050',
						],
					],
				],
			],
			'img'         => get_template_directory_uri() . '/img/sub-page/honten/honten-menu.jpg',
			'reserve_url' => 'https://sushizen-reserve.com/rsv_en/honten/',
			'detail_url'  => 'https://sushizen.co.jp/en/restaurants/honten/#summary',
		],
		// contents3 / details
		'details' => [
			'title' => 'honten',
			'info'  => [
				[ 'label' => 'Location', 'value' => '2-7, Kita 1-jo Nishi 27-chome, Chuo-ku, Sapporo, Hokkaido' ],
				[ 'label' => 'Access',   'value' => 'Sapporo Municipal Subway Tozai Line Maruyama Koen Station, Exit 1, 3 min. walk' ],
				[ 'label' => 'Tel',      'value' => '011-612-0068' ],
				[ 'label' => 'Fax',      'value' => '011-612-0086' ],
			],
			'hours' => [
				[ 'label' => 'Lunch',           'value' => '11:30am - 2:30pm' ],
				[ 'label' => 'Last orders at:', 'value' => '2:00pm' ],
				[ 'label' => 'Dinner',          'value' => '5:30pm - 9:30pm' ],
				[ 'label' => 'Last orders at:', 'value' => '9:00pm' ],
			],
			'closed'    => 'Tuesday and Wednesday',
			'seating'   => '12 seats at the counter, 11 seats at the counter, 7 seats at the counter (13 years old and over) / 2 private rooms (6 seats at tables) / 1 spacious room (16 seats at tables; however, consultation is possible for 20 to 27 persons)',
			'budget'    => '22,000 yen (regular average) 8,000 yen (lunch average) / per person',
			'parking'   => 'Yes, 4 cars (private)',
			'map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2915.2658658974433!2d141.31326327580953!3d43.056875590795435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0b29c18708a41f%3A0x61cdb1cde0f215fc!2z44GZ44GX5ZaEIOacrOW6lw!5e0!3m2!1sen!2sjp!4v1783048766155!5m2!1sen!2sjp',
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