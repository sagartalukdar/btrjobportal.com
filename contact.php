<?php include("include/head.php");?>

<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />-->


<!-- sweet alert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
<body>
    <!-- preloader Start -->
    <!-- <div id="preloader">
        <div id="status"><img src="images/header/load.gif" id="preloader_image" alt="loader">
        </div>
    </div> -->
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
        <div class="container">
            <div class="row">
                
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <!--<div class="jp_contact_right_box_wrapper">-->
                        <div class="jp_contact_form_heading_wrapper">
                            <h2>Head Office</h2>
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
                    <!--</div>-->
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d914862.4770616897!2d89.04715467812498!3d26.401474000000015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37588aa39404bfa1%3A0x2647d2173616c221!2sBodoland%20Secretariat!5e0!3m2!1sen!2sin!4v1698912512338!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                
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

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="jp_contact_form_box">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="jp_contact_inputs_wrapper">
                                    <i class="fa fa-user"></i><input type="text" placeholder="Name *" id="name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="jp_contact_inputs_wrapper jp_contact_inputs2_wrapper">
                                    <i class="fa fa-envelope"></i><input type="text" placeholder="Email *" id="email">
                                    <p class="emailError" style="color: red;"></p>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="jp_contact_inputs_wrapper jp_contact_inputs3_wrapper">
                                    <i class="fa fa-pencil-square-o"></i><input type="text" placeholder="Subject" id="subject">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="jp_contact_inputs_wrapper jp_contact_inputs4_wrapper">
                                    <i class="fa fa-text-height"></i><textarea rows="6" id="message" placeholder="Type Your Message *"></textarea>
                                </div>
                                <p class="formError" style="color: red;"></p>
                                        <button id="send-mail" class="btn btn-primary" style="border: none;">send</button>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="jp_contact_form_btn_wrapper">
                                    <ul>
                                        
                                        </button>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>              
                
            </div>
        </div>

        <!-- notification -->
        <div class="notification">
           
        </div>
        <!-- notification -->

        <!-- notification css -->
        <style>
            .notification{
                position: fixed;
                top: 30px;
                right: 30px;
            }
            .toast{
                position: relative;
                padding: 20px;
                color: #ffffff;
                margin-bottom: 10px;
                width: 400px;
                display: grid;
                grid-template-columns: 70px 1fr 70px;
                border-radius: 5px;
                --color: #0af10a;
                background: 
                linear-gradient(
                  to right,#0ac00a,#272222 30%
                );
                animation: show 3s ease-in-out 1 forwards;
            }
            .toast i{
                color: var(--color);
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: x-large;
            }
            .toast .title{
                font-size: x-large;
                font-weight: bold;
            }
            .toast span{
                color: #fff;
                opacity: 0.6;
            }

            @keyframes show{
                0%{
                    transform: translateX(100%);
                }
                40%{
                    transform: translateX(-5%);
                }
                80%{
                    transform: translateX(0%);
                }
                100%{
                    transform: translateX(-10%);
                }
            }

            .toast::before{
                position: absolute;
                bottom: 0;
                left: 0;
                background-color: var(--color);
                width: 100%;
                height: 3px;
                content: '';
                box-shadow: 0 0 10px var(--color);
                animation: timeout 5s linear 1 forwards;
            }
            @keyframes timeout {
                to{
                    width: 0;
                }
            }
        </style>
        <!-- notification css -->

        <!-- notification js -->
        <!-- <script>
            function createToast(type,icon,title,text){
              let newToast=document.createElement('div');
              newToast.innerHTML=`
                <div class="toast ${type}">
                <i class="${icon}"></i>
                <div class="content">
                    <div class="title">${title}</div>
                    <span>${text}</span>
                </div>
                <i class="fa-solid fa-xmark" onclick="(this.parentElement).remove();"></i>
                </div>
              `;
              notification.appendChild(newToast);
              newToast.timeOut=setTimeout(
                ()=>newToast.remove(),5000
              )
            }
            
            var notification=document.querySelector('.notification');
            var mailBtn=document.getElementById('send-mail');
            mailBtn.addEventListener('click',function(){
               let type='success';
               let icon='fa-solid fa-circle-check';
               let title="Successfull";
               let text="Mail sent successfully."
               createToast(type,icon,title,text);
            })

        </script> -->
        <!-- notification js -->
    
     <!-- jp Newsletter Wrapper Start -->
    <div class="jp_main_footer_img_wrapper">
        <div class="jp_newsletter_img_overlay_wrapper"></div>
        <!-- jp footer Wrapper Start -->
        <?php include("include/footer");?>
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


    
    <script>
        $(function(){
            $('#send-mail').on('click', function(e){
                // e.preventDefault();
                var name = $('#name').val();
                var email = $('#email').val();
                var subject = $('#subject').val();
                var message = $('#message').val();
        
                var formData = new FormData();
                formData.append('name', name);
                formData.append('email', email);
                formData.append('subject', subject);
                formData.append('message', message);
                formData.append('mail', "mail");
        
                if (name === "" || email === "" || subject === "" || message === "") {
                    $('.formError').html('Fill all details to send mail.');
                } else {
                    function validateEmail($email) {
                        var emailCheck = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                        return emailCheck.test($email);
                    }
                    if (!validateEmail(email)) {
                        $('.emailError').html("Invalid email. Please provide a valid email address.");
                        $('#email').focus();
                    } else {
                        $('.emailError').html("");
                        $('.formError').html("");
                        $.ajax({
                            type: 'post',
                            processData: false,
                            contentType: false,
                            cache: false,
                            dataType: 'json',
                            url: 'xhr/contact-mail',
                            data: formData,
                            success: function(data) {
                                if (data.successMessage) {
                                    console.log('Success: ' + data.successMessage);
                                    createToast('success', 'fa-solid fa-circle-check', 'Successful', 'Mail sent successfully.');

                                    setTimeout(() => {
                                        window.location.reload();
                                    }, 5000);

                                } else if (data.errorMessage) {
                                    console.log('Error: ' + data.errorMessage);
                                    swal("Error !", data.errorMessage, "error");
                                }
                            },
                            error: function(error) {
                                console.log('Error: Something went wrong');
                                createToast('error', 'fa-solid fa-circle-check', 'Error', 'Something went wrong while sending mail.');
                                setTimeout(() => {
                                        window.location.reload();
                                }, 5000);
                            }
                        });
                    }
                }
            });
        
            function createToast(type, icon, title, text) {
                let newToast = $(`
                    <div class="toast ${type}">
                        <i class="${icon}"></i>
                        <div class="content">
                            <div class="title">${title}</div>
                            <span>${text}</span>
                        </div>
                        <i class="fa-solid fa-xmark close-toast"></i>
                    </div>
                `);
                $('.notification').prepend(newToast);
                setTimeout(() => newToast.remove(), 2000);
            }
        
            $(document).on('click', '.close-toast', function() {
                $(this).closest('.toast').remove();
            });
        });
        </script>

</body>

</html>