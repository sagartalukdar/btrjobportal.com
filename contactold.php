<?php include("include/head.php");?>

</head>
<body>
    <!-- preloader Start -->
    <div id="preloader">
        <div id="status"><img src="images/header/load.gif" id="preloader_image" alt="loader">
        </div>
    </div>
    <!-- Top Scroll End -->
    <!-- Top Header Wrapper Start -->
   <?php include("include/header.php");?>
    <!-- Top Header Wrapper End -->
    <!-- navbar Wrapper Start -->
     <?php include("include/navbar.php");?>
    <!-- navbar Wrapper End -->
    <!-- Header Wrapper End -->
    
    <!-- jp Contact heading Wrapper End -->
    <!-- jp Contact form Wrapper Start -->
    <div class="jp_contact_form_main_wrapper">
        <div class="container-fluid">
            <div class="row">
                
                <div class="col-lg-6 col-md-4 col-sm-12 col-xs-12">
                    <div class="jp_contact_right_box_wrapper">
                        <div class="jp_contact_form_add_heading_wrapper">
                          <h2>Head office</h2>
                        </div>
                        <div class="jp_form_add_wrapper gc_map_add_wrapper1">
                            <div class="jp_job_post_right_cont">
                                                               
                                <p>
                                <img src="images/icon/office.gif" style="max-width: 32px">
                                Bodoland Secretariat</p>
                                <ul>
                                    <li style="color: black"><img src="images/icon/location.gif" style="max-width: 32px">&nbsp; Bodoland Secretatriat, Kokrajhar 783370, BTR (Assam)</li>
                                    <!-- <li><img src="images/icon/phone.gif" style="max-width: 32px">&nbsp; +91 8968745268</li> -->
                                    <li style="color: black"><img src="images/icon/email.gif" style="max-width: 32px">&nbsp; contact@btrjobportal.com</li>
                                   
                                </ul>
                           </div>
                                                               
                        </div>
                        
                        <div class="jp_contact_form_social_icon">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li class="hidden-xs"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li class="hidden-xs"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
                    
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d914862.4770616897!2d89.04715467812498!3d26.401474000000015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37588aa39404bfa1%3A0x2647d2173616c221!2sBodoland%20Secretariat!5e0!3m2!1sen!2sin!4v1698912512338!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    
                </div>
                
            </div>
        </div>
    </div>
    <!-- jp Contact form Wrapper End -->
    <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_contact_form_heading_wrapper">
                        <h2>Leave A Message</h2>
                    </div>
                </div>

                <form action="" method="post">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="jp_contact_form_box">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="jp_contact_inputs_wrapper">
                                    <i class="fa fa-user"></i><input type="text" placeholder="Name *" name="name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="jp_contact_inputs_wrapper jp_contact_inputs2_wrapper">
                                    <i class="fa fa-envelope"></i><input type="text" placeholder="Email *" name="email">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="jp_contact_inputs_wrapper jp_contact_inputs3_wrapper">
                                    <i class="fa fa-pencil-square-o"></i><input type="text" placeholder="Subject" name="subject">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="jp_contact_inputs_wrapper jp_contact_inputs4_wrapper">
                                    <i class="fa fa-text-height"></i><textarea rows="6" placeholder="Type Your Message *" name="message"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="jp_contact_form_btn_wrapper">
                                   
                                        <button type="submit" name="submit" style="border: none;"><li class="btn btn-danger btn-lg"><i class="fa fa-plus-circle"></i>&nbsp; SEND</li>
                                        </button>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </form>



                <!-- contact mail -->

                
            <?php

            if(isset($_POST['submit'])){
            $name=$_POST['name'];
            $subject=$_POST['subject'];
            $email=$_POST['email'];
            $msg=$_POST['message'];

                if(!empty("$name")&& !empty("$subject")&& !empty("$email")&& !empty("$msg")){
                    $from = "contact@btrseedmission.com";                        
                    $to = $_POST['email']; 
                    $subject =$_POST['subject']; 
                   
                    $message =" My Name is: ". $name. "My Contact Details are as follows: ". $email." and my message is :".$msg. "<br>Please see out my message.";
                $headers = 'From: '.$email       . "\r\n" .
                            'Reply-To: '.$email . "\r\n" .
                            'X-Mailer: PHP/' . phpversion();
                    $header = "From:".$from." \r\n";  
                    $header .= "MIME-Version: 1.0 \r\n";  
                    $header .= "Content-type: text/html;charset=UTF-8 \r\n"; 
    
                ini_set('max_execution_time', 600); ini_set('memory_limit','1024M');   
                $result = mail ($to,$subject,$message,$header); 
                    if($result == true){
                        echo "The mail has been sent";
                        // header("location: join-trader.php");
        
                    } else {
                        echo "The mail could not be sent";
                        // header("location: join-trader.php");
                        echo $name, $mobile_no,$email,$msg;
                    }
                }
            }

            ?>
            
                   
                    <!--$subject = "BTR SEED Mission Logo Competition 2023";  -->
                    <!--$message = "<h2>Entry Recieved!</h2>";  -->
                    <!--$message .= "<h3>Hello! <b>$username</b>, <br>Thanks for participating in BTR SEED Mission Logo Competition 2023. We have received your entry. For result, please stay tuned on the website https://btrseedmission.com .</h3>";  -->
                    
                    <!--$header = "From:".$from." \r\n";  -->
                    <!--$header .= "MIME-Version: 1.0 \r\n";  -->
                    <!--$header .= "Content-type: text/html;charset=UTF-8 \r\n";  -->
                    
                    <!--$result = mail ($to,$subject,$message,$header);  -->
                    
                    <!--if( $result == true ){  -->
                    <!--    echo '<script>window.location.assign("../sucess.php");</script>';-->
                    <!--}else{  -->
                    <!--     echo "Sorry, unable to send mail...";  -->
                    <!--     echo '<script>window.location.assign("../index.php");</script>';-->
                    <!--}  -->


                
                
            </div>
        </div>
    
     <!-- jp Newsletter Wrapper Start -->
    <div class="jp_main_footer_img_wrapper">
        <div class="jp_newsletter_img_overlay_wrapper"></div>
        <!-- jp footer Wrapper Start -->
        <?php include("include/footer.php");?>
    <!-- jp footer Wrapper End -->
    <!--main js file start-->
    <script src="js/jquery_min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.menu-aim.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/custom_II.js"></script>
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
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBctr8WYTfFDi_oGbPEolSDzn4VZaAKVK0&amp;callback=initMap">
    </script>

    <!-- send mail -->


</body>

</html>