<?php include("include/head.php");?>
<?php
$applicant_id=$_SESSION["this_user_id"];
if(isset($_SESSION['userType'])){
    if($_SESSION['userType']!='APPLICANT'){
       header("location: 403_error");
       exit();
    }
 }
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
    $name = $read[0]['name'];
    $gender = $read[0]['gender'];
    $address = $read[0]['address'];
    $state = $read[0]['state'];
    $district = $read[0]['district'];
    $qualification = $read[0]['qualification'];
    $experience = $read[0]['experience'];
    $profileimage=$read[0]['profile_img'];
    $qualificationimage=$read[0]['qualification_img'];
    $idimage=$read[0]['id_img'];
    $experienceimage=$read[0]['experience_img'];
    $cv=$read[0]['cv_img'];
    // $ccode = $read[0]['ccode'];
    // $cdetails = $read[0]['cdetails'];
    // $cdescription = $read[0]['cdescription'];
    // $cfee = $read[0]['cfee'];
    // $cduration = $read[0]['cduration'];
    // $cqualification = $read[0]['qualification'];
    // $courseInstructorName = $read[0]['instructorName'];

    
   
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

                        <?php
                        if (isset($KYCstatus)) {
                            if ($KYCstatus == 2) {
                        ?>
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
                                        if ($profileimage == "" || $profileimage == NULL) {
                                        ?>
                                            <img class="img-thumbnail rounded-1" name="image" alt="profile image"  width="100px" id="responseImage" height="100px">
                                        <?php
                                        } else {
                                        ?>
                                            <img class="img-thumbnail rounded-1" name="image"src="uploads/<?php echo $profileimage; ?>" alt="profile image" id="responseImage" width="100px" height="100px">
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
                                <label class="form-label">Full Name</label>
                                <p class="light-bg"><?php echo $name;?></p>
                                
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
                                <label class="form-label">Gender</label>
                                <p class="light-bg"><?php echo $gender;?>
                                
                            </div>
                             <div class="col-md-4">
                                <label class="form-label">Address</label>
                                <p class="light-bg"><?php echo $address;?>
                                
                            </div>
                             <div class="col-md-4">
                                <label class="form-label">State</label>
                                <p class="light-bg"><?php echo $state;?>
                                
                            </div>
                             <div class="col-md-4">
                                <label class="form-label">District</label>
                                <p class="light-bg"><?php echo $district;?>
                                
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Qualification</label>
                                <p class="light-bg"><?php echo $qualification;?>
                                
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Qualification Certificate
                                 <div class="mb-3">
                                      <?php
                                            if ($qualificationimage == "" || $qualificationimage == null) {
                                                ?>
                                                <p class="light-bg" style="font-style: italic;">null</p>
                                            <?php
                                            } else {
                                            ?>
                                              <a href="uploads/<?php echo $qualificationimage;?>"><i class="fa fa-file-pdf-o" style="font-size:30px;color:red"><!-- <h4 class="mb-0"> Trade License</h4> --></i></a>
                                            <?php
                                            }
                                            ?>
                                       
                                    </div>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Experience(in months)
                                <p class="light-bg"><?php echo $experience;?>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Experience Certificate
                                 <div class="mb-3">
                                        <!-- <img class="img-thumbnail rounded-1"  src="assets/img/1.jpg" alt="" width="80"> -->
                                        <?php
                                            if ($experienceimage == "" || $experienceimage == null) {
                                                ?>
                                                <p class="light-bg" style="font-style: italic;">null</p>
                                            <?php
                                            } else {
                                            ?>
                                                <a href="uploads/<?php echo $experienceimage; ?>"><i class="fa fa-file-pdf-o" style="font-size:30px;color:red"><!-- <h4 class="mb-0"> Trade License</h4> --></i></a>
                                            <?php
                                            }
                                            ?>

                                    </div>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">ID card
                                 <div class="mb-3">
                                    <?php
                                            if ($idimage == "" || $idimage == null) {
                                                ?>
                                                <p class="light-bg" style="font-style: italic;">null</p>
                                            <?php
                                            } else {
                                            ?>
                                               <img class="img-thumbnail rounded-1" src="uploads/<?php echo $idimage;?>" width="100px" height="100px">
                                            <?php
                                            }
                                            ?>
                                        <!-- <img class="img-thumbnail rounded-1"  src="assets/img/1.jpg" alt="" width="80"> -->
                                        
                                    </div>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Resume or CV
                                 <div class="mb-3">
                                     <?php
                                            if ($cv == "" || $cv == null) {
                                                ?>
                                                <p class="light-bg" style="font-style: italic;">null</p>
                                            <?php
                                            } else {
                                            ?>
                                              <a href="uploads/<?php echo $cv; ?>"><i class="fa fa-file-pdf-o" style="font-size:30px;color:red"><!-- <h4 class="mb-0"> Trade License</h4> --></i></a>
                                            <?php
                                            }
                                            ?>
                                        <!-- <img class="img-thumbnail rounded-1"  src="assets/img/1.jpg" alt="" width="80"> -->
                                       
                                    </div>
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

                    </div>
                </div>

                                        <?php 
                               // echo  '';
                            }else if($KYCstatus == 0) {
                               echo  '<p class="mb-0"style="color: #009fff;">Your need to update kyc</p>';
                            }
                            else if($KYCstatus == 1) {
                               echo  '<p class="mb-0"style="color: #009fff;">Your KYC not yet verified </p>';
                            }
                        }
                        ?>
            </div>
        </div>
    </main>
<?php }?>
 <!-- Large Modal -->
<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="mb-0" style="text-transform: uppercase;"><?php echo $table;?> KYC Update</h6><p id="success-message" style="color:green"></p>
        <i class="bi bi-x-square text-danger fs-18"class="close" data-dismiss="modal" aria-label="Close"></i>
        <!-- <button type="button" ></button> -->
          <!-- <span aria-hidden="true">&times;</span> -->
        </button>
      </div>
      <div class="modal-body">
     
                        <form id="custom-form-validation" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <input type="" name="appplicantID" id="edit_id">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Address</label>
                                <textarea rows="5" id="edit_address" class="form-control"  name="address"
                                    placeholder="Enter Your Address here ." required></textarea>
                            </div>


                            <div class="form-group">
                                <label class="form-label">State</label>
                      
                                <select class="form-select" aria-label="Default select example" name="state"  id="inputState">
                                    <option value="SelectState" >Select State First</option>
                                    <option value="Andra Pradesh">Andra Pradesh</option>
                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                    <option value="Assam">Assam</option>
                                    <option value="Bihar">Bihar</option>
                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                    <option value="Goa">Goa</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="Haryana">Haryana</option>
                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                    <option value="Jharkhand">Jharkhand</option>
                                    <option value="Karnataka">Karnataka</option>
                                    <option value="Kerala">Kerala</option>
                                    <option value="Madya Pradesh">Madya Pradesh</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Manipur">Manipur</option>
                                    <option value="Meghalaya">Meghalaya</option>
                                    <option value="Mizoram">Mizoram</option>
                                    <option value="Nagaland">Nagaland</option>
                                    <option value="Orissa">Orissa</option>
                                    <option value="Punjab">Punjab</option>
                                    <option value="Rajasthan">Rajasthan</option>
                                    <option value="Sikkim">Sikkim</option>
                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                    <option value="Telangana">Telangana</option>
                                    <option value="Tripura">Tripura</option>
                                    <option value="Uttaranchal">Uttaranchal</option>
                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                    <option value="West Bengal">West Bengal</option>
                                    <option disabled style="background-color:#aaa; color:#fff">UNION Territories
                                    </option>
                                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                    <option value="Chandigarh">Chandigarh</option>
                                    <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                    <option value="Daman and Diu">Daman and Diu</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Lakshadeep">Lakshadeep</option>
                                    <option value="Pondicherry">Pondicherry</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label">District</label>
                                <select class="form-select" aria-label="Default select example" name="district"
                                    id="inputDistrict">
                                    <option value="">-- Select District -- </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Educational Qualification</label>
                                <select class="form-select" aria-label="Default select example" name="qualification" id="qualification" required>
                                    <option selected disabled> --- Select Qualification ---</option>
                                    <option value="8_pass">8th pass</option>
                                    <option value="10_pass">10th pass</option>
                                    <option value="12_pass">12th pass</option>
                                    <option value="Graduate">Graduate</option>
                                    <option value="Post Graduate">Post Graduate</option>
                                    <option value="PHD">PHD</option>
                                  </select>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Qualification Certificate</label>
                                    <input type="file" class="form-control" name="image1" id="qualificationImg" accept=".pdf" value="">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Year of Experience(in months) </label>
                                    <input type="number" class="form-control" id="experience" name="experience" placeholder="if any">
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Experience Certificate(if any)</label>
                                    <input type="file" class="form-control" name="image2" id="experiencepdf" accept=".pdf" value="">
                                </div>
                       
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Upload ID (AADHAR / PAN / VOTER_ID / OTHERS) </label>
                                    <div class="mb-3">
                                        <!-- <img class="img-thumbnail rounded-1"  src="assets/img/1.jpg" alt="" width="80"> -->
                                          <img class="img-thumbnail rounded-1" name="image3" id="responseImage1" width="100px" height="100px">
                                    </div>
                                    <div class="input-group">
                                        <input type="file" class="form-control" accept="image/*" id="Idimg1" name="image3" required>
                                    </div>
                                

                                <div class="col-md-12">
                                    <label class="form-label">Upload Your Resume or Cv </label>
                                    
                                    <div class="input-group">
                                        <input type="file" class="form-control" accept=".pdf" id="CVpdf" name="image4" required>
                                    </div>
                                </div>
                                
                            </div>

                             <div class="modal-footer">
                                
                                <p id="error-message" style="color:red"></p>
                                <button type="submit" class="btn btn-success" id="update">Update</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
document.getElementById('Idimg1').addEventListener('change', function () {
        previewImage(this, 'responseImage1');
  
    });
</script>
<script>
    $(function () {
    $('#upload-profile').on('click', function () {
        var userId = $(this).attr('imgid');
        console.log(userId);
        if (confirm('Are you sure you want to change your profile image?')) {
            var formData = new FormData();
            formData.append('image', $('#Idimg')[0].files[0]);
            formData.append('userId', userId);
            
            $.ajax({
                type: "POST", 
                dataType: "json",
                url: "xhr/upload-userprofile",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    if(response.successMessage) {
                        swal("Success!", response.successMessage + " Reloading", "success");
                        setTimeout(function () {
                            window.location.href = "view-applicantprofile";
                        }, 1000);   
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
        } else {
            alert('Company Verification aborted.');
        }
    });
});

</script>
   <!--  <script>
        $(function () {
        $('.edit').on('click', function () {
        var applicantID = $(this).data('id');
        $.ajax({
            type: "POST", 
            dataType: "json",
            url: "xhr/edit-applicant.php",
            data: {applicantID : applicantID},
            success: function(response){
                $("#edit_id").val(response.id);
                $("#edit_address").val(response.address);
                $("#inputState").val(response.state).change();
                $("#inputDistrict").val(response.district).change();
                $("#qualification").val(response.qualification).change();
                $("#experience").val(response.experience).change();
                $('#responseImage').attr("src",response.image);
                $('#responseImage1').attr("src", "uploads/" + response.image);
                console.log(response.image);



                $("#editName").html(response.name+" "+response.surname);
                $("#edit_fname").val(response.name);
                $("#edit_username").val(response.username);
                $("#edit_lname").val(response.surname);
                $("#edit_email").val(response.email);
                $("#edit_phone").val(response.phone);
                $("div.selectUser select").val(response.userType).change();
                $("div.selectStatus select").val(response.status).change();
                $('#responseImage').attr("src",response.image);

                console.log(response.status);
            },
            error: function(error){
            swal("Error!", "Something went wrong", "error");
            
            }
        });
        });
    });
    function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $('#responseImage1').attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
  } else {
    $('#responseImage1').attr('src', '');
  }
}

$("#image3").change(function() {
  readURL(this);
});

    $(function () {
        $('#update').on('click', function (e) {
            e.preventDefault(); 
            var applicantID = $("#edit_id").val();
            var address = $("#edit_address").val();
            var state = $("#inputState").val();
            var district = $("#inputDistrict").val();
            var qualification = $("#qualification").val();
            var experience = $("#experience").val();

            var qualificationImg = $("#qualificationImg")[0].files[0];
            var experiencepdf = $("#experiencepdf")[0].files[0];
            var Idimg = $("#Idimg1")[0].files[0];
            var CVpdf = $("#CVpdf")[0].files[0];

            // Creating a FormData object for file upload
            var formData = new FormData();
            formData.append('applicantID', applicantID);
            formData.append('address', address);
            formData.append('state', state);
            formData.append('district', district);
            formData.append('qualification', qualification);
            formData.append('experience', experience);
            formData.append('image1', qualificationImg);
            formData.append('image2', experiencepdf);
            formData.append('image3', Idimg);
            formData.append('image4', CVpdf);

            $.ajax({
                type: "POST",
                processData: false,
                contentType: false,
                cache: false,
                dataType: "json",
                url: "xhr/update-applicant.php",
                data: formData,
                success: function (response) {
                   
                    if (response.status === 'success') {
   
    $('#largeModal').modal('hide');
    
    Swal.fire({
        icon: 'success',
        title: 'KYC Updated successfully',
        showConfirmButton: true,
        timer: 2000
    }).then(function () {
        window.location.href = 'view-applicantprofile.php';
    });
} else {
    $("#error-message").html('<span style="color: red;"> ' + response.message + '</span>');
}

                },
                error: function () {
                    $("#error-message").text('Request failed. Something went wrong').css('color', 'red');
                },
                complete: function () {
                 
                    $("#update").prop("disabled", false);
                }
            });
        });
    });
</script> -->


    
</body>

</html>