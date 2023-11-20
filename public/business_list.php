<?php
include "controllers/config.php";
include "controllers/core.php";
include "controllers/user_data.php";

//get the data value
$business_name = base64_decode(cleanUserInput($_GET['cidname']));
 $business_id = base64_decode(cleanUserInput($_GET['cida']));
if(isset($business_name,$business_id)){
    
}else{
    echo '<script>window.location.href="dashboard.php"</script>';
}

$fetch_company_list = "$domain_url/account_manager/branch_list.php?host_key=$user_key&secure_e=$secure_login&&branch_id=$business_id";
$response_call = getResult($fetch_company_list);
$data = json_decode($response_call);
$number_branch = count($data);
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
    <title><?= $business_name; ?> - Business Branch</title>
    <!-- This page css -->
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <link href="assets/toastr/toastr.min.css" rel="stylesheet">
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
       
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <?php
            include "controllers/sidebar.php";
            ?>
            <!-- End Sidebar scroll-->
        </aside>
       
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
                                data-target="#right-modal">Create Branch</button>
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
                                                <h1 class="font-light text-white">
                                                    <?php echo $business_name; ?>
                                                </h1>
                                                <h6 class="text-white"> Business Name</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->


                                    <div class="col-md-6 col-lg-3 col-xlg-3">
                                        <div class="card card-hover">
                                            <div class="p-2 bg-cyan text-center">
                                                <h1 class="font-light text-white"><?= $number_branch;  ?></h1>
                                                <h6 class="text-white">Branches</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Column -->
                                    <div class="col-md-6 col-lg-3 col-xlg-3">
                                        <div class="card card-hover">
                                            <div class="p-2 bg-success text-center">
                                                <h1 class="font-light text-white">1100</h1>
                                                <h6 class="text-white">Staff</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <div class="col-md-6 col-lg-3 col-xlg-3">
                                        <div class="card card-hover">
                                            <div class="p-2 bg-danger text-center">
                                                <h1 class="font-light text-white">964</h1>
                                                <h6 class="text-white">Customer</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-3 col-xlg-3">
                                        <div class="card card-hover">
                                            <div class="p-2 bg-warning text-center">
                                                <h1 class="font-light text-white">964</h1>
                                                <h6 class="text-white">Product List</h6>
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
                                                <th>Branch Names</th>
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
                                                    <td><span class="badge badge-light-warning">
                                                            <?= $sn++; ?>
                                                        </span></td>
                                                    <td><span class="badge badge-light-warning">Active</span></td>
                                                    <td><a href="javascript:void(0)" class="font-weight-medium link">
                                                            <?= htmlspecialchars($companylist->branch_name); ?>
                                                        </a>
                                                    </td>
                                                    <td><a href="javascript:void(0)" class="font-bold link">
                                                            <?= $companylist->checker_id; ?>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <?php echo $companylist->currency_symbol; ?>
                                                    </td>
                                                    <td>Host</td>
                                                    <td>
                                                        <?= $companylist->created_date; ?>
                                                    </td>
                                                    <td>
                                                        
                                                    
                                                        <div class="btn-group dropright">
                                                            <button type="button" class="btn btn-secondary dropdown-toggle"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                Action
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <br>
                                                                <br>
                                                                <!-- Dropdown menu links -->
                                                                <a class="dropdown-item" href="ui-buttons.html#">Go to
                                                                    Business</a>
                                                                <a class="dropdown-item" href="ui-buttons.html#">Suspend
                                                                    Account</a>
                                                                

                                                                <a class="dropdown-item remove_account" data-toggle="modal"
                                                                    data-target="#del_members">Profile Settings</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item remove_account"
                                                                    data-id="<?php echo $companylist->id; ?>"
                                                                    data-secure_id="<?php echo $companylist->checker_id; ?>"
                                                                    data-businessname="<?= $companylist->company_name; ?>"
                                                                    data-secure_e="<?= $user_key; ?>"
                                                                    data-checker="<?= $secure_login; ?>">Delete
                                                                    Account</a>
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
                    <h3 class="text-primary">Let’s create a new branch!</h3>

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div id="notificationContainer"></div>
                    <form class="pl-3 pr-3" name="myForm" id="myForm" method="post">

                        <div class="form-group">
                            <label for="emailaddress">Branch Name</label>
                            <input class="form-control" type="text" id="companyname" name="companyname"
                                placeholder="Branch Name">
                            <input class="form-control" type="hidden" value="<?php echo $user_key; ?>" name="checker"
                                id="checker">
                            <input class="form-control" type="hidden" value="<?php echo $business_id; ?>" name="pid_key"
                                id="checker">
                            <input class="form-control" type="hidden" value="<?php echo $secure_login; ?>"
                                name="secure_e" id="secure_e">
                        </div>

                        <div class="form-group">
                            <label for="country">Branch Address</label>
                            <input class="form-control" type="text" id="address" name="address"
                                placeholder="Branch Address">
                        </div>

                        <div class="form-group">
                            <label for="country">Choose branch type</label>
                            <select class="form-control" id="btype" name="btype">
                                <option value="">Chooose Type</option>
                                <option value="default">default branch</option>
                                <option value="sub">Sub-branch</option>
                            </select>
                        </div>


                        <div class="form-group text-center">
                            <button type="submit" id="reset-btn"
                                class="btn waves-effect waves-light btn-outline-dark">Create branch</button>
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
    <script src="js/managebranch.js"> </script>
    <!-- <script src="assets/toastr/toastr.js"> </script> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>

<!-- Danger Header Modal -->
<div id="del_members" class="modal fade del_members" tabindex="-1" role="dialog"
    aria-labelledby="danger-header-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-colored-header bg-danger">
                <h4 class="modal-title" id="danger-header-modalLabel">Delete Business Account</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <h5 class="mt-0">Account Information</h5>


                <div class="form-group">
                    <label for="username">Business Name</label>
                    <input class="form-control" type="text" id="businessname" required="" placeholder="Michael Zenaty"
                        readonly>
                    <input type="hidden" id="pid">
                    <input type="hidden" id="secure_e">
                    <input type="hidden" id="checker">
                </div>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger" id="delete_account">Delete Account</button>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->