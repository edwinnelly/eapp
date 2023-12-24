//validate email
function validateForm() {
  let companyname = document.forms["myForm"]["companyname"].value;
  let com_addr = document.forms["myForm"]["com_addr"].value;
  let legalname = document.forms["myForm"]["legalname"].value;

  if (companyname.length < 4) {
    Swal.fire({
      title: "Error!",
      text: "Company name must be at least 8 characters long.",
      icon: "error",
    });
    return false;
  }
  if (companyname === "") {
    Swal.fire({
      title: "Error!",
      text: "Company name must not be empty.",
      icon: "error",
    });
    return false;
  }
  if (com_addr === "") {
    Swal.fire({
      title: "Error!",
      text: "Company address must not be empty!",
      icon: "error",
    });
    return false;
  }
  if (legalname === "") {
    Swal.fire({
      title: "Error!",
      text: "Legal Name must not be empty!",
      icon: "error",
    });
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
      url: "controllers/editprofile",
      type: "post",
      data: datas,
      contentType: false,
      cache: false,
      processData: false,
      success: (data) => {
       alert(data);
        // if (data.trim() == "success") {
        //   Swal.fire({
        //     title: "success!",
        //     text: "Account updated, Please wait redirecting...!",
        //     icon: "success",
        //   });
        //   setTimeout(function () {
        //     var btn = $("#reset-btn");
        //     btn
        //       .attr("disabled", false)
        //       .html("Update Account");
        //   }, 3000);
        // } else {
        //   Swal.fire({
        //     title: "Error!",
        //     text: "Posting Failed try again!",
        //     icon: "error",
        //   });

        // }
      },
    });
  } else {
  }
});
