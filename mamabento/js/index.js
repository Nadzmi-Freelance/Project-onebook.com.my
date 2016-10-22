$(document).ready(function() {
  $('.category-header').on('click', function(event) {
    var id = $(this).attr('id');
    
    $("#content-" + id).slideToggle();
  });
});
