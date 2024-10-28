


<?php include("include/head.php");?>
</head>

<body class="bg-light">

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



  <!-- Edit Modal start -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="defaultModalLabel">Edit User <span id="editName"></span></h4>
                </div>
                <form method="post" enctype="multipart/form-data" action="">
                <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <label for="edit_fname">First Name</label>
                                    <input type="text"  id="edit_fname" class="form-control" placeholder="First Name" autofocus="false" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <label for="edit_lname">Last Name</label>
                                    <input type="text"  id="edit_lname" class="form-control" placeholder="Last Name" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <label for="edit_email">Email</label>
                                    <input type="email" id="edit_email" class="form-control" placeholder="Email" autofocus="false" required />
                                </div>
                                    <p id="updateEmailErrorMessage" style="color:red"></p>
                            </div>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <label for="edit_phone">Phone No</label>
                                    <input type="text" id="edit_phone" class="form-control" placeholder="Phone Number" required />
                                    <input type="hidden" id="edit_user_id"/>
                                </div>
                                    <p id="updatePhoneErrorMessage" style="color:red"></p>
                            </div>
                            <div class="form-group">
                                <div class="form-line selectStatus">
                                <label class="status">Status</label>
                                    <select class="form-select show-tick" aria-label="Default select example" name="status"
                                        id="status">
                                      
                                        <!-- <option value="" selected disabled>Select User Status</option> -->
                                         <option value="0">Inactive</option>
                                        <option value="1">Active</option>
                                        <option value="2">Banned</option>
                                        <option value="3">Left</option>
                                    </select>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer ">
                    <p id="updateErrorMessage" style="color:red"></p>
                    <!-- use ajax to add user: xhr/add-user -->
                    <input type="button" id="update-user"  class="btn btn-success waves-effect" value="Update " >
                    <input type="button" id="delete-users"  class="btn btn-danger waves-effect" value="Delete " >
                    
                    
                </div>
                <div class="modal-footer ">
                    <button type="button" class="btn btn-warning waves-effect" data-bs-dismiss="modal">CLOSE</button>
                </div>
                </form>
            </div>
        </div>
    </div>
      <!-- Edit Modal end -->

    <!-- Main Wrapper-->
    <main class="main-wrapper">
        <div class="container-fluid">
           
              <div class="inner-contents">
                <div class="page-header d-flex align-items-center justify-content-between mr-bottom-30">
                    <div class="left-part">
                        <h2 class="text-dark">User Details</h2>
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
                            <h4 class="mb-0">User Info</h4>
                            <!-- <div class="ms-auto d-flex align-items-center gap-3">
                                <div class="dropdown">
                                    <a href="#" data-bs-toggle="dropdown" class="fs-24 text-gray">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu p-0">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table id="table-2" class="display text-center">
                                    <thead>
                                        <tr>
                                            <th>
                                                <input type="checkbox" class="form-check-input" name="checkbox1"
                                                    value="">
                                            </th>
                                            <th>User</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>User Type</th>
                                            <th>Status</th>
                                            <th>Join Date</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $readusers=$crud->Read("users","1 ORDER BY `id` desc"); 
                                        if($readusers){ 
                                            foreach($readusers as $users){
                                    ?>
                                        <tr>
                                            <td>
                                                <input type="checkbox" class="form-check-input" name="checkbox1"
                                                    value="">
                                            </td>
                                            <td>
                                                <div class="employee d-flex gap-2 flex-wrap">
                                                    <div class="profilepicture flex-shrink-0 d-none d-xl-block">
                                                        <img src="<?php echo $users["user_image"] ; ?>" alt="img" width="90px" height="80px">
                                                    </div>
                                                    <div class="description">
                                                        <h6 class="mb-0"><?php echo $users["name"]." ".$users["surname"]; ?></h6>
                                                        <small><?php echo $users["email"]; ?></small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><?php echo $users["email"]; ?></td>
                                            <td><?php echo $users["phone"]; ?></td>
                                            <td><?php echo $users["user_type"]; ?></td>
                                            <td>
                                                
                                            <?php 
                                                  if($users["status"]==0){
                                                    echo '<span class="badge badge-soft-danger">
                                                    <i class="bi bi-cross">'
                                                    . 'Inactive'. '&nbsp' .
                                                    '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                                    <path fill="none" d="M0 0h24v24H0z"/>
                                                    <path fill="#f44336" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm4.46 8.12l-5.58 5.59a.996.996 0 0 1-1.41 0l-3.09-3.09a.996.996 0 1 1 1.41-1.41l2.47 2.47 4.95-4.95a.996.996 0 1 1 1.41 1.41z"/>
                                                    </svg>
                                                    </i>
                                                    </span> '; 
                             
                                                  }else if($users["status"]==1){
                                                    echo '<span class="badge badge-soft-success">
                                                    <i class="bi bi-cross">'
                                                    .'Active'.'&nbsp' .
                                                    '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                                    <path fill="none" d="M0 0h24v24H0z"/>
                                                    <path fill="#4caf50" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm4.46 8.12l-5.58 5.59a.996.996 0 0 1-1.41 0l-3.09-3.09a.996.996 0 1 1 1.41-1.41l2.47 2.47 4.95-4.95a.996.996 0 1 1 1.41 1.41z"/>
                                                    </svg>
                                                    </i>
                                                    </span> '; 
                                                                                                   
                                                  }
                                                  else if($users["status"]==2){
                                                    echo '<span class="badge badge-soft-primary">
                                                    <i class="bi bi-cross">'
                                                     .'Banned'.'&nbsp'.
                                                     '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"       width="24" height="24">
                                                     <path fill="none" d="M0 0h24v24H0z"/>
                                                     <path fill="#f44336" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm5 13.59L15.59 17 12 13.41 8.41 17 7 15.59 10.59 12 7 8.41 8.41 7 12 10.59 15.59 7 17 8.41 13.41 12 17 15.59z"/>
                                                     </svg>
                                                    </i>
                                                    </span> '; 
                                                   
                                                  }else if($users["status"]==3){
                                                       echo '<span class="badge badge-soft-warning">
                                                    <i class="bi bi-cross">'
                                                    .'Left'.'&nbsp'.
                                                    '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                                    <path fill="none" d="M0 0h24v24H0z"/>
                                                    <path fill="#000000" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-5-7h6v-2H7v2z"/>
                                                    </svg>
                                                    </i>
                                                    </span> '; 
                                                  }else {
                                                    echo "invalid" ;
                                                  }
                                            ?>
                                              
                                            </td>
                                            <td><?php echo $users["added_date"]; ?></td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="#" data-bs-toggle="dropdown" class="fs-24 text-gray">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu p-0">
                                                        <!-- <p class="dropdown-item edit-users" data-bs-toggle="modal" data-bs-target="#editModal" data-id="<?php echo $users["id"]; ?>">Edit</p>
                                                        
                                                        <p class="dropdown-item text-danger" id="delete-users2" >Delete</p> -->
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php 
                                    }}
                                    else {
                                    
                                    }
                                    ?>
                                
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
          
        </div>
    </main>


    <?php include("include/footer.php") ?>


     <script>
        $(function () {
        $('.edit-users').on('click', function () {
        var cousellorId = $(this).data('id');
        console.log(cousellorId);
        $.ajax({
            type: "POST", 
            dataType: "json",
            url: "xhr/fetch-user.php",
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
                        url: "xhr/update-user.php",
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
                    url: "xhr/delete-user.php",
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


   

</body>

</html>