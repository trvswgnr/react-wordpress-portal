var $ = jQuery;

$(document).ready(function() {
//helper function to avoid redundancy
function h2_contains(text) {
  return $('h2:contains(' + text + ')');
}
var $profile_name     = h2_contains("Name"),
    $profile_heading  = $('.wp-heading-inline:contains("Profile")'),
    $personal_options = h2_contains("Personal Options"),
    $contact_info     = h2_contains("Contact Info"),
    $first_name       = $('#first_name').val(),
    $last_name        = $('#last_name').val(),
    $about_yourself   = h2_contains("About Yourself"),
    $account_manage   = h2_contains("Account Management"),
    $photo_label      = h2_contains("Photo"),
    $photo            = $photo_label.next('.form-table'),
    $photo_url        = $('[data-name="image"]').attr('src'),
    $password_label   = $('[for="pass1-text"]');

// hide certain h2 elements and add class for css targeting
$profile_name.hide();
$photo_label.hide();
$profile_heading.before('<div class="profile-picture"><img src="' + $photo_url + '" /></div>');
$profile_heading.text($first_name + ' ' + $last_name);
$personal_options.addClass('personal-options').hide();
$contact_info.addClass('contact-info').hide();
$about_yourself.addClass('about-yourself').hide();
$account_manage.addClass('account-management').hide();
$password_label.text('Password');

// change "Generate Password" to "Change Password"
$('.wp-generate-pw').text('Change Password');

// show the body last to avoid FOUC
$('body').show();
});
