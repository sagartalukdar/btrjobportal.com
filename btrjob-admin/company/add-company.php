<?php 
session_start();
if (isset($_SESSION['userType'])) {
  if ($_SESSION['userType']!="ADMIN") {
    $_SESSION['errorLogin'] = "Access Denied!";
    header('location: ../add-company.php');
    exit();
  }
   
}
if (isset($_POST['cName'])) {
  include '../../login/classes/Crud.php';
  $crud = new Crud();
  date_default_timezone_set("Asia/Kolkata");
  $today = date("Y-m-d");
  $time = date("H:i:s");
  extract($_POST);


           




  // if($inputImg==null || $inputImg==""){
  //   $data['errorMessage']="Picture Not Selected Select Any Picture.";
  //   echo json_encode($data);
  //   exit();
  // }else{


    



  // }

    //   cName cPhone cEmail cDesc cPassword cAddress cState cDistrict image1 image2
    
       


  $displayPass = $cPassword;
  $salt = '}#f4ga~g%7hjg4&j(7mk?/!bj30ab-wi=6^7-$^R9F|GK5J#E6WT;IO[JN'; // random string
  $cPassword = hash('sha512', $cPassword . $salt);

  $countUser = $crud->Count("company","`email`='$cEmail'");
  if ($countUser>0) {
    $data['errorMessage']="Username or Email Already Exists.";
    echo json_encode($data);
    exit();
  } else {
    $target_dir1 = "images/licence/";
    $target_dir2 = "images/companyLogo/";
    $target_file1 = $target_dir1.md5(time()).basename($_FILES["image1"]["name"]);

    $target_file2 = $target_dir2.md5(time()).basename($_FILES["image2"]["name"]);

    $uploadOk = 1;
    $uploadOk2 = 1;
    $imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));

    $imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
    $check1 = getimagesize($_FILES["image1"]["tmp_name"]);
    if($check1 !== false) {
        $uploadOk = 1;
    } else{
        $uploadOk = 0;
    } 

    $check2 = getimagesize($_FILES["image2"]["tmp_name"]);
    if($check2 !== false) {
        $uploadOk2 = 1;
    } else{
        $uploadOk2 = 0;
    }
        // Allow certain file formats
    if($imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg" && $imageFileType1 != "gif" ) {
     
        $uploadOk = 0;
    }

    if($imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "jpeg" && $imageFileType2 != "gif" ) {
     
        $uploadOk2 = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0 || $uploadOk2 == 0  ) {
      $data['errorMessage'] = "Something is not right with the file.";
    } else {

      if (move_uploaded_file($_FILES["image1"]["tmp_name"],"../".$target_file1) && move_uploaded_file($_FILES["image2"]["tmp_name"],"../".$target_file2)) {
        $data = [
          'name'=>$cName,
          'address'=>$cAddress,
          'email'=>$cEmail,
          'password'=>$cPassword,
          'phone'=>$cPhone,
          'company_description'=>$cDesc,
          'state'=> $cState,
          'district'=> $cDistrict,
          'trade_license'=>$target_file1,
          'logo'=>$target_file2
          
        ];

     //   cName cPhone cEmail cDesc cPassword cAddress cState cDistrict image1 image2
        
              // id	
              // email	
              // phone	
              // password	
              // name	
              // company_description	
              // address	
              // state	
              // district	
              // trade_license	
              // logo	
              // status
              // 0:inactive, 1:uploaded, 2:verified
              // user_type

        $create = $crud->Create($data,"company");

        if($create) {
            $data['successMessage'] = "Company Created Successfully";

            // // sEnd mail
            // $to = $email; 
            // $from = 'founder@smartbtr.com'; 
            // $fromName = 'Willson Marandi'; 
             
            // $subject = "Welcome to SmartBTR Core Team"; 
             
            // $htmlContent = ' 
            //     <html> 
            //     <head> 
            //         <title>Welcome to SmartBTR</title> 
            //     </head> 
            //     <body> 
            //         <h4>You have been requested to manage the Admin Panel!</h4> 
            //         <p>Please use the following information to log in...</p>
            //         <table cellspacing="0" style="border: 2px dashed #FB4314; width: 100%;"> 
            //             <tr> 
            //                 <th>Username:</th><td>'.$username.'</td> 
            //             </tr> 
            //             <tr> 
            //                 <th>Email:</th><td>'.$email.'</td> 
            //             </tr> 
            //             <tr> 
            //                 <th>Password:</th><td>'.$displayPass.'</td> 
            //             </tr> 
                         
            //             <tr> 
            //                 <th>Website:</th><td><a href="https://www.smartbtr.com/admin">SmartBTR Private Limited</a></td> 
            //             </tr> 
            //         </table> 
            //     </body> 
            //     </html>'; 
             
            // // Set content-type header for sending HTML email 
            // $headers = "MIME-Version: 1.0" . "\r\n"; 
            // $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
             
            // // Additional headers 
            // $headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
            // $headers .= 'Cc: contact@smartbtr.com' . "\r\n"; 
            // $headers .= 'Bcc: smartbtr5@gmail.com' . "\r\n"; 
             
            // // Send email 
            // if(mail($to, $subject, $htmlContent, $headers)){ 
            //     $data['emailMessage']=' Your Credentials Have Been Sent Through Email.'; 
            // }else{ 
            //     $data['emailMessage']=' We Could Not Send the email. Please Login Using the credentials you used.'; 
               
            // }
        } 
      } else {
          $data['errorMessage'] = "Error Uploading File.";
      }
    }
  }

  
  echo json_encode($data);
}
?>