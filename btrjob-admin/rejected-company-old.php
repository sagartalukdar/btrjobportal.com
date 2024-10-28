<?php include("include/head.php");?>

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
                        <h2 class="text-dark">Rejected Companies</h2>
                        <!-- <p class="text-gray mb-0"> verify companies </p> -->
                    </div>

                </div>

                <div class="row">
                    <?php
                          $ReadCompany=$crud->Read("company","status='0' order by id desc");
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
                                    <!--<a href="<?php echo $company["trade_license"]; ?>" target="_blank">-->
                                    <!--<div-->
                                    <!--    class="bg-light-200 rounded-1 flex-grow-1 p-3 d-flex flex-column justify-content-center">-->
                                    <!--    <small class="d-inline-block text-black mb-2">Check</small>-->
                                    <!--    <h4 class="mb-0"> Document</h4>-->
                                    <!--</div>-->
                                    <!--</a>-->
                                    <!--<button class="btn btn-sm btn-primary" id="verify-btn" data-vid="<?php echo $company["id"]; ?>" > Verify</button>-->
                                </div>

                            </div>
                        </div>
                    </div>

                    <?php        
                            }
                          }else{
                     ?>
                    <div class="">
                        <h2 class="text-center">No Rejected Companies</h2>
                    </div>
                    <?php       
                          }
                    ?>

                </div>
            </div>
        </div>
    </main>

    <?php include("include/footer.php") ?>

    <script>
       $(function () {
        $('#verify-btn').on('click', function () {
        var verifyId = $(this).data('vid');
        console.log(verifyId);
        $.ajax({
            type: "POST", 
            dataType: "json",
            url: "xhr/active-company.php",
            data: {verifyId : verifyId},
            success: function(response){
                        if(response.successMessage){
                            // showSuccessMessage ();
                            swal("Success!",response.successMessage+" Reloading", "success");
                            
                            setTimeout(function () {
                            window.location.reload();
                            }, 3000);   
                            
                        } else if (response.errorMessage) {
                            swal("Error!", response.errorMessage, "error");
                        }
                        
                        },
                        error: function(error){
                        swal("Error!", "Something went wrong", "error");
                        
                        }
                    });
        });
       });
    </script>

</body>

</html>