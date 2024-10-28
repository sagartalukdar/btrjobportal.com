<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if(isset($_POST['userType'])){
    $user_id=$_POST["user_id"];
    $userType=$_POST["userType"];
    // $jobName=$_POST["jobName"];
    // $companyname=$_POST["companyName"];
    include("../../classes/Crud.php");
    $crud=new Crud();
    date_default_timezone_set("Asia/Kolkata");
    $today = date("Y-m-d");
    $time = date("H:i:s");

    // $comid=$_SESSION["this_user_id"];


    $data["status"]=1;
    $up=$crud->Update("notification",$data,"`user_id`='$user_id' AND `userType`='$userType'");
        if($up){
            // $data["successMessage"]="notification status updated";
               

        }else{
            // $data["errorMessage"]="notification status update failed";
        }

    
    echo json_encode($data);
}
?>