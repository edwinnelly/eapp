<?php
include "config.php";
include "core.php";

// Get the data values
$companyname = cleanUserInput($_POST['companyname']);
$com_addr = cleanUserInput($_POST['com_addr']);
$legalname = cleanUserInput($_POST['legalname']);
$email_addr = cleanUserInput($_POST['email_addr']);
$bis_number = cleanUserInput($_POST['business_id']);
$tin_number = cleanUserInput($_POST['tin']);
$tax_form = cleanUserInput($_POST['tax_form']);
$industry = cleanUserInput($_POST['industry']);
$currency = cleanUserInput($_POST['currency']);
$website = cleanUserInput($_POST['website']);
$business_id_store = base64_decode(cleanUserInput($_POST['business_id_store']));
$secure_es = base64_decode(cleanUserInput($_POST['sl']));
$host_keys = base64_decode(cleanUserInput($_POST['hk']));
$cellphone = cleanUserInput($_POST['cellphone']);

// Assuming you have an array of data
$dataToSend = [
    'secure_key' => $secure_es,
    'host_key' => $host_keys,
    'legalname' => $legalname,
    'email_addr' => $email_addr,
    'bis_number' => $bis_number,
    'companyname' => $companyname,
    'tin' => $tin_number,
    'tax_form' => $tax_form,
    'industry' => $industry,
    'currency' => $currency,
    'website' => $website,
    
    'com_addr' => $com_addr,
    'business_id_store' => $business_id_store,
    'cellphone' => $cellphone,
];


// Prepare and send API request (using cURL)
$apiEndpoint = "$domain_url/account_manager/update_stores.php";

// Convert the data to JSON format
$jsonData = json_encode($dataToSend);

// cURL setup
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $apiEndpoint);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

// Execute the cURL request and get the response
$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
} else {
    // Check HTTP status code
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    if ($httpCode == 200) {
        // Decode the JSON response
        $responseData = json_decode($response, true);

        // Check if decoding was successful
        if ($responseData === null) {
            echo 'Error decoding JSON response';
        } else {
            // Process the response data
            print_r($responseData);
        }
    } else {
        echo 'HTTP Error: ' . $httpCode;
        // Handle other HTTP status codes if needed
    }
}

// Close cURL session
curl_close($ch);
?>
