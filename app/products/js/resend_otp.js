 /* function to login user */
 $("#myForm").on('submit', (function (e) {
  validateForm();
  let check = validateForm();
   e.preventDefault();
   if(check==true){
 var btn = $("#reset-btn");
   btn.attr('disabled', true).html("<i class='fa fa-spin fa-spinner'></i> processing");
  var datas = new FormData(this);
  $.ajax({
      url: "auths_pro/auth",
      type: "post",
      data: datas,
      contentType: false,
      cache: false,
      processData: false,
      success: (data) => {
        if(data.trim() == "success"){
          $(".alert").alert('close'); 
        var notification = '<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">';
        notification += 'logged In, Please wait redirecting...';
        notification += '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
        notification += '<span aria-hidden="true">&times;</span></button></div>';
        $("#notificationContainer").append(notification);
        setTimeout(
              function () {
                 window.location.href='dashboard'
              }, 1000);
      }else{
        $(".alert").alert('close'); 
        var notification = '<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">';
        notification += 'Email and  password is incorrect';
        notification += '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
        notification += '<span aria-hidden="true">&times;</span></button></div>';
        $("#notificationContainer").append(notification);setTimeout(
          function () {
            var btn = $("#reset-btn");
            btn.attr('disabled', false).html("Sign Up");
          }, 3000);
      }
      },

  });
   }else{
    
   }
  
}));