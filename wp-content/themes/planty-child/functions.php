<?php

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.1' );
}

/**
 * Add Menu Header Footer
 */
function planty_child_setup()
{
  register_nav_menus(
    array(
      'menu-1' => esc_html__('Header', 'planty'),
      'menu-2' => esc_html__('Footer', 'planty'),
    )
  );
}
add_action('after_setup_theme', 'planty_child_setup');

/**
 * Add Admin after items menu
 */
function add_admin_link_to_menu($items, $args)
{
  if (is_user_logged_in() && $args->theme_location == 'menu-1') {
    $admin_link = '<li><a href="' . esc_url(admin_url()) . '">Admin</a></li>';
    $items = $items . $admin_link;
  }
  return $items;
}
add_filter('wp_nav_menu_items', 'add_admin_link_to_menu', 10, 2);

/**
 * Enqueue scripts and styles.
 */
function planty_child_scripts()
{
  wp_enqueue_style('font-syne', 'https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&display=swap');
  wp_enqueue_style('planty-style', get_stylesheet_uri(), array(), _S_VERSION);
  wp_enqueue_script('planty-js', get_stylesheet_directory_uri() . '/assets/js/planty.js', array(), _S_VERSION, true);
}
add_action('wp_enqueue_scripts', 'planty_child_scripts');

function planty_child_before_admin()
{
  wp_enqueue_style('font-syne', 'https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&display=swap');
  wp_enqueue_style('planty-style', get_stylesheet_uri(), array(), _S_VERSION);
  wp_enqueue_script('planty-js', get_stylesheet_directory_uri() . '/assets/js/planty.js', array(), _S_VERSION, true);
}
add_action('enqueue_block_editor_assets', 'planty_child_scripts');

add_filter( 'wpcf7_autop_or_not', '__return_false' );