

<?php include("include/head.php");?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
 if(isset($_SESSION['userType'])){
    if($_SESSION['userType']!='ADMIN' && $_SESSION['userType']!='COUNSELLOR'){
       header("location:403_error");
       exit();
    }
 }
?>
<style type="text/css">
  
    .hired{
        float: left;
  width: 100%;
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
   .reject{
        float: left;
  width: 100%;
  padding-right: 20px;
  padding-left: 20px;
  height: 30px;
  line-height: 30px;
  text-align: center;
  background: linear-gradient(135deg,#db2121,#d05181);
  color: #ffffff;
  font-size: 14px;
  text-transform: uppercase;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  border-radius: 5px;
box-shadow: 3px 3px #92b76e;
  font-weight: 700;
}
.interview{
   float: left;
  width: 100%;
  padding-right: 20px;
  padding-left: 20px;
  height: 30px;
  line-height: 30px;
  text-align: center;
  background: linear-gradient(135deg,#21dbdb,#5171d0);
  color: #ffffff;
  font-size: 14px;
  text-transform: uppercase;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  border-radius: 5px;
box-shadow: 3px 3px #e86e15;
  font-weight: 700;
}
.bootstrap-timepicker {
        position: relative;
    }

    .bootstrap-timepicker.pull-right .bootstrap-timepicker-widget.dropdown-menu {
        left: auto;
        right: 0;
    }

    .bootstrap-timepicker.pull-right .bootstrap-timepicker-widget.dropdown-menu:before {
        left: auto;
        right: 12px;
    }

    .bootstrap-timepicker.pull-right .bootstrap-timepicker-widget.dropdown-menu:after {
        left: auto;
        right: 13px;
    }

    .bootstrap-timepicker .input-group-addon {
        cursor: pointer;
    }

    .bootstrap-timepicker .input-group-addon i {
        display: inline-block;
        width: 16px;
        height: 16px;
    }

    .bootstrap-timepicker-widget.dropdown-menu {
        padding: 4px;
    }

    .bootstrap-timepicker-widget.dropdown-menu.open {
        display: inline-block;
    }

    .bootstrap-timepicker-widget.dropdown-menu:before {
        border-bottom: 7px solid rgba(0, 0, 0, 0.2);
        border-left: 7px solid transparent;
        border-right: 7px solid transparent;
        content: "";
        display: inline-block;
        position: absolute;
    }

    .bootstrap-timepicker-widget.dropdown-menu:after {
        border-bottom: 6px solid #FFFFFF;
        border-left: 6px solid transparent;
        border-right: 6px solid transparent;
        content: "";
        display: inline-block;
        position: absolute;
    }

    .bootstrap-timepicker-widget.timepicker-orient-left:before {
        left: 6px;
    }

    .bootstrap-timepicker-widget.timepicker-orient-left:after {
        left: 7px;
    }

    .bootstrap-timepicker-widget.timepicker-orient-right:before {
        right: 6px;
    }

    .bootstrap-timepicker-widget.timepicker-orient-right:after {
        right: 7px;
    }

    .bootstrap-timepicker-widget.timepicker-orient-top:before {
        top: -7px;
    }

    .bootstrap-timepicker-widget.timepicker-orient-top:after {
        top: -6px;
    }

    .bootstrap-timepicker-widget.timepicker-orient-bottom:before {
        bottom: -7px;
        border-bottom: 0;
        border-top: 7px solid #999;
    }

    .bootstrap-timepicker-widget.timepicker-orient-bottom:after {
        bottom: -6px;
        border-bottom: 0;
        border-top: 6px solid #ffffff;
    }

    .bootstrap-timepicker-widget table {
        width: 100%;
        margin: 0;
    }

    .bootstrap-timepicker-widget table td {
        text-align: center;
        height: 30px;
        margin: 0;
        padding: 2px;
    }

    .bootstrap-timepicker-widget table td:not(.separator) {
        min-width: 30px;
    }

    .bootstrap-timepicker-widget table td span {
        width: 100%;
    }

    .bootstrap-timepicker-widget table td a {
        border: 1px transparent solid;
        width: 100%;
        display: inline-block;
        margin: 0;
        padding: 8px 0;
        outline: 0;
        color: #333;
    }

    .bootstrap-timepicker-widget table td a:hover {
        text-decoration: none;
        background-color: #eee;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        border-color: #ddd;
    }

    .bootstrap-timepicker-widget table td a i {
        margin-top: 2px;
        font-size: 18px;
    }

    .bootstrap-timepicker-widget table td input {
        width: 25px;
        margin: 0;
        text-align: center;
        border: none
    }

    .bootstrap-timepicker-widget .modal-content {
        padding: 4px;
    }

    @media (min-width: 767px) {
        .bootstrap-timepicker-widget.modal {
            width: 200px;
            margin-left: -100px;
        }
    }

    @media (max-width: 767px) {
        .bootstrap-timepicker {
            width: 100%;
        }

        .bootstrap-timepicker .dropdown-menu {
            width: 100%;
        }
    }
 @media screen and (max-width: 767px) {
    .hired{
      margin-left: 10px;
    }
    .interview{
      margin-left: 10px;
    }
  }
  /*.glyphicon{
    color: black;
  }*/
</style>
        

     

</head>

<body class="bg-light">

   <!-- Preloader -->
        <?php include("include/preloader.php");?>


    <!-- Default Nav -->
    <?php include("include/header.php");?>

    <?php include("include/horizontal-navbar.php");?>

    <?php include("include/sidebar.php");?>
      <?php 
        if (isset($_GET['company_id'])) {
          
          
            $company_id = $_GET['company_id'];
           
            $readCompany = $crud->Read("company", "`id`=$company_id");
            // $applicant_id = $_GET['applicant_id'];
            // $readjob = $crud->Read("applicant", "`id`=$applicant_id");
           $companyName =$readCompany[0]['name'];
           $companyPhone =$readCompany[0]['phone'];
           $companyemail =$readCompany[0]['email'];
           $companyAddress =$readCompany[0]['address'];
          
           $companyPassword =$readCompany[0]['password'];
           $companyDescription =$readCompany[0]['company_description'];
           $companyState =$readCompany[0]['state'];
           $companyDistrict =$readCompany[0]['district'];
           $trade_license =$readCompany[0]['trade_license'];

           $companyLogo=$readCompany[0]['logo'];
            

            

             
    }
    ?>
        <!-- Main Wrapper-->
        <main class="main-wrapper">
            <div class="container-fluid">
                <div class="inner-contents">
                    <div class="page-header d-flex align-items-center justify-content-between mr-bottom-30">
                        <div class="left-part">
                            <h2 class="text-dark">COMPANY</h2>
                            <!-- <p class="text-gray mb-0">Lorem ipsum  dolor sit amet </p> -->
                        </div>
                        <!-- <div class="right-part">
                            <form class="search-form w-auto" action="https://wpthemebooster.com/demo/themeforest/html/kleon/search.php">
                                <input type="text" name="search" class=" bg-white form-control" placeholder="Search">
                                <button type="submit" class="btn"><img src="assets/img/svg/search.svg" alt=""></button>
                            </form>
                        </div> -->
                    </div>

                    <div class="card border-0 candidate-profile">
                        <!-- <div class="cover-photo bg-size-cover bg-position-center" style="background-image: url('assets/img/cover-photo.jpg');"></div> -->
                        <div class="card-body pt-0">
                            <div class="d-flex align-items-center justify-content-between gap-2 gap-sm-4 mb-5 flex-wrap"> 
                                <div class="d-flex align-items-center gap-2 gap-sm-4 flex-wrap">
                                    
                                    <?php
                                        if ($companyLogo == "" || $companyLogo == NULL) {
                                        ?>
                                            <img class="img-thumbnail rounded-1" src="assets/img/icons/user.png"name="image" alt="profile image"  width="100px" id="responseImage" height="100px">
                                        <?php
                                        } else {
                                        ?>
                                            <img src="upload/<?php echo $companyLogo;?>" alt="img" width="160" height="160" class="profile-photo rounded-2"> 
                                        <?php
                                        }
                                        ?>
                                    <div class="mt-0 mt-sm-5"> 
                                        <h2><?php echo $companyName; ?></h2>
                                        <p class="fw-semibold text-gray mb-0" style="color: black"><i class="fa fa-envelope" style="color: red"></i> <?php echo $companyemail; ?></p>
                                         <p class="fw-semibold text-gray mb-0" style="color: black"><i class="fa fa-phone" style="color: red"></i> <?php echo $companyPhone; ?></p> 

                                         
                                    </div>

                                </div> 
                              
                               

                            </div>

                        <div class="row">
                            <div class="col-xxl-8 col-lg-6 col-12">
                                <div>
                                    <h4>Basic Details</h4>
                                    <form class="row g-3">
                                        <div class="col-xxl-6 col-lg-6 col-12">
                                            <ul class="list-unstyled d-flex flex-wrap gap-4">
                                               

                                                <li>
                                                    <label class="fs-14 text-gray mb-1">Address</label>
                                                    <div class="d-flex align-items-center gap-3">
                                                        
                                                        <div class="fs-14 fw-semibold"><?php echo $companyAddress;?></a></div>
                                                    </div>
                                                </li>

                                                
                                            </ul>
                                        </div>
                                        <div class="col-xxl-6 col-lg-6 col-12">
                                           <ul class="list-unstyled d-flex flex-wrap gap-4">
                                                <li>
                                                    <label class="fs-14 text-gray mb-1">Company Description</label>
                                                    <div class="d-flex align-items-center gap-3">
                                                       
                                                        <div class="fs-14 fw-semibold"><a href="#" class="text-dark"><?php echo $companyDescription;?></a></div>
                                                    </div>
                                                </li>
                                               

                                                
                                                <li>
                                                    <label class="fs-14 text-gray mb-1">State</label>
                                                    <div class="d-flex align-items-center gap-3">
                                                        
                                                        <div class="fs-14 fw-semibold"><a href="#" class="text-dark"><?php echo $companyState;?></a></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <label class="fs-14 text-gray mb-1">District</label>
                                                    <div class="d-flex align-items-center gap-3">
                                                        
                                                        <div class="fs-14 fw-semibold"><a href="#" class="text-dark"><?php echo $companyDistrict;?></a></div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-lg-6 col-12">
                                        <h4>Documents</h4>
                                        <div class="d-flex align-items-center gap-3 p-0 mb-5">
                                            <div class="bg-soft-primary p-3 rounded-1">
                                               <a href=""> <i class="fa fa-file-pdf-o" style="color: red"></i></a>
                                            </div>
                                            <div>
                                              <?php
                                            if ($trade_license == "" || $trade_license == null) {
                                                ?>
                                                <p class="light-bg" style="font-style: italic;">null</p>
                                            <?php
                                            } else {
                                            ?>
                                            <a href="uploads/<?php echo $trade_license;?>"><h6 class="fw-semibold lh-20">Trade Licence</h6></a>
                                             
                                            <?php
                                            }
                                            ?>
                                                
                                                <!-- <p class="fs-14 text-gray mb-0">1.0 MB</p> --> 
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center gap-3 p-0 mb-5">
                                            <div class="bg-soft-info p-3 rounded-1">
                                                     <a href="">  <i class="fa fa-file-pdf-o" style="color: red"></i></a>
                                            </div>
                                            <div>
                                               <?php
                                            if ($companyLogo == "" || $companyLogo == null) {
                                                ?>
                                                <p class="light-bg" style="font-style: italic;">null</p>
                                            <?php
                                            } else {
                                            ?>
                                                 <a href="uploads/<?php echo $companyLogo; ?>">  <h6 class="fw-semibold lh-20">Company Logo</h6></a>
                                                <!-- <p class="fs-14 text-gray mb-0">1.0 MB</p> -->
                                            <?php
                                            }
                                            ?>
                                                    
                                            </div>
                                        </div>

                                        <!-- Third Document  -->
                                       
                                        
                            </div>

                        </div>



<!-- Modal -->
                            

                        </div>
                    </div>
                </div>
            </div>
        </main>
 
      <?php include("include/footer.php") ?> 
      <script>
       $(function(){
        $('#select-btn').on('click',function(){
            var applicant_id=$(this).data('applicantid');
            var job_id=$(this).data('jobid');
            var jobName = $('#jobname').val();
            var companyName = $('#companyname').val();
            console.log(companyName);
            console.log(jobName);
            console.log(applicant_id);
            console.log(job_id);
            formData =new FormData();
            if(confirm("Do you want to select this applicant?")){
                formData.append('applicant_id',applicant_id);
                formData.append('job_id',job_id);
                formData.append('jobName',jobName);
                 formData.append('companyName',companyName);
                $.ajax({
                    type:'POST',
                    processData:false,
                    contentType:false,
                    cache:false,
                    dataType:'json',
                    url:'xhr/select-applicant',
                    data:formData,
                    success:function(response){
                     if(response.successMessage){
                        swal("Successfull",response.successMessage,"success");
                        setTimeout(() => {                            
                            window.location.reload();
                        }, 2000);
                        
                     }else if(response.errorMessage){
                        swal("Error !",response.errorMessage,"error");
                     }
                    },
                    error:function(error){
                        swal("Error !","Something Went Wrong","error");
                    }
                });
            }else{
                alert("applicant not Selected ");
            }
        });
       });


       $(function(){
         $('#reject-btn').on('click',function(){
            var applicant_id=$(this).data('applicantid');
            var job_id=$(this).data('jobid');
             var jobName = $('#jobname').val();
               var companyName = $('#companyname').val();
            console.log(companyName); 
            console.log(jobName);
            console.log(applicant_id);
            console.log(job_id);
            formData =new FormData();
            if(confirm('Do you want to reject this applicant ?')){
                formData.append('applicant_id',applicant_id);
                formData.append('job_id',job_id);
                formData.append('jobName',jobName);
                formData.append('companyName',companyName);
                $.ajax({
                    type:'POST',
                    processData:false,
                    contentType:false,
                    cache:false,
                    dataType:'json',
                    url:'xhr/reject-applicant',
                    data:formData,
                    success:function(response){
                     if(response.successMessage){
                        swal("Successfull",response.successMessage,"success");
                        setTimeout(() => {                            
                            window.location.reload();
                        }, 2000);
                        
                     }else if(response.errorMessage){
                        swal("Error !",response.errorMessage,"error");
                     }
                    },
                    error:function(error){
                        swal("Error !","Something Went Wrong","error");
                    }
                });

            }else{
                alert("applicant not rejected.")
            }
         });
       });



    </script>
        
   <script src="http://jdewit.github.io/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
    <script>
        $('.bootstrap-timepicker > input').timepicker({ minuteStep: 5 });


    </script>
    </body>

</html>