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
    
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        
        $userId = $_POST['userId'];
        
        $target_dir = "../uploads/logoimage/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
           
          $data = [
                    'logo'=>$target_file,
                  ];
            $updateImage = $crud->Update("company",$data,"`id`='$userId'");

            if ($updateImage) {
                $data['successMessage'] = "User image updated successfully";
            } else {
                $data['errorMessage'] = "Error updating user image.";
            }
        } else {
            $data['errorMessage'] = "Sorry, there was an error uploading your file.";
        }
    } else {
        $data['errorMessage'] = "No file uploaded or file upload error occurred.";
    }
    
    echo json_encode($data);
}
?>
