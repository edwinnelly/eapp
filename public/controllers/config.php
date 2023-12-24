<?php
session_start();
//custom url local
$domain_url = 'http://localhost/eapp_api';

//default declarations
//image upload size
$file_size_allowed = 3000000;
$min_size_compress = 500000;
//folder name for brand uploads
$ticket_pic = "../brand_logo/";

function cleanUserInput($input) {
    // Remove leading and trailing whitespace
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    // HTML entity encoding to prevent XSS
    $input = htmlentities($input, ENT_QUOTES, 'UTF-8');

    return $input;
}

function sendapi($apiEndpoint, $jsonData)
{
  // cURL setup
  $ch = curl_init();

  curl_setopt($ch, CURLOPT_URL, $apiEndpoint);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($jsonData));
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
        return ($responseData);
      }
    } else {
      echo 'HTTP Error: ' . $httpCode;
      // Handle other HTTP status codes if needed
    }
  }

  // Close cURL session
  curl_close($ch);

}

// Function to handle $_POST data
function handlePost($keys)
{
    $data = [];
    // Loop through each key and add it to the $data array if it exists in $_POST
    foreach ($keys as $key) {
        // Check if the key exists in $_POST before using it
        if (isset($_POST[$key])) {
            // Clean the input before adding it to the array
            $data[$key] = cleanUserInput($_POST[$key]);
        } else {
            // Handle the case where a key is missing in $_POST
            echo json_encode(['error' => "Missing key: $key"]);
            exit; // Stop execution to prevent further processing
        }
    }

    return $data;
}

function compressImage($source, $destination, $quality)
    {
        $info = getimagesize($source);

        if ($info['mime'] == 'image/jpeg')
            $image = imagecreatefromjpeg($source);

        elseif ($info['mime'] == 'image/gif')
            $image = imagecreatefromgif($source);

        elseif ($info['mime'] == 'image/png')
            $image = imagecreatefrompng($source);

        imagejpeg($image, $destination, $quality);
    }

    function upload_img($file1, $file_size_allowed, $min_size_compress, $ticket_pic)
    {
        $name = $_FILES[$file1]['name'];
        $tmpnm = $_FILES[$file1]['tmp_name'];
        $type = $_FILES[$file1]['type'];
        $size = $_FILES[$file1]['size'];

        // check file extension
        if ($type != 'image/jpeg'
            && $type != 'image/jpg'
            && $type != 'image/gif'
            && $type != 'image/png'
        ) {
            //echo "File Extension Not Allowed";
        } else {
            //this is the dir for the photo
            if ($size > $file_size_allowed) {
                return "file to large";
            } else {
                $tuname = base64_decode($_POST["$file1"]);
                $newname = str_shuffle('01234567891234567890');
                @$dir = "$ticket_pic" . $tuname . $newname . $name;
                if ($size > $min_size_compress) {
                    // Compress Image
                    $ui = compressImage($tmpnm, $dir, 40);
                    if ($ui) {
                        move_uploaded_file($tmpnm, $dir);
                    }
                } else {
                    move_uploaded_file($tmpnm, $dir);
                }
                return $dir;
            }
        }
    }