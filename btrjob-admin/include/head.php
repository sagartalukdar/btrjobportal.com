<?php 
session_start();
if (empty($_SESSION['this_user_id'])) {
   $_SESSION['errorLogin'] = "Access Denied!";
   // echo $_SESSION['this_user_id'];
   header('location:../login/login.php');
   exit();
} else {
   include '../classes/Crud.php';
   $crud = new Crud();
   date_default_timezone_set("Asia/Kolkata");
   $today = date("Y-m-d");
   $time = date("H:i:s");
   
   $filename=basename($_SERVER['PHP_SELF']);
   $pathinfo=pathinfo($filename);
   $pageName=basename($filename, '.' . $pathinfo['extension']);
   $pageName=ucwords(str_replace("-", " ", $pageName));
   $pageName=ucwords(str_replace("_", " ", $pageName));
   $pageName=ucfirst($pageName);

   // $userName =  $_SESSION['this_user_name'];
   $userType = $_SESSION['userType'];
   $userID = $_SESSION['this_user_id'];
   $userMail = $_SESSION['userMail'];
   // $userImage = $_SESSION['user_image'];
 
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <meta name="description" content="SmartBTR">
        <meta name="author" content="">

        <!-- Favicon and touch Icons -->
        <link href="assets/img/logo.png" rel="shortcut icon" type="image/png">
        <link href="assets/img/apple-touch-icon.html" rel="apple-touch-icon">
        <link href="assets/img/apple-touch-icon-72x72.html" rel="apple-touch-icon" sizes="72x72">
        <link href="assets/img/apple-touch-icon-114x114.html" rel="apple-touch-icon" sizes="114x114">
        <link href="assets/img/apple-touch-icon-144x144.html" rel="apple-touch-icon" sizes="144x144">

        <!-- Page Title -->
        <title>BTR JOB | Dashboard</title>
        
        <!-- Styles Include -->
        <link rel="stylesheet" href="assets/css/main.css" id="stylesheet">
        <link rel="stylesheet" href="assets/buttons.dataTables.css" id="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
     
     </head> 