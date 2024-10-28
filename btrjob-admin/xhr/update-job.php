<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if(isset($_SESSION["userType"])){
    if($_SESSION["userType"]!="COMPANY"){
        $_SESSION["errorLogin"]="Access Denied";
        header("location: ../../login/login.php");
        exit();
    }
    else{
        if(isset($_POST["edit_id"])){
            $editId=$_POST["edit_id"];
            include("../../classes/Crud.php");
            $crud=new Crud();
            date_default_timezone_set("Asia/Kolkata");
            $today = date("Y-m-d");
            $time = date("H:i:s");

            extract($_POST);

            $countJob=$crud->Count("job_listing","`id`=$edit_id");
            if($countJob>0){
                $data=[
                 'job_title'=>$jobtitle,
                 'category'=>$category,
                 'salary'=>$salary,
                 'jobtype'=>$jobtype,
                 'job_location'=>$location,
                 'Jobdescription'=>$description,
                 'qualification'=>$qualification,
                 'last_date'=>$lastdate
                ];

                $update=$crud->Update("job_listing",$data,"`id`=$edit_id");
                if($update){
                    $data["successMessage"]="Job Details Updated.";
                }else{
                    $data["errorMessage"]="Error in Updation";
                }
            }else{
                $data["errorMessage"]="No Job Details Found.";
            }
            echo json_encode($data);
        }
    }
}
?>