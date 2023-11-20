//validate email
function validateForm() {
  let companyname = document.forms["myForm"]["companyname"].value;
  let address = document.forms["myForm"]["address"].value;
  let btype = document.forms["myForm"]["btype"].value;
  var regex = /^[a-zA-Z0-9\s]+$/;

  if (companyname.length < 4) {
    $(".alert").alert("close");
    var notification =
      '<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">';
    notification += "Branch name must be at least 6 characters long.";
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
    notification += "Branch name must not be empty.";
    notification +=
      '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
    notification += '<span aria-hidden="true">&times;</span></button></div>';
    $("#notificationContainer").append(notification);
    return false;
  }
  if (address === "") {
    $(".alert").alert("close");
    var notification =
      '<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">';
    notification += "Address name must not be empty.";
    notification +=
      '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
    notification += '<span aria-hidden="true">&times;</span></button></div>';
    $("#notificationContainer").append(notification);
    return false;
  }

  if (btype === "") {
    $(".alert").alert("close");
    var notification =
      '<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">';
    notification += "Account type name must not be empty.";
    notification +=
      '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
    notification += '<span aria-hidden="true">&times;</span></button></div>';
    $("#notificationContainer").append(notification);
    return false;
  }

  if (!regex.test(companyname)) {
      
    $(".alert").alert('close'); 
    var notification = '<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">';
    notification += 'Branch name can only contain letters, numbers, and underscores.';
    notification += '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
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
      url: "controllers/addbranch",
      type: "post",
      data: datas,
      contentType: false,
      cache: false,
      processData: false,
      success: (data) => {
        
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
            location.reload(true);
          }, 1000);
        } else {
          alert(data);
          // $(".alert").alert("close");
          // var notification =
          //   '<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">';
          // notification += "Error creating new branch account";
          // notification +=
          //   '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
          // notification +=
          //   '<span aria-hidden="true">&times;</span></button></div>';
          // $("#notificationContainer").append(notification);

          // setTimeout(function () {
          //   var btn = $("#reset-btn");
          //   btn.attr("disabled", false).html("Create Account");
          // }, 3000);
        }
      },
    });
  } else {
  }
});

$(".remove_account").click(function () {
  const pid = $(this).attr("data-secure_id");
  const checker = $(this).attr("data-checker");
  const secure_e = $(this).attr("data-secure_e");
  const businessname = $(this).attr("data-businessname");

  $("#businessname").val(businessname);
  $("#secure_e").val(secure_e);
  $("#checker").val(checker);
  $("#pid").val(pid);
  //display modal
  $("#del_members").modal("show");

  $("#delete_account").click(function () {
    const businessname = $("#businessname").val();
    const pid = $("#pid").val();
    const secure_e = $("#secure_e").val();
    const checker = $("#checker").val();
    const btn = $("#delete_account");
  
    btn
      .attr("disabled", true)
      .html('<i class="fa fa-spin fa-spinner"></i>Please Wait Deleting...');
    //validate
    //call Ajax
    if (pid === "") {
      toastr.warning("Please check selection.", "warning");
      const btn = $("#del_stf");
      btn
        .attr("disabled", false)
        .html('<i class="fa fa-spin fa-spinner"></i> Try Again...');
    } else {
      $.ajax({
        url: "controllers/delete_account",
        method: "POST",
        data: {
          pid: pid,checker:checker,secure_e:secure_e
        },
        success: (data) => {
          if (data.trim() == "success") {
            //toastr.success('The Account has been removed.', 'Success');
            Swal.fire({
              title: "Completed!",
              text: "The Account has been removed!",
              icon: "success"
            });
            setTimeout(function () {
              window.location.href = "accounts";
            }, 1000);

          }
        },
      });
    }
  });
});
