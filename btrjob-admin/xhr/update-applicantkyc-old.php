<?php
session_start();
include '../../classes/Crud.php';
$crud = new Crud();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['application_id'])) {
    extract($_POST);

    // Check for file upload errors
    if ($_FILES["image1"]["error"] != 0) {
        echo json_encode(['status' => 'error', 'message' => 'Error uploading qualification file']);
        exit;
    }

    if ($_FILES["image2"]["error"] != 0) {
        echo json_encode(['status' => 'error', 'message' => 'Error uploading experience file']);
        exit;
    }
    if ($_FILES["image3"]["error"] != 0) {
        echo json_encode(['status' => 'error', 'message' => 'Error uploading idimage file']);
        exit;
    }
    if ($_FILES["image4"]["error"] != 0) {
        echo json_encode(['status' => 'error', 'message' => 'Error uploading cvpdf file']);
        exit;
    }

    $target_dir_qualificationPdf = "../uploads/qualificationPdf/";
    $target_file_qualificationPdf = $target_dir_qualificationPdf . md5(time()) . basename($_FILES["image1"]["name"]);
     $pdfFileType = strtolower(pathinfo($target_file_qualificationPdf, PATHINFO_EXTENSION));

    $target_dir_experiencepdf = "../uploads/experiencepdf/";
    $target_file_experiencepdf = $target_dir_experiencepdf . md5(time()) . basename($_FILES["image2"]["name"]);
    $pdfFileType = strtolower(pathinfo($target_file_experiencepdf, PATHINFO_EXTENSION));
    
    $target_dir_idimage = "../uploads/idimage/";
    $target_file_idimage = $target_dir_idimage . md5(time()) . basename($_FILES["image3"]["name"]);

    // Check file type for ID image
    $imageFileType_idimage = strtolower(pathinfo($target_file_idimage, PATHINFO_EXTENSION));

    



    $target_dir_cvpdf = "../uploads/cvpdf/";
    $target_file_cvpdf  = $target_dir_cvpdf. md5(time()) . basename($_FILES["image4"]["name"]);
    $pdfFileType = strtolower(pathinfo($target_file_cvpdf, PATHINFO_EXTENSION));

    // File type validation
    if ($imageFileType_idimage != "jpg" && $imageFileType_idimage != "png" && $imageFileType_idimage != "jpeg" ) {
        echo json_encode(['status' => 'error', 'message' => 'Invalid image file type']);
        exit;
    }

    if ($pdfFileType != "pdf") {
        echo json_encode(['status' => 'error', 'message' => 'Invalid qualification file type']);
        exit;
    }

    // Attempt file uploads
    if (move_uploaded_file($_FILES["image1"]["tmp_name"], $target_file_qualificationPdf) &&
        move_uploaded_file($_FILES["image2"]["tmp_name"], $target_file_experiencepdf) &&  move_uploaded_file($_FILES["image3"]["tmp_name"], $target_file_idimage) &&  move_uploaded_file($_FILES["image4"]["tmp_name"], $target_file_cvpdf )) {

        // Check if email or phone already exists
           
        $data = [
            
        'name' => $name,
        
        'gender' => $gender,
        'address' => $address,
        'state' => $state,
        'district' => $district,
        'qualification' => $qualification,
        'experience' => $experience,
        // 'profile_img' => $target_file_qualification,
        'qualification_img' => $target_file_qualificationPdf,
        'experience_img' => $target_file_experiencepdf,
        'id_img' => $target_file_idimage,
        'cv_img' => $target_file_cvpdf,
        'status' =>'1',
        
    ];
        // Create new record
       $update = $crud->Update("applicant", $data, "id = $application_id");

        if ($update) {
            echo json_encode(['status' => 'success', 'message' => 'Company information updated successfully']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Error updating company information']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error while uploading files']);
    }
}
?>
