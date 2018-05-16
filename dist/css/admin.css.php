<?php
header("Content-type: text/css; charset: UTF-8");
$color__primary = "#ad0100";
?>

/* apply bettern box-sizing */
.role-subscriber * {
  box-sizing: border-box;
}

/* hide the body initially to avoid FOUC */
body.role-subscriber {
  display: none;
  background: #dedede;
}

.role-subscriber h2.personal-options + .form-table,
.role-subscriber h2.about-yourself + .form-table,
.role-subscriber h2.contact-info + .form-table {
  display: none;
}

.role-subscriber .user-user-login-wrap,
.role-subscriber .user-nickname-wrap,
.role-subscriber .user-display-name-wrap,
.role-subscriber .user-sessions-wrap {
  display: none;
}

.role-subscriber #adminmenumain,
#wpfooter {
  display: none;
}

.role-subscriber .regular-text {
  width: 100%;
}



.role-subscriber #wpbody-content {
  padding: 2em calc(4vw + 1em);
  background: white;
}

/* reformat the content area */
.wp-admin.role-subscriber #wpcontent {
  margin: 0 auto !important;
  padding: 6em 21px 4em !important;
  width: 100%;
  max-width: 800px;
  box-sizing: border-box;
}

/* remove help button at top */
.role-subscriber #contextual-help-link-wrap {
  display: none;
}

/* change button things */
.wp-core-ui .button-primary {
  background: <?php echo $color__primary; ?> ;
  border: none;
  box-shadow: none;
  text-decoration: none;
  text-shadow: none;
}

.wp-core-ui .button-primary:hover,
.wp-core-ui .button-primary:focus {
  background: <?php echo $color__primary; ?> ;
}

.wp-core-ui .button-primary-disabled,
.wp-core-ui .button-primary.disabled,
.wp-core-ui .button-primary:disabled,
.wp-core-ui .button-primary[disabled] {
  background: <?php echo $color__primary; ?> !important;
  text-shadow: none !important;
}

.notice-success,
div.updated {
  border-color: #757575;
}

.role-subscriber .wrap h1.wp-heading-inline {
  display: block;
  text-align: center;
  margin-right: 5px;
  margin-bottom: 0.5em;

  color: #636363;

  font-size: 3em;
  font-weight: lighter;
  text-transform: uppercase;
  letter-spacing: 3px;
  word-spacing: 2px;
}

.profile-picture {
  text-align: center;
}

.profile-picture img {
  border-radius: 50%;
  box-shadow: 0px 2px 5px 0 rgba(0, 0, 0, 0.3);
  border: 5px solid white;
  margin-bottom: 2em;
}

/* shrink ACF profile picture so that it doesnt visually compete with header profile picture */
.role-subscriber.profile-php .acf-image-uploader .image-wrap img {
  height: 50px;
}

/* add cool background */
.role-subscriber #wpwrap {
  background: linear-gradient(to top left, #5d0000, #ad0100);
}

/* hide the admin bar */
#wpadminbar {
  display: none;
}

/* remove compensation padding for the admin bar */
html.wp-toolbar {
  padding-top: 0 !important;
}

/* hide the Screen Options button */
.role-subscriber .screen-options-link-wrap {
  display: none;
}
