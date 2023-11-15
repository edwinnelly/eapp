<?php
include "controllers/config.php";
include "controllers/core.php";
include "controllers/user_data.php";

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
                                                <h1 class="font-light text-white">
                                                    <?= count($data); ?>
                                                </h1>
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
                                                    <td><span class="badge badge-light-warning">
                                                            <?= $sn++; ?>
                                                        </span></td>
                                                    <td><span class="badge badge-light-warning">Active</span></td>
                                                    <td><a href="javascript:void(0)" class="font-weight-medium link">
                                                            <?= $companylist->company_name; ?>
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
                                                                <!-- Dropdown menu links -->
                                                                <a class="dropdown-item" href="ui-buttons.html#">Go to
                                                                    Business</a>
                                                                <a class="dropdown-item" href="ui-buttons.html#">Suspend
                                                                    Account</a>
                                                                <a class="dropdown-item" href="ui-buttons.html#">View
                                                                    Logs</a>
                                                                <a class="dropdown-item" href="business_list.php?cida=<?php echo base64_encode($companylist->checker_id); ?>&&cidname= <?= base64_encode($companylist->company_name); ?>">Manage
                                                                    Business
                                                                </a>
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
                            <select class="form-control" id="exampleFormControlSelect1" name="country">
                                <option value="">Chooose Country</option>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American-Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antartica">Antarctica</option>
                                <option value="Antigua">Antigua and Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bosnia-Herzegowina">Bosnia and Herzegowina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Bouvet-Island">Bouvet Island</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British-Indian-Ocean-Territory">British Indian Ocean Territory</option>
                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos Islands">Cocos (Keeling) Islands</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Congo">Congo, the Democratic Republic of the</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cota D'Ivoire">Cote d'Ivoire</option>
                                <option value="Croatia">Croatia (Hrvatska)</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="East Timor">East Timor</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="France Metropolitan">France, Metropolitan</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Territories">French Southern Territories</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
                                <option value="Holy See">Holy See (Vatican City State)</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran">Iran (Islamic Republic of)</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Democratic People's Republic of Korea">Korea, Democratic People's
                                    Republic of
                                </option>
                                <option value="Korea">Korea, Republic of</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Lao">Lao People's Democratic Republic</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macau">Macau</option>
                                <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Micronesia">Micronesia, Federated States of</option>
                                <option value="Moldova">Moldova, Republic of</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau">Palau</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Pitcairn">Pitcairn</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russia">Russian Federation</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                <option value="Saint LUCIA">Saint LUCIA</option>
                                <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia (Slovak Republic)</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
                                <option value="Span">Spain</option>
                                <option value="SriLanka">Sri Lanka</option>
                                <option value="St. Helena">St. Helena</option>
                                <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syria">Syrian Arab Republic</option>
                                <option value="Taiwan">Taiwan, Province of China</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania">Tanzania, United Republic of</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks and Caicos">Turks and Caicos Islands</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="United States Minor Outlying Islands">United States Minor Outlying
                                    Islands
                                </option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Vietnam">Viet Nam</option>
                                <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
                                <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
                                <option value="Western Sahara">Western Sahara</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Serbia">Serbia</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
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