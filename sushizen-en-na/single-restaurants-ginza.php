<?php get_header(); ?>
<?php get_template_part( 'template-parts/gnav' ); ?>

<!-- page-header -->
<div class="l-page-header">
	<div class="page-header__container">
		<div class="page-header__img">
			<div class="page-header__img--pc">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/img/header/header_ginza.jpg' ); ?>" alt="header ginza">
			</div>
		</div>
		<div class="page-header__ttl"><h2>ginza</h2></div>
	</div>
</div>

<div class="l-page-body js-cover-up" data-trigger=".l-page-header">

	<!-- breadcrumb -->
	<div class="l-breadcrumb">
		<div class="breadcrumb__container">
			<ul>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">top</a></li>
				<li><p>restaurant list</p></li>
				<li><p>ginza</p></li>
			</ul>
		</div>
	</div>

	<!-- ** from template-parts / restaurant-detail.php ** -->
	<!-- contents / ginza -->
	<?php
	$restaurant_data = [
		// contents1 / concept
		'concept' => [
			'img_left'  => get_template_directory_uri() . '/img/sub-page/ginza/ginza-img2.jpg',
			'img_right' => get_template_directory_uri() . '/img/sub-page/ginza/ginza-img1.jpg',
			'heading'   => 'A World of Flavor 
			in the Heart of Tokyo',
			'text'      => 'In the heart of Tokyo, where cherished traditions endure alongside the finest establishments from around the world, Sushizen extends its signature hospitality with heart and technique. <br>Our Ginza branch is located on the first basement floor of FUKUHARA GINZA in Ginza 7-chome, a distinguished address where guests from every corner of the globe are warmly welcomed in the true spirit of Japanese hospitality. <br>We take great pride in offering a carefully curated selection of the finest seafood sourced from across Japan, inviting you to savor the exquisite taste of sushi at your leisure.',
			'slides'    => [
				get_template_directory_uri() . '/img/sub-page/ginza/ginza-slide1.jpg',
				get_template_directory_uri() . '/img/sub-page/ginza/ginza-slide2.jpg',
				get_template_directory_uri() . '/img/sub-page/ginza/ginza-slide3.jpg',
			],
		],
		// contents2 / menu
		'menu' => [
			'notes'   => '*Tax Inclusive<br>*Another 10% service charge will be added to your bill.<br>*Opening hours : 11:00am-2:30pm, 5:00pm-10:30pm (last order 2:00pm, 10:00pm)<br>*Please order at least one menu per person.We don’t allow sharing of food.',
			'menus' => [
				[
					'label' => 'Course',
					'courses' => [
						[
							'name'  => 'Course "Yui"',
							'desc'  => 'Appetizer / Sashimi (3 kinds) / Small dishes (2 kinds) / Hairy crab / Delicacies / Nigiri (10 pieces) / Torotaku roll / Soup / Dessert',
							'price' => '¥33,000',
						],
						[
							'name'  => 'Course "Takumi"',
							'desc'  => 'Appetizer / Nigiri (13 pieces) / Tamago / Torotaku roll / Soup / Dessert',
							'price' => '¥22,000',
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
							'price' => '¥38,500~',
						],
					],
				],
				[
					'label' => 'Lunch',
					'courses' => [
						[
							'name'  => 'Course "Kotobuki"',
							'desc'  => 'Small dish / Nigiri (12 pieces) / Rolled sushi / Soup / Dessert',
							'price' => '¥11,000',
						],
						[
							'name'  => 'Course "Roku"',
							'desc'  => 'Small dish / Nigiri (10 pieces) / Soup / Dessert',
							'price' => '¥7,700',
						],
					],
				],
			],
			'img'         => get_template_directory_uri() . '/img/sub-page/ginza/ginza-menu.jpg',
			'reserve_url' => 'https://sushizen-reserve.com/rsv_en/ginza/',
			'detail_url'  => 'https://sushizen.co.jp/en/restaurants/ginza/#summary',
		],
		// contents3 / details
		'details' => [
			'title' => 'ginza',
			'info'  => [
				[ 'label' => 'Location', 'value' => 'B1F FUKUHARA GINZA Bldg. 7-8-10 Ginza, Chuo-ku, Tokyo' ],
				[ 'label' => 'Access',   'value' => '5 minutes walk from JR Shinbashi Station / 5 minutes walk from Toei Asakusa Line Shinbashi Station' ],
				[ 'label' => 'Tel',      'value' => '03-3569-0068' ],
				[ 'label' => 'Fax',      'value' => '03-3569-0066' ],
			],
			'hours' => [
				[ 'label' => 'Lunch',           'value' => '11:00am - 2:30pm' ],
				[ 'label' => 'Last orders at:', 'value' => '2:00pm' ],
				[ 'label' => 'Dinner',          'value' => '5:00pm - 10:30pm' ],
				[ 'label' => 'Last orders at:', 'value' => '10:00pm' ],
			],
			'closed'    => 'Sunday and Monday',
			'seating'   => '13 seats at the counter / 9 seats at the counter / 22 seats in total',
			'budget'    => '25,000 yen (regular average) 8,000 yen (lunch average) / per person',
			'map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.331757156789!2d139.759462075456!3d35.66883233065548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bc2d1df3603%3A0x22ae845179f5cbeb!2z44GZ44GX5ZaE!5e0!3m2!1sen!2sjp!4v1783303318380!5m2!1sen!2sjp',
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