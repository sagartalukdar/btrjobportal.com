<?php include("include/head.php");?>

<body class="bg-light">

     <!-- Preloader -->
        <?php include("include/preloader.php");?>
<?php 
if (isset($_GET['job_id'])) {
    $jobid = $_GET['job_id'];
    $readjob = $crud->Read("job_listing", "`id`=$jobid");
    if($readjob){
      $companyid =$readjob[0]['company_id'];
      $readCompany= $crud->Read("company", "`id`=$companyid");
        if($readCompany){
            $companyname=$readCompany[0]['name'];
            }
        }
}
?>
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
                           <ul class="p-0 m-0 list-unstyled">
                                                    <li class="d-inline-block me-2 mb-2">
                                                        <a href="#" class="d-inline-block fs-14 fw-semibold text-uppercase px-2 py-1 rounded-4 badge-soft-info"><?php echo $companyname;?></a>
                                                        
                                                    </li>
                                                   
                                                </ul>
                            <!-- <p class="text-gray mb-0">Lorem ipsum  dolor sit amet </p> -->
                        </div>
                        <!-- <div class="right-part">
                            <form class="search-form w-auto" action="https://wpthemebooster.com/demo/themeforest/html/kleon/search.php">
                                <input type="text" name="search" class=" bg-white form-control" placeholder="Search">
                                <button type="submit" class="btn"><img src="assets/img/svg/search.svg" alt=""></button>
                            </form>
                        </div> -->
                    </div>
                    
<?php
if ($readjob) {
    $companyid =$readjob[0]['company_id'];
    $jobdescription = $readjob[0]['Jobdescription'];
    $jobtitle = $readjob[0]['job_title'];
    $jobcategory = $readjob[0]['category'];
    $joblocation = $readjob[0]['job_location'];
    $jobposted = $readjob[0]['date_posted'];
    $jobend = $readjob[0]['last_date'];
    $jobqualification = $readjob[0]['qualification'];
    $jobsalary = $readjob[0]['salary'];
    $jobexperience = $readjob[0]['experience'];
    $jobType= $readjob[0]['jobtype'];
    $lastdate= $readjob[0]['last_date'];
$readCompany= $crud->Read("company", "`id`=$companyid");
if($readCompany){
    $companyname=$readCompany[0]['name'];
    $companydescription=$readCompany[0]['company_description'];
    $companyemail=$readCompany[0]['email'];
    $companyphone=$readCompany[0]['phone'];
    $companyphone=$readCompany[0]['phone'];
    $companyaddress=$readCompany[0]['address'];


    
   
?>

                    <div class="card border-0 candidate-profile">
                        <!-- <div class="cover-photo bg-size-cover bg-position-center" style="background-image: url('assets/img/cover-photo.jpg');"></div> -->
                        <div class="card-body pt-0">
                            <div class="d-flex align-items-center justify-content-between gap-4 mb-5 flex-wrap"> 
                                <div class="d-flex align-items-center gap-2 gap-sm-4 flex-wrap">
                                    <div class="avatar-img avatar-xl rounded-2 overflow-hidden flex-shrink-0">
                                        <?php 
                                            if (!empty($company["logo"])) {
                                                // If $company["logo"] is not empty, display the logo
                                        ?>
                                                <img src="uploads/<?php echo $companylogo; ?>" alt="logo" class="w-100" />
                                        <?php 
                                            } else {
                                                // If $company["logo"] is empty, display the default image
                                        ?>
                                                <img src="../images/icon/office.gif" alt="default logo" class="w-100" />
                                        <?php 
                                            }
                                        ?>

                                    </div> 
                                    <div class="mt-0 mt-md-5"> 
                                        <h3 class="fs-34"><?php echo $jobtitle;?></h3>
                                        <p class="fw-semibold text-gray mb-0 d-flex align-items-center gap-4 flex-wrap"><span>Job location: <?php echo $joblocation;?></p>
                                        <p class="fw-semibold text-gray mb-0 d-flex align-items-center gap-4 flex-wrap"><span>Salary: <?php echo $jobsalary;?></p>
                                        <p class="fw-semibold text-gray mb-0 d-flex align-items-center gap-4 flex-wrap"><span>Job Posted: <?php echo $jobposted;?></p>
                                        <p class="fw-semibold text-gray mb-0 d-flex align-items-center gap-4 flex-wrap"><span>Sector: <?php echo $jobcategory;?></p>
                                        <p class="fw-semibold text-gray mb-0 d-flex align-items-center gap-4 flex-wrap"><span >Last date: <span style="color: white;font-style: italic;font-weight: 700;background-color: red;padding: 2px 2px 2px;border-radius: 5px"><?php echo $jobend;?></span></p>
                                    </div>
                                </div> 
                                <div class="d-flex align-items-center gap-3 flex-wrap">
                                    <!-- <div>
                                        <a href="#" data-bs-toggle="dropdown" class="fs-24 text-gray">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu p-0">
                                            <a class="dropdown-item" href="#">Profile</a>
                                            <a class="dropdown-item" href="#">Settings</a>
                                            <a class="dropdown-item text-danger" href="#">Logout</a>
                                        </div>
                                    </div> -->
                                    <a href="#" class="job-type"><?php echo $jobType;?></a>
                                    <!-- <a href="#" class="btn btn-primary ff-heading fs-14 fw-bold">Connect</a> -->
                                </div>
                            </div>

                            <div class="mr-top-40 mr-bottom-40">
                                <h4>Contact</h4>
                                <ul class="list-unstyled d-flex flex-wrap gap-6">
                                    <li>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="candidate--contact-icon bg-soft-primary text-center">
                                                <i class="bi bi-telephone-fill"></i>
                                            </div>
                                            <div class="fs-14 fw-semibold"><a href="tel:+12 345 6789 0" class="text-dark"><?php echo $companyphone;?></a></div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="candidate--contact-icon bg-soft-primary text-center">
                                                <i class="bi bi-envelope-fill"></i>
                                            </div>
                                            <div class="fs-14 fw-semibold"><a href="mailto:<?php echo$companyemail?>" class="text-dark"><?php echo$companyemail?></a></div>
                                        </div>
                                    </li>

                                    <!-- <li>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="candidate--contact-icon bg-soft-primary text-center">
                                                <i class="bi bi-globe"></i>
                                            </div>
                                            <div class="fs-14 fw-semibold"><a href="#" class="text-dark">www.website.com</a></div>
                                        </div>
                                    </li> -->
                                </ul>
                            </div>

                            <!-- Classic Tab -->
                            <ul class="nav nav-tabs mr-bottom-40 justify-content-start" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#about" data-bs-toggle="tab" role="tab">Description</a>
                                </li>
                               
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="#posting" data-bs-toggle="tab" role="tab">Requirements</a>
                                </li>
                               
                            </ul>

                            <div class="tab-content">
                                <!-- Tab Content One -->
                                <div class="tab-pane fade show active" id="about" role="tabpanel">
                                    <div class="row">
                                        <div class="col-xxl-12 col-lg-12 mb-12 mb-lg-0">
                                            <!-- <h4>Company Description</h4> -->
                                            <p class="fs-14 text-gray">
                                                <?php echo $companydescription;?>
                                            </p>
                                            <!-- <p class="fs-14 text-gray">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            </p> -->
                                            <!-- <a href="#" class="text-primary ff-heading fs-14 fw-bold">Read More</a> -->
        
                                        </div>
                                       <!--  <div class="col-xxl-4 col-lg-4">
                                            <div class="card border-0 p-0 rounded-0">
                                                <div class="card-body p-0">
                                                    <h4 class="mb-0 d-flex align-items-cente justify-content-between gap-2"> <span>Company Growth</span> <span>+12.890 <span class="fs-14 text-success"><i class="bi bi-arrow-up-circle-fill fs-22 icon"></i> +15%</span></span></h4>
                                                    <div class="card-content">
                                                        <div id="chart-21"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                    <?php
                                        $applicantId = $_SESSION['this_user_id'];
                                        $userType = $_SESSION['userType'];
                                        $existing_application = $crud->Read("job_applied", "`applicant_id`=$applicantId AND `job_id`='$jobid'");
                                        if ($existing_application) {
                                            if ($existing_application[0]['status'] == 1) { ?>
                                                <p class="applied">Applied</p>
                                            <?php } else if ($existing_application[0]['status'] == 2) { ?>
                                                <li>
                                                    <button type="button" class="btn btn-success" style="width:110px; padding: 10px;">Hired</button>
                                                </li>
                                            <?php } else if ($existing_application[0]['status'] == 3) { ?>
                                                <li>
                                                    <button type="button" class="btn btn-danger" style="width:110px; padding: 10px;">Rejected</button>
                                                </li>
                                            <?php }
                                        } else {
                                            if ($userType != 'ADMIN' && $userType != 'COUNSELLOR') { ?>
                                                <button type="button" class="apply apply-btn" data-jid="<?php echo $jobid; ?>">Apply</button>
                                            <?php }
                                        }
                                    ?>

                                    <!-- <button class="apply">apply</button> -->
                                   
                                </div>

                                

                                

                                <!-- Tab Content Four -->
                                <div class="tab-pane fade" id="posting" role="tabpanel">
                                    <div class="row">
                                        <div class="col-xxl-12 col-lg-12 mb-12 mb-lg-0">
                                            <!-- <h4>Requirements</h4> -->
                                            <p class="fs-14 text-gray">
                                                    <?php echo $jobqualification;?>
                                            </p>
                                            
                                            <!-- <a href="#" class="text-primary ff-heading fs-14 fw-bold">Read More</a> -->

        
                                        </div>
                                        <?php
                                            $applicantId = $_SESSION['this_user_id'];
                                            $userType = $_SESSION['userType'];
                                            $existing_application = $crud->Read("job_applied", "`applicant_id`=$applicantId AND `job_id`='$jobid'");
                                            if ($existing_application) {
                                                if ($existing_application[0]['status'] == 1) { ?>
                                                    <p class="applied">Applied</p>
                                                <?php } else if ($existing_application[0]['status'] == 2) { ?>
                                                    <li>
                                                        <button type="button" class="btn btn-success" style="width:110px; padding: 10px;">Hired</button>
                                                    </li>
                                                <?php } else if ($existing_application[0]['status'] == 3) { ?>
                                                    <li>
                                                        <button type="button" class="btn btn-danger" style="width:110px; padding: 10px;">Rejected</button>
                                                    </li>
                                                <?php }
                                            } else {
                                                if ($userType != 'ADMIN' && $userType != 'COUNSELLOR') { ?>
                                                    <button type="button" class="apply apply-btn" data-jid="<?php echo $jobid; ?>">Apply</button>
                                                <?php }
                                            }
                                        ?>

                                          <!-- <button class="apply apply-btn" data-jid=<?php echo $jobid; ?>>apply</button> -->
                                        <!-- <div class="col-xxl-4 col-lg-4">
                                            <div class="card border-0 p-0 rounded-0">
                                                <div class="card-body p-0">
                                                    <h4 class="mb-0 d-flex align-items-cente justify-content-between gap-2"> <span>Company Growth</span> <span>+12.890 <span class="fs-14 text-success"><i class="bi bi-arrow-up-circle-fill fs-22 icon"></i> +15%</span></span></h4>
                                                    <div class="card-content">
                                                        <div id="chart-3"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>

                                
                            </div>
                        </div>
                    </div>
                <?php }}?>
                </div>
            </div>
        </main>

  <style type="text/css">
                         
    .apply{
        float: left;
  width: auto;
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
.job-type{
float: left;
  width: 100px;
  height: 30px;
  line-height: 30px;
  text-align: center;
  background: linear-gradient(135deg,#6529a2,#d21d1d);
  color: #ffffff;
  font-size: 12px;
  text-transform: uppercase;
  -webkit-border-radius: 10px;
  border-radius: 0px;
    border-top-left-radius: 0px;
    border-bottom-left-radius: 0px;
  border-top-left-radius: 10px;
  border-bottom-left-radius: 10px;
}
.applied{
  float: left;
  width: auto;
  padding-right: 20px;
  padding-left: 20px;
  height: 30px;
  line-height: 30px;
  text-align: center;
  background: linear-gradient(135deg,#c3e3d4,#5d676f);
  color: #393434;
  font-size: 14px;
  text-transform: uppercase;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  border-radius: 5px;
  box-shadow: 3px 3px #808a84;
  font-weight: 700;
}
                        </style>
    <?php include("include/footer.php") ?>
      <script>
    $(function(){
      $('.apply-btn').on('click',function(){
        var jobId=$(this).data('jid');
        console.log(jobId);
        $.ajax({
            type:"POST",
            dataType: "json",
            url:"xhr/apply-job",
            data:{jobId:jobId},
            success:function(response){
              if(response.successMessage){
                swal("success",response.successMessage+"  ..Reloading","success");
                setTimeout(function(){
                    window.location.reload();
                },2000);
              }else if(response.errorMessage){
                 swal("Error",response.errorMessage,"error");
              }
            },
            error:function(error){
                swal("Error","Something Went Wrong","error");
            }
        });
      });
    });
    </script>
</body>
</html>