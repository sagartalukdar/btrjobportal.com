<?php include("include/head.php");?>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<style type="text/css">
    .p-3 {
  padding: none;
}
</style>
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
                    <div class="page-header d-flex align-items-start align-items-md-center justify-content-between flex-wrap mr-bottom-20 gap-4">
                        <div class="left-part">
                            <h2 class="text-dark">All Jobs</h2>
                            <!-- <p class="text-gray mb-0">Regularly uploaded jobs available here. </p> -->
                        </div>
                        
                    </div>
              

<div class="grey-bg container-fluid">
  
  
  <section id="stats-subtitle">
  

  <div class="row">
    <?php 
      $more_joblistings = $crud->Read('job_listing', "1 ORDER BY id DESC");

    if ($more_joblistings) {
        foreach ($more_joblistings as $jobKey) {
            // Your existing code to display job listings
            $jobID = $jobKey['id'];
            $companyid = $jobKey['company_id'];
            $jobtitle = $jobKey['job_title'];
            $joblocation = $jobKey['job_location'];
            $jobposted = $jobKey['date_posted'];
            $jobend = $jobKey['last_date'];
            $jobcategory = $jobKey['category'];
            $jobqualification = $jobKey['qualification'];
            $jobsalary = $jobKey['salary'];
            $jobexperience = $jobKey['experience'];
            $jobType = $jobKey['jobtype'];
            $readCompany = $crud->Read("company", "`id`=$companyid");
            if ($readCompany) {
                $companyname = $readCompany[0]['name'];
                $companydescription = $readCompany[0]['company_description'];
                $companyemail = $readCompany[0]['email'];
                $companyphone = $readCompany[0]['phone'];
                $companyaddress = $readCompany[0]['address'];
                $companylogo = $readCompany[0]['logo'];
            
    ?>
    <div class="col-xl-12 col-md-12">
      <div class="card overflow-hidden">
        <div class="card-content">
          <div class="card-body cleartfix">
            <div class="media align-items-stretch">
              <div class="align-self-center">
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
              </div>
              <div class="media-body">
               <h4><?php echo $jobtitle; ?> (min experience: <?php echo $jobexperience; ?> years)</h4>
                                    <p style="font-weight: 700;color: #23c0e9;">
                                        <?php echo $companyname; ?></p>
                                    <ul style=" list-style-type: none;">
                                        <li><img src="../images/icon/location.gif" style="max-width: 32px">&nbsp; <?php echo $joblocation; ?></li>
                                        <li>Sector:&nbsp; <?php echo $jobcategory; ?></li>
                                        <li>Posted date:&nbsp;<?php echo $jobposted; ?>&nbsp; &nbsp; <span style="color:red;font-style: italic;font-weight: 700;" >Last date:&nbsp;<?php echo $jobend; ?> </span> </li>
                                        <li>Salary:&nbsp; Rs.<?php echo $jobsalary; ?>/-</li>

                                        <li class="job-type"><?php echo $jobType; ?></li>
                                    </ul>
              </div>
              <div class="align-self-center">
                <ul style=" list-style-type: none;">
                                        
                                        
                                        <li class="apply"><a href="job-details?jobid=<?php echo $jobID; ?>" style="color: white">Apply</a></li>
                                    </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php }}}?>
    
  </div>
</section>
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
</style>
</body>

</html>