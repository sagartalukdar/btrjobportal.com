<?php 
session_start();
if (isset($_SESSION['userType'])) {
//   if ($_SESSION['userType']!="ADMIN" || $_SESSION['userType']!="COUNSELLOR") {
//     $_SESSION['errorLogin'] = "Access Denied!";
//     header('location: ../view-user.php');
//     exit();
//   }
   
}
if (isset($_POST['verifyId'])) {
    include '../../login/classes/Crud.php';
  $crud = new Crud();
  date_default_timezone_set("Asia/Kolkata");
  $today = date("Y-m-d");
  $time = date("H:i:s");

  extract($_POST);

  $countUser = $crud->Count("applicant","`id`='$verifyId'");
  if ($countUser>0) {
    $data = [
      'status'=>2
    ];

    $updateUser = $crud->Update("applicant",$data,"`id`='$verifyId'");
    if ($updateUser) {
      $data['successMessage'] = "Applicant Verification Successfull";
    } else {
      $data['errorMessage'] = "Error Applicant Verification.";
    }
  } else {
      $data['errorMessage'] = "Applicant Not Found!";
  }
    
  echo json_encode($data);
}


if (isset($_POST['rejectId'])) {
    include '../../login/classes/Crud.php';
  $crud = new Crud();
  date_default_timezone_set("Asia/Kolkata");
  $today = date("Y-m-d");
  $time = date("H:i:s");

  extract($_POST);

  $countUser = $crud->Count("applicant","`id`='$rejectId'");
  if ($countUser>0) {
    $data = [
      'status'=>0
    ];

    $updateUser = $crud->Update("applicant",$data,"`id`='$rejectId'");
    if ($updateUser) {
      $data['successMessage'] = "Applicant Rejected";
    } else {
      $data['errorMessage'] = "Error Applicant Rejection.";
    }
  } else {
      $data['errorMessage'] = "Applicant Not Found!";
  }
    
  echo json_encode($data);
}
?>