<?php include("include/head.php");?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
</body>
<style type="text/css">
  .pending{
        float: left;
  width: auto;
  padding-right: 20px;
  padding-left: 20px;
  height: 30px;
  line-height: 30px;
  text-align: center;
  background: linear-gradient(135deg,#21dbdb,#5b51d0);
  color: #ffffff;
  font-size: 14px;
  text-transform: uppercase;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  border-radius: 5px;
  box-shadow: 3px 3px #92b76e;
  font-weight: 700;
}
  
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
        if (isset($_GET['applicant_id'])) {
           $job_id=$_GET["job_id"];
          
            $applicant_id = $_GET['applicant_id'];
            echo $job_id .' '.$applicant_id;
            $readjob = $crud->Read("applicant", "`id`=$applicant_id");
            // $applicant_id = $_GET['applicant_id'];
            // $readjob = $crud->Read("applicant", "`id`=$applicant_id");
           $applicantName =$readjob[0]['name'];
           $applicantPhone =$readjob[0]['phone'];
           $applicantemail =$readjob[0]['email'];
           $applicantAddress =$readjob[0]['address'];
           $applicantGender =$readjob[0]['gender'];
           $applicantQualification =$readjob[0]['qualification'];
           $applicantExperience =$readjob[0]['experience'];
           $applicantState =$readjob[0]['state'];
           $applicantDistrict =$readjob[0]['district'];
           $profile_img =$readjob[0]['profile_img'];

           $qualificationimage=$readjob[0]['qualification_img'];
            $experienceimage=$readjob[0]['experience_img'];
            $cv=$readjob[0]['cv_img'];
            $idimage=$readjob[0]['id_img'];
             $job=$crud->Read("job_listing","`id`='$job_id'");
             $jobName =$job[0]['job_title'];
             $companyid=$job[0]['company_id'];
             $company=$crud->Read("company","`id`='$companyid'");
             $companyName=$company[0]['name'];

    }
    ?>
        <!-- Main Wrapper-->
        <main class="main-wrapper">
            <div class="container-fluid">
                <div class="inner-contents">
                    <div class="page-header d-flex align-items-center justify-content-between mr-bottom-30">
                        <div class="left-part">
                            <h2 class="text-dark">Applicant</h2>
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
                                        if ($profile_img == "" || $profile_img == NULL) {
                                        ?>
                                            <img class="img-thumbnail rounded-1" src="assets/img/icons/user.png"name="image" alt="profile image"  width="100px" id="responseImage" height="100px">
                                        <?php
                                        } else {
                                        ?>
                                            <img src="upload/<?php echo $profile_img;?>" alt="img" width="160" height="160" class="profile-photo rounded-2"> 
                                        <?php
                                        }
                                        ?>
                                    <div class="mt-0 mt-sm-5"> 
                                        <h2><?php echo $applicantName; ?></h2>
                                        <p class="fw-semibold text-gray mb-0" style="color: black"><i class="fa fa-envelope" style="color: red"></i> <?php echo $applicantemail; ?></p>
                                         <p class="fw-semibold text-gray mb-0" style="color: black"><i class="fa fa-phone" style="color: red"></i> <?php echo $applicantPhone; ?></p> 

                                         <input type="hidden" name="jobname" id="jobname" value="<?php echo $jobName?>">
                                         <input type="hidden" name="companyname" id="companyname" value="<?php echo $companyName?>">
                                    </div>

                                </div> 
                               <!-- <div class="d-flex justify-content-between justify-content-lg-start">
                                    <button class="interview me-lg-2 mb-2 mb-lg-0" data-toggle="modal" data-target="#exampleModal">Interview</button>
                                    
                                </div>
                                 <div class="d-flex justify-content-between justify-content-lg-start">
                                   
                                    <a href="#" class="reject me-lg-2 mb-2 mb-lg-0" id="reject-btn" data-jobid="<?php echo $job_id ; ?>" data-applicantid="<?php echo $applicant_id; ?>">Reject</a>
                                    <a href="#" class="hired ms-lg-2" id="select-btn" data-jobid="<?php echo $job_id ; ?>" data-applicantid="<?php echo $applicant_id; ?>" style="width: 100px; color: rgb(253, 251, 251);">Hire</a>
                                </div> -->
                                <?php
                                  $cid=$_SESSION["this_user_id"];
                                  $btn=$crud->Read("job_applied","`applicant_id`=$applicant_id and `company_id`=$cid and `job_id`=$job_id");
                                  if($btn){
                                    $button=$btn[0];
                                    if($button['status']==2){
                                        echo
                                        '
                                        <div class="d-flex justify-content-between justify-content-lg-start">
                                        <button class="hired" style="width: 150px; color: black;">Hired</button>                               
                                        </div>
                                        ';
                                    }else if($button['status']==3){
                                        echo
                                        '
                                        <div class="d-flex justify-content-between justify-content-lg-start">
                                        <button class="reject" style="width: 150px; color: rgb(253, 251, 251);">Rejected</button>                             
                                        </div>
                                        '; 
                                    }
                                    else if($button['status']==4){
                                        echo
                                        '
                                        <div class="d-flex justify-content-between justify-content-lg-start">
                                        <button class="pending" style="width: 150px; color: rgb(253, 251, 251);">Invitation</button>                             
                                        </div>
                                        '; 
                                    }else if($button['status']==1){
                                    ?>
                                       <div style="display: flex; flex-direction: column; gap: 14px;">
                                        <div class="d-flex gap-4 justify-content-between justify-content-lg-start">
                                        <button class="hired"id="select-btn" data-jobid="<?php echo $job_id ; ?>" data-applicantid="<?php echo $applicant_id; ?>" style="width: 100px; color: black;">Hire</button>
                                        <button class="reject" id="reject-btn" data-jobid="<?php echo $job_id ; ?>" data-applicantid="<?php echo $applicant_id; ?>" style="width: 100px; color: rgb(253, 251, 251);">Reject</button>
                                        </div>

                                        <div class="row fill-width">
                                            <div class="">
                                                <button class="interview" id="interview" data-bs-toggle="modal" data-bs-target="#takeInterview" data-jobid="<?php echo $job_id;?>"data-companyid="<?php echo $companyid;?>" data-applicantid=<?php echo $applicant_id ?>>Take Interview</button>
                                            </div>
                                            
                                        
                                          </div>

                                     </div>   


                                    <?php
                                    }else{
                                        echo
                                        '
                                        <div class="d-flex justify-content-between justify-content-lg-start">
                                        <button class="btn btn-sm btn-danger" style="width: 150px; color: rgb(253, 251, 251);">Error</button>                             
                                        </div>
                                        '; 
                                    }                                    
                                  }
                                ?> 

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
                                                        
                                                        <div class="fs-14 fw-semibold"><?php echo $applicantAddress;?></a></div>
                                                    </div>
                                                </li>

                                                
                                            </ul>
                                        </div>
                                        <div class="col-xxl-6 col-lg-6 col-12">
                                           <ul class="list-unstyled d-flex flex-wrap gap-4">
                                                <li>
                                                    <label class="fs-14 text-gray mb-1">Qualification</label>
                                                    <div class="d-flex align-items-center gap-3">
                                                       
                                                        <div class="fs-14 fw-semibold"><a href="#" class="text-dark"><?php echo $applicantQualification;?></a></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <label class="fs-14 text-gray mb-1">Gender</label>
                                                    <div class="d-flex align-items-center gap-3">
                                                        
                                                        <div class="fs-14 fw-semibold"><a href="#" class="text-dark"><?php echo $applicantGender?></a></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <label class="fs-14 text-gray mb-1">Experience</label>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="fs-14 fw-semibold"><a href="#" class="text-dark"><?php echo $applicantExperience;?> Years</a></div>
                                                        
                                                    </div>
                                                </li>

                                                
                                                <li>
                                                    <label class="fs-14 text-gray mb-1">State</label>
                                                    <div class="d-flex align-items-center gap-3">
                                                        
                                                        <div class="fs-14 fw-semibold"><a href="#" class="text-dark"><?php echo $applicantState;?></a></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <label class="fs-14 text-gray mb-1">District</label>
                                                    <div class="d-flex align-items-center gap-3">
                                                        
                                                        <div class="fs-14 fw-semibold"><a href="#" class="text-dark"><?php echo $applicantDistrict;?></a></div>
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
                                            if ($qualificationimage == "" || $qualificationimage == null) {
                                                ?>
                                                <p class="light-bg" style="font-style: italic;">null</p>
                                            <?php
                                            } else {
                                            ?>
                                            <a href="uploads/<?php echo $qualificationimage;?>"><h6 class="fw-semibold lh-20">Qualification</h6></a>
                                             
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
                                            if ($experienceimage == "" || $experienceimage == null) {
                                                ?>
                                                <p class="light-bg" style="font-style: italic;">null</p>
                                            <?php
                                            } else {
                                            ?>
                                                 <a href="uploads/<?php echo $experienceimage; ?>">  <h6 class="fw-semibold lh-20">Resume.pdf</h6></a>
                                                <!-- <p class="fs-14 text-gray mb-0">1.0 MB</p> -->
                                            <?php
                                            }
                                            ?>
                                                    
                                            </div>
                                        </div>

                                        <!-- Third Document -->
                                        <div class="d-flex align-items-center gap-3 p-0 mb-5">
                                            <div class="bg-soft-success p-3 rounded-1">
                                                <a href=""> <i class="fa fa-file-pdf-o" style="color: red"></i></a>
                                            </div>
                                            <div>
                                              <?php
                                            if ($cv == "" || $cv == null) {
                                                ?>
                                                <p class="light-bg" style="font-style: italic;">null</p>
                                            <?php
                                            } else {
                                            ?>
                                                 <a href="uploads/<?php echo $cv; ?>"> <h6 class="fw-semibold lh-20">Experience</h6></a>
                                                <!-- <p class="fs-14 text-gray mb-0">0.8 MB</p> -->
                                            <?php
                                            }
                                            ?>
                                        
                                                   
                                            </div>
                                        </div>
                            </div>

                        </div>



                <!-- Modal take Interview -->
                <div class="modal fade" id="takeInterview">
            <div class="modal-dialog modal-xl">

                <div class="modal-content rounded-2 p-0 p-sm-5">
                    <div class="modal-header">
                        <h2 class="modal-title fw-bold">Call for Interview</h2>
                        <button type="button" class="btn-close p-0 border-0" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="" id="form" method="post">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label fs-14 fw-semibold text-uppercase ls-1 text-gray-300">Date</label>
                                        <input type="text" id="date" class="flatpickr form-control" name="date" placeholder="">
                                    </div>
                                </div>
                                
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label fs-14 fw-semibold text-uppercase ls-1 text-gray-300">Time</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="hour" placeholder="Hour">
                                            <span class="input-group-text">:</span>
                                            <input type="text" class="form-control" name="minute" placeholder="Minute">
                                            <select class="form-select" name="ampm">
                                                <option value="AM">AM</option>
                                                <option value="PM">PM</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label fs-14 fw-semibold text-uppercase ls-1 text-gray-300">Address</label>
                                        <textarea class="form-control" name="venue" id="venue" placeholder="Enter Text"></textarea>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group d-flex align-items-center justify-content-between mb-0">
                                <!-- <div id="dpz-multiple-files" class="dropzone file-upload btn btn-info text-white fs-18 text-uppercase mx-0"><i class="bi bi-paperclip me-2"></i> Add Attachment</div> -->
                                <p class="error-message"></p>
                                <button type="submit" class="btn btn-primary fs-18 text-uppercase mx-0"><i class="bi bi-send me-2" id="interview"  ></i> Submit</button>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


<!-- Modal End-->
                            

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



    //    $(function(){
    //      $('#interview').on('click',function(){
    //         var applicant_id=$(this).data('applicantid');
    //         var job_id=$(this).data('jobid');
    //         var companyId = $(this).data('companyid')
             
    //         // console.log(companyId);
    //         // console.log(applicant_id);
    //         // console.log(job_id);
    //         formData =new FormData();
           
    //             formData.append('applicant_id',applicant_id);
    //             formData.append('job_id',job_id);
    //             formData.append('jobName',jobName);
    //             formData.append('companyId',companyId);
    //             $.ajax({
    //                 type:'POST',
    //                 processData:false,
    //                 contentType:false,
    //                 cache:false,
    //                 dataType:'json',
    //                 url:'xhr/take-interview.php',
    //                 data:formData,
    //                 success:function(response){
    //                  if(response.successMessage){
    //                     swal("Successfull",response.successMessage,"success");
    //                     setTimeout(() => {                            
    //                         window.location.reload();
    //                     }, 2000);
                        
    //                  }else if(response.errorMessage){
    //                     swal("Error !",response.errorMessage,"error");
    //                  }
    //                 },
    //                 error:function(error){
    //                     swal("Error !","Something Went Wrong","error");
    //                 }
    //             });

           
    //      });
    //    });
    </script>


    <script>
$(document).ready(function() {
    var job_id = ''; 
    var company_id = ''; 
    var userid = ''; 
  
    function checkFields() {
        var date = $('#date').val();
        var time = $('#time').val();
        var venue = $('#venue').val();

        if (date === '' || time === '' || venue.trim() === '') {
            $('.error-message').html('<i class="bi bi-exclamation-triangle-fill text-danger"></i> Fill all the details to continue...');
            $('input[type="submit"]').prop('disabled', true);
        } else {
            $('.error-message').html('');
            $('input[type="submit"]').prop('disabled', false);
        }
    }
    checkFields();

    $('#date, #time, #venue').on('input', function() {
        checkFields();
    });

    $('#interview').click(function(event) {
        // event.preventDefault(); 
        job_id = $(this).data('jobid');
        company_id = $(this).data('companyid');
        applicant_id = $(this).data('applicantid');
//  console.log(company_id);
//             console.log(applicant_id);
//             console.log(job_id);

       
    });

    $('#form').submit(function(event) {
        event.preventDefault(); 
        checkFields();

        if ($('.error-message').html() === '') {
            var formData = new FormData(this); 
            formData.append('job_id', job_id); 
            formData.append('company_id', company_id); 
            formData.append('applicant_id', applicant_id);
            formData.append('date', $('#date').val());
            formData.append('time', $('#time').val()); 
            formData.append('venue', $('#venue').val()); 
            console.log('Date:', $('#date').val());
            console.log('Time:', $('#time').val());
            console.log('Venue:', $('#venue').val());
            console.log('Job ID:', job_id);
            console.log('Company ID:', company_id);
            console.log('user ID:', applicant_id);
          

            $.ajax({
                type: 'POST',
                url: 'xhr/take-interview-applicant', 
                data: formData,
                processData: false, 
                contentType: false,
                dataType: 'json',
                success:function(response){
                     if(response.successMessage){
                        $('#takeInterview').hide();
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