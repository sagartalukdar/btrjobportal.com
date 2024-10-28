<?php
session_start();
include '../classes/DbConfig.php';
$dbConfig = new DbConfig();
$connection = $dbConfig->connect();
include('../classes/Crud.php');
$crud = new Crud();

date_default_timezone_set("Asia/Kolkata");
$today = date("Y-m-d");
$time = date("H:i:s");

if (isset($_POST['action'])) {
    $query = "SELECT * FROM job_listing WHERE category!='' ";

    if (isset($_POST['sector'])) {
        $sector_filter = implode("','", $_POST['sector']);
        $query .= "AND category IN ('" . $sector_filter . "')";
    }
    if (isset($_POST['jobtype'])) {
        $jobtype_filter = implode("','", $_POST['jobtype']);
        $query .= "AND jobtype IN ('" . $jobtype_filter . "')";
    }
    if (isset($_POST['qualification'])) {
        $qualification_filter = implode("','", $_POST['qualification']);
        $query .= "AND qualification IN ('" . $qualification_filter . "')";
    }
    if (isset($_POST['district'])) {
        $district_filter = implode("','", $_POST['district']);
        $query .= "AND district IN ('" . $district_filter . "')";
    }
    if (isset($_POST['state'])) {
        $state_filter = implode("','", $_POST['state']);
        $query .= "AND state IN ('" . $state_filter . "')";
    }
    if (isset($_POST['salary'])) {
        $salary_filter = implode("','", $_POST['salary']);
        $query .= "AND salary IN ('" . $salary_filter . "')";
    }
    if (isset($_POST['experience'])) {
        $experience_filter = implode("','", $_POST['experience']);
        $query .= "AND experience IN ('" . $experience_filter . "')";
    }

    $query .= "ORDER BY id DESC";

    $statement = $connection->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    $total_row = $statement->rowCount();
    $output = '';

    if ($total_row > 0) {
        foreach ($result as $res) {
            $companyId = $res['company_id'];
            $jobID = $res['id'];
            $comQuery = "SELECT * FROM company WHERE id = :companyId";
            $com_statement = $connection->prepare($comQuery);
            $com_statement->bindParam(':companyId', $companyId, PDO::PARAM_INT);
            $com_statement->execute();
            $com_result = $com_statement->fetch();

            $output .= '
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                    <div class="jp_job_post_main_wrapper">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <div class="jp_job_post_side_img">
                                    <img src="images/icon/hiring.gif" style="max-width: 55px;" alt="post_img" />
                                </div>
                                <div class="jp_job_post_right_cont">
                                    <h4>' . $res["job_title"] . ' (min experience: ' . $res["experience"] . ' years)</h4>
                                    <p>
                                    <img src="images/icon/office.gif" style="max-width: 32px">
                                    ' . $com_result["name"] . '</p>
                                    <ul>
                                        <li><img src="images/icon/location.gif" style="max-width: 32px">&nbsp; ' . $res["job_location"] . '</li>
                                        <li>Sector:&nbsp; ' . $res["category"] . '</li>
                                        <li>Posted date:&nbsp;' . $res["date_posted"] . '&nbsp; &nbsp; <span style="color:red;font-style: italic;">Last date:&nbsp;' . $res["last_date"] . ' </span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="jp_job_post_right_btn_wrapper">
                                    <ul>
                                        <li></li>
                                        <li>' . $res["jobtype"] . '</li>';
                                        if (isset($_SESSION['this_user_id'])) {
                                            $readJob = $crud->Read("job_applied", "`job_id`='$jobID' AND `applicant_id`='$userID'");
                                            if (!$readJob) {
                                                $jobListing = $crud->Read("job_listing", "`id`='$jobID'");
                                                if ($jobListing) {
                                                    $lastDate = $jobListing[0]['last_date'];
                                                    if ($today > $lastDate) {
                                                        $output .= '<li> <p class="expired">Expired</p></li>';
                                                    } else {
                                                        $output .= '<li><a href="job-details?jobid=' . $jobID . '">View Details</a></li>';
                                                    }
                                                }
                                            } else {
                                                $output .= '<li><p class="applied">Applied</p></li>';
                                            }
                                        } else {
                                            $output .= '<li><a href="job-details?jobid=' . $jobID . '">View Details</a></li>';
                                        }
                                        $output .= '
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>';
        }
        echo $output;
    } else {
        echo '<h3 class="text-center" style="color: red;margin-top: 10%;">No details found ! </h3>';
    }
}
?>
