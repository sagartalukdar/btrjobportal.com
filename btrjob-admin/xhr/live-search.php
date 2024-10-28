<?php
session_start();
if(isset($_POST['input'])){
 $input=$_POST['input'];
 include('../../classes/Crud.php');
 $crud=new Crud();
 
 $readJob=$crud->Read('job_listing',"`job_title` LIKE '%{$input}%' OR `experience` LIKE '%{$input}%' OR `job_location` LIKE '%{$input}%' OR `category` LIKE '%{$input}%' OR `date_posted` LIKE '%{$input}%' OR `last_date` LIKE '%{$input}%' order by `id` desc");

$readCompany=$crud->Read("company","name LIKE '%{$input}%'");
date_default_timezone_set("Asia/Kolkata");
$today = date("Y-m-d");
$time = date("H:i:s");
$userID = $_SESSION['this_user_id'];
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



        
        // $com=$crud->Read("company","`id`=$companyId");
         $com = $crud->Read("company", "`id`=$companyid");
        if ($com) {
                $companyname = $com[0]['name'];
                $companydescription = $com[0]['company_description'];
                $companyemail = $com[0]['email'];
                $companyphone = $com[0]['phone'];
                $companyaddress = $com[0]['address'];
                $companylogo = $com[0]['logo'];
            
 ?>

    <div class="col-xxl-12 col-lg-12">
                                    <div class="card border-0 shadow-sm">
                                        
                                        <div class="card-body p-0">
                                            <div class="border-bottom border-light-200 p-5 pb-3 mb-2">
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="rounded-2 overflow-hidden flex-shrink-0 shadow">
                                                            <div class="avatar-img avatar-xl rounded-2 overflow-hidden flex-shrink-0">
                                                                <?php 
                                                                    if ($companylogo != null) {
                                                                       
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
                                                            
                                                            $jobListing = $crud->Read("job_listing", "`id`='$jobID'");
                                                            if ($jobListing) {
                                                                $lastDate = $jobListing[0]['last_date']; 
                                                                if ($today > $lastDate) { 
                                                        ?>
                                                                    <div class="p-5 pt-3">
                                                                        <p class="expired">Expired</p>
                                                                    </div>
                                                        <?php
                                                                } else {
                                                        ?>
                                                                    <div class="p-5 pt-3">
                                                                        <a href="company-details?job_id=<?php echo $jobID;?>" class="apply">View Details</a>
                                                                    </div>
                                                        <?php
                                                                }
                                                            }
                                                        } else {
                                                            // Job application found
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
                                                        
                                                        <p class="fs-14 text-dark d-flex justify-content-between mt-2 mb-0"><span><b></b> </span> <span class="fw-semibold text-danger" style="font-style: italic;">
                                                            <?php
                                                            $job_end = $jobend;
                                                            $lastDate = date("j-M-Y", strtotime($job_end));
                                                            echo "Last Date: $lastDate";
                                                            ?>
                                                            </span></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- --------- -->

                                            

                                            
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

<div class="col-xxl-12 col-lg-12">
                                    <div class="card border-0 shadow-sm">
                                        
                                        <div class="card-body p-0">
                                            <div class="border-bottom border-light-200 p-5 pb-3 mb-2">
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="rounded-2 overflow-hidden flex-shrink-0 shadow">
                                                            <div class="avatar-img avatar-xl rounded-2 overflow-hidden flex-shrink-0">
                                                                <?php 
                                                                    if ($companylogo != null) {
                                                                       
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
                                                            
                                                            $jobListing = $crud->Read("job_listing", "`id`='$jobID'");
                                                            if ($jobListing) {
                                                                $lastDate = $jobListing[0]['last_date']; 
                                                                if ($today > $lastDate) { 
                                                        ?>
                                                                    <div class="p-5 pt-3">
                                                                        <p class="expired">Expired</p>
                                                                    </div>
                                                        <?php
                                                                } else {
                                                        ?>
                                                                    <div class="p-5 pt-3">
                                                                        <a href="company-details?job_id=<?php echo $jobID;?>" class="apply">View Details</a>
                                                                    </div>
                                                        <?php
                                                                }
                                                            }
                                                        } else {
                                                            // Job application found
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
                                                        
                                                        <p class="fs-14 text-dark d-flex justify-content-between mt-2 mb-0"><span><b></b> </span> <span class="fw-semibold text-danger" style="font-style: italic;">
                                                            <?php
                                                            $job_end = $jobend;
                                                            $lastDate = date("j-M-Y", strtotime($job_end));
                                                            echo "Last Date: $lastDate";
                                                            ?>
                                                            </span></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- --------- -->

                                            

                                            
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