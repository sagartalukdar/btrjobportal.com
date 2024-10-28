

<?php include("include/head.php");?>
<?php
$applicant_id=$_SESSION["this_user_id"];
if(isset($_SESSION['userType'])){
    if($_SESSION['userType']!='APPLICANT'){
       header("location: 403_error");
       exit();
    }
 }
?>
<!-- datatable link -->
<link rel="stylesheet" href="assets/css/badges.css">
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.dataTables.css">


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
                        <h2 class="text-dark">Selected applicants</h2>
                        <p class="text-gray mb-0"></p>
                    </div>

                </div>

            </div>
        
            <div class="row">

                <div class="col-lg-12">
                    <!-- Table Two  -->
                    <div class="card border-0 p-5">
                        <div
                            class="card-header pb-5 bg-transparent border-0 d-flex align-items-center justify-content-between gap-3">
                            <h4 class="mb-0">Applicants</h4>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">

                                <!-- datatable -->
                                <table id="example" class="display nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                           <th>Sl no.</th>
                                            <th>Status</th>
                                            <th>Company</th>
                                           <th>Post</th>
                                           <th>Location</th>
                                            <th>Salary</th>
                                            <th>Category</th>
                                            <th>Job Type</th>
                                            <th>Applicant Name</th>
                                            <th>Applicant Phone</th>
                                            <th>Applicant Email</th>
                                            
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                          $applicant_id=$_SESSION["this_user_id"];
                                          $selects=$crud->Read("job_applied","`applicant_id`=$applicant_id and `status`=4 order by `id` desc");
                                          if($selects){
                                            $num=0;
                                            foreach($selects as $selected){
                                                $applicant_id=$selected["applicant_id"];
                                                $company_id=$selected["company_id"];
                                                $company=$crud->Read("company","`id`=$company_id");
                                                if($company){
                                                    $company_name=$company[0]["name"];
                                                }
                                                $app=$crud->Read("applicant","`id`=$applicant_id");
                                                if($app){
                                                    $applicant=$app[0];
                                                }
                                                $job_id=$selected["job_id"];
                                                $jobs=$crud->Read("job_listing","`id`=$job_id and `company_id`=$company_id");
                                                if($jobs){
                                                    $job=$jobs[0];
                                                }  
                                               
                                                
                                        ?>

                                            <tr>
                                                <td><?php echo ++$num; ?></td>
                                                <td><span class="custom-badge-interview">Invitation</span> </td> 
                                                <td><?php echo $company_name; ?></td>
                                                <td><?php echo $job["job_title"]; ?></td>
                                                <td><?php echo $job["job_location"]; ?></td>
                                                <td><?php echo $job["salary"]; ?></td>
                                                <td><?php echo $job["category"]; ?></td>
                                                <td><?php echo $job["jobtype"]; ?></td>
                                                <td><?php echo $applicant["name"]; ?></td>
                                                <td><?php echo $applicant["phone"]; ?></td>
                                                <td><?php echo $applicant["email"]; ?></td>
                                                
                                                                                               
                                            </tr>

                                        <?php
                                                
                                            }
                                          }else{
                                            echo  '<h3 class="text-warning text-center">No records found</h3>';
                                          }
                                        ?>
                                                                              
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                           <th>Sl no.</th>
                                            <th>Status</th>
                                            <th>Company</th>
                                           <th>Post</th>
                                            <th>Location</th>
                                            <th>Salary</th>
                                            <th>Category</th>
                                            <th>Job Type</th>
                                            <th>Applicant Name</th>
                                            <th>Applicant Phone</th>
                                            <th>Applicant Email</th>
                                            
                                            
                                        </tr>
                                    </tfoot>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
          
        </div>
    </main>


    <?php include("include/footer.php") ?>


    <!-- data table -->
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.0/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.print.min.js"></script>
    <script>
        new DataTable('#example', {
            layout: {
                topStart: {
                    buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                }
            }
        });
    </script>


</body>

</html>