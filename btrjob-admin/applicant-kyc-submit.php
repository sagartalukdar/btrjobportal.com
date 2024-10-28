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
<body class="bg-light">

     <!-- Preloader -->
        <?php include("include/preloader.php");?>


    <!-- Default Nav -->
    <?php include("include/header.php");?>

    <?php include("include/horizontal-navbar.php");?>

    <?php include("include/sidebar.php");?>
<?php 
if (isset($_GET['userid'])) {
    $id = $_GET['userid'];
    $read = $crud->Read($table, "`id`=$id");
}

if ($read) {
    $id = $read[0]['id'];
    $email = $read[0]['email'];
    $phone = $read[0]['phone'];
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
                        <h2 class="text-dark">Upload KYC</h2>
                        <p class="text-gray mb-0">Complete your kyc here.</p>
                    </div>

                </div>

      <?php
                        if (isset($KYCstatus)) {
                            if ($KYCstatus == 0 || $KYCstatus == 3) {
                                ?>
                <div class="card border-0 p-5">
                    <div
                        class="card-header bg-transparent border-0 p-0 d-flex align-items-center justify-content-between gap-3">
                        <h6 class="mb-0" style="text-transform: uppercase;"><?php echo $table;?> KYC</h6>
                    </div>

                    <div class="card-body p-0 pt-4">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Email</label><br>
                                <p><?php echo $email;?></p>
                                <!-- <input type="email" class="form-control" id="email" name="email" value="<?php echo $email;?>"> -->
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Phone</label>
                                <p><?php echo $phone;?></p>
                                <!-- <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $phone;?>"> -->
                            </div>
                        </div>
                        <form id="custom-form-validation" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <label class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="name"  name="name"
                                    placeholder="Enter Your Full Name" required>
                                    <input type="hidden" class="form-control" id="application_id" name="application_id" value="<?php echo  $id;?>">
                            </div>

                            <label class="form-label"> Select Gender</label>
                            <div class="form-check">
                                <input type="radio" name="gender" id="gender" value="male">
                                <label for="male">Male</label>
                                <input type="radio" name="gender" id="gender" value="female">
                                <label for="female">Female</label>
                            </div>


                            <div class="form-group">
                                <label class="form-label">Address</label>
                                <textarea rows="5" id="address" class="form-control"  name="address"
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
                                <div class="col-md-4">
                                    <label class="form-label">Qualification Certificate</label>
                                    <input type="file" class="form-control" name="image1" id="qualificationImg" accept=".pdf" value="">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Year of Experience(in months) </label>
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
                                        <!-- <img class="img-thumbnail rounded-1"  src="assets/img/1.jpg" alt="" width="80"> -->
                                        <img class="img-thumbnail rounded-1" id="responseImage" width="100px" height="100px">
                                    </div>
                                    <div class="input-group">
                                        <input type="file" class="form-control" accept="image/*" id="Idimg" name="image3" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Upload Your Resume or Cv </label>
                                    <div class="mb-3">
                                       <!--  <img class="img-thumbnail rounded-1" src="assets/img/1.jpg" alt="" width="80"> -->
                                    </div>
                                    <div class="input-group">
                                        <input type="file" class="form-control" accept=".pdf" id="CVpdf" name="image4" required>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="button_group">
                                <button type="submit" id="update-kyc" class="btn btn-primary">Submit</button>
                            </div>
                        </form>

                    </div>
                </div>

                                        <?php 
                               // echo  '';
                            }else if($KYCstatus == 1) {
                               echo  '<h2 class="text-center" style="color: #009fff;">Your KYC have been Uploaded </h2>';
                            }else{
                                 echo  '<h2 class="text-center" style="color: #009fff;">Your KYC is verified </h2>';
                            }
                        }
                        ?>
            </div>
        </div>
    </main>
<?php }?>
   <?php include("include/footer.php") ?>

     <!-- state-district Script -->
    <script src="assets/js/applicant-state-district.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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

    // document.getElementById('upload-button2').addEventListener('change', function () {
    //     previewImage(this, 'chosen-image2');
    // });
</script>
    <script>
        $(function () {
            $('#update-kyc').on('click', function () {
                // Retrieve form values
                var application_id = $("#application_id").val();
                var email = $("#email").val();
                var phone = $("#phone").val();
                var name = $("#name").val();
                var gender = $("#gender").val();
                var address = $("#address").val();
                var state = $("#inputState").val();
                var district = $("#inputDistrict").val();
                var qualification = $("#qualification").val();
                var experience = $("#experience").val();
                
                // var gender = $("input[type=radio]:checked").val();
                // var pdfFile = $("#pdf_upload").val();
                // var imageFile = $("#image_upload")[0].files[0];
                // var pdfFile = $("#pdf_upload")[0].files[0];
                var qualificationImg = $("#qualificationImg")[0].files[0];
                var experiencepdf = $("#experiencepdf")[0].files[0];
                var Idimg = $("#Idimg")[0].files[0];
                var CVpdf = $("#CVpdf")[0].files[0];
        // Creating a FormData object for file upload
                var formData = new FormData();
                 formData.append('application_id', application_id);
                formData.append('email', email);
                formData.append('phone', phone);
                formData.append('name', name);
                formData.append('gender', gender);
                formData.append('address', address);
                formData.append('state', state);
                formData.append('district', district);
                formData.append('qualification', qualification);
                formData.append('experience', experience);
                formData.append('image1', qualificationImg);
                // formData.append('gender', gender);
                // formData.append('qualification', qualification);
                // formData.append('image', imageFile);
                formData.append('image2', experiencepdf);
                formData.append('image3', Idimg);
                formData.append('image4', CVpdf);
                // formData.append('image', pdfFile);
                // formData.append('image', pdfFile);
                // formData.append('image', pdfFile);

                // Validating form fields
                if ( !name || !gender || !address || !state || !district|| !qualification|| !qualificationImg|| !Idimg|| !CVpdf ) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Validation Error',
                        text: 'Fill all the details to continue...'
                    });
                    return;
                }

                // Displaying a loading spinner or message while processing the form
                $("#update-kyc").prop("disabled", true);

                // Making an AJAX request to the server
                $.ajax({
                    type: "post",
                    processData: false,
                    contentType: false,
                    cache: false,
                    dataType: "json",
                    url: "xhr/update-applicantkyc",
                    mimeType: 'multipart/form-data',
                    data: formData,
                    success: function (response) {
                        // Handle the response from the server
                        if (response.status === 'success') {
                            Swal.fire({
                                icon: 'success',
                                title: 'KYC Updated successfully',
                                showConfirmButton: true,
                                timer: 2000
                            }).then(function () {
                                window.location.href = 'index';
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'KYC Update Failed',
                                html: `<span style="color: red;">${response.message}</span>`
                            });
                        }
                    },
                    error: function () {
                        Swal.fire({
                            icon: 'error',
                            title: 'Request failed',
                            text: 'Something went wrong'
                        });
                    },
                    complete: function () {
                        // Re-enable the button after request completion
                        $("#add-student").prop("disabled", false);
                    }
                });
            });
        });
    </script>
    
</body>

</html>