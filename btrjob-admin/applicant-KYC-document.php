<?php
  if(isset($_GET["doc_id"])){
    $docId=$_GET["doc_id"];
    echo $docId;
  }else{
    header("location: verify-applicant.php");
  }
?>

<?php include("include/head.php");?>
</head>

<body class="bg-light">




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
                            <button class="btn btn-sm btn-success" style="width: 100px; color: black;" data-vid="<?php echo $docId; ?>"  id="verify-btn">Verify</button>
                            <button class="btn btn-sm btn-danger" style="width: 100px; color: rgb(253, 251, 251);" data-rid="<?php echo $docId; ?>" id="reject-btn">Reject</button>
                        </div>
                    </div>

                </div>

                
                <div class="card border-0 p-5">
                    <?php
                    $readDoc = $crud->Read("applicant", "`id`=$docId");
                    if ($readDoc) {
                        $doc = $readDoc[0];
                        $experience_img = $readDoc[0]["experience_img"];
                        ?>
                        <h2>Qualification Certificate</h2>
                        <iframe src="uploads/<?php echo $doc["qualification_img"]; ?>" width="100%" height="600px" style="border: none;"></iframe>
                       
                        <h2>ID image</h2>
                        <img src="uploads/<?php echo $doc["id_img"]; ?>" width="auto" height="400">
                        <h2>CV</h2>
                        <iframe src="uploads/<?php echo $doc["cv_img"]; ?>" width="100%" height="600px" style="border: none;"></iframe>
                       
                        <?php
                            if ($experience_img != "" || $experience_img != null) {
                                ?>
                                <h2>Experience Certificate</h2>
                                <iframe src="uploads/<?php echo $experience_img; ?>" width="100%" height="600px" style="border: none;"></iframe>
                                
                                <?php
                            } else {
                                echo '<h2 class="text-center">experience certificate</h3>';
                                echo '<h4 class="text-center">No experience !</h3>';
                            }
                            ?>


                        <?php
                    } else {
                        ?>
                        <h3 class="text-center">No Document Available !</h3>
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
        if (confirm('Are you sure you want to Verify this Applicant?')) {
        $.ajax({
            type: "POST", 
            dataType: "json",
            url: "xhr/active-reject-applicant",
            data: {verifyId : verifyId},
            success: function(response){
                        if(response.successMessage){
                            // showSuccessMessage ();
                            swal("Success!",response.successMessage+" Reloading", "success");
                          
                            setTimeout(function () {
                                window.location.href= "verify-applicant";
                            }, 1500);   
                            
                        } else if (response.errorMessage) {
                            swal("Error!", response.errorMessage, "error");
                        }
                        
                        },
                        error: function(error){
                        swal("Error!", "Something went wrong", "error");
                        
                        }
                    });
                
                } else {
                alert('Applicant Verification aborted.');
            }
        });
       });



       $(function () {
        $('#reject-btn').on('click', function () {
        var rejectId = $(this).data('rid');
        console.log(rejectId);
        if (confirm('Are you sure you want to reject this applicant?')) {
        $.ajax({
            type: "POST", 
            dataType: "json",
            url: "xhr/active-reject-applicant",
            data: {rejectId : rejectId},
            success: function(response){
                        if(response.successMessage){
                            // showSuccessMessage ();
                            swal("Success!",response.successMessage+" Reloading", "success");
                            
                            setTimeout(function () {
                                window.location.href= "verify-applicant";
                            }, 1500);   
                            
                        } else if (response.errorMessage) {
                            swal("Error!", response.errorMessage, "error");
                        }
                        
                        },
                        error: function(error){
                        swal("Error!", "Something went wrong", "error");
                        
                        }
                    });
                } else {
                alert('Applicant Rejection aborted.');
            }
        });
      
       });

    </script>






 

</body>

</html>