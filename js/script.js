$("#dvd").click(function() {
    $('.main-furnitureForm').removeClass('main-furnitureForm-active');
    $('.main-bookForm').removeClass('main-bookForm-active');
    $('.main-dvdForm').addClass('main-dvdForm-active');
      $('#furniture_height, #furniture_width, #furniture_length').removeAttr("required", true);
      $('#book-weight').removeAttr("required", true);
          $('#dvd-size').attr("required", true);
  });
$("#furniture").click(function() {
    $('.main-dvdForm').removeClass('main-dvdForm-active');
    $('.main-bookForm').removeClass('main-bookForm-active');
    $('.main-furnitureForm').addClass('main-furnitureForm-active');
      $('#dvd-size').removeAttr("required", true);
      $('#book-weight').removeAttr("required", true);
        $('#furniture_height, #furniture_width, #furniture_length').attr("required", true);
  });
$("#book").click(function() {
    $('.main-furnitureForm').removeClass('main-furnitureForm-active');
    $('.main-dvdForm').removeClass('main-dvdForm-active');
    $('.main-bookForm').addClass('main-bookForm-active');
      $('#furniture_height, #furniture_width, #furniture_length').removeAttr("required", true);
      $('#dvd-size').removeAttr("required", true);
        $('#book-weight').attr("required", true);
  });
