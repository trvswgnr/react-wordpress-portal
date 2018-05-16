<?php
/**
 * Register and enqueue a custom stylesheet and script in the WordPress admin.
 */
function custom_admin_style() {
  wp_register_style('custom_admin_css', get_template_directory_uri() . '/dist/css/admin.css.php', false, '1.0.0');
  wp_enqueue_style('custom_admin_css');

  wp_register_script('custom_admin_scripts', get_template_directory_uri() . '/dist/js/admin.js', array('jquery'), '1.0.0', true );
  wp_enqueue_script('custom_admin_scripts');
}
add_action( 'admin_enqueue_scripts', 'custom_admin_style' );
?>
