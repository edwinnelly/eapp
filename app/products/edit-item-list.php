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
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <header class="topbar" data-navbarbg="skin6">
            <?php
            include "../controllers/header.php";
            ?>
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <?php
            include "../controllers/sidebar.php";
            ?>
            <!-- End Sidebar scroll-->
        </aside>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1"> Item List</h4>
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
                            <select
                                class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
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
                                <h4 class="card-title"> Add New Items</h4>
                                <div class="row">
                                    <div class="form-group mb-4 col-lg-3 col-md-6">
                                        <label class="" for="inlineFormCustomSelect">Item Type</label>
                                        <select class="custom-select " id="inlineFormCustomSelect">
                                            <option selected="">Inventory</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-4 col-lg-3 col-md-6">
                                        <label class="" for="inlineFormCustomSelect">Item Type</label>
                                        <select class="custom-select " id="inlineFormCustomSelect">
                                            <option selected="">Choose item category</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>

                                    </div>
                                    <div class="form-group mb-4 col-lg-3 col-md-6">
                                        <label class="" for="inlineFormCustomSelect">Attributes</label>
                                        <select class="custom-select " id="inlineFormCustomSelect">
                                            <option selected="">Inventory</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-4 col-lg-3 col-md-6">
                                        <label class="" for="inlineFormCustomSelect">Size</label>
                                        <select class="custom-select " id="inlineFormCustomSelect">
                                            <option selected="">Choose item category</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-4 col-lg-3 col-md-6">
                                        <label class="" for="inlineFormCustomSelect">Category Name</label>
                                        <select class="custom-select " id="inlineFormCustomSelect">
                                            <option selected=""></option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-4 col-lg-3 col-md-6">
                                        <label class="" for="inlineFormCustomSelect">ReOrder</label>
                                        <select class="custom-select " id="inlineFormCustomSelect">
                                            <option selected=""></option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-4 col-lg-3 col-md-6">
                                        <label class="" for="inlineFormCustomSelect">Unit Of Measurement</label>
                                        <select class="custom-select " id="inlineFormCustomSelect">
                                            <option selected=""></option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body col-lg-7">
                                <h4 class="card-title fw-bold"> Description Info</h4>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label"></label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" col="7"
                                        placeholder="Description"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"> Alternate Look-Up</h4>
                                <div class="row">
                                    <div class="form-group mb-4 col-lg-3 col-md-6">
                                        <label class="" for="inlineFormCustomSelect">Item Barcode #</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="First name">
                                    </div>
                                    <div class="form-group mb-4 col-lg-3 col-md-6">
                                        <label class="" for="inlineFormCustomSelect">UPC</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="First name">
                                    </div>
                                    <div class="form-group mb-4 col-lg-3 col-md-6">
                                        <label class="" for="inlineFormCustomSelect">Alternate
                                            Look-UP</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="First name">
                                    </div>
                                    <div class="form-group mb-4 col-lg-3 col-md-6">
                                        <label class="" for="inlineFormCustomSelect">Regular Price</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="First name">
                                    </div>
                                    <div class="form-group mb-4 col-lg-3 col-md-6">
                                        <label class="" for="inlineFormCustomSelect">Order Price</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="First name">
                                    </div>
                                    <div class="form-group mb-4 col-lg-3 col-md-6">
                                        <label class="" for="inlineFormCustomSelect">Aversge Unit
                                            Cost</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="First name">
                                    </div>
                                    <div class="form-group mb-4 col-lg-3 col-md-6">
                                        <label class="" for="inlineFormCustomSelect">Tax Code</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="First name">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <input class="btn btn-primary" type="submit" value="Add Item">
            </div>
        </div>
    </div>
    <?php
    include "../controllers/footer.php";
    ?>
    </div>
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
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!--This page plugins -->
    <script src="assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="dist/js/pages/datatable/datatable-basic.init.js"></script>
</body>

</html>