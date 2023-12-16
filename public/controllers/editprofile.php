<?php
include "config.php";
include "core.php";

// Assuming you have an array of keys you want to extract from $_POST
$postKeys = ['secure_key', 'host_key', 'business_id_store', 'cellphone', 'companyname', 'com_addr', 'legalname', 'email_addr', 'business_id', 'tin', 'tax_form', 'industry', 'currency', 'website'];

// Initialize an empty array
$dataToSend = [];

// Handle $_POST data
$dataToSend = handlePost($postKeys);

//============ Prepare and send API request (using cURL)=======================
$apiEndpoint = "$domain_url/account_manager/update_stores.php";
$responseData = sendapi($apiEndpoint, $dataToSend);

// Check for errors during the API request
if ($responseData === false) {
    echo json_encode(['error' => "Error during API request"]);
} else {
    // Process the response data
    print_r($responseData);
}
?>
