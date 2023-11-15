//validate email
function validateForm() {
  let companyname = document.forms["myForm"]["companyname"].value;
  let currency = document.forms["myForm"]["currency"].value;
  let country = document.forms["myForm"]["country"].value;
  var regex = /^[a-zA-Z0-9_]{3,20}$/;

  if (companyname.length < 4) {
    $(".alert").alert("close");
    var notification =
      '<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">';
    notification += "Company name must be at least 8 characters long.";
    notification +=
      '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
    notification += '<span aria-hidden="true">&times;</span></button></div>';
    $("#notificationContainer").append(notification);
    return false;
  }

  if (companyname === "") {
    $(".alert").alert("close");
    var notification =
      '<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">';
    notification += "Company name must not be empty.";
    notification +=
      '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
    notification += '<span aria-hidden="true">&times;</span></button></div>';
    $("#notificationContainer").append(notification);
    return false;
  }
  if (country === "") {
    $(".alert").alert("close");
    var notification =
      '<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">';
    notification += "Country name must not be empty.";
    notification +=
      '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
    notification += '<span aria-hidden="true">&times;</span></button></div>';
    $("#notificationContainer").append(notification);
    return false;
  }

  if (currency === "") {
    $(".alert").alert("close");
    var notification =
      '<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">';
    notification += "Currency name must not be empty.";
    notification +=
      '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
    notification += '<span aria-hidden="true">&times;</span></button></div>';
    $("#notificationContainer").append(notification);
    return false;
  }

  if (!regex.test(companyname)) {
    $(".alert").alert("close");
    var notification =
      '<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">';
    notification +=
      "Company name can only contain letters, numbers, and underscores.";
    notification +=
      '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
    notification += '<span aria-hidden="true">&times;</span></button></div>';

    $("#notificationContainer").append(notification);

    return false;
  }

  return true; // Form is valid
}

/* function to login user */
$("#myForm").on("submit", function (e) {
  validateForm();
  let check = validateForm();
  e.preventDefault();
  if (check == true) {
    var btn = $("#reset-btn");
    btn
      .attr("disabled", true)
      .html("<i class='fa fa-spin fa-spinner'></i> processing");
    var datas = new FormData(this);
    $.ajax({
      url: "controllers/add_account",
      type: "post",
      data: datas,
      contentType: false,
      cache: false,
      processData: false,
      success: (data) => {
        console.log(data);
        if (data.trim() == "success") {
          $(".alert").alert("close");
          var notification =
            '<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">';
          notification += "Account Created, Please wait redirecting...";
          notification +=
            '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
          notification +=
            '<span aria-hidden="true">&times;</span></button></div>';
          $("#notificationContainer").append(notification);

          setTimeout(function () {
            window.location.href = "accounts";
          }, 3000);
        } else {
          $(".alert").alert("close");
          var notification =
            '<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">';
          notification += "Error creating new business account";
          notification +=
            '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
          notification +=
            '<span aria-hidden="true">&times;</span></button></div>';
          $("#notificationContainer").append(notification);

          setTimeout(function () {   
            var btn = $("#reset-btn");
            btn.attr("disabled", false).html("Create Account");
          }, 3000);
        }
      },
    });
  } else {
  }
});

