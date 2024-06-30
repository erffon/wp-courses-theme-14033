jQuery(document).ready(function ($) {
  // TECH POST CHANGE AJAX
  $("#change-post-type").on("change", function () {
    let element = $(this);
    let option = element.find("option:selected");
    let optionValue = option.val();

    $.ajax({
      type: "post",
      url: frontajax.ajaxurl,
      dataType: "json",
      data: {
        action: optionValue,
        nonce: frontajax._nonce,
      },
      beforeSend: function () {},
      success: function (response) {
        if (response.success === true) {
          console.log("🚀 ~ response:", response.content);
        }
      },
      error: function (error) {},
      complete: function () {},
    });
  });
});
