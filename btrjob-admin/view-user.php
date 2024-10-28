<?php include("include/head.php");?>
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.dataTables.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.0/css/buttons.dataTables.css">
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

        <div class="container">
    
        </div>


        <div class="container-fluid">
            <div class="inner-contents">
                <div class="page-header d-flex align-items-center justify-content-between mr-bottom-30">
                    <div class="left-part">
                        <h2 class="text-dark">Counsellor Details</h2>
                        <p class="text-gray mb-0">You can Update and Delete this details.</p>
                    </div>

                </div>

            </div>
        
            <div class="row">

                <div class="col-lg-12">
                    <!-- Table Two  -->
                    <div class="card border-0 p-5">
                        <div
                            class="card-header pb-5 bg-transparent border-0 d-flex align-items-center justify-content-between gap-3">
                            <h4 class="mb-0">Counsellor Info</h4>
                            <div class="ms-auto d-flex align-items-center gap-3">
                                <div class="dropdown">
                                    <a href="#" data-bs-toggle="dropdown" class="fs-24 text-gray">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu p-0">
                                        <a class="dropdown-item" href="#">View</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">

                                <!-- datatable -->
                                <table id="example" class="display nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                           <th>Sl no.</th>
                                           <th>Image</th>
                                           <th>Username</th>
                                           <th>User</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>User Type</th>
                                            <th>Status</th>
                                            <th>Join Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $readusers=$crud->Read("users","1 ORDER BY `id` desc"); 
                                        if($readusers){
                                           $n=0; 
                                            foreach($readusers as $users){
                                    ?>
                                        <tr>
                                            <td><?php echo ++$n; ?></td>
                                            <td><img src="uploads/<?php echo $users["user_image"];?>" style="max-width:80px"/></td>
                                            <td><?php echo $users["username"];?></td>

                                            <td><?php echo $users["name"]." ".$users["surname"]; ?></td>
                                            <td><?php echo $users["email"];?></td>
                                            <td><?php echo $users["phone"]; ?></td>
                                            <td><?php echo $users["user_type"]; ?></td>
                                            <td><?php echo $users["status"]; ?></td>
                                            <td><?php echo $users["added_date"]; ?></td>
                                            
                                        </tr>
                                       <?php }}?> 
                                    </tbody>
                                    
                                    <tfoot>
                                        <tr>
                                            <th>Sl no.</th>
                                            <th>Image</th>
                                           <th>Username</th>
                                           <th>User</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>User Type</th>
                                            <th>Status</th>
                                            <th>Join Date</th>
                                        </tr>
                                    </tfoot>
                                </table>

                            </div>
                        </div>
                    </div>
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
        $('.edit-users').on('click', function () {
        var cousellorId = $(this).data('id');
        console.log(cousellorId);
        $.ajax({
            type: "POST", 
            dataType: "json",
            url: "xhr/fetch-user",
            data: {cousellorId : cousellorId},
            success: function(response){
             
                $("#edit_fname").val(response.name);
                $("#edit_lname").val(response.surname);
                $("#edit_email").val(response.email);
                $("#edit_phone").val(response.phone);
                $("#edit_user_id").val(response.user_id);

                $("div.selectStatus select").val(response.status).change();

                console.log(response.status);
            },
            error: function(error){
            swal("Error!", "Something went wrong", "error");
            
            }
        });
        });
       });




       $(function () {
        $('#update-user').on('click', function () {
            var fname = $("#edit_fname").val();
            var lname = $("#edit_lname").val();
            var email = $("#edit_email").val();
            var phone = $("#edit_phone").val();
            var usersId = $("#edit_user_id").val();
            var status = $("#status").find(":selected").val();
            var formData = new FormData();
            formData.append('fname', fname);
            formData.append('lname', lname);
            formData.append('email', email);
            formData.append('phone', phone);
            formData.append('usersId', usersId);
            formData.append('status', status);

            if (fname===""||fname===null || lname===""||lname===null || email===""||email===null || phone===""||phone===null ||status===""||status===null ) {
                $("#updateErrorMessage").html("Fill all the details to continue...");
                $('#add-user').preventDefault();
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
                    $("#updateEmailErrorMessage").html("Please Enter a valid email address.");
                    $("#email").focus();
                    $('#add-user').preventDefault();
                } else if (!validateMobile(phone)) {
                    $("#updatePhoneErrorMessage").html("Please Enter a valid phone number.");
                    $("#phone").focus();
                    $('#add-user').preventDefault();
                } else {
                    $("#formErrorMessage").html("");
                    $("#emailErrorMessage").html("");
                    $("#phoneErrorMessage").html("");
                    $.ajax({
                        type: "POST", 
                        processData: false,
                        contentType: false,
                        cache: false,
                        dataType: "json", 
                        url: "xhr/update-user",
                        data: formData,
                        success: function(response){
                        if(response.successMessage){
                            // showSuccessMessage ();
                            $('#editModal').modal('hide');
                            swal("Success!",response.successMessage+" Reloading", "success");
                            
                            setTimeout(function () {
                            window.location.reload();
                            }, 3000);   
                            
                        } else if (response.errorMessage) {
                            $('#editModal').modal('hide');
                            swal("Error!", response.errorMessage, "error");
                        }
                        
                        },
                        error: function(error){
                        swal("Error!", "Something went wrong", "error");
                        
                        }
                    });
                }
                
            }
            
        });
    });







    $(function () {
        $('#delete-users').on('click', function () {
            
            var usersId = $("#edit_user_id").val();
            var formData = new FormData();
            formData.append('usersId', usersId);
            if (confirm('Are you sure you want to delete this User?')) {
                $.ajax({
                    type: "POST", 
                    processData: false,
                    contentType: false,
                    cache: false,
                    dataType: "json", 
                    url: "xhr/delete-user",
                    data: formData,
                    success: function(response){
                    if(response.successMessage){
                        // showSuccessMessage ();
                        $('#editModal').modal('hide');
                        swal("Success!",response.successMessage+" Reloading", "success");
                        
                        setTimeout(function () {
                        window.location.reload();
                        }, 3000);   
                        
                    } else if (response.errorMessage) {
                        $('#editModal').modal('hide');
                        swal("Error!", response.errorMessage, "error");
                    }
                    
                    },
                    error: function(error){
                    swal("Error!", "Something went wrong", "error");
                    
                    }
                });
            } else {
                alert('User deletion aborted.');
            }
            
                
            
        });
    });





    
    // $(function () {
    //     $('#delete-users2').on('click', function () {
            
    //         var usersId = $("#edit_user_id").val();
    //         var formData = new FormData();
    //         formData.append('usersId', usersId);
    //         if (confirm('Are you sure you want to delete this users?')) {
    //             $.ajax({
    //                 type: "POST", 
    //                 processData: false,
    //                 contentType: false,
    //                 cache: false,
    //                 dataType: "json", 
    //                 url: "xhr/delete-users.php",
    //                 data: formData,
    //                 success: function(response){
    //                 if(response.successMessage){
    //                     // showSuccessMessage ();
    //                     $('#editModal').modal('hide');
    //                     swal("Success!",response.successMessage+" Reloading", "success");
                        
    //                     setTimeout(function () {
    //                     window.location.reload();
    //                     }, 3000);   
                        
    //                 } else if (response.errorMessage) {
    //                     $('#editModal').modal('hide');
    //                     swal("Error!", response.errorMessage, "error");
    //                 }
                    
    //                 },
    //                 error: function(error){
    //                 swal("Error!", "Something went wrong", "error");
                    
    //                 }
    //             });
    //         } else {
    //             alert('users deletion aborted.');
    //         }
            
                
            
    //     });
    // });

    </script>

    <!-- data table -->
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.0/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.print.min.js"></script>
    <script>
        new DataTable('#example', {
            layout: {
                topStart: {
                    buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                }
            }
        });
    </script>

</body>

</html>