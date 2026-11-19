<?php

// ▶▶ テーマ内スクリプトのリスト（共通化）
function get_theme_scripts() {
    return [
        'init' => '/js/init.js',
        'animation' => '/js/animation.js',
    ];
}

// ▶▶ スクリプトをエンキューする
function enqueue_custom_scripts() {
    // 外部スクリプト（デフォルトでフッターで読み込む）
    $scripts = [
        'micromodal' => [
            'url' => 'https://cdn.jsdelivr.net/npm/micromodal/dist/micromodal.min.js',
            'depends' => ['jquery'],
            'option' => 'loadMicromodal',
            'header_option' => 'loadMicromodalHeader',
            'default' => true,
        ],
        'gsap' => [
            'url' => 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js',
            'depends' => [],
            'option' => 'loadGSAP',
            'header_option' => 'loadGSAPHeader',
            'default' => true,
        ],
        'gsap-scrolltrigger' => [
            'url' => 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js',
            'depends' => ['gsap'],
            'option' => 'loadGSAP',
            'header_option' => 'loadGSAPHeader',
            'default' => true,
        ],
        'swiper' => [
            'url' => 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
            'depends' => [],
            'option' => 'loadSwiper',
            'header_option' => 'loadSwiperHeader',
            'default' => true,
        ],
        'lightbox' => [
            'url' => 'https://cdn.jsdelivr.net/npm/lightbox2@2.11.3/dist/js/lightbox.min.js',
            'depends' => [],
            'option' => 'loadLightbox',
            'header_option' => 'loadLightboxHeader',
            'default' => true,
        ],
        'masonry' => [
            'url' => 'https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js',
            'depends' => [],
            'option' => 'loadMasonry',
            'header_option' => 'loadmasonryHeader',
            'default' => true,
        ],
        'lenis' => [
            'url' => 'https://unpkg.com/lenis@1.1.9/dist/lenis.min.js',
            'depends' => [],
            'option' => 'loadLenis',
            'header_option' => 'loadLenisHeader',
            'default' => true,
        ],
    ];

    foreach ($scripts as $handle => $data) {
        $should_load = get_theme_mod($data['option'], $data['default']);
        $in_header = get_theme_mod($data['header_option'], false);

        if ($should_load) {
            wp_enqueue_script($handle, $data['url'], $data['depends'], null, !$in_header);
        }
    }

    // Swiper のスタイルを追加
    if (get_theme_mod('loadSwiper', true)) {
        wp_enqueue_style('swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', [], null);
    }

    // Lightbox のスタイルを追加
    if (get_theme_mod('loadLightbox', true)) {
        wp_enqueue_style('lightbox-style', 'https://cdn.jsdelivr.net/npm/lightbox2@2.11.3/dist/css/lightbox.min.css', [], null);
    }

    // テーマ内のスクリプト（共通の定義を利用）
    $theme_scripts = get_theme_scripts();
    foreach ($theme_scripts as $handle => $path) {
        $in_header = get_theme_mod("load{$handle}Header", false);
        wp_enqueue_script($handle, get_template_directory_uri() . $path, [], null, !$in_header);
    }
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

// ▶▶ 外観 > カスタマイズからスクリプトのon / off、読み込み位置を変更する
function custom_theme_customizer($wp_customize) {
    $wp_customize->add_section('custom_js_settings', [
        'title' => 'スクリプト設定',
        'priority' => 30,
    ]);

    // 外部ライブラリ
    $scripts = ['Micromodal', 'GSAP', 'Swiper', 'Lightbox', 'Masonry', 'Lenis'];

    foreach ($scripts as $script) {
        $wp_customize->add_setting("load{$script}", [
            'default' => true,
            'sanitize_callback' => 'wp_validate_boolean',
        ]);
        $wp_customize->add_control("load{$script}", [
            'label' => "{$script} を読み込む",
            'section' => 'custom_js_settings',
            'type' => 'checkbox',
        ]);

        $wp_customize->add_setting("load{$script}Header", [
            'default' => false,
            'sanitize_callback' => 'wp_validate_boolean',
        ]);
        $wp_customize->add_control("load{$script}Header", [
            'label' => "{$script} をヘッダーで読み込む",
            'section' => 'custom_js_settings',
            'type' => 'checkbox',
        ]);
    }

    // テーマ内JS（共通の定義を利用）
    $theme_scripts = get_theme_scripts();
    foreach ($theme_scripts as $handle => $path) {
        $wp_customize->add_setting("load{$handle}Header", [
            'default' => false,
            'sanitize_callback' => 'wp_validate_boolean',
        ]);
        $wp_customize->add_control("load{$handle}Header", [
            'label' => "{$handle}.js をヘッダーで読み込む",
            'section' => 'custom_js_settings',
            'type' => 'checkbox',
        ]);
    }
}
add_action('customize_register', 'custom_theme_customizer');

// ▶▶ アイキャッチ画像のサポートを有効化する
add_theme_support('post-thumbnails');

// ▶▶ サイドバーを有効化する
function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => 'サイドバー',
        'id' => 'sidebar',
    ) );
}
add_action( 'widgets_init', 'theme_slug_widgets_init' );

// ▶▶ 「コメント」メニューを非表示にする
function custom_remove_menus(){
    remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'custom_remove_menus' );

// ▶▶ Google Fontsをエンキューする
add_action( 'wp_enqueue_scripts', 'add_google_fonts' );
function add_google_fonts() {
    wp_enqueue_style( 'add_google_fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', false );
}

// ▶▶ Fontawesomeを使用する
function my_enqueue_scripts() {
    // Font Awesome CDN
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css'
    );
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');
