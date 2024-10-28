<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if(isset($_SESSION['userType'])){
    if($_SESSION["userType"]!='COMPANY'){
        $_SESSION["errorLogin"]="Access Denied !";
        header("location: ../../login/login.php");
        exit();
    }else{
        if(isset($_SESSION['userType']) && $_SESSION["userType"] == 'COMPANY') {
                if(isset($_POST["job_id"]) && isset($_POST["company_id"])) {
                    $job_id = $_POST["job_id"];
                    $company_id = $_POST["company_id"];
                    $date = $_POST["date"];
                    $interview_date = date("Y-m-d", strtotime($date));
                    // $time = $_POST["time"];
                    $venue = $_POST["venue"];
                     $hour = $_POST['hour'];
                    $minute = $_POST['minute'];
                    $ampm = $_POST['ampm'];
                    $time = $hour . ':' . $minute .' '. $ampm;            
                    include("../../classes/Crud.php");
                    $crud = new Crud();
                    date_default_timezone_set("Asia/Kolkata");
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

                    $check = $crud->Read("job_applied", "`job_id`=$job_id and `company_id`='$company_id' AND `status`=1");
                    if($check) {
                        // $data = [];
                        foreach ($check as $notification) {
                            $applicant_id = $notification['applicant_id'];
 
                            $notificationMessage = 'You have been called for an interview for the post of ' . $jobName . ' at  ' . $companyName . '. on '.$date.' at '.$time.'.';

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

                            $up = $crud->Create( $data, "notification");
                            if($up) {
                            
                                // $data["successMessage"] = "All applicants are called for interview";
                                $update_status = $crud->Update("job_applied", ['status' => 4], "`job_id`='$job_id' AND `company_id`='$company_id' AND `status`=1");
                                if($update_status) {
                                    $data["successMessage"] = "All pending applicants are called for interview";
                                } else {
                                    $data["errorMessage"] = "Failed to update status in job_applied table";
                                }
                            }   else {
                                $data["errorMessage"] = "Notification status update failed";
                            }
                        }
                    } else {
                        $data["errorMessage"] = "No new applicant found";
                    }
                    
                    
                }
        } 
    }
    echo json_encode($data);
}


?>