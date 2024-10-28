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




    <!-- Main Wrapper-->
    <main class="main-wrapper">
        <div class="container-fluid">
            <div class="inner-contents">
                <div class="page-header d-flex align-items-center justify-content-between mr-bottom-30">
                    <div class="left-part">
                        <h2 class="text-dark">Hi ! <?php echo $userMail?></h2>
                        <?php
                        if (isset($KYCstatus)) {
                            if ($KYCstatus == 0) {
                                ?>
                                <div class="right-part">
                                    <a href="company-kyc.php?userid=<?php echo $KYCuserID;?>"
                                        class="btn btn-primary rounded-2 ff-heading fs-18 fw-bold py-4"><i
                                            class="bi bi-pie-chart-fill me-1"></i> Update KYC</a>
                                </div>
                                        <?php 
                               // echo  '';
                            }else if($KYCstatus == 1) {
                               echo  '<p class="mb-0"style="color: #009fff;">Your KYC have been Uploaded </p>';
                            }else{
                                 echo  '<p class="mb-0"style="color: #009fff;">verified </p>';
                            }
                        }
                        ?>

                        <?php
                            if (isset($KYCstatus) && isset($userType)) {
                                if ($KYCstatus == 0) {
                                    $kyc_update_page = '';
                                    if ($userType == 'COMPANY') {
                                        $kyc_update_page = 'company-kyc.php';
                                    } else if ($userType == 'APPLICANT'){
                                        $kyc_update_page = 'applicant-kyc.php';
                                    }

                         ?>
                            <div class="right-part">
                                <a href="<?php echo $kyc_update_page; ?>?userid=<?php echo $KYCuserID; ?>"
                                    class="btn btn-primary rounded-2 ff-heading fs-18 fw-bold py-4"><i
                                        class="bi bi-pie-chart-fill me-1"></i> Update KYC</a>
                            </div>
                            <?php
                            } else if ($KYCstatus == 1) {
                                echo '<p class="mb-0" style="color: #009fff;">Your KYC has been uploaded.</p>';
                            } else {
                                echo '<p class="mb-0" style="color: #009fff;">Verified.</p>';
                            }
                        }
                        ?>
                    </div>
                    
                </div>

                <div class="row">
                    <div class="col-xxl-6 col-md-4 col-lg-4">
                        <div class="row">
                            <div class="col col-12">
                                <div class="card border-0 shadow-sm py-3">
                                    <div class="card-body py-0">
                                        <div class="d-flex align-items-center justify-content-between gap-2 flex-wrap">
                                            <div class="d-flex align-items-center gap-0 flex-wrap">
                                   
                                                <div>
                                                    <h4 class="mb-3">Total Balance</h4>
                                                    <h2 class="fs-38 mb-0">$21,560.57</h2>
                                                </div>
                                            </div>

                                            <div>
                                                <h5 class="fw-semibold mb-1">Average from last month</h5>
                                                <p class="text-gray mb-0"><span class="text-success fw-bold"><i
                                                            class="bi bi-graph-up-arrow"></i> +0.5%</span> invoices sent
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-xxl-6 col-md-4 col-lg-4">
                        <div class="row">
                            <div class="col col-12">
                                <div class="card border-0 shadow-sm py-3">
                                    <div class="card-body py-0">
                                        <div class="d-flex align-items-center justify-content-between gap-2 flex-wrap">
                                            <div class="d-flex align-items-center gap-0 flex-wrap">
                                           
                                                <div>
                                                    <h4 class="mb-3">Total Balance</h4>
                                                    <h2 class="fs-38 mb-0">$21,560.57</h2>
                                                </div>
                                            </div>

                                            <div>
                                                <h5 class="fw-semibold mb-1">Average from last month</h5>
                                                <p class="text-gray mb-0"><span class="text-success fw-bold"><i
                                                            class="bi bi-graph-up-arrow"></i> +0.5%</span> invoices sent
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-xxl-6 col-md-4 col-lg-4">
                        <div class="row">
                            <div class="col col-12">
                                <div class="card border-0 shadow-sm py-3">
                                    <div class="card-body py-0">
                                        <div class="d-flex align-items-center justify-content-between gap-2 flex-wrap">
                                            <div class="d-flex align-items-center gap-0 flex-wrap">
                                           
                                                <div>
                                                    <h4 class="mb-3">Total Balance</h4>
                                                    <h2 class="fs-38 mb-0">$21,560.57</h2>
                                                </div>
                                            </div>

                                            <div>
                                                <h5 class="fw-semibold mb-1">Average from last month</h5>
                                                <p class="text-gray mb-0"><span class="text-success fw-bold"><i
                                                            class="bi bi-graph-up-arrow"></i> +0.5%</span> invoices sent
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-xxl-6 col-md-4 col-lg-4">
                        <div class="row">
                            <div class="col col-12">
                                <div class="card border-0 shadow-sm py-3">
                                    <div class="card-body py-0">
                                        <div class="d-flex align-items-center justify-content-between gap-2 flex-wrap">
                                            <div class="d-flex align-items-center gap-0 flex-wrap">
                                           
                                                <div>
                                                    <h4 class="mb-3">Total Balance</h4>
                                                    <h2 class="fs-38 mb-0">$21,560.57</h2>
                                                </div>
                                            </div>

                                            <div>
                                                <h5 class="fw-semibold mb-1">Average from last month</h5>
                                                <p class="text-gray mb-0"><span class="text-success fw-bold"><i
                                                            class="bi bi-graph-up-arrow"></i> +0.5%</span> invoices sent
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>


  <?php include("include/footer.php") ?>    

</body>


</html>