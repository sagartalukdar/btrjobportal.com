<?php 
session_start();

if (isset($_SESSION['userType'])) {
    if ($_SESSION['userType'] != "APPLICANT") {
        $_SESSION['errorLogin'] = "Access Denied!";
        header('location: ../view-user.php');
        exit();
    }
}

include '../../classes/Crud.php';
$crud = new Crud();
$userType = isset($_POST['userType']) ? $_POST['userType'] : '';
$userId = isset($_POST['userId']) ? $_POST['userId'] : '';

if (isset($_POST["limit"], $_POST["start"])) {
   $applied_job = $crud->Read('job_applied', "applicant_id = '$userId' ORDER BY job_id DESC LIMIT ".$_POST["start"].", ".$_POST["limit"]."");

    if ($applied_job) {
        foreach ($applied_job as $jobKey) {
           
            $jobID = $jobKey['job_id'];
            // $applicantid = $jobKey['applicant_id'];

            if ($userType == 'APPLICANT' && $jobKey['applicant_id'] == $userId) {
                 $readJob = $crud->Read("job_listing", "`id`='$jobID'");
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
                                                            $readJob = $crud->Read("job_applied", "`job_id`='$jobID' AND `applicant_id`='$userId'");
                                                            if (!$readJob) {
                                                            ?>
                                                                <div class="p-5 pt-3">
                                                                    <a href="company-details.php?job_id=<?php echo $jobID;?>" class="apply">APPLY</a>
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
                                                    <!-- <li class="d-inline-block me-2 mb-2">
                                                        <a href="#" class="d-inline-block fs-14 fw-semibold text-uppercase px-2 py-1 rounded-4 badge-soft-info">UI/UX</a>
                                                    </li> -->
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

                                            <!-- --------- -->

                                            

                                            
                                        </div>
                                    </div>
                                </div>
                    <?php
                } else {
                    
                    echo "Job details not found.";
                }
            } else {
                
                echo "You are not authorized to view this job.";
            }
        }
    } else {
        
        // echo "No applied jobs found.";
    }
}
?>
