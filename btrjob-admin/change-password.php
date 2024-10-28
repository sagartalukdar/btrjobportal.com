<?php include("include/head.php");?>


<body>

    <!-- Preloader -->
    
    <?php include("include/preloader.php");?>
    <!-- Default Nav -->
    <?php include("include/header.php");?>

    <?php include("include/horizontal-navbar.php");?>
   

    <?php include("include/sidebar.php");?>

<style>
   .apply{
        float: left;
  width: 40%;
  padding-right: 20px;
  padding-left: 20px;
  height: 30px;
  line-height: 30px;
  text-align: center;
  background: linear-gradient(135deg,#21db84,#5197d0);
  color: #ffffff;
  font-size: 14px;
  text-transform: uppercase;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  border-radius: 5px;
  box-shadow: 3px 3px #eeb407;
  font-weight: 700;
}
</style>

    <!-- CODE -->
    
   


    <!-- Main Wrapper-->
    <!-- Change Password Form -->
    <div class="row align-items-center justify-content-center vh-100">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                

                <div class="card rounded-2 border-0 p-5 m-0" style="background:linear-gradient(to left,rgb(170, 167, 167),rgb(195, 217, 224) 40%); box-shadow: 5px 5px 16px rgb(76, 120, 156);"> 

                    <div class="card-header border-0 p-0 text-center">
                        <!--<a href="index.html" class="w-100 d-inline-block mb-5">-->
                        <!--    <img src="assets/img/logo2.png" alt="img" style="max-width:160px">-->
                        <!--</a>-->
                        <h3>Change your Password</h3>
                        <!--<p class="fs-14 text-dark my-4">Set your new password.</p>-->
                    </div>

                    <div class="card-body p-0">
                        <form class="form-horizontal" method="post" >
                            <div class="form-group">
                            <label for="o_password" class="text-dark">Old Password</label>
                                <input type="password" class="form-control" id="o_password" name="o_password" value="" placeholder="Type Old Password" required>
                            </div>

                            <div class="form-group">
                                <label for="n_password" class="text-dark">New Password</label>
                                <input type="password" class="form-control" id="n_password" name="n_password" value="" placeholder="Type New Password" required>
                            </div>   
            
                            <button type="submit" id="change-password" class="apply">Change</button>

                           
                        </form>
                    </div>
                </div>
            </div>
        </div>




  


  <?php include("include/footer.php") ?>   
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
  <script>
            $('#change-password').on('click', function (event) {
            event.preventDefault();
             
            var o_password = $("#o_password").val();
            var n_password = $("#n_password").val();
        
            $.ajax({
                type: 'POST',
                url: 'xhr/changePassword',
                data: {
                    o_password: o_password,
                    n_password: n_password
                },
                success: function (response) {
                    var result = JSON.parse(response);
                    if (result.status === 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Change successful',
                            showConfirmButton: true, 
                            timer: 2000 
                        }).then(function() {
                            window.location.href = 'index';
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Change failed',
                            html: `<span style="color: red;">${result.message}</span>`
                        });
                    }
                },
                error: function () {
                    // Handle the error if AJAX fails
                    console.error('Failed to process the request.');
                    Swal.fire({
                        icon: 'error',
                        title: 'An error occurred',
                    });
                }
            });
        });
        
        </script>

</body>


</html>