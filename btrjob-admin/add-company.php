<?php include("include/head.php");?>
<script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
<?php
 if(isset($_SESSION['userType'])){
    if($_SESSION['userType']!='ADMIN' && $_SESSION['userType']!='COUNSELLOR'){
       header("location:403_error");
       exit();
    }
 }
?>
<body class="bg-light">

    <!-- ck editor css -->
    <style>
            #container {
                width: 1000px;
                margin: 20px auto;
            }
            .ck-editor__editable[role="textbox"] {
                /* Editing area */
                min-height: 200px;
                margin: 20px auto;
            }
            .ck-content .image {
                /* Block images */
                max-width: 80%;
                margin: 20px auto;
            }
        </style>
    <!-- ck editor css -->

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
                        <h2 class="text-dark">Add Company</h2>
                        <p class="text-gray mb-0">Complete the kyc here.</p>
                    </div>

                </div>


                <div class="card border-0 p-5">
                    <div
                        class="card-header bg-transparent border-0 p-0 d-flex align-items-center justify-content-between gap-3">
                        <h6 class="mb-0">Fill All Details to Add</h6>
                    </div>

                    <div class="card-body p-0 pt-4">
                        
                    <form id="custom-form-validation" method="POST"  enctype="multipart/form-data">
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control border border-black" name="email" id="email" placeholder="Enter Company Email">
                                <p id="email-error" style="color:red"></p>
                            </div>
                           <div class="col-md-4">
                                <label class="form-label">Phone</label>
                                <input type="text" class="form-control border border-black" name="phone" id="phone" placeholder="Company Phone No">
                                <p id="phone-error" style="color:red"></p>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control border border-black" name="password" id="password" placeholder="Password">
                            </div>

                            
                        </div>

                            <div class="form-group">
                                <label class="form-label">Company / Business Name</label>
                                <input type="text" class="form-control" id="company" name="company" placeholder="Name"
                                    required>
                                   
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
                                <button type="submit" id="add-company" class="btn btn-primary">Submit</button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </main>

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
$(document).ready(function () {
    
    $('#email').on('blur', function () {
        var email = $(this).val();
        $.ajax({
            url: 'xhr/validate-email', 
            type: 'post',
            data: { email: email },
            success: function (response) {
                if (response === 'invalid') {
                    $('#email-error').text('Invalid Email address').css('color', 'red');
                    $("#add-company").prop("disabled", true);
                } else if (response === 'exists') {
                    $('#email-error').text('Email already exists').css('color', 'red');
                    $("#add-company").prop("disabled", true);
                } else {
                    $('#email-error').text('').css('color', ''); 
                    $("#add-company").prop("disabled", false);
                }
            }
        });
    });

    
    $('#phone').on('blur', function () {
    var phone = $(this).val();
        $.ajax({
            url: 'xhr/validate-phone', 
            type: 'POST',
            data: { phone: phone },
            success: function (response) {
                if (response === 'invalid') {
                    $('#phone-error').text('Invalid Phone Number').css('color', 'red');
                    $("#add-company").prop("disabled", true);
                } else if (response === 'exists') {
                    $('#phone-error').text('Phone Number already exists').css('color', 'red');
                    $("#add-company").prop("disabled", true);
                } else {
                    $('#phone-error').text('').css('color', ''); 
                    $("#add-company").prop("disabled", false);
                }
            }
        });
    });
});
</script>


         <script>
$(function () {
    $('#add-company').on('click', function () {
        // Retrieve form values
        var email = $("#email").val();
        var password = $("#password").val();
        var phone = $("#phone").val();
        var company = $("#company").val();
        var address = $("#address").val();
        var inputState = $("#inputState").val();
        var inputDistrict = $("#inputDistrict").val();
        var cdescription = $("#cdescription").val();
        var logoimage = $("#logo")[0].files[0];
        var pdfFile = $("#pdf_upload")[0].files[0];

       

        // Validating form fields
        if (!email || !password || !phone || !company || !address || !inputState || !inputDistrict || !cdescription || !pdfFile ) {
            Swal.fire({
                icon: 'error',
                title: 'Validation Error',
                text: 'Fill all the details to continue...'
            });
            return;
        }

        // Displaying a loading spinner or message while processing the form
        $("#add-company").prop("disabled", true);
         // Creating a FormData object for file upload
        var formData = new FormData();
        formData.append('email', email);
        formData.append('phone', phone);
        formData.append('password', password);
        formData.append('company', company);
        formData.append('company_description', cdescription);
        formData.append('address', address);
        formData.append('state', inputState);
        formData.append('district', inputDistrict);
        formData.append('image2', logoimage);
        formData.append('image', pdfFile);

        // Making an AJAX request to the server
        $.ajax({
            type: "POST",
            processData: false,
            contentType: false,
            cache: false,
            dataType: "json",
            url: "xhr/add-company", // Ensure this URL is correct
            mimeType: 'multipart/form-data',
            data: formData,
            success: function (response) {
                // Handle the response from the server
                if (response.status === 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Registration successful',
                        showConfirmButton: true,
                        timer: 2000
                    }).then(function () {
                        window.location.href = 'index'; // Redirect upon successful registration
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Registration failed',
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
                $("#add-company").prop("disabled", false);
            }
        });
    });
});
</script>




    <!-- script for get ckeditor's value  -->
    <!-- short-title   short-address -->
 





</body>

</html>