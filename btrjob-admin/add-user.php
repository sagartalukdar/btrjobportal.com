
<?php include("include/head.php");?>
<?php
 if(isset($_SESSION['userType'])){
    if($_SESSION['userType']!='ADMIN' && $_SESSION['userType']!='COUNSELLOR'){
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

    <!-- Main Wrapper-->
    <main class="main-wrapper">
        <div class="container-fluid">
            <div class="inner-contents">
                <div class="page-header d-flex align-items-center justify-content-between mr-bottom-30">
                    <div class="left-part">
                        <h2 class="text-dark">Add new User</h2>
                        <p class="text-gray mb-0">Complete user registration here.</p>
                    </div>

                </div>


                <div class="card border-0 p-5">
                    <div
                        class="card-header bg-transparent border-0 p-0 d-flex align-items-center justify-content-between gap-3">
                        <h6 class="mb-0"> User Details</h6>
                    </div>


                    <!-- Add Counsellor Form Start -->
                    <form method="post" enctype="multipart/form-data" action="">
                        <div class="modal-body">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="fname" id="fname" class="form-control"
                                                placeholder="First Name" autofocus="false" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="lname" id="lname" class="form-control"
                                                placeholder="Last Name" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="email" name="email" id="email" class="form-control"
                                                placeholder="Email" autofocus="false" required />
                                        </div>
                                        <p id="emailErrorMessage" style="color:red"></p>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="username" id="username" class="form-control"
                                                placeholder="Username" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="password" name="password" id="password" class="form-control"
                                                placeholder="Password" autofocus="false" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="phone" id="phone" class="form-control"
                                                placeholder="Phone Number" required />
                                        </div>
                                        <p id="phoneErrorMessage" style="color:red"></p>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select name="userType" id="userType" class="form-select  show-tick"
                                                required>
                                                <option value="" selected disabled>Select User Type</option>
                                                <option value="ADMIN">ADMIN</option>
                                                <option value="COUNSELLOR">COUNSELLOR</option>
                                            </select>

                                           

                                        </div>
                                    </div>
                                    <div class="form-group">

                                        <div>
                                            <label class="form-label"> Photo </label>

                                            <div class="mb-3">

                                                <img id="chosen-image" class="image-style img-thumbnail rounded-1"
                                                    src="images/users/nopreview.jpg" alt="image" width="150px" 
                                                    height="200px">

                                            </div>

                                            <div class="input-group">
                                                <input type="file" class="form-control" name="image" accept="image/*"
                                                    id="upload-button" required />
                                            </div>
                                        </div>


                                    </div>

                                    <!-- <div class="form-group">
                                                <label class="form-label"> Photo </label>
                                                <div class="mb-3">
                                                    <img class="img-thumbnail rounded-1" src="assets/img/1.jpg" alt="" width="80">
                                                </div>
                                                <div class="input-group">
                                                    <input type="file" class="form-control" id="" required>
                                                </div>
                                            </div> -->

                                </div>
                            </div>
                        </div>
                        <div class="modal-footer ">
                            <p id="formErrorMessage" style="color:red"></p>
                            <!-- use ajax to add user: xhr/add-user -->
                            <input type="button" id="add-counsellor" class="btn btn-success waves-effect"
                                value="Add User" data-type="success">
                            <input type="button" id="add-user-dummy" class="btn btn-success waves-effect"
                                value="Loading. Please Wait..." style="display: none;">
                            <!-- <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button> -->

                        </div>
                    </form>
                    <!-- Add Counsellor Form End -->


                    <!-- <div class="card-body p-0 pt-4">
                    
                        <form id="custom-form-validation" method="post">

                            <div class="form-group">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control" name="first_name" placeholder="First Name"
                                    required>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control" name="last_name" placeholder="Last Name"
                                    required>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="admin@example.com"
                                    required>
                            </div>

                            <div class="form-group">
                                <label class="form-label">User Name</label>
                                <input type="text" class="form-control" name="user_name" placeholder="User Name"
                                    required>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password"
                                    required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Gender</label>
                                <div class="form-group">
                                    <input type="radio" id="radiomale" class="form-check-input" name="radioValidation"
                                        required>
                                    <label class="form-label" for="radiomale">Male</label>
                                    <br />
                                    <input type="radio" id="radiofemale" class="form-check-input" name="radioValidation"
                                        required>
                                    <label class="form-label" for="radiofemale">Female</label>
                                    <div class="invalid-feedback">
                                        Please choose Gender
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Short description about yourself</label>
                                <textarea rows="5" id="short-title" class="form-control" name="title"
                                    placeholder="Short description about yourself" required></textarea>
                            </div>

                            <div class="form-group">
                                <label class="form-label"> Photo </label>
                                <div class="mb-3">
                                    <img class="img-thumbnail rounded-1" src="assets/img/1.jpg" alt="" width="80">
                                </div>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="" required>
                                </div>
                            </div>

                            <div class="button_group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>

                    </div> -->
                </div>

            </div>
        

           
          
        </div>
    </main>


    <?php include("include/footer.php") ?>


    <!-- For Choosen Image -->
    <script type="text/javascript">
        let uploadButton = document.getElementById("upload-button");
        let chosenImage = document.getElementById("chosen-image");

        uploadButton.onchange = () => {
            let reader = new FileReader();
            reader.readAsDataURL(uploadButton.files[0]);
            reader.onload = () => {
                chosenImage.setAttribute("src", reader.result);
            }
            fileName.textContent = uploadButton.files[0].name;
        }

    </script>

    <!-- For Add Counsellor -->
    <script>
        $(function () {
            $('#add-counsellor').on('click', function () {

                var fname = $("#fname").val();
                var lname = $("#lname").val();
                var email = $("#email").val();
                var username = $("#username").val();
                var password = $("#password").val();
                var phone = $("#phone").val();
                var userType = $("#userType").find(":selected").val();
                var file = $("#upload-button")[0].files[0];
                var formData = new FormData();
                formData.append('image', file);
                formData.append('fname', fname);
                formData.append('lname', lname);
                formData.append('email', email);
                formData.append('username', username);
                formData.append('password', password);
                formData.append('phone', phone);
                formData.append('userType', userType);

                if (fname === "" || fname === null || lname === "" || lname === null || email === "" || email === null || username === "" || username === null || password === "" || password === null || phone === "" || phone === null || userType === "" || userType === null || file === "" || file === null) {
                    $("#formErrorMessage").html("Fill all the details to continue...");
                    $('#add-counsellor').preventDefault();
                } else {
                    function validateEmail($email) {
                        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                        return emailReg.test($email);
                    }
                    function validateMobile($mobile) {
                        var mobileReg = /^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[6789]\d{9}$/gm;
                        return mobileReg.test($mobile);
                    }
                    if (!validateEmail(email)) {
                        $("#emailErrorMessage").html("Please Enter a valid email address.");
                        $("#email").focus();
                        $('#add-user').preventDefault();
                    } else if (!validateMobile(phone)) {
                        $("#phoneErrorMessage").html("Please Enter a valid phone number.");
                        $("#phone").focus();
                        $('#add-user').preventDefault();
                    } else {
                        $("#formErrorMessage").html("");
                        $("#emailErrorMessage").html("");
                        $("#phoneErrorMessage").html("");

                        $("#add-counsellor").css("display", "none");
                        $("#add-user-dummy").css("display", "inline-block");

                        $.ajax({

                            type: "POST",
                            processData: false,
                            contentType: false,
                            cache: false,
                            dataType: "json",
                            url: "xhr/add-user",
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

</body>

</html>