

<?php include("include/head.php");?>
<?php
 if(isset($_SESSION['userType'])){
    if($_SESSION['userType']!='ADMIN' && $_SESSION['userType']!='COUNSELLOR'){
       header("location:403_error");
       exit();
    }
 }
?>
<?php
  if(isset($_GET["doc_id"])){
    $docId=$_GET["doc_id"];
    $readDoc=$crud->Read("company" ,"`id`=$docId");
    if($readDoc){
     $doc=$readDoc[0]["trade_license"];
     $id=$readDoc[0]["id"];
    }
  }else{
    header("location: verify-company.php");
  }
?>

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
                        <h2 class="text-dark">Check Document</h2>
                        <p class="text-gray mb-0">You can Verify or Reject This.</p>
                    </div>
                    <div class="right-part d-flex align-items-center">
                       
                        <div class="filtering d-flex align-items-center gap-3 ms-3">                        
                            <button class="btn btn-sm btn-success"id="verify-btn" data-vid="<?php echo $id; ?>"style="width: 100px; color: black;">Verify</button>
                            <button class="btn btn-sm btn-danger" id="reject-btn" data-rid="<?php echo $id; ?>" style="width: 100px; color: rgb(253, 251, 251);">Reject</button>
                        </div>
                    </div>

                </div>


                <div class="card border-0 p-5">
                    <?php
                    if($doc!=null)
                    {
                    ?>
                     <iframe src="uploads/<?php echo $doc;?>" width="100%" height="600px" style="border: none;"></iframe>
                        
                    <?php
                      }else{
                   ?>
                    <h3 class="text-center"> No Document Available !</h3>
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
            url: "xhr/verify-company",
            data: {verifyId : verifyId},
            success: function(response){
                        if(response.successMessage){
                            // showSuccessMessage ();
                            swal("Success!",response.successMessage+" Reloading", "success");
                            
                            setTimeout(function () {
                            window.location.href = "verify-company-kyc";
                            }, 1000);   
                            
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
            url: "xhr/reject-company",
            data: {rejectId : rejectId},
            success: function(response){
                        if(response.successMessage){
                            // showSuccessMessage ();
                            swal("Success!",response.successMessage+" Reloading", "success");
                            
                            setTimeout(function () {
                            window.location.href = "verify-company-kyc";
                            }, 1000);   
                            
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
    <!-- For Choosen Image -->
    

</body>

</html>