<?php
session_start();
include '../../classes/Crud.php';
$crud = new Crud();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['job_title']) && isset($_POST['end_date'])) {

    date_default_timezone_set("Asia/Kolkata");
    $today = date("Y-m-d");
    extract($_POST);
    $company_id = $_SESSION['this_user_id'];

    $existing_job = $crud->Read("job_listing", "`company_id`='$company_id' AND `job_title`='$job_title'");
    if ($existing_job) {
        echo json_encode(['status' => 'error', 'message' => 'Job title already exists for this company']);
        exit;
    }

    // Check if the end date is not over
    // if ($end_date < $today) {
    //     echo json_encode(['status' => 'error', 'message' => 'End date is already over']);
    //     exit;
    // }

    $data = [
        'company_id' => $company_id,
        'job_title' => $job_title,
        'job_location' => $job_location,
        'Jobdescription' => $Jobdescription,
        'salary' => $salary,
        'qualification' => $qualification,
        'experience' => $experience,
        'state' => $state,
        'district' => $district,
        'category' => $category,
        'jobtype' => $jobtype,
        'date_posted' => $today,
        'last_date' => $end_date,
    ];

    // Create new record
    $create = $crud->Create($data, "job_listing");

    if ($create) {
        echo json_encode(['status' => 'success', 'message' => 'Job listing posted successfully']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error posting job listing']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Posting job listing failed']);
}
?>
