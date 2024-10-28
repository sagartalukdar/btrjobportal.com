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
</style>
	<!-- Custom CSS -->
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="custom.css">
</head>

<body>
	<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div id="preloader" class="preloader">
        <div class='inner'>
            <div class='line1'></div>
            <div class='line2'></div>
            <div class='line3'></div>
        </div>
    </div>
     <style type="text/css">
    	/* Define a CSS class for the input field with the GIF icon */
.with-icon {
    background-image: url('img/user.gif'); /* Replace with the path to your GIF */
    background-size: 40px 40px; /* Adjust the size of the GIF as needed */
    background-repeat: no-repeat;
    background-position: 10px center; /* Adjust the positioning as needed */
    padding-left: 50px; /* Adjust padding to make room for the icon */
}
.with-icon2 {
    background-image: url('img/password.gif'); /* Replace with the path to your GIF */
    background-size: 40px 40px; /* Adjust the size of the GIF as needed */
    background-repeat: no-repeat;
    background-position: 10px center; /* Adjust the positioning as needed */
    padding-left: 50px; /* Adjust padding to make room for the icon */
}
.with-icon3 {
    background-image: url('img/email.gif'); /* Replace with the path to your GIF */
    background-size: 40px 40px; /* Adjust the size of the GIF as needed */
    background-repeat: no-repeat;
    background-position: 10px center; /* Adjust the positioning as needed */
    padding-left: 50px; /* Adjust padding to make room for the icon */
}
.with-icon4 {
    background-image: url('img/phone.gif'); /* Replace with the path to your GIF */
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
	<section class="fxt-template-animation fxt-template-layout10">
		<div class="container-fluid">
			<div class="row">
				
				<div class=" col-sm-5 col-md-3 col-lg-3 col-xl-3 col-12 order-md-1 fxt-bg-color">
					<div class="fxt-content">
						<div class="fxt-header">
						<a href="../index" class="fxt-logo"><img src="../images/btr-logo.png" alt="Logo" style="max-width: 130px"></a>
						
					</div>
						<div class="fxt-form">
							<h2>Forgot Password?</h2>
							<p style="color: #00abff;">You can reset your password here.</p>
							<form method="POST" id="myform" action="" >
								<div class="form-group">
								    <div class="fxt-transformY-50 fxt-transition-delay-3">
								    	<select name="userType" id="userType" class="form-control with-icon1" required="required">
								    		<!-- <option value="" hidden>Sign in as a </option> -->
								    		<option value="" selected disabled>Select role</option>   
								    		 <option value="ADMIN">ADMIN</option> 
								    		<option value="APPLICANT">Job Seeker </option>
								    		 <option value="COUNSELLOR">Counsellor </option> 
								    		<option value="COMPANY">Company/Employer </option>
								    	</select>
								       <span class="down-greater-than">&#x25BC;</span>

								    </div>
								</div>
								<!-- <div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-3">
										<input type="text" class="form-control with-icon" id="name" name="name" placeholder="Name" >
									</div>
								</div> -->
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-3">
										<input type="email" id="email" class="form-control with-icon3" name="email" placeholder="Email Address" >
										<span id="email-error" class="error-message"></span>
										<button type="button" id="email-btn" style="margin-top: 10px" name="submit" class="verify_email">Verify email </button>
                                        <button type="button" id="loading" style="margin-top: 10px" name="submit" class="verify_email">Loading.... </button>
									</div>


                                            <div id="otp-form" class="col-md-12 col-12 order-md-2" style="    margin-top: 10px; ">

                                                <form action="" method="post"  >
                                                    
                                                        
                                                        <div class=" col-12" style="margin: 10px 0; display: inline-block;">
                                                    <input type="text" id="otp" class="form-control with-icon3" name="otp" placeholder="Enter OTP" >
                                                    </div> 

                                                    <div class=" col-6 " style="margin: 15px;">
                                                    <button type="submit" name="otp-submit"  id="otp-submit"      class="verify_email">Enter</button>
                                                        </div>
                                                
                                             
                                                 <div id="some_div" style="color: #ff0000;"></div>
                                                
                                                 <a style="color: #0d6efd;" name="otp-resend" id="otp-resend"  href="javascript:void()"> Resend OTP</a>
                                                </form>

                                            </div>

								</div>

                             <div class="hide-input">

                                    <div class="form-group">
                                        <div class="fxt-transformY-50 fxt-transition-delay-4">
                                            <input id="password" type="password" class="form-control with-icon2" name="password" placeholder="Enter your new password" >
                                            <i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="fxt-transformY-50 fxt-transition-delay-4">
                                            <input id="re-password" type="password" class="form-control with-icon2" name="re-password" placeholder="Confirm Password" >
                                            <i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
                                            <span id="password-mssg" class="error-message"></span>
                                            <p id="password-mssg" ></p>
                                        </div>
                                    </div>

                             </div>
								<!-- <div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-3">
										<div class="fxt-checkbox-area">
											<div class="checkbox">
												<input id="checkbox1" type="checkbox">
												<label for="checkbox1" style="color: #0d6efd;">Keep me logged in</label>
											</div>
										</div>
									</div>
								</div> -->
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-5">
										<div class="text-center">
											<button type="" id="register" class="fxt-btn-fill">Change </button>
											<button type="" id="register2" class="fxt-btn-fill">Change </button>
											 <p id="formErrorMessage" style="color:red"></p>
										</div>
										<!--<p>Already have an account?<a style="color: #0d6efd;" href="login"> Login Here</a></p>-->
										
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
            	<div class="col-sm-7 col-lg-9 col-xl-9 col-12 order-md-2 fxt-bg-img" data-bg-image="">
					<!-- slider -->
					<div class="slider">
					    <div class="slide slider1">
					    	<div class="row">
	                          
	                        <div class="col-md-4 col-sm-12">
	                         <h1 class="head animate__animated animate__backInRight animate__delay-0s">Welcome! to BTR job portal</h1>
	                         <p class="animate__animated animate__zoomIn animate__delay-0.5s">portal for job seeker and job provider</p>
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
        #email-btn , .hide-input, #otp-form,#register,#loading ,#otp-resend{
            display: none;
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
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<!-- Sweet Alert -->
    <script src="../plugins/sweetalert/sweetalert2.min.js"></script>
    <script src="../plugins/sweetalert/sweetalert2-init.js"></script>
    <script src="../plugins/nicescroll/jquery.nicescroll.min.js"></script>

	<script type="text/javascript">
			$(document).ready(function() {
			    $('#myform').submit(function(event) {
			        event.preventDefault(); // Prevent form submission

			        // Perform form validation if needed

			        // Example: Get form data
			        var formData = $(this).serialize();
			        console.log(formData);

			        // Example: Perform AJAX form submission
			        /*
			        $.ajax({
			            url: 'your_server_endpoint',
			            type: 'POST',
			            data: formData,
			            success: function(response) {
			                // Handle success response
			            },
			            error: function(xhr, status, error) {
			                // Handle error response
			            }
			        });
			        */
			    });
			});
	</script>
	<script type="text/javascript">
		document.addEventListener("DOMContentLoaded", function() {
			var form = document.getElementById("myform");
			if (form) {
			    form.reset();
		    }
		});

	</script>
	
		<script>
$(document).ready(function () {
    $('#userType').on('change', function () {
        var userType = $(this).val();
        console.log(userType);
        $('#email-btn').hide();
        $('#email').val(''); 
        $('#email').attr('placeholder','Enter email'); 
        $('#phone').val(''); 
        $('#otp-resend').val(''); 
        $('#otp-submit').val('');
        
       
    });

   
    $('#email').on('blur', function () {
        var email = $(this).val();
        var userType = $('#userType').val(); 
        console.log(userType);
        $.ajax({
            url: 'xhr/validate-email', 
            type: 'POST',
            data: { email: email, userType: userType }, 
            success: function (response) {
                if (response === 'invalid') {
                    $('#email-btn').hide();
                    $('#email-error').text('Invalid Email address').css('color', 'red');
                    $("#register").prop("disabled", true);
                } else if (response === 'exists') {
                    $('#email-btn').show();
                   $('#email-error').text('').css('color', 'red');
                    // $("#register").prop("disabled", false);
                } else if (response === 'invalid user') {
                    $('#email-btn').hide();
                    $('#email-error').text('Please select any role.').css('color', 'red');
                    $("#register").prop("disabled", true);
                } else if(response==='not exists'){
                    $('#email-error').text('No record found for this email').css('color', 'red');
                    $('#email-btn').hide();
                    
                    $('#register').hide();
                    // $('#otp-form').show();
                    // $('.hide-input').show();
                     
                    // $('#email-error').text('').css('color', ''); 
                    // $("#register").prop("disabled", false);
                }
            }
        });
    });


    
   
   

    $('#phone').on('blur', function () {
        var phone = $(this).val();
        var userType = $('#userType').val(); 
        $.ajax({
            url: 'xhr/validate-phone', 
            type: 'POST',
            data: { phone: phone, userType: userType }, 
            success: function (response) {
                if (response === 'invalid') {
                    $('#phone-error').text('Invalid Phone Number').css('color', 'red');
                    $("#register").prop("disabled", true);
                } else if (response === 'exists') {
                    $('#phone-error').text('Phone Number already exists').css('color', 'red');
                    $("#register").prop("disabled", true);
                } else {
                    $('#phone-error').text('').css('color', ''); 
                    $("#register").prop("disabled", false);
                }
            }
        });
    });
});
</script>
	<script>
$(document).ready(function(){
    // Initially hide the email button
    // $('#email-btn').hide();



    $('#email-btn').on('click', function (){
        var email = $("#email").val();
        var formData = new FormData();
        formData.append('email', email);
        
        $('#email-btn').hide();
        $('#loading').show();

        $.ajax({
            url: "xhr/email-otp",
            type: "POST",
            data: formData,
            dataType: "json",
            processData: false,
            contentType: false,
             success: function (response) {
                if (response.successMessage) {
                    // showSuccessMessage ();
                    swal("Success!", response.successMessage);
                    
                    
                    $('#email-btn').hide();
                    $('#otp-form').show();
                   $('#loading').hide();
                   startCountdown();
                    // setTimeout(function () {
                    //     window.location.reload();
                    // }, 3000);

                } else if (response.errorMessage) {
                    swal("Error!", response.errorMessage, "error");
                    $("#add-user-dummy").css("display", "none");
                    $("#add-user").css("display", "inline-block");
                }

            },
            error: function(xhr, status, error) {
                // Handle error here
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'An error occurred while sending the email.'
                });

               
            }
        });
    });



    $('#otp-resend').on('click', function (){
        var email = $("#email").val();
        var formData = new FormData();
        formData.append('email', email);
        
        // $('#otp-form').hide();
        $('#loading').show();

        $.ajax({
            url: "xhr/email-otp",
            type: "POST",
            data: formData,
            dataType: "json",
            processData: false,
            contentType: false,
            success: function (response) {
                if (response.successMessage) {
                    // showSuccessMessage ();
                    swal("Success!", response.successMessage);
                    $('#otp-form').show();
                $('#loading').hide();
                $('#otp-submit').show();
               
               $('#otp-resend').hide();
               $('#some_div').show();
               startCountdown();
                    // setTimeout(function () {
                    //     window.location.reload();
                    // }, 3000);

                } else if (response.errorMessage) {
                    swal("Error!", response.errorMessage, "error");
                    $("#add-user-dummy").css("display", "none");
                    $("#add-user").css("display", "inline-block");
                }

            },
            
            error: function(xhr, status, error) {
                // Handle error here
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'An error occurred while sending the email.'
                });

               
                
            }
        });
    });


    $('#otp-submit').on('click', function (){
        var email = $("#email").val();
        var otp = $("#otp").val();
        var formData = new FormData();
        formData.append('email', email);
        formData.append('otp', otp);

        $.ajax({
            url: "xhr/verify-otp",
            type: "POST",
            data: formData,
            dataType: "json",
            processData: false,
            contentType: false,
            success: function(response) {
                // Parse JSON response
                // var jsonResponse = JSON.parse(response);
                
                // Check if the mail was sent successfully
                if (response.status === 'success') {
                    // Success response
                    
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                       html: `${response.message}`
                    });

                   // $('#email-btn').hide();
                    $('#otp-form').hide();
                    $('#register2').hide();
                    $('#register').show();
                    $('.hide-input').show();
                    $('#email').prop('disabled', true);
                    $('#userType').hide();

                    
                    
                } else if(response.status === 'error')  {
                    // Error response
                  
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                       html: `${response.message}`
                    });
                }
            },
            error: function(xhr, status, error) {
                // Handle error here
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'An error occurred.'
                });

            }
        });
    });
    


});

</script>


<script>
       $(function () {
    $('#register').on('click', function () {
        // Retrieve form values
        var email = $("#email").val();
        var password = $("#password").val();
        var rePassword = $("#re-password").val(); // Updated variable name
        var userType = $("#userType").val();

        // Creating a FormData object for file upload
        var formData = new FormData();
        formData.append('email', email);
        formData.append('password', password);
        formData.append('rePassword', rePassword);
        formData.append('userType', userType);

        // Validating form fields
        if (email === "" || email === null || password === "" || password === null || rePassword === "" || rePassword === null || userType === "" || userType === null) {
            Swal.fire({
                icon: 'error',
                title: 'Registration Error',
                text: 'Fill all the details to continue...'
            });
            return false;
        } else if (password !== rePassword) {
            Swal.fire({
                icon: 'error',
                title: 'Password Mismatch',
                text: 'Passwords do not match. Please check and try again.'
            });
            return false;
        } else {
            // Display the password matching message in the <p> element
            // $("#password-mssg").html("Passwords match!");
            // You can add additional actions or form submission logic here
        }

        $("#register").prop("disabled", true);

        // Making an AJAX request to the server
        $.ajax({
            type: "POST",
            processData: false,
            contentType: false,
            cache: false,
            dataType: "json",
            url: "xhr/forgot-password",
            mimeType: 'multipart/form-data',
            data: formData,
            success: function (response) {
                // Handle the response from the server
                if (response.status === 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Password Changed',
                        showConfirmButton: true,
                        timer: 2000
                    }).then(function () {
                        window.location.href = 'login';
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Registration failed',
                        html: `<span style="color: red;">${response.message}</span>`
                    });
                }
            },
            error: function () {
                Swal.fire({
                    icon: 'error',
                    title: 'Request failed',
                    text: 'Something went wrong'
                });
            },
            complete: function () {
                // Re-enable the button after request completion
                $("#register").prop("disabled", false);
            }
        });
    });
});

    </script>

    <script>
    var timerId;

    function startCountdown() {
        var timeLeft = 120;
        var elem = document.getElementById('some_div');
        clearInterval(timerId);
        timerId = setInterval(countdown, 1000);

        function countdown() {
            if (timeLeft == -1) {
                clearInterval(timerId);
                doSomething();
            } else {
                elem.innerHTML = timeLeft + ' seconds remaining';
                timeLeft--;
            }
        }
    }

    function clearCountdown() {
        clearInterval(timerId);
        var elem = document.getElementById('some_div');
        elem.innerHTML = '';
    }

    function doSomething() {
        document.getElementById('otp-resend').style.display = 'block'; 
        document.getElementById('some_div').style.display = 'none'; 
    }

    function clearAndStartCountdown() {
        clearCountdown();
        startCountdown();
    }

    function clearAllData() {
        clearCountdown();
        var elem = document.getElementById('some_div');
        elem.innerHTML = '';
        document.getElementById('usertype').value = '';
    }

    document.getElementById('usertype').addEventListener('change', function() {
        clearAllData();
        startCountdown();
    });

    document.getElementById('otp-resend').addEventListener('click', function() {
        clearAndStartCountdown();
        document.getElementById('otp-resend').style.display = 'none'; 
        document.getElementById('some_div').style.display = 'block'; 
    });
</script>



</body>

</html>