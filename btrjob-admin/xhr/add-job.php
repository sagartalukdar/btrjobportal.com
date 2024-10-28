

<?php
session_start();
include '../../classes/Crud.php';
$crud = new Crud();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['job_title']) && isset($_POST['end_date'])) {

    date_default_timezone_set("Asia/Kolkata");
    $today = date("Y-m-d");
    extract($_POST);
    $company_id = $_SESSION['this_user_id'];

    $company = $crud->Read("company", "`id`='$company_id'");
    
    if($company){

        if($company[0]['status']==0){
            echo json_encode(['status' => 'error', 'message' => 'you must upload your KYC. ']);
            exit;
        }else if($company[0]['status']==1){
            echo json_encode(['status' => 'error', 'message' => 'After the admin or counselor verifies you, then only you can add any job.']);
            exit;
        }
        else if($company[0]['status']==2){



            $target_file_advertisementPdf = "";
            if (!empty($_FILES["advertisementPdf"]["tmp_name"])) {
                if ($_FILES["advertisementPdf"]["error"] != 0) {
                    echo json_encode(['status' => 'error', 'message' => 'Error uploading advertisement file']);
                    exit;
                }
        
                $target_dir_advertisementPdf = "../uploads/advertisementPdf/";
                $target_file_advertisementPdf = $target_dir_advertisementPdf . md5(time()) . basename($_FILES["advertisementPdf"]["name"]);
                $pdfFileType = strtolower(pathinfo($target_file_advertisementPdf, PATHINFO_EXTENSION));
        
                if ($pdfFileType != "pdf") {
                    echo json_encode(['status' => 'error', 'message' => 'Invalid advertisement file type']);
                    exit;
                }
        
                if (!move_uploaded_file($_FILES["advertisementPdf"]["tmp_name"], $target_file_advertisementPdf)) {
                    echo json_encode(['status' => 'error', 'message' => 'Error uploading advertisement file']);
                    exit;
                }
            }



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
                'company_advertisement' => $target_file_advertisementPdf
            ];

             // Create new record
                $create = $crud->Create($data, "job_listing");

                if ($create) {
                    $data['status']='success';
                    echo json_encode($data);
                } else {
                    echo json_encode(['status' => 'error', 'message' => 'Error posting job listing']);
                }
        
        }
        else if($company[0]['status']==3){
            echo json_encode(['status' => 'error', 'message' => 'you are rejected by admin / counsellor.']);
            exit; 
        }
        else{
            echo json_encode(['status' => 'error', 'message' => 'something went wrong.']);
            exit; 
        }   
   
    } else {
        echo json_encode(['status' => 'error', 'message' => 'you are not registered.']);
    }

}else{
    echo json_encode(['status' => 'error', 'message' => 'Posting job listing failed']);
}
?>

