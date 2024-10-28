<?php include("include/head.php");?>
<?php
 if(isset($_SESSION['userType'])){
    if($_SESSION['userType']!='COMPANY'){
       header("location:403_error");
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
                                <label class="form-label">Email</label>
                                <p><?php echo $email;?></p>
                                <!-- <input type="email" class="form-control" id="email" value="<?php echo $email;?>"> -->

                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Phone</label>
                                <p><?php echo $phone;?></p>
                                <!-- <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $phone;?>"> -->
                            </div>
                        </div>
                        <form id="custom-form-validation" method="post"  enctype="multipart/form-data">

                            <div class="form-group">
                                <label class="form-label">Company / Business Name</label>
                                <input type="text" class="form-control" id="company" name="company" placeholder="Name"
                                    required>
                                    <input type="hidden" class="form-control" name="company_id" id="company_id" value="<?php echo $id;?>">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Company Description(write 4-5 lines about your company)</label>
                               <textarea rows="5" id="cdescription" class="form-control" name="company_description"
                                    placeholder="Type Company Description" required></textarea>
                                    
                            </div>

                            <div class="form-group">
                                <label class="form-label">Company / Business Address</label>
                                <textarea rows="5" id="address" class="form-control" name="address"
                                    placeholder="Enter Your Address here ."  required></textarea>
                            </div>


                            <div class="form-group">
                                <label class="form-label">State</label>
                      
                                <select class="form-select"  aria-label="Default select example" name="state"  id="inputState">
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
                                <select class="form-select" aria-label="Default select example" name="district" required id="inputDistrict">
                                    <option selected disabled>---- SELECT DISTRICT ----</option>
                           
                                </select>
                            </div>

 
                            <div class="form-group">
                                <label class="form-label"> Licence / Registration / Incorporation Certificate </label>
                               <!--  <div class="mb-3">
                                    <img class="img-thumbnail rounded-1" src="assets/img/1.jpg" alt="" width="80">
                                </div> -->
                                <div class="input-group">
                                    <input type="file" class="form-control" accept=".pdf" id="pdf_upload" name="image" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label"> Company Logo</label>
                                <div class="mb-3">
                                    <img class="img-thumbnail rounded-1" id="responseImage" width="100px" height="100px">
                                </div>
                                <div class="input-group">
                                    <input type="file" class="form-control" accept="image/*" id="logo" name="image2" required>
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
                            }else if($KYCstatus == 0) {
                               echo  '<p class="mb-0"style="color: #009fff;">Upload your KYC </p>';
                            }else if($KYCstatus == 1){
                                 echo  '<p class="mb-0"style="color: #009fff;">Your KYC is not yet verified </p>';
                            }
                        }
                        ?>

                

            </div>
        </div>
    </main>
<?php }?>
    <?php include("include/footer.php") ?>    
    <!-- state-district Script -->
   <script src="assets/js/company-state-district.js"></script>
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

    document.getElementById('logo').addEventListener('change', function () {
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
                var company_id = $("#company_id").val();
                var email = $("#email").val();
                var phone = $("#phone").val();
                var company = $("#company").val();
                var address = $("#address").val();
                var inputState = $("#inputState").val();
                var inputDistrict = $("#inputDistrict").val();
                var cdescription = $("#cdescription").val();
                // var gender = $("input[type=radio]:checked").val();
                // var pdfFile = $("#pdf_upload").val();
                var logoimage = $("#logo")[0].files[0];
                var pdfFile = $("#pdf_upload")[0].files[0];

                // Creating a FormData object for file upload
                var formData = new FormData();
                 formData.append('company_id', company_id);
                formData.append('email', email);
                formData.append('phone', phone);
                formData.append('company', company);
                formData.append('company_description', cdescription);
                formData.append('address', address);
                formData.append('state', inputState);
                formData.append('district', inputDistrict);
                // formData.append('gender', gender);
                // formData.append('qualification', qualification);
                formData.append('image2', logoimage);
                formData.append('image', pdfFile);

                // Validating form fields
                if ( !company || !address || !inputState || !inputDistrict || !cdescription || !pdfFile ) {
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
                    type: "POST",
                    processData: false,
                    contentType: false,
                    cache: false,
                    dataType: "json",
                    url: "xhr/update-companykyc",
                    mimeType: 'multipart/form-data',
                    data: formData,
                    success: function (response) {
                        // Handle the response from the server
                        if (response.status === 'success') {
                            Swal.fire({
                                icon: 'success',
                                title: 'KYC Updated Successfully',
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