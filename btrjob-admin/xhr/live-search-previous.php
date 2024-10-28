<?php
if(isset($_POST['input'])){
 $input=$_POST['input'];
 include('../classes/Crud.php');
 $crud=new Crud();
 
 $readJob=$crud->Read('job_listing',"`job_title` LIKE '%{$input}%' OR `experience` LIKE '%{$input}%' OR `job_location` LIKE '%{$input}%' OR `category` LIKE '%{$input}%' OR `date_posted` LIKE '%{$input}%' OR `last_date` LIKE '%{$input}%' order by `id` desc");

$readCompany=$crud->Read("company","name LIKE '%{$input}%'");

if($readJob || $readCompany ){
    if($readJob){
       foreach($readJob as $job){
        $companyId=$job['company_id'];



        
        $com=$crud->Read("company","`id`=$companyId");
        if($com){
            $company=$com[0];
        }
 ?>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
            <div class="jp_job_post_main_wrapper">
                <div class="row">

                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="jp_job_post_side_img">
                            <img src="images/icon/hiring.gif" style="max-width: 55px;" alt="post_img" />
                        </div>
                        <div class="jp_job_post_right_cont">
                            <h4><?php echo $job['job_title'];?> (min experience: <?php echo $job['experience'];?> years)</h4>
                            <p>
                            <img src="images/icon/office.gif" style="max-width: 32px">
                            <?php echo $company['name'];?></p>
                            <ul>
                                
                                <li><img src="images/icon/location.gif" style="max-width: 32px">&nbsp; <?php echo $job['job_location'];?></li>
                                
                            
                                <li>Sector:&nbsp; <?php echo $job['category'];?></li>
                                
                                <li>Posted date:&nbsp;<?php echo $job['date_posted'];?>&nbsp; &nbsp; <span style="color:red;font-style: italic;" >Last date:&nbsp;<?php echo $job['last_date'];?> </span> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="jp_job_post_right_btn_wrapper">
                            <ul>
                                <li></li>
                                <li><?php echo $job['jobtype'];?></li>
                                <li><a href="job-details.php?jobid=<?php echo $job['id'];?>">View Details</a></li>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>  
    </div> 

 <?php
       }
    }    
    else if($readCompany){
        foreach($readCompany as $searchCom){
          $comId=$searchCom['id'];
          $listing_com=$crud->Read("job_listing","`company_id`=$comId order by `id` desc");
            if($listing_com){
                foreach($listing_com as $list_com){
?>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">  
     <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
        <div class="jp_job_post_main_wrapper">
            <div class="row">

                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="jp_job_post_side_img">
                        <img src="images/icon/hiring.gif" style="max-width: 55px;" alt="post_img" />
                    </div>
                    <div class="jp_job_post_right_cont">
                        <h4><?php echo $list_com['job_title'];?> (min experience: <?php echo $list_com['experience'];?> years)</h4>
                        <p>
                        <img src="images/icon/office.gif" style="max-width: 32px">
                        <?php echo $searchCom['name'];?></p>
                        <ul>
                            
                            <li><img src="images/icon/location.gif" style="max-width: 32px">&nbsp; <?php echo $list_com['job_location'];?></li>
                            
                        
                            <li>Sector:&nbsp; <?php echo $list_com['category'];?></li>
                            
                            <li>Posted date:&nbsp;<?php echo $list_com['date_posted'];?>&nbsp; &nbsp; <span style="color:red;font-style: italic;" >Last date:&nbsp;<?php echo $list_com['last_date'];?> </span> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="jp_job_post_right_btn_wrapper">
                        <ul>
                            <li></li>
                            <li><?php echo $list_com['jobtype'];?></li>
                            <li><a href="job-details.php?jobid=<?php echo $list_com['id'];?>">View Details</a></li>


                        </ul>
                    </div>
                </div>
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