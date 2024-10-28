<?php include("include/head.php");?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
<link rel="stylesheet" href="assets/css/customindex.css" id="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   </head>

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
    

        <!-- Main Wrapper-->
        <main class="main-wrapper">
            <div class="container-fluid">
                <div class="inner-contents">
                    <div class="page-header d-flex align-items-start align-items-md-center justify-content-between flex-wrap mr-bottom-20 gap-4">
                        <div class="left-part">
                            <h2 class="text-dark">Selected Applicants</h2>
                            <p class="text-gray mb-0">All of the selected applicants group by company, who got any job. </p>
                        </div>
                        
                    </div>
                    
                    <div style="display: grid;gap: 2rem; grid-template-columns: repeat(auto-fit,minmax(200px,1fr));">

                        <?php
                        $jobs = $crud->Read("job_listing", "1");
                        if ($jobs) {
                            $companyName = array(); // Initialize array to store company names
                            foreach ($jobs as $job) {
                                $comId = $job['company_id'];
                                $company = $crud->Read("company", "`id`=$comId");
                                if ($company) {
                                    $companyName[$comId] = $company[0]['name']; // Storing company ID with company name
                                    $companylogo = $company[0]['logo']; 
                                }
                            }
                            if (!empty($companyName)) {
                                asort($companyName); // Sort company names alphabetically
                          
                            foreach ($companyName as $companyId => $com) {
                                ?>
                                <a href="company-card?company_id=<?php echo $companyId; ?>&status=selected">
                                <div class="col">
                                    <div class="card border-0">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between mb-3">
                                                <div class="card-content" style="height: 90px;">
                                                    <img src="assets/img/icons/office.gif" style="max-width: 70px">
                                                    <h5 class="text-dark mb-1">
                                                        <?php 
                                                          if(strlen($com)>20){
                                                            echo substr($com,0,20).' ...';
                                                          }
                                                          else echo $com; 
                                                        ?>
                                                    </h5>                                                    
                                                </div>
                                            </div>
                                           
                                            <!-- Avatar Div-->
                                            <div class="avatar-content">
                                                <h6 class="fw-semibold" style="margin-top: 30px;color: rgb(63, 145, 97);margin-bottom: 0px;">Total Selection <i class="fa-solid fa-users pr-2" style="font-size: x-large;"></i> 
                                                </h6>
                                                        <?php
                                                          $applicantsCount=$crud->Count("job_applied","`company_id`=$companyId AND `status`=2");
                                                        ?>
                                                <div class="d-flex justify-content-between align-items-center gap-2 gap-sm-4 flex-wrap">
                                                    <div>                                                
                                                        <h5 style="color: rgb(216, 126, 67);">
                                                            <?php echo $applicantsCount; ?> <p class="ff-base fs-14 text-gray">Candidates</p>
                                                        </h5>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </a>
                                <?php
                            }
                        }
                        } else {
                            echo '<h3 class="text-center" style="color: red;margin-top: 10%;">No details found ! </h3>';
                        }
                        ?>
                    </div>

                </div>
            </div>
        </main>

      <?php include("include/footer.php") ?>    

    </body>


    </html>