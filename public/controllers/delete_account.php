<?php
include "config.php";
include "core.php";
// include "user_data.php";
  $pid = cleanUserInput($_POST['pid']);
   $host_key = cleanUserInput($_POST['checker']);
    $secure_e = cleanUserInput($_POST['secure_e']);

if (isset($pid,$host_key,$secure_e)) {
      $url1 = "$domain_url/account_manager/company_list_delete.php?account_id=$pid&&host_key=$host_key&&secure_e=$secure_e";
    $response_call = getResult($url1);
    echo $rs = json_decode($response_call);
}



?>