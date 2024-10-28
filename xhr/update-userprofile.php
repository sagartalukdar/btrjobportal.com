<?php
session_start();

// Check if the user is logged in and has necessary permissions (not shown in this example)
// if (!isset($_SESSION['userType']) || ($_SESSION['userType'] != "ADMIN" && $_SESSION['userType'] != "COUNSELLOR")) {
//     $_SESSION['errorLogin'] = "Access Denied!";
//     header('location: ../view-user.php');
//     exit();
// }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '../../classes/Crud.php';
    $crud = new Crud();
    
    
        
        $userId = $_POST['userId'];
        
       
    
           
          $data = [
                    'id'=>$userId,
                    'name'=>$_POST['fname'],
                    'surname'=>$_POST['lname'],
                    'phone'=>$_POST['phone']
                  ];
            $updateImage = $crud->Update("users",$data,"`id`='$userId'");

            if ($updateImage) {
                $data['successMessage'] = "User Profile updated successfully";
            } else {
                $data['errorMessage'] = "Error updating user profile.";
            }

    
    echo json_encode($data);
}
?>
