<?php
include '../../classes/Crud.php';
$crud = new Crud();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["phone"])) {
    $phone = $_POST["phone"];

    // Validate phone number format
    if (!preg_match('/^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[6789]\d{9}$/', $phone)) {
        echo "invalid";
    } else {
        // Check if phone number exists in the database
        $registration = $crud->Read("company", "`phone`='$phone'");
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
