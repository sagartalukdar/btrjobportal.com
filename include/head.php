<?php 
session_start();
include 'classes/Crud.php';
$crud = new Crud();
$joblist = $crud->Read('job_listing', "1 order by `id` desc limit 8");
$counter_value = 0;
$readCounter = $crud->Read("counter","1");

// counter read
if ($readCounter) {
    $counter_value = $readCounter[0]['counter_value']+1;
} else {
    $data = [
        'counter_value'=>1
    ];
    $createCounter = $crud->Create($data,"counter");
    if ($createCounter) {
        $counter_value = 1;
    }
}

$updateData = [
'counter_value' => $counter_value
];
$updateCounter = $crud->Update("counter",$updateData,"1");

?>

<!DOCTYPE html>

<html lang="en">


<head>
    <meta charset="utf-8" />
    <title>BTR Job - Job Portal for Employment Seeker and Recruiter</title>
    <!-- <meta content="width=device-width, initial-scale=1.0" name="viewport" /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="theme-color" content="#1c2023">
     
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#1c2023">
     
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#1c2023">
    <meta name="description" content="SmartBTR" />
    <meta name="keywords" content="SmartBTR" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <!--smart theme style -->
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.css" />
    <link rel="stylesheet" type="text/css" href="css/flaticon.css" />
    <link rel="stylesheet" type="text/css" href="css/style_II.css" />
    <link rel="stylesheet" type="text/css" href="css/custom.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive2.css" />

    <!-- favicon links -->
    <link rel="shortcut icon" type="image/png" href="images/btr-logo.png" />
    </head>
