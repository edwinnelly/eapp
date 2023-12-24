<?php
include "controllers/config.php";
include "controllers/core.php";
include "controllers/user_data.php";
try {
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
       
        // Validate and sanitize the data value
        $business_id = base64_decode(cleanUserInput($_GET['cida']));
    } else {
        // The request was made using a different method (e.g., POST, PUT, DELETE)
        throw new Exception('Invalid request method');
    }

    // Use constants for fixed values
    define('API_ENDPOINT', "$domain_url/account_manager/editprofile.php");

    // Assuming you have an array of data
    $dataToSend = [
        'secure_key' => $secure_login,
        'host_key' => $user_key,
        'company_id' => $business_id
    ];

    // Convert the array to JSON
    $jsonData = json_encode($dataToSend);

    // Prepare and send API request (using cURL)
    $ch = curl_init(API_ENDPOINT);

    // Set cURL options
    curl_setopt_array($ch, [
        CURLOPT_POST => 1,
        CURLOPT_URL => API_ENDPOINT,
        CURLOPT_POSTFIELDS => ['data' => $jsonData],
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HEADER => false,
        // Add more cURL options as needed
    ]);

    // Execute the request and capture the response
    $response = curl_exec($ch);

    // Check for cURL errors
    if (curl_errno($ch)) {
        throw new Exception('Curl error: ' . curl_error($ch));
    }

    // Close cURL session
    curl_close($ch);

    // Decode the JSON response
    $jsonResponse = json_decode($response);

    // Check for JSON decoding errors
    if (json_last_error() !== JSON_ERROR_NONE) {
        throw new Exception('Error decoding JSON response: ' . json_last_error_msg());
    }

    if (empty($jsonResponse)) {
        throw new Exception('Empty JSON response');
    }

    // Convert array to object using stdClass (if needed)
    $objectData = (object) $jsonResponse;

    // Loop through the object data (if needed)
    foreach ($objectData as $data) {
        // Do something with $data
    }
} catch (Exception $e) {
    // Log the exception, display a generic error message, or redirect the user to an error page
    echo 'An error occurred: ' . $e->getMessage();
    exit;
}

// Continue with the rest of your code...
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Edit account settings - Lentose App</title>
    <!-- This page css -->
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <link href="assets/toastr/toastr.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <?php
    include "fonts/font.php";
    ?>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div> -->
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <?php
            include "controllers/header.php";
            ?>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <?php
            include "controllers/sidebar.php";
            ?>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Edit Profile</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="dashboard.php" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Account Update
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 align-self-center">
                        <!-- <div class="customize-input float-right">
                            <select
                                class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                                <option selected>Aug 19</option>
                                <option value="1">July 19</option>
                                <option value="2">Jun 19</option>
                            </select>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">
                                    <?php echo $jsonResponse['country']; ?>
                                </h4>

                                <div id="notificationContainer"></div>

                                <form class="pl-3 pr-3" name="myForm" id="myForm" method="post"
                                    enctype="multipart/form-data">
                                    <input type="hidden" name="secure_key" value="<?php echo ($e_secure); ?>">
                                    <input type="hidden" name="host_key" value="<?php echo ($user_key); ?>">
                                    <input type="hidden" name="business_id_store" value="<?php echo ($business_id); ?>">
                                    <input type="hidden" name="lentose_token" value="<?php echo ($csrf_token); ?>">
                                    <div class="form-body">
                                        <label>Company name </label>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        value="<?php echo htmlspecialchars($data->company_name); ?>"
                                                        id="companyname" name="companyname" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Company address" id="com_addr" name="com_addr"
                                                        value="<?php echo htmlspecialchars($data->address); ?>">
                                                </div>
                                            </div>


                                            <div class="col-md-8">
                                                <div class="form-group">

                                                    <input type="text" class="form-control" placeholder="Legal name"
                                                        value="<?php echo htmlspecialchars_decode($data->legal_name); ?>"
                                                        name="legalname">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        value="<?php echo htmlspecialchars($data->email_addr); ?>"
                                                        placeholder="	
Company email" name="email_addr">
                                                </div>
                                            </div>
                                        </div>
                                        <label>Business ID No</label>
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Business ID No." name="business_id"
                                                        value="<?php echo htmlspecialchars($data->business_id); ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <input type="text" name="tin" class="form-control"
                                                        placeholder="Tax Identification Number (TIN)"
                                                        value="<?php echo htmlspecialchars($data->tin_number); ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <label>Company type</label>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Tax Form</label>
                                                <div class="form-group">
                                                    <select class="form-control" name="tax_form">
                                                        <option>
                                                            <?php echo htmlspecialchars_decode($data->tax); ?>
                                                        </option>
                                                        <option>Sole proprietor</option>
                                                        <option>Partnership or limited liability company</option>
                                                        <option>Small business corporation, two or more owners</option>
                                                        <option>Corporation, one or more shareholders</option>
                                                        <option>Nonprofit organization</option>
                                                        <option>Limited liability</option>
                                                        <option>Not sure/Other/None</option>
                                                    </select>

                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <label>Industry</label>
                                                <div class="form-group">
                                                    <select class="form-control" name="industry">
                                                        <option>
                                                            <?php echo htmlspecialchars_decode($data->industry); ?>
                                                        </option>
                                                        <option>Medical / Health Care / Community services</option>
                                                        <option>Personal, Beauty, Wellbeing and other services</option>
                                                        <option>Professional Services (e.g. Legal, Accounting,
                                                            Marketing, Consulting)</option>
                                                        <option> Property Operators and Real Estate services</option>
                                                        <option>Rental / Hiring services (non Real Estate)</option>
                                                        <option>Repair and Maintenance (Automotive & Property)</option>
                                                        <option>Retail Trade (Food & Beverage)</option>
                                                        <option>Retail Trade & Ecommerce (Non-Food)</option>
                                                        <option>Technology / Telecommunications services</option>
                                                        <option>Trades work (e.g. Plumber, Carpenter, Electrician)
                                                        </option>
                                                        <option>Accommodation and Food Services</option>
                                                        <option>Administrative and Support Services</option>
                                                        <option>Arts and Recreation Services</option>
                                                        <option>Construction/Builder</option>
                                                        <option>Education and Training</option>
                                                        <option>Farming, forestry and fishing</option>
                                                        <option>Manufacturing</option>
                                                        <option>Property Operators and Real Estate services</option>
                                                        <option>Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <label>Business Design.</label>
                                        <div class="row">
                                            <div class="col-md-7">
                                                <label>Business logo</label>
                                                <div class="form-group">
                                                    <input type="file" name="file" id="file" class="form-control"
                                                        placeholder="logo">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <label>Currency</label>
                                                <div class="form-group">
                                                    <input type="text" name="currency" class="form-control"
                                                        placeholder="Currency" readonly
                                                        value="<?php echo htmlspecialchars($data->currency_symbol); ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Business Website</label>
                                                <div class="form-group">
                                                    <input type="text" name="website" class="form-control"
                                                        placeholder="Website"
                                                        value="<?php echo htmlspecialchars($data->website); ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Business Phone</label>
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        value="<?php echo htmlspecialchars($data->phone); ?>"
                                                        placeholder="Company phone" name="cellphone">
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" id="reset-btn"
                                                class="btn waves-effect waves-light btn-outline-dark">Update
                                                Account</button>

                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <?php
            include "controllers/footer.php";
            ?>

        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->

    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="dist/js/app-style-switcher.js"></script>
    <script src="dist/js/feather.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <!-- themejs -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <script src="js/editcompany.js"> </script>
</body>

</html>