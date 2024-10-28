<?php
include '../../classes/Crud.php';
$crud = new Crud();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["email"]) && isset($_POST["otp"])) {
    $email = $_POST["email"];
    $otp = $_POST["otp"];
    
   

  
    $checkEmail = $crud->Read("email_verification", "`email`='$email' and `otp`='$otp'");
    if ($checkEmail) {
            
            echo json_encode(['status' => 'success', 'message' => 'OTP Matched.']);

            $deleteData = $crud->Delete("email_verification","`email`='$email' and `otp`='$otp'");
            
            
    } else {
       echo json_encode(['status' => 'error', 'message' => 'OTP did not match. Please enter the OTP that we sent to your email address.']);
        
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'invalid request']);
}
?>
