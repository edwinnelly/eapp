<?php
session_start();
if (isset($_SESSION["email"]) && $_SESSION["e_secure"]){
    
}else{
       // Clear all session variables
$_SESSION = array();
// Destroy the session
session_destroy();
    echo'<script>window.location.href="login.php"</script>';
}

?>
<!DOCTYPE html>
<html dir="ltr">

<head>
    <?php
    include "../controllers/style.php";
    include "fonts/font.php";
    ?>
</head>


<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative"
            style="background:url('assets/images/big/auth-bg.jpg') no-repeat center center;">
            <div class="auth-box row text-center">
                <div class="col-lg-7 col-md-7 modal-bg-img">
                <img src="https://images.pexels.com/photos/6169659/pexels-photo-6169659.jpeg?auto=compress&cs=tinysrgb&w=1600" style="height: 600px;">
                </div>
                <div class="col-lg-5 col-md-7 bg-white">
                    <div class="p-3">
                        <img src="assets/images/big/icon.png" alt="wrapkit">
                        <h4 class="mt-3 text-center">Activate account to continue</h4>
                        
                                <div id="notificationContainer"></div>

                        <form name="myForm" id="myForm" method="post">
                            <div class="row">
                                
                                <div class="col-lg-12">
                                    <div class="form-group">
                                   <input type="hidden" name="em"id="em" value="<?php echo $email = $_SESSION['email']; ?>">
                                    </div>
                                </div>
                               
                                <div class="col-lg-12 text-center">
                                    <button type="submit" id="reset-btn" class="btn btn-block btn-dark">Send Otp</button>
                                </div>
                                <div class="col-lg-12 text-center mt-5">
                                    Already have an account? <a href="login" class="text-danger">Login</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
        $(".preloader ").fadeOut();
    </script>
    <script src="js/auth_login.js">

        </script>
</body>

</html>