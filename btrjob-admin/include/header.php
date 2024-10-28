<header class="header kleon-default-nav">				
            <div class="d-none d-xl-block">
                <div class="header-inner d-flex align-items-center justify-content-around justify-content-xl-between flex-wrap flex-xl-nowrap gap-3 gap-xl-5">
                    <div class="header-left-part d-flex align-items-center flex-grow-1 w-100">
                        <div class="header-search w-100">
                        
                        </div>
                    </div>

                    <div class="header-right-part d-flex align-items-center flex-shrink-0">
                        <ul class="nav-elements d-flex align-items-center list-unstyled m-0 p-0">
                            <li class="nav-item nav-color-switch d-flex align-items-center gap-3">
                                <div class="sun"><img src="assets/img/sun.svg" alt="img"></div>
                                <div class="switch">
                                    <input type="checkbox" id="colorSwitch" value="false" name="defaultMode">
                                    <div class="shutter">
                                        <span class="lbl-off"></span>
                                        <span class="lbl-on"></span>
                                        <div class="slider bg-primary"></div>
                                    </div>
                                </div>
                                <div class="moon"><img src="assets/img/moon.svg" alt="img"></div>
                            </li>

                               <!-- <a href="../index"><button class="btn btn-wave btn-red">go to Main Website</button></a>                 -->
                        
                            <li class="nav-item nav-notification dropdown">
                                <a href="#" id="notification-id" data-userid="<?php echo $userID;?>" data-userType="<?php echo $userType;?>" class="nav-toggler" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php
                                
                                
                                $totalNotification=0;
                                $count=$crud->Count("notification","`user_id`='$userID' AND `userType` ='$userType' AND `status`= 0");
                                if($count > 0){
                                    $totalNotification=$count;
                                }

                                ?>

                                    <img src="assets/img/svg/bell.svg" alt="bell">
                                    <?php 
                                    if($totalNotification < 1){

                                    }else{?>
                                    <div class="badge rounded-circle"><?php echo $totalNotification;?></div>

                                    <?php }
                                    ?>
                                </a>
                                <div class="dropdown-widget dropdown-menu p-0">
                                    <div class="dropdown-wrapper pd-50">
                                        <div class="dropdown-wrapper--title">
                                            <h4 class="d-flex align-items-center justify-content-between">Notifications <a href="view-all-notifications">View All</a></h4>
                                        </div>
                                        <?php
                                          
                                            $notifications = $crud->Read("notification", "`user_id`='$userID' AND `userType` ='$userType' AND `status`= 0 order by `id` desc " );

                                            if ($notifications) { 
                                                foreach ($notifications as $notificationMssg) {
                                                    $Mssg = $notificationMssg['notification'];
                                                    $ndate = $notificationMssg['notification_date'];
                                                    $nTime = $notificationMssg['notification_time'];
                                            ?>
                                            <ul class="notification-board list-unstyled">

                                                    <li class="author-online has-new-message d-flex gap-3">
                                                        <!-- <div class="media bg-primary text-white">
                                                            <img src=""height="100px" width="100px">
                                                        </div> -->
                                              
                                                    <div class="user-message">
                                                        
                                                        <p class="message-footer d-flex align-items-center justify-content-between">
                                                            <span class="fs-14 text-gray fw-normal"><?php echo $ndate .' '.$nTime; ?></span>
                                                           
                                                        </p>
                                                        <h6 class="message"><a href="#"><?php echo $Mssg; ?></a></h6>
                                                    </div>


                                                </li>

                                            </ul>
                                            <?php
                                                }
                                            } else {
                                                
                                                echo '<span class="fs-14 text-gray fw-normal">No new notifications</span>';
                                            }
                                            ?>
                                        <h6 class="all-notifications"> <a href="view-all-notifications" class="btn bg-muted text-primary w-100 fw-bold mt-3 ff-heading px-0">View All Notifications</a> </h6>
                                    </div>
                                </div>
                            </li>

                     
                            <li class="nav-item nav-author">
                                <?php
                                    if ($userType == 'ADMIN' ||$userType == 'COUNSELLOR') {
                                     $result = $crud->Read("users", "`email`='$userMail'");
                                        $imagePath = $result[0]['user_image'];
                                    } elseif ($userType == 'APPLICANT') {
                                       
                                        $result = $crud->Read("applicant", "`email`='$userMail'");
                                        if ($result) {
                                            $imagePath = $result[0]['profile_img']; 
                                        } else {
                                           
                                            $imagePath = 'assets/img/icons/profile.gif';
                                        }
                                    } elseif ($userType == 'COMPANY') {
                                       
                                        $result = $crud->Read("company", "`email`='$userMail'");
                                        if ($result) {
                                            $imagePath = $result[0]['logo']; 
                                        } else {
                                           
                                            $imagePath = 'assets/img/icons/profile.gif';
                                        }
                                    } else {
                                        $imagePath = 'assets/img/icons/profile.gif';
                                        exit;
                                    }
                                    if ($imagePath == null) {
                                        $imagePath = '../assets/img/icons/profile.gif';
                                    }
                                    ?>

                                    <a href="#" class="nav-toggler" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="uploads/<?php echo $imagePath; ?>" alt="img" width="54" class="rounded-2">
                                        <div class="nav-toggler-content">
                                            <h6 class="mb-0"><?php echo $userMail ?></h6>
                                            <div class="ff-heading fs-14 fw-normal text-gray">
                                                <?php 
                                                if ($userType == 'ADMIN') {
                                                    echo 'Admin';
                                                } elseif ($userType == 'APPLICANT') {
                                                    echo 'Applicant';
                                                } elseif ($userType == 'COMPANY') {
                                                    echo 'Company';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </a>

                                <div class="dropdown-widget dropdown-menu p-0 admin-card">
                                    <div class="dropdown-wrapper">
                                        <div class="card mb-0">
                                            <div class="card-header p-3 text-center">
                                                <!-- <img src="assets/img/icons/profile.gif" alt="img" width="80" class="rounded-circle avatar"> -->
                                                <div class="mt-2">
                                                    <h6 class="mb-0 lh-18"><?php echo $userMail?></h6>
                                                    <!--<div class="fs-14 fw-normal text-gray">Super Admin</div>-->
                                                </div>
                                            </div>
                                            <div class="card-body p-3">
                                                <ul class="list-unstyled p-0 m-0">
                                                    <li>
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
                                                        <a href="<?php echo $view_profile_page;?>" class="fs-14 fw-normal text-dark d-block p-1"><i class="bi bi-person me-2"></i> Profile</a>
                                                        
                                                    <?php }?>
                                                    </li>
                                                    <!-- <li >
                                                        <a href="email.html" class="fs-14 fw-normal text-dark d-block p-1"><i class="bi bi-envelope me-2 "></i> Inbox</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="fs-14 fw-normal text-dark d-block p-1"><i class="bi bi-gear me-2"></i> Setting & Privacy</a>
                                                    </li> -->
                                                </ul>

                                            </div>
                                            <div class="card-footer p-3">
                                                <a href="../login/session/session_destroy" class="btn btn-outline-gray bg-transparent w-100 py-1 rounded-1 text-dark fs-14 fw-medium"><i class="bi bi-box-arrow-right"></i> Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="small-header d-flex align-items-center justify-content-between d-xl-none">
                <div class="logo">
                    <a href="index" class="d-flex align-items-center gap-3 flex-shrink-0">
                        <img src="assets/img/logo2.png" alt="logo">
                        <!-- <div class="position-relative flex-shrink-0">
                            <img src="assets/img/logo-text.svg" alt="" class="logo-text">
                            <img src="assets/img/logo-text-white.svg" alt="" class="logo-text-white">
                        </div> -->
                    </a>
                </div>
                <div>
                    <button type="button" class="kleon-header-expand-toggle"><span class="fs-24"><i class="bi bi-three-dots-vertical"></i></button>
                    <button type="button" class="kleon-mobile-menu-opener"><span class="close"><i class="bi bi-arrow-left"></i></span> <span class="open"><i class="bi bi-list"></i></span></button>
                </div>
            </div>

            <div class="header-mobile-option">
                <div class="header-inner">
                    <div class="d-flex align-items-center justify-content-end flex-shrink-0">
                        <ul class="nav-elements d-flex align-items-center list-unstyled m-0 p-0">
                           
                            <li class="nav-item nav-notification dropdown">
                                <a href="#" class="nav-toggler"id="notification-id" data-userid="<?php echo $userID;?>" data-userType="<?php echo $userType;?>" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php 
                                $totalNotification=0;
                                $count=$crud->Count("notification","`user_id`='$userID' AND `userType` ='$userType' AND `status`= 0");
                                if($count > 0){
                                    $totalNotification=$count;
                                }
                                ?>

                                    <img src="assets/img/svg/bell.svg" alt="bell">
                                    <?php 
                                    if($totalNotification < 1){

                                    }else{?>
                                    <div class="badge rounded-circle"><?php echo $totalNotification;?></div>

                                    <?php }
                                    ?>
                                </a>
                                <div class="dropdown-widget dropdown-menu p-0">
                                    <div class="dropdown-wrapper pd-50">
                                        <div class="dropdown-wrapper--title">
                                            <h4 class="d-flex align-items-center justify-content-between">Notifications <a href="#">View All</a></h4>
                                        </div>
                                        <?php
                                          
                                            $notifications = $crud->Read("notification", "`user_id`='$userID' AND `userType` ='$userType'AND `status`= 0 order by `id` desc");

                                            if ($notifications) { 
                                                foreach ($notifications as $notificationMssg) {
                                                    $Mssg = $notificationMssg['notification'];
                                                    $ndate = $notificationMssg['interview_date'];
                                                    $nTime = $notificationMssg['interview_time'];
                                            ?>
                                            <ul class="notification-board list-unstyled">

                                                    <li class="author-online has-new-message d-flex gap-3">
                                                        <!-- <div class="media bg-primary text-white">
                                                            <img src=""height="100px" width="100px">
                                                        </div> -->
                                              
                                                    <div class="user-message">
                                                        
                                                        <p class="message-footer d-flex align-items-center justify-content-between">
                                                            <span class="fs-14 text-gray fw-normal"><?php echo $ndate .' '.$nTime; ?></span>
                                                           
                                                        </p>
                                                        <h6 class="message"><a href="#"><?php echo $Mssg; ?></a></h6>
                                                    </div>


                                                </li>

                                            </ul>
                                            <?php
                                                }
                                            } else {
                                                
                                                echo '<span class="fs-14 text-gray fw-normal">No new notifications</span>';
                                            }
                                            ?>
                                        <h6 class="all-notifications"> <a href="#" class="btn bg-muted text-primary w-100 fw-bold mt-3 ff-heading px-0">View All Notifications</a> </h6>
                                    </div>
                                </div>
                            </li>

                      
                            <li class="nav-item nav-author px-3">
                                <a href="#" class="nav-toggler" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="uploads/<?php echo $imagePath; ?>" alt="img" width="40" class="rounded-2">
                                    <div class="nav-toggler-content">
                                        <h6 class="mb-0"><?php echo $userMail?></h6>
                                        <div class="ff-heading fs-14 fw-normal text-gray"><?php echo $userType?></div>
                                    </div>
                                </a>
                                <div class="dropdown-widget dropdown-menu p-0 admin-card">
                                    <div class="dropdown-wrapper">
                                        <div class="card mb-0">
                                            <div class="card-header p-3 text-center">
                                                <img src="uploads/<?php echo $imagePath; ?>" alt="img" width="60" class="rounded-circle avatar">
                                                <div class="mt-2">
                                                    <!-- <h6 class="mb-0 lh-18">Franklin Jr.</h6> -->
                                                    <div class="fs-14 fw-normal text-gray"><?php echo $userType?></div>
                                                </div>
                                            </div>
                                            <div class="card-body p-3">
                                                <ul class="list-unstyled p-0 m-0">
                                                    <li>
                                                        <?php
                                                        if ( $_SESSION['userType'] == 'APPLICANT') {
                                                           
                                                        ?>
                                                        <a href="view-applicantprofile" class="fs-14 fw-normal text-dark d-block p-1"><i class="bi bi-person me-2"></i> Profile</a>
                                                    <?php }?>
                                                    </li>
                                                    
                                                </ul>

                                            </div>
                                            <div class="card-footer p-3">
                                                <a href="../login/session/session_destroy" class="btn btn-outline-gray bg-transparent w-100 py-1 rounded-1 text-dark fs-14 fw-medium"><i class="bi bi-box-arrow-right"></i> Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
         <script src="assets/js/jquery-3.6.0.min.js"></script>
        <script>
     $(function(){
    $('#notification-id').on('click', function(){
        var user_id = $(this).data('userid');
        var userType = $(this).data('usertype');
        // var jobName = $('#jobname').val();
        // var companyName = $('#companyname').val();
        console.log(user_id);
        console.log(userType);
        // console.log(jobName);
        // console.log(companyName);
        formData = new FormData();
        formData.append('user_id', user_id);
        formData.append('userType', userType);
        // Perform AJAX request or any other actions
        // formData.append('jobName', jobName);
        // formData.append('companyName', companyName);
        $.ajax({
            type: 'POST',
            processData: false,
            contentType: false,
            cache: false,
            dataType: 'json',
            url: 'xhr/update-notification',
            data: formData,
            success: function(response) {
                if(response.successMessage) {
                    swal("Successfull", response.successMessage, "success");
                    setTimeout(() => {                            
                        window.location.reload();
                    }, 2000);
                } else if(response.errorMessage) {
                    swal("Error !", response.errorMessage, "error");
                }
            },
            error: function(error) {
                swal("Error !", "Something Went Wrong", "error");
            }
        });
    });
});

   </script>