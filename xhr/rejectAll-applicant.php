<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_SESSION['userType']) && $_SESSION["userType"] == 'COMPANY') {
    if (isset($_POST["job_id"]) && isset($_POST["company_id"])) {
        $job_id = $_POST["job_id"];
        $company_id = $_POST["company_id"];
        
        include("../../classes/Crud.php");
        $crud = new Crud();
        $today = date("Y-m-d");
        $today_time = date("h:i:s");
        $checkJob = $crud->Read("job_listing", "`id`=$job_id and `company_id`='$company_id'");
            if($checkJob) {
                $jobName = $checkJob[0]['job_title'];
            }

            $checkCompany = $crud->Read("company", "`id`='$company_id'");
            if($checkCompany) {
                $companyName = $checkCompany[0]['name'];
            }

                $applicants = $crud->Read("job_applied", "`job_id`=$job_id AND `company_id`=$company_id AND `status`=1");
                
                if($applicants) {
                    $data = []; // Initializing $data array here
                    foreach ($applicants as $notification) {
                        $applicant_id = $notification['applicant_id'];
         
                        // Assuming $jobName, $companyName, $date, $time, $venue, $today, $today_time are defined elsewhere
                        $notificationMessage = 'Thank you for your interest in the' . $jobName . ' role at' . $companyName . 'We appreciate the effort and dedication you have shown.<br>After careful consideration, we regret to inform you that you have not been selected for the position at this time. While this decision was difficult, we were impressed by your qualifications and experience.';
        
                        $notification_data = [
                            'user_id' => $applicant_id,
                            'userType' => 'APPLICANT',
                            'notification' => $notificationMessage,
                             
                            'notification_date' => $today, 
                            'notification_time' => $today_time, 
                            'status' => 0,
                        ];
        
                        $up = $crud->Create($notification_data, "notification");
                        if($up) {
                            
                            $update_status = $crud->Update("job_applied", ['status' => 3], "`job_id`='$job_id' AND `company_id`='$company_id' AND `status`=1");
                            if($update_status) {
                                $data["successMessage"] = "All pending applicants are rejected";
                            } else {
                                $data["errorMessage"] = "Failed to update status in job_applied table";
                            }
                        } else {
                            $data["errorMessage"] = "Notification status update failed";
                        }
                    }
                    echo json_encode($data);
                } else {
                    $data["errorMessage"] = "No new applicant found";
                    echo json_encode($data);
                }
    }
} else {
    $_SESSION["errorLogin"] = "Access Denied !";
    header("location: ../../login/login.php");
    exit();
}
?>
