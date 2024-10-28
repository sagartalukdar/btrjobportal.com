 <?php

if(isset($_SESSION['userType']) && isset($_SESSION['userMail'])) {
    $userType = $_SESSION['userType'];
    $userMail = $_SESSION['userMail'];

    if ($userType == "ADMIN" || $userType == "COUNSELLOR") {
        $table = "users";
    } else if ($userType == "COMPANY") {
        $table = "company";
    } else if ($userType == "APPLICANT") {
        $table = "applicant";
    } else {
       echo "Sorry, invalid user type.";
       exit; 
    }
    if ($userType != "ADMIN" || $userType != "COUNSELLOR") {
        $checkStatus= $crud->Read($table,"`id`='$userID'");
        $KYCuserID=$checkStatus[0]["id"];
        $KYCstatus=$checkStatus[0]["status"];
    }
    
    
    
} else {
    // If userType or userMail is not set in the session, redirect to the login page
    $_SESSION['errLogin'] = "You must select a role to login.";
    unset($_SESSION['user-email']);
    unset($_SESSION['user-password']);
    header('location:login');
    exit; 
}
?>
<!-- Vertical Nav -->
<div class="kleon-vertical-nav">
    <!-- Logo  -->
    <div class="logo d-flex align-items-center justify-content-between">
        <a href="index" class="d-flex align-items-center gap-3 flex-shrink-0">
            <img src="assets/img/logo2.png" style="max-width: 120px;background-repeat: no-repeat;" alt="logo">
            <!-- <div class="position-relative flex-shrink-0">
                <img src="assets/img/logo.png" alt="" class="logo-text">
                <img src="assets/img/logo.png" alt="" class="logo-text-white">
            </div> -->
        </a>
        <button type="button" class="kleon-vertical-nav-toggle"><i class="bi bi-list"></i></button>
    </div>

    <div class="kleon-navmenu">
        <!-- <h6 class="hidden-header text-gray text-uppercase ls-1 ms-4 mb-4">Main Menu</h6> -->
        <ul class="main-menu">

            <li class="menu-section-title text-gray ff-heading fs-16 fw-bold text-uppercase mt-4 mb-2"><span>Home</span>
            </li>
            <li class="menu-item "><a href="../index"> <span class="nav-icon flex-shrink-0"><i
                            class="bi bi-globe fs-18"></i></span> <span class="nav-text">Go To Main Website</span></a>
            </li>

            <li class="menu-item "><a href="index"> <span class="nav-icon flex-shrink-0"><i
                            class="bi bi-speedometer fs-18"></i></span> <span class="nav-text">Dashboard</span></a>
            </li>
            <?php
                                if (isset($KYCstatus) && isset($userType)) {
                                    if ($KYCstatus == 0 || $KYCstatus == 3) {
                                        $kyc_update_page = '';
                                        if ($userType == 'COMPANY') {
                                            $kyc_update_page = 'company-kyc';
                                        } else if ($userType == 'APPLICANT'){
                                            $kyc_update_page = 'applicant-kyc';
                                        }

                             ?>
            <li class="menu-item "><a href="<?php echo $kyc_update_page; ?>?userid=<?php echo $KYCuserID; ?>"> <span class="nav-icon flex-shrink-0"><i
                            class="bi bi-check-square fs-18"></i></span> <span class="nav-text">KYC</span></a>
            </li>
             

            <?php }}?>
           
            
                <?php
                // if ($_SESSION['userType'] == 'ADMIN' || $_SESSION['userType'] == 'COUNSELLOR') 
                 if ($_SESSION['userType'] == 'ADMIN') 
                {
                   
                ?>
                    
                <!-- User Management -->
                 <li class="menu-section-title text-gray ff-heading fs-16 fw-bold text-uppercase mt-4 mb-2"><span>User Management</span>
                </li>
                <li class="menu-item "><a href="view-user"> <span class="nav-icon flex-shrink-0"><i
                                class="bi bi-person-plus fs-18"></i></span> <span class="nav-text">View Users</span></a>
                </li>
                <li class="menu-item "><a href="add-user"> <span class="nav-icon flex-shrink-0"><i
                                class="bi bi-person-plus fs-18"></i></span> <span class="nav-text">Add Users</span></a>
                </li>
             <?php }?>
             <!--profile management-->
             <?php
                        if (isset($userType)) {
                           
                                $view_profile_page = '';
                                $update_profile_page='';
                                if ($userType == 'ADMIN' ||$userType == 'COUNSELLOR') {
                                    $view_profile_page = 'view-user-profile';
                                    // $update_profile_page='update-user-profile';
                                } 
                                else if ($userType == 'COMPANY') {
                                    $view_profile_page = 'view-company-profile';
                                    $update_profile_page='update-company-profile';
                                } else if ($userType == 'APPLICANT'){
                                     $view_profile_page = 'view-applicant-profile';
                                    $update_profile_page='update-applicant-profile';
                                }

                ?>
            
                    <li class="menu-section-title text-gray ff-heading fs-16 fw-bold text-uppercase mt-4 mb-2"><span>My Profile</span></li>
                    <li class="menu-item "><a href="<?php echo $view_profile_page;?>"> <span class="nav-icon flex-shrink-0"><i class="bi bi-person-plus fs-18"></i></span> <span class="nav-text">View Profile</span></a>
                    </li>
                    <li class="menu-item "><a href="<?php echo $update_profile_page;?>"> <span class="nav-icon flex-shrink-0"><i  class="bi bi-person-plus fs-18"></i></span> <span class="nav-text">Update Profile</span></a>
                    </li>
                     <li class="menu-item "><a href="change-password"> <span class="nav-icon flex-shrink-0"><i class="bi bi-key fs-18"></i></span> <span class="nav-text">Change Password
                                </span></a>
                </li>
           
                <?php }?>
             <!--profile management-->

            <?php
                if ($_SESSION['userType'] == 'ADMIN' || $_SESSION['userType'] == 'COUNSELLOR') {
                   
            ?>
            <!-- Company Management -->
                <li class="menu-section-title text-gray ff-heading fs-16 fw-bold text-uppercase mt-4 mb-2"><span>Company Management</span>
                </li>
                <li class="menu-item "><a href="add-company"> <span class="nav-icon flex-shrink-0"><i class="bi bi-person-plus fs-18"></i></span> <span class="nav-text">Add Company</span></a>
                </li>
                <li class="menu-item "><a href="view-all-companies"> <span class="nav-icon flex-shrink-0"><i class="bi bi-eye fs-18"></i></span> <span class="nav-text">View Company lists</span></a>
                </li>
                <li class="menu-item "><a href="verify-company-kyc"> <span class="nav-icon flex-shrink-0"><i class="bi bi-check-square fs-18"></i></span> <span class="nav-text">Verify Company KYC</span></a>
                </li>
                <li class="menu-item "><a href="verified-company"> <span class="nav-icon flex-shrink-0"><i class="bi bi-check-square fs-18"></i></span> <span class="nav-text">KYC Verified Companies</span></a>
                <li class="menu-item "><a href="rejected-company"> <span class="nav-icon flex-shrink-0"><i class="bi bi-x-square text-danger fs-18"></i></span> <span class="nav-text">KYC Rejected Companies</span></a>
                </li>
                <li class="menu-item "><a href="all-jobs"> <span class="nav-icon flex-shrink-0"><i class="bi bi-eye fs-18"></i></span> <span class="nav-text">Job listed by Companies</span></a>
                </li>
                </li>
            <?php }?>
             <?php
                if ($_SESSION['userType'] == 'COMPANY' AND $KYCstatus==2 ) {
                   
            ?>

            <!-- job Management -->
            <li class="menu-section-title text-gray ff-heading fs-16 fw-bold text-uppercase mt-4 mb-2">
                <span>Job Management</span>
            </li>

            <li class="menu-item "><a href="add-job"> <span class="nav-icon flex-shrink-0"><i
                            class="fa fa-plus"></i></span> <span class="nav-text">Add Job</span></a>
            </li>
            <li class="menu-item "><a href="view-jobs"> <span class="nav-icon flex-shrink-0"><i
                            class="bi bi-eye fs-18"></i></span> <span class="nav-text">View jobs</span></a>
            </li>

            <li class="menu-item "><a href="view-applicants"> <span class="nav-icon flex-shrink-0"><i
                            class="fa fa-list"></i></span> <span class="nav-text">All Applicants</span></a>
            </li>
            <li class="menu-item "><a href="applicant-hired"> <span class="nav-icon flex-shrink-0"><i
                            class="fa fa-check"></i></span> <span class="nav-text">Applicant Hired</span></a>
            </li>
            <li class="menu-item "><a href="applicant-rejected"> <span class="nav-icon flex-shrink-0"><i
                            class="bi bi-x-square text-danger fs-18"></i></span> <span class="nav-text">Applicant Rejected</span></a>
            </li>
            
        <?php }?>
        <?php
                if ($_SESSION['userType'] == 'APPLICANT' ) {
                   
            ?>

            <!-- job Management -->
            <li class="menu-section-title text-gray ff-heading fs-16 fw-bold text-uppercase mt-4 mb-2">
                <span>Job Management</span>
            </li>

            <li class="menu-item "><a href="all-jobs"> <span class="nav-icon flex-shrink-0"><i
                            class="bi bi-eye fs-18"></i></span> <span class="nav-text">Apply jobs</span></a>
            </li>

            <li class="menu-item "><a href="applied"> <span class="nav-icon flex-shrink-0"><i
                            class="fa fa-check"></i></span> <span class="nav-text">Applied Jobs</span></a>
            </li>
            <li class="menu-item "><a href="selected"> <span class="nav-icon flex-shrink-0"><i
                            class="fa fa-check"></i></span> <span class="nav-text">Selected</span></a>
            </li>
            <li class="menu-item "><a href="rejected"> <span class="nav-icon flex-shrink-0"><i
                            class="bi bi-x-square text-danger fs-18"></i></span> <span class="nav-text">Rejected</span></a>
            </li> 
            <li class="menu-item "><a href="applicant-interview"> <span class="nav-icon flex-shrink-0"><i
                            class="fa fa-phone"></i></span> <span class="nav-text">Invitation</span></a>
            </li> 
        <?php }?>

            <?php
                if ($_SESSION['userType'] == 'ADMIN' || $_SESSION['userType'] == 'COUNSELLOR') {
                   
            ?>

            <!-- Applicant Management -->
            <li class="menu-section-title text-gray ff-heading fs-16 fw-bold text-uppercase mt-4 mb-2">
                <span>Applicant Management</span>
            </li>
             <li class="menu-item "><a href="applicants"> <span class="nav-icon flex-shrink-0"><i
                            class="bi bi-eye fs-18"></i></span> <span class="nav-text">View Applicant list</span></a>
            </li>

            <li class="menu-item "><a href="verify-applicant"> <span class="nav-icon flex-shrink-0"><i
                            class="bi bi-check-square fs-18"></i></span> <span class="nav-text">Verify
                        Applicant KYC</span></a>
            </li>

           
            <li class="menu-item "><a href="verified-applicants"> <span class="nav-icon flex-shrink-0"><i
                            class="bi bi-check-square fs-18"></i></span> <span class="nav-text">KYC Verified Applicants</span></a>
            </li>
            <li class="menu-item "><a href="rejected-applicants"> <span class="nav-icon flex-shrink-0"><i
                            class="bi bi-x-square text-danger fs-18"></i></span> <span class="nav-text">KYC Rejected Applicants </span></a>
            </li>
            <li class="menu-item "><a href="total-applied"> <span class="nav-icon flex-shrink-0"><i
                            class="bi bi-check-square fs-18"></i></span> <span class="nav-text">Candidates Applied</span></a>
            </li>
            <li class="menu-item "><a href="company-selection-cards"> <span class="nav-icon flex-shrink-0"><i
                            class="bi bi-check-square fs-18"></i></span> <span class="nav-text">Candidates Selected</span></a>
            </li>
            <li class="menu-item "><a href="company-rejection-cards"> <span class="nav-icon flex-shrink-0"><i
                            class="bi bi-x-square text-danger fs-18"></i></span> <span class="nav-text">Candidates Rejected</span></a>
            </li>
            <?php }?>

        </ul>
        
    </div>

    <!--<div class="card border-0 text-white mr-top-70 boost-card">-->
    <!--    <div class="card-body">-->
    <!--        <div class="icon fs-20 mb-2"><i class="bi bi-speedometer2"></i></div>-->
    <!--        <h5 class="fs-18 text-white">Boost your work</h5>-->
    <!--        <p class="fs-14 mb-4">Upgrade to premium here</p>-->
    <!--        <a href="#" class="btn ff-heading fw-bold fs-16 bg-white text-primary rounded-3 border-0">Upgrade Now <i-->
    <!--                class="bi bi-caret-right-fill"></i></a>-->
    <!--    </div>-->
    <!--</div>-->

     <div class="card border-2 rounded-3 mt-6">
        <div class="card-body p-3">
            <h6 class="text-gray lh-20 mb-0">AN INITIATIVE OF SEEDBTR.COM, GOVERNMENT OF BTR </h6>
            <h6 class="text-gray fs-14 fw-medium">Designed by <a
                    href="https://smartbtr.com/">SmarBTR Pvt Ltd.</a></h6>
        </div>
    </div>
</div>
</div>