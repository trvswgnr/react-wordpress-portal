// click user to show user details
$('.user').click(function () {
  var $this = $(this);
  $('.user').not(this).removeClass('is-active');
  $this.toggleClass('is-active');
  $('.user').not(this).next('.user__details').slideUp(150);
  $this.next('.user__details').slideToggle("fast");
});

// close user details
$('.section.for-users').on('click', '.user__close, .user__details', function () {
  $('.user__details').slideUp("fast");
  $('.user').removeClass('is-active');
});

// hide categories that contain nothing
$('.category').has('.nothing').hide();
