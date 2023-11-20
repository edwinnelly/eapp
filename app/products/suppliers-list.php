<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <?php
    include "../controllers/style.php";
    include "fonts/font.php";
    ?>
</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <header class="topbar" data-navbarbg="skin6">
            <?php
            include "../controllers/header.php";
            ?>
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <?php
            include "../controllers/sidebar.php";
            ?>
        </aside>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Suppliers List</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Add</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Edit</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 align-self-center">
                        <div class="customize-input float-right">
                            <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                                <option selected>Aug 19</option>
                                <option value="1">July 19</option>
                                <option value="2">Jun 19</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Suppliers List</h4>
                                <h6 class="card-subtitle">You can add, edit or delete Suppliers here
                                </h6>
                                <button type="button" class="btn btn-primary float-right mb-2" data-toggle="modal" data-target="#add-sup">Add Suppliers</button>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Vendor Code</th>
                                                <th>Vendor Name</th>
                                                <th>Street</th>
                                                <th>City</th>
                                                <th>State</th>
                                                <th>ZIP</th>
                                                <th>Phone</th>
                                                <th>Alternate Phone</th>
                                                <th>Inactive</th>
                                                <th>Suppliers Note</th>
                                                <th>Email</th>
                                                <th>Suppliers Website</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="text-center">
                                                    <div class="btn-group dropleft">
                                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Action
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#dark">Edit </a>
                                                            <a class="dropdown-item" href="#">Add </a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            include "../controllers/footer.php";
            ?>
        </div>
    </div>
    <div id="dark" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="dark-header-modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-colored-header bg-dark">
                    <h4 class="modal-title" id="dark-header-modalLabel">Edit Supply List</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                <form action="#" class="pl-5 pr-5">
                        <div class="form-group mb-4">
                            <label for="">Vendor Code</label>
                            <input class="form-control" type="text" required="" placeholder="">
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Vendor Name</label>
                            <input class="form-control" type="text" required="" placeholder="">
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Street</label>
                            <input class="form-control" type="text" required="" placeholder="">
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-xl-6">
                                <div class="form-group mb-4">
                                    <label for="">City</label>
                                    <input class="form-control" type="text" required="" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-6">
                                <div class="form-group mb-4">
                                    <label for="">State</label>
                                    <input class="form-control" type="text" required="" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Zip</label>
                            <input class="form-control" type="text" required="" placeholder="">
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-xl-6">
                                <div class="form-group mb-4">
                                    <label for="">Phone</label>
                                    <input class="form-control" type="text" required="" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-6">
                                <div class="form-group mb-4">
                                    <label for="">Alternate Phone</label>
                                    <input class="form-control" type="text" required="" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Vendor Note</label>
                            <input class="form-control" type="text" required="" placeholder="">
                        </div>
                        <div class="form-group mb-4">
                            <label for="">E-mail</label>
                            <input class="form-control" type="text" required="" placeholder="">
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Website</label>
                            <input class="form-control" type="text" required="" placeholder="">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-dark">Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <div id="add-sup" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="dark-header-modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-colored-header bg-dark">
                    <h4 class="modal-title" id="dark-header-modalLabel">Add Supply List</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                <form action="#" class="pl-5 pr-5">
                        <div class="form-group mb-4">
                            <label for="">Vendor Code</label>
                            <input class="form-control" type="text" required="" placeholder="">
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Vendor Name</label>
                            <input class="form-control" type="text" required="" placeholder="">
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Street</label>
                            <input class="form-control" type="text" required="" placeholder="">
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-xl-6">
                                <div class="form-group mb-4">
                                    <label for="">City</label>
                                    <input class="form-control" type="text" required="" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-6">
                                <div class="form-group mb-4">
                                    <label for="">State</label>
                                    <input class="form-control" type="text" required="" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Zip</label>
                            <input class="form-control" type="text" required="" placeholder="">
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-xl-6">
                                <div class="form-group mb-4">
                                    <label for="">Phone</label>
                                    <input class="form-control" type="text" required="" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-6">
                                <div class="form-group mb-4">
                                    <label for="">Alternate Phone</label>
                                    <input class="form-control" type="text" required="" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Vendor Note</label>
                            <input class="form-control" type="text" required="" placeholder="">
                        </div>
                        <div class="form-group mb-4">
                            <label for="">E-mail</label>
                            <input class="form-control" type="text" required="" placeholder="">
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Website</label>
                            <input class="form-control" type="text" required="" placeholder="">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-dark">Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="dist/js/app-style-switcher.js"></script>
    <script src="dist/js/feather.min.js"></script>
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <script src="dist/js/sidebarmenu.js"></script>
    <script src="dist/js/custom.min.js"></script>
    <script src="assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="dist/js/pages/datatable/datatable-basic.init.js"></script>
</body>

</html>