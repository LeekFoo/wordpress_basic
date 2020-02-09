<!-- header.php の読み込み -->
<?php get_header(); ?>

<!-- メインコンテンツ部分を記載していく -->
<main>
    <section class="catch">
        <div class="catch-inner">
            <div class="top-message">
                <h2 class="message-title">
                    もし今日が人生最後の日だとしたら、<br>
                    今やろうとしていることは<br>
                    本当に自分のやりたいことだろうか？
                </h2>
                <p>
                    とりあえずご飯を食べよう。<br>
                    話はそれからだ。
                </p>
            </div>
            <div class="top-slides">
                <div class="slide">
                    <img class="slide-img" src="http://wordpress.jack.co.jp/wp-content/uploads/2020/02/top_slider01.jpg" alt="スライド1">
                </div>
                <div class="slide">
                    <img class="slide-img" src="http://wordpress.jack.co.jp/wp-content/uploads/2020/02/top_slider02.jpg" alt="スライド2">
                </div>
            </div>
        </div>
    </section>
    <section class="top-news" data-aos="fade-up">
        <div class="container">
            <h2 class="sec-title">お知らせ</h2>
            <div class="row">
                <?php get_template_part('news-list'); ?>
            </div>
        </div>
    </section>
</main>

<!-- footer.php の読み込み -->
<?php get_footer(); ?>