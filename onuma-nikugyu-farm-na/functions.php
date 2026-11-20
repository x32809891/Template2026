<?php

//アイキャッチ画像を利用できるようにします。
add_theme_support('post-thumbnails');

//80文字の抜粋文
function custom_excerpt_length($length)
{
  return 80;  //表示したい文字数
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);

//抜粋文の文末を「…」に
function new_excerpt_more($more)
{
  return '…';
}
add_filter('excerpt_more', 'new_excerpt_more');

// ページネーション
function the_pagination() {
  global $wp_query;
  $big = 999999999;
  if ( $wp_query->max_num_pages <= 1 ) return;
  echo paginate_links( array(
    'base'         => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'format'       => '?paged=%#%',
    'current'      => max( 1, get_query_var('paged') ),
    'total'        => $wp_query->max_num_pages,
    'type'         => 'list',
    'end_size'     => 2,
    'mid_size'     => 2,
    'prev_text'    => '←',
    'next_text'    => '→',
  ) );
}

//サイドバー  ウィジェット追加
register_sidebar(array(
  'name' => 'サイドバー',
  'id' => 'primary-widget-area',
  'before_widget' => '<aside id="%1$s" class="widget-container %2$s">',
  'after_widget' => '</aside>',
  'before_title' => '<h2 class="widget-container_title">',
  'after_title' => '</h2>'
));

//サイドバー　アーカイブの数をaタグ内に
add_filter('get_archives_link', 'my_archives_link');
function my_archives_link($output)
{
  $output = preg_replace('/<\/a>\s*(&nbsp;)\((\d+)\)/', ' ($2)</a>', $output);
  return $output;
}

//サイドバー　カテゴリーの数をaタグ内に
add_filter('wp_list_categories', 'my_list_categories');
function my_list_categories($output)
{
  $output = preg_replace('/<\/a>\s*\((\d+)\)/', ' ($1)</a>', $output);
  return $output;
}

// GSAP(ギャラリーページのみ)
function enqueue_gallery_assets() {
  if ( is_page_template('page-gallery.php') || is_page('gallery') ) {
    wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js', [], null, true);
  }
}
add_action('wp_enqueue_scripts', 'enqueue_gallery_assets');

// 404ページ タイトル調整
add_action('template_redirect', function () {
    if (is_404()) {
        ob_start(function ($html) {
            return preg_replace(
                '/<title>\s*<\/title>/i',
                '<title>ページが見つかりません | ' . get_bloginfo('name') . '</title>',
                $html,
                1
            );
        });
    }
});