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
        if(isset($_POST["delete_id"])){
            include("../../classes/Crud.php");
            $crud=new Crud();
            date_default_timezone_set("Asia/Kolkata");
            $today = date("Y-m-d");
            $time = date("H:i:s");

          $delete_id=$_POST['delete_id'];

          $delete=$crud->Delete("job_listing","`id`=$delete_id");
          if($delete){
            $data["successMessage"]="job Details Deleted";
          }else{
            $data["errorMessage"]="Error while Delete Job Details.";
          }
          echo json_encode($data);

        }
    }
}
?>