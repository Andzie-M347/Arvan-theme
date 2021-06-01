<?php

/**
 * Arvan admin functions.
 *
 * @package Arvan
 */


add_action('admin_menu', 'arvan_admin_area');
 function arvan_admin_area() {
    add_menu_page( 'Arvan Theme Options', 'Arvan', 'manage_options', 'arvan_options', 'arvan_create_page', '', 78 );

    // Theme Options Subpages
    add_submenu_page('arvan_options', 'Arvan', 'General', 'manage_options', 'arvan_options', 'arvan_admin_area' );
    add_submenu_page('arvan_options', 'Header', 'Header', 'manage_options', 'arvan_options_header', 'arvan_sub_admin_area' );
    add_submenu_page('arvan_options', 'Blog', 'Blog', 'manage_options', 'arvan_options_blog', 'arvan_admin_area' );
    add_submenu_page('arvan_options', 'Footer', 'Footer', 'manage_options', 'arvan_options_footer', 'arvan_admin_area' );
    add_submenu_page('arvan_options', 'Custom CSS/JS', 'Custom CSS/JS', 'manage_options', 'arvan_options_code', 'arvan_admin_area' );

    add_action('admin_init', 'add_admin_pages');
  
  
 }


 function add_admin_pages() {
     
 }




 function arvan_create_page() {
    require_once( get_template_directory() . './inc/backend/admin.php' );
 }


 function arvan_sub_admin_area() {

 }

