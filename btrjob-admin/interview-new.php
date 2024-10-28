<?php include("include/head.php");?>

<body class="bg-light">

     <!-- Preloader -->
        <?php include("include/preloader.php");?>
<?php
$applicant_id=$_SESSION["this_user_id"];
if(isset($_SESSION['userType'])){
    if($_SESSION['userType']!='APPLICANT'){
       header("location: 403_error");
       exit();
    }
 }
?>
<style type="text/css">
    .card-img {
    width: 100%;
    height: auto;
}

.card.shadow {
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

</style>
    <!-- Default Nav -->
    <?php include("include/header.php");?>

    <?php include("include/horizontal-navbar.php");?>

    <?php include("include/sidebar.php");?>
        <!-- Main Wrapper-->
        <main class="main-wrapper">
            <div class="container-fluid">
                <div class="inner-contents">
                    <div class="page-header d-flex align-items-center justify-content-between mr-bottom-30">
                        
                        <!-- <div class="right-part">
                            <form class="search-form w-auto" action="https://wpthemebooster.com/demo/themeforest/html/kleon/search.php">
                                <input type="text" name="search" class=" bg-white form-control" placeholder="Search">
                                <button type="submit" class="btn"><img src="assets/img/svg/search.svg" alt=""></button>
                            </form>
                        </div> -->
                    </div>
                    

    <?php 
      $applicant_id=$_SESSION["this_user_id"];
      $selects=$crud->Read("job_applied","`applicant_id`=$applicant_id and `status`=4 order by `id` desc");
      if($selects){
        $num=0;
        foreach($selects as $selected){
            $applicant_id=$selected["applicant_id"];
            $company_id=$selected["company_id"];
            $company=$crud->Read("company","`id`=$company_id");
            if($company){
                $company_name=$company[0]["name"];
                $companylogo=$company[0]["logo"];
                $companyaddress=$company[0]["address"];
                $companyemail=$company[0]["email"];
                $companyPhone=$company[0]["phone"];
                $company_description=$company[0]["company_description"];


            }
            $app=$crud->Read("applicant","`id`=$applicant_id");
            if($app){
                $applicant=$app[0];
            }
            $job_id=$selected["job_id"];
            $jobs=$crud->Read("job_listing","`id`=$job_id and `company_id`=$company_id");
            if($jobs){
                $job=$jobs[0];
                $jobtitle=$jobs[0]['job_title'];
                $joblocation=$jobs[0]['job_location'];
                $jobdescription=$jobs[0]['Jobdescription'];
                $jobsalary=$jobs[0]['salary'];
                $jobposted=$jobs[0]['date_posted'];
                $jobcategory=$jobs[0]['category'];
                $jobend=$jobs[0]['last_date'];
                $jobType=$jobs[0]['jobtype'];
                $jobState=$jobs[0]['state'];
                $jobDistrict=$jobs[0]['district'];
            }  
           
            
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
                                    <a href="#" class="job-type">Interview</a>
                                    <!-- <a href="#" class="btn btn-primary ff-heading fs-14 fw-bold">Connect</a> -->
                                </div>
                            </div>
                           <!--  <button type="button" class="btn btn-danger invitation" style="width:110px; padding: 10px;">Rejected</button> -->

                            

                            <!-- Classic Tab -->
                            <ul class="nav nav-tabs mr-bottom-40 justify-content-start" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#about" data-bs-toggle="tab" role="tab">Company info</a>
                                </li>
                               
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="#posting" data-bs-toggle="tab" role="tab">Job info</a>
                                </li>
                               
                            </ul>

                            <div class="tab-content">
                                <!-- Tab Content One -->
                                <div class="tab-pane fade show active" id="about" role="tabpanel">
                                    <div class="row">
                                        <div class="col-xxl-12 col-lg-12 mb-12 mb-lg-0">
                                            <!-- <h4>Company Description</h4> -->
                      
                    
                                        <div class="row">
                                            <div class="col-md-4">
                                                <!-- Card with image -->
                                                <div class="card shadow">
                                                    <img src="uploads/<?php echo $companylogo;?>" class="card-img" alt="Image">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <!-- Your text content here -->
                                                <h2><?php echo $company_name; ?></h2>
                                                <p class="fw-semibold text-gray mb-0" style="color: black"><img src="../images/icon/location.gif" style="max-width: 32px"><?php echo $companyaddress; ?></p>
                                                <p class="fw-semibold text-gray mb-0" style="color: black"><img src="../images/icon/email.gif" style="max-width: 32px"> <?php echo $companyemail; ?></p>
                                                <p class="fw-semibold text-gray mb-0" style="color: black"><img src="../images/icon/phone.gif" style="max-width: 32px">  <?php echo $companyPhone; ?></p>
                                            </div>
                                        </div>
                                             <h5>About Company</h5>

                                            <p class="fs-14 text-gray">
                                             <?php echo $company_description;?>
                                            </p>
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
                                    
                                   
                                </div>

                                

                                

                                <!-- Tab Content Four -->
                                <div class="tab-pane fade" id="posting" role="tabpanel">
                                    <div class="row">
                                        <div class="col-xxl-12 col-lg-12 mb-12 mb-lg-0">
                                            <h4>Job Description</h4>
                                            <p class="fs-14 text-gray">
                                                    <?php echo $jobdescription;?>
                                            </p>
                                            <p class="fs-14 text-gray">
                                                    <span style="color: black;font-weight: bold">Job Post :</span> <?php echo $jobtitle;?>
                                            </p>
                                            <p class="fs-14 text-gray">
                                                    <span style="color: black;font-weight: bold">Job Location :</span> <?php echo $joblocation;?>
                                            </p>
                                            
                                             <p class="fs-14 text-gray">
                                                    <span style="color: black;font-weight: bold">Salary :</span> <?php echo $jobsalary;?>
                                            </p>
                                            <p class="fs-14 text-gray">
                                                    <span style="color: black;font-weight: bold">Job Type :</span> <?php echo $jobType;?>
                                            </p>
                                            <p class="fs-14 text-gray">
                                                    <span style="color: black;font-weight: bold">State :</span> <?php echo $jobState;?>
                                            </p>
                                            <p class="fs-14 text-gray">
                                                    <span style="color: black;font-weight: bold">Dist :</span> <?php echo $jobDistrict;?>
                                            </p>
                                            <p class="fs-14 text-gray">
                                                    <span style="color: black;font-weight: bold">Sector :</span> <?php echo $jobcategory;?>
                                            </p>

                                            





                                            <!-- <a href="#" class="text-primary ff-heading fs-14 fw-bold">Read More</a> -->

        
                                        </div>
                                        

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