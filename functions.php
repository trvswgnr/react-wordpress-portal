<?php

// helper function to include partials for functions
function include_function($filename) {
  return require_once( dirname( __FILE__ ) . '/functions/' . $filename . '.php' );
}

// helper function to include files from the template-parts folder
function module($part1, $part2 = '') {
  $hyphen = '';

  if ($part2 != '') { $hyphen = '-'; }

  return locate_template('template-parts/' . $part1 . $hyphen . $part2 . '.php');
}

include_function('add-theme-support');

include_function('add-styles');

include_function('add-custom-jquery');

include_function('add-scripts');

include_function('add-custom-post-types');

include_function('add-svg-upload-support');

include_function('remove-head-junk');

include_function('remove-autoformatting');

include_function('add-user-role-body-class');

include_function('add-custom-login');

include_function('change-wp-admin');

include_function('add-admin-scripts');

show_admin_bar(false);
