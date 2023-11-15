<?php
include "config.php";
include "core.php";
// include "user_data.php";
  $companyname =base64_encode(cleanUserInput($_POST['companyname']));
 $address = cleanUserInput($_POST['address']);
  $btype = cleanUserInput($_POST['btype']);
 $host_key = cleanUserInput($_POST['checker']);
 $secure_e = cleanUserInput($_POST['secure_e']);
 $pid_id = cleanUserInput($_POST['pid_key']);

if (isset($companyname,$address,$btype,$host_key,$secure_e,$pid_id)) {
        $url1 = "$domain_url/account_manager/add-branch.php?companyname=$companyname&&address=$address&&btype=$btype&&host_key=$host_key&&secure_e=$secure_e&&pid_id=$pid_id";
    $response_call = getResult($url1);
    echo $rs = json_decode($response_call);
}

?>