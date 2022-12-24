<?php
/**
 * Add custom menu pages to the Wordpress admin area
 *
 * @link https://developer.wordpress.org/reference/functions/add_menu_page/
 *
 * @package CoderDojo
 * @subpackage CoderDojo_Theme_One
 * @since 1.0.0
 */

function register_custom_menu_pages() {

  add_menu_page( 
    'page_title' => __( 'Groups', 'coderdojo' ),
    'menu_title' => __( 'Groups', 'coderdojo' ),
    'capability' => 'read',
    'menu_slug' => 'groups',
    'function' => '',
    'icon_url' => 'dashicons-groups',
    'position' => 21
  );
}

?>