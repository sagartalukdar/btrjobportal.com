<?php

     include '../classes/DbConfig.php';


if(isset($_POST['action'])){ // Checking if form action is triggered
   
    // Base query to select job listings
    $query="SELECT * FROM job_listing WHERE category!='' ";

    // Adding sector filter to the query if set
    if(isset($_POST['sector'])){
        $sector_filter=implode("','",$_POST['sector']);
        $query .="AND category IN ('".$sector_filter."')";
    }

    // Adding job type filter to the query if set
    if(isset($_POST['jobtype'])){
        $jobtype_filter=implode("','",$_POST['jobtype']);
        $query .="AND jobtype IN ('".$jobtype_filter."')";
    }

    // Adding qualification filter to the query if set
    if(isset($_POST['qualification'])){
        $qualification_filter=implode("','",$_POST['qualification']);
        $query .="AND qualification IN ('".$qualification_filter."')";
    }

    // Adding district filter to the query if set
    if(isset($_POST['district'])){
        $district_filter=implode("','",$_POST['district']);
        $query .="AND district IN ('".$district_filter."')";
    }

    // Adding state filter to the query if set
    if(isset($_POST['state'])){
        $state_filter=implode("','",$_POST['state']);
        $query .="AND state IN ('".$state_filter."')";
    }

    // Adding salary filter to the query if set
    if(isset($_POST['salary'])){
        $salary_filter=implode("','",$_POST['salary']);
        $query .="AND salary IN ('".$salary_filter."')";
    }

    // Adding experience filter to the query if set
    if(isset($_POST['experience'])){
        $experience_filter=implode("','",$_POST['experience']);
        $query .="AND experience IN ('".$experience_filter."')";
    }

    // Adding order by clause to the query
    $query.="ORDER BY id DESC";

    // Preparing and executing the query
    $statement=$connection->prepare($query);
    $statement->execute();
    $result=$statement->fetchAll();
    $total_row=$statement->rowCount();
    $output='';

    // Displaying job listings if found
    if($total_row>0){
        foreach ($result as $res){
            $companyId = $res['company_id'];
            $comQuery = "SELECT * FROM company WHERE id = :companyId";
            $com_statement = $connection->prepare($comQuery);
            $com_statement->bindParam(':companyId', $companyId, PDO::PARAM_INT);
            $com_statement->execute();
            $com_result = $com_statement->fetch();

            // Generating HTML output for each job listing
            $output .= '
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- Job listing container -->
                <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                    <div class="jp_job_post_main_wrapper">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <div class="jp_job_post_side_img">
                                    <!-- Job image -->
                                    <img src="images/icon/hiring.gif" style="max-width: 55px;" alt="post_img" />
                                </div>
                                <div class="jp_job_post_right_cont">
                                    <h4>' . $res["job_title"] . ' (min experience: ' . $res["experience"] . ' years)</h4>
                                    <p>
                                    <img src="images/icon/office.gif" style="max-width: 32px">
                                    ' . $com_result["name"] . '</p>
                                    <ul>
                                        <!-- Job details -->
                                        <li><img src="images/icon/location.gif" style="max-width: 32px">&nbsp; ' . $res["job_location"] . '</li>
                                        <li>Sector:&nbsp; ' . $res["category"] . '</li>
                                        <li>Posted date:&nbsp;' . $res["date_posted"] . '&nbsp; &nbsp; <span style="color:red;font-style: italic;">Last date:&nbsp;' . $res["last_date"] . ' </span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="jp_job_post_right_btn_wrapper">
                                    <ul>
                                        <!-- Job type and view details -->
                                        <li></li>
                                        <li>' . $res["jobtype"] . '</li>
                                        <li><a href="job-details.php?jobid=' . $res["id"] . '">View Details</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>';                
        }
        echo $output; // Outputting job listings
    }else{
       echo '<h3 class="text-center" style="color: red;margin-top: 10%;">No details found ! </h3>'; // If no job listings found
    }
   
}
?>
