<!-- 固定ページ -->
<?php get_header(); ?>

<main <?php post_class(); ?>>
<?php if ( have_posts() ) : while ( have_posts() ) :  the_post(); ?>
    <section class="page-title">
        <div class="breadcrumbs d-none d-md-block">
            <?php if(function_exists('bcn_display')) {
                // パンくずリストを表示
                bcn_display();
            } ?>
        </div>
        <h1 class="main-title">
            <?php the_title(); ?>
        </h1>
    </section>

    <section class="content">
        <div class="container">
            <div class="" data-aos="fade-up">
                <?php the_content(); ?>
            </div>
        </div>
    </section>
<?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>