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

  // ARCHIVE CONTENT FILTER
  $("#archive-filter").on("submit", function (e) {
    e.preventDefault();

    let user_id = [];
    $.each($(".user-id:checked"), function () {
      user_id.push($(this).val());
    });

    let term_id = [];
    $.each($(".term-id:checked"), function () {
      term_id.push($(this).val());
    });

    $.ajax({
      type: "post",
      url: frontajax.ajaxurl,
      dataType: "json",
      data: {
        action: "archive_filter_handler",
        user_id: user_id,
        term_id: term_id,
        // nonce: frontajax._nonce,
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
