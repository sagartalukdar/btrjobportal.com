<?php include("include/head.php");?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <div class="container-fluid">
            <div class="inner-contents">
                <div class="page-header d-flex align-items-center justify-content-between mr-bottom-30">
                    <div class="left-part">
                        <h2 class="text-dark">Verification</h2>
                        <p class="text-gray mb-0"> verify companies </p>
                    </div>

                </div>

                <div class="row">
                    <?php
                          $ReadCompany=$crud->Read("company","status='1' order by id desc");
                          if($ReadCompany){
                            foreach($ReadCompany as $company){
                        ?>

                    <div class="col-xxl-4 col-lg-4 col-md-6 ">
                        <div class="card border-0">
                            <div class="card-body">
                                <div class="align-items-center gap-4" >
                                    <div class="avatar-img avatar-xl rounded-2 overflow-hidden flex-shrink-0">
                                        <?php 
                                            if (!empty($company["logo"])) {
                                                // If $company["logo"] is not empty, display the logo
                                        ?>
                                                <img src="uploads/<?php echo $company["logo"]; ?>" alt="logo" class="w-100" />
                                        <?php 
                                            } else {
                                                // If $company["logo"] is empty, display the default image
                                        ?>
                                                <img src="../images/icon/office.gif" alt="default logo" class="w-100" />
                                        <?php 
                                            }
                                        ?>

                                    </div>

                                    <div class="card-content" style="height:100px;">
                                        <h5 class="mb-1">
                                            <?php echo $company["name"] ?>
                                        </h5>
                                        <small class="d-inline-block text-gray fs-14 fw-normal">District :
                                            <?php echo $company["district"]; ?>
                                        </small></br>
                                        <small class="d-inline-block text-gray fs-14 fw-normal">State :
                                            <?php echo $company["state"]; ?>
                                        </small>
                                    </div>
                                </div>

                                <div>
                                    <p>
                                    <div class="">
                                        <a href="tel:<?php echo $company["phone"]; ?>" >
                                            <i class="text-primary bi bi-telephone-fill me-2"></i>
                                            <?php echo $company["phone"]; ?>
                                        </a>
                                    </div>
                                    <div class="">
                                        <a href="mailto:<?php echo $company["email"]; ?>">
                                            <i class="text-primary bi bi-envelope-fill me-2"></i>
                                            <?php echo $company["email"]; ?>
                                        </a>
                                    </div>

                                    </p>
                                </div>

                                <hr />

                                <div class="d-flex justify-content-between gap-3 flex-wrap">
                                    <a href="verify-document.php?doc_id=<?php echo $company["id"]; ?>" >
                                    <!-- <a href="tradepdf/<?php echo $company["trade_license"]; ?>" target="_blank"> -->
                                    <div
                                        class="bg-light-200 rounded-1 flex-grow-1 p-3 d-flex flex-column justify-content-center">
                                        <small class="d-inline-block text-black mb-2">click to check document </small>
                                        

                                        <i class="fa fa-file-pdf-o" style="font-size:30px;color:red"><h4 class="mb-0"> Trade License</h4></i>
                                        
                                    </div>
                                    </a>

                                </div>
                                <!-- <button class="btn btn-sm btn-primary" id="verify-btn" data-vid="<?php echo $company["id"]; ?>" > Verify</button>
                                    <button class="btn btn-sm btn-danger" id="verify-btn" data-vid="<?php echo $company["id"]; ?>" > Reject</button> -->

                            </div>
                        </div>
                    </div>

                    <?php        
                            }
                          }else{
                     ?>
                    <div class="">
                        <h2 class="text-center">All Companies are Verified</h2>
                    </div>
                    <?php       
                          }
                    ?>

                </div>
            </div>
        </div>
    </main>

    <?php include("include/footer.php") ?>

   

</body>

</html>