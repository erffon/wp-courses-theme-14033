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
      beforeSend: function () {
        $("#ajax-tech-posts").css("opacity", 0.3);
      },
      success: function (response) {
        if (response.success === true) {
          $("#ajax-tech-posts").html(response.content);
        }
      },
      error: function (error) {},
      complete: function () {
        $("#ajax-tech-posts").css("opacity", 1);
      },
    });
  });
});
