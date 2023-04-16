<?php

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

function add_admin_link_to_menu($items, $args)
{
  if (is_user_logged_in() && $args->theme_location == 'menu-1') {
    $admin_link = '<li><a href="' . esc_url(admin_url()) . '">Admin</a></li>';
    $items = $items . $admin_link;
  }
  return $items;
}
add_filter('wp_nav_menu_items', 'add_admin_link_to_menu', 10, 2);
