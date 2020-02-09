<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?> RSS Feed" href="<?php bloginfo( 'rss2_url' ); ?>">
<?php wp_head(); ?>
</head>
<?php
  $addHeaderClass = "";
  if(! is_home()) {
    $addHeaderClass = "bg-white";
  }
?>

<body <?php body_class(); ?>>
    <header class="site-head <?php echo $addHeaderClass; ?>">
        <div class="site-title">
            <h1>
                <a href="<?php echo get_home_url(); ?>"><?php bloginfo('name'); ?></a>
            </h1>
        </div>
        <nav>
            <?php
              if( has_nav_menu( 'global' ) ) {
                wp_nav_menu( array(
                  'theme_location' => 'global',
                  'menu_class'      => 'global-nav__list',
                  'container'      => 'nav',
                  'container_class'=> 'global-nav',
                  'depth'          => 1,
                ) );
              }
            ?>
            <div class="contact-btn">
                <a class="" href="<?php echo home_url('/contact'); ?>">お問合せ</a>
            </div>
            <div class="navToggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </header>