<?php include("include/head.php");?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style type="text/css">
    .light-bg {
    background-image: url('your-image-url.jpg');
    background-color: #cdece6;; /* light color */
    background-size: cover;
    background-repeat: no-repeat;
    padding: 9px; /* Adjust padding as needed */
    border-radius: 2px; 
}

</style>
<body class="bg-light">

    <!-- Preloader -->
   <?php include("include/preloader.php");?>


    <!-- Default Nav -->
    <?php include("include/header.php");?>

    <?php include("include/horizontal-navbar.php");?>

    <?php include("include/sidebar.php");?>

<?php 
if (isset($_SESSION['this_user_id'])) {
    $id = $_SESSION['this_user_id'];
    $read = $crud->Read($table, "`id`=$id");
}

if ($read) {
    $id = $read[0]['id'];
    $email = $read[0]['email'];
    $phone = $read[0]['phone'];
    $uname = $read[0]['username'];
    $fname = $read[0]['name'];
    $lname = $read[0]['surname'];
    $usertype =$read[0]['user_type'];
    $image = $read[0]['user_image'];
    
 
?>
    <!-- Main Wrapper-->
    <main class="main-wrapper">
        <div class="container-fluid">
            <div class="inner-contents">
                <div class="page-header d-flex align-items-center justify-content-between mr-bottom-30">
                    <div class="left-part">
                        <h2 class="text-dark">Profile Details</h2>
                        <!-- <p class="text-gray mb-0">Complete your kyc here.</p> -->
                    </div>

                </div>

                       
                <div class="card border-0 p-5">
                    <div
                        class="card-header bg-transparent border-0 p-0 d-flex align-items-center justify-content-between gap-3">
                        <!-- <h6 class="mb-0" style="text-transform: uppercase;"><?php echo $table;?> Details</h6> -->
                    </div>

                    <div class="card-body p-0 pt-4">
                        <div class="col-md-6">
                            <!-- <label class="form-label">Upload ID (AADHAR / PAN / VOTER_ID / OTHERS) </label> -->
                             <label class="form-label">Upload Profile Photo</label>
                                <div class="mb-3 d-flex align-items-center">
                                        <?php
                                        if ($image == "" || $image == NULL) {
                                        ?>
                                            <img class="img-thumbnail rounded-1" name="image" alt="profile image"  width="100px" id="responseImage" height="100px">
                                        <?php
                                        } else {
                                        ?>
                                            <img class="img-thumbnail rounded-1" name="image" src="upoads/<?php echo $image; ?>" alt="profile image" id="responseImage" width="100px" height="100px">
                                        <?php
                                        }
                                        ?>
                                        <div class="input-group ml-3">
                                            <input type="file" class="form-control" accept="image/*" id="Idimg" name="image3" required>
                                        </div>

                                </div>
                                <div class="input-group">
                                    <button class="btn btn-success" id="upload-profile" imgid="<?php echo $id;?>">Upload</button>
                                </div>
                                   
                        </div>
                        <hr>
                        <div class="row mb-3">
                          
                            
                            <div class="col-md-4">
                                <label class="form-label">User Name</label>
                                <p class="light-bg"><?php echo $uname;?></p>
                                
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">First Name</label>
                                <p class="light-bg"><?php echo $fname;?></p>
                                
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Last Name</label>
                                <p class="light-bg"><?php echo $lname;?></p>
                                
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Email</label><br>
                                <p class="light-bg"><?php echo $email;?></p>
                                <!-- <input type="email" class="form-control" id="email" name="email" value="<?php echo $email;?>"> -->
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Phone</label>
                                <p class="light-bg"><?php echo $phone;?></p>
                                
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">User Type</label>
                                <p class="light-bg"><?php echo $usertype;?>
                                
                            </div>
                             
                            
                            
                            

                        </div>
                        <!--<div class="button_group">-->
                        <!--        <button type="submit" id="update largeModal"data-toggle="modal" data-target="#largeModal" data-id="<?php echo $id;?>" class="btn btn-primary text-center edit">Update</button>-->
                        <!--</div>-->

                        <!-- <form id="custom-form-validation" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                
                                    <input type="hidden" class="form-control" id="application_id" name="application_id" value="<?php echo  $id;?>">
                            </div>

                            
                            

                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label class="form-label">Qualification Certificate</label>
                                    <input type="file" class="form-control" name="image1" id="qualificationImg" accept=".pdf" value="">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Year of Experience </label>
                                    <input type="number" class="form-control" id="experience" name="experience" placeholder="if any">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Experience Certificate(if any)</label>
                                    <input type="file" class="form-control" name="image2" id="experiencepdf" accept=".pdf" value="">
                                </div>
                       
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Upload ID (AADHAR / PAN / VOTER_ID / OTHERS) </label>
                                    <div class="mb-3">
                                        <img class="img-thumbnail rounded-1"  src="assets/img/1.jpg" alt="" width="80">
                                        <img class="img-thumbnail rounded-1" id="responseImage" width="100px" height="100px">
                                    </div>
                                    <div class="input-group">
                                        <input type="file" class="form-control" accept="image/*" id="Idimg" name="image3" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Upload Your Resume or Cv </label>
                                    <div class="mb-3">
                                        <img class="img-thumbnail rounded-1" src="assets/img/1.jpg" alt="" width="80">
                                    </div>
                                    <div class="input-group">
                                        <input type="file" class="form-control" accept=".pdf" id="CVpdf" name="image4" required>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="button_group">
                                <button type="submit" id="update-kyc" class="btn btn-primary">Submit</button>
                            </div>
                        </form> -->



                        <div class="button_group">
                                <button id="update largeModal"data-toggle="modal" data-target="#largeModal"  class="btn btn-primary text-center edit">Update</button>
                        </div>


                    </div>
                </div>

                                      
            </div>
        </div>
    </main>
<?php }?>
 <!-- Large Modal -->
<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="mb-0" style="text-transform: uppercase;">Update <?php echo $table;?>  Profile</h6><p id="success-message" style="color:green"></p>
        <i class="bi bi-x-square text-danger fs-18"class="close" data-dismiss="modal" aria-label="Close"></i>
        <!-- <button type="button" ></button> -->
          <!-- <span aria-hidden="true">&times;</span> -->
        </button>
      </div>
      <div class="modal-body">
     
                        <form id="custom-form-validation" method="post" >

                            <div class="form-group">
                                <input type="hidden" name="userId" id="userId" value="<?php echo $id; ?>">
                                <input type="hidden" name="userType" id="userType" value="<?php echo $_SESSION['userType']; ?>">
                                
                            </div>


                          

                          
                    <div class="container container-fluid">
                            <div class="row mb-3">
                                <div class="col-6">
                                    <label class="form-label" for="firstName">First Name</label>
                                    <input type="text" name="firstName" id="firstName" class="form-control"
                                     autofocus="false" value="<?php echo $fname ?>" />
                                </div>

                                <div class="col-6">
                                    <label class="form-label" for="lastName">Last Name</label>
                                    <input type="text" name="lastName" id="lastName" class="form-control"
                                     autofocus="false" required value="<?php echo $lname ?>"/>
                                </div>

                               

                                <div class="col-md-4"> 
                                    <label class="form-label">Phone</label>
                                   
                                    <input type="text" class="form-control" id="edit_phone" name="edit_phone" value="<?php echo $phone;?>">
                                    <span id="phone-error" class="error-message"></span>
                                </div>
                               
                       
                            </div>
                      </div>


                            


                             <div class="modal-footer">
                                
                                <p id="error-message" style="color:red"></p>
                                <button  class="btn btn-success" id="change">Change</button>
                                <button type="button" id="close" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <!-- Additional buttons can go here if needed -->
                            </div>
                        </form>
      </div>
     
    </div>
  </div>
</div>
<!-- modal ends -->
   <?php include("include/footer.php") ?>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

     <!-- state-district Script -->
    <script src="assets/js/applicant-state-district.js"></script>
   <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
<script type="text/javascript">
    function previewImage(input, previewId) {
        var fileInput = input;
        var file = fileInput.files[0];
        var reader = new FileReader();
        var previewImage = document.getElementById(previewId);

        reader.onload = function (e) {
            previewImage.src = e.target.result;
        };

        reader.readAsDataURL(file);
    }

    document.getElementById('Idimg').addEventListener('change', function () {
        previewImage(this, 'responseImage');
    });

</script>
<script>
    $(function () {
        $("#close").on("click",function(){
            $("#error-message").html("");
            $('#phone-error').text('').css('color', ''); 
        })
    $('#change').on('click', function () {
       
        $("#change").prop("disabled", true);
        var userId = $("#userId").val();
        // var userId = $("$userId").val();
        var fname = $("#firstName").val();
        var lname = $("#lastName").val();
        var phone = $("#edit_phone").val();
        console.log(userId);
        
       
            var formData = new FormData();
            formData.append('fname', fname);
            formData.append("lname",lname);
            formData.append("phone",phone);
            formData.append('userId', userId);

            if(fname==""||fname==null || lname==""||lname==null  || phone==""||phone==null ){
                // $("#error-message").innerText("")
                $("#error-message").html("All Details Are Not Filled!!!");
                $("#change").prop("disabled", false);
                return false;
            }else{
                $("#error-message").html("");
               
            }
            
            $.ajax({
                type: "POST", 
                dataType: "json",
                url: "xhr/update-userprofile",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    if(response.successMessage) {
                        swal("Success!", response.successMessage + " Reloading", "success");
                        setTimeout(function () {
                            window.location.href = "view-user-profile";
                        }, 2000);   
                    } else if (response.errorMessage) {
                        swal("Error!", response.errorMessage, "error");
                    } else {
                        swal("Error!", "Unknown response from the server", "error");
                    }
                },
                error: function(error) {
                    swal("Error!", "Something went wrong", "error");
                    console.error("Ajax Error:", error);
                }
            });
       
});
    });

</script>




<script>
    $(document).ready(function () {
    $('#edit_phone').on('blur', function () {
        var phone = $(this).val();
        var userType = $("#userType").val(); 
        $.ajax({
            url: '../login/xhr/validate-phone', 
            type: 'POST',
            data: { phone: phone, userType: userType }, 
            success: function (response) {
                if (response === 'invalid') {
                    $('#phone-error').text('Invalid Phone Number').css('color', 'red');
                    $("#change").prop("disabled", true);
                    return false;
                } else if (response === 'exists') {
                    $('#phone-error').text('Phone Number already exists').css('color', 'red');
                    $("#change").prop("disabled", true);
                    return false;
                } else {
                    $('#phone-error').text('').css('color', ''); 
                    $("#change").prop("disabled", false);
                    return false;
                }
            }
        });
    });
});
</script>

    
</body>

</html>