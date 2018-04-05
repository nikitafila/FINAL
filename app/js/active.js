$(".headercol").click(function(e) {
  e.preventDefault();
  $(".headercol").removeClass('active-border');
  $(this).addClass('active-border');
})