<?php
session_start();
if(isset($_SESSION['userType'])){
    if($_SESSION['userType']!="APPLICANT"){
       $_SESSION['errorLogin']="Access Denied ! ";
       header("location: ../login/login.php");
       exit();
    }
}

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["jobId"])){
    include '../../classes/Crud.php';
    $crud = new Crud();
    date_default_timezone_set("Asia/Kolkata");
    $today = date("Y-m-d");
    $time = date("H:i:s");

    $jobid = $_POST["jobId"];

    $job = $crud->Read("job_listing","`id`=$jobid");

    if($job){
        $last_date = $job[0]["last_date"];
        if($today > $last_date){
            $data['errorMessage'] = "Apply Date Was Expired !";
            echo json_encode($data);
            exit();
        } else {
            $company_id=$job[0]['company_id'];
            $userId = $_SESSION['this_user_id'];
            $checkApplicant = $crud->Read("job_applied","`job_id`=$jobid and `applicant_id`=$userId");
            
            
            if($checkApplicant) {
                $data['errorMessage'] = "You have already applied for this job.";
                echo json_encode($data);
                exit();
            } else {
                // Proceed to create a new record
                $data = [
                    'applicant_id' => $_SESSION["this_user_id"],
                    'job_id' => $jobid,
                    'status' => 1,
                    'company_id'=>$company_id
                ];
                $create = $crud->Create($data,"job_applied");
                if($create){
                    $data['successMessage'] = "Job Applied Successfully";
                } else {
                    $data['errorMessage'] = "Application failed";
                }
                echo json_encode($data);
            }
        }
    } else {
        $data['errorMessage'] = "Invalid Job ID";
        echo json_encode($data);
    }
} else {
    // Handle cases where $_POST["jobId"] is not set or the request method is not POST
    $data['errorMessage'] = "Invalid Request";
    echo json_encode($data);
}
?>
