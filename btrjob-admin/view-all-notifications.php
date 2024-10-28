<?php include("include/head.php");?>
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.dataTables.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.0/css/buttons.dataTables.css">

</head>

<body class="bg-light">

     <!-- Preloader -->
        <?php include("include/preloader.php");?>


    <!-- Default Nav -->
    <?php include("include/header.php");?>

    <?php include("include/horizontal-navbar.php");?>

    <?php include("include/sidebar.php");?>

    <!-- Main Wrapper-->
    <main class="main-wrapper">

        <div class="container">
    
        </div>


        <div class="container-fluid">
            <div class="inner-contents">
                <div class="page-header d-flex align-items-center justify-content-between mr-bottom-30">
                    <div class="left-part">
                        <h2 class="text-dark">Notifications</h2>
                        <!-- <p class="text-gray mb-0">You can Update and Delete this details.</p> -->
                    </div>

                </div>

            </div>
        
            <div class="row">

                <div class="col-lg-12">
                    <!-- Table Two  -->
                    <div class="card border-0 p-5">
                       
                        <div class="col-xxl-12 col-lg-12 col-sm-12">
                            <div class="card border-0 dropdown-widget p-5">
                                <div class="card-header border-0 mb-3 d-flex align-items-center gap-4">
                                    <h4 class="mb-0">All Notifications</h4>
                                   
                                </div>
                                <div class="card-body p-0">
                                    <?php
                                          
                                    $notifications = $crud->Read("notification", "`user_id`='$userID' AND `userType` ='$userType' order by `id` desc " );

                                    if ($notifications) { 
                                        foreach ($notifications as $notificationMssg) {
                                            $Mssg = $notificationMssg['notification'];
                                            $ndate = $notificationMssg['notification_date'];
                                            $nTime = $notificationMssg['notification_time'];
                                            // $nTime = $notificationMssg['interview_time'];
                                            // $nTime = $notificationMssg['interview_time'];
                                    ?>
                                        <ul class="notification-board list-unstyled">

                                                <li class="author-online has-new-message d-flex gap-3">
                                                <div class="media media-outline-red text-red">
                                                <i class="bi bi-clock-fill"></i>
                                                </div>
                                          
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
                                    <!-- <h6 class="all-notifications mb-0"> <a href="#" class="btn bg-muted text-primary w-100 fw-bold mt-3 ff-heading px-0">View All Notifications</a> </h6> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
          
        </div>
    </main>
<style type="text/css">
    .apply{
        float: left;
  width: 100%;
  padding-right: 20px;
  padding-left: 20px;
  height: 30px;
  line-height: 30px;
  text-align: center;
  background: linear-gradient(135deg,#21db84,#5197d0);
  color: #ffffff;
  font-size: 14px;
  text-transform: uppercase;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  border-radius: 5px;
  box-shadow: 3px 3px #eeb407;
  font-weight: 700;
}
</style>

    <?php include("include/footer.php") ?>




</body>

</html>