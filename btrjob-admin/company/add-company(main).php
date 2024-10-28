<?php include("include/head.php");?>
<script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
</head>

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
                        
                    <form method="post" enctype="multipart/form-data" action="">
                       
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control border border-black" name="c_email" id="c_email" placeholder="Enter Company Email">
                                <p id="emailErrorMessage" style="color:red"></p>
                            </div>
                           

                            <div class="col-md-4">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control border border-black" name="c_password" id="c_password" placeholder="Password">
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">Phone</label>
                                <input type="text" class="form-control border border-black" name="c_phone" id="c_phone" placeholder="Company Phone No">
                                <p id="phoneErrorMessage" style="color:red"></p>
                            </div>
                        </div>

                            <div class="form-group">
                                <label class="form-label">Company / Business Name</label>
                                <input type="text" class="form-control border border-black" name="c_name" id="c_name" placeholder="Name"
                                    required>
                            </div>

                            <div class="form-group">
                            <label class="form-label">Company / Business Description</label>
                                <textarea rows="5" id="short-title" class="form-control border border-black" name="description"
                                    placeholder="Enter a Short Description about The Company ." required></textarea>
                            </div>

                            <div class="form-group">
                                <label class="form-label">State</label>
                      
                                <select class="form-select border border-black" aria-label="Default select example" name="state"  id="inputState">
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
                                <select class="form-select border border-black" aria-label="Default select example" name="district" required id="inputDistrict">
                                    <option selected disabled>---- SELECT DISTRICT ----</option>
                           
                                </select>
                            </div>

                            <div class="form-group">
                            <label class="form-label">Company / Business Address</label>
                                   <textarea rows="5" id="short-address" class="form-control" name="address"
                                    placeholder="Enter the Other Address Details ." required></textarea>
                            </div>
                           
  


                          
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Licence / Registration / Incorporation Certificate </label>
                                    <div class="mb-3">

                                        <img id="chosen-image1" class="image-style img-thumbnail rounded-1"
                                            src="images/comany-certificate.jpg" alt="Company" width="80">

                                    </div>

                                    <div class="input-group">
                                        <input type="file" class="form-control" name="certificate-image" accept="image/*"
                                            id="upload-button-certificate" required />
                                    </div> 
                                </div>


                                <div class="col-md-6">
                                    <label class="form-label">Upload Company / Business Logo ( Optional ) </label>
                                    <div class="mb-3">

                                        <img id="chosen-image2" class="image-style img-thumbnail rounded-1"
                                            src="images/company-logo.jpg" alt="Company" width="80">

                                    </div>

                                    <div class="input-group">
                                        <input type="file" class="form-control" name="logo-image" accept="image/*" id="upload-button-logo" required />
                                    </div>
                                </div>


                            </div>




 
                            <!-- <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Licence / Registration / Incorporation Certificate </label>
                                    <div class="mb-3">
                                        <img class="img-thumbnail rounded-1" src="assets/img/1.jpg" alt="" width="80">
                                    </div>
                                    <div class="input-group">
                                        <input type="file" class="form-control" name="certificate" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Upload Company / Business Logo ( Optional ) </label>
                                    <div class="mb-3">
                                        <img class="img-thumbnail rounded-1" src="assets/img/1.jpg" alt="" width="80">
                                    </div>
                                    <div class="input-group">
                                        <input type="file" class="form-control" name="logo" required>
                                    </div>
                                </div>
                                
                            </div> -->
                            <p id="formErrorMessage" style="color:red"></p>
                            <div class="button_group">
                                <input type="button" id="add-company" class="btn btn-primary waves-effect"
                                value="Add Company" data-type="success">
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

    <!-- ckeditor -->
    <!-- <script>
        ClassicEditor
            .create( document.querySelector( '#editor1' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
     <script>
        ClassicEditor
            .create( document.querySelector( '#editor2' ) )
            .catch( error => {
                console.error( error );
            } );
    </script> -->
    <!-- ckeditor -->
    <script>
        let globalEditor;
     
     document.addEventListener('DOMContentLoaded', function () {
         ClassicEditor
             .create(document.querySelector('#short-title'))
             .then(editor => {
                
                 globalEditor1 = editor; // Store the editor instance
             })
             .catch(error => {
                 console.error(error);
             });


             ClassicEditor
             .create(document.querySelector('#short-address'))
             .then(editor => {
                 globalEditor = editor; // Store the editor instance
             })
             .catch(error => {
                 console.error(error);
             });

     });

     </script>

    <!-- script for choosen company certificate -->
     <script type="text/javascript">    
        let uploadButton1 = document.getElementById("upload-button-certificate");
        let chosenImage1 = document.getElementById("chosen-image1");

        uploadButton1.onchange = () => {
            let reader = new FileReader();
            reader.readAsDataURL(uploadButton1.files[0]);
            reader.onload = () => {
                chosenImage1.setAttribute("src", reader.result);
            }
            fileName.textContent = uploadButton1.files[0].name;
        }

    </script>



    <!-- script for choosen company logo -->
    <script type="text/javascript">
        let uploadButton2 = document.getElementById("upload-button-logo");
        let chosenImage2 = document.getElementById("chosen-image2");

        uploadButton2.onchange = () => {
            let reader = new FileReader();
            reader.readAsDataURL(uploadButton2.files[0]);
            reader.onload = () => {
                chosenImage2.setAttribute("src", reader.result);
            }
            fileName.textContent = uploadButton2.files[0].name;
        }

    </script>


          <!-- script for add company  -->

         <script>
            $(function () {
            $('#add-company').on('click', function () {
                // short-address inputDistrict inputState short-title  c_name  c_phone c_email
                var cName = $("#c_name").val();
                var cPhone = $("#c_phone").val();
                var cEmail = $("#c_email").val();
                var cPassword = $("#c_password").val();
                
                var cState = $("#inputState").val();
                var cDistrict = $("#inputDistrict").val();
                var file1 = $("#upload-button-certificate")[0].files[0];
                var file2 = $("#upload-button-logo")[0].files[0];

                //   var cDesc = globalEditor1.getData();
                // console.log("Company Description :", cDesc);

                var comDesc = globalEditor1.getData();
                var regex = /<\/?p>/g; // Regular expression to match <p> and </p> tags
                var cDesc = comDesc.replace(regex, ''); // Replace <p> and </p> tags with an empty string

                

                // var cAddress = globalEditor.getData();
                // console.log("Company Address :", cAddress);
                
                var comAddress = globalEditor.getData();
                var regex2 = /<\/?p>/g; // Regular expression to match <p> and </p> tags
                var cAddress = comAddress.replace(regex2, ''); // Replace <p> and </p> tags with an empty string


                console.log(cName+" "+cPhone+" "+cEmail+" "+cDesc+" "+cPassword+" "+cAddress+" "+
                 cState+" "+cDistrict+" "+file1+" "+file2);

                var formData = new FormData();
                formData.append('image1', file1);
                formData.append('image2', file2);
                formData.append('cName', cName);
                formData.append('cPhone', cPhone);
                formData.append('cEmail', cEmail);
                formData.append('cDesc', cDesc);
                formData.append('cPassword', cPassword);
                formData.append('cAddress', cAddress);
                formData.append('cState', cState);
                formData.append('cDistrict', cDistrict);


                

                        // id	
                        // email	
                        // phone	
                        // password	
                        // name	
                        // company_description	
                        // address	
                        // state	
                        // district	
                        // trade_license	
                        // logo	
                        // status
                        // 0:inactive, 1:uploaded, 2:verified
                        // user_type

             //   cName cPhone cEmail cDesc cPassword cAddress cState cDistrict image1 image2

                if (cName === "" || cName === null || cPhone === "" || cPhone === null || cEmail === "" || cEmail === null || cDesc === "" || cDesc === null || cPassword === "" || cPassword === null || cAddress === "" || cAddress === null || cState === "" || cState === null || cDistrict === "" || cDistrict === null || file1 === "" || file1 === null ) {
                    $("#formErrorMessage").html("Fill all the details to continue...");
                    $('#add-company').preventDefault();
                } else {
                    function validateEmail($cEmail) {
                        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                        return emailReg.test($cEmail);
                    }
                    function validateMobile($cPhone) {
                        var mobileReg = /^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[6789]\d{9}$/gm;
                        return mobileReg.test($cPhone);
                    }
                    if (!validateEmail(cEmail)) {
                        $("#emailErrorMessage").html("Please Enter a valid email address.");
                        $("#c_email").focus();
                        $('#add-company').preventDefault();
                    } else if (!validateMobile(cPhone)) {
                        $("#phoneErrorMessage").html("Please Enter a valid phone number.");
                        $("#c_phone").focus();
                        $('#add-company').preventDefault();
                    } else {
                        $("#formErrorMessage").html("");
                        $("#emailErrorMessage").html("");
                        $("#phoneErrorMessage").html("");

                        // $("#add-company").css("display", "none");
                        // $("#add-user-dummy").css("display", "inline-block");

                        $.ajax({

                            type: "POST",
                            processData: false,
                            contentType: false,
                            cache: false,
                            dataType: "json",
                            url: "xhr/add-company.php",
                            mimeType: 'multipart/form-data',
                            data: formData,
                            success: function (response) {
                                if (response.successMessage) {
                                    // showSuccessMessage ();
                                    swal("Success!", response.successMessage + " Reloading", "success");

                                    setTimeout(function () {
                                        window.location.reload();
                                    }, 3000);

                                } else if (response.errorMessage) {
                                    swal("Error!", response.errorMessage, "error");
                                    $("#add-user-dummy").css("display", "none");
                                    $("#add-user").css("display", "inline-block");
                                }

                            },
                            error: function (error) {
                                swal("Error!", "Something went wrong", "error");

                            }
                        });
                    }

                }

            });
        });
         </script> 



    <!-- script for get ckeditor's value  -->
    <!-- short-title   short-address -->
 





</body>

</html>