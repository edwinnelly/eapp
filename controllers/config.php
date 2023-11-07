<?php
//custom url local
$domain_url = 'http://localhost/eapp_api';

function cleanUserInput($input) {
    // Remove leading and trailing whitespace
    $input = trim($input);
    
    // HTML entity encoding to prevent XSS
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

    return $input;
}
