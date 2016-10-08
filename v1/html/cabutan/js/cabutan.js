$(".submit-link").click(function() {
  var data = $(this).attr('var');

  $('.post').attr("value", data);
  $('.redirect').submit();
});
