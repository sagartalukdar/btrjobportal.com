<?php
include '../../classes/Crud.php';
$crud = new Crud();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["email"])) {
    $email = $_POST["email"];

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "invalid";
    } else {
        // Check if email exists in the database
        $registration = $crud->Read("company", "`email`='$email'");
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
