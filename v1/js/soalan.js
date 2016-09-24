$('.soalan').click(function(event) {
  $("#jawapan-" + $(this).attr('id')).slideToggle();
});
