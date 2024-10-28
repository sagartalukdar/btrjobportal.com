<?php
include '../classes/Crud.php';
$crud = new Crud();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["phone"]) && isset($_POST["userType"])) {
    $phone = $_POST["phone"];
    $userType = $_POST["userType"];

    if (!preg_match('/^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[6789]\d{9}$/', $phone)) {
        echo "invalid";
    } else {
     
        if ($userType == 'ADMIN') {
            $table = 'users';
        } elseif ($userType == 'APPLICANT') {
            $table = 'applicant';
        } elseif ($userType == 'COMPANY') {
            $table = 'company';
        } else {
            echo "invalid";
            exit; 
        }

        $registration = $crud->Read($table, "`phone`='$phone'");
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
