<?php
session_start();
include "../controllers/config.php";
include "../controllers/core.php";
  $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
  $password =($_POST['password']);
  try {
    if(isset($email,$password)){
     $url1 = "$domain_url/auth/auth_user.php?username=$username&&password=$password&&email=$email";
    $response_call = getResult($url1);
    echo $rs = json_decode($response_call);
    if($rs=="success"){
      
            session_regenerate_id();
            $_SESSION['email']=$email; // Initializing Session
            $_SESSION['e_secure'] = bin2hex(random_bytes(32));

            $emails= $_SESSION['email']=$email; // Initializing Session
            $secures = $_SESSION['e_secure'] = bin2hex(random_bytes(32));

            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));

            //secure connection
             $url12 = "$domain_url/auth/secure_login.php?email=$emails&&secure=$secures";
             $response_call1 = getResult($url12);
    } 
}
} catch (Exception $e) {
}
?>