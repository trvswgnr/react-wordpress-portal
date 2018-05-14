// click user to show user details
$('.user').click(function () {
  var $this = $(this);
  $('.user').removeClass('is-active');
  $this.toggleClass('is-active');
});

// close user details
$('.section.for-users').on('click', '.user__close, .user__details', function () {
  $('.user').removeClass('is-active');
  console.log('click');
})

// hide categories that contain nothing
$('.category').has('.nothing').hide();
