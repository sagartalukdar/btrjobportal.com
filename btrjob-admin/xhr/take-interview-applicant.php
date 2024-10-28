<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Initialize $data variable to avoid undefined variable error
$data = [];

if(isset($_SESSION['userType']) && $_SESSION["userType"] == 'COMPANY') {
    if(isset($_POST["job_id"]) && isset($_POST["company_id"]) && isset($_POST["applicant_id"])) {
        $job_id = $_POST["job_id"];
        $company_id = $_POST["company_id"];
        $applicant_id = $_POST["applicant_id"];
        $date = $_POST["date"];
        $interview_date = date("Y-m-d", strtotime($date));
        
        // Retrieve the time components from the form
        $hour = $_POST['hour'];
        $minute = $_POST['minute'];
        $ampm = $_POST['ampm'];
        
        // Combine the components into a time string
        $time = $hour . ':' . $minute .' '. $ampm;
        
    //   echo  $time ;


        $venue = $_POST["venue"];

        include("../../classes/Crud.php");
        $crud = new Crud();
        date_default_timezone_set("Asia/Kolkata");
        $today = date("Y-m-d");
        $today_time = date("h:i:s");

        // Fetch job details
        $checkJob = $crud->Read("job_listing", "`id`=$job_id and `company_id`='$company_id'");
        if($checkJob) {
            $jobName = $checkJob[0]['job_title'];
        }

        // Fetch company details
        $checkCompany = $crud->Read("company", "`id`='$company_id'");
        if($checkCompany) {
            $companyName = $checkCompany[0]['name'];
        }

        // Check if applicant exists and status is 1 (applied)
        $check = $crud->Read("job_applied", "`job_id`=$job_id and `company_id`='$company_id' AND `status`=1 AND `applicant_id`='$applicant_id'");
        if($check) {
            foreach ($check as $notification) {
                $applicant_id = $notification['applicant_id'];

                // Construct notification message
                $notificationMessage = 'You have been called for an interview for the post of ' . $jobName . ' at  ' . $companyName . ' on ' . $date . ' at ' . $time . '.';

                // Prepare data for insertion into notification table
                $data = [
                    'user_id' => $applicant_id,
                    'userType' => 'APPLICANT',
                    'notification' => $notificationMessage,
                    'interview_date' => $interview_date, 
                    'interview_time' => $time, 
                    'venue' => $venue,
                    'notification_date' =>$today, 
                    'notification_time' =>$today_time, 
                    'status' => 0,
                ];

                // Insert notification into the database
                $up = $crud->Create( $data, "notification");
                if($up) {
                    // Update applicant status to 4 (called for interview)
                    $update_status = $crud->Update("job_applied", ['status' => 4], "`job_id`='$job_id' AND `company_id`='$company_id' AND `status`=1  AND `applicant_id`='$applicant_id'");
                    if($update_status) {
                        $data["successMessage"] = "This applicant is called for interview";
                    } else {
                        $data["errorMessage"] = "Failed to update status in job_applied table";
                    }
                } else {
                    $data["errorMessage"] = "Notification status update failed";
                }
            }
        } else {
            $data["errorMessage"] = "No new applicant found";
        }
    } else {
        $data["errorMessage"] = "Required parameters are missing";
    }
} else {
    $data["errorMessage"] = "Access Denied!";
    $_SESSION["errorLogin"]="Access Denied !";
    header("location: ../../login/login.php");
    exit();
}

// Output JSON response
echo json_encode($data);
?>
