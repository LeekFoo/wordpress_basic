<?php
    $arg = array(
            // 'posts_per_page' => 4, // 表示する件数
            'orderby' => 'date', // 日付でソート
            'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
            'category_name' => 'news' // 表示したいカテゴリーのスラッグを指定
            );
    $posts = get_posts( $arg );

    // echo var_export($posts, true);
    if( $posts ):
?>
<?php
    foreach ( $posts as $post ) :
        setup_postdata( $post );
?>
        <div class="news col-6 col-md-3">
            <a href="<?php the_permalink(); ?>">
                <?php if (has_post_thumbnail()) : ?>
                    <?php custom_attribute(the_post_thumbnail('medium', ['class' => "news-img",])); ?>
                <?php else : ?>
                    <img class="news-img" src="<?php echo get_template_directory_uri(); ?>/img/no-image.png"　alt="<?php the_title(); ?>" />
                <?php endif ; ?>
                <h3 class="news-title"><?php the_title(); ?></h3>
                <div class="news-cate">プレスリリース</div>
                <dvi class="news-date"><?php the_time( 'Y.m.d' ); ?></dvi>
            </a>
        </div>

    <?php endforeach; ?>
<?php
  endif;
  wp_reset_postdata();
?>

