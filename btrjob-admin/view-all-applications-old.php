<?php include("include/head.php");?>
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.dataTables.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.0/css/buttons.dataTables.css">

</head>

<body class="bg-light">

     <!-- Preloader -->
        <?php include("include/preloader.php");?>

    <!-- Default Nav -->
    <?php include("include/header.php");?>

    <?php include("include/horizontal-navbar.php");?>

    <?php include("include/sidebar.php");?>
   <style type="text/css">
       .reject{
        float: left;
  width: 100%;
  padding-right: 20px;
  padding-left: 20px;
  height: 30px;
  line-height: 30px;
  text-align: center;
  background: linear-gradient(135deg,#db2121,#d05181);
  color: #ffffff;
  font-size: 14px;
  text-transform: uppercase;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  border-radius: 5px;
box-shadow: 3px 3px #92b76e;
  font-weight: 700;
}
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
.fill-width{
    width: 100%;
}
   </style>
    <!-- Main Wrapper-->
    <main class="main-wrapper">

        <div class="container">
    
        </div>


        <div class="container-fluid">
            <div class="inner-contents">
                <div class="page-header d-flex align-items-center justify-content-between mr-bottom-30">
                    <div class="left-part">
                        <h2 class="text-dark">Applicant Details</h2>
                        <!-- <p class="text-gray mb-0">You can Update and Delete this details.</p> -->
                    </div>

                </div>

            </div>
         <?php 
            if (isset($_GET['job_id'])) {
                $jobid = $_GET['job_id'];
                $readjob = $crud->Read("job_applied", "`job_id`=$jobid");
               $companyid =$readjob[0]['company_id'];
               // $applicant_id =$readjob[0]['applicant_id'];
        }
        ?>
            <div class="row">

                <div class="col-lg-12">
                    <!-- Table Two  -->
                    <div class="card border-0 p-5">
                        <div
                            class="card-header pb-5 bg-transparent border-0 d-flex align-items-center justify-content-between gap-3">
                            
                            
                                <div class="row fill-width">
                                    <div class="col-lg-4 col-md-6"><h4 class="mb-0">All Applicants</h4></div>
                                    <div class="col-lg-4 col-md-6">
                                         <button class="reject" id="reject-all" data-jobid="<?php echo $jobid;?>"data-companyid="<?php echo $companyid;?>" >Reject all</button>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <button class="apply" id="interview" data-bs-toggle="modal" data-bs-target="#add-event"data-userid="<?php echo $userID;?>" data-usertype="<?php echo $userType;?>" data-jobid="<?php echo $jobid;?>"data-companyid="<?php echo $companyid;?>">Interview all</button>
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
                                           <th>Post</th>
                                           <th>Location</th>
                                            <th>Salary</th>
                                            <th>Applicant Name</th>
                                            <th>Applicant Phone</th>
                                            <th>Applicant Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $readjob = $crud->Read("job_listing", "`id`=$jobid");
                                    if ($readjob) {
                                        $n = 0; 
                                        foreach ($readjob as $job) {
                                            $job_title = $job['job_title'];
                                            $job_location = $job['job_location'];
                                            $job_salary = $job['salary'];
                                            $job_id = $job['id']; 
                                            $readApplicants = $crud->Read("job_applied", "`job_id`=$job_id");
                                            if ($readApplicants) {
                                                foreach ($readApplicants as $applicant) {
                                                    $applicant_id = $applicant['applicant_id'];

                                                    $readApplicantInfo = $crud->Read("applicant", "`id`=$applicant_id");
                                                    if ($readApplicantInfo) {
                                                        foreach ($readApplicantInfo as $applicantInfo) {
                                                            $applicant_name = $applicantInfo['name'];
                                                            $applicant_id = $applicantInfo['id'];
                                                            $applicant_phone = $applicantInfo['phone'];
                                                            $applicant_email = $applicantInfo['email'];

                                                            ?>
                                                            <tr>
                                                                <td><?php echo ++$n; ?></td>
                                                                <td><?php echo $job_title;?></td>
                                                                <td><?php echo $job_location;?></td>
                                                                <td><?php echo $job_salary;?></td>
                                                                <td><?php echo $applicant_name;?></td>
                                                                <td><?php echo $applicant_phone;?></td>
                                                                <td><?php echo $applicant_email;?></td>
                                                                <td><a href="applicant-info.php?applicant_id=<?php echo $applicant_id;?>&job_id=<?php echo $job_id ; ?>"><button class="apply">Details</button></a></td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                    ?>
 
                                    </tbody>
                                    
                                    <tfoot>
                                        <tr>
                                            <th>Sl no.</th>
                                            <th>Post</th>
                                            <th>Location</th>
                                            <th>Salary</th>
                                            <th>Applicant Name</th>
                                            <th>Applicant Phone</th>
                                            <th>Applicant Email</th>
                                            <th>Action</th>

                                           <!--  <th>Status</th>
                                            <th>Join Date</th> -->
                                        </tr>
                                    </tfoot>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
          
        </div>
        <!-- Modal Add New Event -->
                        <div class="modal fade" id="add-event">
                            <div class="modal-dialog modal-xl">

                                <div class="modal-content rounded-2 p-0 p-sm-5">
                                    <div class="modal-header">
                                        <h2 class="modal-title fw-bold">Call for Interview</h2>
                                        <button type="button" class="btn-close p-0 border-0" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="" method="post">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-label fs-14 fw-semibold text-uppercase ls-1 text-gray-300">Date</label>
                                                        <input type="text" id="date" class="flatpickr form-control" name="date" placeholder="">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-label fs-14 fw-semibold text-uppercase ls-1 text-gray-300">Time</label>
                                                        <input type="time" id="time" class="form-control" name="time" placeholder="">
                                                    </div>
                                                </div>
                                               
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label class="form-label fs-14 fw-semibold text-uppercase ls-1 text-gray-300">Address</label>
                                                        <textarea class="form-control" name="venue" id="venue" placeholder="Enter Text"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group d-flex align-items-center justify-content-between mb-0">
                                                <!-- <div id="dpz-multiple-files" class="dropzone file-upload btn btn-info text-white fs-18 text-uppercase mx-0"><i class="bi bi-paperclip me-2"></i> Add Attachment</div> -->
                                                <p class="error-message"></p>
                                                <button type="submit" class="btn btn-primary fs-18 text-uppercase mx-0"><i class="bi bi-send me-2"></i> Submit</button>
                                                
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
    </main>


    <?php include("include/footer.php") ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



    <script>
     $(function(){
    $('#reject-all').on('click', function(){
        var job_id = $(this).data('jobid');
        var company_id = $(this).data('companyid');
        // var jobName = $('#jobname').val();
        // var companyName = $('#companyname').val();
        console.log(job_id);
        console.log(company_id);
        // console.log(jobName);
        // console.log(companyName);
        formData = new FormData();
        formData.append('job_id', job_id);
        formData.append('company_id', company_id);
        // Perform AJAX request or any other actions
        // formData.append('jobName', jobName);
        // formData.append('companyName', companyName);
        $.ajax({
            type: 'post',
            processData: false,
            contentType: false,
            cache: false,
            dataType: 'json',
            url: 'xhr/rejectAll-applicant.php',
            data: formData,
            success: function(response) {
                if(response.successMessage) {
                    swal("Successfull", response.successMessage, "success");
                    setTimeout(() => {                            
                        window.location.reload();
                    }, 2000);
                } else if(response.errorMessage) {
                    swal("Error !", response.errorMessage, "error");
                }
            },
            error: function(error) {
                swal("Error !", "Something Went Wrong", "error");
            }
        });
    });
});

   </script>
  <script>
$(document).ready(function() {
    var job_id = ''; 
    var company_id = ''; 
    var userid = ''; 
    var userType = ''; 
    function checkFields() {
        var date = $('#date').val();
        var time = $('#time').val();
        var venue = $('#venue').val();

        if (date === '' || time === '' || venue.trim() === '') {
            $('.error-message').html('<i class="bi bi-exclamation-triangle-fill text-danger"></i> Fill all the details to continue...');
            $('input[type="submit"]').prop('disabled', true);
        } else {
            $('.error-message').html('');
            $('input[type="submit"]').prop('disabled', false);
        }
    }
    checkFields();

    $('#date, #time, #venue').on('input', function() {
        checkFields();
    });

    $('#interview').click(function() {
        
        job_id = $(this).data('jobid');
        company_id = $(this).data('companyid');
        userid = $(this).data('userid');
        userType = $(this).data('usertype');
    });

    $('form').submit(function(event) {
        event.preventDefault(); 
        checkFields();

        if ($('.error-message').html() === '') {
            var formData = new FormData(this); 
            formData.append('job_id', job_id); 
            formData.append('company_id', company_id);
            formData.append('date', $('#date').val());
            formData.append('time', $('#time').val()); 
            formData.append('venue', $('#venue').val()); 
            console.log('Date:', $('#date').val());
            console.log('Time:', $('#time').val());
            console.log('Venue:', $('#venue').val());
            console.log('Job ID:', job_id);
            console.log('Company ID:', company_id);
            console.log('user ID:', userid);
            console.log('userType:', userType);

            $.ajax({
                type: 'POST',
                url: 'xhr/interview-applicant.php', 
                data: formData,
                processData: false, 
                contentType: false,
                success: function(response) {
                    console.log('Form submitted successfully.');
                   
                },
                error: function(xhr, status, error) {
                    console.error('Error occurred:', error);
                   
                }
            });
        }
    });
});

</script>
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