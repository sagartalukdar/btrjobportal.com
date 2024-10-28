<?php
include '../classes/Crud.php';
$crud = new Crud();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["email"])) {
    $email = $_POST["email"];
    
   
    $otp = mt_rand(100000, 999999); 
    
  
    $checkEmail = $crud->Read("email_verification", "`email`='$email'");
    if ($checkEmail) {
         $data = [
            'otp' => $otp,
            
        ];
       
        $updateResult = $crud->Update("email_verification", $data, "`email`='$email'");
        if ($updateResult) {
            echo json_encode(['status' => 'success', 'message' => 'otp updated successfully']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'failed to update otp for existing mail']);
        }
    } else {
       $data = [
            'otp' => $otp,
            'email' => $email,
            
        ];
        
        $insertOtp = $crud->Create( $data,"email_verification");
        if ($insertOtp) {
           echo json_encode(['status' => 'success', 'message' => 'otp inserted for new mail']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'failed inserting otp for new mail']);
        }
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'invalid request']);
}
?>
