<?php
session_start();
if(isset($_POST['input'])){
 $input=$_POST['input'];
 include('../classes/Crud.php');
 $crud=new Crud();
 date_default_timezone_set("Asia/Kolkata");
$today = date("Y-m-d");
$time = date("H:i:s");
if (isset($_SESSION['this_user_id'])) {
    $userID = $_SESSION['this_user_id'];

}
 $readJob=$crud->Read('job_listing',"`job_title` LIKE '%{$input}%' OR `experience` LIKE '%{$input}%' OR `job_location` LIKE '%{$input}%' OR `category` LIKE '%{$input}%' OR `date_posted` LIKE '%{$input}%' OR `last_date` LIKE '%{$input}%' order by `id` desc");

$readCompany=$crud->Read("company","name LIKE '%{$input}%'");

if($readJob || $readCompany ){
    if($readJob){
       foreach($readJob as $jobKey){
        // $companyId=$job['company_id'];
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


        $com=$crud->Read("company","`id`=$companyid");
        if($com){
             $companyname = $com[0]['name'];
                $companydescription = $com[0]['company_description'];
                $companyemail = $com[0]['email'];
                $companyphone = $com[0]['phone'];
                $companyaddress = $com[0]['address'];
                $companylogo = $com[0]['logo'];
        
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

 <?php
       }
    }  
    }  
    else if($readCompany){
        foreach($readCompany as $searchCom){
          $comId=$searchCom['id'];

          $companyname = $searchCom['name'];
                $companydescription = $searchCom['company_description'];
                $companyemail = $searchCom['email'];
                $companyphone = $searchCom['phone'];
                $companyaddress = $searchCom['address'];
                $companylogo = $searchCom['logo'];
          


          $listing_com=$crud->Read("job_listing","`company_id`=$comId order by `id` desc");
            if($listing_com){
                foreach($listing_com as $jobKey){
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

<?php

                }
            }
        }
    }
   
}
else{
    echo '<h3 class="text-center" style="color: red;margin-top: 10%;">No details found ! </h3>';
 }

}
?>