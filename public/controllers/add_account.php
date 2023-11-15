<?php
include "config.php";
include "core.php";
// include "user_data.php";
$companyname = cleanUserInput($_POST['companyname']);
$currency = cleanUserInput($_POST['currency']);
$country = cleanUserInput($_POST['country']);
$host_key = cleanUserInput($_POST['checker']);
$secure_e = cleanUserInput($_POST['secure_e']);

if (isset($companyname)) {
     $url1 = "$domain_url/account_manager/add-account.php?companyname=$companyname&&currency=$currency&&country=$country&&host_key=$host_key&&secure_e=$secure_e";
    $response_call = getResult($url1);
    echo $rs = json_decode($response_call);
}



?>