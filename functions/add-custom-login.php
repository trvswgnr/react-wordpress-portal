<?php
// add custom css file to login page
function custom_login_css() {
  echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/dist/css/login.css" />';
}
add_action('login_head', 'custom_login_css');

// change login error message so that it doesnt specify username
function login_error_override() {
  return 'Incorrect login details.';
}
add_filter('login_errors', 'login_error_override');

// point logo to website instead of wordpress.com
function login_logo_url() {
  return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'login_logo_url' );

// add custom title to logo
function login_logo_url_title() {
  return 'Your Site Name and Info';
}
add_filter( 'login_headertitle', 'login_logo_url_title' );

// remove annoying login error shake
function no_login_shake() {
  remove_action('login_head', 'wp_shake_js', 12);
}
add_action('login_head', 'no_login_shake');

// redirect so that it doesn't go to wp-admin panel
//function admin_login_redirect($redirect_to, $request, $user) {
//  global $user;
//
//  if( isset( $user->roles ) && is_array( $user->roles ) ) {
//    if( in_array( "administrator", $user->roles ) ) {
//      return $redirect_to;
//    } else {
//      return home_url();
//    }
//  } else {
//    return $redirect_to;
//  }
//}
//add_filter("login_redirect", "admin_login_redirect", 10, 3);

// automatically check Remember Me
function remember_me_checked() {
  echo "<script>document.getElementById('rememberme').checked = true;</script>";
}
function login_checked_remember_me() {
  add_filter( 'login_footer', 'remember_me_checked' );
}
add_action( 'init', 'login_checked_remember_me' );
?>
