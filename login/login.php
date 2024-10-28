<?php 
session_start();
if (isset($_SESSION['userType'])) {

header("location:../../btrjob-admin/index");
}
?>
<!doctype html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>BTR Job - Job Portal for Employment Seeker and Recruiter</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="../images/btr-logo.png">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.min.css">
	<!-- Flaticon CSS -->
	<link rel="stylesheet" href="font/flaticon.css">
	<!-- Google Web Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
.with-icon3 {
    background-image: url('img/email.gif'); /* Replace with the path to your GIF */
    background-size: 40px 40px; /* Adjust the size of the GIF as needed */
    background-repeat: no-repeat;
    background-position: 10px center; /* Adjust the positioning as needed */
    padding-left: 50px; /* Adjust padding to make room for the icon */
}
.with-icon1 {
    background-image: url('img/profile.gif'); /* Replace with the path to your GIF */
    background-size: 40px 40px; /* Adjust the size of the GIF as needed */
    background-repeat: no-repeat;
    background-position: 10px center; /* Adjust the positioning as needed */
    padding-left: 50px; /* Adjust padding to make room for the icon */
}
.down-greater-than{
	position: absolute;
  z-index: 1;
  right: 12px;
  top: 50%;
  color: #9f9f9f;
  font-size: 14px;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}
.down-greater-than {
    font-family: Arial, sans-serif; /* Use a font that supports Unicode characters */
}

</style>
	<!-- Custom CSS -->
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="custom.css">
</head>

<body>
	
    <div id="preloader" class="preloader">
        <div class='inner'>
            <div class='line1'></div>
            <div class='line2'></div>
            <div class='line3'></div>
        </div>
    </div>
    
	<section class="fxt-template-animation fxt-template-layout10">
		<div class="container-fluid">
			<div class="row">
				
				<div class="col-md-3 col-12 order-md-1 fxt-bg-color">
					<div class="fxt-content">
						<div class="fxt-header">
						<a href="../index" class="fxt-logo"><img src="../images/btr-logo.png" alt="Logo" style="max-width: 130px"></a>
						
					</div>
						<div class="fxt-form">
							<h2>Login</h2>
							<p style="color: #00abff;font-weight: 500;">( Login with username / password )</p>
							<p class="admin-warning" style="color: red"><?php if (isset($_SESSION['errorLogin'])) {
                            echo $_SESSION['errorLogin'];
                            unset($_SESSION['errorLogin']);

                        } 
                            
                        ?>
                            
                        </p>
							<form method="POST" action="login-process/login-process">

								<div class="form-group">
								    <div class="fxt-transformY-50 fxt-transition-delay-3">
								    	<select name="user-type" class="form-control with-icon1" required="required">
								    		<!-- <option value="" hidden>Sign in as a </option> -->
								    		<option value="" selected disabled>Login as a </option>   
								    		<option value="ADMIN">ADMIN</option>
								    		<option value="APPLICANT">Job Seeker </option>
								    		<option value="COUNSELLOR">Counsellor </option>
								    		<option value="COMPANY">Company/Employer </option>
								    	</select>
								       <span class="down-greater-than">&#x25BC;</span>

								    </div>
								</div>


								<div class="form-group">
								    <div class="fxt-transformY-50 fxt-transition-delay-3">
								        <input type="text" class="form-control with-icon3" name="user-email" placeholder="Email/Mobile" required="required">
								    </div>
								</div>

								
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-4">
										<input id="password" type="password" class="form-control with-icon2" name="user-password" placeholder="********" required="required">
										<i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
									</div>
								</div>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-3">
										<div class="fxt-checkbox-area">
											<div class="checkbox">
												<!--<input id="checkbox1" type="checkbox">-->
												<!--<label for="checkbox1" style="color: #0d6efd;">Keep me logged in</label>-->
												<p><a style="color: #00abff;" href="forgot-password"> Forgot Password ?</a></p>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-5">
										<div class="text-center">
											<button type="submit" class="fxt-btn-fill">Login </button>
											
											
										</div>
										<p>Don't have an account?<a style="color: #0d6efd;" href="register"> Register Here</a></p>
										
									</div>
								</div>
							</form>
						</div>
						<!-- <div class="fxt-footer">
							<ul class="fxt-socials">
								<li class="fxt-facebook fxt-transformY-50 fxt-transition-delay-6">
									<a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
								</li>
								<li class="fxt-twitter fxt-transformY-50 fxt-transition-delay-7">
									<a href="#" title="twitter"><i class="fab fa-twitter"></i></a>
								</li>
								<li class="fxt-google fxt-transformY-50 fxt-transition-delay-8">
									<a href="#" title="google"><i class="fab fa-google-plus-g"></i></a>
								</li>
								<li class="fxt-linkedin fxt-transformY-50 fxt-transition-delay-9">
									<a href="#" title="linkedin"><i class="fab fa-linkedin-in"></i></a>
								</li>
								<li class="fxt-pinterest fxt-transformY-50 fxt-transition-delay-9">
									<a href="#" title="pinterest"><i class="fab fa-pinterest-p"></i></a>
								</li>
							</ul>
						</div> -->
					</div>
				</div>
				<div class="col-md-9 col-12 order-md-2 fxt-bg-img" data-bg-image="">
					<!-- slider -->
					<div class="slider">
					    <div class="slide slider1">
					    	<div class="row">
	                          
	                        <div class="col-md-4 col-sm-12">
	                         <h1 class="head animate__animated animate__backInRight animate__delay-0s">Welcome! to BTR job portal</h1>
	                         <p class="animate__animated animate__zoomIn animate__delay-0.5s">Web Based Platform to bring together job seekers and employers</p>
	                       </div>
	                       <div class="col-8">
	                           <a href="javacript:void(0);" class="fxt-logo"><img class="animate__animated animate__fadeInDown animate__delay-0.5s" src="img/img7.jpg" alt="Logo"></a>
	                        </div>
							</div>
					    </div>
	                   <div class="slide slider2">
	                       <div class="row">
	                          <div class="col-md-6 col-sm-12">

	                           <a href="javacript:void(0)" class="fxt-logo"><img class="animate__animated animate__fadeInDown animate__delay-0.5s" src="img/work.gif" alt="Logo"></a>
	                        </div>
	                        <div class="col-6">
	                        	<img src="img/shape/shp1.png">

	                         <h1 class="head animate__animated animate__backInUp animate__delay-0s">Job Related</h1>
	                         <p class="animate__animated animate__zoomIn animate__delay-0.5s">portal for job seeker and job provider</p>
	                       </div>
	                    </div>

	                    </div>
	                    <div class="slide slider3">
	                    	<div class="row">
	                          <div class="col-6">
	                           <a href="javacript:void(0)" class="fxt-logo"><img class="animate__animated animate__fadeInDown animate__delay-0.5s" src="img/img3.png" alt="Logo"></a>
	                           
	                          </div>
	                           <div class="col-6">
	                         <h1 class="head animate__animated animate__backInRight animate__delay-0s">All kinds of JOB</h1>
	                         <p class="animate__animated animate__zoomIn animate__delay-0.5s">Skill basis jobs</p>
	                         <ul>
	                         	<li><i class='fa  fa-check' style='color: green'></i> Electrician</li>
	                         	<li><i class='fa  fa-check' style='color: green'></i> Computer Operator</li>
	                         	<li><i class='fa  fa-check' style='color: green'></i> Technician</li>
	                         	<li><i class='fa  fa-check' style='color: green'></i> Fitter</li>
	                         </ul>
	                          
	                          </div>
	                      </div>
	                   
	                    </div>
	                </div>

					<!-- slider ends -->
					
					
				</div>
			</div>
		</div>
	</section>
	<style type="text/css">
	
		.slider .slide {
		    display: none;
		}

		.slider .slider1 {
		    display: block;
		}


	</style>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function () {
    // Function to rotate the slides with "fade out up" effect
    function rotateSlides() {
        var currentSlide = $('.slider .slide:visible');
        var nextSlide = currentSlide.next('.slide');
        
        if (nextSlide.length === 0) {
            nextSlide = $('.slider .slide:first');
        }
        
        // Apply "fade out up" effect
        currentSlide.animate({
            opacity: 0,  // Fading out
            marginTop: '-150px'  // Moving up by 20 pixels
        }, 500, function () {
            currentSlide.hide();  // Hide the current slide after the animation
            nextSlide.css({ opacity: 0, marginTop: '20px' }); // Prepare the next slide
            nextSlide.show();  // Show the next slide
            // Apply "fade in down" effect to the next slide
            nextSlide.animate({
                opacity: 1,  // Fading in
                marginTop: '0'  // Moving down to the normal position
            }, 500);
        });
    }

    // Rotate the slides every 5 seconds (adjust the time interval as needed)
    setInterval(rotateSlides, 5000);
});

</script>


	
	<!-- jquery-->
	<script src="js/jquery.min.js"></script>
	<!-- Bootstrap js -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Imagesloaded js -->
	<script src="js/imagesloaded.pkgd.min.js"></script>
	<!-- Validator js -->
	<script src="js/validator.min.js"></script>
	<!-- Custom Js -->
	<script src="js/main.js"></script>
<script>
    $('#loginbtn').on('click', function (event) {
    event.preventDefault();

    var username = $("#user-name").val();
    var password = $("#user-password").val();

    $.ajax({
        type: 'POST',
        url: 'session/session',
        data: {
            username: username,
            password: password
        },
        success: function (response) {
            var result = JSON.parse(response);
            if (result.status === 'success') {
                Swal.fire({
                    icon: 'success',
                    title: 'Login successful',
                    showConfirmButton: true, 
                    timer: 2000 
                }).then(function() {
                    window.location.href = 'index';
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Login failed',
                    html: `<span style="color: red;">${result.message}</span>`
                });
            }
        },
        error: function () {
            // Handle the error if AJAX fails
            console.error('Failed to process the request.');
            Swal.fire({
                icon: 'error',
                title: 'An error occurred',
            });
        }
    });
});

</script>
</body>

</html>