<?php
include '../../classes/Crud.php';
$crud = new Crud();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["email"]) && isset($_POST["userType"])) {
    $email = $_POST["email"];
    $userType = $_POST["userType"];

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "invalid";
    } else {
        // Determine the table based on userType
        if ($userType == 'ADMIN') {
            $table = 'users';
        } elseif ($userType == 'COUNSELLOR') {
            $table = 'users';
        } elseif ($userType == 'APPLICANT') {
            $table = 'applicant';
        } elseif ($userType == 'COMPANY') {
            $table = 'company';
        } else {
            echo "invalid user";
            exit; // Exit the script if userType is invalid
        }

        // Check if email exists in the specified table
        $registration = $crud->Read($table, "`email`='$email'");
        if ($registration) {
            echo "exists";
        } else {
            echo "valid";
        }
    }
} else {
    echo "invalid";
}
?>
