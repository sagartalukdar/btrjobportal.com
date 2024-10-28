<?php
session_start();

if(isset($_POST['email'])){
    $name=$_POST['name'];
    $subject=$_POST['subject'];
    $email=$_POST['email'];
    $msg=$_POST['message'];

    if(!empty("$name")&& !empty("$subject")&& !empty("$email")&& !empty("$msg")){
        $from =$_POST['email'];
        $to = "contact@btrjobportal.com";
        $subject =$_POST['subject']; 
       
        $message =" My Name is ". $name. " My Contact Details are as follows: ". $email." and my message is :".$msg;
    $headers = 'From: '.$email       . "\r\n" .
                'Reply-To: '.$email . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
        $header = "From:".$from." \r\n";  
        $header .= "MIME-Version: 1.0 \r\n";  
        $header .= "Content-type: text/html;charset=UTF-8 \r\n"; 

    ini_set('max_execution_time', 600); ini_set('memory_limit','1024M');   
    $result = mail ($to,$subject,$message,$header); 
        if($result == true){
            $data['successMessage'] ="success";

        } else {
            $data['errorMessage'] = "mail could not be sent";
        }
        echo json_encode($data);
    }
}



?>

