<?php include("include/head.php");?>
<?php
if(isset($_SESSION['userType'])){
    if($_SESSION['userType']!='COMPANY'){
    header("location: 403_error");
    exit();
    }
}
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">-->


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
    $description = $read[0]['company_description'];
    $address = $read[0]['address'];
    $state = $read[0]['state'];
    $district = $read[0]['district'];
    
    $trade_license=$read[0]['trade_license'];
    $logo=$read[0]['logo'];
   
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
                        <h2 class="text-dark">Profile Update</h2>
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
                        <h6 class="mb-0" style="text-transform: uppercase;"><?php echo $table;?> Profile</h6>
                    </div>

                    <div class="card-body p-0 pt-4">
                        
                        
                        <form id="custom-form-validation" method="post">
                            <input type="hidden" class="form-control" id="edit_company_id" name="edit_company_id" value="<?php echo $id;?>">
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label class="form-label">Company name</label>
                                    <input type="text" name="cname" id="cname" class="form-control"  value="<?php echo $name;?>">
                                    
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Phone</label>
                                            <input type="text" name="cphone" id="cphone" class="form-control" value="<?php echo $phone;?>">
                                            <span id="phone-error" class="error-message"></span>
                                    
                                </div>
                            <div class="row mb-3">
                           
                            <div class="form-group">
                                <label class="form-label">Company Description(write 4-5 lines about your company)</label>
                                <textarea rows="5" id="cdesc" class="form-control"  name="cdesc"
                                    required><?php echo $description;?></textarea>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Address</label>
                                <textarea rows="5" id="edit_address" class="form-control"  name="address"
                            placeholder="Enter Your Address here ." required><?php echo $address;?></textarea>
                            </div>


                            <div class="form-group">
                                <label class="form-label">State</label>
                      
                                <select class="form-select" aria-label="Default select example" name="state"  id="inputState" required>
                                    <!-- <option value="SelectState" >Select State First</option> -->
                                    <option value="<?php echo $state;?>" selected><?php echo $state;?></option>
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
                                    id="inputDistrict" required>
                                    <option value="">-- Select District -- </option>
                                    <option value="<?php echo $district;?>" selected><?php echo $district;?></option>
                                </select>
                            </div>


                            <div class="button_group">
                                <button type="submit" id="update-kyc" class="btn btn-primary">Update</button>
                            </div>
                        </form>

                    </div>
                </div>

                                        <?php 
                               // echo  '';
                            }else if($KYCstatus == 0) {
                               echo  '<p class="mb-0"style="color: #009fff;">Upload Your KYC</p>';
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
                var company_id = $("#edit_company_id").val();
                var caddress = $("#edit_address").val();
                var cphone = $("#cphone").val();
                var cname = $("#cname").val();
                var cdesc = $("#cdesc").val();
              
                var inputState = $("#inputState").val();
                var inputDistrict = $("#inputDistrict").val();
              
             
                var formData = new FormData();
                 formData.append('cid', company_id);
                formData.append('caddress', caddress);
                formData.append('cphone', cphone);
                formData.append('cname', cname);
                formData.append('cdesc', cdesc);
             
                formData.append('inputState', inputState); 
                formData.append('inputDistrict', inputDistrict);
               
                // formData.append('image', pdfFile);
                // formData.append('image', pdfFile);
                // formData.append('image', pdfFile);

                 // Validating form fields
                 if ( !inputState || !inputDistrict  ) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Validation Error',
                        text: 'Fill State or District Properly to continue...'
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
                    url: "xhr/update-company-kyc",
                    
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
                        $("#update-kyc").prop("disabled", false);
                    }
                });
            });
        });
    </script>


<script>
    $(document).ready(function () {
    $('#cphone').on('blur', function () {
        var phone = $(this).val();
        var userType = "COMPANY"; 
        $.ajax({
            url: '../login/xhr/validate-phone', 
            type: 'POST',
            data: { phone: phone, userType: userType }, 
            success: function (response) {
                if (response === 'invalid') {
                    $('#phone-error').text('Invalid Phone Number').css('color', 'red');
                    $("#update-kyc").prop("disabled", true);
                } else if (response === 'exists') {
                    $('#phone-error').text('Phone Number already exists').css('color', 'red');
                    $("#update-kyc").prop("disabled", true);
                } else {
                    $('#phone-error').text('').css('color', ''); 
                    $("#update-kyc").prop("disabled", false);
                }
            }
        });
    });
});
</script>
    
</body>

</html>