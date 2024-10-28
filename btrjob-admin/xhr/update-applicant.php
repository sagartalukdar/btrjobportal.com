<?php
session_start();
error_reporting(E_ALL);

if (isset($_SESSION['userType']) && $_SESSION['userType'] == "APPLICANT") {
    include '../../classes/Crud.php';
    $crud = new Crud();
    date_default_timezone_set("Asia/Kolkata");
} else {
    $_SESSION['errorLogin'] = "Access Denied!";
    header('location: ../login.php');
    exit();
}

if (isset($_POST['applicantID'])) {
    extract($_POST);

    $data = [
        'address' => $address,
        'state' => $state,
        'district' => $district,
        'qualification' => $qualification,
        'experience' => $experience,
    ];

    if (!empty($_FILES["image3"]["name"])) {
        $target_dir_image3 = "../uploads/idimage/";
        $target_file_image3 = $target_dir_image3 . md5(time()) . basename($_FILES["image3"]["name"]);
        $imageFileType = strtolower(pathinfo($_FILES["image3"]["name"], PATHINFO_EXTENSION));
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo json_encode(['status' => 'error', 'message' => 'Invalid file type for ID image']);
            exit;
        }
        if (!move_uploaded_file($_FILES["image3"]["tmp_name"], "" . $target_file_image3)) {
            echo json_encode(['status' => 'error', 'message' => 'Error uploading ID image']);
            exit;
        }
        $data['id_img'] = $target_file_image3;
    }

    if (!empty($_FILES["image2"]["name"])) {
        $target_dir_image2 = "../uploads/experiencepdf/";
        $target_file_image2 = $target_dir_image2 . md5(time()) . basename($_FILES["image2"]["name"]);
        $pdfFileType = strtolower(pathinfo($_FILES["image2"]["name"], PATHINFO_EXTENSION));
        if ($pdfFileType != "pdf") {
            echo json_encode(['status' => 'error', 'message' => 'Invalid file type for experience PDF']);
            exit;
        }
        if (!move_uploaded_file($_FILES["image2"]["tmp_name"], "" . $target_file_image2)) {
            echo json_encode(['status' => 'error', 'message' => 'Error uploading experience PDF']);
            exit;
        }
        $data['experience_img'] = $target_file_image2;
    }

    if (!empty($_FILES["image1"]["name"])) {
        $target_dir_image1 = "../uploads/qualificationPdf/";
        $target_file_image1 = $target_dir_image1 . md5(time()) . basename($_FILES["image1"]["name"]);
        $pdfFileType = strtolower(pathinfo($_FILES["image1"]["name"], PATHINFO_EXTENSION));
        if ($pdfFileType != "pdf") {
            echo json_encode(['status' => 'error', 'message' => 'Invalid file type for qualification PDF']);
            exit;
        }
        if (!move_uploaded_file($_FILES["image1"]["tmp_name"], "" . $target_file_image1)) {
            echo json_encode(['status' => 'error', 'message' => 'Error uploading qualification PDF']);
            exit;
        }
        $data['qualification_img'] = $target_file_image1;
    }

    if (!empty($_FILES["image4"]["name"])) {
        $target_dir_image4 = "../uploads/cvpdf/";
        $target_file_image4 = $target_dir_image4 . md5(time()) . basename($_FILES["image4"]["name"]);
        $pdfFileType = strtolower(pathinfo($_FILES["image4"]["name"], PATHINFO_EXTENSION));
        if ($pdfFileType != "pdf") {
            echo json_encode(['status' => 'error', 'message' => 'Invalid file type for CV PDF']);
            exit;
        }
        if (!move_uploaded_file($_FILES["image4"]["tmp_name"], "" . $target_file_image4)) {
            echo json_encode(['status' => 'error', 'message' => 'Error uploading CV PDF']);
            exit;
        }
        $data['cv_img'] = $target_file_image4;
    }

    // Update the database with the new data
    $count = $crud->Count("applicant", "`id`='$applicantID'");
    if ($count == 1) {
        $update = $crud->Update("applicant", $data, "`id`='$applicantID'");
        if ($update) {
            echo json_encode(['status' => 'success', 'message' => 'Applicant information updated successfully']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Error updating applicant information']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Applicant not found']);
    }
}
?>
