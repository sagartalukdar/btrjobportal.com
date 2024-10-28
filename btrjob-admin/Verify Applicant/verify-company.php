<?php include("include/head.php");?>

</head>

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
                        <h2 class="text-dark">Verification</h2>
                        <p class="text-gray mb-0"> verify companies </p>
                    </div>

                </div>

                <div class="row">
                    <?php
                          $ReadCompany=$crud->Read("company","status='1'");
                          if($ReadCompany){
                            foreach($ReadCompany as $company){
                        ?>

                    <div class="col-xxl-4 col-lg-4 col-md-6 ">
                        <div class="card border-0">
                            <div class="card-body">
                                <div class="align-items-center gap-4" >
                                    <div class="avatar-img avatar-xl rounded-2 overflow-hidden flex-shrink-0">
                                        <img src=  <?php echo $company["logo"]; ?> alt="img" class="w-100" />
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
                                    <a href="company-document.php?doc_id=<?php echo $company["id"]; ?>" >
                                    <div
                                        class="bg-light-200 rounded-1 flex-grow-1 p-3 d-flex flex-column justify-content-center">
                                        <small class="d-inline-block text-black mb-2">Check</small>
                                        <h4 class="mb-0"> Document</h4>
                                    </div>
                                    </a>
                                    <button class="btn btn-sm btn-info" id="verify-btn" data-vid="<?php echo $company["id"]; ?>" > Verify  <span style="font-size: 24px; color: green;">&#10003;</span> </button>

                                    <button class="btn btn-sm btn-danger" id="reject-btn" data-rid="<?php echo $company["id"]; ?>" > Reject</button>
                                </div>

                            </div>
                        </div>
                    </div>

                    <?php        
                            }
                          }else{
                     ?>
                    <div class="">
                        <h2 class="text-center">No Company Details Yet !</h2>
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
        if (confirm('Are you sure you want to Verify this company?')) {
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
                } else {
                alert('Company Verification aborted.');
            }
        });
       });



       $(function () {
        $('#reject-btn').on('click', function () {
        var rejectId = $(this).data('rid');
        console.log(rejectId);
        if (confirm('Are you sure you want to reject this company?')) {
        $.ajax({
            type: "POST", 
            dataType: "json",
            url: "xhr/reject-company.php",
            data: {rejectId : rejectId},
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
                } else {
                alert('Company Rejection aborted.');
            }
        });
      
       });

    </script>

</body>

</html>