<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if(isset($_SESSION['userType'])){
    if($_SESSION["userType"]!='ADMIN'){
        $_SESSION["errorLogin"]="Access Denied !";
        header("location: ../../login/login.php");
        exit();
    }else{
        if(isset($_POST["verifyId"])){
            $verifyId=$_POST["verifyId"];
           
            include("../../classes/Crud.php");
            $crud=new Crud();
            date_default_timezone_set("Asia/Kolkata");
            $today = date("Y-m-d");
            $time = date("H:i:s");

            $comid=$_SESSION["this_user_id"];

            $check=$crud->Read("company","`id`=$verifyId");
            if($check){
                if($check[0]['status']==2){
                    $data["errorMessage"]="Company already has been Verified .";
                    echo json_encode($data);
                    exit();
                }else{
                    $data["status"]=2;
                    $up=$crud->Update("company",$data,"`id`=$verifyId");
                    if($up){
                        $data["successMessage"]="Company Verified";
                           // $data = [
                           //      'user_id' => $verifyId,
                           //      'userType' => 'COMPANY',
                           //      'notification' => 'You have been Verified.',

                           //      'interview_date' => $today,
                           //      'interview_time' => $time,
                           //      'status' => 0
                                
                           //  ];
                        // $notification=$crud->Create($data,"notification");
                        // if($notification){
                        //     $data["successMessage"]="notification inserted";

                        // }else{
                        //       $data["errorMessage"]="notification insertion failed";

                        // }

                    }else{
                        $data["errorMessage"]="Error in verification.";
                    }
                }
               
            }else{
                $data["errorMessage"]="Data not found";
            }
            echo json_encode($data);
        }
    }
}
?>