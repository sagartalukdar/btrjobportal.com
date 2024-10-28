<?php
include '../../classes/Crud.php';
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
            // echo json_encode(['status' => 'success', 'message' => 'otp updated successfully check email for otp']);
            
            $to      = $email;
            $from="no-reply@btrjobportal.com";
            $subject = 'OTP Verification';
            $message = 'Your OTP for registering into BTR Job Portal is : '.$otp ;
           
            // $headers = 'From: no-reply@btrjobportal.com'       . "\r\n" .
                        
            //             'X-Mailer: PHP/' . phpversion();
            // $header .= "MIME-Version: 1.0 \r\n";  
            // $header .= "Content-type: text/html;charset=UTF-8 \r\n"; 
            $headers = 'From: '.$from . "\r\n" .
                                    'Reply-To: '.$from . "\r\n" .
                                    'X-Mailer: PHP/' . phpversion();
                            $header = "From:".$from." \r\n";  
                            $header .= "MIME-Version: 1.0 \r\n";  
                            $header .= "Content-type: text/html;charset=UTF-8 \r\n"; 
            
            
             ini_set('max_execution_time', 600); ini_set('memory_limit','1024M');  
             $result = mail ($to,$subject,$message,$header); 
            if($result==true){
              $data['successMessage'] ="OTP sent check your mail";
            
            } else {
              $data['errorMessage'] ="Otp not send";
            }
            
    
    
        } else {
            $data['errorMessage'] ="failed to update otp for existing mail";
        }
    } else {
       $data = [
            'otp' => $otp,
            'email' => $email,
            
        ];
        
        $insertOtp = $crud->Create( $data,"email_verification");

        if ($insertOtp) {
        //   echo json_encode(['status' => 'success', 'message' => 'otp inserted for new mail check email for otp']);
           
           
           
            $to      = $email;
            $from="no-reply@btrjobportal.com";
            $subject = 'OTP Verification';
            $message = 'Your OTP for registering into BTR Job Portal is : '.$otp ;
           
            // $headers = 'From: no-reply@btrjobportal.com'       . "\r\n" .
                        
            //             'X-Mailer: PHP/' . phpversion();
            // $header .= "MIME-Version: 1.0 \r\n";  
            // $header .= "Content-type: text/html;charset=UTF-8 \r\n"; 
            $headers = 'From: '.$from . "\r\n" .
                                    'Reply-To: '.$from . "\r\n" .
                                    'X-Mailer: PHP/' . phpversion();
                            $header = "From:".$from." \r\n";  
                            $header .= "MIME-Version: 1.0 \r\n";  
                            $header .= "Content-type: text/html;charset=UTF-8 \r\n"; 
            
             ini_set('max_execution_time', 600); ini_set('memory_limit','1024M');  
             $result = mail ($to,$subject,$message,$header); 
            if($result==true){
              $data['successMessage'] ="OTP sent check your mail";
            
            } else {
              $data['errorMessage'] ="Otp not send";
            }

           

        } else {
            $data['errorMessage'] ="failed inserting otp for new mail";
            // echo json_encode(['status' => 'error', 'message' => '']);
        }
    }
} else {
     $data['errorMessage'] ="invalid request";
}
echo json_encode($data);
?>
