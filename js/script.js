$("#dvd").click(function() {
    $('.main-furnitureForm').removeClass('main-furnitureForm-active');
    $('.main-bookForm').removeClass('main-bookForm-active');
    $('.main-dvdForm').addClass('main-dvdForm-active');
  });
$("#furniture").click(function() {
    $('.main-dvdForm').removeClass('main-dvdForm-active');
    $('.main-bookForm').removeClass('main-bookForm-active');
    $('.main-furnitureForm').addClass('main-furnitureForm-active');
  });
$("#book").click(function() {
    $('.main-furnitureForm').removeClass('main-furnitureForm-active');
    $('.main-dvdForm').removeClass('main-dvdForm-active');
    $('.main-bookForm').addClass('main-bookForm-active');
  });
