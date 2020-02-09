<!-- 記事一覧 -->
<?php
    // 記事を取得するための条件を指定
    $searchArg = array(
            'posts_per_page' => 4, // 表示する件数
            'orderby' => 'date', // 日付でソート
            'order' => 'DESC', // DESCで新しいものから表示、ASCで古いものから表示
            'category_name' => 'news' // 表示したいカテゴリーのスラッグを指定
            );
    // カテゴリが「お知らせ」となっている記事を取得
    // 「get_posts」関数については詳しくは下記URLを参照してください
    // https://wpdocs.osdn.jp/%E3%83%86%E3%83%B3%E3%83%97%E3%83%AC%E3%83%BC%E3%83%88%E3%82%BF%E3%82%B0/get_posts
    $posts = get_posts( $searchArg );

    if( $posts ):
        // 記事が投稿されている場合のみ、ここから下の処理を実行する
?>
<?php
    foreach ( $posts as $post ) :
        setup_postdata( $post );
?>
<!-- TODO 取得してきた記事を表示 -->
<?php endforeach; ?>
<?php
  endif;
  wp_reset_postdata();
?>

