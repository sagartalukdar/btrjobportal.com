<?php
session_start();
include '../../classes/Crud.php';
$crud = new Crud();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['userType'])) {
    
    $userType = $_POST['userType'];
    // $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    if ($userType == 'ADMIN') {
        $table = 'users'; 
    } elseif ($userType == 'APPLICANT') {
        $table = 'applicant';
    } elseif ($userType == 'COMPANY') {
        $table = 'company';
    } else {
     
        echo json_encode(['status' => 'error', 'message' => 'Invalid user type']);
        exit;
    }

    // $registration1 = $crud->Read($table, "`phone`='$phone' AND `user_type`='$userType'");
    // $registration2 = $crud->Read($table, "`email`='$email' AND `user_type`='$userType'");
    // if ($registration1) {
    //     echo json_encode(['status' => 'error', 'message' => 'Phone number already exists']);
        
    // } elseif ($registration2) {
    //     echo json_encode(['status' => 'error', 'message' => 'Email already exists']);
    //     exit;
    // }

    $salt = '}#f4ga~g%7hjg4&j(7mk?/!bj30ab-wi=6^7-$^R9F|GK5J#E6WT;IO[JN'; 
    $hashedPassword = hash('sha512', $password . $salt);

    $data = [
        // 'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'password' => $hashedPassword,
        'user_type' => $userType,
    ];

    $create = $crud->Create($data, $table);

    if ($create) {
        $read= $crud->Read($table,"1 order by `id` desc limit 1");

            $_SESSION['this_user_id'] = $read[0]['id'];

            $_SESSION['userType'] = $userType;
            $_SESSION['userMail'] = $read[0]['email'];
            
        echo json_encode(['status' => 'success', 'message' => 'Registration successful']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error during registration']);
    }
} else {
  
    echo json_encode(['status' => 'error', 'message' => 'Invalid request']);
}
?>
