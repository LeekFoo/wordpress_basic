<?php get_header(); ?>
<!-- 記事一覧ページ -->
<main>
    <section class="page-title">
        <div class="breadcrumbs d-none d-md-block">
            <?php if(function_exists('bcn_display')) {
                // パンくずリストを表示
                bcn_display();
            } ?>
        </div>
        <h1 class="main-title">
        <?php the_archive_title(); ?>
        </h1>
    </section>

    <section class="content" data-aos="fade-up">
        <div class="container row">
            <aside class="side-menu d-none d-md-block col-md-4">
                <ul>
                    <li><a href="#"><i class="fas fa-chevron-circle-right"></i>2020年</a></li>
                    <li><a href="#"><i class="fas fa-chevron-circle-right"></i>2019年</a></li>
                </ul>
            </aside>
            <div class="row col-12 col-md-8">
                <?php get_template_part('news-list'); ?>
            </div>
    </section>
</main>
<?php get_footer(); ?>