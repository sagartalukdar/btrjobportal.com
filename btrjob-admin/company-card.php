<?php include("include/head.php");?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
<link rel="stylesheet" href="assets/css/customindex.css" id="stylesheet">
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
        <?php
         $displayName = $crud->Read($table,"`id`='$userID'");
        if($displayName[0]['name']!==null){
            $name = $displayName[0]['name'];
            } else {
            $name = $displayName[0]['email'];
        }
        ?>
    
        <?php
           if(isset($_GET['status']) && $_GET['status']=="selected"){
        ?>
        
        <!-- Main Wrapper-->
        <main class="main-wrapper">
            <div class="container-fluid">
                <div class="inner-contents">
                    <div class="page-header d-flex align-items-start align-items-md-center justify-content-between flex-wrap mr-bottom-20 gap-4">
                        <div class="left-part">
                            <h2 class="text-dark">Selected Applicants</h2>
                            <p class="text-gray mb-0"> selected applicants for this company group by this company posted jobs. </p>
                        </div>
                    </div>
                    
                    
                    <div class="mb-6 text-md-end">
                        <!-- Classic Tab -->
                        <style>
                            .nav-items{
                                height: auto;
                                width: auto;
                                padding: 5px 30px;
                                border: .2px solid rgb(229, 108, 253);
                                border-radius: 35px;
                                margin: 6px;                                
                            }
                            .nav-items.clicked{
                              background: linear-gradient(rgb(233, 201, 225),rgb(155, 123, 155) 40%,rgb(167, 134, 162) 70%);
                              border: none;                            
                            }                           
                            .nav-items p{
                               margin: 10px 6px;  
                               display: flex;
                               justify-content: center;
                               align-items: center; 
                               color:#686565;
                               font-weight: 600;    
                            }
                            .nav-items.clicked a{
                                color:#ffff;
                                font-weight: 600;    
                                font-size: x-large;
                            }
                        </style>
                        <ul class="nav nav-tabs mb-0 justify-content-center justify-content-md-start ">
                            <?php
                              if(isset($_GET['company_id'])){
                                $companyId=$_GET['company_id'];
                                $jobsInCompany=$crud->Read("job_listing","`company_id`=$companyId");
                                if($jobsInCompany){
                                    foreach($jobsInCompany as $jobs){
                            ?>
                             <li class="">
                                <a href="selected-applicant-by-job?job_id=<?php echo $jobs['id'] ?>&company_id=<?php echo $companyId; ?>&job=<?php echo $jobs['job_title'] ?>">
                                    <div class="nav-items ">
                                        <p><?php echo $jobs['job_title'] ?></p>
                                    </div>  
                                </a>                              
                            </li>
                            <?php
                                    }
                                    }
                                    else{
                                        echo '<h3 class="text-center" style="color: red;margin-top: 10%;">No details found ! </h3>';
                                    }
                                }                            
                             
                            ?>                           
                           
                        </ul>

                    </div>
                   
                </div>
            </div>
        </main>

        <?php           
           }
           else if(isset($_GET['status']) && $_GET['status']=="rejected"){
        ?>
        <!-- Main Wrapper-->
        <main class="main-wrapper">
            <div class="container-fluid">
                <div class="inner-contents">
                    <div class="page-header d-flex align-items-start align-items-md-center justify-content-between flex-wrap mr-bottom-20 gap-4">
                        <div class="left-part">
                            <h2 class="text-dark">Rejected Applicants</h2>
                            <p class="text-gray mb-0"> rejected applicants for this company group by this company posted jobs. </p>
                        </div>
                    </div>
                    
                    
                    <div class="mb-6 text-md-end">
                        <!-- Classic Tab -->
                        <style>
                            .nav-items{
                                height: auto;
                                width: auto;
                                padding: 5px 30px;
                                border: .2px solid rgb(229, 108, 253);
                                border-radius: 35px;
                                margin: 6px;                                
                            }
                            .nav-items.clicked{
                              background: linear-gradient(rgb(233, 201, 225),rgb(155, 123, 155) 40%,rgb(167, 134, 162) 70%);
                              border: none;                            
                            }                           
                            .nav-items p{
                               margin: 10px 6px;  
                               display: flex;
                               justify-content: center;
                               align-items: center; 
                               color:#686565;
                               font-weight: 600;    
                            }
                            .nav-items.clicked a{
                                color:#ffff;
                                font-weight: 600;    
                                font-size: x-large;
                            }
                        </style>
                        <ul class="nav nav-tabs mb-0 justify-content-center justify-content-md-start ">
                            <?php
                              if(isset($_GET['company_id'])){
                                $companyId=$_GET['company_id'];
                                $jobsInCompany=$crud->Read("job_listing","`company_id`=$companyId");
                                if($jobsInCompany){
                                    foreach($jobsInCompany as $jobs){
                            ?>
                             <li class="">
                                <a href="rejected-applicant-by-job?job_id=<?php echo $jobs['id'] ?>&company_id=<?php echo $companyId; ?>&job=<?php echo $jobs['job_title'] ?>">
                                    <div class="nav-items ">
                                        <p><?php echo $jobs['job_title'] ?></p>
                                    </div>  
                                </a>                              
                            </li>
                            <?php
                                    }
                                    }
                                    else{
                                        echo '<h3 class="text-center" style="color: red;margin-top: 10%;">No details found ! </h3>';
                                    }
                                }                            
                             
                            ?>                           
                           
                        </ul>

                    </div>
                   
                </div>
            </div>
        </main>

        <?php
            
           }
        ?>



      <?php include("include/footer.php") ?>    

    </body>


    </html>