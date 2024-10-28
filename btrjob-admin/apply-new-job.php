<?php include("include/head.php");?>

</head>

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
                    <div class="page-header d-flex align-items-start align-items-md-center justify-content-between flex-wrap mr-bottom-20 gap-4">
                        <div class="left-part">
                            <h2 class="text-dark">Jobs</h2>
                            <p class="text-gray mb-0">Regularly uploaded jobs available here. </p>
                        </div>
                        
                    </div>
                    
                    
                    <div class="mb-6 text-md-end">
                        <!-- Classic Tab -->
                        <ul class="nav nav-tabs mb-0 justify-content-start justify-content-md-end" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#tab-7" data-bs-toggle="tab" role="tab">Active</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tab-8" data-bs-toggle="tab" role="tab">Completed</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tab-9" data-bs-toggle="tab" role="tab">Draft</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-7" role="tabpanel">
                            <h2>tab-7</h2>
                            <div class="row">
                                <?php 
                                  $readjobs=$crud->Read("job_listing","1");
                                  if($readjobs){
                                    foreach($readjobs as $job){
                                        $company_id =$job['company_id'];
                                         $readCompany = $crud->Read("company", "`id`=$company_id");
                                         if ($readCompany) {
                                            $companyname = $readCompany[0]['name'];
                                            $companydescription = $readCompany[0]['company_description'];
                                            $companyemail = $readCompany[0]['email'];
                                            $companyphone = $readCompany[0]['phone'];
                                            $companyaddress = $readCompany[0]['address'];
                                           
                                ?>
                                <div class="col-xxl-3 col-xl-4 col-lg-6">
                                    <div class="card border-0">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between mb-0">
                                                <div class="card-content">
                                                    <h6 class="fw-semibold text-gray mb-1">Position</h6>
                                                     <div class="avatar-img avatar-xl rounded-2 overflow-hidden flex-shrink-0">
                                                        <?php 
                                                            if (!empty($company["logo"])) {
                                                                // If $company["logo"] is not empty, display the logo
                                                        ?>
                                                                <img src="uploads/<?php echo $company["logo"]; ?>" alt="logo" class="w-100" />
                                                        <?php 
                                                            } else {
                                                                // If $company["logo"] is empty, display the default image
                                                        ?>
                                                                <img src="../images/icon/office.gif" alt="default logo" class="w-100" />
                                                        <?php 
                                                            }
                                                        ?>

                                                    </div>
                                                    <h5 class="text-dark mb-1">
                                                        <?php 
                                                        echo $companyname;
                                                          // $title=$job["job_title"];
                                                          // if(strlen($title)>20){
                                                          //   echo substr($title,0,20)." ..";
                                                          // }else{
                                                          //   echo $title;
                                                          // }
                                                        ?>
                                                    </h5>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="#" data-bs-toggle="dropdown" class="fs-24">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu p-0" style="background-color:rgb(179, 235, 209);" >
                                                        <a class="dropdown-item" href="#">View</a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="d-flex align-items-center gap-4 fs-14 text-gray mb-4" style="height:20px;">
                                                <span class="job-type"><?php echo $job["jobtype"] ; ?></span>
                                                <span class="flex-shrink-0 bg-gray rounded-circle" style="width: 6px; height: 6px;"></span>
                                                <span class="country">
                                                    <?php 
                                                    $location=$job["job_location"];
                                                    if(strlen($location)>10){
                                                        echo substr($location,0,10)."..";
                                                    }else{
                                                        echo $location ;
                                                    }
                                                    ?>
                                                </span>
                                            </div>
                                            <h5 class="text-primary mb-3">Last Date :<?php echo $job["last_date"]  ; ?></h5>
                        
                                            <!-- Middle Content -->
                                            <div>
                                                <h6 class="fw-semibold text-gray mb-1">Recruiments</h6>
                                                <p class="fs-14 text-dark">
                                                    <?php 
                                                    $qualification=$job["qualification"];
                                                    if(strlen($qualification)>15){
                                                        echo substr($qualification,0,15)."...";
                                                    }else{
                                                        echo $qualification ;
                                                    }
                                                 
                                                    ?>
                                                 </p>
                                            </div>
                                            <div class="badge py-3 px-5 rounded-1 badge-soft-success ff-heading fs-14 fw-bold" style="color: blue;" >Check</div>
                                        </div>
                                    </div>
                                </div>

                                <?php        
                                    }
                                  }}else{
                                ?>
                                <h3 class="text-center">No Jobs Present Now.</h3>
                                <?php    
                                  }
                                ?>
                               

                            </div>
                        </div>

                        <div class="tab-pane fade" id="tab-8" role="tabpanel">
                            <h2>tab-8</h2>
                            <div class="row">
                                <div class="col-xxl-3 col-xl-4 col-lg-6">
                                    <div class="card border-0">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between mb-0">
                                                <div class="card-content">
                                                    <h6 class="fw-semibold text-gray mb-1">Position</h6>
                                                    <h5 class="text-dark mb-1">UI Designer</h5>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="#" data-bs-toggle="dropdown" class="fs-24">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu p-0">
                                                        <a class="dropdown-item" href="#">View</a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="d-flex align-items-center gap-4 fs-14 text-gray mb-4">
                                                <span class="job-type">Fulltime</span>
                                                <span class="flex-shrink-0 bg-gray rounded-circle" style="width: 6px; height: 6px;"></span>
                                                <span class="country">Indonesia</span>
                                            </div>
                                            <h5 class="text-primary mb-3">$1000 - $2000</h5>
                        
                                            <!-- Middle Content -->
                                            <div>
                                                <h6 class="fw-semibold text-gray mb-1">Recruiments</h6>
                                                <p class="fs-14 text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            </div>
                                            <div class="badge py-3 px-5 rounded-1 badge-soft-success ff-heading fs-14 fw-bold" style="color: blue;" >Check</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-3 col-xl-4 col-lg-6">
                                    <div class="card border-0">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between mb-0">
                                                <div class="card-content">
                                                    <h6 class="fw-semibold text-gray mb-1">Position</h6>
                                                    <h5 class="text-dark mb-1">UI Designer</h5>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="#" data-bs-toggle="dropdown" class="fs-24">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu p-0">
                                                        <a class="dropdown-item" href="#">View</a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="d-flex align-items-center gap-4 fs-14 text-gray mb-4">
                                                <span class="job-type">Fulltime</span>
                                                <span class="flex-shrink-0 bg-gray rounded-circle" style="width: 6px; height: 6px;"></span>
                                                <span class="country">Indonesia</span>
                                            </div>
                                            <h5 class="text-primary mb-3">$1000 - $2000</h5>
                        
                                            <!-- Middle Content -->
                                            <div>
                                                <h6 class="fw-semibold text-gray mb-1">Recruiments</h6>
                                                <p class="fs-14 text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            </div>
                                            <div class="badge py-3 px-5 rounded-1 badge-soft-success ff-heading fs-14 fw-bold" style="color: blue;" >Check</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-3 col-xl-4 col-lg-6">
                                    <div class="card border-0">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between mb-0">
                                                <div class="card-content">
                                                    <h6 class="fw-semibold text-gray mb-1">Position</h6>
                                                    <h5 class="text-dark mb-1">UI Designer</h5>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="#" data-bs-toggle="dropdown" class="fs-24">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu p-0">
                                                        <a class="dropdown-item" href="#">View</a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="d-flex align-items-center gap-4 fs-14 text-gray mb-4">
                                                <span class="job-type">Fulltime</span>
                                                <span class="flex-shrink-0 bg-gray rounded-circle" style="width: 6px; height: 6px;"></span>
                                                <span class="country">Indonesia</span>
                                            </div>
                                            <h5 class="text-primary mb-3">$1000 - $2000</h5>
                        
                                            <!-- Middle Content -->
                                            <div>
                                                <h6 class="fw-semibold text-gray mb-1">Recruiments</h6>
                                                <p class="fs-14 text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            </div>
                                            <div class="badge py-3 px-5 rounded-1 badge-soft-success ff-heading fs-14 fw-bold" style="color: blue;" >Check</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-3 col-xl-4 col-lg-6">
                                    <div class="card border-0">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between mb-0">
                                                <div class="card-content">
                                                    <h6 class="fw-semibold text-gray mb-1">Position</h6>
                                                    <h5 class="text-dark mb-1">UI Designer</h5>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="#" data-bs-toggle="dropdown" class="fs-24">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu p-0">
                                                        <a class="dropdown-item" href="#">View</a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="d-flex align-items-center gap-4 fs-14 text-gray mb-4">
                                                <span class="job-type">Fulltime</span>
                                                <span class="flex-shrink-0 bg-gray rounded-circle" style="width: 6px; height: 6px;"></span>
                                                <span class="country">Indonesia</span>
                                            </div>
                                            <h5 class="text-primary mb-3">$1000 - $2000</h5>
                        
                                            <!-- Middle Content -->
                                            <div>
                                                <h6 class="fw-semibold text-gray mb-1">Recruiments</h6>
                                                <p class="fs-14 text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            </div>
                                            <div class="badge py-3 px-5 rounded-1 badge-soft-success ff-heading fs-14 fw-bold" style="color: blue;" >Check</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-3 col-xl-4 col-lg-6">
                                    <div class="card border-0">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between mb-0">
                                                <div class="card-content">
                                                    <h6 class="fw-semibold text-gray mb-1">Position</h6>
                                                    <h5 class="text-dark mb-1">UI Designer</h5>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="#" data-bs-toggle="dropdown" class="fs-24">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu p-0">
                                                        <a class="dropdown-item" href="#">View</a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="d-flex align-items-center gap-4 fs-14 text-gray mb-4">
                                                <span class="job-type">Fulltime</span>
                                                <span class="flex-shrink-0 bg-gray rounded-circle" style="width: 6px; height: 6px;"></span>
                                                <span class="country">Indonesia</span>
                                            </div>
                                            <h5 class="text-primary mb-3">$1000 - $2000</h5>
                        
                                            <!-- Middle Content -->
                                            <div>
                                                <h6 class="fw-semibold text-gray mb-1">Recruiments</h6>
                                                <p class="fs-14 text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            </div>
                                            <div class="badge py-3 px-5 rounded-1 badge-soft-success ff-heading fs-14 fw-bold" style="color: blue;" >Check</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="tab-pane fade" id="tab-9" role="tabpanel">
                            <h2>tab-9</h2>
                            <div class="row">
                                <div class="col-xxl-3 col-xl-4 col-lg-6">
                                    <div class="card border-0">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between mb-0">
                                                <div class="card-content">
                                                    <h6 class="fw-semibold text-gray mb-1">Position</h6>
                                                    <h5 class="text-dark mb-1">UI Designer</h5>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="#" data-bs-toggle="dropdown" class="fs-24">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu p-0">
                                                        <a class="dropdown-item" href="#">View</a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="d-flex align-items-center gap-4 fs-14 text-gray mb-4">
                                                <span class="job-type">Fulltime</span>
                                                <span class="flex-shrink-0 bg-gray rounded-circle" style="width: 6px; height: 6px;"></span>
                                                <span class="country">Indonesia</span>
                                            </div>
                                            <h5 class="text-primary mb-3">$1000 - $2000</h5>
                        
                                            <!-- Middle Content -->
                                            <div>
                                                <h6 class="fw-semibold text-gray mb-1">Recruiments</h6>
                                                <p class="fs-14 text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            </div>
                                            <div class="badge py-3 px-5 rounded-1 badge-soft-success ff-heading fs-14 fw-bold" style="color: blue;" >Check</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-3 col-xl-4 col-lg-6">
                                    <div class="card border-0">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between mb-0">
                                                <div class="card-content">
                                                    <h6 class="fw-semibold text-gray mb-1">Position</h6>
                                                    <h5 class="text-dark mb-1">UI Designer</h5>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="#" data-bs-toggle="dropdown" class="fs-24">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu p-0">
                                                        <a class="dropdown-item" href="#">View</a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="d-flex align-items-center gap-4 fs-14 text-gray mb-4">
                                                <span class="job-type">Fulltime</span>
                                                <span class="flex-shrink-0 bg-gray rounded-circle" style="width: 6px; height: 6px;"></span>
                                                <span class="country">Indonesia</span>
                                            </div>
                                            <h5 class="text-primary mb-3">$1000 - $2000</h5>
                        
                                            <!-- Middle Content -->
                                            <div>
                                                <h6 class="fw-semibold text-gray mb-1">Recruiments</h6>
                                                <p class="fs-14 text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            </div>
                                            <div class="badge py-3 px-5 rounded-1 badge-soft-success ff-heading fs-14 fw-bold" style="color: blue;" >Check</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-3 col-xl-4 col-lg-6">
                                    <div class="card border-0">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between mb-0">
                                                <div class="card-content">
                                                    <h6 class="fw-semibold text-gray mb-1">Position</h6>
                                                    <h5 class="text-dark mb-1">UI Designer</h5>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="#" data-bs-toggle="dropdown" class="fs-24">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu p-0">
                                                        <a class="dropdown-item" href="#">View</a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="d-flex align-items-center gap-4 fs-14 text-gray mb-4">
                                                <span class="job-type">Fulltime</span>
                                                <span class="flex-shrink-0 bg-gray rounded-circle" style="width: 6px; height: 6px;"></span>
                                                <span class="country">Indonesia</span>
                                            </div>
                                            <h5 class="text-primary mb-3">$1000 - $2000</h5>
                        
                                            <!-- Middle Content -->
                                            <div>
                                                <h6 class="fw-semibold text-gray mb-1">Recruiments</h6>
                                                <p class="fs-14 text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            </div>
                                            <div class="badge py-3 px-5 rounded-1 badge-soft-success ff-heading fs-14 fw-bold" style="color: blue;" >Check</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-3 col-xl-4 col-lg-6">
                                    <div class="card border-0">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between mb-0">
                                                <div class="card-content">
                                                    <h6 class="fw-semibold text-gray mb-1">Position</h6>
                                                    <h5 class="text-dark mb-1">UI Designer</h5>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="#" data-bs-toggle="dropdown" class="fs-24">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu p-0">
                                                        <a class="dropdown-item" href="#">View</a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="d-flex align-items-center gap-4 fs-14 text-gray mb-4">
                                                <span class="job-type">Fulltime</span>
                                                <span class="flex-shrink-0 bg-gray rounded-circle" style="width: 6px; height: 6px;"></span>
                                                <span class="country">Indonesia</span>
                                            </div>
                                            <h5 class="text-primary mb-3">$1000 - $2000</h5>
                        
                                            <!-- Middle Content -->
                                            <div>
                                                <h6 class="fw-semibold text-gray mb-1">Recruiments</h6>
                                                <p class="fs-14 text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            </div>
                                            <div class="badge py-3 px-5 rounded-1 badge-soft-success ff-heading fs-14 fw-bold" style="color: blue;" >Check</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-3 col-xl-4 col-lg-6">
                                    <div class="card border-0">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between mb-0">
                                                <div class="card-content">
                                                    <h6 class="fw-semibold text-gray mb-1">Position</h6>
                                                    <h5 class="text-dark mb-1">UI Designer</h5>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="#" data-bs-toggle="dropdown" class="fs-24">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu p-0">
                                                        <a class="dropdown-item" href="#">View</a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="d-flex align-items-center gap-4 fs-14 text-gray mb-4">
                                                <span class="job-type">Fulltime</span>
                                                <span class="flex-shrink-0 bg-gray rounded-circle" style="width: 6px; height: 6px;"></span>
                                                <span class="country">Indonesia</span>
                                            </div>
                                            <h5 class="text-primary mb-3">$1000 - $2000</h5>
                        
                                            <!-- Middle Content -->
                                            <div>
                                                <h6 class="fw-semibold text-gray mb-1">Recruiments</h6>
                                                <p class="fs-14 text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            </div>
                                            <div class="badge py-3 px-5 rounded-1 badge-soft-success ff-heading fs-14 fw-bold" style="color: blue;" >Check</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-3 col-xl-4 col-lg-6">
                                    <div class="card border-0">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between mb-0">
                                                <div class="card-content">
                                                    <h6 class="fw-semibold text-gray mb-1">Position</h6>
                                                    <h5 class="text-dark mb-1">UI Designer</h5>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="#" data-bs-toggle="dropdown" class="fs-24">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu p-0">
                                                        <a class="dropdown-item" href="#">View</a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="d-flex align-items-center gap-4 fs-14 text-gray mb-4">
                                                <span class="job-type">Fulltime</span>
                                                <span class="flex-shrink-0 bg-gray rounded-circle" style="width: 6px; height: 6px;"></span>
                                                <span class="country">Indonesia</span>
                                            </div>
                                            <h5 class="text-primary mb-3">$1000 - $2000</h5>
                        
                                            <!-- Middle Content -->
                                            <div>
                                                <h6 class="fw-semibold text-gray mb-1">Recruiments</h6>
                                                <p class="fs-14 text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            </div>
                                            <div class="badge py-3 px-5 rounded-1 badge-soft-success ff-heading fs-14 fw-bold" style="color: blue;" >Check</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-3 col-xl-4 col-lg-6">
                                    <div class="card border-0">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between mb-0">
                                                <div class="card-content">
                                                    <h6 class="fw-semibold text-gray mb-1">Position</h6>
                                                    <h5 class="text-dark mb-1">UI Designer</h5>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="#" data-bs-toggle="dropdown" class="fs-24">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu p-0">
                                                        <a class="dropdown-item" href="#">View</a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="d-flex align-items-center gap-4 fs-14 text-gray mb-4">
                                                <span class="job-type">Fulltime</span>
                                                <span class="flex-shrink-0 bg-gray rounded-circle" style="width: 6px; height: 6px;"></span>
                                                <span class="country">Indonesia</span>
                                            </div>
                                            <h5 class="text-primary mb-3">$1000 - $2000</h5>
                        
                                            <!-- Middle Content -->
                                            <div>
                                                <h6 class="fw-semibold text-gray mb-1">Recruiments</h6>
                                                <p class="fs-14 text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            </div>
                                            <div class="badge py-3 px-5 rounded-1 badge-soft-success ff-heading fs-14 fw-bold" style="color: blue;" >Check</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-3 col-xl-4 col-lg-6">
                                    <div class="card border-0">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between mb-0">
                                                <div class="card-content">
                                                    <h6 class="fw-semibold text-gray mb-1">Position</h6>
                                                    <h5 class="text-dark mb-1">UI Designer</h5>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="#" data-bs-toggle="dropdown" class="fs-24">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu p-0">
                                                        <a class="dropdown-item" href="#">View</a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="d-flex align-items-center gap-4 fs-14 text-gray mb-4">
                                                <span class="job-type">Fulltime</span>
                                                <span class="flex-shrink-0 bg-gray rounded-circle" style="width: 6px; height: 6px;"></span>
                                                <span class="country">Indonesia</span>
                                            </div>
                                            <h5 class="text-primary mb-3">$1000 - $2000</h5>
                        
                                            <!-- Middle Content -->
                                            <div>
                                                <h6 class="fw-semibold text-gray mb-1">Recruiments</h6>
                                                <p class="fs-14 text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            </div>
                                            <div class="badge py-3 px-5 rounded-1 badge-soft-success ff-heading fs-14 fw-bold" style="color: blue;" >Check</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-3 col-xl-4 col-lg-6">
                                    <div class="card border-0">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between mb-0">
                                                <div class="card-content">
                                                    <h6 class="fw-semibold text-gray mb-1">Position</h6>
                                                    <h5 class="text-dark mb-1">UI Designer</h5>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="#" data-bs-toggle="dropdown" class="fs-24">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu p-0">
                                                        <a class="dropdown-item" href="#">View</a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="d-flex align-items-center gap-4 fs-14 text-gray mb-4">
                                                <span class="job-type">Fulltime</span>
                                                <span class="flex-shrink-0 bg-gray rounded-circle" style="width: 6px; height: 6px;"></span>
                                                <span class="country">Indonesia</span>
                                            </div>
                                            <h5 class="text-primary mb-3">$1000 - $2000</h5>
                        
                                            <!-- Middle Content -->
                                            <div>
                                                <h6 class="fw-semibold text-gray mb-1">Recruiments</h6>
                                                <p class="fs-14 text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            </div>
                                            <div class="badge py-3 px-5 rounded-1 badge-soft-success ff-heading fs-14 fw-bold" style="color: blue;" >Check</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-3 col-xl-4 col-lg-6">
                                    <div class="card border-0">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between mb-0">
                                                <div class="card-content">
                                                    <h6 class="fw-semibold text-gray mb-1">Position</h6>
                                                    <h5 class="text-dark mb-1">UI Designer</h5>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="#" data-bs-toggle="dropdown" class="fs-24">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu p-0">
                                                        <a class="dropdown-item" href="#">View</a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="d-flex align-items-center gap-4 fs-14 text-gray mb-4">
                                                <span class="job-type">Fulltime</span>
                                                <span class="flex-shrink-0 bg-gray rounded-circle" style="width: 6px; height: 6px;"></span>
                                                <span class="country">Indonesia</span>
                                            </div>
                                            <h5 class="text-primary mb-3">$1000 - $2000</h5>
                        
                                            <!-- Middle Content -->
                                            <div>
                                                <h6 class="fw-semibold text-gray mb-1">Recruiments</h6>
                                                <p class="fs-14 text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            </div>
                                            <div class="badge py-3 px-5 rounded-1 badge-soft-success ff-heading fs-14 fw-bold" style="color: blue;" >Check</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>


    <?php include("include/footer.php") ?>

</body>

</html>