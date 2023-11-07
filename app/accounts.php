<?php
include "../controllers/config.php";
include "../controllers/core.php";
 include "../controllers/user_data.php";

$fetch_company_list = "$domain_url/account_manager/company_list.php?host_key=$user_key&secure_e=$secure_login";
$response_call = getResult($fetch_company_list);
$data = json_decode($response_call);

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
    <title>Adminmart Template - The Ultimate Multipurpose admin template</title>
    <!-- This page css -->
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <?php
    include "fonts/font.php";
    ?>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Account List</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="dashboard" class="text-muted">Apps</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Manage Account
                                        List</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 align-self-center">
                        <div class="customize-input float-right">
                            <button type="button" class="btn waves-effect waves-light btn-success" data-toggle="modal"
                                data-target="#right-modal">Create Account</button>
                        </div>
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
                <!-- basic table -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <!-- Column -->
                                    <div class="col-md-6 col-lg-3 col-xlg-3">
                                        <div class="card card-hover">
                                            <div class="p-2 bg-primary text-center">
                                                <h1 class="font-light text-white"><?= count($data);  ?></h1>
                                                <h6 class="text-white">Total Business</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <div class="col-md-6 col-lg-3 col-xlg-3">
                                        <div class="card card-hover">
                                            <div class="p-2 bg-cyan text-center">
                                                <h1 class="font-light text-white">1,738</h1>
                                                <h6 class="text-white">Responded</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <div class="col-md-6 col-lg-3 col-xlg-3">
                                        <div class="card card-hover">
                                            <div class="p-2 bg-success text-center">
                                                <h1 class="font-light text-white">1100</h1>
                                                <h6 class="text-white">Resolve</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <div class="col-md-6 col-lg-3 col-xlg-3">
                                        <div class="card card-hover">
                                            <div class="p-2 bg-danger text-center">
                                                <h1 class="font-light text-white">964</h1>
                                                <h6 class="text-white">Pending</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                </div>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>SN</th>
                                                <th>Status</th>
                                                <th>Business Names</th>
                                                <th>ID</th>
                                                <th>Currency</th>
                                                <th>Created by</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sn;
                                            foreach ($data as $companylist) {
                                                ?>
                                                <tr>
                                                    <td><span class="badge badge-light-warning"><?=  $sn++;  ?></span></td>
                                                    <td><span class="badge badge-light-warning">Active</span></td>
                                                    <td><a href="javascript:void(0)" class="font-weight-medium link"><?= $companylist->company_name;  ?></a></td>
                                                    <td><a href="javascript:void(0)" class="font-bold link"><?= $companylist->checker_id;  ?></a></td>
                                                    <td><?php echo $companylist->currency_symbol;   ?></td>
                                                    <td>Host</td>
                                                    <td><?= $companylist->created_date;  ?></td>
                                                    <td>
                                                    <div class="btn-group dropright">
                                            <button type="button" class="btn btn-secondary dropdown-toggle"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu">
                                                <!-- Dropdown menu links -->
                                                <a class="dropdown-item" href="ui-buttons.html#">Go to Business</a>
                                                <a class="dropdown-item" href="ui-buttons.html#">Suspend Account</a>
                                                <a class="dropdown-item" href="ui-buttons.html#">View Logs</a>
                                                <a class="dropdown-item" href="ui-buttons.html#">Profile Settings</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item del" data-id="<?php echo $companylist->id; ?>" data-secure_id="<?php echo $e_secure; ?>">Delete Account</a>
                                            </div>
                                        </div>    
                                                </td>
                                                </tr>
                                                <?php
                                            }
                                            ?>

                                        </tbody>
                                       
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <?php
            include "controllers/footer.php";
            ?>
        </div>
       
    </div>
   
    <!-- Right modal content -->
    <div id="right-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-right">
            <div class="modal-content">

                <div class="modal-header border-0">
                    <h3 class="text-primary">Let’s create your first company!</h3>

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div id="notificationContainer"></div>
                    <form class="pl-3 pr-3" name="myForm" id="myForm" method="post">

                        <div class="form-group">
                            <label for="emailaddress">Company Name</label>
                            <input class="form-control" type="text" id="companyname" name="companyname"
                                placeholder="Company Name">
                            <input class="form-control" type="hidden" value="<?php echo $user_key; ?>" name="checker"
                                id="checker">
                            <input class="form-control" type="hidden" value="<?php echo $secure_login; ?>"
                                name="secure_e" id="secure_e">
                        </div>

                        <div class="form-group">
                            <label for="username">Business Currency </label>
                            <select class="form-control" id="currency" name="currency">
                                <option value="">select currency</option>
                                <?php
                                $currency = "$domain_url/general/currency.php?email=$email";
                                $response_call = getResult($currency);
                                $data = json_decode($response_call);
                                foreach ($data as $currency_info) {
                                    $currency_code = $currency_info->currency_code;
                                    $currency_name = $currency_info->currency_name;
                                    $currency_id = $currency_info->id;
                                    $currency_symbol = $currency_info->currency_symbol;
                                    ?>
                                    <option value="<?= $currency_id; ?>">
                                        <?php echo $currency_code; ?>
                                    </option>
                                    <?php
                                }
                                ?>

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="country">Where is your company based?</label>
                            
                        </div>


                        <div class="form-group text-center">
                            <button type="submit" id="reset-btn"
                                class="btn waves-effect waves-light btn-outline-dark">Create Account</button>
                        </div>

                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="dist/js/app-style-switcher.js"></script>
    <script src="dist/js/feather.min.js"></script>
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <script src="js/add_company.js"> </script>

</body>

</html>