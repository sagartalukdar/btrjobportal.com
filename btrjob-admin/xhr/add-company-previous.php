<?php
session_start();
include '../../classes/Crud.php';
$crud = new Crud();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email'])) {
    extract($_POST);
    if (!empty($_FILES["image2"]["name"])) {
        if ($_FILES["image2"]["error"] != 0) {
            echo json_encode(['status' => 'error', 'message' => 'Error uploading image2']);
            exit;
        }
        $target_dir_logoimage = "../uploads/logoimage/";
        $target_file_logoimage = $target_dir_logoimage  . md5(time()) . basename($_FILES["image2"]["name"]);

       
        if (!move_uploaded_file($_FILES["image2"]["tmp_name"],$target_file_logoimage)) {
            echo json_encode(['status' => 'error', 'message' => 'Error while uploading image2']);
            exit;
        }
    } else {
      
        $target_file_logoimage = '';
    }

   
    if ($_FILES["image"]["error"] != 0) {
        echo json_encode(['status' => 'error', 'message' => 'Error uploading qualification file']);
        exit;
    }

    $target_dir_qualification = "../uploads/tradepdf/";
    $target_file_qualification = $target_dir_qualification . md5(time()) . basename($_FILES["image"]["name"]);
    $imageType = strtolower(pathinfo($target_file_qualification, PATHINFO_EXTENSION));

    if ($imageType != "pdf") {
        echo json_encode(['status' => 'error', 'message' => 'Invalid qualification file type']);
        exit;
    }

    if (move_uploaded_file($_FILES["image"]["tmp_name"],$target_file_qualification)) {
        $salt = '}#f4ga~g%7hjg4&j(7mk?/!bj30ab-wi=6^7-$^R9F|GK5J#E6WT;IO[JN'; 
        $hashedPassword = hash('sha512', $password . $salt);
        $data = [
            'email' => $email,
            'phone' => $phone,
            'password' => $hashedPassword,
             'name' => $company,
            'company_description' => $company_description,
            'address' => $address,
            'state' => $state,
            'district' => $district,
            'trade_license' => $target_file_qualification,
            'logo' => $target_file_logoimage,
            'user_type' =>'COMPANY',
            'status' => '1',
        ];

        $addcompany = $crud->Create($data, "company");

        if ($addcompany) {
            echo json_encode(['status' => 'success', 'message' => 'Company information updated successfully']);
            $to = $email;
            $subject = "WELCOME TO BTR JOB PORTAL!";
            
            $message = "<h5>Subject: Welcome to BTR Job Portal - Your Gateway to Business Growth!</h5>";
            $message .= "<p>Dear ".$company.",<p>

                    <p>We are pleased to inform you that your company, ".$company." , has been successfully registered on BTR Job Portal, a leading platform connecting businesses with top-tier talent.</p>

                    <p>Now that your registration is complete, you have gained access to a powerful tool that can significantly contribute to the growth of your business. BTR Job Portal provides a streamlined platform for posting job opportunities, attracting qualified candidates, and enhancing your recruitment process.</p>

                    <p>Here are the key features and benefits awaiting you on BTR Job Portal:**</p>

                    <p>1. **Job Posting:** Easily post and manage job openings to reach a wide audience of potential candidates.</p>


                    <p>2. **Profile Management:** Update and maintain your company profile to showcase your brand, values, and unique offerings to potential candidates.</p>

                    <p>3. **Application Management:** Efficiently manage job applications, track the progress of candidates, and communicate seamlessly through our platform.</p>

                    

                    <p>To get started, simply use the credentials below to log in to your BTR Job Portal account:</p>

                    <p>Email: ".$email."</p>
                    <p>Password: ".$password." </p>

                    <p>We recommend changing your password after your first login for added security.</p>

                    <p>We are confident that BTR Job Portal will be a valuable asset in your quest for business expansion and success. If you have any questions or need assistance, our support team is ready to help. Feel free to reach out via contact@btrjobportal.com.</p>

                    <p>Thank you for choosing BTR Job Portal. We look forward to seeing your business thrive on our platform.</p>

                    <p>Best regards,</p>
                    <p>BTR Job Portal Team</p>";

            $header = "From:contact@btrjobportal.com \r\n";
            // $header .= "Cc:afgh@somedomain.com \r\n";
            $header .= "MIME-Version: 1.0\r\n";
            $header .= "Content-type: text/html\r\n";

            $retval = mail ($to,$subject,$message,$header);

            if( $retval == true ) {
            echo '<script>console.log("Message sent successfully...");</script>';
            }else {
            echo '<script>console.log("Message was not successfully...");</script>';
            
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Error updating company information']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error while uploading trade license file']);
    }
}
?>
