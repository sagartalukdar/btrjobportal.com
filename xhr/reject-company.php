<?php 
session_start();
if (isset($_SESSION['userType'])) {
//   if ($_SESSION['userType']!="ADMIN" || $_SESSION['userType']!="COUNSELLOR") {
//     $_SESSION['errorLogin'] = "Access Denied!";
//     header('location: ../view-user.php');
//     exit();
//   }
   
}
if (isset($_POST['rejectId'])) {
    include '../../classes/Crud.php';
  $crud = new Crud();
  date_default_timezone_set("Asia/Kolkata");
  $today = date("Y-m-d");
  $time = date("H:i:s");

  extract($_POST);

  $countUser = $crud->Count("company","`id`='$rejectId'");
  if ($countUser>0) {
    $data = [
      'status'=>3
    ];

    $updateUser = $crud->Update("company",$data,"`id`='$rejectId'");
    if ($updateUser) {
      $data['successMessage'] = "Company Rejected";
    } else {
      $data['errorMessage'] = "Error Company Rejection.";
    }
  } else {
      $data['errorMessage'] = "Company Not Found!";
  }
    
  echo json_encode($data);
}
?>