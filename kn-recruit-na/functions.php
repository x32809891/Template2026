<?php

// 外部トップページURLを定義する
function top_page_url() {
  $top_page_url = '';
  return $top_page_url;
}

// アイキャッチ画像のサポートを有効化する
add_theme_support('post-thumbnails');

// サイドバーを有効化する
function theme_slug_widgets_init() {
  register_sidebar( array(
      'name' => 'サイドバー',
      'id' => 'sidebar',
  ) );
}
add_action( 'widgets_init', 'theme_slug_widgets_init' );

// コメントメニューを非表示にする
function custom_remove_menus(){
  remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'custom_remove_menus' );

// カスタム投稿*お知らせ(カテゴリーあり/タグなし)
add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type('news',
    array(
        'label' => '最新情報',
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'menu_position' => 5,
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'revisions',
        ),
    )
  );

  register_taxonomy(
    'news-cat',
    'news',
    array(
        'label' => 'カテゴリー',
        'hierarchical' => true,
        'public' => true,
        'show_in_rest' => true,
    )
  );
}

// ページネーションのデザインをカスタマイズする
function custom_paginate_links($args) {
  $args['prev_text'] = '<span class="custom-prev"></span>';
  $args['next_text'] = '<span class="custom-next"></span>';
  return $args;
}
add_filter('paginate_links_args', 'custom_paginate_links');

// All in one seo タイトルタグ反映（一時的）
add_action( 'after_setup_theme', function() {
	add_theme_support( 'title-tag' );
} );

?>