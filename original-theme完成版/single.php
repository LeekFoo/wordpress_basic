<!-- 記事詳細ページ -->
<?php get_header(); ?>

<main>
    <section class="page-title">
        <div class="breadcrumbs d-none d-md-block">
        <?php if(function_exists('bcn_display')) {
            // パンくずリストを表示
            bcn_display();
        } ?>
        </div>
        <h1 class="main-title">
            <span class="date"><?php the_time( 'Y.m.d' ); ?></span>
            <?php the_title(); ?>
        </h1>
    </section>

    <section class="content">
        <div class="container row">
            <aside class="side-menu d-none d-md-block col-md-4">
                <ul>
                    <li><a href="#"><i class="fas fa-chevron-circle-right"></i>2020年</a></li>
                    <li><a href="#"><i class="fas fa-chevron-circle-right"></i>2019年</a></li>
                </ul>
                <div class="back-page">
                    <a href="<?php echo home_url('/category/news'); ?>">
                        <small><i class="fas fa-chevron-left"></i>お知らせ</small>
                    </a>
                </div>
            </aside>
            <div class="row col-12 col-md-8">
                <?php if ( have_posts() ) : while ( have_posts() ) :  the_post(); ?>
                    <?php the_content(); ?>
                    <?php wp_link_pages(); ?>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>