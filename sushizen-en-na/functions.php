<?php
// ▶▶ テーマ内スクリプトのリスト（共通化）
function get_theme_scripts() {
    return [

        'loader' => [
            'path'    => '/js/loader.js',
            'depends' => [],
        ],

        'theme-common' => [
            'path'    => '/js/theme-common.js',
            'depends' => [ 'gsap', 'gsap-scrolltrigger', 'lenis' ],
        ],

        'animation' => [
            'path'    => '/js/animation.js',
            'depends' => [ 'gsap', 'gsap-scrolltrigger', 'gsap-splittext' ],
        ],

        'components' => [
            'path'    => '/js/components.js',
            'depends' => [ 'gsap', 'gsap-scrolltrigger' ],
        ],

        'front-page' => [
            'path'    => '/js/front-page.js',
            'depends' => [ 'gsap', 'gsap-scrolltrigger' ],
        ],

        'sub-page' => [
            'path'    => '/js/sub-page.js',
            'depends' => [ 'gsap', 'gsap-scrolltrigger' ],
        ],

    ];
}

// ▶▶ スクリプトをエンキューする
function enqueue_custom_scripts() {
    $scripts = [
        'micromodal' => [
            'url' => 'https://cdn.jsdelivr.net/npm/micromodal/dist/micromodal.min.js',
            'depends' => ['jquery'],
            'option' => 'loadMicromodal',
            'header_option' => 'loadMicromodalHeader',
            'default' => true,
        ],
        'gsap' => [
            'url' => 'https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js',
            'depends' => [],
            'option' => 'loadGSAP',
            'header_option' => 'loadGSAPHeader',
            'default' => true,
        ],
        'gsap-scrolltrigger' => [
            'url' => 'https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js',
            'depends' => ['gsap'],
            'option' => 'loadGSAP',
            'header_option' => 'loadGSAPHeader',
            'default' => true,
        ],
        'gsap-splittext' => [
            'url' => 'https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/SplitText.min.js',
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
            'url' => 'https://unpkg.com/lenis@1.3.25/dist/lenis.min.js',
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

    // Lenis のスタイルを追加
    if (get_theme_mod('loadLenis', true)) {
        wp_enqueue_style('lenis-style', 'https://unpkg.com/lenis@1.3.25/dist/lenis.css', [], null);
    }

    // テーマ内のスクリプト（共通の定義を利用、依存関係つき）
    $theme_scripts = get_theme_scripts();
    foreach ($theme_scripts as $handle => $data) {
        $in_header = get_theme_mod("load{$handle}Header", false);
        wp_enqueue_script(
            $handle,
            get_template_directory_uri() . $data['path'],
            $data['depends'],
            null,
            !$in_header
        );
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
    foreach ($theme_scripts as $handle => $data) {
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

// ▶▶ 外観 > メニューにカスタムメニューを追加する
function register_my_menu() {
    register_nav_menus(array(
        'header-menu' => 'Header-menu',
        'modal-menu' => 'Modal-menu',
        'footer-menu1' => 'Footer-menu1',
        'footer-menu2' => 'Footer-menu2',
        'footer-menu3' => 'Footer-menu3',
        'footer-menu4' => 'Footer-menu4',
        'extend-menu' => 'Extend-menu',
        'social-menu' => 'Social-menu',
    ));
}
add_action( 'init', 'register_my_menu' );

// ▶▶ news / gallery archiveのメインクエリ調整
add_action( 'pre_get_posts', function ( $query ) {
    if ( is_admin() || ! $query->is_main_query() ) {
        return;
    }
    if ( is_post_type_archive( 'news' ) ) {
        $query->set( 'posts_per_page', 12 );
        $query->set( 'orderby', 'date' );
        $query->set( 'order', 'DESC' );
    }
    if ( is_home() ) {
        $query->set( 'posts_per_page', 12 );
        $query->set( 'orderby', 'date' );
        $query->set( 'order', 'DESC' );
    }
} );

// ▶▶ 外観 > メニューに登録されたタームへのリンクURLに「?post_type=*」パラメータを追加する
class Term_Url_Walker extends Walker_Nav_Menu {
    function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        // タームのリンクであれば、パラメータを付与
        if (in_array('menu-item-type-taxonomy', $item->classes)) {
            $url = $item->url;

            $term = get_term_by('id', $item->object_id, $item->object);

            if ($term) {
                // タームの投稿タイプを取得
                $post_type = get_taxonomy($term->taxonomy)->object_type;
                $post_type = is_array($post_type) ? $post_type[0] : $post_type; // 配列の場合、最初の要素を取得

                // post_type が 'post'（デフォルトの投稿）でない場合のみパラメータを付与
                if ($post_type !== 'post') {
                    $url = add_query_arg('post_type', $post_type, $url);
                }

                $item->url = $url;
            }
        }

        // 親クラスの処理を呼び出し (URLが更新された状態でリンクが出力される)
        parent::start_el( $output, $item, $depth, $args, $id );
    }
}

// ▶▶ 外観 > メニューにSNS名を入れることでsvgを出力する
class SNS_Icon_Walker extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth=0, $args=array(), $id = 0) {
        $icon = $item->title; // メニューのリンクテキストをアイコン名として使用
        $url = $item->url;
        $target = !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';

        $output .= "<li>";
        $output .= "<a href=\"$url\" class=\"svg-icon__sns-link svg-icon__sns-link--$icon\"$target>";

        // SVGアイコンのコード（省略せずにそのまま残す）
        if ($icon == 'facebook') {
            $output .= "<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-facebook\" width=\"20\" height=\"20\" fill=\"#000000\" viewBox=\"0 0 256 256\" aria-label=\"facebookのアイコン\"><path d=\"M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm8,191.63V152h24a8,8,0,0,0,0-16H136V112a16,16,0,0,1,16-16h16a8,8,0,0,0,0-16H152a32,32,0,0,0-32,32v24H96a8,8,0,0,0,0,16h24v63.63a88,88,0,1,1,16,0Z\"></path></svg>";
        } elseif ($icon == 'x') {
            $output .= "<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-x\" width=\"20\" height=\"20\" fill=\"#000000\" viewBox=\"0 0 256 256\" aria-label=\"xのアイコン\"><path d=\"M214.75,211.71l-62.6-98.38,61.77-67.95a8,8,0,0,0-11.84-10.76L143.24,99.34,102.75,35.71A8,8,0,0,0,96,32H48a8,8,0,0,0-6.75,12.3l62.6,98.37-61.77,68a8,8,0,1,0,11.84,10.76l58.84-64.72,40.49,63.63A8,8,0,0,0,160,224h48a8,8,0,0,0,6.75-12.29ZM164.39,208,62.57,48h29L193.43,208Z\"></path></svg>";
        } elseif ($icon == 'instagram') {
            $output .= "<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-instagram\" width=\"20\" height=\"20\" fill=\"#000000\" viewBox=\"0 0 256 256\" aria-label=\"instagramのアイコン\"><path d=\"M128,80a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160ZM176,24H80A56.06,56.06,0,0,0,24,80v96a56.06,56.06,0,0,0,56,56h96a56.06,56.06,0,0,0,56-56V80A56.06,56.06,0,0,0,176,24Zm40,152a40,40,0,0,1-40,40H80a40,40,0,0,1-40-40V80A40,40,0,0,1,80,40h96a40,40,0,0,1,40,40ZM192,76a12,12,0,1,1-12-12A12,12,0,0,1,192,76Z\"></path></svg>";
        } elseif ($icon == 'youtube') {
            $output .= "<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-youtube\" width=\"20\" height=\"20\" fill=\"#000000\" viewBox=\"0 0 256 256\" aria-label=\"youtubeのアイコン\"><path d=\"M164.44,121.34l-48-32A8,8,0,0,0,104,96v64a8,8,0,0,0,12.44,6.66l48-32a8,8,0,0,0,0-13.32ZM120,145.05V111l25.58,17ZM234.33,69.52a24,24,0,0,0-14.49-16.4C185.56,39.88,131,40,128,40s-57.56-.12-91.84,13.12a24,24,0,0,0-14.49,16.4C19.08,79.5,16,97.74,16,128s3.08,48.5,5.67,58.48a24,24,0,0,0,14.49,16.41C69,215.56,120.4,216,127.34,216h1.32c6.94,0,58.37-.44,91.18-13.11a24,24,0,0,0,14.49-16.41c2.59-10,5.67-28.22,5.67-58.48S236.92,79.5,234.33,69.52Zm-15.49,113a8,8,0,0,1-4.77,5.49c-31.65,12.22-85.48,12-86,12H128c-.54,0-54.33.2-86-12a8,8,0,0,1-4.77-5.49C34.8,173.39,32,156.57,32,128s2.8-45.39,5.16-54.47A8,8,0,0,1,41.93,68c30.52-11.79,81.66-12,85.85-12h.27c.54,0,54.38-.18,86,12a8,8,0,0,1,4.77,5.49C221.2,82.61,224,99.43,224,128S221.2,173.39,218.84,182.47Z\"></path></svg>";
        }

        $output .= "</a>";
        $output .= "</li>";
    }
}

// ▶▶ 外観 > メニューの説明文をlink_beforeとして出力する
function prefix_nav_description( $item_output, $item, $depth, $args ) {
    if ( ! empty( $item->description ) ) {
        $item_output = str_replace(
            '">' . $args->link_before . $item->title,
            '">' . '<span class="menu-item-description">' . esc_html( $item->description ) . '</span>' . $args->link_before . $item->title,
            $item_output
        );
    }
    return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'prefix_nav_description', 10, 4 );

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
    wp_enqueue_style( 'add_google_fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap', false );
}

// デフォルト投稿のメニュー名の表示を変更する
function change_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Gallery'; // メニュー名
    $submenu['edit.php'][5][0] = 'Gallery';
    $submenu['edit.php'][10][0] = '新規Galleryを追加';
}
add_action('admin_menu', 'change_post_label');

function change_post_object_label() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Gallery';
    $labels->singular_name = 'Gallery';
    $labels->add_new = '新規追加';
    $labels->add_new_item = '新規Galleryを追加';
    $labels->edit_item = 'Galleryを編集';
    $labels->all_items = 'Gallery一覧';
}
add_action('init', 'change_post_object_label');

// ▶▶ 投稿の「抜粋」を許可する
add_post_type_support( 'restaurants', 'excerpt' );

// ▶▶ お問い合わせフォームのメールアドレスの一致を設定する
add_filter('wpcf7_validate_email*', 'sushizen_validate_email_match', 20, 2);
function sushizen_validate_email_match($result, $tag) {
    if ('your-confirm-email' === $tag->name) {
        $email   = isset($_POST['your-email']) ? trim($_POST['your-email']) : '';
        $confirm = isset($_POST['your-confirm-email']) ? trim($_POST['your-confirm-email']) : '';

        if ($email !== $confirm) {
            $result->invalidate($tag, 'The confirmation email addresses do not match.');
        }
    }
    return $result;
}