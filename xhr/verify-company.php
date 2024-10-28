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
    include '../../classes/Crud.php';
  $crud = new Crud();
  date_default_timezone_set("Asia/Kolkata");
  $today = date("Y-m-d");
  $time = date("H:i:s");

  extract($_POST);

  $countUser = $crud->Count("company","`id`='$verifyId'");
  if ($countUser>0) {
    $data = [
      'status'=>2
    ];

    $updateUser = $crud->Update("company",$data,"`id`='$verifyId'");
    if ($updateUser) {
      $data['successMessage'] = "User Updated Successfully";
    } else {
      $data['errorMessage'] = "Error Updating User.";
    }
  } else {
      $data['errorMessage'] = "User Not Found!";
  }
    
  echo json_encode($data);
}
?>