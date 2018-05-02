<?php
// add role class to admin body
function add_role_to_admin_body($classes) {
  global $current_user;
  $user_role = array_shift($current_user->roles);
  $classes .= 'role-'. $user_role;
  return $classes;
}
add_filter('admin_body_class', 'add_role_to_admin_body');

// add role class to front-end body
function add_role_to_body($classes) {
  global $current_user;
  $user_role = array_shift($current_user->roles);
  $classes[] = 'role-'. $user_role;
  return $classes;
}
add_filter('body_class','add_role_to_body');
?>
