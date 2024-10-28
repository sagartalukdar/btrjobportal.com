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