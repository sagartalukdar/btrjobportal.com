<?php include("include/head.php");?>


<body class="bg-light">

    <!-- Preloader -->
    <div id="preloader">
        <div class="preloader-inner">
            <div class="spinner"></div>
            <div class="logo"><img src="assets/img/logo-icon.svg" alt="img"></div>
        </div>
    </div>


    <!-- Default Nav -->
    <?php include("include/header.php");?>

    <?php include("include/horizontal-navbar.php");?>

    <?php include("include/sidebar.php");?>
<?php 
if (isset($_GET['userid'])) {
    $id = $_GET['userid'];
    $read = $crud->Read($table, "`id`=$id");
}

if ($read) {
    $id = $read[0]['id'];
    $email = $read[0]['email'];
    $phone = $read[0]['phone'];
    // $ccode = $read[0]['ccode'];
    // $cdetails = $read[0]['cdetails'];
    // $cdescription = $read[0]['cdescription'];
    // $cfee = $read[0]['cfee'];
    // $cduration = $read[0]['cduration'];
    // $cqualification = $read[0]['qualification'];
    // $courseInstructorName = $read[0]['instructorName'];

    
   
?>
    <!-- Main Wrapper-->
    <main class="main-wrapper">
        <div class="container-fluid">
            <div class="inner-contents">
                <div class="page-header d-flex align-items-center justify-content-between mr-bottom-30">
                    <div class="left-part">
                        <h2 class="text-dark">Upload KYC</h2>
                        <p class="text-gray mb-0">Complete your kyc here.</p>
                    </div>

                </div>


                <div class="card border-0 p-5">
                    <div
                        class="card-header bg-transparent border-0 p-0 d-flex align-items-center justify-content-between gap-3">
                        <h6 class="mb-0" style="text-transform: uppercase;"><?php echo $table;?> KYC</h6>
                    </div>

                    <div class="card-body p-0 pt-4">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" value="<?php echo $email;?>">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Phone</label>
                                <input type="text" class="form-control" name="phone" value="<?php echo $phone;?>">
                            </div>
                        </div>
                        <form id="custom-form-validation" method="post">

                            <div class="form-group">
                                <label class="form-label">Company / Business Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Name"
                                    required>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Company / Business Address</label>
                                <textarea rows="5" id="short-title" class="form-control" name="address"
                                    placeholder="Enter Your Address here ." required></textarea>
                            </div>


                            <div class="form-group">
                                <label class="form-label">State</label>
                                <select class="form-select" aria-label="Default select example" name="state" required>
                                    <option selected disabled>---- SELECT STATE ----</option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>

                                  </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label">District</label>
                                <select class="form-select" aria-label="Default select example" name="district" required>
                                    <option selected disabled>---- SELECT DISTRICT ----</option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>

                                  </select>
                            </div>

                            <!-- <div class="form-group">
                                <label class="form-label">PIN</label>
                                <select class="form-select" aria-label="Default select example" name="pin_code" required>
                                    <option selected disabled>---- SELECT PIN CODE----</option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>

                                  </select>
                            </div> -->

                            <div class="form-group">
                                <label class="form-label"> Licence / Registration / Incorporation Certificate </label>
                                <div class="mb-3">
                                    <img class="img-thumbnail rounded-1" src="assets/img/1.jpg" alt="" width="80">
                                </div>
                                <div class="input-group">
                                    <input type="file" class="form-control" name="certificate" required>
                                </div>
                            </div>


                            <div class="button_group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>

                    </div>
                </div>


            </div>
        </div>
    </main>
   <?php }?>


    <!-- Core JS -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- jQuery UI Kit -->
    <script src="plugins/jquery_ui/jquery-ui.1.12.1.min.js"></script>

    <!-- ApexChart -->


    <!-- Peity  -->
    <script src="plugins/peity/jquery.peity.min.js"></script>
    <script src="plugins/peity/piety-init.js"></script>

    <!-- Select 2 -->
    <script src="plugins/select2/js/select2.min.js"></script>

    <!-- Datatables -->
    <script src="plugins/datatables/js/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/js/datatables.init.js"></script>



    <!-- Date Picker -->
    <script src="plugins/flatpickr/flatpickr.min.js"></script>

    <!-- Dropzone -->
    <script src="plugins/dropzone/dropzone.min.js"></script>
    <script src="plugins/dropzone/dropzone_custom.js"></script>

    <!-- TinyMCE -->
    <script src="plugins/tinymce/tinymce.min.js"></script>
    <script src="plugins/prism/prism.js"></script>
    <script src="plugins/jquery-repeater/jquery.repeater.js"></script>

    <!-- jQuery Validation -->
    <script src="plugins/jquery-validation/jquery.validate.min.js"></script>





    <!-- Sweet Alert -->
    <script src="plugins/sweetalert/sweetalert2.min.js"></script>
    <script src="plugins/sweetalert/sweetalert2-init.js"></script>
    <script src="plugins/nicescroll/jquery.nicescroll.min.js"></script>

    <!-- Snippets JS -->
    <script src="assets/js/snippets.js"></script>

    <!-- Theme Custom JS -->
    <script src="assets/js/theme.js"></script>

</body>


<!-- Mirrored from wpthemebooster.com/demo/themeforest/html/kleon/form-validation-custom.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Feb 2024 06:01:10 GMT -->

</html>