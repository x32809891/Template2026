<?php get_header(); ?>
<?php get_template_part('template-parts/gnav'); ?>

<main class="l-main">
    <div class="l-container">

        <!-- main-visual -->
        <section class="l-main-visual">
            <?php
            get_template_part('template-parts/main-visual', null, [
                'videoPc' => get_template_directory_uri() . '/video/movie_pc.mp4',
                'videoSp' => get_template_directory_uri() . '/video/movie_sp.mp4',
                'poster'  => get_template_directory_uri() . '/video/poster.jpg',
                'texts' => [
                    'From Sapporo, Hokkaido to Ginza, Tokyo.',
                    'At Sushizen, our omotenashi is the art of care, skill, and soul.',
                ],
                'scrollText' => '(scroll)',
                'currentLang' => 'en',
                'jpUrl'       => 'https://sushizen.co.jp/',
                'enUrl'       => home_url('/'),
            ]);
            ?>
        </section>

        <!-- contents0 / profile -->
        <section class="l-contents0">
            <?php
            get_template_part('template-parts/contents0', null, [
                'image' => get_template_directory_uri() . '/img/front-page/top_contents0-0.jpg',
                'imageAlt' => 'Tsutomu Shimamiya',
                'name' => 'Tsutomu Shimamiya',
                'profile' => 'He is a master craftsman of the highest order. 
                One of the few artisans in Japan to have received all three of the country\'s most prestigious honors for his craft.
                Sushizen\'s Edomae sushi reflects years of discipline and a deep respect for tradition.
                In every piece, the chef\'s craftsmanship and devotion come together to create an extraordinary dining experience.
                ',
                'awardTitle' => '（Honors and Awards）',
                'awards' => [
                    '2008 – Contemporary Master Craftsman',
                    '2011 – Medal with Yellow Ribbon',
                    '2024 – Order of the Rising Sun, Gold and Silver Rays',
                ],
            ]);
            ?>
        </section>

        <!-- contents1-4 / history -->
        <section class="l-contents1-4">
            <?php
            get_template_part('template-parts/contents1-4', null, [
                'items' => [
                    [
                        'image'    => get_template_directory_uri() . '/img/front-page/top_contents1.jpg',
                        'image_sp' => get_template_directory_uri() . '/img/front-page/top_contents1_sp.jpg',
                        'num'      => '1/4',
                        'title'    => 'The Origins of Edomae Sushi',
                        'text'     => 'The origins of Edomae sushi trace back to the late Edo period in Ryogoku, where Hanaya Yohei devised "nigiri sushi". Edomae sushi developed as a way to serve raw fish both deliciously and safely.
                        Since the Meiji era, it has evolved into a refined culinary experience, enjoyed at the counter while watching the chef\'s craftsmanship.',
                        'text_sp'  => 'With Edomae sushi, guests have the opportunity to savor both the chef\'s craftsmanship and an exceptional culinary experience at the counter.',
                    ],
                    [
                        'image'    => get_template_directory_uri() . '/img/front-page/top_contents2.jpg',
                        'image_sp' => get_template_directory_uri() . '/img/front-page/top_contents2_sp.jpg',
                        'num'      => '2/4',
                        'title'    => 'Rooted in Japanese Culinary Tradition',
                        'text'     => 'Sushizen\'s Edomae preparation methods
                        —marinating, pickling, simmering, and grilling
                        These are classic Japanese techniques that bring out each ingredient\'s natural umami.',
                        'text_sp'  => 'Marinating, pickling, simmering, and grilling
                        These are classic Japanese cooking and preparatory techniques that bring out each ingredient\'s natural umami.',
                    ],
                    [
                        'image'    => get_template_directory_uri() . '/img/front-page/top_contents3.jpg',
                        'image_sp' => get_template_directory_uri() . '/img/front-page/top_contents3_sp.jpg',
                        'num'      => '3/4',
                        'title'    => 'The Foundation of Sushi',
                        'text'     => 'The sushi rice, which determines the flavor of the sushi, plays a crucial role as the foundation of the sushi. 
                        A single piece of nigiri requires a fusion of topping and sushi rice that is simple yet rich in depth.',
                        'text_sp'  => 'A single piece of nigiri requires a fusion of topping and sushi rice that is simple yet rich in depth.',
                    ],
                    [
                        'image'    => get_template_directory_uri() . '/img/front-page/top_contents4.jpg',
                        'image_sp' => get_template_directory_uri() . '/img/front-page/top_contents4_sp.jpg',
                        'num'      => '4/4',
                        'title'    => 'The Magic of Japanese Broth',
                        'text'     => 'For international customers, dashi is truly a “magical broth” that adds astonishing depth and richness to Japanese cuisine.
                        Japan’s dashi culture and preparation techniques are now attracting attention around the world.',
                        'text_sp'  => 'Dashi is truly a “magical broth” that adds astonishing depth and richness to Japanese cuisine.',
                    ],
                ],
            ]);
            ?>
        </section>

        <!-- contents5 / restaurant list -->
        <section class="l-contents5" id="restaurant-list">
            <?php
            get_template_part('template-parts/contents5', null, [
                'shops' => [
                    [
                        'id'         => 'honten',
                        'tab'        => 'honten',
                        'name'       => 'honten',
                        'area'       => 'hokkaido',
                        'address'    => '2-7, Kita 1-jo Nishi 27-chome, Chuo-ku, Sapporo, Hokkaido',
                        'mapUrl'     => 'https://maps.app.goo.gl/fnfvsyX4mCuHH5sb9',
                        'text'       => 'Sushizen Honten is nestled in Maruyama, a setting that gracefully reflects the four distinct seasons of northern Japan. The restaurant features three counter seats, two private rooms, and a hall, each thoughtfully appointed in a serene and tranquil atmosphere. We warmly welcome you to select your preferred seat and experience the refined flavors and heartfelt hospitality that define Sushizen.',
                        'detailsUrl' => 'https://sushizen.co.jp/en/restaurants/honten/',
                        'reserveUrl' => 'https://sushizen-reserve.com/rsv_en/honten/',
                        'hours'      => [
                            [ 'label' => 'Lunch',           'value' => '11:30am - 2:30pm' ],
                            [ 'label' => 'Last orders at:', 'value' => '2:00pm' ],
                            [ 'label' => 'Dinner',          'value' => '5:30pm - 9:30pm' ],
                            [ 'label' => 'Last orders at:', 'value' => '9:00pm' ],
                        ],
                        'closed'     => 'Tuesday and Wednesday',
                        'images' => [
                            [
                                'src' => get_template_directory_uri() . '/img/front-page/top_contents5-1-1.jpg',
                                'alt' => 'sushizen honten outside',
                            ],
                            [
                                'src' => get_template_directory_uri() . '/img/front-page/top_contents5-1-2.jpg',
                                'alt' => 'sushizen honten inside',
                            ],
                            [
                                'src' => get_template_directory_uri() . '/img/front-page/top_contents5-1-3.jpg',
                                'alt' => 'sushizen honten inside',
                            ],
                        ],
                    ],
                    [
                        'id'       => 'susukino',
                        'tab'      => 'susukino',
                        'name'     => 'susukino',
                        'area'     => 'hokkaido',
                        'address'  => '1F TSUMUGI Bldg. 10-1, Minami 4-jo Nishi 5-chome, Chuo-ku, Sapporo, Hokkaido',
                        'mapUrl'     => 'https://maps.app.goo.gl/hoWLMZGuoiSNyFJw6',
                        'text'     => 'At Sushizen Susukino, we are dedicated to serving
                        first-class sushi crafted with genuine care and refined
                        technique. Situated in the southern part of Susukino, Sapporo\'s
                        celebrated nightlife district, our flagship restaurant
                        occupies a spacious and elegantly appointed Japanese
                        dining room.
                        We humbly invite you to choose your preferred seat and
                        allow yourself to be immersed in a dining experience that
                        lingers long in the memory.',
                        'detailsUrl' => 'https://sushizen.co.jp/en/restaurants/susukino/',
                        'reserveUrl' => 'https://sushizen-reserve.com/rsv_en/susukino/',
                        'hours'      => [
                            [ 'label' => 'Dinner',          'value' => '5:00pm - 11:00pm' ],
                            [ 'label' => 'Last orders at:', 'value' => '10:30pm' ],
                        ],
                        'closed'     => 'Sunday and Monday',
                        'images' => [
                            [
                                'src' => get_template_directory_uri() . '/img/front-page/top_contents5-2-1.jpg',
                                'alt' => 'sushizen susukino outside',
                            ],
                            [
                                'src' => get_template_directory_uri() . '/img/front-page/top_contents5-2-2.jpg',
                                'alt' => 'sushizen susukino inside',
                            ],
                        ],
                    ],
                    [
                        'id'       => 'ginza',
                        'tab'      => 'ginza',
                        'name'     => 'ginza',
                        'area'     => 'tokyo',
                        'address'  => 'B1F FUKUHARA GINZA Bldg. 7-8-10 Ginza, Chuo-ku, Tokyo',
                        'mapUrl'     => 'https://maps.app.goo.gl/DTKPfRhaqiuSga5Y8',
                        'text'     => 'In the heart of Tokyo, where cherished traditions endure alongside the finest establishments from around the
                        world, Sushizen extends its signature hospitality with
                        heart and technique.
                        Our Ginza branch is located on the first basement floor of
                        FUKUHARA GINZA in Ginza 7-chome, a distinguished
                        address where guests from every corner of the globe are
                        warmly welcomed in the true spirit of Japanese
                        hospitality.
                        We take great pride in offering a carefully curated
                        selection of the finest seafood sourced from across Japan,
                        inviting you to savor the exquisite taste of sushi at your
                        leisure.',
                        'detailsUrl' => 'https://sushizen.co.jp/en/restaurants/ginza/',
                        'reserveUrl' => 'https://sushizen-reserve.com/rsv_en/ginza/',
                        'hours'      => [
                            [ 'label' => 'Lunch',           'value' => '11:00am - 2:30pm' ],
                            [ 'label' => 'Last orders at:', 'value' => '2:00pm' ],
                            [ 'label' => 'Dinner',          'value' => '5:00pm - 10:30pm' ],
                            [ 'label' => 'Last orders at:', 'value' => '10:00pm' ],
                        ],
                        'closed'     => 'Sunday and Monday',
                        'images' => [
                            [
                                'src' => get_template_directory_uri() . '/img/front-page/top_contents5-3-1.jpg',
                                'alt' => 'sushizen ginza outside',
                            ],
                            [
                                'src' => get_template_directory_uri() . '/img/front-page/top_contents5-3-2.jpg',
                                'alt' => 'sushizen ginza inside',
                            ],

                        ],
                    ],
                ],
            ]);
            ?>
        </section>

        <!-- contents-news -->
        <section class="l-contents-news">
            <?php
            get_template_part('template-parts/contents-news', null, [
                'title'        => 'news',
                'postsPerPage' => 3,
                'viewAllLabel' => 'view news list',
            ]);
            ?>
        </section>

        <!-- contents-gallery -->
        <section class="l-contents-gallery">
            <?php
            get_template_part('template-parts/contents-gallery', null, [
                'title'        => 'gallery',
                'postsPerPage' => 8,
                'viewAllLabel' => 'view gallery list',
            ]);
            ?>
        </section>
    </div>
</main>

<?php get_template_part('template-parts/footer'); ?>