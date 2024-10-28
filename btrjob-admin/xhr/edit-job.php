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
        if(isset($_POST["editId"])){
            $editId=$_POST["editId"];
            include("../../classes/Crud.php");
            $crud=new Crud();
            $jobDetails=$crud->Read("job_listing","`id`=$editId");
            if($jobDetails){
                $job=$jobDetails[0];
                $data["edit_id"]=$editId;
                $data["jobtitle"]=$job["job_title"];
                $data["category"]=$job["category"];
                $data["salary"]=$job["salary"];
                $data["jobtype"]=$job["jobtype"];               
                $data["location"]=$job["job_location"];
                $data["description"]=$job["Jobdescription"];
                $data["qualification"]=$job["qualification"];
                $data["lastdate"]=$job["last_date"];

            }else{
                $data["errorMessage"]="user not found";
            }
            echo json_encode($data);
        }
    }
}
?>