    <?php include("include/head.php");?>
</head>
<body>
    <!-- preloader Start -->
    <?php include("include/preloader.php");?>
    <!-- Top Scroll End -->
    <!-- Top Header Wrapper Start -->
   <?php include("include/header.php");?>
    <!-- Top Header Wrapper End -->
    <!-- navbar Wrapper Start -->
     <?php include("include/navbar.php");?>
    <!-- navbar Wrapper End -->
    <style type="text/css">
       
.desktop-image {
    display: block;
}

.mobile-image {
    display: none;
}
.button {
    position: absolute;
    left: 0;
    right: 0; /* Adjust as needed */
    transform: translate(-50%, -50%);
    padding: 10px 20px;
    background-color: #009fff;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
}

/* Media query for smaller screens */
@media (max-width: 768px) {
    .button {
        font-size: 12px; /* Adjust as needed */
        padding: 8px 12px; /* Adjust as needed */
        left: 70%;
    }
}
/* Media query for mobile screens */
@media (max-width: 768px) {
    .desktop-image {
        display: none;
    }
    
    .mobile-image {
        display: block;
    }
}

    </style>
    <!-- CC slider Wrapper Start -->
   <div class="cc_slider_main_wrapper">
    <div class="image-container">
        <a href="job-listings.php">
           <video width="100%" height="auto" class=" desktop-image"  autoplay="autoplay" loop muted playsinline>
              <source src="images/desktop-banner.mp4" srcset="images/desktop-banner.png" type="video/mp4" />
            </video>
        </a>
    </div>
    <div class="image-container">
        <a href="job-listings.php">
           <video width="100%" height="auto" class=" mobile-image"  autoplay="autoplay" loop  muted playsinline >
              <source src="images/mobile-banner.mp4" srcset="images/mobile-banner.png" type="video/mp4" />
            </video>
        </a>
    </div>
</div>


    <!-- CC slider Wrapper End -->
   <!-- aboutus_section start-->
    <div class="aboutus_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-xs-12 col-sm-8">
                    <div class="about_text_wrapper">
                        <div class="section_heading section_2_heading">
                            <!-- <h2>About BTR<span> job  portal !</span></h2> -->
                        </div>
                        <p>Welcome to BTR job portal, a leading web-based job portal committed to revolutionizing the recruitment experience for both job seekers and employers. At BTR, we believe that finding the right talent shouldn't be a daunting task, nor should landing the perfect job be an elusive dream. With our innovative platform, we're bridging the gap between talent and opportunities, empowering individuals to build fulfilling careers and organizations to thrive with exceptional talent.</p>
                        
                        
                    </div>

                </div>
                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-4">
                    <div class="about_image_wrapper">
                        <img class="img-responsive" src="images/promod-boro.png" alt="about-img">
                        <h4 style="color: red;font-weight:bold;">Promod Boro</h4>
                        <p>Honourable Chief of BTR</p>

                    </div>
                </div>
                
            </div>
        </div>
    </div>


   
    <!-- jp counter Wrapper Start -->
<!-- jp counter Wrapper Start -->
    <div class="jp_counter_main_wrapper">
        <div class="jp_counter_loverlay"></div>
        <div class="gc_counter_cont_wrapper">
            <div class="count-description">
                <?php
                $countJobs = 0;
                $countJobs = $crud->Count("job_listing","1");
                 ?>
                <span class="timer"><?php echo $countJobs; ?></span>
                <h5 class="con1">Jobs Available</h5>
            </div>
        </div>
        <div class="gc_counter_cont_wrapper2">
            <div class="count-description">
                <?php
                $countCompany = 0;
                $countCompany = $crud->Count("company","1");
                 ?>
                <span class="timer"><?php echo $countCompany; ?></span>
                <h5 class="con2">Registered Companies</h5>
            </div>
        </div>
        <div class="gc_counter_cont_wrapper3">
            <div class="count-description">
                <?php
                $countApplicant = 0;
                $countApplicant = $crud->Count("applicant","1");
                 ?>
                <span class="timer"><?php echo $countApplicant; ?></span>
                <h5 class="con3">Applicants</h5>
            </div>
        </div>
        
    </div>
    <!-- jp counter Wrapper End -->
    <!-- jp counter Wrapper End -->
 
    <!-- jp popular Categories Wrapper Start -->
    <div class="jp_popular_category_main_wrapper">
        <div class="container-lg">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_popu_cate_heading_wrapper">
                        <h4>Popular Jobs</h4>
                    </div>
                </div>
                <?php 
           
            if ($joblist) {
            $n = 0;
            foreach ($joblist as $jobKey) {
            $jobID=$jobKey['id'];
            $jobtitle=$jobKey['job_title'];
            $joblocation=$jobKey['job_location'];
           
        ?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="jp_popu_cate_box_main_wrapper jp_popu_cate_box_main_wrapper_second">
                        <div class="jp_top_jobs_category_wrapper">
                            <div class="jp_top_jobs_category">
                                <img src="images/icon/hiring.gif" style="max-width: 55px">
                                <h3><a href="job-details.php?jobid=<?php echo $jobID;?>"><?php echo $jobtitle;?></a></h3>
                                <h4><img src="images/icon/office.gif" style="max-width: 32px"><a href="#"><?php echo $jobKey['state']; ?></a></h4>
                                <p><img src="images/icon/location.gif" style="max-width: 32px"><?php echo $jobKey['district']; ?></p>
                                <hr class="line">
                                
                                <ul>
                                    <li class="advertise">Sector : <?php echo $jobKey['category']; ?></li>
                                    <li class="advertise">Posted : <?php echo $jobKey['date_posted']; ?></li>
                                    <li class="advertise danger">Validity : <?php echo $jobKey['last_date']; ?></li>
                                </ul>
                                <a href=job-details.php?jobid=<?php echo $jobID;?> ><button type="button" class="btn btn-outline-success apply">Apply</button></a>
                            </div>
                        </div>
                    </div>
                </div>
               <?php }}?>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_recent_resume_view_btn_wrapper">
                        <div class="jp_recent_resume_view_btn">
                            <ul>
                                <li><a href="job-listings.php"><i class="fa fa-plus-circle"></i> &nbsp;VIEW ALL</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jp popular Categories Wrapper End -->
    <!-- jp Hiring company Wrapper Start -->
    <div class="jp_hiring_com_slider_main_wrapper">
        <div class="jp_hiring_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_hiring_slider_main_wrapper">
                        <div class="jp_hiring_slider_heading_wrapper">
                            <div class="vl"></div>
                            <h1 class="features"><span class="features_job">Features</span> for <br>Job Seeker & Job Provider</h1>
                        </div>
                        <div class="jp_hiring_slider_wrapper">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="jp_hiring_content_main_wrapper">
                                        <div class="jp_hiring_content_wrapper">
                                            <img src="images/icon/04.png" alt="hiring_img" />
                                            <h4>Easy Job Search</h4>
                                            <p>Search for eligible jobs</p>
                                            <ul>
                                                <li>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="jp_hiring_content_main_wrapper">
                                        <div class="jp_hiring_content_wrapper">
                                            <img src="images/icon/01.png" alt="hiring_img" />
                                            <h4>Registration</h4>
                                            <p>Quick and Simple process for registration</p>
                                            <ul>
                                                <li>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="jp_hiring_content_main_wrapper">
                                        <div class="jp_hiring_content_wrapper">
                                            <img src="images/icon/03.png" alt="hiring_img" />
                                            <h4>Dashboard</h4>
                                            <p>Dashboard with analytics and Statistics</p>
                                            <ul>
                                                <li>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="jp_hiring_content_main_wrapper">
                                        <div class="jp_hiring_content_wrapper">
                                            <img src="images/icon/05.png" alt="hiring_img" />
                                            <h4>Schedule</h4>
                                            <p>Respond / Schedule an interview</p>
                                            <ul>
                                                <li>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Hiring company Wrapper End -->
    
    
    <!-- jp client slider wrapper Start -->
    <!-- <div class="jp_client_slider_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_client_second_slider_wrapper">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <img class="support" src="images/btr-logo.png" alt="client_img">
                            </div>
                            <div class="item">
                                <img class="support" src="images/btrseed.png" alt="client_img">
                            </div>
                            <div class="item">
                                <img class="support" src="images/iti.png" alt="client_img">
                            </div>
                            <div class="item">
                                <img class="support" src="images/make.png" alt="client_img">
                            </div>
                            <div class="item">
                                <img class="support" src="images/msme.png" alt="client_img">
                            </div>
                            <div class="item">
                                <img class="support" src="images/assam.jpeg" alt="client_img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- jp client slider wrapper End -->
    <?php include("other-links.php");?>
    
    
        
        <!-- jp Newsletter Wrapper End -->
        <!-- jp footer Wrapper Start -->
        <?php include("include/footer.php");?>
   
    <!-- jp footer Wrapper End -->
    <!--main js file start-->
    <!-- <script src="js/jquery_min.js"></script> -->
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.menu-aim.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/custom_II.js"></script>
 



    <!--main js file end-->
</body>

</html>