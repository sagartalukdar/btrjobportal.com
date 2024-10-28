
<?php include("include/head.php");?>
<?php
 if(isset($_SESSION['userType'])){
    if($_SESSION['userType']!='ADMIN' && $_SESSION['userType']!='COUNSELLOR'){
       header("location:403_error");
       exit();
    }
 }
?>

<body class="bg-light">

     <!-- Preloader -->
        <?php include("include/preloader.php");?>


    <!-- Default Nav -->
    <?php include("include/header.php");?>

    <?php include("include/horizontal-navbar.php");?>

    <?php include("include/sidebar.php");?>





    <!-- Main Wrapper-->
    <main class="main-wrapper">
        <div class="container-fluid">
           
              <div class="inner-contents">
                <div class="page-header d-flex align-items-center justify-content-between mr-bottom-30">
                    <div class="left-part">
                        <h2 class="text-dark">Applicant Details</h2>
                        <p class="text-gray mb-0">You can Verify Or Reject applicants.</p>
                    </div>

                </div>

            </div>
        

            <div class="row">

                <div class="col-lg-12">
                    <!-- Table Two  -->
                    <div class="card border-0 p-5">
                        <!--<div-->
                        <!--    class="card-header pb-5 bg-transparent border-0 d-flex align-items-center justify-content-between gap-3">-->
                        <!--    <h4 class="mb-0">Applicants Info</h4>-->
                           
                        <!--</div>-->
                        <div class="card-body p-0">
                            <?php
                            $readApplicant = $crud->Read("applicant", "`status`='1' order by `id` desc");
                            
                            if ($readApplicant && count($readApplicant) > 0) {
                                ?>
                            <div class="table-responsive">
                                <table id="table-2" class="display text-center">
                                    <thead>
                                        <tr>
                                            <th>
                                                <input type="checkbox" class="form-check-input" name="checkbox1"
                                                    value="">
                                            </th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Documents</th>
                                            <th>Gender</th>
                                            <th>State</th>
                                            <th>District</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $readApplicant=$crud->Read("applicant","`status`='1' order by `id` desc"); 
                                        if($readApplicant){ 
                                            foreach($readApplicant as $applicant){
                                    ?>

                                    <!--                                     
                                    Full texts
                                    id	
                                    name	
                                    email	
                                    phone	
                                    password	
                                    gender	
                                    address	
                                    state	
                                    district	
                                    qualification	
                                    experience	
                                    profile_img	
                                    qualification_img	
                                    experience_img	
                                    id_img	
                                    cv_img	
                                    status	
                                    user_type -->
                                        <tr>
                                            <td>
                                                <input type="checkbox" class="form-check-input" name="checkbox1"
                                                    value="">
                                            </td>
                                            <td>
                                                <div class="employee d-flex gap-2 flex-wrap">
                                                    <div class="profilepicture flex-shrink-0 d-none d-xl-block">
                                                        <img src="uploads/<?php echo $applicant["profile_img"] ; ?>" alt="img" width="100px" height="80px">
                                                    </div>
                                                    <div class="description">
                                                        <h6 class="mb-0"><?php echo $applicant["name"] ?></h6>
                                                     
                                                    </div>
                                                </div>
                                            </td>
                                            <td><?php echo $applicant["email"]; ?></td>
                                            <td><?php echo $applicant["phone"]; ?></td>
                                            <td>
                                                
                                                <a href="applicant-document?doc_id=<?php echo $applicant["id"]; ?>" > <span class="badge badge-soft-warning"> Check </span>   
                                             </a>
                                                    
                                                    
                                            </td>
                                            <td><?php echo $applicant["gender"]; ?></td>
                                            <td><?php echo $applicant["state"]; ?></td>
                                            <td><?php echo $applicant["district"]; ?></td>
                                           
                                        </tr>
                                    <?php 
                                    }}
                                    else {
                                    
                                    }
                                    ?>
                                
                                    </tbody>
                                </table>
                            </div>
                            <?php
                            } else {
                                ?>
                                <h2 class="text-center" style="color: #009fff;">All Applicants Verification are done</h2>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
               
            </div>
          
        </div>
    </main>


    <?php include("include/footer.php") ?>


     


   

</body>

</html>