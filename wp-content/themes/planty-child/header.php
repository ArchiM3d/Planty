<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Planty
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
 <meta charset="<?php bloginfo('charset'); ?>">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="profile" href="https://gmpg.org/xfn/11">

 <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
 <?php wp_body_open(); ?>
 <div id="page" class="site">
  <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'planty'); ?></a>

  <header id="masthead" class="site-header">
   <div class="site-branding">
    <?php
    the_custom_logo();
    if (is_front_page() && is_home()) : ?>
     <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"></a>
    <?php else : ?>
     <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"></a>
    <?php endif;
    $planty_description = get_bloginfo('description', 'display');
    if ($planty_description || is_customize_preview()) : ?>
     <p class="site-description">
      <?php echo $planty_description; ?>
     </p>
    <?php endif; ?>
    <button class="nav-btn menu-toggle" aria-controls="header-menu" aria-expanded="false">
     <span></span>
     <span></span>
     <span></span>
    </button>
   </div><!-- .site-branding -->

   <div class="mobile-menu">
    <nav id="site-navigation" class="main-navigation">
     <?php wp_nav_menu(
      array(
       'theme_location' => 'menu-1',
       'menu_id'        => 'header-menu',
      )
     ); ?>
     <?php $locCommande = 'http://localhost/Planty/precommande/'; ?>
     <a href="<?php echo $locCommande; ?>" class="menu-end">Commander</a>
    </nav><!-- #site-navigation -->
   </div>

   <div class="desktop-menu">
    <nav id="site-navigation" class="main-navigation">
     <?php wp_nav_menu(
      array(
       'theme_location' => 'menu-1',
       'menu_id'        => 'header-menu',
      )
     ); ?>
     <?php $locCommande = 'http://localhost/Planty/precommande/'; ?>
     <a href="<?php echo $locCommande; ?>" class="menu-end">Commander</a>
    </nav><!-- #site-navigation -->
   </div>

  </header><!-- #masthead -->