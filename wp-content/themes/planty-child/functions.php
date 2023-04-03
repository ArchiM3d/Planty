<?php

function planty_child_setup() {
  
	register_nav_menus(
		array(
			'menu-2' => esc_html__( 'Footer', 'planty' ),
		)
	);

}
add_action( 'after_setup_theme', 'planty_child_setup' );