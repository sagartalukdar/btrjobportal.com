<?php 
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (isset($_SESSION['userType'])) {
  if ($_SESSION['userType']!="APPLICANT") {
    $_SESSION['errorLogin'] = "Access Denied!";
    header('location: ../../login/register.php');
    exit();
  }
   
}

if (isset($_POST['applicantID'])) {
  $id = $_POST['applicantID'];
  include '../../classes/Crud.php';
  $crud = new Crud();
  $readUsers =$crud->Read("applicant","`id`='$id'");
  if ($readUsers) {
    $data['id']=$id;
    $data['address']=$readUsers[0]['address'];
    $data['state']=$readUsers[0]['state'];
    $data['district']=$readUsers[0]['district'];
    $data['qualification']=$readUsers[0]['qualification'];
    $data['experience']=$readUsers[0]['experience'];
    $data['image']=$readUsers[0]['id_img'];

    // $data['phone']=$readUsers[0]['phone'];
    // $data['userType']=$readUsers[0]['user_type'];
    // $data['image']=$readUsers[0]['user_image'];
    // $data['status']=$readUsers[0]['status'];
  } else {
    $data['errorMessage']="User not found.";
  }

  echo json_encode($data);
}
?>