<?php include("include/head.php");?>
<?php
 if(isset($_SESSION['userType'])){
    if($_SESSION['userType']!='APPLICANT'){
       header("location: 403_error");
       exit();
    }
 }
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"
    integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
<link rel="stylesheet" href="assets/css/customindex.css" id="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />



<body class="bg-light">

    <!-- Preloader -->
    <!-- <?php include("include/preloader.php");?> -->

    <!-- Default Nav -->
    <?php include("include/header.php");?>

    <?php include("include/horizontal-navbar.php");?>


    <?php include("include/sidebar.php");?>



    <!-- CODE -->
    <!-- if user then name variable = coulumnName -->

    <!-- IF NAME NOT NULL THEN DISPLAY NAME ELSE DISPLAY EMAIL. -->


    <!-- Main Wrapper-->
    <main class="main-wrapper">
        <div class="container-fluid">
            <div class="inner-contents">
                <div
                    class="page-header d-flex align-items-start align-items-md-center justify-content-between flex-wrap mr-bottom-20 gap-4">
                    <div class="left-part">
                        <h2 class="text-dark">Interview</h2>
                        <p class="text-gray mb-0">Job Invitations </p>
                    </div>

                </div>

                <div style="display: grid;gap: 2rem; grid-template-columns: repeat(auto-fit,minmax(200px,1fr));">

                    <?php
$applicant_id = $_SESSION["this_user_id"];

// Read job applications for the specific applicant
$job_applications = $crud->Read("job_applied", "`applicant_id`='$applicant_id' AND `status`=4");

if ($job_applications) {
    foreach ($job_applications as $application) {
        $job_id = $application['job_id'];
        $company_id = $application['company_id'];

        // Read job details from the job listing table
        $job_details = $crud->Read("job_listing", "`id`='$job_id'");

        if ($job_details) {
            $job_type = $job_details[0]['jobtype'];
            $job_title = $job_details[0]['job_title'];

            // Read company name from the company table
            $company_details = $crud->Read("company", "`id`='$company_id'");

            if ($company_details) {
                $company_name = $company_details[0]['name'];
                $company_logo = $company_details[0]['logo'];
                ?>
                    <div class="" style="">
                        <a href="Interview-new?applicant_id=<?php echo $applicant_id ; ?>">
                            <div class="col">
                                <div class="card border-0">
                                    <div class="card-body" style="padding-bottom: 100px;">
                                        <div class="d-flex justify-content-between mb-3">
                                            <div class="card-content" style="height: 90px;padding-bottom: 10px;">
                                                <div class="com_logo">
                                                    <?php
                                                     if(!empty($company_logo)){
                                                    ?>
                                                    <img src="uploads/<?php echo $company_logo; ?>"
                                                        style="max-width: 70px">
                                                    <?php
                                                     }else{
                                                    ?>
                                                    <img src="assets/img/icons/office.gif" style="max-width: 70px">
                                                    <?php
                                                     }
                                                    ?>
                                                </div>
                                                <div class="com_name">
                                                    <h5 class="text-dark mb-1">
                                                        <?php 
                                                          if(strlen($company_name)>20){
                                                            echo substr($company_name,0,20).' ...';
                                                          }
                                                          else echo $company_name; 
                                                        ?>
                                                    </h5>
                                                    <p>
                                                        <?php echo $job_title;  ?>   
                                                    </p>
                                                    <p></p>
                                                    <p></p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Avatar Div-->

                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                            <?php
                                }
                        
                                        }
                                    }
                                } else {
                                    echo '<h3 class="text-center" style="color: red;margin-top: 10%;">No reponse found!</h3>';
                                }
                            ?>
                </div>

            </div>
        </div>
    </main>

    <?php include("include/footer.php") ?>

</body>


</html>