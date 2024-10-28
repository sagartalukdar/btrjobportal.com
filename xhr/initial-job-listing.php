<?php
session_start();
include('../classes/Crud.php');
$crud = new Crud();
date_default_timezone_set("Asia/Kolkata");
$today = date("Y-m-d");
$time = date("H:i:s");

// Check if userID is stored in session
if(isset($_SESSION['this_user_id'])) {
    $userID = $_SESSION['this_user_id'];

} 
?>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <?php 
        $joblist2 = $crud->Read('job_listing', "1 order by id desc");

            if ($joblist2) {
            $n = 0;
            foreach ($joblist2 as $jobKey) {
            $jobID=$jobKey['id'];
            $companyid=$jobKey['company_id'];
            $jobtitle=$jobKey['job_title'];
            $joblocation=$jobKey['job_location'];
            $jobposted=$jobKey['date_posted'];
            $jobend=$jobKey['last_date'];
            $jobcategory = $jobKey['category'];
            $jobqualification = $jobKey['qualification'];
            $jobsalary = $jobKey['salary'];
            $jobexperience = $jobKey['experience'];
            $jobType= $jobKey['jobtype'];
            $readCompany= $crud->Read("company", "`id`=$companyid");
            if($readCompany){
                $companyname=$readCompany[0]['name'];
                $companydescription=$readCompany[0]['company_description'];
                $companyemail=$readCompany[0]['email'];
                $companyphone=$readCompany[0]['phone'];
                $companyphone=$readCompany[0]['phone'];
                $companyaddress=$readCompany[0]['address'];
                                                            
            ?>
            <div class="col-lg-12 col-md-10 col-sm-12 col-xs-12">
                <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                    <div class="jp_job_post_main_wrapper">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <div class="jp_job_post_right_cont">
                                    <h4><?php echo $jobtitle; ?> (min experience: <?php echo $jobexperience; ?> years)</h4>
                                    <p>
                                        <img src="images/icon/office.gif" style="max-width: 32px">
                                        <?php echo $companyname; ?></p>
                                    <ul>
                                        <li><img src="images/icon/location.gif" style="max-width: 32px">&nbsp; <?php echo $joblocation; ?></li>
                                        <li>Sector:&nbsp; <?php echo $jobcategory; ?></li>
                                        <li>Posted date:&nbsp;<?php echo $jobposted; ?>&nbsp; &nbsp; <span style="color:red;font-style: italic;" >Last date:&nbsp;<?php echo $jobend; ?> </span> </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="jp_job_post_right_btn_wrapper">
                                    <ul>
                                        <li></li>
                                        <li><?php echo $jobType; ?></li>
                                        <?php
                                        if (isset($_SESSION['this_user_id'])) {

                                            $readJob = $crud->Read("job_applied", "`job_id`='$jobID' AND `applicant_id`='$userID'");

                                            if (!$readJob) {
                                                
                                                $jobListing = $crud->Read("job_listing", "`id`='$jobID'");
                                                if ($jobListing) {
                                                    $lastDate = $jobListing[0]['last_date']; 
                                                    if ($today > $lastDate) { 
                                            ?>
                                                           <li> <p class="expired">Expired</p></li>
                                                     
                                            <?php
                                                    } else {
                                            ?>
                                                        <li><a href="job-details?jobid=<?php echo $jobID; ?>">View Details</a></li>
                                            <?php
                                                    }
                                                }
                                            } else {
                                                // Job application found
                                            ?>
                                                <li>
                                                    <p class="applied">Applied</p>
                                                </li>
                                            <?php
                                            }
                                        } else {
                                            echo '<li><a href="job-details?jobid='.$jobID.'">View Details</a></li>';
                                        }
                                            ?>
                                        
                                       
                                    </ul>
                                </div>
                            </div>
                              <hr />
                        </div>
                    </div>
                </div>
            </div>    
    <?php }}}?>
</div>
