<?php
session_start();
include '../../classes/Crud.php';
$crud = new Crud();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['o_password']) && isset($_POST['n_password'])) {
    extract($_POST);
    

    $userType = $_SESSION['userType'];
    $email = $_SESSION['userMail'];
    // $name = $_POST['name'];
    $o_password = $_POST['o_password'];
    $n_password = $_POST['n_password'];
    
    $salt = '}#f4ga~g%7hjg4&j(7mk?/!bj30ab-wi=6^7-$^R9F|GK5J#E6WT;IO[JN'; 
    $hashedPassword = hash('sha512', $o_password . $salt);

    $hashed_n_Password = hash('sha512', $n_password . $salt);


    if ($userType == 'ADMIN') {
        $table = 'users'; 
    }  elseif ($userType == 'COUNSELLOR') {
        $table = 'users';
    } elseif ($userType == 'APPLICANT') {
        $table = 'applicant';
    } elseif ($userType == 'COMPANY') {
        $table = 'company';
    } else {
     
        echo json_encode(['status' => 'error', 'message' => 'Invalid user type']);
        exit;
    }

    
    $checkEmail = $crud->Read($table, "`email`='$email' and `password`='$hashedPassword'");
    if ($checkEmail) {
        $data = [
            'password' => $hashed_n_Password,
            
        ];
        $updateResult = $crud->Update($table, $data, "`email`='$email' and `password`='$hashedPassword'");
        if ($updateResult) {
            echo json_encode(['status' => 'success', 'message' => 'Password updated successfully.']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'failed to update password']);
        }
    } else {
        // echo "old password ".$hashedPassword."   ".$o_password."  " ;
        // echo $email;
        // echo $userType;
        // echo $table;
        echo json_encode(['status' => 'error', 'message' => 'Incorrect Email And Old Password!!!']);
    }
}
else {
  
    echo json_encode(['status' => 'error', 'message' => 'Invalid request']);
}
?>
