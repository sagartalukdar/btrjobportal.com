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

       
        if (!move_uploaded_file($_FILES["image2"]["tmp_name"], $target_file_logoimage)) {
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

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file_qualification)) {
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
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Error updating company information']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error while uploading trade license file']);
    }
}
?>
