<?php
session_start();
include '../classes/Crud.php';
$crud = new Crud();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['phone'])) {
    extract($_POST);

    // Check if email or phone already exists
    $registration1 = $crud->Read("applicant", "`phone`='$phone'");
    $registration2 = $crud->Read("applicant", "`email`='$email'");

    if ($registration1) {
        echo json_encode(['status' => 'error', 'message' => 'Phone number already exists']);
        exit;
    } elseif ($registration2) {
        echo json_encode(['status' => 'error', 'message' => 'Email already exists']);
        exit;
    } else {
        // Email and phone don't exist, insert new record
        $password=$_POST['password'];

    $salt = '}#f4ga~g%7hjg4&j(7mk?/!bj30ab-wi=6^7-$^R9F|GK5J#E6WT;IO[JN'; // random string

    $hash = hash('sha512', $password . $salt);
        $data = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'password' => $hash,
        ];

        // Create new record
        $create = $crud->Create($data, "applicant");

        if ($create) {
            echo json_encode(['status' => 'success', 'message' => 'Registration successful']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Error during registration']);
        }
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Error while uploading files']);
}
?>
