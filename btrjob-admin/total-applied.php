
<?php include("include/head.php");?>
<?php
 if(isset($_SESSION['userType'])){
    if($_SESSION['userType']!='ADMIN' && $_SESSION['userType']!='COUNSELLOR'){
       header("location: 403_error");
       exit();
    }
 }
?>
<link rel="stylesheet" href="assets/css/badges.css">
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.dataTables.css">
<!-- datatable link -->

<body class="bg-light">

     <!-- Preloader -->
        <?php include("include/preloader.php");?>


    <!-- Default Nav -->
    <?php include("include/header.php");?>

    <?php include("include/horizontal-navbar.php");?>

    <?php include("include/sidebar.php");?>


    <!-- Main Wrapper-->
    <main class="main-wrapper">

        <div class="container">
    
        </div>


        <div class="container-fluid">
            <div class="inner-contents">
                <div class="page-header d-flex align-items-center justify-content-between mr-bottom-30">
                    <div class="left-part">
                        <h2 class="text-dark">Candidates applied</h2>
                        <p class="text-gray mb-0"> all applicants, who applied for any job in this portal .</p>
                    </div>

                </div>

            </div>
        
            <div class="row">

                <div class="col-lg-12">
                    <!-- Table Two  -->
                    <div class="card border-0 p-5">
                        <div
                            class="card-header pb-5 bg-transparent border-0 d-flex align-items-center justify-content-between gap-3">
                            <h4 class="mb-0">Applicants Info</h4>
                            <div class="ms-auto d-flex align-items-center gap-3">
                                <div class="dropdown">
                                    <a href="#" data-bs-toggle="dropdown" class="fs-24 text-gray">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="card-body p-0">
                            <div class="table-responsive">
                               
                                <!-- datatable -->
                                <table id="example" class="display nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                           <th>Sl no.</th>
                                            <th>Status</th>
                                            <th>Applicant Name</th>                                           
                                            <th>Applicant Email</th>
                                            <th>Applicant Phone</th>
                                            <th>Applied Company/Business</th>  
                                            <th>Company/Business Location</th> 
                                            <th>Job title</th> 
                                            <th>Job category</th> 
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $readJob = $crud->Read("job_applied", "1 order by `id` desc");
                                            if ($readJob) {
                                            $n = 0; 
                                            foreach ($readJob as $job) {
                                                $applicant_id = $job['applicant_id'];
                                                $company_id = $job['company_id'];
                                                $job_id = $job['job_id']; 
                                                $status = $job['status'];

                                                $readApplicant = $crud->Read("applicant", "`id`=$applicant_id");
                                                if ($readApplicant) {
                                                    $applicant=$readApplicant[0];
                                                }
                                                $readCompany = $crud->Read("company", "`id`=$company_id");
                                                if ($readCompany) {
                                                    $company=$readCompany[0];
                                                }
                                                $appliedJob = $crud->Read("job_listing", " `company_id`=$company_id and `id`=$job_id");
                                                if ($appliedJob) {
                                                    $jobapply=$appliedJob[0];
                                                }
                                                ?>
                                                
                                                <tr>
                                                    <td><?php echo ++$n; ?></td>
                                                    <td>
                                                        <?php
                                                        if ($status == 1) {
                                                            echo '<span class="custom-badge-pending">Pending</span>';
                                                        } elseif ($status == 2) {
                                                            echo '<span class="custom-badge-hire">Selected</span>';
                                                        } elseif ($status == 3) {
                                                            echo '<span class="custom-badge-reject">Rejected</span>';
                                                        } elseif ($status == 4) {
                                                            echo '<span class="custom-badge-interview">Interview</span>';
                                                        } else {
                                                            // Handle other cases if needed
                                                            echo '<span class="badge badge-pill badge-secondary">Unknown</span>';
                                                        }
                                                        ?>
                                                    </td>

                                                    <td><?php echo $applicant['name'];?></td>
                                                    <td><?php echo $applicant['email'];?></td>
                                                    <td><?php echo $applicant['phone'];?></td>
                                                    <td><?php echo $company['name'];?></td>
                                                    <td><?php echo $jobapply['job_location'];?></td>
                                                    <td><?php echo $jobapply['job_title'];?></td>
                                                    <td><?php echo $jobapply['category'];?></td>
                                                    
                                                   
                                                    
                                                </tr>

                                                <?php
                                                
                                                }
                                            }
                                            else{
                                                echo '<h3 class="text-danger text-center">No details found.</h3>';
                                                }
                                        
                                        ?>
                                        
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                           <th>Sl no.</th>
                                            <th>Status</th>
                                            <th>Applicant Name</th>                                           
                                            <th>Applicant Email</th>
                                            <th>Applicant Phone</th>
                                            <th>Applied Company/Business</th>  
                                            <th>Company/Business Location</th> 
                                            <th>Job title</th> 
                                            <th>Job category</th> 
                                        
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
<style type="text/css">
    .apply{
        float: left;
  width: 100%;
  padding-right: 20px;
  padding-left: 20px;
  height: 30px;
  line-height: 30px;
  text-align: center;
  background: linear-gradient(135deg,#21db84,#5197d0);
  color: #ffffff;
  font-size: 14px;
  text-transform: uppercase;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  border-radius: 5px;
  box-shadow: 3px 3px #eeb407;
  font-weight: 700;
}
</style>

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