<?php
function cs_register_menus() {
  register_nav_menu('contact_menu',__( 'Contact Menu' ));
  register_nav_menu('social_menu',__( 'Social Menu' ));
}
add_action( 'init', 'cs_register_menus' );