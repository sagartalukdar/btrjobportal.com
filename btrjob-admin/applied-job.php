<?php include("include/head.php");?>

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
                            <h2 class="text-dark">Recent</h2>
                           
                        </div>
                       
                    </div>

                    
                    <div class="row">
                    <?php 
    $applied_job = $crud->Read('job_applied', "`applicant_id`='$userID' ORDER BY id DESC LIMIT 1");
    if ($applied_job) {
        foreach ($applied_job as $read) {
            $job_id = $read['job_id'];
            $readJob = $crud->Read("job_listing", "`id`='$job_id'");
            if ($readJob) {
                $jobID = $readJob[0]['id'];
                $companyid = $readJob[0]['company_id']; 
                $jobtitle = $readJob[0]['job_title']; 
                $joblocation = $readJob[0]['job_location']; 
                $jobposted = $readJob[0]['date_posted'];
                $jobend = $readJob[0]['last_date'];
                $jobcategory = $readJob[0]['category']; 
                $jobqualification = $readJob[0]['qualification'];
                $jobsalary = $readJob[0]['salary'];
                $jobexperience = $readJob[0]['experience'];
                $jobType = $readJob[0]['jobtype']; 
   
                $readCompany = $crud->Read("company", "`id`='$companyid'");
                if ($readCompany) {
                    $companyname = $readCompany[0]['name'];
                    $companydescription = $readCompany[0]['company_description'];
                    $companyemail = $readCompany[0]['email'];
                    $companyphone = $readCompany[0]['phone'];
                    $companyaddress = $readCompany[0]['address'];
                    $companylogo = $readCompany[0]['logo'];
                }
?>
                    <div class="col-xxl-12 col-lg-12">
                                    <div class="card border-0 shadow-sm">
                                        
                                        <div class="card-body p-0">
                                            <div class="border-bottom border-light-200 p-5 pb-3 mb-2">
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="rounded-2 overflow-hidden flex-shrink-0 shadow">
                                                            <div class="avatar-img avatar-xl rounded-2 overflow-hidden flex-shrink-0">
                                                                <?php 
                                                                    if (!empty($company["logo"])) {
                                                                       
                                                                ?>
                                                                        <img src="uploads/<?php echo $companylogo; ?>" alt="logo" class="w-100" />
                                                                <?php 
                                                                    } else {
                                                                     
                                                                ?>
                                                                        <img src="../images/icon/office.gif" alt="default logo" class="w-100" />
                                                                <?php 
                                                                    }
                                                                ?>

                                                            </div>
                                                    </div>
                                                    <div class="d-none d-sm-block">
                                                        <ul class="p-0 m-0 list-unstyled">
                                                            <li class="d-inline-block me-2 mb-2">
                                                                <a href="#" class="d-inline-block fs-14 fw-semibold text-uppercase px-2 py-1 rounded-4 badge-soft-info"><?php echo $jobtitle;?></a>
                                                            </li>
                                                        </ul>
                                                        <p class="fs-14 text-black mb-0" style="font-weight: 700;"><?php echo $companyname;?></p>
                                                    </div>

            
                                                    <div class="dropdown ms-auto">
                                                       
                                                            <div class="p-5 pt-3">
                                                            <p class="job-type"><?php echo $jobType; ?></p>
                                                        </div>
                                                        
                                                        <?php
                                                            $readJob = $crud->Read("job_applied", "`job_id`='$jobID' AND `applicant_id`='$userID'");
                                                            if (!$readJob) {
                                                            ?>
                                                                <div class="p-5 pt-3">
                                                                    <a href="company-details?job_id=<?php echo $jobID;?>" class="apply">APPLY</a>
                                                                </div>
                                                            <?php
                                                            } else {
                                                            ?>
                                                                <div class="p-5 pt-3">
                                                                    <p class="applied">Applied</p>
                                                                </div>
                                                            <?php
                                                            }
                                                        ?>


                                                         
                                                    </div>
                                                </div>
                                                <style>
                                                    @media (min-width: 768px) {
                                                        .hide-on-large {
                                                            display: none;
                                                        }
                                                    }
                                                </style>

                                                <h5 class="fw-semibold mt-3 hide-on-large"><?php echo $companyname;?></h5>
                                                <ul class="p-0 m-0 list-unstyled hide-on-large">
                                                   
                                                    <li class="d-inline-block me-2 mb-2">
                                                        <a href="#" class="d-inline-block fs-14 fw-semibold text-uppercase px-2 py-1 rounded-4 badge-soft-info"><?php echo $jobtitle;?></a>
                                                    </li>
                                                </ul>

                                               <p class="fs-14 text-gray mb-0" >Location: <?php echo $joblocation;?></p>
                                               <p class="fs-14 text-gray mb-0">Salary: Rs.<?php echo $jobsalary;?>/-</p>
                                               <p class="fs-14 text-gray mb-0" >Sector: <?php echo $jobcategory;?></p>
                                               <p class="fs-14 text-gray mb-0" >Job posted: <?php echo $jobposted;?></p>
            
                                                <div class="d-flex align-items-center gap-3 mt-3"> 
                                                    <div class="flex-grow-1">
                                                        
                                                        <p class="fs-14 text-dark d-flex justify-content-between mt-2 mb-0"><span><b></b> </span> <span class="fw-semibold text-danger">Last date: 12/05/2020</span></p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                              
                              <?php }}}?>
                        
                      <div class="left-part">
                            <h2 class="text-dark">Others</h2>
                           
                        </div>

                        <div class="col-xxl-12 col-lg-12">
                            <div id="load_data">
                              
                            </div>
                              <div id="load_data_message" style=" text-align: center; left: 50%;">
                                
                              </div>
                        </div>

                        
                    </div>
                </div>
            </div>
        </main>

    <?php include("include/footer.php") ?>
<style type="text/css">
    .apply{
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
  width: 100%;
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    var userType = "<?php echo isset($_SESSION['userType']) ? $_SESSION['userType'] : ''; ?>";
    var userId = "<?php echo isset($_SESSION['this_user_id']) ? $_SESSION['this_user_id'] : ''; ?>";
    var limit =3;
    var start =0;
    var action = 'inactive';
    
    function load_course_data(limit, start) {
        if (userType === 'APPLICANT') {
            $.ajax({
                url:"xhr/fetch-applied-jobs",
                method:"POST",
                data:{limit:limit, start:start, userType: userType, userId: userId},
                cache:false,
                success:function(data) {
                    $('#load_data').append(data);
                    if(data == '') {
                        $('#load_data_message').html("<button type='button' class='btn btn-info load'>no more jobs applied</button>");
                        action = 'active';
                    }
                    // else if(data == "No applied jobs found") {
                    //     $('#load_data_message').hide(); 
                    //     action = "active";
                    // } 
                    else {
                        $('#load_data_message').html("<button type='button' class='btn btn-warning load'>Please Wait....</button>");
                        action = "inactive";
                    }
                }
            });
        }
    }

    function check_scroll() {
        if($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive') {
            action = 'active';
            start = start + limit;
            setTimeout(function(){
                load_course_data(limit, start);
            }, 1000);
        }
    }

    // Initial loading of data
    if(action == 'inactive') {
        action = 'active';
        load_course_data(limit, start);
    }

    // Call check_scroll() on window scroll
    $(window).scroll(check_scroll);
});
</script>

</html>