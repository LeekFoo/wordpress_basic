<?php
/**
 * CSS,JSの読み込み
 */
if (!function_exists('my_load_files')) {
    function my_load_files() {
      $my_theme = wp_get_theme();
      $my_theme_ver = $my_theme->Version;

      // CSSの読み込み
      wp_enqueue_style('bootstrap4', '//stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1');
      wp_enqueue_style('slick', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css', array(), '1.9.0');
      wp_enqueue_style('slick-theme', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css', array(), '1.9.0');
      wp_enqueue_style('aos', '//cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css', array(), '2.3.4');
      wp_enqueue_style('my-fa5', '//use.fontawesome.com/releases/v5.6.3/css/all.css', array(), '5.6.3');
      wp_enqueue_style('style', get_template_directory_uri(). '/style.css', array(), $my_theme_ver);

        // JavaScriptの読み込み
        wp_enqueue_script('bootstrap-js', '//stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array('jquery'));
        wp_enqueue_script('slick-js', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array('jquery'));
        wp_enqueue_script('aos-js', '//cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js', array('jquery') );
        wp_enqueue_script('custom-js', get_template_directory_uri(). '/js/custom.js', array('jquery', 'slick-js', 'aos-js'), $my_theme_ver);


        // WP側で読み込まれているjQueryを読み込まず、独自に読み込む
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), '3.4.1');
    }
}
  add_action( 'wp_enqueue_scripts', 'my_load_files' );

/**
 * メニューの設定
 */
if ( !function_exists( 'my_setup_nav' ) ) {
    function my_setup_nav() {
      register_nav_menus( array(
        'global'  => 'グローバルナビ'
      ) );
    }
  }
  add_action( 'after_setup_theme', 'my_setup_nav' );

/**
 * アイキャッチ画像をサポートするように追加
 */
  add_theme_support('post-thumbnails');

/**
 * 自動でtitleタグを挿入するよう追加
 */
add_theme_support( 'title-tag' );

/**
 * タグ中に直接サイズ指定されている部分を削除する関数
 */
function custom_attribute( $html ){
    // width height を削除する
    $html = preg_replace('/(width|height)="\d*"\s/', '', $html);
    return $html;
}
add_filter( 'post_thumbnail_html', 'custom_attribute' );

/* the_archive_title 余計な文字を削除 */
add_filter( 'get_the_archive_title', function ($title) {
  if (is_category()) {
      $title = single_cat_title('',false);
  } elseif (is_tag()) {
      $title = single_tag_title('',false);
} elseif (is_tax()) {
    $title = single_term_title('',false);
} elseif (is_post_type_archive() ){
  $title = post_type_archive_title('',false);
} elseif (is_date()) {
    $title = get_the_time('Y年n月');
} elseif (is_search()) {
    $title = '検索結果：'.esc_html( get_search_query(false) );
} elseif (is_404()) {
    $title = '「404」ページが見つかりません';
} else {

}
  return $title;
});