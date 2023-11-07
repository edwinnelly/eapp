<?php
include "config.php";
include "core.php";
 $username = cleanUserInput($_POST['username']);
 $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
 $password = base64_encode($_POST['password']);

if(isset($email)){
       $url1 = "$domain_url/auth/auth_account.php?username=$username&&password=$password&&email=$email";

    $response_call = getResult($url1);
    
    echo $rs = json_decode($response_call);
   
}


?>