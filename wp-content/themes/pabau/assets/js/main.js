jQuery(document).ready(function ($) {
  // hamburger menu toggle
  $(".menu-toggle").click(function () {
    $("#primary-menu").toggleClass("active");
  });

  // Lead Form
  $("#lead-form").submit(function (e) {
    e.preventDefault();

    const formData = {
      api_key: "MTUyMTc5c6555c14e129a73a29c7cfd29ecd593",
      redirect_link: $(location).attr("href"),
      Fname: $("#Fname").val(),
      Lname: $("#Lname").val(),
      email: $("#email").val(),
      mobile: $("#mobile").val(),
    };

    $.ajax({
      url: "https://uk2.pabau.me/OAuth2/leads/lead-curl.php",
      type: "POST",
      data: formData,
      success: function (response) {
        $(".status").css({ display: "block", color: "green" });
        $(".status").text(response);
      },
      error: function (error) {
        $(".status").css({ display: "block", color: "red" });
        $(".status").text(error);
      },
    });
  });
});
