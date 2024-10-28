
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
        if(isset($_POST["job_id"])&& isset($_POST["applicant_id"])){
            $applicant_id=$_POST["applicant_id"];
            $job_id=$_POST["job_id"];
            $jobName=$_POST["jobName"];
            $companyname=$_POST["companyName"];
            include("../../classes/Crud.php");
            $crud=new Crud();
            date_default_timezone_set("Asia/Kolkata");
            $today = date("Y-m-d");
            $time = date("H:i:s");

            $comid=$_SESSION["this_user_id"];

            $check=$crud->Read("job_applied","`applicant_id`=$applicant_id and `job_id`=$job_id and `company_id`=$comid");
            if($check){
                if($check[0]['status']==3){
                    $data["errorMessage"]="Applicant already has been rejected .";
                    echo json_encode($data);
                    exit();
                }else{
                    $data["status"]=3;
                    $up=$crud->Update("job_applied",$data,"`applicant_id`=$applicant_id and `job_id`=$job_id and `company_id`=$comid");
                    if($up){
                        $data["successMessage"]="Applicant Rejected";
                        $notificationMessage = 'Thank you for your interest in the '. $jobName . ' role at ' . $companyname . '. We appreciate the effort and dedication you have shown.<br>After careful consideration, we regret to inform you that you have not been selected for the position at this time. While this decision was difficult, we were impressed by your qualifications and experience.';
                           $data = [
                                'user_id' => $applicant_id,
                                'userType' => 'APPLICANT',
                                'notification_date' =>$today, 
                                'notification_time' =>$time, 
                                'notification' =>  $notificationMessage,
                                'status' => 0,
                                
                            ];
                        $notification=$crud->Create($data,"notification");
                        if($notification){
                            $data["successMessage"]="notification inserted";

                        }else{
                              $data["errorMessage"]="notification insertion failed";

                        }

                    }else{
                        $data["errorMessage"]="Error While Reject Applicant";
                    }
                }
               
            }else{
                $data["errorMessage"]="Applicant not found";
            }
            echo json_encode($data);
        }
    }
}
?>