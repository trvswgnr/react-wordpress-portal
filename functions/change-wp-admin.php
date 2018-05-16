<?php
function change_wp_admin( $url, $path, $orig_scheme ) {
  $old = array( "/(wp-admin)/");
  $admin_dir = WP_ADMIN_DIR;
  $new = array($admin_dir);
  return preg_replace( $old, $new, $url, 1);
}
add_filter('site_url', 'change_wp_admin', 10, 3);
?>
