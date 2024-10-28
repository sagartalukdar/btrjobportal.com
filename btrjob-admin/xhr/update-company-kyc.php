<?php
session_start();
include '../../classes/Crud.php';
$crud = new Crud();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['cid'])) {
    extract($_POST);
   

        $data = [
            'name' => $cname,
            'company_description' => $cdesc,
            'address' => $caddress,
            'phone'=>$cphone,
            'state' => $inputState,  
            'district' => $inputDistrict,
            // 'trade_license' => $target_file_qualification,
            // 'logo' => $target_file_logoimage,
            // 'status' => '1',
        ];

        $update = $crud->Update("company", $data, "id = $cid");

        if ($update) {
            echo json_encode(['status' => 'success', 'message' => 'Company information updated successfully']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Error updating company information']);
        }
   
}
?>
