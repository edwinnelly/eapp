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
                                <h4 class="card-title"> Item List</h4>
                                <h6 class="card-subtitle">You can add, edit or delete Item here
                                </h6>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <div class="mb-5">
                                            <a href="addnew.php"><button type="button" class="btn btn-primary float-right ">Add New Item</button></a>
                                        </div>
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Images</th>
                                                <th>Item Name</th>
                                                <th>Item Description</th>
                                                <th>Attributes</th>
                                                <th>Size</th>
                                                <th>Regular Pricing</th>
                                                <th>On-hand Quantity</th>
                                                <th>On Order</th>
                                                <th>Rating</th>
                                                <th>Category</th>
                                                <th>Alternate Lookup</th>
                                                <th>Creation Date</th>
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
                                                        <button type="button" class="btn btn-primary btn-sm"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            Action
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <!-- Dropdown menu links -->
                                                            <a class="dropdown-item" href="#">Edit item Info </a>
                                                            <a class="dropdown-item" href="#">Edit item Images </a>
                                                            <a class="dropdown-item" href="#">Edit item Category </a>
                                                            <a class="dropdown-item" href="#">Mark As Out of Stock</a>
                                                            <a class="dropdown-item" href="#">Items to Other
                                                                Branches</a>
                                                            <a class="dropdown-item" href="#">Restock Item</a>
                                                            <a class="dropdown-item" href="#">Returned Item</a>
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
    <div id="right-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-right">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="text-center pb-3">
                        <span class="fw-bold fs-5">Add New Item</span>
                    </div>
                    <form action="#" class="pl-5 pr-5">
                        <div class="row">
                            <div class="form-group mb-4 col-6">
                                <label class="mr-sm-2" for="inlineFormCustomSelect">Item Type</label>
                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                    <option selected="">Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="form-group mb-4 col-6">
                                <label class="mr-sm-2" for="inlineFormCustomSelect">Category Name</label>
                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                    <option selected="">Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="mr-sm-2" for="inlineFormCustomSelect">Vendor Name</label>
                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                <option selected="">Choose...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="form-group mb-4">
                            <label for="item-name">Item Name</label>
                            <input class="form-control" id="item-name" type="text" required="" placeholder="">
                        </div>
                        <div class="form-group mb-4">
                            <label for="item-name">Atttributes</label>
                            <input class="form-control" id="item-name" type="text" required="" placeholder="">
                        </div>
                        <div class="form-group mb-4">
                            <label for="item-name">Size</label>
                            <input class="form-control" id="item-name" type="text" required="" placeholder="">
                        </div>
                        <div class="row">
                        <div class="form-group mb-4">
                            <label for="item-name">On Hand Quantity</label>
                            <input class="form-control" id="item-name" type="number" required="" placeholder="">
                        </div>
                        <div class="form-group mb-4">
                            <label for="item-name">Available Quantity</label>
                            <input class="form-control" id="item-name" type="number" required="" placeholder="">
                        </div>
</div>
                        <div class="form-group text-center">
                            <button class="btn btn-rounded btn-primary btn-sm me-2" type="submit">Add Item</button>
                            <button class="btn btn-rounded btn-danger btn-sm">X</button>
                        </div>
                    </form>
                </div>
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