    <?php include("include/head.php");?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
<link rel="stylesheet" href="assets/css/customindex.css" id="stylesheet">
    <body class="bg-light">
<style>
    .white{
        color:white;
    }
</style>
        <!-- Preloader -->
        <?php include("include/preloader.php");?>

        <!-- Default Nav -->
        <?php include("include/header.php");?>

        <?php include("include/horizontal-navbar.php");?>
       

        <?php include("include/sidebar.php");?>



        <!-- CODE -->
        <!-- if user then name variable = coulumnName -->

        <!-- IF NAME NOT NULL THEN DISPLAY NAME ELSE DISPLAY EMAIL. -->
        <?php
         $displayName = $crud->Read($table,"`id`='$userID'");
        if($displayName[0]['name']!==null){
            $name = $displayName[0]['name'];
            } else {
            $name = $displayName[0]['email'];
        }
        ?>
       


        <!-- Main Wrapper-->
        <main class="main-wrapper">
            <div class="container-fluid">
                <div class="inner-contents">
                    <div class="page-header d-flex align-items-center justify-content-between mr-bottom-30">
                        <div class="left-part">
                            <h2 class="text-dark">Hi ! <?php echo $name?></h2>
                           
                            <?php
                                if (isset($KYCstatus) && isset($userType)) {
                                    if ($userType != 'ADMIN') { 
                                        if ($KYCstatus == 0 ||$KYCstatus == 3 ) {
                                            $kyc_update_page = '';
                                            if ($userType == 'COMPANY') {
                                                $kyc_update_page = 'company-kyc';
                                            } else if ($userType == 'APPLICANT'){
                                                $kyc_update_page = 'applicant-kyc';
                                            }
                                ?>
                                            <div class="right-part">
                                                <a href="<?php echo $kyc_update_page; ?>?userid=<?php echo $KYCuserID; ?>"
                                                    class="verify_email">Update KYC</a>
                                            </div>
                                <?php
                                        } else if ($KYCstatus == 1) {
                                            echo '<p class="right-part style="background-color: #605dd2;color: white;padding: 7px 7px 7px;font-weight: 700;border-radius: 6px;">Your KYC has been uploaded.</p>';
                                        } else if ($KYCstatus == 2) {
                                            echo '<p class="right-part" style="background-color: #605dd2;color: white;padding: 7px 7px 7px;font-weight: 700;border-radius: 6px;">Your KYC is Verified</p>';
                                        }
                                    }
                                }
                                ?>

                        </div>
                        
                    </div>
                <?php 
                    if ($userType == "ADMIN" || $userType == "COUNSELLOR") {
                         $countCompany=$crud->Count("company","1");
                        $countApplicants=$crud->Count("applicant","1");
                        $countJob=$crud->Count("job_listing","1");
                        $countJobApplied=$crud->Count("job_applied","1");
                    } else if ($userType == "COMPANY") {
                       $countCurrentJob=$crud->Count("job_listing","`company_id`='$userID'");
                        $countCurrentJobApplied=$crud->Count("job_applied","`company_id`='$userID'");
                        $countCurrentRejected=$crud->Count("job_applied","`company_id`='$userID' and `status`=3");
                        $countHired=$crud->Count("job_applied","`company_id`='$userID' and `status`=2");
                    } else if ($userType == "APPLICANT") {
                       $countJob=$crud->Count("job_listing","1");
                       $countJobApplied=$crud->Count("job_applied","`applicant_id`='$userID'");
                        $countnotSelected=$crud->Count("job_applied","`applicant_id`='$userID' and `status`=3");
                        $countSelected=$crud->Count("job_applied","`applicant_id`='$userID' and `status`=2");
                    } else {
                      
                       exit; 
                    }
                    
                    
                ?>
                    <div class="row">
                         <?php
                            if ($_SESSION['userType'] == 'ADMIN' || $_SESSION['userType'] == 'COUNSELLOR') {
                               
                            ?>
                        <div class="col-xl-6 col-lg-6">
                            <a href="view-all-companies" class="card-link">
                                <div class="card l-bg-cherry">
                                    <div class="card-statistic-3 p-4">
                                        <!-- <div class="card-icon card-icon-large"><i class="fas fa-shopping-cart"></i></div> -->
                                        <div class="mb-4">
                                            <h5 class="card-title mb-0 white">Total Companies</h5>
                                        </div>
                                        <div class="row align-items-center mb-2 d-flex">
                                            <div class="col-8">
                                                <h2 class="d-flex align-items-center mb-0 white">
                                                    <?php echo $countCompany;?>
                                                </h2>
                                            </div>
                                            <!-- <div class="col-4 text-right">
                                                <span>12.5% <i class="fa fa-arrow-up"></i></span>
                                            </div> -->
                                        </div>
                                        <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                            <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-6 col-lg-6">
                            <a href="applicants" class="card-link">
                                <div class="card l-bg-blue-dark">
                                    <div class="card-statistic-3 p-4">
                                        <div class="card-icon card-icon-large"><i class="fas fa-users"></i></div>
                                        <div class="mb-4">
                                            <h5 class="card-title mb-0 white">Total Applicants</h5>
                                        </div>
                                        <div class="row align-items-center mb-2 d-flex">
                                            <div class="col-8">
                                                <h2 class="d-flex align-items-center mb-0 white">
                                                    <?php echo$countApplicants;?>
                                                </h2>
                                            </div>
                                            <!-- <div class="col-4 text-right">
                                                <span>9.23% <i class="fa fa-arrow-up"></i></span>
                                            </div> -->
                                        </div>
                                        <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                            <div class="progress-bar l-bg-green" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <a href="all-jobs" class="card-link">
                                <div class="card l-bg-green-dark">
                                    <div class="card-statistic-3 p-4">
                                        <div class="card-icon card-icon-large"><i class="fas fa-ticket-alt"></i></div>
                                        <div class="mb-4">
                                            <h5 class="card-title mb-0 white">Total Job Listed</h5>
                                        </div>
                                        <div class="row align-items-center mb-2 d-flex">
                                            <div class="col-8">
                                                <h2 class="d-flex align-items-center mb-0 white">
                                                   <?php echo $countJob;?>
                                                </h2>
                                            </div>
                                            <!-- <div class="col-4 text-right">
                                                <span>10% <i class="fa fa-arrow-up"></i></span>
                                            </div> -->
                                        </div>
                                        <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                            <div class="progress-bar l-bg-orange" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <a href="total-applied" class="card-link">
                                <div class="card l-bg-orange-dark">
                                    <div class="card-statistic-3 p-4">
                                        <!-- <div class="card-icon card-icon-large"><i class="fas fa-dollar-sign"></i></div> -->
                                        <div class="mb-4">
                                            <h5 class="card-title mb-0 white">Total Applied</h5>
                                        </div>
                                        <div class="row align-items-center mb-2 d-flex">
                                            <div class="col-8">
                                                <h2 class="d-flex align-items-center mb-0 white">
                                                    <?php echo $countJobApplied;?>
                                                </h2>
                                            </div>
                                            <!-- <div class="col-4 text-right">
                                                <span>2.5% <i class="fa fa-arrow-up"></i></span>
                                            </div> -->
                                        </div>
                                        <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                            <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <?php }?>

                         <?php
                            if ($_SESSION['userType'] == 'APPLICANT') {
                               
                            ?>
                            <div class="col-xl-6 col-lg-6">
                                <a href="all-jobs" class="card-link">
                                    <div class="card l-bg-green-dark">
                                        <div class="card-statistic-3 p-4">
                                            <div class="card-icon card-icon-large"><i class="fas fa-ticket-alt"></i></div>
                                            <div class="mb-4">
                                                <h5 class="card-title mb-0 white">Total Job Listed</h5>
                                            </div>
                                            <div class="row align-items-center mb-2 d-flex">
                                                <div class="col-8">
                                                    <h2 class="d-flex align-items-center mb-0 white">
                                                       <?php echo $countJob;?>
                                                    </h2>
                                                </div>
                                                <!-- <div class="col-4 text-right">
                                                    <span>10% <i class="fa fa-arrow-up"></i></span>
                                                </div> -->
                                            </div>
                                            <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                                <div class="progress-bar l-bg-orange" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <div class="col-xl-6 col-lg-6">
                            <a href="applied" class="card-link">
                                <div class="card l-bg-cherry">
                                    <div class="card-statistic-3 p-4">
                                         <!--<div class="card-icon card-icon-large"><i class="fas fa-shopping-cart"></i></div> -->
                                        <div class="mb-4">
                                            <h5 class="card-title mb-0 white">Total Applied</h5>
                                        </div>
                                        <div class="row align-items-center mb-2 d-flex">
                                            <div class="col-8">
                                                <h2 class="d-flex align-items-center mb-0 white">
                                                    <?php echo $countJobApplied;?>
                                                </h2>
                                            </div>
                                            <!-- <div class="col-4 text-right">
                                                <span>12.5% <i class="fa fa-arrow-up"></i></span>
                                            </div> -->
                                        </div>
                                        <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                            <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <a href="rejected" class="card-link">
                                <div class="card l-bg-blue-dark">
                                    <div class="card-statistic-3 p-4">
                                        <div class="card-icon card-icon-large"><i class="fas fa-users"></i></div>
                                        <div class="mb-4">
                                            <h5 class="card-title mb-0 white">Rejected</h5>
                                        </div>
                                        <div class="row align-items-center mb-2 d-flex">
                                            <div class="col-8">
                                                <h2 class="d-flex align-items-center mb-0 white">
                                                    <?php echo $countnotSelected;?>
                                                </h2>
                                            </div>
                                            <!-- <div class="col-4 text-right">
                                                <span>9.23% <i class="fa fa-arrow-up"></i></span>
                                            </div> -->
                                        </div>
                                        <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                            <div class="progress-bar l-bg-green" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                        <div class="col-xl-6 col-lg-6">
                            <a href="selected" class="card-link">
                                <div class="card l-bg-orange-dark">
                                    <div class="card-statistic-3 p-4">
                                        <!-- <div class="card-icon card-icon-large"><i class="fas fa-dollar-sign"></i></div> -->
                                        <div class="mb-4">
                                            <h5 class="card-title mb-0 white">Selected</h5>
                                        </div>
                                        <div class="row align-items-center mb-2 d-flex">
                                            <div class="col-8">
                                                <h2 class="d-flex align-items-center mb-0 white">
                                                    <?php echo $countSelected;?>
                                                </h2>
                                            </div>
                                            <!-- <div class="col-4 text-right">
                                                <span>2.5% <i class="fa fa-arrow-up"></i></span>
                                            </div> -->
                                        </div>
                                        <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                            <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php }?>

                    <?php
                            if ($_SESSION['userType'] == 'COMPANY') {
                               
                            ?>
                            <div class="col-xl-6 col-lg-6">
                                <a href="view-jobs" class="card-link">
                                    <div class="card l-bg-green-dark">
                                        <div class="card-statistic-3 p-4">
                                            <div class="card-icon card-icon-large"><i class="fas fa-ticket-alt"></i></div>
                                            <div class="mb-4">
                                                <h5 class="card-title mb-0 white">Total Job Listed</h5>
                                            </div>
                                            <div class="row align-items-center mb-2 d-flex">
                                                <div class="col-8">
                                                    <h2 class="d-flex align-items-center mb-0 white">
                                                       <?php echo $countCurrentJob;?>
                                                    </h2>
                                                </div>
                                                <!-- <div class="col-4 text-right">
                                                    <span>10% <i class="fa fa-arrow-up"></i></span>
                                                </div> -->
                                            </div>
                                            <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                                <div class="progress-bar l-bg-orange" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <div class="col-xl-6 col-lg-6">
                            <a href="view-applicants" class="card-link">
                                <div class="card l-bg-cherry">
                                    <div class="card-statistic-3 p-4">
                                           <div class="card-icon card-icon-large"><i class="fas fa-users"></i></div>
                                        <div class="mb-4">
                                            <h5 class="card-title mb-0 white">Total Applied</h5>
                                        </div>
                                        <div class="row align-items-center mb-2 d-flex">
                                            <div class="col-8">
                                                <h2 class="d-flex align-items-center mb-0 white">
                                                    <?php echo $countCurrentJobApplied;?>
                                                </h2>
                                            </div>
                                            <!-- <div class="col-4 text-right">
                                                <span>12.5% <i class="fa fa-arrow-up"></i></span>
                                            </div> -->
                                        </div>
                                        <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                            <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <a href="applicant-rejected" class="card-link">
                                <div class="card l-bg-blue-dark">
                                    <div class="card-statistic-3 p-4">
                                        <div class="card-icon card-icon-large"><i class="fas fa-users"></i></div>
                                        <div class="mb-4">
                                            <h5 class="card-title mb-0 white">Reject</h5>
                                        </div>
                                        <div class="row align-items-center mb-2 d-flex">
                                            <div class="col-8">
                                                <h2 class="d-flex align-items-center mb-0 white">
                                                    <?php echo $countCurrentRejected;?>
                                                </h2>
                                            </div>
                                            <!-- <div class="col-4 text-right">
                                                <span>9.23% <i class="fa fa-arrow-up"></i></span>
                                            </div> -->
                                        </div>
                                        <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                            <div class="progress-bar l-bg-green" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                        <div class="col-xl-6 col-lg-6">
                            <a href="applicant-hired" class="card-link">
                                <div class="card l-bg-orange-dark">
                                    <div class="card-statistic-3 p-4">
                                           <div class="card-icon card-icon-large"><i class="fas fa-users"></i></div>
                                        <div class="mb-4">
                                            <h5 class="card-title mb-0 white">Selected</h5>
                                        </div>
                                        <div class="row align-items-center mb-2 d-flex">
                                            <div class="col-8">
                                                <h2 class="d-flex align-items-center mb-0 white">
                                                    <?php echo $countHired;?>
                                                </h2>
                                            </div>
                                            <!-- <div class="col-4 text-right">
                                                <span>2.5% <i class="fa fa-arrow-up"></i></span>
                                            </div> -->
                                        </div>
                                        <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                            <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php }?>
                    </div>
               
                </div>
            </div>
        </main>


      <?php include("include/footer.php") ?>    

    </body>


    </html>