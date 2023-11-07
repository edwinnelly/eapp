<?php
session_start();
if (isset($_SESSION["email"]) && $_SESSION["e_secure"]) {

} else {
    // Clear all session variables
    $_SESSION = array();
    // Destroy the session
    session_destroy();
    echo '<script>window.location.href="login.php"</script>';
}
include "../../controllers/config.php";
include "../../controllers/core.php";

$email = $_SESSION['email'];
$e_secure = $_SESSION['e_secure'];

try {
    if (isset($email, $e_secure)) {
        $url1 = "$domain_url/auth/user_data.php?email=$email";
        $response_call = getResult($url1);
        $data = json_decode($response_call);
        foreach ($data as $user_info) {
            $email_addr1 = $user_info->email_addr;
            $username1 = $user_info->username;
            $id1 = $user_info->id;
            $account_activation = $user_info->account_activation;
            $user_key = $user_info->user_key;
            $secure_login = $user_info->secure_login;
        }
    } else {
        // Clear all session variables
        $_SESSION = array();
        // Destroy the session
        session_destroy();

    }
} catch (Exception $e) {
    echo "error";
}
if ($username1 == '') {
    // Clear all session variables
    $_SESSION = array();
    // Destroy the session
    session_destroy();
}
if ($account_activation == 0) {
    // echo '<script>window.location.href="ocheck.php"</script>';
}



?>