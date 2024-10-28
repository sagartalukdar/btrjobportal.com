    <?php include("include/head.php");?>
<?php
if(isset($_SESSION['userType'])){
    if($_SESSION['userType']!='COMPANY'){
    header("location:403_error");
    exit();
    }
}
?>
<link rel="stylesheet" href="assets/css/customindex.css" id="stylesheet">
    <body class="bg-light">

        <!-- Preloader -->
        <?php include("include/preloader.php");?>

        <!-- Default Nav -->
        <?php include("include/header.php");?>

        <?php include("include/horizontal-navbar.php");?>
       

        <?php include("include/sidebar.php");?>


       <style type="text/css">
           .stats-card {
  margin: 10px 0;
  padding: 20px;
  text-align: center;
  background-image: linear-gradient(-108deg, #0ee8ff 0%, #38feaa 51%, #37fd68 100%);
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  border-radius: 8px;
}
.label{
    list-style: none;
  font-family: "Public Sans", sans-serif;
  font-size: 1rem;
  font-weight: 600;
  line-height: 1.875rem;
  text-align: center;
}
.counter-title{
    list-style: none;
  font-family: "Public Sans", sans-serif;
  font-size: 1.2rem;
  font-weight: 600;
  line-height: 1.875rem;
  text-align: center;
}
       </style>


        <!-- Main Wrapper-->
        <main class="main-wrapper">
            <div class="container-fluid">
                <div class="inner-contents">
                <div class="page-header d-flex align-items-center justify-content-between mr-bottom-30">
                    <div class="left-part">
                        <h2 class="text-dark">No. Of applicants applied</h2>
                        <!-- <p class="text-gray mb-0">You can Update and Delete this details.</p> -->
                    </div>

                </div>

            </div>
        <section id="file-export">
    <div class="container">
        <div class="row">
                   <?php 
                        $userID = $_SESSION['this_user_id'];
                        $job_applied = $crud->Read('job_listing', "`company_id`='$userID'");
                        
                        if ($job_applied) {
                            foreach ($job_applied as $job) {
                                $jobID = $job['id'];
                                $jobtitle = $job['job_title'];
                        
                                $applicantsCount = $crud->Count("job_applied", "`job_id` = '$jobID'");
                        
                                // Determine the href attribute based on the number of applicants
                                $href = ($applicantsCount == 0) ? 'javascript:void(0)' : "view-all-applications?job_id=$jobID";
                        ?>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <a href="<?php echo $href; ?>" class="job-link" data-job-id="<?php echo $jobID; ?>">
                                        <div class="stats-card" style="width: 100%; height: 200px;">
                                            <div class="icon-circle">
                                                <img class="icon" src="assets/img/icons/person.png" style="max-width: 50px;" alt="icon" />
                                            </div>
                                            <p class="counter-title" id="value" data-target="<?php echo $applicantsCount; ?>"><?php echo $applicantsCount; ?></p>
                                            <p class="counter-label"><?php echo $jobtitle; ?></p>
                                        </div>
                                    </a>
                                </div>
                        <?php 
                            }
                        }
                        ?>
                






            <!-- <div class="col-lg-3 col-md-6 col-sm-12">
               
                <div class="stats-card1">
                    <div class="icon-circle">
                        <img class="icon" src="./images/teacher.png" style="font-size: 150px" alt="" />
                    </div>
                    <p class="title" id="value" data-target="4354353">0</p>
                    <p class="label">Total Instructors</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
               
                <div class="stats-card2">
                    <div class="icon-circle">
                        <img class="icon" src="./images/registration.png" style="font-size: 150px" alt="" />
                    </div>
                    <p class="title" id="value" data-target="34535353">0</p>
                    <p class="label">Total Registered Students</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                
                <div class="stats-card3">
                    <div class="icon-circle">
                        <img class="icon" src="./images/degree.png" style="font-size: 150px" alt="" />
                    </div>
                    <p class="title" id="value" data-target="4564646">0</p>
                    <p class="label">Total Courses</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
               
                <div class="stats-card4">
                    <div class="icon-circle">
                        <img class="icon" src="./images/pay.png" style="font-size: 150px" alt="" />
                    </div>
                    <p class="title" id="value" data-target="456456"></p>
                    <p class="label">Fess paid</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
               
                <div class="stats-card5">
                    <div class="icon-circle">
                        <img class="icon" src="./images/error.png" style="font-size: 150px" alt="" />
                    </div>
                    <p class="title" id="value" data-target="56757">0</p>
                    <p class="label">Fess not Paid</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                
                <div class="stats-card6">
                    <div class="icon-circle">
                        <img class="icon" src="./images/safe-box.png" style="font-size: 150px" alt="" />
                    </div>
                    <p class="title" id="value" data-target="3456">0</p>
                    <p class="label">Total Fees</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
               
                <div class="stats-card7">
                    <div class="icon-circle">
                        <img class="icon" src="./images/graduates.png" style="font-size: 150px" alt="" />
                    </div>
                    <p class="title" id="value" data-target="80">0</p>
                    <p class="label">Students passed</p>
                </div>
            </div> -->
        </div>
    </div>
</section>
</div>
</main>


      <?php include("include/footer.php") ?>  
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script>
   
            document.querySelectorAll('.job-link[href="javascript:void(0)"]').forEach(function(link) {
                link.addEventListener('click', function(event) {
                    event.preventDefault();
                    // Trigger SweetAlert message
                    Swal.fire({
                        icon: 'info',
                        title: 'No Applicants',
                        text: 'None applied for this post.',
                        confirmButtonText: 'OK'
                    });
                });
            });
        </script>
      <script type="text/javascript">
        const counters = document.querySelectorAll("#value");
const animationSpeed = 300;

counters.forEach((count) => {
  const incrementCount = () => {
    const finalValue = Number(count.getAttribute("data-target"));
    const currentCount = Number(count.innerText);

    const incrementValue = finalValue / animationSpeed;

    if (currentCount < finalValue) {
      count.innerText = Math.ceil(currentCount + incrementValue);
      setTimeout(incrementCount, 1);
    } else {
      currentCount.innerText = finalValue;
    }
  };

  incrementCount();
});
    </script>  

    </body>


    </html>