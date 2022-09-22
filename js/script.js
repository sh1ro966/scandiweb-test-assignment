$('#productType').change(function() {
  if ($(this).val() === 'DVD') {
    $('.main-furnitureForm').removeClass('main-furnitureForm-active');
    $('.main-bookForm').removeClass('main-bookForm-active');
    $('.main-dvdForm').addClass('main-dvdForm-active');
      $('#height, #width, #length').removeAttr("required", true);
      $('#weight').removeAttr("required", true);
          $('#size').attr("required", true);
  }
  if ($(this).val() === 'Furniture') {
    $('.main-dvdForm').removeClass('main-dvdForm-active');
  $('.main-bookForm').removeClass('main-bookForm-active');
  $('.main-furnitureForm').addClass('main-furnitureForm-active');
    $('#size').removeAttr("required", true);
    $('#weight').removeAttr("required", true);
      $('#height, #width, #length').attr("required", true);
  }
  if ($(this).val() === 'Book') {
    $('.main-furnitureForm').removeClass('main-furnitureForm-active');
  $('.main-dvdForm').removeClass('main-dvdForm-active');
  $('.main-bookForm').addClass('main-bookForm-active');
    $('#height, #width, #length').removeAttr("required", true);
    $('#size').removeAttr("required", true);
      $('#weight').attr("required", true);
  }
});

function validateForms(form) {
$(form).validate({
  rules: {
    sku: "required",
    name: {
      required: true,
    },
    price: {
        required: true, 
    },
    check: {
        required: true,
    },
  },
  messages: {
    sku: {
      required: "Please provide the SKU",
      minlength: jQuery.validator.format("Required {7} symbols!"),
    },
    name: {
      required: "Please provide the Name",
    },
    price: {
        required: "Please provide the Price"
    },
    size: {
        required: "Please provide the Size"
    },
    height: {
      required: "Please provide the Height"
    },
    width: {
      required: "Please provide the Width"
    },
    length: {
      required: "Please provide the Length"
    },
    weight: {
      required: "Please provide the Weight"
    },
  },
});
}

validateForms(".main-form");