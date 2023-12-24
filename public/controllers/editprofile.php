<?php

include "config.php";
// Validate the token on form submission
if (!hash_equals($_POST['lentose_token'], $_SESSION['csrf_token'])) {
    // Token mismatch, handle the error
    die();
} else {
    $file1 = "file";
    @$img_path1 = upload_img($file1, $file_size_allowed, $min_size_compress, $ticket_pic);
    try {
        // Assuming you have an array of keys you want to extract from $_POST
        $postKeys = ['secure_key', 'host_key', 'business_id_store', 'cellphone', 'companyname', 'com_addr', 'legalname', 'email_addr', 'business_id', 'tin', 'tax_form', 'industry', 'currency', 'website'];
        // Initialize an empty array
        $dataToSend = [];

        // Handle $_POST data
        $dataToSend = handlePost($postKeys);

        // Add the image path directly to the data
        $dataToSend['img'] = $img_path1;

        //============ Prepare and send API request (using cURL)=======================
        // Use constants for fixed values
        define('API_ENDPOINT', "$domain_url/account_manager/update_stores.php");

        $responseData = sendapi(API_ENDPOINT, $dataToSend);

        // Check for errors during the API request
        if ($responseData === false) {
            echo json_encode(['error' => "Error during API request"]);
        } else {

            // Process the response data
            echo $responseData = json_decode($responseData);

        }
    } catch (Exception $e) {
        // Log the exception, display a generic error message, or redirect the user to an error page
        echo json_encode(['error' => "An error occurred: " . $e->getMessage()]);
        exit;
    }

}

?>