<?php include("include/head.php");?>
</head>
<body>
    <!-- preloader Start -->
       <?php include("include/preloader.php");?>
    <!-- Top Scroll End -->
    <!-- Top Header Wrapper Start -->
    <?php include("include/header.php");?>
    <!-- Top Header Wrapper End -->
    <!-- Header Wrapper Start -->
    <?php include("include/navbar.php");?>
    <!-- Header Wrapper End -->

    <style type="text/css">
        .jp_cs_com_info_img_cont h2{
            text-decoration: none;
        }
        .fa-envelope {
           margin-top: 10px;
          background: linear-gradient(135deg,#246fff,#d921f3);
          display: inline-block;
          font-size: 14px;
          border-radius: 50%;
          padding: 8px 9px;
          color: #fff;
        }
        .fa-phone {
            margin-top: 10px;
          background: linear-gradient(135deg,#24ff72,#2196f3);
          display: inline-block;
          border-radius: 50%;
          padding: 8px 10px;
          color: #fff;
        }
        .job-details{
        background-color: red;
          color: white;
          padding: 0px 5px 0px;
          border-radius: 5px;
          font-style: italic;
          font-size: 14px;
        }
            .applied{
  float: left;
  width: 100%;
  padding-right: 20px;
  padding-left: 20px;
  height: 30px;
  line-height: 30px;
  text-align: center;
  background: linear-gradient(135deg,#c3e3d4,#5d676f);
  color: #393434;
  font-size: 14px;
  text-transform: uppercase;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  border-radius: 5px;
  box-shadow: 3px 3px #808a84;
  font-weight: 700;
}
.expired{
  float: left;
  width: 100%;
  padding-right: 20px;
  padding-left: 20px;
  height: 30px;
  line-height: 30px;
  text-align: center;
  background: linear-gradient(135deg,#ec2a2a,#bf7f7f);
  color: #f4f1f1;
  font-size: 14px;
  text-transform: uppercase;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  border-radius: 5px;
  box-shadow: 3px 3px #71db5b;
  font-weight: 700;
}
.button-container-inline {
    display: flex;
    margin-top:20px;
    justify-content: space-between;
    align-items: center;
    gap: 10px; /* Adjust the gap as needed */
}
.interview{
   float: left;
  width: 150px;
  padding-right: 20px;
  padding-left: 20px;
  height: 30px;
  line-height: 30px;
  text-align: center;
  background: linear-gradient(135deg,#21dbdb,#5171d0);
  color: #ffffff;
  font-size: 12px;
  text-transform: uppercase;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  border-radius: 5px;
box-shadow: 3px 3px #e86e15;
  font-weight: 700;
}





  
    </style>
    <!-- jp Tittle Wrapper Start -->
    <?php 
if (isset($_GET['jobid'])) {
    $jobid = $_GET['jobid'];
    $readjob = $crud->Read("job_listing", "`id`=$jobid");
}

if ($readjob) {
    $companyid =$readjob[0]['company_id'];
    $jobdescription = $readjob[0]['Jobdescription'];
    $jobtitle = $readjob[0]['job_title'];
    $jobcategory = $readjob[0]['category'];
    $joblocation = $readjob[0]['job_location'];
    $jobqualification = $readjob[0]['qualification'];
    $jobsalary = $readjob[0]['salary'];
    $jobexperience = $readjob[0]['experience'];
    $jobType= $readjob[0]['jobtype'];
    $lastdate= $readjob[0]['last_date'];
    $companyAdvertisement = $readjob[0]['company_advertisement'];

$readCompany= $crud->Read("company", "`id`=$companyid");
if($readCompany){
    $companyname=$readCompany[0]['name'];
    $companydescription=$readCompany[0]['company_description'];
    $companyemail=$readCompany[0]['email'];
    $companyphone=$readCompany[0]['phone'];
    $companyphone=$readCompany[0]['phone'];
    $companyaddress=$readCompany[0]['address'];
     $companylogo = $readCompany[0]['logo'];
    


    
   
?>
    <div class="jp_tittle_main_wrapper jp_cs_tittle_main_wrapper">
        <div class="jp_tittle_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_tittle_heading_wrapper">
                        <div class="jp_tittle_heading">
                            <h2><?php echo $companyname;?></h2>
                        </div>
                        <div class="jp_tittle_breadcrumb_main_wrapper">
                            <div class="jp_tittle_breadcrumb_wrapper">
                                <ul>
                                    <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>
                                    <li><a href="#">Job</a> <i class="fa fa-angle-right"></i></li>
                                    <!-- <li><a href="#">IT</a> <i class="fa fa-angle-right"></i></li> -->
                                    <li>Job Details</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="jp_cs_com_info_wrapper">
						<div class="jp_cs_com_info_img">
                            <?php 
                                if ($companylogo != null) {
                                   
                            ?>
                                    <img src="btrjob-admin/uploads/<?php echo $companylogo; ?>" alt="logo" class="w-100" style="max-width: 120px"/>
                            <?php 
                                } else {
                                    
                            ?>
                                    <img src="images/icon/office.gif" alt="default logo" class="w-100" style="max-width: 120px" />
                            <?php 
                                }
                            ?>

							<!-- <img src="images/content/cs1.jpg" alt="job_img"> -->
						</div>
						<div class="jp_cs_com_info_img_cont">
							<h2><?php echo $companyname;?></h2>
                            <p><?php echo $jobtitle;?></p>
							
                            <ul>
                                <li class="text-left"><i class="fa fa-caret-right"></i>&nbsp;&nbsp; Job Location : <?php echo $joblocation;?></li>
                                <li class="text-left"><i class="fa fa-caret-right"></i>&nbsp;&nbsp; Salary : Rs.<?php echo $jobsalary;?></li>
                                
                                <li class="text-left"><i class="fa fa-caret-right"></i>&nbsp;&nbsp; Sector : <?php echo $jobcategory;?></li>
                                <li class="text-left"><i class="fa fa-caret-right"></i>&nbsp;&nbsp; Jobtype : <?php echo $jobType;?></li>
                                <li class="text-left"><i class="fa fa-caret-right"></i>&nbsp;&nbsp; Last date for apply : <span class="job-details"><?php echo $lastdate;?></span></li>
                            </ul>

						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
    <!-- jp Tittle Wrapper End -->
    <!-- jp listing Single cont Wrapper Start -->
    <div class="jp_listing_single_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="jp_listing_left_sidebar_wrapper">
                        <div class="jp_job_des">
                            <h2 class="text-left">Company Description</h2>

                            <p><?php echo $companydescription;?></p>
                            <!-- <ul>
                                <li><i class="fa fa-globe"></i>&nbsp;&nbsp; <a href="#">www.example.com</a></li>
                                <li><i class="fa fa-file-pdf-o"></i>&nbsp;&nbsp; <a href="#">Download Info</a></li>

                            </ul> -->
                        </div>
                        <div class="jp_job_res">
                            <h2>Responsibilities</h2>
                            <p><?php echo $jobdescription;?></p>
                            <!-- <ul>
                                <li><i class="fa fa-caret-right"></i>&nbsp;&nbsp; Build next-generation web applications with a focus on the client side.</li>
                                <li><i class="fa fa-caret-right"></i>&nbsp;&nbsp; Redesign UI's, implement new UI's, and pick up Java as necessary.</li>
                                <li><i class="fa fa-caret-right"></i>&nbsp;&nbsp; Explore and design dynamic and compelling consumer experiences.</li>
                                <li><i class="fa fa-caret-right"></i>&nbsp;&nbsp; Design and build scalable framework for web applications.</li>
                            </ul> -->
                        </div>
                        <div class="jp_job_res jp_job_qua" >
                            <h2>Minimum qualifications</h2>
                            <ul>
                                <li><i class="fa fa-caret-right"></i>&nbsp;&nbsp; <?php echo $jobqualification;?></li>
                                <!-- <li><i class="fa fa-caret-right"></i>&nbsp;&nbsp; 2 years of relevant work experience in software development.</li>
                                <li><i class="fa fa-caret-right"></i>&nbsp;&nbsp; Programming experience in C, C++ or Java.</li>
                                <li><i class="fa fa-caret-right"></i>&nbsp;&nbsp; Experience with AJAX, HTML and CSS.</li> -->
                            </ul>
                        </div>
                        <div class="jp_listing_right_bar_btn_wrapper">
                            <div class="jp_listing_right_bar_btn" >
                               
                                <ul>

                                   

                                   <!-- <button type="button" class="apply mb-4"> <a href="btrjob-admin/uploads/<?php echo $companyAdvertisement; ?>"download</a></button> -->
                                   <div class="button-container-inline">

                                  <?php

                              if (!empty($companyAdvertisement)) {
                                  
                                  echo '<button class="interview" onclick="window.location.href = \'btrjob-admin/uploads/' . $companyAdvertisement . '\';" download>Advertisement</button>';
                              } else {
                                  
                                  echo '<button class="interview" onclick="displayMessage();">Advertisement</button>';
                                 
                                 
                              }
                              ?>
                              
                                    <?php   
                                        date_default_timezone_set("Asia/Kolkata");
                                        $today = date("Y-m-d");
                                        $expired=false;
                                        $jobListing = $crud->Read("job_listing", "`id`='$jobid'");
                                        if ($jobListing) {
                                            $lastDate = $jobListing[0]['last_date']; 
                                            if ($today > $lastDate) { 
                                                echo '<button class="expired">Expired</button>';
                                                $expired=true;
                                            }
                                        }
                                    ?>

                                  <?php
                                  if(!$expired){          
                                  if (isset($_SESSION['this_user_id'])) {
                                      if ($_SESSION['userType'] == "APPLICANT") {
                                          $applicantId =  $_SESSION['this_user_id'];
                                          $existing_application = $crud->Read("job_applied", "`applicant_id`=$applicantId AND `job_id`=$jobid");
                                          if ($existing_application) {
                                              if ($existing_application[0]['status'] == 1) { ?>
                                                  <button type="button" class="applied"> Applied</button>
                                              <?php } else if ($existing_application[0]['status'] == 2) { ?>
                                                  <button type="button" class="btn btn-success"> Hired</button>
                                              <?php } else if ($existing_application[0]['status'] == 3) { ?>
                                                  <button type="button" class="expired"> Rejected</button>
                                              <?php }
                                          } else { ?>
                                              <button type="button" class="apply" id="apply" data-jid="<?php echo $jobid?>">Apply</button>
                                          <?php }
                                      }
                                  } else { ?>
                                      <button onclick="window.location.href='login/login'" type="button" class="apply">Apply</button>
                                  <?php }} ?>
                              </div>

                                    
                                </ul>
                               
                            </div>
                            
                        </div>
                       <p id="message" style="display: none;color: red">Advertisement not uploaded</p>
                    </div>

                    <div class="jp_listing_left_bottom_sidebar_wrapper">
                        <div class="jp_listing_left_bottom_sidebar_social_wrapper">
                            <ul>
                                <li>SHARE :</li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li class="hidden-xs"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="hidden-xs"><a href="#"><i class="fa fa-vimeo"></i></a></li>
                            </ul>
                        </div>
                    </div>                 
                    
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_rightside_job_categories_wrapper jp_rightside_listing_single_wrapper">
                                <div class="jp_rightside_job_categories_heading">
                                    <h4>Company Overview</h4>
                                </div>
                                <div class="jp_jop_overview_img_wrapper">
                                    <div class="jp_jop_overview_img">
                                        <?php 
                                            if ($companylogo != null) {
                                               
                                        ?>
                                                <img src="btrjob-admin/uploads/<?php echo $companylogo; ?>" alt="logo" class="w-100" style="max-width: 120px"/>
                                        <?php 
                                            } else {
                                                
                                        ?>
                                                <img src="images/icon/office.gif" alt="default logo" class="w-100" style="max-width: 120px" />
                                        <?php 
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div class="jp_job_listing_single_post_right_cont">
                                    <div class="jp_job_listing_single_post_right_cont_wrapper">
                                        <h4><?php echo $companyname;?></h4>
                                        <p><?php echo $jobcategory;?></p>
                                    </div>
                                    <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li class="text-left"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?php echo $companyaddress;?></li>
                                                <li style="font-size: 14px"> </li>
                                            </ul>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li class="text-left"><i class="fa fa-phone"></i>&nbsp;&nbsp;<?php echo $companyphone;?></li>
                                                <li style="font-size: 14px"> </li>
                                            </ul>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li class="text-left"><i class="fa fa-envelope"></i>&nbsp;&nbsp;<?php echo $companyemail;?></li>
                                                <li style="font-size: 14px"> </li>
                                            </ul>
                                        </div>
                                </div>
                                <div class="jp_job_post_right_overview_btn_wrapper">
                                    <div class="jp_job_post_right_overview_btn">
                                        <ul>
                                            <!--<li><a href="#">141 Jobs</a></li>-->
                                        </ul>
                                    </div>

                                </div>
                                
                                <!-- <div class="jp_listing_overview_list_outside_main_wrapper">
                                    <div class="jp_listing_overview_list_main_wrapper">
                                        <div class="jp_listing_list_icon">
                                            
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li><i class="fa fa-map-marker"></i>&nbsp;&nbsp;Los Angeles Califonia PO, 455001</li>
                                                <li style="font-size: 14px"> </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="jp_listing_overview_list_main_wrapper jp_listing_overview_list_main_wrapper2">
                                        <div class="jp_listing_list_icon">
                                            <i class="fa fa-info-circle"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>Job Open:</li>
                                                <li>141 Jobs</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="jp_listing_overview_list_main_wrapper jp_listing_overview_list_main_wrapper2">
                                        <div class="jp_listing_list_icon">
                                            <i class="fa fa-th-large"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>Category:</li>
                                                <li>Developer</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="jp_listing_overview_list_main_wrapper jp_listing_overview_list_main_wrapper2">
                                        <div class="jp_listing_list_icon">
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>Experience:</li>
                                                <li>4+ Years Experience</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="jp_listing_right_bar_btn_wrapper">
                                        <div class="jp_listing_right_bar_btn">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-plus-circle"></i> &nbsp;Follow Facebook</a></li>
                                                <li><a href="#"><i class="fa fa-plus-circle"></i> &nbsp;Follow NOw!</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }}?>
    <!-- jp listing Single cont Wrapper End -->
    
    <!-- jp downlord Wrapper Start -->
   <?php include("other-links.php");?>
        <!-- jp Newsletter Wrapper End -->
        <!-- jp footer Wrapper Start -->
            <?php include("include/footer.php");?>
    <!-- jp footer Wrapper End -->
    <!--main js file start-->
     <script src="js/bootstrap.js"></script>
    <script src="js/jquery.menu-aim.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/custom_II.js"></script>
     <script src="plugins/sweetalert/sweetalert2.min.js"></script>
    <script src="plugins/sweetalert/sweetalert2-init.js"></script>
    <script src="plugins/nicescroll/jquery.nicescroll.min.js"></script>
    <!--main js file end-->
    <script>
        function initMap() {
        	var uluru = {lat: -36.742775, lng:  174.731559};
        	var map = new google.maps.Map(document.getElementById('map'), {
        	zoom: 15,
        	scrollwheel: false,
        	center: uluru
        	});
        	var marker = new google.maps.Marker({
        	position: uluru,
        	map: map
        	});
        	}
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmdG8C6ItElq5ipuFv6O9AE48wyZm_vqU&amp;callback=initMap">
    </script>
    <script>
    $(function(){
      $('#apply').on('click',function(){
        var jobId=$(this).data('jid');
        console.log(jobId);
        $.ajax({
            type:"POST",
            dataType: "json",
            url:"xhr/job-apply",
            data:{jobId:jobId},
            success:function(response){
              if(response.successMessage){
                swal("success",response.successMessage+"  ..Reloading","success");
                setTimeout(function(){
                    window.location.reload();
                },2000);
              }else if(response.errorMessage){
                 swal("Error",response.errorMessage,"error");
              }
            },
            error:function(error){
                swal("Error","Something Went Wrong","error");
            }
        });
      });
    });
    </script>
    <script>
  function downloadAdvertisement(url) {
      window.location.href = url;
  }

  function displayMessage() {
     
      document.getElementById('message').style.display = 'block';
  }

    function resize(){
        const viewport=window.innerWidth;
        const addvertisement=document.querySelector('.interview');
        const apply=document.querySelector('.apply');

        if(viewport<380){
            addvertisement.style.width='100px';
            addvertisement.style.padding='0px 4px';
            addvertisement.style.fontSize = '10px';
            apply.style.width='60px';
        }else{
            addvertisement.style.width='120px';
            addvertisement.style.padding='0px 2px';
            apply.style.width='80px';
        }
    }
    window.addEventListener('load',resize);

  </script>

</body>

</html>